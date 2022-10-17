<?php
	switch($request->url){
		case '/login':
			$request->route = "api/login";
			$core->route($request);
		break;
		case '/users':
			$request->route = "api/users";
			$core->route($request);
		break;
		case '/product':
			$request->route = "api/product/list";
			$core->route($request);
		break;
		case '/category':
			$request->route = "api/product/category";
			$core->route($request);
		break;
		case '/brand':
			$request->route = "api/product/brand";
			$core->route($request);
		break;
		default:
			http_response_code(404);
			$cout = new stdClass();
			$cout->message = "Error 404: url not found";
			$cout->status = "false";
			$core->route($cout);
		break;
	}
?>
