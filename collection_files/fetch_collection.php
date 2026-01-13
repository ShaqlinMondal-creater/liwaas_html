<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Content-Type: application/json");

// ✅ correct include path (important)
require_once __DIR__ . "/configs.php";

// ✅ DB connection check
if (!$conn) {
    http_response_code(500);
    echo json_encode([
        "success" => false,
        "message" => "Database connection object not found"
    ]);
    exit;
}

$sql = "SELECT id, title, image, created_at FROM t_collections ORDER BY id DESC";
$result = $conn->query($sql);

if (!$result) {
    http_response_code(500);
    echo json_encode([
        "success" => false,
        "message" => "Query failed",
        "error" => $conn->error
    ]);
    exit;
}

$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = [
        "id" => (int)$row["id"],
        "title" => $row["title"],
        "image" => "https://liwaas.com/collection_files/" . $row["image"],
        "created_at" => $row["created_at"]
    ];
}

echo json_encode([
    "success" => true,
    "count" => count($data),
    "data" => $data
]);
