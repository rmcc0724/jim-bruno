<?php
/**
 * Menus configuration.
 *
 * @package Singerella
 */

add_action( 'after_setup_theme', 'singerella_register_menus', 5 );
function singerella_register_menus() {

	// This theme uses wp_nav_menu() in four locations.
	register_nav_menus( array(
		'top'    => esc_html__( 'Top', 'singerella' ),
		'main'   => esc_html__( 'Main', 'singerella' ),
		'footer' => esc_html__( 'Footer', 'singerella' ),
		'social' => esc_html__( 'Social', 'singerella' ),
	) );
}
