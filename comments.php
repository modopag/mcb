<div class="comments main__section max" id="comments">

	<?php if ( have_comments() ) { ?>

		<div class="main__section__header wrapper wrapper--content">
			<b class="title title--section title--big"><?php comments_number( __( 'Comentários', 'lt' ), __( '1 comentário', 'lt' ), __( '% comentários', 'lt' ) ); ?></b>
		</div>

		<div class="wrapper wrapper--content">
			<?php if ( !post_password_required() ) { ?>
				
				<ul class="comments__list">
					<?php wp_list_comments( [
						'style' => 'ul',
						'callback' => 'lt_comments',
						'type' => 'all',
					] ); ?>
				</ul>

				<?php lt_paginate_comments(); ?>

			<?php } else { ?>

				<p><?php echo __( 'Os comentários estão protegidos por senha.', 'lt' ); ?></p>

			<?php } ?>
		</div>

	<?php } ?>

	<?php if ( 'open' == $post->comment_status ) { ?>
		<div class="wrapper wrapper--content">
			<?php
				$text_title = wp_kses_post( get_theme_mod( 'lt_comments_title', __( 'Deixe seu comentário', 'lt' ) ) );
				$text_checkbox = wp_kses_post( get_theme_mod( 'lt_comments_checkbox', __( 'Salvar dados neste navegador para a próxima vez que eu for comentar.', 'lt' ) ) );
				$text_button = wp_kses_post( get_theme_mod( 'lt_comments_button', __( 'Enviar comentário', 'lt' ) ) );

				$aria_req = ( $req ) ? " aria-required='true'" : '';
				$consent = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';

				$args = [
					'id_form' => 'commentform',
					'class_form' => 'comments__form__fields',
					'class_container' => 'comments__form comment-respond',
					'title_reply' => '<span>' . $text_title . '</span>',
					'title_reply_before' => '<b class="comments__form__title title title--section title--medium" id="reply-title">',
					'title_reply_after' => '</b>',
					'title_reply_to' => __( 'Responder %s', 'lt' ),
					'cancel_reply_before' => '',
					'cancel_reply_after' => '',
					'cancel_reply_link' => lt_svg( [ 'name' =>  'search-close', 'class' => 'center', 'action' => 'return' ] ),
					'label_submit' => $text_button,
					'class_submit' => 'comments__form__button button',
					'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="%3$s">%4$s</button>',
					'submit_field' => '%1$s %2$s',
					'comment_field' =>
						'<label class="screen-reader-text" id="comment-text-label" for="comment-text">' . __( 'Seu comentário:', 'lt' ) . '</label>'.
						'<textarea class="comments__form__textarea" id="comment-text" aria-labelledby="comment-text-label" name="comment" aria-required="true" placeholder="' . __( 'Seu comentário', 'lt' ) . '"></textarea>',
					'comment_notes_before' => '',
					'comment_notes_after' => '',
					'fields' => apply_filters(
						'comment_form_default_fields', [
							'author' =>
								'<label class="screen-reader-text" id="comment-name-label" for="comment-name">' . __( 'Nome:', 'lt' ) . '</label>'.
								'<input class="comments__form__input" id="comment-name" aria-labelledby="comment-name-label" type="text" name="author" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . ' placeholder="' . __( 'Seu Nome', 'lt' ) . '">',
							'email' =>
								'<label class="screen-reader-text" id="comment-email-label" for="comment-email">' . __( 'E-mail:', 'lt' ) . '</label>'.
								'<input class="comments__form__input" id="comment-email" aria-labelledby="comment-email-label" type="text" name="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" ' . $aria_req . ' placeholder="' . __( 'Seu e-mail (não será publicado)', 'lt' ) . '">',
							'cookies' => '<div class="comments__form__cookies">' .
								'<input class="comments__form__cookies__input" id="comment-cookies-consent" aria-labelledby="comment-cookies-label" type="checkbox" name="cookies" value="yes"' . $consent . '>' .
								'<label class="comments__form__cookies__label" id="comment-cookies-label" for="comment-cookies-consent">' . $text_checkbox . '</label>'.
							'</div>'
						]
					)
				];

				comment_form( $args );
			?>
		</div>
	<?php } else { ?>

		<div class="main__section__header wrapper wrapper--content">
			<b class="title title--section title--big"><?php echo __( 'Comentários fechados', 'lt' ); ?></b>
			<p><?php echo __( 'Os comentários desse post foram encerrados.', 'lt' ); ?></p>
		</div>

	<?php } ?>
</div>