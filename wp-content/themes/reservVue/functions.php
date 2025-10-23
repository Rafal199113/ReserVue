<?php
function reservVue_enqueue_styles()
{
    // Tailwind output
    wp_enqueue_style(
        'reservvue-tailwind',
        get_stylesheet_directory_uri() . '/src/output.css',
        array(),
        filemtime(get_stylesheet_directory() . '/src/output.css')
    );

    // Twój custom style.css
    wp_enqueue_style(
        'reservvue-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('reservvue-tailwind'), // zależność od Tailwind
        filemtime(get_stylesheet_directory() . '/style.css')
    );
}
add_action('wp_enqueue_scripts', 'reservVue_enqueue_styles');
