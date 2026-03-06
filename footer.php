<style>
  .whatsapp-float{
    position: fixed;
    bottom: 22px;
    right: 22px;
    width: 58px;
    height: 58px;
    background: #25D366;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 10px 25px rgba(0,0,0,.25);
    z-index: 9999;
    transition: all .3s ease;
    animation: whatsappPulse 2s infinite;
  }

  /* Hover */
  .whatsapp-float:hover{
    transform: scale(1.1);
    background:#20c45a;
  }

  /* Pulse animation */
  @keyframes whatsappPulse{
    0%{
      box-shadow:0 0 0 0 rgba(37,211,102,.6);
    }
    70%{
      box-shadow:0 0 0 15px rgba(37,211,102,0);
    }
    100%{
      box-shadow:0 0 0 0 rgba(37,211,102,0);
    }
  }

  /* Tooltip */
  .whatsapp-tooltip{
    position: absolute;
    right: 70px;
    background:#111827;
    color:#fff;
    padding:8px 12px;
    border-radius:6px;
    font-size:13px;
    white-space:nowrap;
    opacity:0;
    transform:translateY(5px);
    transition:.25s;
    pointer-events:none;
  }

  .whatsapp-float:hover .whatsapp-tooltip{
    opacity:1;
    transform:translateY(0);
  }

  /* Mobile position */
  @media(max-width:600px){
    .whatsapp-float{
      bottom:18px;
      right:18px;
      width:52px;
      height:52px;
    }
  }
</style>
<a href="https://wa.me/91<?= $basePhone; ?>?text=Hello%20I%20have%20a%20query%20about%20your%20products"
   class="whatsapp-float"
   target="_blank"
   rel="noopener">

  <span class="whatsapp-tooltip">
    Have query? Chat on WhatsApp
  </span>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="28" height="28">
    <path fill="white" d="M16.04 2.003C8.834 2.003 3 7.835 3 15.04c0 2.647.78 5.11 2.125 7.19L3 30l7.97-2.095A13.01 13.01 0 0 0 16.04 28c7.205 0 13.037-5.834 13.037-13.04 0-7.205-5.832-12.957-13.037-12.957zm0 23.927c-2.3 0-4.445-.676-6.256-1.84l-.447-.28-4.73 1.24 1.26-4.61-.29-.47a10.84 10.84 0 0 1-1.69-5.83c0-6.02 4.9-10.92 10.92-10.92 6.02 0 10.92 4.9 10.92 10.92s-4.9 10.92-10.92 10.92zm6.07-7.93c-.33-.17-1.96-.97-2.26-1.08-.3-.11-.52-.17-.74.17-.22.33-.85 1.08-1.04 1.3-.19.22-.38.25-.7.08-.33-.17-1.39-.51-2.65-1.63-.98-.87-1.65-1.94-1.84-2.27-.19-.33-.02-.51.14-.67.14-.14.33-.38.49-.57.16-.19.22-.33.33-.55.11-.22.05-.41-.03-.58-.08-.17-.74-1.78-1.02-2.44-.27-.65-.55-.56-.74-.57l-.63-.01c-.22 0-.58.08-.88.41-.3.33-1.16 1.13-1.16 2.76 0 1.63 1.19 3.2 1.35 3.42.16.22 2.33 3.55 5.65 4.97.79.34 1.4.54 1.88.69.79.25 1.51.21 2.08.13.64-.09 1.96-.8 2.24-1.57.27-.77.27-1.43.19-1.57-.08-.14-.3-.22-.63-.39z"/>
  </svg>

