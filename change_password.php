<?php
session_start();
include 'includes/db.php';
include 'includes/header.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$error = "";

if (isset($_POST['change'])) {

    $email = $_SESSION['user'];

    $newpass = trim($_POST['password']);
    $confirm = trim($_POST['confirm_password']);

    // Validation
    if (strlen($newpass) < 8) {

        $error = "Password must be at least 8 characters.";

    } elseif ($newpass !== $confirm) {

        $error = "Passwords do not match.";

    } else {

        $hashed = password_hash($newpass, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("UPDATE users SET password=? WHERE email=?");

        $stmt->bind_param("ss", $hashed, $email);

        if ($stmt->execute()) {

            header("Location: profile.php?msg=password_changed");
            exit;

        } else {

            $error = "Something went wrong.";

        }

        $stmt->close();
    }
}
?>

<style>

/* Full page background */
.password-page{

    min-height: 100vh;
    background: #eef3e8;

    display: flex;
    justify-content: center;
    align-items: center;

    padding: 40px 15px;
}

/* Card styling */
.password-card{

    width: 100%;
    max-width: 500px;

    background: #ffffff;

    padding: 35px;

    border-radius: 15px;

    box-shadow: 0 4px 15px rgba(0,0,0,0.15);
}

/* Heading */
.password-title{

    color: #198754;

    font-weight: bold;

    text-align: center;

    margin-bottom: 30px;
}

</style>

<div class="password-page">

<div class="password-card">

<h2 class="password-title">Change Password</h2>

<?php if ($error): ?>

<div class="alert alert-danger">

<?php echo htmlspecialchars($error); ?>

</div>

<?php endif; ?>

<form method="POST">

<div class="mb-3">

<label class="form-label">
<b>New Password</b>
</label>

<input type="password"
       name="password"
       class="form-control"
       placeholder="Enter New Password"
       required>

</div>

<div class="mb-4">

<label class="form-label">
<b>Confirm Password</b>
</label>

<input type="password"
       name="confirm_password"
       class="form-control"
       placeholder="Confirm Password"
       required>

</div>

<button type="submit"
        name="change"
        class="btn btn-success w-100 mb-2">

Update Password

</button>

<a href="profile.php"
   class="btn btn-secondary w-100">

Back to Profile

</a>

</form>

</div>

</div>

<?php include 'includes/footer.php'; ?>