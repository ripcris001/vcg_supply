<?php
	if(isset($data->flag)){
		switch($data->flag){
			case "user":
				$output = $core->output();
				$input = $req->post;
				$user = $input['username'];
				$password = $input['password'];
				$getuserquery = $db->builder->select('users')->where([["Username", "=", $user]])->string();
				$getuser = $db->helper->get($getuserquery);
				if($getuser && count($getuser->data) > 0){
					$activeUser = $getuser->data[0];
					$activeUser["FullName"] = $activeUser["FirstName"]." ".$activeUser["LastName"];
					$encPass = $core->decrypt($activeUser["Password"], $activeUser["Hash"]);
					if($password == $encPass){
						unset($activeUser["Hash"]);
						unset($activeUser["Password"]);
						$output->data = $activeUser;
						$output->message = "Welcome ".$activeUser["FullName"];
						$output->status = true;
						$core->set_session("login", $activeUser);
						if($activeUser["user_role_index"] == "cashier"){
							$output->redirect = "/pos";
						}else{
							$output->redirect = "/admin";
						}
					}else{
						$output->message = "Username and password doesnt match!";
					}
				}else{
					$output->message = "User $user doesnt exist!";
				}
				$core->response($output);
			break;
			case "customer":
				$output = $core->output();
				$input = $req->post;
				$user = $input['username'];
				$password = $input['password'];
				$getuserquery = $db->builder->select('customer')->where([["customer_username", "=", $user]])->string();
				$getuser = $db->helper->get($getuserquery);
				if($getuser && count($getuser->data) > 0){
					$activeUser = $getuser->data[0];
					$activeUser["FullName"] = $activeUser["customer_name"];
					$encPass = $core->decrypt($activeUser["customer_password"], $activeUser["customer_hash"]);
					if($password == $encPass){
						unset($activeUser["Hash"]);
						unset($activeUser["Password"]);
						$output->data = $activeUser;
						$output->message = "Welcome ".$activeUser["FullName"];
						$output->status = true;
						$activeUser['user_role_index'] = "customer";
						$core->set_session("customer", $activeUser);
					}else{
						$output->message = "Username and password doesnt match!";
					}
				}else{
					$output->message = "User $user doesnt exist!";
				}
				$core->response($output);
			break;
			case "register":
				$output = $core->output();
				$post = $req->post;
				$encPass = $core->encrypt($post["customer_password"]);
				$post["customer_password"] = $encPass->enc;
				$post["customer_hash"] = $encPass->hash;
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
		}
	}
?>