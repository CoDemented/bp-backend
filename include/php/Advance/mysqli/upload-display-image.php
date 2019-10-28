<?php include '../../../../include/header.php'; ?>
<?php echo "<div class='container pt-5'>";
define("Ref","#");
define("Vid","https://www.youtube.com/watch?v=JaRq73y5MJk");
?>



<form action="upload.php" method="POST" enctype="multipart/form-data">

    <input type="file" name="file">
    <button type="submit" name="submit">UPLOAD</button>

</form>



<br><br>
<a class="" href="<?php echo Ref; ?>">Refernce</a>
<a class="" href="<?php echo Vid; ?>"> Video</a>
<?php
    
    echo '</div>'; ?>
<?php include '../../../../include/footer.php'; ?>
