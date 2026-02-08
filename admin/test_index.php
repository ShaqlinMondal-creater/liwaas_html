<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Product</title>

<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 min-h-screen">

<!-- ===== NAVBAR ===== -->
<div class="flex justify-center mt-6">
    <div class="bg-white shadow-xl rounded-full px-10 py-4 flex space-x-12 items-center">
        <a href="dashboard.html" class="flex flex-col items-center text-gray-500 hover:text-indigo-600">
            <i class="fas fa-chart-line text-xl"></i>
            <span class="text-xs mt-1">Dashboard</span>
        </a>
        <a href="products.html" class="flex flex-col items-center text-indigo-600">
            <i class="fas fa-box text-xl"></i>
            <span class="text-xs mt-1">Products</span>
        </a>
        <a href="orders.html" class="flex flex-col items-center text-gray-500 hover:text-indigo-600">
            <i class="fas fa-shopping-cart text-xl"></i>
            <span class="text-xs mt-1">Orders</span>
        </a>
        <a href="shipping.html" class="flex flex-col items-center text-gray-500 hover:text-indigo-600">
            <i class="fas fa-truck text-xl"></i>
            <span class="text-xs mt-1">Shipping</span>
        </a>
    </div>
</div>

<!-- ===== CONTENT ===== -->
<div class="max-w-6xl mx-auto px-6 mt-12 mb-20">

<h1 class="text-3xl font-bold text-gray-800 mb-10 flex items-center gap-3">
<i class="fas fa-plus-circle text-indigo-600"></i> Add New Product
</h1>

<div class="bg-white rounded-2xl shadow-xl p-10">

<!-- PRODUCT TYPE -->
<div class="flex gap-10 mb-8 text-lg">
    <label class="flex items-center gap-2 cursor-pointer">
        <input type="radio" name="type" value="simple" checked onchange="toggleType()" class="accent-indigo-600">
        <i class="fas fa-tag text-indigo-600"></i> Simple Product
    </label>

    <label class="flex items-center gap-2 cursor-pointer">
        <input type="radio" name="type" value="variation" onchange="toggleType()" class="accent-indigo-600">
        <i class="fas fa-layer-group text-indigo-600"></i> Variation Product
    </label>
</div>

<!-- BASIC INFO -->
<div class="grid md:grid-cols-2 gap-6 mb-10">
<input type="text" placeholder="AID" class="input">
<input type="text" placeholder="Product Name" class="input">
<input type="text" placeholder="Brand ID" class="input">
<input type="text" placeholder="Category ID" class="input">
<input type="text" placeholder="Gender" class="input">
<input type="text" placeholder="Keyword" class="input">
</div>

<textarea placeholder="Description" class="input mb-10 w-full"></textarea>

<!-- SIMPLE SECTION -->
<div id="simpleSection">

<h2 class="section-title"><i class="fas fa-dollar-sign"></i> Pricing</h2>

<div class="grid md:grid-cols-3 gap-6 mb-6">
<input type="number" placeholder="Regular Price" class="input">
<input type="number" placeholder="Sale Price" class="input">
<input type="number" placeholder="Stock" class="input">
<input type="text" placeholder="Size" class="input">
<input type="text" placeholder="Color" class="input">
</div>

<h3 class="section-sub">Specifications</h3>
<div id="simpleSpecs"></div>

<button onclick="addSpecification('simpleSpecs')" type="button" class="add-btn">
<i class="fas fa-plus"></i> Add Specification
</button>

</div>

<!-- VARIATION SECTION -->
<div id="variationSection" class="hidden">

<h2 class="section-title"><i class="fas fa-layer-group"></i> Variations</h2>

<div id="variationContainer"></div>

<button onclick="addVariation()" type="button" class="add-btn mt-4">
<i class="fas fa-plus"></i> Add Variation
</button>

</div>

<!-- GLOBAL IMAGE UPLOAD -->
<div class="mt-12">
<h2 class="section-title"><i class="fas fa-images"></i> Product Images</h2>
<input type="file" multiple class="input">
</div>

<!-- SUBMIT -->
<div class="mt-12">
<button class="bg-green-600 text-white px-8 py-3 rounded-xl shadow hover:bg-green-700">
<i class="fas fa-save"></i> Save Product
</button>
</div>

</div>
</div>

<!-- ===== STYLES ===== -->
<style>
.input{
    @apply border p-3 rounded-xl w-full focus:ring-2 focus:ring-indigo-300 outline-none;
}
.section-title{
    @apply text-xl font-semibold mb-6 flex items-center gap-3 text-gray-700;
}
.section-sub{
    @apply font-semibold mb-4 mt-6 text-gray-600;
}
.add-btn{
    @apply bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700;
}
</style>

<!-- ===== SCRIPT ===== -->
<script>

const specKeys = ["Fabric", "Material", "Fit", "Pattern", "Sleeve", "Neck", "Style"];

function toggleType(){
    const type = document.querySelector('input[name="type"]:checked').value;
    document.getElementById('simpleSection').classList.toggle('hidden', type !== 'simple');
    document.getElementById('variationSection').classList.toggle('hidden', type !== 'variation');
}

function addSpecification(containerId){
    const container = document.getElementById(containerId);
    const div = document.createElement('div');
    div.className = "flex gap-4 mb-4";

    let options = specKeys.map(k => `<option value="${k}">${k}</option>`).join("");

    div.innerHTML = `
        <select class="input w-1/3">
            <option value="">Select Key</option>
            ${options}
        </select>
        <input type="text" placeholder="Value" class="input w-2/3">
        <button onclick="this.parentElement.remove()" class="text-red-500">
            <i class="fas fa-times"></i>
        </button>
    `;

    container.appendChild(div);
}

function addVariation(){
    const container = document.getElementById('variationContainer');
    const div = document.createElement('div');
    div.className = "border rounded-xl p-6 mb-6 bg-gray-50";

    div.innerHTML = `
        <div class="grid md:grid-cols-3 gap-4 mb-6">
            <input type="number" placeholder="UID" class="input">
            <input type="number" placeholder="Regular Price" class="input">
            <input type="number" placeholder="Sale Price" class="input">
            <input type="text" placeholder="Size" class="input">
            <input type="text" placeholder="Color" class="input">
            <input type="number" placeholder="Stock" class="input">
        </div>

        <h4 class="font-semibold mb-4 text-gray-600">Specifications</h4>
        <div class="specContainer"></div>

        <button type="button" onclick="addSpecificationToVariation(this)" 
        class="add-btn mb-4">
        <i class="fas fa-plus"></i> Add Specification
        </button>

        <button type="button" onclick="this.parentElement.remove()" 
        class="text-red-600 font-medium">
        <i class="fas fa-trash"></i> Remove Variation
        </button>
    `;

    container.appendChild(div);
}

function addSpecificationToVariation(btn){
    const container = btn.parentElement.querySelector('.specContainer');
    addSpecification(container.id = container.id || "spec" + Date.now());
}

</script>

</body>
</html>
