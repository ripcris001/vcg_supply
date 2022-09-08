<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>

    <meta charset="utf-8" />
    <title>Admin | Dashboard</title>
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

    <link href="<?php echo $theme->assetPath; ?>/plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $theme->assetPath; ?>/plugins/multipleselect/dist/multiple-select.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $theme->assetPath; ?>/plugins/daterangepicker/daterangepicker.css" />

    <link rel="shortcut icon" href="<?php echo $theme->assetPath; ?>/media/logos/favicon.html" />
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
    <!-- pos header -->

    <header class="pos-header bg-white">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="greeting-text">
                        <h3 class="card-label mb-0 font-weight-bold text-primary">WELCOME
                        </h3>
                        <h3 class="card-label mb-0 ">
                            Smith Joones
                        </h3>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-5 col-md-6  clock-main">
                    <div class="clock">
                        <div class="datetime-content">
                            <ul>
                                <li id="hours"></li>
                                <li id="point1">:</li>
                                <li id="min"></li>
                                <li id="point">:</li>
                                <li id="sec"></li>
                            </ul>
                        </div>
                        <div class="datetime-content">
                            <div id="Date"  class=""></div>
                        </div>

                    </div>

                </div>
                <div class="col-xl-4 col-lg-3 col-md-12  order-lg-last order-second">

                    <div class="topbar justify-content-end">
                        <div class="dropdown mega-dropdown">
                            <div id="id2" class="topbar-item "  data-toggle="dropdown" data-display="static">
                                <div class="btn btn-icon w-auto h-auto btn-clean d-flex align-items-center py-0 mr-3">

                                    <span class="symbol symbol-35 symbol-light-success">
                                        <span class="symbol-label bg-primary  font-size-h5 ">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="#fff" class="bi bi-calculator-fill" viewBox="0 0 16 16">
                                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2 .5v2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0-.5.5zm0 4v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM4.5 9a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM4 12.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM7.5 6a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM7 9.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM10 6.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v4a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-.5-.5h-1z"/>
                                            </svg>
                                        </span>
                                    </span>
                                </div>
                            </div>

                            <div class="dropdown-menu dropdown-menu-right calu" style="min-width: 248px;">
                                <div class="calculator">
                                    <div class="input" id="input"></div>
                                    <div class="buttons">
                                        <div class="operators">
                                            <div>+</div>
                                            <div>-</div>
                                            <div>&times;</div>
                                            <div>&divide;</div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="leftPanel">
                                                <div class="numbers">
                                                    <div>7</div>
                                                    <div>8</div>
                                                    <div>9</div>
                                                </div>
                                                <div class="numbers">
                                                    <div>4</div>
                                                    <div>5</div>
                                                    <div>6</div>
                                                </div>
                                                <div class="numbers">
                                                    <div>1</div>
                                                    <div>2</div>
                                                    <div>3</div>
                                                </div>
                                                <div class="numbers">
                                                    <div>0</div>
                                                    <div>.</div>
                                                    <div id="clear">C</div>
                                                </div>
                                            </div>
                                            <div class="equal" id="result">=</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="topbar-item folder-data">
                            <div class="btn btn-icon  w-auto h-auto btn-clean d-flex align-items-center py-0 mr-3"  data-toggle="modal" data-target="#folderpop"
                            >
                            <span class="badge badge-pill badge-primary">5</span>
                            <span class="symbol symbol-35  symbol-light-success">
                                <span class="symbol-label bg-warning font-size-h5 ">
                                    <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" fill="#ffff"  viewBox="0 0 16 16">
                                        <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"></path>
                                    </svg>
                                </span>
                            </span>
                        </div>

                    </div>

                    <div class="dropdown">
                        <div class="topbar-item" data-toggle="dropdown" data-display="static">
                            <div class="btn btn-icon w-auto h-auto btn-clean d-flex align-items-center py-0">

                                <span class="symbol symbol-35 symbol-light-success">
                                    <span class="symbol-label font-size-h5 ">
                                        <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                        </svg>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="dropdown-menu dropdown-menu-right" style="min-width: 150px;">


                            <a href="/logout" class="dropdown-item">
                                <span class="svg-icon svg-icon-xl svg-icon-primary mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-power">
                                        <path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path>
                                        <line x1="12" y1="2" x2="12" y2="12"></line>
                                    </svg>
                                </span>
                                Logout
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<div class="contentPOS">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 order-xl-first order-last">
                <div class="card card-custom gutter-b bg-white border-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-between colorfull-select">
                            <div class="selectmain">
                                <select class="arabic-select w-150px bag-primary">
                                    <option value="1">Men's</option>
                                    <option value="2">Accessories</option>
                                </select>
                            </div>

                            <div class="selectmain">
                                <select class="arabic-select w-150px bag-secondary">
                                    <option value="1">Men's</option>
                                    <option value="2">Accessories</option>
                                </select>
                            </div>

                        </div>
                    </div>  
                    <div class="product-items">
                        <div class="row">
                            <div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="productCard">
                                    <div class="productThumb">
                                        <img class="img-fluid" src="<?php echo $theme->assetPath; ?>/images/carousel/element-banner2-right.jpg" alt="ix">
                                    </div>
                                    <div class="productContent">
                                        <a href="#">
                                            Men Polo Shirt (M) -MPS[2545-P]
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="productCard">
                                    <div class="productThumb">
                                        <img class="img-fluid" src="<?php echo $theme->assetPath; ?>/images/carousel/element-banner2-right.jpg" alt="ix">
                                    </div>
                                    <div class="productContent">
                                        <a href="#">
                                            Men Polo Shirt (M) -MPS[2545-P]
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="productCard">
                                    <div class="productThumb">
                                        <img class="img-fluid" src="<?php echo $theme->assetPath; ?>/images/carousel/element-banner2-right.jpg" alt="ix">
                                    </div>
                                    <div class="productContent">
                                        <a href="#">
                                            Men Polo Shirt (M) -MPS[2545-P]
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="productCard">
                                    <div class="productThumb">
                                        <img class="img-fluid" src="<?php echo $theme->assetPath; ?>/images/carousel/element-banner2-right.jpg" alt="ix">
                                    </div>
                                    <div class="productContent">
                                        <a href="#">
                                            Men Polo Shirt (M) -MPS[2545-P]
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="productCard">
                                    <div class="productThumb">
                                        <img class="img-fluid" src="<?php echo $theme->assetPath; ?>/images/carousel/element-banner2-right.jpg" alt="ix">
                                    </div>
                                    <div class="productContent">
                                        <a href="#">
                                            Men Polo Shirt (M) -MPS[2545-P]
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="productCard">
                                    <div class="productThumb">
                                        <img class="img-fluid" src="<?php echo $theme->assetPath; ?>/images/carousel/element-banner2-right.jpg" alt="ix">
                                    </div>
                                    <div class="productContent">
                                        <a href="#">
                                            Men Polo Shirt (M) -MPS[2545-P]
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="productCard">
                                    <div class="productThumb">
                                        <img class="img-fluid" src="<?php echo $theme->assetPath; ?>/images/carousel/element-banner2-right.jpg" alt="ix">
                                    </div>
                                    <div class="productContent">
                                        <a href="#">
                                            Men Polo Shirt (M) -MPS[2545-P]
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="productCard">
                                    <div class="productThumb">
                                        <img class="img-fluid" src="<?php echo $theme->assetPath; ?>/images/carousel/element-banner2-right.jpg" alt="ix">
                                    </div>
                                    <div class="productContent">
                                        <a href="#">
                                            Men Polo Shirt (M) -MPS[2545-P]
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="productCard">
                                    <div class="productThumb">
                                        <img class="img-fluid" src="<?php echo $theme->assetPath; ?>/images/carousel/element-banner2-right.jpg" alt="ix">
                                    </div>
                                    <div class="productContent">
                                        <a href="#">
                                            Men Polo Shirt (M) -MPS[2545-P]
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="productCard">
                                    <div class="productThumb">
                                        <img class="img-fluid" src="<?php echo $theme->assetPath; ?>/images/carousel/element-banner2-right.jpg" alt="ix">
                                    </div>
                                    <div class="productContent">
                                        <a href="#">
                                            Men Polo Shirt (M) -MPS[2545-P]
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="productCard">
                                    <div class="productThumb">
                                        <img class="img-fluid" src="<?php echo $theme->assetPath; ?>/images/carousel/element-banner2-right.jpg" alt="ix">
                                    </div>
                                    <div class="productContent">
                                        <a href="#">
                                            Men Polo Shirt (M) -MPS[2545-P]
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="productCard">
                                    <div class="productThumb">
                                        <img class="img-fluid" src="<?php echo $theme->assetPath; ?>/images/carousel/element-banner2-right.jpg" alt="ix">
                                    </div>
                                    <div class="productContent">
                                        <a href="#">
                                            Men Polo Shirt (M) -MPS[2545-P]
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="productCard">
                                    <div class="productThumb">
                                        <img class="img-fluid" src="<?php echo $theme->assetPath; ?>/images/carousel/element-banner2-right.jpg" alt="ix">
                                    </div>
                                    <div class="productContent">
                                        <a href="#">
                                            Men Polo Shirt (M) -MPS[2545-P]
                                        </a>
                                    </div>
                                </div>
                            </div>  
                            <div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="productCard">
                                    <div class="productThumb">
                                        <img class="img-fluid" src="<?php echo $theme->assetPath; ?>/images/carousel/element-banner2-right.jpg" alt="ix">
                                    </div>
                                    <div class="productContent">
                                        <a href="#">
                                            Men Polo Shirt (M) -MPS[2545-P]
                                        </a>
                                    </div>
                                </div>
                            </div>  
                            <div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="productCard">
                                    <div class="productThumb">
                                        <img class="img-fluid" src="<?php echo $theme->assetPath; ?>/images/carousel/element-banner2-right.jpg" alt="ix">
                                    </div>
                                    <div class="productContent">
                                        <a href="#">
                                            Men Polo Shirt (M) -MPS[2545-P]
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="productCard">
                                    <div class="productThumb">
                                        <img class="img-fluid" src="<?php echo $theme->assetPath; ?>/images/carousel/element-banner2-right.jpg" alt="ix">
                                    </div>
                                    <div class="productContent">
                                        <a href="#">
                                            Men Polo Shirt (M) -MPS[2545-P]
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="productCard">
                                    <div class="productThumb">
                                        <img class="img-fluid" src="<?php echo $theme->assetPath; ?>/images/carousel/element-banner2-right.jpg" alt="ix">
                                    </div>
                                    <div class="productContent">
                                        <a href="#">
                                            Men Polo Shirt (M) -MPS[2545-P]
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-xl-5 col-lg-8 col-md-8">
                <div class="">
                    <div class="card card-custom gutter-b bg-white border-0 table-contentpos">
                        <div class="card-body">
                            <div class="d-flex justify-content-between colorfull-select">
                                <div class="selectmain">
                                    <label class="text-dark d-flex" >Choose a Customer 
                                        <span class="badge badge-secondary white rounded-circle"  data-toggle="modal" data-target="#choosecustomer">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-sm" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_122" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                                <g>
                                                    <rect x="234.362" y="128" width="43.263" height="256"></rect>
                                                    <rect x="128" y="234.375" width="256" height="43.25"></rect>
                                                </g>
                                            </svg>
                                        </span>

                                    </label>
                                    <select class="arabic-select select-down ">
                                        <option value="1">walk in customer</option>
                                    </select>
                                </div>

                                <div class="d-flex flex-column selectmain">
                                    <label class="text-dark d-flex" >Shipping Address  
                                        <span class="badge badge-secondary white rounded-circle"  data-toggle="modal" data-target="#shippingpop">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-sm" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_21" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                                <g>
                                                    <rect x="234.362" y="128" width="43.263" height="256"></rect>
                                                    <rect x="128" y="234.375" width="256" height="43.25"></rect>
                                                </g>
                                            </svg>
                                        </span>

                                    </label>
                                    <select class="arabic-select select-down">
                                        <option value="1">Men's</option>
                                        <option value="2">Accessories</option>
                                    </select>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="card card-custom gutter-b bg-white border-0 table-contentpos">
                        <div class="card-body" >
                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <label >Select Product</label>
                                    <fieldset class="form-group mb-0 d-flex barcodeselection">
                                        <select class="form-control w-25" id="exampleFormControlSelect1">
                                            <option>Name</option>
                                            <option>SKU</option>
                                        </select>
                                        <input type="text" class="form-control border-dark" id="basicInput1" placeholder="">
                                    </fieldset>
                                </div>
                            </div>  
                        </div>  
                        <div class="table-datapos">
                            <div class="table-responsive" id="printableTable">
                                <table id="orderTable" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>Discount</th>
                                            <th>Subtotal</th>
                                            <th class=" text-right no-sort"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>
                                                <input type="number" value="10" class="form-control border-dark w-100px" id="basicInput2" placeholder="">
                                            </td>
                                            <td>000</td>
                                            <td>000</td>
                                            <td>
                                                <div class="card-toolbar text-right">
                                                    <a href="#" class="confirm-delete" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>
                                                <input type="number" value="10" class="form-control border-dark w-100px" id="basicInput3" placeholder="">
                                            </td>
                                            <td>000</td>
                                            <td>000</td>
                                            <td>
                                                <div class="card-toolbar text-right">
                                                    <a href="#" class="confirm-delete" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>
                                                <input type="number" value="10" class="form-control border-dark w-100px" id="basicInput4" placeholder="">
                                            </td>
                                            <td>000</td>
                                            <td>000</td>
                                            <td>
                                                <div class="card-toolbar text-right">
                                                    <a href="#" class="confirm-delete" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>
                                                <input type="number" value="10" class="form-control border-dark w-100px" id="basicInput5" placeholder="">
                                            </td>
                                            <td>000</td>
                                            <td>000</td>
                                            <td>
                                                <div class="card-toolbar text-right">
                                                    <a href="#" class="confirm-delete" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>
                                                <input type="number" value="10" class="form-control border-dark w-100px" id="basicInput61" placeholder="">
                                            </td>
                                            <td>000</td>
                                            <td>000</td>
                                            <td>
                                                <div class="card-toolbar text-right">
                                                    <a href="#" class="confirm-delete" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>
                                                <input type="number" value="10" class="form-control border-dark w-100px" id="basicInput7" placeholder="">
                                            </td>
                                            <td>000</td>
                                            <td>000</td>
                                            <td>
                                                <div class="card-toolbar text-right">
                                                    <a href="#" class="confirm-delete" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>
                                                <input type="number" value="10" class="form-control border-dark w-100px" id="basicInput8" placeholder="">
                                            </td>
                                            <td>000</td>
                                            <td>000</td>
                                            <td>
                                                <div class="card-toolbar text-right">
                                                    <a href="#" class="confirm-delete" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>
                                                <input type="number" value="10" class="form-control border-dark w-100px" id="basicInput9" placeholder="">
                                            </td>
                                            <td>000</td>
                                            <td>000</td>
                                            <td>
                                                <div class="card-toolbar text-right">
                                                    <a href="#" class="confirm-delete" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>
                                                <input type="number" value="10" class="form-control border-dark w-100px" id="basicInput98" placeholder="">
                                            </td>
                                            <td>000</td>
                                            <td>000</td>
                                            <td>
                                                <div class="card-toolbar text-right">
                                                    <a href="#" class="confirm-delete" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>
                                                <input type="number" value="10" class="form-control border-dark w-100px" id="basicInput88" placeholder="">
                                            </td>
                                            <td>000</td>
                                            <td>000</td>
                                            <td>
                                                <div class="card-toolbar text-right">
                                                    <a href="#" class="confirm-delete" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>
                                                <input type="number" value="10" class="form-control border-dark w-100px" id="basicInput78" placeholder="">
                                            </td>
                                            <td>000</td>
                                            <td>000</td>
                                            <td>
                                                <div class="card-toolbar text-right">
                                                    <a href="#" class="confirm-delete" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>
                                                <input type="number" value="10" class="form-control border-dark w-100px" id="basicInput6" placeholder="">
                                            </td>
                                            <td>000</td>
                                            <td>000</td>
                                            <td>
                                                <div class="card-toolbar text-right">
                                                    <a href="#" class="confirm-delete" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-body" >
                            <div class="form-group row mb-0">
                                <div class="col-md-12 btn-submit d-flex justify-content-end">
                                    <button type="submit" class="btn btn-danger mr-2 confirm-delete" title="Delete">
                                        <i class="fas fa-trash-alt mr-2"></i>
                                        Suspand/Cancel
                                    </button>
                                    <button type="submit" class="btn btn-secondary white">
                                        <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-folder-fill svg-sm mr-2" viewBox="0 0 16 16">
                                            <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                                        </svg>
                                        Draft Order
                                    </button>
                                </div>
                            </div>  
                        </div>


                    </div>  
                </div> 
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="card card-custom gutter-b bg-white border-0">
                    <div class="card-body" >
                        <div class="shop-profile">
                            <div class="media">
                                <div class="bg-primary w-100px h-100px d-flex justify-content-center align-items-center">
                                    <h2 class="mb-0 white">K</h2>
                                </div>
                                <div class="media-body ml-3">
                                    <h3 class="title font-weight-bold">The Kundol Shop</h3>
                                    <p class="phoonenumber">
                                        02199+(070)234-4569
                                    </p>
                                    <p class="adddress">
                                        Russel st 50,Bostron,MA
                                    </p>
                                    <p class="countryname">USA</p>
                                </div>
                            </div>
                        </div>
                        <div class="resulttable-pos">
                            <table class="table right-table">

                                <tbody>
                                    <tr class="d-flex align-items-center justify-content-between">
                                        <th class="border-0 font-size-h5 mb-0 font-size-bold text-dark">
                                            Total Items
                                        </th>
                                        <td class="border-0 justify-content-end d-flex text-dark font-size-base">6</td>

                                    </tr>
                                    <tr class="d-flex align-items-center justify-content-between">
                                        <th class="border-0 font-size-h5 mb-0 font-size-bold text-dark">
                                            Subtotal
                                        </th>
                                        <td class="border-0 justify-content-end d-flex text-dark font-size-base">$900</td>

                                    </tr>
                                    <tr class="d-flex align-items-center justify-content-between">
                                        <th class="border-0 ">
                                            <div class="d-flex align-items-center font-size-h5 mb-0 font-size-bold text-dark">
                                                DISCOUNT(65%)
                                                <span class="badge badge-secondary white rounded-circle ml-2"  data-toggle="modal" data-target="#discountpop">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-sm" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_31" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                                        <g>
                                                            <rect x="234.362" y="128" width="43.263" height="256"></rect>
                                                            <rect x="128" y="234.375" width="256" height="43.25"></rect>
                                                        </g>
                                                    </svg>
                                                </span>

                                            </div>
                                        </th>
                                        <td class="border-0 justify-content-end d-flex text-dark font-size-base">10%</td>

                                    </tr>
                                    <tr class="d-flex align-items-center justify-content-between">
                                        <th class="border-0 font-size-h5 mb-0 font-size-bold text-dark">
                                            Tax
                                        </th>
                                        <td class="border-0 justify-content-end d-flex text-dark font-size-base">$9</td>

                                    </tr>
                                    <tr class="d-flex align-items-center justify-content-between">
                                        <th class="border-0">
                                            <div class="d-flex align-items-center font-size-h5 mb-0 font-size-bold text-dark">
                                                Shipping Cost
                                                <span class="badge badge-secondary white rounded-circle ml-2"  data-toggle="modal" data-target="#shippingcost">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-sm" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_11" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                                        <g>
                                                            <rect x="234.362" y="128" width="43.263" height="256"></rect>
                                                            <rect x="128" y="234.375" width="256" height="43.25"></rect>
                                                        </g>
                                                    </svg>
                                                </span>

                                            </div>
                                        </th>
                                        <td class="border-0 justify-content-end d-flex text-dark font-size-base">$0</td>

                                    </tr>
                                    <tr class="d-flex align-items-center justify-content-between">
                                        <th class="border-0 font-size-h5 mb-0 font-size-bold text-dark">
                                            Additional Disscount(15%)
                                        </th>
                                        <td class="border-0 justify-content-end d-flex text-dark font-size-base">$9</td>

                                    </tr>
                                    <tr class="d-flex align-items-center justify-content-between item-price">
                                        <th class="border-0 font-size-h5 mb-0 font-size-bold text-primary">

                                            TOTAL
                                        </th>
                                        <td class="border-0 justify-content-end d-flex text-primary font-size-base">$81000</td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end align-items-center flex-column buttons-cash">
                            <div> 
                                <a href="#" class="btn btn-primary white mb-2"  data-toggle="modal" data-target="#payment-popup">
                                    <i class="fas fa-money-bill-wave mr-2"></i>
                                    Pay With Cash
                                </a>

                            </div>
                            <div>
                                <a href="#" class="btn btn-outline-secondary ">
                                    <i class="fas fa-credit-card mr-2"></i>
                                    Pay With Card
                                </a>

                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade text-left" id="payment-popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel11" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable  modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel11">Payment</h3>
                <button type="button" class="close rounded-pill btn btn-sm btn-icon btn-light btn-hover-primary m-0" data-dismiss="modal" aria-label="Close">
                    <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <table class="table right-table">
                    <tbody>
                        <tr class="d-flex align-items-center justify-content-between">
                            <th class="border-0 px-0 font-size-lg mb-0 font-size-bold text-primary">

                                Total Amount to Pay :

                            </th>
                            <td class="border-0 justify-content-end d-flex text-primary font-size-lg font-size-bold px-0 font-size-lg mb-0 font-size-bold text-primary">

                                $722

                            </td>
                        </tr>
                        <tr class="d-flex align-items-center justify-content-between">
                            <th class="border-0 px-0 font-size-lg mb-0 font-size-bold text-primary">

                                Payment Mode :

                            </th>
                            <td class="border-0 justify-content-end d-flex text-primary font-size-lg font-size-bold px-0 font-size-lg mb-0 font-size-bold text-primary">

                                Cash

                            </td>

                        </tr>
                    </tbody>
                </table>      
                <form>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label  class="text-body">Received Amount</label>
                            <fieldset class="form-group mb-3">
                                <input type="text" name="number"  class="form-control"  value="$1000" placeholder="Enter Amount ">
                            </fieldset>
                            <div class="p-3 bg-light-dark d-flex justify-content-between border-bottom">
                                <h5 class="font-size-bold mb-0">Amount to Return :</h5>
                                <h5 class="font-size-bold mb-0">-$20</h5>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label  class="text-body">Note (If any)</label>
                            <fieldset class="form-label-group ">
                                <textarea class="form-control fixed-size" id="horizontalTextarea" rows="5" placeholder="Enter Note"></textarea>

                            </fieldset>
                        </div>
                    </div>
                    <div class="form-group row justify-content-end mb-0">
                        <div class="col-md-6  text-right">
                            <a href="#" class="btn btn-primary">Submit</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>        
