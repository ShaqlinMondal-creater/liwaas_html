<?php include 'header.php'; ?>

<!-- ================= ORDERS CONTENT ================= -->
<div class="max-w-7xl mx-auto px-6 mt-12">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Sales Orders</h1>
    </div>

    <div class="bg-white rounded-2xl shadow-lg overflow-x-auto">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 m-4">
            <!-- RIGHT: SEARCH -->
            <div class="w-full sm:w-64">
                <input id="search" type="text" placeholder="Search Order No..."
                    class="border rounded-lg px-3 py-2 w-full">
            </div>

            <!-- LEFT: BULK BUTTONS -->
            <div class="flex flex-wrap gap-2">
                <button onclick="bulkDelete()" 
                    class="bg-red-600 text-white px-4 py-2 rounded">
                    Delete Selected
                </button>

                <button onclick="generateSalesInvoice()" 
                    class="bg-green-600 text-white px-4 py-2 rounded">
                    Generate Invoice
                </button>
            </div>
        </div>

        <table class="min-w-full text-left">
            <thead class="bg-indigo-50">
                <tr>
                    <th class="px-6 py-3">
                        <input type="checkbox" id="selectAllOrders">
                    </th>

                    <th class="px-6 py-3">Order No</th>
                    <th class="px-6 py-3">Client</th>
                    <th class="px-6 py-3">Total Amount</th>
                    <th class="px-6 py-3">Tax</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3">Payment</th>
                    <th class="px-6 py-3">Date</th>
                    <th class="px-6 py-3">Action</th>

                </tr>
            </thead>

            <tbody id="ordersTable"></tbody>
        </table>
    </div>
    <div class="flex justify-between mt-6">
        <button id="prevBtn" class="bg-gray-200 px-4 py-2 rounded">
            Previous
        </button>
        <button id="nextBtn" class="bg-gray-200 px-4 py-2 rounded">
            Next
        </button>
    </div>
</div>

<!-- View order modal -->
<!-- SALES ORDER DETAIL MODAL -->
<div id="orderDetailModal" class="fixed inset-0 bg-black bg-opacity-40 hidden items-center justify-center">

    <div class="bg-white rounded-xl w-full max-w-3xl p-6">

        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Sales Order Detail</h2>
            <button onclick="closeOrderDetail()">✕</button>
        </div>

        <div class="mb-4 flex justify-between items-center">

            <div>
                <p><b>Order No:</b> <span id="detailOrderNo"></span></p>
                <p><b>Client:</b> <span id="detailClient"></span></p>
                <p><b>Date:</b> <span id="detailDate"></span></p>
            </div>

            <button id="detailPdfBtn" class="bg-purple-600 text-white px-4 py-2 rounded hidden">
                View PDF
            </button>

        </div>

        <div class="max-h-[300px] overflow-y-auto overflow-x-auto">
            <table class="min-w-full text-left border">

                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2">Product</th>
                        <th class="px-4 py-2">Size</th>
                        <th class="px-4 py-2">Color</th>
                        <th class="px-4 py-2">Qty</th>
                        <th class="px-4 py-2">Price</th>
                        <th class="px-4 py-2">Tax</th>
                        <th class="px-4 py-2">Subtotal</th>
                    </tr>
                </thead>

                <tbody id="orderItemsTable"></tbody>

            </table>
        </div>

        <div class="mt-4 text-right">
            <p><b>Taxable Amount:</b> ₹<span id="detailTaxable"></span></p>
            <p><b>Total Tax:</b> ₹<span id="detailTax"></span></p>
            <p class="text-lg font-bold"><b>Grand Total:</b> ₹<span id="detailTotal"></span></p>
        </div>

    </div>

</div>

