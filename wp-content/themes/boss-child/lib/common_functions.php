<?php

add_action( 'admin_init', 'filter_prevent_admin_access');
 
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