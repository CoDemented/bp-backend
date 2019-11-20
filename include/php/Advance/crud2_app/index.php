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

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $Email = $_POST['email'];

    $query_insert = "INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`) VALUES (NULL, '" . $firstName . "', '" . $lastName . "', '" . $Email . "')";

    if (mysqli_query($link, $query_insert)) {

        ?>

        <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert_insert">
            <strong>Done!</strong> Row has been inserted..
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <?php
    } else {
        echo "Not Inserted: " . mysqli_error($link);
    }
}


if (isset($_POST['delete'])) {
    $query_delete = "DELETE FROM users WHERE id={$_POST['row_id']}";

    if (mysqli_query($link, $query_delete)) {

        ?>

        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alert_delete">
            <strong>Done!</strong> Row has been inserted..
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <script>

        </script>
        <?php

    }
    else {
        echo "not deleted";
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
        <th scope="col" class="width-230px">Action</th>
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
                <form method="POST" class="d-inline">
                <form method="POST" class="d-inline">
                    <input type="hidden" name="row_id" value='<?php echo $row['id']; ?>'>
                    <button type="submit" name="edit" class="oper-btn btn btn-outline-info  btn-block m-0"><i class="fal fa-edit"></i> Edit</button>
                    <button type="submit" name="delete" class="oper-btn btn btn-outline-danger btn-block m-0"><i
                                class="fal fa-trash"></i> Delete
                    </button>
                </form>

            </td>

        </tr>
        <?php
        $counter++;
    } ?>
    <tr>
        <form method="POST">
            <td class="text-center">
                <i class="fal fa-spinner-third"></i>
            </td>
            <td>
                <input size="10" placeholder="First Name" type="text" name="firstName" class="input-fields">
            </td>
            <td>
                <input size="10" placeholder="Last Name" type="text" name="lastName" class="input-fields">

            </td>
            <td>
                <input size="30" placeholder="Email Address" type="email" name="email" class="input-fields">

            </td>
            <td>
                <button class="main-btn btn btn-outline-primary btn-block m-0" type="button"><i class="fal fa-file"></i>
                    New Record
                </button>
                <button class="btnSubmit btn btn-outline-success btn-block m-0" type="submit" name="submit"><i
                            class="fal fa-plus-square"></i> Add
                </button>
            </td>
        </form>
    </tr>
    </tbody>
</table>

<style>
    .input-fields {
        display: none;
    }

    input.input-fields {
        margin: 0;
        padding: 0;
        border: 0;
    }

    .btnSubmit,
    .main-btn {
        border-radius: 0;
        padding: 0px 10px;
    }

    .btnSubmit {
        display: none;
    }

    .oper-btn {
        border-radius: 0;
        padding: 0px 10px;
        width: 100px;
        display: inline;
    }

    .width-230px {
        width: 230px;
    }
</style>


<!--================================================= Code-->
<?php include '../../../../../include/footer.php'; ?>
