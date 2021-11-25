<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
ignore_user_abort(true);


if ( !defined('ABSPATH') ) {
	/** Set up WordPress environment */
	require_once( dirname( __FILE__ ) . '/../wp-load.php' );
}

$new_users = file_get_contents("/opt/bitnami/apps/wordpress/htdocs/new_users.txt");
$data = str_getcsv($new_users,";"); 

$user_string = "New user: ";
foreach($data as $new_user) {
	
	if(!empty($new_user)) {
		$user = get_user_by( 'id', $new_user );	
		$user_string = $user_string  . $user->display_name . " : app.mylongtime.com/menu/view-profile-tab/view-profile/" . $new_user . ", ";
	}
}
if($user_string  == "New user: ") {
	return;
}
$user_string = substr($user_string, 0, -2);
$blogusers = get_users( '' );
foreach($blogusers as $member) {
	$member_id = $member->ID;
	if($member_id != 1 && bp_get_member_type($member_id) != "escort") {
		continue;
	}
	$app_data = json_decode(get_user_meta($member_id , "app_data", true), true);		
	if(!empty($app_data)) {
		$line_token = $app_data["line_token"];	
		if(!empty($line_token)) {
			send_line_push($line_token, $user_string) ;	
		}
	}								
}

echo file_put_contents("/opt/bitnami/apps/wordpress/htdocs/new_users.txt","");