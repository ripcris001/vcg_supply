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
			$sidebar[0]->icon = "dashboard_1";

			$sidebar[1] = $this->sidebar("Product");
			$sidebar[1]->icon = "cart";
			$sidebar[1]->subs[] = $this->sidebar("Product List", "/admin/product");
			$sidebar[1]->subs[] = $this->sidebar("Product Brand", "/admin/product/brand");
			$sidebar[1]->subs[] = $this->sidebar("Product Category", "/admin/product/category");

			$sidebar[2] = $this->sidebar("User");
			$sidebar[2]->icon = "all_user";
			$sidebar[2]->subs[0] = $this->sidebar("User List", "/admin/user");
			// $sidebar[2]->subs[1] = $this->sidebar("User Roles", "/admin/user/roles");

			$sidebar[3] = $this->sidebar("Inventory");
			$sidebar[3]->icon = "stock";
			$sidebar[3]->subs[] = $this->sidebar("Product Inventory", "/admin/inventory");
			$sidebar[3]->subs[] = $this->sidebar("Purchase Order", "/admin/inventory/po");

			$sidebar[4] = $this->sidebar("Transaction");
			$sidebar[4]->icon = "credit_card";
			$sidebar[4]->subs[0] = $this->sidebar("All Transaction", "/admin/transaction");

			return $sidebar;
		}
			
	}
?> 