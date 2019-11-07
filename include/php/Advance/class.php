<?php
include '../../../include/header.php';

function filePath() {
    highlight_file(__FILE__);
}

define("Ref", "");
define("Vid", "");
echo "<div class='container pt-5'>";
?>
<!--================================================= Code-->


<!--================================================= Code-->
<br><br>
<div class="btn-group" role="group" aria-label="Basic example">
    <a  class="btn btn-outline-dark" href="<?php echo Ref; ?>"><i class="fas fa-stream"></i> Reference</a>
<a class="btn btn-outline-dark" href="<?php echo Vid; ?>"><i class="far fa-play"></i> Video</a>
<a class="btn btn-outline-dark" href="#" data-toggle="modal" data-target="#modalCode"><i class="far fa-brackets"></i> Code</a>
</div>

<?php echo '</div>'; ?>
<?php include '../../../include/footer.php'; ?>