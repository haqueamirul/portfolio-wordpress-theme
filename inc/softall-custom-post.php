<?php


/**
 * Register a portfolio post type.
 */
function portfolio_setup_post_type() {
    $args = array(
        'public'    => true,
        'label'     => __( 'Portfolio', 'softall' ),
        'supports' => array( 'title','thumbnail' ),
        'menu_icon' => 'dashicons-welcome-write-blog',
    );
    register_post_type( 'portfolio', $args );
}
add_action( 'init', 'portfolio_setup_post_type' );
/**
 * Register a service post type.
 */
function service_setup_post_type() {
    $args = array(
        'public'    => true,
        'label'     => __( 'Service', 'softall' ),
        'supports' => array( 'title','editor','thumbnail' ),
        'menu_icon' => 'dashicons-media-default',
    );
    register_post_type( 'service', $args );
}
add_action( 'init', 'service_setup_post_type' );
/**
 * Register a service post type.
 */
function team_setup_post_type() {
    $args = array(
        'public'    => true,
        'label'     => __( 'Team', 'softall' ),
        'supports' => array( 'title','editor','thumbnail' ),
        'menu_icon' => 'dashicons-admin-users',
    );
    register_post_type( 'team', $args );
}
add_action( 'init', 'team_setup_post_type' );