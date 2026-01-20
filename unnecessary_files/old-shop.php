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
                    <div class="space-y-3">
                        <label class="flex items-center">
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
                        </label>
                    </div>
                </div>

                <!-- Price Range -->
                <div class="border-b pb-6">
                    <h3 class="font-medium mb-4">Price Range</h3>
                    <div class="space-y-4">
                        <input type="range" class="w-full accent-blue-600" min="0" max="1000" step="10">
                        <div class="flex items-center space-x-4">
                            <input type="number" class="w-full px-3 py-2 border rounded-lg" placeholder="Min">
                            <span class="text-gray-500">to</span>
                            <input type="number" class="w-full px-3 py-2 border rounded-lg" placeholder="Max">
                        </div>
                    </div>
                </div>

                <!-- Colors -->
                <div class="border-b pb-6">
                    <h3 class="font-medium mb-4">Colors</h3>
                    <div class="flex flex-wrap gap-3">
                        <button class="w-10 h-10 rounded-full bg-black ring-2 ring-offset-2 ring-black"></button>
                        <button class="w-10 h-10 rounded-full bg-white border-2 border-gray-200"></button>
                        <button class="w-10 h-10 rounded-full bg-gray-500"></button>
                        <button class="w-10 h-10 rounded-full bg-red-500"></button>
                        <button class="w-10 h-10 rounded-full bg-blue-500"></button>
                        <button class="w-10 h-10 rounded-full bg-green-500"></button>
                    </div>
                </div>

                <!-- Size -->
                <div class="pb-6">
                    <h3 class="font-medium mb-4">Size</h3>
                    <div class="grid grid-cols-3 gap-3">
                        <button class="py-3 border rounded-lg hover:border-black">XS</button>
                        <button class="py-3 border rounded-lg hover:border-black">S</button>
                        <button class="py-3 bg-black text-white rounded-lg">M</button>
                        <button class="py-3 border rounded-lg hover:border-black">L</button>
                        <button class="py-3 border rounded-lg hover:border-black">XL</button>
                        <button class="py-3 border rounded-lg hover:border-black">2XL</button>
                    </div>
                </div>

                <!-- Apply Filters Button -->
                <button class="w-full bg-black text-white py-3 rounded-lg font-medium">
                    Apply Filters
                </button>
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
                    <option>Sort by: Featured</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                    <option>Newest First</option>
                </select>
            </div>
        </div>

        <div class="flex flex-col md:flex-row gap-8">
            <!-- Desktop Filters Sidebar -->
            <div class="hidden md:block w-64 space-y-6">
                <!-- Categories -->
                <div class="bg-white p-6 rounded-xl shadow-sm border">
                    <h3 class="font-medium mb-4">Categories</h3>
                    <div class="space-y-3">
                        <label class="flex items-center">
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
                        </label>
                    </div>
                </div>

                <!-- Price Range -->
                <div class="bg-white p-6 rounded-xl shadow-sm border">
                    <h3 class="font-medium mb-4">Price Range</h3>
                    <div class="space-y-4">
                        <input type="range" class="w-full accent-blue-600" min="0" max="1000" step="10">
                        <div class="flex items-center space-x-4">
                            <input type="number" class="w-full px-3 py-2 border rounded-lg" placeholder="Min">
                            <span class="text-gray-500">to</span>
                            <input type="number" class="w-full px-3 py-2 border rounded-lg" placeholder="Max">
                        </div>
                    </div>
                </div>

                <!-- Colors -->
                <div class="bg-white p-6 rounded-xl shadow-sm border">
                    <h3 class="font-medium mb-4">Colors</h3>
                    <div class="flex flex-wrap gap-3">
                        <button class="w-10 h-10 rounded-full bg-black ring-2 ring-offset-2 ring-black"></button>
                        <button class="w-10 h-10 rounded-full bg-white border-2 border-gray-200"></button>
                        <button class="w-10 h-10 rounded-full bg-gray-500"></button>
                        <button class="w-10 h-10 rounded-full bg-red-500"></button>
                        <button class="w-10 h-10 rounded-full bg-blue-500"></button>
                        <button class="w-10 h-10 rounded-full bg-green-500"></button>
                    </div>
                </div>

                <!-- Size -->
                <div class="bg-white p-6 rounded-xl shadow-sm border">
                    <h3 class="font-medium mb-4">Size</h3>
                    <div class="grid grid-cols-3 gap-3">
                        <button class="py-3 border rounded-lg hover:border-black">XS</button>
                        <button class="py-3 border rounded-lg hover:border-black">S</button>
                        <button class="py-3 bg-black text-white rounded-lg">M</button>
                        <button class="py-3 border rounded-lg hover:border-black">L</button>
                        <button class="py-3 border rounded-lg hover:border-black">XL</button>
                        <button class="py-3 border rounded-lg hover:border-black">2XL</button>
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
                <div id="product-grid" class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6"></div>

                <!-- Desktop Pagination -->
                <div class="mt-12 flex items-center justify-between hidden md:flex">
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
        lucide.createIcons();

        function toggleMobileFilter() {
            document.getElementById('mobileSidebar').classList.toggle('hidden');
        }

        let allProducts = [];
        let currentIndex = 0;
        const chunkDesktop = 9;
        const chunkMobile = 5;
        const initialMobile = 8;
        const productGrid = document.getElementById("product-grid");
        const isMobile = window.innerWidth < 768;

        function renderProducts(products) {
            products.forEach(product => {
                const card = document.createElement("div");
                card.className = "bg-white rounded-lg shadow-sm border group";
                card.innerHTML = `
                    <div class="relative">
                        <img src="assets/uploads/t-shirts/${product.image_url}" alt="${product.name}" class="w-full aspect-square object-cover rounded-t-lg">
                        <div class="absolute top-4 right-4">
                            <button class="p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                                <i data-lucide="heart" class="w-5 h-5"></i>
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-medium">${product.name}</h3>
                        <p class="text-sm text-gray-500 mt-1">${product.tagline}</p>
                        <div class="flex items-center justify-between mt-3">
                            <span class="font-bold">₹${product.price}</span>
                            <a href="pages/product-detail.php?id=${product.id}" class="text-sm text-blue-600 hover:text-blue-700">Add to Cart</a>
                        </div>
                    </div>`;
                productGrid.appendChild(card);
            });
            lucide.createIcons();
        }

        function loadNextChunk() {
            const count = isMobile && currentIndex === 0 ? initialMobile : chunkMobile;
            const nextProducts = allProducts.slice(currentIndex, currentIndex + count);
            renderProducts(nextProducts);
            currentIndex += count;
        }

        function setupInfiniteScroll() {
            window.addEventListener("scroll", () => {
                if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 100 && currentIndex < allProducts.length) {
                    loadNextChunk();
                }
            });
        }

        fetch("json/exclusiveProducts.json")
            .then(res => res.json())
            .then(data => {
                allProducts = data;

                // ✅ Hide skeleton
                document.getElementById('skeleton-loader').style.display = 'none';

                if (isMobile) {
                    loadNextChunk();
                    setupInfiniteScroll();
                } else {
                    renderProducts(allProducts.slice(0, chunkDesktop));
                }
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
    </script>
<?php include("../footer.php"); ?>