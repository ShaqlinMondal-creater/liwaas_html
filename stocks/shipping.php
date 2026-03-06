<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shipping Page</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-indigo-50 to-purple-100 min-h-screen">

<!-- ================= NOTCH NAVBAR ================= -->
<div class="flex justify-center mt-6">
    <div class="bg-white shadow-xl rounded-full px-8 py-4 flex space-x-10 items-center">

        <a href="dashboard.html" class="flex flex-col items-center text-gray-600 hover:text-indigo-600">
            <i class="fas fa-chart-line text-xl"></i>
            <span class="text-xs mt-1">Dashboard</span>
        </a>

        <a href="products.html" class="flex flex-col items-center text-gray-600 hover:text-indigo-600">
            <i class="fas fa-box text-xl"></i>
            <span class="text-xs mt-1">Products</span>
        </a>

        <a href="orders.html" class="flex flex-col items-center text-gray-600 hover:text-indigo-600">
            <i class="fas fa-shopping-cart text-xl"></i>
            <span class="text-xs mt-1">Orders</span>
        </a>

        <a href="shipping.html" class="flex flex-col items-center text-indigo-600">
            <i class="fas fa-truck text-xl"></i>
            <span class="text-xs mt-1">Shipping</span>
        </a>

    </div>
</div>

<!-- ================= SHIPPING CONTENT ================= -->
<div class="max-w-7xl mx-auto px-6 mt-12">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Shipping Management</h1>
        <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
            + Add Shipping
        </button>
    </div>

    <div class="bg-white rounded-2xl shadow-lg overflow-x-auto">

        <table class="min-w-full text-left">
            <thead class="bg-indigo-50">
                <tr>
                    <th class="px-6 py-3">Tracking ID</th>
                    <th class="px-6 py-3">Order ID</th>
                    <th class="px-6 py-3">Carrier</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3">Estimated Delivery</th>
                    <th class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-t">
                    <td class="px-6 py-4">TRK001</td>
                    <td class="px-6 py-4">#ORD001</td>
                    <td class="px-6 py-4">DHL</td>
                    <td class="px-6 py-4">
                        <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">In Transit</span>
                    </td>
                    <td class="px-6 py-4">10 Feb 2026</td>
                    <td class="px-6 py-4 space-x-3">
                        <button class="text-blue-600"><i class="fas fa-eye"></i></button>
                        <button class="text-yellow-600"><i class="fas fa-edit"></i></button>
                    </td>
                </tr>

                <tr class="border-t">
                    <td class="px-6 py-4">TRK002</td>
                    <td class="px-6 py-4">#ORD002</td>
                    <td class="px-6 py-4">FedEx</td>
                    <td class="px-6 py-4">
                        <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm">Delivered</span>
                    </td>
                    <td class="px-6 py-4">08 Feb 2026</td>
                    <td class="px-6 py-4 space-x-3">
                        <button class="text-blue-600"><i class="fas fa-eye"></i></button>
                    </td>
                </tr>

            </tbody>
        </table>

    </div>

</div>

</body>
</html>
