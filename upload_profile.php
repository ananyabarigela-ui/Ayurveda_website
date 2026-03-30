<?php

session_start();
include 'includes/db.php';

$email = $_SESSION['user'];

$filename = $_FILES['profile_pic']['name'];
$tempname = $_FILES['profile_pic']['tmp_name'];

$folder = "uploads/".$filename;

move_uploaded_file($tempname,$folder);

$query = "UPDATE users SET profile_pic='$filename' WHERE email='$email'";

mysqli_query($conn,$query);

header("Location:profile.php");

?>