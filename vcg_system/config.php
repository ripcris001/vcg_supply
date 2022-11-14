<?php
	

	# database configuration
	Define("DBHOST", "localhost");
	Define("DBUSER", "root");
	Define("DBPASS", "");
	Define("DBNAME", "vgc_supply");
	Define("DBPREFIX", "vgc_");

	# default asset path
	Define("BASEPATH", "/vcg_system");
	Define("ASSETPATH", BASEPATH."/modules/component/theme/frontstore/assets");

	# web default configuration
	Define("WEB_TITLE", 'VCG Tire Supply');

	# addition info configuration
	Define("INFO_ABOUT", '');
	Define("INFO_EMAIL", 'test@admin.com');
	Define("INFO_ADDRESS", 'Triangle Lot E, Burgos EXT., BRGY. Estefania, Bacolod City');
	Define("INFO_OFFICE_HOURS", 'Monday - Friday 8:00 AM - 5:00 PM');
	Define("INFO_TELE_CONTACT_NUMBER", '09985622998');
	Define("INFO_CONTACT_NUMBER", '0998-562-2998');
	Define("INFO_PHONE_NUMBER", '0998-52622988');
	Define("INFO_WEBSITE", 'www.vcgtiresupply.ph');

	Define("INFO_LOGO_1", ASSETPATH.'/img/logo/1.png');
	Define("INFO_LOGO_2", ASSETPATH.'/img/logo/1.png');
	Define("FAVICON", ASSETPATH.'/img/favicon.png');

	Define("INFO_CURRENCY", "PHP");
	

	Define("INFO_COPYRIGHT", "2022 VCG");
	# template theme configuration
	Define("THEME_PATH", "modules/component/theme");
	Define("THEME_LIST_PATH", 
		array(
			"admin" => "admin", 
			"frontstore" => "frontstore", 
			"default" => "default",
			"pos" => "pos",
			"invoice" => "invoice"
		)
	);
	Define("ROOT_URL", BASEPATH);

	# session timeout is base on seconds;
	Define("SESSION_TIMEOUT", 300);
	Define("ROUTE_SOURCE", array(
		"/api" => ["api", "post"],
		"/pos" => ["pos", "get" ],
		"/admin" => ["admin", "get" ],
		"/admin/product" => ["a_product", "get" ],
		"/admin/inventory" => ["inventory", "get" ],
		"/admin/transaction" => ["transaction", "get" ],
		"/admin/user" => ["user", "get" ],
		"/test" => ["test", "get" ]
	));
	Define("HELPER", array("component","universal","brand", "category", "user", "product", "transaction", "customer"));
	Define("SPECIAL_ROLE", array("developer"));
	Define("CUSTOMASSEST", "/vcg_system/modules/component/theme/custom/assets");
	Define("TRANSACTIONCODE", "TRO");
	Define("TRANSACTIONCOUNT", 10);
?>