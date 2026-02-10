
<?php include("header.php"); ?>
<!-- End of Header -->
<!-- Content -->
     <main class="grow content pt-5" id="content" role="content">
          <!-- Container -->
          <div class="container-fixed" id="content_container">
          </div>
          <!-- End of Container -->
          <!-- Container -->
          <div class="container-fixed">
               <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
                    <div class="flex flex-col justify-center gap-2">
                         <h1 class="text-xl font-medium leading-none text-gray-900">
                              Dashboard
                         </h1>
                         <div class="flex items-center gap-2 text-sm font-normal text-gray-700">
                              Central Hub for Personal Customization
                         </div>
                    </div>
                    <div class="flex items-center gap-2.5">
                         <a class="btn btn-sm btn-light" href="html/demo1/public-profile/profiles/default.html">
                              View Profile
                         </a>
                    </div>
               </div>
          </div>
          <!-- End of Container -->
           
          <!-- Container -->
          <div class="container-fixed">
               <div class="grid gap-5 lg:gap-7.5">
                    <!-- begin: grid -->
                    <!-- <div class="grid lg:grid-cols-3 gap-y-5 lg:gap-7.5 items-stretch">
                         <div class="lg:col-span-1">
                              <div class="grid grid-cols-2 gap-5 lg:gap-7.5 h-full items-stretch">
                                   <style>
                                        .channel-stats-bg {
                                             background-image: url('assets/media/images/2600x1600/bg-3.png');
                                        }

                                        .dark .channel-stats-bg {
                                             background-image: url('assets/media/images/2600x1600/bg-3-dark.png');
                                        }
                                   </style>
                                   <div
                                        class="card flex-col justify-between gap-6 h-full bg-cover rtl:bg-[left_top_-1.7rem] bg-[right_top_-1.7rem] bg-no-repeat channel-stats-bg">
                                        <img alt="" class="w-7 mt-4 ms-5" src="assets/media/brand-logos/linkedin-2.svg" />
                                        <div class="flex flex-col gap-1 pb-4 px-5">
                                             <span class="text-3xl font-semibold text-gray-900">
                                                  9.3k
                                             </span>
                                             <span class="text-2sm font-normal text-gray-700">
                                                  Amazing mates
                                             </span>
                                        </div>
                                   </div>
                                   <div
                                        class="card flex-col justify-between gap-6 h-full bg-cover rtl:bg-[left_top_-1.7rem] bg-[right_top_-1.7rem] bg-no-repeat channel-stats-bg">
                                        <img alt="" class="w-7 mt-4 ms-5" src="assets/media/brand-logos/youtube-2.svg" />
                                        <div class="flex flex-col gap-1 pb-4 px-5">
                                             <span class="text-3xl font-semibold text-gray-900">
                                                  24k
                                             </span>
                                             <span class="text-2sm font-normal text-gray-700">
                                                  Lessons Views
                                             </span>
                                        </div>
                                   </div>
                                   <div
                                        class="card flex-col justify-between gap-6 h-full bg-cover rtl:bg-[left_top_-1.7rem] bg-[right_top_-1.7rem] bg-no-repeat channel-stats-bg">
                                        <img alt="" class="w-7 mt-4 ms-5" src="assets/media/brand-logos/instagram-03.svg" />
                                        <div class="flex flex-col gap-1 pb-4 px-5">
                                             <span class="text-3xl font-semibold text-gray-900">
                                                  608
                                             </span>
                                             <span class="text-2sm font-normal text-gray-700">
                                                  New subscribers
                                             </span>
                                        </div>
                                   </div>
                                   <div
                                        class="card flex-col justify-between gap-6 h-full bg-cover rtl:bg-[left_top_-1.7rem] bg-[right_top_-1.7rem] bg-no-repeat channel-stats-bg">
                                        <img alt="" class="dark:hidden w-7 mt-4 ms-5"
                                             src="assets/media/brand-logos/tiktok.svg" />
                                        <img alt="" class="light:hidden w-7 mt-4 ms-5"
                                             src="assets/media/brand-logos/tiktok-dark.svg" />
                                        <div class="flex flex-col gap-1 pb-4 px-5">
                                             <span class="text-3xl font-semibold text-gray-900">
                                                  2.5k
                                             </span>
                                             <span class="text-2sm font-normal text-gray-700">
                                                  Stream audience
                                             </span>
                                        </div>
                                   </div>
                              </div>
                         </div>                         
                    </div> -->

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


                    <!-- end: grid -->
                    <!-- begin: grid -->
                    <div class="grid lg:grid-cols-3 gap-5 lg:gap-7.5 items-stretch">
                         <div class="lg:col-span-1">
                              <div class="card h-full">
                                   <div class="card-header">
                                        <h3 class="card-title">
                                             Highlights
                                        </h3>
                                        <div class="menu" data-menu="true">
                                             <div class="menu-item" data-menu-item-offset="0, 10px"
                                                  data-menu-item-placement="bottom-start" data-menu-item-toggle="dropdown"
                                                  data-menu-item-trigger="click|lg:click">
                                                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                                       <i class="ki-filled ki-dots-vertical">
                                                       </i>
                                                  </button>
                                                  <div class="menu-dropdown menu-default w-full max-w-[200px]"
                                                       data-menu-dismiss="true">
                                                       <div class="menu-item">
                                                            <a class="menu-link" href="html/demo1/account/activity.html">
                                                                 <span class="menu-icon">
                                                                      <i class="ki-filled ki-cloud-change">
                                                                      </i>
                                                                 </span>
                                                                 <span class="menu-title">
                                                                      Activity
                                                                 </span>
                                                            </a>
                                                       </div>
                                                       <div class="menu-item">
                                                            <a class="menu-link" data-modal-toggle="#share_profile_modal"
                                                                 href="#">
                                                                 <span class="menu-icon">
                                                                      <i class="ki-filled ki-share">
                                                                      </i>
                                                                 </span>
                                                                 <span class="menu-title">
                                                                      Share
                                                                 </span>
                                                            </a>
                                                       </div>
                                                       <div class="menu-item" data-menu-item-offset="-15px, 0"
                                                            data-menu-item-placement="right-start"
                                                            data-menu-item-toggle="dropdown"
                                                            data-menu-item-trigger="click|lg:hover">
                                                            <div class="menu-link">
                                                                 <span class="menu-icon">
                                                                      <i class="ki-filled ki-notification-status">
                                                                      </i>
                                                                 </span>
                                                                 <span class="menu-title">
                                                                      Notifications
                                                                 </span>
                                                                 <span class="menu-arrow">
                                                                      <i
                                                                           class="ki-filled ki-right text-3xs rtl:transform rtl:rotate-180">
                                                                      </i>
                                                                 </span>
                                                            </div>
                                                            <div class="menu-dropdown menu-default w-full max-w-[175px]">
                                                                 <div class="menu-item">
                                                                      <a class="menu-link"
                                                                           href="html/demo1/account/home/settings-sidebar.html">
                                                                           <span class="menu-icon">
                                                                                <i class="ki-filled ki-sms">
                                                                                </i>
                                                                           </span>
                                                                           <span class="menu-title">
                                                                                Email
                                                                           </span>
                                                                      </a>
                                                                 </div>
                                                                 <div class="menu-item">
                                                                      <a class="menu-link"
                                                                           href="html/demo1/account/home/settings-sidebar.html">
                                                                           <span class="menu-icon">
                                                                                <i class="ki-filled ki-message-notify">
                                                                                </i>
                                                                           </span>
                                                                           <span class="menu-title">
                                                                                SMS
                                                                           </span>
                                                                      </a>
                                                                 </div>
                                                                 <div class="menu-item">
                                                                      <a class="menu-link"
                                                                           href="html/demo1/account/home/settings-sidebar.html">
                                                                           <span class="menu-icon">
                                                                                <i class="ki-filled ki-notification-status">
                                                                                </i>
                                                                           </span>
                                                                           <span class="menu-title">
                                                                                Push
                                                                           </span>
                                                                      </a>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="menu-item">
                                                            <a class="menu-link" data-modal-toggle="#report_user_modal"
                                                                 href="#">
                                                                 <span class="menu-icon">
                                                                      <i class="ki-filled ki-dislike">
                                                                      </i>
                                                                 </span>
                                                                 <span class="menu-title">
                                                                      Report
                                                                 </span>
                                                            </a>
                                                       </div>
                                                       <div class="menu-separator">
                                                       </div>
                                                       <div class="menu-item">
                                                            <a class="menu-link"
                                                                 href="html/demo1/account/home/settings-enterprise.html">
                                                                 <span class="menu-icon">
                                                                      <i class="ki-filled ki-setting-3">
                                                                      </i>
                                                                 </span>
                                                                 <span class="menu-title">
                                                                      Settings
                                                                 </span>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="card-body flex flex-col gap-4 p-5 lg:p-7.5 lg:pt-4">
                                        <div class="flex flex-col gap-0.5">
                                             <span class="text-sm font-normal text-gray-700">
                                                  All time sales
                                             </span>
                                             <div class="flex items-center gap-2.5">
                                                  <span class="text-3xl font-semibold text-gray-900">
                                                       $295.7k
                                                  </span>
                                                  <span class="badge badge-outline badge-success badge-sm">
                                                       +2.7%
                                                  </span>
                                             </div>
                                        </div>
                                        <div class="flex items-center gap-1 mb-1.5">
                                             <div class="bg-success h-2 w-full max-w-[60%] rounded-sm">
                                             </div>
                                             <div class="bg-brand h-2 w-full max-w-[25%] rounded-sm">
                                             </div>
                                             <div class="bg-info h-2 w-full max-w-[15%] rounded-sm">
                                             </div>
                                        </div>
                                        <div class="flex items-center flex-wrap gap-4 mb-1">
                                             <div class="flex items-center gap-1.5">
                                                  <span class="badge badge-dot size-2 badge-success">
                                                  </span>
                                                  <span class="text-sm font-normal text-gray-800">
                                                       Metronic
                                                  </span>
                                             </div>
                                             <div class="flex items-center gap-1.5">
                                                  <span class="badge badge-dot size-2 badge-danger">
                                                  </span>
                                                  <span class="text-sm font-normal text-gray-800">
                                                       Bundle
                                                  </span>
                                             </div>
                                             <div class="flex items-center gap-1.5">
                                                  <span class="badge badge-dot size-2 badge-info">
                                                  </span>
                                                  <span class="text-sm font-normal text-gray-800">
                                                       MetronicNest
                                                  </span>
                                             </div>
                                        </div>
                                        <div class="border-b border-gray-300">
                                        </div>
                                        <div class="grid gap-3">
                                             <div class="flex items-center justify-between flex-wrap gap-2">
                                                  <div class="flex items-center gap-1.5">
                                                       <i class="ki-filled ki-shop text-base text-gray-500">
                                                       </i>
                                                       <span class="text-sm font-normal text-gray-900">
                                                            Online Store
                                                       </span>
                                                  </div>
                                                  <div class="flex items-center text-sm font-medium text-gray-800 gap-6">
                                                       <span class="lg:text-right">
                                                            $172k
                                                       </span>
                                                       <span class="lg:text-right">
                                                            <i class="ki-filled ki-arrow-up text-success">
                                                            </i>
                                                            3.9%
                                                       </span>
                                                  </div>
                                             </div>
                                             <div class="flex items-center justify-between flex-wrap gap-2">
                                                  <div class="flex items-center gap-1.5">
                                                       <i class="ki-filled ki-facebook text-base text-gray-500">
                                                       </i>
                                                       <span class="text-sm font-normal text-gray-900">
                                                            Facebook
                                                       </span>
                                                  </div>
                                                  <div class="flex items-center text-sm font-medium text-gray-800 gap-6">
                                                       <span class="lg:text-right">
                                                            $85k
                                                       </span>
                                                       <span class="lg:text-right">
                                                            <i class="ki-filled ki-arrow-down text-danger">
                                                            </i>
                                                            0.7%
                                                       </span>
                                                  </div>
                                             </div>
                                             <div class="flex items-center justify-between flex-wrap gap-2">
                                                  <div class="flex items-center gap-1.5">
                                                       <i class="ki-filled ki-instagram text-base text-gray-500">
                                                       </i>
                                                       <span class="text-sm font-normal text-gray-900">
                                                            Instagram
                                                       </span>
                                                  </div>
                                                  <div class="flex items-center text-sm font-medium text-gray-800 gap-6">
                                                       <span class="lg:text-right">
                                                            $36k
                                                       </span>
                                                       <span class="lg:text-right">
                                                            <i class="ki-filled ki-arrow-up text-success">
                                                            </i>
                                                            8.2%
                                                       </span>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="lg:col-span-2">
                              <div class="card h-full">
                                   <div class="card-header">
                                        <h3 class="card-title">
                                             Earnings
                                        </h3>
                                        <div class="flex gap-5">
                                             <label class="switch switch-sm">
                                                  <input class="order-2" name="check" type="checkbox" value="1" />
                                                  <span class="switch-label order-1">
                                                       Referrals only
                                                  </span>
                                             </label>
                                             <select class="select select-sm w-28" name="select">
                                                  <option value="1">
                                                       1 month
                                                  </option>
                                                  <option value="2">
                                                       3 month
                                                  </option>
                                                  <option value="3">
                                                       6 month
                                                  </option>
                                                  <option selected="" value="4">
                                                       12 month
                                                  </option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="card-body flex flex-col justify-end items-stretch grow px-3 py-1">
                                        <div id="earnings_chart">
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <!-- end: grid -->
                    <!-- begin: grid -->
                    <div class="grid lg:grid-cols-3 gap-5 lg:gap-7.5 items-stretch">
                         <div class="lg:col-span-2">
                              <div class="grid">
                                   <div class="card card-grid h-full min-w-full">
                                        <div class="card-header">
                                             <h3 class="card-title">
                                                  Teams
                                             </h3>
                                             <div class="input input-sm max-w-48">
                                                  <i class="ki-filled ki-magnifier">
                                                  </i>
                                                  <input placeholder="Search Teams" type="text" />
                                             </div>
                                        </div>
                                        <div class="card-body">
                                             <div data-datatable="true" data-datatable-page-size="5">
                                                  <div class="scrollable-x-auto">
                                                       <table class="table table-border" data-datatable-table="true">
                                                            <thead>
                                                                 <tr>
                                                                      <th class="w-[60px]">
                                                                           <input class="checkbox checkbox-sm"
                                                                                data-datatable-check="true"
                                                                                type="checkbox" />
                                                                      </th>
                                                                      <th class="min-w-[280px]">
                                                                           <span class="sort asc">
                                                                                <span class="sort-label">
                                                                                     Team
                                                                                </span>
                                                                                <span class="sort-icon">
                                                                                </span>
                                                                           </span>
                                                                      </th>
                                                                      <th class="min-w-[135px]">
                                                                           <span class="sort">
                                                                                <span class="sort-label">
                                                                                     Rating
                                                                                </span>
                                                                                <span class="sort-icon">
                                                                                </span>
                                                                           </span>
                                                                      </th>
                                                                      <th class="min-w-[135px]">
                                                                           <span class="sort">
                                                                                <span class="sort-label">
                                                                                     Last Modified
                                                                                </span>
                                                                                <span class="sort-icon">
                                                                                </span>
                                                                           </span>
                                                                      </th>
                                                                      <th class="min-w-[135px]">
                                                                           <span class="sort">
                                                                                <span class="sort-label">
                                                                                     Members
                                                                                </span>
                                                                                <span class="sort-icon">
                                                                                </span>
                                                                           </span>
                                                                      </th>
                                                                 </tr>
                                                            </thead>
                                                            <tbody>
                                                                 <tr>
                                                                      <td>
                                                                           <input class="checkbox checkbox-sm"
                                                                                data-datatable-row-check="true"
                                                                                type="checkbox" value="1" />
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex flex-col gap-2">
                                                                                <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary"
                                                                                     href="#">
                                                                                     Product Management
                                                                                </a>
                                                                                <span
                                                                                     class="text-2sm text-gray-700 font-normal leading-3">
                                                                                     Product development &
                                                                                     lifecycle
                                                                                </span>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           <div class="rating">
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           21 Oct, 2024
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex -space-x-2">
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-4.png" />
                                                                                </div>
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-1.png" />
                                                                                </div>
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-2.png" />
                                                                                </div>
                                                                                <div class="flex">
                                                                                     <span
                                                                                          class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-success-inverse ring-success-light bg-success">
                                                                                          +10
                                                                                     </span>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                 </tr>
                                                                 <tr>
                                                                      <td>
                                                                           <input class="checkbox checkbox-sm"
                                                                                data-datatable-row-check="true"
                                                                                type="checkbox" value="2" />
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex flex-col gap-2">
                                                                                <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary"
                                                                                     href="#">
                                                                                     Marketing Team
                                                                                </a>
                                                                                <span
                                                                                     class="text-2sm text-gray-700 font-normal leading-3">
                                                                                     Campaigns & market
                                                                                     analysis
                                                                                </span>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           <div class="rating">
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label indeterminate">
                                                                                     <i class="rating-on ki-solid ki-star text-base leading-none"
                                                                                          style="width: 50.0%">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           15 Oct, 2024
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex -space-x-2">
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-4.png" />
                                                                                </div>
                                                                                <div class="flex">
                                                                                     <span
                                                                                          class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] uppercase text-warning-inverse ring-warning-light bg-warning">
                                                                                          g
                                                                                     </span>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                 </tr>
                                                                 <tr>
                                                                      <td>
                                                                           <input class="checkbox checkbox-sm"
                                                                                data-datatable-row-check="true"
                                                                                type="checkbox" value="3" />
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex flex-col gap-2">
                                                                                <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary"
                                                                                     href="#">
                                                                                     HR Department
                                                                                </a>
                                                                                <span
                                                                                     class="text-2sm text-gray-700 font-normal leading-3">
                                                                                     Talent acquisition,
                                                                                     employee welfare
                                                                                </span>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           <div class="rating">
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           10 Oct, 2024
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex -space-x-2">
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-4.png" />
                                                                                </div>
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-1.png" />
                                                                                </div>
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-2.png" />
                                                                                </div>
                                                                                <div class="flex">
                                                                                     <span
                                                                                          class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-info-inverse ring-info-light bg-info">
                                                                                          +A
                                                                                     </span>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                 </tr>
                                                                 <tr>
                                                                      <td>
                                                                           <input class="checkbox checkbox-sm"
                                                                                data-datatable-row-check="true"
                                                                                type="checkbox" value="4" />
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex flex-col gap-2">
                                                                                <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary"
                                                                                     href="#">
                                                                                     Sales Division
                                                                                </a>
                                                                                <span
                                                                                     class="text-2sm text-gray-700 font-normal leading-3">
                                                                                     Customer relations, sales
                                                                                     strategy
                                                                                </span>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           <div class="rating">
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           05 Oct, 2024
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex -space-x-2">
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-24.png" />
                                                                                </div>
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-7.png" />
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                 </tr>
                                                                 <tr>
                                                                      <td>
                                                                           <input class="checkbox checkbox-sm"
                                                                                data-datatable-row-check="true"
                                                                                type="checkbox" value="5" />
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex flex-col gap-2">
                                                                                <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary"
                                                                                     href="#">
                                                                                     Development Team
                                                                                </a>
                                                                                <span
                                                                                     class="text-2sm text-gray-700 font-normal leading-3">
                                                                                     Software development
                                                                                </span>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           <div class="rating">
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label indeterminate">
                                                                                     <i class="rating-on ki-solid ki-star text-base leading-none"
                                                                                          style="width: 50.0%">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           01 Oct, 2024
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex -space-x-2">
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-3.png" />
                                                                                </div>
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-8.png" />
                                                                                </div>
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-9.png" />
                                                                                </div>
                                                                                <div class="flex">
                                                                                     <span
                                                                                          class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-danger-inverse ring-danger-light bg-danger">
                                                                                          +5
                                                                                     </span>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                 </tr>
                                                                 <tr>
                                                                      <td>
                                                                           <input class="checkbox checkbox-sm"
                                                                                data-datatable-row-check="true"
                                                                                type="checkbox" value="6" />
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex flex-col gap-2">
                                                                                <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary"
                                                                                     href="#">
                                                                                     Quality Assurance
                                                                                </a>
                                                                                <span
                                                                                     class="text-2sm text-gray-700 font-normal leading-3">
                                                                                     Product testing
                                                                                </span>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           <div class="rating">
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           25 Sep, 2024
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex -space-x-2">
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-6.png" />
                                                                                </div>
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-5.png" />
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                 </tr>
                                                                 <tr>
                                                                      <td>
                                                                           <input class="checkbox checkbox-sm"
                                                                                data-datatable-row-check="true"
                                                                                type="checkbox" value="7" />
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex flex-col gap-2">
                                                                                <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary"
                                                                                     href="#">
                                                                                     Finance Team
                                                                                </a>
                                                                                <span
                                                                                     class="text-2sm text-gray-700 font-normal leading-3">
                                                                                     Financial planning
                                                                                </span>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           <div class="rating">
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           20 Sep, 2024
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex -space-x-2">
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-10.png" />
                                                                                </div>
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-11.png" />
                                                                                </div>
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-12.png" />
                                                                                </div>
                                                                                <div class="flex">
                                                                                     <span
                                                                                          class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-primary-inverse ring-primary-light bg-primary">
                                                                                          +8
                                                                                     </span>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                 </tr>
                                                                 <tr>
                                                                      <td>
                                                                           <input class="checkbox checkbox-sm"
                                                                                data-datatable-row-check="true"
                                                                                type="checkbox" value="8" />
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex flex-col gap-2">
                                                                                <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary"
                                                                                     href="#">
                                                                                     Customer Support
                                                                                </a>
                                                                                <span
                                                                                     class="text-2sm text-gray-700 font-normal leading-3">
                                                                                     Customer service
                                                                                </span>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           <div class="rating">
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label indeterminate">
                                                                                     <i class="rating-on ki-solid ki-star text-base leading-none"
                                                                                          style="width: 50.0%">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           15 Sep, 2024
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex -space-x-2">
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-13.png" />
                                                                                </div>
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-14.png" />
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                 </tr>
                                                                 <tr>
                                                                      <td>
                                                                           <input class="checkbox checkbox-sm"
                                                                                data-datatable-row-check="true"
                                                                                type="checkbox" value="9" />
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex flex-col gap-2">
                                                                                <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary"
                                                                                     href="#">
                                                                                     R&D Team
                                                                                </a>
                                                                                <span
                                                                                     class="text-2sm text-gray-700 font-normal leading-3">
                                                                                     Research & development
                                                                                </span>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           <div class="rating">
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           10 Sep, 2024
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex -space-x-2">
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-15.png" />
                                                                                </div>
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-16.png" />
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                 </tr>
                                                                 <tr>
                                                                      <td>
                                                                           <input class="checkbox checkbox-sm"
                                                                                data-datatable-row-check="true"
                                                                                type="checkbox" value="10" />
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex flex-col gap-2">
                                                                                <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary"
                                                                                     href="#">
                                                                                     Operations Team
                                                                                </a>
                                                                                <span
                                                                                     class="text-2sm text-gray-700 font-normal leading-3">
                                                                                     Operations management
                                                                                </span>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           <div class="rating">
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           05 Sep, 2024
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex -space-x-2">
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-17.png" />
                                                                                </div>
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-18.png" />
                                                                                </div>
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-19.png" />
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                 </tr>
                                                                 <tr>
                                                                      <td>
                                                                           <input class="checkbox checkbox-sm"
                                                                                data-datatable-row-check="true"
                                                                                type="checkbox" value="11" />
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex flex-col gap-2">
                                                                                <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary"
                                                                                     href="#">
                                                                                     IT Support
                                                                                </a>
                                                                                <span
                                                                                     class="text-2sm text-gray-700 font-normal leading-3">
                                                                                     Technical support
                                                                                </span>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           <div class="rating">
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           01 Sep, 2024
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex -space-x-2">
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-20.png" />
                                                                                </div>
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-21.png" />
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                 </tr>
                                                                 <tr>
                                                                      <td>
                                                                           <input class="checkbox checkbox-sm"
                                                                                data-datatable-row-check="true"
                                                                                type="checkbox" value="12" />
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex flex-col gap-2">
                                                                                <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary"
                                                                                     href="#">
                                                                                     Legal Team
                                                                                </a>
                                                                                <span
                                                                                     class="text-2sm text-gray-700 font-normal leading-3">
                                                                                     Legal support
                                                                                </span>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           <div class="rating">
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           25 Aug, 2024
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex -space-x-2">
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-22.png" />
                                                                                </div>
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-23.png" />
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                 </tr>
                                                                 <tr>
                                                                      <td>
                                                                           <input class="checkbox checkbox-sm"
                                                                                data-datatable-row-check="true"
                                                                                type="checkbox" value="13" />
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex flex-col gap-2">
                                                                                <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary"
                                                                                     href="#">
                                                                                     Logistics Team
                                                                                </a>
                                                                                <span
                                                                                     class="text-2sm text-gray-700 font-normal leading-3">
                                                                                     Supply chain
                                                                                </span>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           <div class="rating">
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label indeterminate">
                                                                                     <i class="rating-on ki-solid ki-star text-base leading-none"
                                                                                          style="width: 50.0%">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           20 Aug, 2024
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex -space-x-2">
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-24.png" />
                                                                                </div>
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-25.png" />
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                 </tr>
                                                                 <tr>
                                                                      <td>
                                                                           <input class="checkbox checkbox-sm"
                                                                                data-datatable-row-check="true"
                                                                                type="checkbox" value="14" />
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex flex-col gap-2">
                                                                                <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary"
                                                                                     href="#">
                                                                                     Procurement Team
                                                                                </a>
                                                                                <span
                                                                                     class="text-2sm text-gray-700 font-normal leading-3">
                                                                                     Supplier management
                                                                                </span>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           <div class="rating">
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           15 Aug, 2024
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex -space-x-2">
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-26.png" />
                                                                                </div>
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-27.png" />
                                                                                </div>
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-28.png" />
                                                                                </div>
                                                                                <div class="flex">
                                                                                     <span
                                                                                          class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-info-inverse ring-info-light bg-info">
                                                                                          +3
                                                                                     </span>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                 </tr>
                                                                 <tr>
                                                                      <td>
                                                                           <input class="checkbox checkbox-sm"
                                                                                data-datatable-row-check="true"
                                                                                type="checkbox" value="15" />
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex flex-col gap-2">
                                                                                <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary"
                                                                                     href="#">
                                                                                     Training Team
                                                                                </a>
                                                                                <span
                                                                                     class="text-2sm text-gray-700 font-normal leading-3">
                                                                                     Employee training
                                                                                </span>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           <div class="rating">
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label checked">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                                <div class="rating-label">
                                                                                     <i
                                                                                          class="rating-on ki-solid ki-star text-base leading-none">
                                                                                     </i>
                                                                                     <i
                                                                                          class="rating-off ki-outline ki-star text-base leading-none">
                                                                                     </i>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           10 Aug, 2024
                                                                      </td>
                                                                      <td>
                                                                           <div class="flex -space-x-2">
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-29.png" />
                                                                                </div>
                                                                                <div class="flex">
                                                                                     <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                                                          src="assets/media/avatars/300-30.png" />
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                 </tr>
                                                            </tbody>
                                                       </table>
                                                  </div>
                                                  <div
                                                       class="card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium">
                                                       <div class="flex items-center gap-2 order-2 md:order-1">
                                                            Show
                                                            <select class="select select-sm w-16" data-datatable-size="true"
                                                                 name="perpage">
                                                            </select>
                                                            per page
                                                       </div>
                                                       <div class="flex items-center gap-4 order-1 md:order-2">
                                                            <span data-datatable-info="true">
                                                            </span>
                                                            <div class="pagination" data-datatable-pagination="true">
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <!-- end: grid -->
               </div>
          </div>
          <!-- End of Container -->
     </main>
<!-- End of Content -->
<!-- Footer -->
<?php include("footer.php"); ?>