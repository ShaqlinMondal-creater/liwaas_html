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
                              Website Configure Section Datas
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
          <!-- Container -->
          <div class="container-fixed">
               <!-- begin: grid -->
               <div class="grid grid-cols-1 xl:grid-cols-3 gap-5 lg:gap-7.5">
                    <div class="col-span-2">
                         <div class="flex flex-col gap-5 lg:gap-7.5">
                              <div class="card card-grid min-w-full">
                                   <div class="card-header py-5 flex-wrap">
                                        <h3 class="card-title">
                                             Sections Data
                                        </h3>
                                        <label class="switch switch-sm">
                                             <span class="switch-label">
                                                  Cloud Sync
                                             </span>
                                             <input checked="" name="check" type="checkbox" value="1" />
                                        </label>
                                   </div>
                                   <div class="card-body">
                                        <div data-datatable="true" data-datatable-page-size="10">
                                             <div class="scrollable-x-auto">
                                                  <table class="table table-border"
                                                       data-datatable-table="true" id="backups_table">
                                                       <thead>
                                                            <tr>
                                                                 <th class="w-[60px]">
                                                                      <input class="checkbox checkbox-sm"
                                                                           data-datatable-check="true"
                                                                           type="checkbox" />
                                                                 </th>
                                                                 <th class="min-w-[260px]">
                                                                      <span class="sort asc">
                                                                           <span class="sort-label">
                                                                                Section Name
                                                                           </span>
                                                                           <span class="sort-icon">
                                                                           </span>
                                                                      </span>
                                                                 </th>
                                                                 <th class="min-w-[260px]">
                                                                      <span class="sort">
                                                                           <span class="sort-label">
                                                                                Details
                                                                           </span>
                                                                           <span class="sort-icon">
                                                                           </span>
                                                                      </span>
                                                                 </th>
                                                                 <th class="w-[100px]">
                                                                 </th>
                                                                 <th class="w-[100px]">
                                                                 </th>
                                                            </tr>
                                                       </thead>
                                                       <tbody>
                                                            <tr>
                                                                 <td>
                                                                      <input class="checkbox checkbox-sm"
                                                                           data-datatable-row-check="true"
                                                                           type="checkbox" value="1" />
                                                                 </td>
                                                                 <td>
                                                                      <div class="flex flex-col gap-1">
                                                                           <span
                                                                                class="leading-none font-medium text-sm text-gray-900">
                                                                                7 minutes ago
                                                                           </span>
                                                                           <span
                                                                                class="text-2sm text-gray-700 font-normal">
                                                                                24 Jan, 2024, 9:24:53 AM
                                                                           </span>
                                                                      </div>
                                                                 </td>
                                                                 <td>
                                                                      <div class="flex flex-col gap-1">
                                                                           <span
                                                                                class="leading-none font-medium text-sm text-gray-900">
                                                                                Routine Quick Backup
                                                                           </span>
                                                                           <span
                                                                                class="flex items-center gap-2 text-xs text-gray-600 font-normal">
                                                                                <span
                                                                                     class="flex items-center gap-1">
                                                                                     <i
                                                                                          class="ki-filled ki-files text-sm text-gray-500">
                                                                                     </i>
                                                                                     47 pages
                                                                                </span>
                                                                                <span
                                                                                     class="border-r border-r-gray-300 h-4">
                                                                                </span>
                                                                                <span
                                                                                     class="flex items-center gap-1">
                                                                                     <i
                                                                                          class="ki-filled ki-picture text-sm text-gray-500">
                                                                                     </i>
                                                                                     47 media
                                                                                </span>
                                                                           </span>
                                                                      </div>
                                                                 </td>
                                                                 <td>
                                                                      <a class="btn btn-sm btn-clear btn-light"
                                                                           href="#">
                                                                           Preview
                                                                      </a>
                                                                 </td>
                                                                 <td>
                                                                      <a class="btn btn-sm btn-light btn-outline"
                                                                           href="#">
                                                                           Restore
                                                                      </a>
                                                                 </td>
                                                            </tr>
                                                            <tr>
                                                                 <td>
                                                                      <input class="checkbox checkbox-sm"
                                                                           data-datatable-row-check="true"
                                                                           type="checkbox" value="2" />
                                                                 </td>
                                                                 <td>
                                                                      <div class="flex flex-col gap-1">
                                                                           <span
                                                                                class="leading-none font-medium text-sm text-gray-900">
                                                                                Today
                                                                           </span>
                                                                           <span
                                                                                class="text-2sm text-gray-700 font-normal">
                                                                                24 Jan, 2024, 2:09:26 AM
                                                                           </span>
                                                                      </div>
                                                                 </td>
                                                                 <td>
                                                                      <div class="flex flex-col gap-1">
                                                                           <span
                                                                                class="leading-none font-medium text-sm text-gray-900">
                                                                                Early Morning Sync
                                                                           </span>
                                                                           <span
                                                                                class="flex items-center gap-2 text-xs text-gray-600 font-normal">
                                                                                <span
                                                                                     class="flex items-center gap-1">
                                                                                     <i
                                                                                          class="ki-filled ki-files text-sm text-gray-500">
                                                                                     </i>
                                                                                     12 pages
                                                                                </span>
                                                                                <span
                                                                                     class="border-r border-r-gray-300 h-4">
                                                                                </span>
                                                                                <span
                                                                                     class="flex items-center gap-1">
                                                                                     <i
                                                                                          class="ki-filled ki-picture text-sm text-gray-500">
                                                                                     </i>
                                                                                     12 media
                                                                                </span>
                                                                           </span>
                                                                      </div>
                                                                 </td>
                                                                 <td>
                                                                      <a class="btn btn-sm btn-clear btn-light"
                                                                           href="#">
                                                                           Preview
                                                                      </a>
                                                                 </td>
                                                                 <td>
                                                                      <a class="btn btn-sm btn-light btn-outline"
                                                                           href="#">
                                                                           Restore
                                                                      </a>
                                                                 </td>
                                                            </tr>
                                                            <tr>
                                                                 <td>
                                                                      <input class="checkbox checkbox-sm"
                                                                           data-datatable-row-check="true"
                                                                           type="checkbox" value="3" />
                                                                 </td>
                                                                 <td>
                                                                      <div class="flex flex-col gap-1">
                                                                           <span
                                                                                class="leading-none font-medium text-sm text-gray-900">
                                                                                Today
                                                                           </span>
                                                                           <span
                                                                                class="text-2sm text-gray-700 font-normal">
                                                                                24 Jan, 2024, 2:09:26 AM
                                                                           </span>
                                                                      </div>
                                                                 </td>
                                                                 <td>
                                                                      <div class="flex flex-col gap-1">
                                                                           <span
                                                                                class="leading-none font-medium text-sm text-gray-900">
                                                                                Early Morning Sync
                                                                           </span>
                                                                           <span
                                                                                class="flex items-center gap-2 text-xs text-gray-600 font-normal">
                                                                                <span
                                                                                     class="flex items-center gap-1">
                                                                                     <i
                                                                                          class="ki-filled ki-files text-sm text-gray-500">
                                                                                     </i>
                                                                                     12 pages
                                                                                </span>
                                                                                <span
                                                                                     class="border-r border-r-gray-300 h-4">
                                                                                </span>
                                                                                <span
                                                                                     class="flex items-center gap-1">
                                                                                     <i
                                                                                          class="ki-filled ki-picture text-sm text-gray-500">
                                                                                     </i>
                                                                                     12 media
                                                                                </span>
                                                                           </span>
                                                                      </div>
                                                                 </td>
                                                                 <td>
                                                                      <a class="btn btn-sm btn-clear btn-light"
                                                                           href="#">
                                                                           Preview
                                                                      </a>
                                                                 </td>
                                                                 <td>
                                                                      <a class="btn btn-sm btn-light btn-outline"
                                                                           href="#">
                                                                           Restore
                                                                      </a>
                                                                 </td>
                                                            </tr>
                                                            <tr>
                                                                 <td>
                                                                      <input class="checkbox checkbox-sm"
                                                                           data-datatable-row-check="true"
                                                                           type="checkbox" value="4" />
                                                                 </td>
                                                                 <td>
                                                                      <div class="flex flex-col gap-1">
                                                                           <span
                                                                                class="leading-none font-medium text-sm text-gray-900">
                                                                                Today
                                                                           </span>
                                                                           <span
                                                                                class="text-2sm text-gray-700 font-normal">
                                                                                23 Jan, 2024, 9:24:53 AM
                                                                           </span>
                                                                      </div>
                                                                 </td>
                                                                 <td>
                                                                      <div class="flex flex-col gap-1">
                                                                           <span
                                                                                class="leading-none font-medium text-sm text-gray-900">
                                                                                End of Day Data Archive
                                                                           </span>
                                                                           <span
                                                                                class="flex items-center gap-2 text-xs text-gray-600 font-normal">
                                                                                <span
                                                                                     class="flex items-center gap-1">
                                                                                     <i
                                                                                          class="ki-filled ki-files text-sm text-gray-500">
                                                                                     </i>
                                                                                     8 pages
                                                                                </span>
                                                                                <span
                                                                                     class="border-r border-r-gray-300 h-4">
                                                                                </span>
                                                                                <span
                                                                                     class="flex items-center gap-1">
                                                                                     <i
                                                                                          class="ki-filled ki-picture text-sm text-gray-500">
                                                                                     </i>
                                                                                     8 media
                                                                                </span>
                                                                           </span>
                                                                      </div>
                                                                 </td>
                                                                 <td>
                                                                      <a class="btn btn-sm btn-clear btn-light"
                                                                           href="#">
                                                                           Preview
                                                                      </a>
                                                                 </td>
                                                                 <td>
                                                                      <a class="btn btn-sm btn-light btn-outline"
                                                                           href="#">
                                                                           Restore
                                                                      </a>
                                                                 </td>
                                                            </tr>
                                                            <tr>
                                                                 <td>
                                                                      <input class="checkbox checkbox-sm"
                                                                           data-datatable-row-check="true"
                                                                           type="checkbox" value="5" />
                                                                 </td>
                                                                 <td>
                                                                      <div class="flex flex-col gap-1">
                                                                           <span
                                                                                class="leading-none font-medium text-sm text-gray-900">
                                                                                Yesterday
                                                                           </span>
                                                                           <span
                                                                                class="text-2sm text-gray-700 font-normal">
                                                                                23 Jan, 2024, 9:24:53 AM
                                                                           </span>
                                                                      </div>
                                                                 </td>
                                                                 <td>
                                                                      <div class="flex flex-col gap-1">
                                                                           <span
                                                                                class="leading-none font-medium text-sm text-gray-900">
                                                                                End of Day Data Archive
                                                                           </span>
                                                                           <span
                                                                                class="flex items-center gap-2 text-xs text-gray-600 font-normal">
                                                                                <span
                                                                                     class="flex items-center gap-1">
                                                                                     <i
                                                                                          class="ki-filled ki-files text-sm text-gray-500">
                                                                                     </i>
                                                                                     8 pages
                                                                                </span>
                                                                                <span
                                                                                     class="border-r border-r-gray-300 h-4">
                                                                                </span>
                                                                                <span
                                                                                     class="flex items-center gap-1">
                                                                                     <i
                                                                                          class="ki-filled ki-picture text-sm text-gray-500">
                                                                                     </i>
                                                                                     8 media
                                                                                </span>
                                                                           </span>
                                                                      </div>
                                                                 </td>
                                                                 <td>
                                                                      <a class="btn btn-sm btn-clear btn-light"
                                                                           href="#">
                                                                           Preview
                                                                      </a>
                                                                 </td>
                                                                 <td>
                                                                      <a class="btn btn-sm btn-light btn-outline"
                                                                           href="#">
                                                                           Restore
                                                                      </a>
                                                                 </td>
                                                            </tr>                                                            
                                                       </tbody>
                                                  </table>
                                             </div>
                                             <div
                                                  class="card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium">
                                                  <div class="flex items-center gap-2 order-2 md:order-1">
                                                       Show
                                                       <select class="select select-sm w-16"
                                                            data-datatable-size="true" name="perpage">
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
                    <div class="col-span-1">
                         <div class="flex flex-col gap-5 lg:gap-7.5">
                              <div class="card">
                                   <div class="card-header mb-1">
                                        <h3 class="card-title">
                                             Backup Settings
                                        </h3>
                                   </div>
                                   <div class="card-group flex items-center justify-between py-4 gap-2.5">
                                        <div class="flex flex-col justify-center gap-1.5">
                                             <span class="leading-none font-medium text-sm text-gray-900">
                                                  Automatic Backup
                                             </span>
                                             <span class="text-2sm text-gray-700">
                                                  Scheduled Data Protection
                                             </span>
                                        </div>
                                        <label class="switch switch-sm">
                                             <input checked="" class="order-2" name="check" type="checkbox"
                                                  value="1" />
                                        </label>
                                   </div>
                                   <div class="card-group flex items-center justify-between py-4 gap-2.5">
                                        <div class="flex flex-col justify-center gap-1.5">
                                             <span class="leading-none font-medium text-sm text-gray-900">
                                                  Backup Frequency
                                             </span>
                                             <span class="text-2sm text-gray-700">
                                                  Select Preferred Backup
                                             </span>
                                        </div>
                                        <select class="select select-sm max-w-24">
                                             <option value="daily">
                                                  Daily
                                             </option>
                                             <option selected="" value="weekly">
                                                  Weekly
                                             </option>
                                             <option value="monthly">
                                                  Monthly
                                             </option>
                                             <option value="yearly">
                                                  Yearly
                                             </option>
                                        </select>
                                   </div>
                                   <div class="card-group flex items-center justify-between py-4 gap-2.5">
                                        <div class="flex flex-col justify-center gap-1.5">
                                             <span class="leading-none font-medium text-sm text-gray-900">
                                                  Manual Backup
                                             </span>
                                             <span class="text-2sm text-gray-700">
                                                  Backup When Needed
                                             </span>
                                        </div>
                                        <a class="btn btn-sm btn-light btn-outline" href="#">
                                             Start
                                        </a>
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
<!-- Footer -->
<?php include("../footer.php"); ?>