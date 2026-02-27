<base href="../">
<?php include("../header.php"); ?>

<main class="grow content pt-5">
<div class="container-fixed">

<div class="flex justify-between mb-5">
  <h1 class="text-xl font-semibold">Order Details</h1>
  <a href="orders/" class="btn btn-sm btn-light">← Back</a>
</div>

<div id="order_view">Loading...</div>

</div>
</main>

<script>
const token = localStorage.getItem("auth_token");
const params = new URLSearchParams(window.location.search);
const orderCode = params.get("code");

let currentOrder = null;

document.addEventListener("DOMContentLoaded", fetchOrder);

async function fetchOrder() {

  const res = await fetch("<?= $baseUrl ?>/api/admin/order/get-order", {
    method:"POST",
    headers:{
      "Content-Type":"application/json",
      "Authorization":`Bearer ${token}`
    },
    body:JSON.stringify({order_code:orderCode})
  });

  const data = await res.json();
  currentOrder = data.data[0];

  renderOrder(currentOrder);
}
</script>

<script>
function renderOrder(order){

const invoiceBtn = order.invoice?.invoice_link
  ? `<a target="_blank" href="${order.invoice.invoice_link}" class="btn btn-sm btn-success">View Invoice</a>`
  : `<button class="btn btn-sm btn-secondary" disabled>No Invoice</button>`;

const items = order.items.map(i=>`
<tr>
    <td class="flex items-center gap-3">
        <img src="${i.image_link ?? i.product.image?.upload_url}" class="w-12 h-12 rounded">
        <div>
            <div>${i.product.name}</div>
            <div class="text-xs text-gray-500">${i.color} / ${i.size}</div>
        </div>
    </td>
    <td>${i.quantity}</td>
    <td>₹${i.total}</td>
</tr>`).join("");

document.getElementById("order_view").innerHTML = `

<div class="grid lg:grid-cols-3 gap-5">

    <div class="lg:col-span-2 space-y-5">
        <div class="card p-5">
            <h3 class="font-semibold mb-3">Update Status</h3>

            <div class="flex gap-3">

                <select id="shipping_status" class="select">
                    <option ${order.shipping.shipping_status=="Pending"?"selected":""}>Pending</option>
                    <option ${order.shipping.shipping_status=="Approved"?"selected":""}>Approved</option>
                    <option ${order.shipping.shipping_status=="Completed"?"selected":""}>Completed</option>
                </select>

                <select id="order_status" class="select">
                    <option ${order.order_status=="pending"?"selected":""}>pending</option>
                    <option ${order.order_status=="confirmed"?"selected":""}>confirmed</option>
                    <option ${order.order_status=="completed"?"selected":""}>completed</option>
                    <option ${order.order_status=="cancelled"?"selected":""}>cancelled</option>
                </select>

                <button onclick="updateStatus()" class="btn btn-primary btn-sm">Update</button>

            </div>
        </div>

        <div class="card p-5">
            <h3 class="font-semibold mb-3">Items</h3>

            <table class="table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Qty</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>${items}</tbody>
            </table>
        </div>
    </div>

    <div class="space-y-5">
        <div class="card p-5">
            <h3 class="font-semibold mb-3">Customer</h3>

            <div class="text-sm space-y-1">
                <div class="font-medium">${order.user?.name ?? "Guest"}</div>
                <div class="text-gray-500">${order.user?.email ?? ""}</div>
                <div>${order.user?.mobile ?? ""}</div>
            </div>
        </div>
    </div>

    <div class="card p-5">
        <div class="space-y-5">
            <h3 class="font-semibold mb-3">Shipping</h3>

            <div class="text-sm space-y-2">
                <div>
                    <b>Status:</b> ${order.shipping.shipping_status}
                </div>
                <div>
                    <b>By:</b> ${order.shipping.shipping_by}
                </div>
                <div>
                    <b>AWB:</b> ${order.shipping.shipping_delivery_id ?? "—"}
                </div>

                <button onclick="openShippingModal()" class="btn btn-sm btn-light mt-2">
                    View Details
                </button>
            </div>
        </div>
    </div>
    <div class="card p-5">
        <h3 class="font-semibold mb-3">Order Info</h3>

        <div class="text-sm space-y-2">
            <div><b>Order Code:</b> ${order.order_code}</div>
            <div><b>Date:</b> ${order.created_at}</div>
            <div><b>Payment:</b> ${order.payment_type}</div>
            <div class="mt-3">${invoiceBtn}</div>
        </div>
    </div>

    <div class="card p-5">
        <div class="flex justify-between font-semibold text-lg">
            <span>Total</span>
            <span>₹${order.grand_total}</span>
        </div>
    </div>

</div>
</div>
`;
}
</script>
<script>
async function updateStatus(){

const shipping = document.getElementById("shipping_status").value;
const order_status = document.getElementById("order_status").value;

const res = await fetch(
`<?= $baseUrl ?>/api/admin/order/update-status/${currentOrder.id}`,
{
method:"PUT",
headers:{
"Content-Type":"application/json",
"Authorization":`Bearer ${token}`
},
body:JSON.stringify({shipping,order_status})
});

const data = await res.json();
alert(data.message);
fetchOrder();
}
</script>
<script>
    function getShippingBadge(status){
        if(!status) return "—";

        const s = status.toLowerCase();

        let color = "badge-secondary";

        if(s==="pending") color="badge-warning";
        if(s==="approved") color="badge-info";
        if(s==="completed") color="badge-success";

        return `<span class="badge ${color}">${status}</span>`;
    }

