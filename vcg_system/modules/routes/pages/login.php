<?php
	if(isset($data->flag)){
		switch($data->flag){
			case "login":
				$template->content("login", true)->render("frontstore");
			break;
			case "register":
				$template->content("register", true)->render("frontstore");
			break;
		}
	}
?>