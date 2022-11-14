<?php
	$request->require->login = 1;
	switch($request->url){
		case '/':
			$request->route = "pages/admin/inventory";
			$request->flag = "product";
			$core->route($request);
		break;
		case '/po':
			$request->route = "pages/admin/inventory";
			$request->flag = "get";
			$core->route($request);
		break;
		case '/add':
			$request->route = "pages/admin/inventory";
			$request->flag = "add";
			$core->route($request);
		break;
		case '/view':
			$request->route = "pages/admin/inventory";
			$request->flag = "view";
			$core->route($request);
		break;
		default:
			$request->template->content("error/404", true)->render("frontstore");
		break;
	}
?>