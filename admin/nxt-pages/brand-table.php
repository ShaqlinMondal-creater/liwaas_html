<base href="../">
<?php include("../header.php"); ?>
<!-- End of Header -->
 
  <!-- Content -->
  <main class="grow content pt-5" id="content" role="content">
      <!-- Container -->
      <div class="container-fixed" id="content_container">
      </div>
      <!-- End of Container -->
  
      <!-- Container -->
      <div class="container-fixed">
          <div class="grid gap-5 lg:gap-7.5">
              <div class="card card-grid min-w-full">
                  <div class="card-header flex-wrap gap-2">
                      <h3 class="card-title font-medium text-sm">
                          Brand Details
                      </h3>
                      
                      <div class="flex flex-wrap gap-2 lg:gap-5">
                          <a class="btn btn-sm btn-primary" href="#">
                              Add Brand
                          </a>
                          <div class="flex">
                              <label class="input input-sm">
                                  <i class="ki-filled ki-magnifier">
                                  </i>
                                  <input id="brand_search_input" placeholder="Search Brands" type="text" />
                                  </input>
                              </label>
                          </div>
                      </div>                                
                  </div>
                  <div class="card-body" id="brand_table_wrapper">
                      <div  id="brand_table">
                          <div class="scrollable-x-auto">
                              <table class="table table-auto table-border" data-datatable-table="true">
                                  <thead>
                                      <tr>
                                          <th class="w-[60px] text-center">
                                              <input class="checkbox checkbox-sm" data-datatable-check="true"
                                                  type="checkbox" />
                                          </th>
                                          <th class="min-w-[60px]">
                                              <span class="sort">
                                                  <span class="sort-label font-normal text-gray-700">
                                                      Brand ID
                                                  </span>
                                                  <span class="sort-icon">
                                                  </span>
                                              </span>
                                          </th>
                                          <th class="min-w-[150px]">
                                              <span class="sort">
                                                  <span class="sort-label font-normal text-gray-700">
                                                      Brand Name
                                                  </span>
                                                  <span class="sort-icon">
                                                  </span>
                                              </span>
                                          </th>
                                          <th class="min-w-[180px]">
                                              <span class="sort asc">
                                                  <span class="sort-label font-normal text-gray-700">
                                                      Brand Logo
                                                  </span>
                                                  <span class="sort-icon">
                                                  </span>
                                              </span>
                                          </th> 
                                          <th class="w-[60px]">
                                          </th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <!-- table data -->
                                  </tbody>
                              </table>
                          </div>
                          <div class="card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium">
                              <div class="flex items-center gap-2 order-2 md:order-1">
                                  Show
                                  <select class="select select-sm w-16" data-datatable-size="true" name="perpage"></select>
                                  per page
                              </div>
                              <div class="flex items-center gap-4 order-1 md:order-2">
                                  <span data-datatable-info="true">
                                  </span>
                                  <div class="pagination" data-datatable-pagination="true">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End of Container -->
  </main>
  <!-- End of Content -->
