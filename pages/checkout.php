<base href="../">
<?php include("../header.php"); ?>

    <!-- ============  SKELETON  ============ -->
    <main id="checkout-skeleton" class="max-w-7xl mx-auto px-4 py-12 animate-pulse">
        <div class="flex flex-col lg:flex-row gap-8">

            <!-- Left column skeleton -->
            <div class="lg:w-2/3 space-y-8">
            <!-- Address skeleton -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 space-y-6">
                <div class="h-5 bg-gray-200 rounded w-40"></div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <?php for ($i=0;$i<2;$i++): ?>
                <div class="border rounded-lg p-4 space-y-2">
                    <div class="h-4 bg-gray-200 rounded w-24"></div>
                    <div class="h-3 bg-gray-200 rounded w-32"></div>
                    <div class="h-3 bg-gray-200 rounded w-40"></div>
                    <div class="h-3 bg-gray-200 rounded w-32"></div>
                    <div class="h-3 bg-gray-200 rounded w-36"></div>
                </div>
                <?php endfor; ?>
                <div class="h-4 bg-gray-200 rounded w-32 mt-2"></div>
                </div>
            </div>

            <!-- Payment skeleton -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 space-y-6">
                <div class="h-5 bg-gray-200 rounded w-40"></div>
                <?php for ($i=0;$i<3;$i++): ?>
                <div class="flex items-center p-4 border rounded-lg space-x-4">
                <div class="h-4 w-4 bg-gray-200 rounded-full"></div>
                <div class="flex-1 h-4 bg-gray-200 rounded"></div>
                <div class="h-6 w-6 bg-gray-200 rounded"></div>
                </div>
                <?php endfor; ?>
            </div>
            </div>

            <!-- Right column skeleton -->
            <div class="lg:w-1/3 space-y-4">
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 space-y-6">
                    <div class="h-5 bg-gray-200 rounded w-32"></div>
                    <div class="space-y-3">
                    <?php for ($i=0;$i<2;$i++): ?>
                    <div class="flex justify-between">
                        <div class="h-3 bg-gray-200 rounded w-1/2"></div>
                        <div class="h-3 bg-gray-200 rounded w-16"></div>
                    </div>
                    <?php endfor; ?>
                    </div>
                    <div class="border-t pt-4 space-y-3">
                    <?php for ($i=0;$i<3;$i++): ?>
                    <div class="flex justify-between">
                        <div class="h-3 bg-gray-200 rounded w-24"></div>
                        <div class="h-3 bg-gray-200 rounded w-16"></div>
                    </div>
                    <?php endfor; ?>
                    </div>
                    <div class="h-10 bg-gray-200 rounded"></div>
                </div>
            </div>

        </div>
    </main>
    <!-- ============  END SKELETON  ============ -->
    <div id="checkout-content" class="hidden">
        <!-- Address Modal -->
        <div id="addressModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
            <div class="bg-white rounded-lg w-full max-w-md relative">
                <div class="p-4 border-b border-gray-200">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg font-semibold">Add New Address</h2>
                        <button onclick="toggleModal()" class="text-gray-400 hover:text-gray-500">
                            <i data-lucide="x" class="w-5 h-5"></i>
                        </button>
                    </div>
                </div>
                <form class="p-4 space-y-3">
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                            <input type="text" class="w-full px-3 py-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" class="w-full px-3 py-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                        <input type="tel" class="w-full px-3 py-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                        <textarea class="w-full px-3 py-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" rows="2"></textarea>
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">State</label>
                            <input type="text" class="w-full px-3 py-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">City</label>
                            <input type="text" class="w-full px-3 py-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Postal Code</label>
                        <input type="text" class="w-full px-3 py-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="defaultAddress" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500" />
                        <label for="defaultAddress" class="ml-2 text-sm text-gray-600">Set as default address</label>
                    </div>
                    <div class="flex justify-end pt-3">
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 text-sm rounded-lg hover:bg-blue-700">Save Address</button>
                    </div>
                </form>
            </div>
        </div>

        <main class="max-w-7xl mx-auto px-4 py-12">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Left Column - Forms -->
                <div class="lg:w-2/3 space-y-8">
                    <!-- Delivery Address -->
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-xl font-semibold">Delivery Address</h2>
                        </div>
                        <div class="p-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <!-- Address Cards -->
                                <div class="border rounded-lg p-4 cursor-pointer hover:border-blue-500" onclick="selectAddress(this, 'address1')">
                                    <div class="flex justify-between items-start mb-2">
                                        <div class="flex items-center">
                                            <input type="radio" name="address" class="h-4 w-4 text-blue-600" />
                                            <span class="ml-2 font-medium">Home</span>
                                        </div>
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

                                <div class="border rounded-lg p-4 cursor-pointer hover:border-blue-500" onclick="selectAddress(this, 'address2')">
                                    <div class="flex justify-between items-start mb-2">
                                        <div class="flex items-center">
                                            <input type="radio" name="address" class="h-4 w-4 text-blue-600" />
                                            <span class="ml-2 font-medium">Office</span>
                                        </div>
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
                            </div>

                            <button onclick="toggleModal()" class="flex items-center text-blue-600 hover:text-blue-700">
                                <i data-lucide="plus" class="w-5 h-5 mr-2"></i>
                                Add New Address
                            </button>
                        </div>
                    </div>

                    <!-- Payment Methods -->
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-xl font-semibold">Payment Method</h2>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <!-- Razorpay -->
                                <div class="flex items-center p-4 border rounded-lg cursor-pointer" onclick="selectPayment('razorpay', this)">
                                    <input type="radio" name="payment" value="razorpay" class="h-4 w-4 text-blue-600" checked />
                                    <label class="ml-3 flex-1">
                                        <span class="block font-medium">Razorpay</span>
                                    </label>
                                    <i data-lucide="credit-card" class="w-6 h-6 text-gray-400"></i>
                                </div>

                                <!-- COD -->
                                <div class="flex items-center p-4 border rounded-lg cursor-pointer" onclick="selectPayment('cod', this)">
                                    <input type="radio" name="payment" value="cod" class="h-4 w-4 text-blue-600" />
                                    <label class="ml-3 flex-1">
                                        <span class="block font-medium">Cash on Delivery</span>
                                    </label>
                                    <i data-lucide="wallet" class="w-6 h-6 text-gray-400"></i>
                                </div>

                                <!-- Card Payment -->
                                <div class="flex items-center p-4 border rounded-lg cursor-pointer" onclick="selectPayment('card', this)">
                                    <input type="radio" name="payment" value="card" class="h-4 w-4 text-blue-600" />
                                    <label class="ml-3 flex-1">
                                        <span class="block font-medium">Card Payment</span>
                                    </label>
                                    <i data-lucide="credit-card" class="w-6 h-6 text-gray-400"></i>
                                </div>

                                <!-- Payment Details -->
                                <div id="paymentDetails" class="mt-4">
                                    <!-- Razorpay Details -->
                                    <div id="razorpayDetails" class="p-4 bg-gray-50 rounded-lg">
                                        <p class="text-sm text-gray-600">Pay securely with Razorpay</p>
                                        <p class="text-xs text-gray-500 mt-1">You will be redirected to Razorpay's secure payment gateway</p>
                                    </div>

                                    <!-- COD Details (Hidden by default) -->
                                    <div id="codDetails" class="hidden p-4 bg-gray-50 rounded-lg">
                                        <p class="text-sm text-gray-600">Pay when you receive your order</p>
                                        <p class="text-xs text-gray-500 mt-1">Additional fee of $2 will be charged for COD</p>
                                    </div>

                                    <!-- Card Details (Hidden by default) -->
                                    <div id="cardDetails" class="hidden space-y-3 p-4 bg-gray-50 rounded-lg">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Card Number</label>
                                            <input type="text" placeholder="1234 5678 9012 3456" class="w-full px-3 py-2 border rounded-lg text-sm" />
                                        </div>
                                        <div class="grid grid-cols-2 gap-3">
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-1">Expiry Date</label>
                                                <input type="text" placeholder="MM/YY" class="w-full px-3 py-2 border rounded-lg text-sm" />
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-1">CVV</label>
                                                <input type="text" placeholder="123" class="w-full px-3 py-2 border rounded-lg text-sm" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Order Summary -->
                <div class="lg:w-1/3">
                    <div class="sticky top-4">
                        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                            <div class="p-6 border-b border-gray-200">
                                <h2 class="text-xl font-semibold">Order Summary</h2>
                            </div>
                            <div class="p-6 space-y-4">
                                <div class="space-y-3" id="summary-items"></div>

                                <div class="border-t pt-4 space-y-3">
                                    <div class="flex justify-between text-sm">
                                        <span class="text-gray-600">Subtotal</span>
                                        <span id="summary-subtotal">₹0.00</span>
                                    </div>
                                    <div class="flex justify-between text-sm">
                                        <span class="text-gray-600">Shipping</span>
                                        <span id="summary-shipping">₹0.00</span>
                                    </div>
                                </div>

                                <div class="border-t pt-4">
                                    <div class="flex justify-between items-center">
                                        <span class="font-medium">Total</span>
                                        <span id="summary-total" class="text-xl font-bold">₹0.00</span>
                                    </div>
                                </div>

                                <button id="placeOrderBtn"
                                    class="w-full bg-blue-600 text-white py-3 rounded-lg font-medium hover:bg-blue-700">
                                    Place Order
                                </button>

                                <div class="pt-4 space-y-3">
                                    <div class="flex items-center gap-2 text-sm text-gray-600">
                                        <i data-lucide="truck" class="w-5 h-5"></i>
                                        <span>Free shipping on all orders</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-sm text-gray-600">
                                        <i data-lucide="shield" class="w-5 h-5"></i>
                                        <span>Secure 256-bit SSL encryption</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-sm text-gray-600">
                                        <i data-lucide="clock" class="w-5 h-5"></i>
                                        <span>Delivery within 3-5 business days</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
