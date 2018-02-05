<?php
// Registers the new post type 

function violet_services_posttype() {
	register_post_type( 'services',
		array(
			'labels' => array(
				'name'               => _x( 'Services', 'post type general name', 'violet-plugin' ),
				'singular_name'      => _x( 'Service', 'post type singular name', 'violet-plugin' ),
				'menu_name'          => _x( 'My Services', 'admin menu', 'violet-plugin' ),
				'name_admin_bar'     => _x( 'My Service', 'add new on admin bar', 'violet-plugin' ),
				'add_new'            => _x( 'Add New', 'My Service', 'violet-plugin' ),
				'add_new_item'       => __( 'Add New Service', 'violet-plugin' ),
				'new_item'           => __( 'New Service', 'violet-plugin' ),
				'edit_item'          => __( 'Edit Service', 'violet-plugin' ),
				'view_item'          => __( 'View Service', 'violet-plugin' ),
				'all_items'          => __( 'All Services', 'violet-plugin' ),
				'search_items'       => __( 'Search Service', 'violet-plugin' ),
				'parent_item_colon'  => __( 'Parent Service:', 'violet-plugin' ),
				'not_found'          => __( 'No Services found.', 'violet-plugin' ),
				'not_found_in_trash' => __( 'No Services found in Trash.', 'violet-plugin' )
			),
			'menu_icon' => 'dashicons-art',
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
			'rewrite' => array("slug" => "service"), // Permalinks format
			'public' => true,
			'has_archive' => true
		)
	);
	flush_rewrite_rules( false );
}

add_action( 'init', 'violet_services_posttype' );


