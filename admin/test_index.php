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

<div class="max-w-6xl mx-auto px-6 py-12">

<h1 class="text-3xl font-bold text-gray-800 mb-8 flex items-center gap-3">
<i class="fas fa-plus-circle text-indigo-600"></i> Add Product
</h1>

<div class="bg-white rounded-2xl shadow-xl p-10 space-y-10">

<!-- TYPE TOGGLE -->
<div class="flex gap-4 bg-gray-100 p-2 rounded-xl w-fit">
    <button id="simpleBtn"
        onclick="setType('simple')"
        class="px-6 py-2 rounded-lg bg-white shadow text-indigo-600 font-medium flex items-center gap-2">
        <i class="fas fa-tag"></i> Simple
    </button>

    <button id="variationBtn"
        onclick="setType('variation')"
        class="px-6 py-2 rounded-lg text-gray-600 font-medium flex items-center gap-2">
        <i class="fas fa-layer-group"></i> Variation
    </button>
</div>

<!-- BASIC INFO -->
<div class="grid md:grid-cols-2 gap-6">

<input id="aid" placeholder="AID"
class="border rounded-lg px-4 py-3 focus:ring-2 focus:ring-indigo-400 outline-none">

<input id="name" placeholder="Product Name"
onkeyup="generateSlug()"
class="border rounded-lg px-4 py-3 focus:ring-2 focus:ring-indigo-400 outline-none">

<input id="slug" placeholder="Slug"
class="border rounded-lg px-4 py-3 focus:ring-2 focus:ring-indigo-400 outline-none">

<input id="brand" placeholder="Brand"
class="border rounded-lg px-4 py-3 focus:ring-2 focus:ring-indigo-400 outline-none">

<input id="category" placeholder="Category"
class="border rounded-lg px-4 py-3 focus:ring-2 focus:ring-indigo-400 outline-none">

<select id="gender"
class="border rounded-lg px-4 py-3 focus:ring-2 focus:ring-indigo-400 outline-none">
<option value="">Gender</option>
<option>male</option>
<option>female</option>
<option>unisex</option>
</select>

</div>

<textarea id="description"
placeholder="Description"
class="border rounded-lg px-4 py-3 w-full h-28 focus:ring-2 focus:ring-indigo-400 outline-none"></textarea>

<!-- SIMPLE SECTION -->
<div id="simpleSection">

<div class="grid md:grid-cols-3 gap-6">

<input id="regular_price" type="number" placeholder="Regular Price"
class="border rounded-lg px-4 py-3 focus:ring-2 focus:ring-indigo-400">

<input id="sale_price" type="number" placeholder="Sale Price"
class="border rounded-lg px-4 py-3 focus:ring-2 focus:ring-indigo-400">

<input id="stock" type="number" placeholder="Stock"
class="border rounded-lg px-4 py-3 focus:ring-2 focus:ring-indigo-400">

<input id="size" placeholder="Size"
class="border rounded-lg px-4 py-3 focus:ring-2 focus:ring-indigo-400">

<input id="color" type="color"
class="border rounded-lg px-4 py-3 focus:ring-2 focus:ring-indigo-400">

</div>

<h3 class="mt-6 font-semibold text-gray-700">Specifications</h3>
<div id="simpleSpecs" class="mt-4 space-y-3"></div>

<button onclick="addSpecification('simpleSpecs')"
class="mt-3 bg-indigo-600 text-white px-4 py-2 rounded-lg">
+ Add Specification
</button>

</div>

<!-- VARIATION SECTION -->
<div id="variationSection" class="hidden">

<div id="variationContainer" class="space-y-6"></div>

<button onclick="addVariation()"
class="bg-indigo-600 text-white px-4 py-2 rounded-lg">
+ Add Variation
</button>

</div>

<!-- IMAGE UPLOAD -->
<div>
<h3 class="font-semibold text-gray-700">Product Images</h3>

<input type="file" id="images" multiple onchange="previewImages(event)"
class="mt-3">

<div id="preview" class="flex flex-wrap gap-4 mt-4"></div>
</div>

<button onclick="submitForm()"
class="bg-green-600 text-white px-6 py-3 rounded-lg">
Save Product
</button>