<script>
const baseUrl = "<?= $baseUrl ?>";
let authToken = localStorage.getItem("auth_token");

// Load addresses on page load
window.onload = async () => {
    document.getElementById('checkout-skeleton').classList.add('hidden');
    document.getElementById('checkout-content').classList.remove('hidden');
    if (typeof lucide !== 'undefined' && lucide.createIcons) lucide.createIcons();

    if (authToken) {
        // Auth user → fetch address
        fetchAddresses();
    } else {
        // Guest user → force open modal
        toggleModal();
    }
};

// Fetch addresses
async function fetchAddresses() {
    try {
        const res = await fetch(`${baseUrl}/api/customer/address/getAddressBy-user`, {
            headers: { "Authorization": `Bearer ${authToken}` }
        });
        const data = await res.json();

        if (data.success && data.data.length > 0) {
            renderAddresses(data.data);
        } else {
            toggleModal(); // no address → force open modal
        }
    } catch (err) {
        console.error("Error fetching addresses", err);
    }
}

// Render addresses dynamically
function renderAddresses(addresses) {
    const container = document.querySelector(".grid.grid-cols-1.md\\:grid-cols-2");
    container.innerHTML = ""; // clear old dummy cards

    addresses.forEach(addr => {
        const card = document.createElement("div");
        card.className = "border rounded-lg p-4 cursor-pointer hover:border-blue-500";
        card.onclick = () => selectAddress(card, addr.id);
        card.innerHTML = `
            <div class="flex justify-between items-start mb-2">
                <div class="flex items-center">
                    <input type="radio" name="address" class="h-4 w-4 text-blue-600" />
                    <span class="ml-2 font-medium">${addr.address_type || 'Home'}</span>
                </div>
            </div>
            <p class="text-sm text-gray-600">${addr.name}</p>
            <p class="text-sm text-gray-600">${addr.address_line_1}, ${addr.address_line_2 || ''}</p>
            <p class="text-sm text-gray-600">${addr.city}, ${addr.state} ${addr.pincode}</p>
            <p class="text-sm text-gray-600">Phone: ${addr.mobile}</p>
        `;
        container.appendChild(card);
    });
}

