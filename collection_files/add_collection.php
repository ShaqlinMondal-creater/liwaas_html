<?php
include("configs.php");

// ---------------- DELETE ACTION ----------------
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];

    // delete image first
    $imgQ = $conn->prepare("SELECT image FROM t_collections WHERE id=?");
    $imgQ->bind_param("i", $id);
    $imgQ->execute();
    $imgQ->bind_result($img);
    if ($imgQ->fetch() && file_exists($img)) {
        unlink($img);
    }
    $imgQ->close();

    $del = $conn->prepare("DELETE FROM t_collections WHERE id=?");
    $del->bind_param("i", $id);
    $del->execute();
    $del->close();

    header("Location: add_collection.php");
    exit;
}

// ---------------- ADD ACTION ----------------
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $title = trim($_POST['title']);

    // duplicate check
    $chk = $conn->prepare("SELECT id FROM t_collections WHERE title=?");
    $chk->bind_param("s", $title);
    $chk->execute();
    $chk->store_result();

    if ($chk->num_rows > 0) {
        $message = "Title already exists";
    } else {

        $uploadDir = "uploads/";
        if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);

        $imageName = time() . "_" . basename($_FILES['image']['name']);
        $imagePath = $uploadDir . $imageName;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {

            $ins = $conn->prepare(
                "INSERT INTO t_collections (title, image) VALUES (?, ?)"
            );
            $ins->bind_param("ss", $title, $imagePath);
            $ins->execute();
            $ins->close();

            header("Location: add_collection.php");
            exit;
        } else {
            $message = "Image upload failed";
        }
    }
    $chk->close();
}

// ---------------- FETCH DATA ----------------
$result = $conn->query("SELECT * FROM t_collections ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Collections</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">

<div class="max-w-6xl mx-auto bg-white rounded-xl shadow p-6">

    <!-- HEADER -->
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold">Collections</h2>
        <button onclick="openModal()"
            class="bg-black text-white px-4 py-2 rounded-lg">
            + Add
        </button>
    </div>

    <?php if ($message): ?>
        <p class="mb-3 text-red-600 font-medium"><?= $message ?></p>
    <?php endif; ?>

    <!-- TABLE -->
    <div class="overflow-x-auto">
        <table class="w-full border">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-3 py-2">#</th>
                    <th class="border px-3 py-2">Image</th>
                    <th class="border px-3 py-2">Title</th>
                    <th class="border px-3 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; while($row = $result->fetch_assoc()): ?>
                <tr class="text-center">
                    <td class="border px-3 py-2"><?= $i++ ?></td>
                    <td class="border px-3 py-2">
                        <img src="<?= $row['image'] ?>"
                             class="h-14 mx-auto rounded">
                    </td>
                    <td class="border px-3 py-2">
                        <?= htmlspecialchars($row['title']) ?>
                    </td>
                    <td class="border px-3 py-2">
                        <a href="?delete=<?= $row['id'] ?>"
                           onclick="return confirm('Delete this item?')"
                           class="text-red-600 font-semibold">
                           Delete
                        </a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- MODAL -->
<div id="modal" class="fixed inset-0 bg-black/50 hidden items-center justify-center">
    <div class="bg-white p-6 rounded-xl w-full max-w-md">
        <h3 class="text-xl font-bold mb-4">Add Collection</h3>

        <form method="POST" enctype="multipart/form-data" class="space-y-4">
            <input type="text" name="title" placeholder="Title" required
                class="w-full border rounded px-3 py-2">

            <input type="file" name="image" accept="image/*" required
                class="w-full border rounded px-3 py-2">

            <div class="flex justify-end gap-3">
                <button type="button" onclick="closeModal()"
                    class="px-4 py-2 border rounded">
                    Cancel
                </button>
                <button class="bg-black text-white px-4 py-2 rounded">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function openModal() {
    document.getElementById("modal").classList.remove("hidden");
    document.getElementById("modal").classList.add("flex");
}
function closeModal() {
    document.getElementById("modal").classList.add("hidden");
}
</script>

</body>
</html>

