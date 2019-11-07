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

<form method="POST">
    <input type="text" name="iValue">
    <input type="submit" name="submit">
</form>
<?php
if (isset($_POST['iValue'])) {
    $iVal = $_POST['iValue'];
    
    $i=0;
        while (!empty($iVal[$i])) {
        $i++;
    }
    
    for ($i-=1; $i >= 0; $i--) {
        echo $iVal[$i];
    }
}
?>

<!--================================================= Code-->
<br><br>
<a  href="<?php echo Ref; ?>">[ Reference ]</a>
<a href="<?php echo Vid; ?>">[ Video ]</a>
<a href="#" data-toggle="modal" data-target="#modalCode">[ Code ]</a>
<?php echo '</div>'; ?>
<?php include '../../../include/footer.php'; ?>