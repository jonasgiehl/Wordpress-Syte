<?php


function cached_include($url, $expires = 180, $return = false){

	if (empty($url)){
		return '';
	}

	$key = md5($url);
	$contents = get_site_transient($key);

	if (empty($contents)){

		include_once(ABSPATH . WPINC. '/class-http.php');

		$params = array(
			'timeout' => 30,
			'headers' => array(
				'Referer' => get_bloginfo('url')
			)
		);
			
		$http = new WP_Http();
		$result = $http->get($url,$params);
		
		if(!$result instanceof WP_Error){
			$contents = utf8_encode( $result['body'] );
		}
			
		if (!empty($contents)){
			set_site_transient($key, $contents, $expires);
			set_site_transient($key.'-backup', $contents, 60 * 60 * 72);
		} else {
			$contents = get_site_transient($key.'-backup');
		}
	}

	if($return){
		return $contents;
	}
	
	echo $contents;	
}

