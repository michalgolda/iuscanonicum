function iuscanonicum_scripts()
{
    wp_enqueue_style('iuscanonicum-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'iuscanonicum_scripts');
