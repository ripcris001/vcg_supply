<?php
	switch($request->url){
		case '/test/session':
				print_r($core->get_session());
				echo "<br>";
				print_r(strtotime(date("h:i:sa"))+900);
		break;
		case '/test/session/expire':
				$current_time = strtotime(date("h:i:sa"));
				$session_expire_time = $core->get_session("session_expire")->data;
				print_r("Current time: ".date("h:i:sa",$current_time));
				print_r("<br>Session Expire: ".date("h:i:sa", $session_expire_time));
				echo "<br>";
				if($current_time > $session_expire_time){
					print_r("Session has expired");
				}
		break;
	}
?>