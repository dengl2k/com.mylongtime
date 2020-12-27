<?php

	function get_comp_availability( $data ) {    
		$unavailability_field  = xprofile_get_field_data( "Unavailability" , $data['id']);//fetch  the text for location  
		return $unavailability_field;
	}
	function get_comp_birthdate( $data ) {    
		$birthdate_field  = xprofile_get_field_data( "Birthdate" , $data['id']);//fetch  the text for location  
		//make some girls younger as they really are	
		$offset = xprofile_get_field_data( "Birthdate_offset" , $data['id']);
		if(!empty($offset)) {
			$dt = new DateTime($birthdate_field); 
			$minusOffset = $dt->add(new DateInterval('P'. $offset .'Y'));
			return $dt->format('Y-m-d');
		}
		return $birthdate_field;
	}
	function update_comp_availability( $data ) {
		if(!is_super_admin() && !(bp_loggedin_user_id() == $data['id'])) 
			return "Error: " . "Logged in user: " . bp_loggedin_user_id() . " Displayed user: " . bp_displayed_user_id();
		return wp_json_encode(xprofile_set_field_data('Unavailability', $data['id'],  $data['date']));
	}
	function update_user_field( $data ) {		
		return wp_json_encode(update_user_meta($data['id'], $data['field'], $data['value']));
	}
	function get_user_field( $data ) {		
		return wp_json_encode(get_user_meta($data['id'], $data['field'], true));
	}
	function login_user( $data ) {
				
		$token = $data['token'];				
		
		$secret_key = defined('JWT_AUTH_SECRET_KEY') ? JWT_AUTH_SECRET_KEY : false;
		 if (!$secret_key) {
            return new WP_Error(
                'jwt_auth_bad_config',
                'JWT is not configurated properly, please contact the admin',
                array(
                    'status' => 403,
                )
            );
        }try {
            $token = Firebase\JWT\JWT::decode($token, $secret_key, array('HS256'));
            /** The Token is decoded now validate the iss */
            if ($token->iss != get_bloginfo('url')) {
                /** The iss do not match, return error */
                return new WP_Error(
                    'jwt_auth_bad_iss',
                    'The iss do not match with this server',
                    array(
                        'status' => 403,
                    )
                );
            }
            /** So far so good, validate the user id in the token */
            if (!isset($token->data->user->id)) {
                /** No user id in the token, abort!! */
                return new WP_Error(
                    'jwt_auth_bad_request',
                    'User ID not found in the token',
                    array(
                        'status' => 403,
                    )
                );
            }
        } catch (Exception $e) {
            /** Something is wrong trying to decode the token, send back the error */
            return new WP_Error(
                'jwt_auth_invalid_token',
                $e->getMessage(),
                array(
                    'status' => 403,
                )
            );
        }
		$user_id = $token->data->user->id;
		
		$device_token = $data['device_token'];
		if(!empty($device_token)) {
			update_user_meta($user_id, "device_token", $device_token);				
		}
		
		$user = get_user_by( 'id', $user_id );		
		
		wp_set_current_user( $user_id);
		wp_set_auth_cookie( $user_id, true);		
		do_action( 'wp_login', $user->data->user_login, $user );
	
		wp_safe_redirect(bp_core_get_user_domain( $user_id ));
		exit;
	}
	function send_push( $data ) {
		
		$device_token = get_user_meta($data['id'], "device_token", true);
		
		$server_key = "AAAAFa_Rb3A:APA91bHmAp17Dvo3xd6BFOBttd9FgObdOIV4QSKUUO75xbVXot-CSRO4PeZ7NRMkU_hZNqzzbe5awKN4E0Ins0NrjPY0aI2hewWIuk1YtaxbIUXrfrhrvVtGOE7mNvdKIWuByMQIxeEp";
		$attach = "";
		if(empty($device_token) || $device_token =="undefined" ) {
			$device_token = get_user_meta(1, "device_token", true);
			$user = get_user_by( 'id', $data['id'] );
			$attach = ", failed to user:" . $user->data->user_nicename;
		}
		$title = "New message";
		if(isset($data['title']))
			$title = $data['title']; 
		$remote_url = 'https://fcm.googleapis.com/fcm/send';		
		$data = wp_json_encode(array(
		"name" => "my_data",
		  "data" => array(
			"notification_foreground" => "true",
			"notification_body" => $data['message'],
			"notification_title"=> $title . $attach,
			"notification_android_icon" => "my_icon"
		  ),
		  "to" => $device_token
		));
		$args = array(
			'headers' => array(
				'Content-Type' => 'application/json',
				'Authorization' => 'key='.$server_key
			),
			'body'    	  => $data,
			'timeout'     => 60,
			'redirection' => 5,
			'blocking'    => true,
			'httpversion' => '1.0',
			'sslverify'   => false,
			'data_format' => 'body'			
		);
		 
		$response = wp_remote_post( $remote_url, $args );
		if ( is_wp_error( $response ) ) {
			return new WP_Error(
                'Service connection error',
                '',
                array(
                    'status' => 403,
                )
            );
		}
		return new WP_REST_Response($response, 200);		
	}
	function upload_image($request) {
		
		$user_id = 1;
		$gallery_id = 55;
		wp_set_current_user($user_id);
		$_REQUEST['_wpnonce'] = wp_create_nonce('mpp_add_media');		
		check_ajax_referer('mpp_add_media');
		
		$_POST['component'] = 'members';
		$_POST['component_id'] = $user_id;
		$_POST['context'] = 'gallery';
		$_POST['gallery_id'] = $gallery_id;
	
		$path = mediapress()->get_path();
		require_once $path . 'core/ajax/mpp-ajax.php';
		
		$_FILES = $request->get_file_params();
		$helper = MPP_Ajax_Helper::get_instance();		
		return $helper->add_media();
	}
	//02.05.2020 Not working because bp_is_my_profile() checks for displayed user and it is zero in ajax calls
	function prefix_get_private_data_permissions_check() {
		//restrict endpoint to only users who have the edit_posts capability.
		//if (!is_super_admin() && !bp_is_my_profile())  { // only allow admin ur user on his own profile
			//return false;
		//}	 
		// This is a black-listing approach. You could alternatively do this via white-listing, by returning false here and changing the permissions check.
		//return new WP_Error( 'rest_forbidden', esc_html__( 'OMG you can not view private data.', 'my-text-domain' ), array( 'status' => 401 ) );
		return true;
	}
	 
	add_action( 'rest_api_init', function () {
	register_rest_route( 'controller/v1', '/get_comp_availability/(?P<id>\d+)', array(
		'methods' => 'GET',
		'permission_callback' => '__return_true',
		'callback' => 'get_comp_availability'));}
			
	);
	add_action( 'rest_api_init', function () {
	register_rest_route( 'controller/v1', '/get_comp_birthdate/(?P<id>\d+)', array(
		'methods' => 'GET',
		'permission_callback' => '__return_true',
		'callback' => 'get_comp_birthdate'));}
			
	);
	add_action( 'rest_api_init', function () {
	register_rest_route( 'controller/v1', '/update_comp_availability/(?P<id>\d+)/(?P<date>\[[0-9]{4}-[0-9]{2}-[0-9]{2}\]\[[0-9]{4}-[0-9]{2}-[0-9]{2}\](;\[[0-9]{4}-[0-9]{2}-[0-9]{2}\]\[[0-9]{4}-[0-9]{2}-[0-9]{2}\])*)', array(
		'methods' => 'GET',
		'callback' => 'update_comp_availability',
		'permission_callback' => 'prefix_get_private_data_permissions_check'));}
			
	); //19.12.2020 Changed to v2 with JTW webtoken
	add_action( 'rest_api_init', function () {
	register_rest_route( 'controller/v2', '/update_user_field/(?P<id>\d+)/(?P<field>[a-zA-Z-\_]+)/(?P<value>.+)', array(
		'methods' => 'GET',
		'permission_callback' => '__return_true',
		'callback' => 'update_user_field'));}
	);
	add_action( 'rest_api_init', function () {
	register_rest_route( 'controller/v2', '/get_user_field/(?P<id>\d+)/(?P<field>[a-zA-Z-\_]+)', array(
		'methods' => 'GET',
		'permission_callback' => '__return_true',
		'callback' => 'get_user_field'));}
	);
	add_action( 'rest_api_init', function () {
	register_rest_route( 'controller/v2', '/send_push/(?P<id>\d+)/(?P<message>.+)', array(
		'methods' => 'GET',
		'permission_callback' => '__return_true',
		'callback' => 'send_push'));}
	);	
	add_action( 'rest_api_init', function () {
	register_rest_route( 'controller/v2', '/login_user/(?P<token>.+)/(?P<device_token>.+)', array(
		'methods' => 'GET',
		'permission_callback' => '__return_true',
		'callback' => 'login_user'));}
	);
	
	
	add_action( 'rest_api_init', function () {
	register_rest_route( 'controller/v2', '/upload_image/', array(
		'methods' => 'POST',
		'permission_callback' => '__return_true',
		'callback' => 'upload_image'));}
	);
	
	
	add_filter( 'jwt_auth_whitelist', function ( $endpoints ) {
    return array(
        '/wp-json/controller/v1/*',
		'/wp-json/controller/v2/send_push/*',
		'/wp-json/controller/v2/upload_image/*'		
    );});
	
/*add_filter('messages_notification_new_message_to', 'send_push_hook');
function send_push_hook($email_to) {
	$user = get_user_by('email',$email_to);
	$id = $user->ID;
	$data = array(
		'id' => $id,
		'message' => 'New e-mail');	
	send_push($data);
	return $email_to;
}*/
	
add_action( 'messages_message_after_save', 'control_sending_of_private_message' );

/**
 * Control the message from Private Messages before beign saved/sent
 * @param  BP_Messages_Message $message_object 
 * @return void
 */
function control_sending_of_private_message( $message_object ) {

	$sender_id = $message_object->sender_id;
	$sender = get_user_by( 'id', $sender_id );
	$title = "New message from: " . $sender->data->user_nicename;
	$recipients = $message_object->recipients;
		
	foreach($recipients as $key => $rec) {
				
		$data = array(
				'id' => $rec->user_id,
				'title' => $title,
				'message' => $message_object->message);	
		send_push($data);
	}
}