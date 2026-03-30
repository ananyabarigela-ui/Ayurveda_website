<?php
session_start();
include 'includes/db.php';
include 'includes/header.php';

$email = $_SESSION['user'];

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn,$query);
$user = mysqli_fetch_assoc($result);
?>

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card p-4">

<h3 class="text-center mb-4">My Profile</h3>

<div class="text-center mb-3">

<?php if($user['profile_pic']!=""){ ?>

<img src="uploads/<?php echo $user['profile_pic']; ?>" width="120" style="border-radius:50%;">

<?php } else { ?>

<img src="images/default.png" width="120" style="border-radius:50%;">

<?php } ?>

</div>

<p><b>Name:</b> <?php echo $user['name']; ?></p>

<p><b>Email:</b> <?php echo $user['email']; ?></p>

<p><b>Alternate Email:</b> <?php echo $user['alternate_email']; ?></p>

<hr>

<a href="change_password.php" class="btn btn-warning w-100 mb-2">
Change Password
</a>

<a href="logout.php" class="btn btn-secondary w-100 mb-2">
Logout
</a>

<a href="delete_account.php" class="btn btn-danger w-100">
Delete Account
</a>

</div>

</div>

</div>

</div>

<?php include 'includes/footer.php'; ?>