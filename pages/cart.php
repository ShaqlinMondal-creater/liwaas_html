<base href="../">
<?php include("../header.php"); ?>
    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 py-8">
      <!-- ▸▸▸  SKELETON  ◂◂◂ -->
        <div id="cart-skeleton">
          <div class="flex flex-col lg:flex-row gap-8 animate-pulse">

            <!-- Skeleton Cart (left column) -->
            <div class="flex-1 space-y-6">
              <?php for ($i = 0; $i < 5; $i++): ?>
              <div class="p-6 flex gap-6 bg-white rounded-lg shadow-sm border border-gray-200">
                <div class="w-24 h-24 bg-gray-200 rounded-md"></div>
                <div class="flex-1 space-y-4">
                  <div class="h-4 bg-gray-200 rounded w-2/3"></div>
                  <div class="h-4 bg-gray-200 rounded w-1/3"></div>
                  <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                </div>
              </div>
              <?php endfor; ?>
            </div>

            <!-- Skeleton Summary (right column) -->
            <div class="lg:w-96 space-y-4">
              <div class="bg-white rounded-lg shadow-lg border border-gray-200 p-6 space-y-4">
                <div class="h-4 bg-gray-200 rounded w-1/3"></div>
                <div class="space-y-3">
                  <div class="h-3 bg-gray-200 rounded w-full"></div>
                  <div class="h-3 bg-gray-200 rounded w-5/6"></div>
                  <div class="h-3 bg-gray-200 rounded w-full"></div>
                </div>
                <div class="h-10 bg-gray-200 rounded"></div>
              </div>
              <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 space-y-4">
                <div class="h-4 bg-gray-200 rounded w-1/2"></div>
                <div class="space-y-3">
                  <div class="h-3 bg-gray-200 rounded w-5/6"></div>
                  <div class="h-3 bg-gray-200 rounded w-4/6"></div>
                  <div class="h-3 bg-gray-200 rounded w-5/6"></div>
                </div>
              </div>
            </div>

          </div>
        </div>
      <!-- ▸▸▸  END SKELETON  ◂◂◂ -->


      <div class="flex flex-col lg:flex-row gap-8">
        <!-- Cart Items -->
        <div class="flex-1">
          <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
            <div class="p-6 border-b border-gray-200">
              <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold text-gray-900">Shopping Cart</h1>
                <span class="text-sm text-gray-500">
                  <span data-cart-count>3</span> items
                </span>
              </div>
            </div>

            <!-- Cart Items List -->
            <div class="divide-y divide-gray-200">
                <!--  -->
            </div>
          </div>
        </div>

        <!-- Order Summary -->
        <div class="lg:w-96">
          <div class="sticky top-20 bg-white rounded-lg shadow-lg border border-gray-200 p-6 space-y-4">
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 space-y-4">
              <h2 class="text-lg font-medium text-gray-900">Order Summary</h2>
              
              <div class="space-y-3">
                <div class="flex justify-between text-sm">
                  <span class="text-gray-500">Subtotal</span>
                  <span class="text-gray-900 font-medium" id="subtotal">₹ 0.00</span>
                </div>               
                <div class="flex justify-between text-sm">
                  <span class="text-gray-500">Shipping</span>
                  <span class="text-green-600 font-medium" id="shipping">Free</span>
                </div>
                
                <div class="pt-3 border-t border-gray-200 flex justify-between">
                  <span class="text-base font-medium text-gray-900">Total</span>
                  <span class="text-base font-medium text-gray-900" id="total">₹ 0.00</span>
                </div>
              </div>
              
              <button id="checkoutBtn" class="w-full py-3 px-4 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                Proceed to Checkout
              </button>
              
              <div class="pt-4">
                <div class="flex items-center gap-2 text-sm text-gray-500">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                    <line x1="1" y1="10" x2="23" y2="10"></line>
                  </svg>
                  Secure checkout
                </div>
              </div>
            </div>
            
            <!-- Shipping Info -->
            <div class="mt-6 bg-white rounded-lg shadow-sm border border-gray-200 p-6 space-y-4">
              <h3 class="font-medium text-gray-900">Shipping Information</h3>
              
              <div class="space-y-3 text-sm text-gray-500">
                <div class="flex items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z"></path>
                    <circle cx="12" cy="10" r="3"></circle>
                  </svg>
                  Free shipping on all orders
                </div>
                <div class="flex items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                  </svg>
                  Secure checkout with SSL
                </div>
                <div class="flex items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                    <circle cx="12" cy="10" r="3"></circle>
                  </svg>
                  Estimated delivery: 3-5 business days
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script>
      document.addEventListener("DOMContentLoaded", async function() {
        const authToken = localStorage.getItem("auth_token");
        const guestId   = localStorage.getItem("guest_id");

        const skeleton  = document.getElementById("cart-skeleton");
        const cartList  = document.querySelector(".divide-y");
        const subtotalElement = document.getElementById("subtotal");
        const totalElement    = document.getElementById("total");
        const cartCountElements = document.querySelectorAll("[data-cart-count]");

        let cartData = [];
        const baseUrl = "<?= $baseUrl ?>";
        /* ---------------- GET CART ---------------- */
        async function fetchCart() {
          try {
            let headers = { "Content-Type": "application/json" };
            let url = `${baseUrl}/api/cart/get-cart`;

            if (authToken) {
              headers["Authorization"] = `Bearer ${authToken}`;
            } else if (guestId) {
              url += `?temp_id=${guestId}`;
            }

            const res = await fetch(url, { method: "GET", headers });
            const result = await res.json();

            if (result.success) {
              cartData = result.data || [];
              if (!authToken && result.temp_id) {
                localStorage.setItem("guest_id", result.temp_id);
              }
              renderCart();
            } else {
              cartList.innerHTML = `<div class="p-6 text-gray-500">No items in your cart.</div>`;
            }
          } catch (err) {
            console.error("Error fetching cart:", err);
            cartList.innerHTML = `<div class="p-6 text-red-500">Failed to load cart. Try again later.</div>`;
          } finally {
            skeleton.classList.add("hidden");
          }
        }

        function checkCartStatus() {
            const checkoutBtn = document.getElementById("checkoutBtn");
            checkoutBtn.disabled = cartData.length === 0;
        }

        /* ---------------- RENDER CART ---------------- */
        function renderCart() {
          cartList.innerHTML = "";
          if (!cartData.length) {
            cartList.innerHTML = `
                <div class="flex flex-col items-center justify-center py-20 text-center">
                  <img src="assets/empty_cart.svg" alt="Empty Cart" class="w-40 h-40 mb-6 opacity-80">
                  <h2 class="text-2xl font-semibold mb-2">Your cart is empty</h2>
                  <p class="text-gray-500 mb-6">Looks like you haven’t added anything yet.</p>
                  <a href="shop.php" class="bg-orange-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-orange-700 transition">
                    Start Shopping
                  </a>
                </div>
              `;
            }

          cartData.forEach(item => {
            const variation = item.variation || {};
            let imageUrl = variation.images?.[0] || "assets/placeholder.jpg";
            imageUrl = imageUrl.replace("http://127.0.0.1:8000/uploads/http://", "http://");

            const html = `
              <div class="p-6 flex gap-6" data-cart-item data-id="${item.cart_id}">
                <div class="w-24 h-24 flex-shrink-0 rounded-md overflow-hidden">
                  <img src="${imageUrl}" alt="${item.product_name}" class="w-full h-full object-cover" />
                </div>
                <div class="flex-1 flex flex-col">
                  <div class="flex justify-between">
                    <div>
                      <h3 class="text-sm font-medium text-gray-900">${item.product_name}</h3>
                      <p class="mt-1 text-sm text-gray-500">Size: ${variation.size || "-"} </p>
                    </div>
                    <p class="text-sm font-medium text-gray-900" data-price data-original-price="${item.sell_price}">
                      ₹${item.total_price}
                    </p>
                  </div>
                  <div class="mt-4 flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                      <div class="flex items-center border border-gray-300 rounded-md" data-quantity-control data-max-quantity="50">
                        <button data-decrease class="p-2 text-gray-500 hover:bg-gray-50">-</button>
                        <span data-quantity class="w-10 text-center">${item.quantity}</span>
                        <button data-increase class="p-2 text-gray-500 hover:bg-gray-50">+</button>
                      </div>
                    </div>
                    <button data-remove-item class="text-sm font-medium text-red-600 hover:text-red-500">
                      Remove
                    </button>
                  </div>
                </div>
              </div>
            `;
            cartList.insertAdjacentHTML("beforeend", html);
          });

          attachEvents();
          updateCartTotal();
          updateCartCount();
          checkCartStatus(); // ✅ Call after rendering cart
        }       

        /* ---------------- UPDATE QUANTITY ---------------- */
        async function updateQuantity(cartId, quantity) {
          try {
            let headers = { "Content-Type": "application/json" };
            let body = null;

            if (authToken) {
              headers["Authorization"] = `Bearer ${authToken}`;
              body = JSON.stringify({ quantity });
            } else {
              body = JSON.stringify({ temp_id: guestId, quantity });
            }

            const res = await fetch(`${baseUrl}/api/cart/update-cart/${cartId}`, {
              method: "POST",
              headers,
              body
            });

            const result = await res.json();
            if (result.success) {
              // Update local cart data with response
              const updatedItem = result.data;
              cartData = cartData.map(i =>
                i.cart_id === cartId ? { ...i, ...updatedItem } : i
              );
              renderCart();
            } else {
              console.error("Update failed:", result.message);
            }
          } catch (err) {
            console.error("Error updating item:", err);
          }
        }

        /* ---------------- REMOVE CART ITEM ---------------- */
        async function removeCartItem(cartId) {
          try {
            let headers = { "Content-Type": "application/json" };
            let body = null;

            if (authToken) {
              headers["Authorization"] = `Bearer ${authToken}`;
            } else {
              body = JSON.stringify({ temp_id: guestId });
            }

            const res = await fetch(`${baseUrl}/api/cart/delete-cart/${cartId}`, {
              method: "DELETE", // assuming API expects POST, not DELETE
              headers,
              body
            });

            const result = await res.json();
            if (result.success) {
              // Remove item locally
              cartData = cartData.filter(i => i.cart_id !== cartId);
              renderCart();
            } else {
              console.error("Remove failed:", result.message);
            }
          } catch (err) {
            console.error("Error removing item:", err);
          }
        }

        /* ---------------- EVENTS ---------------- */
        function attachEvents() {
          // Quantity controls
          document.querySelectorAll("[data-quantity-control]").forEach(control => {
            const decreaseBtn = control.querySelector("[data-decrease]");
            const increaseBtn = control.querySelector("[data-increase]");
            const quantityDisplay = control.querySelector("[data-quantity]");
            const priceElement = control.closest("[data-cart-item]").querySelector("[data-price]");
            const originalPrice = parseFloat(priceElement.getAttribute("data-original-price"));
            const cartId = parseInt(control.closest("[data-cart-item]").dataset.id);

            decreaseBtn.onclick = () => {
              let qty = parseInt(quantityDisplay.textContent);
              if (qty > 1) {
                qty--;
                quantityDisplay.textContent = qty;
                priceElement.textContent = `₹${(originalPrice * qty).toFixed(2)}`;
                updateCartTotal();
                updateQuantity(cartId, qty);
              }
            };

            increaseBtn.onclick = () => {
              let qty = parseInt(quantityDisplay.textContent);
              qty++;
              quantityDisplay.textContent = qty;
              priceElement.textContent = `₹${(originalPrice * qty).toFixed(2)}`;
              updateCartTotal();
              updateQuantity(cartId, qty);
            };
          });

          // Remove buttons
          document.querySelectorAll("[data-remove-item]").forEach(button => {
            const cartId = parseInt(button.closest("[data-cart-item]").dataset.id);
            button.onclick = () => removeCartItem(cartId);
          });
        }

        /* ---------------- UPDATE TOTALS ---------------- */
        function updateCartTotal() {
          let subtotal = 0;

          // ✅ Calculate subtotal (sum of item prices)
          document.querySelectorAll("[data-price]").forEach(el => {
            subtotal += parseFloat(el.textContent.replace("₹", "")) || 0;
          });

          // Subtotal display
          subtotalElement.textContent = `₹${subtotal.toFixed(2)}`;

          // ✅ Shipping calculation
          const shippingElement = document.getElementById("shipping");
          let shipping = 0;
          if (subtotal > 0 && subtotal < 3500) {
            shipping = 120;
            shippingElement.textContent = `₹${shipping.toFixed(2)}`;
            shippingElement.classList.remove("text-green-600");
            shippingElement.classList.add("text-gray-900");
          } else if (subtotal >= 3500) {
            shipping = 0;
            shippingElement.textContent = "Free";
            shippingElement.classList.remove("text-gray-900");
            shippingElement.classList.add("text-green-600");
          } else {
            shippingElement.textContent = "₹0.00";
            shippingElement.classList.remove("text-green-600");
            shippingElement.classList.add("text-gray-900");
          }

          // ✅ Total = subtotal + tax + shipping
          const total = subtotal +  shipping;
          totalElement.textContent = `₹${total.toFixed(2)}`;

          // ✅ Enable/Disable checkout button
          const checkoutBtn = document.getElementById("checkoutBtn");
          if (cartData.length === 0) {
            checkoutBtn.disabled = true;
            checkoutBtn.classList.add("opacity-50", "cursor-not-allowed");
          } else {
            checkoutBtn.disabled = false;
            checkoutBtn.classList.remove("opacity-50", "cursor-not-allowed");
          }
        }

        function updateCartCount() {
          cartCountElements.forEach(el => {
            el.textContent = cartData.length;
          });
        }

        /* ---------------- INIT ---------------- */
        fetchCart();
      });

      document.getElementById("checkoutBtn").addEventListener("click", () => {
          if (!document.getElementById("checkoutBtn").disabled) {
              window.location.href = "pages/checkout";
          }
      });

    </script>

<?php include("../footer.php"); ?>