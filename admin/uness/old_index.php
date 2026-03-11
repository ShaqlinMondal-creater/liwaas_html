<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen font-sans">

    <!-- Navbar -->
    <nav class="bg-blue-900 text-white px-6 py-4 shadow-md">
        <div class="flex justify-between items-center">
            <h1 class="text-xl font-semibold">Admin Panel</h1>
            <div>
                <span class="mr-4">Welcome, Admin</span>
                <button id="logoutButton" class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded">Logout</button>
            </div>
        </div>
    </nav>

    <!-- Tabs -->
    <div class="px-6 mt-6">
        <div class="border-b border-gray-300">
            <nav class="flex space-x-8" id="tabs">
                <button onclick="showTab('dashboard')" class="tab-btn py-2 px-4 text-blue-700 border-b-2 border-blue-700 font-medium">Dashboard</button>
                <button onclick="showTab('users')" class="tab-btn py-2 px-4 text-gray-600 hover:text-blue-700">Users</button>
                <button onclick="showTab('products')" class="tab-btn py-2 px-4 text-gray-600 hover:text-blue-700">Products</button>
            </nav>
        </div>

        <!-- Tab Contents -->
        <div class="mt-6">
            <div id="dashboard" class="tab-content">
                <h2 class="text-xl font-bold mb-4">Dashboard Overview</h2>
                <p>This is the dashboard content.</p>
            </div>

            <div id="users" class="tab-content hidden">
                <?php include("inc/user_section.php"); ?>
            </div>

            <div id="products" class="tab-content hidden">
                <?php include("inc/product_section.php"); ?>
            </div>
        </div>
    </div>

    <!-- Script to handle tab switching -->
    <script>
        function showTab(tabId) {
            document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
            document.getElementById(tabId).classList.remove('hidden');

            document.querySelectorAll('.tab-btn').forEach(el => {
                el.classList.remove('text-blue-700', 'border-b-2', 'border-blue-700', 'font-medium');
                el.classList.add('text-gray-600');
            });

            const activeBtn = Array.from(document.querySelectorAll('.tab-btn')).find(btn => btn.textContent.toLowerCase() === tabId);
            activeBtn.classList.add('text-blue-700', 'border-b-2', 'border-blue-700', 'font-medium');
        }

        // Logout functionality
        document.getElementById('logoutButton').addEventListener('click', async function() {
            const userId = localStorage.getItem('user_id');
            const authToken = localStorage.getItem('auth_token');
            
            if (!userId || !authToken) {
                // If no user data in localStorage, redirect to login page
                window.location.href = '../signin.php';
                return;
            }

            try {
                // Send logout request to the API
                const response = await fetch('http://localhost/backend/api/user_index.php?route=logout', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        user_id: userId,
                    }),
                });

                const result = await response.json();

                if (result.success) {
                    // Clear user data from localStorage
                    localStorage.removeItem('auth_token');
                    localStorage.removeItem('user_id');
                    localStorage.removeItem('role');
                    localStorage.removeItem('email');
                    localStorage.removeItem('name');

                    // Redirect to the login page
                    window.location.href = '../signin.php';
                } else {
                    // Handle error case
                    alert(result.message || 'Logout failed, please try again.');
                }
            } catch (error) {
                console.error('Error during logout:', error);
                alert('An error occurred during logout. Please try again later.');
            }
        });
    </script>

</body>
</html>
