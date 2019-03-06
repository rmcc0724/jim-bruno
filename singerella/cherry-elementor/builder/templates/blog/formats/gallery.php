<?php
/**
 * Template for displaying standard post format item content
 */

$html = $this->get_template_part( 'blog/meta.php' ) . $this->get_post_content() . $this->get_more_button();

?>
<?php tm_pb_gallery_images( 'slider' ); ?>
<h4 class="entry-title"><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h4>
<?php echo $html; ?>
