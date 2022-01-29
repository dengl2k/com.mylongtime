<?php
namespace setuser;

/*
Plugin Name: Set User Part B
Plugin URI: https://wordpress.stackexchange.com/questions/287556/login-cookie-across-multiple-domains-on-network-w-mapping
Text Domain: set_user_b
*/

function define_hooks() {
  
	add_action( 'rest_api_init', function () {
		register_rest_route( 'controller/v1/', '/create_user', array(
		'methods' => 'POST',
		'callback' => 'setuser\create_user_json'));}
	);
	add_action( 'rest_api_init', function () {
		register_rest_route( 'controller/v1/', '/login_user', array(
		'methods' => 'GET',
		'callback' => 'setuser\login_user_json',
		'permission_callback' => '__return_true')
		);}
	);
}
add_action( 'plugins_loaded', 'setuser\define_hooks' );

function validate($data, $key, $nonce) {
	$diff = abs(microtime(true) - floatval($nonce));	
	if(intval($diff)>10)
		return false;
			
	$pass = "{`2y+^p|jD-kj?#BS<2<-&?d~)x@iuzm|";		
	$key_calc = md5(implode($data) . $pass . $nonce);
	return $key == $key_calc;
}

function login_user_json($request) {
	
	$error_code = 0;
	$token = base64_decode($request->get_param( 'token'));
	$user_data = json_decode($token, true);	

	if ( JSON_ERROR_NONE !== json_last_error() || !isset($user_data['payload']) || !isset($user_data['nonce']) || !isset($user_data['key']) ) {
		$error_code = 1; // Invalid format
	}
	else if(!validate($user_data['payload'], $user_data['key'], $user_data['nonce'] )) {		
		$error_code = 2; //Not authenticated
	}
	else if(($user_id = $user_data['payload']['user_id']) == 1) {
		$error_code = 3; //Admin not allowed
	}
	else {
		
		$user_login = $user_data['payload']['user_login'];
		$user = get_user_by( 'id', $user_id );		
		
		if($user){
			wp_set_current_user( $user_id, $user_login);
			wp_set_auth_cookie( $user_id, true);
			bp_update_user_last_activity( $user_id, bp_core_current_time() );
			do_action( 'wp_login', $user_login, $user );	
			wp_redirect(bp_core_get_user_domain( $user_id ) . 'profile/edit' );
			exit;	
		}
		else {
			$error_code = 4; //User login failed		
		}
	}
	$ref_url = $user_data['payload']['ref'];
	if(!empty($ref_url)) {			
		$url = add_query_arg('code', $error_code , $ref_url);
		wp_redirect($url);
		exit;
	}
	else {
		return "Error:" . $error_code;
	}		
}
	
function create_user_json($request) {
	sleep(5);
	
	$user = json_decode($request->get_body(), true);

	if ( JSON_ERROR_NONE !== json_last_error() || !isset($user['payload']) || !isset($user['nonce']) || !isset($user['key']) ) {
		return "Invalid format";
	}
	if(!validate($user['payload'], $user['key'], $user['nonce'] )) {
		return 'Not authenticated';
	}
		
	$user = $user['payload'];
	$user_login = $user['user_login'];
	$user_email = $user['user_email'];
	$user_pass  = wp_generate_password( $length = 12, $include_standard_special_chars = false );
	$first_name  = $user['user_firstname'];
	$last_name = $user['user_lastname'];
 
    $userdata = compact( 'user_login', 'user_email', 'user_pass', 'first_name', 'last_name');
    $result = wp_insert_user( $userdata );		
	if(is_wp_error($result))
		return $result->get_error_message();
	else {
		xprofile_set_field_data("Active", $result, 1);		
		return $result;
	}
	
}
/**
 * END OF DOMAIN B PART PLUGIN
 */
?>