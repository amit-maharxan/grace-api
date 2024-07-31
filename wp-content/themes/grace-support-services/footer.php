<?php
/**
 * Footer Template
 *
 * @package GRACE
 */
?>

<?php if(!is_front_page()){
      get_template_part( 'template-parts/pages/homepage/page', 'appointment' );
} ?>
</main>

<?php

/**
 * grace_footer_content hook
 *
 * @hooked grace_output_footer_content()
 *
 */
do_action( 'grace_footer_content' );

wp_footer(); ?>

</body>
</html>