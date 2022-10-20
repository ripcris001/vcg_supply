<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin | <?php echo isset($data->title) ? $data->title : WEB_TITLE; ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo FAVICON; ?>" />
    <link rel="stylesheet" href="<?php echo $theme->assetPath; ?>/css/backend-plugin.min.css">
    <link rel="stylesheet" href="<?php echo $theme->assetPath; ?>/css/backende209.css?v=1.0.0">
    <link rel="stylesheet" href="<?php echo $theme->assetPath; ?>/vendor/%40fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo $theme->assetPath; ?>/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $theme->assetPath; ?>/vendor/remixicon/fonts/remixicon.css">
    <link rel="stylesheet" href="<?php echo CUSTOMASSEST; ?>/custom.css">
    
    <!-- Backend Bundle JavaScript -->
    <script src="<?php echo $theme->assetPath; ?>/js/backend-bundle.min.js"></script>
</head>
<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <?php
            if($theme->view->sidebar){ 
                include("$theme->sidebar"); 
            }
        ?>
        <?php
            if($theme->view->header){ 
                include("$theme->header"); 
            }
        ?>
        <div class="content-page">
            <div class="container-fluid">
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
    <?php
        if($theme->view->footer){ 
            include("$theme->footer"); 
        }
    ?>
    
    <!-- app JavaScript -->
    <script src="<?php echo $theme->assetPath; ?>/js/app.js"></script>
    <script src="<?php echo CUSTOMASSEST.'/plugin/notify/bootstrap-notify.min.js'; ?>"></script>
    <script src="<?php echo CUSTOMASSEST.'/plugin/notify/notify-script.js'; ?>"></script>
    <script src="<?php echo CUSTOMASSEST; ?>/custom.js"></script>
</body>
</html>