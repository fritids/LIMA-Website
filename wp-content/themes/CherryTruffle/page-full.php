<?php 
/*
Template Name: Full Width Page
*/
?>

<?php get_header(); ?>

<div id="container2"> <img src="<?php bloginfo('template_directory'); ?>/images/content-top-home-2-full.gif" alt="logo" style="float: left;" />
    <div id="left-div">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <!--Start Post-->
        <div class="post-wrapper">
            <h1 class="titles2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s','CherryTruffle'), get_the_title()) ?>">
                <?php the_title(); ?>
                </a></h1>
            <div style="clear: both;"></div>
			
			<?php if (get_option('cherrytruffle_page_thumbnails') == 'on') { ?>
				<?php $width = get_option('cherrytruffle_thumbnail_width_pages');
					  $height = get_option('cherrytruffle_thumbnail_height_pages');
					  $classtext = 'thumbnail';
					  $titletext = get_the_title();
				
					  $thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext);
					  $thumb = $thumbnail["thumb"];  ?>
				
				<?php if($thumb != '') { ?>
					<a href="<?php the_permalink() ?>" title="<?php printf(__('Permanent Link to %s','CherryTruffle'), get_the_title()) ?>">
						<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext); ?>
					</a>
				<?php } ?>
			<?php }; ?>

            <?php the_content(); ?>
            <div style="clear: both;"></div>
        
			<?php if (get_option('cherrytruffle_show_pagescomments') == 'on') { ?>   
				<div class="comment-bg">
					<?php comments_template(); ?>
					<div style="clear: both;"></div>
				</div>
				<img src="<?php bloginfo('template_directory'); ?>/images/comment-bottom.gif" alt="logo" style="float: left; margin-bottom: 20px;" />
            <?php }; ?>
            
        </div>
        <?php endwhile; ?>
        <!--End Post-->
        <?php else : ?>
        <!--If no results are found-->
        <h1><?php _e('No Results Found','CherryTruffle') ?></h1>
        <p><?php _e('The page you requested could not be found. Try refining your search, or use the navigation above to locate the post.','CherryTruffle') ?></p>
        <!--End if no results are found-->
        <?php endif; ?>
    </div>
   
    <img src="<?php bloginfo('template_directory'); ?>/images/content-bottom-2-full.gif" alt="logo" style="float: left;" /> </div>
<?php get_footer(); ?>
</body></html>