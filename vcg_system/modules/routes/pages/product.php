<?php
	$root = $data->path->root;
	$data = new stdClass();
	// $json_data = file_get_contents("$root/data.min.json");
	if($this->check_session()){
		$customer = $this->get_session("customer");
		$input = new stdClass();
		$input->condition = [["customer_id", "=", isset($customer->customer_id) ? $customer->customer_id : 0], ["cart_status", "=", "pending"]];
		$query = $helper->product->getProductToCart($input);
		if($query->status){
			$data->cart = $query->data;
		}
	}
	$template->data($data)->content("product", true)->render("frontstore");
?>