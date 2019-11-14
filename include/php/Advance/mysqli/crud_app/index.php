<?php
include '../../../../../include/header.php';

function filePath()
{
    highlight_file(__FILE__);
}

define("Ref", "#");
define("Vid", "https://www.youtube.com/watch?v=ZJt9IWgsabU&list=PLbGui_ZYuhiiaWMoOK7LXB0GeLsYCiyz5&index=30");
?>
<!--================================================= Code-->
<?php

include "connection.php";
//    while($row = mysqli_fetch_assoc($queryResult)){
//
//        echo $row['id'].$row['first_name'].$row['last_name'].$row['email'];
//
//    }
?>
<?php
if(isset($_POST['submit'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $Email = $_POST['email'];

    $query_insert = "INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`) VALUES (NULL, '".$firstName."', '".$lastName."', '".$Email."')";

    if(mysqli_query($link, $query_insert)){
        echo "Inserted";
//        header("Location: index.php");

    } else {
        echo "Not Inserted: ".mysqli_error($link);
    }
}

$query = "SELECT * FROM users";
$queryResult = mysqli_query($link, $query);

?>

<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $counter = 1;
    while ($row = mysqli_fetch_assoc($queryResult)) { ?>
        <tr>
            <td>
                <?php echo $counter; ?>
            </td>
            <td>
                <?php echo $row['first_name'] ?>
            </td>
            <td>
                <?php echo $row['last_name'] ?>
            </td>
            <td>
                <?php echo $row['email'] ?>
            </td>
            <td>
                Update

                Delete
            </td>
        </tr>
    <?php
        $counter++;
    } ?>
    <tr>
        <form method="POST">
        <td>
            <i class="fal fa-spinner-third fa-spin"></i>
        </td>
        <td>
            <input placeholder="First Name" type="text" name="firstName" class="inputs">
        </td>
        <td>
            <input placeholder="Last Name" type="text" name="lastName" class="inputs">

        </td>
        <td>
            <input placeholder="Email Address" type="email" name="email" class="inputs">

        </td>
        <td>
            <input type="button" value="Add"  class="inputs-b">
            <input type="submit" name="submit" class="inputs">
        </td>
        </form>
    </tr>
    </tbody>
</table>
<style>
    .inputs {
        display: none;
    }
    input.inputs {
        margin: 0;
        padding: 0;
        width: 100%;
        padding-left: 8px;
    }
</style>










<!--================================================= Code-->
<?php include '../../../../../include/footer.php'; ?>
