
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Liwaas Carfted for You </title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="assets/brand/fav_icon.png" type="image/svg+xml">
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <!-- Shadeerah font (remember: the family name inside CSS is *Shadeerah Demo*) -->
    <link href="https://fonts.cdnfonts.com/css/shadeerah-demo" rel="stylesheet" />
    
    <!-- Icon -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://unpkg.com/@lucide/web@latest"></script>

    <!-- Confetti -->
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.7.0/dist/confetti.browser.min.js"></script>

    <link rel="stylesheet" href="style/style.css" />

    <style>
        body{font-family:'Shadeerah Demo',sans-serif!important;}
    </style>
</head>

<body class="bg-gray-100">
    <!-- Custom cursor (desktop only) -->
    <!-- <div id="bubbleCursor" class="hidden md:block"></div> -->

    <!-- 📱 Mobile sticky footer nav -->
    <div class="fixed bottom-0 left-0 right-0 z-40 bg-white border-t shadow md:hidden mobile-action">
        <div class="flex justify-around items-center py-2 text-gray-600">
            <a href="pages/shop" class="flex flex-col items-center text-sm hover:text-indigo-600">
                <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M3 9l1 11a2 2 0 002 2h12a2 2 0 002-2l1-11" />
                    <path d="M16 3a4 4 0 00-8 0" />
                    <path d="M3 9h18" />
                </svg><span class="text-xs">Shop</span>
            </a>
            <a href="pages/cart" class="flex flex-col items-center text-sm hover:text-indigo-600">
                <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M3 3h2l.4 2M7 13h10l4-8H5.4" />
                    <circle cx="9" cy="19" r="2" />
                    <circle cx="17" cy="19" r="2" />
                </svg><span class="text-xs">Cart</span>
            </a>
            <a href="#" class="flex flex-col items-center text-sm hover:text-indigo-600">
                <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M20 12l-8 8-8-8 8-8z" />
                    <path d="M12 16v-4" />
                    <path d="M12 8h.01" />
                </svg><span class="text-xs">Offers</span>
            </a>
            <a href="#" class="flex flex-col items-center text-sm hover:text-red-500">
                <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M17 16l4-4m0 0l-4-4m4 4H7" />
                    <path d="M7 16v1a2 2 0 002 2h4" />
                    <path d="M7 8V7a2 2 0 012-2h4" />
                </svg><span class="text-xs">Logout</span>
            </a>
        </div>
    </div>

    <!-- ⛳️ Main navbar -->
    <!-- ╔════════════════════  HEADER  ════════════════════╗ -->
    <nav class="relative z-50 sticky top-0 bg-white/80 backdrop-blur px-4 py-3
              shadow-md ring-1 ring-gray-200">
        <div class="max-w-7xl mx-auto flex items-center justify-between">

            <!-- ◀︎ Logo -->
            <a href="" class="flex items-center space-x-2">
                <img src="assets/brand/liwaas_logo_white_png.png" alt="Logo" class="h-10 md:h-14">
                <!-- <span class="hidden sm:inline text-xl font-bold text-indigo-600">Brand</span> -->
            </a>

            <!-- ◀︎ Desktop NAV -->
            <ul class="hidden md:flex items-center space-x-8 font-semibold tracking-wide">
                <li><a href="" class="nav-link">Home</a></li>
                <li><a href="pages/shop" class="nav-link">Shop</a></li>
                <li><a href="pages/about-us" class="nav-link">About</a></li>
                <li><a href="#" class="nav-link">Contact</a></li>
            </ul>

            <!-- ◀︎ Mobile search (takes rest‑of‑row) -->
            <div class="flex-1 md:hidden px-3">
                <input type="search" placeholder="Search"
                    class="w-full border px-3 py-2 rounded-lg text-sm focus:outline-none">
            </div>

            <!-- ◀︎ Desktop utilities -->
            <div class="hidden md:flex items-center space-x-6">

                <!-- Search -->
                <div class="relative">
                    <input type="search" placeholder="Search"
                        class="w-60 h-10 pl-4 pr-10 rounded-lg border focus:outline-none">
                    <svg class="absolute right-3 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1116.65 16.65z" />
                    </svg>
                </div>

                <!-- Bell -->
                <div class="relative">
                    <button id="bellBtn" aria-label="Notifications">
                        <svg class="h-6 w-6 text-gray-400 hover:text-indigo-600 transition" fill="none"
                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M15 17h5l-1.4-1.4A2 2 0 0118 14.2V11
                      c0-3.1-1.6-5.7-4.5-6.3V4a1.5 1.5 0 00-3 0v.7
                      C7.6 5.4 6 8 6 11v3.2c0 .5-.2 1.1-.6 1.5L4 17h5m6 0v1a3 3 0 11-6 0v-1" />
                        </svg>
                        <span id="bellPing" class="absolute -top-0.5 -right-0.5 h-2 w-2 rounded-full bg-red-500
                        animate-ping-slow"></span>
                    </button>

                    <!-- Bell dropdown -->
                    <div id="bellMenu" class="dropdown hidden w-64 right-0 mt-3">
                        <div class="px-4 py-3 font-semibold border-b">Notifications</div>
                        <ul class="max-h-60 overflow-auto text-sm">
                            <li class="dropdown-item">Order #1234 is out for delivery.</li>
                            <li class="dropdown-item">Price drop on “Stylish Jacket”.</li>
                            <li class="dropdown-item">You earned +50 reward points!</li>
                        </ul>
                        <a href="#" class="block text-center text-indigo-600 py-2 hover:bg-gray-50
                              rounded-b-xl font-medium">View all</a>
                    </div>
                </div>

                <!-- Avatar -->
                <div class="relative">
                    <img id="avatarBtn" src="https://i.pravatar.cc/40?img=32" alt="User Avatar"
                        class="h-9 w-9 rounded-full cursor-pointer ring-2 ring-white">
                    <div id="avatarMenu" class="dropdown avatar-menu hidden w-44 right-0 mt-4">
                        <a href="sign-in" class="dropdown-link">Login</a>
                        <a href="#" class="dropdown-link">Logout</a>
                        <a href="pages/cart" class="dropdown-link">Cart</a>
                        <a href="pages/profile" class="dropdown-link">Profile</a>
                        <!-- <a href="/account" class="dropdown-link">Account</a> -->
                    </div>
                </div>
            </div>

            <!-- ◀︎ Hamburger -->
            <button id="hamburger" class="md:hidden flex flex-col justify-center w-8 h-8 relative">
                <span class="bar top"></span>
                <span class="bar mid"></span>
                <span class="bar bot"></span>
            </button>
        </div>

        <!-- ◀︎ Mobile drawer -->
        <div id="mobileMenu" class="mobile-menu md:hidden mt-2 px-4 space-y-2">
            <a href="" class="mobile-link">Home</a>
            <a href="pages/shop" class="mobile-link">Shop</a>
            <a href="#" class="mobile-link">About</a>
            <a href="#" class="mobile-link">Contact</a>
        </div>
    </nav>
    <!-- ╚═══════════════════════════════════════════════════════╝ -->

      <!-- ----------  Nav SCRIPT  ---------- -->
  <script>
    (() => {
      /* helpers */
      const $ = id => document.getElementById(id);

      const hamburger = $('hamburger');
      const mobileMenu = $('mobileMenu');
      const avatarBtn = $('avatarBtn');
      const avatarMenu = $('avatarMenu');
      const bellBtn = $('bellBtn');
      const bellMenu = $('bellMenu');
      const bellPing = $('bellPing');

      /* toggle helpers */
      const toggle = (btn, menu) => btn.addEventListener('click', e => {
        e.stopPropagation();                          // keep clicks inside
        menu.classList.toggle('hidden');
      });

      toggle(avatarBtn, avatarMenu);
      toggle(bellBtn, bellMenu);

      /* hamburger slide */
      hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('open');
        mobileMenu.classList.toggle('open');
      });

      /* clear ping after first open */
      bellBtn.addEventListener('click', () => bellPing?.remove(), { once: true });

      /* click‑outside to close */
      document.addEventListener('click', e => {
        if (!avatarMenu.contains(e.target) && !avatarBtn.contains(e.target))
          avatarMenu.classList.add('hidden');
        if (!bellMenu.contains(e.target) && !bellBtn.contains(e.target))
          bellMenu.classList.add('hidden');
      });

      /* reset on resize ≥ md */
      window.addEventListener('resize', () => {
        if (innerWidth >= 768) {
          mobileMenu.classList.remove('open');
          hamburger.classList.remove('open');
        }
      });
    })();
  </script>
  <!-- ---------- End Nav SCRIPT  ---------- -->

    <!-- 🔄 Slider -->
    <section id="home" class="relative">
      <div class="swiper mySwiper h-[65vh]">
        <div class="swiper-wrapper" id="sliderWrapper"></div>
        <div class="swiper-pagination !bottom-4"></div>
        <!-- arrows hidden on mobile -->
        <div class="swiper-button-next hidden md:flex"></div>
        <div class="swiper-button-prev hidden md:flex"></div>
      </div>
    </section>

  <!-- 🖼 Slider data -->
   <script>
    // Fetch slider data & build slides
    fetch('json/slider.json')
      .then(r=>r.json())
      .then(slides=>{
        const wrap=document.getElementById('sliderWrapper');
        slides.filter(s=>s.is_Active).sort((a,b)=>a.sort_number-b.sort_number).forEach(s=>{
          const slide=document.createElement('div');
          slide.className='swiper-slide';
          slide.innerHTML=`
            <div class="relative w-full h-full">
              <img src="cloths/slides/${s.slider_image}" alt="${s.slider_title}" class="w-full h-full object-cover"/>
              <div class="absolute inset-0 bg-black/40"></div>
              <div class="absolute bottom-10 left-6 md:left-16 text-white space-y-4 max-w-[80%]">
                <h2 class="text-2xl md:text-4xl font-bold">${s.slider_title}</h2>
                <p class="hidden md:block text-sm md:text-lg">${s.slider_description}</p>
                <a href="/shop" class="inline-flex items-center bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-full">Shop Now</a>
              </div>
            </div>`;
          wrap.appendChild(slide);
        });
        new Swiper('.mySwiper',{
          loop:true,
          speed:1000,
          autoplay:{delay:4000,disableOnInteraction:false},
          effect:'fade',
          fadeEffect:{crossFade:true},
          pagination:{el:'.mySwiper .swiper-pagination',clickable:true},
          navigation:{nextEl:'.mySwiper .swiper-button-next',prevEl:'.mySwiper .swiper-button-prev'}
        });
      })
      .catch(console.error);
  </script>
  <!-- <script>
    fetch("json/slider.json")               // <-- check path / case
      .then(res=>res.json())
      .then(slides=>{
        const active = slides.filter(s=>s.is_Active)
                              .sort((a,b)=>a.sort_number-b.sort_number);
        const wrapper=document.getElementById("sliderWrapper");
        active.forEach(s=>{
          const el=document.createElement("div");
          el.className="swiper-slide";
          el.setAttribute("data-swiper-parallax","-100");
          el.innerHTML=`
            <div class="relative w-full h-[320px] sm:h-[400px] md:h-[500px] lg:h-[600px]">
              <img src="cloths/slides/${s.slider_image}" alt="${s.slider_title}" class="w-full h-full object-cover"/>
              <div class="absolute bottom-6 left-6 md:left-12 md:bottom-10 bg-black/50 p-4 rounded-lg text-white max-w-[80%]">
                <h2 class="text-lg md:text-2xl font-bold mb-1">${s.slider_title}</h2>
                <p class="text-sm md:text-base mb-3">${s.slider_description}</p>
                <a href="/shop" class="inline-block bg-yellow-400 hover:bg-yellow-500 text-black px-4 py-2 rounded-full text-sm font-semibold transition">Shop Now</a>
              </div>
            </div>`;
          wrapper.appendChild(el);
        });
        new Swiper(".mySwiper",{
          loop:true,speed:1000,
          autoplay:{delay:4000,disableOnInteraction:false},
          parallax:true,
          pagination:{el:".swiper-pagination",clickable:true,
            renderBullet:(i,c)=>`<span class="${c} w-5 h-1 bg-white opacity-50 rounded-full transition-all"></span>`
          },
          navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"}
        });
      })
      .catch(err=>console.error("Slider JSON load error:",err));
  </script> -->

  <!-- 🔖 Categories -->
