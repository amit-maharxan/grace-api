<?php do_action('grace_header'); ?>

<section class="mainGrid">
      <div class="fullWidthOuter banner-sm">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id(156), 'thumbnail' ); ?>
            <img src="<?php echo $url;?>" alt="" class="fullCol"/>
            <div class="absoluteCenter color-light">
                  <h1 class="heading-title-sm margin-reset upper">BLOG</h1>
                  <div class="breadcrumb">
                        <ul class="flexList">
                              <li><a href="<?php echo site_url();?>">Home</a></li>
                              <li>/</li>
                              <li><?php the_title();?></li>
                        </ul>
                  </div>
                  <!-- <div class="squareThingy"></div> -->
            </div>
      </div>
</section>

<section class="mainGrid">
  <div class="content">
    <div class="testimonials-lists blogGrid">
      <?php
      $wp_query = new WP_Query(array(
          'post_type'       => 'post',
          'posts_per_page'  => 12
      ));
    
      while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <div class="testimonialWrapper">
          <a href="<?php the_permalink();?>">
            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="" />
            <div class="blog-details">
              <p class="added-on"><?php echo get_the_date();?></p>
            <h2 class="title"><?php the_title();?></h2>
          </div>
        </a>
        </div>
      <?php endwhile; wp_reset_query();?>
    </div>
  </div>
</section>

<?php do_action('grace_footer'); ?>