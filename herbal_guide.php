<?php
include 'includes/db.php';
include 'includes/header.php';

$query = "SELECT * FROM medicinal_plants";
$result = mysqli_query($conn,$query);
?>

<style>

body {
  background-image: url('images/bg6.jpeg');
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
}

/* Transparent whitish outer container */
.outer-container {
  background-color: rgba(255, 255, 255, 0.92); /* changed from 0.75 to 0.92 */
  border-radius: 16px;
  padding: 30px;
  backdrop-filter: blur(4px);
  -webkit-backdrop-filter: blur(4px);
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

/* Smaller image height */
.herbal-img {
  width: 100%;
  height: 150px;        /* reduced from 200px */
  object-fit: cover;
  border-radius: 8px;
}

/* Tighter card */
.card {
  overflow: hidden;
  background-color: rgba(255, 255, 255, 0.9);
  padding: 10px !important;  /* reduced padding */
}

.card h4 {
  font-size: 1rem;       /* smaller plant name text */
  margin-top: 8px !important;
  margin-bottom: 6px !important;
}

.card .btn {
  padding: 5px 10px;    /* smaller button */
  font-size: 0.875rem;
}

</style>

<div class="container mt-5">

  <!-- Whitish transparent wrapper -->
  <div class="outer-container">

    <div class="row">

      <?php while($row = mysqli_fetch_assoc($result)){ ?>

      <div class="col-md-3">   <!-- changed from col-md-4 to col-md-3 for smaller cards -->
        <div class="card mb-3 shadow-sm">

          <img src="images/<?php echo $row['image']; ?>" class="herbal-img">

          <h4 class="text-success">
            <?php echo $row['plant_name']; ?>
          </h4>

          <a href="plant_details.php?id=<?php echo $row['id']; ?>" 
          class="btn btn-success">
          View Details
          </a>

        </div>
      </div>

      <?php } ?>

    </div>

  </div>

</div>

<?php include 'includes/footer.php'; ?>