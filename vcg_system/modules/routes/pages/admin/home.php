<?php
	if(isset($data->flag)){
		switch($data->flag){
			case "dashboard":
				$input = $core->obj();
				$input->title = "Dashboard"; // header title
				$input->pageTitle = "Dashboard Page"; // breadcrum title
				$template->data($input)->content("dashboard", true)->render("admin");
			break;	
			case "adminlogin":
				$input = $core->obj();
				$input->title = "Login Page"; // header title
				$input->pageTitle = "Dashboard Page"; // breadcrum title
				$template->data($input)->content("dashboard", true)->update("template","template_login", true)->render("admin");
			break;	
		}
	}		
?>