<section id="category" class="w-full py-8 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div id="categoryGrid" class="grid grid-cols-4 md:grid-cols-8 gap-4 justify-items-center"></div>
    </div>
</section>
  <!-- 📂 Categories -->
  <script>
    fetch("json/category.json")
      .then(r=>r.json())
      .then(cats=>{
        cats.sort((a,b)=>a.sort_number-b.sort_number);
        const grid=document.getElementById("categoryGrid");
        cats.forEach(cat=>{
          const a=document.createElement("a");
          a.href=`/category/${cat.category_id}`;
          a.className="flex flex-col items-center space-y-2 group clip-wrapper";
          a.setAttribute("data-text",cat.category_name);          // ✅ correct attribute
          a.innerHTML=`
            <div class="w-20 h-20 bg-yellow-100 text-yellow-600 rounded-full flex items-center justify-center text-3xl shadow group-hover:scale-110 transition">
              ${cat.icon}
            </div>
            <span class="text-sm font-medium text-gray-700 group-hover:text-yellow-500 transition">${cat.category_name}</span>`;
          grid.appendChild(a);
        });
      })
      .catch(e=>console.error("Failed to load categories:",e));
  </script>

  <!-- Featured -->
<!-- ╔═══════════ Featured Products (Full-Width, No Pagination) ═══════════╗ -->
<!-- ★ FEATURED PRODUCTS – Horizontal Scroll Carousel ★ -->
    <section id="featured-products" class="py-16 bg-slate-50">
      <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center mb-8">
          <h2 class="text-3xl md:text-4xl font-serif font-bold text-slate-900">Featured Products</h2>
          <div class="flex space-x-2">
            <button id="featPrev" class="w-10 h-10 rounded-full border border-slate-300 flex items-center justify-center text-slate-600 hover:bg-slate-900 hover:text-white hover:border-slate-900 transition">
              <i data-lucide="arrow-left" class="w-5 h-5"></i>
            </button>
            <button id="featNext" class="w-10 h-10 rounded-full border border-slate-300 flex items-center justify-center text-slate-600 hover:bg-slate-900 hover:text-white hover:border-slate-900 transition">
              <i data-lucide="arrow-right" class="w-5 h-5"></i>
            </button>
          </div>
        </div>

        <div id="featuredSlider" class="flex space-x-6 overflow-x-auto pb-6 hide-scrollbar"></div>
      </div>
    </section>
 <script>
    const slider=document.getElementById('featuredSlider');
    const prevBtn=document.getElementById('featPrev');
    const nextBtn=document.getElementById('featNext');

    prevBtn.addEventListener('click',()=>slider.scrollBy({left:-320,behavior:'smooth'}));
    nextBtn.addEventListener('click',()=>slider.scrollBy({left:320,behavior:'smooth'}));

    fetch('Json/featuredProducts.json')
      .then(r=>r.json())
      .then(products=>{
        products.slice(0,15).forEach(p=>{
          slider.innerHTML+=`
          <div class=\"min-w-[260px] sm:min-w-[280px] lg:min-w-[300px] group\">
            <div class=\"relative overflow-hidden rounded-xl shadow-sm hover:shadow-lg transition\">
              <img src="${p.image_url}\" alt=\"${p.name}\" class=\"w-full h-[380px] object-cover transition-transform duration-700 group-hover:scale-110\"/>
              <div class=\"absolute inset-0 bg-black/25 opacity-0 group-hover:opacity-100 transition-opacity duration-300\"></div>
            </div>
            <h3 class=\"mt-4 text-lg font-medium text-slate-900\">${p.name}</h3>
            <div class=\"flex justify-between items-center mt-2\">
              <span class=\"text-xl font-semibold text-slate-900\">₹${p.price}</span>
              <div class=\"flex space-x-2\">
                <button class=\"w-9 h-9 border border-slate-300 rounded-full flex items-center justify-center text-slate-600 hover:bg-slate-200 transition\">
                  <i data-lucide=\"heart\" class=\"w-5 h-5\"></i>
                </button>
                <button class=\"w-9 h-9 rounded-full bg-slate-900 text-white flex items-center justify-center hover:bg-yellow-500 transition\">
                  <i data-lucide=\"shopping-cart\" class=\"w-5 h-5\"></i>
                </button>
              </div>
            </div>
          </div>`;
        });
        lucide.createIcons(); // refresh icons in newly added nodes
      })
      .catch(console.error);
  </script>
  <!-- Products -->

