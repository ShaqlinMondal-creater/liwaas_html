
<?php include("header.php"); ?>

<!-- 404 Section -->
<section class="relative min-h-[80vh] bg-gradient-to-br from-black via-orange-900 to-orange-500 text-white flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-black/40"></div>

    <!-- Glow Shapes -->
    <div class="absolute -top-32 -right-32 w-96 h-96 bg-orange-500/20 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-yellow-500/20 rounded-full blur-3xl"></div>

    <div class="relative max-w-3xl mx-auto px-6 text-center">

        <!-- Error Code -->
        <h1 class="text-[120px] md:text-[160px] font-extrabold leading-none tracking-tight mb-4">
            404
        </h1>

        <!-- Message -->
        <h2 class="text-3xl md:text-4xl font-bold mb-4">
            Oops! Page Not Found
        </h2>

        <p class="text-lg md:text-xl opacity-90 mb-10 max-w-xl mx-auto">
            The page you’re looking for doesn’t exist, has been moved, or is temporarily unavailable.
            Let’s get you back to something stylish.
        </p>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="./" class="inline-block bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-full font-semibold transition">
                Go to Home
            </a>

            <a href="shop" class="inline-block bg-white/10 hover:bg-white/20 text-white px-8 py-4 rounded-full font-semibold transition backdrop-blur">
                Shop Now
            </a>
        </div>

        <!-- Help Text -->
        <div class="mt-10 text-sm opacity-80">
            If you believe this is an error, please contact  
            <a href="pages/contact-us" class="underline hover:text-orange-300">Support</a>.
        </div>

    </div>
</section>

<?php include("footer.php"); ?>
