<?php
// Register Custom Post Type
function caetano_cars() {

	$labels = array(
		'name'                  => _x( 'Cars', 'Post Type General Name', 'caetano' ),
		'singular_name'         => _x( 'Car', 'Post Type Singular Name', 'caetano' ),
		'menu_name'             => __( 'Cars', 'caetano' ),
		'name_admin_bar'        => __( 'Car', 'caetano' ),
		'archives'              => __( 'Car Archives', 'caetano' ),
		'attributes'            => __( 'Car Attributes', 'caetano' ),
		'parent_item_colon'     => __( 'Parent Car:', 'caetano' ),
		'all_items'             => __( 'All Cars', 'caetano' ),
		'add_new_item'          => __( 'Add New Car', 'caetano' ),
		'add_new'               => __( 'Add New', 'caetano' ),
		'new_item'              => __( 'New Car', 'caetano' ),
		'edit_item'             => __( 'Edit Car', 'caetano' ),
		'update_item'           => __( 'Update Car', 'caetano' ),
		'view_item'             => __( 'View Car', 'caetano' ),
		'view_items'            => __( 'View Car', 'caetano' ),
		'search_items'          => __( 'Search Car', 'caetano' ),
		'not_found'             => __( 'Not found', 'caetano' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'caetano' ),
		'featured_image'        => __( 'Featured Image', 'caetano' ),
		'set_featured_image'    => __( 'Set featured image', 'caetano' ),
		'remove_featured_image' => __( 'Remove featured image', 'caetano' ),
		'use_featured_image'    => __( 'Use as featured image', 'caetano' ),
		'insert_into_item'      => __( 'Insert into Car', 'caetano' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Car', 'caetano' ),
		'items_list'            => __( 'Cars list', 'caetano' ),
		'items_list_navigation' => __( 'Cars list navigation', 'caetano' ),
		'filter_items_list'     => __( 'Filter cars list', 'caetano' ),
	);
	$args   = array(
		'label'               => __( 'Car', 'caetano' ),
		'description'         => __( 'Cars to display in slider', 'caetano' ),
		'labels'              => $labels,
		'supports'            => array( 'title' ),
		// 'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-dashboard',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'cars', $args );

}
add_action( 'init', 'caetano_cars', 0 );
