<?php 
	if(isset($data->flag)){
		switch($data->flag){
			case "list":
				$input = $core->obj();
				$input->title = "Transaction Page"; // header title
				$input->pageTitle = "Transaction Page"; // breadcrum title
				$template->data($input)->content("transaction/transaction", true)->render("admin");
			break;
			case "invoice":
				$trid = isset($req->get["transaction"]) ? $req->get["transaction"] : null ;
				$input = $core->obj();
				$input->trid = $trid;
				if(isset($trid)){
					$query = $core->obj();
					$query->condition = [["transaction_id", '=', $input->trid]];
					$getTransaction = $helper->transaction->getTransaction($query);
					if($getTransaction->status){
						$input->title = $getTransaction->data->transaction_id;
						$input->transaction = json_encode($getTransaction->data);
					}
				}
				$input->title = "Transaction Page"; // header title
				$input->pageTitle = "Transaction Page"; // breadcrum title
				// print_r($input);
				$template->data($input)->content("transaction/invoice", true)->render("admin");
			break;
			case "delivery":
				$trid = isset($req->get["transaction"]) ? $req->get["transaction"] : null ;
				$input = $core->obj();
				$input->trid = $trid;
				if(isset($trid)){
					$query = $core->obj();
					$query->condition = [["transaction_id", '=', $input->trid]];
					$getTransaction = $helper->transaction->getTransaction($query);
					if($getTransaction->status){
						$input->title = $getTransaction->data->transaction_id;
						$input->transaction = json_encode($getTransaction->data);
					}
				}
				$input->title = "Delivery Page"; // header title
				$input->pageTitle = "Delivery Page"; // breadcrum title
				// print_r($input);
				$template->data($input)->content("transaction/delivery", true)->render("admin");
			break;
			default:
				$template->content("error/404", true)->render("frontstore");
			break;
		}
	}
	
?>