<?php
include '../../../../include/header.php';

function filePath() {
    highlight_file(__FILE__);
}

define("Ref", "#");
define("Vid", "https://www.youtube.com/watch?v=ZJt9IWgsabU&list=PLbGui_ZYuhiiaWMoOK7LXB0GeLsYCiyz5&index=30");
echo "<div class='container pt-5'>";
?>
<!--================================================= Code-->

<?php

//    ---------- Connection with Databse
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "test_db";
    
    $db_connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    if(!$db_connection) {
        die("Database Connection Failed!" . mysqli_connect_error());
    }
    
//    -------- Retrive Data From Database
    
    $sql_query = "SELECT * FROM student";
    
    $result = mysqli_query($db_connection, $sql_query);
    

?>







<!--================================================= Code-->
<br><br>
<a  href="<?php echo Ref; ?>">[ Reference ]</a>
<a href="<?php echo Vid; ?>">[ Video ]</a>
<a href="#" data-toggle="modal" data-target="#modalCode">[ Code ]</a>
<?php echo '</div>'; ?>
<?php include '../../../../include/footer.php'; ?>
