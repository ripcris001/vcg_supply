<?php
	switch($request->url){
		case '/':
			$request->route = "admin/home";
			$core->route($request);
		break;
		default:
			$request->template->content("error/404", true)->render("frontstore");
		break;
	}
?>