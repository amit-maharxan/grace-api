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
                              <li>Specials</li>
                              <li>/</li>
                              <li><?php the_title();?></li>
                        </ul>
                  </div>
            </div>
      </div>
</section>

<section class="mainGrid">
      <div class="content">
            <div class="special_date">
                  <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="">
            </div>
            <?php $special_title = get_field('special_title');
            if($special_title){ ?>
            <div class="special_description">
                  <h3><?php the_field('special_title');?></h3>
                  <p><?php the_field('special_description');?></p>
            </div>
            <?php } ?>
      </div>
</section>

<?php do_action('grace_footer'); ?>