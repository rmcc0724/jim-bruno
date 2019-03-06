<?php
/**
 * Loop item contnet
 */

if ( 'yes' !== $this->get_attr( 'show_excerpt' ) ) {
	return;
}

cherry_elementor()->utility()->attributes->get_content( array(
	'length'       => intval( $this->get_attr( 'excerpt_length' ) ),
	'content_type' => 'post_excerpt',
	'html'         => '<div %1$s>%2$s</div>',
	'class'        => 'entry-excerpt',
	'echo'         => true,
) );