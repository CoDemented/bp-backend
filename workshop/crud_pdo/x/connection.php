<?php session_start();
$server = $_SERVER['SERVER_NAME'];
$user = 'root';
$pass = '';

$dbname = 'myDatabase02';
$table_name = 'users';


$_SESSION['server'] = $server;
$_SESSION['user'] = $user;
$_SESSION['pass'] = $pass;

$_SESSION['dbname'] = $dbname;
$_SESSION['table_name'] = $table_name;

try {

    $conn = new PDO("mysql:host=$server; dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    ?>
    <script>
        const result = document.querySelector('.dnone-2s');
        setTimeout(() => {
            result.style.display = 'none';
        }, 2000);
    </script>
    <?php

} catch (Exception $ex) {

    if (strpos($ex->getMessage(), 'SQLSTATE[HY000] [1049]') !== false) {

        echo "Database <span class='red' '>[ $dbname ] </span> Doesn't Exist.<br />
                So we are going to re-create <span class='red' '>[ $dbname ]</span> Now";

        header("refresh:5; create_db.php");

    } else {
        echo 'ERROR: ' . $ex->getMessage();
    }

}
echo "
<style>
    .red {color: red; font-weight: bold;}
</style>
";

//session_unset();
//session_destroy();













//try {
//
//    $conn = new PDO("mysql:host=$host", $user, $pass);
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo 'host connected<br><br>';
//
//    $stmt = $conn->prepare("CREATE DATABASE IF NOT EXISTS `:dbname`");
//    $stmt->bindParam(":dbname", $dbname);
//    if ($stmt->execute()) {
//        echo "$dbname connected <br><br>";
//    }
//
//    $stmt = $conn->prepare("use `:dbname`");
//    $stmt->bindParam(":dbname", $dbname);
//    if ($stmt->execute()) {
//        echo "$dbname Selected <br><br>";
//    }
//
//    $stmt = $conn->prepare("CREATE TABLE IF NOT EXISTS `:tblName`(
//        id int(11) AUTO_INCREMENT PRIMARY KEY,
//        name varchar (50),
//        join_date timestamp
//    )");
//
//    $stmt->bindParam(":tblName", $tblname);
//    if ($stmt->execute()) {
//        echo "$tblname Created<br><br>";
//    }
//
//} catch (Exception $ex) {
//
//    echo 'ERROR: '. $ex->getMessage();
//
//}


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
