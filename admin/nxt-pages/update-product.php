<base href="../">
<?php include("../header.php"); ?>

<main class="grow content pt-5" id="content" role="content">
  <div class="container-fixed">
    <div class="card min-w-full">
      <form id="update_product_form" class="card-body flex flex-col gap-5 p-5" method="post" enctype="multipart/form-data">
        <!-- Title -->
        <div>
          <h3 class="text-lg font-medium text-gray-900 leading-none">Update Product</h3>
          <div class="text-2sm text-gray-700">Modify product details and manage variations</div>
        </div>

        <!-- Row: Basic Fields -->
        <div class="flex gap-10 items-center">
          <input type="text" id="product_slug" name="slug" />

          <div class="flex flex-col gap-1 flex-grow">
            <label class="form-label text-gray-900">Product Name</label>
            <input class="input input-sm w-[240px]" type="text" id="product_name" name="name" placeholder="Casual T-Shirt" />
          </div>

          <div class="flex flex-col gap-1">
            <label class="form-label text-gray-900">AID</label>
            <input class="input input-sm w-[240px]" type="text" id="product_aid" name="aid" placeholder="A-210" readonly />
          </div>

          <div class="flex flex-col gap-1">
            <label class="form-label text-gray-900">Brand</label>
            <select name="brand_select" id="brand_select" class="input input-sm w-[240px]">
              <option value="">Select Brand</option>
            </select>
          </div>

          <div class="flex flex-col gap-1">
            <label class="form-label text-gray-900">Category</label>
            <select name="category_select" id="category_select" class="input input-sm w-[240px]">
              <option value="">Select Category</option>
            </select>
          </div>
        </div>

        <!-- Row: Info Fields -->
        <div class="flex gap-10 items-center">
          <div class="flex flex-col gap-1">
            <label class="form-label text-gray-900">Gender</label>
            <select name="gender_select" id="gender_select" class="input input-sm w-[240px]">
              <option value="">Select Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="unisex">Unisex</option>
            </select>
          </div>

          <div class="flex flex-col gap-1">
            <label class="form-label text-gray-900">Keyword</label>
            <input class="input input-sm w-[240px]" type="text" id="keyword" name="keyword" placeholder="Grey shirt, fit" />
          </div>

          <div class="flex flex-col gap-1">
            <label class="form-label text-gray-900">Description</label>
            <input class="input input-sm w-[240px]" type="text" id="description" name="description" placeholder="Soft and comfortable" />
          </div>
        </div>

        <!-- Row: Availability Options -->
        <div class="flex gap-10 items-center">
          <div class="flex items-center gap-2">
            <input type="checkbox" id="cod_checkbox" class="h-4 w-4" />
            <label for="cod_checkbox" class="form-label text-gray-900">Cash on Delivery (COD)</label>
          </div>

          <div class="flex items-center gap-2">
            <input type="checkbox" id="custom_design_checkbox" class="h-4 w-4" />
            <label for="custom_design_checkbox" class="form-label text-gray-900">Custom Design Available</label>
          </div>
        </div>

        <!-- Row: Product Type (Read-only for updates) -->
        <div class="flex gap-10 items-center">
          <div class="flex flex-col gap-1">
            <label class="form-label text-gray-900">Product Type</label>
            <input type="text" id="product_type_display" class="input input-sm w-[240px]" readonly />
            <input type="hidden" id="product_type" name="product_type" />
          </div>
        </div>

        <!-- Row: Simple Fields -->
        <div id="simple_fields" class="flex gap-4 items-center">
          <input class="input input-sm w-[120px]" type="number" id="uid_simple" name="uid" placeholder="UID" readonly />
          <input class="input input-sm w-[140px]" type="number" id="regular_price_simple" name="regular_price" placeholder="Regular Price" />
          <input class="input input-sm w-[140px]" type="number" id="sale_price_simple" name="sale_price" placeholder="Sale Price" />
          <input class="input input-sm w-[120px]" type="text" id="size_simple" name="size" placeholder="Size" />
          <div class="color-dropdown relative w-[120px]">
            <input type="hidden" id="color_simple" name="color" class="color-value" />
            <button type="button" class="color-btn">
              <span class="color-dot"></span>
              <span class="color-text">Select Color</span>
            </button>
            <div class="color-menu hidden absolute z-50 bg-white border rounded shadow w-full mt-1"></div>
          </div>
          <input class="input input-sm w-[100px]" type="number" id="stock_simple" name="stock" placeholder="Stock" />
        </div>

        <!-- Variant Fields -->
        <div id="variant_fields" class="hidden flex flex-col gap-3 border rounded bg-gray-50">
          <div class="variation-item flex flex-col gap-3 border p-3 rounded bg-white">
            <div class="flex gap-4 items-center">
              <input type="number" placeholder="UID" class="input input-sm w-[120px]" readonly />
              <input type="number" placeholder="Regular Price" class="input input-sm w-[140px]" />
              <input type="number" placeholder="Sale Price" class="input input-sm w-[140px]" />
              <input type="text" placeholder="Size" class="input input-sm w-[120px]" />
              <div class="color-dropdown relative w-[120px]">
                <input type="hidden" class="color-value" />
                <button type="button" class="color-btn input input-sm w-full flex items-center gap-2">
                  <span class="color-dot w-4 h-4 rounded-full border"></span>
                  <span class="color-text text-gray-500">Select Color</span>
                </button>
                <div class="color-menu hidden absolute z-50 bg-white border rounded shadow w-full mt-1"></div>
              </div>
              <input type="number" placeholder="Stock" class="input input-sm w-[100px]" />
              <button type="button" class="remove-variation-btn btn btn-sm bg-red-500 text-white">✕</button>
            </div>

            <!-- Images Section -->
            <div class="images-wrapper flex flex-wrap gap-3 mb-3"></div>

            <div class="flex gap-3 items-center">
              <input type="file" class="variation-image-input input input-sm w-[240px]" accept="image/*" multiple />
              <button type="button" class="upload-images-btn btn btn-sm bg-blue-500 text-white">Upload Images</button>
            </div>

            <!-- SPECIFICATIONS -->
            <div class="specs-wrapper flex flex-col gap-2 mt-2">
              <div class="spec-row flex gap-2 items-center">
                <select class="input input-sm w-[180px] spec-name">
                  <option value="">Select Spec</option>
                  <option value="Material">Material</option>
                  <option value="Fit">Fit</option>
                  <option value="Country of Origin">Country of Origin</option>
                  <option value="Color">Color</option>
                  <option value="Wash">Wash</option>
                </select>
                <input type="text" class="input input-sm w-[240px] spec-value" placeholder="Spec value" />
                <button type="button" class="remove-spec btn btn-xs bg-gray-300">✕</button>
              </div>
            </div>

            <button type="button" class="add-spec btn btn-xs btn-secondary w-max">+ Add Specification</button>
          </div>

          <button type="button" id="add_variation_btn" class="btn btn-secondary w-max mt-2">+ Add Variation</button>
        </div>

        <!-- Product Images Section -->
        <div class="flex flex-col gap-3">
          <div>
            <label class="form-label text-gray-900">Product Images</label>
            <div id="product_images_wrapper" class="flex flex-wrap gap-3 mb-3"></div>
          </div>

          <div class="flex gap-10 items-center">
            <div class="flex flex-col gap-1">
              <input class="input input-sm w-[240px]" type="file" id="product_images" name="image[]" accept="image/*" multiple />
              <span class="text-gray-400 italic">Use Format: jpeg,png,jpg (Max: 8mb)</span>
            </div>
          </div>
        </div>

        <!-- Row: Submit -->
        <div class="flex gap-10 items-center mb-5">
          <div class="flex gap-3">
            <button type="button" id="cancel_btn" class="btn btn-secondary h-8">Cancel</button>
            <button type="submit" class="btn btn-primary h-8 mt-0">Update Product</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</main>

