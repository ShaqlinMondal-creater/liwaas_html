<!-- header.php include -->
<base href="../">
<?php include("../header.php"); ?>

<main class="grow content pt-5" id="content" role="content">
  <div class="container-fixed">
    <div class="card min-w-full">
      <form id="add_product_form" class="card-body flex flex-col gap-5 p-10" method="post" enctype="multipart/form-data">
        <!-- Title -->
        <div>
          <h3 class="text-lg font-medium text-gray-900 leading-none">Add Product</h3>
          <div class="text-2sm text-gray-700">Fill in all details for variant or non-variant products</div>
        </div>

        <!-- Row: Basic Fields -->
        <div class="flex gap-10 items-center">
          <div class="flex flex-col gap-1 flex-grow">
            <label class="form-label text-gray-900">Product Name</label>
            <input class="input input-sm w-[240px]" type="text" name="name" placeholder="Casual T-Shirt" />
          </div>
          <div class="flex flex-col gap-1">
            <label class="form-label text-gray-900">AID</label>
            <input class="input input-sm w-[240px]" type="text" name="aid" placeholder="A-210" />
          </div>

          <div class="flex flex-col gap-1">
            <label class="form-label text-gray-900">Brand</label>
            <select name="brand_select" id="brand_select" class="input input-sm w-[240px]">
              <option value="">Select Brand</option>
              <option value="2">Liwaas</option>
            </select>
          </div>
          
          <div class="flex flex-col gap-1">
            <label class="form-label text-gray-900">Category</label>
            <select name="category_select" id="category_select" class="input input-sm w-[240px]">
              <option value="">Select Category</option>
              <option value="1">Over Sized T-Shirt</option>
              <option value="3">Full T-Shirt</option>
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
            <input class="input input-sm w-[240px]" type="text" name="keyword" placeholder="Grey shirt, fit" />
          </div>
          <div class="flex flex-col gap-1">
            <label class="form-label text-gray-900">Description</label>
            <input class="input input-sm w-[240px]" type="text" name="description" placeholder="Soft and comfortable" />
          </div>
          <div class="flex flex-col gap-1">
            <label class="form-label text-gray-900">Specification</label>
            <input class="input input-sm w-[240px]" type="text" name="specification" placeholder="100% cotton" />
          </div>
        </div>

        <!-- Row: Product Type -->
        <div class="flex gap-10 items-center">
          <div class="flex flex-col gap-1">
            <label class="form-label text-gray-900">Product Type</label>
            <select name="product_type" id="product_type" class="input input-sm w-[240px]">
              <option value="simple">Simple Product</option>
              <option value="variant">Variant Product</option>
            </select>
          </div>
        </div>

        <!-- Row: Simple Fields -->
        <div id="simple_fields" class="flex gap-4 items-center">
          <input class="input input-sm w-[100px]" type="number" name="uid" placeholder="UID" />
          <input class="input input-sm w-[140px]" type="number" name="regular_price" placeholder="Regular Price" />
          <input class="input input-sm w-[140px]" type="number" name="sale_price" placeholder="Sale Price" />
          <input class="input input-sm w-[80px]" type="text" name="size" placeholder="Size" />
          <input class="input input-sm w-[120px]" type="text" name="color" placeholder="Color" />
          <input class="input input-sm w-[100px]" type="number" name="stock" placeholder="Stock" />          
        </div>

        <!-- Variant Fields -->
        <div id="variant_fields" class="hidden flex flex-col gap-3 border p-4 rounded bg-gray-50">
          <div class="variation-item flex gap-4 items-center">
            <input type="number" placeholder="UID" class="input input-sm w-[100px]" />
            <input type="number" placeholder="Regular Price" class="input input-sm w-[140px]" />
            <input type="number" placeholder="Sale Price" class="input input-sm w-[140px]" />
            <input type="text" placeholder="Size" class="input input-sm w-[80px]" />
            <input type="text" placeholder="Color" class="input input-sm w-[120px]" />
            <input type="number" placeholder="Stock" class="input input-sm w-[100px]" />
            <input type="file" class="variation-image-input input input-sm w-[200px]" accept="image/*" multiple />
            <button type="button" class="remove-variation-btn btn btn-sm bg-red-500 text-white">✕</button>
          </div>
          <button type="button" id="add_variation_btn" class="btn btn-secondary w-max mt-2">+ Add Variation</button>
        </div>

        <!-- Row: Image and Submit -->
        <div class="flex gap-10 items-center mb-5">
          <div class="flex flex-col gap-1">
            <label class="form-label text-gray-900">Product Image</label>
            <input class=" input-sm w-[240px]" type="file" name="image[]" accept="image/*" multiple />
            <span class="text-gray-400 italic">Use Format: jpeg,png,jpg (Max: 8mb)</span>
          </div>
          <div class="flex flex-col gap-1 justify-end" style="min-width: 140px;">
            <button type="submit" class="btn btn-primary h-8 mt-5 w-[120px]">Add Product</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</main>

