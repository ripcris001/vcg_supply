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
		}
	}
?>