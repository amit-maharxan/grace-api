<?php do_action('grace_header'); ?>

<section class="blog-section mainGrid">
      <div class="container breakout">
        <div class="row">
          <div class="align-items-center justify-content-between">
            <div id="blog-image" class="blog-image">
              <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
              <img src="<?php echo $url;?>" alt="image">
            </div>
            <div class="blog-details">
              <h2 class="titleFancy"><?php the_title();?></h2>
              <p class="added-on">Added on: <?php echo get_the_date();?></p>
              <br><br>
              <p class="desc"><?php the_content();?></p>
            </div>
          </div>
          <div class="align-items-center justify-content-between">
            <h2 class="title">Recent Blog</h2>
            <div class="blog-lists">
            <ul
              id="blogGrid"
              class="sideBlogGrid">
              <?php
              $wp_query = new WP_Query(array(
                  'post_type'       => 'post', // Fetch regular WordPress posts
                  'posts_per_page'  => 5, // Number of posts to display
                  'post__not_in' => array( $post->ID )
              ));
              
              // Loop through the WordPress posts
              while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
              <li>
                <div class="blogWrapper">
                  <a href="<?php the_permalink();?>">
                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="" />
                    <div class="headerCenter">
                      <!-- <img src="<?php the_field('service_icon');?>" alt="" /> -->
                      <span class="blog-title"><?php the_title();?></span>
                      <span class="blog-date">Added On: <?php echo get_the_date();?></span>
                    </div>
                    <div class="blog-desc">
                      <p class="short-desc">
                        <?php $content = get_the_content() ; 
                        echo wp_trim_words($content, 20, '...'); ?>
                      </p>
                    </div>
                  </a>
                </div>
              </li>
              <?php endwhile; wp_reset_query();?>
            </div>
          </div>
        </div>
      </div>
</section>

<?php do_action('grace_footer'); ?>