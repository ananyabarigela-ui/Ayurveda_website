<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location:login.php");
    exit();
}

include 'includes/header.php';
?>

<style>
/* Hero section background */
.hero-section {
    position: relative;
    background: url('images/bg4.jpeg') no-repeat center center/cover;
    height: 300px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

/* Dark overlay */
.hero-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
}

/* Ensure text stays above overlay */
.hero-section h1,
.hero-section p {
    position: relative;
    z-index: 1;
}
</style>

<div class="hero-section text-center text-white">
    <h1>Welcome, Health Seeker!</h1>
    <p>Discover natural remedies and balance your Doshas.</p>
</div>

<div class="container mt-5 mb-4">
    <div class="row g-4">

        <div class="col-md-4 d-flex">
            <div class="card dashboard-card h-100 w-100 text-center p-4">
                <h4>Explore Diseases</h4>
                <p>Find Ayurvedic treatments for common ailments.</p>
                <a href="diseases.php" class="btn btn-success mt-auto">View List</a>
            </div>
        </div>

        <div class="col-md-4 d-flex">
            <div class="card dashboard-card h-100 w-100 text-center p-4">
                <h4>Herbal Guide</h4>
                <p>Learn about medicinal plants and their benefits.</p>
                <a href="herbal_guide.php" class="btn btn-success mt-auto">Read More</a>
            </div>
        </div>

        <div class="col-md-4 d-flex">
            <div class="card dashboard-card h-100 w-100 text-center p-4">
                <h4>Manage Profile</h4>
                <p>View and manage your profile information.</p>
                <a href="profile.php" class="btn btn-success mt-auto">Open Profile</a>
            </div>
        </div>

    </div>
</div>
<?php if(isset($_SESSION['show_profile_popup'])): ?>
    
<!-- Bootstrap Modal -->
<div class="modal fade" id="profileModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title">Welcome!</h5>
      </div>
      
      <div class="modal-body">
        <p>Login successful 🎉</p>
        <p>Do you want to complete your profile?</p>
      </div>
      
      <div class="modal-footer">
        <a href="profile.php" class="btn btn-success">Go to Profile</a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Later</button>
      </div>

    </div>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var myModal = new bootstrap.Modal(document.getElementById('profileModal'));
    myModal.show();
});
</script>

<?php 
// remove popup after showing once
unset($_SESSION['show_profile_popup']); 
endif; 
?>

<?php include 'includes/footer.php'; ?>