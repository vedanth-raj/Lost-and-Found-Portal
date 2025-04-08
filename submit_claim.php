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

// Get form data
$item_id = $_POST['item_id'];
$user_name = $_POST['user_name'];
$contact = $_POST['contact'];
$claim_reason = $_POST['claim_reason'];

// Insert claim into the database
$stmt = $conn->prepare("INSERT INTO claims (item_id, user_name, contact, claim_reason, status) VALUES (?, ?, ?, ?, 'Pending')");
$stmt->bind_param("isss", $item_id, $user_name, $contact, $claim_reason);

if ($stmt->execute()) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["error" => "Error submitting claim."]);
}

$stmt->close();
$conn->close();
?>

