<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Product</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-indigo-50 to-purple-100 min-h-screen">

<!-- ===== NOTCH NAVBAR ===== -->
<div class="flex justify-center mt-6">
    <div class="bg-white shadow-xl rounded-full px-8 py-4 flex space-x-10 items-center">
        <a href="dashboard.html" class="flex flex-col items-center text-gray-600 hover:text-indigo-600">
            <i class="fas fa-chart-line text-xl"></i>
            <span class="text-xs mt-1">Dashboard</span>
        </a>
        <a href="products.html" class="flex flex-col items-center text-indigo-600">
            <i class="fas fa-box text-xl"></i>
            <span class="text-xs mt-1">Products</span>
        </a>
        <a href="orders.html" class="flex flex-col items-center text-gray-600 hover:text-indigo-600">
            <i class="fas fa-shopping-cart text-xl"></i>
            <span class="text-xs mt-1">Orders</span>
        </a>
        <a href="shipping.html" class="flex flex-col items-center text-gray-600 hover:text-indigo-600">
            <i class="fas fa-truck text-xl"></i>
            <span class="text-xs mt-1">Shipping</span>
        </a>
    </div>
</div>

<!-- ===== CONTENT ===== -->
<div class="max-w-6xl mx-auto px-6 mt-12 mb-16">

<h1 class="text-3xl font-bold mb-8 text-gray-800">Add Product</h1>

<div class="bg-white p-8 rounded-2xl shadow-lg">

<!-- Product Type Toggle -->
<div class="flex gap-6 mb-6">
    <label class="flex items-center gap-2">
        <input type="radio" name="productType" value="simple" checked onchange="toggleType()" class="accent-indigo-600">
        <span>Simple Product</span>
    </label>
    <label class="flex items-center gap-2">
        <input type="radio" name="productType" value="variation" onchange="toggleType()" class="accent-indigo-600">
        <span>Variation Product</span>
    </label>
</div>

<!-- Common Fields -->
<div class="grid md:grid-cols-2 gap-6 mb-6">

<input type="text" placeholder="AID" class="border p-3 rounded-lg w-full">
<input type="text" placeholder="Product Name" class="border p-3 rounded-lg w-full">
<input type="text" placeholder="Brand ID" class="border p-3 rounded-lg w-full">
<input type="text" placeholder="Category ID" class="border p-3 rounded-lg w-full">
<input type="text" placeholder="Gender" class="border p-3 rounded-lg w-full">
<input type="text" placeholder="Keyword" class="border p-3 rounded-lg w-full">

</div>

<textarea placeholder="Description" class="border p-3 rounded-lg w-full mb-6"></textarea>

<!-- Product Images -->
<div class="mb-6">
    <label class="block mb-2 font-medium">Upload Product Images</label>
    <input type="file" multiple class="border p-3 rounded-lg w-full">
</div>

<!-- SIMPLE PRODUCT SECTION -->
<div id="simpleSection">

<h2 class="text-xl font-semibold mb-4">Pricing & Stock</h2>

<div class="grid md:grid-cols-3 gap-6">
<input type="number" placeholder="Regular Price" class="border p-3 rounded-lg w-full">
<input type="number" placeholder="Sale Price" class="border p-3 rounded-lg w-full">
<input type="number" placeholder="Stock" class="border p-3 rounded-lg w-full">
<input type="text" placeholder="Size" class="border p-3 rounded-lg w-full">
<input type="text" placeholder="Color" class="border p-3 rounded-lg w-full">
</div>

<div class="mt-6">
<label class="block mb-2 font-medium">Specification</label>
<textarea class="border p-3 rounded-lg w-full"></textarea>
</div>

</div>

<!-- VARIATION SECTION -->
<div id="variationSection" class="hidden">

<h2 class="text-xl font-semibold mb-4">Variations</h2>

<div id="variationContainer"></div>

<button type="button" onclick="addVariation()" 
class="mt-4 bg-indigo-600 text-white px-4 py-2 rounded-lg">
+ Add Variation
</button>

</div>

<!-- Submit -->
<div class="mt-10">
<button class="bg-green-600 text-white px-6 py-3 rounded-xl hover:bg-green-700">
Save Product
</button>
</div>

</div>
</div>

<script>
function toggleType(){
    const type = document.querySelector('input[name="productType"]:checked').value;
    document.getElementById('simpleSection').classList.toggle('hidden', type !== 'simple');
    document.getElementById('variationSection').classList.toggle('hidden', type !== 'variation');
}

function addVariation(){
    const container = document.getElementById('variationContainer');

    const div = document.createElement('div');
    div.className = "border p-6 rounded-xl mb-6 bg-gray-50";

    div.innerHTML = `
        <div class="grid md:grid-cols-3 gap-4 mb-4">
            <input type="number" placeholder="UID" class="border p-2 rounded-lg">
            <input type="number" placeholder="Regular Price" class="border p-2 rounded-lg">
            <input type="number" placeholder="Sale Price" class="border p-2 rounded-lg">
            <input type="text" placeholder="Size" class="border p-2 rounded-lg">
            <input type="text" placeholder="Color" class="border p-2 rounded-lg">
            <input type="number" placeholder="Stock" class="border p-2 rounded-lg">
        </div>

        <label class="block mb-2 font-medium">Specification (Multiple)</label>
        <textarea class="border p-2 rounded-lg w-full mb-4" placeholder="Add specification..."></textarea>

        <label class="block mb-2 font-medium">Upload Variation Images</label>
        <input type="file" multiple class="border p-2 rounded-lg w-full mb-4">

        <button type="button" onclick="this.parentElement.remove()" 
        class="text-red-600 font-medium">Remove Variation</button>
    `;

    container.appendChild(div);
}
</script>

</body>
</html>
