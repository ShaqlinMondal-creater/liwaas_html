
<section id="featured-products" class="py-4 overflow-hidden">
  <h2 class="text-3xl font-bold text-center text-white-800 mb-4 px-4">Trending Products</h2>

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
    const authToken = localStorage.getItem('auth_token');

    prevBtn.addEventListener('click', () => slider.scrollBy({ left: -300, behavior: 'smooth' }));
    nextBtn.addEventListener('click', () => slider.scrollBy({ left: 300, behavior: 'smooth' }));

    fetch('<?= $baseUrl ?>/api/sections/getsections-products', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Authorization': `Bearer ${authToken}`
      },
      body: JSON.stringify({
        section_name: "Trending",
        limit: 12,
        offset: 0,
        status: true
      })
    })
    .then(res => res.json())
    .then(response => {
      if (response.success && Array.isArray(response.data)) {
        slider.innerHTML = '';

        response.data.forEach(item => {
          const product = item.product;
          const variation = product.variation || {};
          const imageUrl = variation.images?.[0]?.upload_url || 'https://via.placeholder.com/300x400?text=No+Image';

          const card = document.createElement('div');
          card.className = 'min-w-[300px] max-w-[300px] flex-shrink-0 group featured-card cursor-pointer';

          card.innerHTML = `
            <div class="relative overflow-hidden rounded-xl shadow hover:shadow-lg transition h-[400px] bg-gray-100">
              <img src="${imageUrl}" 
                  alt="${product.name}" 
                  class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"/>
              <div class="absolute inset-0 bg-black/25 opacity-0 group-hover:opacity-100 transition-opacity"></div>
            </div>

            <h3 class="mt-4 text-lg font-medium text-slate-900 line-clamp-2">${product.name}</h3>

            <div class="flex justify-between items-center mt-2">
              <span class="text-xl font-semibold text-slate-900">₹${variation.sell_price ?? 'N/A'}</span>

              <div class="flex space-x-2">
                <button class="wishlist-btn w-9 h-9 border border-slate-300 rounded-full flex items-center justify-center text-slate-600 hover:bg-slate-200 transition">
                  <i data-lucide="heart" class="w-5 h-5"></i>
                </button>

                <button class="cart-btn relative w-9 h-9 rounded-full bg-slate-900 text-white flex items-center justify-center hover:bg-yellow-500 transition">
                  <i data-lucide="shopping-cart" class="w-5 h-5"></i>
                </button>
              </div>
            </div>
          `;
          
          // Card click → navigate to product detail
          card.addEventListener('click', (e) => {
            if (e.target.closest('button')) return; // Skip if a button (cart or wish) is clicked
            window.location.href = `pages/product-detail.php?id=${variation.uid}`;
          });

          // Cart button click
          card.querySelector('.cart-btn').addEventListener('click', () => {
            const price = parseFloat(variation.sell_price || 0);
            
            Swal.fire({
              title: 'Add to Cart',
              html: `
                <div class="p-1 text-left w-[300px] mx-auto">
                  <img src="${imageUrl}" alt="${product.name}" class="w-[300px] h-[250px] object-cover transition-transform duration-700 group-hover:scale-110"/>
                  <p class="mt-4 text-lg font-medium text-slate-900 text-center">${product.name}</p>
                  <p class="text-xl text-gray-600 text-center">Price: ₹${price.toFixed(2)}</p>
                  <div class="flex items-center justify-center mt-2 space-x-2">
                    <button id="qty-decrease" class="px-2 py-1 bg-gray-200 rounded text-xl">−</button>
                    <input type="text" id="qty-input" value="1" min="1" class="w-12 text-center border rounded" readonly />
                    <button id="qty-increase" class="px-2 py-1 bg-gray-200 rounded text-xl">+</button>
                  </div>
                  <div id="total-price" class="mt-3 text-center font-medium text-slate-700">Total: ₹${price.toFixed(2)}</div>
                </div>
              `,
              customClass: {
                popup: 'cart_popup',
                confirmButton: 'swal-add-btn',
                cancelButton: 'swal-cancel-btn'
              },
              showCancelButton: true,
              confirmButtonText: 'Add to Cart',
              cancelButtonText: 'Cancel',
              reverseButtons: true,
              didOpen: () => {
                const qtyInput = Swal.getPopup().querySelector('#qty-input');
                const incBtn = Swal.getPopup().querySelector('#qty-increase');
                const decBtn = Swal.getPopup().querySelector('#qty-decrease');
                const totalPrice = Swal.getPopup().querySelector('#total-price');

                const formatPrice = (num) => {
                  return `₹${num.toFixed(2)}`;
                };

                const updatePrice = () => {
                  const qty = Math.max(1, parseInt(qtyInput.value) || 1);
                  const total = qty * price;
                  totalPrice.textContent = `Total: ${formatPrice(total)}`;
                };


                incBtn.addEventListener('click', () => {
                  qtyInput.value = parseInt(qtyInput.value || '1') + 1;
                  updatePrice();
                });

                decBtn.addEventListener('click', () => {
                  qtyInput.value = Math.max(1, parseInt(qtyInput.value || '1') - 1);
                  updatePrice();
                });

                qtyInput.addEventListener('input', updatePrice);
              }
            }).then(result => {
              if (result.isConfirmed) {
                const qty = parseInt(Swal.getPopup().querySelector('#qty-input')?.value || '1');

                fetch('<?= $baseUrl ?>/api/cart/create-cart', {
                  method: 'POST',
                  headers: {
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${authToken}`
                  },
                  body: JSON.stringify({
                    products_id: product.id,
                    aid: variation.aid,
                    uid: variation.uid,
                    quantity: qty
                  })
                })
                .then(res => res.json())
                .then(resp => {
                  Swal.fire({
                    icon: resp.success ? 'success' : 'error',
                    title: resp.success ? 'Added to Cart' : 'Failed',
                    text: resp.message,
                    timer: 1000,
                  });
                })
                .catch(() => {
                  Swal.fire('Error', 'Something went wrong while adding to cart.', 'error');
                });
              }
            });
          });

          // Append card first
          slider.appendChild(card);
        });

        // AFTER all cards are rendered, THEN call lucide & add events
        lucide.createIcons();

        // Now safely attach wishlist & cart handlers
        document.querySelectorAll('.wishlist-btn').forEach(btn => {
          btn.addEventListener('click', (e) => {
            e.stopPropagation();
            const card = e.target.closest('.featured-card');
            const index = [...slider.children].indexOf(card);
            const data = response.data[index];
            const product = data.product;
            const variation = product.variation || {};

            fetch('<?= $baseUrl ?>/api/customer/wishlist/create', {
              method: 'POST',
              headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${authToken}`
              },
              body: JSON.stringify({
                products_id: product.id,
                aid: variation.aid,
                uid: variation.uid
              })
            })
            .then(res => res.json())
            .then(resp => {
              const icon = btn.querySelector('svg, i');
              if (icon) icon.classList.add('text-white-700', 'fill-red-500');
              btn.classList.add('wishlist-flash');
              setTimeout(() => btn.classList.remove('wishlist-flash'), 500);

              // Show flash message regardless of success
              if (resp.success) {
                showFlashMessage("Item added to Wishlist ❤");
              } else if (resp.message?.includes('already')) {
                showFlashMessage("Already in Wishlist ❤️");
              } else {
                showFlashMessage("Something went wrong ❌");
              }
            })
            .catch(err => {
              console.error('Wishlist error:', err);
            });
          });
        });

      } else {
        slider.innerHTML = `<div class="text-center w-full py-10 text-gray-500">No trending products found.</div>`;
      }
    })
    .catch(error => {
      console.error('Error loading trending products:', error);
      slider.innerHTML = `<div class="text-center w-full py-10 text-red-500">Failed to load products.</div>`;
    });
  });

  function showFlashMessage(message) {
    let toast = document.getElementById('flash-toast');

    if (!toast) {
      toast = document.createElement('div');
      toast.id = 'flash-toast';
      document.body.appendChild(toast);
    }

    toast.textContent = message;
    toast.classList.add('show');

    setTimeout(() => {
      toast.classList.remove('show');
    }, 2000);
  }

</script>

