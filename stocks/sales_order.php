<?php include 'header.php'; ?>

<!-- ================= ORDERS CONTENT ================= -->
<div class="max-w-7xl mx-auto px-6 mt-12">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Sales Orders</h1>
    </div>

    <div class="bg-white rounded-2xl shadow-lg overflow-x-auto">
        <div class="bg-white shadow rounded-xl p-4 mb-6">

            <div class="flex gap-4">

                <input id="search" type="text" placeholder="Search Order No..." class="border rounded-lg px-3 py-2 w-64">

                <button onclick="loadOrders(0)" class="bg-indigo-600 text-white px-4 py-2 rounded-lg">
                    Search
                </button>

            </div>

        </div>
        <table class="min-w-full text-left">
            <thead class="bg-indigo-50">
                <tr>

                    <th class="px-6 py-3">Order No</th>
                    <th class="px-6 py-3">Client</th>
                    <th class="px-6 py-3">Total Amount</th>
                    <th class="px-6 py-3">Tax</th>
                    <th class="px-6 py-3">Date</th>
                    <th class="px-6 py-3">Action</th>

                </tr>
            </thead>

            <tbody id="ordersTable"></tbody>
        </table>
        <div class="flex justify-between mt-6">

            <button id="prevBtn" class="bg-gray-200 px-4 py-2 rounded">
                Previous
            </button>

            <button id="nextBtn" class="bg-gray-200 px-4 py-2 rounded">
                Next
            </button>

        </div>
    </div>

</div>
<script>
    const BASE_URL = "https://api.liwaas.com/api";
</script>

<script>
    async function fetchOrders(filters) {

        const token = localStorage.getItem("auth_token");

        const response = await fetch(BASE_URL + "/stocks/sales-order/fetch", {

            method: "POST",

            headers: {
                "Content-Type": "application/json",
                "Authorization": "Bearer " + token
            },

            body: JSON.stringify(filters)

        });

        return await response.json();

    }
</script>

<script>

    let offset = 0;
    let limit = 10;
    let total = 0;

    async function loadOrders(newOffset = 0) {

        offset = newOffset;

        const filters = {

            search: document.getElementById("search").value,
            limit: limit,
            offset: offset

        };

        const res = await fetchOrders(filters);

        if (!res.status) return;

        total = res.total;

        renderOrders(res.data);

    }

    function renderOrders(data) {

        const table = document.getElementById("ordersTable");

        table.innerHTML = "";

        data.forEach(order => {

            const date = new Date(order.created_at).toLocaleDateString();

            table.innerHTML += `
                <tr class="border-t">

                    <td class="px-6 py-4 font-semibold text-indigo-600">
                        ${order.sales_order_no}
                    </td>

                    <td class="px-6 py-4">
                        ${order.client ? order.client.name : "N/A"}
                    </td>

                    <td class="px-6 py-4">
                        ₹${order.grand_total}
                    </td>

                    <td class="px-6 py-4">
                        ₹${order.total_tax}
                    </td>

                    <td class="px-6 py-4">
                        ${date}
                    </td>

                    <td class="px-6 py-4 space-x-3">
                        <button onclick="viewOrder(${order.id})" class="text-blue-600">
                            <i class="fas fa-eye"></i>
                        </button>

                        <button onclick="generateInvoice(${order.id})" class="text-green-600">
                            <i class="fas fa-file-invoice"></i>
                        </button>

                        <button onclick="deleteOrder(${order.id})" class="text-red-600">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>               

                </tr>
            `;
        });

    }

    document.getElementById("nextBtn").onclick = () => {
        if (offset + limit < total)
            loadOrders(offset + limit);
    };

    document.getElementById("prevBtn").onclick = () => {
        if (offset - limit >= 0)
            loadOrders(offset - limit);
    };

    window.onload = () => {
        loadOrders(0);
    };
</script>
<script>
    function viewOrder(id) {
        alert("View Order : " + id);
    }

    function generateInvoice(id) {
        alert("Generate Invoice for Order : " + id);
    }

    function deleteOrder(id) {
        alert("Delete Order : " + id);
    }
</script>
<?php include 'footer.php'; ?>
