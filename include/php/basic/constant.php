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

<?php
echo "<h4>Ex:</h4>";

echo "<code>define('_siteUrl', 'http://localhost/me/bp-backend/');</code><br>";
echo "<code>echo _siteUrl;</code>";

echo "<br><br><h5>Result</h5>";
echo _siteUrl;
?>

<!--================================================= Code-->
<br><br>
<a  href="<?php echo Ref; ?>">[ Reference ]</a>
<a href="<?php echo Vid; ?>">[ Video ]</a>
<a href="#" data-toggle="modal" data-target="#modalCode">[ Code ]</a>
<?php echo '</div>'; ?>
<?php include '../../../include/footer.php'; ?>