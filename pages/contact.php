<base href="../">
<?php include("../header.php"); ?>

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-800 text-white py-20">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="relative max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-7xl font-bold mb-6">Contact Us</h1>
        <p class="text-xl md:text-2xl opacity-90 max-w-3xl mx-auto">
            We’re here to help. Get in touch with Liwaas.
        </p>
    </div>
</section>

<!-- Contact Content -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">

        <!-- Intro -->
        <div class="mb-12 p-6 bg-blue-50 rounded-lg border-l-4 border-blue-500">
            <p class="text-blue-800 font-semibold mb-2">Customer Support</p>
            <p class="text-blue-700">
                Have questions about your order, shipping, returns, or products?  
                Our support team usually responds within 24–48 business hours.
            </p>
        </div>

        <div class="div">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Get in Touch</h2>
            <p class="text-gray-600 mb-6 leading-relaxed">
                You can reach out to us using any of the contact methods below. We typically respond within 24–48
                business hours.
            </p>
        </div>
        <!-- Contact Cards -->
        <div class="grid md:grid-cols-2 gap-8 mb-16">

            <!-- Email -->
            <div class="bg-gray-50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                  d="M3 8l9 6 9-6M21 8v8a2 2 0 01-2 2H5a2 2 0 01-2-2V8"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">Email Support</h3>
                </div>
                <p class="text-gray-600 mb-2"><strong>Email:</strong> support@liwaas.com</p>
                <p class="text-gray-600">For order queries, returns, refunds, and general support.</p>
            </div>

            <!-- Phone -->
            <div class="bg-gray-50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                  d="M3 5a2 2 0 012-2h3l2 5-3 2a11 11 0 005 5l2-3 5 2v3a2 2 0 01-2 2A17 17 0 013 5z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">Phone Support</h3>
                </div>
                <p class="text-gray-600 mb-2"><strong>Phone:</strong><?php echo $basePhone; ?></p>
                <p class="text-gray-600">Monday to Saturday, 10:00 AM – 6:00 PM IST.</p>
            </div>

            <!-- Address -->
            <div class="bg-gray-50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5s-3 1.343-3 3 1.343 3 3 3z"/>
                            <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                  d="M19.5 11c0 7-7.5 11-7.5 11S4.5 18 4.5 11a7.5 7.5 0 1115 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">Business Address</h3>
                </div>
                <p class="text-gray-600 mb-2"><strong>Address:</strong><?php echo $baseAddress; ?>, India</p>
                <p class="text-gray-600">Registered business location.</p>
            </div>

            <!-- Social -->
            <div class="bg-gray-50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-pink-100 rounded-full flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                  d="M7 10v4m0 0l2-2m-2 2l-2-2M17 14V10m0 0l-2 2m2-2l2 2M12 6h.01M12 18h.01"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">Social Media</h3>
                </div>
                <p class="text-gray-600 mb-2"><strong>Instagram:</strong> @liwaas</p>
                <p class="text-gray-600">DM us for quick responses.</p>
            </div>

        </div>

        <!-- Support Hours -->
        <div class="bg-gray-50 p-8 rounded-2xl shadow-lg mb-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Support Hours</h2>
            <ul class="list-disc list-inside text-gray-600 space-y-2">
                <li>Monday to Saturday: 10:00 AM – 6:00 PM IST</li>
                <li>Sundays & Public Holidays: Closed</li>
            </ul>
        </div>

        <!-- Footer Note -->
        <div class="bg-indigo-50 p-6 rounded-lg border-l-4 border-indigo-500">
            <p class="text-indigo-700">
                For faster support, please include your <strong>Order ID</strong> in all communications.
            </p>
        </div>

    </div>
</section>

<!-- Quick Links Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Quick Links</h2>
            <p class="text-xl text-gray-600">Find what you're looking for</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <a href="pages/privacy"
                class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 text-center group">
                <div
                    class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Privacy Policy</h3>
                <p class="text-gray-600 text-sm">Learn how we protect your data</p>
            </a>

            <a href="#support"
                class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 text-center group">
                <div
                    class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Support Center</h3>
                <p class="text-gray-600 text-sm">Get help with your orders</p>
            </a>

            <a href="pages/terms"
                class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 text-center group">
                <div
                    class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Terms & Conditions</h3>
                <p class="text-gray-600 text-sm">Read our terms of service</p>
            </a>

            <a href="#policy"
                class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 text-center group">
                <div
                    class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                        </path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Return Policy</h3>
                <p class="text-gray-600 text-sm">Easy returns and exchanges</p>
            </a>
        </div>
    </div>
