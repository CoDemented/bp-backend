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
<?php include '../../../include/footer.php'; ?>