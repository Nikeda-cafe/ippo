<?php 
function set_up(){
    add_theme_support("responsive-embeds");
}
add_action( "after_setup_theme","set_up");

function script(){
    wp_enqueue_style( "mytheme-style", get_stylesheet_uri());
};
add_action("wp_enqueue_scripts","script");