<?php
// Registers the new post type 

function violet_portfolio_posttype() {
	register_post_type( 'portfolio',
		array(
			'labels' => array(
				'name' => __( 'Portfolio', 'violet-plugin' ),
				'singular_name' => __( 'Portfolio' , 'violet-plugin'),
				'add_new' => __( 'Add New Portfolio', 'violet-plugin' ),
				'add_new_item' => __( 'Add New Portfolio', 'violet-plugin' ),
				'edit_item' => __( 'Edit Portfolio', 'violet-plugin' ),
				'new_item' => __( 'Add New Portfolio', 'violet-plugin' ),
				'view_item' => __( 'View Portfolio', 'violet-plugin' ),
				'search_items' => __( 'Search Portfolio', 'violet-plugin' ),
				'not_found' => __( 'No Portfolio found', 'violet-plugin' ),
				'not_found_in_trash' => __( 'No Portfolio found in trash', 'violet-plugin' )
			),
			'menu_icon' => 'dashicons-groups',
			'public' => true,
			'supports' => array( 'title', 'thumbnail'),
			'capability_type' => 'post',
			'rewrite' => array("slug" => "portfolio"), // Permalinks format
			'menu_position' => 5,
			'exclude_from_search' => true 
		)
	);
	flush_rewrite_rules( false );
}

add_action( 'init', 'violet_portfolio_posttype' );

//add taxonomies(portfolio category)
function violet_taxonomies_portfolio() {
	$labels = array(
		'name'              => _x( 'Portfolio Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Portfolio Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Portfolio Categories' ),
		'all_items'         => __( 'All Portfolio Categories' ),
		'parent_item'       => __( 'Parent Portfolio Category' ),
		'parent_item_colon' => __( 'Parent Portfolio Category:' ),
		'edit_item'         => __( 'Edit Portfolio Category' ), 
		'update_item'       => __( 'Update Portfolio Category' ),
		'add_new_item'      => __( 'Add New Portfolio Category' ),
		'new_item_name'     => __( 'New Portfolio Category' ),
		'menu_name'         => __( 'Portfolio Categories' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
	);
	register_taxonomy( 'portfolio_category', 'portfolio', $args );
}
add_action( 'init', 'violet_taxonomies_portfolio', 0 );
