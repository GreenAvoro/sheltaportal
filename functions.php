<?php
add_action( 'wp_enqueue_scripts', function(){
    wp_enqueue_style('style', get_template_directory_uri().'/style.css');
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( 'style' ), 
        wp_get_theme()->get('Version')
    );
});

