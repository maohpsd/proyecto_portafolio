<?php 

add_theme_support( 'post-thumbnails' );

add_action( 'wp_enqueue_scripts', function() {

	wp_deregister_script('jquery');

	wp_enqueue_style( ' add_google_fonts ', 'https://fonts.googleapis.com/css?family=Muli:300,400,600,700,800,900', false );

	//enqueue style css

	wp_enqueue_style ( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style ( 'css', get_template_directory_uri() . '/assets/css/style.css');

	 //Enqueue Scripts js

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js', null, null, true);
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'
        , ['jquery'], null, true);
} );



