<?php include 'header.php'; ?>

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

<?php include 'footer.php'; ?>
