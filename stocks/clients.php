<?php include 'header.php'; ?>

<!-- ================= Client CONTENT ================= -->
<div class="max-w-7xl mx-auto px-6 mt-12">

    <div class="flex justify-between items-center mb-6">

        <h1 class="text-3xl font-bold text-gray-800">Clients</h1>

        <div class="flex gap-3">

            <input id="searchInput" type="text" placeholder="Search clients..."
                class="border rounded-lg px-4 py-2 text-sm" />

            <button onclick="openClientModal()"
                class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                + Add Client
            </button>

        </div>

    </div>


    <div class="bg-white rounded-2xl shadow-lg overflow-x-auto">

        <table class="min-w-full text-left">

            <thead class="bg-indigo-50">
                <tr>
                    <th class="px-6 py-3">Client Name</th>
                    <th class="px-6 py-3">Owner</th>
                    <th class="px-6 py-3">Mobile</th>
                    <th class="px-6 py-3">Email</th>
                    <th class="px-6 py-3">Address</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3">Action</th>
                </tr>
            </thead>

            <tbody id="clientsTable"></tbody>

        </table>

    </div>

</div>

<!-- ================= ADD CLIENT MODAL ================= -->

<div id="clientModal" class="hidden fixed inset-0 bg-black/50 flex items-center justify-center z-50">
    <div class="bg-white rounded-xl w-full max-w-md p-6">

        <h2 class="text-xl font-bold mb-4">Add Client</h2>

        <div class="space-y-3">

            <input id="client_name" type="text" placeholder="Client Name" class="w-full border rounded-lg px-4 py-2" />

            <input id="owner_name" type="text" placeholder="Owner Name" class="w-full border rounded-lg px-4 py-2" />

            <input id="client_mobile" type="text" placeholder="Mobile" class="w-full border rounded-lg px-4 py-2" />

            <input id="client_email" type="email" placeholder="Email" class="w-full border rounded-lg px-4 py-2" />

            <textarea id="client_address" placeholder="Address" class="w-full border rounded-lg px-4 py-2"></textarea>

        </div>

        <div class="flex justify-end gap-3 mt-6">

            <button onclick="closeClientModal()" class="px-4 py-2 border rounded-lg">
                Cancel
            </button>

            <button onclick="createClient()" class="bg-indigo-600 text-white px-4 py-2 rounded-lg">
                Save
            </button>

        </div>

    </div>
</div>

<div id="editClientModal" class="hidden fixed inset-0 bg-black/50 flex items-center justify-center z-50">
    <div class="bg-white rounded-xl w-full max-w-md p-6">
        <h2 class="text-xl font-bold mb-4">Edit Client</h2>
        <input type="hidden" id="edit_client_id">

        <div class="space-y-3">

            <input id="edit_client_name" class="w-full border rounded-lg px-4 py-2" placeholder="Client Name">

            <input id="edit_owner_name" class="w-full border rounded-lg px-4 py-2" placeholder="Owner Name">

            <input id="edit_mobile" class="w-full border rounded-lg px-4 py-2" placeholder="Mobile">

            <input id="edit_email" class="w-full border rounded-lg px-4 py-2" placeholder="Email">

            <textarea id="edit_address" class="w-full border rounded-lg px-4 py-2" placeholder="Address"></textarea>

            <select id="edit_status" class="w-full border rounded-lg px-4 py-2">

                <option value="1">Active</option>
                <option value="0">Inactive</option>

            </select>

        </div>

        <div class="flex justify-end gap-3 mt-6">

            <button onclick="closeEditModal()" class="px-4 py-2 border rounded-lg">
                Cancel
            </button>

            <button onclick="updateClient()" class="bg-indigo-600 text-white px-4 py-2 rounded-lg">
                Update
            </button>

        </div>
    </div>
</div>

