<?php
include 'includes/db.php';
include 'includes/header.php';
?>

<div class="container mt-5">

<h2 class="text-center mb-4">Explore Diseases</h2>

<!-- SEARCH BAR -->
<form method="GET" action="diseases.php" class="mb-4">
    <div class="input-group">
        <input 
            type="text" 
            name="search" 
            class="form-control" 
            placeholder="Search disease or medicinal plant..."
            value="<?php if(isset($_GET['search'])) echo $_GET['search']; ?>"
        >

        <button class="btn btn-success" type="submit">
            Search
        </button>
    </div>
</form>

<?php

/* SEARCH LOGIC */
if(isset($_GET['search']) && $_GET['search'] != ""){

    $search = mysqli_real_escape_string($conn, $_GET['search']);

    $query = "SELECT * FROM diseases 
              WHERE disease_name LIKE '%$search%' 
              OR traditional_medicine LIKE '%$search%'";

} else {

    $query = "SELECT * FROM diseases";
}

$result = mysqli_query($conn, $query);

?>

<div class="row">

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<div class="col-md-4">

<div class="card p-3 mb-4 shadow-sm">

    <!-- Disease Name -->
    <h5 class="text-success">
        <?php echo $row['disease_name']; ?>
    </h5>

    <!-- Traditional Medicine -->
    <p class="text-muted">
        <small>
        🌿 
        <?php 
        if(!empty($row['traditional_medicine'])){
            echo substr($row['traditional_medicine'], 0, 120) . "...";
        } else {
            echo "No traditional medicine information available.";
        }
        ?>
        </small>
    </p>

    <!-- Button -->
    <a href="disease_details.php?id=<?php echo $row['id']; ?>" 
       class="btn btn-success">
        View Details
    </a>

</div>

</div>

<?php } ?>

</div>

</div>

<?php include 'includes/footer.php'; ?>