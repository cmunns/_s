<?php
/**
 * _s Theme Customizer.
 *
 * @package _s
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function _s_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', '_s_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function _s_customize_preview_js() {
	wp_enqueue_script( '_s_customizer', get_template_directory_uri() . '/inc/customizer/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', '_s_customize_preview_js' );

/**
 * Add the theme configuration
 */
_s_Kirki::add_config( '_s_theme', array(
	'option_type' => 'theme_mod',
	'capability'  => 'edit_theme_options',
) );

/**
 * Add the kirki sections
 */
_s_Kirki::add_section( 'typography', array(
	'title'      => esc_attr__( 'Typography', '_s' ),
	'priority'   => 20,
	'capability' => 'edit_theme_options',
) );

_s_Kirki::add_section( 'layout', array(
	'title'      => esc_attr__( 'Layout', '_s' ),
	'priority'   => 25,
	'capability' => 'edit_theme_options',
) );

_s_Kirki::add_section( 'header', array(
	'title'      => esc_attr__( 'Header', '_s' ),
	'priority'   => 30,
	'capability' => 'edit_theme_options',
) );

_s_Kirki::add_section( 'forms', array(
	'title'      => esc_attr__( 'Forms', '_s' ),
	'priority'   => 35,
	'capability' => 'edit_theme_options',
) );

require get_template_directory() . '/inc/customizer/settings-typography.php';
require get_template_directory() . '/inc/customizer/settings-header.php';
require get_template_directory() . '/inc/customizer/settings-background.php';
require get_template_directory() . '/inc/customizer/settings-layout.php';
require get_template_directory() . '/inc/customizer/settings-forms.php';
