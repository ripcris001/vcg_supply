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
		case '/transaction':
			$request->route = "api/transaction";
			$request->flag = "get";
			$core->route($request);
		break;
		case '/transaction/add':
			$request->route = "api/transaction";
			$request->flag = "add";
			$core->route($request);
		break;

		case '/address':
			$cdata = $core->obj();
			$cdata->status = true;
			$cdata->data = file_get_contents("$request->root/modules/component/theme/custom/address.json");
			$cdata->data = json_decode($cdata->data);
			$core->response($cdata);
		break;

		case '/customer':
			$request->route = "api/customer";
			$request->flag = "get";
			$core->route($request);
		break;
		case '/customer/add':
			$request->route = "api/customer";
			$request->flag = "add";
			$core->route($request);
		break;
		case '/customer/shipping/add':
			$request->route = "api/customer";
			$request->flag = "addshipping";
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
