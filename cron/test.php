<?php


ignore_user_abort(true);


if ( !defined('ABSPATH') ) {
	/** Set up WordPress environment */
	require_once( dirname( __FILE__ ) . '/../wp-load.php' );
}
$value = constant( 'BP_AVATAR_ORIGINAL_MAX_FILESIZE' ); 
echo $value;