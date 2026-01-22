

  <style>
    /* @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800;900&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    } */

    .gradient-bg {
      position: relative;
      overflow: hidden;
      transition: background 1s ease;
    }

    .diagonal-shape {
      position: absolute;
      width: 600px;
      height: 600px;
      border-radius: 0 0 0 80px;
      right: -150px;
      top: -100px;
      transform: rotate(-20deg);
      transition: all 1s ease;
    }

    .circle-badge {
      position: absolute;
      width: 300px;
      height: 300px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      right: 15%;
      top: 50%;
      transform: translateY(-50%);
      box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3);
      z-index: 10;
      transition: all 1s ease;
    }

    .circle-badge-text {
      text-align: center;
      font-size: 4rem;
      font-weight: 900;
      color: white;
      line-height: 1;
    }

    .circle-badge-text .off {
      font-size: 2rem;
      display: block;
      margin-top: -10px;
    }

    .product-image {
      position: absolute;
      right: 5%;
      top: 50%;
      transform: translateY(-50%);
      width: 300px;
      height: 400px;
      z-index: 20;
      object-fit: contain;
      object-position: center;
    }

    .shopping-bag {
      position: absolute;
      border-radius: 8px 8px 0 0;
      transition: all 1s ease;
    }

    .bag-1 {
      width: 120px;
      height: 140px;
      left: 20px;
      top: 50px;
      transform: rotate(-15deg);
      box-shadow: -5px 5px 20px rgba(0, 0, 0, 0.1);
    }

    .bag-2 {
      width: 140px;
      height: 160px;
      left: 80px;
      top: 80px;
      transform: rotate(10deg);
      box-shadow: 5px 10px 25px rgba(0, 0, 0, 0.15);
    }

    .bag-3 {
      width: 100px;
      height: 130px;
      right: 30px;
      top: 40px;
      transform: rotate(-8deg);
      box-shadow: -3px 5px 18px rgba(0, 0, 0, 0.1);
    }

    .bag-handle {
      position: absolute;
      width: 60px;
      height: 4px;
      top: -15px;
      left: 50%;
      transform: translateX(-50%) rotate(20deg);
      border-radius: 2px;
    }

    .bag-label {
      position: absolute;
      bottom: 10px;
      left: 50%;
      transform: translateX(-50%);
      width: 70%;
      height: 20px;
      border-radius: 4px;
      opacity: 0.2;
      background: white;
    }

    .float-animation {
      animation: float 4s ease-in-out infinite;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0px) rotate(-15deg); }
      50% { transform: translateY(-20px) rotate(-15deg); }
    }

    .float-animation-2 {
      animation: float2 5s ease-in-out infinite;
    }

    @keyframes float2 {
      0%, 100% { transform: translateY(0px) rotate(10deg); }
      50% { transform: translateY(-15px) rotate(10deg); }
    }

    .float-animation-3 {
      animation: float3 4.5s ease-in-out infinite;
    }

    @keyframes float3 {
      0%, 100% { transform: translateY(0px) rotate(-8deg); }
      50% { transform: translateY(-18px) rotate(-8deg); }
    }

    .pulse-circle {
      animation: pulse-ring 2s infinite;
    }

    @keyframes pulse-ring {
      0% {
        box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.7);
      }
      70% {
        box-shadow: 0 0 0 30px rgba(255, 255, 255, 0);
      }
      100% {
        box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
      }
    }

    .read-more-btn {
      padding: 12px 24px;
      border-radius: 6px;
      color: white;
      font-weight: 600;
      letter-spacing: 1px;
      transition: all 0.3s ease;
      display: inline-block;
      cursor: pointer;
      font-size: 0.875rem;
    }

    .read-more-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
    }

    .scontainer {
      position: relative;
      width: 100%;
      overflow: hidden;
    }

    .slide {
      opacity: 0;
      transition: opacity 1s ease;
      position: absolute;
      width: 100%;
      height: 100%;
    }

    .slide.active {
      opacity: 1;
      position: relative;
    }

    .dots-container {
      position: absolute;
      bottom: 30px;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      gap: 8px;
      z-index: 50;
    }

    .dot {
      height: 4px;
      background: rgba(255, 255, 255, 0.4);
      border-radius: 10px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .dot.active {
      background: white;
      animation: progressBar 3s linear forwards;
    }

    @keyframes progressBar {
      0% { width: 0; }
      100% { width: 100%; }
    }

    .fade-in {
      animation: fadeIn 1s ease forwards;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateX(-30px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    .content-section {
      animation: fadeIn 1s ease forwards;
    }

    @media (max-width: 768px) {
      .diagonal-shape {
        width: 400px;
        height: 400px;
        right: -100px;
        top: -50px;
      }

      .circle-badge {
        width: 200px;
        height: 200px;
        right: 10%;
      }

      .circle-badge-text {
        font-size: 2.5rem;
      }

      .circle-badge-text .off {
        font-size: 1.25rem;
      }

      .product-image {
        width: 200px;
        height: 280px;
        right: 0%;
      }

      .bag-1 {
        width: 80px;
        height: 100px;
        left: 15px;
      }

      .bag-2 {
        width: 90px;
        height: 110px;
        left: 60px;
      }

      .bag-3 {
        width: 70px;
        height: 90px;
        right: 20px;
      }

      .dots-container {
        gap: 6px;
      }

      .dot {
        height: 3px;
      }
    }

    @media (max-width: 640px) {
      .circle-badge {
        width: 160px;
        height: 160px;
        right: 5%;
      }

      .circle-badge-text {
        font-size: 2rem;
      }

      .circle-badge-text .off {
        font-size: 1rem;
      }
    }
  </style>

  <div class="slider-container scontainer" style="min-height: 100vh;">
    <div id="slidess"></div>
    <div class="dots-container" id="dotsContainer"></div>
  </div>

  <script>
    // JSON Configuration
    const sliderConfig = [
      {
        title: "MEGA SALE",
        subtitle: "Clearance Offer",
        description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.",
        discount: "60%",
        image: "https://images.pexels.com/photos/1181690/pexels-photo-1181690.jpeg?auto=compress&cs=tinysrgb&w=600",
        gradient: "linear-gradient(135deg, #7c3aed 0%, #a855f7 30%, #ec4899 60%, #f97316 100%)",
        diagonalColor: "linear-gradient(45deg, #fbbf24 0%, #fcd34d 50%, #fef08a 100%)",
        badgeColor: "radial-gradient(circle at 30% 30%, #f472b6, #ec4899, #db2777)",
        buttonColor: "linear-gradient(135deg, #ef4444 0%, #dc2626 100%)",
        bag1Color: "linear-gradient(135deg, #06b6d4 0%, #0891b2 100%)",
        bag2Color: "linear-gradient(135deg, #ff6b35 0%, #f97316 100%)",
        bag3Color: "linear-gradient(135deg, #22c55e 0%, #16a34a 100%)",
        handleColor: "#fbbf24"
      },
      {
        title: "SUMMER SALE",
        subtitle: "Special Collection",
        description: "Enjoy amazing discounts on our latest summer collection. Limited time offer with exclusive deals on premium products.",
        discount: "50%",
        image: "https://images.pexels.com/photos/3945683/pexels-photo-3945683.jpeg?auto=compress&cs=tinysrgb&w=600",
        gradient: "linear-gradient(135deg, #0ea5e9 0%, #06b6d4 30%, #10b981 60%, #fbbf24 100%)",
        diagonalColor: "linear-gradient(45deg, #fca5a5 0%, #fecaca 50%, #fee2e2 100%)",
        badgeColor: "radial-gradient(circle at 30% 30%, #93c5fd, #60a5fa, #3b82f6)",
        buttonColor: "linear-gradient(135deg, #10b981 0%, #059669 100%)",
        bag1Color: "linear-gradient(135deg, #ec4899 0%, #db2777 100%)",
        bag2Color: "linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%)",
        bag3Color: "linear-gradient(135deg, #f59e0b 0%, #d97706 100%)",
        handleColor: "#fbbf24"
      },
      {
        title: "FLASH DEAL",
        subtitle: "Limited Time Offer",
        description: "Don't miss out on our biggest flash sale. Grab your favorite items at unbeatable prices before stocks run out.",
        discount: "75%",
        image: "https://images.pexels.com/photos/3962286/pexels-photo-3962286.jpeg?auto=compress&cs=tinysrgb&w=600",
        gradient: "linear-gradient(135deg, #ec4899 0%, #f43f5e 30%, #fb923c 60%, #eab308 100%)",
        diagonalColor: "linear-gradient(45deg, #c7d2fe 0%, #dbeafe 50%, #e0e7ff 100%)",
        badgeColor: "radial-gradient(circle at 30% 30%, #fbbf24, #f59e0b, #d97706)",
        buttonColor: "linear-gradient(135deg, #f43f5e 0%, #e11d48 100%)",
        bag1Color: "linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%)",
        bag2Color: "linear-gradient(135deg, #06b6d4 0%, #0891b2 100%)",
        bag3Color: "linear-gradient(135deg, #ec4899 0%, #db2777 100%)",
        handleColor: "#06b6d4"
      },
      {
        title: "MIDNIGHT SALE",
        subtitle: "Exclusive Midnight Deals",
        description: "Shop the best midnight deals with incredible savings. Extended hours available just for you tonight.",
        discount: "80%",
        image: "https://images.pexels.com/photos/1452860/pexels-photo-1452860.jpeg?auto=compress&cs=tinysrgb&w=600",
        gradient: "linear-gradient(135deg, #1e293b 0%, #3b82f6 30%, #8b5cf6 60%, #ec4899 100%)",
        diagonalColor: "linear-gradient(45deg, #ddd6fe 0%, #e9d5ff 50%, #f3e8ff 100%)",
        badgeColor: "radial-gradient(circle at 30% 30%, #818cf8, #6366f1, #4f46e5)",
        buttonColor: "linear-gradient(135deg, #3b82f6 0%, #2563eb 100%)",
        bag1Color: "linear-gradient(135deg, #ec4899 0%, #db2777 100%)",
        bag2Color: "linear-gradient(135deg, #22c55e 0%, #16a34a 100%)",
        bag3Color: "linear-gradient(135deg, #f59e0b 0%, #d97706 100%)",
        handleColor: "#60a5fa"
      }
    ];

    let currentSlide = 0;
    const totalSlides = sliderConfig.length;

    function createSlides() {
      const slidesContainer = document.getElementById('slidess');
      sliderConfig.forEach((config, index) => {
        const slide = document.createElement('div');
        slide.className = `slide ${index === 0 ? 'active' : ''} gradient-bg min-h-screen flex items-center justify-center relative`;
        slide.style.background = config.gradient;

        slide.innerHTML = `
          <div class="diagonal-shape" style="background: ${config.diagonalColor}"></div>

          <div class="circle-badge pulse-circle" style="background: ${config.badgeColor}">
            <div class="circle-badge-text">
              ${config.discount}<span class="off">OFF</span>
            </div>
          </div>

          <img src="${config.image}" alt="${config.title}" class="product-image">

          <div class="shopping-bag bag-1 float-animation" style="background: ${config.bag1Color}">
            <div class="bag-handle" style="background: ${config.handleColor}"></div>
            <div class="bag-label"></div>
          </div>
          <div class="shopping-bag bag-2 float-animation-2" style="background: ${config.bag2Color}">
            <div class="bag-handle" style="background: ${config.handleColor}"></div>
            <div class="bag-label"></div>
          </div>
          <div class="shopping-bag bag-3 float-animation-3" style="background: ${config.bag3Color}">
            <div class="bag-handle" style="background: ${config.handleColor}"></div>
            <div class="bag-label"></div>
          </div>

          <div class="relative z-30 container mx-auto px-6 md:px-12 max-w-6xl">
            <div class="max-w-xl content-section">
              <h1 class="text-6xl md:text-7xl font-black text-white mb-2 italic tracking-tight">
                ${config.title}
              </h1>
              <h2 class="text-2xl md:text-4xl text-white italic font-light mb-6">
                ${config.subtitle}
              </h2>

              <p class="text-white text-sm md:text-base leading-relaxed mb-8 opacity-90">
                ${config.description}
              </p>

              <button class="read-more-btn" style="background: ${config.buttonColor}">
                READ MORE
              </button>
            </div>
          </div>
        `;

        slidesContainer.appendChild(slide);
      });
    }

    function createDots() {
      const dotsContainer = document.getElementById('dotsContainer');
      sliderConfig.forEach((_, index) => {
        const dot = document.createElement('div');
        dot.className = `dot ${index === 0 ? 'active' : ''}`;
        dot.style.width = index === 0 ? '40px' : '12px';
        dot.onclick = () => goToSlide(index);
        dotsContainer.appendChild(dot);
      });
    }

    function goToSlide(index) {
      const slides = document.querySelectorAll('.slidess');
      const dots = document.querySelectorAll('.dot');

      slides.forEach(slide => slide.classList.remove('active'));
      dots.forEach(dot => {
        dot.classList.remove('active');
        dot.style.width = '12px';
      });

      slides[index].classList.add('active');
      dots[index].classList.add('active');
      dots[index].style.width = '40px';

      currentSlide = index;
    }

    function nextSlide() {
      const nextIndex = (currentSlide + 1) % totalSlides;
      goToSlide(nextIndex);
    }

    function autoSlide() {
      nextSlide();
    }

    function init() {
      createSlides();
      createDots();
      setInterval(autoSlide, 3000);
    }

    init();
  </script>
