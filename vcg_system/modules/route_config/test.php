<?php
	$request->require->login = 0;
	switch($request->url){
		case '/tr':
			$act = TRANSACTIONCODE;
			$tid = 10;
			$zeroCount = TRANSACTIONCOUNT;
			$unique = strtoupper($act).sprintf("%0".$zeroCount."d", $tid);
			echo "$unique";
		break;
		case '/rtr':
			$data = "TRO0000000010";
			$parse = str_replace(TRANSACTIONCODE, "", $data);
			$parse = (int)$parse;
			echo "$parse";
		break;
		case '/test':
			$data = "TRO0000000010";
			$parse = str_replace(TRANSACTIONCODE, "", $data);
			$parse = (int)$parse;
			echo "$parse";
		break;
		case '/date':
			$request->route = "pages/test";
			$request->flag = "date";
			$core->route($request);
		break;

		default:
			$request->template->content("error/404", true)->render("frontstore");
		break;
	}
?>