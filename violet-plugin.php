<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.crazylab.design
 * @since             1.0.0
 * @package           Violet_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Violet Plugin
 * Plugin URI:        www.crazylab.design/violet-plugin
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Rakib Hossain
 * Author URI:        www.crazylab.design
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       violet-plugin
 * Domain Path:       /languages
 */


//include portfolio custom post type 
include('inc/sections/portfolio.php');

//CUSTOM POST TYPE SETTING
//include team custom post type
include('inc/sections/team.php');

//include services custom post type
include('inc/sections/services.php');

//include skill custom post type
include('inc/sections/skill.php');

//include partner custom post type  
include('inc/sections/partner.php');


//included testimonial
include('inc/sections/testimonial.php');

//include custom post metaboxes
include('inc/violet-meta.php');



function violet_plugin_scripts()
{
    wp_enqueue_media();
    wp_enqueue_style( 'wp-color-picker');
	wp_enqueue_script( 'wp-color-picker');

wp_enqueue_script( 'violet-plugin', plugin_dir_url( __FILE__ ) . 'inc/js/violet-plugin.js', array( 'jquery' ), '1.1.1', false );

wp_enqueue_style('violet-plugin', plugin_dir_url( __FILE__ ) . 'inc/css/violet-plugin.css');

}

add_action('admin_enqueue_scripts', 'violet_plugin_scripts');


//plugin translation
function violet_plugin_setup() {
    load_plugin_textdomain('violet-plugin', false, dirname(plugin_basename(__FILE__)) . '/languages/');
} // end custom_theme_setup
add_action('after_setup_theme', 'violet_plugin_setup');
