<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Review</title>
<script src="https://cdn.tailwindcss.com"></script>

<style>
body {
    background: linear-gradient(135deg, #0f172a, #1e293b);
}
.fade-in {
    animation: fadeIn 0.8s ease-in-out;
}
@keyframes fadeIn {
    from {opacity: 0; transform: translateY(20px);}
    to {opacity: 1; transform: translateY(0);}
}
</style>

</head>

<body class="text-white min-h-screen flex items-center justify-center p-6">

<div class="bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-xl w-full max-w-xl fade-in">

    <h2 class="text-3xl font-bold mb-6 text-center">✍️ Add Review</h2>

    <form id="reviewForm">
        
        <!-- Product ID -->
        <input type="text" id="product_id" placeholder="Product ID"
            class="w-full p-3 mb-3 rounded-lg bg-gray-800 outline-none">

        <!-- AID -->
        <input type="text" id="aid" placeholder="AID (Product Code)"
            class="w-full p-3 mb-3 rounded-lg bg-gray-800">

        <!-- UID -->
        <input type="text" id="uid" placeholder="User UID"
            class="w-full p-3 mb-4 rounded-lg bg-gray-800">

        <!-- Rating -->
        <div class="mb-4">
            <p class="mb-2">Rating:</p>
            <div id="stars" class="text-3xl cursor-pointer text-gray-400"></div>
        </div>

        <!-- Comment -->
        <textarea id="comment" placeholder="Write your review..."
            class="w-full p-3 mb-4 rounded-lg bg-gray-800"></textarea>

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

<script>

const BASE_URL = "https://api.liwaas.com/api"; // 🔁 change this

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

    const token = "96|d1aZrpxcdq1XcBFZcW0fJ2Stu8iCyfD41yOzVALSa8b0d2d8";

    const formData = new FormData();

    // ✅ REQUIRED FIELDS (as per your API)
    formData.append("products_id", document.getElementById("product_id").value);
    formData.append("aid", document.getElementById("aid").value);
    formData.append("uid", document.getElementById("uid").value);
    formData.append("total_star", selectedRating);
    formData.append("comments", document.getElementById("comment").value);

    // ✅ FILE FIELD NAME FIXED (IMPORTANT)
    const files = document.getElementById("images").files;
    for (let i = 0; i < files.length; i++) {
        formData.append("upload_images[]", files[i]); // ⚠ IMPORTANT CHANGE
    }

    try {
        const res = await fetch(`${BASE_URL}/customer/reviews/create`, {
            method: "POST",
            headers: {
                "Authorization": "Bearer " + token
            },
            body: formData
        });

        const data = await res.json();

        if(data.success){
            alert("✅ Review submitted successfully!");
            location.reload();
        } else {
            alert("❌ " + data.message);
        }

    } catch(err){
        console.error(err);
        alert("Server error!");
    }
});

</script>

</body>
</html>