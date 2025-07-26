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
                    <div id="avatar" class="w-20 h-20 rounded-full bg-gray-200 flex items-center justify-center text-3xl font-bold text-gray-600">
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
                            <button onclick="toggleAddressModal()" class="flex items-center space-x-2 text-sm font-medium text-blue-600 hover:text-blue-700">
                                <i data-lucide="plus" class="w-4 h-4"></i>
                                <span>Add New Address</span>
                            </button>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!--  -->
                        </div>
                        <!-- <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-white rounded-xl shadow-sm border p-6">
                                <div class="flex justify-between items-start mb-4">
                                    <span class="font-medium">Home</span>
                                    <div class="flex space-x-2">
                                        <button class="text-gray-400 hover:text-gray-500">
                                            <i data-lucide="edit" class="w-4 h-4"></i>
                                        </button>
                                        <button class="text-gray-400 hover:text-gray-500">
                                            <i data-lucide="trash" class="w-4 h-4"></i>
                                        </button>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-600">John Doe</p>
                                <p class="text-sm text-gray-600">123 Main St, Apt 4B</p>
                                <p class="text-sm text-gray-600">New York, NY 10001</p>
                                <p class="text-sm text-gray-600">Phone: (555) 123-4567</p>
                            </div>

                            <div class="bg-white rounded-xl shadow-sm border p-6">
                                <div class="flex justify-between items-start mb-4">
                                    <span class="font-medium">Office</span>
                                    <div class="flex space-x-2">
                                        <button class="text-gray-400 hover:text-gray-500">
                                            <i data-lucide="edit" class="w-4 h-4"></i>
                                        </button>
                                        <button class="text-gray-400 hover:text-gray-500">
                                            <i data-lucide="trash" class="w-4 h-4"></i>
                                        </button>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-600">John Doe</p>
                                <p class="text-sm text-gray-600">456 Business Ave, Floor 12</p>
                                <p class="text-sm text-gray-600">New York, NY 10002</p>
                                <p class="text-sm text-gray-600">Phone: (555) 987-6543</p>
                            </div>
                        </div> -->
                    </div>

                    <!-- Wishlist Section (Hidden by default) -->
                    <div id="wishlist" class="hidden space-y-6">
                        <h2 class="text-xl font-semibold">Wishlist</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <!--  -->
                        </div>
                        <!-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div class="bg-white rounded-xl shadow-sm border group">
                                <div class="relative">
                                    <img 
                                        src="https://images.pexels.com/photos/4066293/pexels-photo-4066293.jpeg"
                                        alt="Premium T-Shirt"
                                        class="w-full aspect-square object-cover rounded-t-xl"
                                    />
                                    <button class="absolute top-4 right-4 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                                        <i data-lucide="trash" class="w-5 h-5 text-red-500"></i>
                                    </button>
                                </div>
                                <div class="p-4">
                                    <h3 class="font-medium">Essential Premium T-Shirt</h3>
                                    <p class="text-sm text-gray-500 mt-1">Premium Collection</p>
                                    <div class="flex items-center justify-between mt-3">
                                        <span class="font-bold">$49.99</span>
                                        <button class="px-4 py-2 bg-black text-white text-sm rounded-lg hover:bg-black/90">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>

                    <!-- Settings Section (Hidden by default) -->
                    <div id="settings" class="hidden space-y-6">
                        <h2 class="text-xl font-semibold">Account Settings</h2>
                        <div class="bg-white rounded-xl shadow-sm border">
                            <div class="p-6 border-b">
                                <h3 class="font-medium mb-4">Personal Information</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                                        <input type="text" value="John" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-black focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                                        <input type="text" value="Doe" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-black focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                        <input type="email" value="john.doe@example.com" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-black focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                                        <input type="tel" value="(555) 123-4567" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-black focus:border-transparent">
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 border-b">
                                <h3 class="font-medium mb-4">Password</h3>
                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Current Password</label>
                                        <input type="password" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-black focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">New Password</label>
                                        <input type="password" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-black focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Confirm New Password</label>
                                        <input type="password" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-black focus:border-transparent">
                                    </div>
                                </div>
                            </div>
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
                            <button class="px-6 py-2 bg-black text-white rounded-lg hover:bg-black/90">
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
    <!-- Apis Setup -->
    <script>
        const baseUrl = "<?= $baseUrl ?>"; // already set from PHP config
        const authToken = localStorage.getItem("auth_token"); // or however you store tokens
    </script>

    <!-- Fetch Orders -->
    <script>
        async function loadOrders() {
            try {
                const res = await fetch(`${baseUrl}/user/orders`, {
                    headers: { Authorization: `Bearer ${authToken}` }
                });
                const data = await res.json();

                const container = document.getElementById("orders-container");
                container.innerHTML = "";

                data.orders.forEach(order => {
                    container.innerHTML += `
                        <div class="bg-white p-4 rounded-xl shadow-sm border">
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="text-sm font-medium">Order ID: ${order.id}</p>
                                    <p class="text-xs text-gray-500">Placed on ${new Date(order.created_at).toLocaleDateString()}</p>
                                </div>
                                <div class="text-sm font-bold text-right text-green-600">${order.status}</div>
                            </div>
                            <div class="mt-3 text-sm text-gray-700">Total: ₹${order.total_amount}</div>
                        </div>
                    `;
                });
            } catch (err) {
                console.error("Failed to fetch orders:", err);
            }
        }
    </script>

    <!-- Fetch Address --> 
     <script>
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
                                    <button class="text-gray-400 hover:text-gray-500">
                                        <i data-lucide="edit" class="w-4 h-4"></i>
                                    </button>
                                    <button class="text-gray-400 hover:text-gray-500">
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

     </script>

    <!-- Fetch Wishlists -->
    <script>
        async function loadWishlist() {
            try {
                const res = await fetch(`${baseUrl}/user/wishlist`, {
                    headers: { Authorization: `Bearer ${authToken}` }
                });
                const data = await res.json();

                const container = document.querySelector("#wishlist .grid");
                container.innerHTML = "";

                data.wishlist.forEach(item => {
                    container.innerHTML += `
                        <div class="bg-white rounded-xl shadow-sm border group">
                            <div class="relative">
                                <img src="${item.image}" class="w-full aspect-square object-cover rounded-t-xl" />
                                <button class="absolute top-4 right-4 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                                    <i data-lucide="trash" class="w-5 h-5 text-red-500"></i>
                                </button>
                            </div>
                            <div class="p-4">
                                <h3 class="font-medium">${item.name}</h3>
                                <p class="text-sm text-gray-500 mt-1">${item.category}</p>
                                <div class="flex items-center justify-between mt-3">
                                    <span class="font-bold">₹${item.price}</span>
                                    <button class="px-4 py-2 bg-black text-white text-sm rounded-lg hover:bg-black/90">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                });
            } catch (err) {
                console.error("Failed to fetch wishlist:", err);
            }
        }
    </script>

    <!-- Order data get -->
    <!-- <script>
        // JSON path — adjust if needed
        const ordersJsonPath = 'json/order.json';

        async function loadOrders() {
            try {
                const res = await fetch(ordersJsonPath);
                if (!res.ok) throw new Error('Failed to load orders.json');
                const orders = await res.json();

                const container = document.getElementById('orders-container');
                container.innerHTML = ''; // clear existing orders

                orders.forEach(order => {
                    // Define mapping for status to code and base color
                    const statusMap = {
                        'Placed': { code: 1, color: 'blue' },
                        'Shipped': { code: 2, color: 'blue' },
                        'Arrived': { code: 3, color: 'blue' },
                        'Near You': { code: 4, color: 'blue' },
                        'Delivered': { code: 5, color: 'green' },
                        'Cancel': { code: 5, color: 'red' }
                    };

                    // Normalize status text (case-insensitive)
                    const normalizedStatus = order.status.trim().toLowerCase();

                    // Find matching key ignoring case
                    const matchedKey = Object.keys(statusMap).find(key => key.toLowerCase() === normalizedStatus);

                    // Use mapped or fallback
                    const statusInfo = matchedKey ? statusMap[matchedKey] : { code: 2, color: 'gray' };

                    // Use statusInfo.code and statusInfo.color below for rendering progress

                    // Prepare colors for status label background
                    const statusBgMap = {
                        blue: 'bg-blue-100 text-blue-700',
                        green: 'bg-green-100 text-green-700',
                        red: 'bg-red-100 text-red-700',
                        gray: 'bg-gray-100 text-gray-700'
                    };

                    const statusBg = statusBgMap[statusInfo.color] || statusBgMap.gray;

                    // Create order card
                    const card = document.createElement('div');
                    card.className = 'bg-white rounded-xl shadow-sm border p-6';

                    card.innerHTML = `
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <p class="text-sm text-gray-500">Order #${order.order_number}</p>
                                <p class="font-medium">${order.order_date}</p>
                            </div>
                            <span class="px-3 py-1 rounded-full text-sm ${statusBg}">${order.status}</span>
                        </div>
                    `;

                    // Product info (first product)
                    const product = order.products[0];
                    const productHtml = `
                        <div class="flex items-center gap-4">
                            <img src="${product.image}" alt="${product.name}" class="w-20 h-20 object-cover rounded-lg" />
                            <div>
                                <h3 class="font-medium">${product.name}</h3>
                                <p class="text-sm text-gray-500">${product.color} • Size ${product.size}</p>
                                <p class="text-sm font-medium mt-1">$${product.price.toFixed(2)}</p>
                            </div>
                        </div>
                    `;
                    card.insertAdjacentHTML('beforeend', productHtml);

                    // Determine colors for tracking based on status color
                    // Map simple colors to tailwind classes:
                    const colorClasses = {
                        blue: {
                            activeBg: 'bg-blue-600 border-blue-600 text-white',
                            progress: 'bg-blue-600',
                            label: 'text-blue-600'
                        },
                        green: {
                            activeBg: 'bg-green-600 border-green-600 text-white',
                            progress: 'bg-green-600',
                            label: 'text-green-600'
                        },
                        red: {
                            activeBg: 'bg-red-600 border-red-600 text-white',
                            progress: 'bg-red-600',
                            label: 'text-red-600'
                        },
                        gray: {
                            activeBg: 'bg-gray-500 border-gray-500 text-white',
                            progress: 'bg-gray-500',
                            label: 'text-gray-600'
                        }
                    };

                    const colorClass = colorClasses[statusInfo.color] || colorClasses.gray;

                    // Insert the tracking panel HTML with dynamic progress line color
                    card.insertAdjacentHTML('beforeend', `
                        <div class="flex justify-between items-center mt-4 pt-4 border-t">
                            <button
                                class="track-btn text-sm text-blue-600 hover:text-blue-700 flex items-center gap-1"
                                data-order-status="${statusInfo.code}"
                                data-status-color="${statusInfo.color}"
                            >
                                <i data-lucide="map" class="w-4 h-4"></i>
                                Track Order
                            </button>
                            <button class="text-sm text-gray-600 hover:text-gray-700">View Details</button>
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
                                    <span class="mt-2 text-xs text-gray-600">${statusInfo.color === 'red' ? 'Cancelled' : 'Delivered'}</span>
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

                // Add event listeners for Track buttons
                document.querySelectorAll('.track-btn').forEach(btn => {
                    btn.addEventListener('click', () => {
                        const card = btn.closest('.bg-white');
                        const panel = card.querySelector('.tracking-panel');
                        panel.classList.toggle('hidden');

                        if (!panel.dataset.initialized) {
                            const currentStep = Number(btn.dataset.orderStatus) || 1;
                            const steps = panel.querySelectorAll('.step-item');
                            const progressLine = panel.querySelector('.progress-line');

                            const statusColor = btn.dataset.statusColor;

                            if (statusColor === 'green') {
                                // all steps green, full progress
                                steps.forEach(stepItem => {
                                    const circle = stepItem.querySelector('.step-circle');
                                    const label = stepItem.querySelector('span');
                                    circle.classList.remove('border-gray-300', 'text-gray-500', 'bg-blue-600', 'border-blue-600', 'bg-red-600', 'border-red-600');
                                    circle.classList.add('bg-green-600', 'border-green-600', 'text-white');
                                    label.classList.remove('text-gray-600', 'text-blue-600', 'text-red-600');
                                    label.classList.add('text-green-600');
                                });
                                progressLine.classList.remove('bg-blue-600', 'bg-red-600');
                                progressLine.classList.add('bg-green-600');
                                progressLine.style.width = '100%';
                            } else if (statusColor === 'red') {
                                // all steps red, full progress
                                steps.forEach(stepItem => {
                                    const circle = stepItem.querySelector('.step-circle');
                                    const label = stepItem.querySelector('span');
                                    circle.classList.remove('border-gray-300', 'text-gray-500', 'bg-blue-600', 'border-blue-600', 'bg-green-600', 'border-green-600');
                                    circle.classList.add('bg-red-600', 'border-red-600', 'text-white');
                                    label.classList.remove('text-gray-600', 'text-blue-600', 'text-green-600');
                                    label.classList.add('text-red-600');
                                });
                                progressLine.classList.remove('bg-blue-600', 'bg-green-600');
                                progressLine.classList.add('bg-red-600');
                                progressLine.style.width = '100%';
                            } else {
                                // normal partial progress in blue
                                steps.forEach((stepItem, idx) => {
                                    const circle = stepItem.querySelector('.step-circle');
                                    const label = stepItem.querySelector('span');

                                    if ((idx + 1) <= currentStep) {
                                        circle.classList.remove('border-gray-300', 'text-gray-500');
                                        circle.classList.add('bg-blue-600', 'border-blue-600', 'text-white');
                                        label.classList.remove('text-gray-600');
                                        label.classList.add('text-blue-600');
                                    } else {
                                        circle.classList.remove('bg-blue-600', 'border-blue-600', 'text-white', 'bg-green-600', 'border-green-600', 'bg-red-600', 'border-red-600', 'text-green-600', 'text-red-600');
                                        circle.classList.add('border-gray-300', 'text-gray-500');
                                        label.classList.remove('text-blue-600', 'text-green-600', 'text-red-600');
                                        label.classList.add('text-gray-600');
                                    }
                                });

                                // Color 5th step
                                const fifthStep = steps[4];
                                const fifthCircle = fifthStep.querySelector('.step-circle');
                                const fifthLabel = fifthStep.querySelector('span');

                                fifthCircle.classList.remove('bg-blue-600', 'border-blue-600', 'bg-green-600', 'border-green-600', 'bg-red-600', 'border-red-600', 'text-white');
                                fifthLabel.classList.remove('text-blue-600', 'text-green-600', 'text-red-600');

                                if (statusColor === 'green') {
                                    fifthCircle.classList.add('bg-green-600', 'border-green-600', 'text-white');
                                    fifthLabel.classList.add('text-green-600');
                                } else if (statusColor === 'red') {
                                    fifthCircle.classList.add('bg-red-600', 'border-red-600', 'text-white');
                                    fifthLabel.classList.add('text-red-600');
                                } else {
                                    if (5 <= currentStep) {
                                        fifthCircle.classList.add('bg-blue-600', 'border-blue-600', 'text-white');
                                        fifthLabel.classList.add('text-blue-600');
                                    } else {
                                        fifthCircle.classList.add('border-gray-300', 'text-gray-500');
                                        fifthLabel.classList.add('text-gray-600');
                                    }
                                }

                                // progress line color
                                progressLine.classList.remove('bg-red-600', 'bg-green-600');
                                progressLine.classList.add('bg-blue-600');

                                const percent = ((currentStep - 1) / (steps.length - 1)) * 100;
                                progressLine.style.width = percent + '%';
                            }

                            panel.dataset.initialized = 'true';
                        }
                    });
                });

            } catch (error) {
                console.error('Error loading orders:', error);
            }
        }

        // Run when page loads
        window.addEventListener('load', () => {
            // Hide skeleton, show real content
            document.getElementById('profile-skeleton').classList.add('hidden');
            document.getElementById('profile-content').classList.remove('hidden');

            loadOrders();

            if (typeof switchTab === 'function') switchTab('orders');
        });

    </script> -->

    <!-- Static Js -->
    <script>
        // Initialise icons
        lucide.createIcons();

        // === SWITCH TABS Function (Desktop + Mobile) ===
        // 2️⃣ Then define switchTab
        function switchTab(tabId) {
            // Hide all content panes
            ['orders','addresses','wishlist','settings'].forEach(id =>
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
        }


        // 3️⃣ Only call switchTab after all definitions
        document.addEventListener("DOMContentLoaded", () => {
            setTimeout(() => {
                document.getElementById("profile-skeleton").classList.add("hidden");
                document.getElementById("profile-content").classList.remove("hidden");
                switchTab("orders");
            }, 500);
        });
    </script>
    
<?php include("../footer.php"); ?>