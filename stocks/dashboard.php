<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Creative Admin Dashboard</title>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-indigo-50 to-purple-100 min-h-screen">

<!-- ================= NOTCH NAVBAR ================= -->
<div class="flex justify-center mt-6">
    <div class="bg-white shadow-xl rounded-full px-8 py-4 flex space-x-10 items-center">
        
        <a href="dashboard.html" class="flex flex-col items-center text-indigo-600">
            <i class="fas fa-chart-line text-xl"></i>
            <span class="text-xs mt-1">Dashboard</span>
        </a>

        <a href="products.html" class="flex flex-col items-center text-gray-600 hover:text-indigo-600">
            <i class="fas fa-box text-xl"></i>
            <span class="text-xs mt-1">Products</span>
        </a>

        <a href="#" class="flex flex-col items-center text-gray-600 hover:text-indigo-600">
            <i class="fas fa-shopping-cart text-xl"></i>
            <span class="text-xs mt-1">Orders</span>
        </a>

        <a href="#" class="flex flex-col items-center text-gray-600 hover:text-indigo-600">
            <i class="fas fa-truck text-xl"></i>
            <span class="text-xs mt-1">Shipping</span>
        </a>

    </div>
</div>

<!-- ================= DASHBOARD CONTENT ================= -->
<div class="max-w-7xl mx-auto px-6 mt-12">

    <h1 class="text-3xl font-bold mb-8 text-gray-800">Analytics Overview</h1>

    <!-- Analytics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">

        <div class="bg-white rounded-2xl shadow-lg p-6 hover:scale-105 transition">
            <p class="text-gray-500">Total Sales</p>
            <h2 class="text-2xl font-bold mt-2">$25,000</h2>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-6 hover:scale-105 transition">
            <p class="text-gray-500">Total Orders</p>
            <h2 class="text-2xl font-bold mt-2">1,240</h2>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-6 hover:scale-105 transition">
            <p class="text-gray-500">Products</p>
            <h2 class="text-2xl font-bold mt-2">320</h2>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-6 hover:scale-105 transition">
            <p class="text-gray-500">Customers</p>
            <h2 class="text-2xl font-bold mt-2">870</h2>
        </div>

    </div>

    <!-- Chart Section -->
    <div class="bg-white rounded-2xl shadow-lg p-6">
        <canvas id="salesChart"></canvas>
    </div>

</div>

<script>
const ctx = document.getElementById('salesChart').getContext('2d');
new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
            label: 'Sales',
            data: [5000, 7000, 8000, 6000, 9000, 11000],
            borderColor: '#6366F1',
            backgroundColor: 'rgba(99,102,241,0.2)',
            tension: 0.4,
            fill: true
        }]
    },
});
</script>

</body>
</html>
