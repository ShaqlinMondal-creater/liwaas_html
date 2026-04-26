<?php include 'header.php'; ?>
<style>
    /* OTP BOX STYLE */
    .otp-box {
        width: 48px;
        height: 55px;
        border-radius: 12px;
        border: 2px solid #e5e7eb;
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        transition: all 0.2s ease;
    }

    /* Focus animation */
    .otp-box:focus {
        outline: none;
        border-color: #6366f1;
        box-shadow: 0 0 10px rgba(99,102,241,0.5);
        transform: scale(1.1);
    }

    /* Filled animation */
    .otp-box:not(:placeholder-shown) {
        border-color: #6366f1;
    }

    @keyframes shake {
        0%,100% { transform: translateX(0); }
        25% { transform: translateX(-6px); }
        75% { transform: translateX(6px); }
    }

    .animate-shake {
        animation: shake 0.3s;
    }
</style>
<!-- ================= DASHBOARD CONTENT ================= -->
<div class="max-w-7xl mx-auto px-6 mt-12">

    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Analytics Overview</h1>

        <div class="flex gap-3">
            <button onclick="openStockModal()" 
                class="bg-green-600 text-white px-4 py-2 rounded-lg">
                Stock Details
            </button>

            <a href="../admin/index.php" 
                class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                Admin Dashboard
            </a>

            <button onclick="openAccountAuth()" 
                class="bg-blue-600 text-white px-4 py-2 rounded-lg">
                Accounts
            </button>
        </div>
    </div>

    <!-- Analytics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-7 gap-6 mb-10">

        <div class="bg-white rounded-2xl shadow p-6">
            <p class="text-gray-500">Total Sales</p>
            <h2 id="total_sales" class="text-2xl font-bold mt-2">₹0</h2>
        </div>

        <div class="bg-white rounded-2xl shadow p-6">
            <p class="text-gray-500">Total Paid</p>
            <h2 id="total_paid" class="text-2xl font-bold mt-2 text-green-600">₹0</h2>
        </div>

        <div class="bg-white rounded-2xl shadow p-6">
            <p class="text-gray-500">Total Due</p>
            <h2 id="total_due" class="text-2xl font-bold mt-2 text-red-600">₹0</h2>
        </div>

        <div class="bg-white rounded-2xl shadow p-6">
            <p class="text-gray-500">Total Orders</p>
            <h2 id="total_orders" class="text-2xl font-bold mt-2">0</h2>
        </div>

        <div class="bg-white rounded-2xl shadow p-6">
            <p class="text-gray-500">Total Tax</p>
            <h2 id="total_tax" class="text-2xl font-bold mt-2">₹0</h2>
        </div>

        <div class="bg-white rounded-2xl shadow p-6">
            <p class="text-gray-500">Total Products</p>
            <h2 id="total_products" class="text-2xl font-bold mt-2">0</h2>
        </div>

        <div class="bg-white rounded-2xl shadow p-6">
            <p class="text-gray-500">Low Stock</p>
            <h2 id="low_stock" class="text-2xl font-bold mt-2">0</h2>
        </div>

    </div>

    <!-- Payment Process -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">

        <div class="bg-white rounded-2xl shadow p-6">
            <p class="text-gray-500">This Month Paid</p>
            <h2 id="monthly_paid" class="text-xl font-bold mt-2 text-green-600">₹0</h2>
        </div>

        <div class="bg-white rounded-2xl shadow p-6">
            <p class="text-gray-500">This Month Due</p>
            <h2 id="monthly_due" class="text-xl font-bold mt-2 text-red-600">₹0</h2>
        </div>

        <div class="bg-white rounded-2xl shadow p-6">
            <p class="text-gray-500">Target Progress</p>
            <h2 id="target_progress" class="text-xl font-bold mt-2 text-indigo-600">0%</h2>
        </div>

    </div>

    <!-- Chart -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">

        <!-- Chart 1 -->
        <div class="bg-white rounded-2xl shadow-lg p-6">
            <h2 class="text-lg font-semibold mb-4">Monthly Revenue</h2>
            <canvas id="salesChart"></canvas>
        </div>

        <!-- Chart 2 -->
        <div class="bg-white rounded-2xl shadow-lg p-6">
            <h2 class="text-lg font-semibold mb-4">Payment Overview</h2>
            <canvas id="paymentChart"></canvas>
        </div>

    </div>


    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">

        <!-- Top Selling Products -->
        <div class="bg-white rounded-2xl shadow-lg p-6">
            <h2 class="text-lg font-semibold mb-4">Top Selling Products</h2>

            <table class="w-full text-left">
                <thead>
                    <tr class="border-b">
                        <th class="py-2">Product</th>
                        <th>Units Sold</th>
                        <th>Revenue</th>
                    </tr>
                </thead>

                <tbody id="top_products"></tbody>
            </table>
        </div>

        <!-- Sales By Clients -->
        <div class="bg-white rounded-2xl shadow-lg p-6">
            <h2 class="text-lg font-semibold mb-4">Sales By Clients</h2>

            <table class="w-full text-left">
                <thead>
                    <tr class="border-b">
                        <th class="py-2">Client</th>
                        <th>Orders</th>
                        <th>Total Sales</th>
                    </tr>
                </thead>

                <tbody id="sales_clients"></tbody>
            </table>
        </div>

    </div>

    <!-- Product Transactions -->
    <div class="bg-white rounded-2xl shadow-lg p-6 mt-10">

        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold">Product Transactions</h2>

            <div class="flex gap-3 items-center">

                <input id="transaction_search" type="text" placeholder="Search product..." class="border rounded px-3 py-2 w-48">

                <select id="tx_status" class="border px-2 py-2 rounded">
                    <option value="">All Status</option>
                    <option value="returned">Returned</option>
                    <option value="completed">Completed</option>
                    <option value="split">Split</option>
                </select>

                <select id="tx_month" class="border px-2 py-2 rounded">
                    <option value="">Month</option>
                    <option value="january">January</option>
                    <option value="february">February</option>
                    <option value="march">March</option>
                    <option value="april">April</option>
                    <option value="may">May</option>
                    <option value="june">June</option>
                    <option value="july">July</option>
                    <option value="august">August</option>
                    <option value="september">September</option>
                    <option value="october">October</option>
                    <option value="november">November</option>
                    <option value="december">December</option>
                </select>

                <input id="tx_year" type="number" placeholder="Year" class="border px-2 py-2 rounded w-24">
            </div>
        </div>

        <div class="overflow-x-auto max-h-[400px] overflow-y-auto">
            <table class="min-w-full text-left">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-3 py-2">Order No</th>
                        <th class="px-3 py-2">Date</th>
                        <th class="px-3 py-2">Client</th>
                        <th class="px-3 py-2">Product</th>
                        <th class="px-3 py-2">Size</th>
                        <th class="px-3 py-2">Color</th>
                        <th class="px-3 py-2">Qty</th>
                        <th class="px-3 py-2">Price</th>
                        <th class="px-3 py-2">Subtotal</th>
                        <th class="px-3 py-2">Status</th>
                    </tr>
                </thead>

                <tbody id="transactionTable"></tbody>
            </table>
        </div>
        <div class="flex justify-between items-center mt-4">

        <div id="tx_info" class="text-sm text-gray-500"></div>

            <div class="flex gap-2">
                <button onclick="prevTxPage()" 
                    class="px-3 py-1 bg-gray-200 rounded">
                    Prev
                </button>

                <button onclick="nextTxPage()" 
                    class="px-3 py-1 bg-gray-200 rounded">
                    Next
                </button>
            </div>

        </div>
    </div>

    <!-- Return Products -->
    <div class="bg-white rounded-2xl shadow-lg p-6 mt-10">

        <h2 class="text-lg font-semibold mb-4">Return Products</h2>

        <!-- Filters -->
        <div class="flex justify-between items-center mb-4">

            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 w-full">

                <input id="ret_search" placeholder="Search..." class="border px-2 py-2 rounded">

                <input id="ret_order_no" placeholder="Order No" class="border px-2 py-2 rounded">

                <input id="ret_client" placeholder="Client Name" class="border px-2 py-2 rounded">

                <select id="ret_status" class="border px-2 py-2 rounded">
                    <option value="">All Status</option>
                    <option value="returned">Returned</option>
                    <option value="migrated">Migrated</option>
                </select>

                <select id="ret_month" class="border px-2 py-2 rounded">
                    <option value="">All Months</option>
                    <option value="january">January</option>
                    <option value="february">February</option>
                    <option value="march">March</option>
                    <option value="april">April</option>
                    <option value="may">May</option>
                    <option value="june">June</option>
                    <option value="july">July</option>
                    <option value="august">August</option>
                    <option value="september">September</option>
                    <option value="october">October</option>
                    <option value="november">November</option>
                    <option value="december">December</option>
                </select>

                <input type="date" id="ret_return_date" class="border px-2 py-2 rounded">
            </div>

            <button onclick="migrateAllReturns()"  class="bg-green-600 text-white px-4 py-2 rounded ml-4">
                Migrate All Stocks
            </button>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto max-h-[400px] overflow-y-auto">
            <table class="min-w-full text-left">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-3 py-2">Order</th>
                        <th>Date</th>
                        <th>Client</th>
                        <th>Product</th>
                        <th>Size</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Return Date</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody id="returnTable"></tbody>
            </table>
        </div>

        <div class="flex justify-between items-center mt-4">
            <div id="ret_info" class="text-sm text-gray-500"></div>
            <div class="flex gap-2">
                <button onclick="prevRetPage()" class="px-3 py-1 bg-gray-200 rounded">
                    Prev
                </button>

                <button onclick="nextRetPage()" class="px-3 py-1 bg-gray-200 rounded">
                    Next
                </button>
            </div>
        </div>

    </div>

