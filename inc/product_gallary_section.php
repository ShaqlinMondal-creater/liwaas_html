
<section id="product-showcase" class="py-6 bg-white">
  <h2 class="text-3xl font-bold text-gray-800 mb-4 px-4">Product Gallary</h2>
  <div id="product-grid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 p-4">
    <!-- Dynamic Product Cards will be injected here -->
  </div>
</section>

<script>
  // const products = [
  //   { "name": "Summer Dress", "collection": "Summer Collection", "price": "129", "color": "lime-300", "img": "assets/uploads/t-shirts/t-shirt1.jpg" },
  //   { "name": "Casual Shirt", "collection": "Urban Collection", "price": "89", "color": "red-700", "img": "assets/uploads/t-shirts/t-shirt2.jpg" },
  //   { "name": "Denim Jacket", "collection": "Winter Collection", "price": "149", "color": "blue-600", "img": "assets/uploads/t-shirts/t-shirt3.jpg" },
  //   { "name": "Leather Shoes", "collection": "Classic Collection", "price": "199", "color": "amber-600", "img": "assets/uploads/t-shirts/t-shirt4.jpg" },
  //   { "name": "Sport Shorts", "collection": "Sportswear", "price": "59", "color": "green-500", "img": "assets/uploads/t-shirts/t-shirt11.jpg" },
  //   { "name": "Elegant Watch", "collection": "Luxury Accessories", "price": "249", "color": "gray-700", "img": "assets/uploads/t-shirts/t-shirt6.jpg" },
  //   { "name": "Sunglasses", "collection": "Summer Collection", "price": "79", "color": "indigo-700", "img": "assets/uploads/t-shirts/t-shirt7.jpg" },
  //   { "name": "Backpack", "collection": "Travel Gear", "price": "99", "color": "purple-600", "img": "assets/uploads/t-shirts/t-shirt8.jpg" },
  //   { "name": "Hoodie", "collection": "Casual Wear", "price": "109", "color": "pink-500", "img": "assets/uploads/t-shirts/t-shirt9.jpg" },
  //   { "name": "Formal Suit", "collection": "Business Collection", "price": "299", "color": "white", "img": "assets/uploads/t-shirts/t-shirt10.jpg" }
  // ];

  // const bgColorClasses = {
  //   "lime-300": "bg-lime-300",
  //   "red-700": "bg-red-700",
  //   "blue-600": "bg-blue-600",
  //   "amber-600": "bg-amber-600",
  //   "green-500": "bg-green-500",
  //   "gray-700": "bg-gray-700",
  //   "indigo-700": "bg-indigo-700",
  //   "purple-600": "bg-purple-600",
  //   "pink-500": "bg-pink-500",
  //   "black": "bg-black"
  // };

  // const textColorClasses = {
  //   "lime-300": "text-lime-300",
  //   "red-700": "text-red-700",
  //   "blue-600": "text-blue-600",
  //   "amber-600": "text-amber-600",
  //   "green-500": "text-green-500",
  //   "gray-700": "text-gray-700",
  //   "indigo-700": "text-indigo-700",
  //   "purple-600": "text-purple-600",
  //   "pink-500": "text-pink-500",
  //   "white": "text-white"
  // };

  // const grid = document.getElementById('product-grid');

  // products.forEach((product, index) => {
  //   grid.innerHTML += `
  //     <div class="relative overflow-hidden group">
  //       <div class="bg-black rounded-3xl overflow-hidden">
  //         <div class="${bgColorClasses[product.color]} rounded-3xl overflow-hidden transform transition-transform duration-300 group-hover:scale-[0.98]">
  //           <div class="relative h-[400px] overflow-hidden rounded-3xl">

  //             <!-- Skeleton Loader -->
  //             <div class="skeleton absolute inset-0 bg-gray-300 animate-pulse rounded-3xl"></div>

  //             <!-- Product Image -->
  //             <img src="${product.img}" alt="${product.name}" loading="lazy" 
  //               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-0" 
  //               onload="this.previousElementSibling.style.display='none'; this.classList.remove('opacity-0')"/>

  //             <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-4">
  //               <h2 class="text-lg text-white font-bold mb-1">${product.name}</h2>
  //               <p class="text-sm text-white opacity-90">${product.collection}</p>
  //             </div>

  //             <div id="slide${index}" class="absolute inset-0 bg-black/90 flex items-center justify-center text-white transform translate-x-full transition-transform duration-500">
  //               <div class="text-center">
  //                 <p class="text-xl font-bold mb-2">${product.collection}</p>
  //                 <p class="text-3xl font-bold ${textColorClasses[product.color]} mb-4">$${product.price}</p>
  //                 <button class="${bgColorClasses[product.color]} text-white px-4 py-1 rounded-full font-bold hover:bg-opacity-80">Buy Now</button>
  //               </div>
  //             </div>

  //             <button onclick="document.getElementById('slide${index}').classList.toggle('translate-x-full')" 
  //               class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-white p-1 rounded-full shadow">
  //               <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  //                 <path d="m15 18-6-6 6-6"/>
  //               </svg>
  //             </button>

  //           </div>
  //         </div>
  //       </div>
  //     </div>
  //   `;
  // });
