<base href="../">
<?php include("../header.php"); ?>
    <!-- Tiny glow animation -->
    <style>
        @keyframes pulse-glow {
            0%,100% { box-shadow: 0 0 0 0 rgba(34,197,94,.45); }
            50%     { box-shadow: 0 0 0 12px rgba(34,197,94,0); }
        }
        .glow-badge { animation: pulse-glow 2.5s ease-out infinite; }
    </style>
    <div class="fixed inset-0 -z-10 pointer-events-none">
        <img src="assets/aqeeq_png.png" alt="" class="w-full h-full object-cover blur-xl"
        />
    </div>
    <!-- Main -->
    <main class="max-w-3xl mx-auto px-4 py-14 sm:py-20">
        <!-- Success -->
        <section class="text-center mb-4">
            <div class="w-24 h-24 mx-auto mb-8 rounded-full bg-green-100 flex items-center justify-center glow-badge">
                <i data-lucide="check" class="w-12 h-12 text-green-600"></i>
            </div>
            <h1 id="order-title" class="text-3xl sm:text-4xl font-extrabold mb-3 tracking-tight"></h1>
            <p id="order-subtitle" class="text-gray-600"></p>

            <div id="pay-now-wrapper" class="mt-6 hidden">
                <button onclick="retryPayment()"
                    class="px-6 py-3 bg-[#c7aa28] text-white rounded-lg font-medium hover:opacity-90 transition">
                    Pay Now
                </button>
            </div>
        </section>

        <!-- Order Card -->
        <section class="bg-white rounded-3xl shadow-lg ring-1 ring-black/5 mb-12 overflow-hidden">
            <header class="px-6 py-5 border-b flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <p class="text-sm text-gray-500 mb-0.5 font-extrabold" id="order-code">.....</p>
                    <p class="font-medium text-gray-800" id="order-date">.....</p>
                </div>
                <a href="pages/profile?tab=orders" class="text-sm font-medium text-blue-600 hover:text-blue-700">
                    View Order Details →
                </a>
            </header>

            <!-- Items -->
            <ul class="px-6 py-5 divide-y" id="order-items"></ul>

            <!-- Summary -->
            <footer class="px-6 py-5 bg-gray-50">
                <dl class="space-y-2 text-sm">
                    <div class="flex justify-between">
                        <dt class="text-gray-600">Subtotal</dt>
                        <dd id="summary-subtotal">₹0.00</dd>
                    </div>
                    <div class="flex justify-between">
                        <dt class="text-gray-600">Shipping</dt>
                        <dd id="summary-shipping">₹0.00</dd>
                    </div>
                    <div class="flex justify-between">
                        <dt class="text-gray-600">Tax</dt>
                        <dd id="summary-tax">₹0.00</dd>
                    </div>
                    <div class="flex justify-between pt-2 border-t font-semibold text-gray-800">
                        <dt>Total</dt>
                        <dd id="summary-total">₹0.00</dd>
                    </div>
                </dl>
            </footer>
        </section>

        <!-- Shipping Info -->
        <section class="bg-white rounded-3xl shadow-lg ring-1 ring-black/5 mb-2">
            <div class="px-6 py-6">
                <h2 class="font-medium mb-4 text-gray-800 font-extrabold">Shipping Information</h2>
                <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                    <div>
                        <h3 class="font-medium text-gray-700 mb-1">Shipping Address</h3>
                        <p id="ship-name"></p>
                        <p>
                            <span id="ship-line1"></span>, 
                            <span id="ship-line2"></span>
                        </p>
                        <p>
                            <span id="ship-city"></span>,
                            <span id="ship-state"></span>, 
                            <span id="ship-pincode"></span>
                        </p>
                        <p id="ship-country"></p>
                    </div>
                    <div>
                        <h3 class="font-medium text-gray-700 mb-1">Shipping Method</h3>
                        <p>
                            <span id="shipping-type"></span> | <span id="shipping-status"></span>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Payment Details -->
        <section class="bg-white rounded-3xl shadow-lg ring-1 ring-black/5 mb-16">
            <div class="px-6 py-6">
                <h2 class="font-medium mb-4 text-gray-800 font-extrabold">Payment Details</h2>
                <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                    <div>
                        <h3 class="font-medium text-gray-700 mb-1">Payment Method</h3>
                        <p class="flex items-center gap-2" id="payment-method">
                            <i data-lucide="credit-card" class="w-4 h-4 text-blue-600"></i>
                            XXXXXX
                        </p>
                    </div>
                    <div>
                        <h3 class="font-medium text-gray-700 mb-1">Transaction</h3>
                        <p>ID: <span class="font-medium text-gray-800 font-extrabold" id="transaction-id"></span></p>
                        <p>Status: <span class="text-green-700 font-medium font-extrabold" id="payment-status"></span></p>
                    </div>
                    <div>
                        <h3 class="font-medium text-gray-700 mb-1">Amount Charged</h3>
                        <p class="font-extrabold" id="amount-charged"></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Next Steps -->
        <section class="bg-white rounded-3xl shadow-lg ring-1 ring-black/5 mb-16">
            <div class="px-6 py-6">
                <h2 class="font-medium mb-4 text-gray-800">What’s Next?</h2>
                <ol class="space-y-5 text-sm text-gray-600">
                    <li class="flex gap-4">
                        <span class="w-8 h-8 flex items-center justify-center rounded-full bg-blue-100 flex-shrink-0">
                            <i data-lucide="mail" class="w-4 h-4 text-blue-600"></i>
                        </span>
                        We’ve emailed you the order confirmation.
                    </li>
                    <li class="flex gap-4">
                        <span class="w-8 h-8 flex items-center justify-center rounded-full bg-blue-100 flex-shrink-0">
                            <i data-lucide="package" class="w-4 h-4 text-blue-600"></i>
                        </span>
                        Our team is carefully packing your items.
                    </li>
                    <li class="flex gap-4">
                        <span class="w-8 h-8 flex items-center justify-center rounded-full bg-blue-100 flex-shrink-0">
                            <i data-lucide="truck" class="w-4 h-4 text-blue-600"></i>
                        </span>
                        You’ll receive a shipping notification once it’s on the way.
                    </li>
                </ol>
            </div>
        </section>

        <!-- Actions -->
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="pages/shop" class="inline-flex items-center justify-center gap-2 px-6 py-3 border border-gray-900 rounded-lg text-sm font-medium hover:bg-gray-100 transition">
                Continue&nbsp;Shopping
            </a>
            <a href="pages/profile" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-gray-900 text-white rounded-lg text-sm font-medium hover:bg-gray-800 transition">
                View Order History
            </a>
        </div>
    </main>

