<base href="../">
<?php include("../header.php"); ?>

    <!-- Mobile Filter Sidebar -->
    <div id="mobileSidebar" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
        <div class="absolute right-0 top-0 h-full w-[300px] bg-white p-6 overflow-y-auto">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-lg font-medium">Filters</h3>
                <button onclick="toggleMobileFilter()" class="p-2 hover:bg-gray-100 rounded-full">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>
            <!-- Mobile Filter Content -->
            <div class="space-y-6">
                <!-- Categories -->
                <div class="border-b pb-6">
                    <h3 class="font-medium mb-4">Categories</h3>
                    <div class="space-y-3 filters-categories">
                        <!-- <label class="flex items-center">
                            <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span class="ml-2">T-Shirts (24)</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span class="ml-2">Sweaters (12)</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span class="ml-2">Jackets (8)</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span class="ml-2">Accessories (16)</span>
                        </label> -->
                    </div>
                </div>

                <!-- Price Range -->
                <div class="border-b pb-6">
                    <h3 class="font-medium mb-4">Price Range</h3>
                    <div class="space-y-4">
                        <!-- Sliders -->
                        <div id="price-slider-mobile" class="w-full block md:block"></div>

                        <!-- Min-Max Inputs -->
                        <div class="flex items-center space-x-4">
                            <input type="number" id="mob-min-price" class="min-price w-full px-3 py-2 border rounded-lg text-center" placeholder="Min">
                            <span class="text-gray-500">to</span>
                            <input type="number" id="mob-max-price" class="max-price w-full px-3 py-2 border rounded-lg text-center" placeholder="Max">
                        </div>
                    </div>
                </div>

                <!-- Colors -->
                <div class="border-b pb-6">
                    <h3 class="font-medium mb-4">Colors</h3>
                    <div class="flex flex-wrap gap-3 filters-colors">
                        <!-- <button class="w-10 h-10 rounded-full bg-black ring-2 ring-offset-2 ring-black"></button>
                        <button class="w-10 h-10 rounded-full bg-white border-2 border-gray-200"></button>
                        <button class="w-10 h-10 rounded-full bg-gray-500"></button>
                        <button class="w-10 h-10 rounded-full bg-red-500"></button>
                        <button class="w-10 h-10 rounded-full bg-blue-500"></button>
                        <button class="w-10 h-10 rounded-full bg-green-500"></button> -->
                    </div>
                </div>

                <!-- Size -->
                <div class="pb-6">
                    <h3 class="font-medium mb-4">Size</h3>
                    <div class="grid grid-cols-3 gap-3 filters-sizes">
                        <!-- <button class="py-3 border rounded-lg hover:border-black">XS</button>
                        <button class="py-3 border rounded-lg hover:border-black">S</button>
                        <button class="py-3 bg-black text-white rounded-lg">M</button>
                        <button class="py-3 border rounded-lg hover:border-black">L</button>
                        <button class="py-3 border rounded-lg hover:border-black">XL</button>
                        <button class="py-3 border rounded-lg hover:border-black">2XL</button> -->
                    </div>
                </div>

                <!-- Apply Filters Button -->
                <!-- <button class="w-full bg-black text-white py-3 rounded-lg font-medium">
                    Apply Filters
                </button> -->
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-2 py-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-bold">Collection</h1>
            <div class="flex items-center space-x-4">
                <button onclick="toggleMobileFilter()" class="md:hidden p-2 bg-black text-white rounded-lg flex items-center gap-2">
                    <i data-lucide="filter" class="w-5 h-5"></i>
                    <span class="text-sm">Filters</span>
                </button>
                <select class="border rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-black">
                    <option>Select: Sort by</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                    <option>Newest First</option>
                    <option>Featured</option>
                </select>
            </div>
        </div>

        <div class="flex flex-col md:flex-row gap-8">
            <!-- Desktop Filters Sidebar -->
            <div class="hidden md:block w-64 space-y-6">
                <!-- Categories -->
                <div class="bg-white p-6 rounded-xl shadow-sm border">
                    <h3 class="font-medium mb-4">Categories</h3>
                    <div class="space-y-3 filters-categories">
                        <!-- <label class="flex items-center">
                            <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span class="ml-2">T-Shirts (24)</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span class="ml-2">Sweaters (12)</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span class="ml-2">Jackets (8)</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span class="ml-2">Accessories (16)</span>
                        </label> -->
                    </div>
                </div>
                <!-- Price Range -->
                <div class="bg-white p-6 rounded-xl shadow-sm border">
                    <h3 class="font-medium mb-4">Price Range</h3>
                    <div class="space-y-4">
                        <!-- Sliders -->
                        <div id="price-slider-desktop" class="w-full md:block"></div>

                        <!-- Min-Max Inputs -->
                        <div class="flex items-center space-x-4">
                            <input type="number" id="desk-min-price" class="min-price w-full px-3 py-2 border rounded-lg text-center" placeholder="Min">
                            <span class="text-gray-500">to</span>
                            <input type="number" id="desk-max-price" class="max-price w-full px-3 py-2 border rounded-lg text-center" placeholder="Max">
                        </div>
                    </div>
                </div>
                
                <!-- Colors -->
                <div class="bg-white p-6 rounded-xl shadow-sm border">
                    <h3 class="font-medium mb-4">Colors</h3>
                    <div class="flex flex-wrap gap-3 filters-colors">
                        <!-- <button class="w-10 h-10 rounded-full bg-black ring-2 ring-offset-2 ring-black"></button>
                        <button class="w-10 h-10 rounded-full bg-white border-2 border-gray-200"></button>
                        <button class="w-10 h-10 rounded-full bg-gray-500"></button>
                        <button class="w-10 h-10 rounded-full bg-red-500"></button>
                        <button class="w-10 h-10 rounded-full bg-blue-500"></button>
                        <button class="w-10 h-10 rounded-full bg-green-500"></button> -->
                    </div>
                </div>

                <!-- Size -->
                <div class="bg-white p-6 rounded-xl shadow-sm border">
                    <h3 class="font-medium mb-4">Size</h3>
                    <div class="grid grid-cols-3 gap-3 filters-sizes">
                        <!-- <button class="py-3 border rounded-lg hover:border-black">XS</button>
                        <button class="py-3 border rounded-lg hover:border-black">S</button>
                        <button class="py-3 bg-black text-white rounded-lg">M</button>
                        <button class="py-3 border rounded-lg hover:border-black">L</button>
                        <button class="py-3 border rounded-lg hover:border-black">XL</button>
                        <button class="py-3 border rounded-lg hover:border-black">2XL</button> -->
                    </div>
                </div>
            </div>

            <!-- Product Grid -->
            <div class="flex-1">
                <!-- <div id="product-grid" class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6"></div> -->
                <!-- Skeleton Loader -->
                <div id="skeleton-loader" class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                <!-- Repeat 6 placeholder cards -->
                <div class="p-4 bg-white rounded-lg border shadow animate-pulse">
                    <div class="h-48 bg-gray-200 rounded mb-4"></div>
                    <div class="h-4 bg-gray-300 rounded w-3/4 mb-2"></div>
                    <div class="h-4 bg-gray-300 rounded w-1/2 mb-4"></div>
                    <div class="h-6 bg-gray-200 rounded w-full"></div>
                </div>
                <!-- Copy above div 5 more times -->
                <div class="p-4 bg-white rounded-lg border shadow animate-pulse"><div class="h-48 bg-gray-200 rounded mb-4"></div><div class="h-4 bg-gray-300 rounded w-3/4 mb-2"></div><div class="h-4 bg-gray-300 rounded w-1/2 mb-4"></div><div class="h-6 bg-gray-200 rounded w-full"></div></div>
                <div class="p-4 bg-white rounded-lg border shadow animate-pulse"><div class="h-48 bg-gray-200 rounded mb-4"></div><div class="h-4 bg-gray-300 rounded w-3/4 mb-2"></div><div class="h-4 bg-gray-300 rounded w-1/2 mb-4"></div><div class="h-6 bg-gray-200 rounded w-full"></div></div>
                <div class="p-4 bg-white rounded-lg border shadow animate-pulse"><div class="h-48 bg-gray-200 rounded mb-4"></div><div class="h-4 bg-gray-300 rounded w-3/4 mb-2"></div><div class="h-4 bg-gray-300 rounded w-1/2 mb-4"></div><div class="h-6 bg-gray-200 rounded w-full"></div></div>
                <div class="p-4 bg-white rounded-lg border shadow animate-pulse"><div class="h-48 bg-gray-200 rounded mb-4"></div><div class="h-4 bg-gray-300 rounded w-3/4 mb-2"></div><div class="h-4 bg-gray-300 rounded w-1/2 mb-4"></div><div class="h-6 bg-gray-200 rounded w-full"></div></div>
                <div class="p-4 bg-white rounded-lg border shadow animate-pulse"><div class="h-48 bg-gray-200 rounded mb-4"></div><div class="h-4 bg-gray-300 rounded w-3/4 mb-2"></div><div class="h-4 bg-gray-300 rounded w-1/2 mb-4"></div><div class="h-6 bg-gray-200 rounded w-full"></div></div>
                </div>

                <!-- Actual product grid (will be filled via JS) -->
                <div id="product-grid" class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 min-h-[600px] items-start">
                    
                </div>
                <div id="load-more-indicator" class="hidden text-center py-4 text-gray-500">
                    Loading more products...
                </div>
                <p id="no-products" class="text-center text-gray-500 hidden mt-8">No products found.</p>
                <!-- Desktop Pagination -->
                <div id="pagination-container" class="mt-12 flex items-center justify-between hidden md:flex">
                    <div class="relative">
                        <select class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 py-2 px-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm">
                            <option>6 per page</option>
                            <option>12 per page</option>
                            <option>24 per page</option>
                            <option>All</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <i data-lucide="chevron-down" class="w-4 h-4"></i>
                        </div>
                    </div>
                    <nav class="flex justify-center" aria-label="Pagination">
                        <ul class="flex items-center space-x-1">
                            <li><button class="p-2 rounded-lg border hover:bg-gray-50 transition-colors"><i data-lucide="chevron-left" class="w-5 h-5"></i></button></li>
                            <li><button class="px-4 py-2 rounded-lg bg-black text-white">1</button></li>
                            <li><button class="px-4 py-2 rounded-lg border hover:bg-gray-50 transition-colors">2</button></li>
                            <li><button class="px-4 py-2 rounded-lg border hover:bg-gray-50 transition-colors">3</button></li>
                            <li><button class="p-2 rounded-lg border hover:bg-gray-50 transition-colors"><i data-lucide="chevron-right" class="w-5 h-5"></i></button></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </main>
