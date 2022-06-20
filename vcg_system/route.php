<?php

	# api routes filter
	# request made using POST request
	# add route for post request
	# output is encoded json data [need to be parse in frontend]

	if($request->req->method == "POST"){
		switch($request->url){
			case '/api/login':
				$request->route = "api/login";
				$core->route($request);
			break;
			default:
				http_response_code(400);
				$cout = $vars->obj();
				$cout->message = "Error 404: url not found";
				$cout->status = "false";
				$core->route($cout);
			break;
		}
	}else{

		# frontend route filter
		# request made using GET request
		switch($request->url){
			case '/':
				$request->route = "home";
				$core->route($request);
			break;
			case '/login':
				$request->route = "login";
				$request->flag = "login";
				$core->route($request);
			break;
			case '/shop':
				$request->route = "shop";
				$request->require->login = 1;
				$core->route($request);
			break;
			case '/product':
				$request->route = "product";
				$core->route($request);
			break;
			case '/contact':
				$request->route = "contact";
				$core->route($request);
			break;
			case '/logout':
				session_destroy();
				$core->redirect("/");
			break;
			default:
				$template->content("error/404", true)->render("frontstore");
			break;
		}
	}

	/*	$request built-in variables and uses */
	# $request->require->login = integer [ 0 or 1 ] | set if page require login
	# $request->route          = string 			| name of route source file. default path is in routes folder
	# $request->flag           = string 			| assign a custom flag on proccess

?>