<section id="product-showcase" class="py-16 bg-white">
  <div id="product-grid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 p-4">
    <!-- Dynamic Product Cards will be injected here -->
  </div>
</section>

<script>
const products = [
  { "name": "Summer Dress", "collection": "Summer Collection", "price": "129", "color": "lime-300", "img": "assets/uploads/t-shirts/t-shirt1.jpg" },
  { "name": "Casual Shirt", "collection": "Urban Collection", "price": "89", "color": "red-700", "img": "assets/uploads/t-shirts/t-shirt2.jpg" },
  { "name": "Denim Jacket", "collection": "Winter Collection", "price": "149", "color": "blue-600", "img": "assets/uploads/t-shirts/t-shirt3.jpg" },
  { "name": "Leather Shoes", "collection": "Classic Collection", "price": "199", "color": "amber-600", "img": "assets/uploads/t-shirts/t-shirt4.jpg" },
  { "name": "Sport Shorts", "collection": "Sportswear", "price": "59", "color": "green-500", "img": "assets/uploads/t-shirts/t-shirt11.jpg" },
  { "name": "Elegant Watch", "collection": "Luxury Accessories", "price": "249", "color": "gray-700", "img": "assets/uploads/t-shirts/t-shirt6.jpg" },
  { "name": "Sunglasses", "collection": "Summer Collection", "price": "79", "color": "indigo-700", "img": "assets/uploads/t-shirts/t-shirt7.jpg" },
  { "name": "Backpack", "collection": "Travel Gear", "price": "99", "color": "purple-600", "img": "assets/uploads/t-shirts/t-shirt8.jpg" },
  { "name": "Hoodie", "collection": "Casual Wear", "price": "109", "color": "pink-500", "img": "assets/uploads/t-shirts/t-shirt9.jpg" },
  { "name": "Formal Suit", "collection": "Business Collection", "price": "299", "color": "white", "img": "assets/uploads/t-shirts/t-shirt10.jpg" }
];

