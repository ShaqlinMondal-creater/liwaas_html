<section id="best-seller" class="py-8 bg-white">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold mb-4">New Arrival Products</h2>
    <div class="relative slider-container overflow-hidden">
      <div id="slider-track" class="slider-track flex transition-transform duration-500 ease-in-out">
        <!-- Skeleton or Product Cards will be injected here -->
      </div>
      <button onclick="slide(-1)" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-gray-200 rounded-full p-2 shadow hover:bg-gray-300 transition-colors z-10">
        ◀
      </button>
      <button onclick="slide(1)" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-gray-200 rounded-full p-2 shadow hover:bg-gray-300 transition-colors z-10">
        ▶
      </button>
    </div>
  </div>
</section>

<script>
  const sliderTrack = document.getElementById('slider-track');
  let currentSlide = 0;
  const slideWidth = 316; // Card width including margin

  function showSkeleton(count = 4) {
    sliderTrack.innerHTML = '';
    for (let i = 0; i < count; i++) {
      sliderTrack.innerHTML += `
        <div class="min-w-[300px] h-[380px] rounded-xl overflow-hidden shadow-lg m-2 bg-white animate-pulse">
          <div class="w-full h-72 bg-gray-300"></div>
          <div class="p-4 bg-gray-100">
            <div class="h-4 bg-gray-300 mb-2 rounded w-3/4 mx-auto"></div>
            <div class="h-4 bg-gray-300 rounded w-1/2 mx-auto"></div>
          </div>
        </div>
      `;
    }
  }

  async function fetchNewArrivalProducts() {
    try {
      showSkeleton();

      const response = await fetch(`<?= $baseUrl ?>/api/sections/getsections-products`, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
          section_name: "New Arrival",
          limit: 10,
          offset: 0,
          status: true
        })
      });

      const result = await response.json();

      if (result.success && result.data.length > 0) {
        renderSliderItems(result.data);
      } else {
        sliderTrack.innerHTML = `<p class="text-center w-full py-6">No products found.</p>`;
      }
    } catch (error) {
      console.error("Failed to fetch New Arrival Products:", error);
      sliderTrack.innerHTML = `<p class="text-center w-full text-red-500 py-6">Error loading products.</p>`;
    }
  }

  function renderSliderItems(products) {
    sliderTrack.innerHTML = ''; // Clear skeleton

    products.forEach(item => {
      const product = item.product;
      const variation = product.variation || {};
      const image = variation.images?.[0]?.upload_url || product.upload?.url || 'https://via.placeholder.com/300x300?text=No+Image';

      sliderTrack.innerHTML += `
        <div class="min-w-[300px] rounded-xl overflow-hidden shadow-lg m-2 bg-white">
          <img src="${image}" alt="${product.name}" class="object-cover w-full h-72">
          <div class="p-4 text-center bg-gray-100">
            <h3 class="font-semibold mb-2">${product.name}</h3>
            <p class="text-gray-600 text-sm mb-2">Price: ₹${variation.sell_price?.toFixed(2) || 'N/A'}</p>
            <a href="/product/${product.slug}" class="text-blue-500 hover:underline">Show Details</a>
          </div>
        </div>
      `;
    });

    updateVisibleSlides();
  }

  function slide(direction) {
    const totalSlides = sliderTrack.children.length;
    const container = document.querySelector('.slider-container');
    const visibleSlides = Math.floor(container.offsetWidth / slideWidth);

    currentSlide += direction;
    if (currentSlide < 0) currentSlide = 0;
    if (currentSlide > totalSlides - visibleSlides) currentSlide = totalSlides - visibleSlides;

    sliderTrack.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
  }

  function updateVisibleSlides() {
    currentSlide = 0;
    sliderTrack.style.transform = `translateX(0px)`;
  }

  window.addEventListener('resize', updateVisibleSlides);
  fetchNewArrivalProducts();
</script>
