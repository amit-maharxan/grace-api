<section class="mainGrid">
  <div class="content">
    <h1 class="heading-title">
      <?php the_field('story_title');?>
    </h1>
    <ul
      id="treatmentGrid"
      class="treatmentGrid">
      <?php
      $featured_posts = get_field('story_select_treatments');
      if( $featured_posts ):
      foreach( $featured_posts as $featured_post ): 
      $permalink = get_permalink( $featured_post );
      $title = get_the_title( $featured_post );
      $service_icon = get_field( 'service_icon', $featured_post ); ?>
      <li>
        <a href="<?php echo $permalink;?>">
          <div class="imgWrapper">
            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($featured_post) );?>" alt="" />
            <div class="absoluteCenter">
              <img src="<?php echo $service_icon;?>" alt="" />
              <span><?php echo $title;?></span>

              <div class="show_on_mobile">
                <?php $starting_from = get_field('starting_from', $featured_post);
                if($starting_from){ ?>
                <span class="w600">Starting at <?php the_field('starting_from', $featured_post);?></span>
                <?php } ?> <br>
                <button class="btn-glass btn-sm btn-pill upper">Book Now</button>
              </div>
              <!-- <div class="show_on_desktop">
                <?php $starting_from = get_field('starting_from', $featured_post);
                if($starting_from){ ?>
                <span class="w600">Starting at <?php the_field('starting_from', $featured_post);?></span>
                <?php } ?> <br>
                <button class="btn-glass btn-sm btn-pill upper">Book Now</button>
              </div> -->
            </div>
          </div>
        </a>
      </li>
      <?php endforeach; endif; ?>
    </ul>
    <a href="<?php the_field('story_button_url');?>"
      class="btn-md btn-logo btn-pill floatRight"
      onclick="toggleViewClicked('treatmentGrid')">
      <?php the_field('story_button_text');?>
    </a>
  </div>
</section>