<?php
_s_Kirki::add_field( '_s_theme', array(
	'type'        => 'slider',
	'settings'    => 'content_max_width',
	'label'       => esc_html__( 'Maximum Content Width', '_s_theme' ),
	'section'     => 'layout',
	'default'     => '1080',
	'priority'    => 10,
	'choices'     => array(
		'min'  => 600,
		'max'  => 2000,
		'step' => 5,
	),
	'output' 	  => array(
		'element'  => '.wrap',
		'property' => 'width',
		'units' => 'px'
	),
	'transport'   => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '.wrap',
			'function' => 'css',
			'property' => 'width',
			'units' => 'px'
		),
	)
));

_s_Kirki::add_field( '_s_theme', array(
	'type'        => 'checkbox',
	'settings'    => 'wrap_main_content_bool',
	'label'       => __( 'Wrap Main Content', '_s_theme' ),
	'section'     => 'layout',
	'default'     => '1',
	'priority'    => 10,
) );

_s_Kirki::add_field( '_s_theme', array(
	'type'        => 'slider',
	'settings'    => 'site_padding',
	'label'       => esc_html__( 'Site Gutter Width', '_s_theme' ),
	'section'     => 'layout',
	'default'     => '20',
	'priority'    => 12,
	'choices'     => array(
		'min'  => 0,
		'max'  => 200,
		'step' => 5,
	),
	'output' => array(
		array(
			'element'  => '.wrap',
			'property' => 'padding-left',
			'units'    => 'px',
		),
		array(
			'element'  => '.wrap',
			'property' => 'padding-right',
			'units'    => 'px',
		),
	),
	'transport'   => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '.wrap',
			'function' => 'css',
			'property' => 'padding-left',
			'units' => 'px'
		),
		array(
			'element'  => '.wrap',
			'function' => 'css',
			'property' => 'padding-right',
			'units' => 'px'
		),
	)
));

_s_Kirki::add_field( '_s_theme', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'header_type',
	'label'       => __( 'Header Type', '_s_theme' ),
	'section'     => 'layout',
	'default'     => 'normal',
	'priority'    => 12,
	'choices'     => array(
		'normal'   => esc_attr__( 'Normal', '_s_theme' ),
		'fixed' => esc_attr__( 'Fixed', '_s_theme' ),
	),
	'output' => array(
		array(
			'element'  => '.site-header',
			'property' => 'position',
		),
		array(
			'element'  => '.site-header',
			'property' => 'width',
			'value_pattern' => '100',
			'units'   => '%'
		),
	),
	'transport'   => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '.site-header',
			'function' => 'css',
			'property' => 'position',
		),
		array(
			'element'  => '.site-header',
			'function' => 'css',
			'property' => 'width',
			'value_pattern' => '100',
			'units'   => '%'
		),
	)
) );




?>