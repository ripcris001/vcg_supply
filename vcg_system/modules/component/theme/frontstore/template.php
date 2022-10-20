<!doctype html>
<html lang="zxx">
<!-- Mirrored from templates.hibootstrap.com/maxon/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jun 2022 18:56:48 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo $theme->assetPath.'/css/bootstrap.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo $theme->assetPath.'/css/animate.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo $theme->assetPath.'/css/meanmenu.css'; ?>">
    <link rel="stylesheet" href="<?php echo $theme->assetPath.'/css/boxicons.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo $theme->assetPath.'/css/flaticon.css'; ?>">
    <link rel="stylesheet" href="<?php echo $theme->assetPath.'/css/owl.carousel.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo $theme->assetPath.'/css/owl.theme.default.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo $theme->assetPath.'/css/odometer.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo $theme->assetPath.'/css/nice-select.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo $theme->assetPath.'/css/magnific-popup.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo $theme->assetPath.'/css/imagelightbox.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo $theme->assetPath.'/css/style.css'; ?>">
    <link rel="stylesheet" href="<?php echo $theme->assetPath.'/css/responsive.css'; ?>">
    <link rel="stylesheet" href="<?php echo CUSTOMASSEST.'/custom.css'; ?>">
    <title><?php  echo WEB_TITLE; ?></title>
    <link rel="icon" type="image/png" href="<?php echo $theme->assetPath.'/img/favicon.png'; ?>">
     <script src="<?php echo $theme->assetPath.'/js/jquery.min.js'; ?>"></script>
</head>

<body>
    <div class="preloader">
        <div class="loader">
            <div class="sbl-half-circle-spin">
                <div></div>
            </div>
        </div>
    </div>
    <?php
        if($theme->view->header){ 
            include("$theme->header"); 
        }
    ?>
    <div class="content-container">
        <?php
            if($theme->contentFilter->isFile){
                include("$theme->content");
            }else{
                echo "$theme->content";
            }
        ?>
        <br>
    </div>
    <?php 
        if($theme->view->footer){ 
            include("$theme->footer");    
        } 
    ?>
    <div class="go-top">
        <i class='bx bx-up-arrow-alt'></i>
    </div>
    <!-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js'; ?>"></script> -->
   
    <script src="<?php echo $theme->assetPath.'/js/popper.min.js'; ?>"></script>
    <script src="<?php echo $theme->assetPath.'/js/bootstrap.min.js'; ?>"></script>
    <script src="<?php echo $theme->assetPath.'/js/jquery.meanmenu.js'; ?>"></script>
    <script src="<?php echo $theme->assetPath.'/js/owl.carousel.min.js'; ?>"></script>
    <script src="<?php echo $theme->assetPath.'/js/jquery.magnific-popup.min.js'; ?>"></script>
    <script src="<?php echo $theme->assetPath.'/js/imagelightbox.min.js'; ?>"></script>
    <script src="<?php echo $theme->assetPath.'/js/odometer.min.js'; ?>"></script>
    <script src="<?php echo $theme->assetPath.'/js/jquery.nice-select.min.js'; ?>"></script>
    <script src="<?php echo $theme->assetPath.'/js/jquery.appear.min.js'; ?>"></script>
    <script src="<?php echo $theme->assetPath.'/js/jquery.ajaxchimp.min.js'; ?>"></script>
    <script src="<?php echo $theme->assetPath.'/js/form-validator.min.js'; ?>"></script>
    <script src="<?php echo $theme->assetPath.'/js/contact-form-script.js'; ?>"></script>
    <script src="<?php echo $theme->assetPath.'/js/wow.min.js'; ?>"></script>
    <script src="<?php echo $theme->assetPath.'/js/main.js'; ?>"></script>
    <script src="<?php echo CUSTOMASSEST.'/plugin/notify/bootstrap-notify.min.js'; ?>"></script>
    <script src="<?php echo CUSTOMASSEST.'/plugin/notify/notify-script.js'; ?>"></script>
    <script src="<?php echo $theme->assetPath.'/custom/helper.js'; ?>"></script>
</body>

</html>