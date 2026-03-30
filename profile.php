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

<h2 class="text-center mb-4">My Profile</h2>

<!-- PROFILE IMAGE -->

<div class="text-center mb-3">

<?php if($user['profile_pic']!=""){ ?>

<img src="uploads/<?php echo $user['profile_pic']; ?>" width="120" height="120" style="border-radius:50%;object-fit:cover;">

<?php } else { ?>

<img src="images/default.png" width="120" height="120" style="border-radius:50%;object-fit:cover;">

<?php } ?>

</div>


<!-- UPLOAD PROFILE IMAGE -->

<form action="upload_profile.php" method="POST" enctype="multipart/form-data">

<div class="mb-3">
<label><b>Upload Profile Picture</b></label>
<input type="file" name="profile_pic" class="form-control">
</div>

<button type="submit" class="btn btn-success w-100 mb-3">
Upload Image
</button>

</form>


<!-- USER DETAILS -->

<p><b>Name:</b> <?php echo $user['name']; ?></p>

<p><b>Email:</b> <?php echo $user['email']; ?></p>


<!-- ALTERNATE EMAIL -->

<form action="update_alt_email.php" method="POST">

<div class="mb-3">

<label><b>Alternate Email</b></label>

<input type="email"
name="alt_email"
class="form-control"
value="<?php echo $user['alternate_email']; ?>"
placeholder="Enter alternate email">

</div>

<button type="submit" class="btn btn-success w-100 mb-3">
Save Alternate Email
</button>

</form>

<hr>


<!-- CHANGE PASSWORD -->

<a href="change_password.php" class="btn btn-success w-100 mb-2">
Change Password
</a>


<!-- LOGOUT -->

<a href="logout.php" class="btn btn-success w-100 mb-2">
Logout
</a>


<!-- DELETE ACCOUNT -->

<a href="delete_account.php" class="btn btn-danger w-100">
Delete Account
</a>

</div>
</div>
</div>
</div>

<?php include 'includes/footer.php'; ?>