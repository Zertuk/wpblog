<?php

	function blog_theme_styles() {

		wp_enqueue_style( 'skeleton', get_stylesheet_directory_uri() . '/css/skeleton.css' );
		wp_enqueue_style( 'fontello', get_template_directory_uri() . '/css/fontello.css' );
		wp_enqueue_style( 'fontello-codes', get_template_directory_uri() . '/css/fontello-codes.css' );
		wp_enqueue_style( 'fontello-embedded', get_template_directory_uri() . '/css/fontello-embedded.css' );
		wp_enqueue_style( 'fontello-ie7', get_template_directory_uri() . '/css/fontello-ie7.css' );
		wp_enqueue_style( 'fontello-ie7-codes', get_template_directory_uri() . '/css/fontello-ie7-codes.css' );
		wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
		wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
	}

	add_action('wp_enqueue_scripts', 'blog_theme_styles');


?>
