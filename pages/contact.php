<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Liwaas Crafted for You</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.cdnfonts.com/css/shadeerah-demo" rel="stylesheet" />
    <style>
        body { font-family: 'Shadeerah Demo', sans-serif !important; }
        .animate-ping-slow { animation: ping 2s cubic-bezier(0, 0, 0.2, 1) infinite; }
        @keyframes ping {
            75%, 100% { transform: scale(2); opacity: 0; }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur px-4 py-3 shadow-md ring-1 ring-gray-200">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <a href="index.html" class="flex items-center space-x-2">
                <img src="https://images.pexels.com/photos/5632402/pexels-photo-5632402.jpeg" alt="Liwaas Logo" class="h-10 md:h-14 rounded-full">
            </a>
            <ul class="hidden md:flex items-center space-x-8 font-semibold tracking-wide">
                <li><a href="index.html" class="text-gray-800 hover:text-indigo-600 transition">Home</a></li>
                <li><a href="shop.html" class="text-gray-800 hover:text-indigo-600 transition">Shop</a></li>
                <li><a href="about.html" class="text-gray-800 hover:text-indigo-600 transition">About</a></li>
                <li><a href="contact.html" class="text-indigo-600 font-bold">Contact</a></li>
                <li><a href="blogs.html" class="text-gray-800 hover:text-indigo-600 transition">Blog</a></li>
            </ul>
            <button class="md:hidden flex flex-col justify-center w-8 h-8 relative">
                <span class="block w-6 h-0.5 bg-gray-700 mb-1.5"></span>
                <span class="block w-6 h-0.5 bg-gray-700 mb-1.5"></span>
                <span class="block w-6 h-0.5 bg-gray-700"></span>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-800 text-white py-20">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-7xl font-bold mb-6">Contact Us</h1>
            <p class="text-xl md:text-2xl opacity-90 max-w-3xl mx-auto">We'd love to hear from you. Get in touch with our team.</p>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8 mb-16">
                <div class="text-center group">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Visit Our Store</h3>
                    <p class="text-gray-600">123 Fashion Street<br>New York, NY 10001<br>United States</p>
                </div>
                <div class="text-center group">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Call Us</h3>
                    <p class="text-gray-600">+1 (555) 123-4567<br>Mon-Fri: 9AM-6PM EST<br>Sat-Sun: 10AM-4PM EST</p>
                </div>
                <div class="text-center group">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Email Us</h3>
                    <p class="text-gray-600">hello@liwaas.com<br>support@liwaas.com<br>press@liwaas.com</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Send Us a Message</h2>
                <p class="text-xl text-gray-600">Have a question or feedback? We'd love to hear from you.</p>
            </div>
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <form class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="firstName" class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                            <input type="text" id="firstName" name="firstName" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors" placeholder="John">
                        </div>
                        <div>
                            <label for="lastName" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                            <input type="text" id="lastName" name="lastName" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors" placeholder="Doe">
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors" placeholder="john@example.com">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors" placeholder="+1 (555) 123-4567">
                        </div>
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                        <select id="subject" name="subject" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors">
                            <option value="">Select a subject</option>
                            <option value="general">General Inquiry</option>
                            <option value="support">Customer Support</option>
                            <option value="orders">Order Issues</option>
                            <option value="returns">Returns & Exchanges</option>
                            <option value="wholesale">Wholesale Inquiry</option>
                            <option value="press">Press & Media</option>
                        </select>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                        <textarea id="message" name="message" rows="6" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors resize-none" placeholder="Tell us how we can help you..."></textarea>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="newsletter" name="newsletter" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="newsletter" class="ml-2 block text-sm text-gray-700">
                            I'd like to receive updates about new products and promotions
                        </label>
                    </div>
                    <button type="submit" class="w-full bg-indigo-600 text-white py-4 px-6 rounded-lg font-semibold hover:bg-indigo-700 transition-colors duration-300 transform hover:scale-105">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Frequently Asked Questions</h2>
                <p class="text-xl text-gray-600">Quick answers to common questions</p>
            </div>
            <div class="space-y-4">
                <div class="border border-gray-200 rounded-lg">
                    <button class="w-full px-6 py-4 text-left font-semibold text-gray-800 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition-colors">
                        What are your shipping options and delivery times?
                    </button>
                    <div class="px-6 pb-4 text-gray-600">
                        We offer standard shipping (5-7 business days) and express shipping (2-3 business days). Free shipping is available on orders over $99.
                    </div>
                </div>
                <div class="border border-gray-200 rounded-lg">
                    <button class="w-full px-6 py-4 text-left font-semibold text-gray-800 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition-colors">
                        What is your return and exchange policy?
                    </button>
                    <div class="px-6 pb-4 text-gray-600">
                        We accept returns within 30 days of purchase. Items must be unworn, unwashed, and in original condition with tags attached.
                    </div>
                </div>
                <div class="border border-gray-200 rounded-lg">
                    <button class="w-full px-6 py-4 text-left font-semibold text-gray-800 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition-colors">
                        How do I track my order?
                    </button>
                    <div class="px-6 pb-4 text-gray-600">
                        Once your order ships, you'll receive a tracking number via email. You can also track your order in your account dashboard.
                    </div>
                </div>
                <div class="border border-gray-200 rounded-lg">
                    <button class="w-full px-6 py-4 text-left font-semibold text-gray-800 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition-colors">
                        Do you offer international shipping?
                    </button>
                    <div class="px-6 pb-4 text-gray-600">
                        Yes, we ship to over 50 countries worldwide. International shipping rates and delivery times vary by destination.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 text-sm pt-10 pb-24 md:pb-6 mt-auto rounded-t-2xl">
        <div class="max-w-7xl mx-auto px-4 space-y-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between border-t border-gray-700 pt-8 gap-4">
                <div>
                    <h3 class="text-white font-semibold text-base">Subscribe to our newsletter</h3>
                    <p class="mt-1 text-sm text-gray-400">The latest news, articles, and resources, sent to your inbox weekly.</p>
                </div>
                <form class="flex flex-col sm:flex-row gap-2 w-full sm:w-auto">
                    <input type="email" placeholder="Enter your email" class="bg-gray-800 text-white border border-gray-700 rounded-full px-4 py-2 w-full sm:w-64 focus:outline-none focus:ring focus:border-indigo-500">
                    <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded-full hover:bg-indigo-600 transition w-full sm:w-auto text-center">Subscribe</button>
                </form>
            </div>
            <div class="border-t border-gray-700 pt-6 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-sm text-gray-500 text-center">&copy; 2025 Liwaas, Inc. All rights reserved.</p>
                <div class="flex gap-6 justify-center">
                    <a href="#" class="hover:text-white transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22 12a10 10 0 10-11.47 9.87v-6.99h-2.1v-2.88h2.1V9.42c0-2.07 1.23-3.22 3.12-3.22.9 0 1.84.16 1.84.16v2.02h-1.04c-1.03 0-1.35.64-1.35 1.3v1.56h2.3l-.37 2.88h-1.93v6.99A10 10 0 0022 12z"/>
                        </svg>
                    </a>
                    <a href="#" class="hover:text-white transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53A4.48 4.48 0 0022.43 2a9.07 9.07 0 01-2.88 1.1A4.52 4.52 0 0016.5 2c-2.49 0-4.5 2.24-4.5 5a4.9 4.9 0 00.12 1.14A12.94 12.94 0 013 4.1a4.5 4.5 0 001.39 6 4.52 4.52 0 01-2.05-.57v.06a4.52 4.52 0 003.64 4.43A4.48 4.48 0 013 14v.06A4.52 4.52 0 007.5 18a9.05 9.05 0 01-5.58 2c-.36 0-.71-.02-1.05-.06A12.94 12.94 0 008 21c8.28 0 12.8-7.42 12.8-13.85 0-.21 0-.42-.02-.63A9.14 9.14 0 0023 3z"/>
                        </svg>
                    </a>
                    <a href="#" class="hover:text-white transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>