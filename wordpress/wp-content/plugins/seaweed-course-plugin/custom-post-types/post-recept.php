<?php
function recept_custom_post_type() {
    register_post_type("swc_recept",
        array(
            "labels"         => array(
                "name"          => __("Recepten", "textdomain"),
                "singular"      => __("Recept", "textdomain"),
            ),
            "public"        => true,
            "supports"      => array(
                "title",
                "editor",
                "thumbnail",
            ),
            "has_archive"   => true,
            "rewrite"       => array( "slug" => "recepten"),
        )
    );
}
add_action( "init", "recept_custom_post_type" );