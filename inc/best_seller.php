<!-- Best seller slider -->
<style>
    .slider-container {
      overflow: hidden;
    }
    .slider-track {
      display: flex;
      transition: transform 0.5s ease;
    }
</style>

<section id="best-seller" class="py-8 bg-white">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold mb-4">Best Seller Products</h2>
    <div class="relative slider-container">
      <div id="slider-track" class="slider-track">
        <!-- Dynamic Product Cards will be injected here -->
      </div>
      <button onclick="slide(-1)" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-gray-200 rounded-full p-2 shadow hover:bg-gray-300 transition-colors">
        ◀
      </button>
      <button onclick="slide(1)" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-gray-200 rounded-full p-2 shadow hover:bg-gray-300 transition-colors">
        ▶
      </button>
    </div>
  </div>
</section>

<script>
    const bestSellers = [
    {"name":"Classic Watch","img":"https://images.pexels.com/photos/190819/pexels-photo-190819.jpeg", "link":"#"},
    {"name":"Leather Jacket","img":"https://images.pexels.com/photos/298863/pexels-photo-298863.jpeg", "link":"#"},
    {"name":"Sneakers","img":"https://images.pexels.com/photos/2529148/pexels-photo-2529148.jpeg", "link":"#"},
    {"name":"Perfume","img":"https://images.pexels.com/photos/965989/pexels-photo-965989.jpeg", "link":"#"},
    {"name":"Sunglasses","img":"https://images.pexels.com/photos/46710/pexels-photo-46710.jpeg", "link":"#"}
    ];

    const sliderTrack = document.getElementById('slider-track');

    bestSellers.forEach(product => {
    sliderTrack.innerHTML += `
        <div class="min-w-[300px] rounded-xl overflow-hidden shadow-lg m-2">
        <img src="${product.img}" alt="${product.name}" class="object-cover w-full h-72">
        <div class="p-4 text-center bg-gray-100">
            <h3 class="font-semibold mb-2">${product.name}</h3>
            <a href="${product.link}" class="text-blue-500 hover:underline">Show Details</a>
        </div>
        </div>
    `;
    });

    let currentSlide = 0;
    const visibleSlides = Math.floor(document.querySelector('.slider-container').offsetWidth / 316);

    function slide(direction) {
    const slideWidth = 316; // Width of one card including margin
    const totalSlides = bestSellers.length;

    currentSlide += direction;
    if (currentSlide < 0) currentSlide = 0;
    if (currentSlide > totalSlides - visibleSlides) currentSlide = totalSlides - visibleSlides;

    sliderTrack.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
    }
</script>
