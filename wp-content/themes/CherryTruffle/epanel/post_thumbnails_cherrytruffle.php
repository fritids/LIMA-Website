<?php 

/* sets predefined Post Thumbnail dimensions */
if ( function_exists( 'add_theme_support' ) ) {
	
	add_theme_support( 'post-thumbnails' );
	
	//page.php
	add_image_size( 'pageimage', get_option($shortname.'_thumbnail_width_pages'), get_option($shortname.'_thumbnail_height_pages'), true );
	
	//single.php
	add_image_size( 'singleimage', get_option($shortname.'_thumbnail_width_posts'), get_option($shortname.'_thumbnail_height_posts'), true );
	
	//blogstyle.php, blogstylecat.php, default.php, defaultcat.php
	add_image_size( 'indeximage', get_option($shortname.'_thumbnail_width_index'), get_option($shortname.'_thumbnail_height_index'), true );

};
/* --------------------------------------------- */

?>