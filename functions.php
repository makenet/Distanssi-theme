<?php

	// Register Custom Navigation Walker
	require_once('wp_bootstrap_navwalker.php');
	
	register_nav_menus( array(
    	'primary' => __( 'Primary Menu', 'distanssi-bs' ),
    ) );
    
    if ( function_exists('register_sidebar') ) 
		register_sidebar(array(
		'name' => 'footer', 
		'before_widget' => '<div class="col-md-4">', 
		'after_widget' => '</div>', 
		'before_title' => '<h4>', 
		'after_title' => '</h4>', 
	));
	
	
	
	

?>