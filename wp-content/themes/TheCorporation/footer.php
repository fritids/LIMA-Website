		</div> <!-- end .container -->
	</div> <!-- end #content -->

	<div id="footer">
		<div class="container clearfix">
			
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?>
			<?php endif; ?>
			
		</div> <!-- end .container -->
	</div> <!-- end #footer -->

	<div id="copyright">
		<div class="container clearfix">
			<p id="copyinfo"><?php _e('Powered by ','TheCorporation'); ?> <a href="http://www.wordpress.com">WordPress</a> | <?php _e('Designed by ','TheCorporation'); ?> <a href="http://www.elegantthemes.com">Elegant Themes</a></p>
		</div> <!-- end #container -->
	</div> <!-- end #copyright -->
				
	<?php include(TEMPLATEPATH . '/includes/scripts.php'); ?>

	<?php wp_footer(); ?>	
</body>
</html>