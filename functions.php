<?php
/**
 * softall functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package softall
 */

require get_template_directory() . '/inc/theme-support.php';

/**
 * Register widget area.
 *
 */
require get_template_directory() . '/inc/widget-register.php';

/**
 * Enqueue scripts and styles. 
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Implement the softall-plugin-activation.
 */
require get_template_directory() . '/inc/softall-plugin-activation.php';

/**
 * Implement the Custom cmb2.about-widget.php
 */
require get_template_directory() . '/inc/custom-register.php';
/**
 * Implement the about-widget
 */
require get_template_directory() . '/inc/widget/about-widget.php';

/**
 * Implement the Custom post. 
 */
require get_template_directory() . '/inc/softall-custom-post.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress. 
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * theme option.
 */
require get_template_directory() . '/lib/option-theme/ReduxCore/framework.php';
require get_template_directory() . '/lib/option-theme/sample/softall-config.php';

/**
 * custom-navfooter.
 */
require get_template_directory() . '/inc/custom-navfooter.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

