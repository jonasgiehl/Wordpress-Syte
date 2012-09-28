<?php

define('THEME_DOMAIN', 'default-theme-domain');

include_once("includes/languages.php");
include_once("includes/sidebars.php");
include_once("includes/widgets.php");
include_once("includes/utils.php");
include_once("includes/facebook.php");
include_once("includes/google.php");
include_once("includes/wordpress.php");
include_once("includes/theme-admin.php");


function static_base($url = '', $return = false){

	//TODO: Add suport for Cookie less domain / CDN on admin

	$url = get_bloginfo('template_url'). '/'. $url;
	
	if($return){
		return $url;
	}
	
	echo $url;	
}


register_nav_menus( array(	
    'primary' =>'Header Navigation',	
    'footer' =>'Footer Navigation' 
));