<!-- Footer -->
<?php include("../footer.php"); ?>

<!-- Get Brands and Categories -->
<script>
  const baseUrl = "<?= $baseUrl ?>"; // Or replace with your actual base URL
  const token = localStorage.getItem("auth_token");

  // Fetch and populate all brands
  function fetchBrands() {
      fetch(`${baseUrl}/api/allBrands`, {
          method: "POST",
          headers: {
              "Content-Type": "application/json",
              Authorization: `Bearer ${token}`
          },
          body: JSON.stringify({
              limit: 100,
              offset: 0
          })
      })
      .then(res => res.json())
      .then(data => {
          if (data.success && Array.isArray(data.data)) {
              const brandSelect = document.getElementById("brand_select");
              // Clear existing options
              brandSelect.innerHTML = `<option value="">Select Brand</option>`;
              data.data.forEach(brand => {
                  const option = document.createElement("option");
                  option.value = brand.id;
                  option.textContent = brand.name;
                  brandSelect.appendChild(option);
              });
          } else {
              console.error("Failed to fetch brands:", data.message);
          }
      })
      .catch(err => console.error("Brand fetch error:", err));
  }

  // Fetch and populate all categories
  function fetchCategories() {
      fetch(`${baseUrl}/api/allCategories`, {
          method: "POST",
          headers: {
              "Content-Type": "application/json",
              Authorization: `Bearer ${token}`
          },
          body: JSON.stringify({
              limit: 100,
              offset: 0
          })
      })
      .then(res => res.json())
      .then(data => {
          if (data.success && Array.isArray(data.data)) {
              const categorySelect = document.getElementById("category_select");
              // Clear existing options
              categorySelect.innerHTML = `<option value="">Select Category</option>`;
              data.data.forEach(category => {
                  const option = document.createElement("option");
                  option.value = category.id;
                  option.textContent = category.name;
                  categorySelect.appendChild(option);
              });
          } else {
              console.error("Failed to fetch categories:", data.message);
          }
      })
      .catch(err => console.error("Category fetch error:", err));
  }

  // Call both on page load
  document.addEventListener("DOMContentLoaded", () => {
      fetchBrands();
      fetchCategories();
  });
</script>


