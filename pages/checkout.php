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
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Postal Code</label>
                        <input id="pincodeInput" type="text" maxlength="6" inputmode="numeric" pattern="[0-9]*"
                            class="w-full px-3 py-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">State</label>
                            <input id="stateInput" type="text" class="w-full px-3 py-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" disabled/>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">City</label>
                            <input id="cityInput" type="text" class="w-full px-3 py-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" disabled/>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="defaultAddress" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500" />
                        <label for="defaultAddress" class="ml-2 text-sm text-gray-600">Set as default address</label>
                    </div>
                    <div class="flex justify-end pt-3">
                        <button type="submit" class="grad-btn text-white px-4 py-2 text-sm rounded-lg">Save Address</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Update Address Modal -->
        <div id="updateAddressModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg w-full max-w-md relative">
            <div class="p-4 border-b border-gray-200">
            <div class="flex justify-between items-center">
                <h2 class="text-lg font-semibold">Update Address</h2>
                <button onclick="toggleUpdateModal()" class="text-gray-400 hover:text-gray-500">
                <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>
            </div>

            <form id="updateAddressForm" class="p-4 space-y-3">
                <input type="hidden" id="updateAddressId" />

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                        <input id="updateName" type="text" class="w-full px-3 py-2 text-sm border rounded-lg" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input id="updateEmail" type="email" class="w-full px-3 py-2 text-sm border rounded-lg" />
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                    <input id="updateMobile" type="tel" class="w-full px-3 py-2 text-sm border rounded-lg" />
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                    <textarea id="updateAddressLine1" class="w-full px-3 py-2 text-sm border rounded-lg" rows="2"></textarea>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">State</label>
                        <input id="updateState" type="text" class="w-full px-3 py-2 text-sm border rounded-lg" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">City</label>
                        <input id="updateCity" type="text" class="w-full px-3 py-2 text-sm border rounded-lg" />
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Postal Code</label>
                    <input id="updatePincode" type="text" maxlength="6" class="w-full px-3 py-2 text-sm border rounded-lg" />
                </div>

                <div class="flex items-center">
                    <input id="updateDefault" type="checkbox" class="rounded border-gray-300 text-blue-600" />
                    <label for="updateDefault" class="ml-2 text-sm text-gray-600">
                        Set as default address
                    </label>
                </div>

                <div class="flex justify-end pt-3">
                    <button type="submit" class="grad-btn text-white px-4 py-2 text-sm rounded-lg">
                        Update Address
                    </button>
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
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4" id="addressContainer">
                                <!-- dynamic cards will be injected here -->
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
                                <div class="hidden flex items-center p-4 border rounded-lg cursor-pointer" onclick="selectPayment('card', this)">
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
                                        <p class="text-xs text-gray-500 mt-1">No Additional fee will be charged for COD</p>
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

                                    <!-- Coupon Section -->
                                    <div class="border-t pt-3 space-y-2">
                                        <div class="flex gap-2">
                                            <input id="couponInput"
                                                type="text"
                                                placeholder="Enter coupon code"
                                                class="flex-1 px-3 py-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" />

                                            <button id="applyCouponBtn"
                                                class="px-4 py-2 text-sm bg-gray-900 text-white rounded-lg hover:bg-gray-800">
                                                Apply
                                            </button>
                                        </div>

                                        <div id="couponMessage" class="text-sm hidden"></div>

                                        <div id="couponDiscountBadge"
                                            class="hidden text-sm text-green-700 bg-green-100 px-3 py-1 rounded-lg inline-block">
                                        </div>
                                    </div>
                                </div>

                                <div class="border-t pt-4">
                                    <div class="flex justify-between items-center">
                                        <span class="font-medium">Total</span>
                                        <span id="summary-total" class="text-xl font-bold">₹0.00</span>
                                    </div>
                                </div>

                                <button id="placeOrderBtn"
                                    class="grad-btn w-full py-3 rounded-lg font-medium text-white focus:outline-none focus:ring-2 focus:ring-[#c7aa28] focus:ring-offset-2 transition-all">
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

