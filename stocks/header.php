<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Stocks Admin Dashboard</title>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-indigo-50 to-purple-100 min-h-screen">

<!-- ================= NOTCH NAVBAR ================= -->
<div class="flex justify-center mt-6">
    <div class="bg-white shadow-xl rounded-full px-8 py-4 flex space-x-10 items-center">
        
        <a href="analytics.php" class="flex flex-col items-center text-indigo-600">
            <i class="fas fa-chart-line text-xl"></i>
            <span class="text-xs mt-1">Analytics</span>
        </a>

        <a href="stocks.php" class="flex flex-col items-center text-gray-600 hover:text-indigo-600">
            <i class="fas fa-box text-xl"></i>
            <span class="text-xs mt-1">Stocks</span>
        </a>

        <a href="sales_orders.php" class="flex flex-col items-center text-gray-600 hover:text-indigo-600">
            <i class="fas fa-shopping-cart text-xl"></i>
            <span class="text-xs mt-1">Sales Orders</span>
        </a>

        <a href="sales_invoices.php" class="flex flex-col items-center text-gray-600 hover:text-indigo-600">
            <i class="fas fa-truck text-xl"></i>
            <span class="text-xs mt-1">Sales Invoices</span>
        </a>

    </div>
</div>