</div>
</div>

<script>

const specKeys = ["Fabric","Material","Fit","Pattern","Sleeve","Neck","Style"];

function setType(type){
    document.getElementById('simpleSection').classList.toggle('hidden', type !== 'simple');
    document.getElementById('variationSection').classList.toggle('hidden', type !== 'variation');

    simpleBtn.classList.toggle('bg-white', type==='simple');
    simpleBtn.classList.toggle('shadow', type==='simple');
    simpleBtn.classList.toggle('text-indigo-600', type==='simple');

    variationBtn.classList.toggle('bg-white', type==='variation');
    variationBtn.classList.toggle('shadow', type==='variation');
    variationBtn.classList.toggle('text-indigo-600', type==='variation');
}

function generateSlug(){
    slug.value = name.value
        .toLowerCase()
        .replace(/\s+/g,'-')
        .replace(/[^\w\-]+/g,'');
}

function addSpecification(containerId){
    const container = document.getElementById(containerId);
    const row = document.createElement('div');
    row.className = "flex gap-3";

    let options = specKeys.map(k=>`<option value="${k}">${k}</option>`).join('');

    row.innerHTML = `
        <select class="border rounded-lg px-3 py-2 w-1/3">${options}</select>
        <input placeholder="Value"
        class="border rounded-lg px-3 py-2 w-2/3">
        <button onclick="this.parentElement.remove()" class="text-red-500">
        ✕</button>
    `;

    container.appendChild(row);
}

function addVariation(){
    const container = document.getElementById('variationContainer');
    const box = document.createElement('div');
    box.className = "border rounded-xl p-6 bg-gray-50";

    box.innerHTML = `
        <div class="grid md:grid-cols-3 gap-4 mb-4">
            <input placeholder="UID" class="uid border rounded-lg px-3 py-2">
            <input placeholder="Regular Price" class="regular border rounded-lg px-3 py-2">
            <input placeholder="Sale Price" class="sale border rounded-lg px-3 py-2">
            <input placeholder="Size" class="size border rounded-lg px-3 py-2">
            <input type="color" class="color border rounded-lg px-3 py-2">
            <input placeholder="Stock" class="stock border rounded-lg px-3 py-2">
        </div>
        <div class="specContainer space-y-2 mb-3"></div>
        <button onclick="addSpecificationToVariation(this)"
        class="bg-indigo-600 text-white px-3 py-1 rounded">
        + Spec</button>
        <button onclick="this.parentElement.remove()"
        class="text-red-600 ml-3">
        Remove</button>
    `;
    container.appendChild(box);
}

function addSpecificationToVariation(btn){
    const container = btn.parentElement.querySelector('.specContainer');
    const id = "spec" + Date.now();
    container.id = id;
    addSpecification(id);
}

function previewImages(event){
    preview.innerHTML='';
    [...event.target.files].forEach(file=>{
        const reader=new FileReader();
        reader.onload=e=>{
            preview.innerHTML+=`<img src="${e.target.result}"
            class="w-24 h-24 object-cover rounded shadow">`;
        }
        reader.readAsDataURL(file);
    });
}

function submitForm(){
    const type = variationSection.classList.contains('hidden') ? 'simple' : 'variation';

    let data={
        aid:aid.value,
        name:name.value,
        slug:slug.value,
        brand:brand.value,
        category:category.value,
        gender:gender.value,
        description:description.value,
        type:type
    };

    if(type==='simple'){
        data.regular_price=regular_price.value;
        data.sale_price=sale_price.value;
        data.stock=stock.value;
        data.size=size.value;
        data.color=color.value;
    }else{
        data.variations=[];
        document.querySelectorAll('#variationContainer > div').forEach(v=>{
            data.variations.push({
                uid:v.querySelector('.uid').value,
                regular_price:v.querySelector('.regular').value,
                sale_price:v.querySelector('.sale').value,
                size:v.querySelector('.size').value,
                color:v.querySelector('.color').value,
                stock:v.querySelector('.stock').value
            });
        });
    }

    console.log(data);
    alert("Check console for JSON output");
}

</script>

</body>
</html>
