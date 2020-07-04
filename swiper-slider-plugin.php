<?php

/**
 * Swiper Slider Plugin for WordPress
 *
 * @link              https://github.com/marklchaves/swiper-slider-plugin
 * @since             0.0.1
 * @package           Swiper_Slider_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Swiper Slider Plugin
 * Plugin URI:        https://github.com/marklchaves/swiper-slider-plugin
 * Description:       Allows Swiper.js to work in WordPress.
 * Version:           0.0.3
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
define( 'SWIPER_SLIDER_PLUGIN_VERSION', '0.0.3' );

/**
 * Enqueue Swiper Stuff
 */

function enqueue_swiper_styles()
{
    wp_register_style( 'swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), '6.0.0', 'all' );
 
    wp_enqueue_style( 'swiper' );

    wp_enqueue_style( SWIPER_SLIDER_PLUGIN_NAME . '-main', plugin_dir_url( __FILE__ ) . SWIPER_SLIDER_PLUGIN_NAME . '.css', array(), SWIPER_SLIDER_PLUGIN_VERSION, 'all' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_swiper_styles' );

function enqueue_swiper_javascript()
{	
	// Add to footer section.
    wp_register_script( 'swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), '6.0.0', true );
 
    wp_enqueue_script( 'swiper' );

    wp_register_script( SWIPER_SLIDER_PLUGIN_NAME, plugin_dir_url( __FILE__ ) . SWIPER_SLIDER_PLUGIN_NAME . '.js', '', SWIPER_SLIDER_PLUGIN_VERSION, true ); // Put in the footer ~mlc

    wp_enqueue_script( SWIPER_SLIDER_PLUGIN_NAME );
}
add_action( 'wp_enqueue_scripts', 'enqueue_swiper_javascript' );
