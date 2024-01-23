<?php
// REGISTER ACF BLOCKS
function my_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {

		// register loop block
		acf_register_block(array(
			'name'				=> 'hero-grid',
			'title'				=> __('Hero Grid Block'),
			'description'		=> __('Displays hero images in grid format on homepage'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'grid-view',
			'keywords'			=> array( 'homepage', 'hero', 'gallery' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
                'mode' => true,
			]
		));

    }
}
add_action('acf/init', 'my_acf_init');

function my_acf_block_render_callback( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	if( file_exists( get_theme_file_path("/templates/blocks/block-{$slug}.php") ) ) {
		include( get_theme_file_path("/templates/blocks/block-{$slug}.php") );
	}
}