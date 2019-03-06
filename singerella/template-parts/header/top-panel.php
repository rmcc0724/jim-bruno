<?php
/**
 * Template part for top panel in header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Singerella
 */

// Don't show top panel if all elements are disabled.
if ( ! singerella_is_top_panel_visible() ) {
	return;
} ?>

<div class="top-panel invert">
	<div class="top-panel-container container">
		<div <?php echo singerella_get_container_classes( array( 'top-panel__wrap' ), 'header' ); ?>>
			<?php singerella_top_message( '<div class="top-panel__message">%s</div>' ); ?>
			<?php singerella_top_menu(); ?>
			<?php singerella_social_list( 'header' ); ?>
		</div>
	</div>
</div><!-- .top-panel -->
