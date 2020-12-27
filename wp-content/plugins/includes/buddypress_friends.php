<?php
function remove_bp_legacy_hook($bp_legacy_class_obj) {
	remove_action( 'wp_ajax_addremove_friend', 'bp_legacy_theme_ajax_addremove_friend' );
}

add_action('bp_theme_compat_actions', 'remove_bp_legacy_hook');

function child_bp_legacy_theme_ajax_addremove_friend() {
	//return;
	if ( ! bp_is_post_request() ) {
		return;
	}

	// Cast fid as an integer.
	$friend_id = (int) $_POST['fid'];

	$user = get_user_by( 'id', $friend_id );
	if ( ! $user ) {
		die( __( 'No member found by that ID.', 'buddypress' ) );
	}
	if ( getLevel() < 1 ) {
		echo '<a style="max-width:100%" id="upgrade-' . esc_attr( $friend_id ) . '"  rel="upgrade" href="' . bp_loggedin_user_domain() . 'upgrade/' . '">' . __( 'Upgrade account to add friends', 'buddypress' ) . '</a>';
		exit;
	}

	// Trying to cancel friendship.
	if ( 'is_friend' == BP_Friends_Friendship::check_is_friend( bp_loggedin_user_id(), $friend_id ) ) {
		check_ajax_referer( 'friends_remove_friend' );

		if ( ! friends_remove_friend( bp_loggedin_user_id(), $friend_id ) ) {
			echo __( 'Friendship could not be canceled.', 'buddypress' );
		} else {
			echo '<a style="max-width:100%" id="friend-' . esc_attr( $friend_id ) . '" class="friendship-button not_friends add" rel="add" href="' . wp_nonce_url( bp_loggedin_user_domain() . bp_get_friends_slug() . '/add-friend/' . $friend_id, 'friends_add_friend' ) . '">' . __( 'Add Friend', 'buddypress' ) . '</a>';
		}

	// Trying to request friendship.
	} elseif ( 'not_friends' == BP_Friends_Friendship::check_is_friend( bp_loggedin_user_id(), $friend_id ) ) {
		check_ajax_referer( 'friends_add_friend' );

		if(bp_get_total_friend_count( bp_loggedin_user_id()) >= 5 * getLevel(true) ) {
			echo '<a style="max-width:100%" id="upgrade-' . esc_attr( $friend_id ) . '"  rel="upgrade" href="' . bp_loggedin_user_domain() . 'upgrade/' . '">' . __( 'Limit of friendships reached. Upgrade your account', 'buddypress' ) . '</a>';
		}
		else {
			if ( ! friends_add_friend( bp_loggedin_user_id(), $friend_id, true ) ) { //12.07.2020 true because force auto accept
				echo __(' Friendship could not be requested.', 'buddypress' );
			}
			else {
				$sendlink = wp_nonce_url( bp_loggedin_user_domain() . bp_get_messages_slug() . '/compose/?r=' . bp_core_get_username( $friend_id) );							
				echo '<a href="' . $sendlink . '" class="send-message" style="max-width:100%">Send Private message</a>';
			}
		}
	// Trying to cancel pending request.
	} elseif ( 'pending' == BP_Friends_Friendship::check_is_friend( bp_loggedin_user_id(), $friend_id ) ) {
		check_ajax_referer( 'friends_withdraw_friendship' );

		if ( friends_withdraw_friendship( bp_loggedin_user_id(), $friend_id ) ) {
			echo '<a style="max-width:100%" id="friend-' . esc_attr( $friend_id ) . '" class="friendship-button not_friends add" rel="add" href="' . wp_nonce_url( bp_loggedin_user_domain() . bp_get_friends_slug() . '/add-friend/' . $friend_id, 'friends_add_friend' ) . '">' . __( 'Re-Add Friend', 'buddypress' ) . '</a>';
		} else {
			echo __("Friendship request could not be cancelled.", 'buddypress');
		}

	// Request already pending.
	} else {
		echo __( 'Request Pending', 'buddypress' );
	}

	exit;
}

add_action('wp_ajax_addremove_friend', 'child_bp_legacy_theme_ajax_addremove_friend', 11);

