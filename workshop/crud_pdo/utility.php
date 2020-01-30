<?php
class create {

    function database($conn, $dbname)
    {
        try {
            $conn->exec("CREATE DATABASE IF NOT EXISTS $dbname");
            echo '<script>console.log("Database [ '.$dbname.' ]  Re-created.")</script>';

            $conn->exec("USE $dbname");
            echo '<script>console.log("Database [ '.$dbname.' ]  Connected.")</script>';

        } catch (PDOException $ex) {

            echo $ex->getMessage();
        }
    }

    function table($conn, $table_name)
    {
        try {
            $conn->exec("CREATE TABLE IF NOT EXISTS $table_name(
                                user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                user_name VARCHAR(50), 
                                join_date TIMESTAMP)");
            echo '<script>console.log("Table [ '.$table_name.' ]  Created.")</script>';
        } catch (PDOException $ex) {

            echo $ex->getMessage();
        }
    }
}
$create = new create();