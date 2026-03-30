<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location:login.php");
    exit();
}

include 'includes/header.php';
?>

<div class="hero-section text-center text-white">

<h1>Welcome, Health Seeker!</h1>
<p>Discover natural remedies and balance your Doshas.</p>

</div>

<div class="container mt-5">

<div class="row g-4">

<div class="col-md-4">
<div class="card dashboard-card">
<h4>Explore Diseases</h4>
<p>Find Ayurvedic treatments for common ailments.</p>
<a href="diseases.php" class="btn btn-success">View List</a>
</div>
</div>

<div class="col-md-4">
<div class="card dashboard-card">
<h4>Herbal Guide</h4>
<p>Learn about medicinal plants and their benefits.</p>
<a href="herbal_guide.php" class="btn btn-success">Read More</a>
</div>
</div>

<div class="col-md-4">
<div class="card dashboard-card">
<h4>Manage Profile</h4>
<p>View and manage your profile information.</p>
<a href="profile.php" class="btn btn-success">Open Profile</a>
</div>
</div>

</div>

</div>

<?php include 'includes/footer.php'; ?>