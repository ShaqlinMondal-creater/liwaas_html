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
                                    Product Details
                                </h3>
                                <div class="flex flex-wrap gap-2 lg:gap-5">
                                    <div class="flex">
                                        <label class="input input-sm">
                                            <i class="ki-filled ki-magnifier">
                                            </i>
                                            <input data-datatable-search="#team_user_table" placeholder="Search Products"
                                                type="text" value="">
                                            </input>
                                        </label>
                                    </div>
                                    <div class="flex flex-wrap gap-2.5">
                                        <select class="select select-sm w-28" id="filter-loggedin">
                                            <option value="">All Brands</option>
                                            <option value="true">Liwaas</option>
                                            <option value="false">Nike</option>
                                        </select>
                                        <select class="select select-sm w-28" id="filter-active">
                                            <option value="">All Category</option>
                                            <option value="true">Male Product</option>
                                            <option value="false">Female Product</option>
                                            <option value="false">Unisex</option>
                                        </select>
                                        <button id="apply-filters" class="btn btn-sm btn-outline btn-primary">
                                            <i class="ki-filled ki-setting-4"></i>
                                            Apply
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <div class="card-body" id="product_table_wrapper">
                                <div  id="product_table">
                                    <div class="scrollable-x-auto">
                                        <table class="table table-auto table-border" data-datatable-table="true">
                                            <thead>
                                                <tr>
                                                    <th class="w-[60px] text-center">
                                                        <input class="checkbox checkbox-sm" data-datatable-check="true"
                                                            type="checkbox" />
                                                    </th>
                                                    <th class="min-w-[250px]">
                                                        <span class="sort asc">
                                                            <span class="sort-label font-normal text-gray-700">
                                                                Product
                                                            </span>
                                                            <span class="sort-icon">
                                                            </span>
                                                        </span>
                                                    </th>
                                                    <th class="min-w-[120px]">
                                                        <span class="sort">
                                                            <span class="sort-label font-normal text-gray-700">
                                                                Brand
                                                            </span>
                                                            <span class="sort-icon">
                                                            </span>
                                                        </span>
                                                    </th>
                                                    <th class="min-w-[120px]">
                                                        <span class="sort">
                                                            <span class="sort-label font-normal text-gray-700">
                                                                Status
                                                            </span>
                                                            <span class="sort-icon">
                                                            </span>
                                                        </span>
                                                    </th>
                                                    <th class="min-w-[120px]">
                                                        <span class="sort">
                                                            <span class="sort-label font-normal text-gray-700">
                                                                Category
                                                            </span>
                                                            <span class="sort-icon">
                                                            </span>
                                                        </span>
                                                    </th>
                                                    <th class="min-w-[300px]">
                                                        <span class="sort">
                                                            <span class="sort-label font-normal text-gray-700">
                                                                Variation
                                                            </span>
                                                            <span class="sort-icon">
                                                            </span>
                                                        </span>
                                                    </th>
                                                    <th class="min-w-[120px]">
                                                        <span class="sort">
                                                            <span class="sort-label font-normal text-gray-700">
                                                                Custom Design
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
                                                <!-- table data -->
                                                 <!-- <tr>
                                                    <td class="text-center">
                                                        <input class="checkbox checkbox-sm"
                                                            data-datatable-row-check="true" type="checkbox" value="1" />
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center gap-2">
                                                            <img alt="" class="rounded-full size-9 shrink-0"
                                                                src="assets/media/avatars/300-1.png" />
                                                            <div class="flex flex-col">
                                                                <a class="text-sm font-medium text-gray-900 hover:text-primary-active mb-px"
                                                                    href="#">
                                                                    Red-Blue T Shirt
                                                                </a>
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
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-gray-800 font-normal">
                                                        Liwaas
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger badge-outline rounded-[30px]">
                                                            <span class="size-1.5 rounded-full bg-danger me-1.5">
                                                            </span>
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div
                                                            class="flex items-center text-gray-800 font-normal gap-1.5">
                                                            <img alt="" class="rounded-full size-4 shrink-0"
                                                                src="assets/media/flags/malaysia.svg" />
                                                            Unisex
                                                        </div>
                                                    </td>
                                                    <td class="text-gray-800 font-normal">
                                                        <span>aid: A-210</span><br>
                                                        <span>uid: 1001</span><br>
                                                        <span>color: red-200</span><br>
                                                        <span>size: XL</span><br>
                                                        <span>regular_price: 799</span><br>
                                                        <span>sell_price: 549</span><br>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger badge-outline rounded-[30px]">
                                                            <span class="size-1.5 rounded-full bg-danger me-1.5">
                                                            </span>
                                                            Not Available
                                                        </span>
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
        const tableBody = document.querySelector('#product_table tbody');
        const paginationContainer = document.querySelector('[data-datatable-pagination]');
        const infoText = document.querySelector('[data-datatable-info]');
        const pageSizeSelector = document.querySelector('[data-datatable-size]');
        const searchInput = document.querySelector('input[placeholder="Search Products"]');
        const brandFilter = document.getElementById('filter-loggedin');
        const categoryFilter = document.getElementById('filter-active');
        const applyBtn = document.getElementById('apply-filters');

        let currentPage = 1;
        let limit = 10;

        async function fetchProducts(page = 1) {
            const offset = (page - 1) * limit;

            const bodyData = {
                limit: limit,
                offset: offset,
                search: searchInput.value.trim() || undefined,
                brand: brandFilter.value || undefined,
                category: categoryFilter.value || undefined
            };

            try {
                const response = await fetch('http://192.168.0.103:8000/api/products/allProducts', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(bodyData)
                });

                const data = await response.json();

                if (data.success) {
                    renderTable(data.data);
                    renderPagination(data.total, limit, page);
                    renderInfo(data.total, page, limit);
                } else {
                    tableBody.innerHTML = `<tr><td colspan="8" class="text-center text-red-500">No products found.</td></tr>`;
                }
            } catch (error) {
                console.error('Error fetching products:', error);
                tableBody.innerHTML = `<tr><td colspan="8" class="text-center text-red-500">Failed to load data</td></tr>`;
            }
        }

        function renderTable(products) {
            tableBody.innerHTML = '';

            products.forEach(product => {
                const baseImage = product.upload?.[0]?.url || 'assets/media/avatars/300-1.png';

                product.variations.forEach(variation => {
                    const variationImage = variation.images?.[0]?.url || baseImage;
                    const statusBadge = badge(product.product_status);
                    const customDesignBadge = badge(product.custom_design);

                    const row = `
                        <tr>
                            <td class="text-center"><input class="checkbox checkbox-sm" type="checkbox" value="${product.id}" /></td>
                            <td>
                                <div class="flex items-center gap-2">
                                    <img class="rounded-full size-9" src="${variationImage}" alt="${product.name}" />
                                    <div class="flex flex-col">
                                        <span class="text-sm font-medium text-gray-900">${product.name}</span>
                                        <div class="rating">${renderStars(product.ratings)}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-gray-800 font-normal">${product.brand?.name || ''}</td>
                            <td>${statusBadge}</td>
                            <td class="text-gray-800 font-normal">${product.category?.name || ''}</td>
                            <td class="text-gray-800 font-normal">
  <div class="grid grid-cols-2 gap-x-4 gap-y-1 text-xs bg-gray-50 p-2 rounded-md">
    <div><strong>AID:</strong> ${variation.aid}</div>
    <div><strong>UID:</strong> ${variation.uid}</div>
    <div><strong>Color:</strong> ${variation.color}</div>
    <div><strong>Size:</strong> ${variation.size}</div>
    <div><strong>Regular:</strong> ₹${variation.regular_price}</div>
    <div><strong>Sell:</strong> ₹${variation.sell_price}</div>
    <div><strong>Stock:</strong> ${variation.stock}</div>
  </div>
</td>

                            <td>${customDesignBadge}</td>
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
            });
        }

        function renderStars(count) {
            const full = Math.floor(count);
            const html = [];
            for (let i = 1; i <= 5; i++) {
                if (i <= full) {
                    html.push(`<i class="ki-solid ki-star text-base text-yellow-400"></i>`);
                } else {
                    html.push(`<i class="ki-outline ki-star text-base text-gray-400"></i>`);
                }
            }
            return html.join('');
        }

        function badge(value) {
            const lower = (value || '').toLowerCase();
            const isActive = lower === 'active' || lower === 'available';
            const color = isActive ? 'success' : 'danger';
            const label = isActive ? 'Active' : 'Inactive';

            return `<span class="badge badge-${color} badge-outline rounded-[30px]">
                <span class="size-1.5 rounded-full bg-${color} me-1.5"></span>
                ${label}
            </span>`;
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
                    fetchProducts(currentPage);
                });
                paginationContainer.appendChild(btn);
            }
        }

        function renderInfo(total, currentPage, limit) {
            const start = (currentPage - 1) * limit + 1;
            const end = Math.min(currentPage * limit, total);
            infoText.textContent = `Showing ${start}–${end} of ${total} entries`;
        }

        // Filters & Search Events
        if (applyBtn) {
            applyBtn.addEventListener('click', () => {
                currentPage = 1;
                fetchProducts(currentPage);
            });
        }

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
                fetchProducts(currentPage);
            });
        }

        // Initial Load
        fetchProducts(currentPage);
    });
</script>


               <!-- Footer -->
<?php include("../footer.php"); ?>