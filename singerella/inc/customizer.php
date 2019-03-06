<?php
/**
 * Theme Customizer.
 *
 * @package Singerella
 */

/**
 * Retrieve a holder for Customizer options.
 *
 * @since  1.0.0
 * @return array
 */
function singerella_get_customizer_options() {
	/**
	 * Filter a holder for Customizer options (for theme/plugin developer customization).
	 *
	 * @since 1.0.0
	 */
	return apply_filters( 'singerella_get_customizer_options' , array(
		'prefix'     => 'singerella',
		'capability' => 'edit_theme_options',
		'type'       => 'theme_mod',
		'options'    => array(

			/** `Site Indentity` section */
			'show_tagline' => array(
				'title'    => esc_html__( 'Show tagline after logo', 'singerella' ),
				'section'  => 'title_tagline',
				'priority' => 60,
				'default'  => false,
				'field'    => 'checkbox',
				'type'     => 'control',
			),
			'totop_visibility' => array(
				'title'   => esc_html__( 'Show ToTop button', 'singerella' ),
				'section' => 'title_tagline',
				'priority' => 61,
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'page_preloader' => array(
				'title'    => esc_html__( 'Show page preloader', 'singerella' ),
				'section'  => 'title_tagline',
				'priority' => 62,
				'default'  => true,
				'field'    => 'checkbox',
				'type'     => 'control',
			),
			'general_settings' => array(
				'title'       => esc_html__( 'General Site settings', 'singerella' ),
				'priority'    => 40,
				'type'        => 'panel',
			),

			/** `Logo & Favicon` section */
			'logo_favicon' => array(
				'title'       => esc_html__( 'Logo &amp; Favicon', 'singerella' ),
				'priority'    => 25,
				'panel'       => 'general_settings',
				'type'        => 'section',
			),
			'header_logo_type' => array(
				'title'   => esc_html__( 'Logo Type', 'singerella' ),
				'section' => 'logo_favicon',
				'default' => 'image',
				'field'   => 'radio',
				'choices' => array(
					'image' => esc_html__( 'Image', 'singerella' ),
					'text'  => esc_html__( 'Text', 'singerella' ),
				),
				'type' => 'control',
			),
			'header_logo_url' => array(
				'title'           => esc_html__( 'Logo Upload', 'singerella' ),
				'description'     => esc_html__( 'Upload logo image', 'singerella' ),
				'section'         => 'logo_favicon',
				'default'         => '%s/assets/images/logo.png',
				'field'           => 'image',
				'type'            => 'control',
				'active_callback' => 'singerella_is_header_logo_image',
			),
			'retina_header_logo_url' => array(
				'title'           => esc_html__( 'Retina Logo Upload', 'singerella' ),
				'description'     => esc_html__( 'Upload logo for retina-ready devices', 'singerella' ),
				'section'         => 'logo_favicon',
				'field'           => 'image',
				'type'            => 'control',
				'active_callback' => 'singerella_is_header_logo_image',
			),
			'header_logo_font_family' => array(
				'title'           => esc_html__( 'Font Family', 'singerella' ),
				'section'         => 'logo_favicon',
				'default'         => 'Merriweather, serif',
				'field'           => 'fonts',
				'type'            => 'control',
				'active_callback' => 'singerella_is_header_logo_text',
			),
			'header_logo_font_style' => array(
				'title'           => esc_html__( 'Font Style', 'singerella' ),
				'section'         => 'logo_favicon',
				'default'         => 'normal',
				'field'           => 'select',
				'choices'         => singerella_get_font_styles(),
				'type'            => 'control',
				'active_callback' => 'singerella_is_header_logo_text',
			),
			'header_logo_font_weight' => array(
				'title'           => esc_html__( 'Font Weight', 'singerella' ),
				'section'         => 'logo_favicon',
				'default'         => '700',
				'field'           => 'select',
				'choices'         => singerella_get_font_weight(),
				'type'            => 'control',
				'active_callback' => 'singerella_is_header_logo_text',
			),
			'header_logo_font_size' => array(
				'title'           => esc_html__( 'Font Size, px', 'singerella' ),
				'section'         => 'logo_favicon',
				'default'         => '36',
				'field'           => 'number',
				'input_attrs'     => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type'            => 'control',
				'active_callback' => 'singerella_is_header_logo_text',
			),
			'header_logo_character_set' => array(
				'title'           => esc_html__( 'Character Set', 'singerella' ),
				'section'         => 'logo_favicon',
				'default'         => 'latin',
				'field'           => 'select',
				'choices'         => singerella_get_character_sets(),
				'type'            => 'control',
				'active_callback' => 'singerella_is_header_logo_text',
			),

			/** `Breadcrumbs` section */
			'breadcrumbs' => array(
				'title'    => esc_html__( 'Breadcrumbs', 'singerella' ),
				'priority' => 30,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'breadcrumbs_visibillity' => array(
				'title'   => esc_html__( 'Enable Breadcrumbs', 'singerella' ),
				'section' => 'breadcrumbs',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'breadcrumbs_front_visibillity' => array(
				'title'   => esc_html__( 'Enable Breadcrumbs on front page', 'singerella' ),
				'section' => 'breadcrumbs',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'breadcrumbs_page_title' => array(
				'title'   => esc_html__( 'Enable page title in breadcrumbs area', 'singerella' ),
				'section' => 'breadcrumbs',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'breadcrumbs_path_type' => array(
				'title'   => esc_html__( 'Show full/minified path', 'singerella' ),
				'section' => 'breadcrumbs',
				'default' => 'minified',
				'field'   => 'select',
				'choices' => array(
					'full'     => esc_html__( 'Full', 'singerella' ),
					'minified' => esc_html__( 'Minified', 'singerella' ),
				),
				'type'    => 'control',
			),
			'breadcrumbs_background_color' => array(
				'title'   => esc_html__( 'Background color', 'singerella' ),
				'section' => 'breadcrumbs',
				'default' => '#f8fafb',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			/** `Social links` section */
			'social_links' => array(
				'title'    => esc_html__( 'Social links', 'singerella' ),
				'priority' => 50,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'header_social_links' => array(
				'title'   => esc_html__( 'Show social links in header', 'singerella' ),
				'section' => 'social_links',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'footer_social_links' => array(
				'title'   => esc_html__( 'Show social links in footer', 'singerella' ),
				'section' => 'social_links',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_share_buttons' => array(
				'title'   => esc_html__( 'Show social sharing to blog posts', 'singerella' ),
				'section' => 'social_links',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_share_buttons' => array(
				'title'   => esc_html__( 'Show social sharing to single blog post', 'singerella' ),
				'section' => 'social_links',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),

			/** `Page Layout` section */
			'page_layout' => array(
				'title'    => esc_html__( 'Page Layout', 'singerella' ),
				'priority' => 55,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'header_container_type' => array(
			 	'title'   => esc_html__( 'Header type', 'singerella' ),
				'section' => 'page_layout',
				'default' => 'fullwidth',
				'field'   => 'select',
				'choices' => array(
					'boxed'     => esc_html__( 'Boxed', 'singerella' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'singerella' ),
				),
				'type' => 'control',
			),
			'content_container_type' => array(
				'title'   => esc_html__( 'Content type', 'singerella' ),
				'section' => 'page_layout',
				'default' => 'boxed',
				'field'   => 'select',
				'choices' => array(
					'boxed'     => esc_html__( 'Boxed', 'singerella' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'singerella' ),
				),
				'type' => 'control',
			),
			'footer_container_type' => array(
				'title'   => esc_html__( 'Footer type', 'singerella' ),
				'section' => 'page_layout',
				'default' => 'fullwidth',
				'field'   => 'select',
				'choices' => array(
					'boxed'     => esc_html__( 'Boxed', 'singerella' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'singerella' ),
				),
				'type' => 'control',
			),
			'container_width' => array(
				'title'       => esc_html__( 'Container width (px)', 'singerella' ),
				'section'     => 'page_layout',
				'default'     => 1200,
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 960,
					'max'  => 1920,
					'step' => 1,
				),
				'type' => 'control',
			),
			'sidebar_width' => array(
				'title'   => esc_html__( 'Sidebar width', 'singerella' ),
				'section' => 'page_layout',
				'default' => '1/4',
				'field'   => 'select',
				'choices' => array(
					'1/3' => '1/3',
					'1/4' => '1/4',
				),
				'sanitize_callback' => 'sanitize_text_field',
				'type'              => 'control',
			),

			/** `Color Scheme` panel */
			'color_scheme' => array(
				'title'       => esc_html__( 'Color Scheme', 'singerella' ),
				'description' => esc_html__( 'Configure Color Scheme', 'singerella' ),
				'priority'    => 40,
				'type'        => 'panel',
			),

			/** `Regular scheme` section */
			'regular_scheme' => array(
				'title'       => esc_html__( 'Regular scheme', 'singerella' ),
				'priority'    => 1,
				'panel'       => 'color_scheme',
				'type'        => 'section',
			),
			'regular_accent_color_1' => array(
				'title'   => esc_html__( 'Accent color (1)', 'singerella' ),
				'section' => 'regular_scheme',
				'default' => '#bf9a7b',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_accent_color_2' => array(
				'title'   => esc_html__( 'Accent color (2)', 'singerella' ),
				'section' => 'regular_scheme',
				'default' => '#363636',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_text_color' => array(
				'title'   => esc_html__( 'Text color', 'singerella' ),
				'section' => 'regular_scheme',
				'default' => '#777777',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_link_color' => array(
				'title'   => esc_html__( 'Link color', 'singerella' ),
				'section' => 'regular_scheme',
				'default' => '#bf9a7b',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_link_hover_color' => array(
				'title'   => esc_html__( 'Link hover color', 'singerella' ),
				'section' => 'regular_scheme',
				'default' => '#323232',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h1_color' => array(
				'title'   => esc_html__( 'H1 color', 'singerella' ),
				'section' => 'regular_scheme',
				'default' => '#27323d',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h2_color' => array(
				'title'   => esc_html__( 'H2 color', 'singerella' ),
				'section' => 'regular_scheme',
				'default' => '#363636',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h3_color' => array(
				'title'   => esc_html__( 'H3 color', 'singerella' ),
				'section' => 'regular_scheme',
				'default' => '#27323d',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h4_color' => array(
				'title'   => esc_html__( 'H4 color', 'singerella' ),
				'section' => 'regular_scheme',
				'default' => '#27323d',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h5_color' => array(
				'title'   => esc_html__( 'H5 color', 'singerella' ),
				'section' => 'regular_scheme',
				'default' => '#27323d',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h6_color' => array(
				'title'   => esc_html__( 'H6 color', 'singerella' ),
				'section' => 'regular_scheme',
				'default' => '#bababa',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			/** `Invert scheme` section */
			'invert_scheme' => array(
				'title'       => esc_html__( 'Invert scheme', 'singerella' ),
				'priority'    => 1,
				'panel'       => 'color_scheme',
				'type'        => 'section',
			),
			'invert_accent_color_1' => array(
				'title'   => esc_html__( 'Accent color (1)', 'singerella' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_accent_color_2' => array(
				'title'   => esc_html__( 'Accent color (2)', 'singerella' ),
				'section' => 'invert_scheme',
				'default' => '#525b64',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_text_color' => array(
				'title'   => esc_html__( 'Text color', 'singerella' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_link_color' => array(
				'title'   => esc_html__( 'Link color', 'singerella' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_link_hover_color' => array(
				'title'   => esc_html__( 'Link hover color', 'singerella' ),
				'section' => 'invert_scheme',
				'default' => '#bf9a7b',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h1_color' => array(
				'title'   => esc_html__( 'H1 color', 'singerella' ),
				'section' => 'invert_scheme',
				'default' => '#fff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h2_color' => array(
				'title'   => esc_html__( 'H2 color', 'singerella' ),
				'section' => 'invert_scheme',
				'default' => '#fff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h3_color' => array(
				'title'   => esc_html__( 'H3 color', 'singerella' ),
				'section' => 'invert_scheme',
				'default' => '#fff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h4_color' => array(
				'title'   => esc_html__( 'H4 color', 'singerella' ),
				'section' => 'invert_scheme',
				'default' => '#fff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h5_color' => array(
				'title'   => esc_html__( 'H5 color', 'singerella' ),
				'section' => 'invert_scheme',
				'default' => '#fff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h6_color' => array(
				'title'   => esc_html__( 'H6 color', 'singerella' ),
				'section' => 'invert_scheme',
				'default' => '#fff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			/** `Typography Settings` panel */
			'typography' => array(
				'title'       => esc_html__( 'Typography', 'singerella' ),
				'description' => esc_html__( 'Configure typography settings', 'singerella' ),
				'priority'    => 45,
				'type'        => 'panel',
			),

			/** `Body text` section */
			'body_typography' => array(
				'title'       => esc_html__( 'Body text', 'singerella' ),
				'priority'    => 5,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'body_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'singerella' ),
				'section' => 'body_typography',
				'default' => 'Lato, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'body_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'singerella' ),
				'section' => 'body_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => singerella_get_font_styles(),
				'type'    => 'control',
			),
			'body_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'singerella' ),
				'section' => 'body_typography',
				'default' => '300',
				'field'   => 'select',
				'choices' => singerella_get_font_weight(),
				'type'    => 'control',
			),
			'body_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'singerella' ),
				'section'     => 'body_typography',
				'default'     => '14',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type' => 'control',
			),
			'body_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'singerella' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'singerella' ),
				'section'     => 'body_typography',
				'default'     => '1.5',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'body_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'singerella' ),
				'section'     => 'body_typography',
				'default'     => '-0.2',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'body_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'singerella' ),
				'section' => 'body_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => singerella_get_character_sets(),
				'type'    => 'control',
			),
			'body_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'singerella' ),
				'section' => 'body_typography',
				'default' => 'left',
				'field'   => 'select',
				'choices' => singerella_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H1 Heading` section */
			'h1_typography' => array(
				'title'       => esc_html__( 'H1 Heading', 'singerella' ),
				'priority'    => 10,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h1_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'singerella' ),
				'section' => 'h1_typography',
				'default' => 'Lora, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h1_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'singerella' ),
				'section' => 'h1_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => singerella_get_font_styles(),
				'type'    => 'control',
			),
			'h1_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'singerella' ),
				'section' => 'h1_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => singerella_get_font_weight(),
				'type'    => 'control',
			),
			'h1_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'singerella' ),
				'section'     => 'h1_typography',
				'default'     => '72',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h1_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'singerella' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'singerella' ),
				'section'     => 'h1_typography',
				'default'     => '1',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h1_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'singerella' ),
				'section'     => 'h1_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h1_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'singerella' ),
				'section' => 'h1_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => singerella_get_character_sets(),
				'type'    => 'control',
			),
			'h1_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'singerella' ),
				'section' => 'h1_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => singerella_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H2 Heading` section */
			'h2_typography' => array(
				'title'       => esc_html__( 'H2 Heading', 'singerella' ),
				'priority'    => 15,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h2_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'singerella' ),
				'section' => 'h2_typography',
				'default' => 'Lora, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h2_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'singerella' ),
				'section' => 'h2_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => singerella_get_font_styles(),
				'type'    => 'control',
			),
			'h2_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'singerella' ),
				'section' => 'h2_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => singerella_get_font_weight(),
				'type'    => 'control',
			),
			'h2_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'singerella' ),
				'section'     => 'h2_typography',
				'default'     => '36',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h2_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'singerella' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'singerella' ),
				'section'     => 'h2_typography',
				'default'     => '1.1',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h2_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'singerella' ),
				'section'     => 'h2_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h2_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'singerella' ),
				'section' => 'h2_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => singerella_get_character_sets(),
				'type'    => 'control',
			),
			'h2_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'singerella' ),
				'section' => 'h2_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => singerella_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H3 Heading` section */
			'h3_typography' => array(
				'title'       => esc_html__( 'H3 Heading', 'singerella' ),
				'priority'    => 20,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h3_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'singerella' ),
				'section' => 'h3_typography',
				'default' => 'Lora, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h3_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'singerella' ),
				'section' => 'h3_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => singerella_get_font_styles(),
				'type'    => 'control',
			),
			'h3_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'singerella' ),
				'section' => 'h3_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => singerella_get_font_weight(),
				'type'    => 'control',
			),
			'h3_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'singerella' ),
				'section'     => 'h3_typography',
				'default'     => '24',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h3_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'singerella' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'singerella' ),
				'section'     => 'h3_typography',
				'default'     => '1.25',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h3_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'singerella' ),
				'section'     => 'h3_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h3_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'singerella' ),
				'section' => 'h3_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => singerella_get_character_sets(),
				'type'    => 'control',
			),
			'h3_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'singerella' ),
				'section' => 'h3_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => singerella_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H4 Heading` section */
			'h4_typography' => array(
				'title'       => esc_html__( 'H4 Heading', 'singerella' ),
				'priority'    => 25,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h4_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'singerella' ),
				'section' => 'h4_typography',
				'default' => 'Lora, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h4_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'singerella' ),
				'section' => 'h4_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => singerella_get_font_styles(),
				'type'    => 'control',
			),
			'h4_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'singerella' ),
				'section' => 'h4_typography',
				'default' => '700',
				'field'   => 'select',
				'choices' => singerella_get_font_weight(),
				'type'    => 'control',
			),
			'h4_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'singerella' ),
				'section'     => 'h4_typography',
				'default'     => '20',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h4_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'singerella' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'singerella' ),
				'section'     => 'h4_typography',
				'default'     => '1.25',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h4_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'singerella' ),
				'section'     => 'h4_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h4_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'singerella' ),
				'section' => 'h4_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => singerella_get_character_sets(),
				'type'    => 'control',
			),
			'h4_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'singerella' ),
				'section' => 'h4_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => singerella_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H5 Heading` section */
			'h5_typography' => array(
				'title'       => esc_html__( 'H5 Heading', 'singerella' ),
				'priority'    => 30,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h5_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'singerella' ),
				'section' => 'h5_typography',
				'default' => 'Lora, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h5_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'singerella' ),
				'section' => 'h5_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => singerella_get_font_styles(),
				'type'    => 'control',
			),
			'h5_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'singerella' ),
				'section' => 'h5_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => singerella_get_font_weight(),
				'type'    => 'control',
			),
			'h5_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'singerella' ),
				'section'     => 'h5_typography',
				'default'     => '18',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h5_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'singerella' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'singerella' ),
				'section'     => 'h5_typography',
				'default'     => '1.25',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h5_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'singerella' ),
				'section'     => 'h5_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h5_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'singerella' ),
				'section' => 'h5_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => singerella_get_character_sets(),
				'type'    => 'control',
			),
			'h5_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'singerella' ),
				'section' => 'h5_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => singerella_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H6 Heading` section */
			'h6_typography' => array(
				'title'       => esc_html__( 'H6 Heading', 'singerella' ),
				'priority'    => 35,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h6_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'singerella' ),
				'section' => 'h6_typography',
				'default' => 'Lato, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h6_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'singerella' ),
				'section' => 'h6_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => singerella_get_font_styles(),
				'type'    => 'control',
			),
			'h6_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'singerella' ),
				'section' => 'h6_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => singerella_get_font_weight(),
				'type'    => 'control',
			),
			'h6_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'singerella' ),
				'section'     => 'h6_typography',
				'default'     => '14',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h6_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'singerella' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'singerella' ),
				'section'     => 'h6_typography',
				'default'     => '1.25',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h6_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'singerella' ),
				'section'     => 'h6_typography',
				'default'     => '1',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h6_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'singerella' ),
				'section' => 'h6_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => singerella_get_character_sets(),
				'type'    => 'control',
			),
			'h6_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'singerella' ),
				'section' => 'h6_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => singerella_get_text_aligns(),
				'type'    => 'control',
			),

			/** `Main menu` section */
			'main_menu_typography' => array(
				'title'       => esc_html__( 'Main menu', 'singerella' ),
				'priority'    => 45,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'main_menu_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'singerella' ),
				'section' => 'main_menu_typography',
				'default' => 'Lato, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'main_menu_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'singerella' ),
				'section' => 'main_menu_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => singerella_get_font_styles(),
				'type'    => 'control',
			),
			'main_menu_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'singerella' ),
				'section' => 'main_menu_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => singerella_get_font_weight(),
				'type'    => 'control',
			),
			'main_menu_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'singerella' ),
				'section'     => 'main_menu_typography',
				'default'     => '12',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type' => 'control',
			),
			'main_menu_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'singerella' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'singerella' ),
				'section'     => 'main_menu_typography',
				'default'     => '1.7',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'main_menu_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'singerella' ),
				'section'     => 'main_menu_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'main_menu_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'singerella' ),
				'section' => 'main_menu_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => singerella_get_character_sets(),
				'type'    => 'control',
			),

			
			/** `Typography misc` section */
			'misc_styles' => array(
			    'title'    => esc_html__( 'Misc', 'singerella' ),
			    'priority' => 60,
			    'panel'    => 'typography',
			    'type'     => 'section',
			),
			'word_wrap' => array(
			    'title'   => esc_html__( 'Enable Word Wrap', 'singerella' ),
			    'section' => 'misc_styles',
			    'default' => false,
			    'field'   => 'checkbox',
			    'type'    => 'control',
			),

			/** `Header` panel */
			'header_options' => array(
				'title'       => esc_html__( 'Header', 'singerella' ),
				'priority'    => 60,
				'type'        => 'panel',
			),

			/** `Header styles` section */
			'header_styles' => array(
				'title'       => esc_html__( 'Styles', 'singerella' ),
				'priority'    => 5,
				'panel'       => 'header_options',
				'type'        => 'section',
			),
			'header_layout_type' => array(
				'title'   => esc_html__( 'Layout', 'singerella' ),
				'section' => 'header_styles',
				'default' => 'minimal',
				'field'   => 'select',
				'choices' => array(
					'minimal'  => esc_html__( 'Style 1', 'singerella' ),
					'centered' => esc_html__( 'Style 2', 'singerella' ),
					'default'  => esc_html__( 'Style 3', 'singerella' ),
				),
				'type' => 'control',
			),
			'header_search' => array(
				'title'   => esc_html__( 'Enable search', 'singerella' ),
				'section' => 'header_styles',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'header_bg_color' => array(
				'title'   => esc_html__( 'Background Color', 'singerella' ),
				'section' => 'header_styles',
				'field'   => 'hex_color',
				'default' => '#fff',
				'type'    => 'control',
			),
			'header_bg_image' => array(
				'title'   => esc_html__( 'Background Image', 'singerella' ),
				'section' => 'header_styles',
				'field'   => 'image',
				'type'    => 'control',
			),
			'header_bg_repeat' => array(
				'title'   => esc_html__( 'Background Repeat', 'singerella' ),
				'section' => 'header_styles',
				'default' => 'repeat',
				'field'   => 'select',
				'choices' => array(
					'no-repeat'  => esc_html__( 'No Repeat', 'singerella' ),
					'repeat'     => esc_html__( 'Tile', 'singerella' ),
					'repeat-x'   => esc_html__( 'Tile Horizontally', 'singerella' ),
					'repeat-y'   => esc_html__( 'Tile Vertically', 'singerella' ),
				),
				'type' => 'control',
			),
			'header_bg_position_x' => array(
				'title'   => esc_html__( 'Background Position', 'singerella' ),
				'section' => 'header_styles',
				'default' => 'center',
				'field'   => 'select',
				'choices' => array(
					'left'   => esc_html__( 'Left', 'singerella' ),
					'center' => esc_html__( 'Center', 'singerella' ),
					'right'  => esc_html__( 'Right', 'singerella' ),
				),
				'type' => 'control',
			),
			'header_bg_attachment' => array(
				'title'   => esc_html__( 'Background Attachment', 'singerella' ),
				'section' => 'header_styles',
				'default' => 'scroll',
				'field'   => 'select',
				'choices' => array(
					'scroll' => esc_html__( 'Scroll', 'singerella' ),
					'fixed'  => esc_html__( 'Fixed', 'singerella' ),
				),
				'type' => 'control',
			),

			/** `Top Panel` section */
			'header_top_panel' => array(
				'title'       => esc_html__( 'Top Panel', 'singerella' ),
				'priority'    => 10,
				'panel'       => 'header_options',
				'type'        => 'section',
			),
			'top_panel_bg' => array(
				'title'   => esc_html__( 'Background color', 'singerella' ),
				'section' => 'header_top_panel',
				'default' => '#363636',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'top_panel_text' => array(
				'title'       => esc_html__( 'Text', 'singerella' ),
				'description' => esc_html__( 'HTML formatting support', 'singerella' ),
				'section'     => 'header_top_panel',
				'default'     => singerella_get_default_header_text(),
				'field'       => 'textarea',
				'type'        => 'control',
			),

			/** `Header Showcase` section */
			'header_showcase_panel' => array(
				'title'       => esc_html__( 'Showcase Panel', 'singerella' ),
				'priority'    => 15,
				'panel'       => 'header_options',
				'type'        => 'section',
			),

			'header_showcase_title' => array(
				'title'    => esc_html__( 'Header showcase title', 'singerella' ),
				'section'  => 'header_showcase_panel',
				'default'  => esc_html__( 'Music for Everyone', 'singerella' ),
				'field'    => 'text',
				'type'     => 'control',
			),

			'header_showcase_subtitle' => array(
				'title'    => esc_html__( 'Header showcase subtitle', 'singerella' ),
				'section'  => 'header_showcase_panel',
				'default'  => esc_html__( 'awaken possibility', 'singerella' ),
				'field'    => 'text',
				'type'     => 'control',
			),

			'header_showcase_description' => array(
				'title'    => esc_html__( 'Header showcase description', 'singerella' ),
				'section'  => 'header_showcase_panel',
				'default'  => singerella_get_default_showcase_description(),
				'field'    => 'textarea',
				'type'     => 'control',
			),

			'header_showcase_btn_text' => array(
				'title'    => esc_html__( 'Header showcase button text(leave empty to hide button)', 'singerella' ),
				'section'  => 'header_showcase_panel',
				'default'  => esc_html__( 'start learning', 'singerella' ),
				'field'    => 'text',
				'type'     => 'control',
			),

			'header_showcase_btn_url' => array(
				'title'    => esc_html__( 'Header showcase button url', 'singerella' ),
				'section'  => 'header_showcase_panel',
				'default'  => '%%home_url%%/contacts/',
				'field'    => 'text',
				'type'     => 'control',
			),

			'header_showcase_btn_text_secondary' => array(
				'title'    => esc_html__( 'Header showcase button text secondary (leave empty to hide button)', 'singerella' ),
				'section'  => 'header_showcase_panel',
				'default'  => false,
				'field'    => 'text',
				'type'     => 'control',
			),

			'header_showcase_btn_url_secondary' => array(
				'title'    => esc_html__( 'Header showcase button url secondary', 'singerella' ),
				'section'  => 'header_showcase_panel',
				'default'  => false,
				'field'    => 'text',
				'type'     => 'control',
			),

			'header_showcase_bg_image' => array(
				'title'   => esc_html__( 'Background Image', 'singerella' ),
				'section' => 'header_showcase_panel',
				'field'   => 'image',
				'default' => '%s/assets/images/header_bg.jpg',
				'type'    => 'control',
			),

			'header_showcase_bg_color' => array(
				'title'   => esc_html__( 'Background Color', 'singerella' ),
				'section' => 'header_showcase_panel',
				'field'   => 'hex_color',
				'default' => '#181618',
				'type'    => 'control',
			),

			'header_showcase_bg_repeat' => array(
				'title'   => esc_html__( 'Background Repeat', 'singerella' ),
				'section' => 'header_showcase_panel',
				'default' => 'no-repeat',
				'field'   => 'select',
				'choices' => array(
					'no-repeat'  => esc_html__( 'No Repeat', 'singerella' ),
					'repeat'     => esc_html__( 'Tile', 'singerella' ),
					'repeat-x'   => esc_html__( 'Tile Horizontally', 'singerella' ),
					'repeat-y'   => esc_html__( 'Tile Vertically', 'singerella' ),
				),
				'type' => 'control',
			),

			'header_showcase_bg_position_x' => array(
				'title'   => esc_html__( 'Background Position', 'singerella' ),
				'section' => 'header_showcase_panel',
				'default' => 'center',
				'field'   => 'select',
				'choices' => array(
					'left'   => esc_html__( 'Left', 'singerella' ),
					'center' => esc_html__( 'Center', 'singerella' ),
					'right'  => esc_html__( 'Right', 'singerella' ),
				),
				'type' => 'control',
			),

			'header_showcase_bg_attachment' => array(
				'title'   => esc_html__( 'Background Attachment', 'singerella' ),
				'section' => 'header_showcase_panel',
				'default' => 'scroll',
				'field'   => 'select',
				'choices' => array(
					'scroll' => esc_html__( 'Scroll', 'singerella' ),
					'fixed'  => esc_html__( 'Fixed', 'singerella' ),
				),
				'type' => 'control',
			),

			'header_showcase_color_mask' => array(
				'title'   => esc_html__( 'Color Image Mask', 'singerella' ),
				'section' => 'header_showcase_panel',
				'field'   => 'hex_color',
				'default' => '#36a5ed',
				'type'    => 'control',
			),

			'header_showcase_opacity_mask' => array(
				'title'           => esc_html__( 'Opacity Image Mask', 'singerella' ),
				'section'         => 'header_showcase_panel',
				'default'         => '0',
				'field'           => 'number',
				'input_attrs'     => array(
					'min'  => 0,
					'max'  => 100,
					'step' => 1,
				),
				'type'            => 'control',
			),

			'showcase_title_color' => array(
				'title'   => esc_html__( 'Showcase title color', 'singerella' ),
				'section' => 'header_showcase_panel',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			'showcase_subtitle_color' => array(
				'title'   => esc_html__( 'Showcase subtitle color', 'singerella' ),
				'section' => 'header_showcase_panel',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			'showcase_description_color' => array(
				'title'   => esc_html__( 'Showcase description color', 'singerella' ),
				'section' => 'header_showcase_panel',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			/** `Main Menu` section */
			'header_main_menu' => array(
				'title'       => esc_html__( 'Main Menu', 'singerella' ),
				'priority'    => 20,
				'panel'       => 'header_options',
				'type'        => 'section',
			),
			'header_menu_sticky' => array(
				'title'   => esc_html__( 'Enable sticky menu', 'singerella' ),
				'section' => 'header_main_menu',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'header_menu_attributes' => array(
				'title'   => esc_html__( 'Enable item description', 'singerella' ),
				'section' => 'header_main_menu',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'hidden_menu_items_title' => array(
				'title'    => esc_html__( 'Hidden menu items title', 'singerella' ),
				'section'  => 'header_main_menu',
				'default'  => esc_html__( 'More', 'singerella' ),
				'field'    => 'input',
				'type'     => 'control',
			),

			/** `Main Menu` section */
			'header_main_menu' => array(
				'title'       => esc_html__( 'Main Menu', 'singerella' ),
				'priority'    => 15,
				'panel'       => 'header_options',
				'type'        => 'section',
			),
			'header_menu_sticky' => array(
				'title'   => esc_html__( 'Enable sticky menu', 'singerella' ),
				'section' => 'header_main_menu',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'header_menu_attributes' => array(
				'title'   => esc_html__( 'Enable title attributes', 'singerella' ),
				'section' => 'header_main_menu',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'hidden_menu_items_title' => array(
				'title'    => esc_html__( 'Hidden menu items title', 'singerella' ),
				'section'  => 'header_main_menu',
				'default'  => esc_html__( 'More', 'singerella' ),
				'field'    => 'input',
				'type'     => 'control'
			),

			/** `Sidebar` section */
			'sidebar_settings' => array(
				'title'    => esc_html__( 'Sidebar', 'singerella' ),
				'priority' => 105,
				'type'     => 'section',
			),
			'sidebar_position' => array(
				'title'   => esc_html__( 'Sidebar Position', 'singerella' ),
				'section' => 'sidebar_settings',
				'default' => 'one-right-sidebar',
				'field'   => 'select',
				'choices' => array(
					'one-left-sidebar'  => esc_html__( 'Sidebar on left side', 'singerella' ),
					'one-right-sidebar' => esc_html__( 'Sidebar on right side', 'singerella' ),
					'fullwidth'         => esc_html__( 'No sidebars', 'singerella' ),
				),
				'type' => 'control',
			),

			/** `MailChimp` section */
			'mailchimp' => array(
				'title'       => esc_html__( 'MailChimp', 'singerella' ),
				'description' => esc_html__( 'Setup MailChimp settings for subscribe widget', 'singerella' ),
				'priority'    => 109,
				'type'        => 'section',
			),
			'mailchimp_api_key' => array(
				'title'   => esc_html__( 'MailChimp API key', 'singerella' ),
				'section' => 'mailchimp',
				'field'   => 'text',
				'type'    => 'control',
			),
			'mailchimp_list_id' => array(
				'title'   => esc_html__( 'MailChimp list ID', 'singerella' ),
				'section' => 'mailchimp',
				'field'   => 'text',
				'type'    => 'control',
			),

			/** `Ads Management` panel */
			'ads_management' => array(
				'title'    => esc_html__( 'Ads Management', 'singerella' ),
				'priority' => 110,
				'type'     => 'section',
			),
			'ads_header' => array(
				'title'             => esc_html__( 'Header', 'singerella' ),
				'section'           => 'ads_management',
				'field'             => 'textarea',
				'default'           => '',
				'sanitize_callback' => 'esc_html',
				'type'              => 'control',
			),
			'ads_home_before_loop' => array(
				'title'             => esc_html__( 'Front Page Before Loop', 'singerella' ),
				'section'           => 'ads_management',
				'field'             => 'textarea',
				'default'           => '',
				'sanitize_callback' => 'esc_html',
				'type'              => 'control',
			),
			'ads_post_before_content' => array(
				'title'             => esc_html__( 'Post Before Content', 'singerella' ),
				'section'           => 'ads_management',
				'field'             => 'textarea',
				'default'           => '',
				'sanitize_callback' => 'esc_html',
				'type'              => 'control',
			),
			'ads_post_before_comments' => array(
				'title'             => esc_html__( 'Post Before Comments', 'singerella' ),
				'section'           => 'ads_management',
				'field'             => 'textarea',
				'default'           => '',
				'sanitize_callback' => 'esc_html',
				'type'              => 'control',
			),

			/** `Footer` panel */
			'footer_options' => array(
				'title'    => esc_html__( 'Footer', 'singerella' ),
				'priority' => 110,
				'type'     => 'section',
			),
			'footer_logo_url' => array(
				'title'   => esc_html__( 'Logo upload', 'singerella' ),
				'section' => 'footer_options',
				'field'   => 'image',
				'default' => '%s/assets/images/footer-logo.png',
				'type'    => 'control',
			),
			'footer_copyright' => array(
				'title'   => esc_html__( 'Copyright text', 'singerella' ),
				'section' => 'footer_options',
				'default' => singerella_get_default_footer_copyright(),
				'field'   => 'textarea',
				'type'    => 'control',
			),
			'footer_widget_columns' => array(
				'title'   => esc_html__( 'Widget Area Columns', 'singerella' ),
				'section' => 'footer_options',
				'default' => '4',
				'field'   => 'select',
				'choices' => array(
					'1' => '1',
					'2' => '2',
					'3' => '3',
					'4' => '4',
				),
				'type' => 'control'
			),
			'footer_layout_type' => array(
				'title'   => esc_html__( 'Layout', 'singerella' ),
				'section' => 'footer_options',
				'default' => 'minimal',
				'field'   => 'select',
				'choices' => array(
					'default'  => esc_html__( 'Style 1', 'singerella' ),
					'centered' => esc_html__( 'Style 2', 'singerella' ),
					'minimal'  => esc_html__( 'Style 3', 'singerella' ),
				),
				'type' => 'control'
			),
			'footer_widgets_bg' => array(
				'title'   => esc_html__( 'Footer Widgets Area color', 'singerella' ),
				'section' => 'footer_options',
				'default' => '#363636',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'footer_bg' => array(
				'title'   => esc_html__( 'Footer Background color', 'singerella' ),
				'section' => 'footer_options',
				'default' => '#2b2b2b',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			/** `Blog Settings` panel */
			'blog_settings' => array(
				'title'       => esc_html__( 'Blog Settings', 'singerella' ),
				'priority'    => 115,
				'type'        => 'panel',
			),

			/** `Blog` section */
			'blog' => array(
				'title'           => esc_html__( 'Blog', 'singerella' ),
				'panel'           => 'blog_settings',
				'priority'        => 10,
				'type'            => 'section',
				'active_callback' => 'is_home',
			),
			'blog_layout_type' => array(
				'title'   => esc_html__( 'Layout', 'singerella' ),
				'section' => 'blog',
				'default' => 'masonry-2-cols',
				'field'   => 'select',
				'choices' => array(
					'default'          => esc_html__( 'Listing', 'singerella' ),
					'grid-2-cols'      => esc_html__( 'Grid (2 Columns)', 'singerella' ),
					'grid-3-cols'      => esc_html__( 'Grid (3 Columns)', 'singerella' ),
					'masonry-2-cols'   => esc_html__( 'Masonry (2 Columns)', 'singerella' ),
					'masonry-3-cols'   => esc_html__( 'Masonry (3 Columns)', 'singerella' ),
				),
				'type' => 'control',
			),
			'blog_sticky_label' => array(
				'title'       => esc_html__( 'Featured Post Label', 'singerella' ),
				'description' => esc_html__( 'Label for sticky post', 'singerella' ),
				'section'     => 'blog',
				'default'     => 'icon:material:star_border',
				'field'       => 'text',
				'type'        => 'control',
			),
			'blog_posts_content' => array(
				'title'   => esc_html__( 'Post content', 'singerella' ),
				'section' => 'blog',
				'default' => 'excerpt',
				'field'   => 'select',
				'choices' => array(
					'excerpt' => esc_html__( 'Only excerpt', 'singerella' ),
					'full'    => esc_html__( 'Full content', 'singerella' ),
				),
				'type' => 'control',
			),
			'blog_featured_image' => array(
				'title'   => esc_html__( 'Featured image', 'singerella' ),
				'section' => 'blog',
				'default' => 'small',
				'field'   => 'select',
				'choices' => array(
					'small'     => esc_html__( 'Small', 'singerella' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'singerella' ),
				),
				'type' => 'control',
			),
			'blog_read_more_text' => array(
				'title'   => esc_html__( 'Read More button text', 'singerella' ),
				'section' => 'blog',
				'default' => esc_html__( 'Read More', 'singerella' ),
				'field'   => 'text',
				'type'    => 'control',
			),
			'blog_post_author' => array(
				'title'   => esc_html__( 'Show post author', 'singerella' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_publish_date' => array(
				'title'   => esc_html__( 'Show publish date', 'singerella' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_categories' => array(
				'title'   => esc_html__( 'Show categories', 'singerella' ),
				'section' => 'blog',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_tags' => array(
				'title'   => esc_html__( 'Show tags', 'singerella' ),
				'section' => 'blog',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_comments' => array(
				'title'   => esc_html__( 'Show comments', 'singerella' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),

			/** `Post` section */
			'blog_post' => array(
				'title'           => esc_html__( 'Post', 'singerella' ),
				'panel'           => 'blog_settings',
				'priority'        => 20,
				'type'            => 'section',
				'active_callback' => 'callback_single',
			),
			'single_post_author' => array(
				'title'   => esc_html__( 'Show post author', 'singerella' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_publish_date' => array(
				'title'   => esc_html__( 'Show publish date', 'singerella' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_categories' => array(
				'title'   => esc_html__( 'Show categories', 'singerella' ),
				'section' => 'blog_post',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_tags' => array(
				'title'   => esc_html__( 'Show tags', 'singerella' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_comments' => array(
				'title'   => esc_html__( 'Show comments', 'singerella' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_author_block' => array(
				'title'   => esc_html__( 'Enable the author block after each post', 'singerella' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),

			/** Blockquote */
			'blockquote_typography' => array(
				'title'       => esc_html__( 'Blockquote', 'singerella' ),
				'priority'    => 45,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'blockquote_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'singerella' ),
				'section' => 'blockquote_typography',
				'default' => 'Open Sans, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'blockquote_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'singerella' ),
				'section' => 'blockquote_typography',
				'default' => 'italic',
				'field'   => 'select',
				'choices' => singerella_get_font_styles(),
				'type'    => 'control',
			),
			'blockquote_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'singerella' ),
				'section' => 'blockquote_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => singerella_get_font_weight(),
				'type'    => 'control',
			),
			'blockquote_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'singerella' ),
				'section'     => 'blockquote_typography',
				'default'     => '24',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type' => 'control',
			),
			'blockquote_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'singerella' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'singerella' ),
				'section'     => 'blockquote_typography',
				'default'     => '1.5',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'blockquote_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'singerella' ),
				'section'     => 'blockquote_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'blockquote_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'singerella' ),
				'section' => 'blockquote_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => singerella_get_character_sets(),
				'type'    => 'control',
			),
			'blockquote_color' => array(
				'title'   => esc_html__( 'Blockquote color', 'singerella' ),
				'section' => 'blockquote_typography',
				'default' => '#2a2f33',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			/** Metadata */
			'metadata_typography' => array(
				'title'       => esc_html__( 'Metadata typography', 'singerella' ),
				'priority'    => 45,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'metadata_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'singerella' ),
				'section' => 'metadata_typography',
				'default' => 'Open Sans, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'metadata_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'singerella' ),
				'section' => 'metadata_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => singerella_get_font_styles(),
				'type'    => 'control',
			),
			'metadata_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'singerella' ),
				'section' => 'metadata_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => singerella_get_font_weight(),
				'type'    => 'control',
			),
			'metadata_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'singerella' ),
				'section'     => 'metadata_typography',
				'default'     => '12',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type' => 'control',
			),
			'metadata_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'singerella' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'singerella' ),
				'section'     => 'metadata_typography',
				'default'     => '2',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'metadata_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'singerella' ),
				'section'     => 'metadata_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'metadata_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'singerella' ),
				'section' => 'metadata_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => singerella_get_character_sets(),
				'type'    => 'control',
			),
	) ) );
}

/**
 * Return true if logo in header has image type. Otherwise - return false.
 *
 * @param  object $control
 * @return bool
 */
function singerella_is_header_logo_image( $control ) {

	if ( $control->manager->get_setting( 'header_logo_type' )->value() == 'image' ) {
		return true;
	}

	return false;
}


/**
 * Return true if logo in header has text type. Otherwise - return false.
 *
 * @param  object $control
 * @return bool
 */
function singerella_is_header_logo_text( $control ) {

	if ( $control->manager->get_setting( 'header_logo_type' )->value() == 'text' ) {
		return true;
	}

	return false;
}

// Move native `site_icon` control (based on WordPress core) in custom section.
add_action( 'customize_register', 'singerella_customizer_change_core_controls', 20 );
function singerella_customizer_change_core_controls( $wp_customize ) {
	$wp_customize->get_control( 'site_icon' )->section      = 'singerella_logo_favicon';
	$wp_customize->get_control( 'background_color' )->label = esc_html__( 'Body Background Color', 'singerella' );
}

////////////////////////////////////
// Typography utility function    //
////////////////////////////////////
function singerella_get_font_styles() {
	return apply_filters( 'singerella_get_font_styles', array(
		'normal'  => esc_html__( 'Normal', 'singerella' ),
		'italic'  => esc_html__( 'Italic', 'singerella' ),
		'oblique' => esc_html__( 'Oblique', 'singerella' ),
		'inherit' => esc_html__( 'Inherit', 'singerella' ),
	) );
}

function singerella_get_character_sets() {
	return apply_filters( 'singerella_get_character_sets', array(
		'latin'        => esc_html__( 'Latin', 'singerella' ),
		'greek'        => esc_html__( 'Greek', 'singerella' ),
		'greek-ext'    => esc_html__( 'Greek Extended', 'singerella' ),
		'vietnamese'   => esc_html__( 'Vietnamese', 'singerella' ),
		'cyrillic-ext' => esc_html__( 'Cyrillic Extended', 'singerella' ),
		'latin-ext'    => esc_html__( 'Latin Extended', 'singerella' ),
		'cyrillic'     => esc_html__( 'Cyrillic', 'singerella' ),
	) );
}

function singerella_get_text_aligns() {
	return apply_filters( 'singerella_get_text_aligns', array(
		'inherit' => esc_html__( 'Inherit', 'singerella' ),
		'center'  => esc_html__( 'Center', 'singerella' ),
		'justify' => esc_html__( 'Justify', 'singerella' ),
		'left'    => esc_html__( 'Left', 'singerella' ),
		'right'   => esc_html__( 'Right', 'singerella' ),
	) );
}

function singerella_get_font_weight() {
	return apply_filters( 'singerella_get_font_weight', array(
		'100' => '100',
		'200' => '200',
		'300' => '300',
		'400' => '400',
		'500' => '500',
		'600' => '600',
		'700' => '700',
		'800' => '800',
		'900' => '900',
	) );
}



/**
 * Get text transform
 */
function singerella_get_text_transform() {
	return apply_filters( 'singerella_get_text_transform', array(
		'none'       => esc_html__( 'None ', 'singerella' ),
		'uppercase'  => esc_html__( 'Uppercase ', 'singerella' ),
		'lowercase'  => esc_html__( 'Lowercase', 'singerella' ),
		'capitalize' => esc_html__( 'Capitalize', 'singerella' ),
	) );
}

/**
 * Return array of arguments for dynamic CSS module
 *
 * @return array
 */
function singerella_get_dynamic_css_options() {
	return apply_filters( 'singerella_get_dynamic_css_options', array(
		'prefix'    => 'singerella',
		'type'      => 'theme_mod',
		'single'    => true,
		'css_files' => array(
			SINGERELLA_THEME_DIR . '/assets/css/dynamic.css',
			SINGERELLA_THEME_DIR . '/assets/css/dynamic/site/elements.css',
			SINGERELLA_THEME_DIR . '/assets/css/dynamic/site/header.css',
			SINGERELLA_THEME_DIR . '/assets/css/dynamic/site/forms.css',
			SINGERELLA_THEME_DIR . '/assets/css/dynamic/site/social.css',
			SINGERELLA_THEME_DIR . '/assets/css/dynamic/site/menus.css',
			SINGERELLA_THEME_DIR . '/assets/css/dynamic/site/post.css',
			SINGERELLA_THEME_DIR . '/assets/css/dynamic/site/navigation.css',
			SINGERELLA_THEME_DIR . '/assets/css/dynamic/site/footer.css',
			SINGERELLA_THEME_DIR . '/assets/css/dynamic/site/misc.css',
			SINGERELLA_THEME_DIR . '/assets/css/dynamic/site/buttons.css',
			SINGERELLA_THEME_DIR . '/assets/css/dynamic/widgets/widget-default.css',
			SINGERELLA_THEME_DIR . '/assets/css/dynamic/widgets/taxonomy-tiles.css',
			SINGERELLA_THEME_DIR . '/assets/css/dynamic/widgets/image-grid.css',
			SINGERELLA_THEME_DIR . '/assets/css/dynamic/widgets/carousel.css',
			SINGERELLA_THEME_DIR . '/assets/css/dynamic/widgets/smart-slider.css',
			SINGERELLA_THEME_DIR . '/assets/css/dynamic/widgets/instagram.css',
			SINGERELLA_THEME_DIR . '/assets/css/dynamic/widgets/subscribe.css',
			SINGERELLA_THEME_DIR . '/assets/css/dynamic/elementor/default-elements.css',
			SINGERELLA_THEME_DIR . '/assets/css/dynamic/elementor/cherry-elements.css',
			SINGERELLA_THEME_DIR . '/assets/css/builder.css',
		),
		'options' => array(
			'header_logo_font_style',
			'header_logo_font_weight',
			'header_logo_font_size',
			'header_logo_font_family',

			'body_font_style',
			'body_font_weight',
			'body_font_size',
			'body_line_height',
			'body_font_family',
			'body_letter_spacing',
			'body_text_align',

			'h1_font_style',
			'h1_font_weight',
			'h1_font_size',
			'h1_line_height',
			'h1_font_family',
			'h1_letter_spacing',
			'h1_text_align',

			'h2_font_style',
			'h2_font_weight',
			'h2_font_size',
			'h2_line_height',
			'h2_font_family',
			'h2_letter_spacing',
			'h2_text_align',

			'h3_font_style',
			'h3_font_weight',
			'h3_font_size',
			'h3_line_height',
			'h3_font_family',
			'h3_letter_spacing',
			'h3_text_align',

			'h4_font_style',
			'h4_font_weight',
			'h4_font_size',
			'h4_line_height',
			'h4_font_family',
			'h4_letter_spacing',
			'h4_text_align',

			'h5_font_style',
			'h5_font_weight',
			'h5_font_size',
			'h5_line_height',
			'h5_font_family',
			'h5_letter_spacing',
			'h5_text_align',

			'h6_font_style',
			'h6_font_weight',
			'h6_font_size',
			'h6_line_height',
			'h6_font_family',
			'h6_letter_spacing',
			'h6_text_align',

			'header_showcase_bg_color',
			'header_showcase_bg_repeat',
			'header_showcase_bg_position_x',
			'header_showcase_bg_attachment',
			'header_showcase_color_mask',
			'header_showcase_opacity_mask',
			'showcase_title_color',
			'showcase_subtitle_color',
			'showcase_description_color',

			'main_menu_font_style',
			'main_menu_font_weight',
			'main_menu_font_size',
			'main_menu_line_height',
			'main_menu_font_family',
			'main_menu_letter_spacing',
			'main_menu_text_align',

			'breadcrumbs_background_color',

			'blockquote_font_style',
			'blockquote_font_weight',
			'blockquote_font_size',
			'blockquote_line_height',
			'blockquote_font_family',
			'blockquote_letter_spacing',
			'blockquote_text_align',
			'blockquote_color',

			'metadata_font_style',
			'metadata_font_weight',
			'metadata_font_size',
			'metadata_line_height',
			'metadata_font_family',
			'metadata_letter_spacing',
			'metadata_text_align',

			'regular_accent_color_1',
			'regular_accent_color_2',
			'regular_text_color',
			'regular_link_color',
			'regular_link_hover_color',
			'regular_h1_color',
			'regular_h2_color',
			'regular_h3_color',
			'regular_h4_color',
			'regular_h5_color',
			'regular_h6_color',

			'invert_accent_color_1',
			'invert_accent_color_2',
			'invert_text_color',
			'invert_link_color',
			'invert_link_hover_color',
			'invert_h1_color',
			'invert_h2_color',
			'invert_h3_color',
			'invert_h4_color',
			'invert_h5_color',
			'invert_h6_color',

			'header_bg_color',
			'header_bg_image',
			'header_bg_repeat',
			'header_bg_position_x',
			'header_bg_attachment',

			'top_panel_bg',

			'container_width',

			'footer_widgets_bg',
			'footer_bg',
		),
	) );
}

/**
 * Return array of arguments for Google Font loader module.
 *
 * @since  1.0.0
 * @return array
 */
function singerella_get_fonts_options() {
	return apply_filters( 'singerella_get_fonts_options', array(
		'prefix'  => 'singerella',
		'type'    => 'theme_mod',
		'single'  => true,
		'options' => array(
			'body' => array(
				'family'  => 'body_font_family',
				'style'   => 'body_font_style',
				'weight'  => 'body_font_weight',
				'charset' => 'body_character_set',
			),
			'h1' => array(
				'family'  => 'h1_font_family',
				'style'   => 'h1_font_style',
				'weight'  => 'h1_font_weight',
				'charset' => 'h1_character_set',
			),
			'h2' => array(
				'family'  => 'h2_font_family',
				'style'   => 'h2_font_style',
				'weight'  => 'h2_font_weight',
				'charset' => 'h2_character_set',
			),
			'h3' => array(
				'family'  => 'h3_font_family',
				'style'   => 'h3_font_style',
				'weight'  => 'h3_font_weight',
				'charset' => 'h3_character_set',
			),
			'h4' => array(
				'family'  => 'h4_font_family',
				'style'   => 'h4_font_style',
				'weight'  => 'h4_font_weight',
				'charset' => 'h4_character_set',
			),
			'h5' => array(
				'family'  => 'h5_font_family',
				'style'   => 'h5_font_style',
				'weight'  => 'h5_font_weight',
				'charset' => 'h5_character_set',
			),
			'h6' => array(
				'family'  => 'h6_font_family',
				'style'   => 'h6_font_style',
				'weight'  => 'h6_font_weight',
				'charset' => 'h6_character_set',
			),
			'header_logo' => array(
				'family'  => 'header_logo_font_family',
				'style'   => 'header_logo_font_style',
				'weight'  => 'header_logo_font_weight',
				'charset' => 'header_logo_character_set',
			),
			'main_menu' => array(
				'family'  => 'main_menu_font_family',
				'style'   => 'main_menu_font_style',
				'weight'  => 'main_menu_font_weight',
				'charset' => 'main_menu_character_set',
			),
			'blockquote' => array(
				'family'  => 'blockquote_font_family',
				'style'   => 'blockquote_font_style',
				'weight'  => 'blockquote_font_weight',
				'charset' => 'blockquote_character_set',
			),
			'metadata' => array(
				'family'  => 'metadata_font_family',
				'style'   => 'metadata_font_style',
				'weight'  => 'metadata_font_weight',
				'charset' => 'metadata_character_set',
			),
		)
	) );
}

/**
 * Get default top panel text.
 *
 * @since  1.0.0
 * @return string
 */
function singerella_get_default_header_text() {
	return sprintf(
		'<div class="info-block"><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:#">%s</a></div>
		<div class="info-block"><i class="fa fa-mobile" aria-hidden="true"></i><a href="tel:#">%s</a></div>',
		esc_html__( 'Singerella@demolink.org', 'singerella' ),
		esc_html__( '555 2346-789', 'singerella' )
	);
}

/**
 * Get default footer copyright.
 *
 * @since  1.0.0
 * @return string
 */
function singerella_get_default_footer_copyright() {
	return sprintf(
		'%%year%% &#169; %1$s | <a href=\"%%privacy-policy%%\">%2$s</a>',
		esc_html__( 'Singerella. All Rights Reserved', 'singerella' ),
		esc_html__( 'Privacy Policy', 'singerella' )
	);
}

/**
 * Get default showcase description.
 *
 * @since  1.0.0
 * @return string
 */
function singerella_get_default_showcase_description() {
	return esc_html__( 'We offer music education for individuals of just about every age and skill level.', 'singerella' );
}
