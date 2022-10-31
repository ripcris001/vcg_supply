<!doctype html>
	<html class="no-js" lang="zxx">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title><?php echo isset($data->title) ? $data->title : WEB_TITLE; ?></title>
		<meta name="author" content="Angfuzsoft">
		<meta name="description" content="Purchase Order - <?php echo isset($data->title) ? $data->title : WEB_TITLE; ?>">
		<meta name="keywords" content="Purchase Order - <?php echo isset($data->title) ? $data->title : WEB_TITLE; ?>">
		<meta name="robots" content="INDEX,FOLLOW">
		<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $theme->assetPath; ?>/img/favicons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $theme->assetPath; ?>/img/favicons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $theme->assetPath; ?>/img/favicons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $theme->assetPath; ?>/img/favicons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $theme->assetPath; ?>/img/favicons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $theme->assetPath; ?>/img/favicons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $theme->assetPath; ?>/img/favicons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $theme->assetPath; ?>/img/favicons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $theme->assetPath; ?>/img/favicons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192" href="<?php echo $theme->assetPath; ?>/img/favicons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $theme->assetPath; ?>/img/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $theme->assetPath; ?>/img/favicons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $theme->assetPath; ?>/img/favicons/favicon-16x16.png">
		<link rel="manifest" href="<?php echo $theme->assetPath; ?>/img/favicons/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php echo $theme->assetPath; ?>/img/favicons/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<link rel="preconnect" href="https://fonts.googleapis.com/">
		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo $theme->assetPath; ?>/css/app.min.css">
		<link rel="stylesheet" href="<?php echo $theme->assetPath; ?>/css/style.css">
		 <link rel="stylesheet" href="<?php echo CUSTOMASSEST; ?>/custom.css">
		<script src="<?php echo $theme->assetPath; ?>/js/vendor/jquery-3.6.0.min.js"></script>
	</head>
	<body>
		<div class="invoice-container-wrap">
			<?php
			if($theme->contentFilter->isFile){
				include("$theme->content");
			}else{
				echo "$theme->content";
			}
			?>
		</div>
		
		<script src="<?php echo $theme->assetPath; ?>/js/app.min.js"></script>
		<script src="<?php echo $theme->assetPath; ?>/js/main.js"></script>
		<script src="<?php echo CUSTOMASSEST; ?>/custom.js"></script>
	</body>
</html>
