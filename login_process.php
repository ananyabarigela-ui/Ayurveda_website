
<?php
session_start();
include 'includes/db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) == 1){
    $user = mysqli_fetch_assoc($result);
    
    // Verify password
    if(password_verify($_POST['password'], $user['password'])){
        $_SESSION['user'] = $user['email'];
        header("Location: index.php");
        exit;
    } else {
        $error = "Invalid email or password!";
    }
} else {
    $error = "Invalid email or password!";
}



?>

