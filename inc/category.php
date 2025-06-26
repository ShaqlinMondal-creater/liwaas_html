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