</div>
<div class="modal fade text-left" id="shippingpop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel12" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable  modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel12">Add Shipping Address</h3>
                <button type="button" class="close rounded-pill btn btn-sm btn-icon btn-light btn-hover-primary m-0" data-dismiss="modal" aria-label="Close">
                    <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label  class="text-body">Country</label>
                            <fieldset class="form-group mb-3">
                                <select class="js-example-basic-single js-states form-control bg-transparent  p-0 border-0" name="state">
                                    <option value="AL">USA</option>

                                    <option value="WY">UK</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <label  class="text-body">State</label>
                            <fieldset class="form-group mb-3">
                                <input type="text" name="text"  class="form-control"   placeholder="Enter State ">
                            </fieldset>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label  class="text-body">City</label>
                            <fieldset class="form-group mb-3">
                                <select class="js-example-basic-single js-states form-control bg-transparent p-0 border-0" name="state">
                                    <option value="AL">Bahreen</option>

                                    <option value="WY">Dubai</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <label  class="text-body">Postal Code</label>
                            <fieldset class="form-group mb-3">
                                <input type="number" name="text"  class="form-control"   placeholder="Enter Postal code">
                            </fieldset>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label  class="text-body">Address</label>
                            <fieldset class="form-group mb-3">
                                <input type="text" name="text"  class="form-control"  placeholder="Enter Address">
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <label  class="text-body">Phone Number</label>
                            <fieldset class="form-group mb-3">
                                <input type="number" name="text"  class="form-control"  placeholder="Enter Phone Number">
                            </fieldset>
                        </div>
                    </div>
                    <div class="form-group row justify-content-end mb-0">
                        <div class="col-md-6  text-right">
                            <a href="#" class="btn btn-primary">Add Address</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>        
