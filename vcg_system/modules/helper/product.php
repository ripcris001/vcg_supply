<?php
Class product extends core {
		private $builder, $helper;
		public function __construct($param1, $param2){
        	$this->builder = $param1;
        	$this->helper = $param2;
    	}

    	public function getProduct($param = null){
			$filter = new stdClass();
			$filter->count = false;
			$filter->all = isset($param->all) ? $param->all : null;
			$queryString = $this->builder->select("product");
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
			$output = $this->helper->get($queryString, $filter->all);
			return $output;
		}

		public function addProduct($param = null){
			$output = $this->output();
			if(isset($param)){
				$queryString = $this->builder->insert("product", $param);
				$queryString = $queryString->string();
				$output = $this->helper->add($queryString);
				if($output->status){
					$queryLastID = new stdClass();
					$queryLastID->order = ["product_id", "DESC"];
					$queryLastID->limit = 1;
					$query = $this->getProduct($queryLastID);
					if($query->status){
						$addStock = array();
						$addStock["product_id"] = $query->data->product_id;
						$this->addProductStock($addStock);
					}
				}
			}
			return $output;
		}

		public function addProductStock($param = null){
			$output = $this->output();
			if(isset($param)){
				$queryString = $this->builder->insert("product_stock", $param);
				$queryString = $queryString->string();
				$output = $this->helper->add($queryString);
			}
			return $output;
		}

		public function getProductStock($param = null){
			$filter = new stdClass();
			$filter->count = false;
			$filter->all = isset($param->all) ? $param->all : null;
			$queryString = $this->builder->select("product_stock");
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
			$output = $this->helper->get($queryString, $filter->all);
			return $output;
		}

		public function updateStock($param){
			$filter = new stdClass();
			$filter->count = false;
			$filter->all = isset($param->all) ? $param->all : null;
			$queryString = $this->builder->update("product_stock");
			if(isset($param->condition)){
				$queryString = $queryString->where($param->condition);
			}
			if(isset($param->set)){
				$queryString = $queryString->set($param->set);
			}
			$queryString = $queryString->string();
			$output = $this->helper->update($queryString);
			return $output;
		}

		public function updateProductDeductStock($param){
			$input = $this->obj();
			$input->condition = $param->condition;
			$output = $this->obj();
			$getStock = $this->getProductStock($input);
			if($getStock->status){
				$stockData = $getStock->data;
				$updateStock = $this->obj();
				$new_sold_qty = $stockData->sold_quantity + $param->quantity;
				$input->set = array();
				$input->set["sold_quantity"] = $new_sold_qty;
				$update = $this->updateStock($input);
				if($update->status){
					$output = $update;
				}
			}
			return $output;
		}



		public function updateProductTransactionStock($param){
			$output = $this->output();
			$count = count($param);
			$parray = array();
			for($a = 0, $count = count($param); $a < $count; $a++){
				$input = $this->obj();
				$input->quantity = $param[$a]->transaction->quantity;
				$input->product_id = $param[$a]->transaction->id;
				$input->condition = [["product_id", "=", $param[$a]->transaction->id]];
				$update = $this->updateProductDeductStock($input);
				$parray[$a] = $update;
				$parray[$a] = $param[$a]->transaction->quantity;
				if($a == ($count - 1)){
					$output->status = true;
					$output->data = $parray;
					return $output;
				}
			}
		}
	}
?> 