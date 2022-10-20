<?php
	$request->require->login = 1;
	switch($request->url){
		case '/':
			$request->route = "pages/admin/inventory";
			$request->flag = "product";
			$core->route($request);
		break;
		case '/':
			$request->route = "pages/admin/inventory";
			$request->flag = "product";
			$core->route($request);
		break;
		default:
			$request->template->content("error/404", true)->render("frontstore");
		break;
	}
?>