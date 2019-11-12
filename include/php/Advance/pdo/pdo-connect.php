<?php
include '../../../../include/header.php';

function filePath() {
    highlight_file(__FILE__);
}
define("_pdo", _siteUrl . "include/php/Advance/pdo/");
define("Ref", "#");
define("Vid", "https://www.youtube.com/watch?v=T6ULdzlYWXk&list=PLbGui_ZYuhigFdLdbSI2EM2MrJB7I0j-B&index=28");
echo "<div class='container pt-5'>";
?>
<!--================================================= Code-->

<h1 class="display-4"  id="secTitle">
    <a href="<?php echo _pdo; ?>index.php"><?php echo basename(__FILE__); ?></a>
</h1>






<!--================================================= Code-->
<br><br>
<a  href="<?php echo Ref; ?>">[ Reference ]</a>
<a href="<?php echo Vid; ?>">[ Video ]</a>
<a href="#" data-toggle="modal" data-target="#modalCode">[ Code ]</a>
<?php echo '</div>'; ?>
<?php include '../../../../include/footer.php'; ?>
