<?php
require_once 'inc/utils.php';
require_once 'inc/social-walker.php';
require_once 'inc/contact-form/rest-controller.php';
require_once 'inc/contact-form/settings.php';

function iuscanonicum_after_setup_theme()
{
    register_nav_menu('header-menu', 'Menu główne');
    register_nav_menu('footer-menu', 'Menu w stopce');
    register_nav_menu('footer-specializations', 'Lista specjalizacji w stopce');
    register_nav_menu('footer-links', 'Linki w stopce');
    register_nav_menu('social-links', 'Media społecznościowe');

    add_theme_support('customize-selective-refresh-widgets');
}

function iuscanonicum_enqueue_scripts()
{
    wp_enqueue_style('iuscanonicum-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('iuscanonicum-menu', get_template_directory_uri() . '/assets/scripts/menu.js');
    wp_enqueue_script('iuscanonicum-scroll-top-btn', get_template_directory_uri() . '/assets/scripts/scroll-top-btn.js');
    wp_enqueue_script('iuscanonicum-sub-menu', get_template_directory_uri() . '/assets/scripts/sub-menu.js');
}

function iuscanonicum_blocks_init()
{
    register_block_type(__DIR__ . '/blocks/page-bar/build');
    register_block_type(__DIR__ . '/blocks/page-title/build');
    register_block_type(__DIR__ . '/blocks/contact-details/build');
    register_block_type(__DIR__ . '/blocks/banner/build');
}

function iuscanonicum_widget_init()
{
    register_sidebar([
        'id' => 'iuscanonicum-contact-page-text-area',
        'name' => 'Strona kontaktowa (obszar tekstowy)',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>'
    ]);
}

function iuscanonicum_widgets_init()
{
    register_sidebar([
        'id' => 'iuscanonicum-contact-page-text-area',
        'name' => 'Strona kontaktowa (obszar tekstowy)',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>'
    ]);

    register_sidebar([
        'id' => 'iuscanonicum-front-page-welcome-section-heading',
        'name' => 'Strona główna (Nagłówek sekcji "welcome")',
        'before_widget' => '<div id="%1$s" class="widget section__heading %2$s">',
        'after_widget' => '</div>'
    ]);

    register_sidebar([
        'id' => 'iuscanonicum-front-page-welcome-section-body',
        'name' => 'Strona główna (Ciało sekcji "welcome")',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>'
    ]);

    register_sidebar([
        'id' => 'iuscanonicum-front-page-we-can-help-you-section-heading',
        'name' => 'Strona główna (Nagłówek sekcji "weCanHelpYou")',
        'before_widget' => '<div id="%1$s" class="widget section__heading %2$s">',
        'after_widget' => '</div>'
    ]);

    register_sidebar([
        'id' => 'iuscanonicum-front-pagewe-can-help-you-section-body',
        'name' => 'Strona główna (Ciało sekcji "weCanHelpYou")',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>'
    ]);

    register_sidebar([
        'id' => 'iuscanonicum-contact-details',
        'name' => 'Dane kontaktowe',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>'
    ]);

    register_sidebar([
        'id' => 'iuscanonicum-footer-contact-details',
        'name' => 'Dane kontaktowe (Stopka)',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>'
    ]);

    register_sidebar([
        'id' => 'iuscanonicum-footer-text-area',
        'name' => 'Stopka (Obszar tekstowy)',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>'
    ]);
}

function iuscanonicum_rest_api_init()
{
    $contactController = new IuscanonicumRestContactController();
    $contactController->register_routes();
}

function iuscanonicum_admin_init()
{
    $contactFormSettings = new IuscanonicumContactFormSettings();
    $contactFormSettings->init();
}

add_action('after_setup_theme', 'iuscanonicum_after_setup_theme');
add_action('wp_enqueue_scripts', 'iuscanonicum_enqueue_scripts');
add_action('init', 'iuscanonicum_blocks_init');
add_action('widgets_init', 'iuscanonicum_widgets_init');
add_action('rest_api_init', 'iuscanonicum_rest_api_init');
add_action('admin_init', 'iuscanonicum_admin_init');
