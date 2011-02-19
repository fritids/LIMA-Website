<?php global $shortname; ?>

	<script type="text/javascript"> 
	//<![CDATA[
		jQuery.noConflict();
		jQuery('ul.superfish').superfish({ 
			delay:       200,                            // one second delay on mouseout 
			animation:   {'marginLeft':'0px',opacity:'show'},  // fade-in and slide-down animation 
			speed:       'normal',                          // faster animation speed
			onBeforeShow: function(){ this.css('marginLeft','20px'); }, 			
			autoArrows:  true,                           // disable generation of arrow mark-up 
			dropShadows: false                            // disable drop shadows 
		}).find('> li > ul').prepend('<span class="top-arrow"></span>');
		jQuery('ul.superfish').find('li ul li ul').append('<span class="dropdown-bottom"></span>');
		
		
		jQuery('ul.superfish ul a').hover(function(){
			jQuery(this).stop().animate({paddingLeft:'38px'},300);
		},function(){
			jQuery(this).stop().animate({paddingLeft:'30px'},300);
		});
		jQuery("a.lightbox").fancybox({
			'overlayShow'			: false,
			'zoomSpeedIn'			: 600,
			'zoomSpeedOut'			: 500,
			'easingIn'				: 'easeOutBack',
			'easingOut'				: 'easeInBack'
		});
		Cufon.now();
	//]]>	
	</script> 