<?php 
function set_up(){
    add_theme_support("responsive-embeds");

    add_theme_support("wp-block-styles");
    add_theme_support("title-tag");

    //html5の有効化
    add_theme_support("html5",array(
        "style",
        "script",
        "comment-form"
    ));
    add_theme_support("post-thumbnails");
    add_theme_support("align-wide");
}
add_action( "after_setup_theme","set_up");

function script(){
    wp_enqueue_style(
        "mytheme-style",
        get_stylesheet_uri(),
        [],
        filemtime(get_theme_file_path("style.css"))
    );
    wp_enqueue_style(
        "myfont", 
        "https://fonts.googleapis.com/css?family=Ibarra+Real+Nova:400,700&display=swap",
        [],
        null
    );
    wp_enqueue_script("jquery",'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
    wp_enqueue_script( "my-js", get_stylesheet_directory_uri()."/js/script.js");
    wp_enqueue_style("dashicons");
};
add_action("wp_enqueue_scripts","script");