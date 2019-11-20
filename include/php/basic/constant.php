<?php
include '../../../include/header.php';

function filePath() {
    highlight_file(__FILE__);
}

define("Ref", "");
define("Vid", "");
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
<?php include '../../../include/footer.php'; ?>