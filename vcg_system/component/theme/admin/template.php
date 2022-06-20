<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from mehedi.asiandevelopers.com/demo/carepress/index-onepage.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jan 2022 04:03:02 GMT -->

<head>
    <meta charset="UTF-8">
    <title>
        <?php echo $template->title; ?>
    </title>
    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php echo ASSETPATH; ?>/css/aos.css">
    <link rel="stylesheet" href="<?php echo ASSETPATH; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ASSETPATH; ?>/css/imp.css">
    <link rel="stylesheet" href="<?php echo ASSETPATH; ?>/css/custom-animate.css">
    <link rel="stylesheet" href="<?php echo ASSETPATH; ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo ASSETPATH; ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo ASSETPATH; ?>/css/owl.css">
    <link rel="stylesheet" href="<?php echo ASSETPATH; ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo ASSETPATH; ?>/css/scrollbar.css">
    <link rel="stylesheet" href="<?php echo ASSETPATH; ?>/css/hiddenbar.css">
    <link rel="stylesheet" href="<?php echo ASSETPATH; ?>/css/color.css">
    <link href="<?php echo ASSETPATH; ?>/css/color/theme-color.css" id="jssDefault" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ASSETPATH; ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo ASSETPATH; ?>/css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo ASSETPATH; ?>/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php echo ASSETPATH; ?>/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo ASSETPATH; ?>/images/favicon/favicon-16x16.png" sizes="16x16">
    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="<?php echo ASSETPATH; ?>/js/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
    <div class="boxed_wrapper">
        <div class="preloader"></div>
        <!-- Hidden Navigation Bar -->
        <?php
            if($template->view->hiddenbar){ 
                include("$template->hiddenbar"); 
            }
        ?>
        <!-- End Hidden Bar -->
        <!-- Main header-->

        <?php
            if($template->view->header){ 
                include("$template->header"); 
            }
        ?>
        <?php
            if($template->view->breadcrumb){ 
                include("$template->breadcrumb_file"); 
            }
        ?>
        <!-- Start Main Slider -->
        <?php include("$template->content"); ?>

        <?php if($template->view->contact){ ?>
            <!--Start Contact Form Style1 Area-->
            <section id="contact-custom" class="contact-form-style1-area">
                <div class="contact-form-style1-bg" style="background-image: url(<?php echo ASSETPATH; ?>/images/shape/contact-form-style1-bg.png)"></div>
                <div class="container">
                    <div class="sec-title text-center">
                        <h5>//<span>Contact Us</span>//</h5>
                        <h2>Get In Touch<span class="round-box zoominout"></span></h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="contact-form contact-page">
                                <form id="contact-form" name="contact_form" class="default-form2" action="http://mehedi.asiandevelopers.com/demo/carepress/assets/inc/sendmail.php" method="post">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="input-box">
                                                <input type="text" name="form_name" value="" placeholder="Your name" required="">
                                                <div class="icon">
                                                    <span class="icon-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="input-box">
                                                <input type="email" name="form_email" value="" placeholder="Email address" required="">
                                                <div class="icon">
                                                    <span class="icon-envelope"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="input-box">
                                                <select class="selectpicker" data-width="100%">
                                                    <option selected="selected">Select Subject</option>
                                                    <option>Pet Grooming</option>
                                                    <option>Dog Setting</option>
                                                    <option>Healthy Meals</option>
                                                    <option>Veterinary Service</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="input-box">
                                                <input type="text" name="form_phone" value="" placeholder="Phone number">
                                                <div class="icon">
                                                    <span class="icon-phone"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-box">
                                                <input type="text" name="form_subject" value="" placeholder="Subject">
                                                <div class="icon">
                                                    <span class="icon-pen"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="input-box">
                                                <textarea name="form_message" placeholder="Write message" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="button-box text-center">
                                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                                <button class="btn-one gradient-bg-1" type="submit" data-loading-text="Please wait...">
                                                    <span class="txt"><i class="icon-send"></i>Submit Now</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Contact Form Style1 Area-->
        <?php } ?>
        
        
        <!--Start footer Style2 area-->
        <?php 
            if($template->view->footer){ 
                include("$template->footer");    
            } 
        ?>
        <!--End footer Style2 area-->
    </div>
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fa fa-angle-up"></span>
    </button>
    <script src="<?php echo ASSETPATH; ?>/js/jquery.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/aos.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/appear.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/bootstrap-select.min.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/isotope.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/jquery.bootstrap-touchspin.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/jquery.countdown.min.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/jquery.countTo.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/jquery.easing.min.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/jquery.enllax.min.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/jquery.fancybox.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/jquery.mixitup.min.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/jquery.paroller.min.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/jquery.polyglot.language.switcher.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/map-script.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/nouislider.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/owl.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/timePicker.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/validation.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/wow.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/slick.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/lazyload.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/scrollbar.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/tilt.jquery.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/jquery.bxslider.min.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/jquery-ui.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/parallax.min.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/jquery.tinyscrollbar.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/jQuery.style.switcher.min.js"></script>
    <script src="<?php echo ASSETPATH; ?>/js/pagenav.js"></script>
    <!-- thm custom script -->
    <script src="<?php echo ASSETPATH; ?>/js/custom.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            function headerSetter(){
                const url = window.location.pathname;
                $('.navigation').find('li.main').removeClass('current');
                $('.navigation').find('li.main').find('a').each(function(){
                    const local = $(this);
                    const lurl = local.attr('href');
                    if(lurl == url){
                        local.closest('li.main').addClass('current');
                    }
                })
                if($('.services-content').length){
                    $('.services-content').find('li.main').find('a').each(function(){
                        const local = $(this);
                        const lurl = local.attr('href');
                        if(lurl == url){
                            local.closest('li.main').addClass('active');
                        }
                    })
                }
            }  
            headerSetter();
        });
    </script>
</body>
<!-- Mirrored from mehedi.asiandevelopers.com/demo/carepress/index-onepage.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jan 2022 04:03:03 GMT -->

</html>