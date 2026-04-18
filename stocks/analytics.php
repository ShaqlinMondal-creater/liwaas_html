<?php include 'header.php'; ?>

<!-- ================= DASHBOARD CONTENT ================= -->
<div class="max-w-7xl mx-auto px-6 mt-12">

    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Analytics Overview</h1>
        <a href="../admin/index.php" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
            Admin Dashboard
        </a>
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
                        tension: 0,
                        fill: false,
                        yAxisID: 'y1',
                        borderWidth: 3,
                        pointRadius: 5,

                        pointBackgroundColor: '#10B981',   // ✅ ADD
                        pointBorderColor: '#ffffff',       // ✅ ADD
                        pointBorderWidth: 2,               // ✅ ADD

                        order: 10                         // 🔥 VERY IMPORTANT (bring to top)
                    },
                    {
                        label:'Items Sold',
                        data:itemsSold,
                        backgroundColor:'#d29a38'
                    },
                    {
                        label: 'Paid',
                        data: paid,
                        backgroundColor: '#00b92e'
                    },
                    {
                        label: 'Due',
                        data: due,
                        backgroundColor: '#EF4444'
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

                        suggestedMax: Math.max(...revenue) * 1.2, // 🔥 ADD THIS

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
    loadAnalytics();
</script>

<?php include 'footer.php'; ?>
