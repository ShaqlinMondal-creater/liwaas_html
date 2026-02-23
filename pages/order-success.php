<base href="../">
<?php include("../header.php"); ?>

<style>
@keyframes pulse-glow{
  0%,100%{box-shadow:0 0 0 0 rgba(34,197,94,.45)}
  50%{box-shadow:0 0 0 12px rgba(34,197,94,0)}
}
.glow-badge{animation:pulse-glow 2.5s ease-out infinite}
</style>

<div class="fixed inset-0 -z-10 pointer-events-none">
  <img src="assets/aqeeq_png.png" class="w-full h-full object-cover blur-xl"/>
</div>

<main class="max-w-3xl mx-auto px-4 py-14 sm:py-20">

<!-- ✅ STATUS -->
<section class="text-center mb-4">
  <div id="status-badge"
       class="w-24 h-24 mx-auto mb-8 rounded-full bg-green-100 flex items-center justify-center glow-badge">
       <i data-lucide="check" class="w-12 h-12 text-green-600"></i>
  </div>

  <h1 id="order-title" class="text-3xl sm:text-4xl font-extrabold mb-3"></h1>
  <p id="order-subtitle" class="text-gray-600"></p>

  <div id="pay-now-wrapper" class="mt-6 hidden">
    <button onclick="retryPayment()"
      class="px-6 py-3 bg-[#c7aa28] text-white rounded-lg font-medium hover:opacity-90">
      Pay Now
    </button>
  </div>
</section>

<!-- ✅ ORDER CARD -->
<section class="bg-white rounded-3xl shadow-lg ring-1 ring-black/5 mb-12 overflow-hidden">

<header class="px-6 py-5 border-b flex justify-between">
  <div>
    <p id="order-code" class="text-sm text-gray-500 font-bold"></p>
    <p id="order-date" class="font-medium text-gray-800"></p>
  </div>
  <a href="pages/profile?tab=orders" class="text-sm text-blue-600">View Order Details →</a>
</header>

<ul id="order-items" class="px-6 py-5 divide-y"></ul>

<footer class="px-6 py-5 bg-gray-50">
  <div class="flex justify-between"><span>Subtotal</span><span id="summary-subtotal"></span></div>
  <div class="flex justify-between"><span>Shipping</span><span id="summary-shipping"></span></div>
  <div class="flex justify-between"><span>Tax</span><span id="summary-tax"></span></div>
  <div class="flex justify-between font-bold border-t pt-2">
    <span>Total</span><span id="summary-total"></span>
  </div>
</footer>

</section>

<!-- ✅ SHIPPING -->
<section class="bg-white rounded-3xl shadow-lg ring-1 ring-black/5 mb-6 p-6 text-sm">
<h2 class="font-bold mb-4">Shipping Information</h2>

<p id="ship-name" class="font-medium text-gray-800"></p>
<p id="ship-line1"></p>
<p id="ship-line2"></p>
<p>
  <span id="ship-city"></span>,
  <span id="ship-state"></span>,
  <span id="ship-pincode"></span>
</p>
<p id="ship-country"></p>

<p class="mt-3">
  <b id="shipping-type"></b> | <span id="shipping-status"></span>
</p>
</section>

<!-- ✅ PAYMENT -->
<section class="bg-white rounded-3xl shadow-lg ring-1 ring-black/5 mb-10 p-6 text-sm">

<h2 class="font-bold mb-4">Payment Details</h2>

<p id="payment-method"></p>
<p>ID: <span id="transaction-id" class="font-bold"></span></p>
<p>Status: <span id="payment-status" class="font-bold"></span></p>
<p class="font-bold" id="amount-charged"></p>

</section>

</main>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
const baseUrl   = "<?= $baseUrl ?>";
const authToken = localStorage.getItem("auth_token");

const orderId = new URLSearchParams(location.search).get("order_id");
if (!orderId) location.href = baseUrl;

let paymentAction = null;

fetchOrder();

async function fetchOrder(){
  const res = await fetch(`${baseUrl}/api/customer/order/get-order-detail`,{
    method:"POST",
    headers:{
      "Authorization":`Bearer ${authToken}`,
      "Content-Type":"application/json"
    },
    body:JSON.stringify({order_id:orderId})
  });

  const result = await res.json();
  if(!result.success) return alert("Order load failed");

  paymentAction = result.payment_action;
  renderOrder(result.data);
}

