<?php include("header.php"); ?>
  <!-- 🎁 OFFERS – midnight‑blue / dark‑amber flowing background -->
  <section id="offers" class="relative overflow-hidden py-14">

    <!-- animated flow layer -->
    <div class="absolute inset-0 -z-20
                bg-[length:200%_200%]
                bg-gradient-to-r from-blue-800 via-amber-600 to-blue-800
                opacity-70 animate-flow"></div>

    <!-- deep vertical overlay for contrast -->
    <div class="absolute inset-0 -z-30
                bg-gradient-to-b from-blue-950/80 via-blue-900/70 to-blue-950/90"></div>

    <div class="max-w-7xl mx-auto px-4">
      <div id="offersGrid"
          class="grid grid-cols-2 md:grid-cols-5 gap-4 justify-items-center"></div>
    </div>
  </section>

  <style>
    @keyframes flow{
      0%  {background-position: 0% 0%}
      50% {background-position: 100% 50%}
      100%{background-position: 0% 0%}
    }
    .animate-flow{
      animation: flow 18s linear infinite;
    }
  </style>

  <!-- 🎁 Offers -->
  <script>
    document.addEventListener("DOMContentLoaded",()=>{
      const grid=document.getElementById("offersGrid");
      fetch("json/offers.json")
        .then(r=>r.json())
        .then(offers=>{
          offers.sort((a,b)=>a.sort_number-b.sort_number).slice(0,10).forEach(o=>{
            const card=document.createElement("a");
            card.href=`/category/${o.category_id}`;
            card.className="rounded-xl overflow-hidden flex flex-col h-full";
            card.innerHTML=`
              <div class="relative h-[320px] w-full rounded-xl border border-white/10 bg-white/10 backdrop-blur-md shadow text-white overflow-hidden flex flex-col items-center justify-center text-center px-4 py-6">
                <div class="absolute top-3 right-3 bg-orange-400 text-black text-[10px] font-bold px-2 py-1 rounded-full shadow">${o.offer_percentage}% OFF</div>
                <div class="w-40 h-40 rounded-full overflow-hidden border-4 border-white mb-4 shadow bg-white/20">
                  <img src="assets/uploads/t-offers/${o.offers_image}" alt="${o.title}" class="w-full h-full object-cover"/>
                </div>
                <h3 class="text-lg font-bold mb-2">${o.title}</h3>
                <p class="text-xs opacity-90 mb-4">${o.offer_description}</p>
                <button class="bg-yellow-400 hover:bg-yellow-500 text-black text-xs font-semibold px-4 py-2 rounded-full transition">View More</button>
              </div>`;
            grid.appendChild(card);
          });
        })
        .catch(e=>console.error("Failed to load offers:",e));
    });
  </script>
<?php include("footer.php"); ?>