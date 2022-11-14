<?php
	if(isset($data->flag)){
		switch($data->flag){
			case "get":
				$output = $core->output();
				$output->status = true;
				$output->data = $core->obj();
				$output->data->total_product = 0;
				$output->data->total_sale = 0;
				$output->data->daily_sale = 0;
				$output->data->daily_transaction = 0;

				// total product 
				$objProduct = $core->obj();
				$objProduct->condition = [];
				$objProduct->count = "product_id";
				$qProduct = $helper->product->getProduct($objProduct);
				if($qProduct->status){
					// $output->qProduct = $qProduct->data;
					$output->data->total_product = $qProduct->data->result;
				}

				// total transaction
				$objTrans = $core->obj();
				$objTrans->date = $core->obj();
				$objTrans->date->filter = $core->obj();
				$objTrans->date->filter->type = "yesterday";
				$objTrans->date->filter->data = $helper->universal->getDateRange($objTrans->date->filter);
				$objTrans->condition = [["date_created", '=', $objTrans->date->filter->data->start]];
				$objTrans->count = "id";
				$qTrans = $helper->transaction->getTransaction($objTrans);
				if($qTrans->status){
					$output->qTrans = $qTrans->data;
					$output->data->daily_transaction = $qTrans->data->result;
				}

				// total transaction sale
				$objTSTrans = $core->obj();
				$objTSTrans->date = $core->obj();
				$objTSTrans->date->filter = $core->obj();
				$objTSTrans->date->filter->type = "year";
				$objTSTrans->date->filter->data = $helper->universal->getDateRange($objTSTrans->date->filter);
				$objTSTrans->condition = [["date_created", '>=',$objTSTrans->date->filter->data->start], ["date_created", '<=', $objTSTrans->date->filter->data->end]];
				$objTSTrans->sum = "overall_total";
				$qTSTrans = $helper->transaction->getTransaction($objTSTrans);
				if($qTSTrans->status){
					$output->qTSTrans = $qTSTrans->data;
					$output->data->total_sales = $qTSTrans->data->result;
				}

				// daily transaction sale
				$objDTSTrans = $core->obj();
				$objDTSTrans->date = $core->obj();
				$objDTSTrans->date->filter = $core->obj();
				$objDTSTrans->date->filter->type = "yesterday";
				$objDTSTrans->date->filter->data = $helper->universal->getDateRange($objDTSTrans->date->filter);
				$objDTSTrans->condition = [["date_created", '=', $objDTSTrans->date->filter->data->start]];
				$objDTSTrans->sum = "overall_total";
				$qDTSTrans = $helper->transaction->getTransaction($objDTSTrans);
				if($qDTSTrans->status){
					$output->qDTSTrans = $qDTSTrans->data;
					$output->data->daily_sales = $qDTSTrans->data->result;
				}

				$objAllTrans = $core->obj();
				$objAllTrans->date = $core->obj();
				$objAllTrans->date->filter = $core->obj();
				$objAllTrans->date->filter->type = "year";
				$objAllTrans->date->filter->data = $helper->universal->getDateRange($objAllTrans->date->filter);
				$objAllTrans->condition = [["date_created", '>=',$objAllTrans->date->filter->data->start], ["date_created", '<=', $objAllTrans->date->filter->data->end]];
				$objAllTrans->select = array();
				$objAllTrans->select['date_created'] = "date_created";
				$objAllTrans->select['overall_total'] = "overall_total";
				$objAllTrans->select['transaction_id'] = "transaction_id";
				$objAllTrans->chart = $core->obj();
				$objAllTrans->chart->month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
				$objAllTrans->chart->monthData = array();
				$objAllTrans->chart->monthData['Jan'] = 0;
				$objAllTrans->chart->monthData['Feb'] = 0; 
				$objAllTrans->chart->monthData['Mar'] = 0; 
				$objAllTrans->chart->monthData['Apr'] = 0;
				$objAllTrans->chart->monthData['May'] = 0;
				$objAllTrans->chart->monthData['Jun'] = 0;
				$objAllTrans->chart->monthData['Jul'] = 0; 
				$objAllTrans->chart->monthData['Aug'] = 0; 
				$objAllTrans->chart->monthData['Sep'] = 0;
				$objAllTrans->chart->monthData['Oct'] = 0; 
				$objAllTrans->chart->monthData['Nov'] = 0;
				$objAllTrans->chart->monthData['Dec'] = 0;
				$objAllTrans->chart->monthDate = [];

				$objAllTrans->all = true;
				$qAllTrans = $helper->transaction->getTransaction($objAllTrans);
				if($qAllTrans->status){
					$ctrans = count($qAllTrans->data);
					if($ctrans > 0){
						for($a = 0; $a < $ctrans; $a++){
							$ldata = $qAllTrans->data[$a];
							$li = new stdClass();
							$li->format = 'M';
							$li->date = $ldata['date_created'];
							$alDate = $helper->universal->formatDate($li);
							$objAllTrans->chart->monthDate[$ldata['date_created']] = $alDate;
							if(isset($objAllTrans->chart->monthData[$alDate])){
								$objAllTrans->chart->monthData[$alDate] += (int)$ldata["overall_total"];
							}
						}
						$output->data->monthData = $objAllTrans->chart->monthData;
					}
					// $output->qAllTrans = $qAllTrans->data;
					// $output->data->all_sales = $qAllTrans->data;
				}


				// if($customer->status && $customer->data){
				// 	$ccount = count($customer->data);
				// 	for($a = 0, $ccount = count($customer->data); $a < $ccount; $a++){
				// 		$cdata = $customer->data[$a];
				// 		$iAddress = $core->obj();
				// 		$iAddress->all = true;
				// 		$iAddress->condition = [["customer_id", "=", $cdata["customer_id"]]];
				// 		$qAddress = $helper->customer->getCustomerShipping($iAddress);
				// 		if($qAddress->status){
				// 			$customer->data[$a]["address"] = $qAddress->data;
				// 		}
				// 		if($a == ($ccount - 1)){
				// 			$core->response($customer);
				// 		}
				// 	}
				// }


				$core->response($output);
			break;
		}
	}
?>