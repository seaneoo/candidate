<?php

$icons = array(
    'facebook' => 'facebook-f',
    'instagram' => 'instagram',
    'medium' => 'medium-m',
    'mixer' => 'mixer',
    'periscope' => 'periscope',
    'reddit' => 'reddit-alien',
    'snapchat' => 'snapchat-ghost',
    'tumblr' => 'tumblr',
    'twitch' => 'twitch',
    'twitter' => 'twitter',
    'youtube' => 'youtube'
);

function setup_menus()
{
    register_nav_menus(array(
        'header' => _('Header'),
        'social_media' => _('Social Media')
    ));
}
add_action('init', 'setup_menus');

function get_social_media()
{
    $urls = array();
    foreach (wp_get_nav_menu_items('social-media') as $item) {
        $obj = new ArrayObject();
        $obj->title = strtolower($item->title);
        $obj->url = $item->url;

        array_push($urls, $obj);
    }
    return $urls;
}

function social_media()
{
    global $icons;

    $ul = '<ul class="socials">';

    foreach (get_social_media() as $item) {
        $href = $item->url;
        $fab = 'fas fa-globe';

        $key = $item->title;
        if (array_key_exists($key, $icons))
            $fab = "fab fa-{$icons[$key]}";

        $ul .= "<li class='social-item'> <a class='social-link' href='{$href}' target='_blank' rel='noreferrer nosponsor'> <i class='{$fab}'></i> </a> </li>";
    }

    $ul .= '</ul>';
    return $ul;
}
