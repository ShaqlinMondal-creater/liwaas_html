<section id="sale-slider" class="relative overflow-hidden bg-black py-10">

  <div class="relative max-w-7xl mx-auto px-4">

    <!-- SLIDES -->
    <div id="saleSlides" class="relative h-[420px] rounded-3xl overflow-hidden">

      <!-- Slide 1 -->
      <div class="sale-slide active">
        <div class="grid grid-cols-1 md:grid-cols-2 h-full">

          <!-- LEFT IMAGE -->
          <div class="relative">
            <img src="https://source.unsplash.com/600x600/?shopping,fashion"
                 class="w-full h-full object-cover animate-img" />
          </div>

          <!-- RIGHT CONTENT -->
          <div class="relative bg-gradient-to-br from-yellow-400 via-orange-500 to-black p-10 flex flex-col justify-center text-white">

            <h2 class="text-5xl font-extrabold tracking-wide animate-title">
              MEGA SALE
            </h2>

            <p class="mt-2 text-2xl animate-subtitle">
              Clearance Offer
            </p>

            <p class="mt-4 text-sm max-w-md text-white/90 animate-text">
              Discover amazing deals on trending fashion. Limited time offer. Grab your favorites before they're gone.
            </p>

            <div class="mt-6 flex items-center gap-6 animate-cta">

              <button class="px-6 py-3 bg-black text-white rounded-full hover:bg-white hover:text-black transition">
                Shop Now
              </button>

              <div class="relative bg-white text-black w-24 h-24 rounded-full flex items-center justify-center font-extrabold text-3xl animate-badge">
                60%
                <span class="absolute bottom-2 text-xs">OFF</span>
              </div>

            </div>

          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="sale-slide">
        <div class="grid grid-cols-1 md:grid-cols-2 h-full">

          <div class="relative">
            <img src="https://source.unsplash.com/600x600/?clothes,style"
                 class="w-full h-full object-cover animate-img" />
          </div>

          <div class="relative bg-gradient-to-br from-orange-500 via-yellow-400 to-black p-10 flex flex-col justify-center text-white">

            <h2 class="text-5xl font-extrabold tracking-wide animate-title">
              FLASH DEAL
            </h2>

            <p class="mt-2 text-2xl animate-subtitle">
              Limited Stock
            </p>

            <p class="mt-4 text-sm max-w-md text-white/90 animate-text">
              Hot deals on fresh arrivals. Stylish, affordable, and trending now.
            </p>

            <div class="mt-6 flex items-center gap-6 animate-cta">

              <button class="px-6 py-3 bg-black text-white rounded-full hover:bg-white hover:text-black transition">
                Explore
              </button>

              <div class="relative bg-white text-black w-24 h-24 rounded-full flex items-center justify-center font-extrabold text-3xl animate-badge">
                45%
                <span class="absolute bottom-2 text-xs">OFF</span>
              </div>

            </div>

          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="sale-slide">
        <div class="grid grid-cols-1 md:grid-cols-2 h-full">

          <div class="relative">
            <img src="https://source.unsplash.com/600x600/?model,fashion"
                 class="w-full h-full object-cover animate-img" />
          </div>

          <div class="relative bg-gradient-to-br from-black via-orange-500 to-yellow-400 p-10 flex flex-col justify-center text-white">

            <h2 class="text-5xl font-extrabold tracking-wide animate-title">
              NEW ARRIVAL
            </h2>

            <p class="mt-2 text-2xl animate-subtitle">
              Trend Alert
            </p>

            <p class="mt-4 text-sm max-w-md text-white/90 animate-text">
              Step into style with our newest fashion picks.
            </p>

            <div class="mt-6 flex items-center gap-6 animate-cta">

              <button class="px-6 py-3 bg-black text-white rounded-full hover:bg-white hover:text-black transition">
                Discover
              </button>

              <div class="relative bg-white text-black w-24 h-24 rounded-full flex items-center justify-center font-extrabold text-3xl animate-badge">
                30%
                <span class="absolute bottom-2 text-xs">OFF</span>
              </div>

            </div>

          </div>
        </div>
      </div>

    </div>

    <!-- NAV BUTTONS -->
    <button id="salePrev" class="absolute left-4 top-1/2 -translate-y-1/2 bg-white text-black w-10 h-10 rounded-full shadow hover:bg-orange-500 hover:text-white transition">
      ‹
    </button>

    <button id="saleNext" class="absolute right-4 top-1/2 -translate-y-1/2 bg-white text-black w-10 h-10 rounded-full shadow hover:bg-orange-500 hover:text-white transition">
      ›
    </button>

  </div>

</section>

<script>
document.addEventListener('DOMContentLoaded', () => {

  const slides = document.querySelectorAll('.sale-slide');
  let current = 0;

  function showSlide(index) {
    slides.forEach((s, i) => {
      s.classList.toggle('active', i === index);
    });
  }

  document.getElementById('saleNext').addEventListener('click', () => {
    current = (current + 1) % slides.length;
    showSlide(current);
  });

  document.getElementById('salePrev').addEventListener('click', () => {
    current = (current - 1 + slides.length) % slides.length;
    showSlide(current);
  });

  // AUTOPLAY
  setInterval(() => {
    current = (current + 1) % slides.length;
    showSlide(current);
  }, 5000);

});
</script>
<style>
.sale-slide {
  position: absolute;
  inset: 0;
  opacity: 0;
  pointer-events: none;
  transition: opacity 0.8s ease;
}

.sale-slide.active {
  opacity: 1;
  pointer-events: auto;
}

/* Text Animations */
.animate-title {
  animation: fadeUp 1s ease both;
}

.animate-subtitle {
  animation: fadeUp 1.2s ease both;
}

.animate-text {
  animation: fadeUp 1.4s ease both;
}

.animate-cta {
  animation: fadeUp 1.6s ease both;
}

.animate-badge {
  animation: popIn 1.4s ease both;
}

/* Image Animation */
.animate-img {
  animation: zoomIn 5s linear both;
}

/* KEYFRAMES */
@keyframes fadeUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes popIn {
  0% {
    opacity: 0;
    transform: scale(0.6);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}

@keyframes zoomIn {
  from {
    transform: scale(1);
  }
  to {
    transform: scale(1.1);
  }
}
</style>
