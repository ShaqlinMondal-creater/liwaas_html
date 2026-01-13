
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>LIWAAS — Launching Soon</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdn.tailwindcss.com"></script>
<link rel="icon" href="assets/brand/fav_icon.png">
<link href="https://fonts.cdnfonts.com/css/shadeerah-demo" rel="stylesheet">

<style>
body{font-family:'Shadeerah Demo',sans-serif !important;}
:root{--gold:#d4af37
}
/* Background */
.bg-theme{
  background:
    radial-gradient(circle at top, rgba(212,
  175,
  55,.12), transparent 45%),
    linear-gradient(180deg,#0b0b0b,#141414);
}
/* Glass */
.glass{
  background:rgba(15,
  15,
  15,.78);
  backdrop-filter:blur(14px);
  border: 1px solid rgba(212,
  175,
  55,.35);
}
/* Flip boxes */
.time-box{
  width: 64px;
  height: 72px;
  background:#0b0b0b;
  border-radius: 10px;
  border: 1px solid rgba(212,
  175,
  55,.45);
  box-shadow: 0 0 10px rgba(212,
  175,
  55,.25);
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
}

.time-value{
  font-size: 22px;
  font-weight: 600;
  color:var(--gold);
  letter-spacing:.1em;
  transition:transform .35s ease;
}

.flip{transform:rotateX(360deg)
}

.seconds-glow{
  animation:pulse 1s infinite alternate;
}
@keyframes pulse{
  from{box-shadow: 0 0 10px rgba(212,
    175,
    55,.3)
  }
  to{box-shadow: 0 0 18px rgba(212,
    175,
    55,.6)
  }
}

.time-label{
  font-size: 9px;
  letter-spacing:.18em;
  color:#bbb;
  margin-top: 2px;
}
/* Shimmer button */
.shimmer{
  position:relative;
  overflow:hidden;
}
.shimmer::after{
  content:"";
  position:absolute;
  top:0;
  left:-150%;
  width:150%;
  height:100%;
  background:linear-gradient(
    120deg,
    transparent,
    rgba(255,255,255,.4),
    transparent
  );
  transition:.6s;
}

.shimmer:hover::after{
  left:150%;
}

/* New year toast */
#nyToast{
  position:fixed;
  top: 20px;
  left: 50%;
  transform:translateX(-50%);
  background:#000;
  border: 1px solid var(--gold);
  padding: 10px 20px;
  border-radius: 999px;
  box-shadow: 0 0 20px rgba(212,
  175,
  55,.4);
  z-index: 50;
}
/* ================= FABRIC FLOW ================= */
.fabric-flow{
  position:fixed;
  inset: -20%;
  background:
    radial-gradient(circle at 30% 20%, rgba(212,
  175,
  55,.15), transparent 55%),
    radial-gradient(circle at 70% 80%, rgba(255,
  255,
  255,.05), transparent 60%);
  filter:blur(40px);
  animation:fabricMove 22s ease-in-out infinite alternate;
  z-index: -3;
}

@keyframes fabricMove{
  0%{transform:translate(-4%,
    -2%) rotate(0deg)
  }
  50%{transform:translate(3%,
    2%) rotate(1deg)
  }
  100%{transform:translate(-2%,
    3%) rotate(-1deg)
  }
}
/* ================= LIGHT PARTICLES ================= */
.particles{
  position:fixed;
  inset: 0;
  overflow:hidden;
  z-index: -2;
  pointer-events:none;
}

.particle{
  position:absolute;
  width: 4px;
  height: 4px;
  background:rgba(212,
  175,
  55,.8);
  border-radius: 50%;
  box-shadow: 0 0 10px rgba(212,
  175,
  55,.9);
  animation:float linear infinite;
}

