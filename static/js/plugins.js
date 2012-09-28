// Avoid `console` errors in browsers that lack a console.
if (!(window.console && console.log)) {
    (function() {
        var noop = function() {};
        var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'markTimeline', 'table', 'time', 'timeEnd', 'timeStamp', 'trace', 'warn'];
        var length = methods.length;
        var console = window.console = {};
        while (length--) {
            console[methods[length]] = noop;
        }
    }());
}

// Place any jQuery/helper plugins in here.

var utils = function(){};
utils.register_data = function(key, val){
	_gaq.push(['_setCustomVar',
		1,
		key,
		val      
	]);	
	console.log("utils.register_data => "+ key + ", " + val);
};

var content_loaders = function(){};

content_loaders.fetch_wordpress_posts = function(){

	var post_list;
	
	$.ajax({
			url     : 'wp-admin/admin-ajax.php',
			type    : 'POST',
			cache   : false,
			data    : {
					action : 'get_post_list'
			},
			async   : false,
			success : function(data){
				post_list = data;						
			}
	});
	
	return post_list;
};

content_loaders.get_wordpres_post_template = function(){

	var template = '';
	
	$.ajax({
			url     : static_base+'static/html/posts-template.html',
			type    : 'POST',
			cache   : false,
			data    : {},
			async   : false,
			success : function(data){                     
				template = data;
			}
	});

	return template;
};


