<?php
session_start();
include 'includes/db.php';

if(isset($_POST['change'])){

$email = $_SESSION['user'];
$newpass = $_POST['password'];

$query = "UPDATE users SET password='$newpass' WHERE email='$email'";
mysqli_query($conn,$query);

echo "Password Updated";
}
?>

<form method="POST">

<h3>Change Password</h3>

<input type="password" name="password" placeholder="New Password" required>

<br><br>

<button type="submit" name="change">Update Password</button>

</form>