<base href="../">
<?php include("../header.php"); ?>
     <!-- End of Header -->
     <!-- Content -->
     <main class="grow content pt-5" id="content" role="content">
          <!-- Container -->
          <div class="container-fixed" id="content_container">
          </div>
          <!-- End of Container -->
          <style>
               .hero-bg {
                    background-image: url('assets/media/images/2600x1200/bg-1.png');
               }

               .dark .hero-bg {
                    background-image: url('assets/media/images/2600x1200/bg-1-dark.png');
               }
          </style>
          <div class="bg-center bg-cover bg-no-repeat hero-bg">
                <!-- Container -->
                <div class="container-fixed">
                        <div class="flex flex-col items-center gap-2 lg:gap-3.5 py-4 lg:pt-5 lg:pb-10">
                            <div
                                class="flex items-center justify-center rounded-full  size-[120px] shrink-0 bg-light">
                                <img class="size-[40px]" src="<?php echo $baseLogo; ?>" />
                            </div>
                            <div class="flex items-center gap-1.5">
                                <div class="text-lg leading-5 font-semibold text-gray-900">
                                    <?php echo $baseName; ?>
                                </div>
                                <svg class="text-primary" fill="none" height="16" viewbox="0 0 15 16" width="15"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.5425 6.89749L13.5 5.83999C13.4273 5.76877 13.3699 5.6835 13.3312 5.58937C13.2925 5.49525 13.2734 5.39424 13.275 5.29249V3.79249C13.274 3.58699 13.2324 3.38371 13.1527 3.19432C13.0729 3.00494 12.9565 2.83318 12.8101 2.68892C12.6638 2.54466 12.4904 2.43073 12.2998 2.35369C12.1093 2.27665 11.9055 2.23801 11.7 2.23999H10.2C10.0982 2.24159 9.99722 2.22247 9.9031 2.18378C9.80898 2.1451 9.72371 2.08767 9.65249 2.01499L8.60249 0.957487C8.30998 0.665289 7.91344 0.50116 7.49999 0.50116C7.08654 0.50116 6.68999 0.665289 6.39749 0.957487L5.33999 1.99999C5.26876 2.07267 5.1835 2.1301 5.08937 2.16879C4.99525 2.20747 4.89424 2.22659 4.79249 2.22499H3.29249C3.08699 2.22597 2.88371 2.26754 2.69432 2.34731C2.50494 2.42709 2.33318 2.54349 2.18892 2.68985C2.04466 2.8362 1.93073 3.00961 1.85369 3.20013C1.77665 3.39064 1.73801 3.5945 1.73999 3.79999V5.29999C1.74159 5.40174 1.72247 5.50275 1.68378 5.59687C1.6451 5.691 1.58767 5.77627 1.51499 5.84749L0.457487 6.89749C0.165289 7.19 0.00115967 7.58654 0.00115967 7.99999C0.00115967 8.41344 0.165289 8.80998 0.457487 9.10249L1.49999 10.16C1.57267 10.2312 1.6301 10.3165 1.66878 10.4106C1.70747 10.5047 1.72659 10.6057 1.72499 10.7075V12.2075C1.72597 12.413 1.76754 12.6163 1.84731 12.8056C1.92709 12.995 2.04349 13.1668 2.18985 13.3111C2.3362 13.4553 2.50961 13.5692 2.70013 13.6463C2.89064 13.7233 3.0945 13.762 3.29999 13.76H4.79999C4.90174 13.7584 5.00275 13.7775 5.09687 13.8162C5.191 13.8549 5.27627 13.9123 5.34749 13.985L6.40499 15.0425C6.69749 15.3347 7.09404 15.4988 7.50749 15.4988C7.92094 15.4988 8.31748 15.3347 8.60999 15.0425L9.65999 14C9.73121 13.9273 9.81647 13.8699 9.9106 13.8312C10.0047 13.7925 10.1057 13.7734 10.2075 13.775H11.7075C12.1212 13.775 12.518 13.6106 12.8106 13.3181C13.1031 13.0255 13.2675 12.6287 13.2675 12.215V10.715C13.2659 10.6132 13.285 10.5122 13.3237 10.4181C13.3624 10.324 13.4198 10.2387 13.4925 10.1675L14.55 9.10999C14.6953 8.96452 14.8104 8.79176 14.8887 8.60164C14.9671 8.41152 15.007 8.20779 15.0063 8.00218C15.0056 7.79656 14.9643 7.59311 14.8847 7.40353C14.8051 7.21394 14.6888 7.04197 14.5425 6.89749ZM10.635 6.64999L6.95249 10.25C6.90055 10.3026 6.83864 10.3443 6.77038 10.3726C6.70212 10.4009 6.62889 10.4153 6.55499 10.415C6.48062 10.4139 6.40719 10.3982 6.33896 10.3685C6.27073 10.3389 6.20905 10.2961 6.15749 10.2425L4.37999 8.44249C4.32532 8.39044 4.28169 8.32793 4.25169 8.25867C4.22169 8.18941 4.20593 8.11482 4.20536 8.03934C4.20479 7.96387 4.21941 7.88905 4.24836 7.81934C4.27731 7.74964 4.31999 7.68647 4.37387 7.63361C4.42774 7.58074 4.4917 7.53926 4.56194 7.51163C4.63218 7.484 4.70726 7.47079 4.78271 7.47278C4.85816 7.47478 4.93244 7.49194 5.00112 7.52324C5.0698 7.55454 5.13148 7.59935 5.18249 7.65499L6.56249 9.05749L9.84749 5.84749C9.95296 5.74215 10.0959 5.68298 10.245 5.68298C10.394 5.68298 10.537 5.74215 10.6425 5.84749C10.6953 5.90034 10.737 5.96318 10.7653 6.03234C10.7935 6.1015 10.8077 6.1756 10.807 6.25031C10.8063 6.32502 10.7908 6.39884 10.7612 6.46746C10.7317 6.53608 10.6888 6.59813 10.635 6.64999Z"
                                            fill="currentColor">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex flex-wrap justify-center gap-1 lg:gap-4.5 text-sm">
                                <div class="flex gap-1.25 items-center">
                                    <i class="ki-filled ki-abstract-41 text-gray-500 text-sm">
                                    </i>
                                    <span class="text-gray-600 font-medium">
                                            Public Company
                                    </span>
                                </div>
                                <div class="flex gap-1.25 items-center">
                                    <i class="ki-filled ki-geolocation text-gray-500 text-sm">
                                    </i>
                                    <span class="text-gray-600 font-medium">
                                            <?php echo $baseAddress; ?>
                                    </span>
                                </div>
                                <div class="flex gap-1.25 items-center">
                                    <i class="ki-filled ki-sms text-gray-500 text-sm">
                                    </i>
                                    <a class="text-gray-600 font-medium hover:text-primary"
                                            href="mailto: <?php echo $baseEmail; ?>">
                                            <?php echo $baseEmail; ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- End of Container -->
          </div>
          <!-- Container -->
          <div class="container-fixed">
               <div
                    class="flex items-center flex-wrap md:flex-nowrap lg:items-end justify-between border-b border-b-gray-200 dark:border-b-coal-100 gap-3 lg:gap-6 mb-5 lg:mb-10">
                    <div class="grid">
                        <div class="scrollable-x-auto">
                            <div class="menu gap-3" data-menu="true">                                   
                                <div
                                    class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary">
                                    <a class="menu-link gap-1.5 pb-2 lg:pb-4 px-2"
                                            href="html/demo1/public-profile/works.html">
                                            <span
                                                class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
                                                Works
                                            </span>
                                    </a>
                                </div>
                                <div
                                    class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary">
                                    <a class="menu-link gap-1.5 pb-2 lg:pb-4 px-2"
                                            href="html/demo1/public-profile/teams.html">
                                            <span
                                                class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
                                                Teams
                                            </span>
                                    </a>
                                </div>
                                <div
                                    class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary">
                                    <a class="menu-link gap-1.5 pb-2 lg:pb-4 px-2"
                                            href="html/demo1/public-profile/network.html">
                                            <span
                                                class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
                                                Network
                                            </span>
                                    </a>
                                </div>
                                <div
                                    class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary">
                                    <a class="menu-link gap-1.5 pb-2 lg:pb-4 px-2"
                                            href="html/demo1/public-profile/activity.html">
                                            <span
                                                class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
                                                Activity
                                            </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-end grow lg:grow-0 lg:pb-4 gap-2.5 mb-3 lg:mb-0">
                         <div class="dropdown" data-dropdown="true" data-dropdown-placement="bottom-end"
                              data-dropdown-placement-rtl="bottom-start" data-dropdown-trigger="click">
                              <button class="dropdown-toggle btn btn-sm btn-icon btn-light">
                                   <i class="ki-filled ki-dots-vertical">
                                   </i>
                              </button>
                              <div class="dropdown-content menu-default w-full max-w-[220px]">
                                   <div class="menu-item" data-dropdown-dismiss="true">
                                        <button class="menu-link" data-modal-toggle="#share_profile_modal">
                                             <span class="menu-icon">
                                                  <i class="ki-filled ki-coffee">
                                                  </i>
                                             </span>
                                             <span class="menu-title">
                                                  Share Profile
                                             </span>
                                        </button>
                                   </div>
                                   <div class="menu-item" data-dropdown-dismiss="true">
                                        <button class="menu-link">
                                             <span class="menu-icon">
                                                  <i class="ki-filled ki-chart-line">
                                                  </i>
                                             </span>
                                             <span class="menu-title">
                                                  Stay Updated
                                             </span>
                                             <label class="switch switch-sm">
                                                  <input name="check" type="checkbox" value="1">
                                                  </input>
                                             </label>
                                        </button>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <!-- End of Container -->
          <!-- Container -->
          <div class="container-fixed">
               <!-- begin: grid -->
               <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 lg:gap-7.5">
                    <div class="col-span-1 lg:col-span-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="flex lg:px-10 py-1.5 gap-2">
                                    <div
                                            class="grid grid-cols-1 place-content-center flex-1 gap-1 text-center">
                                            <span
                                                class="text-gray-900 text-2xl lg:text-2.5xl leading-none font-semibold">
                                                04
                                            </span>
                                            <span class="text-gray-700 text-sm">
                                                Slider
                                            </span>
                                    </div>
                                    <span class="[&:not(:last-child)]:border-e border-e-gray-300 my-1">
                                    </span>
                                    <div
                                            class="grid grid-cols-1 place-content-center flex-1 gap-1 text-center">
                                            <span
                                                class="text-gray-900 text-2xl lg:text-2.5xl leading-none font-semibold">
                                                29
                                            </span>
                                            <span class="text-gray-700 text-sm">
                                                Banner
                                            </span>
                                    </div>
                                    <span class="[&:not(:last-child)]:border-e border-e-gray-300 my-1">
                                    </span>
                                    <div
                                            class="grid grid-cols-1 place-content-center flex-1 gap-1 text-center">
                                            <span
                                                class="text-gray-900 text-2xl lg:text-2.5xl leading-none font-semibold">
                                                25
                                            </span>
                                            <span class="text-gray-700 text-sm">
                                                Offers
                                            </span>
                                    </div>
                                    <span class="[&:not(:last-child)]:border-e border-e-gray-300 my-1">
                                    </span>
                                    <div
                                            class="grid grid-cols-1 place-content-center flex-1 gap-1 text-center">
                                            <span
                                                class="text-gray-900 text-2xl lg:text-2.5xl leading-none font-semibold">
                                                13
                                            </span>
                                            <span class="text-gray-700 text-sm">
                                                Discount
                                            </span>
                                    </div>
                                    <span class="[&:not(:last-child)]:border-e border-e-gray-300 my-1">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1 lg:col-span-3">
                        <div class="flex flex-col gap-5 lg:gap-7.5">
                            <div class="card add_extras">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Extras
                                    </h3>
                                    <div class="flex flex-wrap gap-2 lg:gap-5">
                                        <div class="flex">
                                            <label class="input input-sm">
                                                <i class="ki-filled ki-magnifier">
                                                </i>
                                                <input data-datatable-search="#extras_search" placeholder="Search Extras"
                                                    type="text" value="">
                                                </input>
                                            </label>
                                        </div>
                                        <div class="flex flex-wrap gap-2.5">
                                            <select class="select select-sm w-28" id="filter-loggedin">
                                                <option value="">Select Status</option>
                                                <option value="1">Active</option>
                                                <option value="0">De-Active</option>
                                            </select>
                                        </div>
                                        <button class="btn btn-success btn-sm">
                                            <i class="ki-filled ki-geolocation">
                                            </i>
                                            Add Extras
                                    </button>
                                    </div>
                                    
                                </div>
                                <div class="card-body p-5 lg:p-7.5 lg:pb-7">
                                    <div class="flex gap-5 scrollable-x">
                                            <div class="card shadow-none w-[280px] border-0 mb-4">
                                                <img alt="" class="rounded-t-xl max-w-[280px] shrink-0"
                                                    src="assets/media/images/600x400/10.jpg" />
                                                <div
                                                    class="card-border card-rounded-b px-3.5 h-full pt-3 pb-3.5">
                                                    <a class="font-medium block text-gray-900 hover:text-primary text-md mb-2"
                                                        href="#">
                                                        Duolingo Tech Hub
                                                    </a>
                                                    <p class="text-2sm text-gray-700">
                                                        456 Innovation Street, Floor 6, Techland, New York
                                                        54321
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card shadow-none w-[280px] border-0 mb-4">
                                                <img alt="" class="rounded-t-xl max-w-[280px] shrink-0"
                                                    src="assets/media/images/600x400/11.jpg" />
                                                <div
                                                    class="card-border card-rounded-b px-3.5 h-full pt-3 pb-3.5">
                                                    <a class="font-medium block text-gray-900 hover:text-primary text-md mb-2"
                                                        href="#">
                                                        Duolingo Language Lab
                                                    </a>
                                                    <p class="text-2sm text-gray-700">
                                                        789 Learning Lane, 3rd Floor, Lingoville, Texas
                                                        98765
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card shadow-none w-[280px] border-0 mb-4">
                                                <img alt="" class="rounded-t-xl max-w-[280px] shrink-0"
                                                    src="assets/media/images/600x400/12.jpg" />
                                                <div
                                                    class="card-border card-rounded-b px-3.5 h-full pt-3 pb-3.5">
                                                    <a class="font-medium block text-gray-900 hover:text-primary text-md mb-2"
                                                        href="#">
                                                        Duolingo Research Institute
                                                    </a>
                                                    <p class="text-2sm text-gray-700">
                                                        246 Innovation Road, Research Wing, Innovacity,
                                                        Arizona 13579
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card shadow-none w-[280px] border-0 mb-4">
                                                <img alt="" class="rounded-t-xl max-w-[280px] shrink-0"
                                                    src="assets/media/images/600x400/7.jpg" />
                                                <div
                                                    class="card-border card-rounded-b px-3.5 h-full pt-3 pb-3.5">
                                                    <a class="font-medium block text-gray-900 hover:text-primary text-md mb-2"
                                                        href="#">
                                                        Duolingo Research Institute
                                                    </a>
                                                    <p class="text-2sm text-gray-700">
                                                        246 Innovation Road, Research Wing, Innovacity,
                                                        Arizona 13579
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card shadow-none w-[280px] border-0 mb-4">
                                                <img alt="" class="rounded-t-xl max-w-[280px] shrink-0"
                                                    src="assets/media/images/600x400/8.jpg" />
                                                <div
                                                    class="card-border card-rounded-b px-3.5 h-full pt-3 pb-3.5">
                                                    <a class="font-medium block text-gray-900 hover:text-primary text-md mb-2"
                                                        href="#">
                                                        Duolingo Research Institute
                                                    </a>
                                                    <p class="text-2sm text-gray-700">
                                                        246 Innovation Road, Research Wing, Innovacity,
                                                        Arizona 13579
                                                    </p>
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
<script>
    const baseUrl = "<?= $baseUrl ?>";
    const token = localStorage.getItem("auth_token");

    let extraFilter = {
        show_status: null, // Show all by default
        purpose_name: null
    };

    // Debounce helper to delay API call during typing
    function debounce(func, delay) {
        let timeout;
        return function (...args) {
            clearTimeout(timeout);
            timeout = setTimeout(() => func.apply(this, args), delay);
        };
    }

    // 1. Load all extras
    function fetchExtras(filters = {}) {
        console.log("Sending filters:", filters);

        fetch(`${baseUrl}/api/admin/extras/getall`, {
            method: "POST",
            headers: {
            "Content-Type": "application/json",
            Authorization: `Bearer ${token}`
            },
            body: JSON.stringify(filters)
        })
        .then(res => res.json())
        .then(res => {
        if (res.success) {
            const container = document.querySelector(".scrollable-x");
            container.innerHTML = "";

            res.data.forEach(extra => {
            container.innerHTML += `
                <div class="card shadow-none w-[280px] border-0 mb-4 relative">
                <img alt="" class="rounded-t-xl max-w-[280px] shrink-0" src="${extra.file_path}" />
                <div class="card-border card-rounded-b px-3.5 h-full pt-3 pb-3.5">
                    <a class="font-medium block text-gray-900 hover:text-primary text-md mb-2" href="#">
                    ${extra.purpose_name}
                    </a>
                    <p class="text-2sm text-gray-700 break-words">
                    ${extra.file_name}
                    </p>
                    <button class="btn btn-sm btn-danger mt-2" onclick="deleteExtra(${extra.id})">Remove</button>
                </div>
                </div>
            `;
            });
        }
        });
    }

    // 2. Add extra via SweetAlert popup
    function openAddExtrasPopup() {
        Swal.fire({
            title: 'Add Extras',
            html: `
            <input type="text" id="extra_purpose" class="swal2-input" placeholder="Purpose Name">
            <input type="file" id="extra_file" class="swal2-file" accept="image/*">
            <select id="extra_status" class="swal2-select">
                <option value="1">Active</option>
                <option value="0">Deactive</option>
            </select>
            `,
            confirmButtonText: 'Upload',
            showCancelButton: true,
            preConfirm: () => {
            const purpose = document.getElementById("extra_purpose").value;
            const file = document.getElementById("extra_file").files[0];
            const status = document.getElementById("extra_status").value;

            if (!purpose || !file) {
                Swal.showValidationMessage("Please enter purpose and select file.");
                return false;
            }

            const formData = new FormData();
            formData.append("purpose_name", purpose);
            formData.append("file", file);
            formData.append("show_status", status);

            return fetch(`${baseUrl}/api/admin/extras/add`, {
                method: "POST",
                headers: {
                Authorization: `Bearer ${token}`
                },
                body: formData
            })
                .then(res => res.json())
                .then(data => {
                if (!data.success) throw new Error(data.message);
                return data;
                });
            }
        }).then(result => {
            if (result.isConfirmed) {
            Swal.fire('✅ Uploaded!', 'Extra added successfully.', 'success');
            fetchExtras(extraFilter); // reload
            }
        });
    }

    // 3. Delete extra
    function deleteExtra(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
            fetch(`${baseUrl}/api/admin/extras/delete/${id}`, {
                method: "DELETE",
                headers: {
                Authorization: `Bearer ${token}`
                }
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                Swal.fire('Deleted!', 'Extra has been deleted.', 'success');
                fetchExtras(extraFilter);
                } else {
                Swal.fire('Error!', data.message || 'Failed to delete.', 'error');
                }
            });
            }
        });
    }

    // 4. Attach event to Add Extras button and filters
    document.addEventListener("DOMContentLoaded", () => {
        fetchExtras(extraFilter);

        document.querySelector(".add_extras .btn-success").addEventListener("click", () => {
            openAddExtrasPopup();
        });

        // Filter by show_status
        document.getElementById("filter-loggedin").addEventListener("change", e => {
            extraFilter.show_status = e.target.value;
            fetchExtras(extraFilter);
        });

        // Purpose name search
        const searchInput = document.querySelector('input[data-datatable-search="#extras_search"]');
        if (searchInput) {
        searchInput.addEventListener("input", debounce(e => {
            const val = e.target.value.trim();
            extraFilter.purpose_name = val;
            if (val.length >= 2 || val.length === 0) {
            fetchExtras(extraFilter);
            }
        }, 300));
        }

    });
</script>

    <!-- Footer -->
<?php include("../footer.php"); ?>