</div>

<div id="stockModal" class="fixed inset-0 bg-black bg-opacity-40 hidden items-center justify-center">

    <div class="bg-white rounded-xl w-full max-w-4xl p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Stock Details</h2>
            <button onclick="closeStockModal()">✕</button>
        </div>
        <div class="max-h-[500px] overflow-y-auto">

            <div id="stockContainer"></div>

        </div>
    </div>

</div>

<!-- PREMIUM OTP MODAL -->
<div id="accountModal" class="fixed inset-0 hidden items-center justify-center z-50">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-br from-black/60 via-indigo-900/40 to-black/60 backdrop-blur-sm opacity-0 transition-opacity duration-300" id="modalOverlay"></div>

    <!-- Modal -->
    <div id="modalBox" class="relative bg-white/90 backdrop-blur-xl rounded-3xl shadow-2xl p-8 w-full max-w-md transform scale-90 opacity-0 transition-all duration-300">

        <!-- Title -->
        <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">
            🔐 Secure Access
        </h2>

        <!-- OTP Inputs -->
        <div class="flex justify-center gap-3 mb-5">

            <input maxlength="1" class="otp-box">
            <input maxlength="1" class="otp-box">
            <input maxlength="1" class="otp-box">
            <input maxlength="1" class="otp-box">
            <input maxlength="1" class="otp-box">
            <input maxlength="1" class="otp-box">

        </div>

        <!-- Error -->
        <p id="authError" class="text-red-500 text-center text-sm mb-3"></p>

        <!-- Button -->
        <button id="verifyBtn" class="w-full bg-gradient-to-r from-indigo-600 to-blue-600 text-white py-3 rounded-xl font-semibold">
            Verify Access
        </button>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const BASE_URL = "<?= $baseUrl ?>/api/admin/stocks/sales-order";
    let salesChart;
    const token = localStorage.getItem("auth_token");

    let txOffset = 0;
    let txLimit = 10;
    let txTotal = 0;

    let retOffset = 0;
    let retLimit = 10;
    let retTotal = 0;

    async function loadAnalytics() {

        const res = await fetch(`${BASE_URL}/analytics`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${token}`
            }
        });

        const result = await res.json();

        if (!result.status) return;

        const data = result.data;

        /* ======================
        TOTAL DATA
        ====================== */

        document.getElementById("total_sales").innerText =
            `₹${data.total_data.total_sales}`;

        document.getElementById("total_paid").innerText =
            `₹${data.total_data.total_paid}`;

        document.getElementById("total_due").innerText =
            `₹${data.total_data.total_due}`;

        document.getElementById("total_orders").innerText =
            data.total_data.total_orders;

        document.getElementById("total_tax").innerText =
            `₹${data.total_data.total_tax}`;

        document.getElementById("total_products").innerText =
            data.total_data.total_products;

        document.getElementById("low_stock").innerText =
            data.total_data.low_stock_products;


        // Payment Process
        document.getElementById("monthly_paid").innerText =
            `₹${data.this_month_data.monthly_paid}`;

        document.getElementById("monthly_due").innerText =
            `₹${data.this_month_data.monthly_due}`;

        document.getElementById("target_progress").innerText =
            `${data.this_month_data.target_progress_percent}%`;

        /* ======================
        MONTH CHART
        ====================== */

        const labels = [];
        const revenue = [];
        const targets = [];
        const orders = [];
        const itemsSold = [];
        const paid = [];
        const due = [];

        data.month_wise_data.forEach(m => {

            const key = Object.keys(m)[0];
            const month = m[key];

            labels.push(key.charAt(0).toUpperCase() + key.slice(1));

            revenue.push(parseFloat(month.revenue || 0));
            targets.push(parseFloat(month.target || 0));
            orders.push(parseFloat(month.orders || 0));
            itemsSold.push(parseFloat(month.items_sold || 0));
            paid.push(parseFloat(month.paid || 0));
            due.push(parseFloat(month.due || 0));
        });

        createChart(labels,revenue,targets,orders,itemsSold,paid,due);

        // Finance Chart
        const financeRes = await fetchFinanceAnalytics();

        if (financeRes.status) {

            const fLabels = [];
            const sales = [];
            const returns = [];
            const fPaid = [];
            const fDue = [];

            financeRes.data.forEach(m => {

                const key = Object.keys(m)[0];
                const month = m[key];

                fLabels.push(key.charAt(0).toUpperCase() + key.slice(1));

                sales.push(parseFloat(month.total_sales_amount || 0));
                returns.push(parseFloat(month.total_return_amount || 0));
                fPaid.push(parseFloat(month.total_paid_amount || 0));
                fDue.push(parseFloat(month.total_due_amount || 0));
            });

            createFinanceChart(fLabels, sales, returns, fPaid, fDue);
        }

        /* ======================
        TOP PRODUCTS
        ====================== */

        const topProducts = document.getElementById("top_products");
        topProducts.innerHTML = "";

        data.top_selling_products.forEach(p => {

            topProducts.innerHTML += `
            <tr class="border-b">
                <td class="py-2">${p.product_name}</td>
                <td>${p.units_sold}</td>
                <td>₹${p.revenue}</td>
            </tr>
            `;
        });

        /* ======================
        CLIENT SALES
        ====================== */

        const clients = document.getElementById("sales_clients");
        clients.innerHTML = "";

        data.sales_by_clients.forEach(c => {

            clients.innerHTML += `
            <tr class="border-b">
                <td class="py-2">${c.client_name}</td>
                <td>${c.orders}</td>
                <td>₹${c.total_sales}</td>
            </tr>
            `;
        });
    }

    async function fetchFinanceAnalytics() {

        const res = await fetch(`${BASE_URL}/finance`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${token}`
            }
        });

        return await res.json();
    }

    async function fetchTransactions(payload) {

        const res = await fetch(`${BASE_URL}/transactions`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${token}`
            },
            body: JSON.stringify(payload)
        });

        return await res.json();
    }

    async function fetchStockDetails() {

        const res = await fetch(`${BASE_URL}/stock-details`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${token}`
            }
        });

        return await res.json();
    }

    async function openStockModal() {

        const res = await fetchStockDetails();

        if (!res.status) {
            alert("Failed to load stock");
            return;
        }

        const container = document.getElementById("stockContainer");
        container.innerHTML = "";

        res.data.forEach(product => {

            let variantsHTML = product.variants.map(v => {
                return `
                    <div class="text-center px-3 py-1 border rounded min-w-[90px]">

                        <div class="text-xs text-gray-500">${v.size}</div>

                        <div class="flex justify-center gap-1 mt-1">

                            <!-- Opening -->
                            <span class="text-xs px-2 py-0.5 rounded bg-orange-100 text-orange-700">
                                ${v.opening_stock}
                            </span>

                            <!-- Available -->
                            <span class="text-xs px-2 py-0.5 rounded ${
                                parseInt(v.available_stock) === 0 
                                ? 'bg-red-100 text-red-600'
                                : 'bg-green-100 text-green-700'
                            }">
                                ${v.available_stock}
                            </span>

                        </div>

                    </div>
                `;
            }).join("");

            container.innerHTML += `
                <div class="flex items-center border rounded-lg p-3 mb-3 bg-white">

                    <!-- Product Name -->
                    <div class="w-56 font-semibold">
                        ${product.product_name} 
                        ${
                            product.variants.some(v => parseInt(v.available_stock) <= 1)
                            ? `<span class="ml-2 text-xs px-2 py-0.5 bg-red-500 text-white rounded">LOW</span>`
                            : ''
                        }
                        <div class="text-xs text-gray-500">${product.color}</div>
                    </div>

                    <!-- Variants -->
                    <div class="flex gap-2 overflow-x-auto">
                        ${variantsHTML}
                    </div>

                </div>
            `;
        });

        document.getElementById("stockModal").classList.remove("hidden");
        document.getElementById("stockModal").classList.add("flex");
    }
    function closeStockModal() {
        document.getElementById("stockModal").classList.add("hidden");
    }
    
    async function fetchReturnItems(payload) {

        const res = await fetch(`${BASE_URL}/get-return-items`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${token}`
            },
            body: JSON.stringify(payload)
        });

        return await res.json();
    }

    async function loadReturnItems(offset = 0) {

        const payload = {
            search: document.getElementById("ret_search").value || "",
            month: document.getElementById("ret_month").value || "",
            sales_order_no: document.getElementById("ret_order_no").value || "",
            client_name: document.getElementById("ret_client").value || "",
            status: document.getElementById("ret_status").value || "",
            return_date: document.getElementById("ret_return_date").value || "",
            limit: retLimit,
            offset: retOffset
        };

        const res = await fetchReturnItems(payload);

        if (!res.status) return;
        retTotal = res.total || 0;

        const table = document.getElementById("returnTable");
        table.innerHTML = "";

        // ✅ HANDLE EMPTY DATA
        if (!res.data || res.data.length === 0) {
            table.innerHTML = `
                <tr>
                    <td colspan="10" class="text-center py-6 text-gray-500">
                        No return items found
                    </td>
                </tr>
            `;
            return;
        }

        res.data.forEach(r => {

            table.innerHTML += `
            <tr class="border-b" data-id="${r.id}">
                <td class="px-3 py-2">${r.sales_order_no}</td>
                <td>${r.so_date}</td>
                <td>${r.client_name}</td>
                <td>${r.product_name}</td>
                <td>${r.size}</td>
                <td>${r.qty}</td>
                <td>₹${r.price}</td>

                <td>
                    ${
                        r.status === "migrated"
                        ? '<span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">Migrated</span>'
                        : '<span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-xs">Returned</span>'
                    }
                </td>

                <td>${r.return_date.split("T")[0]}</td>
                <td>
                    <div class="flex gap-2">

                        <button onclick="migrateSingle(${r.id})"
                            class="bg-green-500 text-white px-2 py-1 text-xs rounded">
                            Migrate
                        </button>

                        <button onclick="deleteReturn(${r.id})"
                            class="bg-red-500 text-white px-2 py-1 text-xs rounded">
                            Delete
                        </button>

                    </div>
                </td>
            </tr>
            `;
        });

        document.getElementById("ret_info").innerText =
            `Showing ${retOffset + 1} - ${Math.min(retOffset + retLimit, retTotal)} of ${retTotal}`;
    }
    ["ret_search","ret_order_no","ret_client","ret_status","ret_month","ret_return_date"]
    .forEach(id => {
        document.getElementById(id).addEventListener("input", () => {

            clearTimeout(window.retTimer);

            window.retTimer = setTimeout(() => {
                retOffset = 0;
                loadReturnItems();
            }, 400);

        });
    });
    function nextRetPage() {
        if (retOffset + retLimit >= retTotal) return;
        retOffset += retLimit;
        loadReturnItems();
    }
    function prevRetPage() {
        if (retOffset === 0) return;
        retOffset -= retLimit;
        if (retOffset < 0) retOffset = 0;
        loadReturnItems();
    }

    // Migrate Functions
    async function migrateReturns(ids) {

        const res = await fetch(`${BASE_URL}/migrate-return`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${token}`
            },
            body: JSON.stringify({
                return_ids: ids
            })
        });

        return await res.json();
    }

    async function migrateSingle(id) {

        if (!confirm("Migrate this item to stock?")) return;

        const res = await migrateReturns([id]);

        if (!res.status) {
            alert("Failed");
            return;
        }

        alert(res.message);

        loadReturnItems();
    }
    async function migrateAllReturns() {

        if (!confirm("Migrate ALL return items?")) return;

        const rows = document.querySelectorAll("#returnTable tr");

        let ids = [];

        rows.forEach(row => {
            const id = row.getAttribute("data-id");
            if (id) ids.push(parseInt(id));
        });

        if (ids.length === 0) {
            alert("No items found");
            return;
        }

        const res = await migrateReturns(ids);

        if (!res.status) {
            alert("Failed");
            return;
        }

        alert(res.message);

        loadReturnItems();
    }
    function deleteReturn(id) {
        alert("Delete API not connected yet for ID: " + id);
    }
    /* ======================
    CREATE CHART
    ====================== */

    function createChart(labels, revenue, targets, orders, itemsSold, paid, due) {
        const ctx = document.getElementById('salesChart').getContext('2d');

        salesChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: 'Target Orders',
                        data: targets,
                        backgroundColor: '#E5E7EB'
                    },
                    {
                        label: 'Orders Achieved',
                        data: orders,
                        backgroundColor: '#6366F1'
                    },
                    {
                        label: 'Revenue',
                        data: revenue,
                        type: 'line',
                        borderColor: '#10B981',
                        backgroundColor: 'rgba(16,185,129,0.2)',
                        tension: 0.4,
                        fill: true,
                        yAxisID: 'y1',
                        borderWidth: 3,
                        pointRadius: 5,
                        pointBackgroundColor: '#10B981',
                        pointBorderColor: '#ffffff',
                        pointBorderWidth: 2,
                        order: 10
                    },
                    {
                        label:'Items Sold',
                        data:itemsSold,
                        backgroundColor:'#d29a38'
                    },
                    {
                        label: 'Paid',
                        data: paid,
                        type: 'line',
                        borderColor: '#00e052',
                        backgroundColor: 'rgba(0, 224, 82, 0.55)',
                        tension: 0.3,
                        fill: false,
                        yAxisID: 'y1',
                        borderWidth: 3,
                        borderDash: [4, 6],   // 🔥 dashed effect
                        pointRadius: 4,
                        pointBackgroundColor: '#00e052',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2
                    },
                    {
                        label: 'Due',
                        data: due,
                        type: 'line',
                        borderColor: '#EF4444',
                        backgroundColor: 'rgba(239, 68, 68, 0.36)',
                        tension: 0,          // 🔥 straight sharp lines
                        fill: false,
                        yAxisID: 'y1',
                        borderWidth: 3,
                        borderDash: [2, 4],  // 🔥 dotted style
                        pointRadius: 5,
                        pointStyle: 'rectRot', // 🔥 diamond shape points
                        pointBackgroundColor: '#EF4444',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2
                    },
                ]
            },

            options: {
                responsive: true,

                interaction: {
                    mode: 'index',
                    intersect: false
                },

                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Orders'
                        }
                    },
                    y1: {
                        beginAtZero: true,
                        position: 'right',
                        max: 50000, // ✅ FIXED LIMIT

                        title: {
                            display: true,
                            text: 'Revenue'
                        },
                        grid: {
                            drawOnChartArea: false
                        }
                    }
                }
            }
        });
    }

    let financeChart;
    function createFinanceChart(labels, sales, returns, paid, due) {

        const ctx = document.getElementById('paymentChart').getContext('2d');

        if (financeChart) financeChart.destroy();

        financeChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: 'Sales',
                        data: sales,
                        backgroundColor: '#6366F1'
                    },
                    {
                        label: 'Return',
                        data: returns,
                        backgroundColor: '#f59e0b'
                    },
                    {
                        label: 'Paid',
                        data: paid,
                        backgroundColor: '#22c55e'
                    },
                    {
                        label: 'Due',
                        data: due,
                        backgroundColor: '#ef4444'
                    }
                ]
            },
            options: {
                responsive: true,
                interaction: {
                    mode: 'index',
                    intersect: false
                },
                plugins: {
                    legend: {
                        position: 'top'
                    }
                }
            }
        });
    }

    async function loadTransactions() {

        const payload = {
            search: document.getElementById("transaction_search").value || "",
            status: document.getElementById("tx_status").value || "",
            month: document.getElementById("tx_month").value || "",
            year: document.getElementById("tx_year").value || "",
            limit: txLimit,
            offset: txOffset
        };
        const res = await fetchTransactions(payload);

        if (!res.status) return;
        txTotal = res.total || 0;

        const table = document.getElementById("transactionTable");
        table.innerHTML = "";

        if (!res.data || res.data.length === 0) {
            table.innerHTML = `
                <tr>
                    <td colspan="10" class="text-center py-6 text-gray-500">
                        No transactions found
                    </td>
                </tr>
            `;
            document.getElementById("tx_info").innerText =
                `Showing 0 of ${txTotal}`;
            return;
        }

        res.data.forEach(t => {
            let bg = "";
            let badge = "";

            if (t.status === "returned") {
                bg = "bg-red-50";
                badge = '<span class="bg-red-100 text-red-600 px-2 py-1 rounded text-xs">Returned</span>';
            } else if (t.status === "completed") {
                bg = "bg-green-50";
                badge = '<span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">Completed</span>';
            } else if (t.status === "split") {
                bg = "bg-blue-50";
                badge = '<span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">Split</span>';
            }

            table.innerHTML += `
            <tr class="border-b ${bg}">
                <td class="px-3 py-2">${t.sales_order_no}</td>
                <td class="px-3 py-2">${t.so_date}</td>
                <td class="px-3 py-2">${t.client_name}</td>
                <td class="px-3 py-2">${t.product_name}</td>
                <td class="px-3 py-2">${t.size}</td>
                <td class="px-3 py-2">${t.color}</td>
                <td class="px-3 py-2">${t.qty}</td>
                <td class="px-3 py-2">₹${t.price}</td>
                <td class="px-3 py-2">₹${t.sub_total}</td>
                <td class="px-3 py-2">${badge}</td>
            </tr>
            `;
        });

        document.getElementById("tx_info").innerText =
            `Showing ${txOffset + 1} - ${Math.min(txOffset + txLimit, txTotal)} of ${txTotal}`;
    }
    ["transaction_search","tx_status","tx_month","tx_year"]
    .forEach(id => {
        document.getElementById(id).addEventListener("input", () => {

            clearTimeout(window.txTimer);

            window.txTimer = setTimeout(() => {
                txOffset = 0;
                loadTransactions();
            }, 400);

        });
    });
    

    function nextTxPage() {

        if (txOffset + txLimit >= txTotal) return;
        txOffset += txLimit;
        loadTransactions();
    }
    function prevTxPage() {

        if (txOffset === 0) return;
        txOffset -= txLimit;
        if (txOffset < 0) txOffset = 0;
        loadTransactions();
    }

    loadAnalytics();
    loadTransactions();
    loadReturnItems();
