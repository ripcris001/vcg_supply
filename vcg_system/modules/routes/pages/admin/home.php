<?php 
	$input = $core->obj();
	$input->title = "Dashboard"; // header title
	$input->pageTitle = "Dashboard Page"; // breadcrum title
	$template->data($input)->content("dashboard", true)->render("admin");			
?>