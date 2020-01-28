<?php session_start(); ?>

<?php
$server = $_SESSION['server'];
$user = $_SESSION['user'];
$pass = $_SESSION['pass'];
$dbname = $_SESSION['dbname'];

try {

    $conn = new PDO("mysql:host=$server;", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    $conn->exec($sql);
    echo "Database $dbname has created <br>";
    header("refresh:5; connection.php");

} catch (Exception $ex) {

    echo 'ERROR: ' . $ex->getMessage();

}