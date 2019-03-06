<?php
/**
 * Template part for centered Header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Singerella
 */

$search = get_theme_mod( 'header_search', singerella_theme()->customizer->get_default( 'header_search' ) );
$header_logo_type = get_theme_mod( 'header_logo_type', singerella_theme()->customizer->get_default( 'header_logo_type' ) );

?>
<div class="header-container__flex">
	<div class="site-branding">
		<?php singerella_header_logo() ?>
		<?php singerella_site_description(); ?>
	</div>

	<?php singerella_main_menu(); ?>

	<?php if ( $search ) : ?>
		<div class="header__search">
			<?php singerella_header_search( '<span class="search-form__toggle"></span>%s<span class="search-form__close"></span>' ); ?>
		</div>
		<?php endif; ?>
</div>
