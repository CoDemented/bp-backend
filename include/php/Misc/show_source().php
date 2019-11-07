<?php
include '../../../include/header.php';

function filePath() {
    show_source(__FILE__);
}

define("Ref", "");
define("Vid", "");
echo "<div class='container pt-5'>";
?>
<!--================================================= Code-->

<?php

highlight_file(__FILE__);
// OR
//show_source(test.php);

?>



<!--================================================= Code-->
<br><br>
<a  href="<?php echo Ref; ?>">[ Reference ]</a>
<a href="<?php echo Vid; ?>">[ Video ]</a>
<a href="#" data-toggle="modal" data-target="#modalCode">[ Code ]</a>
<?php echo '</div>'; ?>
<?php include '../../../include/footer.php'; ?>