<script>
  // ✅ Step 1: Change the API URL and filter payload
  const API_URL = "<?= $baseUrl ?>/api/allBrands";

  let currentPage = 1;
  let limit = 10;
  let searchQuery = "";
  let currentBrandList = []; // store currently fetched brands

  function fetchBrands(page = 1) {
    const offset = (page - 1) * limit;
    const authToken = localStorage.getItem("auth_token");
    const tbody = document.querySelector("#brand_table tbody");

    tbody.innerHTML = `
      <tr>
        <td colspan="6" class="text-center py-4 text-gray-500">
          <svg class="animate-spin h-5 w-5 inline-block text-gray-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
          </svg>
          Loading brand data...
        </td>
      </tr>
    `;

    fetch(API_URL, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        Authorization: `Bearer ${authToken}`,
      },
      body: JSON.stringify({ limit, offset, search: searchQuery }),
    })
      .then((res) => res.json())
      .then((response) => {
        if (response.success) {
          currentBrandList = response.data; // save data for edit/delete usage
          renderBrandTable(response.data);
          setupPagination(response.total_brands, limit, page);
        } else {
          tbody.innerHTML = `<tr><td colspan='6' class='text-center text-red-500 py-4'>Failed to load brands.</td></tr>`;
        }
      })
      .catch((err) => {
        console.error("Brand fetch error:", err);
        tbody.innerHTML = `<tr><td colspan='6' class='text-center text-red-500 py-4'>Error loading brands.</td></tr>`;
      });
  }

  function renderBrandTable(data) {
    const tbody = document.querySelector("#brand_table tbody");
    tbody.innerHTML = "";

    data.forEach((brand) => {
      const logoDisplay = brand.logo
        ? `<span class='text-green-600'>ID: ${brand.logo}</span>`
        : `<span class='text-gray-400 italic'>No logo</span>`;

      const row = `
        <tr>
          <td class="text-center">
            <input class="checkbox checkbox-sm" type="checkbox" value="${brand.id}" />
          </td>
          <td class="text-gray-800 font-normal">${brand.id}</td>
          <td class="text-gray-800 font-normal">${brand.name}</td>
          <td>${logoDisplay}</td>
          <td class="text-center">
            <div class="menu flex-inline" data-menu="true">
              <div class="menu-item"
                data-menu-item-offset="0, 10px"
                data-menu-item-placement="bottom-end"
                data-menu-item-placement-rtl="bottom-start"
                data-menu-item-toggle="dropdown"
                data-menu-item-trigger="click|lg:click">
                <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                  <i class="ki-filled ki-dots-vertical"></i>
                </button>
                <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                  <div class="menu-item">
                    <a class="menu-link" href="#" onclick="event.preventDefault(); editBrand(${brand.id});">
                      <i class="ki-filled ki-pencil me-2"></i>Edit
                    </a>
                  </div>
                  <div class="menu-item">
                    <a class="menu-link text-danger" href="#" onclick="event.preventDefault(); deleteBrand(${brand.id});">
                      <i class="ki-filled ki-trash me-2"></i>Delete
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
      `;
      tbody.insertAdjacentHTML("beforeend", row);
    });
  }

  function editBrand(id) {
    const authToken = localStorage.getItem("auth_token");
    const brand = currentBrandList.find(b => b.id === id);
    if (!brand) return alert("Brand not found.");

    Swal.fire({
      title: 'Edit Brand',
      html: `
        <input id="brand_name" class="swal2-input" placeholder="Brand Name" value="${brand.name}">
        <input id="brand_logo" type="file" class="swal2-file" accept="image/*">
      `,
      confirmButtonText: 'Update',
      showCancelButton: true,
      preConfirm: () => {
        const name = document.getElementById('brand_name').value;
        const logo = document.getElementById('brand_logo').files[0];

        const formData = new FormData();
        formData.append('name', name);
        formData.append('id', id); // pass id in form data

        if (logo) {
          formData.append('logo', logo);
        }

        return fetch("<?= $baseUrl ?>/api/admin/brands/update", {
          method: "POST",
          headers: {
            Authorization: `Bearer ${authToken}`,
          },
          body: formData,
        })
        .then(res => res.json())
        .then(result => {
          if (!result.success) {
            throw new Error(result.message || "Update failed");
          }
          return result;
        });
      }
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire('✅ Updated!', 'Brand updated successfully.', 'success');
        fetchBrands(currentPage);
      }
    }).catch(err => {
      Swal.fire('❌ Error', err.message || 'Update failed', 'error');
    });
  }

  function deleteBrand(id) {
    Swal.fire({
      title: "Are you sure?",
      text: "This will delete the brand permanently!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      if (result.isConfirmed) {
        const authToken = localStorage.getItem("auth_token");

        fetch(`<?= $baseUrl ?>/api/admin/brands/delete/${id}`, {
          method: "DELETE",
          headers: {
            Authorization: `Bearer ${authToken}`,
          },
        })
        .then(res => res.json())
        .then(data => {
          if (data.success) {
            Swal.fire("🗑️ Deleted!", data.message, "success");
            fetchBrands(currentPage);
          } else {
            Swal.fire("❌ Failed", data.message, "error");
          }
        })
        .catch(err => {
          Swal.fire("❌ Error", err.message || "Failed to delete", "error");
        });
      }
    });
  }

  function setupPagination(total, limit, current) {
    const container = document.querySelector("[data-datatable-pagination]");
    const info = document.querySelector("[data-datatable-info]");
    container.innerHTML = "";

    const totalPages = Math.ceil(total / limit);

    for (let i = 1; i <= totalPages; i++) {
      const btn = document.createElement("button");
      btn.className = `btn btn-sm ${i === current ? "active" : "btn-light"}`;
      btn.textContent = i;
      btn.addEventListener("click", () => fetchBrands(i));
      container.appendChild(btn);
    }

    if (info) {
      info.innerText = `Page ${current} of ${totalPages}`;
    }
  }

  function populatePerPageDropdown() {
    const select = document.querySelector("[data-datatable-size]");
    const options = [5, 10, 20, 50];

    select.innerHTML = "";
    options.forEach((num) => {
      const option = document.createElement("option");
      option.value = num;
      option.textContent = num;
      if (num === limit) option.selected = true;
      select.appendChild(option);
    });

    select.addEventListener("change", function () {
      limit = parseInt(this.value);
      currentPage = 1;
      fetchBrands(currentPage);
    });
  }

  document.addEventListener("DOMContentLoaded", () => {
    populatePerPageDropdown();
    fetchBrands();
  });
  document.getElementById("brand_search_input").addEventListener("input", function () {
    searchQuery = this.value.trim();
    currentPage = 1;
    fetchBrands(currentPage);
  });


</script>
<script>
  document.querySelector(".btn-primary").addEventListener("click", function (e) {
    e.preventDefault();

    Swal.fire({
      title: 'Add New Brand',
      html: `
        <input id="new_brand_name" class="swal2-input" placeholder="Brand Name">
        <input id="new_brand_logo" type="file" class="swal2-file" accept="image/*">
      `,
      confirmButtonText: 'Add Brand',
      showCancelButton: true,
      preConfirm: () => {
        const name = document.getElementById('new_brand_name').value.trim();
        const logo = document.getElementById('new_brand_logo').files[0];

        if (!name) {
          Swal.showValidationMessage('Brand name is required');
          return false;
        }

        const formData = new FormData();
        formData.append("name", name);
        if (logo) {
          formData.append("logo", logo);
        }

        return fetch("<?= $baseUrl ?>/api/admin/brands/add", {
          method: "POST",
          headers: {
            Authorization: `Bearer ${localStorage.getItem("auth_token")}`,
          },
          body: formData,
        })
        .then(res => res.json())
        .then(data => {
          if (!data.success) {
            throw new Error(data.message || "Failed to add brand");
          }
          return data;
        });
      }
    }).then(result => {
      if (result.isConfirmed) {
        Swal.fire("✅ Success!", "Brand added successfully.", "success");
        fetchBrands(currentPage); // reload table
      }
    }).catch(err => {
      Swal.fire("❌ Error", err.message || "Brand creation failed", "error");
    });
  });

</script>
<!-- Footer -->
<?php include("../footer.php"); ?>