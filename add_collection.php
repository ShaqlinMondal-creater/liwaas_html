<?php
include("configs.php");

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $title = trim($_POST["title"]);

    if ($title && isset($_FILES["image"])) {

        // 🔒 CHECK DUPLICATE TITLE
        $check = $conn->prepare("SELECT id FROM collections WHERE title = ?");
        $check->bind_param("s", $title);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {
            $message = "This product already exists.";
        } else {

            // UPLOAD IMAGE
            $uploadDir = "uploads/";
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $imageName = time() . "_" . basename($_FILES["image"]["name"]);
            $imagePath = $uploadDir . $imageName;

            if (move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath)) {

                $stmt = $conn->prepare(
                    "INSERT INTO collections (title, image) VALUES (?, ?)"
                );
                $stmt->bind_param("ss", $title, $imagePath);
                $stmt->execute();
                $stmt->close();

                $message = "Collection added successfully!";
            } else {
                $message = "Image upload failed.";
            }
        }

        $check->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Collection</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

<div class="bg-white p-6 rounded-xl shadow w-full max-w-md">
    <h2 class="text-2xl font-bold mb-4">Add Product</h2>

    <?php if ($message): ?>
        <p class="mb-3 text-sm font-medium text-blue-600">
            <?= htmlspecialchars($message) ?>
        </p>
    <?php endif; ?>

    <form method="POST" enctype="multipart/form-data" class="space-y-4">
        <input type="text" name="title" placeholder="Product title" required
            class="w-full border rounded-lg px-3 py-2">

        <input type="file" name="image" accept="image/*" required
            class="w-full border rounded-lg px-3 py-2">

        <button class="w-full bg-black text-white py-2 rounded-lg">
            Save
        </button>
    </form>
</div>

</body>
</html>
