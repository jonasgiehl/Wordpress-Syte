<?php get_header(); ?>

	<div class="main-container" id="content">

	         <div class="main wrapper clearfix">				
					
				<section class="main-section blog-section hidden" id="blog-posts">
					<span class="loading">loading blog posts ...</span>
				</section>

				<script> document.getElementById('blog-posts').style.display='block';</script>
				<noscript>

				<?php  if(have_posts()):  ?>	
				
					<?php while(have_posts()): the_post(); ?>
					
						<article class="post">
						
							<?php if(is_single()): ?>
							
							<header>
								<h1 class="post-title"><?php the_title();?></h1>
								<div class="post-content"><?php the_content();?></div>
							</header>
							
							<?php else: ?>
							
							<section>
								<h2 class="post-title"><?php the_title();?></h2>
								<div class="post-excerpt"><?php the_excerpt();?></div>
							</section>		
							
							<?php endif; ?>		
							
						</article>
						
					<?php endwhile;?>
					
				<?php endif;?>
				
				</noscript>
	         </div> <!-- #main -->
			
        </div> <!-- #main-container -->


<?php get_footer(); ?>
