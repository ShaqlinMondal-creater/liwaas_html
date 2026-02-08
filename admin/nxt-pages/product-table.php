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
                        Products
                    </h1>
                </div>
                <div class="flex items-center gap-2.5">
                    <a class="btn btn-sm btn-primary" href="nxt-pages/add-product.php">
                        Add Product
                    </a>
                    <!-- <a class="btn btn-sm btn-primary" href="#">
                        Add Member
                    </a> -->
                </div>
            </div>
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
                                    <option value="Liwaas">Liwaas</option>
                                    <option value="khadim">Khadim</option>
                                </select>
                                <select class="select select-sm w-28" id="filter-active">
                                    <option value="">All Category</option>
                                    <option value="male">Male Product</option>
                                    <option value="female">Female Product</option>
                                    <option value="unisex">Unisex</option>
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
                                            <th class="w-[60px]">                                                
                                                <span class="sort-label font-normal text-gray-700">
                                                    Mark Product
                                                </span>
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
                                            <th class="min-w-[80px]">
                                                <span class="sort">
                                                    <span class="sort-label font-normal text-gray-700">
                                                        Brand
                                                    </span>
                                                    <span class="sort-icon">
                                                    </span>
                                                </span>
                                            </th>
                                            <th class="min-w-[80px]">
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
                // Show loader inside tbody
                const tbody = document.querySelector("#product_table tbody");
                tbody.innerHTML = `
                    <tr>
                        <td colspan="6" class="text-center py-4 text-gray-500">
                            <svg class="animate-spin h-5 w-5 inline-block text-gray-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
                            </svg>
                            Loading Product data...
                        </td>
                    </tr>
                `;
                try {
                    const response = await fetch('<?= $baseUrl ?>/api/products/allProducts', {
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
                    const firstVariation = product.variations?.[0]; // ✅ First variation
                    const firstUID = firstVariation?.uid || '';

                    const statusBadge = badge(product.product_status);
                    const customDesignBadge = badge(product.custom_design);

                    // Build all variations HTML inside single column
                    let variationsHTML = '';

                    product.variations.forEach(variation => {
                        variationsHTML += `
                            <div class="border-b last:border-0 pb-2 mb-2 last:mb-0">
                                <div class="grid grid-cols-2 gap-x-4 gap-y-1 text-xs">
                                    <div><strong>AID:</strong> ${variation.aid}</div>
                                    <div><strong>UID:</strong> ${variation.uid}</div>
                                    <div><strong>Color:</strong> ${variation.color}</div>
                                    <div><strong>Size:</strong> ${variation.size}</div>
                                    <div><strong>Regular:</strong> ₹${variation.regular_price}</div>
                                    <div><strong>Sell:</strong> ₹${variation.sell_price}</div>
                                    <div><strong>Stock:</strong> ${variation.stock}</div>
                                </div>
                            </div>
                        `;
                    });

                    const row = `
                        <tr>
                            <td class="text-center">
                                <input class="checkbox checkbox-sm" type="checkbox" value="${product.id}" />
                            </td>

                            <!-- Mark Product Column -->
                            <td class="text-center">
                                <div class="menu flex-inline" data-menu="true">
                                    <div class="menu-item"
                                        data-menu-item-toggle="dropdown"
                                        data-menu-item-trigger="click|lg:click">
                                        <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                            <i class="ki-filled ki-dots-vertical"></i>
                                        </button>
                                        <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                                            <div class="menu-item">
                                                <a class="menu-link mark-product" 
                                                    data-section="Trending"
                                                    data-variations='${JSON.stringify(product.variations)}'>
                                                    As Trending
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link mark-product" 
                                                data-section="New Arrival" 
                                                data-variations='${JSON.stringify(product.variations)}'>
                                                As New Arrival
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link mark-product" 
                                                data-section="Gallery" 
                                                data-variations='${JSON.stringify(product.variations)}'>
                                                As Gallery
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <!-- Product -->
                            <td>
                                <div class="flex items-center gap-2">
                                    <img class="rounded-full size-9" src="${baseImage}" />
                                    <div class="flex flex-col">
                                        <span class="text-sm font-medium text-gray-900">${product.name}</span>
                                        <div class="rating">${renderStars(product.ratings)}</div>
                                    </div>
                                </div>
                            </td>

                            <td>${product.brand?.name || ''}</td>
                            <td>${statusBadge}</td>
                            <td>${product.category?.name || ''}</td>

                            <!-- All Variations in Single Cell -->
                            <td class="bg-gray-50 p-3 rounded-md">
                                ${variationsHTML}
                            </td>

                            <td>${customDesignBadge}</td>

                            <!-- Actions -->
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
                                            <div class="menu-separator"></div>
                                            <div class="menu-item"><a class="menu-link" href="nxt-pages/update-product.php?uid=${product.variations?.[0]?.aid}"><i class="ki-filled ki-pencil me-2"></i>Edit</a></div>
                                            <div class="menu-item"><a class="menu-link" href="#"><i class="ki-filled ki-copy me-2"></i>Make a copy</a></div>
                                            <div class="menu-separator"></div>
                                            <div class="menu-item">
                                                <a class="menu-link text-danger delete-product" href="#" 
                                                    data-aid="${product.variations?.[0]?.aid}">
                                                    <i class="ki-filled ki-trash me-2"></i>Remove
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    `;

                    tableBody.insertAdjacentHTML('beforeend', row);
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

            document.addEventListener('click', (e) => {
                const target = e.target.closest('.mark-product');
                if (!target) return;

                e.preventDefault();

                const section = target.dataset.section;
                const variations = JSON.parse(target.dataset.variations || '[]');

                if (!variations.length) {
                    Swal.fire('Error', 'No variations found.', 'error');
                    return;
                }

                // Build variation selection HTML
                let variationOptions = '';

                variations.forEach((v, index) => {
                    variationOptions += `
                        <div class="text-left mb-2">
                            <label style="cursor:pointer;">
                                <input type="radio" name="variation_uid" value="${v.uid}" ${index === 0 ? 'checked' : ''}>
                                <strong>${v.color}</strong> | ${v.size} | <strong>${v.uid}</strong>
                                (Stock: ${v.stock})
                            </label>
                        </div>
                    `;
                });

                Swal.fire({
                    title: `Mark as ${section}?`,
                    html: `
                        <div style="text-align:left">
                            <p class="mb-2">Select variation:</p>
                            ${variationOptions}
                        </div>
                    `,
                    showCancelButton: true,
                    confirmButtonText: 'Mark Now',
                    confirmButtonColor: '#3B82F6',
                    preConfirm: () => {
                        const selected = document.querySelector('input[name="variation_uid"]:checked');
                        if (!selected) {
                            Swal.showValidationMessage('Please select a variation');
                            return false;
                        }
                        return selected.value;
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        markSectionProduct(result.value, section);
                    }
                });
            });

            document.addEventListener('click', (e) => {
                const target = e.target.closest('.delete-product');
                if (!target) return;

                e.preventDefault();

                const aid = target.dataset.aid;

                if (!aid) {
                    Swal.fire('Error', 'Product AID not found.', 'error');
                    return;
                }

                Swal.fire({
                    title: 'Are you sure?',
                    text: "This product will be permanently deleted!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#EF4444',
                    cancelButtonColor: '#6B7280',
                    confirmButtonText: 'Yes, Delete it!'
                }).then(async (result) => {
                    if (!result.isConfirmed) return;

                    try {
                        const response = await fetch(`<?= $baseUrl ?>/api/admin/products/product-delete/${aid}`, {
                            method: 'DELETE', // If your API uses POST change to POST
                            headers: {
                                'Content-Type': 'application/json',
                                'Authorization': `Bearer ${localStorage.getItem('auth_token') || ''}`
                            }
                        });

                        const data = await response.json();

                        if (data.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted!',
                                text: data.message || 'Product deleted successfully.',
                                confirmButtonColor: '#10B981'
                            });

                            // Reload table
                            fetchProducts(currentPage);

                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Failed!',
                                text: data.message || 'Unable to delete product.',
                                confirmButtonColor: '#EF4444'
                            });
                        }

                    } catch (error) {
                        console.error(error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'Server error. Please try again.',
                            confirmButtonColor: '#EF4444'
                        });
                    }
                });
            });


            // Initial Load
            fetchProducts(currentPage);
        });
    </script>
    <!-- Mark Products -->
     <script>
        async function markSectionProduct(uid, section) {
            try {
                const response = await fetch('<?= $baseUrl ?>/api/admin/fetch/marked-section-products', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': `Bearer ${localStorage.getItem('auth_token') || ''}`
                    },
                    body: JSON.stringify({
                        uid: uid,
                        section_name: section
                    })
                });

                const data = await response.json();

                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Marked Successfully!',
                        text: data.message,
                        confirmButtonColor: '#10B981'
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Failed!',
                        text: data.message || 'Something went wrong',
                        confirmButtonColor: '#EF4444'
                    });
                }
            } catch (error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Unable to mark product, please try again later.',
                    confirmButtonColor: '#EF4444'
                });
                console.error('Error marking product:', error);
            }
        }
     </script>
<!-- Footer -->
<?php include("../footer.php"); ?>