</section>

<!-- Contact Form -->
<section class="py-20 bg-white">
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
                        <input type="text" id="firstName" name="firstName"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors"
                            placeholder="John">
                    </div>
                    <div>
                        <label for="lastName" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                        <input type="text" id="lastName" name="lastName"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors"
                            placeholder="Doe">
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors"
                            placeholder="john@example.com">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                        <input type="tel" id="phone" name="phone"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors"
                            placeholder="+1 (555) 123-4567">
                    </div>
                </div>
                <div>
                    <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                    <select id="subject" name="subject"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors">
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
                    <textarea id="message" name="message" rows="6"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors resize-none"
                        placeholder="Tell us how we can help you..."></textarea>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" id="newsletter" name="newsletter"
                        class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                    <label for="newsletter" class="ml-2 block text-sm text-gray-700">
                        I'd like to receive updates about new products and promotions
                    </label>
                </div>
                <button type="submit"
                    class="w-full bg-indigo-600 text-white py-4 px-6 rounded-lg font-semibold hover:bg-indigo-700 transition-colors duration-300 transform hover:scale-105">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Map and FAQ Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Map Section -->
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Find Us</h2>
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="h-96 bg-gray-200 relative">
                        <!-- Google Maps Embed -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9663095343008!2d-74.00425878459418!3d40.74844097932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259bf5c1654f3%3A0xc80f9cfce5383d5d!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1635959655654!5m2!1sen!2sus"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="absolute inset-0">
                        </iframe>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Liwaas Flagship Store</h3>
                        <p class="text-gray-600 mb-4"><?php echo $baseAddress; ?>1</p>
                        <div class="space-y-2 text-sm text-gray-600">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-indigo-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Mon-Fri: 9:00 AM - 8:00 PM</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-indigo-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Sat-Sun: 10:00 AM - 6:00 PM</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-indigo-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                                <span><?php echo $basePhone; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Frequently Asked Questions</h2>
                <div class="space-y-4">
                    <div class="bg-white rounded-lg shadow-md">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold text-gray-800 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition-colors rounded-lg">
                            What are your shipping options and delivery times?
                        </button>
                        <div class="px-6 pb-4 text-gray-600">
                            We offer standard shipping (5-7 business days) and express shipping (2-3 business days).
                            Free shipping is available on orders over $99.
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold text-gray-800 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition-colors rounded-lg">
                            What is your return and exchange policy?
                        </button>
                        <div class="px-6 pb-4 text-gray-600">
                            We accept returns within 30 days of purchase. Items must be unworn, unwashed, and in
                            original condition with tags attached.
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold text-gray-800 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition-colors rounded-lg">
                            How do I track my order?
                        </button>
                        <div class="px-6 pb-4 text-gray-600">
                            Once your order ships, you'll receive a tracking number via email. You can also track your
                            order in your account dashboard.
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold text-gray-800 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition-colors rounded-lg">
                            Do you offer international shipping?
                        </button>
                        <div class="px-6 pb-4 text-gray-600">
                            Yes, we ship to over 50 countries worldwide. International shipping rates and delivery times
                            vary by destination.
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold text-gray-800 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition-colors rounded-lg">
                            How can I contact customer service?
                        </button>
                        <div class="px-6 pb-4 text-gray-600">
                            You can reach us via email at support@liwaas.com, phone at +1 (555) 123-4567, or through our
                            live chat feature on the website.
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold text-gray-800 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition-colors rounded-lg">
                            Do you have a size guide?
                        </button>
                        <div class="px-6 pb-4 text-gray-600">
                            Yes, we have detailed size guides for all our products. You can find the size guide on each
                            product page or in our help section.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Toggle Script -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const faqButtons = document.querySelectorAll('.bg-white button');

        faqButtons.forEach(button => {
            button.addEventListener('click', function () {
                const content = this.nextElementSibling;
                const isVisible = !content.classList.contains('hidden');

                // Hide all FAQ answers
                faqButtons.forEach(btn => {
                    const answer = btn.nextElementSibling;
                    answer.classList.add('hidden');
                });

                // Show clicked answer if it was hidden
                if (!isVisible) {
                    content.classList.remove('hidden');
                }
            });
        });
    });
</script>

<?php include("../footer.php"); ?>
