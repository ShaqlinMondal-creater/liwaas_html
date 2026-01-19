<base href="../">
<?php include("../header.php"); ?>

<!-- ░░░░░░░░░░░░  SKELETON  ░░░░░░░░░░░░ -->
<div id="productSkeleton" class="max-w-7xl mx-auto px-4 py-8">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12 animate-pulse">
    <!-- Left: image skeleton -->
    <div class="space-y-4">
      <div class="aspect-square rounded-lg bg-gray-200"></div>
      <div class="flex gap-2">
        <div class="w-20 h-20 rounded bg-gray-200"></div>
        <div class="w-20 h-20 rounded bg-gray-200"></div>
        <div class="w-20 h-20 rounded bg-gray-200"></div>
        <div class="w-20 h-20 rounded bg-gray-200"></div>
      </div>
    </div>
    <!-- Right: text skeleton -->
    <div class="space-y-4">
      <div class="h-4 w-24 bg-gray-200 rounded"></div>
      <div class="h-8 w-2/3 bg-gray-200 rounded"></div>
      <div class="h-4 w-1/2 bg-gray-200 rounded"></div>
      <div class="h-4 w-3/4 bg-gray-200 rounded"></div>
      <div class="h-10 w-full bg-gray-200 rounded mt-6"></div>
      <div class="h-10 w-full bg-gray-200 rounded"></div>
      <div class="h-10 w-full bg-gray-200 rounded"></div>
    </div>
  </div>

  <!-- Related products skeleton -->
  <div class="space-y-4">
    <div class="h-6 w-48 bg-gray-200 rounded"></div>
    <div class="flex gap-4 overflow-x-auto">
      <div class="flex-shrink-0 w-48 space-y-2">
        <div class="aspect-square bg-gray-200 rounded"></div>
        <div class="h-4 w-3/4 bg-gray-200 rounded"></div>
        <div class="h-4 w-1/2 bg-gray-200 rounded"></div>
      </div>
      <div class="flex-shrink-0 w-48 space-y-2">
        <div class="aspect-square bg-gray-200 rounded"></div>
        <div class="h-4 w-3/4 bg-gray-200 rounded"></div>
        <div class="h-4 w-1/2 bg-gray-200 rounded"></div>
      </div>
      <div class="flex-shrink-0 w-48 space-y-2">
        <div class="aspect-square bg-gray-200 rounded"></div>
        <div class="h-4 w-3/4 bg-gray-200 rounded"></div>
        <div class="h-4 w-1/2 bg-gray-200 rounded"></div>
      </div>
    </div>
  </div>
