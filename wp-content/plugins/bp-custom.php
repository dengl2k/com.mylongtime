<?php
require 'includes/buddypress_api.php';
require 'includes/buddypress_membertypes.php';
require 'includes/profile_calendar.php';
require 'includes/profile_age.php';
require 'includes/buddypress_friends.php';

//04.05.2020 Media Press gives index warnig when setings are saved
//error_reporting(E_ALL ^  E_NOTICE); 

/*
 * Paste in your theme functions.php or in bp-custom.php.
 * Load the site in a browser
 * Remove from your theme functions.php or bp-custom.php.
*/

function kleo_page_template_redirect()
{
    //if not logged in and on a bp page except registration or activation
    if( ! is_user_logged_in() && ! bp_is_blog_page() && ! bp_is_activation_page() && ! bp_is_register_page() ) 
    {
        wp_redirect( home_url( '/login/' ) );
        exit();
    }
}
add_action( 'template_redirect', 'kleo_page_template_redirect' );

//To Test if user is already logged in, dont show login page
function redirect_login_page() {

    if( is_page( 'login' ) && is_user_logged_in() ) {
        wp_redirect( home_url() );
        exit;
    }
}
add_action( 'template_redirect', 'redirect_login_page' );

function buddypress_add_last_activity() {

  $members =  get_users( 'fields=ID' );
  // $members =  get_users( 'fields=ID&role=subscriber' );
  
  foreach ( $members as $user_id ) {
        bp_update_user_last_activity( $user_id, bp_core_current_time() );
  }

}
//add_action('bp_init', 'buddypress_add_last_activity' );


//03.03.2018 Dont Show Export User Data
add_filter( 'bp_settings_show_user_data_page', '__return_false' );

//03.03.2018 Remove Profile Visibilty
function bpfr_hide_visibility_tab() {	
	if( bp_is_active( 'xprofile' ) )			
		bp_core_remove_subnav_item( 'settings', 'profile' );
}
add_action( 'bp_ready', 'bpfr_hide_visibility_tab' );

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
//To test
function peter_xprofile_data_after_save( $data ) {

    if ( $data->field_id == 5 ) {

        update_user_meta( $data->user_id, 'field_5', 'changed');

    }
}
//add_action( 'xprofile_data_after_save', 'peter_xprofile_data_after_save' );
//To test
function razman_user_id_display() 
{
	if ( bp_is_user() ) {
		$user_id = bp_displayed_user_id();	
	} else {
		$user_id = bp_get_member_user_id();
	}
		
	echo '<div class="myuser-id">My user ID: '. $user_id .'</div>';
	
}
//add_action( 'bp_before_member_header_meta', 'razman_user_id_display' );
//add_action( 'bp_directory_members_item', 'razman_user_id_display' );

add_filter( 'bp_core_fetch_avatar_no_grav', '__return_true' );

if ( ! defined( 'BP_AVATAR_THUMB_WIDTH' ) )
    define( 'BP_AVATAR_THUMB_WIDTH', 50 ); //change this with your desired thumb width
 
if ( ! defined( 'BP_AVATAR_THUMB_HEIGHT' ) )
    define( 'BP_AVATAR_THUMB_HEIGHT', 50 ); //change this with your desired thumb height
 
if ( ! defined( 'BP_AVATAR_FULL_WIDTH' ) )
    define( 'BP_AVATAR_FULL_WIDTH', 203 ); //change this with your desired full size,weel I changed it to 260 :)
 
if ( ! defined( 'BP_AVATAR_FULL_HEIGHT' ) )
    define( 'BP_AVATAR_FULL_HEIGHT', 165 ); //change this to default height for full avatar
if ( ! defined( 'P_AVATAR_DEFAULT' ) )
	define ( 'BP_AVATAR_DEFAULT', get_stylesheet_directory_uri() . '/images/gravatar.png' );

function bpcodex_change_notifications_nav_position() {
    buddypress()->members->nav->edit_nav( array(
        'position' => 999,
    ), 'notifications' );
}
add_action( 'bp_setup_nav', 'bpcodex_change_notifications_nav_position', 100 );
?>