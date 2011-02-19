<?php get_header(); ?>

<?php the_post(); ?>

<div class="main_post">   
    <span class="main_post_top"></span>
	<?php if (get_option('dailynotes_integration_single_top') <> '' && get_option('dailynotes_integrate_singletop_enable') == 'on') echo(get_option('dailynotes_integration_single_top')); ?>
	
    <h1><?php the_title(); ?></h1>
    <img src="<?php bloginfo('template_directory'); ?>/images/line.gif" alt="line" class="line" />
    <?php the_content(); ?>
	
    <span class="main_post_bottom"></span>
</div> <!-- .main_post -->

<div id="footer"><?php _e('designed by ','DailyNotes'); ?> <a href="http://www.elegantthemes.com">elegant themes</a></div>
	
<?php get_footer(); ?>