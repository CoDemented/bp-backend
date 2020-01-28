<?php
$host = 'localhost';
$user = 'root';
$pass = '';

$dbname = 'zzzzzzzzz';
$tblname = 'users';

try {

    $conn = new PDO("mysql:host=$host", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'host connected<br>';

    $stmt = $conn->prepare("CREATE DATABASE IF NOT EXISTS `:dbname`");
    $stmt->bindParam(":dbname", $dbname);
    if ($stmt->execute()) {
        echo "$dbname connected <br>";
    }

    $stmt = $conn->prepare("use `:dbname`");
    $stmt->bindParam(":dbname", $dbname);
    if ($stmt->execute()) {
        echo "$dbname Selected <br>";
    }

    $stmt = $conn->prepare("CREATE TABLE IF NOT EXISTS `:tblName`(
        id int(11) AUTO_INCREMENT PRIMARY KEY,
        name varchar (50),
        join_date timestamp 
    )");

    $stmt->bindParam(":tblName", $tblname);
    if ($stmt->execute()) {
        echo "$tblname Created";
    }

} catch (Exception $ex) {

    echo 'ERROR: '. $ex->getMessage();

}



















//$servername = 'localhost';
//$username = 'root';
//$password = '';
//
//$dbname = 'aaaaaaaaaa';
//$tblname = 'users';


//try {
//    $conn = new PDO("mysql:host=$servername", $username, $password);
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
//    $conn->exec($sql);
//    echo "Database $dbname has created <br>";
//
//    $sql = "use $dbname";
//    $conn->exec($sql);
//    echo "Database $dbname Selected <br>";
//
//    $sql = "CREATE TABLE IF NOT EXISTS $tblname (
//                ID int(11) AUTO_INCREMENT PRIMARY KEY,
//                name varchar(30) NOT NULL,
//join_date timestamp)";
//    $conn->exec($sql);
//    echo "Table $tblname";
//}
//catch(PDOException $e)
//{
//    echo $sql . "<br>" . $e->getMessage();
//}
