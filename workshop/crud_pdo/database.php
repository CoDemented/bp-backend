<?php

$servername = 'localhost';
$dsn = "mysql:host=localhost;";
$username = 'root';
$password = '';

$dbname = 'pdo_crud_01';

$tblname = 'users';

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    $conn->exec($sql);
    echo "Database $dbname has created <br>";

    $sql = "use $dbname";
    $conn->exec($sql);
    echo "Database $dbname Selected <br>";

    $sql = "CREATE TABLE IF NOT EXISTS $tblname (
                ID int(11) AUTO_INCREMENT PRIMARY KEY,
                name varchar(30) NOT NULL,
join_date timestamp)";
    $conn->exec($sql);
    echo "Table $tblname";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}
