<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Singerella
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php $utility = singerella_utility()->utility; ?>

	<header class="entry-header">
		<?php $utility->attributes->get_title( array(
				'class' => 'entry-title screen-reader-text',
				'html'  => '<h1 %1$s>%4$s</h1>',
				'echo'  => true,
			) );
		?>
	</header><!-- .entry-header -->

	<?php $singerella_builder_on_class = singerella_builder_on_class( get_the_ID() ) ?>

	<div class="entry-content<?php echo $singerella_builder_on_class ?>">
		<?php the_content(); ?>
		<?php wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links__title">' . esc_html__( 'Pages:', 'singerella' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span class="page-links__item">',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'singerella' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				esc_html__( 'Edit %s', 'singerella' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			),
			'<div class="edit-link">',
			'</div>'
		);
	?>

</article><!-- #post-## -->
