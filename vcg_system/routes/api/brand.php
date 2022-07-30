<?php
	$queryString = $db->builder->select("brand")->string();
	$brand = $db->helper->get($queryString, true);
	$core->response($brand);
?>