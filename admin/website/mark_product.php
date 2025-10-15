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
               <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
                    <div class="flex flex-col justify-center gap-2">
                         <h1 class="text-xl font-medium leading-none text-gray-900">
                              Mark Product Section Datas
                         </h1>
                         <div class="flex items-center gap-2 text-sm font-normal text-gray-700">
                              Central Hub for Section Data Customization
                         </div>
                    </div>
                    <div class="flex items-center gap-2.5">
                         <a class="btn btn-sm btn-light" href="website/marked_section_data.php">
                              Marked Section Datas ->
                         </a>
                    </div>
               </div>
          </div>
          <!-- End of Container -->
          <!-- Section Product Container -->
          <div class="container-fixed">
               <!-- begin: grid -->
               <div class="grid grid-cols-1 xl:grid-cols-1 gap-5 lg:gap-7.5">
                    <!-- Marked Products Container -->
                    <div class="col-span-1">
                         <div class="flex flex-col gap-5 lg:gap-7.5">
                              <div class="card card-grid min-w-full">
                                   <div class="card-header py-5 flex-wrap">
                                   <h3 class="card-title">
                                        Section Product Status
                                   </h3>
                                   <div class="flex items-center gap-2.5">
                                        <label class="switch switch-sm status_check">
                                             <span class="switch-label">
                                                  Status
                                             </span>
                                             <input checked="" name="check" type="checkbox" value="1" />
                                        </label> 
                                        <div class="flex flex-wrap gap-2.5">
                                             <select class="select select-sm w-36" id="filter-active">
                                                  <option value="">Select Section</option>
                                                  <option value="New Arrival">New Arrival</option>
                                                  <option value="Trending">Trending</option>
                                                  <option value="gallery">Gallery</option>
                                                  <option value="Category Wise">Category Wise</option>
                                             </select>
                                        </div>                                                                                        
                                        <div class="flex">
                                             <label class="input input-sm">
                                                  <i class="ki-filled ki-magnifier">
                                                  </i>
                                                  <input data-datatable-search="#search_section_table" placeholder="Search Products"
                                                       type="text" value="">
                                                  </input>
                                             </label>
                                        </div>                                            
                                        <button id="apply-filters" class="btn btn-sm btn-outline btn-primary">
                                             <i class="ki-filled ki-setting-4"></i>
                                             Apply
                                        </button>

                                        <a class="btn btn-sm btn-danger" href="#">
                                             Import in DB
                                        </a>
                                   </div>
                                   </div>
                                   <div class="card-body">
                                   <div class="scrollable-x-auto">
                                        <table class="table table-border" data-datatable-table="true" id="category_wise_table">
                                             <thead>
                                                  <tr>
                                                       <th class="w-[40px]">
                                                            <input class="checkbox checkbox-sm"
                                                            data-datatable-check="true"
                                                            type="checkbox" />
                                                       </th>
                                                       <th class="min-w-[140px]">
                                                            <span class="sort asc">
                                                                 <span class="sort-label">
                                                                      Section
                                                                 </span>
                                                                 <span class="sort-icon">
                                                                 </span>
                                                            </span>
                                                       </th>
                                                       <th class="min-w-[160px]">
                                                            <span class="sort">
                                                                 <span class="sort-label">
                                                                      Product
                                                                 </span>
                                                                 <span class="sort-icon">
                                                                 </span>
                                                            </span>
                                                       </th>
                                                       <th class="min-w-[160px]">
                                                            <span class="sort">
                                                                 <span class="sort-label">
                                                                      Variant
                                                                 </span>
                                                                 <span class="sort-icon">
                                                                 </span>
                                                            </span>
                                                       </th>
                                                       <th class="w-[140px]">
                                                            Category
                                                       </th>
                                                       <th class="w-[140px]">
                                                            Brand
                                                       </th>
                                                       <th class="w-[140px]">
                                                            Price
                                                       </th>
                                                       <th class="w-[140px]">
                                                            Actions
                                                       </th>
                                                       <th class="w-[140px]">
                                                            
                                                       </th>
                                                       <th class="w-[100px]">
                                                            Remove
                                                       </th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <!-- <tr>
                                                       <td>
                                                            <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="1" />
                                                       </td>
                                                       <td>
                                                            <div class="flex flex-col gap-1">
                                                                 <span class="leading-none font-medium text-sm text-gray-900">
                                                                      Section Name
                                                                 </span>
                                                                 <span class="text-2sm text-gray-700 font-normal">
                                                                      Section ID: 2
                                                                 </span>
                                                            </div>
                                                       </td>
                                                       <td>
                                                            <div class="flex flex-col gap-1">
                                                                 <span class="leading-none font-medium text-sm text-gray-900">
                                                                      Product Name
                                                                 </span>
                                                                 <span class="flex items-center gap-2 text-xs text-gray-600 font-normal">
                                                                      <span class="flex items-center gap-1">
                                                                           AID - L47
                                                                      </span>
                                                                      <span
                                                                           class="border-r border-r-gray-300 h-4">
                                                                      </span>
                                                                      <span class="flex items-center gap-1">
                                                                           UID - 047
                                                                      </span>
                                                                 </span>
                                                            </div>
                                                       </td>
                                                       <td>
                                                            <div class="flex flex-col gap-1">
                                                                 <span class="leading-none font-medium text-sm text-gray-900">
                                                                      Variant ID: 7
                                                                 </span>
                                                                 <span class="flex items-center gap-2 text-xs text-gray-600 font-normal">
                                                                      <span class="flex items-center gap-1">
                                                                           Color - Red
                                                                      </span>
                                                                      <span
                                                                           class="border-r border-r-gray-300 h-4">
                                                                      </span>
                                                                      <span class="flex items-center gap-1">
                                                                           Size - L
                                                                      </span>
                                                                 </span>
                                                            </div>
                                                       </td>
                                                       <td>
                                                            <div class="flex flex-col gap-1">
                                                                 <span class="leading-none font-medium text-sm text-gray-900">
                                                                      Category Name
                                                                 </span>
                                                            </div>
                                                       </td>
                                                       <td>
                                                            <div class="flex flex-col gap-1">
                                                                 <span class="leading-none font-medium text-sm text-gray-900">
                                                                      Brand Name
                                                                 </span>
                                                            </div>
                                                       </td>
                                                       <td>
                                                            <div class="flex flex-col gap-1">
                                                                 <span class="flex flex-col gap-2 text-xs text-gray-600 font-normal">
                                                                      <span class="flex  gap-1">
                                                                           Sale Price - Rs. 599/-
                                                                      </span>
                                                                      <span class="flex gap-1">
                                                                           Regular Price - Rs. 799/-
                                                                      </span>
                                                                 </span>
                                                            </div>
                                                       </td>
                                                       <td>
                                                            <label class="switch switch-sm">
                                                                 <span class="switch-label">
                                                                      Status
                                                                 </span>
                                                                 <input checked="" name="check" type="checkbox" value="1" />
                                                            </label> 
                                                       </td>
                                                       <td>
                                                            <label class="switch switch-sm">
                                                                 <span class="switch-label">
                                                                      Force Status
                                                                 </span>
                                                                 <input checked="" name="check" type="checkbox" value="1" />
                                                            </label> 
                                                       </td>
                                                  </tr> -->
                                             </tbody>
                                        </table>
                                   </div>
                                   <div class="card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium">
                                        <div class="flex items-center gap-2 order-2 md:order-1">
                                             Show
                                             <select class="select select-sm w-16" data-datatable-size="true" name="perpage">
                                             </select>
                                             per page
                                        </div>
                                        <div class="flex items-center gap-4 order-1 md:order-2">
                                             <span data-datatable-info="true">
                                             </span>
                                             <div class="pagination"
                                                       data-datatable-pagination="true">
                                             </div>
                                        </div>
                                   </div>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
               <!-- end: grid -->
          </div>
          <!-- End of Container -->
     </main>
     <!-- End of Content -->


