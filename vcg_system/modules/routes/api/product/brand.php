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
				$brand = $helper->brand->getbrand($input);
				$core->response($brand);
			break;
			case "add":
				$output = $core->output();
				$post = $helper->universal->parsePost($req->post["value"]);
				$post["brand_name"] = strtolower($post["brand_name"]);
				$input = $core->obj();
				$input->condition = [["brand_name", "=", $post["brand_name"]]];
				$checkBrand = $helper->brand->getbrand($input);
				if($checkBrand->status){
					$output->message = "Brand already exist";
					$output->response = $checkBrand;
					$core->response($output);
				}else{
					$add = $helper->brand->addBrand($post);
					$core->response($add);
				}
			break;
		}
	}
?>