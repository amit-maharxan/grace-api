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
                              <li><a href="<?php echo site_url('services');?>">Services</a></li>
                              <li>/</li>
                              <li><?php the_title();?></li>
                        </ul>
                  </div>
            </div>
      </div>
</section>

<?php

function has_child_posts($post_id) {
      $args = array(
            'post_type'      => 'services',
            'post_parent'    => $post_id,
            'posts_per_page' => 1
      );
      $child_query = new WP_Query($args);
      return $child_query->have_posts();
}

$current_post_id = get_the_ID();
if (has_child_posts($current_post_id)) { ?>
<section class="service-details-page-contents mainGrid">
      <div class="service_contents content">
            <div class="contents">
                  <div class="heading-section">
                        <div class="left-details">
                              <h1 class="title titleFancy"><?php the_title();?></h1>
                              <?php $content = get_the_content();
                              if($content){ ?>
                              <div class="description">
                                    <?php the_content();?>
                              </div>
                              <?php } ?>
                        </div>
                  </div>
                  <div class="treatments-section">
                        <h2 class="subTitle treatmentsTitle">Treatments</h2>
                        <?php
                              function get_child_posts($post_id) {
                                    $args = array(
                                          'post_type'      => 'services',
                                          'post_parent'    => $post_id,
                                          'posts_per_page' => -1
                                    );
                                    $child_query = new WP_Query($args);
                                    return $child_query->posts;
                              }

                              $current_post_id = get_the_ID();
                              $child_posts = get_child_posts($current_post_id);
                              
                              if ($child_posts) {
                                    foreach ($child_posts as $child_post) {
                                          echo '<div class="child_post">
                                          <a href="#" class="scroll-to-div" data-slug="'.get_post_field('post_name', $child_post->ID).'">
                                          <h4 class="matchHeight">' . $child_post->post_title . '</h4>';
                                          $starting_from = get_field('starting_from', $child_post->ID);
                                          if($starting_from){
                                                echo '<p class="starting_from">Starting from <b>' . get_field('starting_from', $child_post->ID) . '</b></p>';
                                          }
                                          echo '</a>
                                          </div>';
                                    }
                              }
                        ?>
                  </div>
            </div>
            <div class="relative">
                  <div class="polka pattern" data-insetInline="10% 50%" data-inset-block="10% 10%"></div>
            </div>
      </div>
</section>

<?php

$current_post_id = get_the_ID();
$child_posts = get_child_posts($current_post_id);

if ($child_posts) {
foreach ($child_posts as $child_post) {
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $child_post->ID ), 'large' ); ?>

<section class="service-details-page-contents mainGrid" id="<?php echo get_post_field('post_name', $child_post->ID);?>">
      <div class="service_contents content">
            <div class="image">
                  <img src="<?php echo $image[0];?>" alt="" class=""/>
            </div>
            <div class="contents">
                  <div class="heading-section">
                        <div class="left-details">
                              <h1 class="title titleFancy"><?php echo $child_post->post_title;?></h1>
                              
                              <?php $starting_from = get_field('starting_from', $child_post->ID);
                              if($starting_from){ ?>
                              <span class="starting_from time">
                                    <svg fill="#000000" width="18px" height="19px" viewBox="0 0 18 19" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M12.32 8a3 3 0 0 0-2-.7H5.63A1.59 1.59 0 0 1 4 5.69a2 2 0 0 1 0-.25 1.59 1.59 0 0 1 1.63-1.33h4.62a1.59 1.59 0 0 1 1.57 1.33h1.5a3.08 3.08 0 0 0-3.07-2.83H8.67V.31H7.42v2.3H5.63a3.08 3.08 0 0 0-3.07 2.83 2.09 2.09 0 0 0 0 .25 3.07 3.07 0 0 0 3.07 3.07h4.74A1.59 1.59 0 0 1 12 10.35a1.86 1.86 0 0 1 0 .34 1.59 1.59 0 0 1-1.55 1.24h-4.7a1.59 1.59 0 0 1-1.55-1.24H2.69a3.08 3.08 0 0 0 3.06 2.73h1.67v2.27h1.25v-2.27h1.7a3.08 3.08 0 0 0 3.06-2.73v-.34A3.06 3.06 0 0 0 12.32 8z"></path></g></svg>
                                    <span>Starting from <b><?php echo get_field('starting_from', $child_post->ID);?></b></span>
                              </span>
                              <?php } $treatment_time = get_field('treatment_time', $child_post->ID);
                              if($treatment_time){ ?>
                              <span class="time">
                                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M9.00024 16.9998C13.1424 16.9998 16.5002 13.6419 16.5002 9.49976C16.5002 5.35762 13.1424 1.99976 9.00024 1.99976C4.85811 1.99976 1.50024 5.35762 1.50024 9.49976C1.50024 13.6419 4.85811 16.9998 9.00024 16.9998Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M9.00049 5V9.5L12.0005 11" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Treatment Time: <?php the_field('treatment_time', $child_post->ID);?></span>
                              </span>
                              <?php } ?>
                        </div>
                  </div>

                  <?php $price_per_session = get_field('price_per_session', $child_post->ID);
                  if($price_per_session){ ?>
                  <div class="price_per_session">
                        <b>Price</b>
                        <?php if( have_rows('price_per_session', $child_post->ID) ):
                        while( have_rows('price_per_session', $child_post->ID) ) : the_row(); ?>
                        <?php the_sub_field('price_text', $child_post->ID);?><br>
                        <?php endwhile;?>
                        <?php endif;?>
                  </div>
                  <?php } ?>

                  <?php $content = $child_post->post_content;
                  if($content){ ?>
                  <div class="description">
                        <?php echo $content;?>
                  </div>
                  <?php } ?>

                  <?php $service_book_now_url = get_field('service_book_now_url', $child_post->ID);
                  if($service_book_now_url){ ?>
                  <div class="bottom-btn">
                        <a href="<?php echo $service_book_now_url;?>" class="btn-sm btn-dark btn-pill w600 upper" target="_blank">BOOK NOW</a>
                  </div>
                  <?php } ?>
            </div>
      </div>
</section>
<?php } } ?>