const bgColorClasses = {
  "lime-300": "bg-lime-300",
  "red-700": "bg-red-700",
  "blue-600": "bg-blue-600",
  "amber-600": "bg-amber-600",
  "green-500": "bg-green-500",
  "gray-700": "bg-gray-700",
  "indigo-700": "bg-indigo-700",
  "purple-600": "bg-purple-600",
  "pink-500": "bg-pink-500",
  "black": "bg-black"
};

const textColorClasses = {
  "lime-300": "text-lime-300",
  "red-700": "text-red-700",
  "blue-600": "text-blue-600",
  "amber-600": "text-amber-600",
  "green-500": "text-green-500",
  "gray-700": "text-gray-700",
  "indigo-700": "text-indigo-700",
  "purple-600": "text-purple-600",
  "pink-500": "text-pink-500",
  "white": "text-white"
};

const grid = document.getElementById('product-grid');

products.forEach((product, index) => {
  grid.innerHTML += `
    <div class="relative overflow-hidden group">
      <div class="bg-black rounded-3xl overflow-hidden">
        <div class="${bgColorClasses[product.color]} rounded-3xl overflow-hidden transform transition-transform duration-300 group-hover:scale-[0.98]">
          <div class="relative h-[400px] overflow-hidden rounded-3xl">

            <!-- Skeleton Loader -->
            <div class="skeleton absolute inset-0 bg-gray-300 animate-pulse rounded-3xl"></div>

            <!-- Product Image -->
            <img src="${product.img}" alt="${product.name}" loading="lazy" 
              class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-0" 
              onload="this.previousElementSibling.style.display='none'; this.classList.remove('opacity-0')"/>

            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-4">
              <h2 class="text-lg text-white font-bold mb-1">${product.name}</h2>
              <p class="text-sm text-white opacity-90">${product.collection}</p>
            </div>

            <div id="slide${index}" class="absolute inset-0 bg-black/90 flex items-center justify-center text-white transform translate-x-full transition-transform duration-500">
              <div class="text-center">
                <p class="text-xl font-bold mb-2">${product.collection}</p>
                <p class="text-3xl font-bold ${textColorClasses[product.color]} mb-4">$${product.price}</p>
                <button class="${bgColorClasses[product.color]} text-white px-4 py-1 rounded-full font-bold hover:bg-opacity-80">Buy Now</button>
              </div>
            </div>

            <button onclick="document.getElementById('slide${index}').classList.toggle('translate-x-full')" 
              class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-white p-1 rounded-full shadow">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m15 18-6-6 6-6"/>
              </svg>
            </button>

          </div>
        </div>
      </div>
    </div>
  `;
});
</script>

  <!-- 💥 Offers2 -->