</a>
  <!-- <footer class="bg-gray-900 text-gray-400 text-sm pt-10 pb-6 mt-auto rounded-t-2xl"> -->
    <footer style="background-color: rgb(26 26 26);" class="text-white">
      <!-- Main Footer Content -->
      <div class="max-w-7xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          
          <!-- Company Info -->
          <div class="space-y-4">
            <div class="flex justify-center items-center space-x-2">
              <div class="w-40 h-50 bg-transparent rounded-lg flex items-center justify-center overflow-hidden">
                <img src="assets/brand/liwaas_design_giff.gif" alt="logo" class="w-full h-full object-cover" />
              </div>
              <!-- <h3 class="text-xl font-bold">Liwaas</h3> -->
            </div>
            <p class="text-gray-300 leading-relaxed">
              Crafting exceptional fashion experiences for the modern world
            </p>
            <div class="flex space-x-4">
              <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-blue-600 rounded-full flex items-center justify-center transition-colors duration-200">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
              </a>
              <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-blue-700 rounded-full flex items-center justify-center transition-colors duration-200">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                </svg>
              </a>
              <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-pink-600 rounded-full flex items-center justify-center transition-colors duration-200">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z"/>
                </svg>
              </a>
              <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-blue-800 rounded-full flex items-center justify-center transition-colors duration-200">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                </svg>
              </a>
              <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-red-600 rounded-full flex items-center justify-center transition-colors duration-200">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                </svg>
              </a>
            </div>
          </div>

          <!-- Quick Links -->
          <div class="space-y-4">
            <h4 class="text-lg font-semibold text-white">Quick Links</h4>
            <ul class="space-y-3">
              <li>
                <a href="pages/about-us" class="text-gray-300 hover:text-white hover:translate-x-1 transform transition-all duration-200 flex items-center group">
                  <svg class="w-3 h-3 mr-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
                  About Us
                </a>
              </li>
              <li>
                <a href="pages/shop" class="text-gray-300 hover:text-white hover:translate-x-1 transform transition-all duration-200 flex items-center group">
                  <svg class="w-3 h-3 mr-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
                  Shop
                </a>
              </li>
              <li>
                <a href="pages/contact" class="text-gray-300 hover:text-white hover:translate-x-1 transform transition-all duration-200 flex items-center group">
                  <svg class="w-3 h-3 mr-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
                  Contact Us
                </a>
              </li>
              <li>
                <a href="pages/blogs" class="text-gray-300 hover:text-white hover:translate-x-1 transform transition-all duration-200 flex items-center group">
                  <svg class="w-3 h-3 mr-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
                  Blog
                </a>
              </li>
            </ul>
          </div>

          <!-- Policies -->
          <div class="space-y-4">
            <h4 class="text-lg font-semibold text-white">Policies</h4>
            <ul class="space-y-3">
              <li>
                <a href="policies/privacy-policy" class="text-gray-300 hover:text-white hover:translate-x-1 transform transition-all duration-200 flex items-center group">
                  <svg class="w-3 h-3 mr-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
                  Privacy Policy
                </a>
              </li>
              <li>
                <a href="policies/terms-and-conditions" class="text-gray-300 hover:text-white hover:translate-x-1 transform transition-all duration-200 flex items-center group">
                  <svg class="w-3 h-3 mr-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
                  Terms & Conditions
                </a>
              </li>
              <li>
                <a href="policies/shipping-policy" class="text-gray-300 hover:text-white hover:translate-x-1 transform transition-all duration-200 flex items-center group">
                  <svg class="w-3 h-3 mr-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
                  Shipping Policy
                </a>
              </li>
              <li>
                <a href="policies/refund-policy" class="text-gray-300 hover:text-white hover:translate-x-1 transform transition-all duration-200 flex items-center group">
                  <svg class="w-3 h-3 mr-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
                  Refund Policy
                </a>
              </li>
              <li>
                <a href="policies/cancellation-policy" class="text-gray-300 hover:text-white hover:translate-x-1 transform transition-all duration-200 flex items-center group">
                  <svg class="w-3 h-3 mr-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
                  Cancellation Policy
                </a>
              </li>
              <li>
                <a href="policies/disclaimer" class="text-gray-300 hover:text-white hover:translate-x-1 transform transition-all duration-200 flex items-center group">
                  <svg class="w-3 h-3 mr-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
                  Disclaimer
                </a>
              </li>
            </ul>
          </div>

          <!-- Contact Info & Newsletter -->
          <div class="space-y-6">
            <h4 class="text-lg font-semibold text-white">Get in Touch</h4>
            
            <!-- Contact Details -->
            <div class="space-y-4">
              <div class="flex items-start space-x-3">
                <div class="w-5 h-5 text-blue-400 mt-1">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  </svg>
                </div>
                <div class="text-gray-300">
                  <?= $baseAddress; ?>
                </div>
              </div>
              
              <div class="flex items-center space-x-3">
                <div class="w-5 h-5 text-blue-400">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                  </svg>
                </div>
                <a href="tel:91<?= $basePhone; ?>" class="text-gray-300 hover:text-white transition-colors duration-200">
                  +91 <?= $basePhone; ?>
                </a>
              </div>
              
              <div class="flex items-center space-x-3">
                <div class="w-5 h-5 text-blue-400">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                  </svg>
                </div>
                <a href="mailto:<?php echo $baseEmail; ?>" class="text-gray-300 hover:text-white transition-colors duration-200">
                  <?php echo $baseEmail; ?>
                </a>
              </div>
            </div>

            <!-- Newsletter Signup -->
            <!-- <div class="space-y-3">
              <p class="text-sm text-gray-400">Subscribe to our newsletter</p>
              <div class="flex">
                <input 
                  type="email" 
                  placeholder="Enter your email"
                  class="flex-1 px-6 py-2 bg-[#151515] border border-transparent rounded-l-lg focus:outline-none focus:border-white text-white placeholder-gray-400"
                />
                <button class="px-4 py-2 bg-gradient-to-r from-[#151515] to-orange-600 hover:from-orange-700 hover:to-orange-500 rounded-r-lg transition-all duration-200 font-medium">
                  Subscribe
                </button>
              </div>
            </div> -->
          </div>
        </div>
      </div>

      <!-- Bottom Bar -->
      <div class="border-t border-gray-600">
        <div class="max-w-7xl mx-auto px-6 py-6">
          <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
            <div class="text-gray-400 text-sm">
              © 2026 liwaas. All rights reserved.
            </div>
            <div class="flex space-x-6 text-sm">
              <a href="policies/privacy-policy" class="text-gray-400 hover:text-white transition-colors duration-200">
                Privacy Policy
              </a>
              <a href="policies/terms-and-conditions" class="text-gray-400 hover:text-white transition-colors duration-200">
                Terms of Service
              </a>
              <!-- <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                Cookie Policy
              </a> -->
            </div>
          </div>
        </div>
      </div>
    </footer>
</body>

</html>