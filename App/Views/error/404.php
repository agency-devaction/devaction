<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo TITLE; ?> 404</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="http://<?php echo APP_HOST; ?>/public/images/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://<?php echo APP_HOST; ?>/public/css/bootstrap.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="http://<?php echo APP_HOST; ?>/public/css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="http://<?php echo APP_HOST; ?>/public/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="http://<?php echo APP_HOST; ?>/public/css/responsive.css">
</head>
<body>
<!-- loading -->
<div id="loading">
    <div id="loading-center">
        <img src="http://<?php echo APP_HOST; ?>/public/images/loader.gif" alt="loder">
    </div>
</div>
<!-- loading End -->
<div class="iq-pagenotfound position-relative text-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="pagenotfound-info ">
                    <img  src="http://<?php echo APP_HOST; ?>/public/images/others/8.png" class="img-fluid mb-5 " alt="image">
                    <h2 class="mb-3 iq-fw-8">Erro <?php echo $errorCode; ?><?php echo $varMessage; ?></h2>
                    <a class="slide-button button" href="http://<?php echo APP_HOST; ?>/index.php">
                        <div class="first">Back to Home</div>
                        <div class="second">Back to Home</div>
                    </a>
                </div>
                <img  src="http://<?php echo APP_HOST; ?>/public/images/others/9.png" class="img-fluid pagenotfound-left" alt="image">
                <img  src="http://<?php echo APP_HOST; ?>/public/images/others/10.png" class="img-fluid pagenotfound-right" alt="image">
            </div>
        </div>
    </div>
    <!-- back-to-top -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top"><i class="ion-ios-arrow-thin-up"></i></a>
    </div>
    <!-- back-to-top End -->
</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="http://<?php echo APP_HOST; ?>/public/js/jquery-min.js" ></script>
<!-- popper  -->
<script src="http://<?php echo APP_HOST; ?>/public/js/popper.min.js"></script>
<!--  bootstrap -->
<script src="http://<?php echo APP_HOST; ?>/public/js/bootstrap.min.js" ></script>
<!-- Modernizr JavaScript -->
<script src="http://<?php echo APP_HOST; ?>/public/js/modernizr.js"></script>
<!-- Appear JavaScript -->
<script src="http://<?php echo APP_HOST; ?>/public/js/appear.min.js"></script>
<!-- Megamenu  -->
<script src="http://<?php echo APP_HOST; ?>/public/js/mega_menu.min.js"></script>
<!-- Timeline JavaScript -->
<script src="http://<?php echo APP_HOST; ?>/public/js/timeline.js"></script>
<!-- Wow -->
<script src="http://<?php echo APP_HOST; ?>/public/js/wow.min.js"></script>
<!-- scrollme -->
<script src="http://<?php echo APP_HOST; ?>/public/js/jquery.scrollme.min.js"></script>
<!-- countdown JavaScript -->
<script src="http://<?php echo APP_HOST; ?>/public/js/countdown.js"></script>
<!-- waypoints JavaScript -->
<script src="http://<?php echo APP_HOST; ?>/public/js/waypoints.min.js"></script>
<!-- Counterup JavaScript -->
<script src="http://<?php echo APP_HOST; ?>/public/js/jquery.counterup.min.js"></script>
<!-- Owl Carousel JavaScript -->
<script src="http://<?php echo APP_HOST; ?>/public/js/owl.carousel.min.js"></script>
<!-- Magnific Popup JavaScript -->
<script src="http://<?php echo APP_HOST; ?>/public/js/jquery.magnific-popup.min.js"></script>
<!-- Isotope JavaScript -->
<script src="http://<?php echo APP_HOST; ?>/public/js/isotope.pkgd.min.js"></script>
<!-- Retina JavaScript -->
<script src="http://<?php echo APP_HOST; ?>/public/js/retina.min.js"></script>
<!-- Custom JavaScript -->
<script src="http://<?php echo APP_HOST; ?>/public/js/custom.js"></script>
</body>
</html>