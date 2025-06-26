<?php
$mysqli = new mysqli("localhost", "root", "", "demo_1");
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Helper functions
function fetchSheetData($sheet_url) {
    return fopen($sheet_url, 'r');
}

function createSlug($string) {
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
    return $slug;
}

function getOrCreateBrand($mysqli, $brand_name) {
    $stmt = $mysqli->prepare("SELECT id FROM brands WHERE name = ?");
    $stmt->bind_param("s", $brand_name);
    $stmt->execute();
    $stmt->bind_result($brand_id);
    if ($stmt->fetch()) {
        $stmt->close();
        return $brand_id;
    }
    $stmt->close();

    $stmt = $mysqli->prepare("INSERT INTO brands (name, created_at, updated_at) VALUES (?, NOW(), NOW())");
    $stmt->bind_param("s", $brand_name);
    $stmt->execute();
    return $stmt->insert_id;
}

function getOrCreateCategory($mysqli, $category_name) {
    $stmt = $mysqli->prepare("SELECT id FROM categories WHERE name = ?");
    $stmt->bind_param("s", $category_name);
    $stmt->execute();
    $stmt->bind_result($category_id);
    if ($stmt->fetch()) {
        $stmt->close();
        return $category_id;
    }
    $stmt->close();

    $stmt = $mysqli->prepare("INSERT INTO categories (name, created_at, updated_at) VALUES (?, NOW(), NOW())");
    $stmt->bind_param("s", $category_name);
    $stmt->execute();
    return $stmt->insert_id;
}

// Check g_sheets table if sheet status is 0
$sheetQuery = $mysqli->query("SELECT * FROM g_sheets WHERE id = 1 AND status = 0");
$sheetData = $sheetQuery->fetch_assoc();

if ($sheetData) {
    $sheet_url = $sheetData['sheet_url'];

    $handle = fetchSheetData($sheet_url);

    if (!$handle) {
        die("❌ Failed to open sheet file.");
    }

    $header = fgetcsv($handle); // get header columns
    if (!$header) {
        die("❌ No header found.");
    }

    while (($row = fgetcsv($handle)) !== false) {
        if (count($row) != count($header)) {
            continue; // skip invalid
        }

        $rowData = array_combine($header, $row);

        if (empty($rowData['AID'])) {
            continue;
        }

        $uid = trim($rowData['UID']);
        $aid = trim($rowData['AID']);
        $name = trim($rowData['Name']);
        $brandName = trim($rowData['Brand']);
        $categoryName = trim($rowData['Category']);
        $description = trim($rowData['Description']);
        $gender = !empty($rowData['Gender']) ? $rowData['Gender'] : 'Male';
        $color = trim($rowData['Color']);
        $size = trim($rowData['Size']);
        $regularPrice = trim($rowData['Regular Price']);
        $sellPrice = trim($rowData['Sell Price']);
        $currency = !empty($rowData['Currency']) ? $rowData['Currency'] : 'INR';
        $gst = !empty($rowData['GST']) ? $rowData['GST'] : 18;
        $stock = !empty($rowData['Stock']) ? $rowData['Stock'] : 10;
        $productStatus = !empty($rowData['Product Status']) ? $rowData['Product Status'] : 'Active';
        $image_url = trim($rowData['Image URL']);
        $shipping = !empty($rowData['Shipping']) ? $rowData['Shipping'] : 'Available';
        $cod = !empty($rowData['COD']) ? $rowData['COD'] : 'Available';
        $ratings = !empty($rowData['Rating']) ? $rowData['Rating'] : 0;
        $keyword = isset($rowData['Keywords']) ? trim($rowData['Keywords']) : '';  // Safely check if the 'Keywords' field exists    

        // die($keyword);
        // Specification
        $specification = "";
        foreach ($rowData as $key => $value) {
            if (strpos($key, 'S_') === 0 && !empty($value)) {
                $specification .= "$key: $value\n";
            }
        }

        $slug = createSlug($name);

        $brand_id = getOrCreateBrand($mysqli, $brandName);
        $category_id = getOrCreateCategory($mysqli, $categoryName);

        // Find if the product AID already exists
        $stmt = $mysqli->prepare("SELECT aid FROM products WHERE aid = ?");
        $stmt->bind_param("s", $aid);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->close();

            // Insert as variation if AID exists
            $stmt = $mysqli->prepare("INSERT INTO product_variations (id, aid, color, size, regular_price, sell_price, currency, gst, stock, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())");
            $stmt->bind_param("sssssssii", $uid, $aid, $color, $size, $regularPrice, $sellPrice, $currency, $gst, $stock);
            $stmt->execute();
        } else {
            $stmt->close();

            // Insert as new product
            $stmt = $mysqli->prepare("INSERT INTO products (aid, name, brand_id, category_id, slug, description, specification, gender, cod, shipping, ratings, keyword, image_url, product_status, added_by, custom_design, created_at, updated_at) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'Admin', 'False', NOW(), NOW())");
            $stmt->bind_param("ssiissssssdsss", $aid, $name, $brand_id, $category_id, $slug, $description, $specification, $gender, $cod, $shipping, $ratings, $keyword, $image_url, $productStatus);
            $stmt->execute();

            // Insert the default variation also
            $stmt = $mysqli->prepare("INSERT INTO product_variations (id, aid, color, size, regular_price, sell_price, currency, gst, stock, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())");
            $stmt->bind_param("sssssssii", $uid, $aid, $color, $size, $regularPrice, $sellPrice, $currency, $gst, $stock);
            $stmt->execute();
        }
    }

    fclose($handle);

    echo "✅ Import completed successfully!";
} else {
    echo "✅ No sheet with status=0.";
}

?>
