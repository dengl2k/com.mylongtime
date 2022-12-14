
<?php do_action( 'bp_before_directory_members_page' ); ?>

<div id="buddypress">

	<?php do_action( 'bp_before_directory_members' ); ?>

    <div class="filters">
        <div class="row">
            <div class="col-6">
                <div class="item-list-tabs" role="navigation">
                    <ul>
                        <li id="members-order-select" class="filter">
                            <label for="members-order-by"><?php _e( 'Order By:', 'boss' ); ?></label>
                            <select id="members-order-by">
								<?php if ( bp_is_active( 'xprofile' ) ) : ?>
                                    <option value="alphabetical"><?php _e( 'Alphabetical', 'boss' ); ?></option>
                                <?php endif; ?>
                                <option value="active"><?php _e( 'Last Active', 'boss' ); ?></option>
                                <option value="newest"><?php _e( 'Newest Registered', 'boss' ); ?></option>
                                <?php do_action( 'bp_members_directory_order_options' ); ?>
                            </select>							
                        </li>											
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <?php bp_get_template_part( 'common/search/dir-search-form' ); ?>
            </div>
        </div>
    </div>

	<?php do_action( 'bp_before_directory_members_tabs' ); ?>

	<form action="" method="post" id="members-directory-form" class="dir-form">

		<div class="item-list-tabs" role="navigation">
			<ul>
			<?php /*Modification 04.05.2020*/
			$member_type = bp_get_member_type( get_current_user_id() );			
			?>
				<li class="selected" id="members-all"><a href="<?php bp_members_directory_permalink(); ?>"><?php printf( $member_type == 'client'?__( 'All Companions <span>%s</span>', 'boss' ):__( 'All Members <span>%s</span>', 'boss' ), bp_get_total_member_count() ); ?></a></li>

				<?php if ( is_user_logged_in() && bp_is_active( 'friends' ) && bp_get_total_friend_count( bp_loggedin_user_id() ) ) : ?>
					<li id="members-personal"><a href="<?php echo bp_loggedin_user_domain() . bp_get_friends_slug() . '/my-friends/'; ?>"><?php printf( __( 'My Friends <span>%s</span>', 'boss' ), bp_get_total_friend_count( bp_loggedin_user_id() ) ); ?></a></li>
				<?php endif; ?>

				<?php do_action( 'bp_members_directory_member_types' ); ?>

				<?php do_action( 'bp_members_directory_member_sub_types' ); ?>
				
				<li id="members-location-select" class="filter" style="border:0">					
					<select id="members-location">
						<option value="alllocations"><?php _e( 'All', 'boss-child' ); ?></option>
						<option value="bangkok"><?php _e( 'Bangkok', 'boss-child' ); ?></option>
						<option value="hua hin"><?php _e( 'Hua Hin', 'boss-child' ); ?></option>
						<option value="pattaya"><?php _e( 'Pattaya', 'boss-child' ); ?></option>
						<option value="phuket"><?php _e( 'Phuket', 'boss-child' ); ?></option>
						<option value="chiang mai"><?php _e( 'Chiang Mai', 'boss-child' ); ?></option>
						<option value="round trip"><?php _e( 'Round Trip', 'boss-child' ); ?></option>
                    </select>						
               </li>	

			</ul>
		</div><!-- .item-list-tabs -->

        <!-- needed for member list scroll -->
        <div id="subnav"></div>

		<div id="members-dir-list" class="members dir-list">
			<?php bp_get_template_part( 'members/members-loop' ); ?>
		</div><!-- #members-dir-list -->

		<?php do_action( 'bp_directory_members_content' ); ?>

		<?php wp_nonce_field( 'directory_members', '_wpnonce-member-filter' ); ?>

		<?php do_action( 'bp_after_directory_members_content' ); ?>

	</form><!-- #members-directory-form -->

	<?php do_action( 'bp_after_directory_members' ); ?>

</div><!-- #buddypress -->

<?php do_action( 'bp_after_directory_members_page' ); ?>