// Handle address form submit
document.querySelector("#addressModal form").addEventListener("submit", async function (e) {
    e.preventDefault();

    const form = e.target;
    const payload = {
        name: form.querySelector('input[type="text"]').value,
        email: form.querySelector('input[type="email"]').value,
        mobile: form.querySelector('input[type="tel"]').value,
        address_type: form.querySelector('#defaultAddress').checked ? "primary" : "secondary",
        state: form.querySelectorAll('input[type="text"]')[1].value,
        city: form.querySelectorAll('input[type="text"]')[2].value,
        country: "India",
        pincode: form.querySelectorAll('input[type="text"]')[3].value,
        address_line_1: form.querySelector('textarea').value,
        address_line_2: ""
    };

    if (!authToken) {
        // Guest → create user first
        const guestId = localStorage.getItem("guest_token") || "temp_" + Math.random().toString(36).substr(2, 8);
        const makeUserRes = await fetch(`${baseUrl}/make_user`, {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({
                name: payload.name,
                email: payload.email,
                mobile: payload.mobile,
                guest_token: guestId
            })
        });
        const makeUserData = await makeUserRes.json();
        if (makeUserData.success) {
            // store auth data
            localStorage.setItem("auth_token", makeUserData.token);
            localStorage.setItem("user_id", makeUserData.user.id);
            localStorage.setItem("user_email", makeUserData.user.email);
            localStorage.setItem("user_name", makeUserData.user.name);
            localStorage.setItem("user_role", makeUserData.user.role);
            authToken = makeUserData.token;
        }
    }

    // Create address
    await fetch(`${baseUrl}/customer/address/create-address`, {
        method: "POST",
        headers: {
            "Authorization": `Bearer ${authToken}`,
            "Content-Type": "application/json"
        },
        body: JSON.stringify(payload)
    });

    location.reload(); // reload to fetch addresses
});

