<?php
/**
 * Plugins configuration example.
 *
 * @var array
 */
$plugins = array(
	'elementor' => array(
		'name'   => esc_html__( 'Elementor', 'singerella' ),
		'access' => 'skins',
	),
	'jet-elements' => array(
		'name'   => esc_html__( 'Jet Elements', 'singerella' ),
		'source' => 'local',
		'path'   => SINGERELLA_THEME_DIR . '/inc/plugins/jet-elements.zip',
		'access' => 'skins',
	),
	'cherry-team-members' =>array(
		'name'   => esc_html__( 'Cherry Team Members', 'singerella' ),
		'access' => 'skins',
	),
	'cherry-services-list' => array(
		'name'   => esc_html__( 'Cherry Services List', 'singerella' ),
		'access' => 'skins',
	),
	'cherry-testi' => array(
		'name'   => esc_html__( 'Cherry Testimonials', 'singerella' ),
		'access' => 'skins',
	),
	'cherry-projects' => array(
		'name'   => esc_html__( 'Cherry Projects', 'singerella' ),
		'access' => 'skins',
	),
	'cherry-sidebars' => array(
		'name'   => esc_html__( 'Cherry Sidebars', 'singerella' ),
		'access' => 'skins',
	),
	'tm-timeline' => array(
		'name'   => esc_html__( 'TM Timeline', 'singerella' ),
		'access' => 'skins',
	),
	'contact-form-7' => array(
		'name'   => esc_html__( 'Contact Form 7', 'singerella' ),
		'access' => 'skins',
	),
	'smart-slider-3' => array(
		'name'   => esc_html__( 'Smart Slider 3', 'singerella' ),
		'access' => 'skins',
	),
	'cherry-data-importer' => array(
		'name'   => esc_html__( 'Cherry Data Importer', 'singerella' ),
		'source' => 'remote',
		'path'   => 'https://github.com/CherryFramework/cherry-data-importer/archive/master.zip',
		'access' => 'base',
	),
	'power-builder' => array(
		'name'   => esc_html__( 'Power Builder', 'singerella' ),
		'source' => 'local',
		'path'   => SINGERELLA_THEME_DIR . '/inc/plugins/power-builder.zip',
		'access' => 'skins',
		'required'  => false,
	),
	'tm-builder-integrator' => array(
		'name'   => esc_html__( 'Builder Integrator', 'singerella' ),
		'source' => 'remote',
		'path'   => 'https://github.com/templatemonster/power-builder-integrator/archive/master.zip',
		'access' => 'skins',
		'required'  => false,
	),
);

/**
 * Skins configuration example
 *
 * @var array
 */
$skins = array(
	'base' => array(
		'cherry-data-importer',
	),
	'advanced' => array(
		'default' => array(
			'full'  => array(
				'elementor',
				'jet-elements',
				'cherry-team-members',
				'cherry-services-list',
				'cherry-testi',
				'cherry-projects',
				'cherry-sidebars',
				'tm-timeline',
				'contact-form-7',
				'smart-slider-3',
			),
			'lite'  => false,
			'demo'  => 'http://ld-wp2.template-help.com/wptheme/singerella/',
			'thumb' => get_template_directory_uri() . '/assets/demo-content/default-thumb.png',
			'name'  => esc_html__( 'Singerella', 'singerella' ),
		),
	),
);

$texts = array(
	'theme-name' => 'Singerella'
);

