<form class="gdpr-request-form gdpr-add-to-rectify-requests" method="post">
	<?php wp_nonce_field( 'gdpr-add-to-requests', 'gdpr_request_nonce' ); ?>
	<input type="hidden" name="action" value="gdpr_send_request_email">
	<input type="hidden" name="type" value="rectify">
	<?php if ( ! is_user_logged_in() ): ?>
		<input type="email" name="user_email" placeholder="user@domain.com" required>
	<?php endif ?>
	<textarea name="data" rows="5" required placeholder="<?php echo esc_attr__( 'Type your rectification request here', 'gdpr' ); ?>"></textarea>
	<?php GDPR_Public::add_recaptcha(); ?>
	<?php $submit_button_text = apply_filters( "gdpr_rectify_request_form_submit_text", esc_attr__( 'Submit', 'gdpr' ) ); ?>
	<input type="submit" value="<?php echo esc_attr( $submit_button_text ); ?>">
</form>
