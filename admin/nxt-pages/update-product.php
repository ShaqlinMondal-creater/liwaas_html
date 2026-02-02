<base href="../">
<?php include("../header.php"); ?>

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

        <!-- Product Variants Section -->
        <div class="flex flex-col gap-3 border p-4 rounded bg-gray-50">
            <h4 class="text-md font-medium mb-2">Product Variants</h4>
            <div id="variant_list" class="flex flex-row flex-wrap gap-6"></div>
            <button type="button" onclick="addNewVariation()" class="mt-4 btn btn-outline w-max bg-blue-100 hover:bg-blue-200 text-sm px-4 py-1 rounded">+ Add Variation</button>
        </div>

        <!-- This will only be used for non-variant images if needed -->
        <div id="uploaded_images" class="flex flex-wrap gap-3 pt-4"></div>

      </form>
    </div>
  </div>
</main>

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
      const res = await fetch(`<?= $baseUrl ?>/api/products/get-product-byslug/${slug}`, {
        method: "POST",
        headers: {
          "Authorization": `Bearer ${token}`
        }
      });

      const { data: product, success, message } = await res.json();

      if (!success) {
        alert("❌ Failed to fetch product: " + message);
        return;
      }

      // Fill form fields
      document.getElementById("slug").value = product.slug || "";
      document.getElementById("name").value = product.name || "";
      document.getElementById("aid").value = product.aid || "";
      document.getElementById("brand").value = product.brand?.id || "";
      document.getElementById("category").value = product.category?.id || "";
      document.getElementById("gender").value = product.gender || "";
      document.getElementById("keyword").value = product.keyword || "";
      document.getElementById("description").value = product.description || "";
      document.getElementById("specification").value = product.specification || "";

      // Render variants
      const variantList = document.getElementById("variant_list");
      variantList.innerHTML = "";

      product.variations.forEach((variant, index) => {
        const div = document.createElement("div");
        div.className = "border p-4 rounded bg-white shadow w-[240px]";

        const imagesHTML = variant.images.map(img => `
            <div class="relative group">
            <img src="${img.url}" class="w-24 h-24 object-cover rounded border" />
            <button class="absolute top-1 right-1 bg-red-600 text-white rounded-full text-xs px-1 py-0.5 hidden group-hover:block" 
                onclick="deleteVariationImage(${img.id}, ${variant.uid})"
                >✕</button>
            </div>
        `).join('');

        div.innerHTML = `
            <label class="block text-sm font-medium mb-1">Variant #${index + 1}</label>
            <div class="flex flex-wrap gap-4 items-center mb-4">
            <input type="text" value="${variant.aid}" disabled name="aid[]" class="input input-sm w-[120px] bg-gray-100" placeholder="AID" />
            <input type="hidden" name="uid[]" value="${variant.uid}" />
            <input type="text" value="${variant.uid}" disabled class="input input-sm w-[100px] bg-gray-100" placeholder="UID" />
            <input type="number" value="${variant.regular_price}" name="regular_price[]" class="input input-sm w-[140px]" placeholder="Regular Price" />
            <input type="number" value="${variant.sell_price}" name="sell_price[]" class="input input-sm w-[140px]" placeholder="Sale Price" />
            <input type="text" value="${variant.size}" name="size[]" class="input input-sm w-[80px]" placeholder="Size" />
            <input type="text" value="${variant.color}" name="color[]" class="input input-sm w-[120px]" placeholder="Color" />
            <input type="number" value="${variant.stock}" name="stock[]" class="input input-sm w-[100px]" placeholder="Stock" />
            </div>

            <div class="flex flex-wrap gap-3 mb-3">${imagesHTML || '<span class="text-gray-400">No images</span>'}</div>

            <div class="flex gap-3">
                <button type="button" class="btn btn-secondary text-sm" onclick="document.getElementById('upload_input_${variant.uid}').click()">+ Add Image</button>
                <input type="file" id="upload_input_${variant.uid}" class="hidden" multiple accept="image/*"
                    onchange="handleImageUpload(event, '${variant.aid}', ${variant.uid})" />
                <button type="button" class="btn btn-danger text-sm bg-red-500 text-white px-3 py-1 rounded" onclick="deleteVariation(${variant.uid})">🗑️ Delete Variation</button>
            </div>

        `;

        variantList.appendChild(div);
      });

      // Optional: show uploaded (non-variant) images
      const uploadSection = document.getElementById("uploaded_images");
      uploadSection.innerHTML = "";
      (product.upload || []).forEach(img => {
        const wrapper = document.createElement("div");
        wrapper.className = "relative group";
        wrapper.innerHTML = `
            <img src="${img.url}" class="w-24 h-24 object-cover border rounded" />
            <button class="absolute top-1 right-1 bg-red-600 text-white text-xs rounded-full px-1 py-0.5 hidden group-hover:block" onclick="deleteImage(${img.id})">✕</button>
        `;
        uploadSection.appendChild(wrapper);
      });

    } catch (err) {
      alert("⚠️ Error fetching product: " + err.message);
    }
  });

