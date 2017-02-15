<?php
/**
 * Plugin Name: CPT Bootstrap (Custom)
 * Plugin URI: https://github.com/catspajamastech/cpt-bootstrap-custom/
 * Description: A minimal bootstrap plugin for Wordpress. Forget that silly business of editing functions.php.
 * Version: 3.3.7.02152017
 * Author: Cat's Pajamas Technology
 * Author URI: https://catspajamas.tech/
 * License: MIT
 */
 
// register script and style from CDN
wp_register_script('bootstrap-js','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js','jquery','3.3.7','');
wp_register_style ('bootstrap-css','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css','','3.3.7','');

// enqueue scripts and style
wp_enqueue_script('jquery');
wp_enqueue_script('bootstrap-js');
wp_enqueue_style('bootstrap-css');