<script>

    const BASE_URL = "<?= $baseUrl ?>/api/stocks/clients";

    /* ================= FETCH CLIENTS ================= */

    async function fetchClients(search = "") {

        const res = await fetch(`${BASE_URL}/fetch`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({ search })
        });

        const result = await res.json();

        const table = document.getElementById("clientsTable");
        table.innerHTML = "";

        if (!result.success) return;

        result.data.forEach(client => {
            table.innerHTML += `
                <tr class="border-t">

                    <td class="px-6 py-4 font-medium">
                        ${client.name}
                    </td>

                    <td class="px-6 py-4">
                        ${client.owner_name}
                    </td>

                    <td class="px-6 py-4">
                        ${client.mobile}
                    </td>

                    <td class="px-6 py-4">
                        ${client.email}
                    </td>

                    <td class="px-6 py-4">
                        ${client.address}
                    </td>

                    <td class="px-6 py-4">
                        <span class="px-3 py-1 text-sm rounded-full
                        ${client.status == 1
                                            ? 'bg-green-100 text-green-600'
                                            : 'bg-red-100 text-red-600'}">

                        ${client.status == 1 ? 'Active' : 'Inactive'}

                        </span>
                    </td>
                    <td class="px-6 py-4 space-x-3">
                        <button onclick='openEditClient(${JSON.stringify(client)})' class="text-blue-600 hover:text-blue-800">
                            <i class="fas fa-edit"></i>
                        </button>

                        <button onclick="deleteClient(${client.id})" class="text-red-600 hover:text-red-800">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
            `;
        });
    }


    /* ================= SEARCH ================= */

    document.getElementById("searchInput")
        .addEventListener("keyup", function () {
            fetchClients(this.value);
        });

    /* ================= MODAL ================= */

    function openClientModal() {
        document.getElementById("clientModal")
            .classList.remove("hidden");
    }

    function closeClientModal() {
        document.getElementById("clientModal")
            .classList.add("hidden");
    }

    function openEditClient(client) {

        document.getElementById("editClientModal").classList.remove("hidden");

        document.getElementById("edit_client_id").value = client.id;
        document.getElementById("edit_client_name").value = client.name;
        document.getElementById("edit_owner_name").value = client.owner_name;
        document.getElementById("edit_mobile").value = client.mobile;
        document.getElementById("edit_email").value = client.email;
        document.getElementById("edit_address").value = client.address;
        document.getElementById("edit_status").value = client.status;
    }

    function closeEditModal() {
        document.getElementById("editClientModal").classList.add("hidden");
    }
    /* ================= CREATE CLIENT ================= */

    async function createClient() {

        const payload = {
            name: document.getElementById("client_name").value,
            owner_name: document.getElementById("owner_name").value,
            mobile: document.getElementById("client_mobile").value,
            email: document.getElementById("client_email").value,
            address: document.getElementById("client_address").value
        };

        const res = await fetch(`${BASE_URL}/create`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(payload)
        });

        const result = await res.json();

        if (result.success) {
            closeClientModal();
            fetchClients();
        }
    }

    async function updateClient() {

        const id = document.getElementById("edit_client_id").value;

        const payload = {
            name: document.getElementById("edit_client_name").value,
            owner_name: document.getElementById("edit_owner_name").value,
            mobile: document.getElementById("edit_mobile").value,
            email: document.getElementById("edit_email").value,
            address: document.getElementById("edit_address").value,
            status: document.getElementById("edit_status").value
        };

        const res = await fetch(`${BASE_URL}/update/${id}`, {

            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },

            body: JSON.stringify(payload)

        });

        const result = await res.json();

        if (result.success) {
            closeEditModal();
            fetchClients();
        }
    }

    async function deleteClient(id) {

        if (!confirm("Delete this client?")) return;

        const res = await fetch(`${BASE_URL}/delete/${id}`, {
            method: "DELETE"
        });

        const result = await res.json();

        if (result.success) {
            fetchClients();
        }
    }

    /* ================= LOAD PAGE ================= */

    fetchClients();

</script>

<?php include 'footer.php'; ?>
