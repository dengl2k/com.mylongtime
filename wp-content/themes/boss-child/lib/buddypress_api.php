<?php

	//Prevent MediaPress Notice when uploading images
	error_reporting(E_ALL & ~E_NOTICE);	
	
	function get_comp_availability( $data ) {    
		$unavailability_field  = xprofile_get_field_data( "Unavailability" , $data['id']);  
		return new WP_REST_Response($unavailability_field);
	}
	function get_comp_birthdate( $data ) {    
		$birthdate_field  = xprofile_get_field_data( "Birthdate" , $data['id']);
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
		if(!is_super_admin() && bp_loggedin_user_id() != $data['id']) 
			return "Error: " . "Logged in user: " . bp_loggedin_user_id() . " Displayed user: " . bp_displayed_user_id();
		return new WP_REST_Response(xprofile_set_field_data('Unavailability', $data['id'],  $data['date']));
	}
	
	//JWTAUT sets user but Buddypress is too early
	function get_user_from_token() {
		
		//$auth = new JWTAuth\Auth();
		//$user_id = $auth->determine_current_user(-1);				
		$user = wp_get_current_user();		
		//if($user_id -1 0)
		$user_id = $user->ID;
		if($user_id == 0) {
			
			return new WP_Error(
                'error_get_userid',
                'Could not retrieve user',
                array(
                    'status' => 403,
                )
            );
		}
		$bp = buddypress();    
        $bp->loggedin_user = $user;
		return $user_id;		
	}
	
	function line($request) {		
		
		file_put_contents("Line.txt", json_encode($request["events"]), FILE_APPEND);
		$json_obj = $request["events"];		
		$token = $json_obj[0]["source"]["userId"];	
		
		$push_data = wp_json_encode(array(
									//"message" => $data['message'],
									//"sender_id" => $data['sender_id'],
									//"thread_id" => $data['thread_id'],
									"admin_message" => "New Line token: " . $token
									));	
		$args = get_wp_post_args_intern($push_data);
		 
		$response = wp_remote_post( "https://api.eyeot.com/send_message", $args );
			
		return new WP_REST_Response($token);				
	}
	
	function send_line_push($user_id, $message) {
		$server_key = "GgKsw/WAVClX8TXTs8m5UQmUjmOARcTmuKn8dT+aByIzpaIFC1P+zFQqTKulFC0+swyHArkvTRFSOmoCKaMQ2ys3fYyNTq3MjcURH645VtK3zGK+oSVQhGoN/d59EBFPRgpe72H/wnOlnEt1mKIyPwdB04t89/1O/w1cDnyilFU=";
		$remote_url = 'https://api.line.me/v2/bot/message/push';
		
		$push_data = wp_json_encode(
		array(		
			"to" => $user_id,			
			"messages" => array(
			array(
				"type" => "text",
				"text" => $message
				)
			)
		));			
		$args = get_wp_post_args($server_key, $push_data, true);		 
		$response = wp_remote_post( $remote_url, $args );
		return new WP_REST_Response($user_id . json_encode($response));	
	}	
	function add_device_token($request) {
			
		$user_id = get_user_from_token();
		if(is_wp_error($user_id)) {
			return $user_id;
		}
		$app_data = json_decode(get_user_meta($user_id , "app_data", true), true);
		$keep_old_gps = "";
		$keep_old_token = "";
		if(!empty($app_data) && $app_data["coord"] != "undefined" && $request["coordinates"] == "undefined") {
			$keep_old_gps = $app_data["coord"];
		}
		if(!empty($app_data) && $app_data["device_token"] != "undefined" && $request["device_token"] == "undefined") {
			$keep_old_token = $app_data["device_token"];
		}
		$line_token = $app_data["line_token"];
		$data = array(
			"coord" => empty($keep_old_gps)?$request["coordinates"]:$keep_old_gps, 
			"device_token" => empty($keep_old_token)?$request["device_token"]:$keep_old_token,
			"line_token" => $line_token,
			"timestamp" => $request["timestamp"],  
			"version" => $request["version"],
			"keep_old_gps" => $keep_old_gps,
			"keep_old_device_token" => $keep_old_token);
		$payload = wp_json_encode($data);
		$return_val = update_user_meta($user_id, "app_data", $payload);
		$response["status"] = $return_val;
		$response["saved_data"] = $data;
		return new WP_REST_Response(array("success" => true, "data" => $response), 200);
	}

	function send_data($request) {
		return add_device_token($request);
	}
	function login_user( $data ) {
		
		$token = $data['token'];
		$_SERVER['HTTP_AUTHORIZATION'] = 'Bearer ' . $token;

		$user_id = get_user_from_token($data);
				
		$user = get_user_by( 'id', $user_id);
		
		
		wp_set_current_user( $user_id);
		wp_set_auth_cookie( $user_id, true);		
		do_action( 'wp_login', $user->data->user_login, $user );
	
		wp_safe_redirect(bp_core_get_user_domain( $user_id ));
		exit;
	}
	function filter_jwt_auth_valid_credential_response($response, $user) {
		$response["data"]["avatar"] = bp_core_fetch_avatar( 'type=full&html=false&item_id=' . $user->ID );
		return $response;
	}

	add_filter( 'jwt_auth_valid_credential_response', 'filter_jwt_auth_valid_credential_response', 10, 2 );

	function get_wp_post_args($server_key, $push_data, $bearer=false) {
		$args = array(
			'headers' => array(
				'Content-Type' => 'application/json',
				'Authorization' => $bearer?'Bearer '. $server_key : 'key='.$server_key
			),
			'body'    	  => $push_data,
			'timeout'     => 60,
			'redirection' => 5,
			'blocking'    => true,
			'httpversion' => '1.0',
			'sslverify'   => false,
			'data_format' => 'body'			
		);
		return $args;
	}
	
	function get_wp_post_args_intern($push_data) {
		$args = array(
			'headers' => array(
				'Content-Type' => 'application/json'				
			),
			'body'    	  => $push_data,
			'timeout'     => 60,
			'redirection' => 5,
			'blocking'    => true,
			'httpversion' => '1.0',
			'sslverify'   => true,
			'data_format' => 'body'			
		);
		return $args;
	}
	function filter_xprofile_avatar_uploaded($user_id, $value) {		
		
		$avatar_url = bp_core_fetch_avatar( 'html=false&type=full&item_id=' . $user_id);
		$avatar_url = basename($avatar_url);
		if($avatar_url != 'gravatar.png') {
			update_user_meta( $user_id, 'avatar_filename', $avatar_url);
		}
		if(bp_get_member_type($user_id) == "client" ) {
			file_put_contents("/opt/bitnami/wordpress/new_users.txt", $user_id . ";", FILE_APPEND);	
		}			
	}
	
	add_action('xprofile_avatar_uploaded', 'filter_xprofile_avatar_uploaded', 10, 2);
		
		
	function send_push( $data ) {
	
		$title = "New message";
		if(isset($data['title'])) {
			$title = $data['title']; 
		}
		
		$app_data = get_user_meta($data['id'], "app_data", true);
		$device_token = "";
		if(!empty($app_data)) {
			$device_token = json_decode($app_data, true)["device_token"];
		}
		$remote_url = 'https://fcm.googleapis.com/fcm/send';	
		$server_key = "AAAAFa_Rb3A:APA91bHmAp17Dvo3xd6BFOBttd9FgObdOIV4QSKUUO75xbVXot-CSRO4PeZ7NRMkU_hZNqzzbe5awKN4E0Ins0NrjPY0aI2hewWIuk1YtaxbIUXrfrhrvVtGOE7mNvdKIWuByMQIxeEp";
		$attach = "";
		$admin_device_token = json_decode(get_user_meta(1, "app_data", true), true)["device_token"];
		$user = get_user_by( 'id', $data['id'] );
		if(empty($device_token) || $device_token =="undefined" ) {
			//get admin token
			$device_token = $admin_device_token;			
			$attach = ", failed to user:" . $user->data->user_nicename;			
		} else {
			//resend to admin
			/*$attach_admin = ", to user:" . $user->data->user_nicename;		
			$push_data = wp_json_encode(array(
					"notification" => array( 
						"title" => $title . $attach_admin,			
						"body" => $data['message'],
						"sound" => "default",
						"badge" => 1			
			),
			"to" => $admin_device_token
			));
			$args = get_wp_post_args($server_key, $push_data);	
			$response = wp_remote_post( $remote_url, $args );*/		
		}
		
		//Send Line Push
		$line_token = "";		
		if(!empty($app_data)) {
			$line_token = json_decode($app_data, true)["line_token"];
		}		
		if(empty($line_token)) {						
			$attach_admin = ", failed to user:" . $user->data->user_nicename;
		} else {		
			$attach_admin = ", to user: " . $user->data->user_nicename;					
		}								
		
		if(!empty($line_token)) {
			//send_line_push($line_token, $title . ": " . $data['message'] . " Go To: https://app.mylongtime.com/menu/messages");	
			update_user_meta($data['id'], "new_messages", $data['message_id']);
			
		}	
		if($data['send_websocket']) {
			$push_data = wp_json_encode(array(
									//"message" => $data['message'],
									//"sender_id" => $data['sender_id'],
									//"thread_id" => $data['thread_id'],
									"admin_message" => $title . $attach_admin . ": " . $data['message']
									));	
			$args = get_wp_post_args_intern($push_data);
		 
			$response = wp_remote_post( "https://api.eyeot.com/send_message", $args );
			
			$push_data = wp_json_encode(array(
									"password" => "hztjbbf653y8dndga86!4378x",
									"sender_id" => $data['sender_id'],
									"thread_id" => $data['thread_id'],
									"date_sent" => $data['date_sent'],
									"message_id" => $data['message_id'],
									"message" => $data['message']
									));	
			$args = get_wp_post_args_intern($push_data);
		 
			$response = wp_remote_post( "https://api.mylongtime.com/transfer_message", $args );
		}
		
		//Send App Push message
		
		//comment out firebasex payload
		/*$data = wp_json_encode(array(
		"name" => "my_data",
		  "data" => array(
			"notification_foreground" => "true",
			"notification_body" => $data['message'],
			"notification_title"=> $title . $attach,
			"notification_android_icon" => "my_icon"
		  ),
		  "to" => $device_token
		));*/
		$push_data = wp_json_encode(array(
		"notification" => array( 
			"title" => $title . $attach,			
			"body" => $data['message'],
			"badge" => 1			
		),
		  "to" => $device_token
		));
		$args = get_wp_post_args($server_key, $push_data);
		 
		$response = wp_remote_post( $remote_url, $args );
		if ( is_wp_error( $response ) ) {
			return new WP_Error(
                'server_connection_error',
                'Firebase Service connection error',
                array(
                    'status' => 403,
                )
            );
		}
		return new WP_REST_Response($response, 200);		
	}
	function delete_image($data) {
		
		$user_id = get_user_from_token();
		if(is_wp_error($user_id)) {
			return $user_id;
		}

		wp_set_current_user($user_id);
		$image_id = $data['id'];
		return new WP_REST_Response(mpp_delete_media($image_id));
	}
	function update_comp_availability_auth($data) {
		$user_id = get_user_from_token(array());
		if(is_wp_error($user_id)) {
			return $user_id;
		}
		$data["id"] = $user_id;
		return update_comp_availability($data);
	}
	function update_profile($request) {	
		
		$data = json_decode($request["data"]);	
	
		$user_id = get_user_from_token(array());
		if(is_wp_error($user_id)) {
			return $user_id;
		}
		$ret = array();
		foreach($data as $key => $val) {
			//revoke filter which changed name
			if($val->field_name =="Age") {
				$val->field_name = "Birthdate";
			}
			$ret[] = xprofile_set_field_data($val->field_name, $user_id, $val->field_value);
		}
		return new WP_REST_Response($ret);
	}
	
	function get_activity_gallery($user_id) {
		$component = 'members';
		$component_id = $user_id;

		// get media type from file extension.
		$media_type = "photo";

		$gallery = mpp_get_context_gallery( array(
			'component'    => $component,
			'component_id' => $component_id,
			'user_id'      => $user_id,
			'type'         => $media_type,
			'context'      => 'activity',
		) );
		return $gallery;
	}
	
	function get_avatar_picture($request) {
		
		$user_id = get_user_from_token();
		if(is_wp_error($user_id)) {
			return $user_id;
		}
		return new WP_REST_Response(bp_core_fetch_avatar( 'type=full&html=false&item_id=' . $user_id ));
	}
	
	function get_image_array($user_id) {
		$status = '';
		$component = 'members';
		$component_id = $user_id;

		$gallery = get_activity_gallery($user_id);
		
		if (empty( $status ) && $gallery ) {
			// inherit from parent,gallery must have an status.
			$status = $gallery->status;
		}
		// we may need some more enhancements here.
		if ( ! $status ) {
			$status = mpp_get_default_status();
		}
		//02.05.21 status removed from search
		$args = array(
			'component_id' => $component_id,
			'component'    => $component,
			'gallery_id'   => $gallery->id//,
			//'status'       => $status,
		);
		
		mediapress()->the_media_query = new MPP_Media_Query( $args );	
		$links = array();
		while ( mpp_have_media() ) : mpp_the_media();
			$image = array();
			$image["_id"] = mpp_get_media_id();
			$image["name"] = mpp_get_media_title();
			$image["url"] = mpp_get_media_src('thumbnail');
			$image["full_url"] = mpp_get_media_src();
			$image["createdAt"] = mpp_get_media_date_created();
			$links[] = $image;			 
		 endwhile;
		 return $links;		
	}
	function get_images($request) {
	
		$user_id = get_user_from_token();		
		if(is_wp_error($user_id)) {
			return $user_id;
		}
		$links = get_image_array($user_id);
		return new WP_REST_Response($links);
	}
	function set_avatar_crop($request) {
	
		$user_id = get_user_from_token();
		if(is_wp_error($user_id)) {
			return $user_id;
		}
		wp_set_current_user($user_id);
		$_REQUEST["nonce"] = wp_create_nonce('bp_avatar_cropstore');		
		$_POST["object"] = "user";
		$_POST["item_id"] = $user_id;
		$_POST["type"] = "crop";
		$_POST["action"] = "bp_avatar_set";
		
		return bp_avatar_ajax_set();
	}	
