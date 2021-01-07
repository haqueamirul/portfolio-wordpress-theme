<?php
/**
 * softall custom nav-footer section
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package softall
 */

function navfooter_custom_section($customizekobo){

	$customizekobo->add_section('navebar_section', array(
		'title' => 'Logo Section',
		'priority' => 20
		));

/* For Logo */

	$customizekobo->add_setting('upload_logo', array(
		'default' => 'Logo',
		'sanitize_callback' => 'softall_sanitize_image',
		'transport' => 'refresh'
		));
	$customizekobo->add_control(
		new WP_Customize_Image_Control($customizekobo,'upload_logo', array(
				'section' => 'navebar_section',
				'label' => 'Upload your Image',
				'settings' => 'upload_logo'
			))
		);

/*bg color */
	
	$customizekobo->add_setting(
	    'header-background',
	    array(
	        'default' => '#ffffff',
	        'sanitize_callback' => 'softall_hex_color',
	        'transport' => 'refresh',
	    )
	);
	 
	$customizekobo->add_control(
	    new WP_Customize_Color_Control(
	        $customizekobo,
	        'header-background',
	        array(
	            'label' => 'Header Background',
	            'section' => 'navebar_section',
	            'settings' => 'header-background'
	        )
	    )
	);

	$customizekobo->add_setting(
	    'menu-background',
	    array(
	        'default' => '#2e2e2e',
	        'sanitize_callback' => 'softall_hex_color',
	        'transport' => 'refresh',
	    )
	);
	 
	$customizekobo->add_control(
	    new WP_Customize_Color_Control(
	        $customizekobo,
	        'menu-background',
	        array(
	            'label' => 'Menu Color',
	            'section' => 'navebar_section',
	            'settings' => 'menu-background'
	        )
	    )
	);


	$customizekobo->add_setting(
	    'dropdown-background',
	    array(
	        'default' => '#000000',
	        'sanitize_callback' => 'softall_hex_color',
	        'transport' => 'refresh',
	    )
	);
	 
	$customizekobo->add_control(
	    new WP_Customize_Color_Control(
	        $customizekobo,
	        'dropdown-background',
	        array(
	            'label' => 'Dropdrown Menu Bacground',
	            'section' => 'navebar_section',
	            'settings' => 'dropdown-background'
	        )
	    )
	);


	$customizekobo->add_setting(
	    'hover-color',
	    array(
	        'default' => '#2087f1',
	        'sanitize_callback' => 'softall_hex_color',
	        'transport' => 'refresh',
	    )
	);
	 
	$customizekobo->add_control(
	    new WP_Customize_Color_Control(
	        $customizekobo,
	        'hover-color',
	        array(
	            'label' => 'Menu Hover Color',
	            'section' => 'navebar_section',
	            'settings' => 'hover-color'
	        )
	    )
	);

	//Top header section

	$customizekobo->add_section('top_footer_section', array(
		'title' => 'Top Footer Section',
		'priority' => 20
		));


	$customizekobo->add_setting(
	    'header_text',
	    array(
	        'default' => '',
	        'sanitize_callback' => 'softall_text_field',
	        'transport' => 'refresh',
	    )
	);

	$customizekobo->add_control('header_text', array(
		'label' => 'Header Text',
		'section' => 'top_footer_section',
		'type' => 'text'
	));


	$customizekobo->add_setting(
	    'button_text',
	    array(
	        'default' => 'Contact With Us',
	        'sanitize_callback' => 'softall_text_field',
	        'transport' => 'refresh',
	    )
	);

	$customizekobo->add_control('button_text', array(
		'label' => 'Button Text',
		'section' => 'top_footer_section',
		'type' => 'text'
	));


	$customizekobo->add_setting(
	    'button_link',
	    array(
	        'default' => 'http://localhost/amirul/contact/',
	        'sanitize_callback' => 'softall_text_field',
	        'transport' => 'refresh',
	    )
	);

	$customizekobo->add_control('button_link', array(
		'label' => 'Button Link',
		'section' => 'top_footer_section',
		'type' => 'text'
	));


	$customizekobo->add_setting(
	    'header_textarea',
	    array(
	        'default' => '',
	        'sanitize_callback' => 'softall_textarea_field',
	        'transport' => 'refresh',
	    )
	);

	$customizekobo->add_control('header_textarea', array(
		'label' => 'Header Content',
		'section' => 'top_footer_section',
		'type' => 'textarea'
	));


	$customizekobo->add_setting(
	    'footer-bacground-color',
	    array(
	        'default' => '#39d8f0',
	        'sanitize_callback' => 'softall_hex_color',
	        'transport' => 'refresh',
	    )
	);
	 
	$customizekobo->add_control(
	    new WP_Customize_Color_Control(
	        $customizekobo,
	        'footer-bacground-color',
	        array(
	            'label' => 'Background Color',
	            'section' => 'top_footer_section',
	            'settings' => 'footer-bacground-color'
	        )
	    )
	);

	//Copyright section

	$customizekobo->add_section('copyright_section', array(
		'title' => 'Copyright Section',
		'priority' => 20
		));


	$customizekobo->add_setting(
	    'copyright_text',
	    array(
	        'default' => 'Copyright: 2017. Design and Developed by',
	        'sanitize_callback' => 'softall_text_field',
	        'transport' => 'refresh',
	    )
	);

	$customizekobo->add_control('copyright_text', array(
		'label' => 'Copyright Text',
		'section' => 'copyright_section',
		'type' => 'text'
	));


	$customizekobo->add_setting(
	    'company_name',
	    array(
	        'default' => 'Soft-all',
	        'sanitize_callback' => 'softall_text_field',
	        'transport' => 'refresh',
	    )
	);

	$customizekobo->add_control('company_name', array(
		'label' => 'Company Name',
		'section' => 'copyright_section',
		'type' => 'text'
	));


	$customizekobo->add_setting(
	    'company_link',
	    array(
	        'default' => 'http://soft-all.com/',
	        'sanitize_callback' => 'softall_text_field',
	        'transport' => 'refresh',
	    )
	);

	$customizekobo->add_control('company_link', array(
		'label' => 'Copany URL',
		'section' => 'copyright_section',
		'type' => 'text'
	));


	$customizekobo->add_setting(
	    'copyright_bg_color',
	    array(
	        'default' => '#fff',
	        'sanitize_callback' => 'softall_hex_color',
	        'transport' => 'refresh',
	    )
	);
	 
	$customizekobo->add_control(
	    new WP_Customize_Color_Control(
	        $customizekobo,
	        'copyright_bg_color',
	        array(
	            'label' => 'Copyright Background Color',
	            'section' => 'copyright_section',
	            'settings' => 'copyright_bg_color'
	        )
	    )
	);

	//social media

	$customizekobo->add_setting(
	    'facebook',
	    array(
	        'default' => '',
	        'sanitize_callback' => 'softall_text_field',
	        'transport' => 'refresh',
	    )
	);

	$customizekobo->add_control('facebook', array(
		'label' => 'Facebook URL',
		'section' => 'copyright_section',
		'type' => 'text'
	));

	$customizekobo->add_setting(
	    'twiter_url',
	    array(
	        'default' => '',
	        'sanitize_callback' => 'softall_text_field',
	        'transport' => 'refresh',
	    )
	);

	$customizekobo->add_control('twiter_url', array(
		'label' => 'Twitter URL',
		'section' => 'copyright_section',
		'type' => 'text'
	));

	$customizekobo->add_setting(
	    'google_url',
	    array(
	        'default' => '',
	        'sanitize_callback' => 'softall_text_field',
	        'transport' => 'refresh',
	    )
	);

	$customizekobo->add_control('google_url', array(
		'label' => 'Google+ URL',
		'section' => 'copyright_section',
		'type' => 'text'
	));

	$customizekobo->add_setting(
	    'linkedin',
	    array(
	        'default' => '',
	        'sanitize_callback' => 'softall_text_field',
	        'transport' => 'refresh',
	    )
	);

	$customizekobo->add_control('linkedin', array(
		'label' => 'Linkedin URL',
		'section' => 'copyright_section',
		'type' => 'text'
	));


}
add_action('customize_register','navfooter_custom_section');

function softall_sanitize_image( $input ){

    /* default output */
    $output = '';

    /* check file type */
    $filetype = wp_check_filetype( $input );
    $mime_type = $filetype['type'];

    /* only mime type "image" allowed */
    if ( strpos( $mime_type, 'image' ) !== false ){
        $output = $input;
    }

    return $output;
}

function softall_hex_color( $color ) {
    if ( '' === $color ) {
        return '';
    }
 
    // 3 or 6 hex digits, or the empty string.
    if ( preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) ) {
        return $color;
    }
}


function softall_text_field( $str ) {
    return sanitize_text_field( $str );
} 

function softall_textarea_field( $text ) {
    return esc_textarea( $text );
}
