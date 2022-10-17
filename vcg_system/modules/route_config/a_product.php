<?php
	$request->require->login = 1;
	switch($request->url){
		case '/':
			$request->route = "pages/admin/product";
			$request->flag = "product";
			$core->route($request);
		break;
		case '/add':
			$request->route = "pages/admin/product";
			$request->flag = "product_add";
			$core->route($request);
		break;
		case '/brand':
			$request->route = "pages/admin/product";
			$request->flag = "product_brand";
			$core->route($request);
		break;
		case '/category':
			$request->route = "pages/admin/product";
			$request->flag = "product_category";
			$core->route($request);
		break;
		default:
			$request->template->content("error/404", true)->render("frontstore");
		break;
	}
?>