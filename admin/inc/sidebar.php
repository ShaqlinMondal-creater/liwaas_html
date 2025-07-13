<?php
    $currentPage = basename($_SERVER['PHP_SELF']);

    // Function to check if the current page is the active one
    function menuActive($file) {
        global $currentPage;
        return $currentPage === $file
            ? 'menu-item-active bg-gray-200 dark:bg-coal-500 rounded-lg text-primary font-semibold' // UPDATED background color
            : 'text-gray-800';
    }

    // Function to check if the current page is the active one for the bullet icon
    function bulletActive($file) {
        global $currentPage;
        return $currentPage === $file ? 'before:bg-primary' : '';
    }

    // NEW: Function to check if the current page matches any in the array and return show and menu-item-show classes
    function menuShow(array $files) {
        global $currentPage;
        return in_array($currentPage, $files) ? 'show menu-item-show' : '';
    }
?>
<div class="sidebar dark:bg-coal-600 bg-light border-e border-e-gray-200 dark:border-e-coal-100 fixed top-0 bottom-0 z-20 hidden lg:flex flex-col items-stretch shrink-0"
     data-drawer="true" data-drawer-class="drawer drawer-start top-0 bottom-0" data-drawer-enable="true|lg:false"
     id="sidebar">
<style>
     .admin_logos{
          display: flex;
          justify-content: center;
          align-items: center;
          width: 100%;
          height: 100%;
          margin-top: 10px;
     }
     .desktop_img{
          width:130px;
          height:60px;
     }
     .desktop_img_small{
          width:40px;
          height:40px;
     }