</script>

<script>
    // ===== OPEN MODAL =====
    function openAccountAuth() {

        const lockUntil = localStorage.getItem("account_lock");

        if (lockUntil && Date.now() < parseInt(lockUntil)) {
            const mins = Math.ceil((lockUntil - Date.now()) / 60000);
            alert(`Locked. Try again in ${mins} minutes`);
            return;
        }

        const modal = document.getElementById("accountModal");
        const overlay = document.getElementById("modalOverlay");
        const box = document.getElementById("modalBox");

        modal.classList.remove("hidden");
        modal.classList.add("flex");

        setTimeout(() => {
            overlay.classList.remove("opacity-0");
            box.classList.remove("opacity-0", "scale-90");
            box.classList.add("opacity-100", "scale-100");
        }, 10);

        setTimeout(() => {
            document.querySelector(".otp-box").focus();
        }, 300);
    }

    // ===== OTP HANDLING + EVENTS =====
    document.addEventListener("DOMContentLoaded", () => {

        const inputs = document.querySelectorAll(".otp-box");

        inputs.forEach((input, index, arr) => {

            input.addEventListener("input", () => {

                if (input.value && arr[index + 1]) {
                    arr[index + 1].focus();
                }

                let code = "";
                arr.forEach(i => code += i.value);

                if (code.length === 6) {
                    verifyAccountAccess();
                }
            });

            input.addEventListener("keydown", (e) => {
                if (e.key === "Backspace" && !input.value && arr[index - 1]) {
                    arr[index - 1].focus();
                }
            });

        });

        // ✅ overlay click close (safe)
        document.getElementById("modalOverlay").addEventListener("click", closeAccountModal);

    });

    // ===== VERIFY =====
    function verifyAccountAccess() {

        const inputs = document.querySelectorAll(".otp-box");
        let code = "";

        inputs.forEach(i => code += i.value);

        if (code.length < 6) return;

        const btn = document.getElementById("verifyBtn");

        // loading state
        btn.innerHTML = "Verifying...";
        btn.disabled = true;

        setTimeout(() => {

            const correct = "123654";
            let attempts = parseInt(localStorage.getItem("account_attempts") || 0);

            if (code === correct) {

                localStorage.removeItem("account_attempts");

                btn.innerHTML = "Success ✓";
                btn.classList.remove("bg-indigo-600");
                btn.classList.add("bg-green-600");

                setTimeout(() => {
                    window.location.href = "accounts.php";
                }, 500);

                return;
            }

            // ❌ WRONG
            attempts++;
            localStorage.setItem("account_attempts", attempts);

            const left = 5 - attempts;

            document.getElementById("authError").innerText =
                `Wrong code (${left} attempts left)`;

            // clear inputs
            inputs.forEach(i => i.value = "");
            inputs[0].focus();

            // shake animation
            const box = document.getElementById("modalBox");
            box.classList.add("animate-shake");
            setTimeout(() => box.classList.remove("animate-shake"), 300);

            // reset button
            btn.innerHTML = "Verify Access";
            btn.disabled = false;

            // 🔒 LOCK
            if (attempts >= 5) {

                const lockTime = Date.now() + (5 * 60 * 1000);

                localStorage.setItem("account_lock", lockTime);
                localStorage.removeItem("account_attempts");

                alert("Too many attempts. Locked for 5 minutes.");

                closeAccountModal();
            }

        }, 2000);
    }

    // ===== CLOSE MODAL =====
    let isClosing = false;

    function closeAccountModal() {

        if (isClosing) return;
        isClosing = true;

        const modal = document.getElementById("accountModal");
        const overlay = document.getElementById("modalOverlay");
        const box = document.getElementById("modalBox");

        overlay.classList.add("opacity-0");
        box.classList.add("opacity-0", "scale-90");

        setTimeout(() => {

            modal.classList.add("hidden");
            modal.classList.remove("flex");

            document.querySelectorAll(".otp-box").forEach(i => i.value = "");
            document.getElementById("authError").innerText = "";

            const btn = document.getElementById("verifyBtn");
            btn.innerHTML = "Verify Access";
            btn.disabled = false;
            btn.classList.remove("bg-green-600");
            btn.classList.add("bg-indigo-600");

            isClosing = false;

        }, 300);
    }

    // ===== ESC CLOSE =====
    document.addEventListener("keydown", function(e) {
        if (e.key === "Escape") {
            const modal = document.getElementById("accountModal");
            if (!modal.classList.contains("hidden")) {
                closeAccountModal();
            }
        }
    });
</script>

<?php include 'footer.php'; ?>
