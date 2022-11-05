<?php 
	if(isset($data->flag)){
		switch($data->flag){
			case "date":
				$type = isset($req->get["type"]) ? $req->get["type"] : null ;
				$dates = isset($req->get["date"]) ? $req->get["date"] : null ;
				$format = isset($req->get["format"]) ? $req->get["format"] : null ;
				$input = $core->obj();
				$input->name = "a";
				$input->date = $core->obj();
				$input->date->filter = $core->obj();
				$input->date->filter->format = $format;
				$input->date->filter->date = $dates;  
				$input->date = $helper->universal->formatDate($input->date->filter);
				$core->response($input->date);
			break;
			
		}
	}
?>