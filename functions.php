<?php 
function set_up(){
    add_theme_support("responsive-embeds");
}
add_action( "after_setup_theme","set_up");