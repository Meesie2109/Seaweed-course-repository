<?php
/**
 * Botiga child functions
 *
 */


/**
 * Enqueues the parent stylesheet. Do not remove this function.
 *
 */
add_action( 'wp_enqueue_scripts', 'botiga_child_enqueue' );
function botiga_child_enqueue() {
    
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . "/styles.css" );

}

/* ADD YOUR CUSTOM FUNCTIONS BELOW */

function custom_style_css() {
    wp_enqueue_style( "custom-style", get_stylesheet_directory_uri() . "/assets/css/styles.css" );
    wp_enqueue_style( "mees-style", get_stylesheet_directory_uri() . "/assets/css/style-mees.css" );
    wp_enqueue_style( "bowie-style", get_stylesheet_directory_uri() . "/assets/css/style-bowie.css" );
}

add_action("wp_enqueue_scripts", "custom_style_css", 99);

