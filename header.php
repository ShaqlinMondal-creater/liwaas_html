<!DOCTYPE html>
<html lang="en">
<?php
    $config = include('admin/configs/config.php');

    // Access values
    $baseUrl   = $config['API_BASE_URL'];
    $baseName = $config['BASE_NAME'];
    $tagLine = $config['TAG_LINE'];
    $baseLogo  = $config['BASE_LOGO'];
    $baseFavicon  = $config['BASE_FAV_ICON'];
    $baseAddress   = $config['BASE_ADDRESS'];
    $baseEmail = $config['BASE_EMAIL'];
    $basePhone = $config['BASE_PHONE'];
    $razorPayKey = $config['RAZORPAY_KEY'];
?>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $baseName; ?> - <?= $tagLine; ?> </title>
    <meta name="description" content="Liwaas is an Indian streetwear brand crafting premium oversized T-shirts and everyday apparel. Discover our story, mission, and journey." />
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

    <!-- Sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/skeleton.css">

    <!-- For Price -->
    <!-- noUiSlider CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/nouislider@15.7.0/dist/nouislider.min.css" />

    <!-- noUiSlider JS -->
    <script src="https://cdn.jsdelivr.net/npm/nouislider@15.7.0/dist/nouislider.min.js"></script>

    <style>
        body{font-family:'Shadeerah Demo',sans-serif!important;}
    </style>
</head>

