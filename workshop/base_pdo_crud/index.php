<?php
    include_once 'connection.php';

//----------------------------------------------- INSERT
if (isset($_POST['sub'])) {
    $un = $_POST['un'];
    if ($un == NULL){
        $res = 'Enter name';
    }
    else {
        insert($un);
        $res = 'Added';
    }
}


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
