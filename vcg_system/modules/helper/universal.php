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
					$queryString = $queryString->count($param->count);
				}
				if(isset($param->sum)){
					$queryString = $queryString->sum($param->sum);
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
					if(gettype($value) == 'array'){
						$output[$key] = array();
						foreach ($value as $key1 => $value1) {
							$output[$key][$key1] = $value1;
						}
					}else if(gettype($value) == 'object'){
						$output[$key] = array();
						foreach ($value as $key1 => $value1) {
							$output[$key][$key1] = $value1;
						}
					}else{
						$output[$key] =  $value;
					}
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

		public function currentDate(){
			$output = date_create();
			$output = date_format($output,"Y-m-d");
			return $output;
		}

		public function formatDate($param){
			$output = date_create(isset($param->date) ? $param->date : "");
			$output = strtotime(date_format($output, 'Y-m-d'));
			$output = date(isset($param->format) ? $param->format : 'Y-m-d', $output);
			return $output;
		}

		public function getDateRange($param){
			$output = new stdClass();
			$output->date =  date_create(isset($param->date) ? $param->date : "");
			$output->start = date_create(isset($param->start) ? $param->date : "");
			$output->end = date_create(isset($param->end) ? $param->date : "");
			$output->type = isset($param->type) ? $param->type : null;
			if(isset($param->type)){
				switch(strtolower($param->type)){
					case "month":
						$output->start = strtotime(date_format($output->date, 'Y-m-01'));
						$output->start = date('Y-m-01', $output->start);
						$output->end = strtotime(date_format($output->date, 'Y-m-t'));
						$output->end = date('Y-m-t', $output->end);
					break;
					case "year":
						$output->start = strtotime(date_format($output->date, 'Y-01-01'));
						$output->start = date('Y-m-01', $output->start);
						$output->end = strtotime(date_format($output->date, 'Y-12-01'));
						$output->end = date('Y-m-t', $output->end);
					break;
					case "yesterday":
						$output->start = strtotime(date_format($output->date, 'Y-m-d'));
						$output->start = date('Y-m-d', strtotime("-1 days"));
						$output->end = $output->start;
					break;
				}
			}
			$output->date = strtotime(date_format($output->date, 'Y-m-d'));
			$output->date = date('Y-m-d', $output->date);

			// if(isset($param->format)){
			// 	$output->date = date_format($output->date, $param->format);
			// 	$output->start = date_format($output->start, $param->format);
			// 	$output->end = date_format($output->end, $param->format);
			// }else{
			// 	$output->date = date_format($output->date, 'Y-m-d');
			// 	$output->start = date_format($output->start, 'Y-m-d');
			// 	$output->end = date_format($output->end, 'Y-m-d');
			// }
			return $output;
		}

	}
?> 