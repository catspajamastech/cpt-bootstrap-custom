<?php
/**
 * Plugin Name: CPT Bootstrap (Custom)
 * Plugin URI: https://github.com/catspajamastech/cpt-bootstrap-custom/
 * Description: A minimal bootstrap plugin for Wordpress that loads from CDN. Forget that silly business of editing functions.php.
 * Version: 3.3.7.09192017
 * Author: Cat's Pajamas Technology
 * Author URI: https://catspajamas.tech/
 * License: MIT
 */
 
if(!defined('ABSPATH')){exit;}//Exit if accessed directly
function load_bootstrap() {
    // register scripts and styles from CDN
    wp_register_script('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js','jquery','3.3.7','');
    wp_register_style ('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css','','3.3.7','');
    // enqueue scripts and styles
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
    wp_enqueue_style('bootstrap');
};
add_action('wp_enqueue_scripts', 'load_bootstrap');
