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
				
				$addTransaction = $helper->transaction->addTransaction($post);
				if($addTransaction->status){
					$output->message = "Successfully added new transaction";
					$output->transaction_id = $post["transaction_id"];
					$output->status = true;
					$updateTransactionStock = $helper->product->updateProductTransactionStock(json_decode($post["selectedProduct"]));
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
		}
	}
?>