function child_friends_action_add_friend() {
	
	if ( !bp_is_friends_component() || !bp_is_current_action( 'add-friend' ) )
		return false;

	if ( !$potential_friend_id = (int)bp_action_variable( 0 ) )
		return false;

	if ( $potential_friend_id == bp_loggedin_user_id() )
		return false;

	if ( getLevel() < 1) {
		bp_core_add_message( __( 'Upgrade account to add friends', 'buddypress' ), 'error' );
		bp_core_redirect( wp_get_referer() );
		return false;
	}
	
	$friendship_status = BP_Friends_Friendship::check_is_friend( bp_loggedin_user_id(), $potential_friend_id );

	if ( 'not_friends' == $friendship_status ) {

		if ( !check_admin_referer( 'friends_add_friend' ) )
			return false;

		if(bp_get_total_friend_count( bp_loggedin_user_id()) >= 5 * getLevel(true) ) {
			bp_core_add_message( __( 'Limit of friendships reached. Upgrade your account', 'buddypress' ), 'error' );			
		}
		else {
			if ( !friends_add_friend( bp_loggedin_user_id(), $potential_friend_id, true )  ) { //12.07.2020 Force true because auto accept		
				bp_core_add_message( __( 'Friendship could not be requested.', 'buddypress' ), 'error' );
			} else {
				bp_core_add_message( __( 'Friendship requested', 'buddypress' ) );
			}
		}

	} elseif ( 'is_friend' == $friendship_status ) {
		bp_core_add_message( __( 'You are already friends with this user', 'buddypress' ), 'error' );
	} else {
		bp_core_add_message( __( 'You already have a pending friendship request with this user', 'buddypress' ), 'error' );
	}

	bp_core_redirect( wp_get_referer() );

	return false;
}

function override_friends_action_add_friend() {
	remove_action( 'bp_actions', 'friends_action_add_friend' );	
}
add_action( 'bp_actions', 'override_friends_action_add_friend', 9 );
add_action( 'bp_actions', 'child_friends_action_add_friend' );

function upgrade_bp_custom_user_nav_item() {
	$member_type = bp_get_member_type( get_current_user_id() );
	if($member_type == 'escort')
		return;
    global $bp;
	
    $args = array(
            'name' => __('Upgrade', 'buddypress'),
            'slug' => 'upgrade',
            'default_subnav_slug' => 'upgrade',		
			'screen_function' => 'upgrade_bp_custom_user_nav_item_screen',
            'show_for_displayed_user' => false,		
            'item_css_id' => 'upgrade'
    );   		
		
	bp_core_new_nav_item( $args );
}
add_action( 'bp_setup_nav', 'upgrade_bp_custom_user_nav_item', 99 );

/**
 * the callback function from our nav item arguments
 */
function upgrade_bp_custom_user_nav_item_screen() {
    add_action( 'bp_template_content', 'upgrade_bp_custom_screen_content' );
	//add_action( 'bp_template_title', 'bp_custom_screen_title' );
    bp_core_load_template( apply_filters( 'bp_core_template_plugin', 'members/single/plugins' ) );
}

/**
 * the function hooked to bp_template_content, this hook is in plugins.php
 */
function upgrade_bp_custom_screen_content() {
	$level = getLevel();
	if(($level-0.5)==floor($level)) {
		$btn_html = '<span class="upgrade-personal-inprogress">' . __('Upgrade in progress', 'buddypress') . '</span>';
		$info_text = __('Upgrade request was sent already', 'buddypress');
	}
	else {
		$btn_html = '<p><div id="upgrade-send" class="generic-button"><a href="#">' . __( 'Upgrade your account', 'buddypress' ) . '</a></div></p>';
		$info_text = '';
	}
	
	echo '<h3 class="upgrade-header" style="position:relative;top:-30px;margin:0">' .  __('Upgrade your account', 'buddypress') . '</h3>';	
	echo '<h4 class="upgrade-header">' .  __('Your current level is: ', 'buddypress') .  getLevelString() . '</h4><br>';	
	echo $btn_html;
	echo '<p><span id="upgrade-result" class="label label-info">' . $info_text . '</span></p>';	
	
	?>	
	<div style="margin-top:2rem"></div>	
	<h5><?php _e('The Basic level is free. Each upgrade to the next level costs 100 EUR. There is no recurring payment, you keep your level for your lifetime.', 'buddypress');?></h5>
	<div style="overflow-x:auto;">
		<table class="upgrade-table">
			<tbody>
			<tr>
				<th><strong><?php _e('Level', 'buddypress');?></strong></th>
				<th><strong><?php _e('Price', 'buddypress');?></strong></th>
				<th><strong><?php _e('Description', 'buddypress');?></strong></th>
			</tr>
			<tr>
				<td><?php _e('Basic', 'buddypress');?></td>
				<td><?php _e('Free', 'buddypress');?></td>
				<td><?php _e('Create and see profiles', 'buddypress');?></td>
			</tr>
			<tr>
				<td><?php _e('Level 1', 'buddypress');?></td>
				<td><?php _e('100 EUR', 'buddypress');?></td>
				<td><?php _e('Create friend connections and send messages to <strong>5</strong> girls. Pay once, no annual fee.', 'buddypress');?></td>
			</tr>
			<tr>
				<td><?php _e('Level 2', 'buddypress');?></td>
				<td><?php _e('+100 EUR if you hold Level 1', 'buddypress');?></td>
				<td><?php _e('Create friend connections and send messages to <strong>10</strong> girls. Pay once, no annual fee.', 'buddypress');?></td>
			</tr>
			<tr>
				<td><?php _e('Level 3', 'buddypress');?></td>
				<td><?php _e('+100 EUR if you hold Level 2', 'buddypress');?></td>
				<td><?php _e('Create friend connections and send messages to <strong>15</strong> girls. Pay once, no annual fee.', 'buddypress');?></td>
			</tr>
			<tr>
				<td><?php _e('Level n to &infin;&nbsp;', 'buddypress');?></td>
				<td><?php _e('+100 EUR compared to Level n-1&nbsp;', 'buddypress');?></td>
				<td><?php _e('Create friend connections and send messages to <strong>+5</strong> girls. Pay once, no annual fee.', 'buddypress');?></td>
			</tr>
			</tbody>
		</table>
	</div>
	<script>
	$("#upgrade-send").click(function(e){

		e.preventDefault(); // if the clicked element is a link

		var data = { 'action':'siteWideMessage' };

		$.post('<?php echo admin_url('admin-ajax.php'); ?>', data, function(response) {			
			setTimeout(function() {
				$('#upgrade-send').find('a').find('i').remove();
				$('#upgrade-send').replaceWith('<span class="upgrade-personal-inprogress"><?php echo __( 'Upgrade in progress', 'buddypress' )?></span>');
				$('#upgrade-result').text('<?php echo __( "Upgrade request was sent succesfully", "buddypress" )?>');
			}, 1000);			
		});
	});
	</script>
	<?php
}
function wpse_sendmail() {
	$to = get_option('admin_email');
	$subject = 'Upgrade request by user';
	$body = 'New upgrade request by User: ' . bp_core_get_username(bp_loggedin_user_id()) . ' User ID: ' . bp_loggedin_user_id();
	$headers = array('Content-Type: text/html; charset=UTF-8');
	xprofile_set_field_data('Level', bp_loggedin_user_id(), getLevel() + 0.5);
	wp_mail( $to, $subject, $body, $headers );
}
add_action( 'wp_ajax_siteWideMessage', 'wpse_sendmail' );
	