</div>

      <!-- Main Content -->
      <!-- <main class="container mx-auto px-4 py-8"> -->
      <main id="productContent" class="max-w-7xl mx-auto px-4 py-8 hidden"> 
        <!-- Product Main Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
          <!-- Product Images -->
          <div class="relative flex flex-col gap-4">
            <div class="relative overflow-hidden rounded-lg bg-gray-100 aspect-square">
              <div class="w-full h-full transition-transform duration-300">
                <img
                  id="mainImage"
                  alt=""
                  class="object-cover w-full h-full"
                />
              </div>

              <!-- Navigation Buttons -->
              <div class="absolute inset-0 flex items-center justify-between px-4">
                <button
                  id="prevImage"
                  class="p-2 rounded-full bg-white/80 shadow-md text-gray-700 hover:bg-white transition-colors"
                  aria-label="Previous image"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"></polyline>
                  </svg>
                </button>
                <button
                  id="nextImage"
                  class="p-2 rounded-full bg-white/80 shadow-md text-gray-700 hover:bg-white transition-colors"
                  aria-label="Next image"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"></polyline>
                  </svg>
                </button>
              </div>
            </div>

            <!-- Thumbnails -->
            <div id="thumbContainer" class="flex gap-2 overflow-x-auto pb-2"></div>
          </div>

          <!-- Product Info -->
          <div id="product-options" class="space-y-6">
            <div>
              <h3 class="text-sm font-medium text-blue-600 brand_name"></h3>
            </div>

            <h1 class="text-3xl font-bold text-gray-900 leading-tight product_name">
              <!-- Product Name -->
            </h1>

            <!-- Ratings & Reviews -->
            <div class="flex items-center gap-4">
              <div class="flex items-center gap-1.5">
                <div class="flex">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="text-amber-400">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="text-amber-400">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="text-amber-400">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="text-amber-400">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="text-amber-400">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                  </svg>
                </div>
                <span class="text-sm font-medium text-gray-900">4.8</span>
              </div>
              <div class="w-px h-4 bg-gray-300"></div>
              <a href="#reviews" class="text-sm font-medium text-blue-600 hover:text-blue-500">
                124 reviews
              </a>
              <button
                id="shareButton"
                class="ml-auto flex items-center gap-1 text-sm text-gray-600 hover:text-gray-900"
              >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="18" cy="5" r="3"></circle>
                  <circle cx="6" cy="12" r="3"></circle>
                  <circle cx="18" cy="19" r="3"></circle>
                  <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                  <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                </svg>
                Share
              </button>
            </div>

            <!-- Description -->
            <p class="text-gray-700 leading-relaxed short_desc">
            </p>

            <!-- Price -->
            <div class="flex items-end gap-2">
              <span class="text-2xl font-bold text-gray-900 sale_price"></span>
              <span class="text-lg text-gray-500 line-through regular_price"></span>
              <span class="ml-2 text-sm font-medium text-red-600 bg-red-100 px-2 py-0.5 rounded discount_percentage"> </span>
            </div>

            <!-- Color Options -->
            <div class="space-y-3">
              <div class="flex justify-between">
                <span class="text-sm font-medium text-gray-700">Color</span>
                <span id="selectedColorName" class="text-sm text-gray-500"></span>
              </div>
              <div id="colorOptions" class="flex gap-3"></div>
            </div>

            <!-- Size Options -->
            <div class="space-y-3">
              <div class="flex justify-between">
                <span class="text-sm font-medium text-gray-700">Size</span>
                <a href="#size-guide" class="text-sm font-medium text-blue-600 hover:text-blue-500">
                  Size Guide
                </a>
              </div>
              <div id="sizeOptions" class="flex flex-wrap gap-2"></div>
            </div>

            <!-- Quantity Selector -->
            <div class="flex items-center space-x-4">
              <span class="text-sm font-medium text-gray-700">Quantity</span>
              <div class="flex items-center border border-gray-300 rounded-md">
                <button
                  id="decreaseQuantity"
                  class="p-2 text-gray-500 hover:bg-gray-100"
                  aria-label="Decrease quantity"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                  </svg>
                </button>
                <span id="quantity" class="w-10 text-center">1</span>
                <button
                  id="increaseQuantity"
                  class="p-2 text-gray-500 hover:bg-gray-100"
                  aria-label="Increase quantity"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                  </svg>
                </button>
              </div>
              <span id="stockText" class="text-sm text-gray-500"></span>
            </div>

            <!-- Shipping Info -->
            <div class="space-y-2 p-4 bg-gray-50 rounded-lg">
              <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-500">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
                <span class="text-sm font-medium">Free Shipping</span>
              </div>
              <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-500">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
                <span class="text-sm">Estimated delivery: <span class="font-medium">3-5 business days</span></span>
              </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex gap-4">
              <button
                id="addToCartButton"
                class="flex-1 py-3 px-6 flex items-center justify-center gap-2 rounded-lg font-medium bg-blue-600 text-white hover:bg-blue-700 transition-all"
              >
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                  <line x1="3" y1="6" x2="21" y2="6"></line>
                  <path d="M16 10a4 4 0 0 1-8 0"></path>
                </svg>
                Add to Cart
              </button>
              <button
                id="wishlistButton"
                class="p-3 rounded-lg border border-gray-300 text-gray-600 hover:bg-gray-50 transition-all"
                aria-label="Add to wishlist"
              >
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M20.84 4.61a5.5 5.5  0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                </svg>
              </button>
            </div>

            <!-- SKU -->
            <div class="pt-2">
              <p class="text-xs text-gray-500 sku_text"></p>
            </div>
          </div>
        </div>

        <!-- Mobile Tabs -->
        <div class="md:hidden mb-8">
          <div class="border-b border-gray-200 flex space-x-4">
            <button data-tab="description" class="pb-2 px-1 border-b-2 border-blue-600 text-blue-600 font-medium">
              Description
            </button>
            <button data-tab="specifications" class="pb-2 px-1 text-gray-500">
              Specifications
            </button>
            <button data-tab="reviews" class="pb-2 px-1 text-gray-500">
              Reviews
            </button>
          </div>

          <div class="py-4">
            <div data-tab-content="description" class="prose prose-sm max-w-none text-gray-700 mb_long_desc">
              <p class="whitespace-pre-line">
                <!-- Long Descrip -->
              </p>
            </div>

            <div data-tab-content="specifications" class="hidden">
              <!-- Specifications content -->
            </div>

            <div data-tab-content="reviews" class="hidden">
              <!-- Reviews content -->
            </div>
          </div>
        </div>

        <!-- Desktop Sections -->
        <div class="hidden md:grid grid-cols-1 gap-8 mb-12">
          <!-- Description -->
          <div class="bg-white rounded-lg border border-gray-200">
            <div class="px-6 py-4 border-b border-gray-200">
              <h2 class="text-lg font-semibold text-gray-900">Product Description</h2>
            </div>
            <div class="p-6">
              <div class="prose max-w-none text-gray-700 long_desc">
                <p class="whitespace-pre-line">
                  Crafted with the utmost attention to detail, our Premium Wool Blend Overcoat combines luxurious materials with expert tailoring for an exceptional cold-weather essential. The rich wool blend provides superior warmth and comfort while maintaining a refined appearance.

                  The classic silhouette features a versatile lapel collar, convenient side pockets, and meticulous internal construction to ensure longevity. This sophisticated piece transitions effortlessly from professional settings to formal evening occasions.

                  Each coat undergoes rigorous quality control to meet our exacting standards, ensuring you receive a garment that will remain a cornerstone of your wardrobe for years to come.
                </p>
              </div>
            </div>
          </div>

          <!-- Specifications -->
          <div class="bg-white rounded-lg border border-gray-200">
            <div class="px-6 py-4 border-b border-gray-200">
              <h2 class="text-lg font-semibold text-gray-900">Product Specifications</h2>
            </div>
            <div class="divide-y divide-gray-200" id="specTable"></div>
          </div>

          <!-- Reviews -->
          <div id="reviews" class="bg-white rounded-lg border border-gray-200">
            <!-- Reviews content -->
          </div>
        </div>

        <!-- Related Products Section -->
        <div class="mb-12">
          <div class="bg-white rounded-lg border border-gray-200">
              <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
              <h2 class="text-lg font-semibold text-gray-900">You May Also Like</h2>

              <!-- Navigation Buttons -->
              <div class="flex gap-2">
                  <button
                  class="related-prev p-1 rounded-full border border-gray-300 text-gray-600 hover:bg-gray-50 transition-colors"
                  aria-label="Scroll left"
                  >
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="15 18 9 12 15 6"></polyline>
                  </svg>
                  </button>
                  <button
                  class="related-next p-1 rounded-full border border-gray-300 text-gray-600 hover:bg-gray-50 transition-colors"
                  aria-label="Scroll right"
                  >
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="9 18 15 12 9 6"></polyline>
                  </svg>
                  </button>
              </div>
              </div>

              <!-- Products Container (will be populated by JavaScript) -->
              <div class="px-6 py-4 flex gap-4 overflow-x-auto" id="relatedProductsContainer">
              <!-- Product cards will be inserted here dynamically -->
              </div>
          </div>
        </div>
      </main>

      <script>
        // ============================================
        // PRODUCT DETAIL PAGE - CLEAN & ORGANIZED
        // ============================================

        // ========== GLOBAL VARIABLES ==========
        const BASE_URL = "<?= $baseUrl ?>";
        const STATIC_SIZES = ["XS", "S", "M", "L", "XL", "XXL", "XXXL"];
        
        let images = [];
        let variations = [];
        let COLOR_MAP = {};
        let selectedColor = null;
        let selectedSize = null;
        let currentStock = 0;
        let currentImageIndex = 0;
        let currentVariation = null;
        let currentProductId = null;

        // ========== UTILITY FUNCTIONS ==========
        function normalize(value) {
          return String(value).trim().toLowerCase();
        }

        function getProductUid() {
          const params = new URLSearchParams(window.location.search);
          return params.get("id");
        }

        function findVariation(color, size) {
          return variations.find(v => 
            normalize(v.color) === normalize(color) && 
            sizeMatches(v, size)
          );
        }

        function sizeMatches(variation, size) {
          if (!variation.size || !size) return false;
          const sizes = variation.size.split(",").map(s => normalize(s.trim()));
          return sizes.includes(normalize(size));
        }

        function getAllAvailableSizes() {
          const sizeSet = new Set();
          variations.forEach(v => {
            if (v.size) {
              v.size.split(",").forEach(s => sizeSet.add(normalize(s.trim())));
            }
          });
          return sizeSet;
        }

        function getAllAvailableColors() {
          return [...new Set(variations.map(v => v.color))];
        }

        // ========== COLOR & SIZE LOGIC ==========
        function getAvailableSizesForColor(color) {
          if (!color) return getAllAvailableSizes();
          const sizeSet = new Set();
          variations.forEach(v => {
            if (normalize(v.color) === normalize(color) && v.size) {
              v.size.split(",").forEach(s => sizeSet.add(normalize(s.trim())));
            }
          });
          return sizeSet;
        }

        function getAvailableColorsForSize(size) {
          if (!size) return getAllAvailableColors();
          const colorSet = new Set();
          variations.forEach(v => {
            if (sizeMatches(v, size)) {
              colorSet.add(v.color);
            }
          });
          return [...colorSet];
        }

        function updateAvailability() {
          const availableColors = selectedSize ? getAvailableColorsForSize(selectedSize) : getAllAvailableColors();
          const availableSizes = selectedColor ? getAvailableSizesForColor(selectedColor) : getAllAvailableSizes();

          // Update color buttons
          document.querySelectorAll('.color-btn').forEach(btn => {
            const color = btn.dataset.color;
            const isAvailable = availableColors.includes(color);
            const isSelected = normalize(color) === normalize(selectedColor);
            
            btn.disabled = !isAvailable;
            btn.classList.toggle('opacity-30', !isAvailable);
            btn.classList.toggle('cursor-not-allowed', !isAvailable);
            btn.classList.toggle('ring-2', isSelected);
            btn.classList.toggle('ring-blue-500', isSelected);
          });

          // Update size buttons
          document.querySelectorAll('[data-size]').forEach(btn => {
            const size = btn.dataset.size;
            const isAvailable = availableSizes.has(normalize(size));
            const isSelected = normalize(size) === normalize(selectedSize);
            
            btn.disabled = !isAvailable;
            btn.classList.toggle('opacity-30', !isAvailable);
            btn.classList.toggle('cursor-not-allowed', !isAvailable);
            btn.classList.toggle('ring-2', isSelected);
            btn.classList.toggle('ring-blue-500', isSelected);
          });
        }

        function autoSelectValidVariation() {
          if (!selectedColor || !selectedSize) return;
          
          const match = findVariation(selectedColor, selectedSize);
          
          // If current combination doesn't exist, try to find a fallback
          if (!match) {
            // First, try to keep color and change size
            const availableSizes = getAvailableSizesForColor(selectedColor);
            if (availableSizes.size > 0) {
              const firstSize = Array.from(availableSizes)[0];
              // Check if we should use current size or first available
              if (availableSizes.has(normalize(selectedSize))) {
                // Current size is available for this color, find the variation
                const newMatch = findVariation(selectedColor, selectedSize);
                if (newMatch) {
                  applyVariation(newMatch, true);
                  return;
                }
              } else {
                // Current size not available, use first available
                selectedSize = firstSize;
                const newMatch = findVariation(selectedColor, selectedSize);
                if (newMatch) {
                  applyVariation(newMatch, true);
                  return;
                }
              }
            }
            
            // If that fails, try to keep size and change color
            const availableColors = getAvailableColorsForSize(selectedSize);
            if (availableColors.length > 0 && !availableColors.includes(selectedColor)) {
              selectedColor = availableColors[0];
              document.getElementById("selectedColorName").innerText = selectedColor;
              const newMatch = findVariation(selectedColor, selectedSize);
              if (newMatch) {
                applyVariation(newMatch, true);
                return;
              }
            }
            
            // Last resort: use first available variation
            if (variations.length > 0) {
              const firstVar = variations[0];
              selectedColor = firstVar.color;
              selectedSize = firstVar.size ? firstVar.size.split(",")[0].trim() : null;
              document.getElementById("selectedColorName").innerText = selectedColor;
              applyVariation(firstVar, true);
            }
          } else {
            // Found a match - check if color changed to update images
            const colorChanged = !currentVariation || 
              normalize(currentVariation.color) !== normalize(match.color);
            applyVariation(match, colorChanged);
          }
        }

        // ========== VARIATION SELECTION ==========
        function selectColor(color) {
          const btn = document.querySelector(`[data-color="${color}"]`);
          if (!btn || btn.disabled) return;

          selectedColor = color;
          document.getElementById("selectedColorName").innerText = color;
          
          // Update color button visual state
          document.querySelectorAll('.color-btn').forEach(b => {
            b.classList.remove('ring-2', 'ring-blue-500');
          });
          btn.classList.add('ring-2', 'ring-blue-500');
          
          // Re-render size options for the new color
          renderSizeOptions();
          
          autoSelectValidVariation();
        }

        function selectSize(size) {
          const btn = document.querySelector(`[data-size="${size}"]`);
          if (!btn || btn.disabled) return;

          selectedSize = size;
          
          // Update size button visual state
          document.querySelectorAll('[data-size]').forEach(b => {
            b.classList.remove('ring-2', 'ring-blue-500');
          });
          btn.classList.add('ring-2', 'ring-blue-500');
          
          autoSelectValidVariation();
        }

        function applyVariation(variation, updateImages = true) {
          if (!variation) return;

          currentVariation = variation;
          selectedColor = variation.color;
          
          // Preserve selected size if it exists in this variation, otherwise use first available
          const variationSizes = variation.size ? variation.size.split(",").map(s => s.trim()) : [];
          if (selectedSize && variationSizes.includes(selectedSize)) {
            // Keep current selected size if it's available in this variation
          } else if (variationSizes.length > 0) {
            selectedSize = variationSizes[0];
          }
          
          currentStock = parseInt(variation.stock) || 0;

          // Parse prices (they come as strings from API)
          const regularPrice = parseFloat(variation.regular_price) || 0;
          const sellPrice = parseFloat(variation.sell_price) || 0;

          // Calculate discount
          let discount = 0;
          if (regularPrice > 0) {
            discount = Math.round(((regularPrice - sellPrice) / regularPrice) * 100);
          }

          // Update price display (format as integer)
          document.querySelector(".sale_price").innerText = `₹${Math.round(sellPrice)}`;
          document.querySelector(".regular_price").innerText = `₹${Math.round(regularPrice)}`;
          
          const mobilePrice = document.getElementById("mobilePrice");
          if (mobilePrice) {
            mobilePrice.innerText = `₹${Math.round(sellPrice)}`;
          }

          // Update discount
          const discountEl = document.querySelector(".discount_percentage");
          discountEl.innerText = discount > 0 ? `${discount}% OFF` : "";

          // Update stock
          document.getElementById("stockText").innerText = `${currentStock} available`;

          // Update SKU
          document.querySelector(".sku_text").innerText = `SKU: ${variation.aid}-${variation.uid}`;

          // Update images if color changed
          if (updateImages) {
            renderGallery(variation.images || []);
          }

          // Update specifications
          renderSpecs(variation.specs || []);

          // Update quantity if needed
          const qtyEl = document.getElementById("quantity");
          if (qtyEl && parseInt(qtyEl.innerText) > currentStock) {
            qtyEl.innerText = Math.min(parseInt(qtyEl.innerText), currentStock);
          }

          // Update availability states and button visual states
          updateAvailability();
          
          // Update selected button states
          document.querySelectorAll('.color-btn').forEach(btn => {
            if (normalize(btn.dataset.color) === normalize(selectedColor)) {
              btn.classList.add('ring-2', 'ring-blue-500');
            } else {
              btn.classList.remove('ring-2', 'ring-blue-500');
            }
          });
          
          document.querySelectorAll('[data-size]').forEach(btn => {
            if (normalize(btn.dataset.size) === normalize(selectedSize) && !btn.disabled) {
              btn.classList.add('ring-2', 'ring-blue-500');
            } else {
              btn.classList.remove('ring-2', 'ring-blue-500');
            }
          });
        }

        // ========== IMAGE GALLERY ==========
        function navigateImage(direction) {
          if (!images.length) return;
          currentImageIndex = (currentImageIndex + direction + images.length) % images.length;
          updateMainImage(currentImageIndex);
        }

        function updateMainImage(index) {
          if (!images.length || !images[index]) return;

          currentImageIndex = index;
          const mainImage = document.getElementById("mainImage");
          mainImage.src = images[index].src;
          mainImage.alt = images[index].alt;

          // Update thumbnail states
          document.querySelectorAll('.thumbnail').forEach((thumb, i) => {
            const isActive = i === index;
            thumb.className = `thumbnail relative flex-shrink-0 w-20 h-20 rounded-md overflow-hidden transition-all ${
              isActive ? "ring-2 ring-blue-500" : "ring-1 ring-gray-200 opacity-70"
            }`;
          });
        }

        // ========== PRODUCT DATA ==========
        async function loadColorMap() {
          try {
            const res = await fetch("../inc/color.json");
            const json = await res.json();
            json.colors.forEach(c => {
              COLOR_MAP[c.name.toLowerCase()] = c.code;
            });
          } catch (error) {
            console.error("Failed to load color map:", error);
          }
        }

        async function fetchProduct() {
          const uid = getProductUid();
          if (!uid) {
            alert("Product ID missing in URL");
            return;
          }

          try {
            const res = await fetch(`${BASE_URL}/api/products/get-product-byUid/${uid}`, {
              method: "POST",
              headers: { "Content-Type": "application/json" }
            });
            const json = await res.json();

            if (!json.success) {
              alert("Product not found");
              return;
            }

            bindProduct(json.data);
          } catch (error) {
            console.error("Failed to fetch product:", error);
            alert("Error loading product");
          }
        }

        function renderGallery(imageList = []) {
          const mainImage = document.getElementById("mainImage");
          const thumbContainer = document.querySelector(".flex.gap-2.overflow-x-auto.pb-2");

          images = imageList.map(img => ({
            src: img.url,
            alt: img.file_name || ""
          }));

          currentImageIndex = 0;
          thumbContainer.innerHTML = "";

          if (!images.length) {
            mainImage.src = "";
            mainImage.alt = "";
            return;
          }

          // Set main image
          mainImage.src = images[0].src;
          mainImage.alt = images[0].alt;

          // Build thumbnails
          images.forEach((img, index) => {
            const btn = document.createElement("button");
            btn.className = `thumbnail relative flex-shrink-0 w-20 h-20 rounded-md overflow-hidden transition-all ${
              index === 0 ? "ring-2 ring-blue-500" : "ring-1 ring-gray-200 opacity-70"
            }`;
            btn.innerHTML = `<img src="${img.src}" alt="${img.alt}" class="object-cover w-full h-full" />`;
            btn.addEventListener("click", () => updateMainImage(index));
            thumbContainer.appendChild(btn);
          });
        }

        function bindProduct(data) {
          // Basic product info
          document.querySelector(".product_name").innerText = data.name || "";
          document.querySelector(".brand_name").innerText = data.brand?.name || "";
          const description = data.description || "";
          document.querySelector(".short_desc").innerText = description;
          document.querySelector(".mb_long_desc p").innerText = description;
          document.querySelector(".long_desc p").innerText = description;
          currentProductId = data.id;
          // Variations
          variations = Array.isArray(data.variations) ? data.variations : [];
          if (!variations.length) {
            alert("No variations available for this product");
            return;
          }

          // Initial variation
          const initialVariation = data.selected_variation || variations[0];
          selectedColor = initialVariation.color;
          selectedSize = initialVariation.size ? initialVariation.size.trim() : null;
          document.getElementById("selectedColorName").innerText = selectedColor;

          // Render color options
          renderColorOptions();
          
          // Render size options
          renderSizeOptions();

          // Reviews placeholder
          const reviewsTab = document.querySelector('[data-tab-content="reviews"]');
          if (reviewsTab) {
            reviewsTab.innerHTML = `<p class="text-sm text-gray-500">No reviews yet. Be the first to review this product.</p>`;
          }

          // Apply initial variation
          applyVariation(initialVariation, true);
          renderSpecs(initialVariation.specs || []);

          // Show content
          showRealContent();
        }

        function renderColorOptions() {
          const colorWrap = document.getElementById("colorOptions");
          colorWrap.innerHTML = "";

          const colors = getAllAvailableColors();
          
          colors.forEach(color => {
            const code = COLOR_MAP[color.toLowerCase()] || "#e5e7eb";
            const isSelected = normalize(color) === normalize(selectedColor);

            const btn = document.createElement("button");
            btn.dataset.color = color;
            btn.className = `color-btn w-10 h-10 rounded-full border flex items-center justify-center ${
              isSelected ? "ring-2 ring-blue-500" : ""
            }`;
            btn.style.background = code;
            btn.title = color;
            btn.innerHTML = `<span class="sr-only">${color}</span>`;
            btn.addEventListener("click", () => selectColor(color));
            
            colorWrap.appendChild(btn);
          });
        }

        function renderSizeOptions() {
          const sizeWrap = document.getElementById("sizeOptions");
          sizeWrap.innerHTML = "";

          // Get available sizes based on selected color (or all if no color selected)
          const availableSizes = selectedColor ? getAvailableSizesForColor(selectedColor) : getAllAvailableSizes();

          STATIC_SIZES.forEach(size => {
            const isAvailable = availableSizes.has(normalize(size));
            const isSelected = normalize(size) === normalize(selectedSize);

            const btn = document.createElement("button");
            btn.dataset.size = size;
            btn.className = `w-12 h-12 border rounded-md text-sm ${
              isSelected ? "ring-2 ring-blue-500" : ""
            } ${isAvailable ? "" : "opacity-30 cursor-not-allowed"}`;
            btn.disabled = !isAvailable;
            btn.innerText = size;
            btn.addEventListener("click", () => {
              if (!btn.disabled) {
                selectSize(size);
              }
            });
            
            sizeWrap.appendChild(btn);
          });
        }

        function renderSpecs(specs = []) {
          const table = document.getElementById("specTable");
          const mobile = document.querySelector('[data-tab-content="specifications"]');

          if (!specs.length) {
            const emptyMsg = `<p class="p-6 text-sm text-gray-500">No specifications available</p>`;
            table.innerHTML = emptyMsg;
            mobile.innerHTML = emptyMsg;
            return;
          }

          table.innerHTML = specs.map(s => `
            <div class="flex justify-between px-6 py-3 text-sm">
              <span class="text-gray-600">${s.spec_name}</span>
              <span class="font-medium text-gray-900">${s.spec_value}</span>
            </div>
          `).join("");

          mobile.innerHTML = `
            <ul class="space-y-2 text-sm text-gray-700">
              ${specs.map(s => `<li><strong>${s.spec_name}:</strong> ${s.spec_value}</li>`).join("")}
            </ul>
          `;
        }

        function showRealContent() {
          document.getElementById('productSkeleton')?.classList.add('hidden');
          document.getElementById('productContent')?.classList.remove('hidden');
        }
        // ========== UI EVENTS ==========
        function initUIEvents() {
          // Image navigation
          document.getElementById('prevImage')?.addEventListener('click', () => navigateImage(-1));
          document.getElementById('nextImage')?.addEventListener('click', () => navigateImage(1));

          // Quantity controls
          const qtyEl = document.getElementById('quantity');
          document.getElementById('decreaseQuantity')?.addEventListener('click', () => {
            const current = parseInt(qtyEl.innerText);
            if (current > 1) qtyEl.innerText = current - 1;
          });

          document.getElementById('increaseQuantity')?.addEventListener('click', () => {
            const current = parseInt(qtyEl.innerText);
            if (current < currentStock) qtyEl.innerText = current + 1;
          });

          // Mobile tabs
          const tabButtons = document.querySelectorAll('[data-tab]');
          const tabContents = document.querySelectorAll('[data-tab-content]');

          tabButtons.forEach(button => {
            button.addEventListener('click', () => {
              const tabName = button.getAttribute('data-tab');

              tabButtons.forEach(b => {
                if (b.getAttribute('data-tab') === tabName) {
                  b.classList.add('border-b-2', 'border-blue-600', 'text-blue-600', 'font-medium');
                  b.classList.remove('text-gray-500');
                } else {
                  b.classList.remove('border-b-2', 'border-blue-600', 'text-blue-600', 'font-medium');
                  b.classList.add('text-gray-500');
                }
              });

              tabContents.forEach(content => {
                if (content.getAttribute('data-tab-content') === tabName) {
                  content.classList.remove('hidden');
                } else {
                  content.classList.add('hidden');
                }
              });
            });
          });

          // Mobile action bar scroll
          const actionBar = document.getElementById('mobileActionBar');
          const productOptions = document.getElementById('product-options');
          if (actionBar && productOptions) {
            window.addEventListener('scroll', () => {
              if (window.scrollY > productOptions.offsetTop + 200) {
                actionBar.classList.remove('translate-y-full');
              } else {
                actionBar.classList.add('translate-y-full');
              }
            });
          }

          // Share button
          document.getElementById('shareButton')?.addEventListener('click', async () => {
            if (navigator.share) {
              try {
                await navigator.share({
                  title: document.querySelector("h1")?.innerText || "",
                  text: document.querySelector(".short_desc")?.innerText || "",
                  url: window.location.href
                });
              } catch (err) {
                console.error('Share failed:', err);
              }
            } else {
              navigator.clipboard.writeText(window.location.href);
              alert('Link copied to clipboard!');
            }
          });

          // Wishlist toggle
          const wishlistButton = document.getElementById('wishlistButton');
          if (wishlistButton) {
            wishlistButton.addEventListener('click', () => {
              const icon = wishlistButton.querySelector('svg');
              wishlistButton.classList.toggle('bg-red-50');
              wishlistButton.classList.toggle('border-red-200');
              wishlistButton.classList.toggle('text-red-500');
              if (icon) icon.classList.toggle('fill-red-500');
            });
          }

          // Add to cart
          const addToCartButton = document.getElementById('addToCartButton');
          // if (addToCartButton) {
          //   let isAnimating = false;
          //   addToCartButton.addEventListener('click', () => {
          //     if (isAnimating) return;
              
          //     isAnimating = true;
          //     const originalContent = addToCartButton.innerHTML;

          //     addToCartButton.classList.remove('bg-blue-600', 'hover:bg-blue-700');
          //     addToCartButton.classList.add('bg-green-600');
          //     addToCartButton.innerHTML = `
          //       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          //         <polyline points="20 6 9 17 4 12"></polyline>
          //       </svg>
          //       Added to Cart
          //     `;

          //     setTimeout(() => {
          //       addToCartButton.classList.remove('bg-green-600');
          //       addToCartButton.classList.add('bg-blue-600', 'hover:bg-blue-700');
          //       addToCartButton.innerHTML = originalContent;
          //       isAnimating = false;
          //     }, 2000);
          //   });
          // }
        }

        // ========== INITIALIZATION ==========
        document.addEventListener("DOMContentLoaded", async () => {
          await loadColorMap();
          await fetchProduct();
          initUIEvents();
        });

        // Expose selectColor and selectSize for onclick handlers (backward compatibility)
        window.selectColor = selectColor;
        window.selectSize = selectSize;
      </script>

      <script>
        // ============================================
        // ADVANCED ADD TO CART LOGIC (AUTH + GUEST)
        // ============================================

        function getSelectedQuantity() {
          return Math.max(1, parseInt(document.getElementById("quantity")?.innerText || "1"));
        }

        async function addToCart() {
          if (!currentVariation) {
            alert("Please select a valid product variation");
            return;
          }

          const authToken  = localStorage.getItem("auth_token");
          const guestToken = localStorage.getItem("guest_token");

          const payload = {
            products_id: currentProductId || null,
            aid: currentVariation.aid,
            uid: currentVariation.uid,
            quantity: getSelectedQuantity()
          };

          const headers = { "Content-Type": "application/json" };

          if (authToken) {
            headers["Authorization"] = `Bearer ${authToken}`;
          } else if (guestToken) {
            payload.temp_id = guestToken;
          }

          const btns = document.querySelectorAll("#addToCartButton, #mobileAddToCart");

          // 🔵 Set loading state
          btns.forEach(btn => {
            if (!btn) return;
            btn.disabled = true;
            btn.classList.add("opacity-70", "cursor-not-allowed");
            btn.dataset.originalText = btn.innerHTML;
            btn.innerHTML = `
              <svg class="animate-spin" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10" opacity="0.3"></circle>
                <path d="M22 12a10 10 0 0 1-10 10"></path>
              </svg>
              Adding...
            `;
          });

          try {
            const res = await fetch(`${BASE_URL}/api/cart/create-cart`, {
              method: "POST",
              headers,
              body: JSON.stringify(payload)
            });

            const json = await res.json();

            if (json.success) {
              // Save temp_id if new guest
              if (json.temp_id && !authToken) {
                localStorage.setItem("guest_token", json.temp_id);
              }

              // 🟢 SUCCESS ANIMATION
              btns.forEach(btn => {
                if (!btn) return;
                btn.classList.remove("bg-blue-600");
                btn.classList.add("bg-green-600");
                btn.innerHTML = `
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                      fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                  Added to Cart
                `;
              });

              // After 2 seconds, restore button
              setTimeout(() => {
                btns.forEach(btn => {
                  if (!btn) return;
                  btn.disabled = false;
                  btn.classList.remove("bg-green-600", "opacity-70", "cursor-not-allowed");
                  btn.classList.add("bg-blue-600", "hover:bg-blue-700");
                  btn.innerHTML = btn.dataset.originalText;
                });
              }, 2000);

            } else {
              throw new Error(json.message || "Failed to add to cart");
            }

          } catch (error) {
            console.error("Add to cart error:", error);

            // 🔴 Restore button on error
            btns.forEach(btn => {
              if (!btn) return;
              btn.disabled = false;
              btn.classList.remove("opacity-70", "cursor-not-allowed");
              btn.innerHTML = btn.dataset.originalText;
            });

            alert("Failed to add to cart. Please try again.");
          }
        }

        async function addToCart() {
          if (!currentVariation) {
            alert("Please select a valid product variation");
            return;
          }

          const authToken  = localStorage.getItem("auth_token");
          const guestToken = localStorage.getItem("guest_token");

          // Base payload (always required)
          const payload = {
            products_id: currentProductId || null,
            aid: currentVariation.aid,
            uid: currentVariation.uid,
            quantity: getSelectedQuantity()
          };

          const headers = {
            "Content-Type": "application/json"
          };

          // CASE 1: Logged-in user
          if (authToken) {
            headers["Authorization"] = `Bearer ${authToken}`;
          }

          // CASE 2: Guest user with temp_id
          else if (guestToken) {
            payload.temp_id = guestToken;
          }

          // CASE 3: New guest → no token, no temp_id
          // (payload stays same)

          try {
            const res = await fetch(`${BASE_URL}/api/cart/create-cart`, {
              method: "POST",
              headers,
              body: JSON.stringify(payload)
            });

            const json = await res.json();

            if (json.success) {
              // If backend returns temp_id, store it
              if (json.temp_id && !authToken) {
                localStorage.setItem("guest_token", json.temp_id);
              }

              showCartSuccess();
            } else {
              showCartError(json.message || "Failed to add to cart");
            }

          } catch (error) {
            console.error("Add to cart error:", error);
            showCartError("Something went wrong. Please try again.");
          }
        }

        // ============================================
        // UI FEEDBACK
        // ============================================

        function showCartSuccess() {
          const buttons = document.querySelectorAll("#addToCartButton, #mobileAddToCart");

          buttons.forEach(btn => {
            if (!btn) return;

            const original = btn.innerHTML;
            btn.disabled = true;
            btn.classList.remove("bg-blue-600", "hover:bg-blue-700");
            btn.classList.add("bg-green-600");

            btn.innerHTML = `
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                  fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              Added to Cart
            `;

            setTimeout(() => {
              btn.innerHTML = original;
              btn.disabled = false;
              btn.classList.remove("bg-green-600");
              btn.classList.add("bg-blue-600", "hover:bg-blue-700");
            }, 2000);
          });
        }

        function showCartError(message) {
          alert(message);
        }

        // ============================================
        // BUTTON BINDING
        // ============================================

        document.addEventListener("DOMContentLoaded", () => {
          document.getElementById("addToCartButton")?.addEventListener("click", addToCart);
          document.getElementById("mobileAddToCart")?.addEventListener("click", addToCart);
        });
      </script>

      <!-- related product slider -->
      <script>
        // related-products.js
        document.addEventListener('DOMContentLoaded', function() {
        // Related Products Data
        const relatedProductsData = [
            {
            "image": "assets/uploads/t-shirts/t-shirt10.jpg",
            "name": "Cashmere Scarf",
            "price": "$79.99",
            "rating": 4.8,
            "id": 1
            },
            {
            "image": "assets/uploads/t-shirts/t-shirt1.jpg",
            "name": "Cotton T-Shirt",
            "price": "$29.99",
            "rating": 4.5,
            "id": 2
            },
            {
            "image": "assets/uploads/t-shirts/t-shirt7.jpg",
            "name": "Cotton T-Shirt",
            "price": "$29.99",
            "rating": 4.5,
            "id": 2
            },
            {
            "image": "assets/uploads/t-shirts/t-shirt8.jpg",
            "name": "Cotton T-Shirt",
            "price": "$29.99",
            "rating": 4.5,
            "id": 2
            },
            {
            "image": "assets/uploads/t-shirts/t-shirt2.jpg",
            "name": "Premium Wool Scarf",
            "price": "$59.99",
            "rating": 4.7,
            "id": 3
            },
            {
            "image": "assets/uploads/t-shirts/t-shirt3.jpg",
            "name": "Stylish Denim Jacket",
            "price": "$99.99",
            "rating": 4.6,
            "id": 4
            },
            {
            "image": "assets/uploads/t-shirts/t-shirt4.jpg",
            "name": "Leather Wallet",
            "price": "$49.99",
            "rating": 4.4,
            "id": 5
            },
            {
            "image": "assets/uploads/t-shirts/t-shirt5.jpg",
            "name": "Men's Casual Shoes",
            "price": "$89.99",
            "rating": 4.9,
            "id": 6
            }
        ];

        // Generate product cards
        const generateProductCards = () => {
            const container = document.getElementById('relatedProductsContainer');
            if (!container) return;

            container.innerHTML = relatedProductsData.map(product => `
            <div class="flex-shrink-0 w-48 group" data-product-id="${product.id}">
                <div onclick="redirectToDetail('demo-slug')" class="aspect-square rounded-lg overflow-hidden bg-gray-100 mb-3 relative">
                <img
                    src="${product.image}"
                    alt="${product.name}"
                    class="w-full h-full object-cover transition-transform group-hover:scale-105"
                    loading="lazy"
                />
                <button class="absolute bottom-2 right-2 bg-white/90 rounded-full p-2 shadow-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                    </svg>
                </button>
                </div>
                <div>
                <h3 class="font-medium text-gray-900 group-hover:text-blue-600 transition-colors">
                    ${product.name}
                </h3>
                <p class="text-blue-600 font-medium mt-1">${product.price}</p>
                <div class="flex items-center gap-1 mt-2">
                    ${renderRatingStars(product.rating)}
                    <span class="text-xs text-gray-500">(${Math.floor(Math.random() * 50) + 50})</span>
                </div>
                </div>
            </div>
            `).join('');
        };

        // Helper function to render rating stars
        const renderRatingStars = (rating) => {
            const fullStars = Math.floor(rating);
            const hasHalfStar = rating % 1 >= 0.5;
            const emptyStars = 5 - fullStars - (hasHalfStar ? 1 : 0);
            
            let stars = '';
            
            // Full stars
            for (let i = 0; i < fullStars; i++) {
            stars += `
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" class="text-amber-400">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                </svg>
            `;
            }
            
            // Half star
            if (hasHalfStar) {
            stars += `
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" class="text-amber-400">
                <defs>
                    <linearGradient id="half-star" x1="0" x2="100%" y1="0" y2="0">
                    <stop offset="50%" stop-color="currentColor"/>
                    <stop offset="50%" stop-color="#D1D5DB"/>
                    </linearGradient>
                </defs>
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" fill="url(#half-star)"/>
                </svg>
            `;
            }
            
            // Empty stars
            for (let i = 0; i < emptyStars; i++) {
            stars += `
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" class="text-gray-300">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                </svg>
            `;
            }
            
            return `<div class="flex">${stars}</div>`;
        };
        // Add this function to handle redirection
        window.redirectToDetail = function(id) {
          window.location.href = `pages/product-detail.php?id=${id}`;
        };
        // Initialize related products
        generateProductCards();

        // Related Products Navigation
        const relatedContainer = document.getElementById('relatedProductsContainer');
        const relatedPrevBtn = document.querySelector('.related-prev');
        const relatedNextBtn = document.querySelector('.related-next');

        if (relatedContainer && relatedPrevBtn && relatedNextBtn) {
            // Scroll amount (adjust based on your card width + gap)
            const scrollAmount = 300;
            
            // Previous button click handler
            relatedPrevBtn.addEventListener('click', () => {
            relatedContainer.scrollBy({
                left: -scrollAmount,
                behavior: 'smooth'
            });
            });

            // Next button click handler
            relatedNextBtn.addEventListener('click', () => {
            relatedContainer.scrollBy({
                left: scrollAmount,
                behavior: 'smooth'
            });
            });
            
            // Hide/show buttons based on scroll position
            const updateButtonStates = () => {
            const maxScroll = relatedContainer.scrollWidth - relatedContainer.clientWidth;
            
            if (relatedContainer.scrollLeft <= 10) {
                relatedPrevBtn.classList.add('opacity-50', 'cursor-not-allowed');
                relatedPrevBtn.disabled = true;
            } else {
                relatedPrevBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                relatedPrevBtn.disabled = false;
            }
            
            if (relatedContainer.scrollLeft >= maxScroll - 10) {
                relatedNextBtn.classList.add('opacity-50', 'cursor-not-allowed');
                relatedNextBtn.disabled = true;
            } else {
                relatedNextBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                relatedNextBtn.disabled = false;
            }
            };
            
            // Listen for scroll events
            relatedContainer.addEventListener('scroll', updateButtonStates);
            
            // Initial state
            updateButtonStates();
            
            // Also update on window resize
            window.addEventListener('resize', updateButtonStates);
        }
        });
      </script>
      
      <!-- Mobile Action Bar -->
      <div id="mobileActionBar" class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 p-4 md:hidden z-10 shadow-lg transition-transform transform-gpu duration-300 translate-y-full">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-xs text-gray-500">Price</p>
            <p id="mobilePrice" class="text-lg font-bold text-gray-900"></p>
          </div>

          <button id="mobileAddToCart" class="flex items-center justify-center gap-2 py-3 px-6 rounded-lg font-medium bg-blue-600 text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
              <line x1="3" y1="6" x2="21" y2="6"></line>
              <path d="M16 10a4 4 0 0 1-8 0"></path>
            </svg>
            Add to Cart
          </button>
        </div>
      </div>
      <style>
        .mobile-action{
          display:none;
        }
      </style>
<?php include("../footer.php"); ?>