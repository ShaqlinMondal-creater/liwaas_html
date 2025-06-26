
<section id="product-showcase" class="py-6 bg-white">
  <h2 class="text-3xl font-bold text-gray-800 mb-4 px-4">Product Gallary</h2>
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
