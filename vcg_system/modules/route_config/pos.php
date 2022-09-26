<?php
	$request->require->login = 1;
	switch($request->url){
		case '/':
			$request->template->update("template","template_pos", true);
			$request->require->login = 1;
			$request->route = "pages/pos/pos";
			$core->route($request);
		break;
	} 
?>