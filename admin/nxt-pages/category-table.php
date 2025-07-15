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
                        <h3 class="card-title font-medium text-sm">Category Details</h3>
                        <div class="flex flex-wrap gap-2 lg:gap-5">
                            <a class="btn btn-sm btn-primary" href="#">
                              Add Category
                            </a>
                            <div class="flex">
                                <label class="input input-sm">
                                    <i class="ki-filled ki-magnifier"></i>
                                    <input id="category_search_input" placeholder="Search Categories" type="text"/>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="card-body" id="category_table_wrapper">
                        <div id="category_table">
                            <div class="scrollable-x-auto">
                                <table class="table table-auto table-border">
                                    <thead>
                                        <tr>
                                            <th class="w-[60px] text-center"><input type="checkbox"
                                                    class="checkbox checkbox-sm" /></th>
                                            <th class="min-w-[60px]">Category ID</th>
                                            <th class="min-w-[150px]">Category Name</th>
                                            <th class="min-w-[180px]">Category Logo</th>
                                            <th class="w-[60px]"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Data will be injected here -->
                                    </tbody>
                                </table>
                            </div>

                            <div
                                class="card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium">
                                <div class="flex items-center gap-2 order-2 md:order-1">
                                    Show
                                    <select class="select select-sm w-16" id="category_per_page"></select>
                                    per page
                                </div>
                                <div class="flex items-center gap-4 order-1 md:order-2">
                                    <span id="category_info"></span>
                                    <div class="pagination" id="category_pagination"></div>
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
  const CATEGORY_API = "<?= $baseUrl ?>/api/allCategories";
  let categoryPage = 1;
  let categoryLimit = 10;
  let categorySearch = "";
    let currentCategoryList = [];


  function fetchCategories(page = 1) {
    const offset = (page - 1) * categoryLimit;
    const token = localStorage.getItem("auth_token");
    const tbody = document.querySelector("#category_table tbody");

    tbody.innerHTML = `
      <tr>
        <td colspan="5" class="text-center py-4 text-gray-500">
          <svg class="animate-spin h-5 w-5 inline-block mr-2" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
          </svg>
          Loading category data...
        </td>
      </tr>
    `;

    fetch(`<?= $baseUrl ?>/api/allCategories`, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            Authorization: `Bearer ${token}`,
        },
        body: JSON.stringify({ limit: categoryLimit, offset, search: categorySearch }),
    })

      .then((res) => res.json())
      .then((res) => {
        if (res.success) {
            currentCategoryList = res.data; // store for later use in edit
            renderCategoryTable(res.data);
            setupCategoryPagination(res.total_categories, categoryLimit, page);
        } else {
          tbody.innerHTML = `<tr><td colspan="5" class="text-center text-red-500 py-4">Failed to load categories.</td></tr>`;
        }
      })
      .catch((err) => {
        console.error("Fetch category error:", err);
        tbody.innerHTML = `<tr><td colspan="5" class="text-center text-red-500 py-4">Error loading categories.</td></tr>`;
      });
  }

  function renderCategoryTable(data) {
    const tbody = document.querySelector("#category_table tbody");
    tbody.innerHTML = "";

    data.forEach((cat) => {

      const logo = cat.logo ? `<img src="${cat.logo}" alt="Category Logo" class="h-10 w-auto" />` : `<span class="text-gray-400 italic">No logo</span>`;
      const row = `
        <tr>
            <td class="text-center"><input type="checkbox" class="checkbox checkbox-sm" value="${cat.id}" /></td>
            <td class="text-gray-800 font-normal">${cat.id}</td>
            <td class="text-gray-800 font-normal">${cat.name}</td>
            <td>${logo}</td>
            <td class="text-center">
                <div class="menu flex-inline" data-menu="true">
                    <div class="menu-item" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                        <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                            <i class="ki-filled ki-dots-vertical"></i>
                        </button>
                        <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                            <div class="menu-item">
                                <a class="menu-link" href="#" onclick="event.preventDefault(); editCategory(${cat.id})">
                                    <i class="ki-filled ki-pencil me-2"></i>Edit
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link text-danger" href="#" onclick="event.preventDefault(); deleteCategory(${cat.id})">
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

    function setupCategoryPagination(total, limit, current) {
        const container = document.getElementById("category_pagination");
        const info = document.getElementById("category_info");
        container.innerHTML = "";

        const totalPages = Math.ceil(total / limit);
        for (let i = 1; i <= totalPages; i++) {
        const btn = document.createElement("button");
        btn.className = `btn btn-sm ${i === current ? "active" : "btn-light"}`;
        btn.textContent = i;
        btn.addEventListener("click", () => fetchCategories(i));
        container.appendChild(btn);
        }

        if (info) info.innerText = `Page ${current} of ${totalPages}`;
    }

    function populateCategoryPerPage() {
        const select = document.getElementById("category_per_page");
        const options = [5, 10, 20, 50];
        select.innerHTML = "";

        options.forEach(num => {
        const option = document.createElement("option");
        option.value = num;
        option.textContent = num;
        if (num === categoryLimit) option.selected = true;
        select.appendChild(option);
        });

        select.addEventListener("change", function () {
        categoryLimit = parseInt(this.value);
        categoryPage = 1;
        fetchCategories(categoryPage);
        });
    }

    // function editCategory(id) {
    //     const token = localStorage.getItem("auth_token");
    //     const baseUrl = "<?= $baseUrl ?>"; 
    //     const category = currentCategoryList.find(cat => cat.id === id);
    //     if (!category) return alert("Category not found.");

    //     Swal.fire({
    //         title: 'Edit Category',
    //         html: `
    //         <input id="cat_name" class="swal2-input" placeholder="Category Name" value="${category.name}">
    //         <input id="cat_logo" type="file" class="swal2-file" accept="image/*">
    //         `,
    //         confirmButtonText: 'Update',
    //         showCancelButton: true,
    //         preConfirm: () => {
    //         const name = document.getElementById('cat_name').value;
    //         const logo = document.getElementById('cat_logo').files[0];

    //         const formData = new FormData();
    //         formData.append('name', name);
    //         if (logo) formData.append('logo', logo);

    //         return fetch(`${baseUrl}/api/admin/categories/update/${id}`, {
    //             method: 'POST',
    //             headers: {
    //                 Authorization: `Bearer ${token}`,
    //             },
    //             body: formData,
    //         })
    //         .then(res => res.json())
    //         .then(result => {
    //             if (!result.success) {
    //             throw new Error(result.message);
    //             }
    //             return result;
    //         });
    //         }
    //     }).then((result) => {
    //         if (result.isConfirmed) {
    //         Swal.fire('✅ Updated!', 'Category updated successfully.', 'success');
    //         fetchCategories(categoryPage); // reload after update
    //         }
    //     }).catch(err => {
    //         Swal.fire('❌ Error', err.message || 'Update failed', 'error');
    //     });
    // }

    function editCategory(id) {
        const token = localStorage.getItem("auth_token"); 
        const category = currentCategoryList.find(cat => cat.id === id);
        if (!category) return alert("Category not found.");

        Swal.fire({
            title: 'Edit Category',
            html: `
                <input id="cat_name" class="swal2-input" placeholder="Category Name" value="${category.name}">
                <input id="cat_logo" type="file" class="swal2-file" accept="image/*"><br />
                <span class="text-gray-400 italic">Use Format: jpeg,png,jpg (Max: 8mb)</span>
            `,
            confirmButtonText: 'Update',
            showCancelButton: true,
            preConfirm: () => {
                const name = document.getElementById('cat_name').value;
                const logo = document.getElementById('cat_logo').files[0];

                const formData = new FormData();
                formData.append('id', id);              // ✅ pass id in form data
                formData.append('name', name);
                if (logo) formData.append('logo', logo);

                return fetch(`<?= $baseUrl ?>/api/admin/categories/update`, { // ✅ no /{id}
                    method: "POST",
                    headers: {
                        Authorization: `Bearer ${token}`,               // ✅ token in header
                    },
                    body: formData
                })
                .then(res => res.json())
                .then(result => {
                    if (!result.success) {
                        throw new Error(result.message);
                    }
                    return result;
                });
            }
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire('✅ Updated!', 'Category updated successfully.', 'success');
                fetchCategories(categoryPage); // reload categories
            }
        }).catch(err => {
            Swal.fire('❌ Error', err.message || 'Update failed', 'error');
        });
    }


    function deleteCategory(id) {
        Swal.fire({
            title: "Are you sure?",
            text: "This will delete the category permanently!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
            const token = localStorage.getItem("auth_token");

            fetch(`<?= $baseUrl ?>/api/admin/categories/delete/${id}`, {
                method: "DELETE",
                headers: {
                Authorization: `Bearer ${token}`,
                },
            })
                .then((res) => res.json())
                .then((data) => {
                if (data.success) {
                    Swal.fire("🗑️ Deleted!", data.message, "success");
                    fetchCategories(categoryPage);
                } else {
                    Swal.fire("❌ Failed", data.message, "error");
                }
                })
                .catch((err) => {
                Swal.fire("❌ Error", err.message || "Failed to delete", "error");
                });
            }
        });
    }

    // Search input handler
    document.addEventListener("DOMContentLoaded", () => {
        populateCategoryPerPage();
        fetchCategories();

        document.getElementById("category_search_input").addEventListener("input", function () {
            categorySearch = this.value.trim();
            categoryPage = 1;
            fetchCategories(categoryPage);
        });
    });
</script>
<script>
    document.querySelector(".btn-primary").addEventListener("click", function (e) {
        e.preventDefault();

        Swal.fire({
            title: 'Add New Category',
            html: `
                <input id="new_category_name" class="swal2-input" placeholder="Category Name">
                <input id="new_category_logo" type="file" class="swal2-file" accept="image/*">
            `,
            confirmButtonText: 'Add Category',
            showCancelButton: true,
            preConfirm: () => {
            const name = document.getElementById('new_category_name').value.trim();
            const logo = document.getElementById('new_category_logo').files[0];

            if (!name) {
                Swal.showValidationMessage('Category name is required');
                return false;
            }

            const formData = new FormData();
            formData.append("name", name);
            if (logo) {
                formData.append("logo", logo);
            }

            return fetch("<?= $baseUrl ?>/api/admin/categories/add", {
                method: "POST",
                headers: {
                Authorization: `Bearer ${localStorage.getItem("auth_token")}`,
                },
                body: formData,
            })
            .then(res => res.json())
            .then(data => {
                if (!data.success) {
                throw new Error(data.message || "Failed to add category");
                }
                return data;
            });
            }
        }).then(result => {
            if (result.isConfirmed) {
            Swal.fire("✅ Success!", "Category added successfully.", "success");
            fetchCategories(categoryPage); // reload category table
            }
        }).catch(err => {
            Swal.fire("❌ Error", err.message || "Category creation failed", "error");
        });
    });

</script>

<!-- Footer -->
<?php include("../footer.php"); ?>