<h2 class="text-xl font-bold mb-4">Manage Users</h2>
<p>This is the user management content.</p>

<section class="p-6 bg-gray-100 min-h-screen">
    <div class="max-w-7xl mx-auto bg-white shadow-md rounded-xl p-6">
        <h2 class="text-2xl font-bold mb-4">Users</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left">
                <thead class="bg-blue-100 text-blue-800 font-semibold">
                    <tr>
                        <th class="px-4 py-3">ID</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Mobile</th>
                        <th class="px-4 py-3">Cart ID</th>
                        <th class="px-4 py-3">Address</th>
                        <th class="px-4 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody id="userTable" class="divide-y divide-gray-200">
                    <!-- Dynamic rows will be inserted here -->
                </tbody>
            </table>
        </div>
    </div>
</section>

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

    // Fetch Users Data from API
    async function fetchUsers() {
        const authToken = localStorage.getItem('auth_token'); // Replace with your actual auth token

        try {
            const response = await fetch('http://localhost/backend/api/admin_index.php?route=get_all_users', {
                method: 'POST',
                headers: {
                    'Authorization': `Bearer ${authToken}`,
                }
            });

            const result = await response.json();
            if (result.success && result.data && result.data.records) {
                const users = result.data.records;
                const userTable = document.getElementById('userTable');
                userTable.innerHTML = ''; // Clear the table before appending

                users.forEach(user => {
                    const row = document.createElement('tr');
                    row.classList.add('hover:bg-gray-50');
                    row.innerHTML = `
                            <td class="px-4 py-2">${user.user_id}</td>
                            <td class="px-4 py-2">${user.name}</td>
                            <td class="px-4 py-2">${user.email}</td>
                            <td class="px-4 py-2">${user.mobile}</td>
                            <td class="px-4 py-2">CART${user.user_id}</td>
                            <td class="px-4 py-2">${user.address}</td>
                            <td class="px-4 py-2 text-center">
                                <div class="flex justify-center gap-2">
                                    <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 text-xs">View</button>
                                    <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 text-xs">Edit</button>
                                    <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 text-xs">Delete</button>
                                </div>
                            </td>
                        `;
                    userTable.appendChild(row);
                });
            } else {
                alert('Failed to load users.');
            }
        } catch (error) {
            console.error('Error fetching users:', error);
            alert('Error fetching users.');
        }
    }

    // Fetch users when the page loads
    window.onload = fetchUsers;
</script>