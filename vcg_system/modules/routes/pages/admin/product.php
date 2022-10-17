<?php 
	if(isset($data->flag)){
		switch($data->flag){
			case "product":
				$input = $core->obj();
				$input->title = "Product List"; // header title
				$input->pageTitle = "Product List Page"; // breadcrum title
				$template->data($input)->content("product/list", true)->render("admin");
			break;
			case "product_add":
				$input = $core->obj();
				$input->title = "Product List"; // header title
				$input->pageTitle = "Product List Page"; // breadcrum title
				$template->data($input)->content("product/list", true)->render("admin");
			break;
			case "product_brand":
				$input = $core->obj();
				$input->title = "Product Brand"; // header title
				$input->pageTitle = "Product List Page"; // breadcrum title
				$template->data($input)->content("product/list", true)->render("admin");
			break;
			case "product_category":
				$input = $core->obj();
				$input->title = "Product Category"; // header title
				$input->pageTitle = "Product List Page"; // breadcrum title
				$template->data($input)->content("product/list", true)->render("admin");
			break;
			default:
				$template->content("error/404", true)->render("frontstore");
			break;
		}
	}
	
?>