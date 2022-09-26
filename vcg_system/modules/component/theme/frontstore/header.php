<div class="top-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <ul class="top-header-information">
                    <li>
                        <i class="flaticon-pin"></i>
                        <?php  echo INFO_ADDRESS; ?>
                    </li>
                    <li>
                        <i class="flaticon-clock"></i>
                        <?php  echo INFO_OFFICE_HOURS; ?>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-12">
                <ul class="top-header-optional">
                    <li>Currency: <b><?php echo INFO_CURRENCY; ?></b></li>
                    <li>
                        <div class="dropdown language-switcher d-inline-block">
                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span>Language <i class='bx bx-chevron-down'></i></span>
                            </button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item d-flex align-items-center">
                                    <img src="<?php echo $theme->assetPath.'/img/english.png'; ?>" class="shadow-sm" alt="flag">
                                    <span>English</span>
                                </a>
                               <!--  <a href="#" class="dropdown-item d-flex align-items-center">
                                    <img src="<?php echo $theme->assetPath.'/img/arab.png'; ?>" class="shadow-sm" alt="flag">
                                    <span>العربيّة</span>
                                </a>
                                <a href="#" class="dropdown-item d-flex align-items-center">
                                    <img src="<?php echo $theme->assetPath.'/img/germany.png'; ?>" class="shadow-sm" alt="flag">
                                    <span>Deutsch</span>
                                </a>
                                <a href="#" class="dropdown-item d-flex align-items-center">
                                    <img src="<?php echo $theme->assetPath.'/img/portugal.png'; ?>" class="shadow-sm" alt="flag">
                                    <span>Português</span>
                                </a>
                                <a href="#" class="dropdown-item d-flex align-items-center">
                                    <img src="<?php echo $theme->assetPath.'/img/china.png'; ?>" class="shadow-sm" alt="flag">
                                    <span>简体中文</span>
                                </a> -->
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="middle-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="middle-header-search">
                    <form class="search-form">
                        <label>
                            <span class="screen-reader-text">Search for:</span>
                            <input type="search" class="search-field" placeholder="Search the entire store here">
                        </label>
                        <button type="submit">
                            <i class='bx bx-search-alt'></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="middle-header-optional">
                    <li>
                        <a href="#"><i class="flaticon-heart"><span>0</span></i> Wishlist</a>
                    </li>
                    <li>
                        <a href="#"><i class="flaticon-shopping-cart"><span>0</span></i> Add to Cart</a>
                    </li>
                    <li>
                        <?php
                            if(isset($login->ID)){
                                echo '<a href="/logout" class="user-btn"><i class="flaticon-enter"></i>Logout</a>';
                            } else{
                                echo '<a href="/login" class="user-btn"><i class="flaticon-enter"></i>Login / Register</a>';
                            }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="navbar-area navbar-two">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="/">
                        <img src="<?php echo INFO_LOGO_1; ?>" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="<?php echo INFO_LOGO_1; ?>" alt="image">
                </a>
                <?php
                    if($theme->view->navbar){ 
                        include("$theme->navbar"); 
                    }
                ?>
            </nav>
        </div>
    </div>
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="option-inner">
                    <div class="others-option d-flex align-items-center">
                        <div class="option-item">
                            <span>
                                Hotline:
                                <a href="tel:<?php echo INFO_TELE_CONTACT_NUMBER; ?>"><?php echo INFO_CONTACT_NUMBER; ?></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="page-banner-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Cart</h2>
                    <ul>
                        <li>
                            <a href="index-2.html">Home</a>
                        </li>
                        <li>Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> -->