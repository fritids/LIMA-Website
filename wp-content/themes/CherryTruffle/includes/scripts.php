<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/superfish.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>
<script type="text/javascript">
	jQuery(function(){
		jQuery('ul.superfish').superfish();
	});
	//<![CDATA[
		jQuery(function(){
			<?php if (get_option('cherrytruffle_disable_toptier') == 'on') echo('jQuery("ul.nav > li > a > span.sf-sub-indicator").parent().attr("href","#")'); ?>
		});
	//]]>	
</script>