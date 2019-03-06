<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Singerella
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php $utility = singerella_utility()->utility; ?>

	<figure class="post-thumbnail">
		<?php $utility->media->get_image( array(
				'size'        => 'singerella-thumb-l',
				'html'        => '<img class="post-thumbnail__img wp-post-image" src="%3$s" alt="%4$s">',
				'placeholder' => false,
				'echo'        => true,
			) );
		?>
	</figure><!-- .post-thumbnail -->

	<header class="entry-header">
		<?php $cats_visible = singerella_is_meta_visible( 'single_post_categories', 'single' ) ? 'true' : 'false'; ?>

		<?php $utility->meta_data->get_terms( array(
				'visible' => $cats_visible,
				'type'    => 'category',
				'icon'    => '',
				'before'  => '<div class="post__cats">',
				'after'   => '</div>',
				'echo'    => true,
			) );
		?>

		<?php $utility->attributes->get_title( array(
				'class' => 'entry-title',
				'html'  => '<h2 %1$s>%4$s</h2>',
				'echo'  => true,
			) );
		?>

		<?php if ( 'post' === get_post_type() ) : ?>

			<div class="entry-meta">
				<span class="post__date">
					<?php $date_visible = singerella_is_meta_visible( 'blog_post_publish_date', 'single' ) ? 'true' : 'false';

						$utility->meta_data->get_date( array(
							'visible' => $date_visible,
							'class'   => 'post__date-link',
							'icon'    => '',
							'echo'    => true,
						) );
					?>
				</span>
				<?php $author_visible = singerella_is_meta_visible( 'blog_post_author', 'single' ) ? 'true' : 'false'; ?>
				<?php $utility->meta_data->get_author( array(
					'visible' => $author_visible,
					'class'   => 'posted-by__author',
					'prefix'  => esc_html__( 'by ', 'singerella' ),
					'html'    => '<span class="posted-by">%1$s<a href="%2$s" %3$s %4$s rel="author">%5$s%6$s</a></span>',
					'echo'    => true,
				) );
				?>
				<span class="post__comments">
					<?php $comment_visible = singerella_is_meta_visible( 'blog_post_comments', 'single' ) ? 'true' : 'false';

						$utility->meta_data->get_comment_count( array(
							'visible' => $comment_visible,
							'class'   => 'post__comments-link',
							'sufix'  => esc_html__( ' %s comment(s)', 'singerella' ),
							'icon'    => '<i class="material-icons">chat_bubble_outline</i>',
							'echo'    => true,
						) );
					?>
				</span>
			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

	<?php singerella_ads_post_before_content() ?>

	<div class="entry-content">
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

	<footer class="entry-footer">
		<?php singerella_share_buttons( 'single', array(), array('before' => '<h4 class="share-btns__text">' . esc_html__( 'Share:', 'singerella' ) . '</h4>' )); ?>
		<?php $tags_visible = singerella_is_meta_visible( 'single_post_tags', 'single' ) ? 'true' : 'false'; ?>

		<?php $utility->meta_data->get_terms( array(
				'visible'   => $tags_visible,
				'type'      => 'post_tag',
				'delimiter' => '',
				'icon'      => '',
				'before'    => '<div class="post__tags"><h4>' . esc_html__('Tags:', 'singerella') . '</h4>',
				'after'     => '</div>',
				'echo'      => true,
			) );
		?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
