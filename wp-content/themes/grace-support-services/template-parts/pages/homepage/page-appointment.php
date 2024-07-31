<section class="mainGrid">
  <div class="fullWidthOuter banner booking">
    <div class="fullCol relative" style='--bg-url:url("<?php the_field('app_image', 2);?>")'></div>
    <div class="absoluteCenter">
      <span><?php the_field('app_title', 2);?></span>
      <span><?php the_field('app_phone_number', 2);?></span>
      <span><?php the_field('app_text', 2);?></span>
      <div class="p2r">
        <a href="<?php the_field('app_button_url', 2);?>" class="btn-md btn-dark btn-pill">
          <?php the_field('app_button_text', 2);?>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="mainGrid relative">
  <div class="content instagram ">
    <div class="instagram_feeds">
    <?php 
    $images = get_field('instagram_gallery', 2);
    if( $images ): ?>
    <div id="instagram_slider">
      <a href="<?php the_field('instagram_url', 2) ?>" target="_blank">
        <ul class="slides">
          <?php foreach( $images as $image ): ?>
            <li>
                <img src="<?php echo $image; ?>" alt="" />
            </li>
          <?php endforeach; ?>
        </ul>
      </a>
      </div>
    <?php endif; ?>
    </div>
    <div class="instagram_description">
      <span style="color: #e02b40"> 
        <img draggable="false" role="img" class="emoji" alt="❤" src="https://s.w.org/images/core/emoji/15.0.3/svg/2764.svg">
      </span>
      <h3 class="heading-title margin-reset"><span class="w300">Follow</span> <br>
      <span class="w600"><a href="https://www.instagram.com/grace.aesthetics/" target="_blank">#GraceAesthetics</a></span></h3>
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="100" width="199" viewBox="0 0 58 58"><defs><linearGradient id="a" y2="1.7526" x2="1.7537" y1="-5.8041" x1="-5.8093"><stop offset="0%" stop-color="#FFD521"/><stop offset="5%" stop-color="#FFD521"/><stop offset="50.1119%" stop-color="#F50000"/><stop offset="95%" stop-color="#B900B4"/><stop offset="95.0079%" stop-color="#B900B4"/><stop offset="100%" stop-color="#B900B4"/></linearGradient><linearGradient id="b" y2=".9175" x2=".9175" y1=".0091" x1=".009"><stop offset="0%" stop-color="#FFD521"/><stop offset="5%" stop-color="#FFD521"/><stop offset="50.1119%" stop-color="#F50000"/><stop offset="95%" stop-color="#B900B4"/><stop offset="95.0079%" stop-color="#B900B4"/><stop offset="100%" stop-color="#B900B4"/></linearGradient><linearGradient id="c" y2="1.3128" x2="1.3126" y1="-.456" x1="-.4558"><stop offset="0%" stop-color="#FFD521"/><stop offset="5%" stop-color="#FFD521"/><stop offset="50.1119%" stop-color="#F50000"/><stop offset="95%" stop-color="#B900B4"/><stop offset="95.0079%" stop-color="#B900B4"/><stop offset="100%" stop-color="#B900B4"/></linearGradient><linearGradient gradientUnits="userSpaceOnUse" gradientTransform="scale(1.00041 .99959)" y2="11.412" x2="11.3667" y1="-37.5455" x1="-37.6312" id="d" xlink:href="#a"/><linearGradient gradientUnits="userSpaceOnUse" y2="49.554" x2="49.5047" y1=".536" x1=".4867" id="e" xlink:href="#b"/><linearGradient gradientUnits="userSpaceOnUse" gradientTransform="scale(.99988 1.00012)" y2="36.4816" x2="36.4315" y1="-12.5305" x1="-12.5688" id="f" xlink:href="#c"/></defs><g fill="none"><path d="M6.4867 3.292c0 1.7933-1.4534 3.2413-3.24 3.2413C1.46 6.5333.0053 5.0853.0053 3.292.0053 1.5053 1.46.0573 3.2467.0573c1.7866 0 3.24 1.448 3.24 3.2347" fill="url(#d)" transform="matrix(1 0 0 -1 38.1333 15.8707)"/><path d="M48.9373 16.124c-.12-2.6307-.56-4.06-.9253-5.0093-.4907-1.2587-1.076-2.1587-2.0253-3.1027-.9387-.944-1.8387-1.528-3.0974-2.0133-.9493-.3707-2.384-.812-5.0146-.9374-2.844-.1253-3.6867-.152-10.8987-.152-7.2053 0-8.0547.0267-10.8987.152-2.6306.1254-4.0586.5667-5.008.9374C9.804 6.484 8.9107 7.068 7.9667 8.012c-.9507.944-1.536 1.844-2.02 3.1027-.3654.9493-.812 2.3786-.9254 5.0093-.1386 2.844-.164 3.7-.164 10.8973 0 7.212.0254 8.0614.164 10.9054.1134 2.6306.56 4.0586.9254 5.016.484 1.2573 1.0693 2.152 2.02 3.096.944.9426 1.8373 1.528 3.1026 2.0186.9494.372 2.3774.8067 5.008.932 2.844.1254 3.6934.1574 10.8987.1574 7.212 0 8.0547-.032 10.8987-.1574 2.6306-.1253 4.0653-.56 5.0146-.932 1.2587-.4906 2.1587-1.076 3.0974-2.0186.9493-.944 1.5346-1.8387 2.0253-3.096.3653-.9574.8053-2.3854.9253-5.016.132-2.844.164-3.6934.164-10.9054 0-7.1973-.032-8.0533-.164-10.8973zm4.8574 22.024c-.132 2.8747-.5854 4.8387-1.2587 6.5493-.6853 1.7747-1.604 3.2787-3.108 4.7827-1.4973 1.4973-3.0013 2.416-4.776 3.1093-1.7173.6667-3.6747 1.1254-6.5507 1.2507-2.876.1387-3.7946.164-11.1253.164-7.324 0-8.2493-.0253-11.1253-.164-2.8694-.1253-4.8254-.584-6.5507-1.2507-1.768-.6933-3.272-1.612-4.7693-3.1093-1.504-1.504-2.4227-3.008-3.1147-4.7827C.7493 42.9867.296 41.0227.1573 38.148.032 35.272 0 34.352 0 27.0213c0-7.324.032-8.2426.1573-11.1186.1387-2.8694.592-4.832 1.2587-6.5507.692-1.768 1.6107-3.2787 3.1147-4.776C6.028 3.0787 7.532 2.1533 9.3 1.4613c1.7253-.6666 3.6813-1.12 6.5507-1.252 2.876-.132 3.8013-.164 11.1253-.164 7.3307 0 8.2493.032 11.1253.164 2.876.132 4.8334.5854 6.5507 1.252 1.7747.692 3.2787 1.6174 4.776 3.1147 1.504 1.4973 2.4227 3.008 3.108 4.776.6733 1.7187 1.1267 3.6813 1.2587 6.5507.132 2.876.164 3.7946.164 11.1186 0 7.3307-.032 8.2507-.164 11.1267z" fill="url(#e)" transform="matrix(1 0 0 -1 0 54.004)"/><path d="M13.9093 4.9693c-4.964 0-8.992 4.0214-8.992 8.9854 0 4.972 4.028 8.9986 8.992 8.9986 4.9654 0 8.9987-4.0266 8.9987-8.9986 0-4.964-4.0333-8.9854-8.9987-8.9854zm0 22.848C6.2573 27.8173.06 21.6067.06 13.9547.06 6.3093 6.2573.1053 13.9093.1053c7.652 0 13.856 6.204 13.856 13.8494 0 7.652-6.204 13.8626-13.856 13.8626z" fill="url(#f)" transform="matrix(1 0 0 -1 13.0667 40.9373)"/></g></svg>
    </div>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const wrappers = document.querySelectorAll('.instagram_feeds .fts-instagram-wrapper');
      wrappers.forEach(wrapper => {
        const width = wrapper.offsetWidth;
        wrapper.style.height = `${width}px`;
        console.log('width',wrapper.style.width);
        console.log('height',wrapper.style.height);
      });
    });
  </script>
