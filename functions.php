<?php
add_action( 'wp_enqueue_scripts', 'mysite_scripts' );

function mysite_scripts() {
    wp_enqueue_style( 'mysite-style', get_stylesheet_uri() );
    wp_enqueue_script( 'mysite-script', get_template_directory_uri() . '/assets/index.js', array(), null, true );
}
?>