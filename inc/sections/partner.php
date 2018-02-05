<?php
// Registers the new post type 

function violet_partner_posttype() {
	register_post_type( 'partner',
		array(
			'labels' => array(
				'name'               => _x( 'Partners', 'post type general name', 'violet-plugin' ),
				'singular_name'      => _x( 'Partner', 'post type singular name', 'violet-plugin' ),
				'menu_name'          => _x( 'Partners', 'admin menu', 'violet-plugin' ),
				'name_admin_bar'     => _x( 'Partner', 'add new on admin bar', 'violet-plugin' ),
				'add_new'            => _x( 'Add New', 'Partner', 'violet-plugin' ),
				'add_new_item'       => __( 'Add New Partner', 'violet-plugin' ),
				'new_item'           => __( 'New Partner', 'violet-plugin' ),
				'edit_item'          => __( 'Edit Partner', 'violet-plugin' ),
				'view_item'          => __( 'View Partner', 'violet-plugin' ),
				'all_items'          => __( 'All Partners', 'violet-plugin' ),
				'search_items'       => __( 'Search Partners', 'violet-plugin' ),
				'parent_item_colon'  => __( 'Parent Partners:', 'violet-plugin' ),
				'not_found'          => __( 'No Partners found.', 'violet-plugin' ),
				'not_found_in_trash' => __( 'No Partners found in Trash.', 'violet-plugin' )
			),
			'menu_icon' => 'dashicons-businessman',
			'supports' => array( 'title','thumbnail' ),
			'rewrite' => array("slug" => "partner"), // Permalinks format
			'public' => true,
			'has_archive' => true
		)
	);
	flush_rewrite_rules( false );
}

add_action( 'init', 'violet_partner_posttype' );