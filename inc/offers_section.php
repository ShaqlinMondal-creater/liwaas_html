<section id="mega-sale-slider" class="relative overflow-hidden bg-purple-900">

  <div class="relative max-w-7xl mx-auto h-[420px]">

    <!-- SLIDES -->
    <div id="megaSlides" class="relative w-full h-full">

      <!-- Slide 1 -->
      <div class="mega-slide active">
        <div class="relative w-full h-full grid grid-cols-1 md:grid-cols-2">

          <!-- LEFT TEXT -->
          <div class="relative z-10 p-10 text-white flex flex-col justify-center">

            <h2 class="text-5xl font-extrabold tracking-wide">
              MEGA SALE
            </h2>

            <p class="mt-2 text-2xl italic">
              Clearance Offer
            </p>

            <p class="mt-4 text-sm max-w-md text-white/90">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
            </p>

            <button class="mt-6 w-36 py-2 rounded-full bg-pink-500 hover:bg-pink-600 transition text-sm font-semibold">
              READ MORE
            </button>

          </div>

          <!-- RIGHT IMAGE -->
          <div class="relative flex items-center justify-center">

            <img src="https://indian-retailer.s3.ap-south-1.amazonaws.com/s3fs-public/2021-04/woman%20shopping.jpg"
                 class="w-full h-full object-cover md:object-contain"/>

            <!-- 60% BADGE -->
            <div class="absolute left-0 bottom-16 transform -translate-x-1/2 bg-pink-600 w-28 h-28 rounded-full flex items-center justify-center text-white font-extrabold text-4xl">
              60%
              <span class="absolute bottom-4 text-xs font-semibold">OFF</span>
            </div>

          </div>

          <!-- DIAGONAL STRIPES -->
          <div class="absolute inset-0 pointer-events-none">
            <div class="stripe stripe1"></div>
            <div class="stripe stripe2"></div>
            <div class="stripe stripe3"></div>
          </div>

        </div>
      </div>

      <!-- Slide 2 -->
      <div class="mega-slide">
        <div class="relative w-full h-full grid grid-cols-1 md:grid-cols-2">

          <div class="relative z-10 p-10 text-white flex flex-col justify-center">

            <h2 class="text-5xl font-extrabold tracking-wide">
              MEGA SALE
            </h2>

            <p class="mt-2 text-2xl italic">
              Clearance Offer
            </p>

            <p class="mt-4 text-sm max-w-md text-white/90">
              Limited stock deals. Shop trending fashion at unbeatable prices.
            </p>

            <button class="mt-6 w-36 py-2 rounded-full bg-pink-500 hover:bg-pink-600 transition text-sm font-semibold">
              READ MORE
            </button>

          </div>

          <div class="relative flex items-center justify-center">

            <img src="https://www.imagesbof.in/wp-content/uploads/2022/05/WOMEN-DRIVE-online-cover.jpg"
                 class="w-full h-full object-cover md:object-contain"/>

            <div class="absolute left-0 bottom-16 transform -translate-x-1/2 bg-pink-600 w-28 h-28 rounded-full flex items-center justify-center text-white font-extrabold text-4xl">
              60%
              <span class="absolute bottom-4 text-xs font-semibold">OFF</span>
            </div>

          </div>

          <div class="absolute inset-0 pointer-events-none">
            <div class="stripe stripe1"></div>
            <div class="stripe stripe2"></div>
            <div class="stripe stripe3"></div>
          </div>

        </div>
      </div>

      <!-- Slide 3 -->
      <div class="mega-slide">
        <div class="relative w-full h-full grid grid-cols-1 md:grid-cols-2">

          <div class="relative z-10 p-10 text-white flex flex-col justify-center">

            <h2 class="text-5xl font-extrabold tracking-wide">
              MEGA SALE
            </h2>

            <p class="mt-2 text-2xl italic">
              Clearance Offer
            </p>

            <p class="mt-4 text-sm max-w-md text-white/90">
              Big discounts on premium collections. Don’t miss out.
            </p>

            <button class="mt-6 w-36 py-2 rounded-full bg-pink-500 hover:bg-pink-600 transition text-sm font-semibold">
              READ MORE
            </button>

          </div>

          <div class="relative flex items-center justify-center">

            <img src="https://t4.ftcdn.net/jpg/04/72/44/67/360_F_472446747_AmtV7OdEJVyzVRFsVTjVHhIiFV00bMNr.jpg"
                 class="w-full h-full object-cover md:object-contain"/>

            <div class="absolute left-0 bottom-16 transform -translate-x-1/2 bg-pink-600 w-28 h-28 rounded-full flex items-center justify-center text-white font-extrabold text-4xl">
              60%
              <span class="absolute bottom-4 text-xs font-semibold">OFF</span>
            </div>

          </div>

          <div class="absolute inset-0 pointer-events-none">
            <div class="stripe stripe1"></div>
            <div class="stripe stripe2"></div>
            <div class="stripe stripe3"></div>
          </div>

        </div>
      </div>

    </div>

    <!-- NAV -->
    <button id="megaPrev" class="absolute left-4 top-1/2 -translate-y-1/2 z-20 bg-white/80 w-10 h-10 rounded-full hover:bg-pink-500 hover:text-white transition">
      ‹
    </button>

    <button id="megaNext" class="absolute right-4 top-1/2 -translate-y-1/2 z-20 bg-white/80 w-10 h-10 rounded-full hover:bg-pink-500 hover:text-white transition">
      ›
    </button>

  </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', () => {

  const slides = document.querySelectorAll('.mega-slide');
  let current = 0;

  function showSlide(index) {
    slides.forEach((s, i) => {
      s.classList.toggle('active', i === index);
    });
  }

  document.getElementById('megaNext').addEventListener('click', () => {
    current = (current + 1) % slides.length;
    showSlide(current);
  });

  document.getElementById('megaPrev').addEventListener('click', () => {
    current = (current - 1 + slides.length) % slides.length;
    showSlide(current);
  });

  setInterval(() => {
    current = (current + 1) % slides.length;
    showSlide(current);
  }, 5000);

});
</script>
<style>
.mega-slide {
  position: absolute;
  inset: 0;
  opacity: 0;
  pointer-events: none;
  transition: opacity 0.8s ease;
}

.mega-slide.active {
  opacity: 1;
  pointer-events: auto;
}

/* Diagonal stripes */
.stripe {
  position: absolute;
  top: 0;
  bottom: 0;
  width: 200px;
  transform: skewX(-20deg);
}

.stripe1 {
  left: 40%;
  background: linear-gradient(to bottom, #ff5f6d, #ffc371);
}

.stripe2 {
  left: 48%;
  background: linear-gradient(to bottom, #ff9a44, #ff3d77);
}

.stripe3 {
  left: 56%;
  background: linear-gradient(to bottom, #ffc371, #ff5f6d);
}

/* Badge shadow */
.mega-slide .rounded-full {
  box-shadow: 0 10px 30px rgba(0,0,0,0.3);
}
</style>