<style>
  .color-dropdown {
    width: 150px;
    position: relative;
    font-size: 13px;
  }

  .color-btn {
    width: 120px;
    height: 36px;
    padding: 0 10px;
    border: 1px solid #cbd5e1;
    border-radius: 6px;
    background: #fff;
    display: flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
  }

  .color-dot {
    width: 14px;
    height: 14px;
    min-width: 14px;
    min-height: 14px;
    border-radius: 9999px;
    border: 1px solid #94a3b8;
    background-color: transparent;
  }

  .color-text {
    font-size: 13px;
    line-height: 1;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }

  .color-menu {
    position: absolute;
    top: 100%;
    left: 0;
    width: 120px;
    margin-top: 4px;
    background: #fff;
    border: 1px solid #e5e7eb;
    border-radius: 6px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.08);
    max-height: 180px;
    overflow-y: auto;
    z-index: 999;
  }

  .color-menu div {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 6px 10px;
    cursor: pointer;
    font-size: 13px;
  }

  .color-menu div span {
    min-width: 16px;
  }

  .color-menu div:hover {
    background: #f3f4f6;
  }

  .image-card {
    position: relative;
    width: 100px;
    height: 100px;
  }

  .image-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 6px;
    border: 1px solid #e5e7eb;
  }

  .image-card .delete-image-btn {
    position: absolute;
    top: 4px;
    right: 4px;
    background: #ef4444;
    color: white;
    border: none;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    padding: 0;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
  }