<div id="pageLoader" class="hidden fixed inset-0 bg-black/60 z-[9999] flex items-center justify-center">
  <div class="flex flex-col items-center space-y-4">
    <div class="w-12 h-12 border-4 border-white border-t-transparent rounded-full animate-spin"></div>
    <p class="text-white text-sm">Processing your order...</p>
  </div>
</div>

<script>
const baseUrl = "<?= $baseUrl ?>";
const razorPayKey = "<?= $razorPayKey ?>";
let authToken = localStorage.getItem("auth_token");
const guestId   = localStorage.getItem("guest_token");
let selectedAddressId = null;
let selectedPaymentMethod = "razorpay"; // default
let appliedCoupon = null;
let discountAmount = 0;

function showPageLoader(text = "Processing your order...") {
  const loader = document.getElementById("pageLoader");
  loader.querySelector("p").textContent = text;
  loader.classList.remove("hidden");
}

function hidePageLoader() {
  document.getElementById("pageLoader").classList.add("hidden");
}


// Load addresses on page load
window.onload = async () => {
    document.getElementById('checkout-skeleton').classList.add('hidden');
    document.getElementById('checkout-content').classList.remove('hidden');

    if (typeof lucide !== 'undefined' && lucide.createIcons) {
        lucide.createIcons();
    }

    if (authToken) {
        fetchAddresses();
    } else {
        toggleModal();
    }

    fetchCheckoutCart();
};

// Fetch addresses
async function fetchAddresses() {
    try {
        const res = await fetch(`${baseUrl}/api/customer/address/getAddressBy-user`, {
            method: "POST",
            headers: {
                "Authorization": `Bearer ${authToken}`,
                "Content-Type": "application/json"
            }
        });

        const data = await res.json();

        if (data.success && data.data.length > 0) {
            renderAddresses(data.data);
        } else {
            toggleModal(); // no address → force open modal
        }
    } catch (err) {
        console.error("Error fetching addresses", err);
        toggleModal();
    }
}

// Render addresses dynamically
function renderAddresses(addresses) {
    const container = document.getElementById("addressContainer");
    container.innerHTML = "";

    if (!addresses || !addresses.length) {
        container.innerHTML = `<p class="text-sm text-gray-500">No addresses found.</p>`;
        return;
    }

    addresses.forEach(addr => {
        const card = document.createElement("div");
        card.className = "border rounded-lg p-4 cursor-pointer hover:border-blue-500";
        card.onclick = () => selectAddress(card, addr.id);

        const typeLabel = addr.address_type
            ? addr.address_type.charAt(0).toUpperCase() + addr.address_type.slice(1)
            : "Home";

        card.innerHTML = `
            <div class="flex justify-between items-start mb-2">
                <div class="flex items-center">
                    <input type="radio" name="address" class="h-4 w-4 text-blue-600" />
                    <span class="ml-2 font-medium">${typeLabel}</span>
                </div>
                <div class="flex space-x-2">
                    <button onclick='openUpdateModal(${JSON.stringify(addr)})' class="text-gray-400 hover:text-gray-500">
                        <i data-lucide="edit" class="w-4 h-4"></i>
                    </button>
                    <button onclick="deleteAddress(${addr.id})" class="text-gray-400 hover:text-gray-500">
                        <i data-lucide="trash" class="w-4 h-4"></i>
                    </button>
                </div>
            </div>
            <p class="text-sm text-gray-600">${addr.name}</p>
            <p class="text-sm text-gray-600">${addr.address_line_1}, ${addr.address_line_2 || ''}</p>
            <p class="text-sm text-gray-600">${addr.city}, ${addr.state} ${addr.pincode}</p>
            <p class="text-sm text-gray-600">Phone: ${addr.mobile}</p>
        `;

        // ✅ Auto-select PRIMARY
        if (addr.address_type === "primary") {
            card.classList.add("bg-blue-50", "border-blue-500");
            card.querySelector('input[type="radio"]').checked = true;
            selectedAddressId = addr.id; // ✅
        }

        container.appendChild(card);
    });

    // Re-init icons for dynamically injected cards
    if (typeof lucide !== "undefined" && lucide.createIcons) {
        lucide.createIcons();
    }
}

