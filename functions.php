<?php

	// Register Custom Navigation Walker
	require_once('wp_bootstrap_navwalker.php');
	
	add_theme_support( 'post-thumbnails' ); 
	
	add_action( 'init', 'arvio_init' );

	function arvio_init() {
		$labels = array(
			'name'               => _x( 'Arviot'),
			'singular_name'      => _x( 'Arvio' ),
			'menu_name'          => _x( 'Arviot'),
			'name_admin_bar'     => _x( 'Arvio' ),
			'add_new'            => _x( 'Lisää uusi' ),
			'add_new_item'       => __( 'Lisää uusi arvio' ),
			'new_item'           => __( 'Uusi arvio' ),
			'edit_item'          => __( 'Muokkaa arviota' ),
			'view_item'          => __( 'Näytä arvio' ),
			'all_items'          => __( 'Kaikki arviot' ),
			'search_items'       => __( 'Etsi arvioita' ),
			'not_found'          => __( 'Arviota ei löytynyt' ),
			'not_found_in_trash' => __( 'Arviota ei löytynyt roskakorista.' )
		);
	
		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'arviot' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor' )
		);
	
		register_post_type( 'arviot', $args );
	}
	
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
	
	 if ( function_exists('register_sidebar') ) 
		register_sidebar(array(
		'name' => 'Info sidebar',
		'id' => 'info_sidebar', 
		'before_widget' => '', 
		'after_widget' => '', 
		'before_title' => '<h4>', 
		'after_title' => '</h4>', 
	));


?>