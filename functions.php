<?php
function iuscanonicum_setup()
{
    register_nav_menu('primary', esc_html__('Primary menu', 'iuscanonicum'));
}
add_action('after_setup_theme', 'iuscanonicum_setup');


function iuscanonicum_scripts()
{
    wp_enqueue_style('iuscanonicum-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'iuscanonicum_scripts');

function iuscanonicum_get_image_src(string $filename)
{
    return get_template_directory_uri() . '/assets/images/' . $filename;
}
