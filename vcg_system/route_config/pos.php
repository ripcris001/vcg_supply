<?php
	switch($request->url){
		case '/':
			$request->template->update("template","template_pos", true);
			$request->require->login = 1;
			$request->route = "pos/pos";
			$core->route($request);
		break;
	} 
?>