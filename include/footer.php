
</div><!-- Container Div Closed -->
<div class="container pt-5 pb-5">
    <div class="btn-group fa-pull-right" role="group" aria-label="Basic example">
        <a  class="btn btn-outline-dark" href="<?php echo Ref; ?>"><i class="fas fa-stream"></i> Reference</a>
        <a class="btn btn-outline-dark" href="<?php echo Vid; ?>"><i class="far fa-play"></i> Video</a>
        <a class="btn btn-outline-dark" href="#" data-toggle="modal" data-target="#modalCode"><i class="far fa-brackets"></i> Code</a>
    </div>
</div>

<?php echo '</div>'; ?>
<script src="<?php echo _js;?>jqery-341.js"></script>
    <script src="<?php echo _js;?>bootstrap-4.js"></script>
    <script src="<?php echo _js;?>index.js"></script>
    <!-- -------------------------------------------AOS -->
    <script src="<?php echo _plugins;?>aos/aos.js"></script>
    <script>
        AOS.init();
    </script>
<script>
    $("input.inputs-b").click(function () {
        $(this).hide();
        $(".inputs").fadeIn(500);
    });
</script>
    <!-- -------------------------------------------AOS -->
</body>
</html>