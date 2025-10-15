<base href="../">
<?php include("../header.php"); ?>
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
                              Fetch Section Datas
                         </h1>
                    </div>
                    <div class="flex items-center gap-2.5">
                         <a class="btn btn-sm btn-primary" href="website/mark_product.php">
                              <- Back in Config
                         </a>
                    </div>
               </div>
          </div>
          <!-- End of Container -->

          <!-- Arraival & Trendings Container -->
          <div class="container-fixed">
               <!-- begin: grid -->
               <div class="grid grid-cols-1 xl:grid-cols-2 gap-5 lg:gap-7.5">
                    <!-- Arraival Container -->
                    <div class="col-span-1">
                        <div class="flex flex-col gap-5 lg:gap-7.5">
                            <div class="card card-grid min-w-full">
                                <div class="card-header py-5 flex-wrap">
                                    <h3 class="card-title">Marked as New Arriaval</h3>
                                    <div class="flex items-center gap-2.5">
                                        <div class="flex">
                                            <label class="input input-sm">
                                                <i class="ki-filled ki-magnifier">
                                                </i>
                                                <input data-datatable-search="#search_arrival_table" placeholder="Search Products"
                                                    type="text" value="">
                                                </input>
                                            </label>
                                        </div>
                                        <a class="btn btn-sm btn-danger" href="#">Import in DB</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="scrollable-x-auto">
                                        <table class="table table-border" data-datatable-table="true" id="arrival_table">
                                            <thead>
                                                <tr>
                                                    <th class="w-[60px]">
                                                        <input class="checkbox checkbox-sm" data-datatable-check="true" type="checkbox" />
                                                    </th>
                                                    <th class="min-w-[100px]">
                                                        <span class="sort asc">
                                                            <span class="sort-label">Product Name</span>
                                                            <span class="sort-icon"></span>
                                                        </span>
                                                    </th>
                                                    <th class="min-w-[140px]">
                                                        <span class="sort">
                                                            <span class="sort-label">Details</span>
                                                            <span class="sort-icon"></span>
                                                        </span>
                                                    </th>
                                                    <th class="w-[160px]">
                                                        <span class="sort-label">Actions</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!--  -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium">
                                        <div class="flex items-center gap-2 order-2 md:order-1">
                                            Show
                                            <select class="select select-sm w-16" data-datatable-size="true" name="perpage"></select>
                                            per page
                                        </div>
                                        <div class="flex items-center gap-4 order-1 md:order-2">
                                            <span data-datatable-info="true"></span>
                                            <div class="pagination" data-datatable-pagination="true"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Trendings Container -->
                    <div class="col-span-1">
                        <div class="flex flex-col gap-5 lg:gap-7.5">
                            <div class="card card-grid min-w-full">
                                <div class="card-header py-5 flex-wrap">
                                    <h3 class="card-title">
                                        Marked as Trending
                                    </h3>
                                    <div class="flex items-center gap-2.5">
                                        <div class="flex">
                                            <label class="input input-sm">
                                                <i class="ki-filled ki-magnifier">
                                                </i>
                                                <input data-datatable-search="#search_trend_table" placeholder="Search Products"
                                                    type="text" value="">
                                                </input>
                                            </label>
                                        </div>
                                        <a class="btn btn-sm btn-danger" href="website/website_config.php">
                                            Import in DB
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="scrollable-x-auto">
                                        <table class="table table-border"
                                            data-datatable-table="true" id="trending_table">
                                            <thead>
                                                <tr>
                                                    <th class="w-[60px]">
                                                        <input class="checkbox checkbox-sm"
                                                            data-datatable-check="true"
                                                            type="checkbox" />
                                                    </th>
                                                    <th class="min-w-[100px]">
                                                        <span class="sort asc">
                                                            <span class="sort-label">
                                                                Product Name
                                                            </span>
                                                            <span class="sort-icon">
                                                            </span>
                                                        </span>
                                                    </th>
                                                    <th class="min-w-[140px]">
                                                        <span class="sort">
                                                            <span class="sort-label">
                                                                Details
                                                            </span>
                                                            <span class="sort-icon">
                                                            </span>
                                                        </span>
                                                    </th>
                                                    <th class="w-[160px]">
                                                        <span class="sort-label">
                                                            Actions
                                                        </span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <!--  -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium">
                                        <div class="flex items-center gap-2 order-2 md:order-1">
                                            Show
                                            <select class="select select-sm w-16"
                                                data-datatable-size="true" name="perpage">
                                            </select>
                                            per page
                                        </div>
                                        <div class="flex items-center gap-4 order-1 md:order-2">
                                            <span data-datatable-info="true">
                                            </span>
                                            <div class="pagination"
                                                data-datatable-pagination="true">
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
          <!-- End of Container -->
            <br />
          <!--  -->

            <!-- Gallary & Category Container -->
            <div class="container-fixed">
                <!-- begin: grid -->
                <div class="grid grid-cols-1 xl:grid-cols-1 gap-5 lg:gap-7.5">
                        <!-- Gallary Container -->
                        <div class="col-span-1">
                            <div class="flex flex-col gap-5 lg:gap-7.5">
                                <div class="card card-grid min-w-full">
                                    <div class="card-header py-5 flex-wrap">
                                        <h3 class="card-title">
                                            Marked as Gallery Products
                                        </h3>
                                        <div class="flex items-center gap-2.5">
                                            <div class="flex">
                                                <label class="input input-sm">
                                                    <i class="ki-filled ki-magnifier">
                                                    </i>
                                                    <input data-datatable-search="#search_gallery_table" placeholder="Search Products"
                                                        type="text" value="">
                                                    </input>
                                                </label>
                                            </div>
                                            <a class="btn btn-sm btn-danger" href="#">
                                                Import in DB
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="scrollable-x-auto">
                                            <table class="table table-border" data-datatable-table="true" id="gallery_table">
                                                <thead>
                                                    <tr>
                                                        <th class="w-[60px]">
                                                            <input class="checkbox checkbox-sm"
                                                                data-datatable-check="true"
                                                                type="checkbox" />
                                                        </th>
                                                        <th class="min-w-[160px]">
                                                            <span class="sort asc">
                                                                <span class="sort-label">
                                                                        Product Name
                                                                </span>
                                                                <span class="sort-icon">
                                                                </span>
                                                            </span>
                                                        </th>
                                                        <th class="min-w-[260px]">
                                                            <span class="sort">
                                                                <span class="sort-label">
                                                                        Review Image
                                                                </span>
                                                                <span class="sort-icon">
                                                                </span>
                                                            </span>
                                                        </th>
                                                        <th class="w-[140px] text-center">
                                                            <span class="sort-label">
                                                                Actions
                                                            </span>
                                                        </th>
                                                        <th class="w-[140px] text-center">
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!--  -->
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium">
                                            <div class="flex items-center gap-2 order-2 md:order-1">
                                                Show
                                                <select class="select select-sm w-16"
                                                        data-datatable-size="true" name="perpage">
                                                </select>
                                                per page
                                            </div>
                                            <div class="flex items-center gap-4 order-1 md:order-2">
                                                <span data-datatable-info="true">
                                                </span>
                                                <div class="pagination"
                                                        data-datatable-pagination="true">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Category Wise Container -->
                        <div class="col-span-1">
                            <div class="flex flex-col gap-5 lg:gap-7.5">
                                <div class="card card-grid min-w-full">
                                    <div class="card-header py-5 flex-wrap">
                                        <h3 class="card-title">
                                            Marked Category Wise Products
                                        </h3>
                                        <div class="flex items-center gap-2.5">
                                            <div class="flex flex-wrap gap-2.5">
                                                <select class="select select-sm w-36" id="filter-active">
                                                    <option value="">Select Category</option>
                                                </select>
                                            </div>
                                            <div class="flex">
                                                <label class="input input-sm">
                                                    <i class="ki-filled ki-magnifier">
                                                    </i>
                                                    <input data-datatable-search="#search_cats_table" placeholder="Search Products"
                                                        type="text" value="">
                                                    </input>
                                                </label>
                                            </div>
                                            <button id="apply-filters" class="btn btn-sm btn-outline btn-primary">
                                                <i class="ki-filled ki-setting-4"></i>
                                                Apply
                                            </button>

                                            <a class="btn btn-sm btn-danger" href="#">
                                                Import in DB
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="scrollable-x-auto">
                                            <table class="table table-border" data-datatable-table="true" id="category_wise_table">
                                                <thead>
                                                    <tr>
                                                        <th class="w-[60px]">
                                                            <input class="checkbox checkbox-sm"
                                                                data-datatable-check="true"
                                                                type="checkbox" />
                                                        </th>
                                                        <th class="min-w-[200px]">
                                                            <span class="sort asc">
                                                                <span class="sort-label">
                                                                        Product Name
                                                                </span>
                                                                <span class="sort-icon">
                                                                </span>
                                                            </span>
                                                        </th>
                                                        <th class="min-w-[200px]">
                                                            <span class="sort">
                                                                <span class="sort-label">
                                                                        Variant Details
                                                                </span>
                                                                <span class="sort-icon">
                                                                </span>
                                                            </span>
                                                        </th>
                                                        <th class="w-[140px]">
                                                            Category
                                                        </th>
                                                        <th class="w-[140px]">
                                                            Actions
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!--  -->
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium">
                                            <div class="flex items-center gap-2 order-2 md:order-1">
                                                Show
                                                <select class="select select-sm w-16" data-datatable-size="true" name="perpage">
                                                </select>
                                                per page
                                            </div>
                                            <div class="flex items-center gap-4 order-1 md:order-2">
                                                <span data-datatable-info="true">
                                                </span>
                                                <div class="pagination"
                                                        data-datatable-pagination="true">
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
            <!-- End of Container -->
     </main>
     <!-- End of Content -->

