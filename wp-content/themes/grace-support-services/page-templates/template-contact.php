<?php
/**
 * Template Name: Contact Layout
 */

do_action('grace_header'); ?>

	<?php 
        /**
         * grace_contact_content hook
         *
         */
        do_action( 'grace_contact_content' );
    ?>
    
<?php do_action('grace_footer'); ?>