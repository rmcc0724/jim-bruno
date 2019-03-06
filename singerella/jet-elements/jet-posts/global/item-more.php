<?php
/**
 * Loop item more button
 */

if ( 'yes' !== $this->get_attr( 'show_more' ) ) {
	return;
}

jet_elements()->utility()->attributes->get_button( array(
	'class' => 'btn btn-primary',
	'text'  => $this->get_attr( 'more_text' ),
	'icon'  => '',
	'html'  => '<a href="%1$s" %3$s><span class="btn__text">%4$s</span>%5$s</a>',
	'echo'  => true,
) );