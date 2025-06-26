
<section id="featured-products" class="py-4 overflow-hidden">
  <!-- <h2 class="text-3xl font-bold text-gray-800 mb-4 px-4">Featured Products</h2> -->

  <div class="relative mt-6 mb-6">
    <!-- arrows overlay -->
    <button id="featPrev" class="absolute left-4 top-1/2 -translate-y-1/2 z-10 w-12 h-12 rounded-full border border-slate-300 flex items-center justify-center text-slate-600 bg-white/70 backdrop-blur hover:bg-slate-900 hover:text-white transition">
      <i data-lucide="arrow-left" class="w-6 h-6"></i>
    </button>
    <button id="featNext" class="absolute right-4 top-1/2 -translate-y-1/2 z-10 w-12 h-12 rounded-full border border-slate-300 flex items-center justify-center text-slate-600 bg-white/70 backdrop-blur hover:bg-slate-900 hover:text-white transition">
      <i data-lucide="arrow-right" class="w-6 h-6"></i>
    </button>

    <div id="featuredSlider" class="featuredSlider pl-10 pr-10 flex space-x-6 overflow-x-auto overflow-y-hidden scroll-smooth">
      <!-- skeleton placeholders -->
      <div class="skeleton-card">
        <div class="skeleton-img"></div>
        <div class="skeleton-text"></div>
        <div class="skeleton-text" style="width: 50%;"></div>
      </div>
      <div class="skeleton-card">
        <div class="skeleton-img"></div>
        <div class="skeleton-text"></div>
        <div class="skeleton-text" style="width: 50%;"></div>
      </div>
      <div class="skeleton-card">
        <div class="skeleton-img"></div>
        <div class="skeleton-text"></div>
        <div class="skeleton-text" style="width: 50%;"></div>
      </div>
      <div class="skeleton-card">
        <div class="skeleton-img"></div>
        <div class="skeleton-text"></div>
        <div class="skeleton-text" style="width: 50%;"></div>
      </div>
      <div class="skeleton-card">
        <div class="skeleton-img"></div>
        <div class="skeleton-text"></div>
        <div class="skeleton-text" style="width: 50%;"></div>
      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    lucide.createIcons();

    const slider = document.getElementById('featuredSlider');
    const prevBtn = document.getElementById('featPrev');
    const nextBtn = document.getElementById('featNext');

    prevBtn.addEventListener('click', () => slider.scrollBy({ left: -300, behavior: 'smooth' }));
    nextBtn.addEventListener('click', () => slider.scrollBy({ left: 300, behavior: 'smooth' }));

    fetch('json/featuredProducts.json')
      .then(res => res.json())
      .then(list => {
        // Clear skeletons
        slider.innerHTML = '';

        // Add real products
        list.forEach(p => {
          slider.innerHTML += `
            <div class="min-w-[280px] sm:min-w-[300px] group featured-card">
              <div class="relative overflow-hidden rounded-xl shadow hover:shadow-lg transition">
                <img src="${p.image_url}" alt="${p.name}" class="w-full h-[400px] object-cover transition-transform duration-700 group-hover:scale-110"/>
                <div class="absolute inset-0 bg-black/25 opacity-0 group-hover:opacity-100 transition-opacity"></div>
              </div>
              <h3 class="mt-4 text-lg font-medium text-slate-900">${p.name}</h3>
              <div class="flex justify-between items-center mt-2">
                <span class="text-xl font-semibold text-slate-900">₹${p.price}</span>
                <div class="flex space-x-2">
                  <button class="w-9 h-9 border border-slate-300 rounded-full flex items-center justify-center text-slate-600 hover:bg-slate-200 transition">
                    <i data-lucide="heart" class="w-5 h-5"></i>
                  </button>
                  <button class="w-9 h-9 rounded-full bg-slate-900 text-white flex items-center justify-center hover:bg-yellow-500 transition">
                    <i data-lucide="shopping-cart" class="w-5 h-5"></i>
                  </button>
                </div>
              </div>
            </div>
          `;
        });

        lucide.createIcons();
      })
      .catch(console.error);
  });
</script>
