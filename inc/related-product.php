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

        const res = await fetch(`${BASE_URL}/api/products/allProductVariations`, {
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

        // TEMP: show all (your API currently returns same product only)
        const filtered = products.filter(p => {
        return String(p.variation?.uid) !== String(currentVariation?.uid);
        });

        if (!filtered.length) {
            container.innerHTML = `<p class="text-sm text-gray-500">No related products found.</p>`;
            return;
        }

        container.innerHTML = filtered.map(p => {
            const image = p.variation?.images?.[0]?.url || "";
            const name = p.name || "Product";
            const price = p.variation?.sell_price ? `₹${p.variation.sell_price}` : "";
            const rating = parseFloat(p.ratings || 0);
            const productIdRl = p.product_id;
            const variationUid = p.variation?.uid;
            const slug = p.slug;
            const colorName = p.variation?.color || "";
            const size = p.variation?.size || "";
            const colorCode = COLOR_MAP[colorName.toLowerCase()] || "#e5e7eb";

            return `
            <div class="flex-shrink-0 w-48 group" data-product-id="${variationUid}">
                <div onclick="redirectToDetail('${variationUid}')"
                    class="cursor-pointer aspect-square rounded-lg overflow-hidden bg-gray-100 mb-3 relative">
                    <img src="${image}" alt="${name}"
                        class="w-full h-full object-cover transition-transform group-hover:scale-105"
                        loading="lazy"
                    />
                </div>

                <div>
                    <h3 class="font-medium text-gray-900 group-hover:text-blue-600 transition-colors line-clamp-2">
                        ${name}
                    </h3>
                    <p class="text-blue-600 font-medium mt-1">${price}</p>
                    <div class="flex flex-col gap-2 mt-2">
                        <!-- Color + Size Row -->
                        <div class="flex items-center gap-2 text-xs text-gray-600">
                            
                            <!-- Color Circle -->
                            <div class="flex items-center gap-1">
                            <span class="inline-block w-4 h-4 rounded-full border"
                                    style="background:${colorCode}"
                                    title="${colorName}">
                            </span>
                            <span>${colorName}</span>
                            </div>

                            <!-- Separator -->
                            <span class="text-gray-400">|</span>

                            <!-- Size -->
                            <div>
                            Size: <span class="font-medium">${size}</span>
                            </div>
                        </div>
                        <!-- Ratings -->
                        <div class="flex items-center gap-1">
                            ${renderRatingStars(rating)}
                            <span class="text-xs text-gray-500">(0)</span>
                        </div>
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
        window.location.href = `pages/product-detail?id=${id}`;
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