<?php

class IuscanonicumSocialWalker extends Walker
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