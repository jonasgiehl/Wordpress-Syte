<?php


function theme_sidebar_init(){
	register_sidebar(array(
		'name' => 'Top Sidebar',
		'id' => 'top-sidebar',
		'description' => '',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	));
}


add_action('widgets_init', 'theme_sidebar_init');


