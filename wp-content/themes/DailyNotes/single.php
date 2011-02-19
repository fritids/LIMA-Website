<?php get_header(); ?>

<?php the_post(); ?>
	<?php include(TEMPLATEPATH . '/includes/custom_settings.php'); ?>

	<?php $thumb = '';
	$width = 200; $height = 200;
	$classtext = 'small-thumb';
	$titletext = get_the_title();
	$thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext,true,'thumb');
	$thumb = $thumbnail["thumb"]; ?>
	
	<div class="main_post">   
		<span class="main_post_top"></span>
		<?php if (get_option('dailynotes_integration_single_top') <> '' && get_option('dailynotes_integrate_singletop_enable') == 'on') echo(get_option('dailynotes_integration_single_top')); ?>	
		
		<h1><?php the_title(); ?></h1>
		
		<?php if (get_option('dailynotes_postinfo') <> '') { ?>
			<div class="main_postinfo"><?php _e('Posted','DailyNotes'); ?> <?php if (in_array('author', get_option('dailynotes_postinfo'))) { ?> <?php _e('by','DailyNotes'); ?> <?php the_author_posts_link(); ?><?php }; ?><?php if (in_array('date', get_option('dailynotes_postinfo'))) { ?> <?php _e('on','DailyNotes') ?> <?php the_time(get_option('dailynotes_date_format')) ?><?php }; ?><?php if (in_array('categories', get_option('dailynotes_postinfo'))) { ?> <?php _e('in','DailyNotes'); ?>  <?php echo get_the_term_list( $post->ID, $taxonomyName, '', ', ', ''); if (get_the_term_list( $post->ID, $taxonomyName, '', ', ', '')) echo(', '); the_category(', ') ?><?php }; ?><?php if (in_array('comments', get_option('dailynotes_postinfo'))) { ?> | <?php comments_popup_link(__('0 comments','DailyNotes'), __('1 comment','DailyNotes'), '% '.__('comments','DailyNotes')); ?><?php }; ?></div>
		<?php }; ?>	
		<img src="<?php bloginfo('template_directory'); ?>/images/line.gif" alt="line" class="line" />
		
		
		<?php if ($postType == 'text') { ?>
			<?php if (get_option('dailynotes_thumbnails') == 'on' && $thumb <> '') { ?>
				<a href="<?php echo $thumbnail["fullpath"]; ?>" class="lightbox"><?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext , $width, $height, $classtext); ?></a>
			<?php }; ?>		
		<?php }; ?>	
		
		<?php if ($postType == 'photo') { ?>
                         <?php if (get_option('dailynotes_thumbnails') == 'on' && $thumb <> '') { ?>  
             <a href="<?php echo $thumbnail["fullpath"]; ?>" class="lightbox">
                <img src="<?php echo $thumbnail["fullpath"]; ?>" class="large-thumb" alt="" />
             </a>
                         <?php }; ?>
          <?php }; ?>
		
		<?php if ($postType == 'video') { ?>
			<div class="video-wrap-2">
				<?php $video = isset($custom["video"][0]) ? $custom["video"][0] : '';
				$video_width = isset($custom["video_width"][0]) ? $custom["video_width"][0] : '526';
				$video_height = isset($custom["video_height"][0]) ? $custom["video_height"][0] : '351'; ?>
				
				<?php $video = preg_replace("/height=\"[0-9]*\"/", "height=$video_height", $video);
				$video = preg_replace("/width=\"[0-9]*\"/", "width=$video_width", $video);
				echo $video; ?>
			</div> <!-- .video-wrap-2 -->
		<?php }; ?>
		
		<?php if ($postType == 'quote') { ?>
			<span class="big_quote2"><?php $quote = isset($custom["quote"][0]) ? $custom["quote"][0] : ''; echo $quote; ?>"</span>
		<?php }; ?>
		
		<?php if ($postType == 'audio') { ?>
			<div class="audio-block">
				<?php $audio = isset($custom["audio"][0]) ? $custom["audio"][0] : ''; ?>
				<?php $postID = $post->ID; ?>				
				<p id="audioplayer_<?php echo($postID); ?>">Mp3 file</p>  
				<script type="text/javascript">  
					AudioPlayer.embed("audioplayer_<?php echo $postID; ?>", {soundFile: "<?php echo $audio; ?>"});
				</script> 
			</div>
			<br class="clear" />
		<?php }; ?>	
		
		
		<?php the_content(); ?>
		<br class="clear" />
		
		<?php if (get_option('dailynotes_468_enable') == 'on') { ?>
			<?php if(get_option('dailynotes_468_adsense') <> '') echo(get_option('dailynotes_468_adsense'));
			else { ?>
				<a href="<?php echo(get_option('dailynotes_468_url')); ?>"><img src="<?php echo(get_option('dailynotes_468_image')); ?>" alt="468 ad" class="foursixeight" /></a>
			<?php } ?>	
		<?php } ?>
		
		<?php if (get_option('dailynotes_integration_single_bottom') <> '' && get_option('dailynotes_integrate_singlebottom_enable') == 'on') echo(get_option('dailynotes_integration_single_bottom')); ?>	
					
		<span class="main_post_bottom"></span>
	</div>   

	<?php if (get_option('dailynotes_show_postcomments') == 'on') comments_template('', true); ?>

	<div id="footer"><?php _e('designed by ','DailyNotes'); ?> <a href="http://www.elegantthemes.com">elegant themes</a></div>
			
<?php get_footer(); ?>