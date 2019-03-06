<?php
/**
 * Thumbnails configuration.
 *
 * @package Singerella
 */

add_action( 'after_setup_theme', 'singerella_register_image_sizes', 5 );
function singerella_register_image_sizes() {
	set_post_thumbnail_size( 640, 506, true );

	// Registers a new image sizes.
	add_image_size( 'singerella-thumb-s', 130, 136, true );
	add_image_size( 'singerella-thumb-blog-grid', 536, 505, true );
	add_image_size( 'singerella-thumb-blog-masonry', 536, 9999, true );
	add_image_size( 'singerella-thumb-l', 1280, 853, true );
	add_image_size( 'singerella-thumb-project', 370, 260, true );
}
