<base href="../">
<?php include("../header.php"); ?>
<!-- End of Header -->
 
  <!-- Content -->
  <main class="grow content pt-5" id="content" role="content">
      <!-- Container -->
      <div class="container-fixed" id="content_container">
      </div>
      <!-- End of Container -->
  
      <!-- Shipping Order Chart Section -->
      <div class="container-fixed mt-10">
        <div class="grid gap-5 lg:gap-7.5">
          <div class="card p-5">
            <h3 class="text-lg font-semibold mb-5">Shipping Orders Stats</h3>

            <!-- Chart canvas -->
            <div class="mt-4 mb-4">
              <canvas id="monthlyOrderChart" height="100"></canvas>
            </div>
            
            <!-- Status Summary Cards -->
            <div class="grid grid-cols-3 sm:grid-cols-3 gap-5 mt-8">
              <div class="card badge-primary text-blue-900 p-4">
                <p class="text-sm">New Orders</p>
                <h4 class="text-xl font-bold" id="new_orders_count">0</h4>
              </div>
              <div class="card badge-danger text-red-900 p-4">
                <p class="text-sm">Cancelled Orders</p>
                <h4 class="text-xl font-bold" id="cancelled_orders_count">0</h4>
              </div>
              <div class="card badge-success text-green-900 p-4">
                <p class="text-sm">Delivered Orders</p>
                <h4 class="text-xl font-bold" id="delivered_orders_count">0</h4>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Container -->
      <div class="container-fixed">
          <div class="grid gap-5 lg:gap-7.5">
              <div class="card card-grid min-w-full">
                  <div class="card-header flex-wrap gap-2">
                      <h3 class="card-title font-medium text-sm">
                          Shipping Order Details
                      </h3>
                      <div class="flex flex-wrap gap-2 lg:gap-5">
                        <div class="flex items-center gap-2">
                          <label class="input input-sm">
                            <i class="ki-filled ki-magnifier"></i>
                            <input id="order_search_input" placeholder="Search Order ID / Ref" type="text" />
                          </label>
                        </div>

                        <div class="flex flex-row gap-2.5">
                          <!-- date range -->
                          <input id="from_date" type="date" class="input input-sm" />
                          <span>to</span>
                          <input id="to_date" type="date" class="input input-sm" />
                        </div>
                        <!-- per‑page selector stays as‑is -->
                      </div>
                    
                  </div>
                  <div class="card-body" id="Ship_table_wrapper">
                      <div id="Ship_order_table">
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
                                                      Shipping ID
                                                  </span>
                                                  <span class="sort-icon">
                                                  </span>
                                              </span>
                                          </th>
                                          <th class="min-w-[60px]">
                                              <span class="sort">
                                                  <span class="sort-label font-normal text-gray-700">
                                                      Channel ID
                                                  </span>
                                                  <span class="sort-icon">
                                                  </span>
                                              </span>
                                          </th>
                                          <th class="min-w-[60px]">
                                              <span class="sort">
                                                  <span class="sort-label font-normal text-gray-700">
                                                      Order ID
                                                  </span>
                                                  <span class="sort-icon">
                                                  </span>
                                              </span>
                                          </th>
                                          <th class="min-w-[150px]">
                                              <span class="sort">
                                                  <span class="sort-label font-normal text-gray-700">
                                                      Customer Name
                                                  </span>
                                                  <span class="sort-icon">
                                                  </span>
                                              </span>
                                          </th>
                                          <th class="min-w-[180px]">
                                              <span class="sort asc">
                                                  <span class="sort-label font-normal text-gray-700">
                                                      Customer Email
                                                  </span>
                                                  <span class="sort-icon">
                                                  </span>
                                              </span>
                                          </th>
                                          <th class="min-w-[60px]">
                                              <span class="sort">
                                                  <span class="sort-label font-normal text-gray-700">
                                                      Payment Status
                                                  </span>
                                                  <span class="sort-icon">
                                                  </span>
                                              </span>
                                          </th>
                                          <th class="min-w-[60px]">
                                              <span class="sort">
                                                  <span class="sort-label font-normal text-gray-700">
                                                      Total
                                                  </span>
                                                  <span class="sort-icon">
                                                  </span>
                                              </span>
                                          </th>
                                          <th class="min-w-[60px]">
                                              <span class="sort">
                                                  <span class="sort-label font-normal text-gray-700">
                                                      Status
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
  /* ------------------ globals ------------------ */
  const ORDERS_API = "http://192.168.0.101:8000/api/admin/shiprocket/orders";

  let orderPage   = 1;
  let orderLimit  = 10;
  let orderSearch = "";
  let fromDate    = "";
  let toDate      = "";
  let currentOrderList = [];

  /* ------------------ fetch ------------------ */
  function fetchOrders(page = 1) {
    orderPage = page;
    const auth = localStorage.getItem("auth_token");
    const tbody = document.querySelector("#Ship_order_table tbody");   // reuse same table IDs
    const offsetLoader = `
      <tr>
        <td colspan="6" class="text-center py-4 text-gray-500">
          <svg class="animate-spin h-5 w-5 inline-block mr-2" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
          </svg> Loading orders…
        </td>
      </tr>`;
    tbody.innerHTML = offsetLoader;

    /* Build query‑string params */
    const params = new URLSearchParams();
    params.append("page", orderPage);
    params.append("per_page", orderLimit);
    if (orderSearch)  { params.append("filter_by", "order_id"); params.append("filter", orderSearch); }
    if (fromDate)     params.append("from_date", fromDate);
    if (toDate)       params.append("to_date", toDate);

    fetch(`${ORDERS_API}?${params.toString()}`, {
      headers: { Authorization: `Bearer ${auth}` }
    })
    .then(r => r.json())
    .then(res => {
      if (!res.success) throw new Error(res.message || "Load failed");
      currentOrderList = res.data.data || [];
      renderOrderTable(currentOrderList);
      setupOrderPagination(res.data.total || currentOrderList.length, orderLimit, orderPage);
    })
    .catch(err => {
      tbody.innerHTML = `<tr><td colspan="6" class="text-center text-red-500 py-4">${err.message}</td></tr>`;
    });
  }

  /* ------------------ render ------------------ */
  function renderOrderTable(arr) {
    const tbody = document.querySelector("#Ship_order_table tbody");
    tbody.innerHTML = arr.length
      ? arr.map(o => `
          <tr>
            <td class="text-center"><input type="checkbox" class="checkbox checkbox-sm" value="${o.id}"></td>
            <td>${o.id}</td>
            <td>${o.channel_id}</td>
            <td>${o.channel_order_id}</td>
            <td>${o.customer_name}</td>
            <td>${o.customer_email}</td>
            <td>${o.payment_status}</td>
            <td>₹${o.total}</td>
            <td>
              <span class="badge badge-primary badge-outline rounded-[30px]">
                  <span class="size-1.5 rounded-full bg-primary me-1.5"></span>
                    ${o.status}
              </span>
            </td>
            <td class="text-center">
              <div class="menu flex-inline" data-menu="true">
                  <div class="menu-item" data-menu-item-offset="0, 10px"
                      data-menu-item-placement="bottom-end"
                      data-menu-item-placement-rtl="bottom-start"
                      data-menu-item-toggle="dropdown"
                      data-menu-item-trigger="click|lg:click">
                      <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                          <i class="ki-filled ki-dots-vertical"></i>
                      </button>
                      <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                          <div class="menu-item"><a class="menu-link" href="#"><i class="ki-filled ki-search-list me-2"></i>View</a></div>
                          <div class="menu-item"><a class="menu-link" href="#"><i class="ki-filled ki-file-up me-2"></i>Export</a></div>
                          <div class="menu-separator"></div>
                          <div class="menu-item"><a class="menu-link" href="nxt-pages/update-product.php?name="><i class="ki-filled ki-pencil me-2"></i>Edit</a></div>
                          <div class="menu-item"><a class="menu-link" href="#"><i class="ki-filled ki-copy me-2"></i>Make a copy</a></div>
                          <div class="menu-item"><a class="menu-link" href="#"><i class="ki-filled ki-map me-2"></i>Track</a></div>
                          <div class="menu-separator"></div>
                          <div class="menu-item"><a class="menu-link text-danger" href="#"><i class="ki-filled ki-trash me-2"></i>Cancel</a></div>
                      </div>
                  </div>
              </div>
            </td>
            
          </tr>`).join("")
      : `<tr><td colspan="7" class="text-center py-4 text-gray-400">No orders found.</td></tr>`;
  }

  /* ------------------ pagination ------------------ */
  function setupOrderPagination(total, limit, current) {
    const pag  = document.querySelector("[data-datatable-pagination]");
    const info = document.querySelector("[data-datatable-info]");
    pag.innerHTML = "";
    const pages = Math.max(1, Math.ceil(total / limit));

    for (let i = 1; i <= pages; i++) {
      const b = document.createElement("button");
      b.className = `btn btn-sm ${i === current ? "active" : "btn-light"}`;
      b.textContent = i;
      b.onclick = () => fetchOrders(i);
      pag.appendChild(b);
    }
    if (info) info.textContent = `Page ${current} of ${pages}`;
  }

  /* ------------------ per‑page selector ------------------ */
  function initPerPage() {
    const sel = document.querySelector("[data-datatable-size]");
    [5,10,20,50].forEach(n => {
      const op = new Option(n, n, n === orderLimit, n === orderLimit);
      sel.appendChild(op);
    });
    sel.onchange = () => { orderLimit = +sel.value; fetchOrders(1); };
  }

  /* ------------------ event listeners ------------------ */
  document.addEventListener("DOMContentLoaded", () => {
    initPerPage();
    fetchOrders();

    // ✅ Correct input ID here:
    document.getElementById("order_search_input")?.addEventListener("input", e => {
      orderSearch = e.target.value.trim();
      fetchOrders(1);
    });

    // ✅ Already correct date listeners
    document.getElementById("from_date")?.addEventListener("change", e => {
      fromDate = e.target.value;
      fetchOrders(1);
    });

    document.getElementById("to_date")?.addEventListener("change", e => {
      toDate = e.target.value;
      fetchOrders(1);
    });
  });
