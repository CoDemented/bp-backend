<?php
include_once 'resource/connection.php';

//process the form
if (isset($_POST['signupBtn'])) {
    //initialize an array to store any error message from the form
    $form_errors = array();

    //form validation
    $required_fields = array('email', 'username', 'password');

    //loop through the required fields array
    foreach ($required_fields as $name_of_field) {
        if (!isset($_POST[$name_of_field]) || $_POST[$name_of_field] == NULL){
            $form_errors[] = $name_of_field . ' is a required field';
        }
    }

    //check if error is empty, if yes process form data and insert record
    if (empty($form_errors)){
        //collect form data and store in variables
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        //hashing the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        try {
            //create SQL insert statement
            $sqlInsert = "INSERT INTO $table_name (username, email, password, join_date)
                     VALUES (:username, :email, :password, now())";

            //use PDO prepared to sanitize data
            $statement = $conn->prepare($sqlInsert);

            //add the data into the database
            $statement->execute(array(
                ":username" => $username,
                ":email" => $email,
                ":password" => $hashed_password,
            ));

            //check if one new row was created
            if ($statement->rowCount() == 1) {
                $result = "<p>Registration Successful</p>";
            }

        } catch (PDOException $ex) {
            $result = 'ERROR OCCURRED: '. $ex->getMessage();
        }
    }
    else {
        if (count($form_errors) == 1) {
            $result = "<p>There was 1 error in the form<br>";

            $result .= "<ul>";
            //loop through error array and display all items
            foreach ($form_errors as $error){
                $result .= "<li>{$error}</li>";
            }
            $result .= "</ul></p>";
        }
        else {
            $result = "<p> There were " .count($form_errors). " errors in the form <br>";

            $result .= "<ul>";
            //loop through error array and display all items
            foreach ($form_errors as $error){
                $result .= "<li>{$error}</li>";
            }
            $result .= "</ul></p>";
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Page</title>
</head>
<body>
<h2>User Athentication System</h2><hr>

<h3>Registration Form</h3>

<?php if (isset($result)) echo $result;  ?>
<form action="" method="post">
    <table>
        <tr><td>Email:</td><td><input type="email" value="" name="email"></td></tr>
        <tr><td>Username:</td><td><input type="text" value="" name="username"></td></tr>
        <tr><td>Password:</td><td><input type="password" name="password"></td></tr>
        <tr><td></td><td><input type="submit" value="Signup" name="signupBtn"></td></tr>
    </table>
</form>


<p><a href="index.php">Back</a></p>

</body>
</html>

















<?php
//    include_once 'resource/connection.php';
//
//    if (isset($_POST['email'])) {
//        $email = $_POST['email'];
//        $username = $_POST['username'];
//        $password = $_POST['password'];
//
//        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
//
//        try {
//            $sqlInsert = "INSERT INTO $table_name (username, email, password, join_date)
//                     VALUES (:username, :email, :password, now())";
//
//            $statement = $conn->prepare($sqlInsert);
//
//            $statement->execute(array(
//                ":username" => $username,
//                ":email" => $email,
//                ":password" => $hashed_password,
//            ));
//
//            if ($statement->rowCount() == 1) {
//                $result = "<p>Registration Successful</p>";
//            }
//
//        } catch (PDOException $ex) {
//            $result = 'ERROR: '. $ex->getMessage();
//        }
//    }
//?>
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Registration Page</title>-->
<!--</head>-->
<!--<body>-->
<!--<h2>User Athentication System</h2><hr>-->
<!---->
<!--<h3>Registration Form</h3>-->
<!---->
<?php //if (isset($result)) echo $result;  ?>
<!--<form action="" method="post">-->
<!--    <table>-->
<!--        <tr><td>Email:</td><td><input type="email" value="" name="email"></td></tr>-->
<!--        <tr><td>Username:</td><td><input type="text" value="" name="username"></td></tr>-->
<!--        <tr><td>Password:</td><td><input type="password" name="password"></td></tr>-->
<!--        <tr><td></td><td><input type="submit" value="Signup"></td></tr>-->
<!--    </table>-->
<!--</form>-->
<!---->
<!---->
<!--<p><a href="index.php">Back</a></p>-->
<!---->
<!--</body>-->
<!--</html>-->