<!-- New Arriaval -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tableBody = document.querySelector('#arrival_table tbody');
        const arrival_token = localStorage.getItem('auth_token');

        if (!arrival_token) {
            alert("Auth token not found in localStorage.");
            return;
        }

        // ✅ Fetch new arrivals
        fetch(`<?= $baseUrl ?>/api/admin/fetch/newarrivals`, {
            headers: {
                'Authorization': `Bearer ${arrival_token}`
            }
        })
        .then(res => res.json())
        .then(response => {
            if (response.success && Array.isArray(response.data)) {
                tableBody.innerHTML = ''; // clear previous rows

                response.data.forEach(product => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>
                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="${product.id}" />
                        </td>
                        <td>
                            <div class="flex flex-col gap-1">
                                <span class="leading-none font-medium text-sm text-gray-900">${product.name}</span>
                                <span class="flex items-center gap-2 text-xs text-gray-600 font-normal">
                                    <span class="flex items-center gap-1">
                                        AID - ${product.aid}
                                    </span>
                                    <span class="border-r border-r-gray-300 h-4"></span>
                                    <span class="flex items-center gap-1">
                                        UID - ${product.variation.uid}
                                    </span>
                                </span>
                            </div>
                        </td>
                        <td>
                            <div class="flex flex-col gap-1">
                                <span class="leading-none font-medium text-sm text-gray-900">
                                    Variation ID: ${product.variation.id}
                                </span>
                                <span class="flex items-center gap-2 text-xs text-gray-600 font-normal">
                                    <span class="flex items-center gap-1">
                                        Color: ${product.variation.color}
                                    </span>
                                    <span class="border-r border-r-gray-300 h-4"></span>
                                    <span class="flex items-center gap-1">
                                        Size: ${product.variation.size}
                                    </span>
                                </span>
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-success btn-outline add-to-db-new" data-uid="${product.variation.uid}">
                                Add In DB
                            </button>
                        </td>
                    `;
                    tableBody.appendChild(row);
                });

                // ✅ Setup button click for all "Add In DB"
                document.querySelectorAll('.add-to-db-new').forEach(button => {
                    button.addEventListener('click', function () {
                        const uid = this.getAttribute('data-uid');
                        addToDbNew(uid);
                    });
                });
            } else {
                alert("No new arrivals found.");
            }
        })
        .catch(error => {
            console.error("Error fetching new arrivals:", error);
            alert("Failed to fetch new arrivals.");
        });

        // ✅ Function to send POST request to add the item
        function addToDbNew(uid) {
            const arrival_token = localStorage.getItem('auth_token');

            if (!arrival_token) {
                Swal.fire({
                    icon: 'error',
                    title: 'Unauthorized',
                    text: 'Token not found in localStorage.',
                });
                return;
            }

            fetch(`<?= $baseUrl ?>/api/admin/sections/add`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${arrival_token}`
                },
                body: JSON.stringify({
                    section_name: 'New Arrival',
                    status: 1,
                    uid: uid
                })
            })
            .then(res => res.json())
            .then(response => {
                if (response.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Added Successfully',
                        text: `UID ${response.data.uid} added to section '${response.data.section_name}'`,
                        timer: 2000,
                        showConfirmButton: false
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Failed to Add',
                        text: response.message || 'Unknown error occurred.'
                    });
                }
            })
            .catch(error => {
                console.error('Add to DB error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Request Failed',
                    text: 'An error occurred while adding to the section.'
                });
            });
        }
    });
