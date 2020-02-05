<?php
    include_once 'connection.php';

//----------------------------------------------- INSERT
//if (isset($_POST['sub'])) {
//    $un = $_POST['un'];
//    if (!empty($un)){
//        insert($un);
//        $res = 'Added';
//    }
//    else {
//        $res = 'Enter name';
//    }
//}

$email = 'test@gmail.com';

if (filter_var($email, FILTER_VALIDATE_EMAIL) == true)
    echo 'right email';
else
    echo 'wrong email';



//---------------------------------------------------------- UPDATE
//update(3, 'Demo3');


//---------------------------------------------------------------------- DELETE
//delete(5);


//--------------------------------- SELECT / PRINT
print_row();
?>
<form action="" method="post">
    <input type="text" name="un">
    <input type="submit" name="sub" value="Add +">
</form>
<?php
    if (isset($res)){echo $res;}
?>