function buddydev_hide_public_button( $r ) {

	if ( friends_check_friendship( bp_loggedin_user_id(), bp_displayed_user_id() ) || is_super_admin() ) {
		return $r;
	}

	return false;
}
add_filter( 'bp_get_send_public_message_button', 'buddydev_hide_public_button' );
add_filter( 'bp_get_send_message_button_args', 'buddydev_hide_public_button' );

// if not site admin, restrict PMs to friends
function pp_check_message_recipients( $message_info ) {

	//  site admins are not restricted
	if ( is_super_admin() )
		return $message_info;
	
	$recipients = $message_info->recipients;
	$friend_ids = friends_get_friend_user_ids( bp_displayed_user_id() ); 
	$nf = 0; 
		
	foreach ( $recipients as $key => $recipient ) {
		if ( ! in_array( $recipient->user_id, $friend_ids ) ) 
			$nf++;
	}

	// if any recipients are not friends, remove everyone from the recipient's list
	if (  $nf > 0 ) 
		unset( $message_info->recipients );
	
	return $message_info;
}
add_action( 'messages_message_before_save', 'pp_check_message_recipients' );


/**
 * Control Parts of Private Messages
 * @return void 
 */
function control_parts_of_private_messages() {

	if ( getLevel() < 1 && bp_get_member_type( bp_loggedin_user_id() ) == 'client' ) {
		
		bp_core_remove_nav_item( bp_get_messages_slug() );
	}
}
add_action( 'bp_messages_setup_nav', 'control_parts_of_private_messages' );

function filter_bp_core_render_message_content( $message_content ) { 
    if($message_content == __( 'Message was not sent. Please try again.', 'buddypress'))
		return __( 'Unknown Error. Messages can only be sent to friends.', 'buddypress');	
}         

add_filter( 'bp_core_render_message_content', 'filter_bp_core_render_message_content', 10, 1 ); 

function getLevel($round=false) {
	$level = ui_bp_get_field_for_current_user('Level', true);
	if($round)
		$level = ceil($level -0.5);
	if(empty($level))
		$level = 0;
	return $level;
}
	
function getLevelString() {
	
	$level = getLevel(true);
    if($level == 0) {	
		return 'Basic';
	} else {
		return 'Level ' . $level;
	}
}	
	
/*to be deleted, just for test*/
function bp_auto_accept_friend_request( $friendship_id, $friendship_initiator_id, $friendship_friend_id ) {
       $friendship_status = BP_Friends_Friendship::check_is_friend( $friendship_initiator_id, $friendship_friend_id );
       if ( 'not_friends' == $friendship_status ) {
			// force add
			friends_add_friend( $friendship_initiator_id, $friendship_friend_id, true );
			friends_accept_friendship( $friendship_id );
       }
}
//add_action('friends_friendship_requested', 'bp_auto_accept_friend_request', 200, 3);

function action_friends_friendship_accepted( $friendship_id, $friendship_initiator_id, $friendship_friend_id ) {
	$friend_count = (int)ui_bp_get_field_for_current_user('Friend_count', true);
	xprofile_set_field_data('Friend_count', bp_loggedin_user_id(), $friend_count+1);
}      

//add_action( 'friends_friendship_accepted', 'action_friends_friendship_accepted', 10, 3 ); 