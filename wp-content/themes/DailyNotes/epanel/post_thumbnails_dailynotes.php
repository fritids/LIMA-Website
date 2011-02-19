<?php 

/* sets predefined Post Thumbnail dimensions */
if ( function_exists( 'add_theme_support' ) ) {
   add_theme_support( 'post-thumbnails' );
      
   //text-thumb
   add_image_size( 'thumb1', 149, 149, true );
   
   //photo-thumb
   add_image_size( 'thumb2', 200, 200, true );
   
   add_image_size( 'thumb3', 526, 351, true );
      
};
/* --------------------------------------------- */

?>