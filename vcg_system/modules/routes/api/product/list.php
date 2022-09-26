<?php
	$input = $core->obj();
	$input->all = true;
	$input->condition = array();
	$input->table = "product";
	foreach ($req->post as $key => $value) {
		if($value){	
			if($key == 'category'){
				array_push($input->condition, ["product_category", "=", "$value]"]);
			}
			if($key == 'brand'){
				array_push($input->condition, ["product_brand", "=", "$value]"]);
			}
		}
	}
	$product = $helper->universal->query($input);
	$core->response($product);
?>