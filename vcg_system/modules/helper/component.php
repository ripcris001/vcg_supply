<?php
	Class component extends core {
		private $builder, $helper;
		public function __construct($param1, $param2){
        	$this->builder = $param1;
        	$this->helper = $param2;
    	}
		public function generateSidebar(){
			$sidebar = array();
			$sidebar[0] = $this->sidebar("Dashboard", "/admin");
			$sidebar[0]->icon = "dashboard";

			$sidebar[1] = $this->sidebar("Product");
			$sidebar[1]->icon = "product";
			$sidebar[1]->subs[0] = $this->sidebar("Product List", "/admin/product");
			$sidebar[1]->subs[1] = $this->sidebar("Product Brand", "/admin/product/brand");
			$sidebar[1]->subs[2] = $this->sidebar("Product Category", "/admin/product/category");

			$sidebar[2] = $this->sidebar("User");
			$sidebar[2]->icon = "user";
			$sidebar[2]->subs[0] = $this->sidebar("User List", "/admin/user");
			$sidebar[2]->subs[1] = $this->sidebar("User Roles", "/admin/user/roles");

			return $sidebar;
		}
			
	}
?> 