function renderOrder(order){

const isPending =
order.payment_type==="Prepaid" &&
order.payment_status.toLowerCase()==="pending" &&
paymentAction;

if(isPending){

  statusBadge("clock","yellow");
  document.getElementById("order-title").textContent="Order Created — Payment Pending";
  document.getElementById("order-subtitle").textContent=
  "Complete payment to start processing.";
  document.getElementById("pay-now-wrapper").classList.remove("hidden");

}else{

  statusBadge("check","green");
  document.getElementById("order-title").textContent="Order Confirmed!";
  document.getElementById("order-subtitle").textContent=
  "We’ll email your shipping confirmation shortly.";

  fireConfetti();
}

/* HEADER */
document.getElementById("order-code").textContent=`Order #${order.order_code}`;
document.getElementById("order-date").textContent=
new Date(order.created_at).toLocaleDateString();

/* ITEMS */
const itemsEl=document.getElementById("order-items");
itemsEl.innerHTML="";

order.items.forEach(item=>{
itemsEl.innerHTML+=`
<li class="flex gap-4 py-4">
<img src="${item.image?.upload_url || 'assets/placeholder.png'}"
class="w-20 h-20 rounded-lg object-cover"/>

<div class="flex-1">
<h3 class="font-medium">${item.product.name}</h3>
<p class="text-sm text-gray-500">
${item.variation?.color || ""} ${item.variation?.size || ""}
</p>
</div>

<div class="text-right">
<p>Qty: ${item.quantity}</p>
<p class="font-medium">₹${item.total}</p>
</div>
</li>`;
});

/* SUMMARY */
document.getElementById("summary-subtotal").textContent=`₹${order.subtotal}`;
document.getElementById("summary-shipping").textContent=
order.shipping.shipping_charge==0?"Free":`₹${order.shipping.shipping_charge}`;
document.getElementById("summary-tax").textContent=`₹${order.tax_price}`;
document.getElementById("summary-total").textContent=`₹${order.grand_total}`;

/* SHIPPING */
const addr=order.shipping.address;

document.getElementById("ship-name").textContent=addr.name || "";
document.getElementById("ship-line1").textContent=addr.address_line1 || "";
document.getElementById("ship-line2").textContent=addr.address_line2 || "";
document.getElementById("ship-city").textContent=addr.city || "";
document.getElementById("ship-state").textContent=addr.state || "";
document.getElementById("ship-pincode").textContent=addr.pincode || "";
document.getElementById("ship-country").textContent=addr.country || "";

document.getElementById("shipping-type").textContent=order.shipping.shipping_type;
document.getElementById("shipping-status").textContent=order.shipping.shipping_status;

/* PAYMENT */
document.getElementById("payment-method").innerHTML=
`<i data-lucide="credit-card" class="w-4 h-4 text-blue-600"></i> ${order.payment_type}`;

document.getElementById("transaction-id").textContent=
order.transaction_payment_id || "N/A";

const statusEl=document.getElementById("payment-status");
statusEl.textContent=order.payment_status;
statusEl.className=order.payment_status==="Pending"?"text-yellow-600":"text-green-700";

document.getElementById("amount-charged").textContent=`₹${order.grand_total}`;

lucide.createIcons();
}

function statusBadge(icon,color){
const badge=document.getElementById("status-badge");
badge.className=`w-24 h-24 mx-auto mb-8 rounded-full bg-${color}-100 flex items-center justify-center glow-badge`;
badge.innerHTML=`<i data-lucide="${icon}" class="w-12 h-12 text-${color}-600"></i>`;
}

function fireConfetti(){
const end=Date.now()+1800;
(function frame(){
confetti({particleCount:8,angle:70,spread:60,origin:{x:.2,y:.1}});
confetti({particleCount:8,angle:110,spread:60,origin:{x:.8,y:.1}});
if(Date.now()<end)requestAnimationFrame(frame);
})();
}

/* RAZORPAY RETRY */
function retryPayment(){

if(!paymentAction) return alert("Payment info missing");

const rzp=new Razorpay({
key:paymentAction.key,
amount:paymentAction.amount,
currency:paymentAction.currency,
name:paymentAction.name,
description:paymentAction.description,
order_id:paymentAction.razorpay_order_id,

handler:verifyRetryPayment,
prefill:paymentAction.prefill,
theme:{color:"#c7aa28"},
modal:{ondismiss:()=>location.reload()}
});

rzp.open();
}

async function verifyRetryPayment(res){

await fetch(`${baseUrl}/api/customer/payments/verify`,{
method:"POST",
headers:{
"Authorization":`Bearer ${authToken}`,
"Content-Type":"application/json"
},
body:JSON.stringify({
razorpay_payment_id:res.razorpay_payment_id,
razorpay_order_id:res.razorpay_order_id,
razorpay_signature:res.razorpay_signature
})
});

location.reload();
}
</script>

<?php include("../footer.php"); ?>