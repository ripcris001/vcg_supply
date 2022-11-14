<?php
	switch($request->url){
		case '/':
			$request->require->login = 1;
			$request->route = "pages/pos/pos";
			$request->flag = "pos";
			$core->route($request);
		break;
		case '/print/transaction':
			$request->route = "pages/pos/pos";
			$request->flag = "print_transaction";
			$core->route($request);
		break;
	} 
?>