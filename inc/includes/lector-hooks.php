<?php 
/*Lector theme user avatar social share*/
add_action( 'show_user_profile', 'lector_extra_user_profile_fields' );
add_action( 'edit_user_profile', 'lector_extra_user_profile_fields' );

function lector_extra_user_profile_fields( $user ) { 
	?>
	<h3><?php esc_html_e('User social profiels', 'lector'); ?></h3>
	<table class="form-table">
		<tr>
			<th><label for="facebook"><?php esc_html_e('Facebook', 'lector'); ?></label></th>
			<td>
				<input type="text" name="facebook" id="facebook" value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description"><?php esc_html_e('Please enter your facebook url.', 'lector'); ?></span>
			</td>
		</tr>
				<tr>
			<th><label for="linkedin"><?php esc_html_e('Linkedin', 'lector'); ?></label></th>
			<td>
				<input type="text" name="linkedin" id="linkedin" value="<?php echo esc_attr( get_the_author_meta( 'linkedin', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description"><?php esc_html_e('Please enter your linkedin url.', 'lector'); ?></span>
			</td>
		</tr>
		<tr>
			<th><label for="twitter"><?php esc_html_e('Twitter', 'lector'); ?></label></th>
			<td>
				<input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description"><?php esc_html_e('Please enter your twitter url.', 'lector'); ?></span>
			</td>
		</tr>
		<tr>
			<th><label for="instagram"><?php esc_html_e('Instagram', 'lector'); ?></label></th>
			<td>
				<input type="text" name="instagram" id="instagram" value="<?php echo esc_attr( get_the_author_meta( 'instagram', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description"><?php esc_html_e('Please enter your instagram url.', 'lector'); ?></span>
			</td>
		</tr>
		<tr>
			<th><label for="pinterest"><?php esc_html_e('Pinterest', 'lector'); ?></label></th>
			<td>
				<input type="text" name="pinterest" id="pinterest" value="<?php echo esc_attr( get_the_author_meta( 'pinterest', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description"><?php esc_html_e('Please enter your pinterest url.', 'lector'); ?></span>
			</td>
		</tr>
		<tr>
			<th><label for="behance"><?php esc_html_e('Behance', 'lector'); ?></label></th>
			<td>
				<input type="text" name="behance" id="behance" value="<?php echo esc_attr( get_the_author_meta( 'behance', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description"><?php esc_html_e('Please enter your behance url.', 'lector'); ?></span>
			</td>
		</tr>
		<tr>
			<th><label for="vimeo"><?php esc_html_e('Vimeo', 'lector'); ?></label></th>
			<td>
				<input type="text" name="vimeo" id="vimeo" value="<?php echo esc_attr( get_the_author_meta( 'vimeo', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description"><?php esc_html_e('Please enter your vimeo url.', 'lector'); ?></span>
			</td>
		</tr>
	</table>
	<?php 
}

add_action( 'personal_options_update', 'lector_saveesc_html_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'lector_saveesc_html_extra_user_profile_fields' );

function lector_saveesc_html_extra_user_profile_fields( $user_id ) {
	if ( !current_user_can( 'edit_user', $user_id ) ) { return false; }
		update_user_meta( $user_id, 'facebook', $_POST['facebook'] );
		update_user_meta( $user_id, 'linkedin', $_POST['linkedin'] );
		update_user_meta( $user_id, 'twitter', $_POST['twitter'] );
		update_user_meta( $user_id, 'instagram', $_POST['instagram'] );
		update_user_meta( $user_id, 'pinterest', $_POST['pinterest'] );
		update_user_meta( $user_id, 'behance', $_POST['behance'] );
		update_user_meta( $user_id, 'vimeo', $_POST['vimeo'] );
	}

/*lector blog comment form replace*/
function lector_move_comment_field( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'lector_move_comment_field' );

/* custom editor style*/
function lector_add_editor_styles() {
 	add_editor_style( get_stylesheet_uri() );

}
add_action( 'init', 'lector_add_editor_styles' );