<?php } else { ?>
<section class="service-details-page-contents mainGrid">
      <div class="service_contents content">
            <div class="image">
                  <img src="<?php echo $url;?>" alt="" class=""/>
            </div>
            <div class="contents">
                  <div class="heading-section">
                        <div class="left-details">
                              <h1 class="title titleFancy"><?php the_title();?></h1>
                              <?php $starting_from = get_field('starting_from');
                              if($starting_from){ ?>
                              <span class="starting_from time">
                                    <svg fill="#000000" width="18px" height="19px" viewBox="0 0 18 19" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M12.32 8a3 3 0 0 0-2-.7H5.63A1.59 1.59 0 0 1 4 5.69a2 2 0 0 1 0-.25 1.59 1.59 0 0 1 1.63-1.33h4.62a1.59 1.59 0 0 1 1.57 1.33h1.5a3.08 3.08 0 0 0-3.07-2.83H8.67V.31H7.42v2.3H5.63a3.08 3.08 0 0 0-3.07 2.83 2.09 2.09 0 0 0 0 .25 3.07 3.07 0 0 0 3.07 3.07h4.74A1.59 1.59 0 0 1 12 10.35a1.86 1.86 0 0 1 0 .34 1.59 1.59 0 0 1-1.55 1.24h-4.7a1.59 1.59 0 0 1-1.55-1.24H2.69a3.08 3.08 0 0 0 3.06 2.73h1.67v2.27h1.25v-2.27h1.7a3.08 3.08 0 0 0 3.06-2.73v-.34A3.06 3.06 0 0 0 12.32 8z"></path></g></svg>
                                    <span>Starting from <b><?php echo get_field('starting_from');?></b></span>
                              </span>
                              <?php } $treatment_time = get_field('treatment_time');
                              if($treatment_time){ ?>
                              <span class="time">
                                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M9.00024 16.9998C13.1424 16.9998 16.5002 13.6419 16.5002 9.49976C16.5002 5.35762 13.1424 1.99976 9.00024 1.99976C4.85811 1.99976 1.50024 5.35762 1.50024 9.49976C1.50024 13.6419 4.85811 16.9998 9.00024 16.9998Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M9.00049 5V9.5L12.0005 11" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Treatment Time: <?php the_field('treatment_time');?></span>
                              </span>
                              <?php } ?>
                        </div>
                  </div>

                  <?php $price_per_session = get_field('price_per_session');
                  if($price_per_session){ ?>
                  <div class="price_per_session">
                        <b>PRICE:</b>
                        <?php if( have_rows('price_per_session') ):
                        while( have_rows('price_per_session') ) : the_row(); ?>
                        <?php the_sub_field('price_text');?><br>
                        <?php endwhile;?>
                        <?php endif;?>
                  </div>
                  <?php } ?>

                  <?php $content = get_the_content();
                  if($content){ ?>
                  <div class="description">
                        <?php the_content();?>
                  </div>
                  <?php } ?>
                  
                  <?php $service_book_now_url = get_field('service_book_now_url');
                  if($service_book_now_url){ ?>
                  <div class="bottom-btn">
                        <a href="<?php echo $service_book_now_url;?>" class="btn-sm btn-dark btn-pill w600 upper" target="_blank">BOOK NOW</a>
                  </div>
                  <?php } ?>
            </div>
      </div>
</section>
<?php } ?>

