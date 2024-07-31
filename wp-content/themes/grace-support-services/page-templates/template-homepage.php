<?php
/**
 * Template Name: Homepage Layout
 */

do_action('grace_header'); ?>

	<?php 
        /**
         * grace_homepage_content hook
         *
         */
        do_action( 'grace_homepage_content' );
    ?>

<?php do_action('grace_footer'); ?>