<script>
    const baseUrl   = "<?= $baseUrl ?>";
    const authToken = localStorage.getItem("auth_token");

    // get order_id from ?order_id=3
    const params  = new URLSearchParams(window.location.search);
    const orderId = params.get("order_id");

    if (!orderId) {
        window.location.href = "/"; // frontend home (liwaas.com)
    }
</script>

<script>
let paymentAction = null;

async function fetchOrderDetail() {
  try {
    const res = await fetch(`${baseUrl}/api/customer/order/get-order-detail`, {
      method: "POST",
      headers: {
        "Authorization": `Bearer ${authToken}`,
        "Content-Type": "application/json"
      },
      body: JSON.stringify({ order_id: orderId })
    });

    const result = await res.json();

    if (!result.success) {
      alert("Failed to load order.");
      return;
    }

    // ✅ store globally for retry payment
    paymentAction = result.payment_action;

    renderOrder(result.data);

  } catch (err) {
    console.error("Order detail error:", err);
    alert("Something went wrong.");
  }
}

fetchOrderDetail();
</script>
<script>
function renderOrder(order) {

    const isPendingPayment =
        order.payment_type === "Prepaid" &&
        order.payment_status.toLowerCase() === "pending";

    if (isPendingPayment) {
        document.querySelector(".glow-badge").classList.remove("bg-green-100");
        document.querySelector(".glow-badge").classList.add("bg-yellow-100");

        document.querySelector(".glow-badge i")
            .setAttribute("data-lucide", "clock");

        lucide.createIcons();
        document.getElementById("order-title").textContent =
            "Order Created — Payment Pending";

        document.getElementById("order-subtitle").textContent =
            "Your order has been placed. Please complete your payment to start processing.";

        document.getElementById("pay-now-wrapper").classList.remove("hidden");

    } else {

        document.getElementById("order-title").textContent =
            "Order Confirmed!";

        document.getElementById("order-subtitle").textContent =
            "Thank you for your purchase — we’ll email you the shipping confirmation shortly.";
    }

  // header
  document.getElementById("order-code").textContent = `Order #${order.order_code}`;
  document.getElementById("order-date").textContent = `Date: ${order.created_at}`;

  // items
  const itemsEl = document.getElementById("order-items");
  itemsEl.innerHTML = "";

  order.items.forEach(item => {
    const li = document.createElement("li");
    li.className = "flex items-center gap-4 py-4 first:pt-0";

    li.innerHTML = `
      <img src="${item.image.upload_url}"
           class="w-20 h-20 rounded-lg object-cover" />

      <div class="flex-1">
        <h3 class="font-medium">${item.product.name}</h3>
        <p class="text-sm text-gray-500">
          ${item.variation.color} • Size ${item.variation.size}
        </p>
      </div>

      <div class="text-right space-y-0.5">
        <span class="text-sm text-gray-500 block">Qty: ${item.quantity}</span>
        <span class="font-medium block">₹${item.total}</span>
      </div>
    `;

    itemsEl.appendChild(li);
  });

  // summary
  const subtotal = order.items.reduce((sum, i) => sum + parseFloat(i.total), 0);
  const shipCharge = parseFloat(order.shipping.shipping_charge || 0);

  document.getElementById("summary-subtotal").textContent = `₹${subtotal.toFixed(2)}`;
  document.getElementById("summary-shipping").textContent = shipCharge === 0 ? "Free" : `₹${shipCharge.toFixed(2)}`;
  document.getElementById("summary-tax").textContent = `₹${order.tax_price}`;
  document.getElementById("summary-total").textContent = `₹${order.grand_total}`;

  // shipping
    document.getElementById("ship-name").textContent = `Address ID: ${order.shipping.address.id}`;
    document.getElementById("ship-line1").textContent = `${order.shipping.address.address_line1} , ${order.shipping.address.address_line2 || ""}`;
    document.getElementById("ship-city").textContent = `${order.shipping.address.city}`;
    document.getElementById("ship-state").textContent = `${order.shipping.address.state}`;
    document.getElementById("ship-pincode").textContent = `${order.shipping.address.pincode}`;
    document.getElementById("ship-country").textContent = `${order.shipping.address.country}`;

    document.getElementById("shipping-type").textContent = order.shipping.shipping_type;
    document.getElementById("shipping-status").textContent = order.shipping.shipping_status;

  // payment
  const paymentEl = document.getElementById("payment-method");
    paymentEl.innerHTML = `
        <i data-lucide="credit-card" class="w-4 h-4 text-blue-600"></i>
        ${order.payment_type}
        `;
        lucide.createIcons();

  document.getElementById("transaction-id").textContent =
    order.transaction_payment_id || "N/A";

    const statusEl = document.getElementById("payment-status");

    statusEl.textContent = order.payment_status;

    if (order.payment_status.toLowerCase() === "pending") {
        statusEl.classList.remove("text-green-700");
        statusEl.classList.add("text-yellow-600");
    }
    //   document.getElementById("payment-status").textContent = order.payment_status;
  document.getElementById("amount-charged").textContent = `₹${order.grand_total}`;
}
</script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
function retryPayment() {

    if (!paymentAction) {
        alert("Payment info missing");
        return;
    }

    const options = {
        key: paymentAction.key,
        amount: paymentAction.amount,
        currency: paymentAction.currency,
        name: paymentAction.name,
        description: paymentAction.description,
        order_id: paymentAction.razorpay_order_id,

        handler: async function (response) {
            await verifyRetryPayment(response);
        },

        prefill: paymentAction.prefill,

        theme: {
            color: "#c7aa28"
        },

        modal: {
            ondismiss: function () {
                location.reload();
            }
        }
    };

    const rzp = new Razorpay(options);
    rzp.open();
}
async function verifyRetryPayment(response) {

    try {
        const res = await fetch(`${baseUrl}/api/customer/payments/verify`, {
            method: "POST",
            headers: {
                "Authorization": `Bearer ${authToken}`,
                "Content-Type": "application/json"
            },
            body: JSON.stringify(response)
        });

        const result = await res.json();

        location.reload();

    } catch (err) {
        console.error(err);
        alert("Payment verification failed");
    }
}
</script>
    <script>
        lucide.createIcons();

        // Confetti blast on load
        window.addEventListener('DOMContentLoaded', () => {

            const isPending =
                document.getElementById("pay-now-wrapper").classList.contains("hidden") === false;

            // ❌ don't celebrate unpaid order
            if (isPending) return;

            const duration = 1800;
            const end = Date.now() + duration;
            const colors = ['#10b981','#0891b2','#f97316','#ec4899','#6366f1'];

            (function frame() {
                confetti({
                    particleCount: 8,
                    angle: 70,
                    spread: 60,
                    origin: { x: 0.2, y: 0.1 },
                    colors
                });

                confetti({
                    particleCount: 8,
                    angle: 110,
                    spread: 60,
                    origin: { x: 0.8, y: 0.1 },
                    colors
                });

                if (Date.now() < end) requestAnimationFrame(frame);
            })();
        });
    </script>
<?php include("../footer.php"); ?>