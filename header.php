<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width,initial-scale=1">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<?php
			if ( function_exists( 'lt_banner' ) ) echo lt_banner( 'lt_banner_scripts_body', '', false );
			
			if ( get_theme_mod( 'lt_scripts_body' ) ) echo get_theme_mod( 'lt_scripts_body' );
		?>

		<a class="skip-to-content" href="#main">Pular para o conteúdo</a>

		<header class="header max" role="banner">
			<div class="header__bar wrapper">

				<?php
					$logo_tag = 'span';
					if ( is_front_page() ) $logo_tag = 'h1';
				?>
				<<?php echo $logo_tag; ?> class="logo">
					<a class="logo__link" href="<?php echo esc_url( home_url() ); ?>" title="<?php bloginfo( 'name' ); ?>">
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png'; ?>" alt="<?php bloginfo( 'name' ); ?>" width="340" height="129">
					</a>
				</<?php echo $logo_tag; ?>>

				<div class="header__menu">

					<button class="nav-open button-icon" type="button" aria-label="<?php echo __( 'Abrir menu', 'lt' ); ?>">
						<?php if ( function_exists( 'lt_svg' ) ) lt_svg( [ 'name' => 'menu', 'class' => 'center' ] ); ?>
					</button>

					<nav class="nav" role="navigation" aria-label="<?php echo __( 'Menu Principal', 'lt' ); ?>">
						
						<button class="nav-close button-icon" type="button" aria-label="<?php echo __( 'Fechar menu', 'lt' ); ?>">
							<?php if ( function_exists( 'lt_svg' ) ) lt_svg( [ 'name' => 'menu-close', 'class' => 'center' ] ); ?>
						</button>

						<?php wp_nav_menu( [
							'theme_location' => 'primary',
							'menu_class' => 'nav__list',
							'menu_id' => 'primary',
							'container' => false,
							'depth' => 3,
							'fallback_cb' => false
						] ); ?>

					</nav>

					<?php get_search_form( ['echo' => true, 'aria_label' => 'searchform_header', 'placement' => 'header'] ); ?>

				</div>

			</div>
		</header>

		<?php if ( function_exists( 'lt_banner' ) && !is_front_page() ) echo lt_banner( 'lt_banner_header', 'banner--full banner--header max', true, true ); ?>

		<main class="main max" id="main" role="main">