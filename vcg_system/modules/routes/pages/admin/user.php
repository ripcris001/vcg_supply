<?php 
	if(isset($data->flag)){
		switch($data->flag){
			case "get":
				$input = $core->obj();
				$input->title = "Product Inventory"; // header title
				$input->pageTitle = "Product Inventory Page"; // breadcrum title
				$template->data($input)->content("user/list", true)->render("admin");
			break;
			
		}
	}
?>