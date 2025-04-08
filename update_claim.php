<?php
header('Content-Type: application/json');

// Database connection
$host = 'localhost';
$dbname = 'lost_found_db';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    echo json_encode(['success' => false, 'error' => "Connection failed: " . $conn->connect_error]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $claim_id = $_POST['claim_id'];
    $status = $_POST['status'];

    // Update claim status
    $stmt = $conn->prepare("UPDATE claims SET status = ? WHERE id = ?");
    $stmt->bind_param("si", $status, $claim_id);

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }

    $stmt->close();
}

$conn->close();
?>
