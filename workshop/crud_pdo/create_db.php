<?php
include_once 'config.php';
include_once 'utility.php';

try {

    $conn = new PDO("mysql:host=$conn_server", $conn_user, $conn_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $create->database($conn, $dbname);

    header("refresh:1; connection.php");

} catch (Exception $ex) {

    echo 'ERROR: ' . $ex->getMessage();
}