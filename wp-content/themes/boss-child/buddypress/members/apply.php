<?php

/**
 * BuddyPress - Members Directory
 *
 * @package BuddyPress
 * @subpackage bp-default
 */

get_header( 'buddypress' ); ?>


<div class="dir-page-entry">
    <div class="inner-padding">
        <header class="members-header page-header">
            <h1 class="entry-title main-title">Apply to add friends and send messsages</h1>
        </header>
        <!-- .page-header -->
        <div class="entry-content"></div>
    </div>
</div>
<!-- if widgets are loaded for any BuddyPress component, display the BuddyPress sidebar -->
<div class="page-full-width">
    <!-- BuddyPress template content -->
    <div id="primary" class="site-content">
        <div id="content" role="main">
            <article>
                <div class="entry-buddypress-content">
                    <div id="buddypress"></div>
                </div>
            </article>
        </div>
    </div>
</div>

		

<?php get_sidebar( 'buddypress' ); ?>
<?php get_footer( 'buddypress' ); ?>
