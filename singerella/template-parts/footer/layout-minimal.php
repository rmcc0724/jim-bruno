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

<div class="footer-container container">
	<div class="site-info">
		<?php singerella_social_list( 'footer' ); ?>
		<div class="footer-container__inner">
			<?php singerella_footer_menu(); ?>
			<?php singerella_footer_copyright();?>
		</div>
	</div><!-- .site-info -->
</div><!-- .container -->
