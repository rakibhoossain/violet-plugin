<?php
// Registers the new post type 

function violet_team_posttype() {
	register_post_type( 'team',
		array(
			'labels' => array(
				'name'               => _x( 'Members', 'post type general name', 'violet-plugin' ),
				'singular_name'      => _x( 'Member', 'post type singular name', 'violet-plugin' ),
				'menu_name'          => _x( 'Team', 'admin menu', 'violet-plugin' ),
				'name_admin_bar'     => _x( 'Members', 'add new on admin bar', 'violet-plugin' ),
				'add_new'            => _x( 'Add New', 'Portfolio', 'violet-plugin' ),
				'add_new_item'       => __( 'Add New Member', 'violet-plugin' ),
				'new_item'           => __( 'New Member', 'violet-plugin' ),
				'edit_item'          => __( 'Edit Member', 'violet-plugin' ),
				'view_item'          => __( 'View Member', 'violet-plugin' ),
				'all_items'          => __( 'All Members', 'violet-plugin' ),
				'not_found'          => __( 'No Members found.', 'violet-plugin' ),
				'not_found_in_trash' => __( 'No Members found in Trash.', 'violet-plugin' )
			),
			'menu_icon' => 'dashicons-groups',
			'supports' => array( 'title', 'thumbnail'),
			'rewrite' => array("slug" => "team"), // Permalinks format
			'public' => true,
			'has_archive' => true
		)
	);
	flush_rewrite_rules( false );
}

add_action( 'init', 'violet_team_posttype' );


