<?php
// Include the database connection
require_once 'db.php';

// Array of tables to truncate
$tables = ['products', 'brands', 'categories', 'product_variations', 'uploads'];

foreach ($tables as $table) {
    // Prepare SQL query to truncate each table
    $query = "TRUNCATE TABLE $table";
    
    if ($conn->query($query) === TRUE) {
        echo "Table $table truncated successfully.<br>";
    } else {
        echo "Error truncating table $table: " . $conn->error . "<br>";
    }
}

// Close the database connection
$conn->close();
?>
