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
                              <li><?php the_title();?></li>
                        </ul>
                  </div>
            </div>
      </div>
</section>

<section class="mainGrid contact">
      <div class="content">
            <div class="left-section">
                  <h1 class="contactPageTitle titleFancy"><?php the_title(); ?></h1>
                  <ul class="contact-details">
                        <li>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>

                              <p class="our_location">
                                    <?php the_field('location');?>
                              </p>
                        </li>

                        <li>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22 6L12 13L2 6" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>

                              <p class="our_email">
                                    <a href="mailto:<?php the_field('email_address');?>">
                                          <?php the_field('email_address');?>
                                    </a>
                              </p>
                        </li>
                        <li>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.9994 16.9201V19.9201C22.0006 20.1986 21.9435 20.4743 21.832 20.7294C21.7204 20.9846 21.5567 21.2137 21.3515 21.402C21.1463 21.5902 20.904 21.7336 20.6402 21.8228C20.3764 21.912 20.0968 21.9452 19.8194 21.9201C16.7423 21.5857 13.7864 20.5342 11.1894 18.8501C8.77327 17.3148 6.72478 15.2663 5.18945 12.8501C3.49942 10.2413 2.44769 7.27109 2.11944 4.1801C2.09446 3.90356 2.12732 3.62486 2.21595 3.36172C2.30457 3.09859 2.44702 2.85679 2.63421 2.65172C2.82141 2.44665 3.04925 2.28281 3.30324 2.17062C3.55722 2.05843 3.83179 2.00036 4.10945 2.0001H7.10945C7.59475 1.99532 8.06524 2.16718 8.43321 2.48363C8.80118 2.80008 9.04152 3.23954 9.10944 3.7201C9.23607 4.68016 9.47089 5.62282 9.80945 6.5301C9.94399 6.88802 9.97311 7.27701 9.89335 7.65098C9.8136 8.02494 9.62831 8.36821 9.35944 8.6401L8.08945 9.9101C9.513 12.4136 11.5859 14.4865 14.0894 15.9101L15.3594 14.6401C15.6313 14.3712 15.9746 14.1859 16.3486 14.1062C16.7225 14.0264 17.1115 14.0556 17.4694 14.1901C18.3767 14.5286 19.3194 14.7635 20.2794 14.8901C20.7652 14.9586 21.2088 15.2033 21.526 15.5776C21.8431 15.9519 22.0116 16.4297 21.9994 16.9201Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>

                              <p class="our_phone">
                                    <a href="tel:<?php the_field('phone');?>">
                                          <?php the_field('phone');?>
                                    </a>
                              </p>
                        </li>
                  </ul>
                  <div class="social_icons">
                        <a target="_blank" href="<?php the_field('instagram', 'options');?>">
                              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20" cy="20" r="20" fill="#AD9181"/>
                                    <path d="M25 10H15C12.2386 10 10 12.2386 10 15V25C10 27.7614 12.2386 30 15 30H25C27.7614 30 30 27.7614 30 25V15C30 12.2386 27.7614 10 25 10Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M23.9997 19.3701C24.1231 20.2023 23.981 21.0523 23.5935 21.7991C23.206 22.5459 22.5929 23.1515 21.8413 23.5297C21.0898 23.908 20.2382 24.0397 19.4075 23.906C18.5768 23.7723 17.8095 23.3801 17.2145 22.7852C16.6196 22.1903 16.2274 21.4229 16.0938 20.5923C15.9601 19.7616 16.0918 18.91 16.47 18.1584C16.8483 17.4069 17.4539 16.7938 18.2007 16.4063C18.9475 16.0188 19.7975 15.8766 20.6297 16.0001C21.4786 16.1259 22.2646 16.5215 22.8714 17.1284C23.4782 17.7352 23.8738 18.5211 23.9997 19.3701Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M25.5 14.5H25.51" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>

                        </a>
                        <a target="_blank" href="<?php the_field('facebook', 'options');?>">
                              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20" cy="20" r="20" fill="#AD9181"/>
                                    <path d="M26 10H23C21.6739 10 20.4021 10.5268 19.4645 11.4645C18.5268 12.4021 18 13.6739 18 15V18H15V22H18V30H22V22H25L26 18H22V15C22 14.7348 22.1054 14.4804 22.2929 14.2929C22.4804 14.1054 22.7348 14 23 14H26V10Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>

                        </a>
                        <a target="_blank" href="<?php the_field('twitter', 'options');?>">
                              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20" cy="20" r="20" fill="#AD9181"/>
                                    <path d="M31 11C30.0424 11.6755 28.9821 12.1922 27.86 12.53C27.2577 11.8376 26.4573 11.3467 25.567 11.124C24.6767 10.9012 23.7395 10.9572 22.8821 11.2845C22.0247 11.6118 21.2884 12.1944 20.773 12.9538C20.2575 13.7131 19.9877 14.6124 20 15.53V16.53C18.2426 16.5756 16.5013 16.1859 14.931 15.3955C13.3607 14.6051 12.0103 13.4387 11 12C11 12 7 21 16 25C13.9405 26.398 11.4872 27.099 9 27C18 32 29 27 29 15.5C28.9991 15.2215 28.9723 14.9436 28.92 14.67C29.9406 13.6635 30.6608 12.3928 31 11Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                        </a>
                  </div>
                  <div class="opening_hours">
                        <h2 class="w600 regular-text">Opening Hours</h2>
                        <table>
                        <?php
                        if( have_rows('opening_hours') ):
                        while( have_rows('opening_hours') ) : the_row(); ?>
                              <tr>
                                    <td class="day"><?php the_sub_field('day')?></td>
                                    <td class="time"><?php the_sub_field('time');?></td>
                              </tr>
                        <?php endwhile; endif; ?>
                        </table>
                  </div>
            </div>
            <div class="right-section">
                  <?php echo do_shortcode('[contact-form-7 id="f25b27d" title="Contact form"]');?>
            </div>
      </div>

</section>