<body class="bg-gray-100">
    <!-- 📱 Mobile sticky footer nav -->
    <div class="fixed bottom-0 left-0 right-0 z-40 bg-white border-t shadow md:hidden mobile-action">
        <div class="flex justify-around items-center py-2 text-gray-600">

            <a href="pages/shop" class="flex flex-col items-center text-sm hover:text-indigo-600">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M3 9l1 11a2 2 0 002 2h12a2 2 0 002-2l1-11" />
                <path d="M16 3a4 4 0 00-8 0" />
                <path d="M3 9h18" />
            </svg>
            <span class="text-xs">Shop</span>
            </a>

            <a href="pages/cart" class="flex flex-col items-center text-sm hover:text-indigo-600">
                <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M3 3h2l.4 2M7 13h10l4-8H5.4" />
                    <circle cx="9" cy="19" r="2" />
                    <circle cx="17" cy="19" r="2" />
                </svg>
                <span class="text-xs">Cart</span>
            </a>

            <a href="#" class="flex flex-col items-center text-sm hover:text-indigo-600">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M20 12l-8 8-8-8 8-8z" />
                <path d="M12 16v-4" />
                <path d="M12 8h.01" />
            </svg>
            <span class="text-xs">Offers</span>
            </a>

            <!-- Login (guest only) -->
            <a href="sign-in" id="mobileLogin" class="flex flex-col items-center text-sm hover:text-blue-500 hidden">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M15 3h4a2 2 0 012 2v14a2 2 0 01-2 2h-4" />
                <path d="M10 17l5-5-5-5" />
                <path d="M15 12H3" />
            </svg>
            <span class="text-xs">Login</span>
            </a>

            <!-- Account (logged-in only) -->
            <a href="pages/profile" id="mobileAccount" class="flex flex-col items-center text-sm hover:text-blue-500 hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6 mb-1">
                <path stroke-linecap="round" stroke-linejoin="round"
                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
            <span class="text-xs">Account</span>
            </a>

            <!-- Logout (logged-in only) -->
            <a href="#" id="mobileLogout" class="flex flex-col items-center text-sm hover:text-red-500 hidden">
                <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M17 16l4-4m0 0l-4-4m4 4H7" />
                    <path d="M7 16v1a2 2 0 002 2h4" />
                    <path d="M7 8V7a2 2 0 012-2h4" />
                </svg>
                <span class="text-xs">Logout</span>
            </a>
        </div>
    </div>


    <!-- ⛳️ Main navbar -->
    <!-- ╔════════════════════  HEADER  ════════════════════╗ -->
    <nav class="relative z-50 sticky top-0 mx-0 bg-white/80 backdrop-blur px-4 py-3 shadow-lg ring-1 ring-gray-200">
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
                <li><a href="pages/blogs" class="nav-link">Blogs</a></li>
                <li><a href="pages/contact" class="nav-link">Contact</a></li>
            </ul>

            <!-- Mobile search (takes rest-of-row) -->
            <div class="relative md:hidden px-2">
                <input id="mobileSearchInput" type="search" placeholder="Search" class="w-56 border px-3 py-2 rounded-full text-sm focus:outline-none" autocomplete="off" />
                <div id="mobileSearchResults" class="hidden bg-white border rounded-full shadow max-h-64 overflow-y-auto"></div>
            </div>

            <!-- ◀︎ Desktop utilities -->
            <div class="hidden md:flex items-center space-x-6">

                <!-- Desktop Search Input -->
                <div class="relative">
                    <input id="desktopSearchInput" type="search" placeholder="Search"
                            class="w-72 h-10 pl-4 pr-10 rounded-full border focus:outline-none" autocomplete="off" />
                    <svg class="absolute right-3 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1116.65 16.65z" />
                    </svg>

                    <!-- Add a container for desktop search results -->
                    <div id="desktopSearchResults" class="absolute z-50 left-0 right-0 mt-1 bg-white border rounded-lg shadow max-h-64 overflow-y-auto hidden"></div>
                </div>

                <div class="relative">
                    <a href="pages/cart" class="flex flex-col items-center text-sm text-gray-400 hover:text-indigo-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M3 3h2l.4 2M7 13h10l4-8H5.4" />
                            <circle cx="9" cy="19" r="2" />
                            <circle cx="17" cy="19" r="2" />
                        </svg>
                    </a>
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
                        <a href="pages/profile?tab=notifications" class="block text-center text-indigo-600 py-2 hover:bg-gray-50
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
        <div id="mobileMenu" class="mobile-menu md:hidden absolute left-0 right-0 top-full
            bg-white/95 backdrop-blur shadow-lg px-4 py-3 space-y-2 rounded-b-2xl">
            <a href="" class="mobile-link">Home</a>
            <a href="pages/shop" class="mobile-link">Shop</a>
            <a href="pages/about" class="mobile-link">About</a>
            <a href="pages/contact" class="mobile-link">Contact</a>
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

    <!--nav logic with backend  -->
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            let avatarBtn = document.getElementById('avatarBtn');
            const isLoggedIn = localStorage.getItem('auth_token') !== null;
            const name = localStorage.getItem('user_name') || '';
            const bellBtn = document.getElementById('bellBtn');
            const bellMenu = document.getElementById('bellMenu');
            const avatarMenu = document.getElementById('avatarMenu');

            const loginLink = avatarMenu?.querySelector('a[href*="sign-in"]');
            const profileLink = avatarMenu?.querySelector('a[href*="profile"]');
            const logoutLink = avatarMenu?.querySelector('a[href="#"]');
            const mobileLogout = document.getElementById('mobileLogout');

            if (!isLoggedIn) {
                bellBtn?.classList.add('hidden');
                bellMenu?.classList.add('hidden');
                profileLink?.classList.add('hidden');
                logoutLink?.classList.add('hidden');
                mobileLogout?.classList.add('hidden');

                // Show login link
                loginLink?.classList.remove('hidden');

                if (avatarBtn) {
                    avatarBtn.src = 'https://i.pravatar.cc/40?img=32';
                }
            } else {
                // Hide login link
                loginLink?.classList.add('hidden');

                // Show Profile / Name in the link
                if (profileLink && name.length > 0) {
                    profileLink.textContent = `${name}`;
                }

                if (avatarBtn && name.length > 0) {
                    const initial = name.charAt(0).toUpperCase();
                    const span = document.createElement('span');
                    span.textContent = initial;
                    span.id = "avatarBtn";
                    span.className = "h-9 w-9 rounded-full grad-btn text-white flex items-center justify-center text-sm font-bold cursor-pointer ring-2 ring-white";

                    avatarBtn.replaceWith(span);
                    avatarBtn = document.getElementById('avatarBtn');

                    avatarBtn.addEventListener('click', e => {
                        e.stopPropagation();
                        avatarMenu?.classList.toggle('hidden');
                    });
                }
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
        const isLoggedIn = localStorage.getItem('auth_token') !== null;

        const mobileLogin   = document.getElementById('mobileLogin');
        const mobileAccount = document.getElementById('mobileAccount');
        const mobileLogout  = document.getElementById('mobileLogout');

        if (!isLoggedIn) {
            // Guest view
            mobileLogin?.classList.remove('hidden');
            mobileAccount?.classList.add('hidden');
            mobileLogout?.classList.add('hidden');
        } else {
            // Logged-in view
            mobileLogin?.classList.add('hidden');
            mobileAccount?.classList.remove('hidden');
            mobileLogout?.classList.remove('hidden');
        }
        });
    </script>

    <!-- Logout logic with api -->
    <script>
        // 🚪 Handle Logout
        document.addEventListener('DOMContentLoaded', () => {
            const logoutLinks = document.querySelectorAll('a[href="#"]');

            logoutLinks.forEach(link => {
                link.addEventListener('click', async (e) => {
                    e.preventDefault();

                    const token = localStorage.getItem('auth_token');
                    if (!token) return window.location.href = 'sign-in';

                    try {
                        const response = await fetch('<?php echo $baseUrl; ?>/api/logout', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'Authorization': `Bearer ${token}`
                            }
                        });

                        const result = await response.json();

                        if (result.success) {
                            // Clear all user data
                            localStorage.clear();
                            window.location.href = 'sign-in';
                        } else {
                            alert(result.message || 'Logout failed.');
                        }
                    } catch (error) {
                        console.error('Logout error:', error);
                        alert('An error occurred during logout.');
                    }
                });
            });
        });
    </script>

    <!-- search input -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
        // Get inputs and containers for mobile and desktop
        const mobileSearchInput = document.getElementById('mobileSearchInput');
        const mobileResults = document.getElementById('mobileSearchResults');

        const desktopSearchInput = document.getElementById('desktopSearchInput');
        const desktopResults = document.getElementById('desktopSearchResults');

        if ((!mobileSearchInput || !mobileResults) && (!desktopSearchInput || !desktopResults)) {
            console.error('Search inputs or results containers not found');
            return;
        }
        
        let debounceTimer;
        function setupSearch(inputElement, resultsContainer) {
            inputElement.addEventListener('input', () => {
                clearTimeout(debounceTimer);
                const query = inputElement.value.trim();

                if (query.length < 2) {
                    resultsContainer.innerHTML = '';
                    resultsContainer.classList.add('hidden');
                    return;
                }

                debounceTimer = setTimeout(async () => {
                    try {
                        const res = await fetch(`<?php echo $baseUrl; ?>/api/products/allProducts`, {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json"
                            },
                            body: JSON.stringify({ search: query })
                        });

                        const result = await res.json();

                        if (!result.success || !Array.isArray(result.data)) {
                            resultsContainer.innerHTML = `<div class="p-2 text-gray-500">No products found.</div>`;
                            resultsContainer.classList.remove('hidden');
                            return;
                        }

                        renderSearchResults(resultsContainer, result.data);
                    } catch (err) {
                        console.error("Search API error:", err);
                        resultsContainer.innerHTML = `<div class="p-2 text-gray-500">Search failed.</div>`;
                        resultsContainer.classList.remove('hidden');
                    }
                }, 350);
            });

            // Hide results when clicking outside
            document.addEventListener('click', e => {
                if (!resultsContainer.contains(e.target) && e.target !== inputElement) {
                    resultsContainer.classList.add('hidden');
                }
            });
        }

        function renderSearchResults(container, products) {
            if (products.length === 0) {
                container.innerHTML = `<div class="p-2 text-gray-500">No products found.</div>`;
                container.classList.remove('hidden');
                return;
            }

            container.innerHTML = products.map(product => {
                const variation = product.variations?.[0] || {};
                const imageUrl  = variation.images?.[0]?.url || "assets/placeholder.jpg";
                const price     = variation.sell_price || "N/A";
                const uid       = variation.uid || "";

                return `
                    <a href="pages/product-detail?id=${uid}"
                    class="flex items-center gap-4 px-3 py-2 hover:bg-gray-100 border-b last:border-b-0">
                        
                        <img src="${imageUrl}" 
                            alt="${product.name}" 
                            class="w-12 h-12 object-cover rounded" />

                        <div class="flex-1">
                            <p class="font-medium text-gray-900">${product.name}</p>
                            <p class="text-xs text-gray-600">${product.category?.name || ""}</p>
                            <p class="text-sm font-semibold">₹${price}</p>
                        </div>
                    </a>
                `;
            }).join('');

            container.classList.remove('hidden');
        }

        if (mobileSearchInput && mobileResults) {
            setupSearch(mobileSearchInput, mobileResults);
        }
        if (desktopSearchInput && desktopResults) {
            setupSearch(desktopSearchInput, desktopResults);
        }
        });
    </script>
