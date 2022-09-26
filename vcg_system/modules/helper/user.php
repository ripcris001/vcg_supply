<?php
	Class user extends core {
		private $builder, $helper;
		public function __construct($param1, $param2){
        	$this->builder = $param1;
        	$this->helper = $param2;
    	}

		public function getUser($param = null){
			$queryString = $this->builder->select("users");
			if(isset($param->condition)){
				$queryString = $queryString->where($param->condition);
			}
			$queryString = $queryString->string();
			$queryResult = $this->helper->get($queryString, true);
			return $queryResult;
		}

	}
?> 