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

<!-- SHIPPING MODAL -->
<div id="shippingModal" class="fixed inset-0 bg-black/40 hidden items-center justify-center">
  <div class="bg-white rounded-lg w-[600px] p-5 relative">
    <button onclick="closeShippingModal()" class="absolute right-3 top-2 text-xl">×</button>
    <h3 class="font-semibold mb-4">Shipping Details</h3>
    <div id="shippingDetails"></div>
  </div>
</div>

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
<tr><th>Product</th><th>Qty</th><th>Total</th></tr>
</thead>
<tbody>${items}</tbody>
</table>

</div>

</div>

<div class="space-y-5">

<div class="card p-5">
<h3 class="font-semibold mb-3">Shipping</h3>

<div class="text-sm space-y-2">
<div><b>Status:</b> ${order.shipping.shipping_status}</div>
<div><b>By:</b> ${order.shipping.shipping_by}</div>
<div><b>AWB:</b> ${order.shipping.shipping_delivery_id ?? "—"}</div>

<button onclick="openShippingModal()" class="btn btn-sm btn-light mt-2">
View Details
</button>

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
function openShippingModal(){

const s = currentOrder.shipping;

const address = s.address;

document.getElementById("shippingDetails").innerHTML = `

<div class="space-y-2 text-sm">

<div><b>Name:</b> ${address.name}</div>
<div><b>Mobile:</b> ${address.mobile}</div>
<div><b>Address:</b> ${address.address_line_1}</div>
<div>${address.city}, ${address.state} - ${address.pincode}</div>
<div>${address.country}</div>

<hr>

<div><b>Shipping Status:</b> ${s.shipping_status}</div>
<div><b>Courier:</b> ${s.shipping_by}</div>
<div><b>AWB:</b> ${s.shipping_delivery_id ?? "—"}</div>

<hr>

<div class="text-xs bg-gray-100 p-2 rounded overflow-auto">
${s.response_ ? JSON.stringify(JSON.parse(s.response_),null,2) : "No response"}
</div>

</div>
`;

document.getElementById("shippingModal").classList.remove("hidden");
document.getElementById("shippingModal").classList.add("flex");
}

function closeShippingModal(){
document.getElementById("shippingModal").classList.add("hidden");
}
</script>
<?php include("../footer.php"); ?>