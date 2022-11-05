<?php
	if(isset($data->flag)){
		switch($data->flag){
			case "query":
				$q = $db->builder->select('users')->where([["Username", "=", "ripcris"]])->string();
				print_r($q);
			break;
			case "date":
				print_r("test");
			break;
		}
	}	
?>