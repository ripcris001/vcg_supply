<?php
	$output = new stdClass();
	$output->name = "test";
	$output->data = $req->post;
	$core->response($output);
?>