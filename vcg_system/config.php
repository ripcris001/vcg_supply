<?php
	

	# database configuration
	Define("DBHOST", "localhost");
	Define("DBUSER", "root");
	Define("DBPASS", "");
	Define("DBNAME", "vgc_supply");
	Define("DBPREFIX", "vgc_");

	# default asset path
	Define("BASEPATH", "/vcg_system");
	Define("ASSETPATH", BASEPATH."/component/theme/frontstore/assets");

	# web default configuration
	Define("WEB_TITLE", 'VCG Tire Supply');

	# addition info configuration
	Define("INFO_ABOUT", '');
	Define("INFO_EMAIL", 'test@admin.com');
	Define("INFO_ADDRESS", 'Triangle Lot E, Burgos EXT., BRGY. Estefania, Bacolod City');
	Define("INFO_OFFICE_HOURS", 'Monday - Friday 8:00 AM - 5:00 PM');
	Define("INFO_TELE_CONTACT_NUMBER", '2135977');
	Define("INFO_CONTACT_NUMBER", '213-5977');
	Define("INFO_PHONE_NUMBER", '0998-52622988');

	Define("INFO_LOGO_1", ASSETPATH.'/img/logo/1.png');
	Define("INFO_LOGO_2", ASSETPATH.'/img/logo/1.png');

	Define("INFO_CURRENCY", "PHP");
	

	Define("INFO_COPYRIGHT", "2022 VCG");
	# template theme configuration
	Define("THEME_PATH", "component/theme");
	Define("THEME_LIST_PATH", 
		array(
			"admin" => "admin", 
			"frontstore" => "frontstore", 
			"default" => "default"
		)
	);
	Define("ROOT_URL", BASEPATH);

	# session timeout is base on seconds;
	Define("SESSION_TIMEOUT", 300);
?>