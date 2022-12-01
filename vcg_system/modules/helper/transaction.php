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
			if(isset($param->select)){
				$queryString = $this->builder->select($param->select, "transaction");
			}else{
				$queryString = $this->builder->select("transaction");
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

		public function updateTransaction($param = null){
			$filter = new stdClass();
			$filter->count = false;
			$filter->all = isset($param->all) ? $param->all : null;
			$queryString = $this->builder->update("transaction");
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

		public function getSales($param = null){
			$filter = new stdClass();
			$filter->count = false;
			$filter->all = isset($param->all) ? $param->all : null;
			$queryString = "SELECT SUM(overall_total) AS `overall`,`date_created`  FROM `vgc_transaction` GROUP BY `date_created`";
			
			// $output = new stdClass();
			$output = $this->helper->get($queryString, true);
			$output->query  = $queryString;
			return $output;
		}
	}
?>