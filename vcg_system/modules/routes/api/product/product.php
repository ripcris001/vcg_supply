<?php
	if(isset($data->flag)){
		switch($data->flag){
			case "get":
				$output = $core->output();
				$input = $core->obj();
				$input->all = true;
				$input->condition = array();
				$input->table = "product";
				if(isset($req->post["value"])){
					$post = $helper->universal->parsePost($req->post["value"]);
					foreach ($post as $key => $value) {
						if($value){	
							if($key == 'category'){
								if(isset($value)){
									array_push($input->condition, ["product_category", "=", "$value"]);
								}
							}else if($key == 'brand'){
								if(isset($value)){
									array_push($input->condition, ["product_brand", "=", "$value"]);
								}
							}else{
								if(isset($value)){
									array_push($input->condition, ["$key", "=", "$value"]);
								}
							}
						}
					}
				}
				$product = $helper->universal->query($input);
				if($product->status && $product->data){
					$pcount = count($product->data);
					for($a = 0; $a < $pcount; $a++){
						$product->data[$a]["brand"] = "";
						$product->data[$a]["category"] = "";
						$product->data[$a]["remaining_stock"] = 0;

						$pdata = $product->data[$a];
						
						$iBrand = $core->obj();
						$iCategory = $core->obj();
						$iStock = $core->obj();

						$iBrand->condition = [["brand_id", "=", $pdata["product_brand"]]];
						$iCategory->condition = [["cat_id", "=", $pdata["product_category"]]];
						$iStock->condition = [["product_id", "=", $pdata["product_id"]]];

						$qBrand = $helper->brand->getbrand($iBrand);
						$qCategory = $helper->category->getCategory($iCategory);
						$qStock = $helper->product->getProductStock($iStock);
						if($qBrand->status){
							$product->data[$a]["brand"] = $qBrand->data->brand_name;
						}
						if($qCategory->status){
							$product->data[$a]["category"] = $qCategory->data->cat_name;
						}
						if($qStock->status){
							$iStock->data = $core->obj();
							if($qStock->data){
								$iStock->data = $qStock->data;
								$product->data[$a]["remaining_stock"] = $iStock->data->current_quantity - ($iStock->data->sold_quantity + $iStock->data->pending_quantity);
							}
						}
						$product->data[$a] = $helper->universal->clean($product->data[$a], ["product_brand","product_category"]);
						if($a == ($pcount - 1)){
							$product->data = $product->data;
							$core->response($product);
						}
					}		
				}else{
					$core->response($product);
				}
			break;
			case "add":
				$output = $core->output();
				$post = $helper->universal->parsePost($req->post["value"]);
				$post["product_name"] = strtolower($post["product_name"]);
				$input = $core->obj();
				$input->condition = [["product_name", "=", $post["product_name"]], ["product_category", "=", $post["product_category"]], ["product_brand", "=", $post["product_brand"]]];
				$checkBrand = $helper->product->getProduct($input);
				if($checkBrand->status){
					$output->message = "Product already exist";
					$output->response = $checkBrand;
					$core->response($output);
				}else{
					$add = $helper->product->addProduct($post);
					$core->response($add);
				}
			break;
			case "addtocart":
				$output = $core->output();
				$post = $helper->universal->parsePost($req->post["value"]);
				if(isset($post["cart_id"]) && $post["cart_id"] === 0){
					unset($post["cart_id"]);
					$query = $helper->product->addProductToCart($post);
					if($query->status){
						$output->message = "Successfully added to cart.";
						$output->status = true;
						$core->response($output);
					}else{
						$output->message = "failed added to cart.";
						$output->status = false;
						$core->response($output);
					}
				}else{
					$updateInput = $core->obj();
					$updateInput->condition = [["cart_id", "=", (int)$post["cart_id"]]];
					$updateInput->set = ["product_list" => $post["product_list"]];
					$add = $helper->product->updateProductToCart($updateInput);
					if($add->status){
						$output = $add;
						$output->message = "Successfully update cart";
						$output->status = true;
						$core->response($output);
					}else{
						$output->message = "failed to update cart";
						$core->response($output);
					}
				}
			break;
			case "updatetocart":
				$output = $core->output();
				$updateInput = $core->obj();
				$post = $helper->universal->parsePost($req->post["value"]);
				$updateInput->condition = $post['condition'];
				$updateInput->set = $post['data'];
				$input = $core->obj();
				$input->condition = $post['condition'];
				$check = $helper->product->getProductToCart($input);
				$output->input = $post;
				// $output->post = $updateInput;
				if($check->status){
					if($updateInput->condition[0][0] == 'cart_id'){
						$updateInput->condition[0][2] = (int)$updateInput->condition[0][2];
					}
					$add = $helper->product->updateProductToCart($updateInput);
					if($add->status){
						$output = $add;
						$output->message = "Successfully update cart";
						$output->status = true;
						$core->response($output);
					}else{
						$output->message = $add->message;
						$core->response($output);
					}
				}else{
					$output->message = "transaction doesnt exist";
					$core->response($output);
				}
			break;
			case "getpendingcart":
				$post = $helper->universal->parsePost($req->post["value"]);
				$data = new stdClass();
				$data->status = false;
				$data->data = new stdClass();
				if($this->check_session()){
					$customer = $this->get_session("customer");
					$input = new stdClass();
					$input->condition = [["customer_id", "=", isset($post["customer_id"]) ? $post["customer_id"] : $customer->customer_id], ["cart_status", "=", "pending"]];
					$query = $helper->product->getProductToCart($input);
					if($query->status){
						$data->status = true;
						$data->data = $query->data;
					}
				}
				$core->response($data);
			break;
			case "getprocesscart":
				$output = $core->obj();
				$input = new stdClass();
				$input->all = true;
				$input->condition = [["cart_status", "=", "processing"]];
				$query = $helper->product->getProductToCart($input);
				if($query->status){
					$output->status = true;
					$output->count = count((array)$query->data);
					$output->data = [];
					// $output->data = $query->data;
					if(count((array)$query->data)){
						foreach ($query->data as $key => $value) {
						    $new = [];
						    $new["cart_id"] = $value["cart_id"];
						    $new["transaction_type"] = "delivery";
						    $new["selectedProduct"] = $value["product_list"];
						    $ci = new stdClass();
						    $ci->condition = [["customer_id", '=', $value["customer_id"]]];
						    $cq = $helper->customer->gerCustomer($ci);
						    if($cq->status){
						    	$new["customer"]["customer_id"] = $cq->data->customer_id;
						    	$new["customer"]["info"] = $cq->data;
						    }
						    array_push($output->data, $new);
						}
					}
				}
				$core->response($output);
			break;
			
		}
	}
?>