<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Liwaas Crafted for You</title>
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
                <li><a href="contact.html" class="text-gray-800 hover:text-indigo-600 transition">Contact</a></li>
                <li><a href="blogs.html" class="text-indigo-600 font-bold">Blog</a></li>
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
            <h1 class="text-5xl md:text-7xl font-bold mb-6">Fashion Blog</h1>
            <p class="text-xl md:text-2xl opacity-90 max-w-3xl mx-auto">Discover the latest trends, styling tips, and fashion insights</p>
        </div>
    </section>

    <!-- Featured Article -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="mb-12">
                <span class="inline-block bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm font-semibold mb-4">Featured Article</span>
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-4xl font-bold text-gray-800 mb-6">The Future of Sustainable Fashion: What You Need to Know</h2>
                        <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                            Sustainability is no longer just a trend—it's the future of fashion. Discover how brands like Liwaas are leading the charge in creating beautiful, eco-friendly clothing that doesn't compromise on style or quality.
                        </p>
                        <div class="flex items-center space-x-4 mb-6">
                            <img src="https://images.pexels.com/photos/1239291/pexels-photo-1239291.jpeg" alt="Author" class="w-12 h-12 rounded-full">
                            <div>
                                <p class="font-semibold text-gray-800">Sarah Johnson</p>
                                <p class="text-gray-600 text-sm">Fashion Editor • March 15, 2025</p>
                            </div>
                        </div>
                        <a href="#" class="inline-flex items-center bg-indigo-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-indigo-700 transition-colors">
                            Read Full Article
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="relative">
                        <img src="https://images.pexels.com/photos/6626903/pexels-photo-6626903.jpeg" alt="Sustainable Fashion" class="rounded-2xl shadow-2xl">
                        <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-green-400 rounded-full opacity-20"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-wrap justify-center gap-4">
                <button class="bg-white px-6 py-3 rounded-full font-semibold text-indigo-600 border-2 border-indigo-600 hover:bg-indigo-600 hover:text-white transition-colors">All Posts</button>
                <button class="bg-white px-6 py-3 rounded-full font-semibold text-gray-600 hover:text-indigo-600 transition-colors">Fashion Trends</button>
                <button class="bg-white px-6 py-3 rounded-full font-semibold text-gray-600 hover:text-indigo-600 transition-colors">Styling Tips</button>
                <button class="bg-white px-6 py-3 rounded-full font-semibold text-gray-600 hover:text-indigo-600 transition-colors">Sustainability</button>
                <button class="bg-white px-6 py-3 rounded-full font-semibold text-gray-600 hover:text-indigo-600 transition-colors">Behind the Scenes</button>
                <button class="bg-white px-6 py-3 rounded-full font-semibold text-gray-600 hover:text-indigo-600 transition-colors">Brand News</button>
            </div>
        </div>
    </section>

    <!-- Blog Grid -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Blog Post 1 -->
                <article class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 group">
                    <div class="relative overflow-hidden">
                        <img src="https://images.pexels.com/photos/934070/pexels-photo-934070.jpeg" alt="Spring Fashion Trends" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 left-4">
                            <span class="bg-yellow-400 text-black px-3 py-1 rounded-full text-xs font-semibold">Fashion Trends</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-indigo-600 transition-colors">Spring 2025: The Colors That Will Define the Season</h3>
                        <p class="text-gray-600 mb-4 text-sm leading-relaxed">Discover the vibrant palette that's taking over runways and streets this spring. From soft pastels to bold brights...</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img src="https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg" alt="Author" class="w-8 h-8 rounded-full">
                                <span class="text-gray-600 text-sm">Emma Wilson</span>
                            </div>
                            <span class="text-gray-500 text-sm">March 12, 2025</span>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 2 -->
                <article class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 group">
                    <div class="relative overflow-hidden">
                        <img src="https://images.pexels.com/photos/1336873/pexels-photo-1336873.jpeg" alt="Styling Tips" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 left-4">
                            <span class="bg-green-400 text-white px-3 py-1 rounded-full text-xs font-semibold">Styling Tips</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-indigo-600 transition-colors">How to Build a Capsule Wardrobe That Actually Works</h3>
                        <p class="text-gray-600 mb-4 text-sm leading-relaxed">Master the art of minimalist dressing with our comprehensive guide to creating a versatile capsule wardrobe...</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img src="https://images.pexels.com/photos/1181519/pexels-photo-1181519.jpeg" alt="Author" class="w-8 h-8 rounded-full">
                                <span class="text-gray-600 text-sm">Alex Chen</span>
                            </div>
                            <span class="text-gray-500 text-sm">March 10, 2025</span>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 3 -->
                <article class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 group">
                    <div class="relative overflow-hidden">
                        <img src="https://images.pexels.com/photos/190819/pexels-photo-190819.jpeg" alt="Accessories Guide" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 left-4">
                            <span class="bg-purple-400 text-white px-3 py-1 rounded-full text-xs font-semibold">Accessories</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-indigo-600 transition-colors">The Power of Accessories: Transform Any Outfit</h3>
                        <p class="text-gray-600 mb-4 text-sm leading-relaxed">Learn how the right accessories can elevate your style and transform basic outfits into statement looks...</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img src="https://images.pexels.com/photos/1239291/pexels-photo-1239291.jpeg" alt="Author" class="w-8 h-8 rounded-full">
                                <span class="text-gray-600 text-sm">Maria Garcia</span>
                            </div>
                            <span class="text-gray-500 text-sm">March 8, 2025</span>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 4 -->
                <article class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 group">
                    <div class="relative overflow-hidden">
                        <img src="https://images.pexels.com/photos/46710/pexels-photo-46710.jpeg" alt="Sustainable Fashion" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 left-4">
                            <span class="bg-green-500 text-white px-3 py-1 rounded-full text-xs font-semibold">Sustainability</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-indigo-600 transition-colors">Eco-Friendly Fabrics: A Complete Guide</h3>
                        <p class="text-gray-600 mb-4 text-sm leading-relaxed">Explore sustainable fabric options that are better for the planet without compromising on comfort or style...</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img src="https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg" alt="Author" class="w-8 h-8 rounded-full">
                                <span class="text-gray-600 text-sm">David Kim</span>
                            </div>
                            <span class="text-gray-500 text-sm">March 5, 2025</span>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 5 -->
                <article class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 group">
                    <div class="relative overflow-hidden">
                        <img src="https://images.pexels.com/photos/267301/pexels-photo-267301.jpeg" alt="Behind the Scenes" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 left-4">
                            <span class="bg-indigo-500 text-white px-3 py-1 rounded-full text-xs font-semibold">Behind the Scenes</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-indigo-600 transition-colors">Inside Our Design Studio: From Sketch to Runway</h3>
                        <p class="text-gray-600 mb-4 text-sm leading-relaxed">Take an exclusive look at our creative process and meet the talented team behind Liwaas collections...</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img src="https://images.pexels.com/photos/1181519/pexels-photo-1181519.jpeg" alt="Author" class="w-8 h-8 rounded-full">
                                <span class="text-gray-600 text-sm">Sophie Taylor</span>
                            </div>
                            <span class="text-gray-500 text-sm">March 3, 2025</span>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 6 -->
                <article class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 group">
                    <div class="relative overflow-hidden">
                        <img src="https://images.pexels.com/photos/965989/pexels-photo-965989.jpeg" alt="Brand News" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 left-4">
                            <span class="bg-red-500 text-white px-3 py-1 rounded-full text-xs font-semibold">Brand News</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-indigo-600 transition-colors">Liwaas Partners with Local Artisans for New Collection</h3>
                        <p class="text-gray-600 mb-4 text-sm leading-relaxed">We're excited to announce our collaboration with talented local artisans to create unique, handcrafted pieces...</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img src="https://images.pexels.com/photos/1239291/pexels-photo-1239291.jpeg" alt="Author" class="w-8 h-8 rounded-full">
                                <span class="text-gray-600 text-sm">Sarah Johnson</span>
                            </div>
                            <span class="text-gray-500 text-sm">March 1, 2025</span>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button class="bg-indigo-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-indigo-700 transition-colors">
                    Load More Articles
                </button>
            </div>
        </div>
    </section>

    <!-- Newsletter Signup -->
    <section class="py-20 bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-800 text-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-4">Stay Updated</h2>
            <p class="text-xl opacity-90 mb-8">Subscribe to our newsletter for the latest fashion insights and exclusive content</p>
            <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                <input type="email" placeholder="Enter your email" class="flex-1 px-6 py-3 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-white">
                <button type="submit" class="bg-white text-indigo-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                    Subscribe
                </button>
            </form>
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