<?php
/*
Plugin Name: Diasble Gutenberg
Plugin URI:  https://github.com/HuitOnze/disable-gutenberg
Description: Small script to deactivate the Gutenberg editor for WordPress.
Version:     1.0
Author:      Jérémy Debray
Author URI:  https://www.huitonze.ch
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

/**
 * Disable Gutenberg
 * 
 * More information:
 * @link https://digwp.com/2018/04/how-to-disable-gutenberg/
 */
// Disable Gutenberg for Post
add_filter('use_block_editor_for_post', '__return_false', 10);

// Disable Gutenberg for Post type
add_filter('use_block_editor_for_post_type', '__return_false', 10);
