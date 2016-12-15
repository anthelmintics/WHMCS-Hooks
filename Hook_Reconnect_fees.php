<?php
use Illuminate\Database\Capsule\Manager as Capsule; 

add_hook('EmailPreSend', 1, function ($vars) {
	$result = Capsule::table("tblcustomfieldsvalues")
		->where("fieldid", "=", 5)
		->where("relid", "=" , $vars['relid'])
		->get();

	if(count($result)>0) {
		$licenses = $result[0]->value;	
		$reconnect_fee = 100;
		$sum_total = $reconnect_fee * $licenses;
	} else {
		$sum_total = 'NO VALUE';
	}

	$merge_fields = array(); 
	$merge_fields['reconnect_fee_total'] = $sum_total;
	
	return $merge_fields; 
});
