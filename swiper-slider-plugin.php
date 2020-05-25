<?php

/**
 * Swiper Slider Plugin for WordPress
 *
 * @link              https://www.caughtmyeye.cc
 * @since             0.0.1
 * @package           Swiper_Slider_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Swiper Slider Plugin
 * Plugin URI:        https://www.caughtmyeye.cc
 * Description:       Allows Swiper.js to work in WordPress.
 * Version:           0.0.2
 * Author:            caught my eye
 * Author URI:        https://www.caughtmyeye.cc
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       swiper-slider-plugin
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'SWIPER_SLIDER_PLUGIN_NAME', 'swiper-slider-plugin' );
define( 'SWIPER_SLIDER_PLUGIN_VERSION', '0.0.2' );

/**
 * Enqueue Swiper Stuff
 */

function enqueue_swiper_styles()
{
    wp_register_style( 'swiper', 'https://unpkg.com/swiper/css/swiper.min.css', array(), '5.4.1', 'all' );
 
    wp_enqueue_style( 'swiper' );

    wp_enqueue_style( SWIPER_SLIDER_PLUGIN_NAME . '-main', plugin_dir_url( __FILE__ ) . SWIPER_SLIDER_PLUGIN_NAME . '.css', array(), SWIPER_SLIDER_PLUGIN_VERSION, 'all' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_swiper_styles' );

function enqueue_swiper_javascript()
{	
	// Add to footer section.
    wp_register_script( 'swiper', 'https://unpkg.com/swiper/js/swiper.min.js', array(), '5.4.1', true );
 
    wp_enqueue_script( 'swiper' );

    wp_register_script( SWIPER_SLIDER_PLUGIN_NAME, plugin_dir_url( __FILE__ ) . SWIPER_SLIDER_PLUGIN_NAME . '.js', '', SWIPER_SLIDER_PLUGIN_VERSION, true ); // Put in the footer ~mlc

    wp_enqueue_script( SWIPER_SLIDER_PLUGIN_NAME );
}
add_action( 'wp_enqueue_scripts', 'enqueue_swiper_javascript' );