</div>  
<div class="modal fade text-left" id="choosecustomer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel13" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel13">Add Customer</h3>
                <button type="button" class="close rounded-pill btn btn-sm btn-icon btn-light btn-hover-primary m-0" data-dismiss="modal" aria-label="Close">
                    <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label  class="text-body">Customer Group</label>
                            <fieldset class="form-group mb-3">
                                <select class="js-example-basic-single js-states form-control bg-transparent p-0 border-0" name="state">
                                    <option value="AL">General</option>

                                    <option value="WY">Partial</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <label  class="text-body">Customer Name</label>
                            <fieldset class="form-group mb-3">
                                <input type="text" name="text"  class="form-control"  placeholder="Enter Customer Name">
                            </fieldset>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label  class="text-body">Company Name</label>
                            <fieldset class="form-group mb-3">
                                <input type="text" name="text"  class="form-control"  placeholder="Enter Company Name">
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <label  class="text-body">Tax Number</label>
                            <fieldset class="form-group mb-3">
                                <input type="text" name="text"  class="form-control"  placeholder="Enter Tax">
                            </fieldset>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label  class="text-body">Email</label>
                            <fieldset class="form-group mb-3">
                                <input type="email" name="text"  class="form-control"  placeholder="Enter Mail">
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <label  class="text-body">Phone Number</label>
                            <fieldset class="form-group mb-3">
                                <input type="email" name="text"  class="form-control"  placeholder="Enter Phone Number">
                            </fieldset>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label  class="text-body">Country</label>
                            <fieldset class="form-group mb-3">
                                <select class="js-example-basic-single js-states form-control bg-transparent p-0 border-0" name="state">
                                    <option value="AL">USA</option>

                                    <option value="WY">UK</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <label  class="text-body">State</label>
                            <fieldset class="form-group mb-3">
                                <input type="text" name="text"  class="form-control"  placeholder="Enter State">
                            </fieldset>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label  class="text-body">City</label>
                            <fieldset class="form-group mb-3">
                                <select class="js-example-basic-single js-states form-control bg-transparent p-0 border-0" name="state">
                                    <option value="AL">Dubai</option>

                                    <option value="WY">Bahreen</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <label  class="text-body">Postal Code</label>
                            <fieldset class="form-group mb-3">
                                <input type="text" name="text"  class="form-control"  placeholder="Enter Postal Code">
                            </fieldset>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class="col-md-6">
                            <label  class="text-body">Address</label>
                            <fieldset class="form-group mb-3">
                                <input type="text" name="text"  class="form-control "  placeholder="Enter Address">
                            </fieldset>
                        </div>
                    </div>
                    <div class="form-group row justify-content-end mb-0">
                        <div class="col-md-6  text-right">
                            <a href="#" class="btn btn-primary">Add Customer</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>        
