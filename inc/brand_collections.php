<section id="brand-collections" class="py-8 bg-gray-50">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold mb-4">Brand Collections</h2>

    <div class="relative brand-slider-container overflow-hidden">
      <div id="brand-slider-track" class="flex transition-transform duration-500 ease-in-out">
        <!-- Products Injected Here -->
      </div>

      <button onclick="brandSlide(-1)"
        class="absolute left-2 top-1/2 -translate-y-1/2 bg-gray-200 rounded-full p-2 shadow hover:bg-gray-300 z-10">
        <i data-lucide="arrow-left" class="w-6 h-6"></i>
      </button>

      <button onclick="brandSlide(1)"
        class="absolute right-2 top-1/2 -translate-y-1/2 bg-gray-200 rounded-full p-2 shadow hover:bg-gray-300 z-10">
        <i data-lucide="arrow-right" class="w-6 h-6"></i>
      </button>
    </div>
  </div>
</section>

<script>
  const brandSliderTrack = document.getElementById('brand-slider-track');
  let brandCurrentSlide = 0;
  const brandSlideWidth = 316;

  function showBrandSkeleton(count = 4) {
    brandSliderTrack.innerHTML = '';
    for (let i = 0; i < count; i++) {
      brandSliderTrack.innerHTML += `
        <div class="min-w-[300px] h-[350px] rounded-xl m-2 bg-white animate-pulse">
          <div class="w-full h-72 bg-gray-300"></div>
          <div class="h-4 bg-gray-200 m-4 rounded"></div>
        </div>
      `;
    }
  }

  async function fetchBrandCollections() {
    try {
      showBrandSkeleton();

      const response = await fetch(`<?= $baseUrl ?>/api/products/cat-products/2`, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' }
      });

      const result = await response.json();

      if (result.success && Array.isArray(result.data)) {
        renderBrandProducts(result.data);
      } else {
        brandSliderTrack.innerHTML = `<p class="text-center w-full py-6">No products found.</p>`;
      }
    } catch (error) {
      console.error("Brand collection fetch error:", error);
      brandSliderTrack.innerHTML = `<p class="text-center w-full text-red-500 py-6">Error loading products.</p>`;
    }
  }

  function renderBrandProducts(products) {
    brandSliderTrack.innerHTML = '';

    products.forEach(product => {
      const variation = product.variations?.[0];
      if (!variation) return;

      const image =
        variation.images?.[0]?.upload_url ||
        'https://via.placeholder.com/300x300?text=No+Image';

      const productName = product.name;
      const variationUID = variation.uid;

      brandSliderTrack.innerHTML += `
        <div class="min-w-[300px] max-w-[300px] m-2 flex-shrink-0 group">

          <div class="rounded-2xl overflow-hidden bg-white shadow-lg hover:shadow-xl transition">

            <div class="h-72 bg-gray-100 overflow-hidden">
              <a href="pages/product-detail.php?id=${variationUID}" class="block w-full h-full">
                <img 
                  src="${image}" 
                  alt="${productName}" 
                  class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
                  loading="lazy"
                >
              </a>
            </div>

            <div class="p-4 text-center">
              <h3 class="font-semibold line-clamp-2">${productName}</h3>
            </div>

          </div>
        </div>
      `;
    });

    brandUpdateVisible();
  }

  function brandSlide(direction) {
    const totalSlides = brandSliderTrack.children.length;
    const container = document.querySelector('.brand-slider-container');
    const visibleSlides = Math.floor(container.offsetWidth / brandSlideWidth);

    brandCurrentSlide += direction;

    if (brandCurrentSlide < 0) brandCurrentSlide = 0;
    if (brandCurrentSlide > totalSlides - visibleSlides) {
      brandCurrentSlide = totalSlides - visibleSlides;
    }

    brandSliderTrack.style.transform =
      `translateX(-${brandCurrentSlide * brandSlideWidth}px)`;
  }

  function brandUpdateVisible() {
    brandCurrentSlide = 0;
    brandSliderTrack.style.transform = `translateX(0px)`;
  }

  window.addEventListener('resize', brandUpdateVisible);

  fetchBrandCollections();
</script>