</script>

<!-- Trending  -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tableBody = document.querySelector('#trending_table tbody');
        const trend_token = localStorage.getItem('auth_token');

        if (!trend_token) {
            alert("Auth token not found in localStorage.");
            return;
        }

        // ✅ Fetch trending products
        fetch(`<?= $baseUrl ?>/api/admin/fetch/trendings`, {
            headers: {
                'Authorization': `Bearer ${trend_token}`
            }
        })
        .then(res => res.json())
        .then(response => {
            if (response.success && Array.isArray(response.data)) {
                tableBody.innerHTML = ''; // Clear old rows

                response.data.forEach(product => {
                    product.variations.forEach(variation => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td>
                                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="${product.id}" />
                            </td>
                            <td>
                                <div class="flex flex-col gap-1">
                                    <span class="leading-none font-medium text-sm text-gray-900">${product.name}</span>
                                    <span class="flex items-center gap-2 text-xs text-gray-600 font-normal">
                                        <span class="flex items-center gap-1">
                                            AID - ${product.aid}
                                        </span>
                                        <span class="border-r border-r-gray-300 h-4"></span>
                                        <span class="flex items-center gap-1">
                                            UID - ${variation.uid}
                                        </span>
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class="flex flex-col gap-1">
                                    <span class="leading-none font-medium text-sm text-gray-900">
                                        Variation ID: ${variation.id}
                                    </span>
                                    <span class="flex items-center gap-2 text-xs text-gray-600 font-normal">
                                        <span class="flex items-center gap-1">
                                            Color: ${variation.color}
                                        </span>
                                        <span class="border-r border-r-gray-300 h-4"></span>
                                        <span class="flex items-center gap-1">
                                            Size: ${variation.size}
                                        </span>
                                    </span>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-success btn-outline add-to-db-trend" data-uid="${variation.uid}">
                                    Add In DB
                                </button>
                            </td>
                        `;
                        tableBody.appendChild(row);
                    });
                });

                // ✅ Attach add-to-db-trend click events
                document.querySelectorAll('.add-to-db-trend').forEach(button => {
                    button.addEventListener('click', function () {
                        const uid = this.getAttribute('data-uid');
                        addToDbTrending(uid);
                    });
                });

            } else {
                alert("No trending products found.");
            }
        })
        .catch(error => {
            console.error("Error fetching trending products:", error);
            alert("Failed to fetch trending products.");
        });

        function addToDbTrending(uid) {
            const trend_token = localStorage.getItem('auth_token');

            if (!trend_token) {
                Swal.fire({
                    icon: 'error',
                    title: 'Unauthorized',
                    text: 'Token not found in localStorage.',
                });
                return;
            }

            fetch(`<?= $baseUrl ?>/api/admin/sections/add`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${trend_token}`
                },
                body: JSON.stringify({
                    section_name: 'Trending',
                    status: 1,
                    uid: uid
                })
            })
            .then(res => res.json())
            .then(response => {
                if (response.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Added Successfully',
                        text: `UID ${response.data.uid} added to section '${response.data.section_name}'`,
                        timer: 2000,
                        showConfirmButton: false
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Failed to Add',
                        text: response.message || 'Unknown error occurred.'
                    });
                }
            })
            .catch(error => {
                console.error('Add to DB error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Request Failed',
                    text: 'An error occurred while adding to the section.'
                });
            });
        }

    });
