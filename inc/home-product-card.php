<section class="Ex-products py-16 bg-gray-50 w-full">
  <div class="w-full mx-auto">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-12 px-4 sm:px-6">
      <div>
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 tracking-tight">
          Exclusive Products
        </h2>
        <p class="mt-2 text-gray-500 max-w-2xl">
          Discover our latest collection of premium apparel designed for comfort and style
        </p>
      </div>
      <a href="#" class="mt-4 sm:mt-0 inline-flex items-center text-black font-medium hover:underline">
        View All Collection
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1">
          <path d="M5 12h14"></path>
          <path d="m12 5 7 7-7 7"></path>
        </svg>
      </a>
    </div>

    <!-- Product Grid -->
    <div id="productGrid" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6 sm:gap-8 px-4 sm:px-6">
      <!-- Skeleton cards inserted here initially -->
    </div>

    <!-- Load More Button -->
    <div class="mt-12 text-center" id="loadMoreContainer" style="display: none;">
      <button onclick="loadMore()" class="px-6 py-3 bg-white border border-gray-300 rounded-full text-gray-900 font-medium hover:bg-gray-50 transition-colors duration-200 shadow-sm">
        View More Products
      </button>
    </div>
  </div>
</section>

<script>
  let exclusiveProducts = [];
  let visibleProducts = 8; // Initially show 8 cards

  // Fetch products from the JSON file
  function fetchProducts() {
    fetch('json/exclusiveProducts.json')
      .then(response => response.json())
      .then(data => {
        exclusiveProducts = data;
        renderProducts();
      })
      .catch(err => console.error('Error loading products:', err));
  }

  // Function to get stock status color
  function getStockStatusColor(status) {
    if (!status) return 'text-gray-600'; // Default neutral color if missing
    switch (status.toLowerCase()) {
      case 'low stock': return 'text-amber-600';
      case 'selling fast': return 'text-orange-600';
      case 'best seller': return 'text-emerald-600';
      case 'new arrival': return 'text-blue-600';
      default: return 'text-gray-600';
    }
  }

  // Create the product card HTML
  function createProductCard(product) {
    return `
      <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 flex flex-col h-full group">
        <div class="relative overflow-hidden aspect-[3/4]">
          <img 
            src="assets/uploads/t-shirts/${product.image_url}" 
            alt="${product.name}" 
            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
          />
          <div class="absolute top-3 right-3 transform transition-transform duration-300 hover:scale-105">
            <div class="bg-white px-3 py-1.5 rounded-full shadow-md">
              <span class="font-mono text-lg font-medium">₹${product.price.toLocaleString()}</span>
            </div>
          </div>
        </div>
        
        <div class="p-5 flex flex-col flex-grow space-y-4">
          <div>
            <h3 class="text-xl font-bold tracking-tight text-gray-900">
              ${product.name}
            </h3>
            <p class="text-gray-500 mt-1 text-sm tracking-wide">
              ${product.tagline}
            </p>
          </div>
          
          <div class="flex items-center justify-between text-xs">
            <span class="font-medium ${getStockStatusColor(product.stock_status)}">
              ${product.stock_status}
            </span>
            <span class="${product.stock_left <= 5 ? 'text-red-500 font-medium' : 'text-gray-500'}">
              ${product.stock_left} ${product.stock_left === 1 ? 'Item' : 'Items'} Left
            </span>
          </div>

          <button class="mt-auto w-full bg-black text-white py-3 rounded-lg font-medium tracking-wide flex items-center justify-center gap-2 hover:bg-gray-900 transition-colors duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
              <line x1="3" y1="6" x2="21" y2="6"></line>
              <path d="M16 10a4 4 0 0 1-8 0"></path>
            </svg>
            Add to Cart
          </button>
        </div>
      </div>
    `;
  }

  // Render products to the grid
  function renderProducts() {
    const grid = document.getElementById('productGrid');
    grid.innerHTML = exclusiveProducts
      .slice(0, visibleProducts)
      .map(product => createProductCard(product))
      .join('');
    
    const loadMoreContainer = document.getElementById('loadMoreContainer');
    loadMoreContainer.style.display = visibleProducts < exclusiveProducts.length ? 'block' : 'none';
  }

  // Load more products
  function loadMore() {
    visibleProducts = Math.min(visibleProducts + 5, exclusiveProducts.length);
    renderProducts();
  }

  // Show skeletons while loading
  function showSkeletons() {
    const grid = document.getElementById('productGrid');
    for (let i = 0; i < 8; i++) {
      grid.innerHTML += `
        <div class="flex flex-col rounded-2xl overflow-hidden shadow-lg bg-white/20 backdrop-blur-md">
          <div class="skeleton-card w-full"></div>
          <div class="p-4">
            <div class="skeleton-text"></div>
            <div class="skeleton-text short"></div>
          </div>
        </div>
      `;
    }
  }

  // Show skeletons initially while loading
  showSkeletons();

  // Fetch products initially
  fetchProducts();
</script>


