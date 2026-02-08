<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Product - Professional</title>

<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 min-h-screen">

<div class="max-w-6xl mx-auto px-6 py-14">

<h1 class="text-4xl font-bold text-gray-800 mb-10 flex items-center gap-3">
<i class="fas fa-plus-circle text-indigo-600"></i> Add Product
</h1>

<div class="bg-white rounded-3xl shadow-2xl p-12 space-y-14">

<!-- PRODUCT TYPE -->
<div>
    <div class="flex gap-6 bg-gray-100 p-2 rounded-2xl w-fit">
        <button type="button" onclick="setType('simple')" id="simpleBtn"
        class="type-btn active">
            <i class="fas fa-tag"></i> Simple
        </button>

        <button type="button" onclick="setType('variation')" id="variationBtn"
        class="type-btn">
            <i class="fas fa-layer-group"></i> Variation
        </button>
    </div>
</div>

<!-- BASIC INFO -->
<div>
    <h2 class="section-heading">
        <i class="fas fa-info-circle"></i> Basic Information
    </h2>

    <div class="grid md:grid-cols-2 gap-8 mt-6">

        <div class="form-group">
            <label class="form-label">AID *</label>
            <input type="text" id="aid" class="form-input">
        </div>

        <div class="form-group">
            <label class="form-label">Product Name *</label>
            <input type="text" id="name" class="form-input" onkeyup="generateSlug()">
        </div>

        <div class="form-group">
            <label class="form-label">Slug</label>
            <input type="text" id="slug" class="form-input">
        </div>

        <div class="form-group">
            <label class="form-label">Brand</label>
            <input type="text" id="brand" class="form-input">
        </div>

        <div class="form-group">
            <label class="form-label">Category</label>
            <input type="text" id="category" class="form-input">
        </div>

        <div class="form-group">
            <label class="form-label">Gender</label>
            <select id="gender" class="form-input">
                <option value="">Select</option>
                <option>male</option>
                <option>female</option>
                <option>unisex</option>
            </select>
        </div>

    </div>
</div>

<!-- DESCRIPTION -->
<div>
    <h2 class="section-heading">
        <i class="fas fa-align-left"></i> Description
    </h2>
    <textarea id="description" class="form-input h-32 mt-6"></textarea>
</div>

<!-- SIMPLE SECTION -->
<div id="simpleSection">

<h2 class="section-heading">
<i class="fas fa-dollar-sign"></i> Pricing
</h2>

<div class="grid md:grid-cols-3 gap-6 mt-6">
<input type="number" id="regular_price" placeholder="Regular Price" class="form-input">
<input type="number" id="sale_price" placeholder="Sale Price" class="form-input">
<input type="number" id="stock" placeholder="Stock" class="form-input">
<input type="text" id="size" placeholder="Size" class="form-input">
<input type="color" id="color" class="form-input">
</div>

<h3 class="mt-10 font-semibold text-gray-700">Specifications</h3>
<div id="simpleSpecs" class="mt-4"></div>

<button onclick="addSpecification('simpleSpecs')" type="button" class="add-btn mt-3">
<i class="fas fa-plus"></i> Add Specification
</button>

</div>

<!-- VARIATION SECTION -->
<div id="variationSection" class="hidden">

<h2 class="section-heading">
<i class="fas fa-layer-group"></i> Variations
</h2>

<div id="variationContainer" class="mt-6"></div>

<button onclick="addVariation()" type="button" class="add-btn mt-4">
<i class="fas fa-plus"></i> Add Variation
</button>

</div>

<!-- IMAGES -->
<div>
<h2 class="section-heading">
<i class="fas fa-images"></i> Product Images
</h2>

<div class="upload-box mt-6">
    <i class="fas fa-cloud-upload-alt text-4xl text-indigo-500"></i>
    <p class="mt-3 text-gray-600">Click to upload multiple images</p>
    <input type="file" id="images" multiple class="absolute inset-0 opacity-0 cursor-pointer" onchange="previewImages(event)">
</div>

<div id="preview" class="flex flex-wrap gap-4 mt-6"></div>
</div>

<!-- SUBMIT -->
<div>
<button onclick="submitForm()" class="bg-green-600 text-white px-8 py-3 rounded-xl shadow hover:bg-green-700">
<i class="fas fa-save"></i> Save Product
</button>
</div>

</div>
</div>

