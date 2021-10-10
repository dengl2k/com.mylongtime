<?php

/**
 * Country xprofile field type.
 *
 * @since 1.0
 */
class BP_XProfile_Field_Type_Country extends BP_XProfile_Field_Type_Selectbox {

	//we store list of countries as array
	private static $countries = array();

	/**
	 * Constructor for the Country field type
	 *
	 * @since 1.0
	 */
	public function __construct() {
		parent::__construct();

		 $this->category = __( 'Multi Fields', 'buddyboss' );
		 $this->name     = __( 'Country Drop Down', 'buddyboss' );
		 $terms = get_terms( array( 'taxonomy' => 'locations', 'parent' => 0, 'hide_empty' => false ) );
		 self::$countries = array_map(function($term){ return $term->name; }, $terms);
		 do_action( 'bp_xprofile_field_type_country', $this );
	}
	public function get_options() {
		return self::$countries;
	}
	public function is_valid( $val ) {

		if ( $val && is_array( $val ) ) {
			$val = array_filter( $val );
		}

		if ( empty( $val ) ) {
			return true;
		}

		$country_codes = self::$countries;		

		$val = (array) $val; //typecast to array

		if ( $val && ! array_diff( $val, $country_codes ) ) {
			return true;
		}

		//if no country value specified, it is fine with us
		if ( empty( $val ) ) {
			return true;
		}

		return false;
	}

	public function edit_field_options_html( array $args = array() ) {

		$original_option_values = maybe_unserialize( BP_XProfile_ProfileData::get_value_byid( $this->field_obj->id, $args['user_id'] ) );

		if ( ! empty( $_POST['field_' . $this->field_obj->id] ) ) {

			$option_values = (array) $_POST['field_' . $this->field_obj->id];
			$option_values = array_map( 'sanitize_text_field', $option_values );
		} else {
			$option_values = (array) $original_option_values;
		}
		$selected = '';
		
		$html = '<option value="" ' . $selected . ' >----' . /* translators: no option picked in select box */ '</option>';

		echo $html;
		
		foreach ( self::$countries as $country) {		

			$selected = '';

			// Run the allowed option name through the before_save filter, so we'll be sure to get a match
			$allowed_options = xprofile_sanitize_data_value_before_save( $country, false, false );

			// First, check to see whether the user-entered value matches
			if ( in_array( $allowed_options, (array) $option_values ) ) {
				$selected = ' selected="selected"';
			}
			if ( ! is_array( $original_option_values ) && empty( $option_values ) && $country == "Thailand") {
				$selected = ' selected="selected"';
			}
			echo apply_filters( 'bp_get_the_profile_field_options_country', '<option' . $selected . ' value="' . esc_attr( stripslashes( $country ) ) . '">' . $country . '</option>', $country, $this->field_obj->id, $selected );
		}
	}
}