<?php
include '../../../include/header.php';

function filePath() {
    highlight_file(__FILE__);
}

define("Ref", "");
define("Vid", "");
?>
    <!--================================================= Code-->
<?php

$var = "hello";
echo $var2 = substr($var, 2).md5($var).substr($var, 4);

//echo (md5($var) == $varc) ? "Correct" : "Incorrect";

//echo





echo '<br>-------------------------- empty();<br>';

$x = '$x';
$y = '';
if(!empty($x) || !empty($y)){
    echo $x;
    echo $y;
}



echo '<br><br><br>-------------------------- str_replace();<br>';

$sr = 'hi i am Ali';
echo str_replace('Ali', 'Zohaib', $sr);




echo '<br><br><br>-------------------------- strlen();<br>';

$sl = 'hi i am Ali';
echo strlen($sl);




echo '<br><br><br>-------------------------- substr();<br>';

$ss = 'Hello World!';
echo substr($ss, 2);




echo '<br><br><br>-------------------------- uniqid();<br>';

echo uniqid();





echo '<br><br><br>-------------------------- uniqid();<br>';

$check = array();
if(is_array($check)){
   echo "Its an Array";
} else {
    echo "Its not an Array";
}




echo '<br><br><br>-------------------------- uniqid();<br>';

$num = 333;
echo serialize($num);


?>
    <!--================================================= Code-->
<?php include '../../../include/footer.php'; ?>