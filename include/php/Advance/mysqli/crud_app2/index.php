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


if (isset($_POST['upload'])) {
    $inc = 0;

    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];
    $file_temp_location = $_FILES['file']['tmp_name'];
    $file_store = "../../../../../upload/" . $file_name;

    if (move_uploaded_file($file_temp_location, $file_store)) {
        echo "Saved";
    }

}

?>
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" name="upload" value="Upload File">
</form>


<?php
    $folder_upload = "../../../../../upload/";

    if (is_dir($folder_upload)) {

        if ($open = opendir($folder_upload)) {

            while (($file = readdir($open)) != false) {

                if ($file == '.' || $file == '..') continue;

//                    echo '<img style="max-width: 200px; margin: 20px;" src="../../../../../upload/'.$file.'">';
                echo '<img style="max-width: 200px; margin: 20px;" src="'.$folder_upload.$file.'">';

            }
            closedir($open);
        }
    }
?>



























<?php
for ($i = 0; $i < 10; $i++) {
    echo "<br>";
}
?>



<?php
$link = @mysqli_connect('localhost', 'root', '', 'mysqli_crud') or die ('Failed to connect: ' . mysqli_connect_error());
?>


<!------------------------------------------------------ INSERT UPDATE-->
<?php
if (isset($_POST['Edit'])) {
    $query = mysqli_query($link, "SELECT * FROM users WHERE id={$_POST['rowID']}");
    $row = mysqli_fetch_assoc($query);
    $_POST['action'] = 'y';


}
if (isset($_POST['submit'])) {

    if ($_POST['action'] == 'y') {
        $query = mysqli_query($link, "UPDATE users SET `name` = '" . $_POST['Name'] . "', `number`='" . $_POST['Number'] . "', `email`='" . $_POST['Email'] . "' WHERE id={$_POST['getID']}");
        $_POST['action'] = 'x';
    } else {
        $query = mysqli_query($link, "INSERT INTO users (`id`, `name`, `number`, `email`) VALUE (NULL, '" . $_POST['Name'] . "', '" . $_POST['Number'] . "', '" . $_POST['Email'] . "')");

    }
}
?>

<form method="POST">
    <input type="hidden" name="action" value="<?php if (isset($_POST['action'])) {
        echo $_POST['action'];
    } ?>">
    <input type="hidden" name="getID" value="<?php if (isset($row['id'])) {
        echo $row['id'];
    } ?>">
    <input type="text" name="Name" value="<?php if (isset($row['name'])) {
        echo $row['name'];
    } ?>">
    <input type="text" name="Number" value="<?php if (isset($row['number'])) {
        echo $row['number'];
    } ?>">
    <input type="text" name="Email" value="<?php if (isset($row['email'])) {
        echo $row['email'];
    } ?>">
    <input type="Submit" name="submit" value="Go">
</form>
<!------------------------------------------------------ INSERT UPDATE-->


<!------------------------------------------------------ DELETE-->
<?php
if (isset($_POST['Delete'])) {
    $query = mysqli_query($link, "DELETE FROM users WHERE id={$_POST['rowID']}");
}
?>
<!------------------------------------------------------ DELETE-->
<!------------------------------------------------------ PRINT-->
<div class="container p-0 flex">
    <?php
    $query = mysqli_query($link, "SELECT * FROM users");
    $ID_Counter = 1;
    while ($row = mysqli_fetch_assoc($query)) {
        $ID = $row['id'];
        $NAME = $row['name'];
        $NUMBER = "0" . $row['number'];
        $EMAIL = $row['email'];
        ?>
        <div class="user-box">
            <span><div><?php echo $ID; ?></div></span>
            <span><div><?php echo $ID_Counter; ?></div></span>
            <div class="image">
                <img src="../../../../../assets/css/imgs/placeHoder.jpg" alt="">
            </div>
            <div><?php echo $NAME; ?></div>
            <div><?php echo $NUMBER; ?></div>
            <div><?php echo $EMAIL; ?></div>
            <?php //echo $ID;
            ?>
            <div class="overlay">
                <form method="POST">
                    <input type="hidden" name="rowID" value="<?php if (isset($ID)) {
                        echo $ID;
                    } ?>">
                    <button type="submit" name="Edit">Edit</button>
                    <button type="submit" name="Delete">Delete</button>
                </form>
            </div>
        </div>
        <?php
        $ID_Counter++;
    }
    ?>
</div>
<!------------------------------------------------------ PRINT-->


<!--================================================= Code-->
<?php include '../../../../../include/footer.php'; ?>


<style>
    .user-box {
        box-shadow: 0 0 3px 0px;
        padding: 10px;
        position: relative;
        margin: 10px;
        max-width: 255px;
    }

    div.user-box > span {
        position: absolute;
        font-size: 25px;
        width: 80px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #333;
        color: #fff;
        font-weight: 600;
        clip-path: polygon(80% 0, 100% 50%, 80% 100%, 0% 100%, 15% 50%, 0% 0%);
    }

    .user-box:hover span:nth-child(2) {
        opacity: 0;
        transition: 1s ease-out;
    }

    .user-box > div {
        font-weight: 600;
        line-height: 1.7;
    }

    .user-box .image img {
        width: 100%;
    }

    .flex {
        display: flex;
        flex-flow: row wrap;
    }

    .user-box .overlay {
        width: calc(100% - 20px);
        height: 0px;
        position: absolute;
        top: 0;
        left: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #333333d1;
        margin: 10px;
        opacity: 0;
        transition: .3s ease-out;
        overflow: hidden;
    }

    .user-box:hover .overlay {
        width: calc(100% - 20px);
        height: calc(100% - 20px);
        position: absolute;
        top: 0;
        left: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #333333d1;
        margin: 10px;
        opacity: 1;
    }
</style>