<section id="offer-section" class="py-16 bg-gray-100">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-8">Exclusive Offers</h2>
    <div id="offer-grid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <!-- Dynamic Offer Cards will be injected here -->
    </div>
  </div>
</section>

<script>
const offers = [
    { "title": "50% Off", "description": "On all summer wear", "img": "assets/uploads/t-offers/offer1.png" },
    { "title": "Buy 1 Get 1 Free", "description": "Exclusive winter collection", "img": "assets/uploads/t-offers/offer2.png" },
    { "title": "Flat $100 Off", "description": "On purchases above $500", "img": "assets/uploads/t-offers/offer3.jpg" },
    { "title": "30% Cashback", "description": "On using XYZ bank cards", "img": "assets/uploads/t-offers/offer4.png" },
    { "title": "70% Clearance", "description": "End of season sale", "img": "assets/uploads/t-offers/offer5.png" },
    { "title": "Free Shipping", "description": "For orders over $99", "img": "assets/uploads/t-offers/offer6.png" },
    { "title": "Student Discount", "description": "15% off site-wide", "img": "assets/uploads/t-offers/offer7.png" },
    { "title": "Holiday Specials", "description": "Up to 40% off", "img": "assets/uploads/t-offers/offer8.png" },
    { "title": "Weekend Offer", "description": "Extra 20% off on weekends", "img": "assets/uploads/t-offers/offer9.png" },
    { "title": "New User Offer", "description": "Sign up & get $10 off", "img": "assets/uploads/t-offers/offer10.png" }
];

    const offersgrid = document.getElementById('offer-grid');

    offers.forEach(offer => {
        offersgrid.innerHTML += `
        <div class="relative overflow-hidden rounded-xl shadow-lg group">
        <img src="${offer.img}" alt="${offer.title}" class="object-cover w-full h-64 group-hover:scale-110 transition-transform duration-300">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
        <div class="absolute bottom-4 left-4 text-white">
            <h3 class="text-xl font-semibold">${offer.title}</h3>
            <p class="text-sm">${offer.description}</p>
        </div>
        </div>
    `;
    });
