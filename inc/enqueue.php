<?php

/**
 * Enqueue scripts and styles.
 */
function softall_scripts() {
	wp_enqueue_style( 'softall-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'softall-ionicons', get_template_directory_uri() . '/css/ionicons.min.css');
	wp_enqueue_style( 'softall-animate', get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style( 'softall-slider', get_template_directory_uri() . '/css/slider.css');
	wp_enqueue_style( 'softall-owl.carousel', get_template_directory_uri() . '/css/owl.carousel.css');
	wp_enqueue_style( 'softall-owl.theme', get_template_directory_uri() . '/css/owl.theme.css');
	wp_enqueue_style( 'softall-jquery.fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css');
	wp_enqueue_style( 'softall-main', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style( 'softall-responsive', get_template_directory_uri() . '/css/responsive.css');
	wp_enqueue_style( 'softall-style', get_stylesheet_uri() );

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'softall-jquery.min', get_template_directory_uri() . '/js/jquery.min.js', array(), '20151215', true );
	wp_enqueue_script( 'softall-modernizr-2.6.2.min', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js', array(), '20151215', true );
	wp_enqueue_script( 'softall-owl.carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151215', true );
	wp_enqueue_script( 'softall-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'softall-wow.min', get_template_directory_uri() . '/js/wow.min.js', array(), '20151215', true );
	wp_enqueue_script( 'softall-slider', get_template_directory_uri() . '/js/slider.js', array(), '20151215', true );
	wp_enqueue_script( 'softall-jquery.fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'softall-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );
	wp_enqueue_script( 'softall-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'softall-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'softall_scripts' );