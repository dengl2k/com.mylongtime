<?php


ignore_user_abort(true);


if ( !defined('ABSPATH') ) {
	/** Set up WordPress environment */
	require_once( dirname( __FILE__ ) . '/../wp-load.php' );
}
$unavailableDays = '';	

$users = get_users();
foreach($users as $user) {	
	if(bp_get_member_type($user->ID) == "escort") {
		echo $user->ID . ':';
		$request = wp_remote_get( 'https://thaisinglereisen.com/wp-json/controller/v1/get_comp_availability/'. $user->ID ); 		
		if( !is_wp_error( $request ) ) {			
			$body = wp_remote_retrieve_body( $request );
			$body = trim(str_replace('\n', '', (str_replace('\r', '', $body))));
			$unavailableDays = json_decode( $body );
			$ret = xprofile_set_field_data( "Unavailability_Agency", $user->ID, $unavailableDays);
			echo $unavailableDays . ' Success: ' . $ret . '<br>';		
		}
	}
	
	/*if(!empty($link_id)) {		
		echo $post->ID . ':' . $link_id . ':';				
		$request = wp_remote_get( 'https://mylongtime.com/wp-json/controller/v1/get_comp_availability/'. $link_id ); 		
		if( !is_wp_error( $request ) ) {			
		$body = wp_remote_retrieve_body( $request );			
		$unavailableDays = json_decode( $body );			
		echo $unavailableDays . '<br>';		
		update_post_meta($post->ID, 'Comp_Unavailability_Profile', $unavailableDays);		
	}	*/
}
		