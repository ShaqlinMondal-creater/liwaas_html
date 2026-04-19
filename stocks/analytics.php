<?php include 'header.php'; ?>

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
    <div class="bg-white rounded-2xl shadow-lg p-6 mb-10">
        <h2 class="text-lg font-semibold mb-4">Monthly Revenue</h2>
        <canvas id="salesChart"></canvas>
    </div>


    <!-- Top Selling Products -->
    <div class="bg-white rounded-2xl shadow-lg p-6 mb-10">
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

    <!-- Product Transactions -->
    <div class="bg-white rounded-2xl shadow-lg p-6 mt-10">

        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold">Product Transactions</h2>

            <input id="transaction_search" type="text"
                placeholder="Search product (name size color...)"
                class="border rounded px-3 py-2 w-64">
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
                    </tr>
                </thead>

                <tbody id="transactionTable"></tbody>
            </table>
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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const BASE_URL = "<?= $baseUrl ?>/api/admin/stocks/sales-order";
    let salesChart;
    const token = localStorage.getItem("auth_token");
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

    async function fetchTransactions(search = "") {

        const res = await fetch(`${BASE_URL}/transactions`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${token}`
            },
            body: JSON.stringify({ search })
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

    async function loadTransactions() {

        const search = document.getElementById("transaction_search").value;

        const res = await fetchTransactions(search);

        if (!res.status) return;

        const table = document.getElementById("transactionTable");
        table.innerHTML = "";

        res.data.forEach(t => {

            table.innerHTML += `
            <tr class="border-b">
                <td class="px-3 py-2">${t.sales_order_no}</td>
                <td class="px-3 py-2">${t.so_date}</td>
                <td class="px-3 py-2">${t.client_name}</td>
                <td class="px-3 py-2">${t.product_name}</td>
                <td class="px-3 py-2">${t.size}</td>
                <td class="px-3 py-2">${t.color}</td>
                <td class="px-3 py-2">${t.qty}</td>
                <td class="px-3 py-2">₹${t.price}</td>
                <td class="px-3 py-2">₹${t.sub_total}</td>
            </tr>
            `;
        });
    }
    document.getElementById("transaction_search").addEventListener("input", function () {

        clearTimeout(window.txTimer);

        window.txTimer = setTimeout(() => {
            loadTransactions();
        }, 400);

    });

    loadAnalytics();
    loadTransactions();
</script>

<?php include 'footer.php'; ?>
