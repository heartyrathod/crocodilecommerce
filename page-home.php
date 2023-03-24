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





<main>
<section class="cc-banner">
        <div class="cc-banner-bg ">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/banner-bg.webp" class="img-fluid" width="1920" height="1080" alt="banner-bg" title="banner-bg">
        </div>
        <!-- <div class="art" data-aos="fade-down-right">
          <img src="assets/media/Vector.png" class="img-fluid" width="68" height="93" alt="art">
        </div> -->
        <?php echo do_shortcode('[rev_slider alias="slider-1"][/rev_slider]'); ?>
        <!-- <div class="container">
          <div class="row d-flex align-items-center flex-column-reverse flex-md-row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
              <div class="cc-banner-details" data-aos="fade-right">

                <p class="welcome-text">Welcome to <span>CROCODILE COMMERCE</span> </p>
                <h1>We’re professionals for grow your business!</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eius to mod tempor incididunt ut labore et dolore magna aliqua. Ut enims ad minim veniam. Aenean massa. Cum sociis natoque penatibus et magnis.</p>
                <a href="#" class=" cc-btn cc-btn-primary">View More <img src="assets/media/arrow.svg" class="img-fluid" width="14" height="9" alt="arrow"></a>
              </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
              <div data-aos="fade-left">
                <img src="assets/media/Banner.svg" class="img-fluid" width="798" height="699" alt="banner">
              </div>
            </div>
          </div>
        </div> -->
      </section>


      <section class="cc-about">
        <div class="container">
          <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="cc-about-img  " data-aos="fade-up-right">                                  
              <?php 
                $image = get_field('home_page_image',5);
                if( !empty( $image ) ): ?>
                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                   title="<?php echo esc_attr( $image['title'] ); ?>" width="798" height="806" class="img-fluid" />
                <?php endif; ?>
                
              </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="cc-about-details " data-aos="fade-up-left">
                 <?php echo get_field('home_page_content',5); ?>

               <a href="<?php echo get_permalink(7); ?>"> 
               <button class=" cc-btn cc-btn-primary-outline">View More <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/arrow.svg" class="img-fluid" width="14" height="9" alt="arrow" title="arrow"></button></a>
              </div>
            </div>
          </div>
        </div>
  </section>



      <section class="cc-why-us">
        <div class="container">
          <div class="cc-section-header " data-aos="zoom-in">
            <p class="cc-subtitle">WHY US</p>
            <h2 class="cc-title">WHY<span> CROCODILE COMMERCE?</span> </h2>
          </div>

          <div class="row ">
          <?php
              $args = array(
                  'numberposts' => -1,
                  'post_type'   => 'why_us',
                  'order' => 'ASC',
                );

                $latest_why_us = get_posts( $args );
                foreach($latest_why_us as $why_us){
                  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $why_us->ID ), 'single-post-thumbnail' );
              ?>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
              <div class="cc-why-us-details">
                <div class="cc-why-us-img">
                  <img src="<?php  echo $image[0]; ?>" class="img-fluid" width="80" height="76" alt.="<?php echo $why_us->post_title; ?>" title="<?php echo $why_us->post_title; ?>">
                </div>
                <h3 class="cc-why-us-title"><?php echo $why_us->post_title; ?></h3>
                <p class="cc-why-us-text"><?php echo $why_us->post_content; ?></p>
              </div>
            </div>

            <?php } ?>
            <!-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
              <div class="cc-why-us-details">
                <div class="cc-why-us-img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/why-us.png" class="img-fluid" width="80" height="76" alt="logo">
                </div>
                <h3 class="cc-why-us-title">Lorem ipsum</h3>
                <p class="cc-why-us-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
              </div>

            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
              <div class="cc-why-us-details">
                <div class="cc-why-us-img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/why-us.png" class="img-fluid" width="80" height="76" alt="logo">
                </div>
                <h3 class="cc-why-us-title">Lorem ipsum</h3>
                <p class="cc-why-us-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
              </div>

            </div> -->

          </div>

        </div>
      </section>
      <section class="cc-services">
        <div class="container">
          <div class="cc-section-header">
            <div class="row d-flex align-items-center">
              <?php echo get_field('service_home_content',9); ?>
            </div>

          </div>
          <div class="row">
          <?php
              $args = array(
                  'numberposts' => 3,
                  'post_type'   => 'service',
                  'order' => 'ASC',
                );

                $latest_service = get_posts( $args );
                foreach($latest_service as $s_key=>$service){
                  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $service->ID ), 'single-post-thumbnail' );
              ?>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <a href="<?php echo get_permalink($service->ID); ?>" class="cc-services-details" data-aos="flip-right" data-aos-duration="1500">              
                <div class="cc-services-details-heading">
                  <h3><?php echo $service->post_title; ?></h3>
                  <p class="cc-services-details-number">0<?php echo $s_key+1; ?></p>
                </div>
                <div class="cc-services-details-img">
                  <img src="<?php  echo $image[0]; ?>" class="img-fluid" width="80" height="80" alt="<?php echo $services_main->post_title; ?>" title="<?php echo $services_main->post_title; ?>">
                </div>
                <p><?php echo $service->post_excerpt; ?></p>
                </a>              
            </div>
              <?php } ?>

            <!-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
              <div class="cc-services-details" data-aos="flip-left">
                <div class="cc-services-details-heading">
                  <h3>SEO Optimization</h3>
                  <p class="cc-services-details-number">02</p>
                </div>
                <div class="cc-services-details-img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/seo.png" class="img-fluid" width="80" height="80" alt="ppc">
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vehicula dui sit amet ligula cursus, eget molestie diam.</p>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
              <div class="cc-services-details" data-aos="flip-right">
                <div class="cc-services-details-heading">
                  <h3>Infographics and A+ Conten</h3>
                  <p class="cc-services-details-number">03</p>
                </div>
                <div class="cc-services-details-img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/pie-chart.png" class="img-fluid" width="80" height="80" alt="ppc">
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vehicula dui sit amet ligula cursus, eget molestie diam.</p>
              </div>
            </div>
          </div> -->
        </div>
      </section>


      <section class="cc-clients">
        <div class="container">
          <h2 class="cc-title">Our Clients</h2>
          <div class="cc-clients-owl owl-carousel owl-theme">
                 <?php
                   $clients = get_field( 'cilents' );
                       if ( $clients ) :
                ?>
                
            <?php foreach ( $clients as $client ) :
                ?>
            <div class="item">
              <div class="cc-clients-img">
                <img src="<?php echo esc_url( $client['url'] ); ?>" class="img-fluid" width="<?php echo esc_attr( $client['width'] ); ?>" height="<?php echo esc_attr( $client['height'] ); ?>" alt="<?php echo esc_attr( $client['alt'] ); ?>" title="<?php echo esc_attr( $client['title'] ); ?>">
              </div>
            </div>
              <?php endforeach; ?>
            <?php endif; ?>

            <!-- <div class="item">
              <div class="cc-clients-img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/kanba.png" class="img-fluid" width="700" height="200" alt="clients">
              </div>
            </div>
            <div class="item">
              <div class="cc-clients-img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/amara.png" class="img-fluid" width="700" height="200" alt="clients">
              </div>
            </div>
            <div class="item">
              <div class="cc-clients-img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/aven.png" class="img-fluid" width="700" height="200" alt="clients">
              </div>
            </div>
            <div class="item">
              <div class="cc-clients-img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/hexlab.png" class="img-fluid" width="700" height="200" alt="clients">
              </div>
            </div>
            <div class="item">
              <div class="cc-clients-img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/utosia.png" class="img-fluid" width="700" height="200" alt="clients">
              </div>
            </div>
            <div class="item">
              <div class="cc-clients-img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/goldline.png" class="img-fluid" width="700" height="200" alt="clients">
              </div>
            </div>
            <div class="item">
              <div class="cc-clients-img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/circle.png" class="img-fluid" width="700" height="200" alt="clients">
              </div>
            </div>
            <div class="item">
              <div class="cc-clients-img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/hexa.png" class="img-fluid" width="700" height="200" alt="clients">
              </div> -->
            <!-- </div> -->

          </div>
        </div>
      </section>
      <section class="cc-testimonials">
        <div class="container">
          <div class="cc-section-header">
            <p class="cc-subtitle">Testimonials</p>
            <h2 class="cc-title">They talk about us</h2>
          </div>
          <div class="cc-testimonials-owl owl-carousel owl-theme">
          <?php
                $args = array(
                    'numberposts' => -1,
                    'post_type'   => 'testimonials',
                    'order' => 'ASC',
                    );

                    $latest_testimonials = get_posts( $args );
                    foreach($latest_testimonials as $testimonials){
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $testimonials->ID ), 'single-post-thumbnail' );
                ?>

            <div class="item">    
                            
              <div class="cc-testimonials-details">
                <span class="cc-testimonials-details-img">
                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/quote.svg" alt="quote" title="quote" height="30" width="30"> </span>
                <p class="cc-testimonials-details-text"><?php echo $testimonials->post_content; ?></p>
                <div class="cc-testimonials-client">
                  <div class="cc-testimonials-client-img">
                    <img src="<?php  echo $image[0]; ?>" width="70" height="70" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>">
                  </div>
                  <div class="cc-testimonials-client-details">
                    <p class="cc-testimonials-client-details-name">
                      <?php echo $testimonials->post_title; ?></p>
                  <p class="cc-testimonials-client-details-designation"><?php echo $testimonials->post_excerpt; ?></p>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
            <!-- <div class="item">
              <div class="cc-testimonials-details">
                <span class="cc-testimonials-details-img"><img class="img-fluid" src="" height="30" width="30"> </span>
                <p class="cc-testimonials-details-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur magni, voluptas accusamus ducimus officia at ipsam veniam ratione alias vero, totam non quam nesciunt deleniti qui, sunt quaerat. Fugit, enim!</p>
                <div class="cc-testimonials-client">
                  <div class="cc-testimonials-client-img">
                    <img src="" width="70" height="70" class="img-fluid" alt="Testimonials">
                  </div>
                  <div class="cc-testimonials-client-details">
                    <p class="cc-testimonials-client-details-name">Paul Trueman</p>
                    <p class="cc-testimonials-client-details-designation">CEO Mil design studio </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item ">
              <div class="cc-testimonials-details">
                <span class="cc-testimonials-details-img"><img class="img-fluid" src="" height="30" width="30"> </span>
                <p class="cc-testimonials-details-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur magni, voluptas accusamus ducimus officia at ipsam veniam ratione alias vero, totam non quam nesciunt deleniti qui, sunt quaerat. Fugit, enim!</p>
                <div class="cc-testimonials-client">
                  <div class="cc-testimonials-client-img">
                    <img src="assets/media/client.png" width="70" height="70" class="img-fluid" alt="Testimonials">
                  </div>
                  <div class="cc-testimonials-client-details">
                    <p class="cc-testimonials-client-details-name">Paul Trueman</p>
                    <p class="cc-testimonials-client-details-designation">CEO Mil design studio</p>
                  </div>
                </div>
              </div>
            </div>
             -->
          </div>
        </div>
      </section>
    </main>







<?php
 get_footer();
?>
