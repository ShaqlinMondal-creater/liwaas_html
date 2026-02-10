
<style>
     .channel-stats-bg {
          background-image: url('assets/media/images/2600x1600/bg-3.png');
     }
     .dark .channel-stats-bg {
          background-image: url('assets/media/images/2600x1600/bg-3-dark.png');
     }
          @media (min-width: 768px) {
               .md\:grid-cols-2 {
                    grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
          }
     }
</style>

<!-- ================= CORE BUSINESS ================= -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">

    <!-- USERS -->
    <div class="card p-5 bg-cover channel-stats-bg">
        <div class="flex justify-between items-center">
            <span class="text-sm text-gray-600">Total Users</span>
            <i class="ki-filled ki-profile-circle text-xl text-primary"></i>
        </div>
        <div id="total_users" class="text-3xl font-semibold mt-3">0</div>
        <div class="text-xs text-gray-500 mt-2">
            Active: <span id="active_users">0</span> |
            Verified: <span id="verified_users">0</span>
        </div>
    </div>

    <!-- PRODUCTS -->
    <div class="card p-5 bg-cover channel-stats-bg">
        <div class="flex justify-between items-center">
            <span class="text-sm text-gray-600">Total Products</span>
            <i class="ki-filled ki-box text-xl text-success"></i>
        </div>
        <div id="total_products" class="text-3xl font-semibold mt-3">0</div>
        <div class="text-xs text-gray-500 mt-2">
            Variations: <span id="total_variations">0</span> |
            Categories: <span id="total_categories">0</span>
        </div>
    </div>

    <!-- ORDERS -->
    <div class="card p-5 bg-cover channel-stats-bg">
        <div class="flex justify-between items-center">
            <span class="text-sm text-gray-600">Total Orders</span>
            <i class="ki-filled ki-cart text-xl text-warning"></i>
        </div>
        <div id="total_orders" class="text-3xl font-semibold mt-3">0</div>
        <div class="text-xs text-gray-500 mt-2">
            Pending: <span id="pending_orders">0</span> |
            Sold: <span id="total_products_sold">0</span>
        </div>
    </div>

    <!-- REVENUE -->
    <div class="card p-5 bg-cover channel-stats-bg">
        <div class="flex justify-between items-center">
            <span class="text-sm text-gray-600">Total Revenue</span>
            <i class="ki-filled ki-dollar text-xl text-danger"></i>
        </div>
        <div id="total_revenue" class="text-3xl font-semibold mt-3">₹0</div>
        <div class="text-xs text-gray-500 mt-2">
            Paid: <span id="paid_orders">0</span> |
            COD: <span id="cod_orders">0</span>
        </div>
    </div>

</div>


<!-- ================= ENGAGEMENT ================= -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 mt-7">

    <!-- WISHLIST -->
    <div class="card p-5 bg-cover channel-stats-bg">
        <div class="flex justify-between items-center">
            <span class="text-sm text-gray-600">Wishlists</span>
            <i class="ki-filled ki-heart text-xl text-pink-500"></i>
        </div>
        <div id="total_wishlists" class="text-3xl font-semibold mt-3">0</div>
        <div class="text-xs text-gray-500 mt-2">
            Users: <span id="wishlist_users">0</span>
        </div>
    </div>

    <!-- CART -->
    <div class="card p-5 bg-cover channel-stats-bg">
        <div class="flex justify-between items-center">
            <span class="text-sm text-gray-600">Cart Items</span>
            <i class="ki-filled ki-basket text-xl text-indigo-500"></i>
        </div>
        <div id="total_cart_items" class="text-3xl font-semibold mt-3">0</div>
    </div>

    <!-- COUPONS -->
    <div class="card p-5 bg-cover channel-stats-bg">
        <div class="flex justify-between items-center">
            <span class="text-sm text-gray-600">Coupons</span>
            <i class="ki-filled ki-discount text-xl text-green-500"></i>
        </div>
        <div id="total_coupons" class="text-3xl font-semibold mt-3">0</div>
        <div class="text-xs text-gray-500 mt-2">
            Active: <span id="active_coupons">0</span>
        </div>
    </div>

    <!-- UPLOADS -->
    <div class="card p-5 bg-cover channel-stats-bg">
        <div class="flex justify-between items-center">
            <span class="text-sm text-gray-600">Uploads</span>
            <i class="ki-filled ki-cloud-upload text-xl text-blue-500"></i>
        </div>
        <div id="total_uploads" class="text-3xl font-semibold mt-3">0</div>
    </div>

