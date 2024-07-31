<?php do_action('grace_header'); ?>

<section class="mainGrid">
      <div class="fullWidthOuter banner-sm">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
            <img src="<?php echo $url;?>" alt="" class="fullCol"/>
            <div class="absoluteCenter color-light">
                  <h1 class="heading-title-sm margin-reset upper"><?php the_title();?></h1>
                  <div class="breadcrumb">
                        <ul class="flexList">
                              <li><a href="<?php echo site_url();?>">Home</a></li>
                              <li>/</li>
                              <li>Results</li>
                        </ul>
                  </div>
            </div>
      </div>
</section>

<section class="mainGrid">
  <div class="content">
    <ul
      id="treatmentGrid"
      class="serviceGrid">
      <?php
      $wp_query = new WP_Query(array(
          'post_type'       => 'results', // Fetch regular WordPress posts
          'posts_per_page'  => -1, // Number of posts to display
      ));
      
      // Loop through the WordPress posts
      while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
      <li>
        <div class="imgWrapper">
          <a href="<?php the_permalink();?>">
            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="" />
            <div class="absoluteCenter">
              <img src="<?php the_field('service_icon');?>" alt="" />
              <span><?php the_title();?></span>
            </div>
            <div class="hoverContent">
              <div class="contentWrapper" >
                <div class="absoluteCenter">

                  <h3 class="title w600">Dermal fillers</h3>
                  <p class="desc">Dermal fillers provide a safe and effective method to enhance facial contours and address volume loss due to aging. As we age, our facial volume and structure diminish.</p>
                  <span class="w600">Starting at $750</span>
                  <button class="btn-glass btn-sm btn-pill upper">Book Now</button>
                </div>
              </div>
            </div>
          </a>
        </div>
      </li>
      <?php endwhile; wp_reset_query();?>
    </ul>
  </div>
</section>

<?php do_action('grace_footer'); ?>