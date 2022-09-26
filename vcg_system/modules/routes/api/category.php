<?php
	$input = $core->obj();
	$input->all = true;
	$input->table = 'category';
	$category = $helper->universal->query($input);
	$core->response($category);
?>