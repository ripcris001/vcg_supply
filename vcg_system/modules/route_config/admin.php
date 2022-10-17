<?php
	$request->require->login = 1;
	switch($request->url){
		case '/':
			$request->route = "pages/admin/home";
			$core->route($request);
		break;
		case '/dashboard':
			$request->route = "pages/admin/home";
			$core->route($request);
		break;
		case '/filter':
			$request->route = "pages/admin/fill-calculator";
			$core->route($request);
		break;
		default:
			$request->template->content("error/404", true)->render("frontstore");
		break;
	}
?>