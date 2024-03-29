<?php
	switch($request->url){
		case '/login':
			$request->route = "api/login";
			$request->flag = "user";
			$core->route($request);
		break;
		case '/login/register':
			$request->route = "api/login";
			$request->flag = "register";
			$core->route($request);
		break;
		case '/login/customer':
			$request->route = "api/login";
			$request->flag = "customer";
			$core->route($request);
		break;
		case '/users':
			$request->route = "api/users";
			$request->flag = "get";
			$core->route($request);
		break;
		case '/users/add':
			$request->route = "api/users";
			$request->flag = "add";
			$core->route($request);
		break;
		case '/users/update':
			$request->route = "api/users";
			$request->flag = "update";
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
		case '/product/addtocart':
			$request->route = "api/product/product";
			$request->flag = "addtocart";
			$core->route($request);
		break;
		case '/product/updatetocart':
			$request->route = "api/product/product";
			$request->flag = "updatetocart";
			$core->route($request);
		break;
		case '/product/getpendingcart':
			$request->route = "api/product/product";
			$request->flag = "getpendingcart";
			$core->route($request);
		break;
		case '/product/getprocesscart':
			$request->route = "api/product/product";
			$request->flag = "getprocesscart";
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
		case '/transaction/update':
			$request->route = "api/transaction";
			$request->flag = "update";
			$core->route($request);
		break;
		case '/transaction/sales':
			$request->route = "api/transaction";
			$request->flag = "sales";
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

		case '/inventory':
			$request->route = "api/inventory";
			$request->flag = "get";
			$core->route($request);
		break;
		case '/inventory/add':
			$request->route = "api/inventory";
			$request->flag = "add";
			$core->route($request);
		break;

		case '/dashboard':
			$request->route = "api/dashboard";
			$request->flag = "get";
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