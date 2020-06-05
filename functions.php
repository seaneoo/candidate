<?php

include get_theme_file_path('/inc/functions/init.php');

// CSS
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('raleway-font', 'https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700;800;900&display=swap');
    wp_enqueue_style('montserrat-font', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap');
    wp_enqueue_style('candidate-main', get_template_directory_uri() . '/main.css');
});

// JS
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('jquery-3.5.1', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), false, true);
    wp_enqueue_script('fontawesome-5', 'https://kit.fontawesome.com/f7387cff38.js', array(), false, true);
    wp_enqueue_script('candidate-util', get_template_directory_uri() . '/inc/js/util.js', array(), false, true);
    wp_enqueue_script('candidate-load', get_template_directory_uri() . '/inc/js/load.js', array(), false, true);
    wp_enqueue_script('candidate-header', get_template_directory_uri() . '/inc/js/header.js', array(), false, true);
});
