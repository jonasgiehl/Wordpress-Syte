<?php

function load_wordpress_posts_as_json(){

	header('Content-Type: application/json');

	$post_list = array();

	query_posts(array());

	if(have_posts()){

		while(have_posts()){

			the_post();
		
			$post = array();
			$post['id'] 		= get_the_ID();
			$post['title'] 		= get_the_title();
			$post['excerpt'] 	= get_the_excerpt();
			$post['content'] 	= get_the_content();
			$post['date'] 		= get_the_date("Y-m-d H:i:s");
			$post['author'] 	= get_the_author(); 
			$post['tags']	 	= get_the_tags('', ', ', ''); 				

			$post_list[] = $post;

		}
	}

	print json_encode($post_list);
	 die();

}

// Enable ajax post fetch
add_action('wp_ajax_nopriv_get_post_list', 'load_wordpress_posts_as_json');
add_action('wp_ajax_get_post_list', 'load_wordpress_posts_as_json');