</div>  
<div class="modal fade text-left" id="folderpop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel14" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel14">Draft Orders</h3>
                <button type="button" class="close rounded-pill btn btn-sm btn-icon btn-light btn-hover-primary m-0" data-dismiss="modal" aria-label="Close">
                    <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                    </svg>
                </button>
            </div>
            <div class="modal-body pos-ordermain">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="pos-order">
                            <h3 class="pos-order-title" >Order 1</h3>
                            <div class="orderdetail-pos">
                                <p>
                                    <strong>Customer Name</strong>
                                    Sophia Hale
                                </p>
                                <p>
                                    <strong>Address</strong>
                                    9825 Johnsaon Dr.Columbo,MD21044
                                </p>
                                <p>
                                    <strong>Payment Status</strong>
                                    Pending
                                </p>
                                <p>
                                    <strong>Total Items</strong>
                                    10
                                </p>
                                <p>
                                    <strong>Amount to Pay</strong>
                                    $722
                                </p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-edit"></i></a>
                                <a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pos-order">
                            <h3 class="pos-order-title" >Order 1</h3>
                            <div class="orderdetail-pos">
                                <p>
                                    <strong>Customer Name</strong>
                                    Sophia Hale
                                </p>
                                <p>
                                    <strong>Address</strong>
                                    9825 Johnsaon Dr.Columbo,MD21044
                                </p>
                                <p>
                                    <strong>Payment Status</strong>
                                    Pending
                                </p>
                                <p>
                                    <strong>Total Items</strong>
                                    10
                                </p>
                                <p>
                                    <strong>Amount to Pay</strong>
                                    $722
                                </p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-edit"></i></a>
                                <a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pos-order">
                            <h3 class="pos-order-title" >Order 1</h3>
                            <div class="orderdetail-pos">
                                <p>
                                    <strong>Customer Name</strong>
                                    Sophia Hale
                                </p>
                                <p>
                                    <strong>Address</strong>
                                    9825 Johnsaon Dr.Columbo,MD21044
                                </p>
                                <p>
                                    <strong>Payment Status</strong>
                                    Pending
                                </p>
                                <p>
                                    <strong>Total Items</strong>
                                    10
                                </p>
                                <p>
                                    <strong>Amount to Pay</strong>
                                    $722
                                </p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-edit"></i></a>
                                <a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pos-order">
                            <h3 class="pos-order-title">Order 1</h3>
                            <div class="orderdetail-pos">
                                <p>
                                    <strong>Customer Name</strong>
                                    Sophia Hale
                                </p>
                                <p>
                                    <strong>Address</strong>
                                    9825 Johnsaon Dr.Columbo,MD21044
                                </p>
                                <p>
                                    <strong>Payment Status</strong>
                                    Pending
                                </p>
                                <p>
                                    <strong>Total Items</strong>
                                    10
                                </p>
                                <p>
                                    <strong>Amount to Pay</strong>
                                    $722
                                </p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-edit"></i></a>
                                <a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pos-order">
                            <h3 class="pos-order-title" >Order 1</h3>
                            <div class="orderdetail-pos">
                                <p>
                                    <strong>Customer Name</strong>
                                    Sophia Hale
                                </p>
                                <p>
                                    <strong>Address</strong>
                                    9825 Johnsaon Dr.Columbo,MD21044
                                </p>
                                <p>
                                    <strong>Payment Status</strong>
                                    Pending
                                </p>
                                <p>
                                    <strong>Total Items</strong>
                                    10
                                </p>
                                <p>
                                    <strong>Amount to Pay</strong>
                                    $722
                                </p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-edit"></i></a>
                                <a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pos-order">
                            <h3 class="pos-order-title" >Order 1</h3>
                            <div class="orderdetail-pos">
                                <p>
                                    <strong>Customer Name</strong>
                                    Sophia Hale
                                </p>
                                <p>
                                    <strong>Address</strong>
                                    9825 Johnsaon Dr.Columbo,MD21044
                                </p>
                                <p>
                                    <strong>Payment Status</strong>
                                    Pending
                                </p>
                                <p>
                                    <strong>Total Items</strong>
                                    10
                                </p>
                                <p>
                                    <strong>Amount to Pay</strong>
                                    $722
                                </p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-edit"></i></a>
                                <a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pos-order">
                            <h3 class="pos-order-title" >Order 1</h3>
                            <div class="orderdetail-pos">
                                <p>
                                    <strong>Customer Name</strong>
                                    Sophia Hale
                                </p>
                                <p>
                                    <strong>Address</strong>
                                    9825 Johnsaon Dr.Columbo,MD21044
                                </p>
                                <p>
                                    <strong>Payment Status</strong>
                                    Pending
                                </p>
                                <p>
                                    <strong>Total Items</strong>
                                    10
                                </p>
                                <p>
                                    <strong>Amount to Pay</strong>
                                    $722
                                </p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-edit"></i></a>
                                <a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer border-0">
                <div class="row">
                    <div class="col-12">
                        <a href="#" class="btn btn-primary">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>        
