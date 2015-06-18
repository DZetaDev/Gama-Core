<?php

/**
 * Add Custom post types
 */
function gama_core_custom_post_types() {

	// Testimonials
	$labels = array(
		'name'               => __( 'Testimonials', 'gama-core' ),
		'singular_name'      => __( 'Testimonial', 'gama-core' ),
		'menu_name'          => __( 'Testimonials', 'gama-core' ),
		'name_admin_bar'     => __( 'Testimonial', 'gama-core' ),
		'add_new_item'       => __( 'Add New Testimonial', 'gama-core' ),
		'new_item'           => __( 'New Testimonial', 'gama-core' ),
		'edit_item'          => __( 'Edit Testimonial', 'gama-core' ),
		'view_item'          => __( 'View Testimonial', 'gama-core' ),
		'all_items'          => __( 'All Testimonials', 'gama-core' ),
		'search_items'       => __( 'Search Testimonials', 'gama-core' ),
		'parent_item_colon'  => __( 'Parent Testimonials:', 'gama-core' ),
		'not_found'          => __( 'No testimonials found.', 'gama-core' ),
		'not_found_in_trash' => __( 'No testimonials found in Trash.', 'gama-core' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_icon'          => 'dashicons-id-alt',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'testimonials' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);
	register_post_type( 'testimonials', $args );

	// Team
	$labels = array(
		'name'               => __( 'Members Team', 'gama-core' ),
		'singular_name'      => __( 'Team', 'gama-core' ),
		'menu_name'          => __( 'Team', 'gama-core' ),
		'name_admin_bar'     => __( 'Team', 'gama-core' ),
		'add_new_item'       => __( 'Add New Member Team', 'gama-core' ),
		'new_item'           => __( 'New  Member Team', 'gama-core' ),
		'edit_item'          => __( 'Edit Team', 'gama-core' ),
		'view_item'          => __( 'View Team', 'gama-core' ),
		'all_items'          => __( 'All Members Team', 'gama-core' ),
		'search_items'       => __( 'Search Members Team', 'gama-core' ),
		'parent_item_colon'  => __( 'Parent Members Team:', 'gama-core' ),
		'not_found'          => __( 'No members team found.', 'gama-core' ),
		'not_found_in_trash' => __( 'No members team found in Trash.', 'gama-core' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_icon'          => 'dashicons-id-alt',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'team' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);
	register_post_type( 'team', $args );

	// Portfolio
	$labels = array(
		'name'               => __( 'Portfolio', 'gama-core' ),
		'singular_name'      => __( 'Portfolio', 'gama-core' ),
		'menu_name'          => __( 'Portfolios', 'gama-core' ),
		'name_admin_bar'     => __( 'Portfolio', 'gama-core' ),
		'add_new_item'       => __( 'Add New Portfolio Item', 'gama-core' ),
		'new_item'           => __( 'New Portfolio', 'gama-core' ),
		'edit_item'          => __( 'Edit Portfolio', 'gama-core' ),
		'view_item'          => __( 'View Portfolio', 'gama-core' ),
		'all_items'          => __( 'All Portfolios', 'gama-core' ),
		'search_items'       => __( 'Search Portfolio Items', 'gama-core' ),
		'parent_item_colon'  => __( 'Parent Portfolios:', 'gama-core' ),
		'not_found'          => __( 'No Portfolios found.', 'gama-core' ),
		'not_found_in_trash' => __( 'No Portfolios found in Trash.', 'gama-core' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_icon'          => 'dashicons-id-alt',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' )
	);

	register_post_type( 'portfolio', $args );

	// Custom taxonomy for Portfolio Category
	$labels = array(
		'name'          => __( 'Portfolio Categories', 'gama-core' ),
		'singular_name' => __( 'Portfolio Category', 'gama-core' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'show_ui'            => true,
		'show_in_nav_menus'  => false,
		'query_var'          => true,
		'rewrite' => array(
			'slug'           => 'portfolio-category',
			'with_front'     => false,
			'hierarchical'   => true,
		),
		'args'               => array(
			'orderby' => 'term_order'
		),
		'show_admin_column'  => true,
	);

	register_taxonomy( 'portfolio-category', 'portfolio', $args );

	// Custom taxonomy for Portfolio Tags
	$labels = array(
		'name'          => __( 'Portfolio Tags', 'gama-core' ),
		'singular_name' => __( 'Portfolio Tag', 'gama-core' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'show_ui'            => true,
		'show_in_nav_menus'  => false,
		'query_var'          => true,
		'rewrite' => array(
			'slug'           => 'portfolio-tag',
			'with_front'     => false,
			'hierarchical'   => false,
		),
		'args'               => array(
			'orderby' => 'term_order'
		),
		'show_admin_column'  => true
	);

	register_taxonomy( 'portfolio-tag', 'portfolio', $args );

	// Review
	$labels = array(
		'name'               => __( 'Reviews', 'gama-core' ),
		'singular_name'      => __( 'Review', 'gama-core' ),
		'menu_name'          => __( 'Reviews', 'gama-core' ),
		'name_admin_bar'     => __( 'Review', 'gama-core' ),
		'add_new_item'       => __( 'Add New Review', 'gama-core' ),
		'new_item'           => __( 'New Review', 'gama-core' ),
		'edit_item'          => __( 'Edit Review', 'gama-core' ),
		'view_item'          => __( 'View Review', 'gama-core' ),
		'all_items'          => __( 'All Reviews', 'gama-core' ),
		'search_items'       => __( 'Search Reviews', 'gama-core' ),
		'parent_item_colon'  => __( 'Parent Reviews:', 'gama-core' ),
		'not_found'          => __( 'No reviews found.', 'gama-core' ),
		'not_found_in_trash' => __( 'No reviews found in Trash.', 'gama-core' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'reviews' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'menu_icon'          => 'dashicons-star-half',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'review', $args );

	// Custom taxonomy for Review Category
	$labels = array(
		'name'          => __( 'Review Categories', 'gama-core' ),
		'singular_name' => __( 'Review Category', 'gama-core' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'show_ui'            => true,
		'show_in_nav_menus'  => false,
		'query_var'          => true,
		'rewrite' => array(
			'slug'           => 'review-category',
			'with_front'     => false,
			'hierarchical'   => true,
		),
		'args'               => array(
			'orderby' => 'term_order'
		),
		'show_admin_column'  => true,
	);

	register_taxonomy( 'review-category', 'review', $args );

	// Custom taxonomy for Review Tags
	$labels = array(
		'name'          => __( 'Review Tags', 'gama-core' ),
		'singular_name' => __( 'Review Tag', 'gama-core' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'show_ui'            => true,
		'show_in_nav_menus'  => false,
		'query_var'          => true,
		'rewrite' => array(
			'slug'           => 'review-tag',
			'with_front'     => false,
			'hierarchical'   => false,
		),
		'args'               => array(
			'orderby' => 'term_order'
		),
		'show_admin_column'  => true,
	);

	register_taxonomy( 'review-tag', 'review', $args );

	// Type of Product/Service taxonomy
	$labels = array(
		'name'              => __( 'Type of Products/Services', 'gama-core' ),
		'singular_name'     => __( 'Type of Product/Service', 'gama-core' ),
		'search_items'      => __( 'Search Types of Products/Services', 'gama-core' ),
		'all_items'         => __( 'All Types of Products/Services', 'gama-core' ),
		'parent_item'       => __( 'Parent Type of Product/Service', 'gama-core' ),
		'parent_item_colon' => __( 'Parent Type of Product/Service:', 'gama-core' ),
		'edit_item'         => __( 'Edit Type of Product/Service', 'gama-core' ),
		'update_item'       => __( 'Update Type of Product/Service', 'gama-core' ),
		'add_new_item'      => __( 'Add New Type of Product/Service', 'gama-core' ),
		'new_item_name'     => __( 'New Type of Product/Service Name', 'gama-core' ),
		'menu_name'         => __( 'Type of Product/Service', 'gama-core' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'product-types' ),
	);

	register_taxonomy( 'product-type', array( 'review' ), $args );

}

function gama_rewrite_flush() {
	gama_core_custom_post_types();
	flush_rewrite_rules();
}