<?php
Class category extends core {
		private $builder, $helper;
		public function __construct($param1, $param2){
        	$this->builder = $param1;
        	$this->helper = $param2;
    	}

		public function getCategory($param = null){
			$filter = new stdClass();
			$filter->count = false;
			$filter->all = isset($param->all) ? $param->all : null;
			$queryString = $this->builder->select("vgc_category");
			if(isset($param->count)){
				$filter->count = true;
			}
			if(isset($param->condition)){
				$queryString = $queryString->where($param->condition);
			}
			$queryString = $queryString->string();
			$brand = $this->helper->get($queryString, $filter->all);
			return $brand;
		}
	}
?> 