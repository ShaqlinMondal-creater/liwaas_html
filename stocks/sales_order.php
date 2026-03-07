<?php include 'header.php'; ?>

<!-- ================= ORDERS CONTENT ================= -->
<div class="max-w-7xl mx-auto px-6 mt-12">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Orders</h1>
    </div>

    <div class="bg-white rounded-2xl shadow-lg overflow-x-auto">

        <table class="min-w-full text-left">
            <thead class="bg-indigo-50">
                <tr>
                    <th class="px-6 py-3">Order ID</th>
                    <th class="px-6 py-3">Customer</th>
                    <th class="px-6 py-3">Amount</th>
                    <th class="px-6 py-3">Date</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-t">
                    <td class="px-6 py-4">#ORD001</td>
                    <td class="px-6 py-4">Rahim</td>
                    <td class="px-6 py-4">$500</td>
                    <td class="px-6 py-4">05 Feb 2026</td>
                    <td class="px-6 py-4">
                        <span class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-sm">Pending</span>
                    </td>
                    <td class="px-6 py-4 space-x-3">
                        <button class="text-blue-600"><i class="fas fa-eye"></i></button>
                        <button class="text-green-600"><i class="fas fa-check"></i></button>
                        <button class="text-red-600"><i class="fas fa-times"></i></button>
                    </td>
                </tr>

                <tr class="border-t">
                    <td class="px-6 py-4">#ORD002</td>
                    <td class="px-6 py-4">Karim</td>
                    <td class="px-6 py-4">$820</td>
                    <td class="px-6 py-4">06 Feb 2026</td>
                    <td class="px-6 py-4">
                        <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm">Completed</span>
                    </td>
                    <td class="px-6 py-4 space-x-3">
                        <button class="text-blue-600"><i class="fas fa-eye"></i></button>
                        <button class="text-red-600"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>

            </tbody>
        </table>

    </div>

</div>

<?php include 'footer.php'; ?>
