<?php

function gutenberg_editor_assets() {
    // ADOBE FONTS
    wp_register_style( 'adobe-font', 'https://use.typekit.net/ppy3tkz.css', false, null, 'all' );
    wp_enqueue_style('adobe-font');
    wp_register_style('my-gutenberg-editor-styles', get_theme_file_uri('/assets/css/gutenberg.css'), false);
    wp_enqueue_style('my-gutenberg-editor-styles');
}
add_action('enqueue_block_editor_assets', 'gutenberg_editor_assets');

function fontawesome_dashboard() {
    wp_enqueue_style('fontawesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', '', null, 'all');
 }
 
 add_action('admin_init', 'fontawesome_dashboard');