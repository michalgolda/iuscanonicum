<?php

function iuscanonicum_get_image_src(string $filename)
{
    return get_template_directory_uri() . '/assets/images/' . $filename;
}

function iuscanonicum_remove_prefix_from_post_title($title)
{
    $exploded_title = explode(':', $title);
    return $exploded_title[1];
}

function iuscanonicum_get_permalink($path)
{
    return get_home_url() . $path;
}

function iuscanonicum_paginate_links()
{
    $prev_icon_src = iuscanonicum_get_image_src('prev-icon.svg');
    $next_icon_src = iuscanonicum_get_image_src('next-icon.svg');

    $pagination_element = '<div class="pagination">';
    $pagination_element .= paginate_links([
        'prev_text' => "<img src='{$prev_icon_src}' alt='prev icon' />",
        'next_text' => "<img src='{$next_icon_src}' alt='next icon' />"
    ]);
    $pagination_element .= '</div>';

    return $pagination_element;
}
