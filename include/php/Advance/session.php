<?php include '../../../include/header.php'; ?>
<?php echo "<div class='container pt-5'>";
define("Ref","https://www.php.net/manual/en/language.types.string.php");
define("Vid","https://www.youtube.com/watch?v=a-gOfua762w");


$fff = 000000000;

// echo "<code>define('_siteUrl', 'http://localhost/me/bp-backend/');</code>";

$code = "define('_siteUrl', 'http://localhost/me/bp-backend/');";
echo '<code>' . htmlspecialchars($code) . '</code>';



?>
<br><br>
<a class="" href="<?php echo Ref; ?>">Refernce</a>
<a class="" href="<?php echo Vid; ?>"> Video</a>
<?php

echo '</div>'; ?>
<?php include '../../../include/footer.php'; ?>