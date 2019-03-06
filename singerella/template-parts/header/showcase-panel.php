<?php
/**
 * Template part for showcase panel in header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Singerella
 */

// Don't show showcase panel if all elements are disabled.
if ( ! singerella_is_showcase_panel_visible() ) {
	return;
} ?>

<div <?php echo singerella_get_container_classes( array( 'showcase-panel' ), 'header' ); ?>>
	<div class="showcase-panel-inner container">
		<?php singerella_showcase_text_elements( '<h1 class="showcase-panel__title">%s</h1>', 'title' ); ?>
		<?php singerella_showcase_text_elements( '<h5 class="showcase-panel__subtitle">%s</h5>', 'subtitle' ); ?>
		<?php singerella_showcase_text_elements( '<p class="showcase-panel__description">%s</p>', 'description' ); ?>
		<?php singerella_showcase_btn(); ?>
		<?php singerella_showcase_btn_secondary(); ?>
	</div>
</div><!-- .showcase-panel -->
