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
                              <li>Services</li>
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
          'post_type'       => 'services',
          'posts_per_page'  => -1,
          'orderby'         => 'menu_order',
          'order'           => 'DESC'
      ));
      
      while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
      <li>
        <div class="imgWrapper">
          <a href="<?php the_permalink();?>">
            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="" />
            <div class="absoluteCenter">
              <img src="<?php the_field('service_icon');?>" alt="" />
              <span><?php the_title();?></span>
              <div class="show_on_mobile">
                  <br> <br>
                    <?php $starting_from = get_field('starting_from', $post->ID);
                    if($starting_from){ ?>
                    <span class="w600">Starting at <?php the_field('starting_from', $post->ID);?></span>
                    <?php } ?> <br>
                    <button class="btn-glass btn-sm btn-pill upper">Book Now</button>
                  </div>
            </div>
            <div class="hoverContent">
              <div class="contentWrapper" >
                <div class="absoluteCenter">

                  <h3 class="title w600"><?php the_title();?></h3>
                  <p class="desc">
                    <?php $content = get_the_content();
                    echo substr($content, 0, 120); ?>
                  </p>

                  <div class="show_on_desktop">
                    <?php $starting_from = get_field('starting_from', $post->ID);
                    if($starting_from){ ?>
                    <span class="w600">Starting at <?php the_field('starting_from', $post->ID);?></span>
                    <?php } ?> <br>
                    <button class="btn-glass btn-sm btn-pill upper">Book Now</button>
                  </div>
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