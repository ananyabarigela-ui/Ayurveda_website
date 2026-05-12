<?php
include 'includes/db.php';
include 'includes/header.php';
?>

<style>
/* SCOPED ONLY TO THIS PAGE */
.diseases-page {
    background: url('images/bg4.jpeg') no-repeat center center fixed;
    background-size: cover;
    min-height: 100vh;
    padding-top: 10px;
    padding-bottom: 15px;
}

/* WHITE CONTENT BOX */
.content-box {
    background-color: rgba(255, 255, 255, 0.9);
    padding: 25px;
    border-radius: 12px;
    margin-bottom: 0;
}

/* CARD */
.card {
    border-radius: 10px;
}
</style>

<div class="diseases-page">

<div class="container mt-2 mb-0">

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

<!-- CONTENT BOX START -->
<div class="content-box">

<?php

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

<div class="row g-4">

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<div class="col-md-4 d-flex">
<div class="card p-3 shadow-sm h-100 w-100 d-flex flex-column">

    <h5 class="text-success">
        <?php echo $row['disease_name']; ?>
    </h5>

    <p class="text-muted flex-grow-1">
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

    <a href="disease_details.php?id=<?php echo $row['id']; ?>" 
       class="btn btn-success mt-auto">
        View Details
    </a>

</div>
</div>

<?php } ?>

</div>

</div> <!-- CONTENT BOX END -->

</div>
</div>

<?php include 'includes/footer.php'; ?>