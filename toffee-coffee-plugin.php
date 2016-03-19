<?php
/*
 * Plugin Name: toffee-coffee-plugin
 * Plugin URI: https://phoenix.sheridanc.on.ca/~ccit3470/
 * Description: Assignment 3: create a wordpress plugin
 * Author: Alex Tsai, Chungyu Lay, Keizac Lee
 * Author URI: 
 * Version: 1.0.1
 *Followed this tutorial: http://www.lynda.com/WordPress-tutorials/WordPress-Custom-Post-Types-Taxonomies/163113-2.html
 */

function coffeetoffee_custom_postypes() {
	//definining custom post type arguments - https://codex.wordpress.org/Function_Reference/register_post_type#Arguments
    $labels = array(
        'name'               => 'Reviews',
        'singular_name'      => 'Reviews',
        'menu_name'          => 'Reviews',
        'name_admin_bar'     => 'Reviews',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Review',
        'new_item'           => 'New Review',
        'edit_item'          => 'Edit Review',
        'view_item'          => 'View Review',
        'all_items'          => 'All Reviews',
        'search_items'       => 'Search Reviews',
        'parent_item_colon'  => 'Parent Reviews:',
        'not_found'          => 'No reviews found.',
        'not_found_in_trash' => 'No reviews found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-smiley', //menu icon from https://developer.wordpress.org/resource/dashicons/#smiley
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'reviews' ), //url output
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'author' ) //what you want to see when you create a new post type 
    );
	register_post_type('reviews',$args);
}

//calling my custom postype function 
add_action('init', 'coffeetoffee_custom_postypes');

function my_rewrite_flush() {
    // First, we "add" the custom post type via the above written function.
    // Note: "add" is written with quotes, as CPTs don't get added to the DB,
    // They are only referenced in the post_type column with a post entry, 
    // when you add a post of this CPT.
    coffeetoffee_custom_postypes();

    // ATTENTION: This is *only* done during plugin activation hook in this example!
    // You should *NEVER EVER* do this on every page load!!
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );
