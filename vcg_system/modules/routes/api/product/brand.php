<?php
	$input = $core->obj();
	$input->all = true;
	$brand = $helper->brand->getbrand($input);
	$core->response($brand);
?>