<?php
    include_once 'config.php';

try {

    $conn = new PDO("mysql:host=$conn_server; dbname=$dbname", $conn_user, $conn_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo '<script>console.log("Database [ '.$dbname.' ]  Ready..")</script>';

} catch (Exception $ex) {

    if (strpos($ex->getMessage(), 'SQLSTATE[HY000] [1049]') !== false) {

        echo '<script>console.log("Database [ '.$dbname.' ]  Does not exist, Re-creating...")</script>';
        try {


            $conn2 = new PDO("mysql:host=$conn_server;", $conn_user, $conn_password);
            $conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $conn2->exec("CREATE DATABASE IF NOT EXISTS $dbname");
            echo '<script>console.log("Database [ '.$dbname.' ]  Created.")</script>';

            $conn2->exec("USE $dbname");
            echo '<script>console.log("Database [ '.$dbname.' ]  Connected.")</script>';

            $conn2->exec("CREATE TABLE IF NOT EXISTS $table_name(
    
                                id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                name VARCHAR (50)
                    
                                )");
            echo '<script>console.log("table [ '.$table_name.' ]  Created")</script>';


        } catch (Exception $ex) {

                echo 'ERROR: ' . $ex->getMessage();
        }


    } else {
        echo 'ERROR: ' . $ex->getMessage();
    }

}






