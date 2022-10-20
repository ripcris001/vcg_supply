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

		//product api
		case '/product':
			$request->route = "api/product/product";
			$request->flag = "get";
			$core->route($request);
		break;
		case '/product/add':
			$request->route = "api/product/product";
			$request->flag = "add";
			$core->route($request);
		break;
		//category api
		case '/category':
			$request->route = "api/product/category";
			$request->flag = "get";
			$core->route($request);
		break;
		// add category api
		case '/category/add':
			$request->route = "api/product/category";
			$request->flag = "add";
			$core->route($request);
		break;

		// brand api
		case '/brand':
			$request->route = "api/product/brand";
			$request->flag = "get";
			$core->route($request);
		break;
		// add brand api
		case '/brand/add':
			$request->route = "api/product/brand";
			$request->flag = "add";
			$core->route($request);
		break;
		// update brand api
		case '/brand/update':
			$request->route = "api/product/brand";
			$request->flag = "update";
			$core->route($request);
		break;

		// transaction api
		case '/transaction/add':
			$request->route = "api/transaction";
			$request->flag = "add";
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
