<?php
	Class universal extends core {
		private $builder, $helper;
		public function __construct($param1, $param2){
        	$this->builder = $param1;
        	$this->helper = $param2;
    	}
		public function query($param = null){
			$ouput = new stdClass();
			$queryString = '';
			if(isset($param->table)){
				$filter = new stdClass();
				$filter->count = false;
				$filter->all = isset($param->all) ? $param->all : null;
				if(isset($param->table)){
					$queryString = $this->builder->select($param->table);
				}
				if(isset($param->condition)){
					$queryString = $queryString->where($param->condition);
				}
				if(isset($param->count)){
					$filter->count = true;
				}
				$queryString = $queryString->string();
				$queryResult = $this->helper->get($queryString, $filter->all);
				return $queryResult;
			}else{
				$ouput->status = false;
				$ouput->message = "Table not set!";
				return $ouput;
			}
		}
	}
?> 