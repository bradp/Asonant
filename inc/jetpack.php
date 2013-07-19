<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package asonant
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function asonant_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'false',
	) );
}
add_action( 'after_setup_theme', 'asonant_jetpack_setup' );