</section>

<?php if(is_front_page()){ ?>
  <section class="mainGrid">
    <div class="content testimonialGrid">
      <div class="grid-item">
        <h1 class="heading-title">
          <?php the_field('testimonial_title');?>
        </h1>
        <a href="<?php the_field('testimonial_button_url');?>" class="btn-md btn-light">
          <?php the_field('testimonial_button_text');?>
        </a>
      </div>
      <div class="grid-item">
        <div class="quote monsterFont">“</div>
        <div
          id="splide"
          class="splide">
          <div class="splide__track">
            <ul class="splide__list">
              <?php
              $wp_query = new WP_Query(array(
                  'post_type'       => 'testimonials',
                  'posts_per_page'  => 6
              ));

              while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
              <li class="splide__slide">
                <div class="quoteSlide">
                  <cite>
                    <?php the_content(); ?>
                  </cite>
                  <div class="author"><?php the_title(); ?></div>
                </div>
              </li>
            <?php endwhile; wp_reset_query();?>
            </ul>
          </div>

          <div class="slide-pagination">
            <div class="custom-arrow custom-arrow-prev">
              <img
                src="<?php echo site_url('wp-content/uploads/2024/04/left-arrow-svgrepo-com.svg');?>"
                alt=""
                style="width: 25px" />
            </div>
            <div class="custom-pagination">
              <span class="current-page"></span>
              <span class="separator">/</span>
              <span class="total-pages"></span>
            </div>
            <div class="custom-arrow custom-arrow-next">
              <img src="<?php echo site_url('wp-content/uploads/2024/04/left-arrow-svgrepo-com.svg');?>" alt="" style="width: 25px" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php } ?>

