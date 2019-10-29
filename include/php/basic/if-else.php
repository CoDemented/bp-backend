<?php include '../../../include/header.php'; ?>
<?php
echo "<div class='container pt-5'>";
define("Ref", "https://www.youtube.com/watch?v=T6ULdzlYWXk&list=PLbGui_ZYuhigFdLdbSI2EM2MrJB7I0j-B&index=28");
define("Vid", "https://www.youtube.com/watch?v=T6ULdzlYWXk&list=PLbGui_ZYuhigFdLdbSI2EM2MrJB7I0j-B&index=28");


$s = 10;

if ($s == 10 && $s < 11):
    echo "Condition True";
else:
    echo "Condition False";
endif;




?><br><br>
<a class="" href="<?php echo Ref; ?>">[ Reference ]</a>
<a class="" href="<?php echo Vid; ?>">[ Video ]</a>



<!--<a class="" href="file:///C:/xampp/htdocs/me/bp-backend/index.php">[ Code ]</a>-->


<?php echo '</div>'; ?>
<?php include '../../../include/footer.php'; ?>