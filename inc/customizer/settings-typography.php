<?php
/**
* Add the typography controls
*/
_s_Kirki::add_field( '_s_theme', array(
	'type'        => 'typography',
	'settings'    => 'body_typography',
	'label'       => esc_attr__( 'Body Typography', '_s' ),
	'description' => esc_attr__( 'Select the main typography options for your site.', '_s' ),
	'help'        => esc_attr__( 'The typography options you set here apply to all content on your site.', '_s' ),
	'section'     => 'typography',
	'priority'    => 10,
	'default'     => array(
		'font-family'    => 'Volkorn',
		'variant'        => '400',
		'font-size'      => '18px',
		'line-height'    => '1.5',
		// 'letter-spacing' => '0',
		'color'          => '#333333',
	),
	'output' => array(
		array(
			'element' => 'body',
		),
	),
) );


_s_Kirki::add_field( '_s_theme', array(
	'type'        => 'typography',
	'settings'    => 'headers_typography',
	'label'       => esc_attr__( 'Headers Typography', '_s' ),
	'description' => esc_attr__( 'Select the typography options for your headers.', '_s' ),
	'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).', '_s' ),
	'section'     => 'typography',
	'priority'    => 10,
	'default'     => array(
		'font-family'    => 'Open Sans',
		'variant'        => '600',
		// 'font-size'      => '16px',
		// 'line-height'    => '1.5',
		// 'letter-spacing' => '0',
		// 'color'          => '#333333',
	),
	'output' => array(
		array(
			'element' => array( 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', '.h1', '.h2', '.h3', '.h4', '.h5', '.h6' ),
		),
	),
) );
?>