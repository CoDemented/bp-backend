<?php
include '../../../../include/header.php';

function filePath() {
    highlight_file(__FILE__);
}
define("_pdo", _siteUrl . "include/php/Advance/pdo/");
define("Ref", "#");
define("Vid", "https://www.youtube.com/watch?v=T6ULdzlYWXk&list=PLbGui_ZYuhigFdLdbSI2EM2MrJB7I0j-B&index=28");
?>
<!--================================================= Code-->

<?php

    $DSN = "mysqli:host=localhost; dbname=pdo";
    $DB_USER = "root";
    $DB_PASSWORD = "";

    try {
        $connect = new PDO($DSN, $DB_USER, $DB_PASSWORD);
    } catch (PDOException $e) {
        echo "Connection Failed";
    }

?>






<!--================================================= Code-->
<?php include '../../../../include/footer.php'; ?>
