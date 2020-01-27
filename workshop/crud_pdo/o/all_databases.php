<?php
$dbname = '';

$dsn = "mysql:host = localhost;";
$username = 'root';
$pass = '';


try {

    $mysql = new PDO($dsn, $username, $pass);
    $mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo 'MYSQL Connected<br /><br />';

} catch (Exception $ex) {

    echo 'ERROR::' . $ex->getMessage();

}

$show_databases = "SHOW DATABASES";
$c = 1;

echo "<form method='get' action='connect-database.php'>";
echo "<select name='select_database'>";

foreach ($mysql->query($show_databases) as $all_databases) {

    echo "<option value='" . $all_databases['Database'] . "' selected>";
    echo $c . ': ' . $all_databases['Database'];
    echo "<br />";
    echo "</option>";

    $c++;
}
echo "</select name='select_database'>";

echo "<input type='text' name='db_user' value='root'>";
echo "<input type='password' name='db_pass' value=''>";
echo "<input type='submit' name='connect_database' value='Connect'>";
echo "</form>";


















