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
				$query = $helper->user->getUser($input);
				$core->response($query);
			break;
			case "add":
				$output = $core->output();
				$post = $helper->universal->parsePost($req->post["value"]);
				$post['Username'] = isset($post['Username']) ? strtolower($post['Username']) : "";
				$input = $core->obj();
				$input->condition = [["Username", '=', $post["Username"]]];
				$check = $helper->user->getUser($input);
				if($check->status){
					$output->data = $check->data;
					$output->message = "User already exist";
					$core->response($output);
				}else{
					$encHas = $core->encrypt($post["Password"]);
					$post["Password"] = $encHas->enc;
					$post["Hash"] = $encHas->hash;
					$add = $helper->user->addUser($post);
					if($add->status){
						$output->message = "Successfully added new user";
						$output->status = true;
						$core->response($output);
					}else{
						$output->message = $add->message;
						$core->response($add);
					}
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
					if($updateInput->condition[0][0] == 'ID'){
						$updateInput->condition[0][2] = (int)$updateInput->condition[0][2];
					}
					if(isset($post["data"]["Password"])){
						$encHas = $core->encrypt($post["data"]["Password"]);
						$updateInput->set["Password"] = $encHas->enc;
						$updateInput->set["Hash"] = $encHas->hash;
					}
					$add = $helper->user->updateUser($updateInput);
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
					$output->message = "User doesnt exist";
					$core->response($output);
				}
			break;
		}
	}
?>