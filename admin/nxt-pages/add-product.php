<base href="../">
<?php include("../header.php"); ?>
<!-- Content -->
<main class="grow content pt-5" id="content" role="content">
  <!-- Container -->
  <div class="container-fixed">
    <div class="card min-w-full">
      <form id="add_product_form" class="card-body flex flex-col gap-5 p-10" method="post" enctype="multipart/form-data">
        <div class=".5">
          <h3 class="text-lg font-medium text-gray-900 leading-none .5">
            Add Product
          </h3>
          <div class="text-2sm text-gray-700">Fill in all details for variant or non-variant products</div>
        </div>

        <!-- Row 1 -->
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
            <label class="form-label text-gray-900">UID</label>
            <input class="input input-sm w-[240px]" type="number" name="uid" placeholder="1002" />
          </div>
          <div class="flex flex-col gap-1">
            <label class="form-label text-gray-900">Stock</label>
            <input class="input input-sm w-[240px]" type="number" name="stock" placeholder="20" />
          </div>
        </div>

        <!-- Row 2 -->
        <div class="flex gap-10 items-center">
          <div class="flex flex-col gap-1 flex-grow">
            <label class="form-label text-gray-900">Brand</label>
            <input class="input input-sm w-[240px]" type="number" name="brand" placeholder="4" />
          </div>
          <div class="flex flex-col gap-1">
            <label class="form-label text-gray-900">Category</label>
            <input class="input input-sm w-[240px]" type="number" name="category" placeholder="2" />
          </div>
          <div class="flex flex-col gap-1">
            <label class="form-label text-gray-900">Gender</label>
            <input class="input input-sm w-[240px]" type="text" name="gender" placeholder="male" />
          </div>
          <div class="flex flex-col gap-1">
            <label class="form-label text-gray-900">Keyword</label>
            <input class="input input-sm w-[240px]" type="text" name="keyword" placeholder="Grey shirt, fit" />
          </div>
        </div>

        <!-- Row 3 -->
        <div class="flex gap-10 items-center">
          <div class="flex flex-col gap-1 flex-grow">
            <label class="form-label text-gray-900">Regular Price</label>
            <input class="input input-sm w-[240px]" type="number" name="regular_price" placeholder="699" />
          </div>
          <div class="flex flex-col gap-1">
            <label class="form-label text-gray-900">Sale Price</label>
            <input class="input input-sm w-[240px]" type="number" name="sale_price" placeholder="549" />
          </div>
          <div class="flex flex-col gap-1 flex-grow">
            <label class="form-label text-gray-900">Description</label>
            <input class="input input-sm w-[240px]" type="text" name="description" placeholder="Abstract design for formal wear" />
          </div>
          <div class="flex flex-col gap-1 flex-grow">
            <label class="form-label text-gray-900">Specification</label>
            <input class="input input-sm w-[240px]" type="text" name="specification" placeholder="99% cotton" />
          </div>
        </div>

        <!-- Row 4 (Updated) -->
        <div class="flex gap-10 items-center mb-5">
          <div class="flex flex-col gap-1">
            <label class="form-label text-gray-900">Size</label>
            <input class="input input-sm w-[240px]" type="text" name="size" placeholder="L" />
          </div>
          <div class="flex flex-col gap-1">
            <label class="form-label text-gray-900">Color</label>
            <input class="input input-sm w-[240px]" type="text" name="color" placeholder="red-200" />
          </div>
          <div class="flex flex-col gap-1">
            <label class="form-label text-gray-900">Product Image</label>
            <input class="input input-sm w-[240px]" type="file" name="image[]" accept="image/*" multiple />
          </div>
          <div class="flex flex-col gap-1 justify-end" style="min-width: 140px;">
            <button type="submit" class="btn btn-primary h-8 mt-5 w-[120px]">Add Product</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</main>

<!-- JS -->
<script>
  document.getElementById("add_product_form").addEventListener("submit", async function (e) {
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);

    // Convert numeric fields
    formData.set("uid", Number(formData.get("uid")));
    formData.set("brand", Number(formData.get("brand")));
    formData.set("category", Number(formData.get("category")));
    formData.set("regular_price", Number(formData.get("regular_price")));
    formData.set("sale_price", Number(formData.get("sale_price")));
    formData.set("stock", Number(formData.get("stock")));

    const token = localStorage.getItem("auth_token");

    try {
      // Step 1: Create Product
      const response = await fetch("http://192.168.0.103:8000/api/admin/products/add_product", {
        method: "POST",
        headers: {
          Authorization: `Bearer ${token}`,
        },
        body: formData,
      });

      const result = await response.json();

      if (!result.success) {
        alert("❌ Failed to add product: " + result.message);
        return;
      }

      alert("✅ Product created: " + result.message);

      // Step 2: Upload image (variation image API)
      const imageInput = form.querySelector('input[name="image[]"]');
      const imageFiles = imageInput.files;

      if (imageFiles.length > 0) {
        const uploadForm = new FormData();
        uploadForm.append("aid", formData.get("aid"));
        uploadForm.append("uid", formData.get("uid"));

        // Append all files as file[]
        for (let i = 0; i < imageFiles.length; i++) {
          uploadForm.append("file[]", imageFiles[i]);
        }

        const uploadResponse = await fetch("http://192.168.0.103:8000/api/admin/upload/variation-images", {
          method: "POST",
          headers: {
            Authorization: `Bearer ${token}`,
          },
          body: uploadForm,
        });

        const uploadResult = await uploadResponse.json();

        if (uploadResult.success) {
          alert("📦 Images uploaded successfully: " + uploadResult.message);
          console.log("Uploaded image URLs:", uploadResult.data.url);
        } else {
          alert("⚠️ Product created, but image upload failed: " + uploadResult.message);
        }
      }

      form.reset();
    } catch (error) {
      alert("⚠️ Error: " + error.message);
    }
  });
</script>


<?php include("../footer.php"); ?>
