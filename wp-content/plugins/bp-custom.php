<?php
require 'includes/buddypress_membertypes.php';
require 'includes/profile_calendar.php';
require 'includes/profile_functions.php';
require 'includes/buddypress_friends.php';

//04.05.2020 Media Press gives index warning when setings are saved, moved to buddypress_api
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

if ( ! defined( 'P_AVATAR_DEFAULT' ) )	
	define( 'BP_AVATAR_ORIGINAL_MAX_FILESIZE', 10485760);

function bpcodex_change_notifications_nav_position() {
    buddypress()->members->nav->edit_nav( array(
        'position' => 999,
    ), 'notifications' );
	if ( bp_is_user() && !is_super_admin() && !bp_is_my_profile() ) {
		bp_core_remove_nav_item( 'friends' );
	}
}
add_action( 'bp_setup_nav', 'bpcodex_change_notifications_nav_position', 100 );

function bpdev_set_email_notifications_preference( $user_id, $key, $user ) {
	if(bp_get_member_type($user_id) == "escort") {
		return;
	}
    // I am putting all the notifications to no by default
    // you can set the value to 'yes' if you want that notification to be enabled.
    $settings_keys = array(      
        'notification_messages_new_message'        => 'no'
    ); 
    foreach ( $settings_keys as $setting => $preference ) {
	
        bp_update_user_meta( $user_id, $setting, $preference );
    } 
}
//hook is not called, need to be checked, change to 'user_register' like in ionifier?
//add_action( 'bp_core_activated_user', 'bpdev_set_email_notifications_preference', 10, 3 );

add_filter(
    'jwt_auth_expire',
    function ( $expire, $issued_at ) {
        return $issued_at + ( DAY_IN_SECONDS * 365*100 );
    },
    10,
    2
);

add_filter( 'jwt_auth_whitelist', function ( $endpoints ) {
    return array(
		'/wp-json/jetpack/v4/*',
        '/wp-json/controller/v1/*',
		'/wp-json/controller/v2/test',
		'/wp-json/controller/v2/send_push/*',
		'/wp-json/controller/v2/line/*'			
	);});	
?>