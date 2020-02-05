<?php
define("_siteUrl", "http://localhost/php_aio/");
define("_css", _siteUrl . "assets/css/");
define("_js", _siteUrl . "assets/js/");
define("_plugins", _siteUrl . "assets/plugins/");

define("_php", _siteUrl . "include/php/");
define("_phpMisc", _siteUrl . "include/php/misc/");
define("_phpBasic", _siteUrl . "include/php/basic/");
define("_phpAdvance", _siteUrl . "include/php/advance/");
define("BR", "<br>");
function BR($count=1){
    for ($i=0; $i<=$count; $i++){
        echo "<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo _css; ?>bootstrap-4.css">
    <link rel="stylesheet" href="<?php echo _css; ?>font_awesome_pro/css/all.css">
    <link rel="stylesheet" href="<?php echo _css; ?>style.css">
    <link rel="stylesheet" href="<?php echo _plugins; ?>aos/aos.css">
    <title>BP-Project</title>
</head>

<body>
<!---------------------------------------------------- Pre-Loader -->
<div class="loading">
    <img src="<?php echo _css; ?>imgs/loader.gif" alt="">
</div>
<style>
    .loading {
        display: none !important;
        width: 100vw;
        height: 100vh;
        background: #fff;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 555;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        user-select: none;
    }
</style>
<!---------------------------------------------------- Pre-Loader -->

<!--            <div class="top-line"><span></span></div>
        <div class="container">
            <a href="<?php echo _siteUrl; ?>index.php">
                <div class="shadows">
                    <span>C</span><span>o</span><span>D</span><span>e</span><span>m</span><span>e</span><span>n</span><span>t</span><span>e</span><span>d</span>
                </div>
            </a>
        </div> -->

<!-- ----------------------------------Top Navigations -->
<div id="menu_area" class="menu-area">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-light navbar-expand-lg mainmenu pt-0 pb-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">


                        <li class=""><a href="<?php echo _siteUrl; ?>">
                                <!--<i class="fal fa-home-lg"></i>-->HOME
                                <span class="sr-only">(current)</span></a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">BASIC</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="dropdown">
                                <li><a href="<?php echo _phpBasic; ?>constant.php">Constant</a></li>
                                <li><a href="<?php echo _phpBasic; ?>variables.php">Variables</a></li>
                                <li><a href="<?php echo _phpBasic; ?>string-interpolation.php">String
                                        Interpolation</a></li>
                                <li><a href="<?php echo _phpBasic; ?>heredoc.php">Heredoc</a></li>
                                <li><a href="<?php echo _phpBasic; ?>if-else.php">If Else</a></li>

                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                       data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">Supergolobals</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a href="<?php echo _phpBasic; ?>supergolobals/$_GET.php">$_GET</a>
                                        </li>
                                        <li><a href="<?php echo _phpBasic; ?>supergolobals/$_POST.php">$_POST</a>
                                        </li>
                                        <li><a
                                                    href="<?php echo _phpBasic; ?>supergolobals/$_REQUEST.php">$_REQUEST</a>
                                        </li>
                                        <li><a
                                                    href="<?php echo _phpBasic; ?>supergolobals/$_SERVER.php">$_SERVER</a>
                                        </li>
                                    </ul>
                                </li>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">ADVANCE</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="dropdown">
                                <li><a href="<?php echo _phpAdvance; ?>builtin-functions.php">Builtin-Functions</a>
                                </li>
                                <li class="dropdown">
                                <li><a href="<?php echo _phpAdvance; ?>Access-Modifiers.php">Access
                                        Modifiers</a></li>
                                <li><a href="<?php echo _phpAdvance; ?>filter-var.php">filter_var</a></li>
                                <li><a href="<?php echo _phpAdvance; ?>class.php">class</a></li>
                                <li><a href="<?php echo _phpAdvance; ?>object.php">object</a></li>
                                <li><a href="<?php echo _phpAdvance; ?>sessions/index.php">SESSIONS</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                       data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">PDO</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a href="<?php echo _phpAdvance; ?>pdo/index.php">Pho Data
                                                Object</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                       data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">MYSQLI</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a href="<?php echo _phpAdvance; ?>mysqli/index.php">MYSQLI
                                                Home</a></li>
                                        <li><a href="<?php echo _phpAdvance; ?>mysqli/crud_app2/index.php">Crud App</a>
                                        </li>
                                        <li><a href="<?php echo _phpAdvance; ?>mysqli/connection.php">Connection</a>
                                        </li>
                                        <li><a href="<?php echo _phpAdvance; ?>mysqli/upload-display-image.php">Upload
                                                & Display image</a></li>
                                    </ul>
                                </li>

                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">MISC</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="dropdown">
                                <li><a href="<?php echo _phpMisc; ?>show_source().php">show_source()</a></li>
                                <li><a href="<?php echo _phpMisc; ?>task.php">Task Uzair</a></li>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="container pt-5 mt-5">
    <!-- ----------------------------------Top Navigations -->


    <!-- ----------------------------------Code Preview Modal -->
    <div class="modal fade" id="modalCode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width: 85%">
            <div class="modal-content px-3">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Source Code</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo filePath(); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ----------------------------------Code Preview Modal -->
