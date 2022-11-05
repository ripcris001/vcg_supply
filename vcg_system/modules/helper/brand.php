<?php
	Class brand extends core {
		private $builder, $helper;
		public function __construct($param1, $param2){
        	$this->builder = $param1;
        	$this->helper = $param2;
    	}

		public function getbrand($param = null){
			$filter = new stdClass();
			$filter->count = false;
			$filter->all = isset($param->all) ? $param->all : null;
			if(isset($param->select)){
				$queryString = $this->builder->select($param->select, "brand");
			}else{
				$queryString = $this->builder->select("brand");
			}
			if(isset($param->count)){
				$queryString = $queryString->count($param->count);
			}
			if(isset($param->sum)){
				$queryString = $queryString->sum($param->sum);
			}
			if(isset($param->condition)){
				$queryString = $queryString->where($param->condition);
			}
			
			$queryString = $queryString->string();
			$brand = $this->helper->get($queryString, $filter->all);
			return $brand;
		}

		public function addBrand($param = null){
			$output = $this->output();
			if(isset($param)){
				$queryString = $this->builder->insert("brand", $param);
				$queryString = $queryString->string();
				$output = $this->helper->add($queryString);
			}
			return $output;
		}
	}
?> 