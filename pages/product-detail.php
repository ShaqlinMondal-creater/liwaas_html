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
            <div class="flex gap-2 overflow-x-auto pb-2"></div>
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
        const BASE_URL = "<?= $baseUrl ?>"; // change to production later
        let images = [];   // ✅ ADD THIS
        let selectedColor = null;
        let selectedSize  = null;
        let variations    = [];
        let currentStock = 0;
        let currentImageIndex = 0;

        // 🔹 Normalize helper (ADD HERE)
        function normalize(v) {
          return String(v).trim().toLowerCase();
        }

        function updateAvailability() {
          // Disable / enable COLORS
          document.querySelectorAll('.color-btn').forEach(btn => {
            const color = btn.dataset.color;

            const exists = variations.some(v =>
              normalize(v.color) === normalize(color) &&
              (!selectedSize || normalize(v.size) === normalize(selectedSize))
            );

            btn.disabled = !exists;
            btn.classList.toggle('opacity-30', !exists);
            btn.classList.toggle('cursor-not-allowed', !exists);
          });

          // Disable / enable SIZES
          document.querySelectorAll('[data-size]').forEach(btn => {
            const size = btn.dataset.size;

            const exists = variations.some(v =>
              normalize(v.size) === normalize(size) &&
              (!selectedColor || normalize(v.color) === normalize(selectedColor))
            );

            btn.disabled = !exists;
            btn.classList.toggle('opacity-30', !exists);
            btn.classList.toggle('cursor-not-allowed', !exists);
          });

          if (selectedSize && !variations.some(v =>
            normalize(v.size) === normalize(selectedSize) &&
            normalize(v.color) === normalize(selectedColor)
          )) {
            const fallback = variations.find(v =>
              normalize(v.size) === normalize(selectedSize)
            );
            if (fallback && normalize(fallback.color) !== normalize(selectedColor)) {
              selectedColor = fallback.color;
              document.getElementById("selectedColorName").innerText = selectedColor;
              updateVariation();
            }
          }
        }

        // 1. Get uid from URL
        function getProductUid() {
          const params = new URLSearchParams(window.location.search);
          return params.get("id"); // id = uid
        }

        // 2. Fetch product from API
        async function fetchProduct() {
          const uid = getProductUid();

          if (!uid) {
            alert("Product ID missing in URL");
            return;
          }

          const url = `${BASE_URL}/api/products/get-product-byUid/${uid}`;

          const res = await fetch(url, {
              method: "POST",
              headers: {
                "Content-Type": "application/json"
              }
              // no body needed since uid is in URL
            });
          const json = await res.json();

          if (!json.success) {
            alert("Product not found");
            return;
          }

          bindProduct(json.data);
        }

        function renderGallery(imageList = []) {
          const mainImage = document.getElementById("mainImage");
          const thumbContainer = document.querySelector(".flex.gap-2.overflow-x-auto");

          images = imageList.map(img => ({
            src: img.url,
            alt: img.file_name || ""
          }));

          currentImageIndex = 0;

          // Clear thumbnails
          thumbContainer.innerHTML = "";

          if (!images.length) {
            mainImage.src = "";
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

            btn.innerHTML = `
              <img src="${img.src}" class="object-cover w-full h-full" />
            `;

            btn.addEventListener("click", () => {
              updateMainImage(index);
            });

            thumbContainer.appendChild(btn);
          });
        }

        // 3. Bind API data to your EXISTING UI
        function bindProduct(data) {

          /* ========= BASIC INFO ========= */
          document.querySelector("h1.product_name").innerText = data.name;
          document.querySelector("h3.brand_name").innerText = data.brand?.name || "";
          // Short description (top)
          document.querySelector(".short_desc").innerText = data.description;
          // Mobile description tab
          document.querySelector('.mb_long_desc p').innerText = data.description;
          // Desktop description section
          document.querySelector('.long_desc p').innerText = data.description;

          const discountEl = document.querySelector(".discount_percentage");
          const regular = Number(v.regular_price);
          const sell = Number(v.sell_price);

          if (regular > sell) {
            const percent = Math.round(((regular - sell) / regular) * 100);
            discountEl.innerText = `${percent}% OFF`;
            discountEl.classList.remove("hidden");
          } else {
            discountEl.classList.add("hidden");
          }
          // ========= REVIEWS (TEMP PLACEHOLDER) =========
          const reviewsTab = document.querySelector('[data-tab-content="reviews"]');

          if (reviewsTab) {
            reviewsTab.innerHTML = `
              <p class="text-sm text-gray-500">
                No reviews yet. Be the first to review this product.
              </p>
            `;
          }

          /* ========= IMAGES ========= */
          const colors = [...new Set(data.variations.map(v => v.color))];
          const sizes  = [...new Set(data.variations.map(v => v.size))];

          /* ========= VARIATIONS ========= */
          variations = data.variations;
          const activeVariation = data.selected_variation || data.variations[0];

          selectedColor = activeVariation.color;
          selectedSize  = activeVariation.size;

          document.getElementById("selectedColorName").innerText = selectedColor;


          const colorWrap = document.getElementById("colorOptions");

          colorWrap.innerHTML = "";

          colors.forEach(color => {
            const isHex = color.startsWith('#');

            colorWrap.innerHTML += `
              <button
                data-color="${color}"
                onclick="selectColor('${color}')"
                class="color-btn relative w-10 h-10 rounded-full border border-gray-300
                      ${normalize(color) === normalize(selectedColor) ? 'ring-2 ring-blue-500' : ''}"
                style="background-color: ${isHex ? color : '#f3f4f6'};"
                title="${color}"
              >
                ${!isHex ? `<span class="text-[10px] font-medium">${color}</span>` : ``}
              </button>
            `;
          });

          const sizeWrap = document.getElementById("sizeOptions");
          sizeWrap.innerHTML = "";

          sizes.forEach(size => {
            sizeWrap.innerHTML += `
              <button data-size="${size}" onclick="selectSize('${size}')" class="w-12 h-12 border rounded-md">
                ${size}
              </button>
            `;
          });
          updateAvailability();

          /* ========= SPECIFICATIONS ========= */
          const specTable = document.getElementById("specTable");

          if (v.specs && Array.isArray(v.specs) && v.specs.length > 0) {
            specTable.innerHTML = "";

            v.specs.forEach(spec => {
              specTable.innerHTML += `
                <div class="grid grid-cols-3 px-6 py-4 gap-4 hover:bg-gray-50 transition-colors">
                  <div class="col-span-1">
                    <h3 class="text-sm font-medium text-gray-500">${spec.spec_name}</h3>
                  </div>
                  <div class="col-span-2">
                    <p class="text-sm text-gray-900">${spec.spec_value}</p>
                  </div>
                </div>
              `;
            });

            specTable.closest(".bg-white")?.classList.remove("hidden");
          } else {
            // 🔥 IMPORTANT: hide block if specs empty
            specTable.closest(".bg-white")?.classList.add("hidden");
          }

          const mobileSpecTab = document.querySelector('[data-tab-content="specifications"]');
          if (mobileSpecTab) {
            if (v.specs && v.specs.length) {
              mobileSpecTab.innerHTML = `
                <ul class="space-y-2 text-sm text-gray-700">
                  ${v.specs.map(s => `<li><strong>${s.spec_name}:</strong> ${s.spec_value}</li>`).join("")}
                </ul>
              `;
            } else {
              mobileSpecTab.innerHTML = `<p class="text-sm text-gray-500">No specifications available.</p>`;
            }
          }


          /* ========= PRICE (default first variation) ========= */
          const v = data.selected_variation || data.variations[0];
          currentStock = v.stock; // ✅ HERE
          // const v = data.selected_variation || data.variations[0];

          // Load ONLY variant images
          renderGallery(v.images || data.upload || []);

          // document.getElementById("mobilePrice").innerText = `₹${v.sell_price}`;
          const mobilePriceEl = document.getElementById("mobilePrice");
          if (mobilePriceEl) {
            mobilePriceEl.innerText = `₹${v.sell_price}`;
          }
          document.querySelector(".sale_price").innerText = `₹${v.sell_price}`;
          document.querySelector(".regular_price").innerText = `₹${v.regular_price}`;
          document.getElementById("stockText").innerText = `${v.stock} available`;

          /* ========= SKU ========= */
          document.querySelector(".sku_text").innerText = `SKU: ${v.aid}-${v.uid}`;

          

          showRealContent(); // hide skeleton
          // Thumbnail click (AFTER API render)
          document.querySelectorAll('.thumbnail').forEach((thumb, index) => {
            thumb.addEventListener('click', () => {
              currentImageIndex = index;
              updateMainImage(index);
            });
          });
        }
        
        // 4. Init
        document.addEventListener("DOMContentLoaded", fetchProduct);

        function selectColor(color) {
          const btn = [...document.querySelectorAll('.color-btn')]
            .find(b => b.dataset.color === color);

          if (btn?.disabled) return;

          selectedColor = color;
          document.getElementById("selectedColorName").innerText = color;
          updateAvailability();
          updateVariation();
        }

        function selectSize(size) {
          const btn = [...document.querySelectorAll('[data-size]')]
            .find(b => b.dataset.size === size);

          if (btn?.disabled) return;

          selectedSize = size;
          updateAvailability();
          updateVariation();
        }

        function updateVariation() {
          if (!selectedColor || !selectedSize) return;

          const match = variations.find(v =>
            normalize(v.color) === normalize(selectedColor) &&
            normalize(v.size) === normalize(selectedSize)
          );

          if (!match) return;

          const currentUid = String(getProductUid());

          // Redirect ONLY if UID is different
          if (currentUid !== String(match.uid)) {
            window.location.href = `${window.location.pathname}?id=${match.uid}`;
          }
        }
      </script>

      <script>
          // Show the real page after data / images are ready
        function showRealContent() {
          document.getElementById('productSkeleton')?.classList.add('hidden');
          document.getElementById('productContent')?.classList.remove('hidden');
        }

        // DEMO: remove skeleton after 1.2 s
        document.addEventListener('DOMContentLoaded', () => {
          // setTimeout(showRealContent, 1200);
        });
        function updateMainImage(index) {
          if (!images.length || !images[index]) return;

          currentImageIndex = index;

          const mainImage = document.getElementById("mainImage");
          mainImage.src = images[index].src;
          mainImage.alt = images[index].alt;

          document.querySelectorAll('.thumbnail').forEach((thumb, i) => {
            thumb.classList.toggle('ring-2', i === index);
            thumb.classList.toggle('ring-blue-500', i === index);
            thumb.classList.toggle('ring-1', i !== index);
            thumb.classList.toggle('ring-gray-200', i !== index);
            thumb.classList.toggle('opacity-70', i !== index);
          });
        }

        document.addEventListener('DOMContentLoaded', function() {
          // Image Gallery
          const mainImage = document.getElementById('mainImage');
          // const thumbnails = document.querySelectorAll('.thumbnail');
          const prevButton = document.getElementById('prevImage');
          const nextButton = document.getElementById('nextImage');
          
          prevButton.addEventListener('click', () => {
            if (!images.length) return;   // ✅ ADD
            currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
            updateMainImage(currentImageIndex);
          });

          nextButton.addEventListener('click', () => {
            if (!images.length) return;   // ✅ ADD
            currentImageIndex = (currentImageIndex + 1) % images.length;
            updateMainImage(currentImageIndex);
          });

          // Quantity Controls
          const quantityInput = document.getElementById('quantity');
          const decreaseButton = document.getElementById('decreaseQuantity');
          const increaseButton = document.getElementById('increaseQuantity');
          
          decreaseButton.addEventListener('click', () => {
            const currentValue = parseInt(quantityInput.textContent);
            if (currentValue > 1) {
            quantityInput.textContent = currentValue - 1;
            }
          });

          increaseButton.addEventListener('click', () => {
            const currentValue = parseInt(quantityInput.textContent);
            if (currentValue < currentStock) {
              quantityInput.textContent = currentValue + 1;
            }
          });

          // Mobile Navigation
          const tabButtons = document.querySelectorAll('[data-tab]');
          const tabContents = document.querySelectorAll('[data-tab-content]');

          tabButtons.forEach(button => {
            button.addEventListener('click', () => {
              const tabName = button.getAttribute('data-tab');

              tabButtons.forEach(b => {
                if (b.getAttribute('data-tab') === tabName) {
                  b.classList.add('border-b-2', 'border-blue-600', 'text-blue-600');
                  b.classList.remove('text-gray-500');
                } else {
                  b.classList.remove('border-b-2', 'border-blue-600', 'text-blue-600');
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

          // Mobile Action Bar
          const actionBar = document.getElementById('mobileActionBar');
          const productOptions = document.getElementById('product-options');

          window.addEventListener('scroll', () => {
            if (window.scrollY > productOptions.offsetTop + 200) {
            actionBar.classList.remove('translate-y-full');
            } else {
            actionBar.classList.add('translate-y-full');
            }
          });

          // Share Button
          const shareButton = document.getElementById('shareButton');
          shareButton.addEventListener('click', async () => {
            if (navigator.share) {
              try {
            await navigator.share({
              title: document.querySelector("h1").innerText,
              text: document.querySelector(".text-gray-700.leading-relaxed").innerText,
              url: window.location.href
            });
              } catch (err) {
            console.error('Share failed:', err);
              }
            } else {
            // Fallback to copying URL
            navigator.clipboard.writeText(window.location.href);
          alert('Link copied to clipboard!');
            }
          });

          // Wishlist Toggle
          const wishlistButton = document.getElementById('wishlistButton');
          const wishlistIcon = wishlistButton.querySelector('svg');
          
          wishlistButton.addEventListener('click', () => {
            wishlistButton.classList.toggle('bg-red-50');
          wishlistButton.classList.toggle('border-red-200');
          wishlistButton.classList.toggle('text-red-500');
          wishlistIcon.classList.toggle('fill-red-500');
          });

          // Add to Cart Animation
          const addToCartButton = document.getElementById('addToCartButton');
          let isAnimating = false;

          addToCartButton.addEventListener('click', () => {
            if (!isAnimating) {
            isAnimating = true;
          const originalContent = addToCartButton.innerHTML;

          addToCartButton.classList.remove('bg-blue-600', 'hover:bg-blue-700');
          addToCartButton.classList.add('bg-green-600');
          addToCartButton.innerHTML = `
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12"></polyline>
          </svg>
          Added to Cart
          `;

              setTimeout(() => {
            addToCartButton.classList.remove('bg-green-600');
          addToCartButton.classList.add('bg-blue-600', 'hover:bg-blue-700');
          addToCartButton.innerHTML = originalContent;
          isAnimating = false;
              }, 2000);
            }
          });
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

          <button
            class="flex items-center justify-center gap-2 py-3 px-6 rounded-lg font-medium bg-blue-600 text-white"
          >
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