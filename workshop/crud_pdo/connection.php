<?php
    include_once 'config.php';

try {

    $conn = new PDO("mysql:host=$conn_server; dbname=$dbname", $conn_user, $conn_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo '<script>console.log("Database [ '.$dbname.' ]  is ready.")</script>';

} catch (Exception $ex) {

        echo 'ERROR: ' . $ex->getMessage();
        echo '<script>console.log("Database [ '.$dbname.' ]  Does not exist.")</script>';
        header("refresh:1; create_db.php");
}