</script>

<script>
const baseUrl  = "<?= $baseUrl ?>";
const authToken = localStorage.getItem("auth_token");
const guestId   = localStorage.getItem("guest_token");

let cartData = [];

async function fetchCheckoutCart() {
    try {
        let headers = { "Content-Type": "application/json" };
        let body = null;

        if (authToken) {
            headers["Authorization"] = `Bearer ${authToken}`;
        } else if (guestId) {
            body = JSON.stringify({ temp_id: guestId });
        } else {
            renderSummary();
            return;
        }

        const res = await fetch(`${baseUrl}/api/cart/get-cart`, {
            method: "POST",
            headers,
            body
        });

        const result = await res.json();

        if (result.success) {
            cartData = result.data || [];
            renderSummary();
        } else {
            cartData = [];
            renderSummary();
        }

    } catch (err) {
        console.error("Checkout cart error:", err);
    }
}

function renderSummary() {
    const itemsEl    = document.getElementById("summary-items");
    const subtotalEl = document.getElementById("summary-subtotal");
    const shippingEl = document.getElementById("summary-shipping");
    const totalEl    = document.getElementById("summary-total");
    const placeBtn   = document.getElementById("placeOrderBtn");

    itemsEl.innerHTML = "";

    if (!cartData.length) {
        itemsEl.innerHTML = `<p class="text-sm text-gray-500">Your cart is empty.</p>`;
        subtotalEl.textContent = "₹0.00";
        shippingEl.textContent = "₹0.00";
        totalEl.textContent = "₹0.00";
        placeBtn.disabled = true;
        placeBtn.classList.add("opacity-50", "cursor-not-allowed");
        return;
    }

    let subtotal = 0;

    cartData.forEach(item => {
        const variation = item.variation || {};
        const lineTotal = parseFloat(item.total_price) || 0;
        subtotal += lineTotal;

        const row = document.createElement("div");
        row.className = "flex justify-between text-sm";
        row.innerHTML = `
            <span>${item.product_name} ${variation.size ? `(${variation.size})` : ""} × ${item.quantity}</span>
            <span class="font-medium">₹${lineTotal.toFixed(2)}</span>
        `;
        itemsEl.appendChild(row);
    });

    // Shipping rule: ₹120 if subtotal > 1000
    let shipping = subtotal > 1000 ? 120 : 0;

    subtotalEl.textContent = `₹${subtotal.toFixed(2)}`;
    shippingEl.textContent = shipping === 0 ? "Free" : `₹${shipping.toFixed(2)}`;
    totalEl.textContent = `₹${(subtotal + shipping).toFixed(2)}`;

    placeBtn.disabled = false;
    placeBtn.classList.remove("opacity-50", "cursor-not-allowed");
}

// Init
window.addEventListener("load", () => {
    fetchCheckoutCart();
});
</script>


    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Modal functions
        function toggleModal() {
            const modal = document.getElementById('addressModal');
            modal.classList.toggle('hidden');
        }

        // Address selection
        function selectAddress(element, addressId) {
            // Remove selected state from all addresses
            document.querySelectorAll('[onclick^="selectAddress"]').forEach(addr => {
                addr.classList.remove('bg-blue-50', 'border-blue-500');
            });
            
            // Add selected state to clicked address
            element.classList.add('bg-blue-50', 'border-blue-500');
            
            // Check the radio button
            element.querySelector('input[type="radio"]').checked = true;
        }

        // Payment method selection
        function selectPayment(method, element) {
            // Update selected payment method style
            document.querySelectorAll('[onclick^="selectPayment"]').forEach(el => {
                el.classList.remove('bg-blue-50', 'border-blue-500');
            });
            element.classList.add('bg-blue-50', 'border-blue-500');
            
            // Check the radio button
            element.querySelector('input[type="radio"]').checked = true;

            // Hide all payment details
            document.getElementById('razorpayDetails').classList.add('hidden');
            document.getElementById('codDetails').classList.add('hidden');
            document.getElementById('cardDetails').classList.add('hidden');

            // Show selected payment details
            document.getElementById(`${method}Details`).classList.remove('hidden');
        }

        /* skeleton swap */
        window.onload = () => {
            document.getElementById('checkout-skeleton').classList.add('hidden');
            document.getElementById('checkout-content').classList.remove('hidden');

            // re-init icons inside newly revealed DOM
            if (typeof lucide !== 'undefined' && lucide.createIcons) {
                lucide.createIcons();
            }
        };
    </script>
<?php include("../footer.php"); ?>