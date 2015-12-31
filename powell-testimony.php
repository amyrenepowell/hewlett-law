<?php
/*Plugin Name: Hewlett Law Post Type - Testimonies
Description: This plugin registers the 'testimonies' post type.
Version: 1.0
License: GPLv2
*/

function wpmudev_create_post_type() {

	// set up labels
$labels = array(
'name' => 'Testimony Entries',
'singular_name' => 'Testimony Entry',
'add_new' => 'Add New Testimony',
'add_new_item' => 'Add New Testimony Entry',
'edit_item' => 'Edit Testimony',
'new_item' => 'New Testimony',
'all_items' => 'All Testimony',
'view_item' => 'View Testimony',
'search_items' => 'Search Testimony',
'not_found' => 'No Testimony Entries Found',
'not_found_in_trash' => 'No Testimony Entries found in Trash',
'parent_item_colon' => '',
'menu_name' => 'Testimonies',
);
//register post type
register_post_type( 'powell-testimony', array(
'labels' => $labels,
'has_archive' => true,
'public' => true,
'supports' => array( 'title'),
'exclude_from_search' => true,
'capability_type' => 'post',
'rewrite' => array( 'slug' => 'Testimony' ),
)
);
 
}
add_action( 'init', 'wpmudev_create_post_type' );
 
?>