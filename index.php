<?php @session_start(); //oturum işlemi başlatır. 
@ob_start(); //yönlendirme ve bazı header işlemleri için 
define("DATA", "data/");
define("SAYFA", "include/");
define("CLASSES", "yonetimPaneli/class/");

include_once(DATA . "connection.php");
define("SITE", $websiteurl);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>Fruitkha</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="<?=SITE?>assets/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?=SITE?>assets/bootstrap/css/bootstrap.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?=SITE?>assets/css/owl.carousel.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="<?=SITE?>assets/css/magnific-popup.css">
    <!-- animate css -->
    <link rel="stylesheet" href="<?=SITE?>assets/css/animate.css">
    <!-- mean menu css -->
    <link rel="stylesheet" href="<?=SITE?>assets/css/meanmenu.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="<?=SITE?>assets/css/main.css">
    <!-- responsive -->
    <link rel="stylesheet" href="<?=SITE?>assets/css/responsive.css">

</head>

<body>

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <!-- header -->
    <?php
	include_once(DATA . "header.php");
	?>
    <!-- end header -->

    <!-- search area -->
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Search For:</h3>
                            <input type="text" placeholder="Keywords">
                            <button type="submit">Search <i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search area -->

    <!-- hero area -->
    <?php
	include_once(SAYFA . "banner.php");
	?>
    <!-- end hero area -->

    <!-- features list section -->

    <!-- end features list section -->

    <!-- product section -->
    <?php
	require_once(SAYFA . "products.php");
	?>
    <!-- end product section -->

    <!-- cart banner section -->
    <?php
	require_once(SAYFA . "dishMonth.php");
	?>
    <!-- end cart banner section -->

    <!-- testimonail-section -->
    <?php
	require_once(SAYFA . "comments.php");
	?>
    <!-- end testimonail-section -->

    <!-- advertisement section -->
    <?php
	require_once(SAYFA . "about.php");
	?>
    <!-- end advertisement section -->

    <!-- latest news -->
    <?php
	include_once(SAYFA . "news.php");
	?>
    <!-- end latest news -->

    <!-- logo carousel -->
    <?php
	include_once(SAYFA . "referances.php");
	?>
    <!-- end logo carousel -->

    <!-- footer -->
    <?php
	include_once(DATA . "footer.php");
	?>
    <!-- end footer -->

    <!-- copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>, All Rights
                        Reserved.<br>
                        Distributed By - <a href="https://themewagon.com/">Themewagon</a>
                    </p>
                </div>
                <div class="col-lg-6 text-right col-md-12">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end copyright -->

    <!-- jquery -->
    <script src="<?=SITE?>assets/js/jquery-1.11.3.min.js"></script>
    <!-- bootstrap -->
    <script src="<?=SITE?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- count down -->
    <script src="<?=SITE?>assets/js/jquery.countdown.js"></script>
    <!-- isotope -->
    <script src="<?=SITE?>assets/js/jquery.isotope-3.0.6.min.js"></script>
    <!-- waypoints -->
    <script src="<?=SITE?>assets/js/waypoints.js"></script>
    <!-- owl carousel -->
    <script src="<?=SITE?>assets/js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="<?=SITE?>assets/js/jquery.magnific-popup.min.js"></script>
    <!-- mean menu -->
    <script src="<?=SITE?>assets/js/jquery.meanmenu.min.js"></script>
    <!-- sticker js -->
    <script src="<?=SITE?>assets/js/sticker.js"></script>
    <!-- main js -->
    <script src="<?=SITE?>assets/js/main.js"></script>

</body>

</html>