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

function tc_custom_post_types() {
	//definining custom post type arguments - https://codex.wordpress.org/Function_Reference/register_post_type#Arguments
    $labels = array(
        'name'               => 'Menu Items',
        'singular_name'      => 'Menu',
        'menu_name'          => 'Menu Items',
        'name_admin_bar'     => 'Reviews',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Menu',
        'new_item'           => 'New Menu',
        'edit_item'          => 'Edit Menu',
        'view_item'          => 'View Menu',
        'all_items'          => 'All Menu',
        'search_items'       => 'Search Menu',
        'parent_item_colon'  => 'Parent Menu:',
        'not_found'          => 'No menu found.',
        'not_found_in_trash' => 'No menu found in Trash.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-smiley', //menu icon from https://developer.wordpress.org/resource/dashicons/#smiley
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'menu' ), //url output
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail' ) //what you want to see when you create a new post type
    );
	register_post_type('menu',$args);
}

//calling my custom post type function
add_action('init', 'tc_custom_post_types');

function my_rewrite_flush() {
    // First, we "add" the custom post type via the above written function.
    // Note: "add" is written with quotes, as CPTs don't get added to the DB,
    // They are only referenced in the post_type column with a post entry,
    // when you add a post of this CPT.
    tc_custom_post_types();

    // ATTENTION: This is *only* done during plugin activation hook in this example!
    // You should *NEVER EVER* do this on every page load!!
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );

// Link to shortcode file

include( plugin_dir_path( __FILE__ ) . 'shortcode.php');

// shortcode
