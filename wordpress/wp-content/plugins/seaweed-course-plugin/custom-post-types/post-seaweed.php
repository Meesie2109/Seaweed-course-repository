<?php
function seaweed_custom_post_type() {
    register_post_type("swc_seaweed",
        array(
            "labels"         => array(
                "name"          => __("Seaweeds", "textdomain"),
                "singular"      => __("Seaweed", "textdomain"),
            ),
            "public"        => true,
            "supports"      => array(
                "title",
                "editor",
                "thumbnail",
            ),
            "has_archive"   => true,
            "rewrite"       => array( "slug" => "seaweeds"),
        )
    );
}
add_action( "init", "seaweed_custom_post_type" );