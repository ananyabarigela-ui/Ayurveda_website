<?php
session_start();

include 'includes/db.php';
include 'includes/header.php';

if (!isset($_SESSION['user'])) {

    header("Location: login.php");
    exit;
}

$email = $_SESSION['user'];

if (isset($_POST['confirm_delete'])) {

    $stmt = $conn->prepare("DELETE FROM users WHERE email=?");

    $stmt->bind_param("s", $email);

    $stmt->execute();

    $stmt->close();

    session_destroy();

    header("Location: register.php?msg=account_deleted");

    exit;
}
?>

<style>

/* Full page layout */
.delete-page{

    min-height: 100vh;

    background: #eef3e8;

    display: flex;

    justify-content: center;

    align-items: center;

    padding: 40px 15px;
}

/* Card styling */
.delete-card{

    width: 100%;

    max-width: 500px;

    background: #ffffff;

    border-radius: 15px;

    padding: 35px;

    box-shadow: 0 4px 15px rgba(0,0,0,0.15);

    text-align: center;
}

/* Heading */
.delete-title{

    color: #dc3545;

    font-weight: bold;

    margin-bottom: 20px;
}

</style>

<div class="delete-page">

<div class="delete-card">

<h2 class="delete-title">

Delete Account

</h2>

<p class="mb-4">

Are you sure you want to delete your account?

<br>

<strong>This action cannot be undone.</strong>

</p>

<form method="POST">

<button type="submit"
        name="confirm_delete"
        class="btn btn-danger w-100 mb-2">

Yes, Delete My Account

</button>

</form>

<a href="profile.php"
   class="btn btn-secondary w-100">

Cancel

</a>

</div>

</div>

<?php include 'includes/footer.php'; ?>