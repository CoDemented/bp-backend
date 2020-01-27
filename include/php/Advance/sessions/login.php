<?php
ob_start();
session_start();

include '../../../../include/header.php';

function filePath() {
    highlight_file(__FILE__);
}

define("Ref", "");
define("Vid", "");
?>
    <!--================================================= Code-->
<?php

if (!isset($_SESSION['user_name'])) {

    if (isset($_POST['log_in'])) {

        $user_name = $_POST['user_name'];
        $user_pass = $_POST['user_pass'];

        $_SESSION['user_name'] = $user_name;
        $_SESSION['user_pass'] = $user_pass;

        header("Location: index.php");
    }
}
else {
    header("Location: index.php");
}

?>
    <form action="" method="POST">
        <input type="text" name="user_name">
        <input type="pass" name="user_pass">
        <input type="submit" name="log_in" value="Sign-in"  class="btn btn-success">
    </form>


    <!--================================================= Code-->
<?php include '../../../../include/footer.php';
ob_end_flush(); ?>