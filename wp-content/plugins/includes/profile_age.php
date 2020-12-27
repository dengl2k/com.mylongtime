<?php

add_action( 'bp_before_member_header_meta', 'ui_custom_profile_display' );
add_action( 'bp_directory_members_item', 'ui_custom_profile_display' );

function getAge($dob) {
	//turn DoB into UNIX time so we can manipulate it
	$age = strtotime($dob);
	//get today's UNIX time and subtract today form it
	$age = time() - $age;		
	//now we have the age in seconds, let's turn it into years
	$age = floor($age / 31536000 );
		
	//Make escort a bit younger than she is
	$offset = ui_bp_get_field_for_current_user( "Birthdate_offset" );
	if(!empty($offset))
			$age -= $offset;
	return $age;
}

function ui_custom_profile_display() {
	// this is where the magic happens
  
	$dob = ui_bp_get_field_for_current_user( "Birthdate" );
	//let's double check if it's empty
	if ($dob) {
     
		$age = getAge($dob);
 
		echo $age." years";
	}
}
//helper function
function ui_bp_get_field_for_current_user( $field, $logged_in_user = false ) {
  
	if($logged_in_user) {
		$user_id = get_current_user_id();
	}
	else {
		if( bp_is_user() ) {
			$user_id = bp_displayed_user_id();	
		} else {
			$user_id = bp_get_member_user_id();
		}
	}
	//usually we need the UID as well, but since this runs into the profile page we won't need it
	$args = array(
		'field'   => $field, // Field name or ID
		 'user_id' => $user_id
	);	
  
	//just return whatever the BP function finds
	return bp_get_profile_field_data( $args );
}

function filter_bp_get_the_profile_field_value($value, $field_type, $field_id ) { 
    if($field_id == 2)
		return $value . " kg";
	else if ($field_id == 3)
		return $value . " cm";
	else if ($field_id == 4) {		
		$dob = ui_bp_get_field_for_current_user( "Birthdate" );
		//let's double check if it's empty
		if ($dob) {		 
			$age = getAge($dob);	 
			return $age ." years";
		}
	}
	return $value;
}
add_filter( 'bp_get_the_profile_field_value', 'filter_bp_get_the_profile_field_value', 10, 3 );
 
function filter_bp_get_the_profile_field_name($name) { 
    if($name == "Birthdate")
		return "Age";
	return $name;
}
add_filter( 'bp_get_the_profile_field_name', 'filter_bp_get_the_profile_field_name', 10, 1 );

//dont show field for normal users
function filter_bp_field_has_data( $profile_template_field_has_data, $profile_template, $profile_template_field, $profile_template_field_id ) { 
    if(	$profile_template_field_id == 7 && !is_super_admin() )
		return false;
    return $profile_template_field_has_data; 
}
         
// add the filter 
add_filter( 'bp_field_has_data', 'filter_bp_field_has_data', 99, 4 ); 
?>