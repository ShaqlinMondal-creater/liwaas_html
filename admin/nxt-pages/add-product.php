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
        <!-- Row: Availability Options -->
      <div class="flex gap-10 items-center">
        <div class="flex items-center gap-2">
          <input
            type="checkbox"
            id="cod_checkbox"
            class="h-4 w-4"
            checked
          />
          <label for="cod_checkbox" class="form-label text-gray-900">
            Cash on Delivery (COD)
          </label>
        </div>

        <div class="flex items-center gap-2">
          <input
            type="checkbox"
            id="custom_design_checkbox"
            class="h-4 w-4"
            checked
          />
          <label for="custom_design_checkbox" class="form-label text-gray-900">
            Custom Design Available
          </label>
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
          <input class="input input-sm w-[120px]" type="number" name="regular_price" placeholder="Regular Price" />
          <input class="input input-sm w-[120px]" type="number" name="sale_price" placeholder="Sale Price" />
          <input class="input input-sm w-[80px]" type="text" name="size" placeholder="Size" />
          <input class="input input-sm w-[120px]" type="text" name="color" placeholder="Color" />
          <input class="input input-sm w-[100px]" type="number" name="stock" placeholder="Stock" />          
        </div>

        <!-- Variant Fields -->
        <div id="variant_fields" class="hidden flex flex-col gap-3 border p-4 rounded bg-gray-50">
          <div class="variation-item flex flex-col gap-3 border p-3 rounded bg-white">
            <!-- Variation main row -->
            <div class="flex gap-4 items-center">
              <input type="number" placeholder="UID" class="input input-sm w-[100px]" />
              <input type="number" placeholder="Regular Price" class="input input-sm w-[120px]" />
              <input type="number" placeholder="Sale Price" class="input input-sm w-[120px]" />
              <input type="text" placeholder="Size" class="input input-sm w-[80px]" />
              <input type="text" placeholder="Color" class="input input-sm w-[120px]" />
              <input type="number" placeholder="Stock" class="input input-sm w-[100px]" />
              <input type="file" class="variation-image-input input input-sm w-[200px]" accept="image/*" multiple />
              <button type="button" class="remove-variation-btn btn btn-sm bg-red-500 text-white">✕</button>
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

            <button type="button" class="add-spec btn btn-xs btn-secondary w-max">
              + Add Specification
            </button>
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
  let nextUID = null; // global UID tracker

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

  async function fetchNextAidUid() {
    try {
      const res = await fetch("<?= $baseUrl ?>/api/admin/products/get-next-count", {
        method: "GET",
        headers: {
          Authorization: `Bearer ${token}`,
        },
      });

      const data = await res.json();

      if (data.success) {
        const { aid, uid } = data.data;

        // Set AID
        const aidInput = document.querySelector('input[name="aid"]');
        aidInput.value = aid;

        // Set UID tracker
        nextUID = Number(uid);

        // Set UID for simple product
        const simpleUidInput = document.querySelector('input[name="uid"]');
        if (simpleUidInput) {
          simpleUidInput.value = nextUID;
        }

        // Set UID for first variant
        const firstVariantUid = document.querySelector(
          "#variant_fields .variation-item input[type='number']"
        );
        if (firstVariantUid) {
          firstVariantUid.value = nextUID;
        }
      } else {
        console.error("Failed to fetch AID/UID");
      }
    } catch (err) {
      console.error("AID/UID fetch error:", err);
    }
  }

  // Call both on page load
  document.addEventListener("DOMContentLoaded", () => {
      fetchBrands();
      fetchCategories();
      // call it
      fetchNextAidUid();
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
      if (productTypeSelect.value === "simple" && nextUID !== null) {
        document.querySelector('input[name="uid"]').value = nextUID;
      }
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

      // Remove spec row
      if (e.target.classList.contains("remove-spec")) {
        const wrapper = e.target.closest(".specs-wrapper");
        const rows = wrapper.querySelectorAll(".spec-row");

        if (rows.length > 1) {
          e.target.closest(".spec-row").remove();
        }
      }
    });

    // Add new variation row
    addVariationBtn.addEventListener("click", () => {
      const firstRow = variantFields.querySelector(".variation-item");
      const clone = firstRow.cloneNode(true);
      clone.querySelectorAll("input").forEach((input) => {
        if (input.type === "file") {
          input.value = "";
        } else {
          input.value = "";
        }
      });

      // AUTO UID INCREMENT
      const uidInput = clone.querySelector("input[type='number']");
      if (uidInput && nextUID !== null) {
        nextUID += 1;
        uidInput.value = nextUID;
      }

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

    async function submitSpecs(uid, specs) {
      if (!specs.length) return;

      try {
        const res = await fetch("<?= $baseUrl ?>/admin/products/add-specs", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            Authorization: `Bearer ${token}`,
          },
          body: JSON.stringify({
            uid,
            features: specs,
          }),
        });

        const result = await res.json();

        if (!result.success) {
          console.warn(`Specs failed for UID ${uid}`, result.message);
        }
      } catch (err) {
        console.error("Spec API error:", err);
      }
    }

    // Attach remove listener for the initial remove button
    attachRemoveListener(variantFields.querySelector(".remove-variation-btn"));

    // Form submission
    form.addEventListener("submit", async (e) => {
      e.preventDefault();

      const token = localStorage.getItem("auth_token");
      const formData = new FormData(form);
      const isVariant = productTypeSelect.value === "variant";
      const codCheckbox = document.getElementById("cod_checkbox");
      const customDesignCheckbox = document.getElementById("custom_design_checkbox");

      const codValue = codCheckbox.checked ? "available" : "not available";
      const customDesignValue = customDesignCheckbox.checked ? "available" : "not available";

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
        cod: codValue,
        custom_design: customDesignValue,
      };

      if (isVariant) {
        payload.slug = name.toLowerCase().replace(/\s+/g, "-");
        payload.shipping = "available";
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

        // STEP 3: ADD SPECS PER VARIATION
        const variationItems = variantFields.querySelectorAll(".variation-item");

        for (let i = 0; i < variationItems.length; i++) {
          const row = variationItems[i];
          const uid = payload.variations[i].uid;

          const specs = [];
          row.querySelectorAll(".spec-row").forEach(specRow => {
            const name = specRow.querySelector(".spec-name").value;
            const value = specRow.querySelector(".spec-value").value;

            if (name && value) {
              specs.push({
                spec_name: name,
                spec_value: value,
              });
            }
          });

          if (specs.length) {
            await submitSpecs(uid, specs);
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
