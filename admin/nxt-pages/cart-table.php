<base href="../">
<?php include("../header.php"); ?>

<main class="grow content pt-5" id="content" role="content">

    <div class="container-fixed">
        <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
            <div class="flex flex-col justify-center gap-2">
                <h1 class="text-xl font-medium leading-none text-gray-900">
                    Cart Management
                </h1>
                <div class="flex items-center flex-wrap gap-1.5 font-medium">
                    <span class="text-md text-gray-700">Total Carts:</span>
                    <span id="total_carts_count" class="text-md text-gray-800 font-medium">0</span>
                </div>
            </div>

            <div class="flex gap-3 mb-3">
                <button id="bulk_delete_cart" class="btn btn-sm btn-danger">Delete Selected</button>
            </div>
        </div>
    </div>

    <div class="container-fixed">
        <div class="card card-grid min-w-full">
            <div class="card-body">
                <div class="scrollable-x-auto">
                    <div class="card-header flex flex-wrap gap-3 items-center justify-between">

                        <div class="flex gap-3 flex-wrap">

                            <input 
                                type="text" 
                                id="search_user"
                                placeholder="Search User Name"
                                class="input input-sm w-48" />

                            <input 
                                type="text" 
                                id="search_product"
                                placeholder="Search Product Name"
                                class="input input-sm w-48" />

                            <select id="sort_price" class="select select-sm w-40">
                                <option value="">Sort By Price</option>
                                <option value="min_to_max">Low → High</option>
                                <option value="max_to_min">High → Low</option>
                            </select>

                            <button id="apply_filters" class="btn btn-sm btn-primary">
                                Apply
                            </button>

                        </div>
                    </div>

                    <table class="table table-auto table-border">
                        <thead>
                            <tr>
                                <th class="w-[60px] text-center">
                                    <input id="select_all_carts" class="checkbox checkbox-sm" type="checkbox" />
                                </th>
                                <th>User</th>
                                <th>Product</th>
                                <th>Variation</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>Total</th>
                                <th>Date</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="cart_table_body"></tbody>
                    </table>
                </div>

                <div class="card-footer flex justify-between items-center mt-5">
                    <span id="cart_info_text"></span>
                    <div id="cart_pagination" class="flex gap-2"></div>
                </div>
            </div>
        </div>
    </div>

</main>

