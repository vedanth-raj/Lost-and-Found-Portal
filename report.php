<?php
$host = 'localhost';
$dbname = 'lost_found_db';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type = $_POST['type'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $reported_by = $_POST['reported_by'];
    $contact = $_POST['contact'];

    // Handle Image Upload
    $image_path = "";
    if (!empty($_FILES["image"]["name"])) {
        $target_dir = "uploads/";
        $image_path = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $image_path);
    }

    if ($type === "lost") {
        $location = $_POST['location'];
        $stmt = $conn->prepare("INSERT INTO lost_items (name, category, description, image_path, location, reported_by, contact, reported_date) VALUES (?, ?, ?, ?, ?, ?, ?, NOW())");
        $stmt->bind_param("sssssss", $name, $category, $description, $image_path, $location, $reported_by, $contact);
    } else {
        $found_location = $_POST['found_location'];
        $stmt = $conn->prepare("INSERT INTO lost_found_items (name, category, description, image_path, found_location, found_by, contact, reported_date) VALUES (?, ?, ?, ?, ?, ?, ?, NOW())");
        $stmt->bind_param("sssssss", $name, $category, $description, $image_path, $found_location, $reported_by, $contact);
    }

    if ($stmt->execute()) {
        echo "<script>alert('Item reported successfully!'); window.location.href='ai.htm';</script>";
    } else {
        echo "<script>alert('Error reporting item.'); window.location.href='report.html';</script>";
    }

    $stmt->close();
}

$conn->close();
?>
