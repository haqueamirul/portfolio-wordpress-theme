<?php
/**
 * Get the bootstrap!
 * (Update path to use cmb2 or CMB2, depending on the name of the folder.
 * Case-sensitive is important on some systems.)
 */
require_once __DIR__ . '/cmb2/init.php';

function theme_page_metabox(){

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_softall_';

	/**
	 * Initiate the metabox
	 */

	$portfolio_item = new_cmb2_box( array(
		'id'            => 'portfolio_metabox',
		'title'         => __( 'Portfolio Metabox', 'softall' ),
		'object_types'  => array( 'portfolio', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Regular text field
	$portfolio_item->add_field( array(
		'name'       => __( 'Portfolio Second Image', 'softall' ),
		'desc'       => __( 'Upload your portfolio second image.', 'softall' ),
		'id'         => $prefix . 'porfolio_second_image',
		'type'       => 'file'
	) );
	$portfolio_item->add_field( array(
		'name'       => __( 'Portfolio Description', 'softall' ),
		'desc'       => __( 'Write here your porfolio description.', 'softall' ),
		'id'         => $prefix . 'portfolio_des',
		'type'       => 'textarea'
	) );
	$portfolio_item->add_field( array(
		'name'       => __( 'Details Button Link', 'softall' ),
		'desc'       => __( 'Write here your porfolio Details Button Link.', 'softall' ),
		'id'         => $prefix . 'button_details',
		'type'       => 'text'
	) );

	//

	$service_item = new_cmb2_box( array(
		'id'            => 'service_metabox',
		'title'         => __( 'Service Metabox', 'softall' ),
		'object_types'  => array( 'service', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	$service_group_para = $service_item->add_field( array(
		'name'       => __( 'Groupable Field', 'softall' ),
		'id'         => $prefix . 'services_group_meta',
		'type'       => 'group'
	) );

	$service_item->add_group_field($service_group_para, array(
		'name'       => __( 'Service Title', 'softall' ),
		'desc'       => __( 'Write here your service Title', 'softall' ),
		'id'         => $prefix . 'service_title',
		'type'       => 'text'
	) );

	$service_item->add_group_field($service_group_para, array(
		'name'       => __( 'Service Description', 'softall' ),
		'desc'       => __( 'Write here your service Description', 'softall' ),
		'id'         => $prefix . 'service_description',
		'type'       => 'textarea'
	) );

	$service_item->add_group_field($service_group_para, array(
		'name'       => __( 'Change Animation', 'softall' ),
		'desc'       => __( 'Write here your animation name, need to help please <a href="https://daneden.github.io/animate.css/">Click Here</a>', 'softall' ),
		'id'         => $prefix . 'animate_name',
		'type'       => 'text'
	) );

	//Our team=========================================

	$team_item = new_cmb2_box( array(
		'id'            => 'team_metabox',
		'title'         => __( 'Team Metabox', 'softall' ),
		'object_types'  => array( 'team', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );
	$team_item->add_field( array(
		'name'       => __( 'Designation', 'softall' ),
		'desc'       => __( 'Write your designation here.', 'softall' ),
		'id'         => $prefix . 'designation',
		'type'       => 'text'
	) );
	$team_item->add_field( array(
		'name'       => __( 'Facebook Link', 'softall' ),
		'desc'       => __( 'Write your facebook-link here.', 'softall' ),
		'id'         => $prefix . 'facebook_link',
		'type'       => 'text'
	) );
	$team_item->add_field( array(
		'name'       => __( 'Twitter Link', 'softall' ),
		'desc'       => __( 'Write here your Twitter Link.', 'softall' ),
		'id'         => $prefix . 'twitter_link',
		'type'       => 'text'
	) );
	$team_item->add_field( array(
		'name'       => __( 'Linkedin Link', 'softall' ),
		'desc'       => __( 'Write your Linkedin-link here.', 'softall' ),
		'id'         => $prefix . 'linkedin_link',
		'type'       => 'text'
	) );
	$team_item->add_field( array(
		'name'       => __( 'Google+ Link', 'softall' ),
		'desc'       => __( 'Write here your Google+ Link.', 'softall' ),
		'id'         => $prefix . 'google_link',
		'type'       => 'text'
	) );

}
add_action('cmb2_admin_init','theme_page_metabox');