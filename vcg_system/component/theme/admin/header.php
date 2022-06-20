<header class="main-header header-style-one">
    <!--Start Header Top-->
    <div class="header-top">
        <div class="outer-container">
            <div class="outer-box clearfix">
                <div class="header-top-left pull-left">
                    <div class="header-contact-info">
                        <ul>
                            <!-- <li><span class="icon-envelope"></span><a href="mailto:logistic@email.com">info@website.com</a></li> -->
                            <li><span class="icon-phone-call"></span><a href="tel:09453015112">09453015112</a></li>
                            <li><span class="icon-phone-call"></span><a href="tel:09284032977">09284032977</a></li>
                        </ul>
                    </div>
                </div>
                <div class="header-top-right pull-right">
                    <div class="header-social-link">
                        <!-- <ul>
                            <li>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a> 
                            </li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End header Top-->
    <div class="header">
        <div class="outer-container">
            <div class="outer-box clearfix">
                <!--Start Header Left-->
                <div class="header-left clearfix pull-left">
                    <div class="logo">
                        <a href="<?php echo $route->path->home; ?>"><img src="<?php echo INFO_LOGO_1; ?>" alt="Awesome Logo" title=""></a>
                    </div>
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <div class="inner">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </div>
                        </div>
                        <!-- Main Menu -->
                        <nav class="main-menu style1 navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix scroll-nav">
                                    <li><a href="#banner">Home</a></li>
                                    <li><a href="#about">About us</a></li>
                                    <li><a href="#services">Services</a></li>
                                    <li><a href="#blog">News</a></li>
                                    <li><a href="#contact-custom">Contact</a></li>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                    </div>
                </div>
                <!--End Header Left-->
                <!--Start Header Right-->
                <div class="header-right pull-right clearfix">
                    <div class="button">
                        <a class="btn-one" href="#"><span class="txt">Get Appointment</span></a>
                    </div>
                    <div class="hidden-content-button bar-box">
                        <a class="side-nav-toggler nav-toggler hidden-bar-opener" href="#">
                            <ul>
                                <li class="red2"></li>
                                <li class="red2"></li>
                                <li></li>
                            </ul>
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <ul>
                                <li class="red2"></li>
                                <li></li>
                                <li class="red2"></li>
                            </ul>
                        </a>
                    </div>
                </div>
                <!--End Header Right-->
            </div>
        </div>
    </div>
    <!--End header -->
    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="container">
            <div class="clearfix">
                <!--Logo-->
                <div class="logo float-left">
                    <a href="<?php echo $route->path->home; ?>" class="img-responsive"><img src="<?php echo INFO_STICKY_LOGO; ?>" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="right-col float-right">
                    <!-- Main Menu -->
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--End Sticky Header-->
    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
        <nav class="menu-box">
            <div class="nav-logo"><a href="<?php echo $route->path->home; ?>"><img src="<?php echo ASSETPATH; ?>/images/resources/mobilemenu-logo.png" alt="" title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-google-plus-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->
</header>