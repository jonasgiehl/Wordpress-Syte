<?php

function get_analytics_id($return = false){
	$ga_code = get_option('google_analytics_id','UA-XXXXX-X');
	
	if($return){
		return $ga_code;
	}
	echo $ga_code;
}