<section class="mainGrid">
  <div class="breakout bg-light">
    <div class="content newsletterGrid hover-link">
      <div class="grid-item">
        <h2 class="newsletterTitle">
          <?php the_field('footer_column_title_1', 'option');?>
        </h2>
        <?php echo do_shortcode('[mc4wp_form id=173]');?>
        <p style="max-width: 250px">
          <?php the_field('footer_column_description_1', 'option');?>
        </p>
      </div>
      <div class="grid-item">
        <h2 class="newsletterTitle">
          <?php the_field('footer_column_title_2', 'option');?>
        </h2>
        <?php
            wp_nav_menu( array(
                'menu'           => 'Footer Menu',
                'theme_location' => 'footer-menu',
                'menu_class'     => "dashList",
            ) );
        ?>
      </div>
      <div class="grid-item">
        <h2 class="newsletterTitle">
          <?php the_field('footer_column_title_3', 'option');?>
        </h2>

        <ul class="iconTxtList">
          <li>
            <span>
              <img src="<?php echo site_url('wp-content/uploads/2024/04/envelope-svgrepo-com.svg');?>" alt="" />
            </span>
            <span>
              <a href="mailto:<?php the_field('footer_email_address', 'option');?>"><?php the_field('footer_email_address', 'option');?></a>
            </span>
          </li>
          <li>
            <span>
              <img src="<?php echo site_url('wp-content/uploads/2024/04/phone-circle-svgrepo-com.svg');?>" alt="" />
            </span>
            <span>
              <a href="tel:<?php the_field('footer_phone_number', 'option');?>"><?php the_field('footer_phone_number', 'option');?></a><br />
              <span class="newsletterGrey">(24/7 General Enquiry)</span>
            </span>
          </li>
          <li>
            <span>
              <img src="<?php echo site_url('wp-content/uploads/2024/04/location-svgrepo-com.png');?>" alt="" />
            </span>
            <span><?php the_field('footer_address', 'option');?></span>
          </li>
          <li>
            <a href="<?php the_field('map_url', 'option');?>" class="btn-md btn-logo btn-pill w300" target="_blank">
              Get directions on the map
            </a>
          </li>
        </ul>
      </div>
      <div class="grid-item">
        <h2 class="newsletterTitle">
          <?php the_field('footer_column_title_4', 'option');?>
        </h2>

        <ul class="duoColGrid">
          <?php if( have_rows('time_table', 'option') ):
          while( have_rows('time_table', 'option') ) : the_row(); ?>
            <li>
              <span><?php the_sub_field('day');?></span>
              <span><?php the_sub_field('time');?></span>
            </li>
          <?php endwhile; endif; ?>
        </ul>
      </div>
    </div>
  </div>
</section>