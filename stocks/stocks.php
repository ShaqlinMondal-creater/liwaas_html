<?php include 'header.php'; ?>

<div class="max-w-7xl mx-auto px-6 mt-12">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Stocks</h1>

        <div class="flex gap-3">
            <button class="bg-green-600 text-white px-4 py-2 rounded-lg">
                Export Excel
            </button>
            <button class="bg-red-600 text-white px-4 py-2 rounded-lg">
                Export PDF
            </button>
            <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                + Add Product
            </button>
        </div>
    </div>

    <!-- Filters -->
    <div class="bg-white shadow rounded-xl p-4 mb-6">

        <div class="grid grid-cols-4 gap-4">

            <input 
                id="search"
                type="text"
                placeholder="Search product..."
                class="border rounded-lg px-3 py-2"
            >

            <select id="size" class="border rounded-lg px-3 py-2">
                <option value="">All Size</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
            </select>

            <select id="color" class="border rounded-lg px-3 py-2">
                <option value="">All Color</option>
                <option>Matt Black</option>
                <option>Royal Red</option>
                <option>Peace White</option>
            </select>

            <button 
                onclick="loadStocks(0)"
                class="bg-indigo-600 text-white rounded-lg"
            >
                Filter
            </button>

        </div>

    </div>

    <!-- Table -->
    <div class="bg-white rounded-2xl shadow-lg overflow-x-auto">

        <table class="min-w-full text-left">

            <thead class="bg-indigo-50">
                <tr>

                    <th class="px-6 py-3">
                        <input type="checkbox" id="selectAll">
                    </th>

                    <th class="px-6 py-3">UID</th>
                    <th class="px-6 py-3">Name</th>
                    <th class="px-6 py-3">Size</th>
                    <th class="px-6 py-3">Color</th>
                    <th class="px-6 py-3">List Price</th>
                    <th class="px-6 py-3">Sale Price</th>
                    <th class="px-6 py-3">Stock</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3">Action</th>

                </tr>
            </thead>

            <tbody id="stocksTable"></tbody>

        </table>

    </div>

    <!-- Pagination -->
    <div class="flex justify-between mt-6">

        <button 
            id="prevBtn"
            class="bg-gray-200 px-4 py-2 rounded"
        >
            Previous
        </button>

        <button 
            id="nextBtn"
            class="bg-gray-200 px-4 py-2 rounded"
        >
            Next
        </button>

    </div>

</div>

<script>
    const BASE_URL = "https://api.liwaas.com/api";
</script>

<!-- ========================= -->
<!-- API SCRIPT -->
<!-- ========================= -->

<script>
    async function fetchStocks(filters)
    {

        const token = localStorage.getItem("auth_token");

        const response = await fetch(BASE_URL + "/stocks/get-stock",{

            method:"POST",

            headers:{
                "Content-Type":"application/json",
                "Authorization":"Bearer "+token
            },

            body:JSON.stringify(filters)

        });

        return await response.json();

    }
</script>

<!-- ========================= -->
<!-- UI SCRIPT -->
<!-- ========================= -->

<script>

    let offset = 0;
    let limit = 10;
    let total = 0;

    async function loadStocks(newOffset = 0)
    {

        offset = newOffset;

        const filters = {

            search:document.getElementById("search").value,
            size:document.getElementById("size").value,
            color:document.getElementById("color").value,
            limit:limit,
            offset:offset

        };

        const response = await fetchStocks(filters);

        if(!response.status) return;

        total = response.total;

        renderStocks(response.data);

    }

    function renderStocks(data)
    {

        const table = document.getElementById("stocksTable");

        table.innerHTML = "";

        data.forEach(item => {

            const status = item.status == 1
            ? `<span class="text-green-600">Active</span>`
            : `<span class="text-red-600">Inactive</span>`;

            table.innerHTML += `
            
            <tr class="border-t">

                <td class="px-6 py-4">
                    <input type="checkbox" class="rowCheckbox" value="${item.id}">
                </td>

                <td class="px-6 py-4 font-semibold text-gray-700">
                    ${item.uid}
                </td>

                <td class="px-6 py-4">
                    ${item.name}
                </td>

                <td class="px-6 py-4">
                    ${item.size}
                </td>

                <td class="px-6 py-4">
                    ${item.color}
                </td>

                <td class="px-6 py-4">
                    ₹${item.list_price}
                </td>

                <td class="px-6 py-4">
                    ₹${item.sale_price}
                </td>

                <td class="px-6 py-4">
                    ${item.stock}
                </td>

                <td class="px-6 py-4">
                    ${status}
                </td>

                <td class="px-6 py-4 space-x-3">

                    <button class="text-blue-600">
                        <i class="fas fa-eye"></i>
                    </button>

                    <button class="text-yellow-600">
                        <i class="fas fa-edit"></i>
                    </button>

                    <button class="text-red-600">
                        <i class="fas fa-trash"></i>
                    </button>

                </td>

            </tr>
            
            `;

        });

    }

    document.addEventListener("change", function(e){
        if(e.target.id === "selectAll")
        {

            const checked = e.target.checked;

            document.querySelectorAll(".rowCheckbox")
            .forEach(cb => cb.checked = checked);

        }
    });

    document.getElementById("nextBtn").onclick = () =>
    {
        if(offset + limit < total)
        loadStocks(offset + limit);
    };

    document.getElementById("prevBtn").onclick = () =>
    {
        if(offset - limit >= 0)
        loadStocks(offset - limit);
    };

    window.onload = () =>
    {
        loadStocks(0);
    };
</script>

<?php include 'footer.php'; ?>