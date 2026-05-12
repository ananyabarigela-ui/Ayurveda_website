<?php
session_start();
include 'includes/db.php';
include 'includes/header.php';

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit;
}

$email = $_SESSION['user'];

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);
?>

<style>

/* Background section */
.bg-section{
    background: url('images/bg4.jpeg') no-repeat center center;
    background-size: cover;
    min-height: 100vh;
    padding: 60px 0;
}

/* Profile card */
.profile-card{
    background: rgba(255,255,255,0.92);
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
}

/* Profile image */
.profile-img{
    width:120px;
    height:120px;
    border-radius:50%;
    object-fit:cover;
    border:3px solid #28a745;
}

/* Hide file input */
#profile_pic{
    display:none;
}

</style>

<div class="bg-section">

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card p-4 profile-card">

<h2 class="text-center mb-4">My Profile</h2>

<?php

$msgs = [

    'pic_updated'       => ['success', 'Profile picture updated successfully!'],
    'alt_email_updated' => ['success', 'Alternate email saved!'],
    'password_changed'  => ['success', 'Password changed successfully!'],
    'upload_error'      => ['danger',  'Upload failed. Please try again.'],
    'invalid_type'      => ['danger',  'Only image files are allowed.']

];

if(isset($_GET['msg']) && array_key_exists($_GET['msg'], $msgs)){

    [$type, $text] = $msgs[$_GET['msg']];

    echo "<div class='alert alert-$type'>$text</div>";
}
?>

<!-- PROFILE IMAGE -->
<div class="text-center mb-4">

<?php if(!empty($user['profile_pic'])){ ?>

<img src="uploads/<?php echo $user['profile_pic']; ?>" class="profile-img">

<?php } else { ?>

<img src="images/default.png" class="profile-img">

<?php } ?>

</div>

<!-- UPLOAD PROFILE IMAGE -->
<form action="upload_profile.php" method="POST" enctype="multipart/form-data">

<div class="text-center mb-3">

<label><b>Upload Profile Picture</b></label><br><br>

<!-- Hidden File Input -->
<input type="file"
       id="profile_pic"
       name="profile_pic"
       accept="image/*"
       required>

<!-- Choose Picture Button -->
<button type="button"
        class="btn btn-secondary mb-2"
        onclick="document.getElementById('profile_pic').click();">

Choose Picture

</button>

<!-- Selected File Name -->
<p id="file-name" class="text-muted"></p>

<!-- Upload Button -->
<button type="submit"
        class="btn btn-success w-100">

Upload Image

</button>

</div>

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

<button type="submit"
        class="btn btn-success w-100 mb-3">

Save Alternate Email

</button>

</form>

<hr>

<!-- CHANGE PASSWORD -->
<a href="change_password.php"
   class="btn btn-success w-100 mb-2">

Change Password

</a>

<!-- LOGOUT -->
<a href="logout.php"
   class="btn btn-success w-100 mb-2">

Logout

</a>

<!-- DELETE ACCOUNT -->
<a href="delete_account.php"
   class="btn btn-danger w-100">

Delete Account

</a>

</div>
</div>
</div>
</div>
</div>

<script>

// Show selected file name
document.getElementById('profile_pic').addEventListener('change', function(){

    if(this.files.length > 0){

        document.getElementById('file-name').innerText =
            this.files[0].name;

    }

});

</script>

<?php include 'includes/footer.php'; ?>