<?php
include_once 'Database.php';

$table = "CREATE TABLE IF NOT EXISTS books (
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            name VARCHAR(100),
            describtion VARCHAR(100),
            created_at TIMESTAMP
            )";

try {
    $conn->query($table);
    echo 'Table Created';
} catch (PDOException $ex) {
    echo 'Failed to Create Table'. $ex->getMessage();
}