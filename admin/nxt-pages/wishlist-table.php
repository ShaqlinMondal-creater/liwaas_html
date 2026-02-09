<base href="../">
<?php include("../header.php"); ?>

<main class="grow content pt-5">

<div class="container-fixed">
    <div class="flex justify-between items-center pb-7.5">
        <div>
            <h1 class="text-xl font-medium text-gray-900">
                Wishlist Management
            </h1>
            <div class="flex gap-2 mt-1">
                <span>Total Wishlists:</span>
                <span id="total_wishlist_count" class="font-semibold">0</span>
            </div>
        </div>

        <button id="bulk_delete_wishlist"
            class="btn btn-sm btn-danger">
            Delete Selected
        </button>
    </div>
</div>

<div class="container-fixed">
<div class="card card-grid min-w-full">
<div class="card-body">

<!-- FILTERS -->
<div class="card-header flex gap-3 flex-wrap">

    <input type="text"
        id="search_user"
        placeholder="Search User"
        class="input input-sm w-48"/>

    <input type="text"
        id="search_product"
        placeholder="Search Product"
        class="input input-sm w-48"/>

    <button id="apply_filters"
        class="btn btn-sm btn-primary">
        Apply
    </button>

</div>

<div class="scrollable-x-auto">
<table class="table table-auto table-border">
<thead>
<tr>
    <th class="w-[60px] text-center">
        <input id="select_all_wishlist"
            class="checkbox checkbox-sm"
            type="checkbox"/>
    </th>
    <th>User</th>
    <th>Product</th>
    <th>Date</th>
    <th></th>
</tr>
</thead>
<tbody id="wishlist_table_body"></tbody>
</table>
</div>

<div class="card-footer flex justify-between mt-5">
    <span id="wishlist_info_text"></span>
    <div id="wishlist_pagination" class="flex gap-2"></div>
</div>

</div>
</div>
</div>

</main>

<script>
document.addEventListener("DOMContentLoaded", () => {

const tableBody = document.getElementById("wishlist_table_body");
const pagination = document.getElementById("wishlist_pagination");
const infoText = document.getElementById("wishlist_info_text");
const token = localStorage.getItem("auth_token");

let isLoading = false;
let currentPage = 1;
let limit = 10;
let totalRecords = 0;

const searchUser = document.getElementById("search_user");
const searchProduct = document.getElementById("search_product");
const applyBtn = document.getElementById("apply_filters");

async function fetchWishlists(page = 1) {

    if (isLoading) return;
    isLoading = true;

    const offset = (page - 1) * limit;

    tableBody.innerHTML =
        `<tr>
            <td colspan="5" class="text-center py-4">
                Loading wishlists...
            </td>
        </tr>`;

    try {

        const res = await fetch("<?= $baseUrl ?>/api/admin/wishlists", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${token}`
            },
            body: JSON.stringify({
                user_name: searchUser.value || undefined,
                product_name: searchProduct.value || undefined,
                limit: limit,
                offset: offset
            })
        });

        const result = await res.json();

        if (!result.success) {
            tableBody.innerHTML =
                `<tr><td colspan="5" class="text-center text-red-500">
                    ${result.message || "No data found"}
                </td></tr>`;
            isLoading = false;
            return;
        }

        totalRecords = result.meta.total || 0;
        limit = result.meta.limit || 10;

        renderWishlists(result.data || []);
        renderPagination(totalRecords, page);
        renderInfo(page);

        document.getElementById("total_wishlist_count")
            .textContent = totalRecords;

    } catch (err) {
        tableBody.innerHTML =
            `<tr><td colspan="5" class="text-center text-red-500">
                Error loading data
            </td></tr>`;
    }

    isLoading = false;
}

function renderWishlists(data) {

    tableBody.innerHTML = "";

    data.forEach(item => {

        const user = item.user?.name
            ? item.user.name
            : `<span class="badge badge-warning">Guest</span>`;

        const product = item.product?.name
            || `<span class="text-gray-400">Deleted Product</span>`;

        const row = `
            <tr>
                <td class="text-center">
                    <input type="checkbox"
                        class="wishlist-checkbox"
                        value="${item.id}">
                </td>

                <td>${user}</td>
                <td>${product}</td>
                <td>
                    ${item.created_at
                        ? new Date(item.created_at).toLocaleDateString()
                        : "-"}
                </td>

                <td>
                    <button
                        class="btn btn-sm btn-danger delete-wishlist"
                        data-id="${item.id}">
                        Delete
                    </button>
                </td>
            </tr>
        `;

        tableBody.insertAdjacentHTML("beforeend", row);
    });

    document.getElementById("select_all_wishlist").checked = false;
}

function renderPagination(total, page) {

    pagination.innerHTML = "";

    const totalPages = Math.ceil(total / limit);
    if (totalPages <= 1) return;

    const prev = document.createElement("button");
    prev.textContent = "Prev";
    prev.disabled = page === 1;
    prev.className = "px-3 py-1 border rounded";
    prev.onclick = () => {
        if (page > 1) {
            currentPage--;
            fetchWishlists(currentPage);
        }
    };
    pagination.appendChild(prev);

    for (let i = 1; i <= totalPages; i++) {
        const btn = document.createElement("button");
        btn.textContent = i;
        btn.className =
            `px-3 py-1 border rounded ${
                i === page ? "bg-indigo-600 text-white" : ""
            }`;
        btn.onclick = () => {
            currentPage = i;
            fetchWishlists(i);
        };
        pagination.appendChild(btn);
    }

    const next = document.createElement("button");
    next.textContent = "Next";
    next.disabled = page === totalPages;
    next.className = "px-3 py-1 border rounded";
    next.onclick = () => {
        if (page < totalPages) {
            currentPage++;
            fetchWishlists(currentPage);
        }
    };
    pagination.appendChild(next);
}

function renderInfo(page) {
    const start = (page - 1) * limit + 1;
    const end = Math.min(page * limit, totalRecords);

    infoText.textContent =
        `Showing ${start}–${end} of ${totalRecords} wishlists`;
}

/* APPLY FILTER */
applyBtn.addEventListener("click", () => {
    currentPage = 1;
    fetchWishlists(1);
});

/* SELECT ALL */
document.getElementById("select_all_wishlist")
.addEventListener("change", function() {
    document.querySelectorAll(".wishlist-checkbox")
        .forEach(cb => cb.checked = this.checked);
});

/* SINGLE DELETE */
document.addEventListener("click", async e => {

    const btn = e.target.closest(".delete-wishlist");
    if (!btn) return;

    const id = btn.dataset.id;

    if (!confirm("Delete this wishlist?")) return;

    await fetch(`<?= $baseUrl ?>/admin/wishlist/delete/${id}`, {
        method: "DELETE",
        headers: {
            "Authorization": `Bearer ${token}`
        }
    });

    fetchWishlists(currentPage);
});

/* BULK DELETE */
document.getElementById("bulk_delete_wishlist")
.addEventListener("click", async () => {

    const selected = [...document.querySelectorAll(".wishlist-checkbox:checked")]
        .map(cb => cb.value);

    if (!selected.length) {
        alert("No wishlist selected");
        return;
    }

    if (!confirm(`Delete ${selected.length} wishlists?`)) return;

    await Promise.all(
        selected.map(id =>
            fetch(`<?= $baseUrl ?>/admin/wishlist/delete/${id}`, {
                method: "DELETE",
                headers: {
                    "Authorization": `Bearer ${token}`
                }
            })
        )
    );

    fetchWishlists(currentPage);
});

fetchWishlists(currentPage);

});
</script>

<?php include("../footer.php"); ?>
