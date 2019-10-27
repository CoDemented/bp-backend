<?php
    define("_siteUrl", "http://localhost/me/bp-backend/");
    define("_css", _siteUrl."assets/css/");
    define("_js", _siteUrl."assets/js/");
    define("_plugins", _siteUrl."assets/plugins/");
    
    define("_phpBasic", _siteUrl."include/php/basic/");
    define("_phpAdvance", _siteUrl."include/php/advance/");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo _css;?>bootstrap-4.css">
    <link rel="stylesheet" href="<?php echo _css;?>font_awesome_pro/css/all.css">
    <link rel="stylesheet" href="<?php echo _css;?>style.css">
    <link rel="stylesheet" href="<?php echo _plugins;?>aos/aos.css">
    <title>BP-Project</title>
</head>

<body>
    <div class="loading"><img src="<?php echo _css;?>imgs/loader.gif" alt=""></div>

    <div class="top-line"><span></span></div>
    <div class="container">
        <a href="<?php echo _siteUrl;?>index.php">
            <div class="shadows">
                <span>C</span><span>o</span><span>D</span><span>e</span><span>m</span><span>e</span><span>n</span><span>t</span><span>e</span><span>d</span>
            </div>
        </a>
    </div>

    <!-- ----------------------------------Top Navigations -->
    <div id="menu_area" class="menu-area">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-light navbar-expand-lg mainmenu">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="active"><a href="<?php echo _siteUrl;?>"><i class="fal fa-home-lg"></i> <span
                                        class="sr-only">(current)</span></a></li>
                            <li><a href="#">FRONTEND</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PHP</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">BASIC</a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a href="<?php echo _phpBasic;?>constant.php">Constant</a></li>
                                            <li><a href="<?php echo _phpBasic;?>string-interpolation.php">String
                                                    Interpolation</a></li>
                                            <li><a href="<?php echo _phpBasic;?>heredoc.php">Heredoc</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">ADVANCE</a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a href="<?php echo _phpAdvance;?>class.php">CLASS</a></li>
                                            <li><a href="<?php echo _phpAdvance;?>object.php">OBJECT</a></li>
                                            <li><a href="<?php echo _phpAdvance;?>session.php">SESSIONS</a></li>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">Dropdown3</a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">SERVICES</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- ----------------------------------Top Navigations -->