</div>  
<div class="modal fade text-left" id="discountpop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel122" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable  modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel122">Add Discount</h3>
                <button type="button" class="close rounded-pill btn btn-sm btn-icon btn-light btn-hover-primary m-0" data-dismiss="modal" aria-label="Close">
                    <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <label  class="text-body">Discount</label>
                        <fieldset class="form-group mb-3 d-flex">
                            <input type="text" name="text" class="form-control bg-white"  placeholder="Enter Discount">
                            <a href="javascript:void(0)" class="btn-secondary btn ml-2 white pt-1 pb-1 d-flex align-items-center justify-content-center">Apply</a>
                        </fieldset>
                        <div class="p-3 bg-light-dark d-flex justify-content-between border-bottom">
                            <h5 class="font-size-bold mb-0">Discount Applied of:</h5>
                            <h5 class="font-size-bold mb-0">$20</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>        
</div>  
<div class="modal fade text-left" id="shippingcost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1444" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable  modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel1444">Add Shipping Cost</h3>
                <button type="button" class="close rounded-pill btn btn-sm btn-icon btn-light btn-hover-primary m-0" data-dismiss="modal" aria-label="Close">
                    <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label  class="text-body">Customer</label>
                            <fieldset class="form-group mb-3">
                                <input type="text" name="text"  class="form-control"  placeholder="Enter Customer " value="David Jones" disabled>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <label  class="text-body">Shipping Address</label>
                            <fieldset class="form-group mb-3">
                                <select class="js-example-basic-single js-states form-control bg-transparent p-0 border-0" name="state">
                                    <option value="AL">928 Johnsaon Dr Columbo,MD 21044</option>

                                    <option value="WY">933 Johnsaon Dr Columbo,MD 21044</option>
                                </select>
                            </fieldset>
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label  class="text-body">Shipping Charges</label>
                            <fieldset class="form-group mb-3">
                                <input type="number" name="text"  class="form-control"  placeholder="Enter Shipping Charges">
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <label  class="text-body">Shipping Status</label>
                            <fieldset class="form-group mb-3">
                                <select class="js-example-basic-single js-states form-control bg-transparent p-0 border-0" name="state">
                                    <option value="AL">Packed</option>

                                    <option value="WY">Open</option>
                                </select>
                            </fieldset>
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label  class="text-body">Shipping Charges</label>
                            <fieldset class="form-label-group ">
                                <textarea class="form-control fixed-size"  rows="5" placeholder="Textarea"></textarea>

                            </fieldset>
                        </div>
                    </div>
                    <div class="form-group row justify-content-end mb-0">
                        <div class="col-md-6  text-right">
                            <a href="#" class="btn btn-primary">Update Order</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>        
