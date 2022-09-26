<!DOCTYPE html>
<!--
Template Name: Kundol Admin - Bootstrap 4 HTML Admin Dashboard Theme
Author: Themescoder
Website: http://www.themescoder.net/
Contact: support@themescoder.net
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->
<!-- Mirrored from kundol.themes-coder.net/admin-demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Jul 2022 14:48:19 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Admin | <?php echo isset($data->title) ? $data->title : WEB_TITLE; ?></title>
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" /> -->
    <!--end::Fonts-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="<?php echo $theme->assetPath; ?>/css/stylec619.css?v=1.0" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <link href="<?php echo $theme->assetPath; ?>/api/pace/pace-theme-flat-top.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $theme->assetPath; ?>/api/mcustomscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $theme->assetPath; ?>/api/datatable/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/png" href="<?php echo FAVICON; ?>">
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="tc_body" class="header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-fixed color-theme-yellow">
    <!-- Paste this code after body tag -->
    <div class="se-pre-con">
        <div class="pre-loader">
            <img class="img-fluid" src="<?php echo $theme->assetPath; ?>/images/loadergif.gif" alt="loading">
        </div>
    </div>
    <!--begin::Header Mobile-->
    <div id="tc_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
        <!--begin::Logo-->
        <a href="index-2.html" class="brand-logo">
            <span class="brand-text"><img style="height: 25px;" alt="Logo" src="<?php echo $theme->assetPath; ?>/images/misc/logo.png" /></span>
        </a>
        <!--end::Logo-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <div class="posicon">
                <a href="pos.html" class="btn btn-primary d-flex align-items-center justify-content-center white mr-2">POS</a>
            </div>
            <button class="btn p-0" id="tc_aside_mobile_toggle">
                <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-justify-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-4-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
            <button class="btn p-0 ml-2" id="tc_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                </span>
            </button>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <?php
		        if($theme->view->sidebar){ 
		            include("$theme->sidebar"); 
		        }
		    ?>
            <!--begin::Aside-->
            <div class="aside-overlay"></div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="tc_wrapper">
                <!--begin::Header-->
                <?php
			        if($theme->view->header){ 
			            include("$theme->header"); 
			        }
			    ?>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="tc_content">
                    <!--begin::Subheader-->
                    <div class="subheader py-2 py-lg-6 subheader-solid">
                        <div class="container-fluid">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb bg-white mb-0 px-0 py-2">
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo isset($data->pageTitle) ? $data->pageTitle : WEB_TITLE ; ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!--end::Subheader-->
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container-fluid">
                            <div class="row">
                                <?php
						            if($theme->contentFilter->isFile){
						                include("$theme->content");
						            }else{
						                echo "$theme->content";
						            }
						        ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
			        if($theme->view->footer){ 
			            include("$theme->footer"); 
			        }
			    ?>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->
    <ul class="sticky-toolbar nav flex-column bg-primary" title="Setting">
        <li class="nav-item" id="kt_demo_panel_toggle" data-toggle="tooltip" title="" data-placement="right" data-original-title="Check out more demos">
            <a class="btn btn-sm btn-icon text-white" href="#">
                <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-gear fa-spin" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z" />
                    <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z" />
                </svg>
            </a>
        </li>
    </ul>
    <div id="kt_color_panel" class="offcanvas offcanvas-right kt-color-panel p-5">
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-3">
            <h4 class="font-size-h4 font-weight-bold m-0">Theme Config
            </h4>
            <a href="#" class="btn btn-sm btn-icon btn-light btn-hover-primary" id="kt_color_panel_close">
                <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </a>
        </div>
        <hr>
        <div class="offcanvas-content">
            <!-- Theme options starts -->
            <div id="customizer-theme-layout" class="customizer-theme-layout">
                <h5 class="mt-1">Theme Layout</h5>
                <div class="theme-layout">
                    <div class="d-flex justify-content-start">
                        <div class="my-3">
                            <div class="btn-group btn-group-toggle">
                                <label class="btn btn-primary p-2 active">
                                    <input type="radio" name="layoutOptions" value="false" id="radio-light" checked="">
                                    Light
                                </label>
                                <label class="btn btn-primary p-2">
                                    <input type="radio" name="layoutOptions" value="false" id="radio-dark"> Dark
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <h5 class="mt-1">RTL Layout</h5>
                <div class="rtl-layout">
                    <div class="d-flex justify-content-start">
                        <div class="my-3 btn-rtl">
                            <div class="toggle">
                                <span class="circle"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <!-- Theme options starts -->
            <div id="customizer-theme-colors" class="customizer-theme-colors">
                <h5>Theme Colors</h5>
                <!-- <input id="ColorPicker1" class="colorpicker-theme" type="color" value="#ae69f5" name="Background"> -->
                <ul class="list-inline unstyled-list d-flex">
                    <li class="color-box mr-2">
                        <div id="color-theme-default" class="d-flex rounded w-20px h-20px" style="background-color: #ae69f5d9;">
                        </div>
                    </li>
                    <li class="color-box mr-2">
                        <div id="color-theme-blue" class="d-flex rounded w-20px h-20px" style="background-color: blue;">
                        </div>
                    </li>
                    <li class="color-box mr-2">
                        <div id="color-theme-red" class="d-flex rounded w-20px h-20px" style="background-color: red;">
                        </div>
                    </li>
                    <li class="color-box mr-2">
                        <div id="color-theme-green" class="d-flex rounded w-20px h-20px" style="background-color: green;">
                        </div>
                    </li>
                    <li class="color-box mr-2">
                        <div id="color-theme-yellow" class="d-flex rounded w-20px h-20px" style="background-color: #ffc107;">
                        </div>
                    </li>
                    <li class="color-box mr-2">
                        <div id="color-theme-navy-blue" class="d-flex rounded w-20px h-20px" style="background-color: #000080;">
                        </div>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
    </div>
    <script src="<?php echo $theme->assetPath; ?>/js/plugin.bundle.min.js"></script>
    <script src="<?php echo $theme->assetPath; ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $theme->assetPath; ?>/api/jqueryvalidate/jquery.validate.min.js"></script>
    <script src="<?php echo $theme->assetPath; ?>/api/pace/pace.js"></script>
    <script src="<?php echo $theme->assetPath; ?>/api/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo $theme->assetPath; ?>/js/script.bundle.js"></script>
</body>
<!--end::Body-->
<!-- Mirrored from kundol.themes-coder.net/admin-demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Jul 2022 14:48:54 GMT -->

</html>