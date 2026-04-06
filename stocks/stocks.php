<?php include 'header.php'; ?>

<div class="max-w-7xl mx-auto px-6 mt-12">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Stocks</h1>

        <div class="flex flex-wrap gap-3 md:flex-nowrap">
            <button class="bg-green-600 text-white px-4 py-2 rounded-lg">
                Export Excel
            </button>
            <button onclick="openSalesOrderModal()" class="bg-red-600 text-white px-4 py-2 rounded-lg">
                Generate Order
            </button>
            <button onclick="deleteSelected()" class="bg-red-700 text-white px-4 py-2 rounded-lg">
                Delete Selected
            </button>
            <button onclick="openAddModal()" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
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

            <!-- <button 
                onclick="loadStocks(0)"
                class="bg-indigo-600 text-white rounded-lg"
            >
                Filter
            </button> -->

        </div>

    </div>

    <!-- Table -->
    <div class="bg-white rounded-2xl shadow-lg">

        <div class="overflow-x-auto">

            <!-- 👇 ADD THIS WRAPPER -->
            <div class="max-h-[400px] overflow-y-auto">

                <table class="min-w-full text-left">

                    <thead class="bg-indigo-50 sticky top-0 z-9">
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

        </div>

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

<!-- ADD PRODUCT MODAL -->

<div id="addProductModal" class="fixed inset-0 bg-black bg-opacity-40 hidden items-center justify-center">

    <div class="bg-white rounded-xl w-full max-w-lg p-6">

        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Add Product</h2>
            <button onclick="closeAddModal()" class="text-gray-500">✕</button>
        </div>

        <div class="grid grid-cols-2 gap-4">

            <input id="p_name" placeholder="Product Name" class="border rounded-lg px-3 py-2 col-span-2">

            <select id="p_size" class="border rounded-lg px-3 py-2">
                <option value="">Size</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
            </select>

            <input id="p_color" placeholder="Color" class="border rounded-lg px-3 py-2">

            <input id="p_list_price" type="number" placeholder="List Price" class="border rounded-lg px-3 py-2">

            <input id="p_sale_price" type="number" placeholder="Sale Price" class="border rounded-lg px-3 py-2">

            <input id="p_stock" type="number" placeholder="Stock" class="border rounded-lg px-3 py-2">

            <select id="p_status" class="border rounded-lg px-3 py-2">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>

        </div>

        <div class="flex justify-end gap-3 mt-6">

            <button onclick="closeAddModal()" class="px-4 py-2 bg-gray-200 rounded-lg">
                Cancel
            </button>

            <button onclick="addProduct()" class="px-4 py-2 bg-indigo-600 text-white rounded-lg">
                Save
            </button>

        </div>

    </div>

</div>

<!-- Create Sales Order Modal -->
<!-- SALES ORDER MODAL -->

<div id="salesOrderModal" class="fixed inset-0 bg-black bg-opacity-40 hidden items-center justify-center">

    <div class="bg-white rounded-xl w-full max-w-3xl p-6 mx-4">

        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Generate Sales Order</h2>
            <button onclick="closeSalesModal()">✕</button>
        </div>

        <!-- Client -->
        <div class="mb-4">

            <select id="clientSelect" class="border rounded-lg px-3 py-2 w-full mb-2"></select>

            <!-- Checkbox -->
            <label class="flex items-center gap-2 mb-2">
                <input type="checkbox" id="newCustomerToggle">
                Add New Customer
            </label>

            <!-- Hidden Fields -->
            <div id="newCustomerFields" class="hidden space-y-2">

                <input id="new_name" placeholder="Customer Name"
                    class="border rounded-lg px-3 py-2 w-full">

                <input id="new_mobile" placeholder="Mobile Number"
                    class="border rounded-lg px-3 py-2 w-full">

                <button onclick="addNewCustomer()"
                    class="bg-green-600 text-white px-3 py-2 rounded-lg w-full">
                    Save Customer
                </button>

            </div>

        </div>

        <!-- Products -->

        <div class="max-h-[300px] overflow-y-auto overflow-x-auto">

            <table class="min-w-full text-left">

                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2">Product</th>
                        <th class="px-4 py-2">Qty</th>
                        <th class="px-4 py-2">Price</th>
                        <th class="px-4 py-2">Tax %</th>
                        <th class="px-4 py-2"></th>
                    </tr>
                </thead>

                <tbody id="orderItems"></tbody>

            </table>

        </div>

        <div class="flex justify-end mt-4 gap-3">

            <div class="text-right mb-4 space-y-1">
                <p>Taxable Amount: ₹<span id="orderTaxable">0</span></p>
                <p>Total Tax: ₹<span id="orderTax">0</span></p>
                <p class="text-lg font-bold">Grand Total: ₹<span id="orderTotal">0</span></p>
            </div>
            <div class="text-right mb-4 space-y-1">
                <button onclick="closeSalesModal()" class="px-4 py-2 bg-gray-200 rounded">
                    Cancel
                </button>

                <button onclick="createSalesOrder()" class="px-4 py-2 bg-indigo-600 text-white rounded">
                    Create Order
                </button>
            </div>
        </div>

    </div>

