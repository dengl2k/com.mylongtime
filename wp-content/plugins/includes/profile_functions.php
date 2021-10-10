<?php

function current_user_has_avatar() {

return bp_core_fetch_avatar( array( 'item_id' => bp_loggedin_user_id(), 'no_grav' => true, 'html'=> false ) ) != bp_core_avatar_default();

}

//01.05.2020 Hide calendar tab and protected fields under Profile->Edit
function bpfr_hide_profile_field_group( $groups ) {

    // Hide the profile group tabs on the edit interface for all non-admins.
    if ( bp_is_user_profile_edit() && !current_user_can( 'bp_moderate' ) ) {
        $remove_groups = array( 2, 3 ); // Put the IDs of the groups to remove here, separated by commas.
        $new_set = array();
        foreach ( $groups as $key => $group_obj ) {
            if ( ! in_array( $group_obj->id, $remove_groups )  ) {
                $new_set[] = $group_obj;
            }
        }
        return $new_set;
    }

    return $groups;
}
add_filter( 'bp_profile_get_field_groups', 'bpfr_hide_profile_field_group' );

//Exclude calendar, level und birthday offset fields
function skip_xprofile_fields( $args ){
   
	if(!is_super_admin()) {
		$args['exclude_fields'] = '5, 7, 9';
		$args['exclude_groups'] = '2, 3';
		if(is_page("register")) {
			//exclude height, weight and about in register page
			$args['exclude_fields'] = '2, 3, 12';
		}
	}
    return $args;
}
add_filter('bp_before_has_profile_parse_args', 'skip_xprofile_fields' );

function deny_change_visibility( $retval, $capability, $args_site_id, $args ) {
	if(!is_super_admin() && $capability == 'bp_xprofile_change_field_visibility') {
		return false;
	}
	return $retval;	
}

add_filter('bp_current_user_can', 'deny_change_visibility', 20, 4);

//03.03.2018 Dont Show Export User Data
add_filter( 'bp_settings_show_user_data_page', '__return_false' );

//03.03.2018 Remove Profile Visibilty
function bpfr_hide_visibility_tab() {	
	if( bp_is_active( 'xprofile' ) )			
		bp_core_remove_subnav_item( 'settings', 'profile' );
}
add_action( 'bp_ready', 'bpfr_hide_visibility_tab' );

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
	} else{
		echo "&#8203";//no width space
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

//dont show birthday_offset field for normal users
function filter_bp_field_has_data( $profile_template_field_has_data, $profile_template, $profile_template_field, $profile_template_field_id ) {
    if(	$profile_template_field_id == 7 && !is_super_admin() )
		return false;
    return $profile_template_field_has_data;
}

// add the filter
add_filter( 'bp_field_has_data', 'filter_bp_field_has_data', 99, 4 );


function create_locations_taxonomy() {

// Labels part for the GUI
  $labels = array(
    'name' => _x( 'Locations', 'taxonomy general name' ),
    'singular_name' => _x( 'Location', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Locations' ),
    'popular_items' => __( 'Popular Locations' ),
    'all_items' => __( 'All Locations' ),
    'parent_item' => __( 'Country' ),
    'parent_item_colon' => __( 'Country' ),
    'edit_item' => __( 'Edit Location' ),
    'update_item' => __( 'Update Location' ),
    'add_new_item' => __( 'Add New Location' ),
    'new_item_name' => __( 'New Location Name' ),
    'separate_items_with_commas' => __( 'Separate locations with commas' ),
    'add_or_remove_items' => __( 'Add or remove locations' ),
    'choose_from_most_used' => __( 'Choose from the most used locations' ),
    'menu_name' => __( 'Locations' ),
  );

// Now register the non-hierarchical taxonomy like tag

  register_taxonomy('locations', 'post',array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'location' ),
  ));
}

function create_countries_taxonomy() {

	// Labels part for the GUI
	  $labels = array(
		'name' => _x( 'Countries', 'taxonomy general name' ),
		'singular_name' => _x( 'Countries', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Countries' ),
		'popular_items' => __( 'Popular Countriess' ),
		'all_items' => __( 'All Countries' ),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __( 'Edit Country' ),
		'update_item' => __( 'Update Country' ),
		'add_new_item' => __( 'Add New Country' ),
		'new_item_name' => __( 'New Country Name' ),
		'separate_items_with_commas' => __( 'Separate countries with commas' ),
		'add_or_remove_items' => __( 'Add or remove countries' ),
		'choose_from_most_used' => __( 'Choose from the most used countries' ),
		'menu_name' => __( 'Countries' ),
	  );
	
	// Now register the non-hierarchical taxonomy like tag
	
	  register_taxonomy('countries', 'post', array(
		'hierarchical' => false,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var' => true,
		'rewrite' => array( 'slug' => 'country' ),
	  ));
}

function add_custom_field_type( $fields ) {

	// make sure we get an array
	if ( is_array( $fields ) ) {

		// add our field to the array
		$fields['country'] = 'BP_XProfile_Field_Type_Country';

	} else {

		// create array with our item
		$fields = array( 'country' => 'BP_XProfile_Field_Type_Country' );

	}

	// --<
	return $fields;

}

function bp_xprofile_add_custom_field() {

	create_locations_taxonomy();	
	
	require_once( 'buddypress_profile_country.php' );

	// register with BP the 2.0 way...
	add_filter( 'bp_xprofile_get_field_types', 'add_custom_field_type' );
	$bp_xprofile_country_field = new BP_XProfile_Field_Type_Country;	

}

// add action for plugin loaded

add_action( 'init', 'bp_xprofile_add_custom_field' );
