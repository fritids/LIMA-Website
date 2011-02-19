<?php if (get_option('cherrytruffle_display_footer') == 'on') { ?>  
<div id="footer">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer") ) : ?>
    <?php endif; ?>
    <div style="clear: both;"></div>
</div>
<?php }; ?>
<div style="clear: both;"></div>
<div class="bottomfooter"><?php _e('Powered by ','CherryTruffle'); ?> <a href="http://www.wordpress.com">WordPress</a> | <?php _e('Designed by ','CherryTruffle'); ?> <a href="http://www.elegantthemes.com">Elegant Themes</a> </div>
</div>

<?php include(TEMPLATEPATH . '/includes/scripts.php'); ?>
<?php wp_footer(); ?>
