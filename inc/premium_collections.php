<section id="brand-collections" class="py-8 bg-gray-50">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold mb-4">Premium Collections</h2>

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