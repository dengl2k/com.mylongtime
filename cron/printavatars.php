<?php

ignore_user_abort(true);


if ( !defined('ABSPATH') ) {
	/** Set up WordPress environment */
	require_once( dirname( __FILE__ ) . '/../wp-load.php' );
}

$users = get_users();
foreach($users as $user) {

	/*$avatar_url = bp_core_fetch_avatar( 'html=false&type=full&item_id=' . $user->ID );
	$avatar_url = basename($avatar_url);
	if($avatar_url != 'gravatar.png') {
		update_user_meta( $user->ID, 'avatar_filename', $avatar_url);
	}*/
	$avatar_url = get_user_meta($user->ID, 'avatar_filename', true);
	if(empty($avatar_url)) {
		$avatar_url = 'https://mylongtime.com/wp-content/themes/boss-child/images/gravatar.png';
	} else {
		$avatar_url = 'https://mylongtime.com/wp-content/uploads/avatars/' . $user->ID . '/' . $avatar_url;
	}
	echo "User ID: " . $user->ID . " " . $avatar_url;
	echo '<br>';

}