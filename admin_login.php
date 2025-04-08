<?php
// admin_login.php
header('Content-Type: application/json');

$username = $_POST['username'];
$password = $_POST['password'];

// Replace with your actual authentication logic
$valid_username = "harini";
$valid_password = "harini0719";

if ($username === $valid_username && $password === $valid_password) {
    session_start();
    $_SESSION['admin_logged_in'] = true;
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid credentials']);
}
?>