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
                                Orders Management
                            </h1>
                            <div class="flex items-center flex-wrap gap-1.5 font-medium">
                                <span class="text-md text-gray-700">Total Orders:</span>
                                <span id="total_orders_count" class="text-md text-gray-800 font-medium me-2">0</span>
                                <span class="text-md text-gray-700">Pending:</span>
                                <span id="pending_orders_count" class="text-md text-gray-800 font-medium">0</span>
                            </div>
                        </div>
                        <div class="flex gap-3 mb-3">
                            <button id="bulk_delete" class="btn btn-sm btn-danger">Delete Selected</button>
                            <button id="bulk_export" class="btn btn-sm btn-light">Export Selected</button>
                        </div>

                    </div>
                </div>
                <!-- End of Container -->
                <!-- Container -->
                <div class="container-fixed">
                    <div class="grid gap-5 lg:gap-7.5">
                        <div class="card card-grid min-w-full">
                            <div class="card-header flex-wrap gap-2">
                                <h3 id="order_count_text" class="card-title font-medium text-sm"></h3>
                                <div class="flex flex-wrap gap-2 lg:gap-5">
                                    <div class="flex">
                                        <label class="input input-sm">
                                            <i class="ki-filled ki-magnifier">
                                            </i>
                                            <input id="search_user" data-datatable-search="#order_table" placeholder="Search Customer Name"
                                                type="text" value="">
                                            </input>
                                        </label>
                                    </div>
                                    <div class="flex">
                                        <label class="input input-sm">
                                            <i class="ki-filled ki-magnifier">
                                            </i>
                                            <input id="search_order" data-datatable-search="#order_tables" placeholder="Search Order No"
                                                type="text" value="">
                                            </input>
                                        </label>
                                    </div>
                                    <div class="flex flex-wrap gap-2.5">
                                        <button id="apply_filters" class="btn btn-sm btn-outline btn-primary">
                                            Apply Filters
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div data-datatable-state-save="false" id="order_table">
                                    <div class="scrollable-x-auto">
                                        <table class="table table-auto table-border" data-datatable-table="true">
                                            <thead>
                                                <tr>
                                                    <th class="w-[60px] text-center">
                                                        <input id="select_all_orders" class="checkbox checkbox-sm" type="checkbox" />
                                                    </th>
                                                    <th class="min-w-[120px]">Order Code</th>
                                                    <th class="min-w-[180px]">Customer</th>
                                                    <th class="min-w-[180px]">Items</th>
                                                    <th class="min-w-[80px]">Payment</th>
                                                    <th class="min-w-[80px]">Shipping</th>
                                                    <th class="min-w-[180px]">Delivery</th>
                                                    <th class="min-w-[100px]">Total</th>
                                                    <th class="min-w-[150px]">Date</th>
                                                    <th class="w-[60px]"></th>
                                                </tr>
                                            </thead>
                                            <tbody id="order_table_body"></tbody>

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
                <!-- End of Container -->
            </main>
               <!-- End of Content -->

<script>
    const svcCache = {};

