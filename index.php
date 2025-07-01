<?php get_header(); ?>

	<section class="main__section max">
		<div class="main__section__header wrapper wrapper--content">
			<?php get_template_part( 'includes/content-header' ); ?>
		</div>

		<div class="wrapper">
			<?php get_template_part( 'includes/content-loop', '', ['banner' => 'true'] ); ?>
		</div>
	</section>

<?php get_footer(); ?>