// Handle address form submit
document.querySelector("#addressModal form").addEventListener("submit", async function (e) {
    e.preventDefault();
    showPageLoader("Saving address...");
    const form = e.target;

    const name    = form.querySelector('input[type="text"]').value;
    const email   = form.querySelector('input[type="email"]').value;
    const mobile  = form.querySelector('input[type="tel"]').value;
    const address = form.querySelector('textarea').value;
    const state   = form.querySelectorAll('input[type="text"]')[1].value;
    const city    = form.querySelectorAll('input[type="text"]')[2].value;
    const pincode = form.querySelectorAll('input[type="text"]')[3].value;
    const isDefault = form.querySelector('#defaultAddress').checked;
    const submitBtn = form.querySelector('button[type="submit"]');
    submitBtn.disabled = true;
    submitBtn.textContent = "Saving...";

    let token = authToken;

    /* ---------- GUEST → CREATE USER ---------- */
    if (!token) {
        const guestToken = localStorage.getItem("guest_token") || 
            "temp_" + Math.random().toString(36).substr(2, 12);

        const makeUserRes = await fetch(`${baseUrl}/api/make_user`, {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({
                name: name,
                email: email,
                mobile: mobile,
                guest_id: guestToken
            })
        });

        const makeUserData = await makeUserRes.json();

        if (!makeUserData.success) {
            submitBtn.disabled = false;
            submitBtn.textContent = "Save Address";
            alert("Failed to create user.");
            hidePageLoader();
            return;
        }

        // 🔥 clear and set auth data
        localStorage.clear();
        localStorage.setItem("auth_token", makeUserData.token);
        localStorage.setItem("user_email", makeUserData.user.email);
        localStorage.setItem("user_name", makeUserData.user.name);

        token = makeUserData.token;
        authToken = token;
    }

    /* ---------- CREATE ADDRESS ---------- */
    const payload = {
        name: name,
        email: email,
        mobile: mobile,
        address_type: isDefault ? "primary" : "secondary",
        state: state,
        city: city,
        country: "India",
        pincode: pincode,
        address_line_1: address,
        address_line_2: null
    };

    const addrRes = await fetch(`${baseUrl}/api/customer/address/create-address`, {
        method: "POST",
        headers: {
            "Authorization": `Bearer ${token}`,
            "Content-Type": "application/json"
        },
        body: JSON.stringify(payload)
    });

    const addrData = await addrRes.json();

    if (addrData.success) {
        hidePageLoader();
        submitBtn.textContent = "Saved";
        setTimeout(() => {
            submitBtn.disabled = false;
            submitBtn.textContent = "Save Address";
        }, 800);
        
        toggleModal();
        fetchAddresses();
    } else {
        hidePageLoader();
        submitBtn.disabled = false;
        submitBtn.textContent = "Save Address";
        alert("Failed to save address.");
    }
});
</script>

<script>
const pincodeInput = document.getElementById("pincodeInput");
const stateInput   = document.getElementById("stateInput");
const cityInput    = document.getElementById("cityInput");

let lastFetchedPincode = "";

