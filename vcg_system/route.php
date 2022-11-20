<?php

	# api routes filter
	# request made using POST request
	# add route for post request
	# output is encoded json data [need to be parse in frontend]
	if($request->db->status){
		if($request->req->method == "GET"){
			# frontend route filter
			# request made using GET request
			switch($request->url){
				case '/':
					$request->route = "pages/home";
					$request->flag = "home";
					$core->route($request);
				break;
				case '/login':
					$request->route = "pages/login";
					$request->flag = "login";
					$core->route($request);
				break;
				case '/register':
					$request->route = "pages/login";
					$request->flag = "register";
					$core->route($request);
				break;
				case '/shop':
					$request->route = "pages/shop";
					$request->require->login = 1;
					$core->route($request);
				break;
				case '/product':
					$request->route = "pages/product";
					$core->route($request);
				break;
				case '/contact':
					$request->route = "pages/contact";
					$core->route($request);
				break;
				case '/mycart':
					$request->route = "pages/home";
					$request->flag = "cart";
					$core->route($request);
				break;
				case '/logout':
					$core->destroy_session();
					$core->redirect("/");
				break;
				default:
					$request->template->content("error/404", true)->render("frontstore");
				break;
			}
		}else{
			http_response_code(404);
			$cout = new stdClass();
			$cout->message = "Error 404: url not found";
			$cout->status = "false";
			$core->route($cout);
		}
	}else{
		echo "No database connection";
	}

	/*	$request built-in variables and uses */
	# $request->require->login = integer [ 0 or 1 ] | set if page require login
	# $request->route          = string 			| name of route source file. default path is in routes folder
	# $request->flag           = string 			| assign a custom flag on proccess

?>