</script>


  <!-- 💥 products cards -->

<section id="exclusive-products" class="py-16 bg-white w-full">
  <!-- Heading -->
  <h2 class="text-3xl font-bold text-gray-800 mb-8 px-4 uppercase tracking-wide">
    Exclusive Products
  </h2>

  <!-- Full-width grid -->
  <div
    id="exclusiveGrid"
    class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6 px-4">
    <!-- cards injected by JS -->
  </div>
</section>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    fetch("json/exclusiveProducts.json")
      .then((res) => res.json())
      .then((products) => {
        const grid = document.getElementById("exclusiveGrid");

        products.forEach((p) => {
          const card = document.createElement("div");
          card.className = "bg-white border-2 border-black rounded-xl";
            // src="${p.image_url}"
          card.innerHTML = `
            <!-- Image -->
            <div class="relative overflow-hidden rounded-xl">
              <img src="assets/uploads/t-shirts/${p.image_url}" alt="${p.name}" class="w-full h-[300px] object-cover hover:scale-105 transition-transform duration-500" />
              <div class="absolute top-3 right-3">
                <div class="bg-black text-white px-3 py-1">
                  <span class="text-base font-mono">₹${p.price}</span>
                </div>
              </div>
            </div>

            <!-- Content -->
            <div class="p-4 space-y-4">
              <div>
                <h3 class="text-xl font-bold uppercase tracking-wider">
                  ${p.name}
                </h3>
                <p class="text-black/70 mt-1 uppercase text-xs tracking-widest">
                  ${p.tagline}
                </p>
              </div>

              <!-- Sizes -->
              <div class="flex gap-2">
                ${["S", "M", "L", "XL"]
                  .map(
                    (s) => `
                  <button class="w-10 h-10 border-2 border-black hover:bg-black hover:text-white transition duration-200 font-medium">
                    ${s}
                  </button>`
                  )
                  .join("")}
              </div>

              <!-- CTA -->
              <button href="pages/product-detail.php"
                class="w-full bg-black text-white py-3 text-base font-medium uppercase tracking-widest hover:bg-black/90 transition duration-200">
                Add to Cart
              </button>

              <!-- Stock note -->
              <div
                class="flex items-center justify-between text-xs text-black/70 uppercase tracking-wider">
                <span>${p.stock_status}</span>
                <span>${p.stock_left} Items Left</span>
              </div>
            </div>
          `;

          grid.appendChild(card);
        });
      })
      .catch(console.error);
  });