<!-- Fetch Section Products -->
<script>
     document.addEventListener("DOMContentLoaded", function () {
          fetchSectionProducts({ section_name: ""});
     });

     document.getElementById('apply-filters').addEventListener('click', function () {
          const sectionName = document.getElementById('filter-active').value;
          const statusCheck = document.querySelector('.status_check input[type="checkbox"]');
          const status = statusCheck?.checked ?? null;

          // if (!sectionName) return;

          const payload = {
               section_name: sectionName || "",
               limit: 100,
               offset: 0
          };

          if (statusCheck) {
               payload.status = status;
          }
          fetchSectionProducts(payload);
     });

     // ✅ Fetch & populate section product data
     function fetchSectionProducts(payload) {
          const tableBody = document.querySelector('#category_wise_table tbody');
          tableBody.innerHTML = `<tr><td colspan="9" class="text-center py-4 text-sm text-gray-500">Loading...</td></tr>`;
          const authToken = localStorage.getItem('auth_token');

          fetch(`<?= $baseUrl ?>/api/sections/getsections-products`, {
               method: 'POST',
               headers: {
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${authToken}`
               },
               body: JSON.stringify(payload)
          })
          .then(res => res.json())
          .then(response => {
               if (response.success && Array.isArray(response.data)) {
                    if (response.data.length > 0) {
                         populateSectionTable(response.data);
                    } else {
                         tableBody.innerHTML = `<tr><td colspan="9" class="text-center py-4 text-sm text-gray-500">No records found.</td></tr>`;
                    }
               } else {
                    tableBody.innerHTML = `<tr><td colspan="9" class="text-center py-4 text-sm text-gray-500">No records found.</td></tr>`;
               }
          })
          .catch(err => {
               console.error("Fetch error:", err);
               tableBody.innerHTML = `<tr><td colspan="9" class="text-center py-4 text-sm text-red-500">Error fetching data.</td></tr>`;
          });
     }

     // ✅ Render section product rows
     function populateSectionTable(data) {
          const tableBody = document.querySelector('#category_wise_table tbody');
          tableBody.innerHTML = '';

          data.forEach(item => {
               const section = item.section;
               const product = item.product;
               const variation = product.variation;
               const category = product.category?.name ?? 'N/A';
               const brand = product.brand?.name ?? 'N/A';

               const row = document.createElement('tr');
                    row.innerHTML = `
                         <td>
                              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="${variation.uid}" />
                         </td>
                         <td>
                              <div class="flex flex-col gap-1">
                                   <span class="leading-none font-medium text-sm text-gray-900">${section.section_name}</span>
                                   <span class="text-2sm text-gray-700 font-normal">Section ID: ${section.id}</span>
                              </div>
                         </td>
                         <td>
                              <div class="flex flex-col gap-1">
                                   <span class="leading-none font-medium text-sm text-gray-900">${product.name}</span>
                                   <span class="flex items-center gap-2 text-xs text-gray-600 font-normal">
                                   <span class="flex items-center gap-1">AID - ${product.aid}</span>
                                   <span class="border-r border-r-gray-300 h-4"></span>
                                   <span class="flex items-center gap-1">UID - ${variation.uid}</span>
                                   </span>
                              </div>
                         </td>
                         <td>
                              <div class="flex flex-col gap-1">
                                   <span class="leading-none font-medium text-sm text-gray-900">Variant ID: ${variation.id}</span>
                                   <span class="flex items-center gap-2 text-xs text-gray-600 font-normal">
                                   <span class="flex items-center gap-1">Color - ${variation.color}</span>
                                   <span class="border-r border-r-gray-300 h-4"></span>
                                   <span class="flex items-center gap-1">Size - ${variation.size}</span>
                                   </span>
                              </div>
                         </td>
                         <td>
                              <div class="flex flex-col gap-1">
                                   <span class="leading-none font-medium text-sm text-gray-900">${category}</span>
                              </div>
                         </td>
                         <td>
                              <div class="flex flex-col gap-1">
                                   <span class="leading-none font-medium text-sm text-gray-900">${brand}</span>
                              </div>
                         </td>
                         <td>
                              <div class="flex flex-col gap-1">
                                   <span class="flex flex-col gap-2 text-xs text-gray-600 font-normal">
                                   <span class="flex gap-1">Sale Price - Rs. ${variation.sell_price}/-</span>
                                   <span class="flex gap-1">Regular Price - Rs. ${variation.regular_price}/-</span>
                                   </span>
                              </div>
                         </td>
                         <td>
                              <label class="switch switch-sm">
                                   <span class="switch-label">Status</span>
                                   <input type="checkbox" ${section.status ? 'checked' : ''} data-section-id="${section.id}" class="status-toggle" />
                              </label>
                         </td>
                         <td>
                              <label class="switch switch-sm">
                                   <span class="switch-label">Force Status</span>
                                   <input type="checkbox" ${section.force_status ? 'checked' : ''} data-section-id="${section.id}" class="force-status-toggle" />
                              </label>
                         </td>
                         <td>
                              <button class="btn btn-sm btn-warning btn-outline remove-section" data-uid="${section.id}">
                                   Remove
                              </button>
                         </td>
                    `;

               tableBody.appendChild(row);
          });

          // ✅ Attach toggle listeners after rows are created
          attachToggleHandlers();
          attachDeleteHandlers(); // ✅ To activate the remove buttons
     }

     // ✅ Attach handlers to switches
     function attachToggleHandlers() {
          document.querySelectorAll('.status-toggle').forEach(input => {
               input.addEventListener('change', function () {
                    const sectionId = this.getAttribute('data-section-id');
                    const newStatus = this.checked;
                    const forceStatus = this.closest('tr').querySelector('.force-status-toggle')?.checked ?? false;

                    updateSectionStatus(sectionId, newStatus, forceStatus);
               });
          });

          document.querySelectorAll('.force-status-toggle').forEach(input => {
               input.addEventListener('change', function () {
                    const sectionId = this.getAttribute('data-section-id');
                    const newForceStatus = this.checked;
                    const status = this.closest('tr').querySelector('.status-toggle')?.checked ?? false;

                    updateSectionStatus(sectionId, status, newForceStatus);
               });
          });
     }

     // ✅ Send upadte functionality For delete section products
     function updateSectionStatus(sectionId, status, force_status) {
          const sauthToken = localStorage.getItem('auth_token');
          fetch(`<?= $baseUrl ?>/api/admin/sections/update/${sectionId}`, {
               method: 'PUT',
               headers: {
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${sauthToken}`
               },
               body: JSON.stringify({
                    status: status,
                    force_status: force_status
               })
          })
          .then(res => res.json())
          .then(response => {
               if (response.success) {
                    Swal.fire({
                         icon: 'success',
                         title: 'Updated',
                         text: 'Section updated successfully!',
                         timer: 1500,
                         showConfirmButton: false
                    });
               } else {
                    Swal.fire({
                         icon: 'error',
                         title: 'Update Failed',
                         text: response.message || 'Unknown error'
                    });
               }
          })
          .catch(error => {
               console.error('Status update failed:', error);
               Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Something went wrong. Please try again.'
               });
          });
     }

     // ✅ Attach delete functionality For delete section products
     function deleteSection(sectionId) {
          const dauthToken = localStorage.getItem('auth_token');
          fetch(`<?= $baseUrl ?>/api/admin/sections/delete/${sectionId}`, {
               method: 'DELETE',
               headers: {
                    'Authorization': `Bearer ${dauthToken}`
               }
          })
          .then(res => res.json())
          .then(response => {
               if (response.success) {
                    Swal.fire({
                         icon: 'success',
                         title: 'Deleted!',
                         text: response.message || 'Section deleted successfully.',
                         timer: 1500,
                         showConfirmButton: false
                    });

                    // Refresh the table (optional — you may already have this)
                    fetchSectionProducts({
                         section_name: document.getElementById('filter-active').value || '',
                         limit: 12,
                         offset: 0
                    });
               } else {
                    Swal.fire({
                         icon: 'error',
                         title: 'Failed!',
                         text: response.message || 'Could not delete section.'
                    });
               }
          })
          .catch(error => {
               console.error('Delete section error:', error);
               Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Something went wrong while deleting.'
               });
          });
     }
     function attachDeleteHandlers() {
          document.querySelectorAll('.remove-section').forEach(button => {
               button.addEventListener('click', function () {
                    const sectionId = this.getAttribute('data-uid');

                    Swal.fire({
                         title: 'Are you sure?',
                         text: 'This will permanently remove the section.',
                         icon: 'warning',
                         showCancelButton: true,
                         confirmButtonColor: '#e3342f',
                         cancelButtonColor: '#6c757d',
                         confirmButtonText: 'Yes, delete it!',
                         cancelButtonText: 'Cancel'
                    }).then(result => {
                         if (result.isConfirmed) {
                              deleteSection(sectionId);
                         }
                    });
               });
          });
     }

</script>

<!-- Footer -->
<?php include("../footer.php"); ?>