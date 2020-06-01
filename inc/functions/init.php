<?php

include get_theme_file_path('/inc/functions/customizer.php');
include get_theme_file_path('/inc/functions/menus.php');

function login_logo()
{
?>
    <style type="text/css">
        body.login div#login h1 a {
            width: auto;
            background-image: url('<?= get_logo_src() ?>');
            background-size: contain;
        }
    </style>
<?php
}
add_action('login_enqueue_scripts', 'login_logo');

function add_featured_image()
{
    add_theme_support('post-thumbnails', array('page'));
}
add_action('after_setup_theme', 'add_featured_image');
