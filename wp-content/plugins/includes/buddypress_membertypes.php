<?php
add_action( 'bp_register_member_types', 'buddydev_register_member_types' );
 
function buddydev_register_member_types() {
 
    bp_register_member_type( 'client', array(
        'labels' => array(
            'name'            => __( 'Clients' ),
            'singular_name'    => __( 'Client' )
        ),
        'has_directory'    => false,//can be given a slug that will be appended to member directory to list all users of this type    
    ) );
    
    
    bp_register_member_type( 'escort', array(
        'labels' => array(
            'name'            => __( 'Escorts' ),
            'singular_name'    => __( 'Escort' )
        ),
        'has_directory'    => false,
    ) );
 
}
	
add_filter( 'bp_after_has_members_parse_args', 'buddydev_exclude_users_by_member_type' );
 
function wpse129106_bp_member_ids_by_field( $field_name, $field_value = '', $compare = '=' ) {
    if ( empty( $field_name ) )
        return '';

    global $wpdb;

    $field_id = xprofile_get_field_id_from_name( $field_name );

    if ( !empty( $field_id ) ) {
        $query = "SELECT user_id FROM " . $wpdb->prefix . "bp_xprofile_data WHERE field_id = " . $field_id .= " AND value " . $compare . " '" . $field_value . "'";
	}
    $custom_ids = $wpdb->get_col( $query );

    return $custom_ids;
}

function buddydev_exclude_users_by_member_type( $args ) {
		
    // do not exclude in admin. 
    $args['member_type__in'] = array('client', 'escort');
	if ( is_admin() && !defined( 'DOING_AJAX' ) ) {
        return $args;
    }
    if(is_super_admin()) {		
       return $args;
    }

	$excluded = isset( $args['exclude'] ) ? $args['exclude'] : array();
 
    if ( ! is_array( $excluded ) ) {
        $excluded = explode( ',', $excluded );
    } 
	$current_user_id = get_current_user_id();	
	
   	//Exclude admin and Pui
    $excluded = array_merge( $excluded,  array( 1, 71 ) );
	
	$args['include'] = wpse129106_bp_member_ids_by_field("Active", "1");
	
	if(isset($_POST['filter'])) {
		$filter = $_POST['filter'];
		if($filter != "active" && $filter != "alphabetical" && $filter != "newest" && $filter != "alllocations"){
			$loc_filter = wpse129106_bp_member_ids_by_field('Location', '%'.$filter.'%', 'LIKE');
			$active_members = $args['include'];
			foreach($active_members as $val) {
				if(!in_array($val, $loc_filter)) {
					$excluded[] = $val;
				}
			}
		}
	}
	$args['exclude'] = $excluded;
	$member_filter = array( 'client' );
	$member_type = bp_get_member_type( $current_user_id );
	if($member_type == 'client') {
		 $member_filter = array( 'escort' );	
	}
    $args['member_type__in'] = $member_filter;
	
    return $args;
}

// define the bp_get_total_member_count callback 
function filter_bp_get_total_member_count( $bp_core_get_active_member_count ) {
	$count = 0;
	if ( is_admin() && ! defined( 'DOING_AJAX' ) ) {
		return $bp_core_get_active_member_count;
    }
	if ( bp_has_members('per_page=0') ) {
		while ( bp_members() ) : bp_the_member();
			$count++;
		endwhile;
	}	
	return $count;
}              

add_filter( 'bp_get_total_member_count', 'filter_bp_get_total_member_count', 10, 1 ); 
	

//22.10.2018 Set default member type as soon as user gets activated
/* Where is the difference to register??
function buddydev_set_member_type( $user_id ) {
	
	$member_type = 'client';//change with the unique slug of your member type
	bp_set_member_type( $user_id, $member_type );
	
}
add_action( 'bp_core_activated_user', 'buddydev_set_member_type', 0 );
*/

//22.10.2018 Set default member type as soon as user registers, create default gallery
add_action( 'user_register', 'default_member_type', 10, 1 );
function default_member_type( $user_id ) {
	if ( ! bp_get_member_type($user_id) ) {		
		bp_set_member_type( $user_id, 'client' );
	}
	$gallery = mpp_get_context_gallery( array(
							'component'    => "members",
							'component_id' => $user_id,
							'user_id'      => $user_id,
							'type'         => "photo",
							'context'      => 'activity',
						) );
	
	$default_status = mpp_get_default_status();
	mpp_update_gallery_status( $gallery, $default_status );
	mpp_update_gallery_component( $gallery, "members" );
	mpp_update_gallery_type( $gallery, "photo" );
	
}

//06.07.2021 Disable create gallery in profiles
function filter_mpp_user_can_create_gallery($can_do, $component, $component_id) {
	return is_super_admin();
}

add_filter( 'mpp_user_can_create_gallery', 'filter_mpp_user_can_create_gallery', 10, 3 ); 

function wbcom_theme_alter_members_parse_args( $loop ) {
	if ( bp_is_members_directory() ) {		
		$loop['per_page'] = 50;
	}	
	return $loop;
}
add_filter( 'bp_after_has_members_parse_args', 'wbcom_theme_alter_members_parse_args' );

//04.05.2020 Change menu item name for clients
function filter_the_title($title) {	
	if($title == "Members") {
		$member_type = bp_get_member_type( get_current_user_id() );
		if($member_type == 'client' && !is_admin()) //dont change admin menu
			return "Companions";
	}
	return $title;
}

add_filter( 'the_title', 'filter_the_title', 10, 1 );

add_action( 'wp', function() {
    if ( (bp_is_user_profile() || bp_is_user_activity()) && (bp_loggedin_user_id() != bp_displayed_user_id()) && !is_super_admin()) {  
		$member_type_own = bp_get_member_type( bp_loggedin_user_id() );
		$member_type_display = bp_get_member_type( bp_displayed_user_id() );
		
        if ($member_type_own == $member_type_display || empty($member_type_display)) {
            wp_redirect( home_url() );
            exit;
        }
    }
}, 1 );

/* First name as default display name. */
add_action( 'profile_update', 'set_display_name', 10 );

function set_display_name( $user_id ) {

    $data = get_userdata( $user_id );

    if($data->first_name) {

        remove_action( 'profile_update', 'set_display_name', 10 ); // profile_update is called by wp_update_user, so we need to remove it before call, to avoid infinite recursion
        wp_update_user( 
            array (
                'ID' => $user_id, 
                'display_name' => "$data->first_name"
            ) 
        );
        add_action( 'profile_update', 'set_display_name', 10 );
    }
}

?>