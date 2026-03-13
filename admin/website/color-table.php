<base href="../">
<?php include("../header.php"); ?>
    <main class="grow content pt-5" id="content">

    <div class="container-fixed">
        <div class="card">

            <div class="card-header flex justify-between items-center">
                <h3 class="card-title">
                    Color Management
                </h3>
                <button class="btn btn-success btn-sm" id="add_color_btn">
                    + Add Color
                </button>
            </div>

            <div class="card-body">
                <div id="colors_grid" class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                    <!--  -->
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    .color-card {
        border-radius: 12px;
        padding: 20px;
        text-align: center;
        transition: 0.2s;
        color: #fff;
        position: relative;
    }

    .color-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(0,0,0,0.15);
    }

    .color-name {
        font-weight: 600;
        font-size: 15px;
        margin-bottom: 10px;
    }

    .color-actions {
        display: flex;
        justify-content: center;
        gap: 8px;
    }
</style>

<script>
    const baseUrl = "<?= $baseUrl ?>";

    /* ---------------- FETCH COLORS ---------------- */
    function fetchColors() {

        fetch(`${baseUrl}/api/colors/getAll`)
            .then(res => res.json())
            .then(res => {
                if (!res.success) return;
                const grid = document.getElementById("colors_grid");

                grid.innerHTML = "";
                res.data.forEach(color => {
                    grid.innerHTML += `
                        <div class="color-card" style="background:${color.code}">

                            <div class="color-name">
                                ${color.name}
                                <div style="font-size:12px;opacity:0.9">${color.code}</div>
                            </div>

                            <div class="color-actions">

                                <button class="btn btn-xs btn-light"
                                onclick="openUpdateColor('${color.name}','${color.code}')">
                                    Update
                                </button>

                                <button class="btn btn-xs btn-dark"
                                onclick="deleteColor('${color.name}')">
                                    Delete
                                </button>

                            </div>

                        </div>
                    `;
                });
            });
    }

    /* ---------------- ADD COLOR ---------------- */
    // function openAddColor() {

    //     Swal.fire({

    //         title: "Add Color",

    //         html: `
    //             <input id="color_name" class="swal2-input" placeholder="Color Name">
    //             <div style="margin-top:10px;">
    //                 <label style="font-size:13px;">Choose Color</label>
    //                 <input type="color" id="color_picker" value="#000000" style="width:100%;height:40px;border:none;">
    //                 <input id="color_code" class="swal2-input" placeholder="#000000">
    //             </div>
    //         `,

    //         confirmButtonText: "Add Color",
    //         confirmButtonColor: "#16a34a",
    //         showCancelButton: true,
    //         preConfirm: () => {
    //             const name = document.getElementById("color_name").value;
    //             const code = document.getElementById("color_code").value;
    //             if (!name || !code) {
    //                 Swal.showValidationMessage("Name and Code required");
    //                 return false;
    //             }

    //             return fetch(`${baseUrl}/api/colors/add`, {
    //                 method: "POST",
    //                 headers: {
    //                     "Content-Type": "application/json"
    //                 },

    //                 body: JSON.stringify({
    //                     name: name,
    //                     code: code
    //                 })
    //             })
    //                 .then(res => res.json())
    //                 .then(data => {
    //                     if (!data.success) throw new Error(data.message);
    //                     return data;
    //                 });
    //         }
    //     })
    //     .then(result => {
    //         if (result.isConfirmed) {
    //             Swal.fire(
    //                 "Success",
    //                 "Color Added Successfully",
    //                 "success"
    //             );
    //             fetchColors();
    //         }
    //     });
    // }

    function openAddColor() {

        Swal.fire({

            title: "Add Color",

            html: `
                <input id="color_name" class="swal2-input" placeholder="Color Name">

                <div style="margin-top:10px;">
                <label style="font-size:13px;">Choose Color</label>

                <input type="color"
                id="color_picker"
                value="#000000"
                style="width:100%;height:40px;border:none;margin-top:5px;">

                <input id="color_code"
                class="swal2-input"
                placeholder="#000000"
                value="#000000">
                </div>
            `,

            confirmButtonText: "Add Color",
            confirmButtonColor: "#16a34a",
            showCancelButton: true,

            didOpen: () => {

                const picker = document.getElementById("color_picker");
                const code = document.getElementById("color_code");

                /* picker → input */
                picker.addEventListener("input", () => {
                    code.value = picker.value;
                });

                /* input → picker */
                code.addEventListener("input", () => {

                    if (/^#[0-9A-Fa-f]{6}$/.test(code.value)) {
                        picker.value = code.value;
                    }

                });

            },

            preConfirm: () => {

                const name = document.getElementById("color_name").value.trim();
                const code = document.getElementById("color_code").value.trim();

                if (!name || !code) {

                    Swal.showValidationMessage("Color name and code required");
                    return false;

                }

                return fetch(`${baseUrl}/api/colors/add`, {

                    method: "POST",

                    headers: {
                        "Content-Type": "application/json"
                    },

                    body: JSON.stringify({
                        name: name,
                        code: code
                    })

                })
                    .then(res => res.json())
                    .then(data => {

                        if (!data.success) throw new Error(data.message);
                        return data;

                    });

            }

        })
            .then(result => {

                if (result.isConfirmed) {

                    Swal.fire(
                        "Success",
                        "Color Added Successfully",
                        "success"
                    );

                    fetchColors();

                }

            });

    }

    /* ---------------- UPDATE COLOR ---------------- */
    // function openUpdateColor(oldName, oldCode) {

    //     Swal.fire({
    //         title: "Update Color",
    //         html: `
    //             <input id="color_name" class="swal2-input" value="${oldName}">
    //             <input id="color_code" class="swal2-input" value="${oldCode}">
    //         `,

    //         confirmButtonText: "Update",
    //         confirmButtonColor: "#2563eb",
    //         showCancelButton: true,
    //         preConfirm: () => {
    //             const name = document.getElementById("color_name").value;
    //             const code = document.getElementById("color_code").value;
    //             return fetch(`${baseUrl}/api/colors/update`, {
    //                 method: "POST",
    //                 headers: {
    //                     "Content-Type": "application/json"
    //                 },
    //                 body: JSON.stringify({
    //                     old_name: oldName,
    //                     name: name,
    //                     code: code
    //                 })
    //             })
    //             .then(res => res.json())
    //             .then(data => {
    //                 if (!data.success) throw new Error(data.message);
    //                 return data;
    //             });
    //         }
    //     })
    //     .then(result => {
    //         if (result.isConfirmed) {
    //             Swal.fire(
    //                 "Updated",
    //                 "Color Updated Successfully",
    //                 "success"
    //             );
    //             fetchColors();
    //         }
    //     });
    // }

    function openUpdateColor(oldName, oldCode) {
        Swal.fire({

            title: "Update Color",

            html: `
            <input id="color_name" class="swal2-input" value="${oldName}">

            <div style="margin-top:10px;">
            <label style="font-size:13px;">Choose Color</label>

            <input type="color"
            id="color_picker"
            value="${oldCode}"
            style="width:100%;height:40px;border:none;margin-top:5px;">

            <input id="color_code"
            class="swal2-input"
            value="${oldCode}">
            </div>
            `,

            confirmButtonText: "Update",
            confirmButtonColor: "#2563eb",
            showCancelButton: true,

            didOpen: () => {

                const picker = document.getElementById("color_picker");
                const code = document.getElementById("color_code");

                /* picker → input */
                picker.addEventListener("input", () => {
                    code.value = picker.value;
                });

                /* input → picker */
                code.addEventListener("input", () => {

                    if (/^#[0-9A-Fa-f]{6}$/.test(code.value)) {
                        picker.value = code.value;
                    }

                });

            },

            preConfirm: () => {

                const name = document.getElementById("color_name").value.trim();
                const code = document.getElementById("color_code").value.trim();

                return fetch(`${baseUrl}/api/colors/update`, {

                    method: "POST",

                    headers: {
                        "Content-Type": "application/json"
                    },

                    body: JSON.stringify({

                        old_name: oldName,
                        name: name,
                        code: code

                    })

                })
                    .then(res => res.json())
                    .then(data => {

                        if (!data.success) throw new Error(data.message);
                        return data;

                    });

            }

        })
        .then(result => {

            if (result.isConfirmed) {

                Swal.fire(
                    "Updated",
                    "Color Updated Successfully",
                    "success"
                );

                fetchColors();

            }

        });
    }

    /* ---------------- DELETE COLOR ---------------- */
    function deleteColor(name) {
        Swal.fire({
            title: "Delete Color?",
            text: name,
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Delete",
            confirmButtonColor: "#ef4444"
        })
        .then(result => {
            if (result.isConfirmed) {
                fetch(`${baseUrl}/api/colors/delete`, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({ name: name })
                })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire(
                            "Deleted",
                            "Color removed successfully",
                            "success"
                        );
                        fetchColors();
                    }
                });
            }
        });
    }

    /* ---------------- PAGE LOAD ---------------- */
    document.addEventListener("DOMContentLoaded", () => {
        fetchColors();
        document.getElementById("add_color_btn").addEventListener("click", openAddColor);
    });

</script>

    <!-- Footer -->
<?php include("../footer.php"); ?>