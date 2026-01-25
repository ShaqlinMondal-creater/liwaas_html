<base href="../">
<?php include("../header.php"); ?>
    <!-- Tiny glow animation -->
    <style>
        @keyframes pulse-glow {
            0%,100% { box-shadow: 0 0 0 0 rgba(34,197,94,.45); }
            50%     { box-shadow: 0 0 0 12px rgba(34,197,94,0); }
        }
        .glow-badge { animation: pulse-glow 2.5s ease-out infinite; }
    </style>
    <div class="fixed inset-0 -z-10 pointer-events-none">
        <img src="assets/aqeeq_png.png" alt="" class="w-full h-full object-cover blur-xl"
        />
    </div>
    <!-- Main -->
    <main class="max-w-3xl mx-auto px-4 py-14 sm:py-20">
        <!-- Success -->
        <section class="text-center mb-4">
            <div class="w-24 h-24 mx-auto mb-8 rounded-full bg-green-100 flex items-center justify-center glow-badge">
                <i data-lucide="check" class="w-12 h-12 text-green-600"></i>
            </div>
            <h1 class="text-3xl sm:text-4xl font-extrabold mb-3 tracking-tight">
                Order&nbsp;Confirmed!
            </h1>
            <p class="text-gray-600">
                Thank you for your purchase — we’ll email you the shipping confirmation shortly.
            </p>
        </section>

        <!-- Order Card -->
        <section class="bg-white rounded-3xl shadow-lg ring-1 ring-black/5 mb-12 overflow-hidden">
            <header class="px-6 py-5 border-b flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <p class="text-sm text-gray-500 mb-0.5 font-extrabold">Order&nbsp;#12346</p>
                    <p class="font-medium text-gray-800">March&nbsp;20,&nbsp;2024</p>
                </div>
                <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-700">
                    View Order Details →
                </a>
            </header>

            <!-- Items -->
            <ul class="px-6 py-5 divide-y">
                <li class="flex items-center gap-4 py-4 first:pt-0">
                    <img src="https://images.pexels.com/photos/4066293/pexels-photo-4066293.jpeg"
                         alt=""
                         class="w-20 h-20 rounded-lg object-cover" />
                    <div class="flex-1">
                        <h3 class="font-medium">Essential Premium T-Shirt</h3>
                        <p class="text-sm text-gray-500">Black • Size M</p>
                    </div>
                    <div class="text-right space-y-0.5">
                        <span class="text-sm text-gray-500 block">Qty: 1</span>
                        <span class="font-medium block">$49.99</span>
                    </div>
                </li>
                <li class="flex items-center gap-4 py-4">
                    <img src="https://images.pexels.com/photos/2385477/pexels-photo-2385477.jpeg"
                         alt=""
                         class="w-20 h-20 rounded-lg object-cover" />
                    <div class="flex-1">
                        <h3 class="font-medium">Premium Wool Sweater</h3>
                        <p class="text-sm text-gray-500">Gray • Size L</p>
                    </div>
                    <div class="text-right space-y-0.5">
                        <span class="text-sm text-gray-500 block">Qty: 1</span>
                        <span class="font-medium block">$89.99</span>
                    </div>
                </li>
            </ul>

            <!-- Summary -->
            <footer class="px-6 py-5 bg-gray-50">
                <dl class="space-y-2 text-sm">
                    <div class="flex justify-between">
                        <dt class="text-gray-600">Subtotal</dt>
                        <dd>$139.98</dd>
                    </div>
                    <div class="flex justify-between">
                        <dt class="text-gray-600">Shipping</dt>
                        <dd class="text-green-600">Free</dd>
                    </div>
                    <div class="flex justify-between">
                        <dt class="text-gray-600">Tax</dt>
                        <dd>$14.00</dd>
                    </div>
                    <div class="flex justify-between pt-2 border-t font-semibold text-gray-800">
                        <dt>Total</dt>
                        <dd>$153.98</dd>
                    </div>
                </dl>
            </footer>
        </section>

        <!-- Shipping Info -->
        <section class="bg-white rounded-3xl shadow-lg ring-1 ring-black/5 mb-2">
            <div class="px-6 py-6">
                <h2 class="font-medium mb-4 text-gray-800 font-extrabold">Shipping Information</h2>
                <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                    <div>
                        <h3 class="font-medium text-gray-700 mb-1">Shipping Address</h3>
                        <p>John Doe</p>
                        <p>123 Main St, Apt 4B</p>
                        <p>New York, NY 10001</p>
                        <p>United States</p>
                    </div>
                    <div>
                        <h3 class="font-medium text-gray-700 mb-1">Shipping Method</h3>
                        <p>Standard Shipping</p>
                        <p>Estimated delivery: March 25-27</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Payment Details -->
        <section class="bg-white rounded-3xl shadow-lg ring-1 ring-black/5 mb-16">
            <div class="px-6 py-6">
                <h2 class="font-medium mb-4 text-gray-800 font-extrabold">Payment Details</h2>
                <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600">
                    <div>
                        <h3 class="font-medium text-gray-700 mb-1">Payment Method</h3>
                        <p class="flex items-center gap-2">
                            <i data-lucide="credit-card" class="w-4 h-4 text-blue-600"></i>
                            Visa •••• 4242
                        </p>
                    </div>
                    <div>
                        <h3 class="font-medium text-gray-700 mb-1">Transaction</h3>
                        <p>ID: <span class="font-medium text-gray-800 font-extrabold">9Q1D23X8P3</span></p>
                        <p>Status: <span class="text-green-700 font-medium font-extrabold">Paid</span></p>
                    </div>
                    <div>
                        <h3 class="font-medium text-gray-700 mb-1">Amount Charged</h3>
                        <p class="font-extrabold">$153.98</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Next Steps -->
        <section class="bg-white rounded-3xl shadow-lg ring-1 ring-black/5 mb-16">
            <div class="px-6 py-6">
                <h2 class="font-medium mb-4 text-gray-800">What’s Next?</h2>
                <ol class="space-y-5 text-sm text-gray-600">
                    <li class="flex gap-4">
                        <span class="w-8 h-8 flex items-center justify-center rounded-full bg-blue-100 flex-shrink-0">
                            <i data-lucide="mail" class="w-4 h-4 text-blue-600"></i>
                        </span>
                        We’ve emailed you the order confirmation.
                    </li>
                    <li class="flex gap-4">
                        <span class="w-8 h-8 flex items-center justify-center rounded-full bg-blue-100 flex-shrink-0">
                            <i data-lucide="package" class="w-4 h-4 text-blue-600"></i>
                        </span>
                        Our team is carefully packing your items.
                    </li>
                    <li class="flex gap-4">
                        <span class="w-8 h-8 flex items-center justify-center rounded-full bg-blue-100 flex-shrink-0">
                            <i data-lucide="truck" class="w-4 h-4 text-blue-600"></i>
                        </span>
                        You’ll receive a shipping notification once it’s on the way.
                    </li>
                </ol>
            </div>
        </section>

        <!-- Actions -->
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="/" class="inline-flex items-center justify-center gap-2 px-6 py-3 border border-gray-900 rounded-lg text-sm font-medium hover:bg-gray-100 transition">
                Continue&nbsp;Shopping
            </a>
            <a href="/profile.html" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-gray-900 text-white rounded-lg text-sm font-medium hover:bg-gray-800 transition">
                View Order History
            </a>
        </div>
    </main>

    <script>
        lucide.createIcons();

        // Confetti blast on load
        window.addEventListener('DOMContentLoaded', () => {
            const duration = 1800;
            const end = Date.now() + duration;
            const colors = ['#10b981','#0891b2','#f97316','#ec4899','#6366f1'];
            (function frame() {
                confetti({
                    particleCount: 8,
                    angle: 70,
                    spread: 60,
                    origin: { x: 0.2, y: 0.1 },
                    colors
                });
                confetti({
                    particleCount: 8,
                    angle: 110,
                    spread: 60,
                    origin: { x: 0.8, y: 0.1 },
                    colors
                });
                if (Date.now() < end) requestAnimationFrame(frame);
            })();
        });
    </script>
<?php include("../footer.php"); ?>