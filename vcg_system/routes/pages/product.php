<?php
	$root = $data->path->root;
	$json_data = file_get_contents("$root/data.min.json");
	$dbdata = new stdClass();
	$dbdata->product = json_encode($json_data);
	$template->data($dbdata)->content("product", true)->render("frontstore");
?>