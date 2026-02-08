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
      <div class="flex gap-4 items-end">
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
      <div id="uploads_grid" class="masonry-grid mt-4">

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

/* Pinterest Masonry Layout */
.masonry-grid {
  column-count: 2;
  column-gap: 16px;
}

@media (min-width: 768px) {
  .masonry-grid {
    column-count: 3;
  }
}

@media (min-width: 1200px) {
  .masonry-grid {
    column-count: 4;
  }
}


.upload-card {
  position: relative;
  break-inside: avoid;
  margin-bottom: 16px;
  border-radius: 8px;
  overflow: hidden;
  border: 1px solid #e5e7eb;
  background: #fff;
  transition: 0.2s ease;
}

.upload-card img {
  width: 100%;
  height: auto;
  display: block;
}

/* Overlay */
.upload-overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  background: #000;
  color: #fff;
  transform: translateY(100%);
  transition: 0.3s ease;
}

.upload-card:hover .upload-overlay {
  transform: translateY(0);
  opacity: 1;
}

.overlay-content {
  padding: 8px;
  font-size: 12px;
}

.file-name {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  margin-bottom: 6px;
}

.overlay-actions {
  display: flex;
  gap: 6px;
}

.overlay-actions button {
  background: #fff;
  color: #000;
  border: none;
  padding: 4px 8px;
  font-size: 11px;
  border-radius: 4px;
  cursor: pointer;
  transition: 0.2s ease;
}

.overlay-actions button:hover {
  background: #2563eb;
  color: #fff;
}
.upload-card img {
  width: 100%;
  height: auto;
  display: block;
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
      
      <div class="upload-overlay">
        <div class="overlay-content">
          <div class="file-name">${img.file_name}</div>
          <div class="overlay-actions">
            <button class="copy-btn" data-url="${img.url}">
              Copy
            </button>
            <button class="delete-btn" data-id="${img.id}">
              Delete
            </button>
          </div>
        </div>
      </div>
    `;

    grid.appendChild(card);
  });

  attachOverlayActions();
}

function attachOverlayActions() {
  document.querySelectorAll(".copy-btn").forEach(btn => {
    btn.addEventListener("click", async (e) => {
      e.stopPropagation();
      const url = btn.getAttribute("data-url");

      try {
        await navigator.clipboard.writeText(url);
        btn.innerText = "Copied!";
            setTimeout(() => {
                btn.innerText = "Copy";
            }, 1500);
      } catch (err) {
        alert("Copy failed");
      }
    });
  });

  document.querySelectorAll(".delete-btn").forEach(btn => {
    btn.addEventListener("click", (e) => {
      e.stopPropagation();
      const id = btn.getAttribute("data-id");
      alert("Delete clicked for image ID: " + id);
    });
  });
}


document.addEventListener("DOMContentLoaded", () => {
  fetchUploads();
  filterBtn.addEventListener("click", fetchUploads);
});
</script>
