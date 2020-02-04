<?php
$conn_server = $_SERVER['SERVER_NAME'];
$conn_user = 'root';
$conn_password = '';

$dbname = 'database01';
$table_name = 'users';

//-------------------------------------------- INSERT
function insert($user_name = 'No name') {
    global $table_name, $conn;

    try {
        $insertQuery = "INSERT INTO $table_name (`user_name`, `join_date`) VALUES (:uname, now())";

        $statement = $conn->prepare($insertQuery);

        $statement->execute(array(":uname" => $user_name));

        echo '<script>console.log("'.$statement->rowCount().' Record with ID='.$conn->lastInsertId().' Inserted")</script>';

    } catch (PDOException $ex) {
        'ERROR: ' . $ex->getMessage();
    }
}
//-------------------------------------------- INSERT
//----------------------------------------------------- UPDATE
function update($id, $user_name) {
    global $table_name, $conn;

    try {
        $insertQuery = "UPDATE $table_name SET `user_name` = :uname WHERE user_id=$id";

        $statement = $conn->prepare($insertQuery);

        $statement->execute(array(":uname" => $user_name));

        echo '<script>console.log("'.$statement->rowCount().' Record with ID='.$id.' Updated")</script>';

    } catch (PDOException $ex) {
        'ERROR: ' . $ex->getMessage();
    }
}
//update(3, 'New Name');
//----------------------------------------------------- UPDATE

//---------------------------------------------------------------------- DELETE
function delete($id) {
    global $table_name, $conn, $user_name;

    try {
        $deleteQuery = "DELETE FROM $table_name WHERE user_id=$id";

        $statement = $conn->prepare($deleteQuery);

        $statement->execute(array(":uname" => $user_name));

        echo '<script>console.log("'.$statement->rowCount().' Record with ID='.$id.' Deleted")</script>';

    } catch (PDOException $ex) {
        'ERROR: ' . $ex->getMessage();
    }
}
//---------------------------------------------------------------------- DELETE

//--------------------------------- SELECT / PRINT
function print_row()
{
    global $table_name, $conn;

    try {
        $selectQuery = "SELECT * FROM $table_name";
        $statement = $conn->query($selectQuery);

        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            echo $row['user_id'].' | '.$row['user_name'].' | '.$row['join_date'].'<br />';
        }
    } catch (PDOException $ex) {

        'ERROR: ' . $ex->getMessage();
    }
}
//--------------------------------- SELECT / PRINT
