<?php
/**
 * Loop item meta
 */

if ( 'yes' !== $this->get_attr( 'show_meta' ) ) {
	return;
}

echo '<div class="post-meta">';

	cherry_elementor()->utility()->meta_data->get_date( array(
		'class'       => 'post__date-link',
		'html'        => '<span class="post__date">%1$s<a href="%2$s" %3$s %4$s ><time datetime="%5$s" title="%5$s">%6$s%7$s</time></a></span>',
		'echo'        => true,
	) );

	cherry_elementor()->utility()->meta_data->get_author( array(
		'class'   => 'posted-by__author',
		'prefix'  => esc_html__( 'by ', 'cherry-elementor' ),
		'html'    => '<span class="posted-by">%1$s<a href="%2$s" %3$s %4$s rel="author">%5$s%6$s</a></span>',
		'echo'    => true,
	) );

echo '</div>';