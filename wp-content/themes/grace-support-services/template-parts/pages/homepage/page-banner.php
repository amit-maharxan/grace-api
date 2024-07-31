<section class="mainGrid">
   <div class="fullWidthOuter banner landing">
    <a class="fullWidthOuter banner landing" href="<?php the_field('hp_banner_url');?>">
     <?php if(wp_is_mobile()){ ?>
     <img src="<?php the_field('hp_banner_image_mobile');?>" alt="" class="fullCol"/>
     <?php } else { ?>
     <img src="<?php the_field('hp_banner_image');?>" alt="" class="fullCol"/>
     <?php } ?>
    </a>
   </div>
</section>