</div>  

<ul class="sticky-toolbar nav flex-column bg-primary">

    <li class="nav-item" id="kt_demo_panel_toggle" data-toggle="tooltip" title="" data-placement="right" data-original-title="Check out more demos">
        <a class="btn btn-sm btn-icon text-white" href="#">
            <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-gear fa-spin" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"></path>
                <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"></path>
            </svg>
        </a>
    </li>
</ul>
<div id="kt_color_panel" class="offcanvas offcanvas-right kt-color-panel p-5">
    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-3">
        <h4 class="font-size-h4 font-weight-bold m-0">Theme Config
        </h4>
        <a href="#" class="btn btn-sm btn-icon btn-light btn-hover-primary" id="kt_color_panel_close">
            <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
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
<script src="<?php echo $theme->assetPath; ?>/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $theme->assetPath; ?>/plugins/multipleselect/dist/multiple-select.min.js"></script>
<script src="<?php echo $theme->assetPath; ?>/js/sweetalert.js"></script>
<script src="<?php echo $theme->assetPath; ?>/js/sweetalert1.js"></script>
<script src="<?php echo $theme->assetPath; ?>/js/script.bundle.js"></script>
<script>
    jQuery(function() {
        jQuery('.arabic-select').multipleSelect({
            filter: true,
            filterAcceptOnEnter: true
        })
    });
    jQuery(function() {
        jQuery('.js-example-basic-single').multipleSelect({
            filter: true,
            filterAcceptOnEnter: true
        })
    });
    jQuery(document).ready(function() {
        jQuery('#orderTable').DataTable({
            "info":     false,
            "paging":   false,
            "searching": false,

            "columnDefs": [ {
                "targets"  : 'no-sort',
                "orderable": false,
            }]
        });
    } );
</script>
</body>
<!--end::Body-->
<!-- Mirrored from kundol.themes-coder.net/admin-demo/pos.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Jul 2022 14:49:12 GMT -->
</html>\