<?php

/**
 * Setups the theme-specific sections in the customizer
 */
function setup_customizer_sections($wp_customize)
{
    $wp_customize->add_section('header', array(
        'priority' => 100,
        'title' => _('Header')
    ));

    $wp_customize->add_section('front_page', array(
        'priority' => 100,
        'title' => _('Front Page')
    ));
}
add_action('customize_register', 'setup_customizer_sections');

/**
 * Setups the setting and control for the site logo
 */
function setup_site_logo($wp_customize)
{
    // Default logo
    $wp_customize->add_setting('site_logo');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'site_logo', array(
        'label' => _('Site Logo'),
        'description' => _('The image that will appear in the header.'),
        'settings' => 'site_logo',
        'section' => 'header'
    )));

    // Alternate logo
    $wp_customize->add_setting('site_alt_logo');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'site_alt_logo', array(
        'label' => _('Alternate Site Logo'),
        'description' => _('(OPTIONAL) Alternate version of the site logo. This should generally look better on a dark background.'),
        'settings' => 'site_alt_logo',
        'section' => 'header'
    )));
}
add_action('customize_register', 'setup_site_logo');

/**
 * Returns the URI for the site logo
 * If no site logo is set, it will return a default fallback URI
 */
function get_logo_src($alt = false)
{
    if (get_theme_mod('site_logo')) {
        if (!$alt) return get_theme_mod('site_logo');
        else return get_theme_mod('site_alt_logo');
    } else {
        if (!$alt) return get_template_directory_uri() . '/assets/logo.svg';
        else return get_template_directory_uri() . '/assets/logo-white.svg';
    }
}

/**
 * Setups the setting and control for the alert bar text and toggle
 */
function setup_alert_text($wp_customize)
{
    $wp_customize->add_setting('alert_toggle', array(
        'default' => true
    ));
    $wp_customize->add_control('alert_toggle', array(
        'type' => 'checkbox',
        'label' => _('Alert Bar Toggle'),
        'description' => _('Toggles whether or not the alert bar will be visible.'),
        'settings' => 'alert_toggle',
        'section' => 'header'
    ));

    $wp_customize->add_setting('alert_text');
    $wp_customize->add_control('alert_text', array(
        'type' => 'textarea',
        'label' => _('Alert Bar Text'),
        'description' => _('Text to be displayed in the alert bar on top of the page. Leave empty for nothing. Supports HTML tags.'),
        'settings' => 'alert_text',
        'section' => 'header'
    ));
}
add_action('customize_register', 'setup_alert_text');
/**
 * Returns the specified text for the alert bar
 */
function get_alert_text()
{
    return get_theme_mod('alert_text');
}

/**
 * Setups the setting and control for the donation link
 */
function setup_donation_url($wp_customize)
{
    $wp_customize->add_setting('donate_url');
    $wp_customize->add_control('donate_url', array(
        'type' => 'url',
        'label' => _('Donation URL'),
        'description' => _('Sets the donation URL.'),
        'settings' => 'donate_url',
        'section' => 'header'
    ));
}
add_action('customize_register', 'setup_donation_url');

/**
 * Returns the donation URL
 * If no URL is set, it will link back to the site's homepage
 */
function get_donation_url()
{
    return get_theme_mod('donate_url');
}

/**
 * Setups the setting and control for the front page jumbotron
 */
function setup_jumbo_image($wp_customize)
{
    $wp_customize->add_setting('jumbo_img');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'jumbo_img', array(
        'label' => _('Jumbotron Image'),
        'description' => _('Sets the main background for the jumbotron on the front page.'),
        'settings' => 'jumbo_img',
        'section' => 'front_page'
    )));
}
add_action('customize_register', 'setup_jumbo_image');

/**
 * Returns the jumbotron image URI
 * If no image is uploaded, it will return the default image supplied in the theme
 */
function get_jumbo_img()
{
    if (get_theme_mod('jumbo_img'))
        return get_theme_mod('jumbo_img');
    else return get_template_directory_uri() . '/assets/bg.jpg';
}
