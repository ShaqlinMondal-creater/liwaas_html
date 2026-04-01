<?php include 'header.php'; ?>

<div class="max-w-7xl mx-auto px-6 mt-12">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Reviews</h1>
    </div>

    <!-- Filters -->
    <div class="bg-white shadow rounded-xl p-4 mb-6">

        <div class="grid grid-cols-2 md:grid-cols-5 gap-4">

            <input id="product_name" placeholder="Product Name" class="border rounded-lg px-3 py-2">

            <input id="aid" placeholder="AID" class="border rounded-lg px-3 py-2">

            <input id="uid" placeholder="UID" class="border rounded-lg px-3 py-2">

            <input id="user_name" placeholder="User Name" class="border rounded-lg px-3 py-2">

            <select id="total_star" class="border rounded-lg px-3 py-2">
                <option value="">All Stars</option>
                <option value="5">5 ⭐</option>
                <option value="4">4 ⭐</option>
                <option value="3">3 ⭐</option>
                <option value="2">2 ⭐</option>
                <option value="1">1 ⭐</option>
            </select>

        </div>
    </div>

    <!-- Table -->
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
        <div class="overflow-x-auto">

            <table class="min-w-full text-left">

                <thead class="bg-indigo-50">
                    <tr>
                        <th class="px-6 py-3">Product</th>
                        <th class="px-6 py-3">User</th>
                        <th class="px-6 py-3">AID</th>
                        <th class="px-6 py-3">UID</th>
                        <th class="px-6 py-3">Rating</th>
                        <th class="px-6 py-3">Comment</th>
                        <th class="px-6 py-3">Images</th>
                        <th class="px-6 py-3">Action</th>
                    </tr>
                </thead>

                <tbody id="reviewTable"></tbody>

            </table>

        </div>
    </div>

</div>

<!-- IMAGE MODAL -->
<div id="imageModal" class="fixed inset-0 bg-black bg-opacity-70 hidden items-center justify-center z-50">

    <div class="relative">
        <button onclick="closeImageModal()" class="absolute -top-10 right-0 text-white text-2xl">✕</button>

        <img id="modalImage" class="max-h-[80vh] rounded-lg shadow-lg">
    </div>

</div>

<!-- UPDATE REVIEW MODAL -->
<div id="updateModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">

    <div class="bg-white rounded-xl w-full max-w-lg p-6">

        <div class="flex justify-between mb-4">
            <h2 class="text-xl font-bold">Update Review</h2>
            <button onclick="closeUpdateModal()">✕</button>
        </div>

        <input type="hidden" id="u_id">

        <div class="space-y-3">

            <select id="u_star" class="border rounded-lg px-3 py-2 w-full">
                <option value="5">5 ⭐</option>
                <option value="4">4 ⭐</option>
                <option value="3">3 ⭐</option>
                <option value="2">2 ⭐</option>
                <option value="1">1 ⭐</option>
            </select>

            <textarea id="u_comment" class="border rounded-lg px-3 py-2 w-full" placeholder="Comment"></textarea>

            <input type="file" id="u_images" multiple class="border rounded-lg px-3 py-2 w-full">

        </div>

        <div class="flex justify-end mt-4 gap-3">
            <button onclick="closeUpdateModal()" class="bg-gray-200 px-4 py-2 rounded">Cancel</button>
            <button onclick="saveUpdate()" class="bg-indigo-600 text-white px-4 py-2 rounded">Save</button>
        </div>

    </div>

</div>

<script>
    const BASE_URL = "<?= $baseUrl ?>/api";
</script>

<!-- ========================= -->
<!-- API SCRIPT -->
<!-- ========================= -->

<script>
    let debounceTimer;

    function autoFilter()
    {
        clearTimeout(debounceTimer);

        debounceTimer = setTimeout(() => {
            loadReviews();
        }, 400); // smooth delay
    }

    async function fetchReviews(filters)
    {
        const token = localStorage.getItem("auth_token");

        const res = await fetch(BASE_URL + "/reviews/fetch", {
            method: "POST",
            headers: {
                "Content-Type":"application/json",
                "Authorization":"Bearer " + token
            },
            body: JSON.stringify(filters)
        });

        return await res.json();
    }
</script>

<!-- ========================= -->
<!-- UI SCRIPT -->
<!-- ========================= -->

