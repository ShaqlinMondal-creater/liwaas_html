<?php
    $config = include('../admin/configs/config.php');
    $baseUrl   = $config['API_BASE_URL'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $baseName; ?> Stocks </title>
    <link rel="icon" href="../assets/brand/fav_icon.png" type="image/svg+xml">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/shadeerah-demo" rel="stylesheet" />
    <style>
        body{font-family:'Shadeerah Demo',sans-serif!important;}
    </style>
</head>

<body class="bg-gradient-to-br from-indigo-50 to-purple-100 min-h-screen">

<!-- ================= NOTCH NAVBAR ================= -->
<div class="flex justify-center mt-6">
    <div class="bg-white shadow-xl rounded-full px-8 py-4 flex space-x-6 items-center">

        <a href="analytics.php" class="flex flex-col items-center text-gray-600 hover:text-indigo-600 transition">
            <i class="fas fa-chart-pie text-xl"></i>
            <span class="text-xs mt-1">Analytics</span>
        </a>
        
        <a href="stocks.php" class="flex flex-col items-center text-gray-600 hover:text-indigo-600 transition">
            <i class="fas fa-boxes-stacked text-xl"></i>
            <span class="text-xs mt-1">Stocks</span>
        </a>
        
        <a href="sales_order.php" class="flex flex-col items-center text-gray-600 hover:text-indigo-600 transition">
            <i class="fas fa-file-invoice text-xl"></i>
            <span class="text-xs mt-1">S Orders</span>
        </a>
           
        <a href="sales_invoice.php" class="flex flex-col items-center text-gray-600 hover:text-indigo-600 transition">
            <i class="fas fa-receipt text-xl"></i>
            <span class="text-xs mt-1">S Invoices</span>
        </a>
        
        <a href="clients.php" class="flex flex-col items-center text-gray-600 hover:text-indigo-600 transition">
            <i class="fas fa-users text-xl"></i>
            <span class="text-xs mt-1">Clients</span>
        </a>

    </div>
</div>