<script>
    const BASE_URL = "<?= $baseUrl ?>/api/admin";
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {

        let searchTimeout;

        document.getElementById("search").addEventListener("input", function () {

            clearTimeout(searchTimeout);

            searchTimeout = setTimeout(() => {
                loadOrders(0);
            }, 500);

        });

    });

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
    async function fetchOrderDetail(id) {

        const token = localStorage.getItem("auth_token");

        const response = await fetch(BASE_URL + "/stocks/sales-order/fetch-detail", {

            method: "POST",

            headers: {
                "Content-Type": "application/json",
                "Authorization": "Bearer " + token
            },

            body: JSON.stringify({
                id: id
            })

        });

        return await response.json();
    }
    async function generateInvoiceAPI(id) {

        const token = localStorage.getItem("auth_token");

        const response = await fetch(BASE_URL + "/stocks/sales-order/generate-invoice", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Authorization": "Bearer " + token
            },
            body: JSON.stringify({ id: id })
        });

        return await response.json();
    }
    async function deleteOrderAPI(id) {

        const token = localStorage.getItem("auth_token");

        const response = await fetch(BASE_URL + "/stocks/sales-order/delete", {

            method: "DELETE",

            headers: {
                "Content-Type": "application/json",
                "Authorization": "Bearer " + token
            },

            body: JSON.stringify({
                id: id
            })

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

            const pdfButton = order.pdf
            ? `<button onclick="openPdf('${order.pdf}')" class="text-purple-600">
                    <i class="fas fa-file-pdf"></i>
            </button>`
            : `<button disabled class="text-gray-400 cursor-not-allowed">
                    <i class="fas fa-file-pdf"></i>
            </button>`;

            table.innerHTML += `
                <tr class="border-t">

                    <td class="px-6 py-4">
                        <input type="checkbox" class="orderCheckbox" value="${order.id}">
                    </td>

                    <td onclick="viewOrder(${order.id})" class="px-6 py-4 font-semibold text-indigo-600 cursor-pointer">
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
                        <span class="px-2 py-1 text-xs bg-yellow-100 text-yellow-700 rounded">
                            ${order.status || "Pending"}
                        </span>
                    </td>

                    <td class="px-6 py-4">
                        <span class="px-2 py-1 text-xs bg-red-100 text-red-600 rounded">
                            ${order.payment_status || "Pending"}
                        </span>
                    </td>

                    <td class="px-6 py-4">
                        ${order.date}
                    </td>

                    <td class="px-6 py-4 space-x-3">

                        <button onclick="viewOrder(${order.id})" class="text-blue-600">
                            <i class="fas fa-eye"></i>
                        </button>

                        <button onclick="generateSalesOrder(${order.id})" class="text-green-600">
                            <i class="fas fa-file-invoice"></i>
                        </button>

                        ${pdfButton}

                        <button onclick="deleteOrder(${order.id})" class="text-red-600">
                            <i class="fas fa-trash"></i>
                        </button>

                    </td>               

                </tr>
            `;
        });

    }

    document.addEventListener("change", function(e){
        if(e.target.id === "selectAllOrders"){
            const checked = e.target.checked;

            document.querySelectorAll(".orderCheckbox")
                .forEach(cb => cb.checked = checked);
        }
    });

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
    async function viewOrder(id) {

        const res = await fetchOrderDetail(id);

        if (!res.status) {
            alert("Failed to fetch order");
            return;
        }

        const order = res.data;

        document.getElementById("detailOrderNo").innerText = order.sales_order_no;
        document.getElementById("detailClient").innerText = order.client ? order.client.name : "N/A";
        document.getElementById("detailDate").innerText = order.date;
        
        const totalTax = parseFloat(order.total_tax);
        const grandTotal = parseFloat(order.grand_total);
        const taxableAmount = grandTotal - totalTax;

        document.getElementById("detailTaxable").innerText = taxableAmount.toFixed(2);
        document.getElementById("detailTax").innerText = totalTax.toFixed(2);
        document.getElementById("detailTotal").innerText = grandTotal.toFixed(2);

        const table = document.getElementById("orderItemsTable");
        table.innerHTML = "";

        order.items.forEach(item => {

            const product = item.product ?? {};

            table.innerHTML += `
                <tr class="border-t">
                    <td class="px-4 py-2">${product.name ?? item.uid}</td>
                    <td class="px-4 py-2">${product.size ?? "-"}</td>
                    <td class="px-4 py-2">${product.color ?? "-"}</td>
                    <td class="px-4 py-2">${item.qty}</td>
                    <td class="px-4 py-2">₹${item.price}</td>
                    <td class="px-4 py-2">${item.tax}% = ₹${item.sub_total_tax}</td>
                    <td class="px-4 py-2">₹${item.sub_total}</td>
                </tr>
            `;

        });

        const pdfBtn = document.getElementById("detailPdfBtn");

        if(order.pdf && order.pdf.url){
            pdfBtn.classList.remove("hidden");
            pdfBtn.onclick = () => window.open(order.pdf.url, "_blank");
        } else {
            pdfBtn.classList.add("hidden");
        }

        document.getElementById("orderDetailModal").classList.remove("hidden");
        document.getElementById("orderDetailModal").classList.add("flex");
    }
    function closeOrderDetail() {
        document.getElementById("orderDetailModal").classList.add("hidden");
    }
    async function generateSalesOrder(id)
    {
        const token = localStorage.getItem("auth_token");

        const response = await fetch(BASE_URL + "/stocks/sales-order/pdf", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Authorization": "Bearer " + token
            },
            body: JSON.stringify({ id: id })
        });

        const res = await response.json();

        if(!res.status){
            alert("Failed to generate Sales Order PDF");
            return;
        }

        window.open(res.file_url, "_blank");

        loadOrders(offset);
    }

    async function deleteOrder(id)
    {

        if(!confirm("Are you sure you want to delete this order?")) return;

        const res = await deleteOrderAPI(id);

        if(!res.status)
        {
            alert("Delete failed");
            return;
        }

        alert(res.message);

        loadOrders(offset); // refresh table

    }
    function openPdf(url)
    {
        window.open(url, "_blank");
    }
</script>
<script>
    function getSelectedOrders() {

        const ids = [];

        document.querySelectorAll(".orderCheckbox:checked")
            .forEach(cb => ids.push(parseInt(cb.value)));

        return ids;
    }

    async function bulkDelete() {

        const ids = getSelectedOrders();

        if(ids.length === 0){
            alert("Select orders first");
            return;
        }

        if(!confirm("Delete selected orders?")) return;

        for(const id of ids){
            await deleteOrderAPI(id);
        }

        loadOrders(offset);
    }

    async function generateSalesInvoice() {

        const ids = getSelectedOrders();

        if(ids.length === 0){
            alert("Select orders first");
            return;
        }

        const token = localStorage.getItem("auth_token");

        const response = await fetch(BASE_URL + "/stocks/sales-order/generate-invoice", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Authorization": "Bearer " + token
            },
            body: JSON.stringify({ ids: ids })
        });

        const res = await response.json();

        if(!res.status){
            alert("Bulk invoice generation failed");
            return;
        }

        alert("Invoices generated successfully");

        loadOrders(offset);
    }
</script>
<?php include 'footer.php'; ?>
