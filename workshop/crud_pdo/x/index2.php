<?php
include 'connection.php';

$table_name = $_SESSION['table_name'];

echo $table_name;
//try {
//
//    $statement = $conn->query("SELECT * FROM $table_name");
//
//    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
//        echo $row['id'].' \ '. $row['name'];
//    }
//
//} catch (Exception $ex) {
//    if (strpos($ex->getMessage(), 'Base table or view not found') !== false) {
//
//        echo "Table <span class='red' '>[ $table_name ] </span> Doesn't Exist.<br />
//                So we are going to re-create <span class='red' '>[ $table_name ]</span> Now";
//
//        header("refresh:5; create_table.php");
//
//    } else {
//        echo 'ERROR: ' . $ex->getMessage();
//    }
//}




?>



















<br><br><br><br><br><br><br><br><br><br>

<div class="songs-btn">♬</div>
<div class="songs" style="display: none">
    <a href="https://www.youtube.com/watch?v=GI6dOS5ncFc" target="_blank">♬</a>
    <a href="https://www.youtube.com/watch?v=b30wSEsTJEI" target="_blank">♬</a>
    <a href="https://www.youtube.com/watch?v=QCbqjRz3JaM&list=RDb30wSEsTJEI&index=6" target="_blank">♬</a>
    <a href="https://www.youtube.com/watch?v=unxQQIZiD4Y" target="_blank">♬</a>
    <a href="https://www.youtube.com/watch?v=sHg5Y7sAWTU&list=RDb30wSEsTJEI&index=18" target="_blank">♬</a>
    <a href="https://www.youtube.com/watch?v=LsXNnZa6Iuw&list=RDb30wSEsTJEI&index=27" target="_blank">♬</a>
    <a href="https://www.youtube.com/watch?v=hqI9R645cmg&list=RDb30wSEsTJEI&index=27" target="_blank">♬</a>
    <a href="https://www.youtube.com/watch?v=nQaJqfSZAeo" target="_blank">♬</a>
</div>
<script>
    var songs = document.querySelector(".songs");
    var songsBtn = document.querySelector(".songs-btn");

    var open = 0;
    songsBtn.addEventListener('click', function () {
        if (open == 0) {
            songs.style.display = 'block';
            open = 1;
        }
        else {
            songs.style.display = 'none';
            open = 0;
        }

    })
</script>

