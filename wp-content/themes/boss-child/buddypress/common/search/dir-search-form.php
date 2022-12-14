<?php
/**
 * Output the search form markup.
 *
 * @since 2.7.0
 */
?>

<div id="<?php echo esc_attr( bp_current_component() ); ?>-dir-search" class="dir-search" role="search">
	<form action="" method="get" id="search-<?php echo esc_attr( bp_current_component() ); ?>-form">
		<label for="<?php bp_search_input_name(); ?>">
		<?php /*Modification 04.05.2020*/
		$member_type = bp_get_member_type( get_current_user_id() );			
		?>
			<input type="text" name="<?php echo esc_attr( bp_core_get_component_search_query_arg() ); ?>" id="<?php bp_search_input_name(); ?>" placeholder="<?php echo $member_type == 'client'?'Filter for Companion or Bangkok, Phuket...':esc_attr( bp_get_search_placeholder() ); ; ?>" />
		</label>

		<input type="submit" id="<?php echo esc_attr( bp_get_search_input_name() ); ?>_submit" name="<?php bp_search_input_name(); ?>_submit" value="<?php esc_attr_e( 'Search', 'buddypress' ); ?>" />
	</form>
</div><!-- #<?php echo esc_attr( bp_current_component() ); ?>-dir-search -->