</script>

<!-- 2. Stats + chart script -->
<script>
  console.log("✅ Stats script loaded");

  async function fetchShippingStats() {
    const token = localStorage.getItem("auth_token");
    console.log("📦 Token:", token);
    if (!token) { alert("Missing token in localStorage"); return; }

    try {
      console.log("🚀 Before fetch");
      const res = await fetch("http://192.168.0.101:8000/api/admin/shiprocket/stats", {
        headers: { Authorization: `Bearer ${token}` },
      });
      console.log("✅ After fetch (status: " + res.status + ")");

      const data = await res.json();
      console.log("📊 Stats Response:", data);

      if (!data.success) { throw new Error(data.message || "API returned success:false"); }

      /* ---- update cards ---- */
      document.getElementById("new_orders_count").textContent       = data.status_summary?.new       ?? 0;
      document.getElementById("cancelled_orders_count").textContent = data.status_summary?.cancelled ?? 0;
      document.getElementById("delivered_orders_count").textContent = data.status_summary?.delivered ?? 0;

      /* ---- build chart ---- */
      const labels = Object.keys(data.monthly_orders);
      const values = Object.values(data.monthly_orders).map(v => v ?? 0);

      const ctx = document.getElementById("monthlyOrderChart")?.getContext("2d");
      if (!ctx) { console.error("❌ Canvas not found"); return; }

      new Chart(ctx,{
        type:"bar",
        data:{ labels, datasets:[{ data: values, label:"Monthly Orders", backgroundColor:"#60a5fa"}] },
        options:{
          responsive:true,
          plugins:{ legend:{display:false}, title:{display:true,text:"Monthly Shipping Orders"} },
          scales:{ y:{beginAtZero:true,ticks:{stepSize:1}} }
        }
      });

    } catch (err) {
      console.error("❌ Stats Error:", err);
    }
  }

  fetchShippingStats();          /* direct call */
</script>

<!-- Footer -->
<?php include("../footer.php"); ?>