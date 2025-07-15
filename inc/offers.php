<section id="offer-section" class="offer_section py-6 bg-gradient-to-tr from-orange-900 via-red-900 to-orange-900 w-full">
  <div class="w-full px-4 mx-auto">
    <h2 class="text-3xl font-extrabold mb-4 text-white tracking-tight drop-shadow-lg">
      Exclusive Offers
    </h2>
    <div id="offer-grid" class="grid grid-cols-2 lg:grid-cols-5 gap-4">
      <!-- Cards will be rendered here -->
    </div>
    <!-- Load More button for mobile only -->
    <div class="flex justify-center mt-8 lg:hidden">
      <button id="load-more-btn" class="px-6 py-3 rounded-full bg-orange-600 text-white font-semibold hover:bg-indigo-700 transition">
        Load More
      </button>
    </div>
  </div>
</section>

<!-- <script>
  const offersgrid = document.getElementById('offer-grid');
  const loadMoreBtn = document.getElementById('load-more-btn');
  let allOffers = [];
  let offersToShow = 6; // Initial for mobile
  const loadIncrement = 5;

  // Show skeleton cards immediately before fetching
  offersgrid.innerHTML = '';
  for (let i = 0; i < offersToShow; i++) {
    offersgrid.innerHTML += `
      <div class="offer_section skeleton-card"></div>
      <div class="p-4">
        <div class="offer_section skeleton-text"></div>
        <div class="offer_section skeleton-text short"></div>
      </div>
    `;
  }

  loadMoreBtn.style.display = 'none';

  fetch('json/featuredProducts.json')
    .then(res => res.json())
    .then(offers => {
      allOffers = offers;

      // Check viewport width to decide render behavior
      if (window.innerWidth >= 1024) {
        // Desktop: show all offers, hide Load More button
        offersToShow = allOffers.length;
        renderOffers();
        loadMoreBtn.style.display = 'none';
      } else {
        // Mobile: show initial offers and show Load More if needed
        renderOffers();
        updateLoadMoreButton();
      }
    })
    .catch(err => {
      console.error('Failed to load offers JSON:', err);
    });


  // Render offers up to offersToShow
  function renderOffers() {
    offersgrid.innerHTML = '';
    const offersSlice = allOffers.slice(0, offersToShow);
    offersSlice.forEach(offer => {
      offersgrid.innerHTML += `
        <div class="relative rounded-3xl overflow-hidden bg-white/20 backdrop-blur-md shadow-lg hover:scale-[1.05] 
        transition-transform duration-400 cursor-pointer group">
          <img src="${offer.image_url}" alt="${offer.name}" class="w-full h-72 object-cover group-hover:brightness-110 
          transition duration-500" loading="lazy"/>
          <div class="absolute bottom-0 left-0 right-0 bg-black/40 backdrop-blur-lg px-3 py-3 text-white rounded-b-3xl">
            <h3 class="text-lg font-extrabold mb-1">${offer.name}</h3>
            <p class="text-md opacity-900">${offer.description || ''}</p>
          </div>
        </div>
      `;
    });

    if(typeof lucide !== "undefined" && lucide.createIcons) {
      lucide.createIcons();
    }
  }

  // Load more button click handler
  loadMoreBtn.addEventListener('click', () => {
    offersToShow += loadIncrement;
    if (offersToShow > allOffers.length) {
      offersToShow = allOffers.length;
    }
    renderOffers();
    updateLoadMoreButton();
  });

  // Show or hide Load More button depending on offers left
  function updateLoadMoreButton() {
    if (offersToShow >= allOffers.length) {
      loadMoreBtn.style.display = 'none';
    } else {
      loadMoreBtn.style.display = 'inline-block';
    }
  }

  // Optional: Handle window resize to re-check desktop/mobile layout
  window.addEventListener('resize', () => {
    if (window.innerWidth >= 1024) {
      // Desktop - show all and hide load more
      offersToShow = allOffers.length;
      renderOffers();
      loadMoreBtn.style.display = 'none';
    } else {
      // Mobile - show current number and update button
      renderOffers();
      updateLoadMoreButton();
    }
  });
</script> -->

<script>
  const offer_token = localStorage.getItem("auth_token");

  const offersgrid = document.getElementById('offer-grid');
  const loadMoreBtn = document.getElementById('load-more-btn');
  let allOffers = [];
  let offersToShow = 6; // Initial for mobile
  const loadIncrement = 5;

  // Show skeleton cards immediately before fetching
  offersgrid.innerHTML = '';
  for (let i = 0; i < offersToShow; i++) {
    offersgrid.innerHTML += `
      <div class="offer_section skeleton-card"></div>
      <div class="p-4">
        <div class="offer_section skeleton-text"></div>
        <div class="offer_section skeleton-text short"></div>
      </div>
    `;
  }

  loadMoreBtn.style.display = 'none';

  // Fetch from API
  fetch(`<?= $baseUrl ?>/api/extras/getall`, {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify({
      show_status: "1",
      purpose_name: "offer"
    })
  })
    .then(res => res.json())
    .then(response => {
      if (!response.success || !Array.isArray(response.data)) {
        throw new Error("Invalid offers data");
      }

      // Prepare data
      allOffers = response.data.map(item => ({
        name: item.purpose_name || 'Offer',
        description: item.file_name || '',
        image_url: item.file_path || ''
      }));

      if (window.innerWidth >= 1024) {
        // Desktop: show all offers
        offersToShow = allOffers.length;
        renderOffers();
        loadMoreBtn.style.display = 'none';
      } else {
        // Mobile
        renderOffers();
        updateLoadMoreButton();
      }
    })
    .catch(err => {
      console.error('Failed to load offers from API:', err);
    });

  // Render offers up to offersToShow
  function renderOffers() {
    offersgrid.innerHTML = '';
    const offersSlice = allOffers.slice(0, offersToShow);
    offersSlice.forEach(offer => {
      offersgrid.innerHTML += `
        <div class="relative rounded-3xl overflow-hidden bg-white/20 backdrop-blur-md shadow-lg hover:scale-[1.05] 
        transition-transform duration-400 cursor-pointer group">
          <img src="${offer.image_url}" alt="${offer.name}" class="w-full h-72 object-cover group-hover:brightness-110 
          transition duration-500" loading="lazy"/>
          <div class="absolute bottom-0 left-0 right-0 bg-black/40 backdrop-blur-lg px-3 py-3 text-white rounded-b-3xl">
            <h3 class="text-lg font-extrabold mb-1">${offer.name}</h3>
            <p class="text-md opacity-900">${offer.description}</p>
          </div>
        </div>
      `;
    });

    if(typeof lucide !== "undefined" && lucide.createIcons) {
      lucide.createIcons();
    }
  }

  // Load more handler
  loadMoreBtn.addEventListener('click', () => {
    offersToShow += loadIncrement;
    if (offersToShow > allOffers.length) {
      offersToShow = allOffers.length;
    }
    renderOffers();
    updateLoadMoreButton();
  });

  // Show or hide Load More button
  function updateLoadMoreButton() {
    if (offersToShow >= allOffers.length) {
      loadMoreBtn.style.display = 'none';
    } else {
      loadMoreBtn.style.display = 'inline-block';
    }
  }

  // Re-render on window resize
  window.addEventListener('resize', () => {
    if (window.innerWidth >= 1024) {
      offersToShow = allOffers.length;
      renderOffers();
      loadMoreBtn.style.display = 'none';
    } else {
      renderOffers();
      updateLoadMoreButton();
    }
  });
</script>

