<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function softall_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar One', 'softall' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'softall' ),
		'before_widget' => '<div class="search widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="input-group">',
		'after_title'   => '</div>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Two', 'softall' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'softall' ),
		'before_widget' => '<div class="categories widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-head">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Three', 'softall' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'softall' ),
		'before_widget' => '<div class="recent-post widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'About Sidebar', 'softall' ),
		'id'            => 'about-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'softall' ),
		'before_widget' => '<div class="block about-feature-1 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Client Sidebar', 'softall' ),
		'id'            => 'client-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'softall' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'softall_widgets_init' );