</style>
    <!-- Header -->
    <div class="sidebar-header hidden lg:flex items-center relative justify-between px-3 lg:px-6 shrink-0" id="sidebar_header">
        <a class="dark:hidden admin_logos" href="html/demo1.html">
            <img class="default-logo max-h-[22px] max-w-[32px] max-w-none desktop_img" src="../assets/brand/liwaas_logo_white_png.png" />
            <img class="small-logo max-h-[22px] max-w-[32px] max-w-none desktop_img_small" src="../assets/brand/fav_icon.png" />
        </a>
        <a class="hidden dark:block" href="html/demo1.html">
            <img class="default-logo max-h-[22px] max-w-[32px] max-w-none" src="../assets/brand/liwaas_logo_white_png.png" />
            <img class="small-logo min-h-[22px] max-w-none" src="../assets/brand/fav_icon.png" />
        </a>
        <button class="btn btn-icon btn-icon-md size-[30px] rounded-lg border border-gray-200 dark:border-gray-300 bg-light text-gray-500 hover:text-gray-700 toggle absolute start-full top-2/4 -translate-x-2/4 -translate-y-2/4 rtl:translate-x-2/4"
                data-toggle="body" data-toggle-class="sidebar-collapse" id="sidebar_toggle">
            <i class="ki-filled ki-black-left-line toggle-active:rotate-180 transition-all duration-300 rtl:translate rtl:rotate-180 rtl:toggle-active:rotate-0"></i>
        </button>
    </div>

    <div class="sidebar-content flex grow shrink-0 py-5 pe-2" id="sidebar_content">
        <div class="scrollable-y-hover grow shrink-0 flex ps-2 lg:ps-5 pe-1 lg:pe-3" data-scrollable="true" data-scrollable-dependencies="#sidebar_header" data-scrollable-height="auto" data-scrollable-offset="0px" data-scrollable-wrappers="#sidebar_content" id="sidebar_scrollable">

            <div class="menu flex flex-col grow gap-0.5" data-menu="true" data-menu-accordion-expand-all="false" id="sidebar_menu">

                <!-- DASHBOARDS -->
                <div class="menu-item">
                    <a href="index.php" class="menu-link flex items-center grow border border-transparent gap-[10px] ps-[10px] pe-[10px] py-[6px] hover:text-primary <?= menuActive('index.php') ?>" tabindex="0">
                        <span class="menu-icon items-start text-gray-500 dark:text-gray-400 w-[20px]">
                            <i class="ki-filled ki-element-11 text-lg"></i>
                        </span>
                        <span class="menu-title text-sm font-medium">Dashboards</span>
                    </a>
                </div>

                <!-- USER SECTION -->
                <div class="menu-item pt-2.25 pb-px">
                    <span class="menu-heading uppercase text-2sm font-medium text-gray-500 ps-[10px] pe-[10px]">
                        User
                    </span>
                </div>

                <!-- PUBLIC PROFILE -->
                <div class="menu-item <?= menuShow(['account.php','profile.php']) ?>" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
                    <div class="menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] ps-[10px] pe-[10px] py-[6px]">
                        <span class="menu-icon items-start text-gray-500 dark:text-gray-400 w-[20px]">
                            <i class="ki-filled ki-profile-circle text-lg"></i>
                        </span>
                        <span class="menu-title text-sm font-medium text-gray-800">Public Profile</span>
                        <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ms-1 me-[-10px]">
                            <i class="ki-filled ki-plus text-2xs menu-item-show:hidden"></i>
                            <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex"></i>
                        </span>
                    </div>

                    <div class="menu-accordion gap-0.5 ps-[10px] relative before:absolute before:start-[20px] before:top-0 before:bottom-0 before:border-s before:border-gray-200">
                        <div class="menu-item">
                            <a href="nxt-pages/account.php" class="menu-link border border-transparent items-center grow hover:bg-secondary-active dark:hover:bg-coal-300 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px] <?= menuActive('account.php') ?>">
                                <span class="menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 <?= bulletActive('account.php') ?>"></span>
                                <span class="menu-title text-2sm">Account</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a href="nxt-pages/profile.php" class="menu-link border border-transparent items-center grow hover:bg-secondary-active dark:hover:bg-coal-300 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px] <?= menuActive('profile.php') ?>">
                                <span class="menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 <?= bulletActive('profile.php') ?>"></span>
                                <span class="menu-title text-2sm">Profile</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- TABLES -->
                <div class="menu-item <?= menuShow(['order-table.php','brand-table.php','category-table.php','product-table.php','cart-table.php','user-table.php','shipping-table.php']) ?>" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
                    <div class="menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] ps-[10px] pe-[10px] py-[6px]">
                        <span class="menu-icon items-start text-gray-500 dark:text-gray-400 w-[20px]">
                            <i class="ki-filled ki-setting-2 text-lg"></i>
                        </span>
                        <span class="menu-title text-sm font-medium text-gray-800">Tables</span>
                        <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ms-1 me-[-10px]">
                            <i class="ki-filled ki-plus text-2xs menu-item-show:hidden"></i>
                            <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex"></i>
                        </span>
                    </div>

                    <div class="menu-accordion gap-0.5 ps-[10px] relative before:absolute before:start-[20px] before:top-0 before:bottom-0 before:border-s before:border-gray-200">
                        <div class="menu-item">
                            <a href="nxt-pages/order-table.php" class="menu-link border border-transparent items-center grow hover:bg-secondary-active dark:hover:bg-coal-300 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px] <?= menuActive('order-table.php') ?>">
                                <span class="menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 <?= bulletActive('order-table.php') ?>"></span>
                                <span class="menu-title text-2sm">Order Table</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a href="nxt-pages/brand-table.php" class="menu-link border border-transparent items-center grow hover:bg-secondary-active dark:hover:bg-coal-300 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px] <?= menuActive('brand-table.php') ?>">
                                <span class="menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 <?= bulletActive('brand-table.php') ?>"></span>
                                <span class="menu-title text-2sm">Brand Table</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a href="nxt-pages/category-table.php" class="menu-link border border-transparent items-center grow hover:bg-secondary-active dark:hover:bg-coal-300 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px] <?= menuActive('category-table.php') ?>">
                                <span class="menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 <?= bulletActive('category-table.php') ?>"></span>
                                <span class="menu-title text-2sm">Category Table</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a href="nxt-pages/product-table.php" class="menu-link border border-transparent items-center grow hover:bg-secondary-active dark:hover:bg-coal-300 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px] <?= menuActive('product-table.php') ?>">
                                <span class="menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 <?= bulletActive('product-table.php') ?>"></span>
                                <span class="menu-title text-2sm">Product Table</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a href="nxt-pages/cart-table.php" class="menu-link border border-transparent items-center grow hover:bg-secondary-active dark:hover:bg-coal-300 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px] <?= menuActive('cart-table.php') ?>">
                                <span class="menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 <?= bulletActive('cart-table.php') ?>"></span>
                                <span class="menu-title text-2sm">Cart Table</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a href="nxt-pages/user-table.php" class="menu-link border border-transparent items-center grow hover:bg-secondary-active dark:hover:bg-coal-300 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px] <?= menuActive('user-table.php') ?>">
                                <span class="menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 <?= bulletActive('user-table.php') ?>"></span>
                                <span class="menu-title text-2sm">User Table</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a href="nxt-pages/shipping-table.php" class="menu-link border border-transparent items-center grow hover:bg-secondary-active dark:hover:bg-coal-300 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px] <?= menuActive('shipping-table.php') ?>">
                                <span class="menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 <?= bulletActive('shipping-table.php') ?>"></span>
                                <span class="menu-title text-2sm">Shipping Delivery Table</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- CONFIGURATION -->
                <div class="menu-item <?= menuShow(['get-started.php','backup.php']) ?>" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
                    <div class="menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] ps-[10px] pe-[10px] py-[6px]">
                        <span class="menu-icon items-start text-gray-500 dark:text-gray-400 w-[20px]">
                            <i class="ki-filled ki-users text-lg"></i>
                        </span>
                        <span class="menu-title text-sm font-medium text-gray-800">Configuration</span>
                        <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ms-1 me-[-10px]">
                            <i class="ki-filled ki-plus text-2xs menu-item-show:hidden"></i>
                            <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex"></i>
                        </span>
                    </div>

                    <div class="menu-accordion gap-0.5 ps-[10px] relative before:absolute before:start-[20px] before:top-0 before:bottom-0 before:border-s before:border-gray-200">
                        <div class="menu-item">
                            <a href="nxt-pages/get-started.php" class="menu-link border border-transparent items-center grow hover:bg-secondary-active dark:hover:bg-coal-300 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px] <?= menuActive('get-started.php') ?>">
                                <span class="menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 <?= bulletActive('get-started.php') ?>"></span>
                                <span class="menu-title text-2sm">Get Started</span>
                            </a>
                        </div>
                    </div>

                    <div class="menu-accordion gap-0.5 ps-[10px] relative before:absolute before:start-[20px] before:top-0 before:bottom-0 before:border-s before:border-gray-200">
                        <div class="menu-item">
                            <a href="nxt-pages/backup.php" class="menu-link border border-transparent items-center grow hover:bg-secondary-active dark:hover:bg-coal-300 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px] <?= menuActive('backup.php') ?>">
                                <span class="menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 <?= bulletActive('backup.php') ?>"></span>
                                <span class="menu-title text-2sm">Backup</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
