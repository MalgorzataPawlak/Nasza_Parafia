<?php

function redaktor_init() {
	register_post_type( 'redaktor', array(
		'labels'            => array(
			'name'                => __( 'Redaktors', 'nasza_parafia' ),
			'singular_name'       => __( 'Redaktor', 'nasza_parafia' ),
			'all_items'           => __( 'All Redaktors', 'nasza_parafia' ),
			'new_item'            => __( 'New redaktor', 'nasza_parafia' ),
			'add_new'             => __( 'Add New', 'nasza_parafia' ),
			'add_new_item'        => __( 'Add New redaktor', 'nasza_parafia' ),
			'edit_item'           => __( 'Edit redaktor', 'nasza_parafia' ),
			'view_item'           => __( 'View redaktor', 'nasza_parafia' ),
			'search_items'        => __( 'Search redaktors', 'nasza_parafia' ),
			'not_found'           => __( 'No redaktors found', 'nasza_parafia' ),
			'not_found_in_trash'  => __( 'No redaktors found in trash', 'nasza_parafia' ),
			'parent_item_colon'   => __( 'Parent redaktor', 'nasza_parafia' ),
			'menu_name'           => __( 'Redaktors', 'nasza_parafia' ),
		),
		'public'            => true,
		'hierarchical'      => false,
		'show_ui'           => true,
		'show_in_nav_menus' => true,
		'supports'          => array( 'title', 'editor' ),
		'has_archive'       => true,
		'rewrite'           => true,
		'query_var'         => true,
		'menu_icon'         => 'dashicons-admin-post',
		'show_in_rest'      => true,
		'rest_base'         => 'redaktor',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'redaktor_init' );

function redaktor_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['redaktor'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('Redaktor updated. <a target="_blank" href="%s">View redaktor</a>', 'nasza_parafia'), esc_url( $permalink ) ),
		2 => __('Custom field updated.', 'nasza_parafia'),
		3 => __('Custom field deleted.', 'nasza_parafia'),
		4 => __('Redaktor updated.', 'nasza_parafia'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('Redaktor restored to revision from %s', 'nasza_parafia'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Redaktor published. <a href="%s">View redaktor</a>', 'nasza_parafia'), esc_url( $permalink ) ),
		7 => __('Redaktor saved.', 'nasza_parafia'),
		8 => sprintf( __('Redaktor submitted. <a target="_blank" href="%s">Preview redaktor</a>', 'nasza_parafia'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9 => sprintf( __('Redaktor scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview redaktor</a>', 'nasza_parafia'),
		// translators: Publish box date format, see http://php.net/date
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __('Redaktor draft updated. <a target="_blank" href="%s">Preview redaktor</a>', 'nasza_parafia'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'redaktor_updated_messages' );
