<?php
	$banner_field = wp_kses_post( get_theme_mod( 'lt_featured_search_field', __( 'O que você está procurando?', 'lt' ) ) );
	$banner_button = wp_kses_post( get_theme_mod( 'lt_featured_search_button', __( 'Buscar', 'lt' ) ) );

	$form_name = 'searchform';
	if ( $args['aria_label'] ) $form_name = $args['aria_label'];

	$aria_label = '';
	if ( $args['aria_label'] ) $aria_label = ' aria-label="' . $args['aria_label'] . '"';

	$class_prefix = 'searchform';

	$fields_class = '';
	if ( $args['placement'] == 'content' ) $fields_class = 'forms-content';

	$form_class = $class_prefix;
	if ( $args['placement'] == 'header' ) $form_class .= ' ' . $class_prefix . '--header';
	if ( $args['placement'] == 'banner' ) $form_class .= ' ' . $class_prefix . '--banner';
	if ( $args['placement'] == 'content' ) $form_class .= ' ' . $class_prefix . '--content ' . $fields_class;

	$label_class = $class_prefix . '__label';
	if ( $fields_class ) $label_class .= ' ' . $fields_class . '__label';
	if ( $args['placement'] != 'content' ) $label_class = 'screen-reader-text';

	$input_class = $class_prefix . '__input';
	if ( $fields_class ) $input_class .= ' ' . $fields_class . '__input';

	$input = __( 'Pesquisar...', 'lt' );
	if ( $args['placement'] == 'banner' ) $input = $banner_field;

	$button_class = $class_prefix . '__submit';
	if ( $fields_class ) $button_class .= ' ' . $fields_class . '__submit';
	if ( $args['placement'] == 'header' ) $button_class .= ' button-icon';
	if ( $args['placement'] != 'header' ) $button_class .= ' button';

	$button = __( 'Pesquisar', 'lt' );
	if ( $args['placement'] == 'header' && function_exists( 'lt_svg' ) ) $button = lt_svg( [ 'name' => 'search', 'class' => 'center', 'action' => 'return' ] );
	if ( $args['placement'] == 'banner' ) $button = $banner_button;
?>

<form class="<?php echo $form_class; ?>" id="<?php echo $form_name; ?>" method="get" action="<?php echo esc_url( home_url() ); ?>" role="search"<?php echo $aria_label; ?>>

	<?php if ( $args['placement'] == 'header' ) { ?>
		<button class="<?php echo $class_prefix; ?>-open button-icon" type="button" aria-label="<?php echo __( 'Abrir busca', 'lt' ); ?>">
			<?php if ( function_exists( 'lt_svg' ) ) lt_svg( [ 'name' => 'search', 'class' => 'center' ] ); ?>
		</button>
	<?php } ?>

	<fieldset class="searchform__wrapper" id="<?php echo $form_name; ?>-wrapper">
		<legend class="screen-reader-text"><?php echo __( 'Pesquisar', 'lt' ) ?></legend>

		<label class="<?php echo $label_class; ?>" id="<?php echo $form_name; ?>-label" for="<?php echo $form_name; ?>-field"><?php echo __( 'Faça uma busca:', 'lt' ); ?></label>
		<input class="<?php echo $input_class; ?>" id="<?php echo $form_name; ?>-field" aria-labelledby="<?php echo $form_name; ?>-label" type="text" name="s" value="<?php the_search_query(); ?>" placeholder="<?php echo $input; ?>">

		<button class="<?php echo $button_class; ?>" type="submit"><?php echo $button; ?></button>

		<?php if ( $args['placement'] == 'header' ) { ?>
			<button class="<?php echo $class_prefix; ?>-close button-icon" type="button" aria-label="<?php echo __( 'Fechar busca', 'lt' ); ?>">
				<?php if ( function_exists( 'lt_svg' ) ) lt_svg( [ 'name' => 'search-close', 'class' => 'center' ] ); ?>
			</button>
		<?php } ?>
	</fieldset>

</form>