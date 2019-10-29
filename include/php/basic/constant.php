<?php include '../../../../include/header.php'; ?>
<?php echo "<div class='container pt-5'>";
define("Ref","https://www.php.net/manual/en/language.types.string.php");
define("Vid","");



echo "<h4>Ex:</h4>";

echo "<code>define('_siteUrl', 'http://localhost/me/bp-backend/');</code><br>";
echo "<code>echo _siteUrl;</code>";

echo "<br><br><h5>Result</h5>";
echo _siteUrl;


?><br><br>
<a class="" href="<?php echo Ref; ?>">[ Refernce ]</a>
<a class="" href="<?php echo Vid; ?>">[ Video ]</a>
<?php



echo '</div>'; ?>
<?php include '../../../../include/footer.php'; ?>