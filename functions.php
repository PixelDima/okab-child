<?php
/**
 * Child theme functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Text Domain: okab
 *
 * @package okab
 * @link http://codex.wordpress.org/Plugin_API
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function dima_child_enqueue_parent_style() {
	$theme   = wp_get_theme( 'OKAB' );
	$version = $theme->get( 'Version' );
	// Load the stylesheet.
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'okab-style' ), $version );
}

add_action( 'wp_enqueue_scripts', 'dima_child_enqueue_parent_style', 15 );

/**
 * Load languages.
 *
 * @return void
 */
function okab_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'okab', $lang );
}

add_action( 'after_setup_theme', 'okab_lang_setup' );
