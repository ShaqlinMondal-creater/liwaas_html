<section id="best-seller" class="py-8 bg-white">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold mb-4">New Arrival Products</h2>
    <div class="relative slider-containers overflow-hidden">
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
      showSkeleton(4);

      const response = await fetch(`<?= $baseUrl ?>/api/sections/getsections-products`, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
          section_name: "New Arrival",
          limit: 20,
          offset: 0,
          status: true
        })
      });

      const result = await response.json();

      if (result.success && Array.isArray(result.data) && result.data.length > 0) {
        renderSliderItems(result.data);
      } else {
        sliderTrack.innerHTML = `<p class="text-center w-full py-6">No products found.</p>`;
      }
    } catch (error) {
      console.error("Failed to fetch New Arrival Products:", error);
      sliderTrack.innerHTML = `<p class="text-center w-full text-red-500 py-6">Error loading products.</p>`;
    }
  }

  function renderSliderItems(items) {
    sliderTrack.innerHTML = ''; // Clear skeleton

    items.forEach(row => {
      const product = row.product;
      const variation = product.variation || {};

      const image =
        variation.images?.[0]?.upload_url ||
        product.image_url ||
        'https://via.placeholder.com/300x300?text=No+Image';

      const sellPrice = Number(variation.sell_price) || 0;
      const regularPrice = Number(variation.regular_price) || sellPrice;

      let discountPercent = 0;
      if (regularPrice > sellPrice) {
        discountPercent = Math.round(((regularPrice - sellPrice) / regularPrice) * 100);
      }
      const productName = product.name;
      const slug = product.slug;
      const variationUID = variation.uid;

sliderTrack.innerHTML += `
  <div class="min-w-[300px] max-w-[300px] m-2 flex-shrink-0 group">

    <!-- Card -->
    <div class="glossy-card rounded-2xl overflow-hidden relative">

      <!-- Image -->
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

      <!-- Info -->
      <div class="p-4 bg-white relative">
        <h3 class="font-semibold line-clamp-2 mb-2">${productName}</h3>

        <div class="flex items-center justify-between gap-2">
          <!-- Price -->
          <div class="flex items-center gap-2">
            <span class="text-lg font-bold text-gray-900">₹${sellPrice}</span>
            ${
              regularPrice > sellPrice
                ? `<span class="text-sm text-gray-500 line-through">₹${regularPrice}</span>`
                : ``
            }
          </div>
        </div>

        <!-- View button stuck right -->
        <a href="pages/product-detail.php?id=${variationUID}" 
           class="view-btn absolute right-0 bottom-4 inline-flex items-center gap-1 px-7 py-2 rounded-l-full text-xl font-semibold">
          View
        </a>
      </div>
    </div>

    <!-- Discount bar (outside card) -->
    ${
      discountPercent > 0
        ? `
        <div class="discount-outside">
          Discount: ${discountPercent}%
        </div>
        `
        : ``
    }

  </div>
`;


    });

    updateVisibleSlides();
  }

  function slide(direction) {
    const totalSlides = sliderTrack.children.length;
    const container = document.querySelector('.slider-containers');
    const visibleSlides = Math.floor(container.offsetWidth / slideWidth);

    currentSlide += direction;
    if (currentSlide < 0) currentSlide = 0;
    if (currentSlide > totalSlides - visibleSlides) {
      currentSlide = totalSlides - visibleSlides;
    }

    sliderTrack.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
  }

  function updateVisibleSlides() {
    currentSlide = 0;
    sliderTrack.style.transform = `translateX(0px)`;
  }

  window.addEventListener('resize', updateVisibleSlides);

  fetchNewArrivalProducts();
</script>

<style>
 /* Card */
.glossy-card {
  background: linear-gradient(135deg, rgba(255,255,255,0.7), rgba(255,255,255,0.35));
  border: 1px solid rgba(255,255,255,0.4);
  box-shadow: 0 10px 25px rgba(0,0,0,0.08), inset 0 1px 0 rgba(255,255,255,0.6);
  backdrop-filter: blur(10px);
  transition: transform 0.25s ease, box-shadow 0.25s ease;
}

.glossy-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 18px 40px rgba(0,0,0,0.12), inset 0 1px 0 rgba(255,255,255,0.7);
}

/* View button */
.view-btn {
  background: linear-gradient(135deg,  #deb64c, #1a1a1a);
  color: #fff;
  box-shadow: 0 6px 15px rgba(79, 70, 229, 0.25);
  transition: all 0.25s ease;
}

.view-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 25px rgba(241, 190, 60, 0.35);
  background: linear-gradient(135deg,  #f4c134, #0b0b0b);
}

/* Discount bar BELOW card (narrower than card) */
.discount-outside {
  width: 90%;                 /* less than card width */
  margin: 0 auto;
  margin-top: -20px;
  padding-top:10px;
  height: 0;
  overflow: hidden;
  background: linear-gradient(135deg, #deb64c, #1a1a1a);
  color: #fff;
  font-size: 0.9rem;
  font-weight: 600;
  text-align: center;
  border-radius: 0 0 14px 14px;
  transition: height 0.3s ease, padding 0.3s ease;
}

/* Expand down on hover */
.group:hover .discount-outside {
  height: 42px;
  padding: 10px 0;
}


</style>