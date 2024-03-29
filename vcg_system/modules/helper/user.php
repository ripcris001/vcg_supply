<?php
	Class user extends core {
		private $builder, $helper;
		public function __construct($param1, $param2){
        	$this->builder = $param1;
        	$this->helper = $param2;
    	}

		public function getUser($param = null){
			$filter = new stdClass();
			$filter->count = false;
			$filter->all = isset($param->all) ? $param->all : null;
			$queryString = $this->builder->select("users");
			if(isset($param->select)){
				$queryString = $this->builder->select($param->select, "users");
			}else{
				$queryString = $this->builder->select("users");
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
			if(isset($param->order)){
				$queryString = $queryString->order($param->order);
			}
			if(isset($param->limit)){
				$queryString = $queryString->limit($param->limit);
			}
		
			$queryString = $queryString->string();
			$output = $this->helper->get($queryString, $filter->all);
			return $output;
		}

		public function addUser($param = null){
			$output = $this->output();
			if(isset($param)){
				$queryString = $this->builder->insert("users", $param);
				$queryString = $queryString->string();
				$output = $this->helper->add($queryString);
			}
			return $output;
		}

		public function updateUser($param){
			$filter = new stdClass();
			$filter->count = false;
			$filter->all = isset($param->all) ? $param->all : null;
			$queryString = $this->builder->update("users");
			if(isset($param->condition)){
				$queryString = $queryString->where($param->condition);
			}
			if(isset($param->set)){
				$queryString = $queryString->set($param->set);
			}
			$queryString = $queryString->string();
			// $output = new stdClass();
			$output = $this->helper->update($queryString);
			$output->query  = $queryString;
			return $output;
		}

	}
?> 