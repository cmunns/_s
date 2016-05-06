<?php

$inputs = array(
	'input[type="text"]',
	'input[type="email"]',
	'input[type="url"]',
	'input[type="password"]',
	'input[type="search"]',
	'input[type="number"]',
	'input[type="tel"]',
	'input[type="range"]',
	'input[type="date"]',
	'input[type="month"]',
	'input[type="week"]',
	'input[type="time"]',
	'input[type="datetime"]',
	'input[type="datetime-local"]',
	'input[type="color"]',
	'textarea',
	'.gform_wrapper .textarea'
);

$inputsf = array_map(function($input){
	return $input.':focus';
}, $inputs);

$inputsh = array_map(function($input){
	return 'body '.$input.', body .gform_wrapper '.$input;
}, $inputs);

_s_Kirki::add_field( '_s_theme', array(
	'type'        => 'color',
	'settings'    => 'form_input_bg',
	'label'       => __( 'Forms Background', '_s_theme' ),
	'section'     => 'forms',
	'default'     => '#eeeeee',
	'priority'    => 10,
	'alpha'       => true,
	'output' => array(
		array(
			'element'  => $inputs,
			'property' => 'background',
		),
	),
	'transport'   => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => $inputs,
			'function' => 'css',
			'property' => 'background',
		),
	)
) );

_s_Kirki::add_field( '_s_theme', array(
	'type'        => 'color',
	'settings'    => 'form_input_bg_focus',
	'label'       => __( 'Forms Background (:focus)', '_s_theme' ),
	'section'     => 'forms',
	'default'     => '#ffffff',
	'priority'    => 10,
	'alpha'       => true,
	'output' => array(
		array(
			'element'  => $inputsf,
			'property' => 'background',
		),
	),
	'transport'   => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => $inputsf,
			'function' => 'style',
			'property' => 'background',
		),
	)
) );


_s_Kirki::add_field( '_s_theme', array(
	'type'        => 'color',
	'settings'    => 'form_input_border_color',
	'label'       => __( 'Forms Border Color', '_s_theme' ),
	'section'     => 'forms',
	'default'     => 'rgba(255,255,255,1)',
	'priority'    => 10,
	'alpha'       => true,
	'output' => array(
		array(
			'element'  => $inputs,
			'property' => 'border-color',
		),
	),
	'transport'   => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => $inputs,
			'function' => 'css',
			'property' => 'border-color',
		),
	)
) );

_s_Kirki::add_field( '_s_theme', array(
	'type'        => 'color',
	'settings'    => 'form_input_border_color_focus',
	'label'       => __( 'Forms Border Color (:focus)', '_s_theme' ),
	'section'     => 'forms',
	'default'     => 'rgba(0,0,0,.8)',
	'priority'    => 10,
	'alpha'       => true,
	'output' => array(
		array(
			'element'  => $inputsf,
			'property' => 'border-color',
		),
	),
	'transport'   => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => $inputsf,
			'function' => 'style',
			'property' => 'border-color',
		),
	)
) );

_s_Kirki::add_field( '_s_theme', array(
	'type'        => 'slider',
	'settings'    => 'form_input_border_width',
	'label'       => __( 'Forms Border Width', '_s_theme' ),
	'section'     => 'forms',
	'default'     => '1',
	'choices'     => array(
		'min'  => 0,
		'max'  => 20,
		'step' => 1,
	),
	'output' => array(
		array(
			'element'  => $inputs,
			'property' => 'border-width',
			'units'    => 'px',
		),
	),
	'transport'   => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => $inputs,
			'function' => 'css',
			'property' => 'border-width',
			'units'    => 'px',
		),
	)
) );


_s_Kirki::add_field( '_s_theme', array(
	'type'        => 'spacing',
	'settings'    => 'form_input_padding',
	'label'       => __( 'Forms Padding', '_s_theme' ),
	'section'     => 'forms',
	'default'     => array(
		'top'    => '8px',
		'bottom' => '8px',
		'left'   => '8px',
		'right'  => '8px',
	),
	'output' => array(
		array(
			'element'  => $inputsh,
			'prefix'   => 'body',
			'property' => 'padding',
		),
	),
	'transport'   => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => $inputsh,
			'function' => 'style',
			'prefix'   => 'body',
			'property' => 'padding',
		),
	)
) );

?>