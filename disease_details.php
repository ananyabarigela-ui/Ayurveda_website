

<?php
include 'includes/db.php';
include 'includes/header.php';

$id = $_GET['id'];

$query = "SELECT * FROM diseases WHERE id='$id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
?>

<div class="container mt-4">

<h2 class="text-center mb-4"><?php echo $row['disease_name']; ?></h2>

<div class="row">

<!-- LEFT COLUMN -->
<div class="col-md-6">

<h4 class="text-success">Causes</h4>
<p><?php echo nl2br($row['causes']); ?></p>

<h4 class="text-success">Symptoms</h4>
<p><?php echo nl2br($row['symptoms']); ?></p>

<h4 class="text-success">Traditional Medicine</h4>

<p id="medicineText">
<?php echo nl2br($row['traditional_medicine']); ?>
</p>

<!-- SOUND BUTTON -->
<button onclick="speakText()" class="btn btn-sm btn-outline-success mb-3">
🔊 Pronounce Names
</button>

<br>

<img src="images/<?php echo $row['traditional_image']; ?>" style="width:200px; height:auto;">

<h4 class="text-success mt-3">Preparation & Usage</h4>
<p><?php echo nl2br($row['preparation_usage']); ?></p>

</div>


<!-- RIGHT COLUMN -->
<div class="col-md-6">

<h4 class="text-success">Allopathy Medicine</h4>
<p><?php echo nl2br($row['allopathy_medicine']); ?></p>

<img src="images/<?php echo $row['allopathy_image']; ?>" style="width:200px; height:auto;">

<h4 class="text-success mt-3">Why Traditional Medicine?</h4>
<p><?php echo nl2br($row['why_traditional']); ?></p>

<h4 class="text-success">Side Effects of Allopathy</h4>
<p><?php echo nl2br($row['side_effects']); ?></p>

</div>

</div>

</div>


<!-- SPEECH SCRIPT -->
<script>

function speakText(){

let text = document.getElementById("medicineText").innerText;

let speech = new SpeechSynthesisUtterance(text);

speech.lang = "en-US";

window.speechSynthesis.speak(speech);

}

</script>

<?php include 'includes/footer.php'; ?>