<!-- JS will be appended separately -->
<script>
  window.addEventListener("DOMContentLoaded", () => {
    const productTypeSelect = document.getElementById("product_type");
    const simpleFields = document.getElementById("simple_fields");
    const variantFields = document.getElementById("variant_fields");
    const addVariationBtn = document.getElementById("add_variation_btn");
    const form = document.getElementById("add_product_form");

    // Toggle form fields between simple and variant
    productTypeSelect.addEventListener("change", () => {
      const isVariant = productTypeSelect.value === "variant";
      simpleFields.classList.toggle("hidden", isVariant);
      variantFields.classList.toggle("hidden", !isVariant);
    });

    // Add new variation row
    addVariationBtn.addEventListener("click", () => {
      const firstRow = variantFields.querySelector(".variation-item");
      const clone = firstRow.cloneNode(true);
      clone.querySelectorAll("input").forEach((input) => {
        // Clear values and files
        if (input.type === "file") {
          input.value = ""; // clear files
        } else {
          input.value = "";
        }
      });
      variantFields.insertBefore(clone, addVariationBtn);

      // Attach remove button event to new row
      attachRemoveListener(clone.querySelector(".remove-variation-btn"));
    });

    // Remove variation row handler
    function attachRemoveListener(button) {
      button.addEventListener("click", () => {
        const items = variantFields.querySelectorAll(".variation-item");
        if (items.length > 1) {
          button.closest(".variation-item").remove();
        } else {
          alert("At least one variation is required.");
        }
      });
    }

    // Attach remove listener for the initial remove button
    attachRemoveListener(variantFields.querySelector(".remove-variation-btn"));

    // Form submission
    form.addEventListener("submit", async (e) => {
      e.preventDefault();

      const token = localStorage.getItem("auth_token");
      const formData = new FormData(form);
      const isVariant = productTypeSelect.value === "variant";

      // Collect basic fields
      const aid = formData.get("aid");
      const name = formData.get("name");

      const payload = {
        aid,
        name,
        brand: Number(formData.get("brand_select")),
        category: Number(formData.get("category_select")),
        gender: formData.get("gender_select"),
        keyword: formData.get("keyword"),
        description: formData.get("description"),
        specification: formData.get("specification"),
      };

      if (isVariant) {
        payload.slug = name.toLowerCase().replace(/\s+/g, "-");
        payload.cod = "available";
        payload.shipping = "available";
        payload.custom_design = "available";
        payload.added_by = "admin";
        payload.variations = [];

        // Collect variant rows data
        const variationRows = variantFields.querySelectorAll(".variation-item");
        variationRows.forEach((row) => {
          const inputs = row.querySelectorAll("input:not([type=file])");
          const [uid, regular_price, sale_price, size, color, stock] = [...inputs].map(input => input.value);

          payload.variations.push({
            uid: Number(uid),
            regular_price: Number(regular_price),
            sale_price: Number(sale_price),
            size,
            color,
            stock: Number(stock),
          });
        });
      } else {
        // Simple product data
        payload.uid = Number(formData.get("uid"));
        payload.size = formData.get("size");
        payload.color = formData.get("color");
        payload.stock = Number(formData.get("stock"));
        payload.regular_price = Number(formData.get("regular_price"));
        payload.sale_price = Number(formData.get("sale_price"));
      }

      try {
        // Step 1: Submit product data
        const productRes = await fetch("<?= $baseUrl ?>/api/admin/products/add_product", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            Authorization: `Bearer ${token}`,
          },
          body: JSON.stringify(payload),
        });

        const result = await productRes.json();

        if (!result.success) {
          alert("❌ Failed to add product: " + result.message);
          return;
        }

        alert("✅ Product added: " + result.message);

        // Step 2: Upload images
        if (isVariant && payload.variations.length > 0) {
          // For each variant, upload images selected in its file input
          const variationItems = variantFields.querySelectorAll(".variation-item");

          for (let i = 0; i < variationItems.length; i++) {
            const imageInput = variationItems[i].querySelector(".variation-image-input");
            const files = imageInput.files;

            if (files.length > 0) {
              const uploadForm = new FormData();
              uploadForm.append("aid", aid);
              uploadForm.append("uid", payload.variations[i].uid); // variant UID

              for (let file of files) {
                uploadForm.append("file[]", file);
              }

              try {
                const uploadRes = await fetch("<?= $baseUrl ?>/api/admin/upload/variation-images", {
                  method: "POST",
                  headers: {
                    Authorization: `Bearer ${token}`,
                  },
                  body: uploadForm,
                });

                const uploadResult = await uploadRes.json();

                if (uploadResult.success) {
                  console.log(`✅ Images uploaded for variant UID ${payload.variations[i].uid}`);
                } else {
                  alert(`⚠️ Image upload failed for variant UID ${payload.variations[i].uid}: ${uploadResult.message}`);
                }
              } catch (err) {
                alert(`⚠️ Error uploading images for variant UID ${payload.variations[i].uid}: ${err.message}`);
              }
            }
          }
        } else {
          // For simple product, upload images from main image input
          const imageInput = form.querySelector('input[name="image[]"]');
          const files = imageInput.files;

          if (files.length > 0) {
            const uploadForm = new FormData();
            uploadForm.append("aid", aid);
            uploadForm.append("uid", payload.uid);

            for (let file of files) {
              uploadForm.append("file[]", file);
            }

            const uploadRes = await fetch("<?= $baseUrl ?>/api/admin/upload/variation-images", {
              method: "POST",
              headers: {
                Authorization: `Bearer ${token}`,
              },
              body: uploadForm,
            });

            const uploadResult = await uploadRes.json();
            if (uploadResult.success) {
              alert("📦 Images uploaded successfully");
            } else {
              alert("⚠️ Product added but image upload failed: " + uploadResult.message);
            }
          }

        }

        // Reset form and UI state
        form.reset();
        simpleFields.classList.remove("hidden");
        variantFields.classList.add("hidden");
        productTypeSelect.value = "simple";

      } catch (err) {
        alert("⚠️ Error: " + err.message);
      }
    });
  });

</script>