<script>
document.addEventListener("DOMContentLoaded", () => {

    const tableBody = document.getElementById("cart_table_body");
    const pagination = document.getElementById("cart_pagination");
    const infoText = document.getElementById("cart_info_text");
    const token = localStorage.getItem("auth_token");
    let isLoading = false;
    let currentPage = 1;
    let limit = 10;
    let totalRecords = 0;

    const searchUser = document.getElementById("search_user");
    const searchProduct = document.getElementById("search_product");
    const sortPrice = document.getElementById("sort_price");
    const applyBtn = document.getElementById("apply_filters");

    async function fetchCarts(page = 1) {

        if (isLoading) return;   // prevent multiple calls
        isLoading = true;
        const offset = (page - 1) * limit;

        tableBody.innerHTML = `
            <tr>
                <td colspan="9" class="text-center py-4 text-gray-500">
                    Loading carts...
                </td>
            </tr>
        `;

        try {

            const response = await fetch("<?= $baseUrl ?>/api/admin/carts", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": `Bearer ${token}`
                },
                body: JSON.stringify({
                    user_name: searchUser.value || undefined,
                    product_name: searchProduct.value || undefined,
                    sort_price: sortPrice.value || undefined,
                    limit: limit,
                    offset: offset
                })
            });

            const result = await response.json();

            if (!result.success) {
                tableBody.innerHTML =
                    `<tr><td colspan="9" class="text-center text-red-500">
                        ${result.message || "No carts found"}
                    </td></tr>`;
                    isLoading = false;   // IMPORTANT
                return;
            }

            totalRecords = result.meta.total || 0;
            limit = result.meta.limit || 10;

            renderCarts(result.data || []);
            renderPagination(totalRecords, page);
            renderInfo(page);

            document.getElementById("total_carts_count").textContent = totalRecords;
            isLoading = false;

        } catch (err) {
            tableBody.innerHTML =
                `<tr><td colspan="9" class="text-center text-red-500">
                    ${err.message}
                </td></tr>`;
                isLoading = false;
        }
    }
    applyBtn.addEventListener("click", () => {
        currentPage = 1;
        fetchCarts(1);
    });

    // Search on Enter key
    [searchUser, searchProduct].forEach(input => {
        input.addEventListener("keydown", (e) => {
            if (e.key === "Enter") {
                currentPage = 1;
                fetchCarts(1);
            }
        });
    });

    // Auto apply when sort changes
    sortPrice.addEventListener("change", () => {
        currentPage = 1;
        fetchCarts(1);
    });

    function renderCarts(carts) {
        tableBody.innerHTML = "";

        carts.forEach(item => {

            const cart = item.cart || {};

            const product = cart.product || {};
            const variation = cart.variation || {};

            const userName = cart.user_name 
                ? cart.user_name 
                : `<span class="badge badge-warning">Guest</span>`;

            const productName = product.name || 
                `<span class="text-gray-400">Product deleted</span>`;

            const productAid = product.aid || "-";

            const variationText = cart.variation
                ? `${variation.color || "-"} / ${variation.size || "-"}`
                : `<span class="text-gray-400">No variation</span>`;

            const image = variation.images && variation.images.length
                ? `<img src="${variation.images[0]}" 
                    class="w-10 h-10 rounded object-cover">`
                : "";

            const row = `
                <tr>
                    <td class="text-center">
                        <input type="checkbox" class="cart-checkbox" value="${item.id}">
                    </td>

                    <td>${userName}</td>

                    <td>
                        <div class="flex items-center gap-2">
                            ${image}
                            <div>
                                <div class="font-medium">${productName}</div>
                                <div class="text-xs text-gray-500">${productAid}</div>
                            </div>
                        </div>
                    </td>

                    <td>${variationText}</td>

                    <td>${cart.quantity || 0}</td>

                    <td>₹${cart.sell_price || 0}</td>

                    <td class="font-semibold">₹${cart.total_price || 0}</td>

                    <td>
                        ${cart.created_at 
                            ? new Date(cart.created_at).toLocaleDateString() 
                            : "-"}
                    </td>

                    <td>
                        <button 
                            class="btn btn-sm btn-danger delete-cart" 
                            data-id="${item.id}">
                            Delete
                        </button>
                    </td>
                </tr>
            `;

            tableBody.insertAdjacentHTML("beforeend", row);
        });

        document.getElementById("select_all_carts").checked = false;
    }

    function renderPagination(total, page) {

        pagination.innerHTML = "";

        const totalPages = Math.ceil(total / limit);
        if (totalPages <= 1) return;

        // PREV BUTTON
        const prevBtn = document.createElement("button");
        prevBtn.textContent = "Prev";
        prevBtn.className = "px-3 py-1 border rounded";
        prevBtn.disabled = page === 1;
        prevBtn.onclick = () => {
            if (page > 1) {
                currentPage--;
                fetchCarts(currentPage);
            }
        };
        pagination.appendChild(prevBtn);

        // PAGE NUMBERS (max 5 around current)
        let startPage = Math.max(1, page - 2);
        let endPage = Math.min(totalPages, page + 2);

        for (let i = startPage; i <= endPage; i++) {

            const btn = document.createElement("button");
            btn.textContent = i;
            btn.className = `px-3 py-1 border rounded ${
                i === page ? "bg-indigo-600 text-white" : ""
            }`;

            btn.onclick = () => {
                currentPage = i;
                fetchCarts(i);
            };

            pagination.appendChild(btn);
        }

        // NEXT BUTTON
        const nextBtn = document.createElement("button");
        nextBtn.textContent = "Next";
        nextBtn.className = "px-3 py-1 border rounded";
        nextBtn.disabled = page === totalPages;
        nextBtn.onclick = () => {
            if (page < totalPages) {
                currentPage++;
                fetchCarts(currentPage);
            }
        };
        pagination.appendChild(nextBtn);
    }

    function renderInfo(page) {
        const start = (page - 1) * limit + 1;
        const end = Math.min(page * limit, totalRecords);

        infoText.textContent =
            `Showing ${start}–${end} of ${totalRecords} carts`;
    }

    // Select All
    document.getElementById("select_all_carts")
        ?.addEventListener("change", function() {
            document.querySelectorAll(".cart-checkbox")
                .forEach(cb => cb.checked = this.checked);
        });

    // Single Delete
    document.addEventListener("click", async function(e) {

        const deleteBtn = e.target.closest(".delete-cart");
        if (!deleteBtn) return;

        const cartId = deleteBtn.dataset.id;

        if (!confirm("Delete this cart item?")) return;

        try {
            const res = await fetch(
                `<?= $baseUrl ?>/api/admin/cart/delete/${cartId}`,
                {
                    method: "DELETE",
                    headers: {
                        "Authorization": `Bearer ${token}`
                    }
                }
            );

            const result = await res.json();

            if (result.success) {
                fetchCarts(currentPage);
            } else {
                alert(result.message || "Delete failed");
            }

        } catch (err) {
            alert("Error deleting cart");
        }
    });

    // Bulk Delete
    document.getElementById("bulk_delete_cart")
    ?.addEventListener("click", async () => {

        const selected = [...document.querySelectorAll(".cart-checkbox:checked")]
            .map(cb => cb.value);

        if (!selected.length) {
            alert("No carts selected");
            return;
        }

        if (!confirm(`Delete ${selected.length} carts?`)) return;

        try {

            for (const cartId of selected) {

                const res = await fetch(
                    `<?= $baseUrl ?>/api/admin/cart/delete/${cartId}`,
                    {
                        method: "DELETE",
                        headers: {
                            "Authorization": `Bearer ${token}`
                        }
                    }
                );

                const result = await res.json();

                if (!result.success) {
                    console.warn(`Failed to delete cart ID: ${cartId}`);
                }
            }

            alert("Selected carts deleted successfully");
            fetchCarts(currentPage);

        } catch (err) {
            alert("Error deleting carts");
        }
    });

    fetchCarts(currentPage);   // <-- ADD THIS

});
</script>

<?php include("../footer.php"); ?>
