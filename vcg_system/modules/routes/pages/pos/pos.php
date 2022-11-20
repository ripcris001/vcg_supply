<?php
	if(isset($data->flag)){
		switch($data->flag){
			case "pos":
				$template->content("pos", true)->render("pos");
			break;
			case "print_transaction":
				$trid = isset($req->get["transaction_id"]) ? $req->get["transaction_id"] : null ;
				$input = $core->obj();
				$input->title = "No Transaction";
				$input->trid = $trid;
				if(isset($trid)){
					$query = $core->obj();
					$query->condition = [["transaction_id", '=', $trid]];
					$getTransaction = $helper->transaction->getTransaction($query);
					if($getTransaction->status){
						$input->title = $getTransaction->data->transaction_id;
					}
				}
				$template->data($input)->content("main", true)->render("invoice");
			break;
		}
	}
?>