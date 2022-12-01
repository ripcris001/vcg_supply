<?php 
	if(isset($data->flag)){
		switch($data->flag){
			case "product":
				$input = $core->obj();
				$input->title = "Product Inventory"; // header title
				$input->pageTitle = "Product Inventory Page"; // breadcrum title
				$template->data($input)->content("inventory/productlist", true)->render("admin");
			break;
			case "get":
				$input = $core->obj();
				$input->title = "Product Inventory"; // header title
				$input->pageTitle = "Purchase Order Page"; // breadcrum title
				$template->data($input)->content("inventory/list", true)->render("admin");
			break;
			case "add":
				$input = $core->obj();
				$input->title = "Product Inventory"; // header title
				$input->pageTitle = "Add Product Inventory Page"; // breadcrum title
				$template->data($input)->content("inventory/add", true)->render("admin");
			break;
			case "view":
				$trid = isset($req->get["purchase_order"]) ? $req->get["purchase_order"] : null ;
				$input = $core->obj();
				$input->trid = $trid;
				if(isset($trid)){
					$query = $core->obj();
					$query->condition = [["id", '=', $input->trid]];
					$getPO = $helper->product->getProductInventory($query);
					if($getPO->status){
						$input->title = $getPO->data->po_number;
						$input->purchase_order = json_encode($getPO->data);
					}
				}
				$input->title = "Product Inventory"; // header title
				$input->pageTitle = "View Inventory Page"; // breadcrum title
				$template->data($input)->content("inventory/view", true)->render("admin");
			break;
			case "print":
				$trid = isset($req->get["purchase_order"]) ? $req->get["purchase_order"] : null ;
				$input = $core->obj();
				$input->title = "No Inventory";
				$input->trid = $trid;
				if(isset($trid)){
					$query = $core->obj();
					$query->condition = [["id", '=', $trid]];
					$getData = $helper->product->getProductInventory($query);
					if($getData->status){
						$input->title = isset($getData->data->po_number) ? strtoupper($getData->data->po_number) : 'Purchase #';
						$input->purchase_order = $getData->data;
					}
					$input->purchase_order = $getData->data;
				}
				$template->data($input)->content("inventory", true)->render("invoice");
			break;
		}
	}
?>