</div>


<!-- ================= SYSTEM & LOGISTICS ================= -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 mt-7">

    <!-- SHIPMENTS -->
    <div class="card p-5 bg-cover channel-stats-bg">
        <div class="flex justify-between items-center">
            <span class="text-sm text-gray-600">Shipments</span>
            <i class="ki-filled ki-delivery text-xl text-orange-500"></i>
        </div>
        <div id="total_shipments" class="text-3xl font-semibold mt-3">0</div>
        <div class="text-xs text-gray-500 mt-2">
            Pending: <span id="pending_shipments">0</span>
        </div>
    </div>

    <!-- INVOICES -->
    <div class="card p-5 bg-cover channel-stats-bg">
        <div class="flex justify-between items-center">
            <span class="text-sm text-gray-600">Invoices</span>
            <i class="ki-filled ki-file text-xl text-gray-600"></i>
        </div>
        <div id="total_invoices" class="text-3xl font-semibold mt-3">0</div>
    </div>

    <!-- BRANDS -->
    <div class="card p-5 bg-cover channel-stats-bg">
        <div class="flex justify-between items-center">
            <span class="text-sm text-gray-600">Brands</span>
            <i class="ki-filled ki-tag text-xl text-purple-500"></i>
        </div>
        <div id="total_brands" class="text-3xl font-semibold mt-3">0</div>
    </div>

    <!-- ADDRESSES -->
    <div class="card p-5 bg-cover channel-stats-bg">
        <div class="flex justify-between items-center">
            <span class="text-sm text-gray-600">Addresses</span>
            <i class="ki-filled ki-location text-xl text-red-500"></i>
        </div>
        <div id="total_addresses" class="text-3xl font-semibold mt-3">0</div>
    </div>

</div>

<script>
    document.addEventListener("DOMContentLoaded", async () => {

        const token = localStorage.getItem("auth_token");

        try {
            const res = await fetch("<?= $baseUrl ?>/api/admin/dashboard", {
                method: "GET",
                headers: {
                    "Authorization": `Bearer ${token}`
                }
            });

            const result = await res.json();
            if (!result.success) return;

            const d = result.data;

            // USERS
            total_users.textContent = d.users.total_users;
            active_users.textContent = d.users.active_users;
            verified_users.textContent = d.users.verified_users;

            // PRODUCTS
            total_products.textContent = d.products.total_products;
            total_variations.textContent = d.productVariations.total_variations;
            total_categories.textContent = d.categories.total_categories;

            // ORDERS
            total_orders.textContent = d.orders.total_orders;
            pending_orders.textContent = d.orders.pending_orders;
            total_products_sold.textContent = d.orderItems.total_products_sold;

            // PAYMENTS
            total_revenue.textContent = "₹" + d.payments.total_revenue;
            paid_orders.textContent = d.payments.paid_orders;
            cod_orders.textContent = d.payments.cod_orders;

            // WISHLIST
            total_wishlists.textContent = d.wishlists.total_wishlist_items;
            wishlist_users.textContent = d.wishlists.unique_users;

            // CART
            total_cart_items.textContent = d.cart.total_cart_items;

            // COUPONS
            total_coupons.textContent = d.coupons.total_coupons;
            active_coupons.textContent = d.coupons.active_coupons;

            // UPLOADS
            total_uploads.textContent = d.uploads.total_uploads;

            // SHIPPING
            total_shipments.textContent = d.shipping.total_shipments;
            pending_shipments.textContent = d.shipping.pending_shipments;

            // INVOICES
            total_invoices.textContent = d.invoices.total_invoices;

            // BRANDS
            total_brands.textContent = d.brands.total_brands;

            // ADDRESSES
            total_addresses.textContent = d.addresses.total_addresses;

        } catch (err) {
            console.error("Dashboard load failed", err);
        }

    });
</script>