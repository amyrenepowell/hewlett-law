<?php
/*Plugin Name: Hewlett Law Post Type - Quotes
Description: This plugin registers the 'quotes' post type.
Version: 1.0
License: GPLv2
*/

function create_post_type_quotes() {

	// set up labels
$labels = array(
'name' => 'Quote Entries',
'singular_name' => 'Quote Entry',
'add_new' => 'Add New Quote',
'add_new_item' => 'Add New Quote Entry',
'edit_item' => 'Edit Quote',
'new_item' => 'New Quote',
'all_items' => 'All Quote',
'view_item' => 'View Quote',
'search_items' => 'Search Quote',
'not_found' => 'No Quote Entries Found',
'not_found_in_trash' => 'No Quote Entries found in Trash',
'parent_item_colon' => '',
'menu_name' => 'Quotes',
);
//register post type
register_post_type( 'powell-Quote', array(
'labels' => $labels,
'has_archive' => true,
'public' => true,
'supports' => array( 'title'),
'exclude_from_search' => true,
'capability_type' => 'post',
'rewrite' => array( 'slug' => 'Quote' ),
)
);
 
}
add_action( 'init', 'create_post_type_quotes' );
 
?>