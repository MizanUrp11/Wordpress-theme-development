<?php

function carnews_reigister_menu()
{
    if(function_exists('register_nav_menu')){
        register_nav_menu( 'header_menu', __('Header Menu','carnews') );
        register_nav_menu( 'footer_menu', __('Footer Menu','carnews') );
    }
}
add_action( 'init', 'carnews_reigister_menu');