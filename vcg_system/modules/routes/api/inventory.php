<?php
	if(isset($data->flag)){
		switch($data->flag){
			case "get":
				$input = $core->obj();
				$input->all = true;
				$input->condition = [];
				if(isset($req->post["value"])){
					$post = $helper->universal->parsePost($req->post["value"]);
					foreach ($post as $key => $value) {
						if($value){	
							if($key == 'category'){
								array_push($input->condition, ["product_category", "=", "$value"]);
							}else if($key == 'brand'){
								array_push($input->condition, ["product_brand", "=", "$value"]);
							}else{
								array_push($input->condition, ["$key", "=", "$value"]);
							}
						}
					}
				}
				$query = $helper->product->getProductInventory($input);
				$core->response($query);
			break;
			case "add":
				$output = $core->output();
				$post = $helper->universal->parsePost($req->post["value"]);
				$input = $core->obj();
				$post["assign_employee"] = $core->get_session("login");
				$post["assign_employee"] = $post["assign_employee"]->ID;
				$post["date_created"] = date_create();
				$post["date_created"] = date_format($post["date_created"],"Y-m-d");
				$addInventory = $helper->product->addEnventoryProduct($post);
				if($addInventory->status){
					$output->message = "Successfully added inventory entry";
					$output->status = true;
					$updateStock = $helper->product->updateProductInventoryStock(json_decode($post["selectedProduct"]));
					if($updateStock->status){
						$output->data = $updateStock->data;
					}else{
						$output->message = $updateStock->message;
					}
					$core->response($output);
				}else{
					$output->message = $addTransaction->message;
					$core->response($add);
				}
			break;
		}
	}
?>