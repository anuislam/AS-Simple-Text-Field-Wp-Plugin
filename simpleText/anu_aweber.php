<?php
/*
Plugin Name: Anu Aweber Form
Plugin URI: https://profiles.wordpress.org/anuislam/#content-plugins
Description: This is a plugin for custom aweber form copy and paste
Author: Anu islam shohag
Version: 1.6
Author URI: https://www.facebook.com/anuislam.shohag.3
*/

define( 'anu_aweber_path', plugin_dir_path( __FILE__ ) );
define( 'anu_aweber_url', plugins_url( '', __FILE__ ) );

require_once( anu_aweber_path . '/inc/menu.php' );
require_once( anu_aweber_path . '/inc/anu_shortcode.php' );


function anu_aweber_script(){
wp_enqueue_style( 'anu_aweber_main_css', anu_aweber_url.'/style.css', __FILE__ );

wp_register_script( 'anu_aweber_mainjs', anu_aweber_url.'/main.js', 1.0, false );
wp_enqueue_script('jquery');
wp_enqueue_script('anu_aweber_mainjs');


}
add_action('admin_enqueue_scripts','anu_aweber_script');
