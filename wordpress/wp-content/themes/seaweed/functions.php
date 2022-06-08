<?php 

//Adds dynamic title tags support for all wordpress pages
function babyster_theme_support(){

    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1568, 9999 );

}

add_action('after_theme_setup', 'babyster_theme_support');

//Function to declare an stylesheet for wordpress
function babyster_register_styles(){

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('babyster-style', get_template_directory_uri() . "/style.css", array(),  $version, "all");
    wp_enqueue_style('footer-stylesheet', get_template_directory_uri() . "/assets/css/footer.css", array(),  $version, "all");
    wp_enqueue_style('front-stylesheet', get_template_directory_uri() . "/assets/css/front.css", array(),  $version, "all");
    wp_enqueue_style('index-stylesheet', get_template_directory_uri() . "/assets/css/index.css", array(),  $version, "all");

}

//Function that adds the stylesheet to wordpress
add_action('wp_enqueue_scripts', 'babyster_register_styles');

?>