<script>
    const baseUrl = "<?= $baseUrl ?>"; // Replace this if you're injecting from PHP

    const filtersEndpoint = `${baseUrl}/api/filters`;
    const productsEndpoint = `${baseUrl}/api/products/allProducts`;

    const categoriesContainer = document.querySelectorAll(".filters-categories");
    const sizesContainer = document.querySelectorAll(".filters-sizes");
    const colorsContainer = document.querySelectorAll(".filters-colors");

    const productGrid = document.getElementById("product-grid");
    const skeletonLoader = document.getElementById("skeleton-loader");
    const paginationContainer = document.getElementById("pagination-container");
    
    const loadMoreIndicator = document.getElementById("load-more-indicator");

    const isMobile = window.innerWidth < 768;
    let lastScrollTime = 0;
    let isLoadingMore = false;
    let hasMore = true;
    let scrollInitialized = false;   // 🔥 ADD THIS


    // STATE
    let filters = {
        category: null,
        size: null,
        color: null,
        sort: null,
        min_price: null,
        max_price: null,
        limit: 5,
        offset: 0,
        currentPage: 1,
        totalPages: 1
    };


    function resetAllFiltersExcept(type) {
        if (type !== "category") filters.category = null;
        if (type !== "size")     filters.size = null;
        if (type !== "color")    filters.color = null;
        if (type !== "price") {
            filters.min_price = null;
            filters.max_price = null;
        }

        filters.currentPage = 1;
        filters.offset = 0;

        // 🔽 RESET UI STATES

        // Reset category radios
        if (type !== "category") {
            document.querySelectorAll('input[name="category"]').forEach(r => r.checked = false);
        }

        // Reset size buttons
        if (type !== "size") {
            document.querySelectorAll(".filters-sizes button").forEach(b => {
                b.classList.remove("ring-2", "ring-black");
            });
        }

        // Reset color buttons
        if (type !== "color") {
            document.querySelectorAll(".filters-colors button").forEach(b => {
                b.classList.remove("ring-2", "ring-black");
            });
        }
    }

    let COLOR_MAP = {};
    async function loadColorMap() {
        try {
            const res = await fetch("../inc/color.json");
            const json = await res.json();
            json.colors.forEach(c => {
                COLOR_MAP[c.name.toLowerCase()] = c.code;
            });
            console.log("Color map loaded:", COLOR_MAP);
        } catch (e) {
            console.error("Failed to load color map:", e);
        }
    }

    loadColorMap().then(() => {
    fetch(filtersEndpoint)
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                renderFilterOptions(data);
                fetchAndRenderProducts();
            }
        });
    });

    function renderFilterOptions(data) {
        // CATEGORIES
        categoriesContainer.forEach(container => {
            container.innerHTML = "";
            data.categories.forEach(cat => {
            const label = document.createElement("label");
            label.className = "flex items-center";
            label.innerHTML = `
                <input type="radio" name="category" value="${cat.id}" class="category-radio rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                <span class="ml-2">${cat.name}</span>
            `;
            label.querySelector("input").addEventListener("change", e => {
                resetAllFiltersExcept("category");

                filters.category = parseInt(e.target.value);

                fetchAndRenderProducts();
            });
            container.appendChild(label);
            });
        });

        // SIZES
        sizesContainer.forEach(container => {
            container.innerHTML = "";
            data.sizes.forEach(size => {
            const btn = document.createElement("button");
            btn.className = "py-3 border rounded-lg hover:border-black text-sm px-3";
            btn.textContent = size;
            btn.addEventListener("click", () => {
                resetAllFiltersExcept("size");

                filters.size = size;

                fetchAndRenderProducts();
            });
            container.appendChild(btn);
            });
        });

        // COLORS
        colorsContainer.forEach(container => {
            container.innerHTML = "";

            data.colors.forEach(colorName => {
                const key = (colorName || "").toLowerCase();
                const colorCode = COLOR_MAP[key] || "#e5e7eb"; // fallback grey

                const btn = document.createElement("button");
                btn.className = "w-10 h-10 rounded-full border ring-1 ring-offset-1 transition-all";
                btn.style.background = colorCode;
                btn.title = colorName;

                btn.addEventListener("click", () => {
                    resetAllFiltersExcept("color");
                    filters.color = colorName;
                    fetchAndRenderProducts();

                    // Optional: visual active state
                    container.querySelectorAll("button").forEach(b => {
                        b.classList.remove("ring-2", "ring-black");
                    });
                    btn.classList.add("ring-2", "ring-black");
                });

                container.appendChild(btn);
            });
        });


        // PRICE RANGE
        const priceSliderDesktop = document.getElementById('price-slider-desktop');
        const priceSliderMobile = document.getElementById('price-slider-mobile');
        const deskMinInput = document.getElementById('desk-min-price');
        const deskMaxInput = document.getElementById('desk-max-price');
        const mobMinInput = document.getElementById('mob-min-price');
        const mobMaxInput = document.getElementById('mob-max-price');

        // Create a slider with input sync
        function createSlider(slider, min, max, minInput, maxInput) {
            if (!slider || slider.noUiSlider) return;

            min = Number(min);
            max = Number(max);

            if (isNaN(min) || isNaN(max)) {
                console.error("Slider values are not numeric:", min, max);
                return;
            }

            noUiSlider.create(slider, {
                start: [min, max],
                connect: true,
                step: 10,
                range: {
                    min: min,
                    max: max
                },
                format: {
                    to: value => Math.round(value),
                    from: value => Number(value)
                }
            });

            slider.noUiSlider.on('update', function (values) {
                if (minInput) minInput.value = values[0];
                if (maxInput) maxInput.value = values[1];
            });

            slider.noUiSlider.on('change', function (values) {
                resetAllFiltersExcept("price");

                filters.min_price = parseInt(values[0]);
                filters.max_price = parseInt(values[1]);

                fetchAndRenderProducts();
            });

        }

        // Initialize sliders only if price data is available
        if (
            data.price &&
            !isNaN(parseFloat(data.price.min)) &&
            !isNaN(parseFloat(data.price.max)) &&
            parseFloat(data.price.min) < parseFloat(data.price.max)
        ) {
            const minPrice = parseFloat(data.price.min);
            const maxPrice = parseFloat(data.price.max);

            createSlider(priceSliderDesktop, minPrice, maxPrice, deskMinInput, deskMaxInput);
            createSlider(priceSliderMobile, minPrice, maxPrice, mobMinInput, mobMaxInput);
        } else {
            console.warn("Invalid price range from API:", data.price);
        }
    }

    function loadMoreFromApi() {
        if (isLoadingMore || !hasMore) return;

        isLoadingMore = true;
        loadMoreIndicator.classList.remove("hidden");   // 🔥 show loader

        const body = {
            ...filters,
            offset: filters.offset,
            limit: filters.limit
        };

        fetch(productsEndpoint, {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(body)
        })
        .then(res => res.json())
        .then(data => {
            if (data.success && Array.isArray(data.data)) {

                renderProducts(data.data);
                filters.offset += data.data.length;

                if (data.data.length < filters.limit) {
                    hasMore = false;

                    // 🔥 show "no more products"
                    loadMoreIndicator.innerText = "No more products";
                }
            }
        })
        .finally(() => {
            isLoadingMore = false;
            loadMoreIndicator.classList.add("hidden");  // 🔥 hide loader
        });
    }
    function setupInfiniteScroll() {
        if (scrollInitialized) return;
        scrollInitialized = true;

        window.addEventListener("scroll", () => {
            const now = Date.now();

            // 🔥 Throttle: only once every 300ms
            if (now - lastScrollTime < 300) return;
            lastScrollTime = now;

            if (
                (window.innerHeight + window.scrollY) >=
                document.documentElement.scrollHeight - 150
            ) {
                loadMoreFromApi();
            }
        });
    }

    // FETCH PRODUCTS
    function fetchAndRenderProducts() {
        skeletonLoader.style.display = "grid";
        productGrid.innerHTML = "";

        // Reset mobile scroll state
        hasMore = true;
        isLoadingMore = false;
        scrollInitialized = false;

        // 🔥 If mobile, DO NOT pre-fetch here
        if (isMobile) {
            skeletonLoader.style.display = "none";
            filters.offset = 0;
            loadMoreIndicator.innerText = "Loading more products...";  // 🔥 RESET TEXT
            loadMoreFromApi();        // first & only fetch
            setupInfiniteScroll();
            paginationContainer.style.display = "none";
            return;                  // 🔥 VERY IMPORTANT
        }

        // 🖥️ Desktop: normal API fetch
        const body = { ...filters };

        fetch(productsEndpoint, {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(body)
        })
        .then(res => res.json())
        .then(data => {
            skeletonLoader.style.display = "none";
            if (data.success && Array.isArray(data.data)) {
                filters.totalPages = Math.ceil(data.total / filters.limit);

                renderProducts(data.data);
                paginationContainer.style.display = "flex";
                renderPagination();
            } else {
                productGrid.innerHTML = "<p class='text-center w-full'>No products found.</p>";
            }
        });
    }

    // RENDER PRODUCTS
    function renderProducts(products) {
        // 🔥 Only clear grid on DESKTOP (pagination mode)
        if (!isMobile) {
            productGrid.innerHTML = "";
        }

        products.forEach(product => {
            const firstImage = product.upload?.[0]?.url || 'assets/brand/li.jpg';
            const price = product.variations?.[0]?.sell_price || "N/A";
            const category = product.category?.name || "";
            const productName = product.name;
            const productId = product.id;
            const variationId = product.variations?.[0]?.id || null;
            const variationAID = product.variations?.[0]?.aid || null;
            const variationUID = product.variations?.[0]?.uid || null;

            const sellPrice = Number(product.variations?.[0]?.sell_price) || 0;
            const regularPrice = Number(product.variations?.[0]?.regular_price) || sellPrice;

            let discountPercent = 0;
            if (regularPrice > sellPrice) {
            discountPercent = Math.round(((regularPrice - sellPrice) / regularPrice) * 100);
            }
            // Create a wrapper anchor tag for the entire card
            const card = document.createElement("a");
            card.href = `pages/product-detail.php?id=${variationUID}`;
            card.className = "featured-card bg-white rounded-xl shadow-md border overflow-hidden transition-all hover:shadow-lg block group p-0";

            card.innerHTML = `
                <div class="glossy-card rounded-2xl overflow-hidden relative">

                    <!-- Image -->
                    <div class="relative h-64 bg-gray-100 overflow-hidden">
                    <img 
                        src="${firstImage}" 
                        alt="${productName}" 
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
                        loading="lazy"
                    >

                    <!-- Wishlist (KEEP) -->
                    <button class="absolute top-3 right-3 bg-white rounded-full p-1.5 shadow-md hover:bg-gray-100 wishlist-btn">
                        <i data-lucide="heart" class="w-5 h-5"></i>
                    </button>
                    </div>

                    <!-- Info -->
                    <div class="p-4 bg-white relative">
                    <h3 class="font-semibold line-clamp-2 mb-2">${productName}</h3>
                    <p class="text-sm text-gray-500 mb-2">${category}</p>

                    <!-- Price -->
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-lg font-bold text-gray-900">₹${sellPrice}</span>
                        ${
                        regularPrice > sellPrice
                            ? `<span class="text-sm text-gray-500 line-through">₹${regularPrice}</span>`
                            : ``
                        }
                    </div>

                    <!-- Add to Cart (KEEP) -->
                    <button 
                        class="add-to-cart-btn view-btn absolute right-0 bottom-4 inline-flex items-center gap-1 px-6 py-2 rounded-l-full text-sm font-semibold">
                        Add to Cart
                    </button>
                    </div>
                </div>
            `;
            // Add to Cart Button Logic
            const addToCartBtn = card.querySelector(".add-to-cart-btn");
            addToCartBtn.addEventListener("click", (e) => {
                e.preventDefault();      // prevent <a> navigation
                e.stopPropagation();     // prevent bubbling up to <a>
                addToCart(productId, variationId, variationAID, variationUID, productName);
            });
            productGrid.appendChild(card);
        });

        if (typeof lucide !== 'undefined') lucide.createIcons();
    }
    
    function addToCart(productId, variationId, variationAID, variationUID, productName) {
        const payload = {
            products_id: productId,
            variation_id: variationId,
            aid: variationAID,
            uid: variationUID,
            quantity: 1
        };

        // 🔑 Check authentication
        const authToken = localStorage.getItem("auth_token");
        const guestId = localStorage.getItem("guest_token");

        let headers = {
            "Content-Type": "application/json"
        };

        if (authToken) {
            headers["Authorization"] = `Bearer ${authToken}`;
        } else if (guestId) {
            payload.temp_id = guestId;
        }

        fetch(`${baseUrl}/api/cart/create-cart`, {
            method: "POST",
            headers: headers,
            body: JSON.stringify(payload)
        })
        .then(res => res.json())
        .then(res => {
            if (res.success) {
                // 🛒 Save new guest_token if returned
                if (!authToken && res.temp_id) {
                    localStorage.setItem("guest_token", res.temp_id);
                }

                Swal.fire({
                    icon: "success",
                    title: "Added to Cart",
                    text: `${productName} has been added to your cart!`,
                    showConfirmButton: false,
                    timer: 1500
                });
            } else {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: res.message || "Something went wrong!"
                });
            }
        })
        .catch(() => {
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "Failed to add product to cart. Please try again later."
            });
        });
    }

    // RENDER PAGINATION
    function renderPagination() {
        if (!paginationContainer) return;

        paginationContainer.innerHTML = "";

        const total = filters.totalPages;
        const current = filters.currentPage;

        const ul = document.createElement("ul");
        ul.className = "flex items-center space-x-2";

        function createButton(label, page, isActive = false, disabled = false) {
            const li = document.createElement("li");

            let classes = "px-4 py-2 rounded-lg ";
            if (isActive) classes += "bg-black text-white";
            else if (disabled) classes += "border text-gray-400 cursor-not-allowed";
            else classes += "border hover:bg-gray-100";

            li.innerHTML = `<button class="${classes}" ${disabled ? "disabled" : ""}>${label}</button>`;

            if (!disabled && page !== null) {
                li.querySelector("button").addEventListener("click", () => {
                    filters.currentPage = page;
                    filters.offset = (page - 1) * filters.limit;
                    fetchAndRenderProducts();
                    window.scrollTo({ top: 0, behavior: "smooth" });
                });
            }

            return li;
        }

        // 🔙 Prev button
        ul.appendChild(
            createButton("Prev", current - 1, false, current === 1)
        );

        // 🔢 Calculate sliding window
        let start = Math.max(1, current - 1);
        let end = Math.min(total, current + 1);

        if (current <= 2) {
            start = 1;
            end = Math.min(3, total);
        } else if (current >= total - 1) {
            end = total;
            start = Math.max(1, total - 2);
        }

        // 👉 Always show first page if needed
        if (start > 1) {
            ul.appendChild(createButton(1, 1));
            if (start > 2) {
                const dots = document.createElement("li");
                dots.innerHTML = `<span class="px-2">...</span>`;
                ul.appendChild(dots);
            }
        }

        // 🔢 Middle pages (sliding 3)
        for (let i = start; i <= end; i++) {
            ul.appendChild(createButton(i, i, i === current));
        }

        // 👉 Always show last page if needed
        if (end < total) {
            if (end < total - 1) {
                const dots = document.createElement("li");
                dots.innerHTML = `<span class="px-2">...</span>`;
                ul.appendChild(dots);
            }
            ul.appendChild(createButton(total, total));
        }

        // 🔜 Next button
        ul.appendChild(
            createButton("Next", current + 1, false, current === total)
        );

        paginationContainer.appendChild(ul);
    }

    document.querySelector("select").addEventListener("change", (e) => {
        const val = e.target.value;
        if (val.includes("Low to High")) filters.sort = "price_asc";
        else if (val.includes("High to Low")) filters.sort = "price_desc";
        else if (val.includes("Newest")) filters.sort = "newest";
        else if (val.includes("Featured")) filters.sort = "featured";
        else filters.sort = null;
        filters.currentPage = 1;
        filters.offset = 0;
        fetchAndRenderProducts();
    });
</script>

<script>
    // Initialize Lucide icons
    lucide.createIcons();

    // Mobile filter toggle
    function toggleMobileFilter() {
        const sidebar = document.getElementById('mobileSidebar');
        sidebar.classList.toggle('hidden');
    }

    document.querySelectorAll('.apply-filters').forEach(btn => {
        btn.addEventListener('click', () => {
            toggleMobileFilter();
            fetchAndRenderProducts();
        });
    });
</script>

<style>
  #pagination-container {
    margin-top: 40px;
    justify-content: end;
  }

  /* Keep pagination always after grid */
  #product-grid {
    min-height: 600px;   /* initial height for grid */
  }

    @media (max-width: 767px) {
        #product-grid {
            min-height: 400px;   /* initial height for grid */
        }
    }
</style>

<?php include("../footer.php"); ?>

