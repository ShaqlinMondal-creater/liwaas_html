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

    let currentPage = 1;
    let limit = 10;
    let totalRecords = 0;

    async function fetchCarts(page = 1) {

    const offset = (page - 1) * limit;

    tableBody.innerHTML = `
        <tr>
            <td colspan="9" class="text-center py-4 text-gray-500">
                Loading carts...
            </td>
        </tr>
    `;

    try {

        const response = await fetch("<?= $baseUrl ?>/admin/carts", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${token}`
            },
            body: JSON.stringify({
                limit: limit,
                offset: offset
            })
        });

        console.log("Raw response:", response);

        const result = await response.json();

        console.log("API Result:", result);

        if (!result.success) {
            tableBody.innerHTML =
                `<tr><td colspan="9" class="text-center text-red-500">
                    ${result.message || "No carts found"}
                </td></tr>`;
            return;
        }

        if (!result.meta) {
            console.error("Meta missing in response");
            return;
        }

        totalRecords = result.meta.total || 0;
        limit = result.meta.limit || 10;

        renderCarts(result.data || []);
        renderPagination(totalRecords, page);
        renderInfo(page);

        document.getElementById("total_carts_count").textContent = totalRecords;

    } catch (err) {
        console.error("Fetch Error:", err);
        tableBody.innerHTML =
            `<tr><td colspan="9" class="text-center text-red-500">
                ${err.message}
            </td></tr>`;
    }
}


    function renderCarts(carts) {
        tableBody.innerHTML = "";

        carts.forEach(item => {

            const cart = item.cart;
            const product = cart.product;
            const variation = cart.variation;

            const userName = cart.user_name || `<span class="text-gray-400">Guest</span>`;

            const variationText = variation
                ? `${variation.color} / ${variation.size}`
                : `<span class="text-gray-400">No variation</span>`;

            const image = variation?.images?.length
                ? `<img src="${variation.images[0]}" class="w-10 h-10 rounded object-cover">`
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
                                <div class="font-medium">${product.name}</div>
                                <div class="text-xs text-gray-500">${product.aid}</div>
                            </div>
                        </div>
                    </td>

                    <td>${variationText}</td>

                    <td>${cart.quantity}</td>

                    <td>₹${cart.sell_price}</td>

                    <td class="font-semibold">₹${cart.total_price}</td>

                    <td>${new Date(cart.created_at).toLocaleDateString()}</td>

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

        for (let i = 1; i <= totalPages; i++) {
            const btn = document.createElement("button");
            btn.className = `px-3 py-1 border rounded ${
                i === page ? "bg-indigo-600 text-white" : ""
            }`;
            btn.textContent = i;
            btn.onclick = () => {
                currentPage = i;
                fetchCarts(i);
            };
            pagination.appendChild(btn);
        }
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
            const res = await fetch(`<?= $baseUrl ?>/admin/cart/delete/${cartId}`, {
                method: "DELETE",
                headers: {
                    Authorization: `Bearer ${token}`
                }
            });

            const result = await res.json();

            if (result.success) {
                fetchCarts(currentPage);
            } else {
                alert("Delete failed");
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
                const res = await fetch(`<?= $baseUrl ?>/admin/cart/bulk-delete`, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        Authorization: `Bearer ${token}`
                    },
                    body: JSON.stringify({ ids: selected })
                });

                const result = await res.json();

                if (result.success) {
                    fetchCarts(currentPage);
                } else {
                    alert("Bulk delete failed");
                }

            } catch (err) {
                alert("Error deleting carts");
            }
        });

    fetchCarts(currentPage);
});
</script>

<?php include("../footer.php"); ?>
