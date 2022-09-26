<?php
	$q = $db->builder->select("vgc_users")->string();
	$v = $db->helper->Exec("fetch", $q);
	$core->response($v);
?>