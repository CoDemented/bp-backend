<?php
include '../../../include/header.php';

function filePath() {
    highlight_file(__FILE__);
}

define("Ref", "");
define("Vid", "https://www.youtube.com/watch?v=1mpXJQ-Hp2o");
?>
    <!--================================================= Code-->

<?php

//-------------------------------------------- Check if username is empty
$user = '';

if (!empty($user)) {
    echo 'User Name is Not Empty'.'<br><br>';
}
else {
    echo 'User Name is Empty'.'<br><br>';
}

//-----------------------------------

$user = 'Demo Name';

if (!empty($user)) {
    echo 'User Name is Not Empty'.'<br><br>';
}
else {
    echo 'User Name is Empty'.'<br><br>';
}
//-------------------------------------------- Check if username is empty

echo "<hr><br>";

//-------------------------------------------- FILTER_VALIDATE_EMAIL
$email = 'haniya@hotmail.com';

if (filter_var($email, FILTER_VALIDATE_EMAIL) == true)
    echo $email.' => Is Valid Email'.'<br><br>';
else
    echo $email.' => Is Invalid Email'.'<br><br>';

//------------------------------

$email2 = 'haniyahotmail.com';

if (filter_var($email2, FILTER_VALIDATE_EMAIL) == true)
    echo $email2.' => Is Valid Email'.'<br><br>';
else
    echo $email2.' => Is Invalid  Email'.'<br><br>';
//-------------------------------------------- FILTER_VALIDATE_EMAIL

?>

    <!--================================================= Code-->
<?php include '../../../include/footer.php'; ?>