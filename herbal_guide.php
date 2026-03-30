<?php
include 'includes/db.php';
include 'includes/header.php';

$query = "SELECT * FROM medicinal_plants";
$result = mysqli_query($conn,$query);
?>

<style>
.herbal-img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-radius: 8px;
}

.card {
  overflow: hidden;
}
</style>

<div class="container mt-5">

<h2 class="text-center mb-4">Herbal Guide</h2>

<div class="row">

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<div class="col-md-4">

<div class="card p-3 mb-4 shadow">

<img src="images/<?php echo $row['image']; ?>" class="herbal-img">

<h4 class="text-success mt-2">
  <?php echo $row['plant_name']; ?>
</h4>

<a href="plant_details.php?id=<?php echo $row['id']; ?>" 
class="btn btn-success mt-2">
View Details
</a>

</div>

</div>

<?php } ?>

</div>

</div>

<?php include 'includes/footer.php'; ?>