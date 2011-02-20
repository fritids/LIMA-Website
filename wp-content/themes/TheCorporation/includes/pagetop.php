<div id="pagetop">
	<div class="container">
		<h1>
			<?php if (is_category()) single_cat_title();
				  elseif (is_tag()) single_tag_title();
				  elseif (is_day()) the_time('F jS, Y');
				  elseif (is_month()) the_time('F, Y');
				  elseif (is_year()) the_time('Y');
				  elseif (is_search()) the_search_query();
				  elseif (is_author()) {
						global $wp_query;
						$curauth = $wp_query->get_queried_object();
						echo $curauth->nickname;
				  }
				  else the_title(); 
			?>
		</h1>
		<?php include(TEMPLATEPATH . '/includes/postinfo.php'); ?>
	</div> <!-- end .container -->
</div> <!-- end #pagetop -->

<div id="breadcrumbs">
	<div class="container">
	<?php breadcrumbs_plus(); ?>	
	</div> <!-- end .container -->
</div> <!-- end #breadcrumbs -->
