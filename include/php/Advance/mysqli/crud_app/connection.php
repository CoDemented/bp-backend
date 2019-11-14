<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'php_aio');

$link = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
or
die("<h2 class='text-danger'>"."Connection Failed: ". mysqli_connect_error()."</h2>");
?>