if (pincodeInput && stateInput && cityInput) {
    pincodeInput.addEventListener("input", async function () {
        let pincode = this.value.replace(/\D/g, ""); // digits only
        this.value = pincode;

        // reset state + city while typing
        stateInput.value = "";
        cityInput.value = "";
        stateInput.disabled = true;
        cityInput.disabled = true;

        // only act at EXACTLY 6 digits
        if (pincode.length !== 6) {
            lastFetchedPincode = "";
            return;
        }

        // avoid duplicate fetch
        if (pincode === lastFetchedPincode) return;
        lastFetchedPincode = pincode;

        try {
            const res = await fetch(`https://api.postalpincode.in/pincode/${pincode}`);
            const data = await res.json();

            if (data[0].Status === "Success" && data[0].PostOffice.length) {
                const po = data[0].PostOffice[0];

                // ✅ map fields
                stateInput.value = po.State;
                cityInput.value  = po.District;

                stateInput.disabled = false;
                cityInput.disabled = false;
            }
        } catch (err) {
            console.error("Pincode lookup failed", err);
        }
    });
}
</script>

<!-- populate for update address -->
<script>
function toggleUpdateModal() {
  document.getElementById("updateAddressModal").classList.toggle("hidden");
}

function openUpdateModal(addr) {
  document.getElementById("updateAddressId").value = addr.id;
  document.getElementById("updateName").value = addr.name || "";
  document.getElementById("updateEmail").value = addr.email || "";
  document.getElementById("updateMobile").value = addr.mobile || "";
  document.getElementById("updateAddressLine1").value = addr.address_line_1 || "";
  document.getElementById("updateState").value = addr.state || "";
  document.getElementById("updateCity").value = addr.city || "";
  document.getElementById("updatePincode").value = addr.pincode || "";

  document.getElementById("updateDefault").checked =
    addr.address_type === "primary";

  toggleUpdateModal();
}
</script>
<script>
document.getElementById("updateAddressForm").addEventListener("submit", async function (e) {
  e.preventDefault();
  showPageLoader("Updating address...");

  const payload = {
    address_id: document.getElementById("updateAddressId").value,
    name: document.getElementById("updateName").value,
    email: document.getElementById("updateEmail").value,
    mobile: document.getElementById("updateMobile").value,
    address_type: document.getElementById("updateDefault").checked
      ? "primary"
      : "secondary",
    state: document.getElementById("updateState").value,
    city: document.getElementById("updateCity").value,
    country: "India",
    pincode: document.getElementById("updatePincode").value,
    address_line_1: document.getElementById("updateAddressLine1").value,
    address_line_2: null
  };

  try {
    const res = await fetch(`${baseUrl}/api/customer/address/update-address`, {
      method: "POST",
      headers: {
        "Authorization": `Bearer ${authToken}`,
        "Content-Type": "application/json"
      },
      body: JSON.stringify(payload)
    });

    const data = await res.json();

    if (data.success) {
      hidePageLoader();
      toggleUpdateModal();
      fetchAddresses(); // refresh cards
    } else {
      hidePageLoader();
      alert("Failed to update address.");
    }

  } catch (err) {
    hidePageLoader();
    console.error("Update address error:", err);
    alert("Something went wrong.");
  }
});
</script>

<!-- delete address -->
<script>
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
        Swal.fire({
            icon: 'success',
            title: 'Deleted!',
            text: result.message,
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true
        });
        fetchAddresses();
      } else {
        Swal.fire('Error', result.message || 'Failed to delete address.', 'error');
      }

    } catch (err) {
      console.error("Delete error:", err);
      Swal.fire('Error', 'Something went wrong.', 'error');
    }
  }
}
</script>


<script>
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

// let appliedCoupon = null;
// let discountAmount = 0;

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

    // Shipping rule: ₹120 if subtotal > 200
    let shipping = subtotal > 200 ? 0 : 120;
    let finalSubtotal = subtotal;

    if (appliedCoupon && discountAmount > 0) {
        finalSubtotal = subtotal - discountAmount;

        subtotalEl.innerHTML = `
            <span class="line-through text-gray-400">₹${subtotal.toFixed(2)}</span>
            <span class="ml-2 text-green-600">₹${finalSubtotal.toFixed(2)}</span>
        `;
    } else {
        subtotalEl.textContent = `₹${subtotal.toFixed(2)}`;
    }
    shippingEl.textContent = shipping === 0 ? "Free" : `₹${shipping.toFixed(2)}`;
    totalEl.textContent = `₹${(finalSubtotal + shipping).toFixed(2)}`;

    placeBtn.disabled = false;
    placeBtn.classList.remove("opacity-50", "cursor-not-allowed");
}