function openShippingModal(){

    const s = currentOrder.shipping || {};
    const address = s.address || {};

    const shiprocketResponse = s.response_
    ? `<pre class="bg-gray-100 p-3 rounded text-xs overflow-auto max-h-[250px] text-left">${JSON.stringify(JSON.parse(s.response_), null, 2)}</pre>`
    : `<div class="text-gray-400 text-sm">No response available</div>`;

    Swal.fire({
    title: `<div class="text-lg font-semibold">Shipping Details</div>`,
    width: 800,
    confirmButtonText: "Close",
    html: `

    <div class="text-left space-y-5">

        <!-- ADDRESS -->
        <div>
        <div class="font-semibold mb-2">📍 Delivery Address</div>

        <div class="grid grid-cols-2 gap-3 text-sm">

            <div><b>Name:</b><br>${address.name ?? "—"}</div>
            <div><b>Mobile:</b><br>${address.mobile ?? "—"}</div>

            <div class="col-span-2">
            <b>Email:</b><br>${address.email ?? "—"}
            </div>

            <div class="col-span-2">
            <b>Address:</b><br>
            ${address.address_line_1 ?? ""}
            ${address.city ?? ""}, ${address.state ?? ""} - ${address.pincode ?? ""}
            <br>${address.country ?? ""}
            </div>

        </div>
        </div>

        <!-- SHIPPING INFO -->
        <div>
        <div class="font-semibold mb-2">🚚 Shipping Info</div>

        <div class="grid grid-cols-3 gap-3 text-sm">

            <div>
            <b>Status</b><br>
            ${getShippingBadge(s.shipping_status)}
            </div>

            <div>
            <b>Courier</b><br>
            ${s.shipping_by ?? "—"}
            </div>

            <div>
            <b>AWB</b><br>
            ${s.shipping_delivery_id ?? "—"}
            </div>

        </div>
        </div>

        <!-- SHIPROCKET RESPONSE -->
        <div>
        <div class="font-semibold mb-2">📦 Shiprocket Response</div>
        ${shiprocketResponse}
        </div>

    </div>
    `
    });
}


function closeShippingModal(){
document.getElementById("shippingModal").classList.add("hidden");
}
</script>
<?php include("../footer.php"); ?>