</script>

<!-- Gallary -->
 <script>
    document.addEventListener('DOMContentLoaded', function () {
        const tableBody = document.querySelector('#gallery_table tbody');
        const gallery_token = localStorage.getItem('auth_token');

        if (!gallery_token) {
            Swal.fire({
                icon: 'error',
                title: 'Unauthorized',
                text: 'Token not found in localStorage.',
            });
            return;
        }

        fetch(`<?= $baseUrl ?>/api/admin/fetch/gallery`, {
            headers: {
                'Authorization': `Bearer ${gallery_token}`
            }
        })
        .then(res => res.json())
        .then(response => {
            if (response.success && Array.isArray(response.data)) {
                tableBody.innerHTML = '';

                response.data.forEach(product => {
                    const review = product.reviews?.[0]; // Get first review
                    const imageUrl = review?.review_images?.[0]?.upload_url || 'https://via.placeholder.com/80';

                    const stars = Array.from({ length: 5 }, (_, i) =>
                        `<div class="rating-label ${i < (review?.total_star || 0) ? 'checked' : ''}">
                            <i class="rating-on ki-solid ki-star text-base leading-none"></i>
                            <i class="rating-off ki-outline ki-star text-base leading-none"></i>
                        </div>`
                    ).join('');

                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>
                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="${product.product_id}" />
                        </td>
                        <td>
                            <div class="flex items-center gap-2.5">
                                <div class="flex flex-col gap-1">
                                    <span class="leading-none font-medium text-sm text-gray-900">${product.product_name}</span>
                                    <span class="flex items-center gap-2 text-xs text-gray-600 font-normal">
                                        <span class="flex items-center gap-1">AID - ${product.aid}</span>
                                        <span class="border-r border-r-gray-300 h-4"></span>
                                        <span class="flex items-center gap-1">UID - ${product.uid}</span>
                                    </span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="flex items-center gap-4">
                                <img alt="review image" class="rounded-full size-20 shrink-0" src="${imageUrl}" />
                                <div class="flex flex-col gap-2">
                                    <span class="leading-none font-medium text-sm text-gray-900">${review?.comments || 'No comment'}</span>
                                    <span class="flex items-center gap-4 text-xs text-gray-600 font-normal">
                                        <span class="flex items-center gap-1">${review?.user?.name || 'Unknown'}</span>
                                        <span class="border-r border-r-gray-300 h-4"></span>
                                        <span class="flex items-center gap-1">User ID - ${review?.user?.id || '-'}</span>
                                    </span>
                                    <div class="rating">${stars}</div>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-clear btn-warning preview-image" href="#" data-image="${imageUrl}">Preview</a>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-success btn-outline add-to-db-gallery" href="#" data-uid="${product.uid}">Add In DB</a>
                        </td>
                    `;
                    tableBody.appendChild(row);
                });

                // Add Image in review in Modal
                document.querySelectorAll('.add-to-db-gallery').forEach(button => {
                    button.addEventListener('click', function (e) {
                        e.preventDefault();
                        const uid = this.getAttribute('data-uid');
                        addToGallery(uid);
                    });
                });

                // Preview Image in Modal
                document.querySelectorAll('.preview-image').forEach(button => {
                    button.addEventListener('click', function (e) {
                        e.preventDefault();
                        const imageUrl = this.getAttribute('data-image');

                        if (!imageUrl) {
                            Swal.fire({
                                icon: 'info',
                                title: 'No Image',
                                text: 'No image available to preview.'
                            });
                            return;
                        }

                        Swal.fire({
                            title: `Review Image: ${imageUrl}`,
                            imageUrl: imageUrl,
                            imageAlt: 'Review Image',
                            imageWidth: 400,
                            imageHeight: 400,
                            showCloseButton: true,
                            customClass: {
                                title: 'swal2-sm-title'
                            }
                        });
                    });
                });


            } else {
                Swal.fire({
                    icon: 'info',
                    title: 'No Gallery Data Found',
                    text: 'No products available to show in gallery.'
                });
            }
        })
        .catch(error => {
            console.error("Gallery fetch error:", error);
            Swal.fire({
                icon: 'error',
                title: 'Request Failed',
                text: 'Could not load gallery data.'
            });
        });

        // Marked as Section images
        function addToGallery(uid) {
            fetch(`<?= $baseUrl ?>/api/admin/sections/add`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${gallery_token}`
                },
                body: JSON.stringify({
                    section_name: 'Gallery',
                    uid: uid,
                    status: 1
                })
            })
            .then(res => res.json())
            .then(response => {
                if (response.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Added to Gallery!',
                        text: `UID ${response.data.uid} added successfully.`,
                        timer: 2000,
                        showConfirmButton: false
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Add Failed',
                        text: response.message || 'Unknown error occurred.'
                    });
                }
            })
            .catch(error => {
                console.error('Add to Gallery error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Request Failed',
                    text: 'Could not add product to gallery.'
                });
            });
        }
    });
