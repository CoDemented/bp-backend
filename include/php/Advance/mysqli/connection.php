<?php
include '../../../../include/header.php';

function filePath() {
    highlight_file(__FILE__);
}

define("Ref", "#");
define("Vid", "https://www.youtube.com/watch?v=ZJt9IWgsabU&list=PLbGui_ZYuhiiaWMoOK7LXB0GeLsYCiyz5&index=30");
echo "<div class='container pt-5'>";
?>
<!--================================================= Code-->

<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'test_db');

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(!$link){
    die ("Connection Failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM users";

$query_result = mysqli_query($link, $query);

if($query_result){
    $row = mysqli_fetch_assoc($query_result);
//    echo $row['id']." ".$row['first_name']." ".$row['last_name']." ".$row['email'];
}
mysqli_close($link);
?>







<!--================================================= Code-->
<br><br>
<a  href="<?php echo Ref; ?>">[ Reference ]</a>
<a href="<?php echo Vid; ?>">[ Video ]</a>
<a href="#" data-toggle="modal" data-target="#modalCode">[ Code ]</a>
<?php echo '</div>'; ?>
<?php include '../../../../include/footer.php'; ?>
