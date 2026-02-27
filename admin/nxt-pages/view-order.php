<base href="../">
<?php include("../header.php"); ?>

<main class="grow content pt-5">
  <div class="container-fixed">

    <div class="flex justify-between items-center mb-5">
      <h1 class="text-xl font-semibold">Order Details</h1>
      <a href="orders/" class="btn btn-sm btn-light">← Back</a>
    </div>

    <div id="order_view"></div>

  </div>
</main>

<script>
document.addEventListener("DOMContentLoaded", async () => {

  const token = localStorage.getItem("auth_token");
  const params = new URLSearchParams(window.location.search);
  const orderCode = params.get("code");

  const container = document.getElementById("order_view");

  if (!orderCode) {
    container.innerHTML = `<div class="text-danger">Invalid order code</div>`;
    return;
  }

  container.innerHTML = "Loading order...";

  try {

    const res = await fetch("<?= $baseUrl ?>/api/admin/order/get-order", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        "Authorization": `Bearer ${token}`
      },
      body: JSON.stringify({ order_code: orderCode })
    });

    const result = await res.json();
    const order = result.data?.[0];

    if (!order) {
      container.innerHTML = `<div class="text-danger">Order not found</div>`;
      return;
    }

    renderOrder(order);

  } catch {
    container.innerHTML = `<div class="text-danger">Failed to load order</div>`;
  }

});


function renderOrder(order) {

  const shipping = order.shipping || {};
  const user = order.user || {};

  const itemsHTML = order.items.map(item => `
    <tr>
      <td>
        <div class="flex items-center gap-3">
          <img src="${item.product.image.upload_url}" class="w-12 h-12 rounded">
          <div>
            <div class="font-medium">${item.product.name}</div>
            <div class="text-xs text-gray-500">
              ${item.variation.color} / ${item.variation.size}
            </div>
          </div>
        </div>
      </td>
      <td>${item.quantity}</td>
      <td>₹${item.variation.sell_price}</td>
      <td>₹${item.total}</td>
    </tr>
  `).join("");

  document.getElementById("order_view").innerHTML = `

  <div class="grid lg:grid-cols-3 gap-5">

    <!-- LEFT -->
    <div class="lg:col-span-2 space-y-5">

      <div class="card p-5">
        <h3 class="font-semibold mb-3">Items</h3>

        <table class="table">
          <thead>
            <tr>
              <th>Product</th>
              <th>Qty</th>
              <th>Price</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>${itemsHTML}</tbody>
        </table>
      </div>

    </div>

    <!-- RIGHT -->
    <div class="space-y-5">

      <div class="card p-5">
        <h3 class="font-semibold mb-3">Order Info</h3>

        <div class="text-sm space-y-2">
          <div><b>Order Code:</b> ${order.order_code}</div>
          <div><b>Date:</b> ${order.created_at}</div>
          <div><b>Status:</b> ${order.order_status}</div>
          <div><b>Payment:</b> ${order.payment_type}</div>
        </div>
      </div>

      <div class="card p-5">
        <h3 class="font-semibold mb-3">Customer</h3>

        <div class="text-sm">
          <div>${user.name ?? "Guest"}</div>
          <div class="text-gray-500">${user.email ?? ""}</div>
        </div>
      </div>

      <div class="card p-5">
        <h3 class="font-semibold mb-3">Shipping</h3>

        <div class="text-sm space-y-2">
          <div><b>Status:</b> ${shipping.shipping_status ?? "—"}</div>
          <div><b>Type:</b> ${shipping.shipping_type ?? "—"}</div>
          <div><b>By:</b> ${shipping.shipping_by ?? "—"}</div>
          <div><b>AWB:</b> ${shipping.shipping_delivery_id ?? "—"}</div>
        </div>
      </div>

      <div class="card p-5">
        <h3 class="font-semibold mb-3">Summary</h3>

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

<?php include("../footer.php"); ?>
