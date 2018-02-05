<?php
// Registers the new post type 

function violet_testimonial_posttype() {
	register_post_type( 'testimonial',
		array(
			'labels' => array(
				'name'               => _x( 'Testimonials', 'post type general name', 'violet-plugin' ),
				'singular_name'      => _x( 'Testimonial', 'post type singular name', 'violet-plugin' ),
				'menu_name'          => _x( 'Testimonials', 'admin menu', 'violet-plugin' ),
				'name_admin_bar'     => _x( 'Testimonial', 'add new on admin bar', 'violet-plugin' ),
				'add_new'            => _x( 'Add New', 'Testimonial', 'violet-plugin' ),
				'add_new_item'       => __( 'Add New Testimonial', 'violet-plugin' ),
				'new_item'           => __( 'New Testimonial', 'violet-plugin' ),
				'edit_item'          => __( 'Edit Testimonial', 'violet-plugin' ),
				'view_item'          => __( 'View Testimonial', 'violet-plugin' ),
				'all_items'          => __( 'All Testimonials', 'violet-plugin' ),
				'search_items'       => __( 'Search Testimonials', 'violet-plugin' ),
				'parent_item_colon'  => __( 'Parent Testimonials:', 'violet-plugin' ),
				'not_found'          => __( 'No Testimonials found.', 'violet-plugin' ),
				'not_found_in_trash' => __( 'No Testimonials found in Trash.', 'violet-plugin' )
			),
			'menu_icon' => 'dashicons-editor-paste-text',
			'supports' => array( 'title', 'editor', 'thumbnail'),
			'rewrite' => array("slug" => "testimonial"), // Permalinks format
			'public' => true,
			'has_archive' => true
		)
	);
	flush_rewrite_rules( false );
}

add_action( 'init', 'violet_testimonial_posttype' );