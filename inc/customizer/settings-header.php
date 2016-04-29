<?php
_s_Kirki::add_field( '_s_theme', array(
	'type'        => 'color',
	'settings'    => 'header_bg',
	'label'       => __( 'Header Background', '_s_theme' ),
	'section'     => 'header',
	'default'     => 'rgba(0,0,0,.8)',
	'priority'    => 10,
	'alpha'       => true,
	'output' => array(
		array(
			'element'  => '.site-header',
			'property' => 'background-color',
		),
	),
	'transport'   => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '.site-header',
			'function' => 'css',
			'property' => 'background-color',
		),
	)
) );


Kirki::add_field( '_s_theme', array(
	'type'        => 'slider',
	'settings'    => 'site_content_padding_top',
	'label'       => esc_html__( 'Site Content Spacer', '_s_theme' ),
	'section'     => 'header',
	'default'     => '20',
	'priority'    => 10,
	'choices'     => array(
		'min'  => 0,
		'max'  => 200,
		'step' => 5,
	),
	'output' => array(
		array(
			'element'  => '.site-content',
			'property' => 'padding-top',
			'units'    => 'px',
		),
	),
	'transport'   => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '.site-content',
			'property' => 'padding-top',
			'function' => 'css',
			'units' => 'px'
		),
	)
));


Kirki::add_field( '_s_theme', array(
	'type'        => 'slider',
	'settings'    => 'site_header_padding',
	'label'       => esc_html__( 'Header Padding', '_s_theme' ),
	'section'     => 'header',
	'default'     => '20',
	'priority'    => 10,
	'choices'     => array(
		'min'  => 0,
		'max'  => 200,
		'step' => 5,
	),
	'output' => array(
		array(
			'element'  => '.site-header',
			'property' => 'padding-top',
			'units'    => 'px',
		),
		array(
			'element'  => '.site-header',
			'property' => 'padding-bottom',
			'units'    => 'px',
		),
	),
	'transport'   => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '.site-header',
			'property' => 'padding-top',
			'function' => 'css',
			'units' => 'px'
		),
		array(
			'element'  => '.site-header',
			'property' => 'padding-bottom',
			'function' => 'css',
			'units' => 'px'
		),
	)
));

_s_Kirki::add_field( '_s_theme', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'header_nav_width',
	'label'       => __( 'Nav Width', '_s_theme' ),
	'section'     => 'header',
	'default'     => 'auto',
	'priority'    => 10,
	'choices'     => array(
		'auto' => esc_attr__( 'Auto', '_s_theme' ),
		'100%' => esc_attr__( 'Full', '_s_theme' ),
	),
	'output' => array(
		array(
			'element'  => '#site-navigation',
			'property' => 'width',
		)
	),
	'transport'   => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '#site-navigation',
			'function' => 'css',
			'property' => 'width',
		),
	)
) );


_s_Kirki::add_field( '_s_theme', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'header_nav_position',
	'label'       => __( 'Nav Position', '_s_theme' ),
	'section'     => 'header',
	'default'     => 'left',
	'priority'    => 10,
	'choices'     => array(
		'left' => esc_attr__( 'Left', '_s_theme' ),
		'right' => esc_attr__( 'Right', '_s_theme' ),
	),
	'output' => array(
		array(
			'element'  => '#site-navigation',
			'property' => 'float',
		)
	),
	'transport'   => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '#site-navigation',
			'function' => 'css',
			'property' => 'float',
		),
	)
) );

_s_Kirki::add_field( '_s_theme', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'header_nav_li_position',
	'label'       => __( 'Nav Position', '_s_theme' ),
	'section'     => 'header',
	'default'     => 'left',
	'priority'    => 10,
	'choices'     => array(
		'left' => esc_attr__( 'Left', '_s_theme' ),
		'right' => esc_attr__( 'Right', '_s_theme' ),
	),
	'output' => array(
		array(
			'element'  => '#site-navigation li',
			'property' => 'float',
		)
	),
	'transport'   => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '#site-navigation li',
			'function' => 'css',
			'property' => 'float',
		),
	)
) );

?>