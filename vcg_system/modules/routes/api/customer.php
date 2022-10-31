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
							array_push($input->condition, ["$key", "=", "$value"]);
						}
					}
				}
				$customer = $helper->customer->gerCustomer($input);
				if($customer->status && $customer->data){
					$ccount = count($customer->data);
					for($a = 0, $ccount = count($customer->data); $a < $ccount; $a++){
						$cdata = $customer->data[$a];
						$iAddress = $core->obj();
						$iAddress->all = true;
						$iAddress->condition = [["customer_id", "=", $cdata["customer_id"]]];
						$qAddress = $helper->customer->getCustomerShipping($iAddress);
						if($qAddress->status){
							$customer->data[$a]["address"] = $qAddress->data;
						}
						if($a == ($ccount - 1)){
							$core->response($customer);
						}
					}
				}else{
					$core->response($customer);
				}
			break;
			case "add":
				$output = $core->output();
				$post = $helper->universal->parsePost($req->post["value"]);
				$post["customer_name"] = strtolower($post["customer_name"]);
				$input = $core->obj();
				$input->condition = [["customer_name", "=", $post["customer_name"]]];
				$checkCustomer = $helper->customer->gerCustomer($input);
				if($checkCustomer->status){
					$output->message = "customer already exist";
					$output->response = $checkCustomer;
					$core->response($output);
				}else{
					$add = $helper->customer->addCustomer($post);
					if($add->status){
						$add->message = "Successfully added new customer";
					}
					$core->response($add);
				}
			break;
			case "addshipping":
				$output = $core->output();
				$post = $helper->universal->parsePost($req->post["value"]);
				$add = $helper->customer->addCustomerShipping($post);
				if($add->status){
					$add->message = "Successfully added new shipping address";
				}
				$core->response($add);
				
			break;
		}
	}
?>