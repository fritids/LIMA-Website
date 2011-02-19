<?php 

require_once(TEMPLATEPATH . '/epanel/custom_functions.php'); 

require_once(TEMPLATEPATH . '/includes/functions/comments.php'); 

require_once(TEMPLATEPATH . '/includes/functions/sidebars.php'); 

load_theme_textdomain('TheCorporation',get_template_directory().'/lang');

require_once(TEMPLATEPATH . '/epanel/options_thecorporation.php');

require_once(TEMPLATEPATH . '/epanel/core_functions.php'); 

require_once(TEMPLATEPATH . '/epanel/post_thumbnails_thecorporation.php');

$wp_ver = substr($GLOBALS['wp_version'],0,3);
if ($wp_ver >= 2.8) include(TEMPLATEPATH . '/includes/widgets.php'); ?>