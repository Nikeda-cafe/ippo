<?php 
function set_up(){
    add_theme_support("responsive-embeds");

    add_theme_support("wp-block-styles");
}
add_action( "after_setup_theme","set_up");

function script(){
    wp_enqueue_style(
        "mytheme-style",
        get_stylesheet_uri(),
        array(),
        filemtime(get_theme_file_path("style.css"))
    );
};
add_action("wp_enqueue_scripts","script");