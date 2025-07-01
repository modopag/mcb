<?php get_header(); ?>

	<?php if ( have_posts() ) { ?>

		<section class="main__section max">
			<div class="main__section__header wrapper wrapper--content">
				<?php get_template_part( 'includes/content-header' ); ?>
			</div>

			<div class="wrapper">
				<?php get_template_part( 'includes/content-loop', '', ['banner' => 'true'] ); ?>
			</div>
		</section>

	<?php } else { ?>

		<div class="main__section wrapper wrapper--cols">
			<section class="singular wrapper__content">
			
				<?php get_template_part( 'includes/content-404' ); ?>

			</section>
		</div>

		<?php lt_outside_related_posts(); ?>

	<?php } ?>

<?php get_footer(); ?>