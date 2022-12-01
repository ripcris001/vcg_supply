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
				$brand = $helper->transaction->getTransaction($input);
				$core->response($brand);
			break;
			case "add":
				$output = $core->output();
				$post = $helper->universal->parsePost($req->post["value"]);
				$input = $core->obj();
				$input->order = ['transaction_id', 'DESC'];
				$input->limit = 1;
				$checkTransaction = $helper->transaction->getTransaction($input);
				if($checkTransaction->status){
					$post["transaction_id"] = $helper->universal->parseTransCode($checkTransaction->data->transaction_id);
					$post["transaction_id"] = $helper->universal->transactionCode($post["transaction_id"] + 1);
				}else{
					$post["transaction_id"] = $helper->universal->transactionCode(1);
				}
				$post["assign_cashier"] = $core->get_session("login");
				$post["assign_cashier"] = $post["assign_cashier"]->ID;
				$post["date_created"] = date_create();
				$post["date_created"] = date_format($post["date_created"],"Y-m-d");
				
				$addTransaction = $helper->transaction->addTransaction($post);
				if($addTransaction->status){
					$output->message = "Successfully added new transaction";
					$output->transaction_id = $post["transaction_id"];
					$output->status = true;
					$updateTransactionStock = $helper->product->updateProductTransactionStock(json_decode($post["selectedProduct"]));
					if(isset($post["cart_id"]) && gettype($post["cart_id"]) !== 'NULL'){
						$updateCart = new stdClass();
						$updateCart->condition = [["cart_id", "=", $post["cart_id"]]];
						$updateCart->set = ["cart_status" => "completed"];
						$updateCartq = $helper->product->updateProductToCart($updateCart);
					}
					if($updateTransactionStock->status){
						$output->data = $updateTransactionStock->data;
					}else{
						$output->message = $updateTransactionStock->message;
					}
					$core->response($output);
				}else{
					$output->message = $addTransaction->message;
					$core->response($add);
				}
			break;
			case "update":
				$output = $core->output();
				$updateInput = $core->obj();
				$post = $helper->universal->parsePost($req->post["value"]);
				$updateInput->condition = $post['condition'];
				$updateInput->set = $post['data'];
				$input = $core->obj();
				$input->condition = $post['condition'];
				$check = $helper->transaction->getTransaction($input);
				$output->input = $post;
				// $output->post = $updateInput;
				if($check->status){
					if($updateInput->condition[0][0] == 'id'){
						$updateInput->condition[0][2] = (int)$updateInput->condition[0][2];
					}
					$add = $helper->transaction->updateTransaction($updateInput);
					if($add->status){
						$output = $add;
						$output->message = "Successfully update user";
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
			case "sales":
				$output = $core->output();
				$updateInput = $core->obj();
				$add = $helper->transaction->getSales();
				if($add->status){
					$output = $add;
					$output->message = "Successfully update user";
					$output->status = true;
					$core->response($output);
				}else{
					$output->message = $add->message;
					$core->response($output);
				}
			break;
		}
	}
?>