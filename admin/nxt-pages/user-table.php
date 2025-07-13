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
                    <div class="grid gap-5 lg:gap-7.5">
                        <div class="card card-grid min-w-full">
                            <div class="card-header flex-wrap gap-2">
                                <h3 class="card-title font-medium text-sm">
                                    Users Details
                                </h3>
                                <div class="flex flex-wrap gap-2 lg:gap-5">
                                    <div class="flex">
                                        <label class="input input-sm">
                                            <i class="ki-filled ki-magnifier">
                                            </i>
                                            <input data-datatable-search="#team_user_table" placeholder="Search users"
                                                type="text" value="">
                                            </input>
                                        </label>
                                    </div>
                                    <div class="flex flex-wrap gap-2.5">
                                        <select class="select select-sm w-28" id="filter-loggedin">
                                            <option value="">All Logins</option>
                                            <option value="true">Logged In</option>
                                            <option value="false">Not Logged In</option>
                                        </select>
                                        <select class="select select-sm w-28" id="filter-active">
                                            <option value="">All Status</option>
                                            <option value="true">Active</option>
                                            <option value="false">Inactive</option>
                                        </select>
                                        <button id="apply-filters" class="btn btn-sm btn-outline btn-primary">
                                            <i class="ki-filled ki-setting-4"></i>
                                            Apply
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <div class="card-body" id="user_table_wrapper">
                                <div  id="team_user_table">
                                    <div class="scrollable-x-auto">
                                        <table class="table table-auto table-border" data-datatable-table="true">
                                            <thead>
                                                <tr>
                                                    <th class="w-[60px] text-center">
                                                        <input class="checkbox checkbox-sm" data-datatable-check="true"
                                                            type="checkbox" />
                                                    </th>
                                                    <th class="min-w-[300px]">
                                                        <span class="sort asc">
                                                            <span class="sort-label font-normal text-gray-700">
                                                                Name
                                                            </span>
                                                            <span class="sort-icon">
                                                            </span>
                                                        </span>
                                                    </th>
                                                    <th class="min-w-[180px]">
                                                        <span class="sort">
                                                            <span class="sort-label font-normal text-gray-700">
                                                                Role
                                                            </span>
                                                            <span class="sort-icon">
                                                            </span>
                                                        </span>
                                                    </th>
                                                    <th class="min-w-[180px]">
                                                        <span class="sort">
                                                            <span class="sort-label font-normal text-gray-700">
                                                                Login Status
                                                            </span>
                                                            <span class="sort-icon">
                                                            </span>
                                                        </span>
                                                    </th>
                                                    <th class="min-w-[180px]">
                                                        <span class="sort">
                                                            <span class="sort-label font-normal text-gray-700">
                                                                Location
                                                            </span>
                                                            <span class="sort-icon">
                                                            </span>
                                                        </span>
                                                    </th>
                                                    <th class="min-w-[180px]">
                                                        <span class="sort">
                                                            <span class="sort-label font-normal text-gray-700">
                                                                Activation
                                                            </span>
                                                            <span class="sort-icon">
                                                            </span>
                                                        </span>
                                                    </th>
                                                    <th class="w-[60px]">
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- <tr>
                                                    <td class="text-center">
                                                        <input class="checkbox checkbox-sm"
                                                            data-datatable-row-check="true" type="checkbox" value="1" />
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2.5">
                                                            <img alt="" class="rounded-full size-9 shrink-0"
                                                                src="assets/media/avatars/300-1.png" />
                                                            <div class="flex flex-col">
                                                                <a class="text-sm font-medium text-gray-900 hover:text-primary-active mb-px"
                                                                    href="#">
                                                                    Esther Howard
                                                                </a>
                                                                <a class="text-2sm text-gray-700 font-normal hover:text-primary-active"
                                                                    href="#">
                                                                    esther.howard@gmail.com
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-gray-800 font-normal">
                                                        Editor
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger badge-outline rounded-[30px]">
                                                            <span class="size-1.5 rounded-full bg-danger me-1.5">
                                                            </span>
                                                            On Leave
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div
                                                            class="flex items-center text-gray-800 font-normal gap-1.5">
                                                            <img alt="" class="rounded-full size-4 shrink-0"
                                                                src="assets/media/flags/malaysia.svg" />
                                                            Malaysia
                                                        </div>
                                                    </td>
                                                    <td class="text-gray-800 font-normal">
                                                        Week ago
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="menu flex-inline" data-menu="true">
                                                            <div class="menu-item" data-menu-item-offset="0, 10px"
                                                                data-menu-item-placement="bottom-end"
                                                                data-menu-item-placement-rtl="bottom-start"
                                                                data-menu-item-toggle="dropdown"
                                                                data-menu-item-trigger="click|lg:click">
                                                                <button
                                                                    class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                                                    <i class="ki-filled ki-dots-vertical">
                                                                    </i>
                                                                </button>
                                                                <div class="menu-dropdown menu-default w-full max-w-[175px]"
                                                                    data-menu-dismiss="true">
                                                                    <div class="menu-item">
                                                                        <a class="menu-link" href="#">
                                                                            <span class="menu-icon">
                                                                                <i class="ki-filled ki-search-list">
                                                                                </i>
                                                                            </span>
                                                                            <span class="menu-title">
                                                                                View
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="menu-item">
                                                                        <a class="menu-link" href="#">
                                                                            <span class="menu-icon">
                                                                                <i class="ki-filled ki-file-up">
                                                                                </i>
                                                                            </span>
                                                                            <span class="menu-title">
                                                                                Export
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="menu-separator">
                                                                    </div>
                                                                    <div class="menu-item">
                                                                        <a class="menu-link" href="#">
                                                                            <span class="menu-icon">
                                                                                <i class="ki-filled ki-pencil">
                                                                                </i>
                                                                            </span>
                                                                            <span class="menu-title">
                                                                                Edit
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="menu-item">
                                                                        <a class="menu-link" href="#">
                                                                            <span class="menu-icon">
                                                                                <i class="ki-filled ki-copy">
                                                                                </i>
                                                                            </span>
                                                                            <span class="menu-title">
                                                                                Make a copy
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="menu-separator">
                                                                    </div>
                                                                    <div class="menu-item">
                                                                        <a class="menu-link" href="#">
                                                                            <span class="menu-icon">
                                                                                <i class="ki-filled ki-trash">
                                                                                </i>
                                                                            </span>
                                                                            <span class="menu-title">
                                                                                Remove
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr> -->
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
                <!-- End of Container -->
            </main>
               <!-- End of Content -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tableBody = document.querySelector('#team_user_table tbody');
            const paginationContainer = document.querySelector('[data-datatable-pagination]');
            const pageSizeSelector = document.querySelector('[data-datatable-size]');
            const infoText = document.querySelector('[data-datatable-info]');

            let limit = 10;
            let currentPage = 1;
            let searchQuery = '';
            let isLoggedIn = null;
            let isActive = null;


            async function fetchUsers(page = 1) {
                const token = localStorage.getItem('auth_token');
                const offset = (page - 1) * limit;
                tableBody.innerHTML = `<tr><td colspan="7" class="text-center text-gray-500">Loading...</td></tr>`;

                try {
                    const response = await fetch('<?= $baseUrl ?>/api/admin/users', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Authorization': `Bearer ${token}`
                        },
                        body: JSON.stringify({
                            limit: limit,
                            offset: offset,
                            search: searchQuery,
                            is_logged_in: isLoggedIn,
                            is_active: isActive
                        })
                    });

                    const data = await response.json();
                    console.log("Fetched data:", data);  // ✅ Add this line

                    if (data.success && Array.isArray(data.data)) {
                        renderTable(data.data);

                        const total = data.meta?.total ?? data.data.length; // fallback if `counts` is missing
                        renderPagination(total, limit, page);
                        renderInfo(total, page, limit);
                    } else {
                        tableBody.innerHTML = `<tr><td colspan="7" class="text-center text-red-500">No users found.</td></tr>`;
                        paginationContainer.innerHTML = '';
                        infoText.textContent = '';
                    }
                } catch (error) {
                    console.error('Fetch error:', error);
                    tableBody.innerHTML = `<tr><td colspan="7" class="text-center text-red-500">Error fetching data</td></tr>`;
                }
            }


            function renderTable(users) {
                tableBody.innerHTML = '';
                users.forEach((user, index) => {
                    const statusBadge = (user.is_logged_in === true || user.is_logged_in === "true")
                    ? '<span class="badge badge-success badge-outline rounded-[30px]"><span class="size-1.5 rounded-full bg-success me-1.5"></span>Online</span>'
                    : '<span class="badge badge-danger badge-outline rounded-[30px]"><span class="size-1.5 rounded-full bg-danger me-1.5"></span>Offline</span>';

                    const row = `
                        <tr>
                            <td class="text-center">
                                <input class="checkbox checkbox-sm" type="checkbox" value="${user.id}" />
                            </td>
                            <td>
                                <div class="flex items-center gap-2.5">
                                    <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-1.png" />
                                    <div class="flex flex-col">
                                        <span class="text-sm font-medium text-gray-900 mb-px">${user.name}</span>
                                        <span class="text-2sm text-gray-700 font-normal">${user.email}</span>
                                    </div>
                                </div>
                            </td>
                            <td class="text-gray-800 font-normal">${user.role}</td>
                            <td>${statusBadge}</td>
                            <td class="text-gray-800 font-normal">${user.address_line_1}</td>
                            <td>
                                ${user.is_active === 'true'
                                    ? '<span class="badge badge-success badge-outline rounded-[30px]"><span class="size-1.5 rounded-full bg-success me-1.5"></span>Active</span>'
                                    : '<span class="badge badge-primary badge-outline rounded-[30px]"><span class="size-1.5 rounded-full bg-primary me-1.5"></span>Inactive</span>'
                                }
                            </td>

                            <td class="text-center">
                                <div class="menu flex-inline" data-menu="true">
                                    <div class="menu-item" data-menu-item-offset="0, 10px"
                                        data-menu-item-placement="bottom-end"
                                        data-menu-item-placement-rtl="bottom-start"
                                        data-menu-item-toggle="dropdown"
                                        data-menu-item-trigger="click|lg:click">
                                        <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                            <i class="ki-filled ki-dots-vertical"></i>
                                        </button>
                                        <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                                            <div class="menu-item"><a class="menu-link" href="#"><i class="ki-filled ki-search-list me-2"></i>View</a></div>
                                            <div class="menu-item"><a class="menu-link" href="#"><i class="ki-filled ki-file-up me-2"></i>Export</a></div>
                                            <div class="menu-separator"></div>
                                            <div class="menu-item"><a class="menu-link" href="#"><i class="ki-filled ki-pencil me-2"></i>Edit</a></div>
                                            <div class="menu-item"><a class="menu-link" href="#"><i class="ki-filled ki-copy me-2"></i>Make a copy</a></div>
                                            <div class="menu-separator"></div>
                                            <div class="menu-item"><a class="menu-link text-danger" href="#"><i class="ki-filled ki-trash me-2"></i>Remove</a></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    `;
                    tableBody.insertAdjacentHTML('beforeend', row);
                });
            }

            function renderPagination(total, limit, currentPage) {
                const totalPages = Math.ceil(total / limit);
                paginationContainer.innerHTML = '';

                for (let i = 1; i <= totalPages; i++) {
                    const btn = document.createElement('button');
                    btn.className = `px-3 py-1 rounded ${i === currentPage ? 'bg-indigo-600 text-white' : 'bg-white text-gray-700 border'}`;
                    btn.textContent = i;
                    btn.addEventListener('click', () => {
                        currentPage = i;
                        fetchUsers(currentPage);
                    });

                    paginationContainer.appendChild(btn);
                }
            }

            function renderInfo(total, currentPage, limit) {
                const start = (currentPage - 1) * limit + 1;
                const end = Math.min(currentPage * limit, total);
                infoText.textContent = `Showing ${start}–${end} of ${total} entries`;
            }

            // Event for page size change
            if (pageSizeSelector) {
                [5, 10, 20].forEach(size => {
                    const option = document.createElement('option');
                    option.value = size;
                    option.textContent = size;
                    pageSizeSelector.appendChild(option);
                });

                pageSizeSelector.value = limit;
                pageSizeSelector.addEventListener('change', (e) => {
                    limit = parseInt(e.target.value);
                    currentPage = 1;
                    fetchUsers(currentPage);
                });
            }

            // Initial fetch
            fetchUsers(currentPage);

            const searchInput = document.querySelector('[data-datatable-search]');
            const loginFilter = document.querySelector('#filter-loggedin');
            const activeFilter = document.querySelector('#filter-active');
            const applyButton = document.querySelector('#apply-filters');

            if (searchInput) {
                searchInput.addEventListener('input', (e) => {
                    searchQuery = e.target.value;
                });
            }

            if (applyButton) {
                applyButton.addEventListener('click', () => {
                    isLoggedIn = loginFilter.value === '' ? null : loginFilter.value === 'true';
                    isActive = activeFilter.value === '' ? null : activeFilter.value === 'true';
                    currentPage = 1;
                    fetchUsers(currentPage);
                });
            }

        });
    </script>

               <!-- Footer -->
<?php include("../footer.php"); ?>