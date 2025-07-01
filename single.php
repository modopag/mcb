<?php get_header(); ?>

	<div class="main__section wrapper wrapper--cols">
		<section class="singular wrapper__content">
		
			<?php get_template_part( 'includes/content-body' ); ?>
			
			<footer class="bio max">
				<span class="bio__avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 60, '', '', ['class' => 'bio__avatar__img lazyload'] ); ?></span>

				<div class="bio__description">
					<b class="bio__author"><?php the_author_posts_link(); ?></b>
					<?php the_author_meta( 'description' ); ?>
				</div>
			</footer>

		</section>
	</div>

	<?php
		echo lt_banner( 'lt_banner_post_related', 'main__section max', true );
		lt_outside_related_posts();
		echo lt_banner( 'lt_banner_post_comments', 'main__section max', true );
		comments_template();
	?>

<?php get_footer(); ?>