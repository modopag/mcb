<?php
	$about_title = wp_kses_post( get_theme_mod( 'lt_footer_about_title', constant( 'LT_FOOTER_ABOUT_TITLE' ) ) );
	if ( $about_title ) $about_title = '<b class="title title--section title--small">' . $about_title . '</b>';
	$about_text = wp_kses_post( get_theme_mod( 'lt_footer_about_text', constant( 'LT_FOOTER_ABOUT_TEXT' ) ) );

	$footer_sidebars = [ 'lt_sidebar_footer_one', 'lt_sidebar_footer_two', 'lt_sidebar_footer_three' ];
	$has_active_sidebar = false;
	foreach ( $footer_sidebars as $sidebar ) {
		if ( is_active_sidebar( $sidebar ) ) {
			$has_active_sidebar = true;
			break;
		}
	}

	$copyright = wp_kses_post( get_theme_mod( 'lt_footer_copyright', constant( 'LT_FOOTER_COPYRIGHT' ) ) );
?>

		</main>

		<?php if ( function_exists( 'lt_banner' ) && !is_front_page() ) echo lt_banner( 'lt_banner_footer', 'banner--full banner--footer max', true ); ?>

		<footer role="contentinfo" class="footer max">
			<div class="footer__cols wrapper cols cols--1-2">

				<?php if ( $about_title && $about_text ) { ?>
					<div class="footer__about col">
						<?php echo $about_title . wpautop( $about_text ); ?>
					</div>
				<?php } ?>

				<?php if ( $has_active_sidebar ) { ?>
					<div class="footer__widgets col">
						<?php foreach ( $footer_sidebars as $sidebar ) {
							if ( is_active_sidebar( $sidebar ) ) { ?>
								<div class="footer__widgets__col">
									<?php dynamic_sidebar( $sidebar ); ?>
								</div>
							<?php }
						} ?>
					</div>
				<?php } ?>

			</div>

			<div class="footer__bar wrapper">

				<span class="footer__copyright"><?php echo '&copy; 2019-' . date( 'Y' ) . ' ' . get_bloginfo( 'name' ) . '. ' . nl2br( $copyright ); ?></span>

				<a id="fabiolobo" href="https://www.fabiolobo.com.br" target="_blank" rel="noopener nofollow noreferrer">fabiolobo</a>

			</div>
		</footer>

		<?php wp_footer(); ?>

	</body>
</html>