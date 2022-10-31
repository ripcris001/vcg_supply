<?php
	Class transaction extends core {
		private $builder, $helper;
		public function __construct($param1, $param2){
        	$this->builder = $param1;
        	$this->helper = $param2;
    	}

		public function getTransaction($param = null){
			$filter = new stdClass();
			$filter->count = false;
			$filter->all = isset($param->all) ? $param->all : null;
			$queryString = $this->builder->select("transaction");
			if(isset($param->count)){
				$filter->count = true;
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
			$transaction = $this->helper->get($queryString, $filter->all);
			$transaction->source = "transaction get";
			// $transaction->queryString = $queryString;
			return $transaction;
		}

		public function addTransaction($param = null){
			$output = $this->output();
			if(isset($param)){
				$queryString = $this->builder->insert("transaction", $param);
				$queryString = $queryString->string();
				$output = $this->helper->add($queryString);
				$output->source = "transaction";
			}
			return $output;
		}
	}
?> 