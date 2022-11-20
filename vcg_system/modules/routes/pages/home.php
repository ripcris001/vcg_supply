<?php
	if(isset($data->flag)){
		switch($data->flag){
			case "home":
				$template->content("home", true)->render("frontstore");
			break;
			case "cart":
				$ai = new stdClass();
				// $json_data = file_get_contents("$root/data.min.json");
				if($this->check_session()){
					$customer = $this->get_session("customer");
					$input = new stdClass();
					$input->condition = [["customer_id", "=", $customer->customer_id], ["cart_status", "=", "pending"]];
					$query = $helper->product->getProductToCart($input);
					if($query->status){
						$ai->cart = $query->data;
					}
				}
				$template->data($ai)->content("cart", true)->render("frontstore");
			break;
		}
	}
?>