<?php
function bp_custom_user_nav_item() {
    global $bp;
	//09.03.19 Remove notifications from menu
	//bp_core_remove_nav_item('notifications');
	
    $args = array(
            'name' => __('Calendar', 'buddypress'),
            'slug' => 'calendar',
            'default_subnav_slug' => 'calendar',
            'position' => 20,
            'screen_function' => 'bp_custom_user_nav_item_screen',
            'show_for_displayed_user' => true,
            'item_css_id' => 'calendar'
    );
    //$loggedin =  bp_loggedin_user_id();
	//$displayed =  bp_displayed_user_id();
	
	//if ( $loggedin == $displayed || is_super_admin()) {		
		
		bp_core_new_nav_item( $args );
	//}
}
add_action( 'bp_setup_nav', 'bp_custom_user_nav_item', 99 );

/**
 * the callback function from our nav item arguments
 */
function bp_custom_user_nav_item_screen() {
    add_action( 'bp_template_content', 'bp_custom_screen_content' );
	//add_action( 'bp_template_title', 'bp_custom_screen_title' );
    bp_core_load_template( apply_filters( 'bp_core_template_plugin', 'members/single/plugins' ) );
}


/**
 * the function hooked to bp_template_content, this hook is in plugins.php
 */
function bp_custom_screen_content() {
    $fully_booked_days = array();    
    $dateArray = array('[2019-06-05][2019-06-13]','[2019-07-15][2019-07-20]');
	$datestr = date("Y-m-d");
	$today = new DateTime($datestr);
	
    foreach ( $dateArray as $array_pair ) {
        if (preg_match("/\[([0-9]{4}-[0-9]{2}-[0-9]{2})\]\[([0-9]{4}-[0-9]{2}-[0-9]{2})\]/", $array_pair, $matches)) {        
            $from_date = new DateTime($matches[1]);
            $end_date = new DateTime($matches[2]);
            $end_date = $end_date->modify( '+1 day' ); 
            $date_interval = new DateInterval('P1D');
            $daterange = new DatePeriod($from_date, $date_interval ,$end_date);
            foreach($daterange as $check_date){
				if($check_date < $today)
					continue;
                $js_date = $check_date->format("Y-n-j");
                $fully_booked_days[$js_date][0] = true;                    
            }
        }
    }
    $unavailability_field = xprofile_get_field_data( "Unavailability" , bp_displayed_user_id());
	$user_id = bp_displayed_user_id();
    $unavailability = str_getcsv($unavailability_field, ";");

    $blocked_days = array();
    foreach ( $unavailability as $array_pair ) {
        if (preg_match("/\[([0-9]{4}-[0-9]{2}-[0-9]{2})\]\[([0-9]{4}-[0-9]{2}-[0-9]{2})\]/", $array_pair, $matches)) {        
            $from_date = new DateTime($matches[1]);
            $end_date = new DateTime($matches[2]);
            $end_date = $end_date->modify( '+1 day' ); 
            $date_interval = new DateInterval('P1D');
            $daterange = new DatePeriod($from_date, $date_interval ,$end_date);
            foreach($daterange as $check_date){
                $js_date = $check_date->format("Y-n-j");
                array_push($blocked_days, $js_date);
            }
        }
    }

    echo '<h3 class="calendar-header">Calendar</h3>';
    echo '<div id="companion-calendar" class="companion-calendar">';
    echo '<fieldset class="companion-date-picker">';
    echo '<legend><span class="label"></legend>';
	echo '<div id="datepicker" class="picker" data-fully-booked-days="' . esc_attr( wp_json_encode( $fully_booked_days ) )  . '" data-user-id="' . esc_attr( wp_json_encode( $user_id ) ) . '" data-modify="' . esc_attr( wp_json_encode( bp_is_my_profile() || is_super_admin()) ) .  '" data-blocked-days="' . esc_attr( wp_json_encode( $blocked_days ) ) .'"></div>';		
    echo '</fieldset>';
    echo '</div>';
	if(is_super_admin() || bp_is_my_profile()) {// only allow admin user on his own profile
		echo '<div><button type="submit" id="btn-update-availability" class="button alt btn btn-success">Update Availability</button></div>';   
	}
}

function bp_custom_screen_title() {    
    echo "Calendar";
}
?>