</script>

<!-- Features -->
<!-- <div class="flex flex-wrap gap-1.5">
  ${p.features
    .map(
      (f) => `
    <span class="px-2 py-0.5 border border-black text-xs uppercase tracking-wider">
      ${f}
    </span>`
    )
    .join("")}
</div> -->
<!-- ╚════════════════════════════════════════════════════╝ -->


  <!-- best seller -->
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

<section id="best-seller" class="py-16 bg-white">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-8">Best Seller Products</h2>
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


    <!-- <footer class="bg-gray-900 text-gray-400 text-sm pt-10 pb-6 mt-auto rounded-t-2xl"> -->
    <footer class="bg-gray-900 text-gray-400 text-sm pt-10 pb-24 md:pb-6 mt-auto rounded-t-2xl">

        <div class="max-w-7xl mx-auto px-4 space-y-8">

            <!-- Newsletter -->
            <div class="flex flex-col md:flex-row md:items-center md:justify-between border-t border-gray-700 pt-8 gap-4">
                <div>
                    <h3 class="text-white font-semibold text-base">Subscribe to our newsletter</h3>
                    <p class="mt-1 text-sm text-gray-400">
                        The latest news, articles, and resources, sent to your inbox weekly.
                    </p>
                </div>
                <form class="flex flex-col sm:flex-row gap-2 w-full sm:w-auto">
                    <input type="email" placeholder="Enter your email"
                        class="bg-gray-800 text-white border border-gray-700 rounded-full px-4 py-2 w-full sm:w-64 focus:outline-none focus:ring focus:border-indigo-500" />
                    <button type="submit"
                        class="bg-indigo-500 text-white px-4 py-2 rounded-full hover:bg-indigo-600 transition w-full sm:w-auto text-center">
                        Subscribe
                    </button>
                </form>
            </div>

            <!-- Footer Bottom -->
            <div class="border-t border-gray-700 pt-6 flex flex-col md:flex-row justify-between items-center gap-4">
                <!-- Copyright -->
                <p class="text-sm text-gray-500 text-center">&copy; 2025 Liwaas, Inc. All rights reserved.</p>

                <!-- Social Icons -->
                <div class="flex gap-6 justify-center">
                    <a href="#"><svg class="w-5 h-5 hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22 12a10 10 0 10-11.47 9.87v-6.99h-2.1v-2.88h2.1V9.42c0-2.07 1.23-3.22 3.12-3.22.9 0 1.84.16 1.84.16v2.02h-1.04c-1.03 0-1.35.64-1.35 1.3v1.56h2.3l-.37 2.88h-1.93v6.99A10 10 0 0022 12z" />
                        </svg></a>
                    <a href="#"><svg class="w-5 h-5 hover:text-white" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="M16 8a6 6 0 01-12 0 6 6 0 0112 0z" />
                            <path d="M12 14.5c-2.5 0-6 1.25-6 3.75V21h12v-2.75c0-2.5-3.5-3.75-6-3.75z" />
                        </svg></a>
                    <a href="#"><svg class="w-5 h-5 hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53A4.48 4.48 0 0022.43 2a9.07 9.07 0 01-2.88 1.1A4.52 4.52 0 0016.5 2c-2.49 0-4.5 2.24-4.5 5a4.9 4.9 0 00.12 1.14A12.94 12.94 0 013 4.1a4.5 4.5 0 001.39 6 4.52 4.52 0 01-2.05-.57v.06a4.52 4.52 0 003.64 4.43A4.48 4.48 0 013 14v.06A4.52 4.52 0 007.5 18a9.05 9.05 0 01-5.58 2c-.36 0-.71-.02-1.05-.06A12.94 12.94 0 008 21c8.28 0 12.8-7.42 12.8-13.85 0-.21 0-.42-.02-.63A9.14 9.14 0 0023 3z" />
                        </svg></a>
                    <a href="#"><svg class="w-5 h-5 hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 .5C5.65.5.5 5.65.5 12S5.65 23.5 12 23.5 23.5 18.35 23.5 12 18.35.5 12 .5zm0 21c-1.76 0-3.39-.51-4.77-1.39l6.66-6.66 3.63 3.63A8.9 8.9 0 0121 12c0-4.97-4.03-9-9-9S3 7.03 3 12s4.03 9 9 9z" />
                        </svg></a>
                    <a href="#"><svg class="w-5 h-5 hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M10 15l5.19-3L10 9v6z" />
                            <path d="M21 3H3c-1.1 0-2 .9-2 2v14a2 2 0 002 2h18c1.1 0 2-.9 2-2V5a2 2 0 00-2-2z" />
                        </svg></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="Js/slider_blur.js"></script>
    <script src="Js/cursor_effect.js"></script>
</body>

</html>