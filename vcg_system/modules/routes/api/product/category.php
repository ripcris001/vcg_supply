<?php
	if(isset($data->flag)){
		switch($data->flag){
			case "get":
				$input = $core->obj();
				$input->all = true;
				$input->table = 'category';
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
				$category = $helper->universal->query($input);
				$core->response($category);
			break;
			case "add":
				$post = $helper->universal->parsePost($req->post["value"]);
				$input = $core->obj();
				$input->condition = [["cat_name", "=", $post["cat_name"]]];
				$checkExist = $helper->category->getCategory($input);
				if($checkExist->status){
					$output->message = "Category already exist";
					$output->response = $checkExist;
					$core->response($output);
				}else{
					$add = $helper->category->addCategory($post);
					$core->response($add);
				}
			break;
		}
	}
?>