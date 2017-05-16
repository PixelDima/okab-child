<?php
/**
 * Enqueues child theme stylesheet, loading first the parent theme stylesheet.
 **/
function theme_enqueue_styles() {
	wp_enqueue_style( 'okab-parent-stylesheet', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'okab-parent-stylesheet' ) );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function okab_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'okab', $lang );
}

add_action( 'after_setup_theme', 'okab_lang_setup' );