<?php
function iuscanonicum_setup()
{
    register_nav_menu('header-menu', 'Menu główne');
    register_nav_menu('footer-menu', 'Menu w stopce');
    register_nav_menu('footer-specializations', 'Lista specjalizacji w stopce');
    register_nav_menu('footer-links', 'Linki w stopce');
    register_nav_menu('social-links', 'Media społecznościowe');
}
add_action('after_setup_theme', 'iuscanonicum_setup');


function iuscanonicum_scripts()
{
    wp_enqueue_style('iuscanonicum-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('iuscanonicum-menu', get_template_directory_uri() . '/assets/scripts/menu.js');
    wp_enqueue_script('iuscanonicum-scroll-top-btn', get_template_directory_uri() . '/assets/scripts/scroll-top-btn.js');
    wp_enqueue_script('iuscanonicum-sub-menu', get_template_directory_uri() . '/assets/scripts/sub-menu.js');
}
add_action('wp_enqueue_scripts', 'iuscanonicum_scripts');

function iuscanonicum_get_image_src(string $filename)
{
    return get_template_directory_uri() . '/assets/images/' . $filename;
}

function iuscanonicum_remove_prefix_from_post_title($title)
{
    $exploded_title = explode(':', $title);
    return $exploded_title[1];
}

function iuscanonicum_blocks_init()
{
    register_block_type(__DIR__ . '/blocks/page-bar/build');
    register_block_type(__DIR__ . '/blocks/page-title/build');
    register_block_type(__DIR__ . '/blocks/contact-details/build');
}

add_action('init', 'iuscanonicum_blocks_init');


class SocialWalker extends Walker
{
    public function walk($elements, $max_depth, ...$args)
    {
        $links = [];

        foreach ($elements as $element) {
            $url = $element->url;
            $name = $element->post_name;
            $icon_src = iuscanonicum_get_image_src("{$name}-icon.svg");

            $links[] = "<a class='footer__social-icon' href='{$url}'><img src='{$icon_src}' alt='{$name} icon' /></a>";
        }

        return join("\n", $links);
    }
}
