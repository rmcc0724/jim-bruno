<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Singerella
 */
?>
<?php $size = singerella_post_thumbnail_size( array( 'class_prefix' => 'post-thumbnail--' ) ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'posts-list__item card ' . $size[ 'class' ] ); ?>>

	<?php $utility = singerella_utility()->utility; ?>

	<figure class="post-thumbnail">
		<?php $size = singerella_post_thumbnail_size( array( 'class_prefix' => 'post-thumbnail--' ) ); ?>

		<?php $utility->media->get_image( array(
				'size'        => $size['size'],
				'class'       => 'post-thumbnail__link ',
				'html'        => '<a href="%1$s" %2$s><img class="post-thumbnail__img wp-post-image" src="%3$s" alt="%4$s" %5$s></a>',
				'placeholder' => false,
				'echo'        => true,
			) );
		?>

		<?php $cats_visible = singerella_is_meta_visible( 'blog_post_categories', 'loop' ) ? 'true' : 'false'; ?>

		<?php $utility->meta_data->get_terms( array(
				'visible' => $cats_visible,
				'type'    => 'category',
				'icon'    => '',
				'before'  => '<div class="post__cats">',
				'after'   => '</div>',
				'echo'    => true,
			) );
		?>

		<?php singerella_sticky_label(); ?>

		<div class="post-thumbnail__format-link">
			<?php do_action( 'cherry_post_format_link', array( 'render' => true ) ); ?>
		</div>

	</figure><!-- .post-thumbnail -->

	<div class="post-list__item-content">
		<div class="post-list__item-content--inner">
			<header class="entry-header">
				<?php if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php $tags_visible = singerella_is_meta_visible( 'blog_post_tags', 'loop' ) ? 'true' : 'false';

							$utility->meta_data->get_terms( array(
								'visible'   => $tags_visible,
								'type'      => 'post_tag',
								'delimiter' => ' ',
								'icon'      => '',
								'before'    => '<div class="post__tags">',
								'after'     => '</div>',
								'echo'      => true,
							) );
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>

				<?php $author_visible = singerella_is_meta_visible( 'blog_post_author', 'loop' ) ? 'true' : 'false'; ?>

				<?php
					$title_html = ( is_single() ) ? '<h1 %1$s>%4$s</h1>' : '<h4 %1$s><a href="%2$s" rel="bookmark">%4$s</a></h4>';

					$utility->attributes->get_title( array(
						'class' => 'entry-title',
						'html'  => $title_html,
						'echo'  => true,
					) );
				?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php $blog_content = get_theme_mod( 'blog_posts_content', singerella_theme()->customizer->get_default( 'blog_posts_content' ) );
					$length = ( 'full' === $blog_content ) ? -1 : 25;
					$content_type = ( 'full' !== $blog_content ) ? 'post_excerpt' : 'post_content';

					$utility->attributes->get_content( array(
						'length'       => $length,
						'content_type' => $content_type,
						'echo'         => true,
					) );
				?>

				<div class="entry-content--footer">
					<?php $utility->attributes->get_button( array(
						'class' => 'btn btn-primary',
						'text'  => get_theme_mod( 'blog_read_more_text', singerella_theme()->customizer->get_default( 'blog_read_more_text' ) ),
						'icon'  => '<i class="material-icons">arrow_forward</i>',
						'html'  => '<a href="%1$s" %3$s><span class="btn__text">%4$s</span>%5$s</a>',
						'echo'  => true,
					) );
					?>

					<?php singerella_share_buttons( 'loop' ); ?>
				</div>

			</div><!-- .entry-content -->
		</div>

		<footer class="entry-footer">
			<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<span class="post__date">
						<?php $date_visible = singerella_is_meta_visible( 'blog_post_publish_date', 'loop' ) ? 'true' : 'false';

							$utility->meta_data->get_date( array(
								'visible' => $date_visible,
								'class'   => 'post__date-link',
								'icon'    => '',
								'echo'    => true,
							) );
						?>
					</span>
					<?php $utility->meta_data->get_author( array(
						'visible' => $author_visible,
						'class'   => 'posted-by__author',
						'prefix'  => esc_html__( 'by ', 'singerella' ),
						'html'    => '<span class="posted-by">%1$s<a href="%2$s" %3$s %4$s rel="author">%5$s%6$s</a></span>',
						'echo'    => true,
					) );
					?>
					<span class="post__comments">
						<?php $comment_visible = singerella_is_meta_visible( 'blog_post_comments', 'loop' ) ? 'true' : 'false';

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
		</footer><!-- .entry-footer -->
	</div><!-- .post-list__item-content -->

</article><!-- #post-## -->