</div>

<!-- Create -->
<script>
    const BASE_URL = "<?= $baseUrl ?>/api/admin";
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

    async function addStockAPI(payload)
    {

        const token = localStorage.getItem("auth_token");

        const response = await fetch(BASE_URL + "/stocks/add-stock",{

            method:"POST",

            headers:{
                "Content-Type":"application/json",
                "Authorization":"Bearer "+token
            },

            body:JSON.stringify(payload)

        });

        return await response.json();

    }

    async function deleteStockAPI(ids)
    {

        const token = localStorage.getItem("auth_token");

        const response = await fetch(BASE_URL + "/stocks/delete-stock",{

            method:"POST",

            headers:{
                "Content-Type":"application/json",
                "Authorization":"Bearer "+token
            },

            body:JSON.stringify({
                ids: ids
            })

        });

        return await response.json();

    }

    async function fetchClients() {

        const token = localStorage.getItem("auth_token");

        const response = await fetch(BASE_URL + "/stocks/clients/fetch", {

            method: "POST",

            headers: {
                "Content-Type": "application/json",
                "Authorization": "Bearer " + token
            }

        });

        return await response.json();

    }

    async function createSalesOrderAPI(payload) {

        const token = localStorage.getItem("auth_token");

        const response = await fetch(BASE_URL + "/stocks/sales-order/create", {

            method: "POST",

            headers: {
                "Content-Type": "application/json",
                "Authorization": "Bearer " + token
            },

            body: JSON.stringify(payload)

        });

        return await response.json();

    }

    async function addCustomerAPI(payload) {

        const token = localStorage.getItem("auth_token");

        const response = await fetch(BASE_URL + "/stocks/clients/add", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Authorization": "Bearer " + token
            },
            body: JSON.stringify(payload)
        });

        return await response.json();
    }


</script>

<!-- ========================= -->
<!-- UI SCRIPT -->
<!-- ========================= -->

