<?php include("header.php"); ?>

<main class="grow content pt-5" id="content" role="content">
  <div class="container-fixed">
    <div class="card min-w-full">
      <form id="update_product_form" class="card-body flex flex-col gap-5 p-10">
        <h3 class="text-lg font-medium text-gray-900 leading-none">Update Product</h3>
        <div class="text-sm text-gray-700">Modify the fields as needed and save changes</div>

        <!-- Basic Fields -->
        <div class="flex gap-10 items-center">
          <input type="hidden" name="slug" id="slug" />
          <input type="text" class="input input-sm w-[240px]" name="name" id="name" placeholder="Product Name" />
          <input type="text" class="input input-sm w-[240px]" name="aid" id="aid" placeholder="AID" />
          <input type="number" class="input input-sm w-[240px]" name="brand" id="brand" placeholder="Brand ID" />
          <input type="number" class="input input-sm w-[240px]" name="category" id="category" placeholder="Category ID" />
        </div>

        <!-- Info Fields -->
        <div class="flex gap-10 items-center">
          <input type="text" class="input input-sm w-[240px]" name="gender" id="gender" placeholder="Gender" />
          <input type="text" class="input input-sm w-[240px]" name="keyword" id="keyword" placeholder="Keyword" />
          <input type="text" class="input input-sm w-[240px]" name="description" id="description" placeholder="Description" />
          <input type="text" class="input input-sm w-[240px]" name="specification" id="specification" placeholder="Specification" />
        </div>

        <!-- Product Variations Display -->
        <div class="flex flex-col gap-3 border p-4 rounded bg-gray-50">
          <h4 class="text-md font-medium mb-2">Variants</h4>
          <div id="variant_list" class="flex flex-col gap-3"></div>
        </div>

        <!-- Uploaded Images -->
        <div id="uploaded_images" class="flex flex-wrap gap-3 pt-4"></div>
      </form>
    </div>
  </div>
</main>

<?php include("footer.php"); ?>

<script>
document.addEventListener("DOMContentLoaded", async () => {
  const urlParams = new URLSearchParams(window.location.search);
  const slug = urlParams.get("name");

  if (!slug) {
    alert("❌ Product slug is missing in URL.");
    return;
  }

  const token = localStorage.getItem("auth_token");

  try {
    const res = await fetch(`http://192.168.0.101:8000/api/products/get-product-byslug/${slug}`, {
      method: "POST",
      headers: {
        "Authorization": `Bearer ${token}`
      }
    });

    const data = await res.json();

    if (!data.success) {
      alert("❌ Failed to fetch product: " + data.message);
      return;
    }

    const product = data.data;

    // Fill fields
    document.getElementById("slug").value = product.slug || "";
    document.getElementById("name").value = product.name || "";
    document.getElementById("aid").value = product.aid || "";
    document.getElementById("brand").value = product.brand?.id || "";
    document.getElementById("category").value = product.category?.id || "";
    document.getElementById("gender").value = product.gender || "";
    document.getElementById("keyword").value = product.keyword || "";
    document.getElementById("description").value = product.description || "";
    document.getElementById("specification").value = product.specification || "";

    // Variants
    const variantList = document.getElementById("variant_list");
    variantList.innerHTML = "";

    product.variations?.forEach(variant => {
      const div = document.createElement("div");
      div.className = "variation-item flex gap-4 items-center";
      div.innerHTML = `
        <input type="number" value="${variant.uid}" class="input input-sm w-[100px]" disabled />
        <input type="number" value="${variant.regular_price}" class="input input-sm w-[140px]" disabled />
        <input type="number" value="${variant.sell_price}" class="input input-sm w-[140px]" disabled />
        <input type="text" value="${variant.size}" class="input input-sm w-[80px]" disabled />
        <input type="text" value="${variant.color}" class="input input-sm w-[120px]" disabled />
        <input type="number" value="${variant.stock}" class="input input-sm w-[100px]" disabled />
      `;
      variantList.appendChild(div);
    });

    // Product Images (for non-variant products)
    const imageBox = document.getElementById("uploaded_images");
    imageBox.innerHTML = "";
    (product.upload || []).forEach(img => {
      const imgEl = document.createElement("img");
      imgEl.src = img.url;
      imgEl.alt = img.file_name;
      imgEl.className = "w-28 h-28 object-cover border rounded shadow";
      imageBox.appendChild(imgEl);
    });

  } catch (err) {
    alert("⚠️ Error fetching product: " + err.message);
  }
});
</script>
