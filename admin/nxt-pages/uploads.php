<base href="../">
<?php include("../header.php"); ?>

<main class="grow content pt-5" id="content">
  <div class="container-fixed">
    <div class="card min-w-full p-5">

      <!-- Page Header -->
      <div class="flex justify-between items-center mb-5">
        <div>
          <h3 class="text-lg font-medium text-gray-900">All Uploads</h3>
          <div class="text-2sm text-gray-600">Manage all uploaded images</div>
        </div>
      </div>

      <!-- Filters -->
      <div class="flex gap-4 mb-6 items-end">
        <div>
          <label class="text-sm text-gray-700">Search Name</label>
          <input type="text" id="filter_name"
                 class="input input-sm w-[220px]"
                 placeholder="Search by file name">
        </div>

        <div>
          <label class="text-sm text-gray-700">Type</label>
          <select id="filter_type" class="input input-sm w-[180px]">
            <option value="">All</option>
            <option value="product">Product</option>
            <option value="brand">Brand</option>
            <option value="category">Category</option>
            <option value="others">Others</option>
          </select>
        </div>

        <button id="filter_btn"
                class="btn btn-sm bg-blue-600 text-white h-8">
          Apply Filter
        </button>
      </div>

      <!-- Image Grid -->
      <div id="uploads_grid"
           class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
      </div>

      <!-- Loader -->
      <div id="loader"
           class="hidden text-center text-gray-500 mt-6">
        Loading images...
      </div>

    </div>
  </div>
</main>

<style>
.upload-card {
  position: relative;
  border-radius: 8px;
  overflow: hidden;
  border: 1px solid #e5e7eb;
  background: #fff;
}

.upload-card img {
  width: 100%;
  height: 150px;
  object-fit: cover;
}

.upload-info {
  padding: 6px;
  font-size: 12px;
}

.upload-info p {
  margin: 2px 0;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
</style>

<?php include("../footer.php"); ?>

<script>
const baseUrl = "<?= $baseUrl ?>";
const token = localStorage.getItem("auth_token");

const grid = document.getElementById("uploads_grid");
const loader = document.getElementById("loader");
const filterBtn = document.getElementById("filter_btn");

async function fetchUploads() {
  loader.classList.remove("hidden");
  grid.innerHTML = "";

  const name = document.getElementById("filter_name").value;
  const type = document.getElementById("filter_type").value;

  try {
    const res = await fetch(`${baseUrl}/api/admin/upload/all-images`, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        Authorization: `Bearer ${token}`
      },
      body: JSON.stringify({
        name: name || "",
        type: type || ""
      })
    });

    const result = await res.json();

    if (!result.success) {
      alert("Failed to fetch uploads");
      loader.classList.add("hidden");
      return;
    }

    renderUploads(result.data);

  } catch (err) {
    alert("Error fetching uploads: " + err.message);
  }

  loader.classList.add("hidden");
}

function renderUploads(images) {
  if (!images.length) {
    grid.innerHTML = `
      <div class="col-span-full text-center text-gray-500">
        No images found.
      </div>
    `;
    return;
  }

  images.forEach(img => {
    const card = document.createElement("div");
    card.className = "upload-card";

    card.innerHTML = `
      <img src="${img.url}" alt="${img.file_name}">
      <div class="upload-info">
        <p><strong>ID:</strong> ${img.id}</p>
        <p title="${img.file_name}">${img.file_name}</p>
        <p class="text-gray-500">${img.extension.toUpperCase()}</p>
      </div>
    `;

    grid.appendChild(card);
  });
}

document.addEventListener("DOMContentLoaded", () => {
  fetchUploads();
  filterBtn.addEventListener("click", fetchUploads);
});
</script>
