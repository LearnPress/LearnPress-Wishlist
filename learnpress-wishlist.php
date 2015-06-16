<?php
/*
Plugin Name: LearnPress Courses Wishlist
Plugin URI: http://thimpress.com/learnpress
Description: Wishlist feature
Author: thimpress
Version: beta
Author URI: http://thimpress.com
Tags: learnpress
*/
if ( !defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

define( 'LPR_WISHLIST_PATH', dirname( __FILE__ ) );
/**
 * Register wishlist addon
 */
function learn_press_register_wishlist() {
    require_once( LPR_WISHLIST_PATH . '/init.php' );
}
add_action( 'learn_press_register_add_ons', 'learn_press_register_wishlist' );
