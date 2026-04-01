<?php include 'header.php'; ?>

<div class="max-w-7xl mx-auto px-6 mt-12">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Reviews</h1>
    </div>

    <!-- Filters -->
    <div class="bg-white shadow rounded-xl p-4 mb-6">

        <div class="grid grid-cols-2 md:grid-cols-5 gap-4">

            <input id="product_name" placeholder="Product Name" class="border rounded-lg px-3 py-2">

            <input id="aid" placeholder="AID" class="border rounded-lg px-3 py-2">

            <input id="uid" placeholder="UID" class="border rounded-lg px-3 py-2">

            <input id="user_name" placeholder="User Name" class="border rounded-lg px-3 py-2">

            <select id="total_star" class="border rounded-lg px-3 py-2">
                <option value="">All Stars</option>
                <option value="5">5 ⭐</option>
                <option value="4">4 ⭐</option>
                <option value="3">3 ⭐</option>
                <option value="2">2 ⭐</option>
                <option value="1">1 ⭐</option>
            </select>

        </div>

        <div class="mt-4">
            <button onclick="loadReviews()" class="bg-indigo-600 text-white px-4 py-2 rounded-lg">
                Filter
            </button>
        </div>

    </div>

    <!-- Table -->
    <div class="bg-white rounded-2xl shadow-lg overflow-x-auto">

        <table class="min-w-[900px] text-left">

            <thead class="bg-indigo-50">
                <tr>
                    <th class="px-6 py-3">Product</th>
                    <th class="px-6 py-3">User</th>
                    <th class="px-6 py-3">AID</th>
                    <th class="px-6 py-3">UID</th>
                    <th class="px-6 py-3">Rating</th>
                    <th class="px-6 py-3">Comment</th>
                    <th class="px-6 py-3">Images</th>
                </tr>
            </thead>

            <tbody id="reviewTable"></tbody>

        </table>

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

        <select id="clientSelect" class="border rounded-lg px-3 py-2 w-full mb-4"></select>

        <!-- Products -->

        <div class="max-h-100 overflow-y-auto overflow-x-auto">

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
    async function fetchReviews(filters)
    {
        const token = localStorage.getItem("auth_token");

        const res = await fetch(BASE_URL + "/reviews", {
            method: "POST",
            headers: {
                "Content-Type":"application/json",
                "Authorization":"Bearer " + token
            },
            body: JSON.stringify(filters)
        });

        return await res.json();
    }
</script>

<!-- ========================= -->
<!-- UI SCRIPT -->
<!-- ========================= -->

<script>

    let offset = 0;
    let limit = 10;
    let total = 0;

    async function loadReviews()
    {
        const filters = {

            product_name: document.getElementById("product_name").value,
            aid: document.getElementById("aid").value,
            uid: document.getElementById("uid").value,
            user_name: document.getElementById("user_name").value,
            total_star: document.getElementById("total_star").value

        };

        const res = await fetchReviews(filters);

        if(!res.success) return;

        renderReviews(res.data);
    }

    function renderReviews(data)
    {
        const table = document.getElementById("reviewTable");

        table.innerHTML = "";

        data.forEach(item => {

            const stars = "⭐".repeat(item.total_star);

            let images = "";

            if(item.upload_images.length > 0){
                images = item.upload_images.map(img => `
                    <img src="${img}" class="w-12 h-12 rounded object-cover inline-block mr-1 cursor-pointer" onclick="openImage('${img}')">
                `).join("");
            } else {
                images = `<span class="text-gray-400">No Image</span>`;
            }

            table.innerHTML += `
                <tr class="border-t">

                    <td class="px-6 py-4">
                        ${item.product?.name ?? "-"}
                    </td>

                    <td class="px-6 py-4">
                        ${item.user?.name ?? "-"}
                    </td>

                    <td class="px-6 py-4">
                        ${item.aid}
                    </td>

                    <td class="px-6 py-4">
                        ${item.uid}
                    </td>

                    <td class="px-6 py-4 text-yellow-500">
                        ${stars}
                    </td>

                    <td class="px-6 py-4">
                        ${item.comments}
                    </td>

                    <td class="px-6 py-4">
                        ${images}
                    </td>

                </tr>
            `;
        });
    }

    function openImage(url)
    {
        window.open(url, "_blank");
    }

    window.onload = () => {
        loadReviews();
    };
</script>

<?php include 'footer.php'; ?>