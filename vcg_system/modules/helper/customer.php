<?php
Class customer extends core {
		private $builder, $helper;
		public function __construct($param1, $param2){
        	$this->builder = $param1;
        	$this->helper = $param2;
    	}

		public function gerCustomer($param = null){
			$filter = new stdClass();
			$filter->count = false;
			$filter->all = isset($param->all) ? $param->all : null;
			$queryString = $this->builder->select("customer");
			if(isset($param->count)){
				$filter->count = true;
			}
			if(isset($param->condition)){
				$queryString = $queryString->where($param->condition);
			}
			$queryString = $queryString->string();
			$output = $this->helper->get($queryString, $filter->all);
			return $output;
		}

		public function addCustomer($param = null){
			$output = $this->output();
			if(isset($param)){
				$queryString = $this->builder->insert("customer", $param);
				$queryString = $queryString->string();
				$output = $this->helper->add($queryString);
			}
			return $output;
		}
		public function addCustomerShipping($param = null){
			$output = $this->output();
			if(isset($param)){
				$queryString = $this->builder->insert("customer_shipping_address", $param);
				$queryString = $queryString->string();
				$output = $this->helper->add($queryString);
			}
			return $output;
		}

		public function getCustomerShipping($param = null){
			$filter = new stdClass();
			$filter->count = false;
			$filter->all = isset($param->all) ? $param->all : null;
			$queryString = $this->builder->select("customer_shipping_address");
			if(isset($param->count)){
				$filter->count = true;
			}
			if(isset($param->condition)){
				$queryString = $queryString->where($param->condition);
			}
			$queryString = $queryString->string();
			$output = $this->helper->get($queryString, $filter->all);
			return $output;
		}
	}
?> 