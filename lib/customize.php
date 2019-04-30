<?php
/**
 * Caetano.
 *
 * This file adds the Customizer additions to the Caetano Theme.
 *
 * @package Caetano
 * @author  Max Terbeck
 * @license GPL-2.0-or-later
 * @link    https://www.targetimc.com/
 */

add_action( 'customize_register', 'caetano_customizer_register' );
/**
 * Registers settings and controls with the Customizer.
 *
 * @since 2.2.3
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function caetano_customizer_register( $wp_customize ) {

	$wp_customize->add_setting(
		'caetano_link_color',
		array(
			'default'           => caetano_customizer_get_default_link_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'caetano_link_color',
			array(
				'description' => __( 'Change the color of post info links and button blocks, the hover color of linked titles and menu items, and more.', 'caetano' ),
				'label'       => __( 'Link Color', 'caetano' ),
				'section'     => 'colors',
				'settings'    => 'caetano_link_color',
			)
		)
	);

	$wp_customize->add_setting(
		'caetano_accent_color',
		array(
			'default'           => caetano_customizer_get_default_accent_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'caetano_accent_color',
			array(
				'description' => __( 'Change the default hover color for button links, menu buttons, and submit buttons. The button block uses the Link Color.', 'caetano' ),
				'label'       => __( 'Accent Color', 'caetano' ),
				'section'     => 'colors',
				'settings'    => 'caetano_accent_color',
			)
		)
	);

	$wp_customize->add_setting(
		'caetano_logo_width',
		array(
			'default'           => 350,
			'sanitize_callback' => 'absint',
		)
	);

	// Add a control for the logo size.
	$wp_customize->add_control(
		'caetano_logo_width',
		array(
			'label'       => __( 'Logo Width', 'caetano' ),
			'description' => __( 'The maximum width of the logo in pixels.', 'caetano' ),
			'priority'    => 9,
			'section'     => 'title_tagline',
			'settings'    => 'caetano_logo_width',
			'type'        => 'number',
			'input_attrs' => array(
				'min' => 100,
			),

		)
	);

}
