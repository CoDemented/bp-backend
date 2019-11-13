<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'php_aio');

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(!$link){
    die ("Connection Failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM users";

$query_result = mysqli_query($link, $query);

if($query_result){
    $row = mysqli_fetch_assoc($query_result);
//    echo $row['id']." ".$row['first_name']." ".$row['last_name']." ".$row['email'];
}
mysqli_close($link);

?>