<?php if( have_rows('perks_lists') ): ?>
<section class="service-details-perks-contents mainGrid">
      <div class="content">
                  <h3 class="w500"><?php the_field('perks_title');?></h3>
                  <ul>
                  <?php if( have_rows('perks_lists') ):
                  while( have_rows('perks_lists') ) : the_row(); ?>
                  <li><?php the_sub_field('perks_text');?></li>
                  <?php endwhile; endif; ?>
            </ul>
      </div>
</section>
<?php endif; ?>

<?php if( have_rows('qas') ): ?>
<section class="service-details-faq-contents mainGrid">
      <div class="content">
            <h2 class="faq_title w600 ">FAQ</h3>
            <ul>
            <?php if( have_rows('qas') ):
            while( have_rows('qas') ) : the_row(); ?>
                  <div class="faq">
                        <div class="question" onclick="toggleOpen(event)">
                              <div><?php the_sub_field('question');?></div>
                              <div><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 5.5V19.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5 12.5H19" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                              </div>
                        </div>
                        <div class="accordionContent">
                              <div class="answer"><?php the_sub_field('answer');?></div>
                        </div>
                  </div>
            <?php endwhile; endif; ?>
            </ul>
      </div>
</section>
<?php endif; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js" integrity="sha512-/bOVV1DV1AQXcypckRwsR9ThoCj7FqTV2/0Bm79bL3YSyLkVideFLE3MIZkq1u5t28ke1c0n31WYCOrO01dsUg==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
<script defer>
jQuery( document ).ready( function( $ ) {

// matchHeight
$(function() {
    $('.matchHeight').matchHeight({
        property: 'min-height'
    });
});

$('.scroll-to-div').click(function(e) {
    e.preventDefault();
    var slug = $(this).attr('data-slug');
    $('html, body').animate({
        scrollTop: $("#"+slug).offset().top - 150
    }, 500);
});

});
</script>


<script defer>
      function toggleOpen(e){
            const clickedQuestion = e.currentTarget;
            const faqs = document.querySelectorAll('.question');

            faqs.forEach(question => {
                  if (question !== clickedQuestion) {
                        question.removeAttribute('data-open');
                  }
            });
            clickedQuestion.toggleAttribute('data-open');
      }
</script>

<?php do_action('grace_footer'); ?>