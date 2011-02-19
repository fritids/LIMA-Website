<?php global $cherrytruffle_homepage_posts, $cherrytruffle_catnum_posts, $cherrytruffle_grab_image; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php elegant_titles(); ?></title>
<?php elegant_description(); ?> 
<?php elegant_keywords(); ?> 
<?php elegant_canonical(); ?>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--[if IE 7]>	
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/iestyle.css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/ie6style-<?php echo(get_option('cherrytruffle_color_scheme'));?>.css" />
<script defer type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/pngfix.js"></script>
<![endif]-->

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body>
<div id="header">
    <!--This controls the categories navigation bar-->
    <div id="categories">
		<!-- Page Menu -->
		<?php $menuClass = 'nav superfish';
		$primaryNav = '';
		if (function_exists('wp_nav_menu')) {
			$primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'echo' => false ) ); 
		};
		if ($primaryNav == '') { ?>
			<ul class="<?php echo $menuClass; ?>">
				<?php if (get_option('cherrytruffle_swap_navbar') == 'false') { ?>					
					<?php show_categories_menu($menuClass,false); ?>
				<?php } else { ?>
					<?php if (get_option('cherrytruffle_home_link') == 'on') { ?>
						<li <?php if (is_home()) echo('class="current_page_item"') ?>><a href="<?php bloginfo('url'); ?>"><?php _e('Home','CherryTruffle') ?></a></li>
					<?php }; ?>
					
					<?php show_page_menu($menuClass,false,false); ?>
				<?php } ?>
			</ul> <!-- end ul#nav -->
		<?php }
		else echo($primaryNav); ?>
    </div>
    <!--End category navigation-->
	<div id="header-inside">
		<a href="<?php bloginfo('url'); ?>"><?php $logo = (get_option('cherrytruffle_logo') <> '') ? get_option('cherrytruffle_logo') : get_bloginfo('template_directory').'/images/logo.png'; ?><img src="<?php echo $logo; ?>" alt="Logo" class="logo"/></a>
		<?php if (get_option('cherrytruffle_display_social') == 'on') { ?>  
			<img src="<?php bloginfo('template_directory'); ?>/images/separate.png" alt="separate" style="float: left; margin: 5px 15px 0px 15px;" />
			<?php if (get_option('cherrytruffle_rss') == 'Disable') { ?>
			<?php { echo ''; } ?>
			<?php } else { include(TEMPLATEPATH . '/includes/icon-rss.php'); } ?>
			<?php if (get_option('cherrytruffle_icon_twitter_display') == 'false') { ?>
			<?php { echo ''; } ?>
			<?php } else { include(TEMPLATEPATH . '/includes/icon-twitter.php'); } ?>
			<?php if (get_option('cherrytruffle_icon_facebook_display') == 'false') { ?>
			<?php { echo ''; } ?>
			<?php } else { include(TEMPLATEPATH . '/includes/icon-facebook.php'); } ?>
			<?php if (get_option('cherrytruffle_icon_myspace_display') == 'false') { ?>
			<?php { echo ''; } ?>
			<?php } else { include(TEMPLATEPATH . '/includes/icon-myspace.php'); } ?>
			<?php if (get_option('cherrytruffle_icon_linkedin_display') == 'false') { ?>
			<?php { echo ''; } ?>
			<?php } else { include(TEMPLATEPATH . '/includes/icon-linkedin.php'); } ?>
			<?php if (get_option('cherrytruffle_icon_stumble_display') == 'false') { ?>
			<?php { echo ''; } ?>
			<?php } else { include(TEMPLATEPATH . '/includes/icon-stumble.php'); } ?>
			<?php if (get_option('cherrytruffle_icon_youtube_display') == 'false') { ?>
			<?php { echo ''; } ?>
			<?php } else { include(TEMPLATEPATH . '/includes/icon-youtube.php'); } ?>
		<?php }; ?>
	
        <?php if (get_option('cherrytruffle_display_search') == 'on') { ?>
			<div class="search_bg">
				<div id="search">
					<form method="get" action="<?php bloginfo('url'); ?>" style="padding:0px 0px 0px 0px; margin:0px 0px 0px 0px">
						<input type="text"  name="s" value="<?php echo esc_html($s, 1); ?>"/>
						<input type="image" class="input" src="<?php bloginfo('template_directory'); ?>/images/search-button.png" value="submit"/>
					</form>
				</div>
			</div>
        <?php }; ?>
		
        <div style="clear: both;"></div>
        <div id="slogan">
            <?php bloginfo('description'); ?>
        </div>
        <?php if (get_option('cherrytruffle_468_enable') == 'on') { ?>
        <?php include(TEMPLATEPATH . '/includes/468x60.php'); ?>
        <?php } ?>
    </div>
</div>
<div style="clear: both;"></div>

<!--This controls pages navigation bar-->
<div id="pages">
	<?php $menuClass = 'nav superfish';
	$menuID = 'nav2'; 
	$secondaryNav = '';
	if (function_exists('wp_nav_menu')) {
		$secondaryNav = wp_nav_menu( array( 'theme_location' => 'secondary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'menu_id' => $menuID, 'echo' => false ) ); 
	};
	if ($secondaryNav == '') { ?>
		<ul id="<?php echo $menuID; ?>" class="<?php echo $menuClass; ?>">
			<?php if (get_option('cherrytruffle_swap_navbar') == 'false') { ?>
				<?php if (get_option('cherrytruffle_home_link') == 'on') { ?>
					<li <?php if (is_home()) echo('class="current_page_item"') ?>><a href="<?php bloginfo('url'); ?>"><?php _e('Home','CherryTruffle') ?></a></li>
				<?php }; ?>
				
				<?php show_page_menu($menuClass,false,false); ?>
			<?php } else { ?>
				<?php show_categories_menu($menuClass,false); ?>
			<?php } ?>
		</ul> <!-- end ul#nav -->
	<?php }
	else echo($secondaryNav); ?>
</div>
<!--End pages navigation-->

<div id="wrapper2" <?php if (is_page_template('page-full.php')) echo"class='no_sidebar'";?> >
	<?php if (get_option('cherrytruffle_leader_enable') == 'on') { ?>
		<div style="margin: 30px 100px;">
			<a href="<?php echo (get_option('cherrytruffle_leader_url')); ?>"><img src="<?php echo (get_option('cherrytruffle_leader_image')); ?>" alt="banner" style="border: none;" /></a>
		</div>
	<?php }; ?>