</style>

<?php include("../footer.php"); ?>

<script>
  const baseUrl = "<?= $baseUrl ?>";
  const token = localStorage.getItem("auth_token");
  let currentProduct = null;

  function fetchBrands() {
    fetch(`${baseUrl}/api/allBrands`, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        Authorization: `Bearer ${token}`
      },
      body: JSON.stringify({ limit: 100, offset: 0 })
    })
    .then(res => res.json())
    .then(data => {
      if (data.success && Array.isArray(data.data)) {
        const brandSelect = document.getElementById("brand_select");
        brandSelect.innerHTML = `<option value="">Select Brand</option>`;
        data.data.forEach(brand => {
          const option = document.createElement("option");
          option.value = brand.id;
          option.textContent = brand.name;
          brandSelect.appendChild(option);
        });
        if (currentProduct) {
          brandSelect.value = currentProduct.brand?.id || "";
        }
      }
    })
    .catch(err => console.error("Brand fetch error:", err));
  }

  function fetchCategories() {
    fetch(`${baseUrl}/api/allCategories`, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        Authorization: `Bearer ${token}`
      },
      body: JSON.stringify({ limit: 100, offset: 0 })
    })
    .then(res => res.json())
    .then(data => {
      if (data.success && Array.isArray(data.data)) {
        const categorySelect = document.getElementById("category_select");
        categorySelect.innerHTML = `<option value="">Select Category</option>`;
        data.data.forEach(category => {
          const option = document.createElement("option");
          option.value = category.id;
          option.textContent = category.name;
          categorySelect.appendChild(option);
        });
        if (currentProduct) {
          categorySelect.value = currentProduct.category?.id || "";
        }
      }
    })
    .catch(err => console.error("Category fetch error:", err));
  }

  async function loadColors() {
    try {
      const res = await fetch("./configs/color.json");
      const data = await res.json();

      document.querySelectorAll(".color-dropdown").forEach(dropdown => {
        const menu = dropdown.querySelector(".color-menu");
        const btn = dropdown.querySelector(".color-btn");
        const dot = dropdown.querySelector(".color-dot");
        const text = dropdown.querySelector(".color-text");
        const input = dropdown.querySelector(".color-value");

        menu.innerHTML = "";

        data.colors.forEach(color => {
          const item = document.createElement("div");
          item.innerHTML = `
            <span style="background:${color.code}" class="w-6 h-4 rounded-full border"></span>
            <span>${color.name}</span>
          `;

          item.onclick = () => {
            dot.style.backgroundColor = color.code;
            dot.style.borderColor = "#64748b";
            text.textContent = color.name;
            text.classList.remove("text-gray-500");
            input.value = color.name;
            menu.classList.add("hidden");
          };

          menu.appendChild(item);
        });

        btn.onclick = () => menu.classList.toggle("hidden");
      });
    } catch (err) {
      console.error("Color load error:", err);
    }
  }

  function createImageCard(imageId, imageUrl, onDelete) {
    const card = document.createElement("div");
    card.className = "image-card";
    card.innerHTML = `
      <img src="${imageUrl}" alt="Product image" />
      <button type="button" class="delete-image-btn" data-image-id="${imageId}">✕</button>
    `;

    card.querySelector(".delete-image-btn").addEventListener("click", (e) => {
      e.preventDefault();
      onDelete(imageId);
    });

    return card;
  }

  async function deleteProductImage(imageId) {
    const confirmed = confirm("Are you sure you want to delete this image?");
    if (!confirmed) return;

    try {
      const res = await fetch(`${baseUrl}/api/admin/delete-image/${imageId}`, {
        method: "DELETE",
        headers: { Authorization: `Bearer ${token}` }
      });

      const result = await res.json();
      if (result.success) {
        alert("Image deleted successfully");
        location.reload();
      } else {
        alert("Failed to delete image");
      }
    } catch (err) {
      alert("Error deleting image: " + err.message);
    }
  }

  async function deleteVariationImage(imageId) {
    const confirmed = confirm("Are you sure you want to delete this image?");
    if (!confirmed) return;

    try {
      const res = await fetch(`${baseUrl}/api/admin/delete-image/${imageId}`, {
        method: "DELETE",
        headers: { Authorization: `Bearer ${token}` }
      });

      const result = await res.json();
      if (result.success) {
        alert("Image deleted successfully");
        location.reload();
      } else {
        alert("Failed to delete image");
      }
    } catch (err) {
      alert("Error deleting image: " + err.message);
    }
  }

  async function uploadVariationImages(aid, uid, files) {
    if (!files.length) return;

    const formData = new FormData();
    formData.append("aid", aid);
    formData.append("uid", uid);

    for (let file of files) {
      formData.append("file[]", file);
    }

    try {
      const res = await fetch(`${baseUrl}/api/admin/upload/variation-images`, {
        method: "POST",
        headers: { Authorization: `Bearer ${token}` },
        body: formData
      });

      const result = await res.json();
      if (result.success) {
        alert("Images uploaded successfully");
        location.reload();
      } else {
        alert("Failed to upload images: " + result.message);
      }
    } catch (err) {
      alert("Error uploading images: " + err.message);
    }
  }

  async function loadProduct() {
    const AID = new URLSearchParams(window.location.search).get("aid");

    if (!AID) {
      alert("Product AID is missing in URL");
      return;
    }

    try {
      const res = await fetch(`${baseUrl}/api/products/get-product-byAid/${AID}`, {
        method: "POST",
        headers: { Authorization: `Bearer ${token}` }
      });

      const { data: product, success, message } = await res.json();

      if (!success) {
        alert("Failed to fetch product: " + message);
        return;
      }

      currentProduct = product;

      // Fill basic fields
      document.getElementById("product_slug").value = product.slug || "";
      document.getElementById("product_name").value = product.name || "";
      document.getElementById("product_aid").value = product.aid || "";
      document.getElementById("keyword").value = product.keyword || "";
      document.getElementById("description").value = product.description || "";
      document.getElementById("gender_select").value = product.gender || "";
      document.getElementById("cod_checkbox").checked = product.cod === "available";
      document.getElementById("custom_design_checkbox").checked = product.custom_design === "available";

      // Determine product type
      const isVariant = Array.isArray(product.variations) && product.variations.length > 0;
      const productTypeDisplay = isVariant ? "Variant Product" : "Simple Product";
      document.getElementById("product_type_display").value = productTypeDisplay;
      document.getElementById("product_type").value = isVariant ? "variant" : "simple";

      // Load brands and categories
      fetchBrands();
      fetchCategories();
      loadColors();

      if (isVariant) {
        // Show variant fields
        document.getElementById("simple_fields").classList.add("hidden");
        document.getElementById("variant_fields").classList.remove("hidden");

        // Clear and populate variants
        const variantFields = document.getElementById("variant_fields");
        const firstItem = variantFields.querySelector(".variation-item");
        firstItem.parentElement.querySelectorAll(".variation-item").forEach((item, idx) => {
          if (idx > 0) item.remove();
        });

        product.variations.forEach((variant, index) => {
          let variantItem;

          if (index === 0) {
            variantItem = firstItem;
          } else {
            variantItem = firstItem.cloneNode(true);
            variantFields.insertBefore(variantItem, document.getElementById("add_variation_btn"));
          }

          variantItem.querySelector("input[placeholder='UID']").value = variant.uid;
          variantItem.querySelector("input[placeholder='Regular Price']").value = variant.regular_price;
          variantItem.querySelector("input[placeholder='Sale Price']").value = variant.sell_price;
          variantItem.querySelector("input[placeholder='Size']").value = variant.size;
          variantItem.querySelector(".color-value").value = variant.color;
          variantItem.querySelector(".color-text").textContent = variant.color;
          variantItem.querySelector(".color-text").classList.remove("text-gray-500");
          variantItem.querySelector(".color-dot").style.backgroundColor = "#94a3b8";
          variantItem.querySelector("input[placeholder='Stock']").value = variant.stock;

          // Load images
          const imagesWrapper = variantItem.querySelector(".images-wrapper");
          imagesWrapper.innerHTML = "";
          if (variant.images && variant.images.length > 0) {
            variant.images.forEach(img => {
              const imageCard = createImageCard(img.id, img.url, deleteVariationImage);
              imagesWrapper.appendChild(imageCard);
            });
          }

          // Attach upload button
          const uploadBtn = variantItem.querySelector(".upload-images-btn");
          const fileInput = variantItem.querySelector(".variation-image-input");

          uploadBtn.addEventListener("click", (e) => {
            e.preventDefault();
            if (fileInput.files.length > 0) {
              uploadVariationImages(product.aid, variant.uid, fileInput.files);
            } else {
              alert("Please select images to upload");
            }
          });

          // Attach remove button
          const removeBtn = variantItem.querySelector(".remove-variation-btn");
          removeBtn.addEventListener("click", (e) => {
            e.preventDefault();
            const items = variantFields.querySelectorAll(".variation-item");
            if (items.length > 1) {
              variantItem.remove();
            } else {
              alert("At least one variation is required");
            }
          });
        });

      } else {
        // Show simple fields
        document.getElementById("simple_fields").classList.remove("hidden");
        document.getElementById("variant_fields").classList.add("hidden");

        document.getElementById("uid_simple").value = product.uid || "";
        document.getElementById("regular_price_simple").value = product.regular_price || "";
        document.getElementById("sale_price_simple").value = product.sale_price || "";
        document.getElementById("size_simple").value = product.size || "";
        document.getElementById("color_simple").value = product.color || "";
        document.getElementById("stock_simple").value = product.stock || "";

        // Set color dot
        const colorDot = document.querySelector("#simple_fields .color-dot");
        const colorText = document.querySelector("#simple_fields .color-text");
        if (product.color) {
          colorText.textContent = product.color;
          colorText.classList.remove("text-gray-500");
        }
      }

      // Load product images
      const imagesWrapper = document.getElementById("product_images_wrapper");
      imagesWrapper.innerHTML = "";
      if (product.upload && product.upload.length > 0) {
        product.upload.forEach(img => {
          const imageCard = createImageCard(img.id, img.url, deleteProductImage);
          imagesWrapper.appendChild(imageCard);
        });
      }

    } catch (err) {
      alert("Error: " + err.message);
    }
  }

  document.addEventListener("DOMContentLoaded", () => {
    loadProduct();

    const form = document.getElementById("update_product_form");
    const cancelBtn = document.getElementById("cancel_btn");
    const addVariationBtn = document.getElementById("add_variation_btn");

    // Cancel button
    cancelBtn.addEventListener("click", () => window.history.back());

    // Add variation button
    addVariationBtn.addEventListener("click", () => {
      const variantFields = document.getElementById("variant_fields");
      const firstItem = variantFields.querySelector(".variation-item");
      const clone = firstItem.cloneNode(true);

      clone.querySelectorAll("input, select").forEach(input => {
        if (input.type !== "file" && !input.classList.contains("color-value")) {
          input.value = "";
        }
      });

      clone.querySelector(".images-wrapper").innerHTML = "";
      clone.querySelector(".variation-image-input").value = "";

      variantFields.insertBefore(clone, addVariationBtn);

      const removeBtn = clone.querySelector(".remove-variation-btn");
      removeBtn.addEventListener("click", (e) => {
        e.preventDefault();
        const items = variantFields.querySelectorAll(".variation-item");
        if (items.length > 1) {
          clone.remove();
        }
      });

      const uploadBtn = clone.querySelector(".upload-images-btn");
      const fileInput = clone.querySelector(".variation-image-input");
      uploadBtn.addEventListener("click", (e) => {
        e.preventDefault();
        if (fileInput.files.length > 0) {
          const uid = clone.querySelector("input[placeholder='UID']").value;
          uploadVariationImages(currentProduct.aid, uid, fileInput.files);
        } else {
          alert("Please select images to upload");
        }
      });

      loadColors();
    });

    // Add spec row
    document.addEventListener("click", (e) => {
      if (e.target.classList.contains("add-spec")) {
        const wrapper = e.target.previousElementSibling;
        const firstRow = wrapper.querySelector(".spec-row");
        const clone = firstRow.cloneNode(true);
        clone.querySelector(".spec-name").value = "";
        clone.querySelector(".spec-value").value = "";
        wrapper.appendChild(clone);
      }

      if (e.target.classList.contains("remove-spec")) {
        const wrapper = e.target.closest(".specs-wrapper");
        const rows = wrapper.querySelectorAll(".spec-row");
        if (rows.length > 1) {
          e.target.closest(".spec-row").remove();
        }
      }
    });

    // Form submission
    form.addEventListener("submit", async (e) => {
      e.preventDefault();

      const formData = new FormData(form);
      const isVariant = document.getElementById("product_type").value === "variant";
      const codCheckbox = document.getElementById("cod_checkbox");
      const customDesignCheckbox = document.getElementById("custom_design_checkbox");

      const payload = {
        slug: formData.get("slug"),
        name: formData.get("name"),
        aid: formData.get("aid"),
        brand: Number(formData.get("brand_select")),
        category: Number(formData.get("category_select")),
        gender: formData.get("gender_select"),
        keyword: formData.get("keyword"),
        description: formData.get("description"),
        cod: codCheckbox.checked ? "available" : "not available",
        custom_design: customDesignCheckbox.checked ? "available" : "not available"
      };

      if (isVariant) {
        payload.variations = [];
        const variantFields = document.getElementById("variant_fields");
        variantFields.querySelectorAll(".variation-item").forEach((row) => {
          const uid = row.querySelector("input[placeholder='UID']").value;
          const regular_price = row.querySelector("input[placeholder='Regular Price']").value;
          const sale_price = row.querySelector("input[placeholder='Sale Price']").value;
          const size = row.querySelector("input[placeholder='Size']").value;
          const color = row.querySelector(".color-value").value;
          const stock = row.querySelector("input[placeholder='Stock']").value;

          payload.variations.push({
            uid: Number(uid),
            regular_price: Number(regular_price),
            sale_price: Number(sale_price),
            size,
            color,
            stock: Number(stock)
          });
        });
      } else {
        payload.uid = Number(formData.get("uid"));
        payload.size = formData.get("size");
        payload.color = formData.get("color");
        payload.stock = Number(formData.get("stock"));
        payload.regular_price = Number(formData.get("regular_price"));
        payload.sale_price = Number(formData.get("sale_price"));
      }

      try {
        const updateRes = await fetch(`${baseUrl}/api/admin/products/update`, {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            Authorization: `Bearer ${token}`
          },
          body: JSON.stringify(payload)
        });

        const result = await updateRes.json();

        if (!result.success) {
          alert("Failed to update product: " + result.message);
          return;
        }

        alert("Product updated successfully");

        // Upload product images if selected
        const productImageInput = form.querySelector('input[name="image[]"]');
        if (productImageInput.files.length > 0) {
          const uploadForm = new FormData();
          uploadForm.append("aid", payload.aid);

          for (let file of productImageInput.files) {
            uploadForm.append("file[]", file);
          }

          await fetch(`${baseUrl}/api/admin/upload/product-images`, {
            method: "POST",
            headers: { Authorization: `Bearer ${token}` },
            body: uploadForm
          });
        }

        setTimeout(() => window.history.back(), 1500);

      } catch (err) {
        alert("Error: " + err.message);
      }
    });
  });
</script>
