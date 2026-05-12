<?php
session_start();
include 'includes/db.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$email = $_SESSION['user'];
$alt_email = trim($_POST['alt_email']);

$stmt = $conn->prepare("UPDATE users SET alternate_email=? WHERE email=?");
$stmt->bind_param("ss", $alt_email, $email);
$stmt->execute();
$stmt->close();

header("Location: profile.php?msg=alt_email_updated");
exit;
?>
