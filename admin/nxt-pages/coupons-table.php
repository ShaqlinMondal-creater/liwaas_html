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
            <select id="coupon_status_filter" class="select select-sm w-32">
              <option value="">All</option>
              <option value="active">Active</option>
              <option value="inactive">Inactive</option>
            </select>

            <label class="input input-sm">
              <i class="ki-filled ki-magnifier"></i>
              <input id="coupon_search_input" placeholder="Search Key Name" type="text"/>
            </label>

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
  const COUPON_API = "<?= $baseUrl ?>/admin/coupons/get-all";

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
              <div class="menu-item" data-menu-item-toggle="dropdown">
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
    alert("Edit coupon: " + id + " (hook API later)");
  }

  function deleteCoupon(id) {
    alert("Delete coupon: " + id + " (hook API later)");
  }
</script>

<?php include("../footer.php"); ?>
