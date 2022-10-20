<?php 
	if(isset($data->flag)){
		switch($data->flag){
			case "product":
				$input = $core->obj();
				$input->title = "Product Inventory"; // header title
				$input->pageTitle = "Product Inventory Page"; // breadcrum title
				$template->data($input)->content("inventory/list", true)->render("admin");
			break;
		}
	}
?>