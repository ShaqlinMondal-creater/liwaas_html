<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>LIWAAS — Sample Collection</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://cdn.tailwindcss.com"></script>
<link rel="icon" href="assets/brand/fav_icon.png">
<link href="https://fonts.cdnfonts.com/css/shadeerah-demo" rel="stylesheet">

<style>
body{
  font-family:'Shadeerah Demo',sans-serif;
  background:#0b0b0b;
  color:#fff;
}

/* ===== GLASS CARD ===== */
.glass{
  background:rgba(20,20,20,.6);
  border:1px solid rgba(212,175,55,.35);
  backdrop-filter:blur(12px);
}

/* ===== PINTEREST MASONRY ===== */
.masonry{
  column-count:3;
  column-gap:1.5rem;
}
@media (max-width:1024px){
  .masonry{ column-count:2; }
}
@media (max-width:640px){
  .masonry{ column-count:1; }
}

.masonry-item{
  break-inside:avoid;
  margin-bottom:1.5rem;
  cursor:pointer;
}

.masonry-item img{
  width:100%;
  height:auto;
  border-radius:16px;
  transition:transform .35s ease, box-shadow .35s ease;
}

.masonry-item img:hover{
  transform:scale(1.03);
  box-shadow:0 20px 40px rgba(212,175,55,.25);
}

.collection-title{
  margin-top:.5rem;
  font-size:.95rem;
  text-align:center;
  color:#d4af37;
}

/* ===== LIGHTBOX ===== */
#lightbox{
  position:fixed;
  inset:0;
  background:rgba(0,0,0,.85);
  display:none;
  align-items:center;
  justify-content:center;
  z-index:50;
}

#lightbox img{
  max-width:90%;
  max-height:90%;
  border-radius:20px;
  box-shadow:0 0 60px rgba(212,175,55,.4);
  animation:zoom .35s ease;
}

@keyframes zoom{
  from{ transform:scale(.85); opacity:0 }
  to{ transform:scale(1); opacity:1 }
}
</style>
</head>

<body class="min-h-screen px-6 py-10">

<h1 class="text-3xl text-center mb-10 tracking-wide">
  Sample Collection
</h1>

<!-- MASONRY GRID -->
<div id="collectionGrid" class="max-w-6xl mx-auto masonry"></div>

<p class="text-center mt-12">
  <a href="index.php" class="text-[color:#d4af37] underline">
    ← Back to Launch Page
  </a>
</p>

<!-- LIGHTBOX -->
<div id="lightbox" onclick="closeLightbox()">
  <img id="lightbox-img" src="">
</div>

<script>
const API_URL = "https://liwaas.com/collection_files/fetch_collection.php";
const grid = document.getElementById("collectionGrid");

fetch(API_URL)
  .then(res => res.json())
  .then(res => {
    if (!res.success || !res.data) return;

    res.data.forEach(item => {
      const div = document.createElement("div");
      div.className = "masonry-item glass p-3";

      div.innerHTML = `
        <img src="${item.image}" alt="${item.title}"
             onclick="openLightbox('${item.image}')">
        <div class="collection-title">${item.title}</div>
      `;

      grid.appendChild(div);
    });
  })
  .catch(err => console.error("Collection load error:", err));

function openLightbox(src){
  document.getElementById("lightbox-img").src = src;
  document.getElementById("lightbox").style.display = "flex";
}

function closeLightbox(){
  document.getElementById("lightbox").style.display = "none";
}
</script>

</body>
</html>
