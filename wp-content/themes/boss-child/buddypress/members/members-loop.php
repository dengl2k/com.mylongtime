<?php

/**
 * BuddyPress - Members Loop
 *
 * Querystring is set via AJAX in _inc/ajax.php - bp_legacy_theme_object_filter()
 *
 * @package Boss
 * @subpackage bp-legacy
 */

?>

<?php do_action( 'bp_before_members_loop' ); ?>

<?php if ( bp_has_members( bp_ajax_querystring( 'members' ) ) ) : ?>

	<div id="pag-top" class="pagination">

		<div class="pag-count" id="member-dir-count-top">

			<?php bp_members_pagination_count(); ?>

		</div>

		<div class="pagination-links" id="member-dir-pag-top">

			<?php bp_members_pagination_links(); ?>

		</div>

	</div>

	<?php do_action( 'bp_before_directory_members_list' ); ?>

	<?php if(!current_user_has_avatar()): ?>
	
	<div style="margin-top:20px;"><h3>To see the beautiful companions and their profiles, please upload a profile picture first</h3></div>
	<a href="<?php echo bp_loggedin_user_domain() ?>profile/change-avatar"><img src="<?php echo bp_core_avatar_default();?>"></a>
	<?php else : ?>
	<ul id="members-list" class="item-list" role="main">

	<?php while ( bp_members() ) : bp_the_member(); ?>

		<li>
			<a href="<?php bp_member_permalink(); ?>">
			<div class="thumbnail">
			<div class="item-avatar">
				<?php bp_member_avatar('type=full'); ?>
			</div>

			<div class="item">
				<div class="item-title">
					<h3><?php bp_member_name(); ?></h3>
					<?php
					$showing = null;
					//if bp-followers activated then show it.
					if(function_exists("bp_follow_add_follow_button")) {
						$showing = "follows";
						$followers  = bp_follow_total_follow_counts(array("user_id"=>bp_displayed_user_id()));
					} elseif (function_exists("bp_add_friend_button")) {
						$showing = "friends";
					}
					?>
				</div>
                
				<?php /*
				<div class="item-meta">
					<div class="activity">
						<?php bp_member_last_active(); ?>
					</div>
					
					<?php if($showing == "friends"): ?>
                    <span class="count"><?php echo friends_get_total_friend_count(bp_get_member_user_id()); ?></span>
                    	<?php if ( friends_get_total_friend_count(bp_get_member_user_id()) > 1 ) { ?>
                    		<span><?php _e("Friends","boss"); ?></span>
                        <?php } else { ?>
                        	<span><?php _e("Friend","boss"); ?></span>
                        <?php } ?>
                    <?php endif; ?>

                    <?php if($showing == "follows"): ?>
                    <span class="count"><?php $followers = bp_follow_total_follow_counts(array("user_id"=>bp_get_member_user_id())); echo $followers["followers"]; ?></span><span><?php _e("Followers","boss"); ?></span>
                    <?php endif; ?>
				</div>
				*/ ?>
				</a>
				<div class="item-desc">
					<p>
						<?php if ( bp_get_member_latest_update() ) : ?>
							<?php bp_member_latest_update( array( 'view_link' => true ) ); ?>
						<?php endif; ?>
					</p>
				</div>				
				<?php do_action( 'bp_directory_members_item' ); ?>
				<?php
				 /***
				  * If you want to show specific profile fields here you can,
				  * but it'll add an extra query for each member in the loop
				  * (only one regardless of the number of fields you show):
				  *
				  * bp_member_profile_data( 'field=the field name' );
				  */
				?>
			</div>
			<?php /*		
			<div class="action">
                <div class="action-wrap">
				    do_action( 'bp_directory_members_actions' ); */?>
					<?php
						$member_id = bp_get_member_user_id();
						$member_type = bp_get_member_type( get_current_user_id() );
						if ( $showing == "friends" && bp_loggedin_user_id() != $member_id && $member_type != 'escort') {
								if ( bp_is_active( 'messages' ) ) {
									//$sendlink = wp_nonce_url( bp_loggedin_user_domain() . bp_get_messages_slug() . '/compose/?r=' . bp_core_get_username( $member_id) );							
									//echo '<div style="text-align:center" id="send-private-message" class="generic-button"><a href="' . $sendlink . '" class="send-message" style="max-width:100%">Send Private message</a></div>';
									//04.02 Commented out and added new for BP Better Messages
									echo '<div class="message-icon"><a href="' . BP_Better_Messages_Hooks::instance()->pm_link() . '">' . __('Send Message', 'bp-better-message') . '</a></div>';
								}
								$is_friend = bp_is_friend( $member_id );		
								if ( $is_friend == 'not_friends' ) {							
									$addlink = wp_nonce_url( bp_loggedin_user_domain() . bp_get_friends_slug() . '/add-friend/' . $member_id . '/', 'friends_add_friend' );
									echo '<div class="friendship-button not_friends addfriend-icon" id="friendship-button-' . $member_id .'"><a href="' . $addlink . '" id="friend-' . $member_id . '" class="friendship-button not_friends add" rel="add" style="max-width:100%">Friend</a></div>';							
								} else if ($is_friend == 'pending' ) {
									$addlink = wp_nonce_url( bp_loggedin_user_domain() . bp_get_friends_slug() . '/requests/cancel/' . $member_id . '/', 'friends_withdraw_friendship' );   
									echo '<div style="text-align:center" class="friendship-button pending_friend generic-button" id="friendship-button-71" style="display: block;"><a href="' . $addlink . '" id="friend-' . $member_id . '" class="remove friendship-button pending_friend requested" rel="remove" style="max-width:100%">Cancel Friendship Request</a></div>';
								}
							}							
					?>
				<?php /*
                </div>
			</div>*/?>		
			<div class="clear"></div>
		</div>		
		</li>

	<?php endwhile; ?>

	</ul>
	<?php endif; ?>
	<?php do_action( 'bp_after_directory_members_list' ); ?>

	<?php bp_member_hidden_fields(); ?>

	<div id="pag-bottom" class="pagination">

		<div class="pag-count" id="member-dir-count-bottom">

			<?php bp_members_pagination_count(); ?>

		</div>

		<div class="pagination-links" id="member-dir-pag-bottom">

			<?php bp_members_pagination_links(); ?>

		</div>

	</div>

<?php else: ?>

	<div id="message" class="info">
		<p><?php _e( "Sorry, no members were found.", 'boss' ); ?></p>
	</div>

<?php endif; ?>

<?php do_action( 'bp_after_members_loop' ); ?>
