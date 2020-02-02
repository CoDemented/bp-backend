<?php
    include_once 'config.php';

try {

    $conn = new PDO("mysql:host=$conn_server;", $conn_user, $conn_password);
    echo '<script>console.log("Server [ '.$conn_server.' ] Ok")</script>';

    $conn->exec("CREATE DATABASE IF NOT EXISTS $dbname");
    $conn->exec("USE $dbname");
    echo '<script>console.log("Database [ '.$dbname.' ]  Ok")</script>';

    $conn->exec("CREATE TABLE IF NOT EXISTS $table_name(
                                user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                user_name VARCHAR(50),
                                join_date TIMESTAMP
                                )");
    echo '<script>console.log("Table [ '.$table_name.' ]  Ok")</script>';

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $ex) {
    echo 'ERROR: ' . $ex->getMessage();
}













//
//
//try {
//
//    $conn = new PDO("mysql:host=$conn_server; dbname=$dbname", $conn_user, $conn_password);
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo '<script>console.log("Database [ '.$dbname.' ]  is ready.")</script>';
//
//} catch (Exception $ex) {
//
//        echo 'ERROR: ' . $ex->getMessage();
//        echo '<script>console.log("Database [ '.$dbname.' ]  Does not exist.")</script>';
//        header("refresh:1; create_db.php");
//}






