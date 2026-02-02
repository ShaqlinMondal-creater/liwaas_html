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
                                Team Crew
                            </h1>
                            <div class="flex items-center flex-wrap gap-1.5 font-medium">
                                <span class="text-md text-gray-700">
                                    All Members:
                                </span>
                                <span class="text-md text-gray-800 font-medium me-2">
                                    49,053
                                </span>
                                <span class="text-md text-gray-700">
                                    Pro Licenses
                                </span>
                                <span class="text-md text-gray-800 font-medium">
                                    724
                                </span>
                            </div>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <a class="btn btn-sm btn-light" href="#">
                                Import CSV
                            </a>
                            <a class="btn btn-sm btn-primary" href="#">
                                Add Member
                            </a>
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
                                    Showing 20 of 68 users
                                </h3>
                                <div class="flex flex-wrap gap-2 lg:gap-5">
                                    <div class="flex">
                                        <label class="input input-sm">
                                            <i class="ki-filled ki-magnifier">
                                            </i>
                                            <input data-datatable-search="#order_table" placeholder="Search users"
                                                type="text" value="">
                                            </input>
                                        </label>
                                    </div>
                                    <div class="flex flex-wrap gap-2.5">
                                        <select class="select select-sm w-28">
                                            <option value="1">
                                                Active
                                            </option>
                                            <option value="2">
                                                Disabled
                                            </option>
                                            <option value="2">
                                                Pending
                                            </option>
                                        </select>
                                        <select class="select select-sm w-28">
                                            <option value="1">
                                                Latest
                                            </option>
                                            <option value="2">
                                                Older
                                            </option>
                                            <option value="3">
                                                Oldest
                                            </option>
                                        </select>
                                        <button class="btn btn-sm btn-outline btn-primary">
                                            <i class="ki-filled ki-setting-4">
                                            </i>
                                            Filters
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
                                                        <input class="checkbox checkbox-sm" type="checkbox" />
                                                    </th>
                                                    <th class="min-w-[180px]">Order Code</th>
                                                    <th class="min-w-[250px]">Customer</th>
                                                    <th class="min-w-[150px]">Items</th>
                                                    <th class="min-w-[120px]">Payment</th>
                                                    <th class="min-w-[120px]">Delivery</th>
                                                    <th class="min-w-[120px]">Total</th>
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
document.addEventListener("DOMContentLoaded", () => {

    const tableBody = document.getElementById("order_table_body");
    const token = localStorage.getItem("auth_token");

    let currentPage = 1;
    let limit = 10;

    async function fetchOrders(page = 1) {

        const offset = (page - 1) * limit;

        tableBody.innerHTML = `
            <tr>
                <td colspan="9" class="text-center py-4 text-gray-500">
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
                    limit: limit,
                    offset: offset
                })
            });

            const result = await response.json();

            if (!result.success) {
                tableBody.innerHTML = `<tr><td colspan="9" class="text-center text-red-500">No orders found</td></tr>`;
                return;
            }

            renderOrders(result.data);
            renderPagination(result.total, page);

        } catch (err) {
            tableBody.innerHTML = `<tr><td colspan="9" class="text-center text-red-500">Error loading orders</td></tr>`;
        }
    }

    function renderOrders(orders) {
        tableBody.innerHTML = "";

        orders.forEach(order => {

            const customer = order.user
                ? `${order.user.name} <br><span class="text-xs text-gray-500">${order.user.email}</span>`
                : `<span class="text-gray-400">Guest</span>`;

            const itemsCount = order.items.length;

            const paymentBadge = badge(order.payment_type || "N/A");
            const deliveryBadge = badge(order.delivery_status || "pending");

            const row = `
                <tr>
                    <td class="text-center">
                        <input type="checkbox" class="checkbox checkbox-sm" value="${order.id}">
                    </td>

                    <td class="font-medium text-primary">
                        ${order.order_code}
                    </td>

                    <td>${customer}</td>

                    <td>
                        ${itemsCount} item(s)
                    </td>

                    <td>${paymentBadge}</td>

                    <td>${deliveryBadge}</td>

                    <td class="font-semibold text-gray-900">
                        ₹${order.grand_total}
                    </td>

                    <td class="text-gray-600">
                        ${order.created_at}
                    </td>

                    <td class="text-center">
                        <a href="view-order.php?id=${order.id}" 
                           class="btn btn-sm btn-light">
                           View
                        </a>
                    </td>
                </tr>
            `;

            tableBody.insertAdjacentHTML("beforeend", row);
        });
    }

    function badge(value) {
        const lower = value.toLowerCase();
        let color = "primary";

        if (lower.includes("cod")) color = "warning";
        if (lower.includes("prepaid")) color = "success";
        if (lower.includes("pending")) color = "warning";
        if (lower.includes("confirmed")) color = "success";

        return `
            <span class="badge badge-${color} badge-outline rounded-[30px]">
                <span class="size-1.5 rounded-full bg-${color} me-1.5"></span>
                ${value}
            </span>
        `;
    }

    function renderPagination(total, page) {
        const pagination = document.querySelector("[data-datatable-pagination]");
        pagination.innerHTML = "";

        const totalPages = Math.ceil(total / limit);

        for (let i = 1; i <= totalPages; i++) {
            const btn = document.createElement("button");
            btn.className = `px-3 py-1 rounded ${
                i === page ? "bg-indigo-600 text-white" : "bg-white border"
            }`;
            btn.textContent = i;

            btn.addEventListener("click", () => {
                currentPage = i;
                fetchOrders(currentPage);
            });

            pagination.appendChild(btn);
        }
    }

    fetchOrders(currentPage);
});
</script>

               <!-- Footer -->
<?php include("../footer.php"); ?>