// Upload images for a specific variation
async function handleImageUpload(e, aid, uid) {
  const files = e.target.files;
  if (!files.length) return;

  const token = localStorage.getItem("auth_token");
  const formData = new FormData();
  formData.append("aid", aid);
  formData.append("uid", uid);
  for (let file of files) {
    formData.append("file[]", file);
  }

  try {
    const res = await fetch("<?= $baseUrl ?>/api/admin/upload/variation-images", {
      method: "POST",
      headers: {
        Authorization: `Bearer ${token}`,
      },
      body: formData,
    });

    const result = await res.json();
    if (result.success) {
      alert("✅ Image(s) uploaded successfully");
      location.reload(); // Refresh to fetch new images
    } else {
      alert("⚠️ Failed to upload: " + result.message);
    }
  } catch (err) {
    alert("⚠️ Error uploading: " + err.message);
  }
}

// Delete image by ID (function should point to your delete API)
async function deleteImage(imageId) {
  const confirmed = confirm("Are you sure you want to delete this image?");
  if (!confirmed) return;

  const token = localStorage.getItem("auth_token");

  try {
    const res = await fetch(`<?= $baseUrl ?>/api/admin/delete-image/${imageId}`, {
      method: "DELETE",
      headers: {
        Authorization: `Bearer ${token}`
      }
    });

    const result = await res.json();
    if (result.success) {
      alert("🗑️ Image deleted");
      location.reload();
    } else {
      alert("❌ Failed to delete image");
    }
  } catch (err) {
    alert("⚠️ Error deleting: " + err.message);
  }
}

// DELETE IMAGE FROM VARIATION
async function deleteVariationImage(imageId, uid) {
  const confirmDelete = confirm(`Delete this image from variant UID ${uid}?`);
  if (!confirmDelete) return;

  const token = localStorage.getItem("auth_token");
  try {
    const res = await fetch(`<?= $baseUrl ?>/api/admin/delete-image/${imageId}`, {
      method: "DELETE",
      headers: { Authorization: `Bearer ${token}` },
    });

    const result = await res.json();
    if (result.success) {
      alert("🗑️ Image deleted successfully.");
      location.reload();
    } else {
      alert("❌ Failed to delete image: " + result.message);
    }
  } catch (err) {
    alert("⚠️ Error: " + err.message);
  }
}
// DELETE VARIATION BY UID (actual API or just remove DOM)
async function deleteVariation(uid) {
  if (!uid) {
    Swal.fire('Error', 'Invalid variation UID', 'error');
    return;
  }

  const confirm = await Swal.fire({
    title: 'Delete Variation?',
    text: `UID: ${uid}`,
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#EF4444',
    cancelButtonColor: '#6B7280',
    confirmButtonText: 'Yes, Delete'
  });

  if (!confirm.isConfirmed) return;

  const token = localStorage.getItem("auth_token");

  try {
    const response = await fetch(`<?= $baseUrl ?>/api/admin/products/variation-delete/${uid}`, {
      method: "DELETE",
      headers: {
        Authorization: `Bearer ${token}`
      }
    });

    const result = await response.json();

    if (result.success) {
      Swal.fire({
        icon: 'success',
        title: 'Deleted!',
        text: result.message || 'Variation removed successfully'
      });

      // Remove from DOM without reload
      const wrappers = document.querySelectorAll("#variant_list > div");
      wrappers.forEach(wrapper => {
        const uidInput = wrapper.querySelector("input[name='uid[]']");
        if (uidInput && Number(uidInput.value) === Number(uid)) {
          wrapper.remove();
        }
      });

    } else {
      Swal.fire('Failed!', result.message || 'Delete failed', 'error');
    }

  } catch (err) {
    Swal.fire('Error!', err.message, 'error');
  }
}

// ADD NEW VARIATION DYNAMICALLY
function addNewVariation() {
  const container = document.getElementById("variant_list");
  const uid = Date.now(); // Temporary UID for client-side usage

  const div = document.createElement("div");
  div.className = "variation-item-wrapper border p-4 rounded bg-white shadow";

  div.innerHTML = `
      <label class="block text-sm font-medium mb-1">New Variant</label>
      <div class="flex flex-wrap gap-4 items-center mb-4">
          <input type="hidden" name="uid[]" value="${uid}" />
          <input type="hidden" name="aid[]" value="TEMP-AID" />
          <input type="number" name="regular_price[]" class="input input-sm w-[140px]" placeholder="Regular Price" />
          <input type="number" name="sell_price[]" class="input input-sm w-[140px]" placeholder="Sale Price" />
          <input type="text" name="size[]" class="input input-sm w-[80px]" placeholder="Size" />
          <input type="text" name="color[]" class="input input-sm w-[120px]" placeholder="Color" />
          <input type="number" name="stock[]" class="input input-sm w-[100px]" placeholder="Stock" />
      </div>

      <div class="flex flex-wrap gap-3 mb-3 text-gray-500">No images yet</div>

      <div class="flex gap-3">
        <button type="button" class="btn btn-secondary text-sm" onclick="document.getElementById('upload_input_${uid}').click()">+ Add Image</button>
        <input type="file" id="upload_input_${uid}" class="hidden" multiple accept="image/*"
          onchange="handleImageUpload(event, 'TEMP-AID', ${uid})" />
        <button type="button" class="btn btn-danger text-sm bg-red-500 text-white px-3 py-1 rounded" onclick="deleteVariation(${uid})">🗑️ Delete Variation</button>
      </div>
    `;

  container.appendChild(div);
}

</script>

<?php include("../footer.php"); ?>


