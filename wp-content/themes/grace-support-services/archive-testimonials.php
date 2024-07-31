<?php do_action('grace_header'); ?>


<section class="mainGrid">
      <div class="fullWidthOuter banner-sm">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id(156), 'thumbnail' ); ?>
            <img src="<?php echo $url;?>" alt="" class="fullCol"/>
            <div class="absoluteCenter color-light">
                  <h1 class="heading-title-sm margin-reset upper">Home</h1>
                  <div class="breadcrumb">
                        <ul class="flexList">
                              <li><a href="<?php echo site_url();?>">Homepage</a></li>
                              <li>/</li>
                              <li>Testimonials</li>
                        </ul>
                  </div>
            </div>
      </div>
</section>

<section class="mainGrid">
  <div class="content">
    <div class="testimonials-lists testimonialSectionGrid">
      <?php
      $wp_query = new WP_Query(array(
          'post_type'       => 'testimonials', // Fetch regular WordPress posts
          'posts_per_page'  => 12, // Number of posts to display
      ));
    
      // Loop through the WordPress posts
      while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <div class="testimonialWrapper">
            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="" />
            <!-- <img src="http://localhost/grace/wp-content/uploads/2024/04/FacialFillersImg.png" alt="" /> -->
            <div class="right-testimonial-contents">
              <p><?php the_content();?></p>
              <span class="bold"><?php the_title();?></span>
            </div>
        </div>
      <?php endwhile; wp_reset_query();?>
    </div>
  </div>
</section>

<?php do_action('grace_footer'); ?>