document.addEventListener("DOMContentLoaded", () => {

    const tableBody = document.getElementById("order_table_body");
    const pagination = document.querySelector("[data-datatable-pagination]");
    const infoText = document.querySelector("[data-datatable-info]");
    const token = localStorage.getItem("auth_token");

    const searchOrder = document.getElementById("search_order");
    const searchUser = document.getElementById("search_user");
    const applyBtn = document.getElementById("apply_filters");

    let currentPage = 1;
    let limit = 10;
    let totalRecords = 0;

    async function fetchOrders(page = 1) {

        const offset = (page - 1) * limit;

        tableBody.innerHTML = `
            <tr>
                <td colspan="10" class="text-center py-4 text-gray-500">
                    Loading orders...
                </td>
            </tr>
        `;

        try {
            const response = await fetch("<?= $baseUrl ?>/api/admin/order/get-order", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": `Bearer ${token}`
                },
                body: JSON.stringify({
                    order_code: searchOrder?.value || undefined,
                    user_name: searchUser?.value || undefined,
                    limit: limit,
                    offset: offset
                })
            });

            const result = await response.json();

            if (!result.success) {
                tableBody.innerHTML = `<tr><td colspan="10" class="text-center text-red-500">No orders found</td></tr>`;
                return;
            }

            totalRecords = result.total;

            renderOrders(result.data);
            renderPagination(result.total, page);
            renderInfo(page);
            updateHeaderCounts(result.total, result.data);

        } catch (err) {
            tableBody.innerHTML = `<tr><td colspan="10" class="text-center text-red-500">Error loading orders</td></tr>`;
        }
    }

    function renderOrders(orders) {
        let rows = "";

        orders.forEach(order => {

            const customer = order.user
            ? `${order.user.name}<br><span class="text-xs text-gray-500">${order.user.email}</span>`
            : `<span class="text-gray-400">Guest</span>`;

        const itemsPreview = order.items?.length
            ? order.items.map(i => `${i.product.name} × ${i.quantity}`).join("<br>")
            : '<span class="text-gray-400">No items</span>';

        const itemsCount = order.items?.length || 0;

        const shippingBy = order.shipping?.shipping_by ?? '—';
        const awb = order.shipping?.shipping_delivery_id ?? '—';

            rows += `
                <tr>
                    <td class="text-center">
                        <input type="checkbox" class="order-checkbox" value="${order.id}">
                    </td>
                    <td class="font-medium text-primary">
                        <a href="nxt-pages/view-order.php?code=${order.order_code}">${order.order_code}</a>
                    </td>
                    <td>${customer}</td>
                    <td>${itemsPreview}<br>(${itemsCount} items)</td>
                    <td>${badge(order.payment_type)}</td>
                    <td>${badge(order.shipping?.shipping_status)}</td>
                    <td>
                        ${shippingBy} - ${awb}
                        <div id="svc_${order.id}" class="text-xs text-gray-500 mt-1">
                            <span class="animate-pulse text-gray-400">Checking...</span>
                        </div>
                    </td>
                    <td class="font-semibold">₹${order.grand_total}</td>
                    <td>${order.created_at}</td>

                    <td class="text-center">
                        <div class="menu flex-inline" data-menu="true">
                            <div class="menu-item" data-menu-item-toggle="dropdown" data-menu-item-trigger="click">
                                <button class="menu-toggle btn btn-sm btn-light">
                                    ⋮
                                </button>
                                <div class="menu-dropdown menu-default w-[150px]">
                                    <div class="menu-item">
                                        <a class="menu-link" href="punch.php?id=${order.id}">Punch Shiprocket</a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="nxt-pages/view-order.php?code=${order.order_code}">View</a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="update-order.php?id=${order.id}">Update</a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link text-warning cancel-order" data-id="${order.id}">Cancel</a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link text-danger delete-order" data-id="${order.id}">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            `;
        });
        tableBody.innerHTML = rows;
        orders.forEach(loadServiceability);

        document.getElementById("select_all_orders").checked = false;
    }

    function badge(value) {
        if (!value) return `<span class="badge badge-secondary">N/A</span>`;

        const lower = value.toLowerCase();
        let color = "primary";

        if (lower === "cod") color = "warning";
        else if (lower === "prepaid") color = "success";
        else if (lower === "pending") color = "warning";
        else if (lower === "approved" || lower === "confirmed") color = "success";
        else if (lower === "cancelled") color = "danger";

        return `<span class="badge badge-${color} badge-outline">${value}</span>`;
    }

    function renderPagination(total, page) {
        pagination.innerHTML = "";

        const totalPages = Math.ceil(total / limit);
        if (totalPages <= 1) return;

        // Prev
        const prevBtn = createPageBtn("Prev", page - 1, false);
        prevBtn.disabled = page === 1;
        pagination.appendChild(prevBtn);

        // Page numbers (show max 5 around current)
        let startPage = Math.max(1, page - 2);
        let endPage = Math.min(totalPages, page + 2);

        for (let i = startPage; i <= endPage; i++) {
            pagination.appendChild(createPageBtn(i, i, i === page));
        }

        // Next
        const nextBtn = createPageBtn("Next", page + 1, false);
        nextBtn.disabled = page === totalPages;
        pagination.appendChild(nextBtn);
    }

    function createPageBtn(text, pageNumber, active = false) {
        const btn = document.createElement("button");
        btn.className = `px-3 py-1 rounded ${
            active ? "bg-indigo-600 text-white" : "bg-white border"
        }`;
        btn.textContent = text;
        btn.addEventListener("click", () => {
            currentPage = pageNumber;
            fetchOrders(currentPage);
        });
        return btn;
    }

    function renderInfo(page) {
        const start = (page - 1) * limit + 1;
        const end = Math.min(page * limit, totalRecords);

        infoText.textContent = `Showing ${start}–${end} of ${totalRecords} orders`;

        document.getElementById("order_count_text").textContent =
            `Showing ${start}–${end} of ${totalRecords} orders`;
    }

    function updateHeaderCounts(total, orders) {
        document.getElementById("total_orders_count").textContent = total;

        const pendingCount = orders.filter(o =>
                o.shipping?.shipping_status?.toLowerCase() === "pending"
            ).length;

        document.getElementById("pending_orders_count").textContent = pendingCount;
    }

    // Reset select all when new page loads
    document.getElementById("select_all_orders").checked = false;

    // Select All
    document.getElementById("select_all_orders")?.addEventListener("change", function() {
        const checked = this.checked;
        document.querySelectorAll(".order-checkbox").forEach(cb => {
            cb.checked = checked;
        });
    });

    document.addEventListener("click", async function(e) {

        const deleteBtn = e.target.closest(".delete-order");
        if (!deleteBtn) return;

        const orderId = deleteBtn.dataset.id;

        if (!confirm("Are you sure you want to delete this order?")) return;

        try {
            const res = await fetch(`<?= $baseUrl ?>/api/admin/order/delete/${orderId}`, {
                method: "DELETE",
                headers: {
                    Authorization: `Bearer ${token}`
                }
            });

            const result = await res.json();

            if (result.success) {
                fetchOrders(currentPage);
            } else {
                alert(result.message || "Delete failed");
            }

        } catch (err) {
            alert("Error deleting order");
        }
    });

    document.addEventListener("click", async function(e) {

        const cancelBtn = e.target.closest(".cancel-order");
        if (!cancelBtn) return;

        const orderId = cancelBtn.dataset.id;

        if (!confirm("Cancel this order?")) return;

        try {
            const res = await fetch(`<?= $baseUrl ?>/api/admin/order/cancel/${orderId}`, {
                method: "POST",
                headers: {
                    Authorization: `Bearer ${token}`
                }
            });

            const result = await res.json();

            if (result.success) {
                fetchOrders(currentPage);
            } else {
                alert(result.message || "Cancel failed");
            }

        } catch (err) {
            alert("Error cancelling order");
        }
    });

    document.getElementById("bulk_delete")?.addEventListener("click", async () => {

        const selected = [...document.querySelectorAll(".order-checkbox:checked")]
            .map(cb => cb.value);

        if (!selected.length) {
            alert("No orders selected");
            return;
        }

        if (!confirm(`Delete ${selected.length} selected orders?`)) return;

        try {
            const res = await fetch(`<?= $baseUrl ?>/api/admin/order/bulk-delete`, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    Authorization: `Bearer ${token}`
                },
                body: JSON.stringify({ ids: selected })
            });

            const result = await res.json();

            if (result.success) {
                fetchOrders(currentPage);
            } else {
                alert(result.message || "Bulk delete failed");
            }

        } catch (err) {
            alert("Error deleting orders");
        }
    });

    document.getElementById("bulk_export")?.addEventListener("click", () => {

        const selected = [...document.querySelectorAll(".order-checkbox:checked")]
            .map(cb => cb.value);

        if (!selected.length) {
            alert("No orders selected");
            return;
        }

        window.open(`<?= $baseUrl ?>/api/admin/order/export?ids=${selected.join(",")}&token=${token}`);
    });

    // Filter Button
    applyBtn?.addEventListener("click", () => {
        currentPage = 1;
        fetchOrders(currentPage);
    });

    async function loadServiceability(order){

    const el = document.getElementById(`svc_${order.id}`);
    if(!el) return;

    const pincode = order.shipping?.address?.pincode;
    if(!pincode){
        el.innerHTML = `<span class="text-gray-400">No pincode</span>`;
        return;
    }

    const cod = order.payment_type === "COD" ? 1 : 0;

    const cacheKey = `${pincode}_${cod}`;

    if(svcCache[cacheKey]){
        renderService(el, svcCache[cacheKey]);
        return;
    }

    try{

        const res = await fetch("<?= $baseUrl ?>/api/admin/shiprocket/serviceability",{
        method:"POST",
        headers:{
            "Content-Type":"application/json",
            "Authorization":`Bearer ${token}`
        },
        body:JSON.stringify({
            pickup_pincode:"700001",
            delivery_pincode:pincode,
            cod:cod,
            weight:0.4,
            length:10,
            breadth:10,
            height:4
        })
        });

        const data = await res.json();

        if(!data.success || (!data.recommended?.length && !data.fastest?.length)){
            el.innerHTML = `<span class="text-red-500">Not serviceable</span>`;
            return;
        }
        svcCache[cacheKey] = data;
        renderService(el, data);
    }catch{
        el.innerHTML = `<span class="text-red-500">Error</span>`;
    }
    }

    function renderService(el, data){

    const recommended = data.recommended?.[0];

    const fastest = data.fastest?.reduce((a,b)=>
        a.delivery_days <= b.delivery_days ? a : b
    );

    const showFastest =
        fastest && (!recommended || fastest.id !== recommended.id);

    el.innerHTML = `
        ${
        recommended
        ? `<div class="text-green-600 font-medium leading-tight">
                ${recommended.delivery_days}d ₹${recommended.total_charge}
                <span class="block text-[10px] text-gray-500">
                ${recommended.name} • Recommended
                </span>
            </div>`
        : ``
        }

        ${
        showFastest
        ? `<div class="text-indigo-600 font-medium leading-tight mt-1">
                ${fastest.delivery_days}d ₹${fastest.total_charge}
                <span class="block text-[10px] text-gray-500">
                ${fastest.name} • Fastest
                </span>
            </div>`
        : ``
        }
    `;
    }

    fetchOrders(currentPage);
});

</script>

<!-- Footer -->
<?php include("../footer.php"); ?>