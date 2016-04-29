<?php

_s_Kirki::add_field( '_s_theme', array(
	'type'        => 'image',
	'settings'    => 'header_logo',
	'label'       => __( 'Site Logo', '_s_theme' ),
	'description' => __( 'Upload a custom logo image', '_s_theme' ),
	// 'help'        => __( 'This is some extra help text.', 'my_textdomain' ),
	'section'     => 'header',
	'default'     => '',
	'priority'    => 10,
) );

_s_Kirki::add_field( '_s_theme', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'header_type',
	'label'       => __( 'Header Type', '_s_theme' ),
	'section'     => 'header',
	'default'     => 'normal',
	'priority'    => 10,
	'choices'     => array(
		'normal'   => esc_attr__( 'Normal', '_s_theme' ),
		'fixed' => esc_attr__( 'Fixed', '_s_theme' ),
	),
) );

?>