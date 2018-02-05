<?php
// Registers the new post type 

function violet_skill_posttype() {
	register_post_type( 'skill',
		array(
			'labels' => array(
				'name'               => _x( 'My skills', 'post type general name', 'violet-plugin' ),
				'singular_name'      => _x( 'Skill', 'post type singular name', 'violet-plugin' ),
				'menu_name'          => _x( 'My skills', 'admin menu', 'violet-plugin' ),
				'name_admin_bar'     => _x( 'Skill', 'add new on admin bar', 'violet-plugin' ),
				'add_new'            => _x( 'Add New', 'Skill', 'violet-plugin' ),
				'add_new_item'       => __( 'Add New Skill', 'violet-plugin' ),
				'new_item'           => __( 'New Skill', 'violet-plugin' ),
				'edit_item'          => __( 'Edit Skill', 'violet-plugin' ),
				'view_item'          => __( 'View Skill', 'violet-plugin' ),
				'all_items'          => __( 'All My skills', 'violet-plugin' ),
				'search_items'       => __( 'Search My skills', 'violet-plugin' ),
				'parent_item_colon'  => __( 'Parent My skills:', 'violet-plugin' ),
				'not_found'          => __( 'No My skills found.', 'violet-plugin' ),
				'not_found_in_trash' => __( 'No My skills found in Trash.', 'violet-plugin' )
			),
			'menu_icon' => 'dashicons-awards',
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
			'rewrite' => array("slug" => "skill"), // Permalinks format
			'public' => true,
			'has_archive' => true
		)
	);
	flush_rewrite_rules( false );
}

add_action( 'init', 'violet_skill_posttype' );