<?php
	
	switch($request->url){
		case '/':
			$request->require->login = 1;
			$request->route = "pages/admin/home";
			$request->flag = "dashboard";
			$core->route($request);
		break;
		case '/dashboard':
			$request->require->login = 1;
			$request->route = "pages/admin/home";
			$request->flag = "dashboard";
			$core->route($request);
		break;
		case '/filter':
			$request->require->login = 1;
			$request->route = "pages/admin/fill-calculator";
			$core->route($request);
		break;
		case '/login':
			$request->route = "pages/admin/home";
			$request->flag = "login";
			$core->route($request);
		break;
		default:
			$request->template->content("error/404", true)->render("frontstore");
		break;
	}
?>