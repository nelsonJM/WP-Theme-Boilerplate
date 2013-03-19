<?php
/**
 * uwp_boilerplate Theme Customizer
 *
 * @package uwp_boilerplate
 * @since uwp_boilerplate 1.2
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 *
 * @since uwp_boilerplate 1.2
 */
function uwp_boilerplate_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'uwp_boilerplate_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 *
 * @since uwp_boilerplate 1.2
 */
function uwp_boilerplate_customize_preview_js() {
	wp_enqueue_script( 'uwp_boilerplate_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130304', true );
}
add_action( 'customize_preview_init', 'uwp_boilerplate_customize_preview_js' );
