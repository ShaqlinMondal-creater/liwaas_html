<section class="w-full relative overflow-hidden">
  <div class="swiper mySwiper h-[550px]">
    <div class="swiper-wrapper" id="sliderWrapper"></div>
    <div class="swiper-pagination z-20"></div>
  </div>
</section>

<script>
  const slider_token = localStorage.getItem("auth_token");

  // Fetch slider data from backend
  fetch(`<?= $baseUrl ?>/api/extras/getall`, {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      "Authorization": `Bearer ${slider_token}`
    },
    body: JSON.stringify({
      show_status: "1",
      purpose_name: "Slider"
    })
  })
    .then(res => res.json())
    .then(data => {
      if (!data.success || !Array.isArray(data.data)) {
        throw new Error("Invalid slider data");
      }

      // Sort by sort_number if available, otherwise keep order
      const slides = data.data
        .sort((a, b) => (a.sort_number ?? 0) - (b.sort_number ?? 0));

      const wrapper = document.getElementById('sliderWrapper');

      slides.forEach(({ file_path, purpose_name, file_name }) => {
        const slide = document.createElement('div');
        slide.className = 'swiper-slide relative';

        slide.innerHTML = `
          <img
            src="${file_path}"
            alt="${purpose_name || ''}"
            class="w-full h-full object-cover"
            loading="lazy"
          />
          <div class="slide-overlay"></div>
          <div
            class="absolute bottom-6 left-6 max-w-[80%] z-20 text-white"
          >
            
            <a
              href="pages/shop"
              class="inline-block bg-amber-400 hover:bg-amber-500 text-black font-semibold px-6 py-3 rounded-full transition"
              >Shop Now</a
            >
          </div>
        `;

        wrapper.appendChild(slide);
      });

      // <h2 class="text-3xl font-extrabold drop-shadow-lg mb-2">${purpose_name || ''}</h2>
      // <p class="text-sm drop-shadow-md mb-4">${file_name || ''}</p>

      // Initialize Swiper
      const swiper = new Swiper('.mySwiper', {
        effect: 'fade',
        fadeEffect: { crossFade: true },
        loop: true,
        speed: 1000,
        autoplay: {
          delay: 4500,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
          type: 'bullets',
          dynamicBullets: false,
        },
      });

      // Pause autoplay on hover
      const swiperEl = document.querySelector('.mySwiper');
      swiperEl.addEventListener('mouseenter', () => swiper.autoplay.stop());
      swiperEl.addEventListener('mouseleave', () => swiper.autoplay.start());
    })
    .catch(err => {
      console.error('Failed to load slider from API:', err);
    });
</script>
