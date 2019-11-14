<?php
include '../../../include/header.php';

function filePath()
{
    highlight_file(__FILE__);
}

define("Ref", "");
define("Vid", "");
?>
    <!--================================================= Code-->

<?php
    echo '<code>$var a=10;<br>echo "Value is: $a"; </code>';
    $a = 10;
    echo "Value: \$a = $a";
?>


    <!--================================================= Code-->
<?php include '../../../include/footer.php'; ?>