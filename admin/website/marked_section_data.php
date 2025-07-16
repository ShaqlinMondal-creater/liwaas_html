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
                         <a class="btn btn-sm btn-primary" href="website/section_config.php">
                              Back
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
                                            <a class="btn btn-sm btn-success" href="#">
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
                                                        <th class="min-w-[260px]">
                                                            <span class="sort asc">
                                                                <span class="sort-label">
                                                                        Section Name
                                                                </span>
                                                                <span class="sort-icon">
                                                                </span>
                                                            </span>
                                                        </th>
                                                        <th class="min-w-[260px]">
                                                            <span class="sort">
                                                                <span class="sort-label">
                                                                        Details
                                                                </span>
                                                                <span class="sort-icon">
                                                                </span>
                                                            </span>
                                                        </th>
                                                        <th class="w-[100px]">
                                                        </th>
                                                        <th class="w-[100px]">
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
                                                            <div class="flex flex-col gap-1">
                                                                <span
                                                                        class="leading-none font-medium text-sm text-gray-900">
                                                                        7 minutes ago
                                                                </span>
                                                                <span
                                                                        class="text-2sm text-gray-700 font-normal">
                                                                        24 Jan, 2024, 9:24:53 AM
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-1">
                                                                <span
                                                                        class="leading-none font-medium text-sm text-gray-900">
                                                                        Routine Quick Backup
                                                                </span>
                                                                <span
                                                                        class="flex items-center gap-2 text-xs text-gray-600 font-normal">
                                                                        <span
                                                                            class="flex items-center gap-1">
                                                                            <i
                                                                                class="ki-filled ki-files text-sm text-gray-500">
                                                                            </i>
                                                                            47 pages
                                                                        </span>
                                                                        <span
                                                                            class="border-r border-r-gray-300 h-4">
                                                                        </span>
                                                                        <span
                                                                            class="flex items-center gap-1">
                                                                            <i
                                                                                class="ki-filled ki-picture text-sm text-gray-500">
                                                                            </i>
                                                                            47 media
                                                                        </span>
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm btn-clear btn-light"
                                                                href="#">
                                                                Preview
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm btn-light btn-outline"
                                                                href="#">
                                                                Restore
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input class="checkbox checkbox-sm"
                                                                data-datatable-row-check="true"
                                                                type="checkbox" value="2" />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-1">
                                                                <span
                                                                        class="leading-none font-medium text-sm text-gray-900">
                                                                        Today
                                                                </span>
                                                                <span
                                                                        class="text-2sm text-gray-700 font-normal">
                                                                        24 Jan, 2024, 2:09:26 AM
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-1">
                                                                <span
                                                                        class="leading-none font-medium text-sm text-gray-900">
                                                                        Early Morning Sync
                                                                </span>
                                                                <span
                                                                        class="flex items-center gap-2 text-xs text-gray-600 font-normal">
                                                                        <span
                                                                            class="flex items-center gap-1">
                                                                            <i
                                                                                class="ki-filled ki-files text-sm text-gray-500">
                                                                            </i>
                                                                            12 pages
                                                                        </span>
                                                                        <span
                                                                            class="border-r border-r-gray-300 h-4">
                                                                        </span>
                                                                        <span
                                                                            class="flex items-center gap-1">
                                                                            <i
                                                                                class="ki-filled ki-picture text-sm text-gray-500">
                                                                            </i>
                                                                            12 media
                                                                        </span>
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm btn-clear btn-light"
                                                                href="#">
                                                                Preview
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm btn-light btn-outline"
                                                                href="#">
                                                                Restore
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input class="checkbox checkbox-sm"
                                                                data-datatable-row-check="true"
                                                                type="checkbox" value="3" />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-1">
                                                                <span
                                                                        class="leading-none font-medium text-sm text-gray-900">
                                                                        Today
                                                                </span>
                                                                <span
                                                                        class="text-2sm text-gray-700 font-normal">
                                                                        24 Jan, 2024, 2:09:26 AM
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-1">
                                                                <span
                                                                        class="leading-none font-medium text-sm text-gray-900">
                                                                        Early Morning Sync
                                                                </span>
                                                                <span
                                                                        class="flex items-center gap-2 text-xs text-gray-600 font-normal">
                                                                        <span
                                                                            class="flex items-center gap-1">
                                                                            <i
                                                                                class="ki-filled ki-files text-sm text-gray-500">
                                                                            </i>
                                                                            12 pages
                                                                        </span>
                                                                        <span
                                                                            class="border-r border-r-gray-300 h-4">
                                                                        </span>
                                                                        <span
                                                                            class="flex items-center gap-1">
                                                                            <i
                                                                                class="ki-filled ki-picture text-sm text-gray-500">
                                                                            </i>
                                                                            12 media
                                                                        </span>
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm btn-clear btn-light"
                                                                href="#">
                                                                Preview
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm btn-light btn-outline"
                                                                href="#">
                                                                Restore
                                                            </a>
                                                        </td>
                                                    </tr>                                                      
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
                                            <a class="btn btn-sm btn-success" href="#">
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
                                                        <th class="min-w-[260px]">
                                                            <span class="sort asc">
                                                                <span class="sort-label">
                                                                        Section Name
                                                                </span>
                                                                <span class="sort-icon">
                                                                </span>
                                                            </span>
                                                        </th>
                                                        <th class="min-w-[260px]">
                                                            <span class="sort">
                                                                <span class="sort-label">
                                                                        Details
                                                                </span>
                                                                <span class="sort-icon">
                                                                </span>
                                                            </span>
                                                        </th>
                                                        <th class="w-[100px]">
                                                        </th>
                                                        <th class="w-[100px]">
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
                                                            <div class="flex flex-col gap-1">
                                                                <span
                                                                        class="leading-none font-medium text-sm text-gray-900">
                                                                        7 minutes ago
                                                                </span>
                                                                <span
                                                                        class="text-2sm text-gray-700 font-normal">
                                                                        24 Jan, 2024, 9:24:53 AM
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-1">
                                                                <span
                                                                        class="leading-none font-medium text-sm text-gray-900">
                                                                        Routine Quick Backup
                                                                </span>
                                                                <span
                                                                        class="flex items-center gap-2 text-xs text-gray-600 font-normal">
                                                                        <span
                                                                            class="flex items-center gap-1">
                                                                            <i
                                                                                class="ki-filled ki-files text-sm text-gray-500">
                                                                            </i>
                                                                            47 pages
                                                                        </span>
                                                                        <span
                                                                            class="border-r border-r-gray-300 h-4">
                                                                        </span>
                                                                        <span
                                                                            class="flex items-center gap-1">
                                                                            <i
                                                                                class="ki-filled ki-picture text-sm text-gray-500">
                                                                            </i>
                                                                            47 media
                                                                        </span>
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm btn-clear btn-light"
                                                                href="#">
                                                                Preview
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm btn-light btn-outline"
                                                                href="#">
                                                                Restore
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input class="checkbox checkbox-sm"
                                                                data-datatable-row-check="true"
                                                                type="checkbox" value="2" />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-1">
                                                                <span
                                                                        class="leading-none font-medium text-sm text-gray-900">
                                                                        Today
                                                                </span>
                                                                <span
                                                                        class="text-2sm text-gray-700 font-normal">
                                                                        24 Jan, 2024, 2:09:26 AM
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-1">
                                                                <span
                                                                        class="leading-none font-medium text-sm text-gray-900">
                                                                        Early Morning Sync
                                                                </span>
                                                                <span
                                                                        class="flex items-center gap-2 text-xs text-gray-600 font-normal">
                                                                        <span
                                                                            class="flex items-center gap-1">
                                                                            <i
                                                                                class="ki-filled ki-files text-sm text-gray-500">
                                                                            </i>
                                                                            12 pages
                                                                        </span>
                                                                        <span
                                                                            class="border-r border-r-gray-300 h-4">
                                                                        </span>
                                                                        <span
                                                                            class="flex items-center gap-1">
                                                                            <i
                                                                                class="ki-filled ki-picture text-sm text-gray-500">
                                                                            </i>
                                                                            12 media
                                                                        </span>
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm btn-clear btn-light"
                                                                href="#">
                                                                Preview
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm btn-light btn-outline"
                                                                href="#">
                                                                Restore
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input class="checkbox checkbox-sm"
                                                                data-datatable-row-check="true"
                                                                type="checkbox" value="3" />
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-1">
                                                                <span
                                                                        class="leading-none font-medium text-sm text-gray-900">
                                                                        Today
                                                                </span>
                                                                <span
                                                                        class="text-2sm text-gray-700 font-normal">
                                                                        24 Jan, 2024, 2:09:26 AM
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-1">
                                                                <span
                                                                        class="leading-none font-medium text-sm text-gray-900">
                                                                        Early Morning Sync
                                                                </span>
                                                                <span
                                                                        class="flex items-center gap-2 text-xs text-gray-600 font-normal">
                                                                        <span
                                                                            class="flex items-center gap-1">
                                                                            <i
                                                                                class="ki-filled ki-files text-sm text-gray-500">
                                                                            </i>
                                                                            12 pages
                                                                        </span>
                                                                        <span
                                                                            class="border-r border-r-gray-300 h-4">
                                                                        </span>
                                                                        <span
                                                                            class="flex items-center gap-1">
                                                                            <i
                                                                                class="ki-filled ki-picture text-sm text-gray-500">
                                                                            </i>
                                                                            12 media
                                                                        </span>
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm btn-clear btn-light"
                                                                href="#">
                                                                Preview
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm btn-light btn-outline"
                                                                href="#">
                                                                Restore
                                                            </a>
                                                        </td>
                                                    </tr>                                                           
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

<!-- Footer -->
<?php include("../footer.php"); ?>