<?php
function iuscanonicum_setup()
{
    register_nav_menu('primary', esc_html__('Primary menu', 'iuscanonicum'));
}
add_action('after_setup_theme', 'iuscanonicum_setup');


function iuscanonicum_scripts()
{
    wp_enqueue_style('iuscanonicum-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('iuscanonicum-menu', get_template_directory_uri() . '/assets/scripts/menu.js');
}
add_action('wp_enqueue_scripts', 'iuscanonicum_scripts');

function iuscanonicum_get_image_src(string $filename)
{
    return get_template_directory_uri() . '/assets/images/' . $filename;
}

function iuscanonicum_blocks_init()
{
    register_block_type(__DIR__ . '/blocks/page-bar/build');
    register_block_type(__DIR__ . '/blocks/page-title/build');
}

add_action('init', 'iuscanonicum_blocks_init');
