<?php
	$queryString = $db->builder->select("product")->string();
	$product = $db->helper->get($queryString, true);
	$core->response($product);
?>