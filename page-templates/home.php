<?php
/*
  Template Name: Home Page
 */

/**
 * Add attributes for site-inner element.
 *
 * @since 2.0.0
 *
 * @param array $attributes Existing attributes.
 *
 * @return array Amended attributes.
 */
add_filter( 'genesis_attr_site-inner', 'caetano_attributes_site_inner' );

function caetano_attributes_site_inner( $attributes ) {
	$attributes['role']     = 'main';
	$attributes['itemprop'] = 'mainContentOfPage';
	return $attributes;
}

// Remove div.site-inner's div.wrap
add_filter( 'genesis_structural_wrap-site-inner', '__return_empty_string' );

// Force full width content layout.
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

// Remove the breadcrumb navigation.
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

// Remove Page Title.
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

// Do not show Featured image if set in Theme Settings > Content Archives.
add_filter( 'genesis_pre_get_option_content_archive_thumbnail', '__return_false' );

// * Remove the post content
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
remove_action( 'genesis_loop', 'genesis_do_loop' );

// * Remove .site-inner
add_filter( 'genesis_markup_site-inner', '__return_null' );
add_filter( 'genesis_markup_content-sidebar-wrap', '__return_null' );
add_filter( 'genesis_markup_content', '__return_null' );

// Add custom body class
add_filter( 'body_class', 'caetano_home_body_class' );

function caetano_home_body_class( $classes ) {
	$classes[] = 'caetano-home';
	return $classes;
}

/**
 *  Hero Slider
 */
function caetano_hero_slider() {
	$shortcode = get_field( 'hero_slider' );

	if ( $shortcode ) {
		echo '<div id="hero-slider">';
		echo do_shortcode( $shortcode );
		echo '</div>';
	}

}

// * Add custom Slider + Header wrapper's opening div tag
add_action( 'genesis_before_header', 'caetano_hero_slider_opening_div' );

function caetano_hero_slider_opening_div() {

	echo '<div class="slider-header-wrapper">';

}

// * Add custom Slider + Header wrapper's closing div tag
add_action( 'genesis_after_header', 'caetano_hero_slider_closing_div' );

function caetano_hero_slider_closing_div() {
	echo caetano_hero_slider();

	echo '</div>';
}

/**
 *  Add Car Logos
 */
add_action( 'genesis_after_header', 'caetano_home_car_logos', 20 );

function caetano_home_car_logos() {
	echo '<div id="car-logos">';
	echo caetano_car_logos();
	echo '</div>';
}

/**
 *  Add Car Form
 */
add_action( 'genesis_after_header', 'caetano_home_form', 30 );

function caetano_home_form() {
	echo '<div id="busca-oferta">';
	echo caetano_form_busqueda();
	echo '</div>';
}

/**
 *  Add Car Carousel
 */
add_action( 'genesis_after_header', 'caetano_home_cars_carousel', 40 );

function caetano_home_cars_carousel() {
	echo '<div id="cars-carousel">';
	echo '<div class="wrap">';
	echo caetano_cars_carousel();
	echo '</div>';
	echo '</div>';
}

/**
 *  Add CTA 1
 */
add_action( 'genesis_after_header', 'caetano_home_cta1', 50 );

function caetano_home_cta1() {
	echo '<div id="cta1">';
	echo caetano_cta1();
	echo '</div>';
}

/**
 *  Add Tagline
 */
add_action( 'genesis_after_header', 'caetano_home_tagline', 60 );

function caetano_home_tagline() {
	echo '<div id="tagline">';
	echo caetano_tagline();
	echo '</div>';
}

/**
 *  Add Customer Type
 */
add_action( 'genesis_after_header', 'caetano_home_customer', 70 );

function caetano_home_customer() {
	echo '<div id="customer">';
	echo caetano_tipo_cliente();
	echo '</div>';
}

/**
 *  Add About us
 */
add_action( 'genesis_after_header', 'caetano_home_about_us', 80 );

function caetano_home_about_us() {
	echo '<div id="about">';
	echo caetano_about_us();
	echo '</div>';
}

/**
 *  Add CTA2
 */
add_action( 'genesis_after_header', 'caetano_home_cta2', 90 );

function caetano_home_cta2() {
	echo '<div id="cta2">';
	echo caetano_cta2();
	echo '</div>';
}

/**
 *  Add Concesionarios
 */
add_action( 'genesis_after_header', 'caetano_home_concesionarios', 100 );

function caetano_home_concesionarios() {
	echo '<div id="concesionarios">';
	echo caetano_concesionarios();
	echo '</div>';
}

/**
 *  Add Dudas
 */
add_action( 'genesis_after_header', 'caetano_home_dudas', 110 );

function caetano_home_dudas() {
	echo '<div id="dudas">';
	echo caetano_dudas();
	echo '</div>';
}

genesis();
