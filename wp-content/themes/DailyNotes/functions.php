<?php 

require_once(TEMPLATEPATH . '/epanel/custom_functions.php'); 

require_once(TEMPLATEPATH . '/includes/functions/comments.php'); 

require_once(TEMPLATEPATH . '/includes/functions/sidebars.php'); 

load_theme_textdomain('DailyNotes',get_template_directory().'/lang');

require_once(TEMPLATEPATH . '/epanel/options_dailynotes.php');

require_once(TEMPLATEPATH . '/epanel/core_functions.php'); 

require_once(TEMPLATEPATH . '/epanel/post_thumbnails_dailynotes.php');

function register_main_menus() {
	register_nav_menus( array(
		'primary-menu' => 'Primary Navigation',
	) );
};
if (function_exists('register_nav_menus')) add_action( 'init', 'register_main_menus' );

$wp_ver = substr($GLOBALS['wp_version'],0,3);

require_once(TEMPLATEPATH . '/includes/functions/custom_posts.php');
?>