<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Singerella
 */

?>

<?php if ( is_active_sidebar( 'footer-area' ) ){ ?>
	<div class="footer-area-wrap invert">
		<div class="container">
			<?php do_action( 'singerella_render_widget_area', 'footer-area' ); ?>
		</div>
	</div>
<?php } ?>

<div class="footer-container">
	<div <?php echo singerella_get_container_classes( array( 'site-info' ), 'footer' ); ?>>
		<?php
			singerella_footer_logo();
			singerella_social_list( 'footer' );
			singerella_footer_copyright();
			singerella_footer_menu();
		?>
	</div><!-- .site-info -->
</div><!-- .container -->
