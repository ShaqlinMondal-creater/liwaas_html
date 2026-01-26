<base href="../">
<?php include("../header.php"); ?>
<!-- End of Header -->

<main class="grow content pt-5" id="content" role="content">
    <div class="container-fixed">
        <div class="grid gap-5 lg:gap-7.5">
            <div class="card card-grid min-w-full">
                <div class="card-header flex-wrap gap-2">
                    <h3 class="card-title font-medium text-sm">Coupon Details</h3>

                    <div class="flex flex-wrap gap-2 lg:gap-5">
                        <a class="btn btn-sm btn-primary" href="#">
                            Add Coupon
                        </a>

                        <!-- Filters -->
                        <select id="coupon_status_filter" class="select select-sm w-28">
                            <option value="">All</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>

                        <div class="flex">
                            <label class="input input-sm">
                                <i class="ki-filled ki-magnifier"></i>
                                <input id="coupon_search_input" placeholder="Search Key Name" type="text"/>
                            </label>
                        </div>

                        <input id="coupon_start_date" type="date" class="input input-sm w-36">
                        <input id="coupon_end_date" type="date" class="input input-sm w-36">
                    </div>
                </div>         
                <div class="card-body" id="coupon_table_wrapper">
                <div id="coupon_table">
                    <div class="scrollable-x-auto">
                    <table class="table table-auto table-border">
                        <thead>
                        <tr>
                            <th class="w-[60px] text-center">
                            <input type="checkbox" class="checkbox checkbox-sm" />
                            </th>
                            <th class="min-w-[80px]">ID</th>
                            <th class="min-w-[150px]">Key Name</th>
                            <th class="min-w-[120px]">Value</th>
                            <th class="min-w-[120px]">Status</th>
                            <th class="min-w-[150px]">Start Date</th>
                            <th class="min-w-[150px]">End Date</th>
                            <th class="w-[60px]"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- Data injected here -->
                        </tbody>
                    </table>
                    </div>

                    <div class="card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium">
                    <div class="flex items-center gap-2 order-2 md:order-1">
                        Show
                        <select class="select select-sm w-16" id="coupon_per_page"></select>
                        per page
                    </div>

                    <div class="flex items-center gap-4 order-1 md:order-2">
                        <span id="coupon_info"></span>
                        <div class="pagination" id="coupon_pagination"></div>
                    </div>
                    </div>
                </div>
                </div>
            </div> 
        </div>
    </div>
</main>

