<?php

	@ini_set( 'upload_max_size' , '64M' );
	@ini_set( 'post_max_size', '64M');
	@ini_set( 'max_execution_time', '300' );

	remove_action('wp_head', 'print_emoji_detection_script', 7);

    /* ADD THEME SUPPORT FOR POST THUMBNAILS */
    add_theme_support('post-thumbnails'); 

?>