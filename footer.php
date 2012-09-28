			<!-- FOOTER -->
			<div class="footer-container">
				<footer class="wrapper">
					<h3>footer</h3>
				</footer>
			</div>
			<!-- // FOOTER -->

		</div>
		<!-- // ALL -->
		
		
	
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php static_base('static/js/vendor/jquery-1.8.1.min.js');?>"><\/script>')</script>
	<script src="//ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js"></script>
        <script src="<?php static_base('static/js/plugins.js');?>"></script>
        <script src="<?php static_base('static/js/main.js');?>"></script>
		
		<?php if(google_analytics_enabled()): ?>
        <script>            
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
		<?php endif; ?>
		
		<?php wp_footer();?>
    </body>
</html>
