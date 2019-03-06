
	<div class="comment-author vcard">
		<?php echo singerella_comment_author_avatar(); ?>
	</div>

<div class="comment-content">
	<footer class="comment-meta">
		<div class="comment-metadata">
			<?php echo singerella_get_comment_date( array( 'format' => 'M d, Y' ) ); ?>
			<?php printf( '<span class="posted-by">' . esc_html__( 'Posted by', 'singerella' ) . '</span> %s', singerella_get_comment_author_link() ); ?>
		</div>
	</footer>
	<?php echo singerella_get_comment_text(); ?>
</div>
<div class="reply">
	<?php echo singerella_get_comment_reply_link( array( 'reply_text' => '<i class="material-icons">reply</i>' ) ); ?>
</div>
