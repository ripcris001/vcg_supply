<?php
	$request->require->login = 1;
	switch($request->url){
		case '/':
			$request->route = "pages/admin/transaction";
			$request->flag = "list";
			$core->route($request);
		break;
		case '/view':
			$request->route = "pages/admin/transaction";
			$request->flag = "invoice";
			$core->route($request);
		break;
		case '/delivery':
			$request->route = "pages/admin/transaction";
			$request->flag = "delivery";
			$core->route($request);
		break;
		case '/sales':
			$request->route = "pages/admin/transaction";
			$request->flag = "sales";
			$core->route($request);
		break;
		
		default:
			$request->template->content("error/404", true)->render("frontstore");
		break;
	}
?>