</script>

<script>
document.addEventListener('DOMContentLoaded', async () => {

  const grid = document.getElementById('product-grid');
  const authToken = localStorage.getItem('auth_token');

  let COLOR_MAP = {};

  async function loadColorMap() {
    try {
      const res = await fetch("../inc/color.json");
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
      const variation = product.variation || {};
      const images    = variation.images || [];

      const image1 = images[0]?.upload_url || 'https://via.placeholder.com/400x500?text=No+Image';
      const image2 = images[1]?.upload_url || image1;

      const colorName = (variation.color || '').toLowerCase();
      const rawColorHex = COLOR_MAP[colorName] || '#111827';

      /* ---------- CONTRAST SAFE BUTTON COLOR ---------- */
      function isLightColor(hex) {
        const c = hex.replace('#', '');
        const r = parseInt(c.substr(0, 2), 16);
        const g = parseInt(c.substr(2, 2), 16);
        const b = parseInt(c.substr(4, 2), 16);

        // perceived brightness
        const brightness = (r * 299 + g * 587 + b * 114) / 1000;
        return brightness > 180; // tweakable threshold
      }

      const isLight = isLightColor(rawColorHex);

      const buttonBgColor   = rawColorHex;
      const buttonTextColor = isLight ? '#111111' : '#ffffff';
      const priceColor      = rawColorHex;


      const sellPrice = parseFloat(variation.sell_price || 0);
      const regularPrice = parseFloat(variation.regular_price || sellPrice);

      const card = document.createElement('div');
      card.className = 'relative overflow-hidden group';

      card.innerHTML = `
        <div class="bg-black rounded-xl overflow-hidden">
          <div class="rounded-2xl overflow-hidden transform transition-transform duration-300 group-hover:scale-[0.98]">

            <div class="relative h-[400px] overflow-hidden rounded-3xl">

              <!-- Skeleton -->
              <div class="skeleton absolute inset-0 bg-gray-300 animate-pulse rounded-3xl"></div>

              <!-- IMAGE 1 -->
              <img src="${image1}"
                   alt="${product.name}"
                   class="img-main absolute inset-0 w-full h-full object-cover transition-opacity duration-500 opacity-100"/>

              <!-- IMAGE 2 (HOVER) -->
              <img src="${image2}"
                   alt="${product.name}"
                   class="img-hover absolute inset-0 w-full h-full object-cover transition-opacity duration-500 opacity-0"/>

              <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-4">
                <h2 class="text-lg text-white font-bold mb-1">${product.name}</h2>
                <p class="text-sm text-white opacity-90">${product.category?.name ?? ''}</p>
              </div>

              <!-- SLIDE PANEL -->
              <div id="slide${index}"
                   class="absolute inset-0 bg-black/90 flex items-center justify-center text-white transform translate-x-full transition-transform duration-500">

                <div class="text-center">
                  <p class="text-xl font-bold mb-2">${product.category?.name ?? ''}</p>

                  <p class="text-3xl font-bold mb-4"
                    style="color:${priceColor}">
                    ₹${sellPrice.toFixed(2)}
                  </p>

                  <button class="buy-now-btn px-4 py-1 rounded-full font-bold hover:bg-opacity-80 transition"
                          style="background:${buttonBgColor}; color:${buttonTextColor}"
                          data-uid="${variation.uid}">
                    Buy Now
                  </button>

                </div>
              </div>

              <!-- TOGGLE BUTTON -->
              <button data-index="${index}"
                class="toggle-btn absolute top-1/2 right-2 transform -translate-y-1/2 bg-white p-1 rounded-full shadow">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-5 h-5"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     stroke-linecap="round"
                     stroke-linejoin="round">
                  <path d="m15 18-6-6 6-6"/>
                </svg>
              </button>

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

    /* ========== Slide Toggle + Color Bind ========== */
    document.querySelectorAll('.toggle-btn').forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.stopPropagation();
        const index = btn.dataset.index;
        const slide = document.getElementById(`slide${index}`);
        slide.classList.toggle('translate-x-full');
      });
    });

    /* ========== Buy Now Redirect ========== */
    document.querySelectorAll('.buy-now-btn').forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.stopPropagation();
        const uid = btn.dataset.uid;
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
