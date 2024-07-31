<section class="mainGrid">
      <div class="fullWidthOuter banner-sm">
            <!-- <//?php $url = "http://localhost/grace/wp-content/uploads/2024/05/Rectangle-99.png" ?> -->
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
            <img src="<?php echo $url;?>" alt="" class="fullCol"/>

            <div class="absoluteCenter color-light">
                  <h1 class="heading-title-sm margin-reset upper"><?php the_title()?></h1>
                  <div class="breadcrumb">
                        <ul class="flexList">
                              <li><a href="<?php echo site_url();?>">Home</a></li>
                              <li>/</li>
                              <li><?php the_title();?></li>
                        </ul>
                  </div>
                  <!-- <div class="squareThingy"></div> -->
            </div>
            <!-- <div class="breadcrumb">
                  <ul>
                        <li><a href="<?php echo site_url();?>">Home</a></li>
                        <li>/</li>
                        <li><?php the_title();?></li>
                  </ul>
            </div> -->
      </div>
</section>

<section class="mainGrid">
      <div class="breakout">
            <div class="fullCol policy-contents">
                  <div class="policy-sidebar">
                        <h2 class="policy-title-h2">Policies</h2>
                        <?php
                        if ($post->post_parent) {
                              $ancestors = get_post_ancestors($post->ID);
                              $parent = $ancestors[count($ancestors) - 1];
                        } else {
                              $parent = $post->ID;
                        }
                        
                        $children = wp_list_pages("title_li=&child_of=" . $parent . "&echo=0");
                        if ($children) { ?>
                        <ul class="sidebar-menu">
                              <?php echo $children; ?>
                        </ul>
                        <?php } ?>
                  </div>
                  <div class="contents">
                        <h3 class="policy-title">
                              <?php the_title();?>
                        </h3>
                        <p class="policy-description">
                              <?php the_content();?>
                        </p>
                  </div>
            </div>
            </div>
      </section>