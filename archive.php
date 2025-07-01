<?php get_header(); ?>

	<section class="main__section max">
		<div class="main__section__header wrapper wrapper--content">
			<?php get_template_part( 'includes/content-header' ); ?>
		</div>

		<div class="wrapper">
			<?php
				$calculators = absint( get_theme_mod( 'lt_calculators_category' ) );
				if ( is_category( $calculators ) ) {
					get_template_part( 'includes/content-calculators-loop' );
				} else {
					get_template_part( 'includes/content-loop', '', ['banner' => 'true'] );
				}
			?>
		</div>
	</section>

	<?php if ( !is_paged() ) {
		if ( is_category( $calculators ) ) get_template_part( 'includes/content-calculators' );
		get_template_part( 'includes/content-category' );
		get_template_part( 'includes/faq' );
	} ?>

<?php get_footer(); ?>