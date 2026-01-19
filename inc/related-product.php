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

<!-- related product slider -->
 <script>
  // ============================================
  // DYNAMIC RELATED PRODUCTS (FROM API)
  // ============================================

  async function fetchRelatedProducts() {
    if (!currentCategoryId) {
      console.warn("No category id found for related products");
      return;
    }

    try {
      const payload = {
        category_id: currentCategoryId,
        limit: 20,
        offset: 0
      };

      const res = await fetch(`${BASE_URL}/products/allProductVariations`, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(payload)
      });

      const json = await res.json();

      if (json.success && Array.isArray(json.data)) {
        renderRelatedProducts(json.data);
      } else {
        console.warn("No related products found");
      }

    } catch (e) {
      console.error("Failed to fetch related products:", e);
    }
  }

  // --------- RENDER RELATED PRODUCTS ----------
  function renderRelatedProducts(products) {
    const container = document.getElementById("relatedProductsContainer");
    if (!container) return;

    // Remove current product from related list (important UX)
    const filtered = products.filter(p => p.product_id != currentProductId);

    if (!filtered.length) {
      container.innerHTML = `<p class="text-sm text-gray-500">No related products found.</p>`;
      return;
    }

    container.innerHTML = filtered.map(p => {
      const image = p.images?.[0] || "";
      const name = p.product_name || p.name || "Product";
      const price = p.sell_price ? `₹${Math.round(p.sell_price)}` : "";
      const rating = p.rating || 4.5;
      const productId = p.product_id || p.id;

      return `
        <div class="flex-shrink-0 w-48 group" data-product-id="${productId}">
          <div onclick="redirectToDetail(${productId})"
               class="cursor-pointer aspect-square rounded-lg overflow-hidden bg-gray-100 mb-3 relative">
            <img
              src="${image}"
              alt="${name}"
              class="w-full h-full object-cover transition-transform group-hover:scale-105"
              loading="lazy"
            />
          </div>

          <div>
            <h3 class="font-medium text-gray-900 group-hover:text-blue-600 transition-colors line-clamp-2">
              ${name}
            </h3>
            <p class="text-blue-600 font-medium mt-1">${price}</p>
            <div class="flex items-center gap-1 mt-2">
              ${renderRatingStars(rating)}
              <span class="text-xs text-gray-500">(120)</span>
            </div>
          </div>
        </div>
      `;
    }).join("");

    initRelatedSlider();
  }

  // --------- RATING STARS (REUSE YOUR FUNCTION) ----------
  function renderRatingStars(rating) {
    const fullStars = Math.floor(rating);
    const hasHalfStar = rating % 1 >= 0.5;
    const emptyStars = 5 - fullStars - (hasHalfStar ? 1 : 0);

    let stars = "";

    for (let i = 0; i < fullStars; i++) {
      stars += `
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" class="text-amber-400">
          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
        </svg>
      `;
    }

    if (hasHalfStar) {
      stars += `
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" class="text-amber-400">
          <defs>
            <linearGradient id="half-star-rel" x1="0" x2="100%" y1="0" y2="0">
              <stop offset="50%" stop-color="currentColor"/>
              <stop offset="50%" stop-color="#D1D5DB"/>
            </linearGradient>
          </defs>
          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" fill="url(#half-star-rel)"/>
        </svg>
      `;
    }

    for (let i = 0; i < emptyStars; i++) {
      stars += `
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" class="text-gray-300">
          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
        </svg>
      `;
    }

    return `<div class="flex">${stars}</div>`;
  }

  // --------- REDIRECT ----------
  window.redirectToDetail = function(id) {
    window.location.href = `pages/product-detail.php?id=${id}`;
  };

  // --------- SLIDER NAV ----------
  function initRelatedSlider() {
    const relatedContainer = document.getElementById('relatedProductsContainer');
    const relatedPrevBtn = document.querySelector('.related-prev');
    const relatedNextBtn = document.querySelector('.related-next');

    if (!relatedContainer || !relatedPrevBtn || !relatedNextBtn) return;

    const scrollAmount = 300;

    relatedPrevBtn.onclick = () => {
      relatedContainer.scrollBy({ left: -scrollAmount, behavior: "smooth" });
    };

    relatedNextBtn.onclick = () => {
      relatedContainer.scrollBy({ left: scrollAmount, behavior: "smooth" });
    };

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

    relatedContainer.addEventListener('scroll', updateButtonStates);
    window.addEventListener('resize', updateButtonStates);
    updateButtonStates();
  }

  // --------- CALL AFTER PRODUCT LOAD ----------
  // IMPORTANT: call this only AFTER bindProduct runs
  document.addEventListener("DOMContentLoaded", () => {
    // We wait until product is loaded, then call from bindProduct
  });
</script>

<!-- <script>
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
</script> -->