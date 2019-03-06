<?php
/**
 * Sidebars configuration.
 *
 * @package Singerella
 */

add_action( 'after_setup_theme', 'singerella_register_sidebars', 5 );
function singerella_register_sidebars() {

	singerella_widget_area()->widgets_settings = apply_filters( 'tm_widget_area_default_settings', array(
		'sidebar'     => array(
			'name'           => esc_html__( 'Sidebar', 'singerella' ),
			'description'    => '',
			'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'   => '</aside>',
			'before_title'   => '<h6 class="widget-title">',
			'after_title'    => '</h6>',
			'before_wrapper' => '<div id="%1$s" %2$s role="complementary">',
			'after_wrapper'  => '</div>',
			'is_global'      => true,
		),
		'footer-area' => array(
			'name'           => esc_html__( 'Footer Area', 'singerella' ),
			'description'    => '',
			'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'   => '</aside>',
			'before_title'   => '<h6 class="widget-title">',
			'after_title'    => '</h6>',
			'before_wrapper' => '<section id="%1$s" %2$s>',
			'after_wrapper'  => '</section>',
			'is_global'      => true,
		),
	) );
}