</script>

<!-- Category Wise -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const baseUrl = "<?= $baseUrl ?>";
        const authToken = localStorage.getItem('auth_token');

        const categorySelect = document.getElementById('filter-active');
        const applyFilterBtn = document.getElementById('apply-filters');
        const tableBody = document.querySelector('#category_wise_table tbody');

        // ✅ Populate category dropdown
        fetch(`${baseUrl}/api/allCategories`, {
            method:"POST",
            headers: {
                'Authorization': `Bearer ${authToken}`
            }
        })
        .then(res => res.json())
        .then(response => {
            if (response.success && Array.isArray(response.data)) {
                response.data.forEach(cat => {
                    const option = document.createElement('option');
                    option.value = cat.id;
                    option.textContent = cat.name;
                    categorySelect.appendChild(option);
                });
            }
        });

        // ✅ Handle Apply button click
        applyFilterBtn.addEventListener('click', function () {
            const selectedCategoryId = categorySelect.value;
            if (!selectedCategoryId) return;

            fetch(`${baseUrl}/api/admin/fetch/cat-products/${selectedCategoryId}`, {
                method:"POST",
                headers: {
                    'Authorization': `Bearer ${authToken}`
                }
            })
            .then(res => res.json())
            .then(response => {
                if (response.success && Array.isArray(response.data)) {
                    tableBody.innerHTML = '';

                    response.data.forEach(product => {
                        product.variations.forEach(variation => {
                            const row = document.createElement('tr');
                            row.innerHTML = `
                                <td>
                                    <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="${variation.uid}" />
                                </td>
                                <td>
                                    <div class="flex flex-col gap-1">
                                        <span class="leading-none font-medium text-sm text-gray-900">${product.name}</span>
                                        <span class="flex items-center gap-2 text-xs text-gray-600 font-normal">
                                            <span class="flex items-center gap-1">AID - ${product.aid}</span>
                                            <span class="border-r border-r-gray-300 h-4"></span>
                                            <span class="flex items-center gap-1">UID - ${variation.uid}</span>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="flex flex-col gap-1">
                                        <span class="leading-none font-medium text-sm text-gray-900">Variation ID - ${variation.id}</span>
                                        <span class="flex items-center gap-2 text-xs text-gray-600 font-normal">
                                            <span class="flex items-center gap-1">Size - ${variation.size}</span>
                                            <span class="border-r border-r-gray-300 h-4"></span>
                                            <span class="flex items-center gap-1">Color - ${variation.color}</span>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <span class="leading-none font-medium text-sm text-gray-900">${product.category.name}</span>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success btn-outline add-to-db-catwise" data-uid="${variation.uid}">
                                        Add In DB
                                    </a>
                                </td>
                            `;
                            tableBody.appendChild(row);
                        });
                    });

                    // Attach event handlers to "Add In DB" buttons
                    document.querySelectorAll('.add-to-db-catwise').forEach(button => {
                        button.addEventListener('click', function (e) {
                            e.preventDefault();
                            // const uid = this.getAttribute('data-uid');
                            // addToDbCatWise(uid);
                            addToDbCatWise(this); // pass the actual button element
                        });
                    });
                }
            });
        });

        // ✅ Add to DB for Category Wise section
        function addToDbCatWise(button) {
            const uid = button.getAttribute('data-uid');
            const row = button.closest('tr');
            const categoryName = row.querySelector('td:nth-child(4)')?.textContent.trim();

            const section_name = `Category Wise - ${categoryName}`;

            fetch(`${baseUrl}/api/admin/sections/add`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${authToken}`
                },
                body: JSON.stringify({
                    section_name,
                    uid,
                    status: 1
                })
            })
            .then(res => res.json())
            .then(response => {
                if (response.success) {
                    Swal.fire({
                        title: 'Success!',
                        text: `${response.data.section_name} Added` || 'Added to DB successfully.',
                        icon: 'success',
                        timer: 2000,
                        confirmButtonText: 'OK'
                    });
                } else {
                    Swal.fire({
                        title: 'Error!',
                        text: response.message || 'Unknown error occurred.',
                        icon: 'error',
                        confirmButtonText: 'Close'
                    });
                }
            })
            .catch(error => {
                console.error("Add to DB error:", error);
                Swal.fire({
                    title: 'Error!',
                    text: 'Something went wrong.',
                    icon: 'error',
                    confirmButtonText: 'Close'
                });
            });
        }

    });
</script>

<!-- Footer -->
<?php include("../footer.php"); ?>