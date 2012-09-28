<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
	<title><?php wp_title();?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
	<meta name="author" content="http://www.jonas-giehl.com.br" />
	<meta name="audience" content="All" />
	<meta name="revisit-after" content="2 days" />  
	<meta name="expires" content="never" />	
	<meta name="google-site-verification" content="" />
	<meta name="msvalidate.01" content="" /> 			
        <link rel="stylesheet" href="<?php static_base('static/css/normalize.min.css');?>">
        <link rel="stylesheet" href="<?php static_base('static/css/main.css');?>">		
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
        <script src="<?php static_base('static/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js');?>"></script>		
	<script>					
		var static_base = '<?php static_base();?>';
		var _gaq=[['_setAccount','<?php get_analytics_id();?>'],['_trackPageview'],['_setDomainName'], ['<?php bloginfo('url');?>']];
	</script>
		
	<?php wp_head();?>

    </head>
    <body>
		
        <!--[if lt IE 7]>
			<p class="chromeframe">VocÃª estÃ¡ utilizando um navegador antigo. <a href="http://browsehappy.com/">Atualize o seu navegador hoje mesmo</a> ou <a href="http://www.google.com/chromeframe/?redirect=true">instale o Google Chrome Frame</a> para uma melhor experiÃªncia neste site.</p>
		<![endif]-->		
		
		<!-- Facebook -->
		<div id="fb-root"></div>
		
		<!-- ALL -->
		<div class="ctn-general">
			<div id="skiplinks">
		        <a href="#nav">Pular para a navegação</a>
		        <a href="#content">Pular para o conteúdo</a>
		  </div>
	
		
				<!-- HEADER -->
		        <div class="header-container">
					<header class="wrapper clearfix">
						<h1 class="title"><?php bloginfo('title');?></h1>

						<nav>
						<?php wp_nav_menu(array(
							'container'=> false,							
							'menu_class' =>'',
							'menu_id'=>'nav',
							'theme_location' => 'primary'
						)); ?>
						</nav>

						 <?php get_sidebar(); ?>

					</header>
				</div>
				
				<!-- // HEADER -->

