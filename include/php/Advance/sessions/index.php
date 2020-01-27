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

    if (isset($_SESSION['user_name'])) {

//    echo $_SESSION['user_name'].' / '.$_SESSION['user_pass'];
        echo "<table class='table'>";

            echo "<tr>";
                echo "<th>User Name</th>";
                echo "<th>User Password</th>";
            echo "</tr>";


            echo "<tr>";
                echo "<td>{$_SESSION['user_name']}</td>";
                echo "<td>{$_SESSION['user_pass']}</td>";
            echo "</tr>";
        echo "</table>";

    }
    else {
        header("Location: login.php");
    }

    if (isset($_POST['log_out'])) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    }

    ?>

    <form action="" method="POST">
        <input type="submit" name="log_out" value="Sign-out" class="btn btn-danger">
    </form>



<!--================================================= Code-->
<?php include '../../../../include/footer.php';
ob_end_flush();
?>