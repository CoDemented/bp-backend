<?php
$dbname = 'ssssss';
$servername = 'localhost';
$dsn = "mysql:host=localhost;";
$username = 'root';
$password = '';


try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    $conn->exec($sql);
    echo "Database $dbname has created <br>";

    $sql = "use $dbname";
    $conn->exec($sql);
    echo "Database $dbname Selected <br>";

    $sql = "CREATE TABLE IF NOT EXISTS ARTISTS (
                ID int(11) AUTO_INCREMENT PRIMARY KEY,
                artistname varchar(30) NOT NULL)";
    $conn->exec($sql);
    echo "Table created";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

//try {
//
//    $conn = new PDO($dsn, $db_user, $db_pass);
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo 'Connected';
//    $sql = "CREATE DATABASE IF NOT EXISTS musicDB";
//    $conn->exec($sql);
//    echo "DB created successfully";
//
//} catch (Exception $ex) {
//    echo 'AN ERROR OCCURRED: '. $ex->getMessage();
//
//}