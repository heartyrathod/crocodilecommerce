<?php
/**
 * .
 * @link https://crocodile-commerce.com/
 * @package WordPress
 * @subpackage crocodile-commerce
 * @since crocodile-commerce 1.0.0
 */

get_header();

?>


<main class="cc-main">
      <section class="cc-entry-header">
        <h1>About Us</h1>
        <ul>
          <li><a href="<?php echo site_url(); ?>">Home</a></li>
          <li>-</li>
          <li>About Us</li>
        </ul>
      </section>
      <section class="cc-about-content">
        <div class="container">


          <div class="cc-about-content-details">

            <p class="cc-subtitle">About Us</p>
            <h2 class="cc-title"><?php echo get_field('title','7'); ?></h2>
            <!-- <div class="cc-about-content-img">
              <img src="/assets/media/aboutus.png" class="img-fluid" width="1727" height="1103" alt="banner">
            </div> -->

            <p><?php echo get_field('about_content','7'); ?></p>
          </div>






          <div class="cc-misson-vision">
            <div class="row d-flex align-items-center ">
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="row">
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="cc-misson-vision-img"> 
                    <?php 
                      $image = get_field('mission_image');
                      if( !empty( $image ) ): ?>
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
                      <?php endif; ?>            
                      <!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/media/misson.png" class="img-fluid" width="401" height="239" alt="misson"> -->
                    </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="cc-misson">
                      <div class="cc-misson-img">
                      <?php 
                      $image = get_field('mission_icon');
                      if( !empty( $image ) ): ?>
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
                      <?php endif; ?>   
                        <!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/media/misson.svg" class="img-fluid" alt="Mission"> -->
                      </div>
                      <h3><?php echo get_field('mission_content','7'); ?></h3>
                      <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque quas reiciendis ratione provident.</p> -->

                    </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="cc-vision">
                      <div class="cc-vision-img">
                      <?php 
                      $image = get_field('vision_image');
                      if( !empty( $image ) ): ?>
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
                      <?php endif; ?>   
                        <!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/media/binoculars-fill.svg" class="img-fluid" alt="vision"> -->
                      </div>
                      <h3><?php echo get_field('vision_content','7'); ?></h3>
                      <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque quas reiciendis ratione provident.</p> -->

                    </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="cc-misson-vision-img">
                    <?php 
                      $image = get_field('vision_icon');
                      if( !empty( $image ) ): ?>
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
                      <?php endif; ?>   
                      <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/misson-2.png" class="img-fluid" width="250" height="261" alt="misson"> -->
                    </div>
                  </div>
                </div>

              </div>

              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">

                <p class="cc-subtitle">Our Business</p>
                <h2 class="cc-title"><?php echo get_field('business_content_','7'); ?></h2>
                <!-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi tempora placeat nulla suscipit iusto pariatur omnis iure eaque deserunt obcaecati eius quae vel error voluptas, natus sed quis, molestiae odit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi tempora placeat nulla suscipit iusto pariatur omnis iure eaque deserunt obcaecati eius quae vel error voluptas, natus sed quis, molestiae odit.</p> -->



              </div>

            </div>
          </div>
          <div class="cc-team">
            <p class="cc-subtitle">Professional Team</p>
            <h2 class="cc-title">Meet Our Team</h2>
            <div class="row">
            <?php
              if( have_rows('join_our_team', 7) ): ?>
              <?php while( have_rows('join_our_team', 7) ): the_row();
              $Image = get_sub_field('image');
              // echo "<pre>"; print_r($Image);
              $name = get_sub_field('name');
              $designation_ = get_sub_field('designation_');
              ?>
              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="cc-team-member">
                  <div class="cc-team-member-img">
                  <img src="<?php  echo $Image['url']; ?>" width="<?php  echo $Image['width']; ?>" height="<?php  echo $Image['height']; ?>" class="img-fluid" alt="<?php echo $name; ?>" title="<?php echo $name; ?>" />
                    <!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/media/team-1.png" class="img-fluid" width="800" height="800" alt="<?php echo $name; ?>" title="<?php echo $name; ?>"> -->

                  </div>
                  <h4><?php echo $name; ?></h4>
                  <p><?php echo $designation_; ?></p>
                </div>
              </div>
              <?php endwhile; ?>
              <?php endif; ?>


<!-- 
              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="cc-team-member">
                  <div class="cc-team-member-img">

                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/team-2.png" class="img-fluid" width="800" height="800" alt="team">

                  </div>
                  <h4>Paul Doe</h4>
                  <p>co-Founder</p>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="cc-team-member">
                  <div class="cc-team-member-img">

                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/team-3.png" class="img-fluid" width="800" height="800" alt="team">

                  </div>
                  <h4>Tonya Sparks</h4>
                  <p>SEO engineer</p>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="cc-team-member">
                  <div class="cc-team-member-img">

                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/team-4.png" class="img-fluid" width="800" height="800" alt="team">

                  </div>
                  <h4>Tom Banks</h4>
                  <p>SEO engineer</p>
                </div>
              </div>
               -->
            </div>
          </div>
        </div>

      </section>



    </main>









<?php
 get_footer();
?>