document.getElementById("applyCouponBtn").addEventListener("click", async function () {
    const codeInput = document.getElementById("couponInput");
    const msgEl     = document.getElementById("couponMessage");
    const badgeEl  = document.getElementById("couponDiscountBadge");

    const code = codeInput.value.trim();

    msgEl.classList.add("hidden");
    badgeEl.classList.add("hidden");

    if (!code) {
        msgEl.textContent = "Please enter a coupon code.";
        msgEl.className = "text-sm text-red-600";
        msgEl.classList.remove("hidden");
        return;
    }

    // if (!authToken) {
    //     msgEl.textContent = "Please login to apply coupon.";
    //     msgEl.className = "text-sm text-red-600";
    //     msgEl.classList.remove("hidden");
    //     return;
    // }

    try {
        const res = await fetch(`${baseUrl}/api/coupons/validate-coupon`, {
            method: "POST",
            headers: {
                "Authorization": `Bearer ${authToken}`,
                "Content-Type": "application/json"
            },
            body: JSON.stringify({ code })
        });

        const result = await res.json();

        if (!result.success || !result.data) {
            appliedCoupon  = null;
            discountAmount = 0;

            msgEl.textContent = result.message || "Invalid coupon code.";
            msgEl.className = "text-sm text-red-600";
            msgEl.classList.remove("hidden");

            renderSummary();
            return;
        }

        const coupon = result.data;

        // ❌ inactive
        if (coupon.status !== "active") {
            appliedCoupon  = null;
            discountAmount = 0;

            msgEl.textContent = "This coupon is not active.";
            msgEl.className = "text-sm text-red-600";
            msgEl.classList.remove("hidden");

            renderSummary();
            return;
        }

        appliedCoupon = coupon;

        const subtotal = cartData.reduce((sum, item) => {
            return sum + (parseFloat(item.total_price) || 0);
        }, 0);

        // API returns value like "20.00"
        discountAmount = parseFloat(coupon.value) || 0;

        // never exceed subtotal
        discountAmount = Math.min(discountAmount, subtotal);

        badgeEl.textContent = `Coupon applied: -₹${discountAmount.toFixed(2)}`;
        badgeEl.classList.remove("hidden");

        msgEl.textContent = `Applied "${coupon.key_name}" successfully.`;
        msgEl.className = "text-sm text-green-600";
        msgEl.classList.remove("hidden");

        renderSummary();

    } catch (err) {
        console.error("Coupon API error:", err);

        appliedCoupon  = null;
        discountAmount = 0;

        msgEl.textContent = "Failed to apply coupon.";
        msgEl.className = "text-sm text-red-600";
        msgEl.classList.remove("hidden");
    }
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
        // Remove selected state from all address cards
        document.querySelectorAll("#addressContainer > div").forEach(card => {
            card.classList.remove("bg-blue-50", "border-blue-500");
            const radio = card.querySelector('input[type="radio"]');
            if (radio) radio.checked = false;
        });

        // Add selected state to clicked card
        element.classList.add("bg-blue-50", "border-blue-500");

        // Check the radio button
        const radio = element.querySelector('input[type="radio"]');
        if (radio) radio.checked = true;

        // (optional for later) store selected id
        selectedAddressId = addressId;
    }

    // Payment method selection
    function selectPayment(method, element) {
        document.querySelectorAll('[onclick^="selectPayment"]').forEach(el => {
            el.classList.remove('bg-blue-50', 'border-blue-500');
        });

        element.classList.add('bg-blue-50', 'border-blue-500');
        element.querySelector('input[type="radio"]').checked = true;

        selectedPaymentMethod = method; // "razorpay" or "cod"

        document.getElementById('razorpayDetails').classList.add('hidden');
        document.getElementById('codDetails').classList.add('hidden');

        document.getElementById(`${method}Details`).classList.remove('hidden');
    }

</script>

<!-- Place Order Setup -->
<script>
document.getElementById("placeOrderBtn").addEventListener("click", async function () {
  const btn = this;
  btn.disabled = true;
  btn.textContent = "Processing...";
  showPageLoader();

  if (!authToken) {
    Swal.fire("Login required", "Please add address first.", "warning");
    hidePageLoader();
    btn.disabled = false;
    btn.textContent = "Place Order";
    return;
  }

  if (!selectedAddressId) {
    Swal.fire("Select address", "Please select a delivery address.", "warning");
    hidePageLoader();
    btn.disabled = false;
    btn.textContent = "Place Order";
    return;
  }

  if (!cartData.length) {
    Swal.fire("Empty cart", "Your cart is empty.", "warning");
    hidePageLoader();
    btn.disabled = false;
    btn.textContent = "Place Order";
    return;
  }

  const payload = {
    shipping_address_id: selectedAddressId,
    payment_type: selectedPaymentMethod === "cod" ? "COD" : "Prepaid"
  };

  if (appliedCoupon) {
    payload.coupon_key = appliedCoupon.key_name;
  }

  try {
    const res = await fetch(`${baseUrl}/api/customer/order/create`, {
      method: "POST",
      headers: {
        "Authorization": `Bearer ${authToken}`,
        "Content-Type": "application/json"
      },
      body: JSON.stringify(payload)
    });

    const result = await res.json();

    if (!res.ok || !result.order_id) {
      Swal.fire("Error", result.message || "Failed to place order.", "error");
      btn.disabled = false;
      btn.textContent = "Place Order";
      return;
    }

    // COD → success page
    if (payload.payment_type === "COD") {
      window.location.href = `pages/order-success?order_id=${result.order_id}`;
      return;
    }

    // Prepaid → Razorpay
    openRazorpay(result);

  } catch (err) {
    console.error("Place order error:", err);
    Swal.fire("Error", "Something went wrong.", "error");
    btn.disabled = false;
    btn.textContent = "Place Order";
  }
});
</script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
function openRazorpay(orderData) {
  const options = {
    key: "<?= $razorPayKey ?>", // 🔁 replace with your key
    amount: orderData.amount * 100, // Razorpay expects paise
    currency: orderData.currency,
    name: "Liwaas",
    description: "Order Payment",
    order_id: orderData.razorpay_order_id,
    image: "<?= $baseFavicon ?>",
    handler: async function (response) {
      showPageLoader("Verifying payment...");
      await verifyPayment(response);
    },
    modal: {
        ondismiss: function () {
            window.location.href =
            `pages/order-success?order_id=${orderData.order_id}`;
        }
    },
    theme: {
      color: "#c7aa28"
    }
  };

  const rzp = new Razorpay(options);
  rzp.open();
}
</script>

<!-- Verify Payment -->
<script>
async function verifyPayment(response) {
  try {
    const payload = {
      razorpay_order_id: response.razorpay_order_id,
      razorpay_payment_id: response.razorpay_payment_id,
      razorpay_signature: response.razorpay_signature
    };

    const res = await fetch(`${baseUrl}/api/customer/payments/verify`, {
      method: "POST",
      headers: {
        "Authorization": `Bearer ${authToken}`,
        "Content-Type": "application/json"
      },
      body: JSON.stringify(payload)
    });

    const result = await res.json();

    if (result.success) {
      window.location.href = `pages/order-success?order_id=${result.order_id}`;
    } else {
       window.location.href = `pages/order-success?order_id=${result.order_id}`;
    }

  } catch (err) {
    console.error("Payment verification error:", err);
    window.location.href = `pages/order-success?order_id=${result.order_id}`;
  }
}
</script>

<?php include("../footer.php"); ?>