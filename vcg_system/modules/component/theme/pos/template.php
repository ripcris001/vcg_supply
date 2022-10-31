<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>POS | <?php echo isset($data->title) ? $data->title : WEB_TITLE; ?></title>
    
	<meta name="description" content="Updates and statistics" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo FAVICON; ?>" />
	<link href="<?php echo $theme->assetPath; ?>/css/stylec619.css?v=1.0" rel="stylesheet" type="text/css" />
	<link href="<?php echo $theme->assetPath; ?>/api/pace/pace-theme-flat-top.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $theme->assetPath; ?>/api/mcustomscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $theme->assetPath; ?>/api/dt-v2/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $theme->assetPath; ?>/api/multi-select/dist/multiple-select.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo CUSTOMASSEST; ?>/custom.css" />
	<link rel="shortcut icon" href="<?php echo CUSTOMASSEST; ?>/logos/favicon.html" />
	<script src="<?php echo $theme->assetPath; ?>/js/plugin.bundle.min.js"></script>
	<script src="<?php echo $theme->assetPath; ?>/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo CUSTOMASSEST; ?>/custom.js"></script>
</head>
<body id="tc_body" class="header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-fixed color-theme-yellow">
	<!-- Paste this code after body tag -->
	<div class="se-pre-con">
		<div class="pre-loader">
			<img class="img-fluid" src="<?php echo $theme->assetPath; ?>/images/loadergif.gif" alt="loading">
		</div>
	</div>
	<!-- pos header -->
	<?php
	if($theme->view->header){ 
		include("$theme->header"); 
	}
	?>
	<?php
	if($theme->contentFilter->isFile){
		include("$theme->content");
	}else{
		echo "$theme->content";
	}
	?>
	<hr>
</div>	

<script src="<?php echo $theme->assetPath; ?>/api/dt-v2/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $theme->assetPath; ?>/api/multi-select/dist/multiple-select.min.js"></script>
<script src="<?php echo $theme->assetPath; ?>/js/sweetalert.js"></script>
<script src="<?php echo $theme->assetPath; ?>/js/sweetalert1.js"></script>
<script src="<?php echo $theme->assetPath; ?>/js/script.bundle.js"></script>
<script src="<?php echo CUSTOMASSEST.'/plugin/notify/bootstrap-notify.min.js'; ?>"></script>
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
</script>
</body>
</html>