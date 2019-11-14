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

$query = "SELECT * FROM users";
$queryResult = mysqli_query($link, $query);

//    while($row = mysqli_fetch_assoc($queryResult)){
//
//        echo $row['id'].$row['first_name'].$row['last_name'].$row['email'];
//
//    }
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
    <?php while ($row = mysqli_fetch_assoc($queryResult)) { ?>
        <tr>
            <td>
                <?php echo $row['id'] ?>
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
    <?php } ?>
    <tr>
        <td>
            +
        </td>
        <td>

        </td>
        <td>

        </td>
        <td>

        </td>
        <td>
            add
        </td>
    </tr>
    </tbody>
</table>

<?php
    function insertRow($link)
    {
        $firstName = "Salman";
        $lastName = "Khan";
        $Email = "mallu@sallu.com";

        $query_insert = "INSERT INTO users ('first_name', 'last_name', 'email') VALUES ($firstName, $lastName, $Email)";

        if(mysqli_query($link, $query_insert)){
            echo "Inserted";
        } else {
            echo "Not Inserted";
        }

    }
    function test(){
        echo "php function called";
    }

?>
<script>
    function callPhp() {
        var result = "<?php test(); ?>";
        alert(result);
        return false;
    }
</script>
<button onclick="callPhp()">class php</button>
<!--================================================= Code-->
<?php include '../../../../../include/footer.php'; ?>
