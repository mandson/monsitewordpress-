<?php

// Exit if accessed directly
if (!defined('ABSPATH'))
    exit;

if (!function_exists('popularis_press_setup')) :

    /**
     * Global functions.
     */
    function popularis_press_setup() {

        // Child theme language
        load_child_theme_textdomain('popularis-press', get_stylesheet_directory() . '/languages');
    }

endif;

add_action('after_setup_theme', 'popularis_press_setup');

if (!function_exists('popularis_press_parent_css')):

    /**
     * Enqueue CSS.
     */
    function popularis_press_parent_css() {
        $parent_style = 'popularis-stylesheet';

        $dep = array('bootstrap');
        if (class_exists('WooCommerce')) {
            $dep = array('bootstrap', 'popularis-woocommerce');
        }

        wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css', $dep);
        wp_enqueue_style('popularis-press',
                get_stylesheet_directory_uri() . '/style.css',
                array($parent_style),
                wp_get_theme()->get('Version')
        );
    }

endif;

add_action('wp_enqueue_scripts', 'popularis_press_parent_css');


if (!function_exists('popularis_press_excerpt_length')) :

    /**
     * Limit the excerpt.
     */
    function popularis_press_excerpt_length($length) {
        if ( is_admin() ) return $length;
        if (is_home() || is_archive()) { // Make sure to not limit pagebuilders
            return '25';
        } else {
            return $length;
        }
    }

    add_filter('excerpt_length', 'popularis_press_excerpt_length', 999);

endif;
