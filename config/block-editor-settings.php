<?php
/**
 * Block Editor settings specific to Caetano.
 *
 * @package Caetano
 * @author  Max Terbeck
 * @license GPL-2.0-or-later
 * @link    https://www.targetimc.com/
 */

$caetano_link_color            = get_theme_mod( 'caetano_link_color', caetano_customizer_get_default_link_color() );
$caetano_link_color_contrast   = caetano_color_contrast( $caetano_link_color );
$caetano_link_color_brightness = caetano_color_brightness( $caetano_link_color, 35 );

return array(
	'admin-fonts-url'              => 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700',
	'content-width'                => 1062,
	'default-button-bg'            => $caetano_link_color,
	'default-button-color'         => $caetano_link_color_contrast,
	'default-button-outline-hover' => $caetano_link_color_brightness,
	'default-link-color'           => $caetano_link_color,
	'editor-color-palette'         => array(
		array(
			'name'  => __( 'Custom color', 'caetano' ), // Called “Link Color” in the Customizer options. Renamed because “Link Color” implies it can only be used for links.
			'slug'  => 'theme-primary',
			'color' => get_theme_mod( 'caetano_link_color', caetano_customizer_get_default_link_color() ),
		),
		array(
			'name'  => __( 'Accent color', 'caetano' ),
			'slug'  => 'theme-secondary',
			'color' => get_theme_mod( 'caetano_accent_color', caetano_customizer_get_default_accent_color() ),
		),
	),
	'editor-font-sizes'            => array(
		array(
			'name' => __( 'Small', 'caetano' ),
			'size' => 12,
			'slug' => 'small',
		),
		array(
			'name' => __( 'Normal', 'caetano' ),
			'size' => 18,
			'slug' => 'normal',
		),
		array(
			'name' => __( 'Large', 'caetano' ),
			'size' => 20,
			'slug' => 'large',
		),
		array(
			'name' => __( 'Larger', 'caetano' ),
			'size' => 24,
			'slug' => 'larger',
		),
	),
);
