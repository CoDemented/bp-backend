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
    $link = @mysqli_connect('localhost', 'root', '', 'mysqli_crud') or die ('Failed to connect: '. mysqli_connect_error());
?>


<!------------------------------------------------------ INSERT-->
<?php
if (isset($_POST['Edit'])){
//        $query = mysqli_query($link, "UPDATE users SET `name` = 'ali', `number`=3333, `email`='asdf@dsf' WHERE id=79");
    $query = mysqli_query($link, "SELECT * FROM users WHERE id={$_POST['rowID']}");
    $row = mysqli_fetch_assoc($query);

}
?>
<form method="POST">
    <input type="hidden" name="action" value="stop">
    <input type="text" name="Name">
    <input type="text" name="Number">
    <input type="text" name="Email">
    <input type="Submit" name="submit" value="Go">
</form>
<?php
if (isset($_POST['submit'])) {
    echo $_POST['action'];
        $query = mysqli_query($link, "INSERT INTO users (`id`, `name`, `number`, `email`) VALUE (NULL, '".$_POST['Name']."', '".$_POST['Number']."', '".$_POST['Email']."')");
}
?>
<!------------------------------------------------------ INSERT-->

















<!------------------------------------------------------ PRINT-->
<div class="container p-0 flex">
    <?php
    $zero = 0;
    $query = mysqli_query($link, "SELECT * FROM users");
    while($row = mysqli_fetch_assoc($query)){
        $ID = $row['id'];
        $NAME = $row['name'];
        $NUMBER = $zero.$row['number'];
        $EMAIL = $row['email'];
        ?>
        <div class="user-box">
            <span><div><?php echo $ID ;?></div></span>
            <div class="image">
                <img src="../../../../../assets/css/imgs/placeHoder.jpg" alt="">
            </div>
            <div><?php echo $NAME ;?></div>
            <div><?php echo $NUMBER ;?></div>
            <div><?php echo $EMAIL ;?></div>
            <?php //echo $ID; ?>
            <div class="overlay">
                <form method="POST">

                    <input type="hidden" name="rowID" value="<?php if (isset($ID)){echo $ID;}?>">
                    <button type="submit" name="Edit">Edit</button>
                    <button type="submit" name="Delete">Delete</button>
                </form>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<!------------------------------------------------------ PRINT-->

<!------------------------------------------------------ DELETE-->
<?php
if(isset($_POST['Delete'])){
    $query = mysqli_query($link, "DELETE FROM users WHERE id=$ID");
}
?>
<!------------------------------------------------------ DELETE-->

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
    div.user-box > span:first-child {
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
        width: 0px;
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
