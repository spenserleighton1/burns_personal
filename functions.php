<?php

/**
 * Autoload Setup with Composer
 */
include_once(__DIR__.'/vendor/autoload.php');

function wpb_image_editor_default_to_gd( $editors ) {
    $gd_editor = 'WP_Image_Editor_GD';
    $editors = array_diff( $editors, array( $gd_editor ) );
    array_unshift( $editors, $gd_editor );
    return $editors;
}
add_filter( 'wp_image_editors', 'wpb_image_editor_default_to_gd' );

/**
 * Load our environment variables from .env file
 * Using the .env file prevents us from committing private keys to the repository
 */
$root_dir = dirname(__FILE__);
$dotenv = new Dotenv\Dotenv($root_dir);
if (file_exists($root_dir . '/.env')) {
    $dotenv->load();
}

Setup\Environment::init();
Setup\Cleanup::init();
Setup\ThemeSupport::init();
Setup\Widgets::init();
Setup\Scripts::init();
Setup\Menus::init();

Setup\Widgets\RelatedPosts::register();

function get_the_content_formatted() {
	$content = get_the_content();
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);
	return $content;
}
