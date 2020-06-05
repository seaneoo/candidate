<?php

/**
 * Supported FontAwesome icons
 */
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

/**
 * Fetches the menu items by passing in the menu location's registered slug rather than the slug WordPress sets
 * Credit: https://wordpress.stackexchange.com/a/268883
 */
function get_menu_items_by_registered_slug($menu_slug)
{
    $menu_items = array();
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_slug])) {
        $menu = get_term($locations[$menu_slug]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
    }
    return $menu_items;
}

function nav_menu_item_class($classes, $item, $args)
{
    if (isset($args->item_class)) {
        $classes[] = $args->item_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'nav_menu_item_class', 1, 3);

/**
 * Registers the menu locations for the theme
 */
function register_menu_locations()
{
    register_nav_menus(array(
        'header' => _('Header Menu'),
        'footer' => _('Footer Menu'),
        'socials' => _('Social Media Menu'),
        'donate' => _('Donate Menu')
    ));
}
add_action('init', 'register_menu_locations');

/**
 * Returns an object array containing the title and url of social media menu items
 */
function get_social_menu_items()
{
    $array = array();
    if (has_nav_menu('socials')) {
        foreach (get_menu_items_by_registered_slug('socials') as $item) {
            $obj = new ArrayObject();
            $obj->title = strtolower($item->title);
            $obj->url = $item->url;

            array_push($array, $obj);
        }
    }
    return $array;
}

/**
 * Outputs a ul HTML element containing the proper social media items and their icons.
 */
function get_social_media_html()
{
    global $icons;
    if (!has_nav_menu('socials'))
        return null;

    $ul = '<ul class="socials-nav">';
    foreach (get_social_menu_items() as $item) {
        $href = $item->url;
        $icon = 'fas fa-globe';

        $key = $item->title;
        if (array_key_exists($key, $icons))
            $icon = "fab fa-{$icons[$key]}";
        $ul .= '<li class="nav-item">
            <a href="' . $href . '" target="_blank" rel="noreferrer nosponsor">
                <i class="' . $icon . '"></i>
            </a>
        </li>';
    }
    return $ul .= '</ul>';
}
