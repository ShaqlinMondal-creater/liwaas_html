<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Accounts - Profit Analytics</title>
<script src="https://cdn.tailwindcss.com"></script>
<?php
    $config = include('../admin/configs/config.php');
    $baseUrl   = $config['API_BASE_URL'];
?>
<style>
    .card {
        background: white;
        padding: 18px;
        border-radius: 16px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        transition: 0.2s;
    }
    .card:hover {
        transform: translateY(-3px);
        box-shadow: 0 20px 35px rgba(0,0,0,0.08);
    }
    .card p {
        color: #6b7280;
        font-size: 14px;
    }
    .card h2 {
        font-size: 22px;
        font-weight: bold;
        margin-top: 6px;
    }
</style>
</head>

<body class="bg-gray-100 p-6">

    <!-- HEADER -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Accounts (Profit Analytics)</h1>

        <button onclick="window.history.back()" 
            class="bg-gray-600 text-white px-4 py-2 rounded">
            ← Back
        </button>
    </div>

    <!-- ===== TOP CARDS ===== -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-8">

        <div class="card">
            <p>Total Sell Value</p>
            <h2 id="total_sell_value">₹0</h2>
        </div>

        <div class="card">
            <p>Total Stock Value</p>
            <h2 id="total_stock_value">₹0</h2>
        </div>

        <div class="card text-green-600">
            <p>Total Profit</p>
            <h2 id="total_profit">₹0</h2>
        </div>

        <div class="card text-indigo-600">
            <p>Profit Margin</p>
            <h2 id="profit_margin">0%</h2>
        </div>

    </div>

    <!-- ===== TABLE ===== -->
    <div class="bg-white rounded-xl shadow p-4">

        <h3 class="text-lg font-bold mb-4">Monthly Profit</h3>

        <table class="min-w-full text-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left">Month</th>
                    <th class="px-4 py-2">Sell Value</th>
                    <th class="px-4 py-2">Stock Value</th>
                    <th class="px-4 py-2">Profit</th>
                    <th class="px-4 py-2">Margin %</th>
                </tr>
            </thead>

            <tbody id="profitTable"></tbody>
        </table>

    </div>

    <script>
        // ===== FORMAT MONEY =====
        function formatMoney(val) {
            return "₹" + parseFloat(val || 0).toFixed(2);
        }

        // ===== LOAD PROFIT DATA =====
        function loadProfitAnalytics() {

            const token = localStorage.getItem("token");

            fetch("<?= $baseUrl ?>/admin/stocks/sales-order/profit-margin", {
                method: "POST",
                headers: {
                    "Authorization": "Bearer " + token,
                    "Content-Type": "application/json"
                }
            })
            .then(res => res.json())
            .then(res => {

                if (!res.status) {
                    alert("Failed to load data");
                    return;
                }

                const data = res.data;

                // ===== TOP DATA =====
                document.getElementById("total_sell_value").innerText =
                    formatMoney(data.total_profit_data.total_sell_value);

                document.getElementById("total_stock_value").innerText =
                    formatMoney(data.total_profit_data.total_stock_value);

                document.getElementById("total_profit").innerText =
                    formatMoney(data.total_profit_data.total_profit);

                document.getElementById("profit_margin").innerText =
                    data.total_profit_data.profit_margin + "%";


                // ===== TABLE =====
                const table = document.getElementById("profitTable");
                table.innerHTML = "";

                data.month_wise_profit.forEach(item => {

                    const month = Object.keys(item)[0];
                    const val = item[month];

                    let rowColor = val.profit > 0 ? "text-green-600" : "text-gray-600";

                    table.innerHTML += `
                    <tr class="border-b">
                        <td class="px-4 py-2 capitalize font-semibold">${month}</td>
                        <td class="px-4 py-2">${formatMoney(val.sell_value)}</td>
                        <td class="px-4 py-2">${formatMoney(val.total_sales_stock_value)}</td>
                        <td class="px-4 py-2 ${rowColor}">${formatMoney(val.profit)}</td>
                        <td class="px-4 py-2">${val.profit_margin}%</td>
                    </tr>
                    `;
                });

            })
            .catch(err => {
                console.error(err);
                alert("Something went wrong");
            });
        }

        // ===== INIT =====
        loadProfitAnalytics();
    </script>
</body>
</html>