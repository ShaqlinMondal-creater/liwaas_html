<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Accounts</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">

<!-- HEADER -->
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-800">Accounts</h1>

    <button onclick="window.history.back()" 
        class="bg-gray-600 text-white px-4 py-2 rounded">
        ← Back
    </button>
</div>

<!-- SUMMARY -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">

    <div class="bg-white p-4 rounded-xl shadow">
        <p class="text-gray-500 text-sm">Total Sales</p>
        <h2 class="text-xl font-bold">₹ 7,128</h2>
    </div>

    <div class="bg-white p-4 rounded-xl shadow">
        <p class="text-gray-500 text-sm">Total Paid</p>
        <h2 class="text-xl font-bold text-green-600">₹ 500</h2>
    </div>

    <div class="bg-white p-4 rounded-xl shadow">
        <p class="text-gray-500 text-sm">Total Due</p>
        <h2 class="text-xl font-bold text-red-600">₹ 6,628</h2>
    </div>

</div>

<!-- FILTER -->
<div class="flex gap-3 mb-4 flex-wrap">

    <input id="acc_search" type="text" placeholder="Search client..."
        class="border px-3 py-2 rounded w-48">

    <select id="acc_status" class="border px-2 py-2 rounded">
        <option value="">All Status</option>
        <option value="paid">Paid</option>
        <option value="partial">Partial</option>
        <option value="due">Due</option>
    </select>

</div>

<!-- TABLE -->
<div class="bg-white rounded-xl shadow overflow-x-auto">

    <table class="min-w-full text-sm">

        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 text-left">Order No</th>
                <th class="px-4 py-2">Date</th>
                <th class="px-4 py-2">Client</th>
                <th class="px-4 py-2">Total</th>
                <th class="px-4 py-2">Paid</th>
                <th class="px-4 py-2">Due</th>
                <th class="px-4 py-2">Status</th>
            </tr>
        </thead>

        <tbody id="accountsTable"></tbody>

    </table>

</div>

<script>

// SAMPLE DATA
let accountsData = [
    {
        order_no: "SO1776369736",
        date: "2026-04-17",
        client: "Zisan",
        total: 998,
        paid: 200,
        due: 798,
        status: "partial"
    },
    {
        order_no: "SO1776334309",
        date: "2026-04-16",
        client: "Sananda Bastralay",
        total: 2560,
        paid: 2560,
        due: 0,
        status: "paid"
    },
    {
        order_no: "SO1776333505",
        date: "2026-04-16",
        client: "Sananda Bastralay",
        total: 3520,
        paid: 0,
        due: 3520,
        status: "due"
    }
];

function renderAccounts(data) {

    const table = document.getElementById("accountsTable");
    table.innerHTML = "";

    if (!data.length) {
        table.innerHTML = `
            <tr>
                <td colspan="7" class="text-center py-6 text-gray-500">
                    No records found
                </td>
            </tr>
        `;
        return;
    }

    data.forEach(item => {

        let statusBadge = "";

        if (item.status === "paid") {
            statusBadge = `<span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">Paid</span>`;
        } else if (item.status === "partial") {
            statusBadge = `<span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-xs">Partial</span>`;
        } else {
            statusBadge = `<span class="bg-red-100 text-red-700 px-2 py-1 rounded text-xs">Due</span>`;
        }

        table.innerHTML += `
        <tr class="border-b">
            <td class="px-4 py-2">${item.order_no}</td>
            <td class="px-4 py-2">${item.date}</td>
            <td class="px-4 py-2">${item.client}</td>
            <td class="px-4 py-2">₹${item.total}</td>
            <td class="px-4 py-2 text-green-600">₹${item.paid}</td>
            <td class="px-4 py-2 text-red-600">₹${item.due}</td>
            <td class="px-4 py-2">${statusBadge}</td>
        </tr>
        `;
    });
}

// FILTER
function applyFilter() {

    const search = document.getElementById("acc_search").value.toLowerCase();
    const status = document.getElementById("acc_status").value;

    const filtered = accountsData.filter(item => {

        return (
            (!search || item.client.toLowerCase().includes(search)) &&
            (!status || item.status === status)
        );

    });

    renderAccounts(filtered);
}

// EVENTS
["acc_search","acc_status"].forEach(id => {
    document.getElementById(id).addEventListener("input", applyFilter);
});

// INIT
renderAccounts(accountsData);

</script>

</body>
</html>