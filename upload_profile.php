<?php
session_start();
include 'includes/db.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$email = $_SESSION['user'];

if (!isset($_FILES['profile_pic'])) {
    die("No file selected");
}

if ($_FILES['profile_pic']['error'] != 0) {
    die("Upload Error: " . $_FILES['profile_pic']['error']);
}

$allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

$filename = $_FILES['profile_pic']['name'];
$tmpName = $_FILES['profile_pic']['tmp_name'];
$fileSize = $_FILES['profile_pic']['size'];

$ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

if (!in_array($ext, $allowed)) {
    die("Only JPG, PNG, GIF, WEBP allowed");
}

if ($fileSize > 5 * 1024 * 1024) {
    die("File too large");
}

$uploadDir = "uploads/";

if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

$newName = uniqid() . "." . $ext;

$destination = $uploadDir . $newName;

if (move_uploaded_file($tmpName, $destination)) {

    $stmt = $conn->prepare("UPDATE users SET profile_pic=? WHERE email=?");
    $stmt->bind_param("ss", $newName, $email);

    if ($stmt->execute()) {

        header("Location: profile.php?success=1");
        exit;

    } else {
        die("Database update failed");
    }

} else {
    die("Failed to upload image");
}
?>