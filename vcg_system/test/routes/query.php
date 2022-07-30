<?php
	$q = $db->builder->select('users')->where([["Username", "=", "ripcris"]])->string();
	print_r($q);
?>