<?php
    include_once 'connection.php';

$user_name = 'Uzair Khan';

//--------------------------------- INSERT
//try {
//    $insertQuery = "INSERT INTO $table_name (`user_name`, `join_date`) VALUES (:uname, now())";
//
//    $statement = $conn->prepare($insertQuery);
//
//    $statement->execute(array(":uname" => $user_name));
//
//    echo '<script>console.log("'.$statement->rowCount().' Record with ID='.$conn->lastInsertId().' Inserted")</script>';
//
//} catch (PDOException $ex) {
//    'ERROR: ' . $ex->getMessage();
//}


//--------------------------------- UPDATE
//try {
//    $insertQuery = "UPDATE $table_name SET `user_name` = :uname WHERE user_id=2";
//
//    $statement = $conn->prepare($insertQuery);
//
//    $statement->execute(array(":uname" => $user_name));
//
//    echo '<script>console.log("'.$statement->rowCount().' Record with ID='.$conn->lastInsertId().' Updated")</script>';
//
//} catch (PDOException $ex) {
//    'ERROR: ' . $ex->getMessage();
//}

//--------------------------------- DELETE
//try {
//    $deleteQuery = "DELETE FROM $table_name WHERE user_id=2";
//
//    $statement = $conn->prepare($deleteQuery);
//
//    $statement->execute(array(":uname" => $user_name));
//
//    echo '<script>console.log("'.$statement->rowCount().' Record with ID='.$conn->lastInsertId().' Deleted")</script>';
//
//} catch (PDOException $ex) {
//    'ERROR: ' . $ex->getMessage();
//}


//--------------------------------- SELECT / PRINT
try {
    $selectQuery = "SELECT * FROM $table_name";
    $statement = $conn->query($selectQuery);

    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        echo $row['user_id'].' | '.$row['user_name'].' | '.$row['join_date'].'<br />';
    }

} catch (PDOException $ex) {
    'ERROR: ' . $ex->getMessage();
}