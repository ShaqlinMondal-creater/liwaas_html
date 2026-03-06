<?php include 'header.php'; ?>

    <div class="max-w-7xl mx-auto mt-6">

        <div class="bg-white rounded shadow overflow-hidden">

            <table class="w-full text-sm">

                <thead class="bg-gray-100">

                    <tr>
                        <th class="p-3 text-left">Invoice ID</th>
                        <th class="p-3 text-left">Customer</th>
                        <th class="p-3 text-left">Amount</th>
                        <th class="p-3 text-left">Payment</th>
                        <th class="p-3 text-left">Date</th>
                        <th class="p-3 text-left">Action</th>
                    </tr>

                </thead>

                <tbody class="divide-y">

                    <tr>
                        <td class="p-3">INV-1001</td>
                        <td class="p-3">Rahul Sharma</td>
                        <td class="p-3">₹1897</td>
                        <td class="p-3 text-green-600 font-semibold">Paid</td>
                        <td class="p-3">05 Mar 2026</td>
                        <td class="p-3">
                            <button class="text-blue-600">View</button>
                        </td>
                    </tr>

                    <tr>
                        <td class="p-3">INV-1002</td>
                        <td class="p-3">Amit Kumar</td>
                        <td class="p-3">₹998</td>
                        <td class="p-3 text-yellow-600 font-semibold">Pending</td>
                        <td class="p-3">06 Mar 2026</td>
                        <td class="p-3">
                            <button class="text-blue-600">View</button>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

<?php include 'footer.php'; ?>