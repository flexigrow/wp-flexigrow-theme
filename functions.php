<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

if (! defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

require_once get_stylesheet_directory() . '/inc/custom-walker-nav-menu.php';
require_once get_stylesheet_directory() . '/inc/walker-nav-header-actions.php';
require_once get_stylesheet_directory() . '/inc/walker-nav-footer-menu.php';


// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')):
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('child_theme_configurator_css')):
    function child_theme_configurator_css()
    {
        wp_enqueue_style('chld_thm_cfg_child', trailingslashit(get_stylesheet_directory_uri()) . 'style.css', array('hello-elementor'));

        wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css', _S_VERSION, true);
        wp_enqueue_style('animate_css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', _S_VERSION, true);
        wp_enqueue_style('slick_theme_css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css', _S_VERSION, true);
        wp_enqueue_style('slick_css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', _S_VERSION, true);
        // wp_enqueue_style('sal_css', 'https://cdn.jsdelivr.net/gh/mciastek/sal/dist/sal.css', _S_VERSION, true);
        wp_enqueue_style('bootstrapcss', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css', _S_VERSION, true);
        wp_enqueue_style('tailwindcss', get_stylesheet_directory_uri() . '/assets/css/style.css', _S_VERSION, true);

        wp_enqueue_script('jquery_js', 'https://code.jquery.com/jquery-3.7.1.min.js', _S_VERSION, true);
        wp_enqueue_script('wow_js', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', _S_VERSION, true);
        wp_enqueue_script('slick_js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', _S_VERSION, true);
        wp_enqueue_script('bootstrapjs', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js', _S_VERSION, true);
        // wp_enqueue_script('sal_js', 'https://cdn.jsdelivr.net/gh/mciastek/sal/dist/sal.js', _S_VERSION, true);

        wp_enqueue_script('main_js', get_stylesheet_directory_uri() . '/frontend/dist/js/main.js', _S_VERSION, true);

        if (is_page_template('page-templates/home-page.php')) {
            require_once(get_stylesheet_directory() . '/inc/header.php');
        }
    }


    function register_my_menu()
    {
        register_nav_menu('header-menu', __('Header Menu'));
        register_nav_menu('header-menu-actions', __('Header Menu Actions'));
        register_nav_menu('footer-menu-1', __('Footer Menu 1'));
        register_nav_menu('footer-menu-2', __('Footer Menu 2'));
        register_nav_menu('footer-menu-3', __('Footer Menu 3'));
        register_nav_menu('footer-menu-4', __('Footer Menu 4'));
    }
    add_action('init', 'register_my_menu');
endif;
add_action('wp_enqueue_scripts', 'child_theme_configurator_css', 20);

// END ENQUEUE PARENT ACTION