<script>

    document.getElementById("newCustomerToggle").addEventListener("change", function () {

        const fields = document.getElementById("newCustomerFields");

        if (this.checked) {
            fields.classList.remove("hidden");
        } else {
            fields.classList.add("hidden");
        }

    });

    let offset = 0;
    let limit = 40;
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

                    <button onclick="deleteSingle(${item.id})" class="text-red-600">
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

    // Add Product Modal codes
    function openAddModal()
    {
        document.getElementById("addProductModal").classList.remove("hidden");
        document.getElementById("addProductModal").classList.add("flex");
    }
    function closeAddModal()
    {
        document.getElementById("addProductModal").classList.add("hidden");
    }
    async function addProduct()
    {

        const payload = {

            name:document.getElementById("p_name").value,
            size:document.getElementById("p_size").value,
            color:document.getElementById("p_color").value,
            list_price:parseFloat(document.getElementById("p_list_price").value),
            sale_price:parseFloat(document.getElementById("p_sale_price").value),
            stock:parseInt(document.getElementById("p_stock").value),
            status:parseInt(document.getElementById("p_status").value)

        };

        const res = await addStockAPI(payload);

        if(res.status)
        {

            alert(res.message);

            closeAddModal();

            loadStocks(0); // refresh table

        }
        else
        {
            alert("Failed to add product");
        }

    }

    async function deleteSingle(id)
    {

        if(!confirm("Delete this product?")) return;

        const res = await deleteStockAPI([id]);

        if(res.status)
        {
            alert(res.message);
            loadStocks(offset);
        }
        else
        {
            alert("Delete failed");
        }

    }

    async function deleteSelected()
    {

        const ids = [];

        document.querySelectorAll(".rowCheckbox:checked")
        .forEach(cb => ids.push(parseInt(cb.value)));

        if(ids.length === 0)
        {
            alert("Select products first");
            return;
        }

        if(!confirm("Delete selected products?")) return;

        const res = await deleteStockAPI(ids);

        if(res.status)
        {
            alert(res.message);
            loadStocks(offset);
        }
        else
        {
            alert("Delete failed");
        }

    }

    async function openSalesOrderModal() {

        const selected = [];

        document.querySelectorAll(".rowCheckbox:checked")
        .forEach(cb => selected.push(parseInt(cb.value)));

        if (selected.length === 0) {
            alert("Select product first");
            return;
        }
        document.getElementById("orderItems").innerHTML = "";
        document.getElementById("salesOrderModal").classList.remove("hidden");
        document.getElementById("salesOrderModal").classList.add("flex");

        loadOrderProducts(selected);
        loadClients();

    }

    function loadOrderProducts(ids) {

        const rows = document.querySelectorAll(".rowCheckbox");

        const table = document.getElementById("orderItems");

        table.innerHTML = "";

        rows.forEach(row => {

            if (ids.includes(parseInt(row.value))) {

                const tr = row.closest("tr");

                const uid = tr.children[1].innerText.trim();
                const name = tr.children[2].innerText.trim();
                const size = tr.children[3].innerText.trim();
                const price = tr.children[6].innerText.replace("₹","").trim();

                table.innerHTML += `

                    <tr class="orderRow">
                        <td class="px-4 py-2">
                            ${name} <br>
                            <span class="text-xs text-gray-500">Size: ${size}</span>
                            <input type="hidden" class="item_uid" value="${uid}">
                        </td>

                        <td class="px-4 py-2">
                            <input type="number" value="1" class="item_qty border px-2 py-1 w-20" oninput="calculateOrderTotal()">
                        </td>

                        <td class="px-4 py-2">
                            <input type="number" value="${price}" class="item_price border px-2 py-1 w-24" oninput="calculateOrderTotal()">
                        </td>

                        <td class="px-4 py-2">
                            <select class="item_tax border px-2 py-1 w-20" onchange="calculateOrderTotal()">
                                <option value="0">0%</option>
                                <option value="5" selected>5%</option>
                                <option value="12">12%</option>
                            </select>
                        </td>

                        <td class="px-4 py-2">
                            <button onclick="removeOrderRow(this)" class="text-red-600">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                `;
            }

        });
        calculateOrderTotal();

    }

    function removeOrderRow(btn)
    {
        const row = btn.closest("tr");
        row.remove();
        calculateOrderTotal();
    }

    function calculateOrderTotal()
    {

        let taxable = 0;
        let totalTax = 0;

        document.querySelectorAll("#orderItems tr").forEach(row => {

            const qty = parseFloat(row.querySelector(".item_qty").value) || 0;
            const price = parseFloat(row.querySelector(".item_price").value) || 0;
            const tax = parseFloat(row.querySelector(".item_tax").value) || 0;

            const subTotal = qty * price;
            const taxAmount = subTotal * tax / 100;

            taxable += subTotal;
            totalTax += taxAmount;

        });

        const grandTotal = taxable + totalTax;

        document.getElementById("orderTaxable").innerText = taxable.toFixed(2);
        document.getElementById("orderTax").innerText = totalTax.toFixed(2);
        document.getElementById("orderTotal").innerText = grandTotal.toFixed(2);

    }

    async function loadClients() {

        const res = await fetchClients();

        const select = document.getElementById("clientSelect");

        select.innerHTML = "";

        res.data.forEach(client => {

            select.innerHTML += `
                <option value="${client.id}">
                    ${client.name} - ${client.owner_name} (${client.mobile})
                </option>`;

        });

    }

    async function createSalesOrder() {

        const items = [];

        document.querySelectorAll("#orderItems tr")
            .forEach(row => {

                items.push({

                    uid: parseInt(row.querySelector(".item_uid").value),
                    qty: parseInt(row.querySelector(".item_qty").value),
                    price: parseFloat(row.querySelector(".item_price").value),
                    tax: parseFloat(row.querySelector(".item_tax").value)

                });

            });

        const payload = {

            client_id: parseInt(document.getElementById("clientSelect").value),
            items: items

        };

        if(!payload.client_id){
            alert("Select client");
            return;
        }

        const res = await createSalesOrderAPI(payload);

        if (res.status) {

            alert("Order Created : " + res.data.sales_order_no);

            closeSalesModal();

            document.querySelectorAll(".rowCheckbox").forEach(cb => cb.checked = false);
            document.getElementById("selectAll").checked = false;

        }
        else {
            alert("Order failed");
        }
    }

    function closeSalesModal() {
        document.getElementById("salesOrderModal").classList.add("hidden");
    }

    async function addNewCustomer() {

        const name = document.getElementById("new_name").value;
        const mobile = document.getElementById("new_mobile").value;

        if (!name || !mobile) {
            alert("Enter name and mobile");
            return;
        }

        const res = await addCustomerAPI({
            name: name,
            mobile: mobile
        });

        if (res.status) {

            alert("Customer Added");

            // Reload dropdown
            await loadClients();

            // Auto select new customer
            document.getElementById("clientSelect").value = res.data.id;

            // Reset fields
            document.getElementById("new_name").value = "";
            document.getElementById("new_mobile").value = "";
            document.getElementById("newCustomerToggle").checked = false;
            document.getElementById("newCustomerFields").classList.add("hidden");

        } else {
            alert("Failed to add customer");
        }

    }

    // ===== AUTO FILTER START =====
    document.addEventListener("DOMContentLoaded", function () {

        let searchTimeout;

        document.getElementById("search").addEventListener("input", function () {

            clearTimeout(searchTimeout);

            searchTimeout = setTimeout(() => {
                loadStocks(0);
            }, 500);

        });

        document.getElementById("size").addEventListener("change", function () {
            loadStocks(0);
        });

        document.getElementById("color").addEventListener("change", function () {
            loadStocks(0);
        });

    });
    // ===== AUTO FILTER END =====

    window.onload = () =>
    {
        loadStocks(0);
    };
</script>

<?php include 'footer.php'; ?>