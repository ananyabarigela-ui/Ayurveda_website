<?php
include 'includes/db.php';
include 'includes/header.php';

$id = $_GET['id'];

$query = "SELECT * FROM medicinal_plants WHERE id=$id";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
?>

<style>
.detail-img {
  width: 100%;
  max-height: 400px;
  object-fit: cover;
  border-radius: 10px;
}
</style>

<div class="container mt-5">

<h2 class="text-success"><?php echo $row['plant_name']; ?></h2>

<img src="images/<?php echo $row['image']; ?>" style="width:100%; max-width:400px; height:auto; object-fit:cover;">

<h4 class="text-success">Sanskrit Name
  <button onclick="speakText('<?php echo $row['sanskrit_name']; ?>')">🔊</button>
</h4>
<p><?php echo $row['sanskrit_name']; ?></p>

<h4 class="text-success">Scientific Name
  <button onclick="speakText('<?php echo $row['scientific_name']; ?>')">🔊</button>
</h4>
<p><?php echo $row['scientific_name']; ?></p>

<h4 class="text-success">Other Names</h4>
<p><?php echo $row['other_names']; ?></p>

<h4 class="text-success">Benefits</h4>
<p><?php echo nl2br($row['benefits']); ?></p>

</div>
<script>
function speakText(text) {
    // Create a new SpeechSynthesisUtterance object
    var msg = new SpeechSynthesisUtterance();
    msg.text = text;
    msg.lang = 'en-US'; // You can use 'hi-IN' for Hindi if needed
    window.speechSynthesis.speak(msg);
}
</script>

<?php include 'includes/footer.php'; ?>