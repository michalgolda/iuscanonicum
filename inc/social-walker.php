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

            $links[] = "<li><a class='footer__social-icon' href='{$url}'><img src='{$icon_src}' alt='{$name} icon' /></a></li>";
        }

        return join("\n", $links);
    }
}