<script>

    let offset = 0;
    let limit = 10;
    let total = 0;

    async function loadReviews()
    {
        const filters = {

            product_name: document.getElementById("product_name").value,
            aid: document.getElementById("aid").value,
            uid: document.getElementById("uid").value,
            user_name: document.getElementById("user_name").value,
            total_star: document.getElementById("total_star").value

        };

        const res = await fetchReviews(filters);

        if(!res.success) return;

        renderReviews(res.data);
    }

    function renderReviews(data)
    {
        const table = document.getElementById("reviewTable");

        table.innerHTML = "";

        data.forEach(item => {

            const stars = "⭐".repeat(item.total_star);

            let images = "";

            if(item.upload_images.length > 0){
                images = item.upload_images.map(img => `
                    <img src="${img}" 
                        class="w-12 h-12 rounded object-cover inline-block mr-1 cursor-pointer border"
                        onclick="openImageModal('${img}')">
                `).join("");
            } else {
                images = `<span class="text-gray-400">No Image</span>`;
            }

            table.innerHTML += `
                <tr class="border-t">

                    <td class="px-6 py-4">
                        ${item.product?.name ?? "-"}
                    </td>

                    <td class="px-6 py-4">
                        ${item.user?.name ?? "-"}
                    </td>

                    <td class="px-6 py-4">${item.aid}</td>

                    <td class="px-6 py-4">${item.uid}</td>

                    <td class="px-6 py-4 text-yellow-500">
                        ${stars}
                    </td>

                    <td class="px-6 py-4 max-w-xs truncate">
                        ${item.comments}
                    </td>

                    <td class="px-6 py-4">
                        ${images}
                    </td>

                    <td class="px-6 py-4 space-x-3">

                        <button onclick="updateReview(${item.id})" class="text-yellow-600">
                            <i class="fas fa-edit"></i>
                        </button>

                        <button onclick="deleteReview(${item.id})" class="text-red-600">
                            <i class="fas fa-trash"></i>
                        </button>

                    </td>

                </tr>
            `;
        });
    }

    async function deleteReview(id)
    {
        if(!confirm("Delete this review?")) return;

        const token = localStorage.getItem("auth_token");

        const res = await fetch(BASE_URL + "/admin/reviews/delete/" + id, {
            method: "DELETE",
            headers: {
                "Authorization":"Bearer " + token
            }
        });

        const data = await res.json();

        if(data.success){
            alert(data.message);
            loadReviews();
        } else {
            alert("Delete failed");
        }
    }

    function updateReview(id)
    {
        const rows = document.querySelectorAll("#reviewTable tr");

        rows.forEach(row => {

            const btn = row.querySelector("button.text-yellow-600");

            if(btn && btn.getAttribute("onclick").includes(id))
            {
                document.getElementById("u_id").value = id;

                const comment = row.children[5].innerText;
                const stars = row.children[4].innerText.length;

                document.getElementById("u_comment").value = comment;
                document.getElementById("u_star").value = stars;
            }

        });

        document.getElementById("updateModal").classList.remove("hidden");
        document.getElementById("updateModal").classList.add("flex");
    }

    function closeUpdateModal()
    {
        document.getElementById("updateModal").classList.add("hidden");
    }

    async function saveUpdate()
    {
        const id = document.getElementById("u_id").value;

        const formData = new FormData();

        formData.append("total_star", document.getElementById("u_star").value);
        formData.append("comments", document.getElementById("u_comment").value);

        const files = document.getElementById("u_images").files;

        for(let i=0; i<files.length; i++){
            formData.append("upload_images[]", files[i]);
        }

        const token = localStorage.getItem("auth_token");

        const res = await fetch(BASE_URL + "/admin/reviews/update/" + id, {
            method: "POST",
            headers: {
                "Authorization":"Bearer " + token
            },
            body: formData
        });

        const data = await res.json();

        if(data.success){
            alert(data.message);
            closeUpdateModal();
            loadReviews();
        } else {
            alert("Update failed");
        }
    }

    function openImage(url)
    {
        window.open(url, "_blank");
    }

    function openImageModal(url)
    {
        document.getElementById("modalImage").src = url;
        document.getElementById("imageModal").classList.remove("hidden");
        document.getElementById("imageModal").classList.add("flex");
    }

    function closeImageModal()
    {
        document.getElementById("imageModal").classList.add("hidden");
    }

    document.querySelectorAll("#product_name, #aid, #uid, #user_name, #total_star")
    .forEach(el => {
        el.addEventListener("input", autoFilter);
    });

    window.onload = () => {
        loadReviews();
    };
</script>

<?php include 'footer.php'; ?>