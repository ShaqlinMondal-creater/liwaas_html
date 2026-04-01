<!DOCTYPE html>
<html lang="en">
    <?php
        $config = include('admin/configs/config.php');
        $baseUrl = $config['API_BASE_URL'];
    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reviews - Liwaas Crafted for You</title>
        <meta content="assets/brand/fav_icon.png" property="og:image" />
        <link href="assets/brand/fav_icon.png" rel="apple-touch-icon" sizes="180x180" />
        <link href="assets/brand/fav_icon.png" rel="icon" sizes="32x32" type="image/png" />
        <link href="assets/brand/fav_icon.png" rel="icon" sizes="16x16" type="image/png" />
        <link href="assets/brand/fav_icon.png" rel="shortcut icon" />
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.cdnfonts.com/css/shadeerah-demo" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
        <style>
            body { font-family: 'Shadeerah Demo', sans-serif !important; }
                        
            .glass-effect {
                backdrop-filter: blur(16px);
                background: rgba(255, 255, 255, 0.1);
                /* border: 1px solid rgba(255, 255, 255, 0.2); */
            }
        </style>
    </head>

    <body class="relative min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('assets/brand/liwaas_logo_Black.jpg');">
        <!-- Background Blur Overlay -->
        <div class="absolute inset-0 bg-black/50 backdrop-blur-sm z-0"></div>

        <!-- Main Content -->
        <div class="relative w-full z-10 min-h-screen flex items-center justify-center px-0 lg:px-16">

            <div class="bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-xl w-full max-w-xl fade-in">

                <h2 class="text-3xl font-bold mb-6 text-center text-gray-100">✍️ Add Review</h2>

                <form id="reviewForm">
                    
                    <!-- Product ID -->
                    <input type="text" id="product_id" placeholder="Product ID"
                        class="w-full p-3 mb-3 rounded-lg bg-gray-100 outline-none">

                    <!-- AID -->
                    <input type="text" id="aid" placeholder="AID (Product Code)"
                        class="w-full p-3 mb-3 rounded-lg bg-gray-100">

                    <!-- UID -->
                    <input type="text" id="uid" placeholder="User UID"
                        class="w-full p-3 mb-4 rounded-lg bg-gray-100">

                    <!-- Rating -->
                    <div class="mb-4">
                        <p class="mb-2">Rating:</p>
                        <div id="stars" class="text-3xl cursor-pointer text-gray-400"></div>
                    </div>

                    <!-- Comment -->
                    <textarea id="comment" placeholder="Write your review..."
                        class="w-full p-3 mb-4 rounded-lg bg-gray-100"></textarea>

                    <!-- Image Upload -->
                    <input type="file" id="images" multiple class="w-full mb-4">

                    <!-- Preview -->
                    <div id="preview" class="flex gap-2 mb-4"></div>

                    <button type="submit"
                        class="w-full bg-pink-500 hover:bg-pink-600 p-3 rounded-lg transition">
                        Submit Review 🚀
                    </button>
                </form>

            </div>

            </div>
        </div>

        <div id="successPopup" class="fixed inset-0 bg-black bg-opacity-70 hidden items-center justify-center z-50">
            <div class="bg-white p-8 rounded-xl text-center shadow-xl animate-bounce">
                <h2 class="text-2xl font-bold text-green-600 mb-2">🎉 Success!</h2>
                <p class="text-gray-700">Review submitted successfully</p>
            </div>
        </div>

    <script>

        const urlParams = new URLSearchParams(window.location.search);

        // GET PARAMS
        const param_product = urlParams.get("product_id");
        const param_aid = urlParams.get("aid");
        const param_uid = urlParams.get("uid");
        const param_user = urlParams.get("user");

        // AUTO FILL INPUTS
        if(param_product) document.getElementById("product_id").value = param_product;
        if(param_aid) document.getElementById("aid").value = param_aid;
        if(param_uid) document.getElementById("uid").value = param_uid;

        const BASE_URL = "<?php echo $baseUrl; ?>/api"; // 🔁 change this

        let selectedRating = 0;

        // ⭐ STAR SYSTEM
        const starsContainer = document.getElementById("stars");
        starsContainer.innerHTML = [1,2,3,4,5].map(i =>
            `<span data-value="${i}" class="star cursor-pointer text-gray-400">★</span>`
        ).join("");

        document.querySelectorAll(".star").forEach(star => {
            star.addEventListener("click", function () {
                selectedRating = this.dataset.value;
                updateStars();
            });
        });                                                                                                             

        function updateStars() {
            document.querySelectorAll(".star").forEach(star => {
                star.classList.toggle("text-yellow-400", star.dataset.value <= selectedRating);
                star.classList.toggle("text-gray-400", star.dataset.value > selectedRating);
            });
        }

        // 📸 IMAGE PREVIEW
        document.getElementById("images").addEventListener("change", function () {
            const preview = document.getElementById("preview");
            preview.innerHTML = "";

            Array.from(this.files).forEach(file => {
                const reader = new FileReader();
                reader.onload = e => {
                    preview.innerHTML += `<img src="${e.target.result}" class="w-16 h-16 object-cover rounded">`;
                };
                reader.readAsDataURL(file);
            });
        });

        // 🚀 SUBMIT REVIEW (UPDATED API)
        document.getElementById("reviewForm").addEventListener("submit", async function(e){
            e.preventDefault();

            const token = localStorage.getItem("auth_token");

            const formData = new FormData();

            formData.append("products_id", document.getElementById("product_id").value);
            formData.append("aid", document.getElementById("aid").value);
            formData.append("uid", document.getElementById("uid").value);
            formData.append("total_star", selectedRating);
            formData.append("comments", document.getElementById("comment").value);

            // 📸 images
            const files = document.getElementById("images").files;
            for (let i = 0; i < files.length; i++) {
                formData.append("upload_images[]", files[i]);
            }

            // 🔥 USER LOGIC
            if(!token)
            {
                formData.append("user", param_user ? param_user : "temp_user");
            }

            try {

                const res = await fetch(`${BASE_URL}/reviews/create`, {
                    method: "POST",
                    headers: token ? {
                        "Authorization": "Bearer " + token
                    } : {}, // ❗ no header if no token
                    body: formData
                });

                const data = await res.json();

                if(data.success){
                    showSuccessAndRedirect();
                } else {
                    alert("❌ " + data.message);
                }

            } catch(err){
                console.error(err);
                alert("Server error!");
            }
        });

        function showSuccessAndRedirect()
        {
            // 🎉 blast effect
            confetti({
                particleCount: 150,
                spread: 90,
                origin: { y: 0.6 }
            });

            const popup = document.getElementById("successPopup");

            popup.classList.remove("hidden");
            popup.classList.add("flex");

            setTimeout(() => {
                window.location.href = "https://liwaas.com";
            }, 2000);
        }

    </script>

</body>
</html>