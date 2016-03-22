<?php

//https://codex.wordpress.org/Function_Reference/register_uninstall_hook

//if uninstall not called from WordPress exit
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) //check for WP_UNINSTALL_PLUGIN before executing, defined by WP at runtime before plugin uninstall
    exit();

/* no options or database so commented out

$option_name = 'plugin_option_name';

delete_option( $option_name );

// For site options in multisite
delete_site_option( $option_name );  

//drop a custom db table
global $wpdb;
$wpdb->query( "DROP TABLE IF EXISTS {$wpdb->prefix}mytable" );