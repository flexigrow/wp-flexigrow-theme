<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

if (! defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

// require_once(get_stylesheet_directory() . '/inc/custom-header.php');


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

        wp_enqueue_style('aoscss', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css', _S_VERSION, true);
        wp_enqueue_style('bootstrapcss', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css', _S_VERSION, true);
        // wp_enqueue_style('semanticcss', 'https://cdn.jsdelivr.net/npm/semantic-ui@2.5.0/dist/semantic.min.css', _S_VERSION, true);
        wp_enqueue_style('tailwindcss', get_stylesheet_directory_uri() . '/assets/css/style.css', _S_VERSION, true);

        wp_enqueue_script('jquery_js', 'https://code.jquery.com/jquery-3.7.1.min.js', _S_VERSION, true);
        wp_enqueue_script('bootstrapjs', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js', _S_VERSION, true);
        // wp_enqueue_script('semanticjs', 'https://cdn.jsdelivr.net/npm/semantic-ui@2.5.0/dist/semantic.min.js', _S_VERSION, true);
        wp_enqueue_script('aos_js', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', _S_VERSION, true);

        wp_enqueue_script('main_js', get_stylesheet_directory_uri() . '/frontend/dist/js/main.js', _S_VERSION, true);
    }
endif;
add_action('wp_enqueue_scripts', 'child_theme_configurator_css', 20);

// END ENQUEUE PARENT ACTION
