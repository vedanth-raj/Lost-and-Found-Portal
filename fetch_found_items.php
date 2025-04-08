<?php
header('Content-Type: application/json');

// Database connection
$host = 'localhost';
$dbname = 'lost_found_db';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    echo json_encode(["error" => "Connection failed: " . $conn->connect_error]);
    exit;
}

// Fetch found items
$found_items = $conn->query("SELECT id, name, category, description FROM lost_found_items");
$data = [];

while ($row = $found_items->fetch_assoc()) {
    $data[] = $row;
}

// Return JSON response
echo json_encode($data);

$conn->close();
?>