<!-- STYLES -->
<style>
.section-heading{
    @apply text-2xl font-semibold text-gray-800 flex items-center gap-3 border-b pb-3;
}
.form-group{
    @apply flex flex-col;
}
.form-label{
    @apply text-sm font-medium text-gray-700 mb-2;
}
.form-input{
    @apply border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 
           focus:ring-indigo-400 focus:border-indigo-400 
           outline-none transition-all duration-200 bg-white;
}
.upload-box{
    @apply relative border-2 border-dashed border-indigo-300 
           rounded-2xl p-10 text-center hover:border-indigo-500 
           transition-all cursor-pointer bg-indigo-50;
}
.type-btn{
    @apply px-6 py-2 rounded-xl font-medium text-gray-600 
           flex items-center gap-2 transition-all;
}
.type-btn.active{
    @apply bg-white shadow text-indigo-600;
}
.add-btn{
    @apply bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700;
}
</style>

<!-- SCRIPT -->
<script>

const specKeys = ["Fabric","Material","Fit","Pattern","Sleeve","Neck","Style"];

function setType(type){
    document.getElementById('simpleSection').classList.toggle('hidden', type !== 'simple');
    document.getElementById('variationSection').classList.toggle('hidden', type !== 'variation');

    document.getElementById('simpleBtn').classList.toggle('active', type === 'simple');
    document.getElementById('variationBtn').classList.toggle('active', type === 'variation');
}

function generateSlug(){
    const name = document.getElementById('name').value;
    document.getElementById('slug').value =
        name.toLowerCase().replace(/\s+/g,'-').replace(/[^\w\-]+/g,'');
}

function addSpecification(containerId){
    const container = document.getElementById(containerId);
    const div = document.createElement('div');
    div.className = "flex gap-4 mb-4";

    let options = specKeys.map(k => `<option value="${k}">${k}</option>`).join("");

    div.innerHTML = `
        <select class="form-input w-1/3">
            <option value="">Select Key</option>
            ${options}
        </select>
        <input type="text" placeholder="Value" class="form-input w-2/3">
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
            <input type="number" placeholder="UID" class="form-input uid">
            <input type="number" placeholder="Regular Price" class="form-input regular">
            <input type="number" placeholder="Sale Price" class="form-input sale">
            <input type="text" placeholder="Size" class="form-input size">
            <input type="color" class="form-input color">
            <input type="number" placeholder="Stock" class="form-input stock">
        </div>
        <div class="specContainer"></div>
        <button type="button" onclick="addSpecificationToVariation(this)" class="add-btn mb-3">
        <i class="fas fa-plus"></i> Add Spec
        </button>
        <button type="button" onclick="this.parentElement.remove()" class="text-red-600">
        <i class="fas fa-trash"></i> Remove
        </button>
    `;
    container.appendChild(div);
}

function addSpecificationToVariation(btn){
    const container = btn.parentElement.querySelector('.specContainer');
    const id = "spec" + Date.now();
    container.id = id;
    addSpecification(id);
}

function previewImages(event){
    const preview = document.getElementById('preview');
    preview.innerHTML = "";
    [...event.target.files].forEach(file=>{
        const reader = new FileReader();
        reader.onload = function(e){
            preview.innerHTML += `<img src="${e.target.result}" 
            class="w-24 h-24 object-cover rounded-lg shadow">`;
        }
        reader.readAsDataURL(file);
    });
}

function submitForm(){
    const type = document.getElementById('variationSection').classList.contains('hidden') ? 'simple' : 'variation';

    let data = {
        aid: aid.value,
        name: name.value,
        slug: slug.value,
        brand: brand.value,
        category: category.value,
        gender: gender.value,
        description: description.value,
        type: type
    };

    if(type === 'simple'){
        data.regular_price = regular_price.value;
        data.sale_price = sale_price.value;
        data.stock = stock.value;
        data.size = size.value;
        data.color = color.value;
    } else {
        data.variations = [];
        document.querySelectorAll('#variationContainer > div').forEach(v=>{
            data.variations.push({
                uid: v.querySelector('.uid').value,
                regular_price: v.querySelector('.regular').value,
                sale_price: v.querySelector('.sale').value,
                size: v.querySelector('.size').value,
                color: v.querySelector('.color').value,
                stock: v.querySelector('.stock').value
            });
        });
    }

    console.log("Generated JSON:", data);
    alert("Check console for JSON output.");
}

</script>

</body>
</html>
