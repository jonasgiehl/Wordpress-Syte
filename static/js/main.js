


$(document).ready(function(){
	
	$('a').click(function(){
		utils.register_data(
			$(this).attr('title'),
			$(this).attr('href')
		);
	});
	
	var post_list = content_loaders.fetch_wordpress_posts();
	var template  = content_loaders.get_wordpres_post_template();
	$('.main').empty();
	$.tmpl( template, post_list ).appendTo( ".main" );

});

