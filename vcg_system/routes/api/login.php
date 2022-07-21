<?php
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
			$core->set_session("login", $activeUser);
		}else{
			$output->message = "Username and password doesnt match!";
		}
	}else{
		$output->message = "User $user doesnt exist!";
	}
	$core->response($output);
?>