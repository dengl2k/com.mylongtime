<?php

add_action( 'admin_init', 'filter_prevent_admin_access');

//02.02.2021 Admin Bar ist im boss Theme per generell per css versteckt
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	  show_admin_bar(false);
	}
}

function filter_prevent_admin_access() {
	if ( is_user_logged_in() ) {
        if ( !defined( 'DOING_AJAX' ) && !current_user_can('administrator') ){
            wp_safe_redirect( bp_loggedin_user_domain() );
			exit;
        }
    }
}
	// Function to change email address
function wpb_sender_email( $original_email_address ) {
    return 'admin@thailongtime.com';
}
 
// Function to change sender name
function wpb_sender_name( $original_email_from ) {
    return 'ThaiLongtime';
}
 
// Hooking up our functions to WordPress filters 
add_filter( 'wp_mail_from', 'wpb_sender_email' );
add_filter( 'wp_mail_from_name', 'wpb_sender_name' );