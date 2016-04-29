<?php
_s_Kirki::add_field( '_s_theme', array(
	'type'        => 'radio',
	'settings'    => 'background_image_size',
	'label'       => __( 'Background Size', '_s_theme' ),
	'section'     => 'background_image',
	'default'     => 'cover',
	'priority'    => 50,
	'choices'     => array(
		'auto'   => esc_attr__( 'Normal', 'my_textdomain' ),
		'cover' => esc_attr__( 'Cover', 'my_textdomain' ),
		'contain'  => esc_attr__( 'Contain', 'my_textdomain' ),
	),
	'output' 	  => array(
		'element'  => 'body',
		'property' => 'background-size',
	),
	'transport'   => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => 'body',
			'function' => 'css',
			'property' => 'background-size',
		),
	)
) );
?>