<?php
/**
 * Plugin Name: SeaweedCourse Plugin
*/

require __DIR__ . "/custom-post-types/load-post-types.php";

//function pluginprefix_setup() {
//    require __DIR__ . "/custom-post-types/load-post-types.php";
//}
//add_action( "init", "pluginprefix_setup" );
//
//function pluginprefix_activate() {
//    pluginprefix_setup();
//    flush_rewrite_rules();
//}
//register_activation_hook( __FILE__, 'pluginprefix_activate' );
//
//function pluginprefix_deactivate() {
//    unregister_post_type( 'swc_seaweed' );
//    flush_rewrite_rules();
//}
//register_deactivation_hook( __FILE__, 'pluginprefix_deactivate' );