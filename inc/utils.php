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