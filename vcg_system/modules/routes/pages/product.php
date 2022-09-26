<?php
	$root = $data->path->root;
	// $json_data = file_get_contents("$root/data.min.json");
	$template->content("product", true)->render("frontstore");
?>