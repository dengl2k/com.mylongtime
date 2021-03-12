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
	function update_comp_field( $data ) {		
		bp_set_member_type($data['id'], 'escort');
		return wp_json_encode(xprofile_set_field_data($data['field'], $data['id'],  $data['value']));
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
		'callback' => 'get_comp_availability'));}
			
	);
	add_action( 'rest_api_init', function () {
	register_rest_route( 'controller/v1', '/get_comp_birthdate/(?P<id>\d+)', array(
		'methods' => 'GET',
		'callback' => 'get_comp_birthdate'));}
			
	);
	add_action( 'rest_api_init', function () {
	register_rest_route( 'controller/v1', '/update_comp_availability/(?P<id>\d+)/(?P<date>\[[0-9]{4}-[0-9]{2}-[0-9]{2}\]\[[0-9]{4}-[0-9]{2}-[0-9]{2}\](;\[[0-9]{4}-[0-9]{2}-[0-9]{2}\]\[[0-9]{4}-[0-9]{2}-[0-9]{2}\])*)', array(
		'methods' => 'GET',
		'callback' => 'update_comp_availability',
		'permission_callback' => 'prefix_get_private_data_permissions_check'));}
			
	);/* 19.12.2020 removed due to security reasons
	add_action( 'rest_api_init', function () {
	register_rest_route( 'controller/v1', '/update_comp_field/(?P<id>\d+)/(?P<field>[a-zA-Z]+)/(?P<value>\d+)', array(
		'methods' => 'GET',
		'callback' => 'update_comp_field'));}
	);*/
?>