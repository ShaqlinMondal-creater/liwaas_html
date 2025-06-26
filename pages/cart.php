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
              <!-- Cart Item 1 -->
              <div class="p-6 flex gap-6" data-cart-item>
                <div class="w-24 h-24 flex-shrink-0 rounded-md overflow-hidden">
                  <img 
                    src="https://images.pexels.com/photos/6626903/pexels-photo-6626903.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                    alt="Premium Wool Blend Overcoat"
                    class="w-full h-full object-cover"
                  />
                </div>
                
                <div class="flex-1 flex flex-col">
                  <div class="flex justify-between">
                    <div>
                      <h3 class="text-sm font-medium text-gray-900">
                        Premium Wool Blend Overcoat
                      </h3>
                      <p class="mt-1 text-sm text-gray-500">Charcoal / Size L</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900" data-price data-original-price="299.99">
                      $299.99
                    </p>
                  </div>
                  
                  <div class="mt-4 flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                      <div class="flex items-center border border-gray-300 rounded-md" data-quantity-control data-max-quantity="28">
                        <button
                          data-decrease
                          class="p-2 text-gray-500 hover:bg-gray-50"
                          aria-label="Decrease quantity"
                        >
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                          </svg>
                        </button>
                        <span data-quantity class="w-10 text-center">1</span>
                        <button
                          data-increase
                          class="p-2 text-gray-500 hover:bg-gray-50"
                          aria-label="Increase quantity"
                        >
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                          </svg>
                        </button>
                      </div>
                      
                      <button 
                        data-save-for-later
                        class="text-sm font-medium text-gray-700 hover:text-blue-600 flex items-center gap-1"
                      >
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                        </svg>
                        Save
                      </button>
                    </div>
                    
                    <button 
                      data-remove-item
                      class="text-sm font-medium text-red-600 hover:text-red-500"
                    >
                      Remove
                    </button>
                  </div>
                </div>
              </div>

              <!-- Cart Item 2 -->
              <div class="p-6 flex gap-6" data-cart-item>
                <div class="w-24 h-24 flex-shrink-0 rounded-md overflow-hidden">
                  <img 
                    src="https://images.pexels.com/photos/6626778/pexels-photo-6626778.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                    alt="Cashmere Scarf"
                    class="w-full h-full object-cover"
                  />
                </div>
                
                <div class="flex-1 flex flex-col">
                  <div class="flex justify-between">
                    <div>
                      <h3 class="text-sm font-medium text-gray-900">
                        Cashmere Scarf
                      </h3>
                      <p class="mt-1 text-sm text-gray-500">Beige</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900" data-price data-original-price="79.99">
                      $79.99
                    </p>
                  </div>
                  
                  <div class="mt-4 flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                      <div class="flex items-center border border-gray-300 rounded-md" data-quantity-control data-max-quantity="10">
                        <button
                          data-decrease
                          class="p-2 text-gray-500 hover:bg-gray-50"
                          aria-label="Decrease quantity"
                        >
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                          </svg>
                        </button>
                        <span data-quantity class="w-10 text-center">1</span>
                        <button
                          data-increase
                          class="p-2 text-gray-500 hover:bg-gray-50"
                          aria-label="Increase quantity"
                        >
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                          </svg>
                        </button>
                      </div>
                      
                      <button 
                        data-save-for-later
                        class="text-sm font-medium text-gray-700 hover:text-blue-600 flex items-center gap-1"
                      >
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                        </svg>
                        Save
                      </button>
                    </div>
                    
                    <button 
                      data-remove-item
                      class="text-sm font-medium text-red-600 hover:text-red-500"
                    >
                      Remove
                    </button>
                  </div>
                </div>
              </div>

              <!-- Cart Item 3 -->
              <div class="p-6 flex gap-6" data-cart-item>
                <div class="w-24 h-24 flex-shrink-0 rounded-md overflow-hidden">
                  <img 
                    src="https://images.pexels.com/photos/45924/pexels-photo-45924.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                    alt="Leather Gloves"
                    class="w-full h-full object-cover"
                  />
                </div>
                
                <div class="flex-1 flex flex-col">
                  <div class="flex justify-between">
                    <div>
                      <h3 class="text-sm font-medium text-gray-900">
                        Leather Gloves
                      </h3>
                      <p class="mt-1 text-sm text-gray-500">Brown / Size M</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900" data-price data-original-price="59.99">
                      $59.99
                    </p>
                  </div>
                  
                  <div class="mt-4 flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                      <div class="flex items-center border border-gray-300 rounded-md" data-quantity-control data-max-quantity="15">
                        <button
                          data-decrease
                          class="p-2 text-gray-500 hover:bg-gray-50"
                          aria-label="Decrease quantity"
                        >
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                          </svg>
                        </button>
                        <span data-quantity class="w-10 text-center">1</span>
                        <button
                          data-increase
                          class="p-2 text-gray-500 hover:bg-gray-50"
                          aria-label="Increase quantity"
                        >
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                          </svg>
                        </button>
                      </div>
                      
                      <button 
                        data-save-for-later
                        class="text-sm font-medium text-gray-700 hover:text-blue-600 flex items-center gap-1"
                      >
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                        </svg>
                        Save
                      </button>
                    </div>
                    
                    <button 
                      data-remove-item
                      class="text-sm font-medium text-red-600 hover:text-red-500"
                    >
                      Remove
                    </button>
                  </div>
                </div>
              </div>

              <!-- Cart Item 4 -->
              <div class="p-6 flex gap-6" data-cart-item>
                <div class="w-24 h-24 flex-shrink-0 rounded-md overflow-hidden">
                  <img 
                    src="https://images.pexels.com/photos/45924/pexels-photo-45924.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                    alt="Leather Gloves"
                    class="w-full h-full object-cover"
                  />
                </div>
                
                <div class="flex-1 flex flex-col">
                  <div class="flex justify-between">
                    <div>
                      <h3 class="text-sm font-medium text-gray-900">
                        Leather Gloves
                      </h3>
                      <p class="mt-1 text-sm text-gray-500">Brown / Size M</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900" data-price data-original-price="59.99">
                      $59.99
                    </p>
                  </div>
                  
                  <div class="mt-4 flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                      <div class="flex items-center border border-gray-300 rounded-md" data-quantity-control data-max-quantity="15">
                        <button
                          data-decrease
                          class="p-2 text-gray-500 hover:bg-gray-50"
                          aria-label="Decrease quantity"
                        >
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                          </svg>
                        </button>
                        <span data-quantity class="w-10 text-center">1</span>
                        <button
                          data-increase
                          class="p-2 text-gray-500 hover:bg-gray-50"
                          aria-label="Increase quantity"
                        >
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                          </svg>
                        </button>
                      </div>
                      
                      <button 
                        data-save-for-later
                        class="text-sm font-medium text-gray-700 hover:text-blue-600 flex items-center gap-1"
                      >
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                        </svg>
                        Save
                      </button>
                    </div>
                    
                    <button 
                      data-remove-item
                      class="text-sm font-medium text-red-600 hover:text-red-500"
                    >
                      Remove
                    </button>
                  </div>
                </div>
              </div>

              <!-- Cart Item 5 -->
              <div class="p-6 flex gap-6" data-cart-item>
                <div class="w-24 h-24 flex-shrink-0 rounded-md overflow-hidden">
                  <img 
                    src="https://images.pexels.com/photos/45924/pexels-photo-45924.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                    alt="Leather Gloves"
                    class="w-full h-full object-cover"
                  />
                </div>
                
                <div class="flex-1 flex flex-col">
                  <div class="flex justify-between">
                    <div>
                      <h3 class="text-sm font-medium text-gray-900">
                        Leather Gloves
                      </h3>
                      <p class="mt-1 text-sm text-gray-500">Brown / Size M</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900" data-price data-original-price="59.99">
                      $59.99
                    </p>
                  </div>
                  
                  <div class="mt-4 flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                      <div class="flex items-center border border-gray-300 rounded-md" data-quantity-control data-max-quantity="15">
                        <button
                          data-decrease
                          class="p-2 text-gray-500 hover:bg-gray-50"
                          aria-label="Decrease quantity"
                        >
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                          </svg>
                        </button>
                        <span data-quantity class="w-10 text-center">1</span>
                        <button
                          data-increase
                          class="p-2 text-gray-500 hover:bg-gray-50"
                          aria-label="Increase quantity"
                        >
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                          </svg>
                        </button>
                      </div>
                      
                      <button 
                        data-save-for-later
                        class="text-sm font-medium text-gray-700 hover:text-blue-600 flex items-center gap-1"
                      >
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                        </svg>
                        Save
                      </button>
                    </div>
                    
                    <button 
                      data-remove-item
                      class="text-sm font-medium text-red-600 hover:text-red-500"
                    >
                      Remove
                    </button>
                  </div>
                </div>
              </div>

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
                  <span class="text-gray-900 font-medium" id="subtotal">$439.97</span>
                </div>
                
                <div class="flex justify-between text-sm">
                  <span class="text-gray-500">Shipping</span>
                  <span class="text-green-600 font-medium">Free</span>
                </div>
                
                <div class="pt-3 border-t border-gray-200 flex justify-between">
                  <span class="text-base font-medium text-gray-900">Total</span>
                  <span class="text-base font-medium text-gray-900" id="total">$439.97</span>
                </div>
              </div>
              
              <button class="w-full py-3 px-4 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
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
      document.addEventListener('DOMContentLoaded', function() {
        // Cart Item Quantity Controls
        const quantityControls = document.querySelectorAll('[data-quantity-control]');
        
        quantityControls.forEach(control => {
          const decreaseBtn = control.querySelector('[data-decrease]');
          const increaseBtn = control.querySelector('[data-increase]');
          const quantityDisplay = control.querySelector('[data-quantity]');
          const priceElement = control.closest('[data-cart-item]').querySelector('[data-price]');
          const originalPrice = parseFloat(priceElement.getAttribute('data-original-price'));
          
          function updatePrice(quantity) {
            const newPrice = (originalPrice * quantity).toFixed(2);
            priceElement.textContent = `$${newPrice}`;
            updateCartTotal();
          }
          
          decreaseBtn.addEventListener('click', () => {
            const currentQty = parseInt(quantityDisplay.textContent);
            if (currentQty > 1) {
              quantityDisplay.textContent = currentQty - 1;
              updatePrice(currentQty - 1);
            }
          });
          
          increaseBtn.addEventListener('click', () => {
            const currentQty = parseInt(quantityDisplay.textContent);
            const maxQty = parseInt(control.getAttribute('data-max-quantity'));
            if (currentQty < maxQty) {
              quantityDisplay.textContent = currentQty + 1;
              updatePrice(currentQty + 1);
            }
          });
        });
        
        // Remove Cart Item
        const removeButtons = document.querySelectorAll('[data-remove-item]');
        
        removeButtons.forEach(button => {
          button.addEventListener('click', () => {
            const cartItem = button.closest('[data-cart-item]');
            cartItem.classList.add('opacity-0');
            setTimeout(() => {
              cartItem.remove();
              updateCartTotal();
              updateCartCount();
            }, 300);
          });
        });
        
        // Update Cart Total
        function updateCartTotal() {
          const subtotalElement = document.getElementById('subtotal');
          const totalElement = document.getElementById('total');
          const priceElements = document.querySelectorAll('[data-price]');
          
          let subtotal = 0;
          priceElements.forEach(element => {
            subtotal += parseFloat(element.textContent.replace('$', ''));
          });
          
          const shipping = 0; // Free shipping
          const total = subtotal + shipping;
          
          subtotalElement.textContent = `$${subtotal.toFixed(2)}`;
          totalElement.textContent = `$${total.toFixed(2)}`;
        }
        
        // Update Cart Count
        function updateCartCount() {
          const cartCount = document.querySelectorAll('[data-cart-item]').length;
          const cartCountElements = document.querySelectorAll('[data-cart-count]');
          
          cartCountElements.forEach(element => {
            element.textContent = cartCount;
          });
        }
        
        // Save for Later
        const saveButtons = document.querySelectorAll('[data-save-for-later]');
        
        saveButtons.forEach(button => {
          button.addEventListener('click', () => {
            const icon = button.querySelector('svg');
            button.classList.toggle('text-blue-600');
            icon.classList.toggle('fill-blue-600');
          });
        });
        
        // Initialize
        updateCartTotal();
        updateCartCount();

        /* ---------- SKELETON SWAP ---------- */
        window.onload = () => {
          // swap visibility
          document.getElementById('cart-skeleton').classList.add('hidden');
          const real = document.getElementById('cart-content');
          real.classList.remove('hidden');

          // make sure totals match fresh DOM
          if (typeof updateCartTotal === 'function') updateCartTotal();
          if (typeof updateCartCount === 'function') updateCartCount();
        };
        
      });
    </script>
<?php include("../footer.php"); ?>