<?php
	$queryString = $db->builder->select("category")->string();
	$category = $db->helper->get($queryString, true);
	$core->response($category);
?>