function upload_avatar($request) {
		
		$user_id = get_user_from_token();
		if(is_wp_error($user_id)) {
			return $user_id;
		}
		wp_set_current_user($user_id);
		$ui_width = 984;
		if(isset($_REQUEST["ui_width"])) {
			$ui_width = $_REQUEST["ui_width"];
		}
		
		$_REQUEST["_wpnonce"] = wp_create_nonce('bp-uploader');		
		$bp_params = array(
			"object" => "user",
			"item_id" => $user_id,
			"has_avatar" => true,
			"ui_available_width" => $ui_width
		);
		$_POST["bp_params"] = $bp_params;
		$_POST["action"] = "bp_avatar_upload";
		
		return bp_avatar_ajax_upload();
	}
	function upload_image($request) {		
		
		$user_id = get_user_from_token();		
		if(is_wp_error($user_id)) {
			return $user_id;
		}
		wp_set_current_user($user_id);
		$component = 'members';
		$component_id = $user_id;

		$gallery = get_activity_gallery($user_id);
		
		$_REQUEST['_wpnonce'] = wp_create_nonce('mpp_add_media');		
		
		$_POST['component'] = $component;
		$_POST['component_id'] = $component_id;
		$_POST['context'] = 'gallery';
		$_POST['gallery_id'] = $gallery->id;
	
		$path = mediapress()->get_path();
		require_once $path . 'core/ajax/mpp-ajax.php';
		
		$_FILES = $request->get_file_params();
		$helper = MPP_Ajax_Helper::get_instance();
		
		$helper->add_media();	
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
	
	/**
	 * Control the message from Private Messages before beign saved/sent
	 * @param  BP_Messages_Message $message_object 
	 * @return void
	 */
	function control_sending_of_private_message( $message_object ) {

		$sender_id = $message_object->sender_id;
				
		$sender = get_user_by( 'id', $sender_id );
		$title = "New message from " . $sender->data->user_nicename;
		$recipients = $message_object->recipients;
		$i=0;	
		foreach($recipients as $key => $rec) {
			//only send websocket message once, because via thread_id all receivers are automatically notified
			$data = array(
					'id' => $rec->user_id,
					'thread_id' => $message_object->thread_id,
					'title' => $title,
					'message_id' => $message_object->id,
					'message' => $message_object->message,
					'date_sent' => $message_object->date_sent,
					'sender_id' => $sender_id,
					'send_websocket' => $i==0);	
			send_push($data);
			$i++;
		}
	}

	function control_sending_of_private_message_before( $message_object ) {

		$thread_id = $message_object->thread_id;
		$sender_id = $message_object->sender_id;	
		$message = $message_object->message;
		
		$participants = BP_Better_Messages()->functions->get_participants($thread_id);	
		
        if(count($participants['users']) !== 2) {
			return;
		}
        unset($participants['users'][$sender_id]);
        reset($participants['users']);

        $friend_id = key($participants['users']);
       
        if(is_super_admin($sender_id) || is_super_admin($friend_id) || friends_check_friendship($sender_id, $friend_id)) {
			return;
		}
		//Friends have no restrictions and messagecount is not increased
		
		$sender = get_user_by( 'id', $sender_id  );
		$friend = get_user_by( 'id', $friend_id  );
		$attach = ", failed to user:" . $friend->data->user_nicename;	
		
		$messagecount = xprofile_get_field_data( "MessageCount" , $sender_id);		
		xprofile_set_field_data( "MessageCount" , $sender_id, intval($messagecount)+1);
		
		//In case there is a https:// URL do not filter because it can contain?number parameters in the URL
		
		$regex = '/\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|$!:,.;]*[A-Z0-9+&@#\/%=~_|$]/i';        
		preg_match_all( $regex, $message, $urls );
		if( !empty( $urls[0] ) ){
			return;
        }
		
		//End URL check
			
		$search = array("Whats App", "WhatsApp", "WhattsAp", "WattsApp", "WattsAp", "Line", "number", "phone", "nr.", "facebook", "instagram", " id ", "@", "_at");
		
		$message = str_ireplace($search, "***", $message, $count);	

		preg_match('/([\d ]){9,}/', $message, $matches);
		
		$message = str_ireplace($matches, "***", $message, $count2 );	
		
		if($count || $count2) {			
			if(bp_get_member_type($sender_id) == "client" ) {
				//$message = $message  .": " . bp_loggedin_user_domain() . "upgrade/";
				$message = $message . "\nWARNING: For exchanging numbers, you need to upgrade your account and add " . $friend->data->user_nicename . " as a friend" ;
			} else {
				$message = $message . "\nWARNING: No exchange of numbers. " . $friend->data->user_nicename . " needs to upgrade his account and add you as a friend";
			}
		}
		$message_object->message = $message;
	}	
	

	function get_profile_fields($request) {
		$user_id = get_user_from_token();			
		if(is_wp_error($user_id)) {
			return $user_id;
		}
		$data = array();		
		if ( bp_has_profile(array('user_id' => $user_id, 'hide_empty_fields' => false)) ) {								
									
			while ( bp_profile_groups() ) {
				bp_the_profile_group();
				$group = bp_get_the_profile_group_name();		
				$i=0;
				if ( bp_profile_group_has_fields() ) {
					while ( bp_profile_fields() ) {
						global $field;
						bp_the_profile_field();
						$field_name = bp_get_the_profile_field_name();					
						$data[$group][$i] = array(						
							"field_name" => $field_name,
							"field_value" => bp_get_the_profile_field_edit_value(),
							"field_desc" => bp_get_the_profile_field_description(),
							"field_type" => bp_get_the_profile_field_type(),
							"required" => bp_get_the_profile_field_is_required(),
							"field_options" => ($field_name=="Country")?array_map(
								function($term){ return $term->name;},
								get_terms(array( 'taxonomy' => 'locations', 'parent' => 0, 'hide_empty' => false )))
								:array()										
						);
						$i++;
					}
				}
			}
		}
		return new WP_REST_Response($data);
	}
	function render_stack_override( $stack, $user_id ){
		
		$status = (BP_Better_Messages()->realtime && BP_Better_Messages()->settings['messagesStatus']);
		$type = $stack['user_id'] == $user_id ? 'outgoing' : 'incoming';
		$timestamp = $stack[ 'messages' ][0][ 'timestamp' ];
		$time = date('Y-m-d H:i:s', $timestamp);		
		$message_list = array();
		$sender_id = $stack[ 'user_id' ];
		$sender_name = $stack[ 'user' ]->display_name;	
		foreach ( $stack[ 'messages' ] as $message ) {
			$message_time = $message[ 'date' ];
			$message_timestamp = $message[ 'timestamp'];
			$message_id = $message[ 'id' ];				
			$message_status = "";
			if(isset($message['seen']) && $status && $message['seen']) {
				$message_status = "seen";
			}
			$message_content = $message[ 'message' ];
			$message_list[] = compact("message_time", "message_timestamp", "message_id", "message_status", "message_content");
		}
		return array(
			"status" => $message_status,
			"sender_id" => $sender_id,
			"sender_name" => $sender_name,
			"type" => $type,			
			"time" => $time,
			"timestamp" => $timestamp,
			"message_list" => $message_list
		);
	}

	function send_thread_message($request) {	
		$user_id = get_user_from_token();			
		if(is_wp_error($user_id)) {
			return $user_id;
		}			
		wp_set_current_user($user_id);

		$thread_id = $request['thread_id'];
	
		$content = BP_Better_Messages()->functions->filter_message_content($request['message']);

        $args = array(
         'content'    => $content,
         'thread_id'  => $thread_id,
         'error_type' => 'wp_error'
        );
		
        if( bp_get_member_type($user_id) == "client" && !apply_filters('bp_better_messages_can_send_message', BP_Messages_Thread::check_access( $thread_id ), get_current_user_id(), $thread_id ) ) {
			$errors[] = __( 'You can`t reply to this thread.', 'bp-better-messages' );
        }

        if( trim($args['content']) == '') $errors['empty'] = __( 'Your message was empty.', 'bp-better-messages' );

         do_action_ref_array( 'bp_better_messages_before_message_send', array( &$args, &$errors ));

        if( empty($errors) ){
            $sent = messages_new_message( $args );

            messages_mark_thread_read( $thread_id );

            if ( is_wp_error( $sent ) ) {
            	$errors[] = $sent->get_error_message();
        	}
		}
		
		if( ! empty($errors) ) {
			wp_send_json( array(
				'result'   => false,
				'errors'   => $errors,
				'redirect' => false
			) );
		} else {
			wp_send_json( array(
				'result'   => $sent,
				'redirect' => false
			) );
		}
	}
	
	function get_thread_messages($data) {
		//Suppress outputs and warnings from BPBetter Messages, e.g. </span> for Thread 803
		ob_start();
		$user_id = get_user_from_token();			
		if(is_wp_error($user_id)) {
			return $user_id;
		}		
		$thread_id = $data["id"];
		$stacks = BP_Better_Messages()->functions->get_stacks( $thread_id );
		$ret = array();		
		foreach ( $stacks as $stack ) {
			if(!$stack['user_id'])
				continue;
			$ret[] = render_stack_override($stack, $user_id);	
		}
		ob_end_clean();
		return new WP_REST_Response(array("success" => true, "data" => $ret), 200);
	}
	 
	function get_message_threads($request) {
		$user_id = get_user_from_token();			
		if(is_wp_error($user_id)) {
			return $user_id;
		}	
		$ret = array();		
		$threads = BP_Better_Messages()->functions->get_threads( $user_id );
		foreach ( $threads as $thread ) {
			$avatar = bp_core_fetch_avatar( 'type=full&html=false&item_id=' . array_values( $thread->recipients )[ 0 ] );
			$name = bp_core_get_user_displayname( array_values( $thread->recipients )[ 0 ] );
			$subject = "";
			if(BP_Better_Messages()->settings['disableSubject'] !== '1' && ! empty( $thread->subject )) {
				$subject = $thread->subject;
			}					
			$thread_id = $thread->thread_id;
			$message = $thread->message;
			$date_sent = $thread->date_sent;
			$unread_count = $thread->unread_count;
			$recipient_id = array_values( $thread->recipients )[ 0 ];
			$data = compact("avatar", "name", "subject", "thread_id", "message", "date_sent", "unread_count", "recipient_id");
			$ret[] = $data;
		}
		return new WP_REST_Response($ret, 200);
	}
	function get_new_messages($request) {		
		
		$user_id = get_user_from_token();
		
		if(is_wp_error($user_id)) {
			return $user_id;
		}			
		update_user_meta($user_id, "new_messages", 0);
		wp_set_current_user($user_id);
		
		$_POST[ 'last_check' ] = $request['last_check'];
		$_POST[ 'thread_id' ] = $request['thread_id'];
		$_POST[ 'last_message' ] = $request['last_message'];
		
		$ajax = BP_Better_Messages_Ajax::instance();
		$ajax->thread_check_new();
	}

	function get_new_threads($request) {
		$user_id = get_user_from_token();			
		if(is_wp_error($user_id)) {
			return $user_id;
		}
		update_user_meta($user_id, "new_messages", 0);			
		wp_set_current_user($user_id);
			
		$_POST[ 'last_check' ] = $request['last_check'];
		
		$ajax = BP_Better_Messages_Ajax::instance();
		$ajax->check_new();
	}
	
	function get_fast_thread($request) {		
		
		$user_id = get_user_from_token();			
		if(is_wp_error($user_id)) {
			return $user_id;
		}
		
        $to = get_user_by("id", $request['to_user']);
		if(is_wp_error($to)) {
			return $to;
		}	
        $avatar = bp_core_fetch_avatar( 'type=full&html=false&item_id=' . $to->ID );
		$name = $to->display_name;
		
		$threads = BP_Better_Messages()->functions->find_existing_threads($user_id, $to->ID);
        if( count($threads) > 0) {			
			$data = array( 
				"id" => $threads[0],
				"avatar" => $avatar,
				"user_name" => $name			
			);
			return new WP_REST_Response(array("success" => true, "data" => $data), 200);
		}

        $thread_id = BP_Better_Messages()->functions->get_pm_thread_id($to->ID);    
		$data = array( 
			"id" => $thread_id,
			"avatar" => $avatar,
			"user_name" => $name			
		);
		return new WP_REST_Response(array("success" => true, "data" => $data), 200);	 
	}
	
	function reset_pwd($request) {
		$login = $request["login"];	
		if ( empty( $login ) ) {
			$json = array( 'code' => '0', 'msg' => 'Please enter login user detail' );
			echo json_encode( $json );
			exit;     
		}
		
		$user_data = get_user_by( 'email', $login); 
		
		if ( empty( $user_data ) ) {
			$user_data = get_user_by( 'login', $login );
		}
		
		if ( empty( $user_data ) ) {
			$json = array( 'code' => '101', 'msg' => 'User not found' );
			echo json_encode( $json );
			exit;
		}
		
		$user_login = $user_data->user_login;
		$user_email = $user_data->user_email;
		$key        = get_password_reset_key( $user_data );

		if ( is_wp_error( $key ) ) {
			$json = array( 'code' => '103', 'msg' => 'Password Reset key could not be generated' );
			echo json_encode( $json );
			exit;
		}
	
		if ( is_multisite() ) {
			$site_name = get_network()->site_name;
		} else {		

			$site_name = wp_specialchars_decode( get_option( 'blogname' ), ENT_QUOTES );
		}
	
		$message = __( 'Someone has requested a password reset for the following account:' ) . "\r\n\r\n";
		/* translators: %s: Site name. */
		$message .= sprintf( __( 'Site Name: %s' ), $site_name ) . "\r\n\r\n";
		/* translators: %s: User login. */
		$message .= sprintf( __( 'Username: %s' ), $user_login ) . "\r\n\r\n";
		$message .= __( 'If this was a mistake, just ignore this email and nothing will happen.' ) . "\r\n\r\n";
		$message .= __( 'To reset your password, visit the following address:' ) . "\r\n\r\n";
		$message .= network_site_url( "wp-login.php?action=rp&key=$key&login=" . rawurlencode( $user_login ), 'login' ) . "\r\n";
	
		$title = sprintf( __( '[%s] Password Reset' ), $site_name );
			
		$title = apply_filters( 'retrieve_password_title', $title, $user_login, $user_data );
	
		$message = apply_filters( 'retrieve_password_message', $message, $key, $user_login, $user_data );
	
		if ( $message && ! wp_mail( $user_email, wp_specialchars_decode( $title ), $message ) ) {
			$json = array( 'code' => '102', 'msg' => 'Password Reset email could not be sent' );
			echo json_encode( $json );
			exit;
		}		
		
		$json = array( 'code' => '200', 'msg' => 'Password reset link has been sent to your email address' );
		echo json_encode( $json );
		exit;
	}
	function get_member_data($display_id) {
		$the_member = array();		
		$the_member["id"] = $display_id;				
		$the_member["avatar"] = bp_core_fetch_avatar( 'type=full&html=false&item_id=' . $display_id );
		$data = array();		
		if ( bp_has_profile(array('user_id' => $display_id, 'hide_empty_fields' => true)) ) {								
											
			while ( bp_profile_groups() ) {
				bp_the_profile_group();
				$group = bp_get_the_profile_group_name();		
				$i=0;
				if ( bp_profile_group_has_fields() ) {
					while ( bp_profile_fields() ) {
						bp_the_profile_field();					
						$data[$group][bp_get_the_profile_field_name()] = array(						
							"field_name" => bp_get_the_profile_field_name(),
							"field_value" => bp_get_the_profile_field_value(),									
							"field_type" => bp_get_the_profile_field_type()	
						);						
					}
				}
			}
		}
		//Field is hidden via parse args, so add it manually
		$data["Calendar"][0] = array(
			"field_name" => "Unavailability",
			"field_value" => xprofile_get_field_data( "Unavailability" , $display_id),
			"field_type" => "textbox"
		);
		$the_member["fields"] = $data;
		$dob = xprofile_get_field_data("Birthdate", $display_id);
		$age = "&#8203"; //no width space
		if ($dob) {     
			$age = getAge($dob) ." years";
		}
		$the_member["age"] = $age;
		$the_member["receive_messages"] = xprofile_get_field_data("Receive messages", $display_id, "comma") == "Receive messages from girls";
		$the_member["name"] = bp_core_get_user_displayname($display_id);
		$the_member["country"] = xprofile_get_field_data("Country", $display_id);
		if(!empty($the_member["country"])) {
			$the_member["country"] = '<p>' . $the_member["country"] . '</p>';
		}
		$images = get_image_array($display_id);
		$the_member["gallery"] = $images;
		return $the_member;
	}
	
	function get_member_data_external($request) {
		if(bp_get_member_type($request['id']) != "escort") {
				return new WP_Error(
                'unauthorized',
                'Unauthorized',
                array(
                    'status' => 403,
                )
            );
		}
		$member_data = get_member_data_short($request['id']);
		return new WP_REST_Response($member_data);
	}
		
	function get_member_data_short($display_id) {
		
		$the_member = array();	
		$the_member["id"] = $display_id;
		$avatar_url = get_user_meta($display_id, 'avatar_filename', true);
		if(empty($avatar_url)) {
			$avatar_url = 'https://mylongtime.com/wp-content/themes/boss-child/images/gravatar.png';
		} else{
			$avatar_url = 'https://mylongtime.com/wp-content/uploads/avatars/' . $display_id . '/' . $avatar_url;
		}
		$the_member["avatar"] = $avatar_url;
		//$the_member["avatar"] = bp_core_fetch_avatar( 'type=full&html=false&item_id=' . $display_id );
		$data = array();		
		$groups = bp_xprofile_get_groups( array(
			'user_id'                => $display_id,
			'hide_empty_groups'      => true,
			'hide_empty_fields'      => true,
			'fetch_fields'           => true,
			'fetch_field_data'       => true,
		) );
	
		if ( ! empty( $groups ) ) {
 
			foreach ( (array) $groups as $group ) {
				if ( empty( $group->fields ) || $group->name == "Protected" ) {
					continue;
				}
				foreach ( (array) $group->fields as $field ) {
					$data[$group->name][$field->name] = array(					
						'field_name'   	   => $field->name,
						'field_value' 	   => $field->data->value,
						'field_type'       => $field->type						
					);
				}
			}
		}
		$age = "&#8203"; //no width space		
		
		if(isset($data['Personal Data'])) {
			if(isset($data['Personal Data']['Birthdate'])) {
				$dob = $data['Personal Data']['Birthdate']['field_value'];
				if ($dob) {     
					$age = getAge($dob) ." years";
				}
			}
		
			if(isset($data['Personal Data']['Receive messages'])) {
				$the_member["receive_messages"] = unserialize($data['Personal Data']['Receive messages']['field_value'])[0] == 'Receive messages from girls';
			}
			unset($data['Personal Data']['Receive messages']);
			unset($data['Personal Data']['Birthdate']);
			if(isset($data['Personal Data']['Country'])){
				$the_member["country"] = $data['Personal Data']['Country']['field_value'];
			}				
		}
		$the_member["age"] = $age;
		$the_member["name"] = bp_core_get_user_displayname($display_id);
		
		$images = get_image_array($display_id);	
		$the_member["gallery"] = $images;
		$the_member['fields'] = $data;
		
		return $the_member;
	}
	function get_members($request) {
		$user_id = get_current_user_id();
		
		if(is_wp_error($user_id)) {
			return $user_id;
		}
		wp_set_current_user($user_id);
		$members = array();		
		if ( bp_has_members( 'per_page=0&type=active')) {
			while ( bp_members() ){
				bp_the_member();			
				$display_id = bp_get_member_user_id();				
				$members[] = get_member_data($display_id);
			}
		}
		//Add current user to the end
		$members[] = get_member_data($user_id);	
		return new WP_REST_Response($members);
	}	
	
	function get_members_short($request) {
		$user_id = get_current_user_id();
		
		if(is_wp_error($user_id)) {
			return $user_id;
		}
		wp_set_current_user($user_id);
		
		$members = array();
		if ( bp_has_members('per_page=0&type=active')) {
			while ( bp_members() ){
				bp_the_member();			
				$display_id = bp_get_member_user_id();
				$members[] = get_member_data_short($display_id);
			}
		}
		//Add current user to the end
		$members[] = get_member_data_short($user_id);	
		return new WP_REST_Response($members);
	}
	
	function update_password($request) {
		$user_id = get_user_from_token();
		
		if(is_wp_error($user_id)) {
			return $user_id;
		}
		wp_set_password($request["pwd"], $user_id);
	}
	
	
	// generate a random, but not pretty, slug for a post type https://docs.wpvip.com/how-tos/filtering-wp_unique_post_slug/
	add_filter( 'pre_wp_unique_post_slug', 'vip_set_log_slug', 10, 6 );

	function vip_set_log_slug( $override, $slug, $post_ID, $post_status, $post_type, $post_parent ) {
		if ( 'wp_log' === $post_type ) {
			if ( $post_ID ) {
				return $post_ID;
			}
			return uniqid( $post_type . '-' );
		}
		return $override;
	}
	
	function get_unread() {
		global $wpdb;

            $bp_prefix = bp_core_get_table_prefix();           

            /**
             * Update users without activity
             */
            $user_without_last_activity = get_users( array(
                'number'       => -1,
                'meta_key'     => 'bpbm_last_activity',
                'meta_compare' => 'NOT EXISTS',
                'fields'       => 'ids'
            ) );

            if( count( $user_without_last_activity ) > 0 ){
                foreach( $user_without_last_activity as $user_id ){
                    $last_activity = get_user_meta( $user_id, 'last_activity', true );

                    if( ! empty( $last_activity ) ){
                        update_user_meta( $user_id, 'bpbm_last_activity', $last_activity );
                    } else {
                        update_user_meta( $user_id, 'bpbm_last_activity', gmdate( 'Y-m-d H:i:s',  0 ) );
                    }
                }
            }

            $time = gmdate( 'Y-m-d H:i:s', ( strtotime( bp_core_current_time() ) - 600 ) );
			$time_ago = date('Y-m-d H:i:s', strtotime('-2 months'));
            $unread_threads = $wpdb->get_results( "SELECT
              {$wpdb->base_prefix}usermeta.meta_value AS last_visit,
              {$wpdb->base_prefix}usermeta.user_id,
              {$wpdb->base_prefix}bp_messages_recipients.thread_id,
              {$wpdb->base_prefix}bp_messages_recipients.unread_count,
              {$wpdb->base_prefix}bp_messages_messages.id AS last_id
            FROM {$wpdb->base_prefix}bp_messages_recipients
              INNER JOIN {$wpdb->base_prefix}usermeta
                ON {$wpdb->base_prefix}bp_messages_recipients.user_id = {$wpdb->base_prefix}usermeta.user_id
              INNER JOIN {$wpdb->base_prefix}bp_messages_messages
                ON {$wpdb->base_prefix}bp_messages_messages.thread_id = {$wpdb->base_prefix}bp_messages_recipients.thread_id
                  AND {$wpdb->base_prefix}bp_messages_messages.id = (
                      SELECT MAX(m2.id)
                      FROM {$wpdb->base_prefix}bp_messages_messages m2 
                      WHERE m2.thread_id = {$wpdb->base_prefix}bp_messages_recipients.thread_id
                  )
            WHERE {$wpdb->base_prefix}usermeta.meta_key = 'bpbm_last_activity'
            AND STR_TO_DATE({$wpdb->base_prefix}usermeta.meta_value, '%s') < " . $wpdb->prepare('%s', $time) . "
            AND {$wpdb->base_prefix}bp_messages_recipients.unread_count > 0
			AND {$wpdb->base_prefix}bp_messages_messages.date_sent > " . $wpdb->prepare('%s', $time_ago) . "
            AND {$wpdb->base_prefix}bp_messages_recipients.is_deleted = 0
            GROUP BY {$wpdb->base_prefix}usermeta.user_id,
                     {$wpdb->base_prefix}bp_messages_recipients.thread_id" );

            $last_notified = array();

            foreach ( array_unique( wp_list_pluck( $unread_threads, 'user_id' ) ) as $user_id ) {
                $meta = get_user_meta( $user_id, 'bp-better-messages-last-notified', true );
                $last_notified[ $user_id ] = ( !empty( $meta ) ) ? $meta : array();
            }

            $gmt_offset = get_option('gmt_offset') * 3600;

            foreach ( $unread_threads as $thread ) {
                $user_id = $thread->user_id;
                $thread_id = $thread->thread_id;

                $muted_threads = BP_Better_Messages()->functions->get_user_muted_threads( $user_id );
                if( isset( $muted_threads[ $thread_id ] ) ){
                    continue;
                }

                if ( function_exists('bp_send_email') && get_user_meta( $user_id, 'notification_messages_new_message', true ) == 'no' ) {
                    $last_notified[ $user_id ][ $thread_id ] = $thread->last_id;
                    continue;
                }

                $ud = get_userdata( $user_id );

                if ( ! isset( $last_notified[ $user_id ][ $thread_id ] ) || ( $thread->last_id > $last_notified[ $user_id ][ $thread_id ] ) ) {

                    $user_last = ( isset( $last_notified[ $user_id ][ $thread_id ] ) ) ? $last_notified[ $user_id ][ $thread_id ] : 0;

                    $messages = array_reverse( $wpdb->get_results( $wpdb->prepare( "
                        SELECT
                          {$bp_prefix}bp_messages_messages.message,
                          {$bp_prefix}bp_messages_messages.sender_id,
                          {$bp_prefix}bp_messages_messages.subject,
                          {$bp_prefix}bp_messages_messages.date_sent
                        FROM {$bp_prefix}bp_messages_messages
                        WHERE {$bp_prefix}bp_messages_messages.thread_id = %d
                        AND {$bp_prefix}bp_messages_messages.id > %d 
                        ORDER BY id DESC
                        LIMIT 0, %d
                    ", $thread->thread_id, $user_last, $thread->unread_count ) ) );

                    if ( empty( $messages ) ) {
                        continue;
                    }

                    foreach($messages as $index => $message){
                        if( $message->message ){
                            $is_sticker = strpos( $message->message, '<span class="bpbm-sticker">' ) !== false;
                            if( $is_sticker ){
                                $message->message = __('Sticker', 'bp-better-messages');
                            }
                        }
                    }

                    if ( empty( $messages ) ) {
                        continue;
                    }

                    $messageRaw = '';
                    $messageHtml = '<table style="margin: 0!important;width: 100%;"><tbody>';
                    $last_id = 0;
                    foreach ( $messages as $message ) {
                        $sender = get_userdata( $message->sender_id );

                        $timestamp = strtotime( $message->date_sent ) + $gmt_offset;
                        $time_format = get_option( 'time_format' );

                        if ( gmdate( 'Ymd' ) != gmdate( 'Ymd', $timestamp ) ) {
                            $time_format .= ' ' . get_option( 'date_format' );
                        }

                        $time = wp_strip_all_tags( stripslashes( date_i18n( $time_format, $timestamp ) ) );
                        $author = wp_strip_all_tags( stripslashes( sprintf( __( '%s wrote:', 'bp-better-messages' ), $sender->display_name ) ) );
                        $message = wp_strip_all_tags( stripslashes( $message->message ) );

                        if ( $last_id == 0 || $last_id != $sender->ID ) {
                            $messageHtml .= '<tr><td colspan="2"><b>' . $author . '</b></td></tr>';
                            $messageRaw .= "$author\n";
                        }

                        $messageRaw .= "$time\n$message\n\n";

                        $messageHtml .= '<tr>';
                        $messageHtml .= '<td style="padding-right: 10px;">' . $message . '</td>';
                        $messageHtml .= '<td style="width: 1px;white-space: nowrap;vertical-align: top;"><i>' . $time . '</i></td>';
                        $messageHtml .= '</tr>';

                        $last_id = $sender->ID;
                    }

                    $messageHtml .= '</tbody></table>';


                    if( function_exists('bp_notifications_add_notification') ){
                        bp_notifications_add_notification( array(
                            'user_id'           => $user_id,
                            'item_id'           => $thread->last_id,
                            'secondary_item_id' => $last_id,
                            'component_name'    => buddypress()->messages->id,
                            'component_action'  => 'new_message',
                            'date_notified'     => bp_core_current_time(),
                            'is_new'            => 1
                        ) );
                    }

                    if( function_exists('bp_send_email') ){
                        $args = array(
                            'tokens' =>
                                apply_filters( 'bp_better_messages_notification_tokens', array(
                                    'messages.html' => $messageHtml,
                                    'messages.raw'  => $messageRaw,
                                    'sender.name'   => $sender->display_name,
                                    'thread.id'     => $thread_id,
                                    'thread.url'    => esc_url( BP_Better_Messages()->functions->get_link( $user_id ) . '?thread_id=' . $thread_id ),
                                    'subject'       => sanitize_text_field( stripslashes( $messages[ 0 ]->subject ) ),
                                    'unsubscribe'   => esc_url( bp_email_get_unsubscribe_link( array(
                                        'user_id'           => $user_id,
                                        'notification_type' => 'messages-unread',
                                    ) ) )
                                ),
                                    $ud, // userdata object of receiver
                                    $sender, // userdata object of sender
                                    $thread_id
                                ),
                        );

                        bp_send_email( 'messages-unread-group', $ud, $args );
						file_put_contents("/opt/bitnami/wordpress/mails_sent.txt", $user_id . ";", FILE_APPEND);
                    } else {
                        $user = get_userdata( $user_id );

                        $subject = sprintf( _x( 'You have unread messages: "%s"', 'Email notification header for non BuddyPress websites', 'bp-better-messages' ), sanitize_text_field( stripslashes( $messages[ 0 ]->subject ) ) );
                        $plainHeader  = sprintf( _x( 'Hi %s', 'Email notification header for non BuddyPress websites', 'bp-better-messages' ), $user->display_name ) . ",\r\n";
                        $plainHeader .= $subject . "\r\n";
                        $plainHeader .= "\r\n\r\n\r\n";


                        $plainFooter  = "\r\n\r\n\r\n";
                        $plainFooter .= _x( "Go to the discussion to reply or catch up on the conversation:", 'Email notification header for non BuddyPress websites', 'bp-better-messages') . "\r\n";
                        $plainFooter .= esc_url( BP_Better_Messages()->functions->get_link( $user_id ) . '?thread_id=' . $thread_id );

                        $messageRaw = $plainHeader . $messageRaw . $plainFooter;
                        wp_mail( $user->user_email, $subject, $messageRaw );
						file_put_contents("/opt/bitnami/wordpress/mails_sent.txt", $user_id . ";", FILE_APPEND);
                    }

                    $last_notified[ $user_id ][ $thread_id ] = $thread->last_id;
                }

            }

            foreach ( $last_notified as $user_id => $threads ) {
                update_user_meta( $user_id, 'bp-better-messages-last-notified', $threads );
            }
						 
		return json_encode($last_notified);
	}
	
	add_action( 'rest_api_init', function () {
	register_rest_route( 'controller/v1', '/get_comp_availability/(?P<id>\d+)', array(
		'methods' => 'GET',
		'permission_callback' => '__return_true',
		'callback' => 'get_comp_availability'));}
			
	);
	add_action( 'rest_api_init', function () {
	register_rest_route( 'controller/v1', '/get_unread', array(
		'methods' => 'GET',
		'permission_callback' => '__return_true',
		'callback' => 'get_unread'));}
			
	);
	add_action( 'rest_api_init', function () {
	register_rest_route( 'controller/v1', '/get_comp_birthdate/(?P<id>\d+)', array(
		'methods' => 'GET',
		'permission_callback' => '__return_true',
		'callback' => 'get_comp_birthdate'));}
			
	);
	add_action( 'rest_api_init', function () {
		register_rest_route( 'controller/v2', '/update_comp_availability_auth/(?P<date>\[[0-9]{4}-[0-9]{2}-[0-9]{2}\]\[[0-9]{4}-[0-9]{2}-[0-9]{2}\](;\[[0-9]{4}-[0-9]{2}-[0-9]{2}\]\[[0-9]{4}-[0-9]{2}-[0-9]{2}\])*)', array(
			'methods' => 'GET',
			'callback' => 'update_comp_availability_auth',
			'permission_callback' => '__return_true'));}
				
	);	
	add_action( 'rest_api_init', function () {
	register_rest_route( 'controller/v1', '/update_comp_availability/(?P<id>\d+)/(?P<date>\[[0-9]{4}-[0-9]{2}-[0-9]{2}\]\[[0-9]{4}-[0-9]{2}-[0-9]{2}\](;\[[0-9]{4}-[0-9]{2}-[0-9]{2}\]\[[0-9]{4}-[0-9]{2}-[0-9]{2}\])*)', array(
		'methods' => 'GET',
		'callback' => 'update_comp_availability',
		'permission_callback' => 'prefix_get_private_data_permissions_check'));}
			
	);
	add_action( 'rest_api_init', function () {
		register_rest_route( 'controller/v2', '/update_profile/',array(
			'methods' => 'PUT',
			'callback' => 'update_profile',
			'permission_callback' => '__return_true'));}
				
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

	add_action( 'rest_api_init', function () {
		register_rest_route( 'controller/v2', '/upload_avatar/', array(
			'methods' => 'POST',
			'permission_callback' => '__return_true',
			'callback' => 'upload_avatar'));}
	);

	add_action( 'rest_api_init', function () {
		register_rest_route( 'controller/v2', '/set_avatar_crop/', array(
			'methods' => 'POST',
			'permission_callback' => '__return_true',
			'callback' => 'set_avatar_crop'));}
	);

	add_action( 'rest_api_init', function () {
		register_rest_route( 'controller/v2', '/get_images/', array(
			'methods' => 'GET',
			'permission_callback' => '__return_true',
			'callback' => 'get_images'));}
	);

	add_action( 'rest_api_init', function () {
		register_rest_route( 'controller/v2', '/get_avatar_picture/', array(
			'methods' => 'GET',
			'permission_callback' => '__return_true',
			'callback' => 'get_avatar_picture'));}
	);	

	add_action( 'rest_api_init', function () {
		register_rest_route( 'controller/v2', '/delete_image/(?P<id>\d+)', array(
			'methods' => 'DELETE',
			'permission_callback' => '__return_true',
			'callback' => 'delete_image'));}
	);

	add_action( 'rest_api_init', function () {
		register_rest_route( 'controller/v2', '/get_profile_fields/', array(
			'methods' => 'GET',
			'permission_callback' => '__return_true',
			'callback' => 'get_profile_fields'));}
	);

	add_action( 'rest_api_init', function () {
		register_rest_route( 'controller/v2', '/get_message_threads/', array(
			'methods' => 'GET',
			'permission_callback' => '__return_true',
			'callback' => 'get_message_threads'));}
	);
	
	add_action( 'rest_api_init', function () {
		register_rest_route( 'controller/v2', '/get_fast_thread/', array(
			'methods' => 'GET',
			'permission_callback' => '__return_true',
			'callback' => 'get_fast_thread'));}
	);

	add_action( 'rest_api_init', function () {
		register_rest_route( 'controller/v2', '/get_thread_messages/(?P<id>\d+)', array(
			'methods' => 'GET',
			'permission_callback' => '__return_true',
			'callback' => 'get_thread_messages'));}
	);

	add_action( 'rest_api_init', function () {
		register_rest_route( 'controller/v2', '/send_thread_message/', array(
			'methods' => 'POST',
			'permission_callback' => '__return_true',
			'callback' => 'send_thread_message'));}
	);

	add_action( 'rest_api_init', function () {
		register_rest_route( 'controller/v2', '/get_new_messages/', array(
			'methods' => 'GET',
			'permission_callback' => '__return_true',
			'callback' => 'get_new_messages'));}
	);
	add_action( 'rest_api_init', function () {
		register_rest_route( 'controller/v2', '/get_new_threads/', array(
			'methods' => 'GET',
			'permission_callback' => '__return_true',
			'callback' => 'get_new_threads'));}
	);
	add_action( 'rest_api_init', function () {
		register_rest_route( 'controller/v1', '/reset_pwd/', array(
			'methods' => 'GET',
			'permission_callback' => '__return_true',
			'callback' => 'reset_pwd'));}
	);
	add_action( 'rest_api_init', function () {
		register_rest_route( 'controller/v2', '/get_members/', array(
			'methods' => 'GET',
			'permission_callback' => '__return_true',
			'callback' => 'get_members'));}
	);
	add_action( 'rest_api_init', function () {
		register_rest_route( 'controller/v2', '/get_members_short/', array(
			'methods' => 'GET',
			'permission_callback' => '__return_true',
			'callback' => 'get_members_short'));}
	);
	add_action( 'rest_api_init', function () {
		register_rest_route( 'controller/v1', '/get_member_data/(?P<id>\d+)', array(
			'methods' => 'GET',
			'permission_callback' => '__return_true',
			'callback' => 'get_member_data_external'));}
	);
	add_action( 'rest_api_init', function () {
		register_rest_route( 'controller/v2', '/send_data/', array(
			'methods' => 'POST',
			'permission_callback' => '__return_true',
			'callback' => 'send_data'));}
	);
	add_action( 'rest_api_init', function () {
		register_rest_route( 'controller/v2', '/test/', array(
			'methods' => 'GET',
			'permission_callback' => '__return_true',
			'callback' => 'test_func'));}
	);	
	
	function test_func($data) {		
	
		return;
		global $wpdb;	
		foreach ( $wpdb->get_col( "SELECT ID FROM $wpdb->users" ) as $user_id ) {			
			echo bp_update_user_last_activity($user_id, date('Y-m-d H:i:s'));
		}
		return;
		
		$profile_data = get_member_data_short( 218 );
		echo json_encode($profile_data);
		exit(0);
		
		// I am putting all the notifications to no by default
		// you can set the value to 'yes' if you want that notification to be enabled.
		do_action( 'bp_core_activated_user', 609, "", null );
		return;
	
		$json = '[{"type":"follow","timestamp":1620463022101,"source":{"type":"user","userId":"Uca6ffde6f9c3f57c5be907bf657058dc"},"replyToken":"55ae96ed378147298f600a0337ef5d5b","mode":"active"}]';
		$decoded = json_decode($json);
		
		echo $decoded[0]->source->userId;
		
		return;
		
		if(!get_current_user_id())
			return "No user";
		//$code = base64_encode(1);
		//$token = $code . "." . substr(hash_hmac("sha256", $code, AUTH_KEY), 0, 20);
		//echo "token: " . $token;
		$token = $data["token"];
		$segments = explode('.', $token);
		if(count($segments) != 2) {
			return "Invalid token";
		}
		
		if(substr(hash_hmac("sha256", $segments[0], AUTH_KEY), 0, 20) != $segments[1]) {
			return "Invalid token";
		}
		
		$number = base64_decode($segments[0]);
		
		echo "number: " . $number;
		exit(0);
		wp_set_current_user(218);
		return "wp user. " . get_current_user_id() . ", bp user: " . bp_loggedin_user_id();	
		
		$push_data = wp_json_encode(array(
									"message" => "Test",
									"username" => "michael_send",
									"password" => "michael_send2021!",
									"to_user" => "michael",
									"token" => "c92d954f3d"
									));	
		$args = get_wp_post_args_intern($push_data);
		 
		$response = wp_remote_post( "https://ionifier.com/wp-json/controller/v1/send_notification", $args );		
		return json_encode($response);
		
		//$code = ini_get('display_errors');
		//return new WP_REST_Response($code, 200);
		//$admin_token = json_decode(get_user_meta(1, "app_data", true), true)["line_token"];
		//return send_line_push($admin_token, "This is a test");
				
		$data = array(			
			"line_token" => "U6aca40d74a20b83b2fb2d00113afc6b5"
			);
		$payload = wp_json_encode($data);
		return update_user_meta(23, "app_data", $payload);
		/*
		
		$blogusers = get_users( '' );
		foreach($blogusers as $user) {
			$display_id = $user->ID;
			$gallery = get_activity_gallery($display_id );
			$count = mpp_gallery_get_media_count($gallery->id);
			
			$status = $count>0?1:0;
			$ret[] = $display_id . ": " . $status;
			xprofile_set_field_data("Active", $display_id, $status);
			xprofile_set_field_data("Country", $display_id, "Thailand");
			xprofile_set_field_data("Receive messages", $display_id, array("Receive messages from girls"));
		}
		
		return wp_json_encode($ret);*/
		
		
	}
	add_action( 'rest_api_init', function () {
		register_rest_route( 'controller/v1', '/create_gallery/', array(
			'methods' => 'GET',
			'permission_callback' => '__return_true',
			'callback' => 'create_gallery'));}
	);
	
	add_action( 'rest_api_init', function () {
		register_rest_route( 'controller/v2', '/update_password/', array(
			'methods' => 'PUT',
			'permission_callback' => '__return_true',
			'callback' => 'update_password'));}
	);
	
	add_action( 'rest_api_init', function () {
		register_rest_route( 'controller/v2', '/line/', array(
			'methods' => 'POST',
			'permission_callback' => '__return_true',
			'callback' => 'line'));}
	);
	
	function create_gallery() {
		
		$blogusers = get_users( '' );
		foreach($blogusers as $user) {
			$display_id = $user->ID;
			if(bp_get_member_type($display_id) == "escort")
				continue;
			$gallery = get_activity_gallery($display_id );			
			mpp_update_gallery_type($gallery, "photo");
			mpp_update_gallery_component($gallery, "members");
			$ret[] = $display_id;						
		}
		
		return wp_json_encode($ret);
	}

	//needed for change avatar via app	
	add_action( 'rest_api_init', function()
	{
		header( "Access-Control-Allow-Origin: *" );
	} );	

	//MEDIAPRESS Whitelisting is done in bp_custom due to hook order

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

add_action( 'messages_message_before_save', 'control_sending_of_private_message_before' );