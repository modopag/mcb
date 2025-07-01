<?php get_header(); ?>

	<?php
		if ( !is_paged() ) {
			get_template_part( 'includes/home-banner' );
			get_template_part( 'includes/home-solutions' );
			get_template_part( 'includes/home-latest' );
			get_template_part( 'includes/home-companies' );
			get_template_part( 'includes/home-howitworks' );
			get_template_part( 'includes/home-best' );
			get_template_part( 'includes/home-howtochoose' );
			get_template_part( 'includes/faq' );
		}
	?>

<?php get_footer(); ?>