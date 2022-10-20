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
		public function parsePost($param = null){
			$output = array();
			if(isset($param)){
				$data = json_decode($param);
				foreach ($data as $key => $value) {
					$output[$key] =  $value;
				}
			}
			return $output;
		}
		public function clean($param = null, $data){
			$output = new stdClass();
			if(isset($param)){
				foreach ($param as $key => $value) {
					if(array_search($key, $data) < -1){
						$output->$key =  $value;
					}
				}
			}
			return $output;
		}
		public function transactionCode($param = 0){
			$code = TRANSACTIONCODE;
			$count = TRANSACTIONCOUNT;
			return strtoupper($code).sprintf("%0".$count."d", $param);
		}
		public function parseTransCode($param = 0){
			$data = $param;
			$parse = str_replace(TRANSACTIONCODE, "", $data);
			$parse = (int)$parse;
			return $parse;
		}

	}
?> 