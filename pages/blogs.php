<base href="../">
<?php include("../header.php"); ?>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-black via-orange-900 to-orange-400 text-white py-20">
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
    <!-- <section class="py-20 bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-800 text-white">
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
    </section> -->

    <!-- Footer -->
<?php include("../footer.php"); ?>