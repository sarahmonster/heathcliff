<?php
/**
 * Style Packs configuration.
 *
 * @package Radcliffe 2
 */

new Style_Packs_Core( array(

	// Format to use for active style pack body class
	'body_class_format' => 'style-pack-%s',

	// Style packs directory
	'styles_directory' => 'styles',

	// Javascripts directory
	'js_directory' => 'assets/js',

	// Use thumbnails
	'style_thumbs' => array(
		'width'  => 285/2,
		'height' => 200/2,
	),

	// Style declarations
	'styles'  => array(
		'modern'  => esc_html__( 'Modern', 'radcliffe-2' ),
		'vintage'  => esc_html__( 'Vintage', 'radcliffe-2' ),
		'colorful'  => esc_html__( 'Colorful', 'radcliffe-2' ),
	),

	// Font loading for style packs
	'fonts' => array(
		'vintage' => array(
			'Libre Baskerville' => 'https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700',
		),
		'modern' => array(
			'Montserrat' => 'https://fonts.googleapis.com/css?family=Montserrat:400,400italic,700,700italic',
			'Source Sans Pro' => 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700,700italic',
		),
		'colorful' => array(
			'Karla' => 'https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic',
			'Inconsolata' => 'https://fonts.googleapis.com/css?family=Inconsolata:400,700',
		),
	),

) );
