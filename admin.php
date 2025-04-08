<?php
header('Content-Type: application/json');

// Database connection
$host = 'localhost';
$dbname = 'lost_found_db';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    echo json_encode(['error' => "Connection failed: " . $conn->connect_error]);
    exit;
}

// Fetch lost items
$lost_items = $conn->query("SELECT * FROM lost_items");
$lost_data = [];
while ($row = $lost_items->fetch_assoc()) {
    $lost_data[] = $row;
}

// Fetch found items
$found_items = $conn->query("SELECT * FROM lost_found_items");
$found_data = [];
while ($row = $found_items->fetch_assoc()) {
    $found_data[] = $row;
}

// Fetch claims with item names from lost_found_items
$claims = $conn->query("
    SELECT claims.*, lost_found_items.name AS item_name 
    FROM claims 
    JOIN lost_found_items ON claims.item_id = lost_found_items.id
");

$claims_data = [];
while ($row = $claims->fetch_assoc()) {
    $claims_data[] = $row;
}

// Return JSON data
echo json_encode([
    'lost_items' => $lost_data,
    'found_items' => $found_data,
    'claims' => $claims_data
]);

$conn->close();
?>
