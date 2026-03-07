<?php include 'header.php'; ?>

<!-- Stocks CONTENT -->
<div class="max-w-7xl mx-auto px-6 mt-12">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Products</h1>
        <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
            + Add Product
        </button>
    </div>

    <div class="bg-white rounded-2xl shadow-lg overflow-x-auto">

        <table class="min-w-full text-left">
            <thead class="bg-indigo-50">
                <tr>
                    <th class="px-6 py-3">Name</th>
                    <th class="px-6 py-3">Price</th>
                    <th class="px-6 py-3">Stock</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-t">
                    <td class="px-6 py-4">Laptop</td>
                    <td class="px-6 py-4">$800</td>
                    <td class="px-6 py-4">25</td>
                    <td class="px-6 py-4 text-green-600">Active</td>
                    <td class="px-6 py-4 space-x-3">
                        <button class="text-blue-600"><i class="fas fa-eye"></i></button>
                        <button class="text-yellow-600"><i class="fas fa-edit"></i></button>
                        <button class="text-red-600"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>

                <tr class="border-t">
                    <td class="px-6 py-4">Phone</td>
                    <td class="px-6 py-4">$500</td>
                    <td class="px-6 py-4">40</td>
                    <td class="px-6 py-4 text-green-600">Active</td>
                    <td class="px-6 py-4 space-x-3">
                        <button class="text-blue-600"><i class="fas fa-eye"></i></button>
                        <button class="text-yellow-600"><i class="fas fa-edit"></i></button>
                        <button class="text-red-600"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>

            </tbody>
        </table>

    </div>

</div>

<?php include 'footer.php'; ?>
