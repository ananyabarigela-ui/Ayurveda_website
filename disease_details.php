<?php
include 'includes/db.php';
include 'includes/header.php';

$id = $_GET['id'];

$query = "SELECT * FROM diseases WHERE id='$id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
?>

<style>
/* PAGE BACKGROUND */
.page-bg {
    background: url('images/bg1.jpg') no-repeat center center fixed;
    background-size: cover;
    min-height: 100vh;
    padding-top: 30px;
    padding-bottom: 30px;
}

/* CONTENT BOX */
.content-box {
    background: rgba(255, 255, 255, 0.9);
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);

}
/* ZOOM IMAGE */
.zoom-img {
  cursor: zoom-in;
  transition: all 0.3s ease;
}

.zoom-img.zoomed {
  width: 100%;
  max-width: 600px;
  display: block;
  margin: 15px auto;
  cursor: zoom-out;
}

/* HEADINGS */
.section-title {
    font-weight: 500;
    font-size: 24px;
    color: #2e7d32;
    margin-top: 15px;
    margin-bottom: 5px;
}

/* CONTENT TEXT */
.section-content {
    font-size: 18px;
    margin-bottom: 10px;
    line-height: 1.4;
}

/* IMAGE */
.info-img {
    width: 220px;
    height: auto;
    border-radius: 10px;
    margin: 8px 0;
}
</style>

<div class="page-bg">

<div class="container mt-4">
<div class="content-box">

<h2 class="text-center mb-4 fw-bold">
    <?php echo $row['disease_name']; ?>
</h2>

<!-- CAUSES -->
<h4 class="section-title">Causes:</h4>
<p class="section-content">
    <?php echo nl2br($row['causes']); ?>
</p>

<!-- SYMPTOMS -->
<h4 class="section-title">Symptoms:</h4>
<p class="section-content">
<?php 
$symptoms = trim($row['symptoms']);
$symptoms = preg_replace("/\n\s*\n/", "\n", $symptoms);
echo nl2br($symptoms);
?>
</p>

<!-- TRADITIONAL -->
<h4 class="section-title">Traditional Medicine:</h4>

<p id="medicineText" class="section-content">
    <?php echo nl2br($row['traditional_medicine']); ?>
</p>

<!-- SOUND BUTTON -->
<button onclick="speakText()" class="btn btn-sm btn-outline-success mb-3">
🔊 Pronounce Names
</button>

<br>

<img src="images/<?php echo $row['traditional_image']; ?>" class="info-img zoom-img" onclick="toggleZoom(this)">

<!-- PREPARATION -->
<h4 class="section-title">Preparation & Usage:</h4>
<p class="section-content">
    <?php echo nl2br($row['preparation_usage']); ?>
</p>

<!-- ALLOPATHY -->
<h4 class="section-title">Allopathy Medicine:</h4>
<p class="section-content">
<?php 
$allopathy = trim($row['allopathy_medicine']);
$allopathy = preg_replace("/\n\s*\n/", "\n", $allopathy);
echo nl2br($allopathy);
?>
</p>

<img src="images/<?php echo $row['allopathy_image']; ?>" class="info-img zoom-img" onclick="toggleZoom(this)">

<!-- WHY TRADITIONAL -->
<h4 class="section-title">Why Traditional Medicine?</h4>
<p class="section-content">
    <?php echo nl2br($row['why_traditional']); ?>
</p>

<!-- SIDE EFFECTS -->
<h4 class="section-title">Side Effects of Allopathy:</h4>
<p class="section-content">
    <?php echo nl2br($row['side_effects']); ?>
</p>

</div> <!-- content-box -->
</div> <!-- container -->

</div> <!-- page-bg -->

<!-- SPEECH SCRIPT -->
<script>
function speakText(){
    let text = document.getElementById("medicineText").innerText;
    let speech = new SpeechSynthesisUtterance(text);
    speech.lang = "en-US";
    window.speechSynthesis.speak(speech);
}

/* ZOOM FUNCTION */
function toggleZoom(img){
  img.classList.toggle("zoomed");
}
</script>

<?php include 'includes/footer.php'; ?>