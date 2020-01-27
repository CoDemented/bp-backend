<?php
include_once 'Database.php';

$name = "PHP PDO 3";
$description = "Build a basic task list";


try {

    //build the query
    $insertQuery = "INSERT INTO books (name, description, created_at)
                VALUES (:book_name, :description, now())";

    //prepared the query
    $statement = $conn->prepare($insertQuery);

    //execute the statement
//    $statement->execute(array(":book_name" => $name, ":description" => $description));

    $statement->bindParam(":book_name", $name);
    $statement->bindParam(":description", $description);

    $statement->execute();
    echo 'Record Created';

} catch (PDOException $ex) {
    echo "AN ERROR OCCURRED: " . $ex->getMessage();
}