
<section id="product-showcase" class="py-6 bg-white">
  <h2 class="text-3xl font-bold text-gray-800 mb-4 px-4">Collections Gallary</h2>
  <div id="product-grid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 p-4">
    <!-- Dynamic Product Cards will be injected here -->
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', async () => {

  const grid = document.getElementById('product-grid');
  const authToken = localStorage.getItem('auth_token');

  let COLOR_MAP = {};

  async function loadColorMap() {
    try {
      const res = await fetch("../stat-json/color.json");
      const json = await res.json();
      json.colors.forEach(c => {
        COLOR_MAP[c.name.toLowerCase()] = c.code;
      });
    } catch (e) {
      console.error("Failed to load color map:", e);
    }
  }

  await loadColorMap();

  fetch('<?= $baseUrl ?>/api/sections/getsections-products', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'Authorization': `Bearer ${authToken}`
    },
    body: JSON.stringify({
      section_name: "New Arrival",
      limit: 12,
      offset: 0,
      status: true
    })
  })
  .then(res => res.json())
  .then(response => {

    if (!response.success || !Array.isArray(response.data)) {
      grid.innerHTML = `<div class="text-center w-full py-10 text-gray-500">No products found.</div>`;
      return;
    }

    grid.innerHTML = '';

    response.data.forEach((item, index) => {

      const product   = item.product;
      const variation = product.variations?.[0] || {};
      const images    = variation.images || [];

      const image1 = images[0]?.upload_url || 'https://via.placeholder.com/400x500?text=No+Image';
      const image2 = images[1]?.upload_url || image1;

      const colorName = (variation.color || '').toLowerCase();
      const colorHex  = COLOR_MAP[colorName] || '#111827';

      const sellPrice = parseFloat(variation.sell_price || 0);
      const regularPrice = parseFloat(variation.regular_price || sellPrice);

      const card = document.createElement('div');
      card.className = 'relative overflow-hidden group';

      card.innerHTML = `
        <div class="bg-black rounded-3xl overflow-hidden">
          <div class="rounded-3xl overflow-hidden transform transition-transform duration-300 group-hover:scale-[0.98]">

            <div class="relative h-[400px] overflow-hidden rounded-3xl">

              <!-- Skeleton -->
              <div class="skeleton-loader absolute inset-0 bg-gray-300 animate-pulse rounded-3xl"></div>

              <!-- IMAGE 1 -->
              <img src="${image1}" alt="${product.name}"
                class="img-main absolute inset-0 w-full h-full object-cover transition-opacity duration-500 opacity-0"
                onload="
                  const skel = this.parentElement.querySelector('.skeleton-loader');
                  if (skel) skel.style.display='none';
                  this.classList.remove('opacity-0');
                " />

              <!-- IMAGE 2 (HOVER) -->
              <img src="${image2}" alt="${product.name}"
                class="img-hover absolute inset-0 w-full h-full object-cover transition-opacity duration-500 opacity-0"/>

              <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-4">
                <h2 class="text-lg text-white font-bold mb-1">${product.name}</h2>
                <p class="text-sm text-white opacity-90">${product.category?.name ?? ''}</p>
              </div>

              <!-- SLIDE PANEL -->
              <div id="slide${index}"
                class="absolute inset-0 bg-black/90 flex items-center justify-center transform translate-x-full transition-all duration-500 ease-[cubic-bezier(0.4,0,0.2,1)] pointer-events-none">

                <div class="text-center">
                  <p class="text-xl font-bold mb-2 text-white">
                    ${product.name}
                  </p>

                  <p class="text-3xl font-bold mb-4 text-white">
                    ₹${sellPrice.toFixed(2)}
                  </p>
                  <button class="buy-now-btn bg-black text-white px-4 py-1 rounded-full font-bold hover:bg-gray-900 transition"
                          data-uid="${variation.uid || ''}">
                    Buy Now
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      `;

      grid.appendChild(card);
    });

    /* ========== Hover Image Swap ========== */
    document.querySelectorAll('#product-grid .group').forEach(card => {
      const imgMain  = card.querySelector('.img-main');
      const imgHover = card.querySelector('.img-hover');

      card.addEventListener('mouseenter', () => {
        imgMain.classList.add('opacity-0');
        imgHover.classList.remove('opacity-0');
      });

      card.addEventListener('mouseleave', () => {
        imgMain.classList.remove('opacity-0');
        imgHover.classList.add('opacity-0');
      });
    });

    /* ========== Auto Slide After 2s Hover (Stable Version) ========== */
    document.querySelectorAll('#product-grid .group').forEach((card, index) => {

      const slide = document.getElementById(`slide${index}`);
      let hoverTimer;
      let isOpen = false;

      card.addEventListener('mouseenter', () => {
        hoverTimer = setTimeout(() => {
          slide.classList.remove('translate-x-full');
          isOpen = true;
        }, 1000);
      });

      card.addEventListener('mouseleave', () => {
        clearTimeout(hoverTimer);

        if (isOpen) {
          slide.classList.add('translate-x-full');
          isOpen = false;
        }
      });

    });



    /* ========== Buy Now Redirect ========== */
    document.querySelectorAll('.buy-now-btn').forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.stopPropagation();
        const uid = btn.dataset.uid;
        if (!uid) return;
        window.location.href = `pages/product-detail.php?id=${uid}`;
      });
    });

  })
  .catch(err => {
    console.error("Gallery API error:", err);
    grid.innerHTML = `<div class="text-center w-full py-10 text-red-500">Failed to load gallery.</div>`;
  });

});
</script>