@keyframes float{
  from{transform:translateY(110vh) translateX(0);opacity: 0
  }
  10%{opacity: 1
  }
  to{transform:translateY(-20vh) translateX(40px);opacity: 0
  }
}
/* ===== WHATSAPP BUTTON (PREMIUM) ===== */
.whatsapp-btn{
  display:flex;
  align-items:center;
  justify-content:center;
  gap:12px;
  width:100%;
  padding:10px 18px;
  border-radius:4px;
  background:
    linear-gradient(135deg,#1e8f5a,#25D366);
  color:#0b0b0b;
  font-weight:600;
  letter-spacing:.04em;
  transition:transform .25s ease, box-shadow .25s ease;
}

.whatsapp-btn:hover{
  transform:translateY(-1px);
  box-shadow:
    0 0 0 1px rgba(212,175,55,.55),
    0 14px 30px rgba(37,211,102,.35);
}

.wa-icon{
  width:22px;
  height:22px;
  display:flex;
  align-items:center;
  justify-content:center;
}

.wa-icon svg{
  width:22px;
  height:22px;
  fill:#0b0b0b;
}

.wa-text{
  font-size:14px;
}

</style>
</head>

<body class="min-h-screen bg-theme flex items-center justify-center px-4 text-white">
<!-- FABRIC FLOW -->
<div class="fabric-flow"></div>

<!-- PARTICLES -->
<div class="particles" id="particles"></div>
<!-- NEW YEAR MESSAGE -->
<div id="nyToast">✨ Happy New Year 2026 — Welcome to LIWAAS ✨</div>

<div class="glass max-w-md w-full rounded-2xl p-7 text-center">

<img src="assets/brand/fav_icon.png" class="h-14 mx-auto mb-4">

<h1 class="text-3xl tracking-wide">LIWAAS</h1>
<p class="text-[11px] tracking-[0.3em] uppercase text-gray-400 mb-5">Premium Fashion Brand</p>

<h2 class="text-xl mb-4">Launching Soon</h2>
<textarea
  id="preorderMessage"
  oninput="updateMailto()"
  placeholder="I want to pre-order. Please contact me."
  class="w-full p-3 rounded bg-black border border-gray-700 text-white mb-3 text-sm">
</textarea>

<a
  href="#"
  onclick="openWhatsApp(event)"
  class="whatsapp-btn shimmer mb-2"
>
  <span class="wa-icon">
    <svg viewBox="0 0 32 32" aria-hidden="true">
      <path d="M16 0C7.163 0 0 7.163 0 16c0 2.822.74 5.477 2.031 7.797L0 32l8.438-2.219A15.937 15.937 0 0 0 16 32c8.837 0 16-7.163 16-16S24.837 0 16 0zm0 29.5c-2.586 0-5.063-.676-7.25-1.953l-.516-.305-5 1.313 1.336-4.875-.336-.516A13.454 13.454 0 0 1 2.5 16C2.5 8.561 8.561 2.5 16 2.5S29.5 8.561 29.5 16 23.439 29.5 16 29.5zm7.094-9.094c-.39-.195-2.305-1.133-2.664-1.258-.36-.133-.625-.195-.89.195-.258.39-1.023 1.258-1.258 1.516-.234.258-.469.289-.859.094-.39-.195-1.648-.609-3.133-1.945-1.156-1.031-1.938-2.305-2.164-2.695-.227-.39-.023-.602.172-.797.18-.18.39-.469.586-.703.195-.234.258-.39.39-.656.133-.258.063-.492-.031-.688-.094-.195-.89-2.148-1.219-2.938-.32-.773-.648-.664-.89-.676h-.758c-.258 0-.68.094-1.031.492-.352.39-1.352 1.32-1.352 3.227s1.383 3.75 1.578 4.008c.195.258 2.727 4.164 6.617 5.844.926.398 1.648.633 2.211.812.93.297 1.781.258 2.453.156.75-.109 2.305-.938 2.633-1.844.328-.906.328-1.68.227-1.844-.094-.156-.352-.258-.742-.453z"/>
    </svg>
  </span>

  <span class="wa-text">Pre-Order via WhatsApp</span>
</a>



<a href="sample.php"
 class="block border border-[var(--gold)] text-[var(--gold)] py-2.5 rounded shimmer mb-5">
View Sample Collection
</a>

<!-- COUNTDOWN -->
<div class="flex justify-center gap-3" id="countdown">
  <div class="time-box"><span class="time-value">00</span><span class="time-label">DAYS</span></div>
  <div class="time-box"><span class="time-value">00</span><span class="time-label">HOURS</span></div>
  <div class="time-box"><span class="time-value">00</span><span class="time-label">MIN</span></div>
  <div class="time-box seconds-glow"><span class="time-value">00</span><span class="time-label">SEC</span></div>
</div>

<p class="text-[10px] text-gray-500 mt-6">© 2026 LIWAAS</p>
</div>

<script>
// Launch date: 7 Feb 2026 IST (1st week Feb)
const launchDate = new Date("2026-02-07T00:00:00+05:30");
const boxes = document.querySelectorAll(".time-value");
let last = [];

function update(){
  let diff = launchDate - new Date();
  if(diff < 0) diff = 0;

  const t = [
    Math.floor(diff/86400000),
    Math.floor(diff/3600000)%24,
    Math.floor(diff/60000)%60,
    Math.floor(diff/1000)%60
  ];

  t.forEach((v,i)=>{
    const val = String(v).padStart(2,
    "0");
    if(last[i
    ] !== val){
      boxes[i
      ].classList.add("flip");
      boxes[i
      ].innerText = val;
      setTimeout(()=>boxes[i
      ].classList.remove("flip"),
      350);
    }
    last[i
    ]=val;
  });
}
setInterval(update,
1000);
update();

// New Year toast auto hide
setTimeout(()=>document.getElementById("nyToast").style.display="none",
2500);
</script>
<script>
const container = document.getElementById("particles");
const COUNT = 45; // number of glossy stars

for(let i=0;i<COUNT;i++){
  const p = document.createElement("span");
  p.className="particle";

  const size = Math.random()*3 + 2;
  p.style.width = p.style.height = size+"px";
  p.style.left = Math.random()*100+"%";
  p.style.animationDuration = (Math.random()*18+12)+"s";
  p.style.animationDelay = (-Math.random()*20)+"s";
  p.style.opacity = Math.random();

  container.appendChild(p);
}
</script>
<script>
function openWhatsApp(e){
  e.preventDefault();

  const msg = document.getElementById("preorderMessage").value.trim();

  if(!msg){
    alert("Please write a message first");
    return;
  }

  const phone = "918597148785"; // ← REPLACE with your number

  const text =
    "Hello LIWAAS Team 👋\n\n" +
    "Pre-Order Request:\n" +
    msg +
    "\n\nThank you.";

  const url =
    "https://wa.me/" +
    phone +
    "?text=" +
    encodeURIComponent(text);

  window.open(url, "_blank");
}
</script>

</body>
</html>