<script>
  const COUPON_API = "<?= $baseUrl ?>/api/admin/coupons/get-all";

  let couponPage = 1;
  let couponLimit = 10;

  let couponSearch = "";
  let couponStatus = "";
  let couponStartDate = "";
  let couponEndDate = "";

  let currentCouponList = [];

  function fetchCoupons(page = 1) {
    const offset = (page - 1) * couponLimit;
    const token = localStorage.getItem("auth_token");
    const tbody = document.querySelector("#coupon_table tbody");

    tbody.innerHTML = `
      <tr>
        <td colspan="8" class="text-center py-4 text-gray-500">
          <svg class="animate-spin h-5 w-5 inline-block mr-2" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
          </svg>
          Loading coupon data...
        </td>
      </tr>
    `;

    fetch(COUPON_API, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        Authorization: `Bearer ${token}`,
      },
      body: JSON.stringify({
        status: couponStatus || null,
        key_name: couponSearch || null,
        start_date: couponStartDate || null,
        end_date: couponEndDate || null,
        limit: couponLimit,
        offset: offset
      }),
    })
    .then(res => res.json())
    .then(res => {
      if (res.success) {
        currentCouponList = res.data;
        renderCouponTable(res.data);
        setupCouponPagination(res.total, couponLimit, page);
      } else {
        tbody.innerHTML = `<tr><td colspan="8" class="text-center text-red-500 py-4">Failed to load coupons.</td></tr>`;
      }
    })
    .catch(err => {
      console.error("Fetch coupon error:", err);
      tbody.innerHTML = `<tr><td colspan="8" class="text-center text-red-500 py-4">Error loading coupons.</td></tr>`;
    });
  }

  function renderCouponTable(data) {
    const tbody = document.querySelector("#coupon_table tbody");
    tbody.innerHTML = "";

    if (!data.length) {
      tbody.innerHTML = `<tr><td colspan="8" class="text-center py-4 text-gray-400">No coupons found.</td></tr>`;
      return;
    }

    data.forEach(coupon => {
      const statusBadge = coupon.status === "active"
        ? `<span class="badge badge-success">Active</span>`
        : `<span class="badge badge-danger">Inactive</span>`;

      const row = `
        <tr>
          <td class="text-center">
            <input type="checkbox" class="checkbox checkbox-sm" value="${coupon.id}">
          </td>
          <td>${coupon.id}</td>
          <td>${coupon.key_name}</td>
          <td>${coupon.value}</td>
          <td>${statusBadge}</td>
          <td>${coupon.start_date}</td>
          <td>${coupon.end_date}</td>
          <td class="text-center">
            <div class="menu flex-inline" data-menu="true">
              <div class="menu-item" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                  <i class="ki-filled ki-dots-vertical"></i>
                </button>
                <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                  <div class="menu-item">
                    <a class="menu-link" href="#" onclick="event.preventDefault(); editCoupon(${coupon.id})">
                      <i class="ki-filled ki-pencil me-2"></i>Edit
                    </a>
                  </div>
                  <div class="menu-item">
                    <a class="menu-link text-danger" href="#" onclick="event.preventDefault(); deleteCoupon(${coupon.id})">
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
    // ✅ RE-INIT MENU DROPDOWNS
    if (window.KTMenu) {
        KTMenu.createInstances();
    }
  }

  function setupCouponPagination(total, limit, current) {
    const container = document.getElementById("coupon_pagination");
    const info = document.getElementById("coupon_info");

    container.innerHTML = "";

    const totalPages = Math.ceil(total / limit);
    for (let i = 1; i <= totalPages; i++) {
      const btn = document.createElement("button");
      btn.className = `btn btn-sm ${i === current ? "active" : "btn-light"}`;
      btn.textContent = i;
      btn.addEventListener("click", () => fetchCoupons(i));
      container.appendChild(btn);
    }

    if (info) info.innerText = `Page ${current} of ${totalPages}`;
  }

  function populateCouponPerPage() {
    const select = document.getElementById("coupon_per_page");
    const options = [5, 10, 20, 50];

    select.innerHTML = "";

    options.forEach(num => {
      const option = document.createElement("option");
      option.value = num;
      option.textContent = num;
      if (num === couponLimit) option.selected = true;
      select.appendChild(option);
    });

    select.addEventListener("change", function () {
      couponLimit = parseInt(this.value);
      couponPage = 1;
      fetchCoupons(couponPage);
    });
  }

  document.addEventListener("DOMContentLoaded", () => {
    populateCouponPerPage();
    fetchCoupons();

    document.getElementById("coupon_search_input").addEventListener("input", function () {
      couponSearch = this.value.trim();
      couponPage = 1;
      fetchCoupons(couponPage);
    });

    document.getElementById("coupon_status_filter").addEventListener("change", function () {
      couponStatus = this.value;
      couponPage = 1;
      fetchCoupons(couponPage);
    });

    document.getElementById("coupon_start_date").addEventListener("change", function () {
      couponStartDate = this.value;
      couponPage = 1;
      fetchCoupons(couponPage);
    });

    document.getElementById("coupon_end_date").addEventListener("change", function () {
      couponEndDate = this.value;
      couponPage = 1;
      fetchCoupons(couponPage);
    });
  });

function editCoupon(id) {
  const token = localStorage.getItem("auth_token");
  const coupon = currentCouponList.find(c => c.id === id);

  if (!coupon) {
    Swal.fire("❌ Error", "Coupon not found.", "error");
    return;
  }

  Swal.fire({
    title: "Edit Coupon",
    html: `
      <input id="edit_key_name" class="swal2-input" placeholder="Key Name" value="${coupon.key_name}">
      <input id="edit_value" type="number" class="swal2-input" placeholder="Value" value="${coupon.value}">
      
      <select id="edit_status" class="swal2-select">
        <option value="active" ${coupon.status === "active" ? "selected" : ""}>Active</option>
        <option value="inactive" ${coupon.status === "inactive" ? "selected" : ""}>Inactive</option>
      </select>

      <input id="edit_start_date" type="date" class="swal2-input" value="${coupon.start_date}">
      <input id="edit_end_date" type="date" class="swal2-input" value="${coupon.end_date}">
    `,
    confirmButtonText: "Update Coupon",
    showCancelButton: true,
    preConfirm: () => {
      const key_name = document.getElementById("edit_key_name").value.trim();
      const value = document.getElementById("edit_value").value.trim();
      const status = document.getElementById("edit_status").value;
      const start_date = document.getElementById("edit_start_date").value;
      const end_date = document.getElementById("edit_end_date").value;

      if (!key_name || !value || !status || !start_date || !end_date) {
        Swal.showValidationMessage("All fields are required");
        return false;
      }

      return fetch(`<?= $baseUrl ?>/api/admin/coupons/update/${id}`, {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          Authorization: `Bearer ${token}`,
        },
        body: JSON.stringify({
          key_name: key_name,
          value: Number(value),
          status: status,
          start_date: start_date,
          end_date: end_date
        }),
      })
      .then(res => res.json())
      .then(data => {
        if (!data.success) {
          throw new Error(data.message || "Coupon update failed");
        }
        return data;
      });
    }
  }).then(result => {
    if (result.isConfirmed) {
      Swal.fire("✅ Updated!", "Coupon updated successfully.", "success");
      fetchCoupons(couponPage); // reload table
    }
  }).catch(err => {
    Swal.fire("❌ Error", err.message || "Coupon update failed", "error");
  });
}

function deleteCoupon(id) {
  Swal.fire({
    title: "Are you sure?",
    text: "This will delete the coupon permanently!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonText: "Yes, delete it!",
  }).then(result => {
    if (result.isConfirmed) {
      const token = localStorage.getItem("auth_token");

      fetch(`<?= $baseUrl ?>/api/admin/coupons/delete/${id}`, {
        method: "DELETE",
        headers: {
          Authorization: `Bearer ${token}`,
        },
      })
      .then(res => res.json())
      .then(data => {
        if (data.success) {
          Swal.fire("🗑️ Deleted!", data.message, "success");

          // If last item on page deleted, go back one page safely
          if (currentCouponList.length === 1 && couponPage > 1) {
            couponPage--;
          }

          fetchCoupons(couponPage);
        } else {
          Swal.fire("❌ Failed", data.message || "Delete failed", "error");
        }
      })
      .catch(err => {
        Swal.fire("❌ Error", err.message || "Delete failed", "error");
      });
    }
  });
}
</script>

<script>
document.querySelector(".btn-primary").addEventListener("click", function (e) {
  e.preventDefault();

  Swal.fire({
    title: "Add New Coupon",
    html: `
      <input id="new_key_name" class="swal2-input" placeholder="Key Name (e.g. WELCOME15)">
      <input id="new_value" type="number" class="swal2-input" placeholder="Value (e.g. 15)">
      
      <select id="new_status" class="swal2-select">
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
      </select>

      <input id="new_start_date" type="date" class="swal2-input">
      <input id="new_end_date" type="date" class="swal2-input">
    `,
    confirmButtonText: "Create Coupon",
    showCancelButton: true,
    preConfirm: () => {
      const key_name = document.getElementById("new_key_name").value.trim();
      const value = document.getElementById("new_value").value.trim();
      const status = document.getElementById("new_status").value;
      const start_date = document.getElementById("new_start_date").value;
      const end_date = document.getElementById("new_end_date").value;

      if (!key_name || !value || !status || !start_date || !end_date) {
        Swal.showValidationMessage("All fields are required");
        return false;
      }

      return fetch("<?= $baseUrl ?>/api/admin/coupons/create", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          Authorization: `Bearer ${localStorage.getItem("auth_token")}`,
        },
        body: JSON.stringify({
          key_name: key_name,
          value: Number(value),
          status: status,
          start_date: start_date,
          end_date: end_date
        }),
      })
      .then(res => res.json())
      .then(data => {
        if (!data.success) {
          throw new Error(data.message || "Coupon creation failed");
        }
        return data;
      });
    }
  }).then(result => {
    if (result.isConfirmed) {
      Swal.fire("✅ Success!", "Coupon created successfully.", "success");
      fetchCoupons(couponPage); // reload table
    }
  }).catch(err => {
    Swal.fire("❌ Error", err.message || "Coupon creation failed", "error");
  });
});
</script>

<?php include("../footer.php"); ?>
