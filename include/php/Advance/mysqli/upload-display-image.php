<?php
include '../../../../include/header.php';

function filePath() {
    highlight_file(__FILE__);
}

define("Ref", "#");
define("Vid", "https://www.youtube.com/watch?v=T6ULdzlYWXk&list=PLbGui_ZYuhigFdLdbSI2EM2MrJB7I0j-B&index=28");
echo "<div class='container pt-5'>";
?>
<!--================================================= Code-->



<form action="upload.php" method="POST" enctype="multipart/form-data">

    <input type="file" name="file">
    <button type="submit" name="submit">UPLOAD</button>

</form>






<!--================================================= Code-->
<br><br>
<a  href="<?php echo Ref; ?>">[ Reference ]</a>
<a href="<?php echo Vid; ?>">[ Video ]</a>
<a href="#" data-toggle="modal" data-target="#modalCode">[ Code ]</a>
<?php echo '</div>'; ?>
<?php include '../../../../include/footer.php'; ?>
