<?php


ignore_user_abort(true);


if ( !defined('ABSPATH') ) {
	/** Set up WordPress environment */
	require_once( dirname( __FILE__ ) . '/../wp-load.php' );
}
var_dump(ABSPATH);