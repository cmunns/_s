<?php
Kirki::add_field( '_s_theme', array(
	'type'        => 'slider',
	'settings'    => 'content_max_width',
	'label'       => esc_html__( 'Maximum Content Width', 'my_textdomain' ),
	'section'     => 'layout',
	'default'     => '1080',
	'priority'    => 10,
	'choices'     => array(
		'min'  => 600,
		'max'  => 2000,
		'step' => 1,
	),
	'output' 	  => array(
		'element'  => '.site',
		'property' => 'width',
		'units' => 'px'
	),
	'transport'   => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '.site',
			'function' => 'css',
			'property' => 'width',
			'units' => 'px'
		),
	)
));
?>