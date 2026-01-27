<base href="../">
<?php include("../header.php"); ?>

    <!-- ═══════════  SKELETON  ═══════════ -->
    <main id="profile-skeleton" class="max-w-7xl mx-auto px-4 py-8 animate-pulse">

        <!-- blurred bg already in original file -->
        <div class="bg-white rounded-xl shadow-sm border p-6 mb-8 flex items-center space-x-4">
            <div class="w-20 h-20 rounded-full bg-gray-200"></div>
            <div class="space-y-2">
            <div class="h-4 w-32 bg-gray-200 rounded"></div>
            <div class="h-3 w-40 bg-gray-200 rounded"></div>
            </div>
        </div>

        <!-- mobile tab bar skeleton -->
        <div class="md:hidden mb-6">
            <div class="flex justify-between bg-white rounded-xl shadow-sm border">
            <?php for($i=0;$i<4;$i++): ?>
            <div class="flex-1 py-5"></div>
            <?php endfor; ?>
            </div>
        </div>

        <div class="flex flex-col md:flex-row gap-8">
            <!-- sidebar -->
            <div class="hidden md:block w-64 mt-12 space-y-3">
            <?php for($i=0;$i<4;$i++): ?>
            <div class="h-10 bg-gray-200 rounded"></div>
            <?php endfor; ?>
            </div>

            <!-- two generic cards -->
            <div class="flex-1 space-y-6">
            <?php for($i=0;$i<2;$i++): ?>
            <div class="bg-white rounded-xl shadow-sm border p-8 space-y-3">
                <div class="h-4 w-32 bg-gray-200 rounded"></div>
                <div class="h-3 w-full bg-gray-200 rounded"></div>
                <div class="h-3 w-5/6 bg-gray-200 rounded"></div>
                <div class="h-3 w-4/6 bg-gray-200 rounded"></div>
            </div>
            <?php endfor; ?>
            </div>
        </div>
    </main>
    <!-- ═══════════  END SKELETON  ═══════════ -->

    <!-- ═══════════  REAL CONTENT  ═══════════ -->
    <div id="profile-content" class="hidden">
        <div class="fixed inset-0 -z-10 pointer-events-none">
            <!-- <img src="assets/brand/liwaas_logo_white_png.png" alt="" class="w-full h-full object-cover blur-xl"/> -->
        </div>
        <!-- Main Content -->
        <main class="max-w-7xl mx-auto px-4 py-4">

            <!-- Profile Header -->
            <div class="bg-white rounded-xl shadow-sm border p-6 mb-2">
                <div class="flex items-center space-x-4">
                    <!-- Avatar with first letter -->
                    <div id="avatar" class="w-20 h-20 rounded-full grad-btn flex items-center justify-center text-5xl font-bold text-gray-300">
                        <!-- JS will inject first letter -->
                    </div>
                    <div>
                        <h1 id="userName" class="text-2xl font-bold">User Name</h1>
                        <p id="userEmail" class="text-gray-500">user@example.com</p>
                    </div>
                </div>
            </div>

            <!-- MOBILE TAB BAR (hidden ≥ md) -->
            <div class="md:hidden mb-6">
                <div class="flex justify-between bg-white rounded-xl shadow-sm border overflow-hidden">
                    <button id="tab-orders"
                            class="mobile-tab-button flex-1 py-3 flex flex-col items-center gap-1 text-gray-500 hover:bg-gray-50"
                            onclick="switchTab('orders')">
                        <i data-lucide="package" class="w-5 h-5"></i>
                        <span class="text-[10px] leading-none">Orders</span>
                    </button>
                    <button id="tab-addresses"
                            class="mobile-tab-button flex-1 py-3 flex flex-col items-center gap-1 text-gray-500 hover:bg-gray-50"
                            onclick="switchTab('addresses')">
                        <i data-lucide="map-pin" class="w-5 h-5"></i>
                        <span class="text-[10px] leading-none">Address</span>
                    </button>
                    <button id="tab-wishlist"
                            class="mobile-tab-button flex-1 py-3 flex flex-col items-center gap-1 text-gray-500 hover:bg-gray-50"
                            onclick="switchTab('wishlist')">
                        <i data-lucide="heart" class="w-5 h-5"></i>
                        <span class="text-[10px] leading-none">Wishlist</span>
                    </button>
                    <button id="tab-settings"
                            class="mobile-tab-button flex-1 py-3 flex flex-col items-center gap-1 text-gray-500 hover:bg-gray-50"
                            onclick="switchTab('settings')">
                        <i data-lucide="settings" class="w-5 h-5"></i>
                        <span class="text-[10px] leading-none">Settings</span>
                    </button>
                </div>
            </div>

            <div class="flex flex-col md:flex-row gap-4">
                <!-- Desktop Sidebar -->
                <div class="hidden md:block w-64 min-h-[500px] mt-12">
                    <div class="bg-white rounded-xl shadow-sm border overflow-hidden">
                        <button onclick="switchTab('orders')" class="sidebar-btn w-full px-6 py-3 text-left hover:bg-gray-50 flex items-center space-x-3 border-l-4 border-black">
                            <i data-lucide="package" class="w-5 h-5"></i>
                            <span>My Orders</span>
                        </button>
                        <button onclick="switchTab('addresses')" class="sidebar-btn w-full px-6 py-3 text-left hover:bg-gray-50 flex items-center space-x-3 border-l-4 border-transparent">
                            <i data-lucide="map-pin" class="w-5 h-5"></i>
                            <span>Saved Addresses</span>
                        </button>
                        <button onclick="switchTab('wishlist')" class="sidebar-btn w-full px-6 py-3 text-left hover:bg-gray-50 flex items-center space-x-3 border-l-4 border-transparent">
                            <i data-lucide="heart" class="w-5 h-5"></i>
                            <span>Wishlist</span>
                        </button>
                        <button onclick="switchTab('cart')" class="sidebar-btn w-full px-6 py-3 text-left hover:bg-gray-50 flex items-center space-x-3 border-l-4 border-transparent">
                            <i data-lucide="shopping-cart" class="w-5 h-5"></i>
                            <span>Cart</span>
                        </button>
                        <button onclick="switchTab('settings')" class="sidebar-btn w-full px-6 py-3 text-left hover:bg-gray-50 flex items-center space-x-3 border-l-4 border-transparent">
                            <i data-lucide="settings" class="w-5 h-5"></i>
                            <span>Account Settings</span>
                        </button>
                    </div>
                </div>

                <!-- Content Area -->
                <div class="flex-1">
                    <!-- Orders Section -->
                    <div id="orders" class="space-y-6">
                        <div class="flex justify-between items-center">
                            <h2 class="text-xl font-semibold">My Orders</h2>
                            <div class="flex items-center space-x-2">
                                <input type="text" placeholder="Search orders" class="border rounded-lg px-1 py-1 text-xs w-24 md:px-4 md:py-2 md:text-sm md:w-auto focus:outline-none focus:ring-2 focus:ring-black"/>

                                <select class="border rounded-lg px-1 py-1 text-xs w-24 md:px-4 md:py-2 md:text-sm md:w-auto focus:outline-none focus:ring-2 focus:ring-black">
                                    <option>Last 30 days</option>
                                    <option>Last 6 months</option>
                                    <option>2023</option>
                                </select>
                            </div>
                        </div>

                        <!-- Order Cards -->
                        <div id="orders-container" class="space-y-4">
                            
                        </div>
                    </div>

                    <!-- Addresses Section (Hidden by default) -->
                    <div id="addresses" class="hidden space-y-6">
                        <div class="flex justify-between items-center">
                            <h2 class="text-xl font-semibold">Saved Addresses</h2>
                            <button onclick="openCreateAddressModal()" class="flex items-center space-x-2 text-sm font-medium text-blue-600 hover:text-blue-700">
                                <i data-lucide="plus" class="w-4 h-4"></i>
                                <span>Add New Address</span>
                            </button>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!--  -->
                        </div>
                    </div>

                    <!-- Wishlist Section (Hidden by default) -->
                    <div id="wishlist" class="hidden space-y-6">
                        <h2 class="text-xl font-semibold">Wishlist</h2>
                        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                            <!--  -->
                        </div>
                    </div>

                    <!-- Cart Section (Hidden by default) -->
                    <div id="cart" class="hidden space-y-6">
                        <h2 class="text-xl font-semibold">Cart</h2>
                        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                            <!--  -->
                        </div>
                    </div>

                    <!-- Settings Section (Hidden by default) -->
                    <div id="settings" class="hidden space-y-6">
                        <h2 class="text-xl font-semibold">Account Settings</h2>
                        <div class="bg-white rounded-xl shadow-sm border">
                            <!-- Personal Info -->
                            <div class="p-6 border-b">
                                <h3 class="font-medium mb-4">Personal Information</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                        <input id="pemail" type="email" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-black focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                                        <input id="pname" type="text" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-black focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                                        <input id="pphone" type="tel" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-black focus:border-transparent">
                                    </div>
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="p-6 border-b">
                                <h3 class="font-medium mb-4">Password</h3>
                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Current Password</label>
                                        <input id="oldPassword" type="password" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-black focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">New Password</label>
                                        <input id="newPassword" type="text" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-black focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Confirm New Password</label>
                                        <input id="confirmPassword" type="password" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-black focus:border-transparent">
                                    </div>
                                </div>
                            </div>

                            <!-- Preferences -->
                            <div class="p-6">
                                <h3 class="font-medium mb-4">Preferences</h3>
                                <div class="space-y-3">
                                    <label class="flex items-center">
                                        <input type="checkbox" checked class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-2 text-sm text-gray-600">Email notifications for orders</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" checked class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-2 text-sm text-gray-600">Email notifications for promotions</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span class="ml-2 text-sm text-gray-600">SMS notifications</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button onclick="updateAccountDetails()" class="px-6 py-2 bg-black text-white rounded-lg hover:bg-black/90">
                                Save Changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>


    <!-- ═══════════  END REAL CONTENT  ═══════════ -->
    <script>
        // Fetch user details from localStorage
        const userName = localStorage.getItem('user_name') || 'Guest';
        const userEmail = localStorage.getItem('user_email') || 'guest@example.com';

        // Update DOM
        document.getElementById('userName').textContent = userName;
        document.getElementById('userEmail').textContent = userEmail;

        // Set first letter of name in avatar
        const firstLetter = userName.trim().charAt(0).toUpperCase();
        document.getElementById('avatar').textContent = firstLetter;
    </script>

    <script>
        let COLOR_MAP = {};

        async function loadColorMap() {
            try {
            const res = await fetch("../stat-json/color.json");
            const json = await res.json();

            json.colors.forEach(c => {
                COLOR_MAP[c.name.toLowerCase()] = c.code;
            });

            console.log("Color map loaded:", COLOR_MAP);
            } catch (err) {
            console.error("Failed to load color map:", err);
            }
        }

        function getColorCode(colorName) {
            if (!colorName) return "#e5e7eb"; // fallback gray
            return COLOR_MAP[colorName.toLowerCase()] || "#e5e7eb";
        }
    </script>

    <!-- Apis Setup -->
    <script>
        const baseUrl = "<?= $baseUrl ?>"; // already set from PHP config
        const authToken = localStorage.getItem("auth_token"); // or however you store tokens
    </script>

    <!-- Fetch Profile -->
    <script>
        async function loadAccountDetails() {
            const skeleton = document.getElementById("profile-skeleton");
            const content = document.getElementById("profile-content");

            // Show skeleton while loading
            if (skeleton && content) {
                skeleton.classList.remove("hidden");
                content.classList.add("hidden");
            }

            try {
                const response = await fetch(`${baseUrl}/api/customer/profile/fetch`, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                        "Authorization": `Bearer ${authToken}`
                    }
                });

                const data = await response.json();
                console.log("Profile API response:", data);

                if (data.success && data.user) {
                    const user = data.user;

                    // ✅ Debug check
                    console.log("User fields:", user.name, user.email, user.mobile);

                    // ✅ Safely update inputs
                    const emailField = document.getElementById("pemail");
                    const nameField = document.getElementById("pname");
                    const phoneField = document.getElementById("pphone");

                    if (emailField) emailField.value = user.email || "";
                    if (nameField) nameField.value = user.name || "";
                    if (phoneField) phoneField.value = user.mobile || "";
                } else {
                    console.warn("Failed to fetch profile:", data.message);
                }
            } catch (error) {
                console.error("Error fetching profile:", error);
            } finally {
                if (skeleton && content) {
                    skeleton.classList.add("hidden");
                    content.classList.remove("hidden");
                }
            }
        }
    </script>

    <!-- Update Profile -->
    <script>
        async function updateAccountDetails() {
            const name   = document.getElementById("pname").value.trim();
            const email  = document.getElementById("pemail").value.trim();
            const phone  = document.getElementById("pphone").value.trim();

            // Password fields
            const oldPassword     = document.getElementById("oldPassword")?.value.trim();
            const newPassword     = document.getElementById("newPassword")?.value.trim();
            const confirmPassword = document.getElementById("confirmPassword")?.value.trim();

            // ✅ Validate password change (if entered)
            if (newPassword || confirmPassword || oldPassword) {
                if (newPassword !== confirmPassword) {
                    Swal.fire({
                        icon: "error",
                        title: "Password Mismatch",
                        text: "New password and confirm password do not match."
                    });
                    return;
                }
                if (!oldPassword) {
                    Swal.fire({
                        icon: "error",
                        title: "Missing Old Password",
                        text: "Please enter your current password."
                    });
                    return;
                }
            }

            try {
                const response = await fetch(`${baseUrl}/api/customer/profile/update`, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                        "Authorization": `Bearer ${authToken}`
                    },
                    body: JSON.stringify({
                        name: name,
                        email: email,
                        mobile: phone,
                        old_password: oldPassword || null,
                        new_password: newPassword || null
                    })
                });

                const data = await response.json();
                console.log("Update response:", data);

                if (data.success) {
                    Swal.fire({
                        icon: "success",
                        width: "300px",     // 🔹 reduce width (default ~500px)
                        padding: "1em",     // 🔹 decrease padding inside the box
                        title: "Profile Updated",
                        text: data.message || "Your profile has been updated successfully."
                    }).then(() => {
                        loadAccountDetails(); // refresh form with updated data
                    });
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Update Failed",
                        text: data.message || "Failed to update profile"
                    });
                }
            } catch (error) {
                console.error("Error updating profile:", error);
                Swal.fire({
                    icon: "error",
                    width: "280px",
                    padding: "0.8em",
                    title: "Something went wrong",
                    text: "Please try again later."
                });
            }
        }
    </script>

    <!-- Fetch Orders -->
    <script>     
        async function loadOrders() {
            try {
                const res = await fetch(`${baseUrl}/api/customer/order/get-order`, {
                    method: "POST",
                    headers: { 
                        Authorization: `Bearer ${authToken}`,
                        "Content-Type": "application/json"
                    }
                });

                if (!res.ok) throw new Error("Failed to fetch orders");
                const result = await res.json();

                if (!result.success) throw new Error(result.message || "API error");

                const orders = result.data;
                const container = document.getElementById("orders-container");
                container.innerHTML = "";

                orders.forEach(order => {
                    // ✅ Map delivery_status into progress codes
                    const statusMap = {
                        pending: { code: 1, color: "blue", label: "Confirm" },
                        shipped: { code: 2, color: "blue", label: "Shipped" },
                        arrived: { code: 3, color: "blue", label: "Arrived" },
                        "near you": { code: 4, color: "orange", label: "Near You" },
                        delivered: { code: 5, color: "green", label: "Delivered" },
                        cancel: { code: 5, color: "red", label: "Cancelled" }
                    };

                    const normalizedStatus = order.delivery_status?.trim().toLowerCase();
                    const matchedKey = Object.keys(statusMap).find(
                        key => key.toLowerCase() === normalizedStatus
                    );
                    const statusInfo = matchedKey 
                        ? statusMap[matchedKey] 
                        : { code: 1, color: "gray", label: order.delivery_status };

                    const statusBgMap = {
                        orange: "bg-orange-200 text-orange-700",
                        blue: "bg-blue-200 text-blue-700",
                        green: "bg-green-200 text-green-700",
                        red: "bg-red-200 text-red-700",
                        gray: "bg-gray-200 text-gray-700"
                    };

                    const statusBg = statusBgMap[statusInfo.color] || statusBgMap.gray;

                    // ✅ Create order card
                    const card = document.createElement("div");
                    card.className = "bg-white rounded-xl shadow-sm border p-6";

                    card.innerHTML = `
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <p class="text-sm text-gray-500">Order #${order.order_code}</p>
                                <p class="font-medium">${order.created_at}</p>
                            </div>
                            <span class="px-3 py-1 rounded-full text-sm ${statusBg}">
                                ${statusInfo.label}
                            </span>
                        </div>
                    `;

                    // ✅ Show first product only (can be looped if you want all)
                    if (order.items.length > 0) {
                        let itemsHtml = "";
                        let uids = [];

                        order.items.forEach((item, index) => {
                            const product = item.product;
                            const variation = item.variation;

                            // Collect UIDs
                            if (variation.uid) {
                                uids.push(variation.uid);
                            }
                            const colorCode = getColorCode(variation.color);

                            itemsHtml += `
                            <div class="flex justify-between">
                                <div class="text-sm mb-2">
                                    <strong>Item${index + 1}:</strong> ${product.name} x ${item.quantity}
                                    <span class="inline-block w-3 h-3 rounded-full ml-3 border" style="background:${colorCode}"></span> | ${variation.size}
                                </div>
                                <strong>${item.total}</strong> 
                            </div>
                            `;
                        });

                        // Divider line
                        itemsHtml += `<div class="border-t border-gray-300 my-2"></div>`;

                        // Grand total line
                        itemsHtml += `<div class="text-md font-bold text-right mt-2">Grand Total: ₹${parseFloat(order.grand_total).toFixed(2)}</div>`;

                        card.insertAdjacentHTML("beforeend", itemsHtml);
                    }

                    const colorClasses = {
                        blue: {
                            progress: "bg-blue-600",
                            label: "text-blue-600"
                        },
                        green: {
                            progress: "bg-green-600",
                            label: "text-green-600"
                        },
                        red: {
                            progress: "bg-red-600",
                            label: "text-red-600"
                        },
                        orange: {
                            progress: "bg-orange-600",
                            label: "text-orange-600"
                        },
                        gray: {
                            progress: "bg-gray-500",
                            label: "text-gray-600"
                        }
                    };

                    const colorClass = colorClasses[statusInfo.color] || colorClasses.gray;

                    // ✅ Tracking panel
                    card.insertAdjacentHTML("beforeend", `
                        <div class="flex justify-between items-center mt-4 pt-4 border-t">
                            <div class="flex gap-3">
                                <button
                                    class="track-btn text-sm text-blue-600 hover:text-blue-700 flex items-center gap-1"
                                    data-order-status="${statusInfo.code}"
                                    data-status-color="${statusInfo.color}"
                                >
                                    <i data-lucide="map" class="w-4 h-4"></i>
                                    Track Order
                                </button>
                                <button
                                    class="cancel-btn text-sm text-red-600 hover:text-red-700 flex items-center gap-1"
                                    data-order-id="${order.id}"
                                    ${["delivered","cancel"].includes(normalizedStatus) ? "disabled" : ""}
                                >
                                    <i data-lucide="x-circle" class="w-4 h-4"></i>
                                    Cancel
                                </button>
                            </div>
                            ${order.invoice_link 
                                ? `<button class="text-sm text-blue-600 hover:underline" 
                                        onclick="window.open('${order.invoice_link}', '_blank')">
                                    View Details
                                </button>` 
                                : ''
                            }
                        </div>

                        <div class="tracking-panel hidden mt-6">
                            <ol class="flex justify-between items-center">
                                <li data-step="1" class="step-item flex flex-col items-center">
                                    <div class="step-circle border-2 border-gray-300 rounded-full w-8 h-8 flex items-center justify-center text-gray-500 font-semibold">1</div>
                                    <span class="mt-2 text-xs text-gray-600">Placed</span>
                                </li>
                                <li data-step="2" class="step-item flex flex-col items-center">
                                    <div class="step-circle border-2 border-gray-300 rounded-full w-8 h-8 flex items-center justify-center text-gray-500 font-semibold">2</div>
                                    <span class="mt-2 text-xs text-gray-600">Shipped</span>
                                </li>
                                <li data-step="3" class="step-item flex flex-col items-center">
                                    <div class="step-circle border-2 border-gray-300 rounded-full w-8 h-8 flex items-center justify-center text-gray-500 font-semibold">3</div>
                                    <span class="mt-2 text-xs text-gray-600">Arrived</span>
                                </li>
                                <li data-step="4" class="step-item flex flex-col items-center">
                                    <div class="step-circle border-2 border-gray-300 rounded-full w-8 h-8 flex items-center justify-center text-gray-500 font-semibold">4</div>
                                    <span class="mt-2 text-xs text-gray-600">Near You</span>
                                </li>
                                <li data-step="5" class="step-item flex flex-col items-center">
                                    <div class="step-circle border-2 border-gray-300 rounded-full w-8 h-8 flex items-center justify-center text-gray-500 font-semibold">5</div>
                                    <span class="mt-2 text-xs text-gray-600">
                                        ${statusInfo.color === "red" ? "Cancelled" : "Delivered"}
                                    </span>
                                </li>
                            </ol>

                            <div class="relative mt-2 h-1 bg-gray-300 rounded-full">
                                <div class="progress-line absolute top-0 left-0 h-1 ${colorClass.progress} rounded-full transition-all duration-500 ease-in-out w-0"></div>
                            </div>
                        </div>
                    `);

                    container.appendChild(card);
                });

                lucide.createIcons();

                // ✅ Tracking event
                document.querySelectorAll(".track-btn").forEach(btn => {
                    btn.addEventListener("click", () => {
                        const card = btn.closest(".bg-white");
                        const panel = card.querySelector(".tracking-panel");
                        panel.classList.toggle("hidden");

                        if (!panel.dataset.initialized) {
                            const currentStep = Number(btn.dataset.orderStatus) || 1;
                            const steps = panel.querySelectorAll(".step-item");
                            const progressLine = panel.querySelector(".progress-line");

                            steps.forEach((stepItem, idx) => {
                                const circle = stepItem.querySelector(".step-circle");
                                const label = stepItem.querySelector("span");

                                if ((idx + 1) <= currentStep) {
                                    circle.classList.remove("border-gray-300", "text-gray-500");
                                    circle.classList.add("bg-blue-600", "border-blue-600", "text-white");
                                    label.classList.remove("text-gray-600");
                                    label.classList.add("text-blue-600");
                                } else {
                                    circle.classList.remove("bg-blue-600", "border-blue-600", "text-white");
                                    circle.classList.add("border-gray-300", "text-gray-500");
                                    label.classList.remove("text-blue-600");
                                    label.classList.add("text-gray-600");
                                }
                            });

                            const percent = ((currentStep - 1) / (steps.length - 1)) * 100;
                            progressLine.style.width = percent + "%";

                            panel.dataset.initialized = "true";
                        }
                    });
                });

                // ✅ Cancel event
                document.querySelectorAll(".cancel-btn").forEach(btn => {
                    btn.addEventListener("click", async () => {
                        const orderId = btn.dataset.orderId;
                        if (!orderId) return;

                        if (!confirm("Are you sure you want to cancel this order?")) return;

                        try {
                            const res = await fetch(`${baseUrl}/api/customer/order/cancel`, {
                                method: "POST",
                                headers: {
                                    Authorization: `Bearer ${authToken}`,
                                    "Content-Type": "application/json"
                                },
                                body: JSON.stringify({ id: orderId })
                            });
                            const data = await res.json();

                            if (data.success) {
                                alert("Order cancelled successfully!");
                                loadOrders(); // refresh orders
                            } else {
                                alert(data.message || "Failed to cancel order");
                            }
                        } catch (err) {
                            console.error("Cancel error:", err);
                            alert("Something went wrong while cancelling.");
                        }
                    });
                });

            } catch (err) {
                console.error("Error loading orders:", err);
            }
        }
    </script>

    <!-- Fetch Address --> 
    <script>
        // Get Address
        async function loadAddresses() {
            try {
                const res = await fetch(`${baseUrl}/api/customer/address/getAddressBy-user`, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": `Bearer ${authToken}`
                    }
                });
                const result = await res.json();

                const container = document.querySelector("#addresses .grid");
                container.innerHTML = "";

                if (!result.success || !Array.isArray(result.data) || result.data.length === 0) {
                    container.innerHTML = `<p class="text-sm text-gray-500">No saved addresses found.</p>`;
                    return;
                }

                result.data.forEach(addr => {
                    container.innerHTML += `
                        <div class="bg-white rounded-xl shadow-sm border p-6">
                            <div class="flex justify-between items-start mb-4">
                                <span class="font-medium capitalize">${addr.address_type || "Address"}</span>
                                <div class="flex space-x-2">
                                    <button onclick='openEditAddressModal(${JSON.stringify(addr)})' class="text-gray-400 hover:text-gray-500">
                                        <i data-lucide="edit" class="w-4 h-4"></i>
                                    </button>
                                    <button onclick="deleteAddress(${addr.id})" class="text-gray-400 hover:text-red-600">
                                        <i data-lucide="trash" class="w-4 h-4"></i>
                                    </button>
                                </div>
                            </div>
                            <p class="text-sm text-gray-600">${addr.name}</p>
                            <p class="text-sm text-gray-600">${addr.address_line_1}, ${addr.address_line_2}</p>
                            <p class="text-sm text-gray-600">${addr.city}, ${addr.state}, ${addr.pincode}</p>
                            <p class="text-sm text-gray-600">${addr.country}</p>
                            <p class="text-sm text-gray-600">Phone: ${addr.mobile}</p>
                        </div>
                    `;
                });

                // Re-render icons after dynamic HTML injection
                lucide.createIcons();

            } catch (error) {
                console.error("Failed to load addresses:", error);
            }
        }
        // Create Address
        async function openCreateAddressModal() {
            const { value: formValues } = await Swal.fire({
                title: 'Add New Address',
                width: '800px',
                customClass: {
                popup: 'custom-swal-popup',
                confirmButton: 'custom-swal-confirm',
                cancelButton: 'custom-swal-cancel'
                },
                showCancelButton: true,
                confirmButtonText: 'Create',
                cancelButtonText: 'Cancel',
                html: `
                <div class="custom-grid">
                    <div class="form-group">
                    <label>Name</label>
                    <input type="text" id="swal-name" placeholder="John Doe" />
                    </div>
                    <div class="form-group">
                    <label>Email</label>
                    <input type="email" id="swal-email" placeholder="john@example.com" />
                    </div>
                    <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" id="swal-mobile" placeholder="1234567890" />
                    </div>
                    <div class="form-group">
                    <label>State</label>
                    <input type="text" id="swal-state" placeholder="Your State" />
                    </div>
                    <div class="form-group">
                    <label>City</label>
                    <input type="text" id="swal-city" placeholder="Your City" />
                    </div>
                    <div class="form-group">
                    <label>Country</label>
                    <input type="text" id="swal-country" placeholder="Your Country" />
                    </div>
                    <div class="form-group">
                    <label>Pincode</label>
                    <input type="text" id="swal-pincode" placeholder="110011" />
                    </div>
                    <div class="form-group">
                    <label>Address Line 1</label>
                    <input type="text" id="swal-line1" placeholder="123 Main St" />
                    </div>
                    <div class="form-group">
                    <label>Address Line 2</label>
                    <input type="text" id="swal-line2" placeholder="Apt 4B" />
                    </div>
                </div>
                `,
                preConfirm: () => ({
                name: document.getElementById('swal-name').value,
                email: document.getElementById('swal-email').value,
                address_type: "primary",
                mobile: document.getElementById('swal-mobile').value,
                state: document.getElementById('swal-state').value,
                city: document.getElementById('swal-city').value,
                country: document.getElementById('swal-country').value,
                pincode: document.getElementById('swal-pincode').value,
                address_line_1: document.getElementById('swal-line1').value,
                address_line_2: document.getElementById('swal-line2').value,
                })
            });

            if (formValues) {
                try {
                const res = await fetch(`${baseUrl}/api/customer/address/create-address`, {
                    method: "POST",
                    headers: {
                    "Content-Type": "application/json",
                    "Authorization": `Bearer ${authToken}`
                    },
                    body: JSON.stringify(formValues)
                });

                const result = await res.json();
                if (result.success) {
                    Swal.fire("Success!", "Address created successfully.", "success");
                    loadAddresses();
                } else {
                    Swal.fire("Error", result.message || "Creation failed.", "error");
                }
                } catch (err) {
                console.error("Create address error:", err);
                Swal.fire("Error", "Something went wrong.", "error");
                }
            }
        }
        // Delete Address
        async function deleteAddress(addressId) {
            const confirm = await Swal.fire({
                title: 'Delete Address?',
                text: "Are you sure you want to delete this address?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc2626', // red
                cancelButtonColor: '#6b7280',  // gray
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            });

            if (confirm.isConfirmed) {
                try {
                const res = await fetch(`${baseUrl}/api/customer/address/delete-address/${addressId}`, {
                    method: 'DELETE',
                    headers: {
                    'Authorization': `Bearer ${authToken}`
                    }
                });

                const result = await res.json();

                if (result.success) {
                    Swal.fire('Deleted!', result.message, 'success');
                    loadAddresses();
                } else {
                    Swal.fire('Error', result.message || 'Failed to delete address.', 'error');
                }
                } catch (err) {
                console.error("Delete error:", err);
                Swal.fire('Error', 'Something went wrong.', 'error');
                }
            }
        }
        // Update Address
        async function openEditAddressModal(addr) {
            const { value: formValues } = await Swal.fire({
                title: 'Edit Address',
                width: '800px',
                customClass: {
                popup: 'custom-swal-popup',
                confirmButton: 'custom-swal-confirm',
                cancelButton: 'custom-swal-cancel'
                },
                showCancelButton: true,
                confirmButtonText: 'Update',
                cancelButtonText: 'Cancel',
                html: `
                <div class="custom-grid">
                    <div class="form-group">
                    <label>Name</label>
                    <input type="text" id="swal-name" value="${addr.name || ''}" />
                    </div>
                    <div class="form-group">
                    <label>Email</label>
                    <input type="email" id="swal-email" value="${addr.email || ''}" />
                    </div>
                    <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" id="swal-mobile" value="${addr.mobile || ''}" />
                    </div>
                    <div class="form-group">
                    <label>State</label>
                    <input type="text" id="swal-state" value="${addr.state || ''}" />
                    </div>
                    <div class="form-group">
                    <label>City</label>
                    <input type="text" id="swal-city" value="${addr.city || ''}" />
                    </div>
                    <div class="form-group">
                    <label>Country</label>
                    <input type="text" id="swal-country" value="${addr.country || ''}" />
                    </div>
                    <div class="form-group">
                    <label>Pincode</label>
                    <input type="text" id="swal-pincode" value="${addr.pincode || ''}" />
                    </div>
                    <div class="form-group">
                    <label>Address Line 1</label>
                    <input type="text" id="swal-line1" value="${addr.address_line_1 || ''}" />
                    </div>
                    <div class="form-group">
                    <label>Address Line 2</label>
                    <input type="text" id="swal-line2" value="${addr.address_line_2 || ''}" />
                    </div>
                </div>
                `,
                preConfirm: () => ({
                address_id: addr.id,
                name: document.getElementById('swal-name').value,
                email: document.getElementById('swal-email').value,
                mobile: document.getElementById('swal-mobile').value,
                state: document.getElementById('swal-state').value,
                city: document.getElementById('swal-city').value,
                country: document.getElementById('swal-country').value,
                pincode: document.getElementById('swal-pincode').value,
                address_line_1: document.getElementById('swal-line1').value,
                address_line_2: document.getElementById('swal-line2').value,
                })
            });

            if (formValues) {
                try {
                const res = await fetch(`${baseUrl}/api/customer/address/update-address`, {
                    method: "POST",
                    headers: {
                    "Content-Type": "application/json",
                    "Authorization": `Bearer ${authToken}`
                    },
                    body: JSON.stringify(formValues)
                });
                const result = await res.json();
                if (result.success) {
                    Swal.fire("Updated!", "Address updated successfully.", "success");
                    loadAddresses();
                } else {
                    Swal.fire("Error", result.message || "Update failed.", "error");
                }
                } catch (err) {
                console.error("Address update error:", err);
                Swal.fire("Error", "Something went wrong.", "error");
                }
            }
        }
    </script>

    <!-- Fetch Cart -->
    <script>
        // Get Carts Data
        async function loadCarts() {
            try {
                const authToken = localStorage.getItem("auth_token");
                const guestId = localStorage.getItem("guest_token");

                let headers = {
                    "Content-Type": "application/json"
                };

                let url = `${baseUrl}/api/cart/get-cart`;

                // If logged in, send token
                if (authToken) {
                    headers["Authorization"] = `Bearer ${authToken}`;
                } 
                // If guest, append temp_id in query params (or body if your API expects it)
                else if (guestId) {
                    url += `?temp_id=${guestId}`;
                }

                const res = await fetch(url, {
                    method: "POST",
                    headers: headers
                });

                const result = await res.json();
                const container = document.querySelector("#cart .grid");
                container.innerHTML = "";

                if (!result.success || !Array.isArray(result.data) || result.data.length === 0) {
                    container.innerHTML = ` 
                        <div class="col-span-full w-full flex justify-center items-center py-16">
                            <p class="text-lg text-gray-500">No items in your cart.</p>
                        </div>
                    `;
                    return;
                }

                result.data.forEach(item => {
                    const variation = item.variation || {};
                    // ✅ Fix URL issue (your API sends double `/uploads/http://...`)
                    let imageUrl = variation.images?.[0] || "assets/placeholder.jpg";
                    // imageUrl = imageUrl.replace("http://127.0.0.1:8000/uploads/http://", "http://");

                    const colorCode = getColorCode(variation.color);

                    container.innerHTML += `
                        <div class="bg-white rounded-xl shadow-sm border group overflow-hidden">
                            <div class="relative">
                                <img src="${imageUrl}" alt="${item.product_name}" class="aspect-square object-cover rounded-t-xl"/>
                                <button onclick="removeFromCart(${item.cart_id})" class="absolute top-4 right-4 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                                    <i data-lucide="trash" class="w-5 h-5 text-red-500"></i>
                                </button>
                            </div>
                            <div class="p-4">
                                <h3 class="font-medium">${item.product_name}</h3>
                                <p class="text-sm text-gray-500 mt-1 flex items-center gap-2">
                                    <span>Size: ${variation.size}</span> | 
                                    <span class="flex items-center gap-1">
                                        <span class="w-4 h-4 rounded-full border" style="background-color: ${colorCode};"></span>
                                    </span>
                                </p>

                                <div class="mt-3 text-sm text-gray-600">
                                    Quantity: ${item.quantity}
                                </div>

                                <div class="flex items-center justify-between mt-2">
                                    <span class="font-bold text-base">₹${item.sell_price}</span>
                                    <button onclick='window.location.href = "pages/product-detail.php?uid=${variation.uid}"' class="px-4 py-2 bg-black text-white text-sm rounded-lg hover:bg-black/90">
                                        View Product
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                });

                // Re-render icons
                lucide.createIcons();

            } catch (err) {
                console.error("Error loading cart:", err);
                document.querySelector("#cart .grid").innerHTML = `
                    <p class="text-sm text-red-500">Failed to load cart. Please try again later.</p>
                `;
            }
        }

        // Remove from Cart
        async function removeFromCart(cartId) {
            const confirm = await Swal.fire({
                title: 'Remove Item?',
                text: 'Are you sure you want to remove this item from your cart?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc2626',
                cancelButtonColor: '#6b7280',
                confirmButtonText: 'Yes, remove it'
            });

            if (confirm.isConfirmed) {
                try {
                const res = await fetch(`${baseUrl}/api/cart/delete-cart/${cartId}`, {
                    method: 'DELETE',
                    headers: {
                    'Authorization': `Bearer ${authToken}`
                    }
                });

                const result = await res.json();

                if (result.success) {
                    Swal.fire('Removed!', result.message, 'success');

                    // Wait 1 second then refresh cart
                    setTimeout(() => {
                    loadCarts();
                    }, 1000);
                } else {
                    Swal.fire('Error', result.message || 'Failed to remove item.', 'error');
                }
                } catch (err) {
                console.error('Remove Cart Error:', err);
                Swal.fire('Error', 'Something went wrong.', 'error');
                }
            }
        }
    </script>

    <!-- Fetch Wishlists -->
    <script>
        // Get Wishlist Data
        async function loadWishlist() {
            try {
                const res = await fetch(`${baseUrl}/api/customer/wishlist/get`, {
                    method: "GET",
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": `Bearer ${authToken}`
                    }
                });

                const result = await res.json();
                const container = document.querySelector("#wishlist .grid");
                container.innerHTML = "";

                if (!result.success || !Array.isArray(result.data) || result.data.length === 0) {
                    container.innerHTML = `
                                            <div class="col-span-full w-full flex justify-center items-center py-16">
                                                <p class="text-sm text-gray-500">No items in your wishlist.</p>
                                            </div>
                                        `;
                    return;
                }

                result.data.forEach(item => {
                    const product = item.product || {};
                    const variation = item.variation || {};

                    // Clean up malformed image URLs
                    let imageUrl = variation.images?.[0] || "assets/placeholder.jpg";
                    const colorCode = getColorCode(variation.color);

                    container.innerHTML += `
                        <div class="bg-white rounded-xl shadow-sm border group overflow-hidden cursor-pointer">
                            <div class="relative">
                                <img src="${imageUrl}" alt="${product.name}" class="w-full aspect-square object-cover rounded-t-xl" onclick="window.location.href='pages/product-detail.php?uid=${variation.uid}'"/>
                                <button onclick="removeFromWishlist(${item.id})" class="absolute top-4 right-4 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                                    <i data-lucide="trash" class="w-5 h-5 text-red-500"></i>
                                </button>
                            </div>
                            <div class="p-4">
                                <h3 class="font-medium">${product.name || "Unnamed Product"}</h3>
                                <p class="text-sm text-gray-500 mt-1 flex items-center gap-2">
                                    <span>Size: ${variation.size}</span> | 
                                    <span class="flex items-center gap-1">
                                        <span class="w-4 h-4 rounded-full border" style="background-color: ${colorCode};"></span>
                                        
                                    </span>
                                </p>

                                <div class="flex items-center justify-between mt-3">
                                    <span class="font-bold">₹${variation.sell_price}</span>
                                    <button onclick='addToCart(${product.id}, "${product.aid}", ${variation.uid})' class="px-4 py-2 bg-black text-white text-sm rounded-lg hover:bg-black/90">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                });

                // Re-render Lucide icons after DOM update
                lucide.createIcons();

            } catch (err) {
                console.error("Error loading wishlist:", err);
                document.querySelector("#wishlist .grid").innerHTML = `
                    <p class="text-sm text-red-500">Failed to load wishlist. Please try again later.</p>
                `;
            }
        }

        // Remove wishlist
        async function removeFromWishlist(wishlistId) {
            try {
                const res = await fetch(`${baseUrl}/api/customer/wishlist/remove/${wishlistId}`, {
                    method: "DELETE",
                    headers: {
                        "Authorization": `Bearer ${authToken}`
                    }
                });
                const result = await res.json();
                if (result.success) {
                    Swal.fire("Removed!", "Wishlist item removed successfully.", "success");
                    loadWishlist(); // refresh the list
                } else {
                    Swal.fire("Oops!", result.message || "Failed to remove item.", "error");
                }
            } catch (err) {
                console.error("Error removing wishlist item:", err);
                Swal.fire("Error", "Something went wrong.", "error");
            }
        }

        // Add To cart Functionality
        async function addToCart(productId, aid, uid) {
            try {
                const res = await fetch(`${baseUrl}/api/customer/cart/create-cart`, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": `Bearer ${authToken}`
                    },
                    body: JSON.stringify({
                        products_id: productId,
                        aid: aid,
                        uid: uid,
                        quantity: 1
                    })
                });

                const result = await res.json();
                if (result.success) {
                    Swal.fire("Added!", "Product added to cart successfully.", "success");
                } else {
                    Swal.fire("Failed", result.message || "Could not add to cart.", "error");
                }
            } catch (err) {
                console.error("Error adding to cart:", err);
                Swal.fire("Error", "Something went wrong.", "error");
            }
        }

        function getTabFromURL() {
            const params = new URLSearchParams(window.location.search);
            const tab = params.get("tab");

            const allowedTabs = ["orders", "addresses", "wishlist", "cart", "settings"];

            return allowedTabs.includes(tab) ? tab : "settings";
        }

        document.addEventListener("DOMContentLoaded", async () => {
            await loadColorMap();

            setTimeout(() => {
                document.getElementById("profile-skeleton").classList.add("hidden");
                document.getElementById("profile-content").classList.remove("hidden");
                const defaultTab = getTabFromURL();
                switchTab(defaultTab);
                // switchTab("settings");
            }, 500);
        });

    </script>

    <!-- Static Js -->
    <script>
        // Initialise icons
        lucide.createIcons();
        
        // === SWITCH TABS Function (Desktop + Mobile) ===
        function switchTab(tabId) {
        // 🔹 UPDATE URL when tab changes
        history.replaceState(null, "", `?tab=${tabId}`);

        // Hide all content panes
        ['orders','addresses','wishlist','cart','settings'].forEach(id =>
            document.getElementById(id).classList.add('hidden')
        );
        document.getElementById(tabId).classList.remove('hidden');

        // Desktop sidebar active state
        document.querySelectorAll('.sidebar-btn').forEach(btn => {
            btn.classList.remove('border-black');
            btn.classList.add('border-transparent');
        });
        const sidebarActive = document.querySelector(`.sidebar-btn[onclick="switchTab('${tabId}')"]`);
        if (sidebarActive) {
            sidebarActive.classList.add('border-black');
            sidebarActive.classList.remove('border-transparent');
        }

        // Mobile tab active state
        document.querySelectorAll('.mobile-tab-button').forEach(btn => {
            btn.classList.remove('text-black', 'border-t-2', 'border-black');
            btn.classList.add('text-gray-500');
        });
        const mobileActive = document.getElementById('tab-' + tabId);
        if (mobileActive) {
            mobileActive.classList.remove('text-gray-500');
            mobileActive.classList.add('text-black', 'border-t-2', 'border-black');
        }

        // Load tab data
        if (tabId === 'orders') loadOrders();
        else if (tabId === 'addresses') loadAddresses();
        else if (tabId === 'wishlist') loadWishlist();
        else if (tabId === 'cart') loadCarts();
        else if (tabId === 'settings') loadAccountDetails();
        }

        // 3️⃣ Only call switchTab after all definitions
        // document.addEventListener("DOMContentLoaded", () => {
        //     setTimeout(() => {
        //         document.getElementById("profile-skeleton").classList.add("hidden");
        //         document.getElementById("profile-content").classList.remove("hidden");
        //         switchTab("settings");
        //     }, 500);
        // });
    </script>
    
<?php include("../footer.php"); ?>