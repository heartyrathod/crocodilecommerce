<?php
/**
 * The header.

 * @package WordPress
 * @subpackage crocodile-commerce
 * @since crocodile-commerce 1.0.0
 */

?>





<footer>


      <div class="footer-details">
        <div class="container">
          <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
              <a href="<?php echo site_url(); ?>" title="<?php bloginfo('name'); ?>" aria-label="<?php bloginfo('name'); ?>" class="logo">
              <img src="<?php echo get_theme_mod( 'gb_logo' ); ?>" class="img-fluid" width="300" height="342" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>">
              </a>
              <p><?php echo get_theme_mod( 'footer_content' ); ?></p>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
              <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="cc-usful-links">
                    <h2>Useful Links</h2>
                    <?php
                        echo wp_nav_menu(array(
                      'menu'        => 'Useful',
                      'menu_id'     => '',
                      'menu_class'  => 'cc-header-menu',
                      'fallback_cb' => false,
                      // 'depth'       => 1,
                    ));              
                   ?>
                    <!-- <ul>
                      <li><a href="index.html">Home</a></li>
                      <li><a href="aboutus.html">About Us</a></li>
                      </li>
                      <li><a href="contactus.html">Contact Us</a></li>
                    </ul> -->
                  </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="cc-services-menu">
                    <h2>Services</h2>
                          <?php
                              echo wp_nav_menu(array(
                            'menu'        => 'Services',
                            'menu_id'     => '',
                            'menu_class'  => 'cc-header-menu',
                            'fallback_cb' => false,
                            // 'depth'       => 1,
                          ));              
                        ?>
                    <!-- <ul>
                      <li><a href="ppc.html">Pay Per Click Management</a></li>
                      <li><a href="seo.html">SEO Optimization</a></li>
                      </li>
                      <li><a href="infographic.html">Infographics and A+ Content</a></li>
                    </ul> -->
                  </div>
                </div>
              </div>

              <div class="cc-social">
                <h2>Stay Updated on Social</h2>
                <ul>
                  <?php
                  if( have_rows('social_media', 11) ): ?>
                  <?php while( have_rows('social_media', 11) ): the_row();
                    $s_name = get_sub_field('name');
                    $s_link = get_sub_field('link');
                    $s_icon = get_sub_field('icon');
                  ?>
                    <li>
                      <a href="<?php echo $s_link; ?>" title="<?php echo $s_name; ?>" aria-label="<?php echo $s_name; ?>" target="_blank">
                        <?php echo $s_icon; ?>
                      </a>
                    </li>
                  <?php endwhile; ?>
                  <?php endif; ?>
                </ul>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
              <div class="cc-contact">
                <h2>Keep In Touch</h2>
                <p>Do you have questions and want to contact us? Call or visit us.</p>
                <div class="cc-contact-details">

                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/location.svg" class="img-fluid" width="24" height="24" alt="Address" title="Address">

                  <a href="#" title="Address" aria-label="Address"><?php echo get_field('address','11'); ?></a>
                </div>
                <div class="cc-contact-details">

                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/email.svg" class="img-fluid" width="24" height="24" alt="Email"  title="Email">

                  <a href="#" title="Email" aria-label="Email"><?php echo get_field('email_address','11'); ?></a>
                </div>
                <div class="cc-contact-details">

                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/phone.svg" class="img-fluid" width="24" height="24" alt="Phone"  title="Phone">

                  <a href="#" title="Phone" aria-label="Phone">Call Us: <?php echo get_field('phone','11'); ?></a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>


      <div class="container">
        <div class="cc-copyrights">
        <p>© <?= date('Y'); ?> – <span>Crocodile Commerce</span>. All rights reserved.</p>
          <p>Design and Developed by <a href="https://www.igexsolutions.com" title="igex" aria-label="igex"> iGex Solutions</a></p>

          <!-- <span>©  – <a href="">Crocodile Commerce</a>. All rights reserved.</span>
          <span>Design and Developed by <a href="https://www.igexsolutions.com"> iGex Solutions.</a></span> -->

        </div>

      </div>
      
    </footer>
    <div class="cc-side-menubar">

      <div class="cc-side-menubar-logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/logo-white.png" alt="logo" title="logo" width="100" height="114" class="img-fluid">
      </div>
	  <?php
                echo wp_nav_menu(array(
                  'menu'        => 'header-menu',
                  'menu_id'     => '',
                  'menu_class'  => 'cc-side-menubar-menu',
                  'fallback_cb' => false,
                  // 'depth'       => 1,
                ));
		?>
      <!-- <ul class="cc-side-menubar-menu">
        <li><a href="#">Home</a> </li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul> -->
      <div class="cc-contact">
        <div class="cc-contact-icon">
          <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_105_4020)">
              <path d="M11.4188 4.14994C11.2343 3.91264 11.0014 3.7173 10.7356 3.5769C10.4699 3.4365 10.1773 3.35426 9.87725 3.33564C9.57725 3.31702 9.27672 3.36244 8.99562 3.4689C8.71452 3.57535 8.45929 3.7404 8.24688 3.95307L5.01563 7.18744C3.50626 8.69994 2.95001 10.8406 3.60938 12.7187C6.34607 20.4924 10.7978 27.5502 16.6344 33.3687C22.4529 39.2052 29.5107 43.6569 37.2844 46.3937C39.1625 47.0531 41.3031 46.4968 42.8156 44.9874L46.0469 41.7562C46.2596 41.5438 46.4246 41.2886 46.5311 41.0075C46.6375 40.7264 46.6829 40.4258 46.6643 40.1258C46.6457 39.8258 46.5635 39.5332 46.4231 39.2674C46.2827 39.0017 46.0873 38.7688 45.85 38.5843L38.6406 32.9781C38.3871 32.7814 38.0922 32.6449 37.7782 32.5789C37.4643 32.5129 37.1394 32.519 36.8281 32.5968L29.9844 34.3062C29.0709 34.5345 28.1138 34.5224 27.2064 34.271C26.299 34.0197 25.4721 33.5376 24.8063 32.8718L17.1313 25.1937C16.4649 24.5282 15.9823 23.7015 15.7304 22.794C15.4784 21.8866 15.4658 20.9293 15.6938 20.0156L17.4063 13.1718C17.4841 12.8606 17.4902 12.5357 17.4242 12.2217C17.3581 11.9077 17.2216 11.6129 17.025 11.3593L11.4188 4.14994ZM5.88751 1.59682C6.43437 1.04979 7.09134 0.625353 7.81482 0.351699C8.53829 0.0780456 9.3117 -0.0385648 10.0837 0.00961105C10.8557 0.0577869 11.6086 0.269647 12.2924 0.631123C12.9763 0.992598 13.5754 1.49542 14.05 2.1062L19.6563 9.31244C20.6844 10.6343 21.0469 12.3562 20.6406 13.9812L18.9313 20.8249C18.8429 21.1794 18.8477 21.5507 18.9451 21.9028C19.0426 22.2549 19.2294 22.5758 19.4875 22.8343L27.1656 30.5124C27.4245 30.771 27.7459 30.9582 28.0986 31.0557C28.4513 31.1532 28.8232 31.1576 29.1781 31.0687L36.0188 29.3593C36.8207 29.1588 37.6577 29.1432 38.4665 29.3138C39.2753 29.4843 40.0348 29.8365 40.6875 30.3437L47.8938 35.9499C50.4844 37.9656 50.7219 41.7937 48.4031 44.1093L45.1719 47.3406C42.8594 49.6531 39.4031 50.6687 36.1813 49.5343C27.935 46.6328 20.4477 41.9119 14.275 35.7218C8.08528 29.55 3.36441 22.0639 0.462507 13.8187C-0.668743 10.5999 0.346882 7.14057 2.65938 4.82807L5.89063 1.59682H5.88751Z" fill="black" />
            </g>
            <defs>
              <clipPath id="clip0_105_4020">
                <rect width="50" height="50" fill="white" />
              </clipPath>
            </defs>
          </svg>


        </div>
        <div class="cc-contact-detail">
          <p>Call Us Anytime</p>
          <a href="#">+91 9123458555</a>
        </div>
      </div>
    </div>
    <div class="cc-overly"></div>

    </div>
    <div class="loader"></div>
    <!-- <script src="<?php echo get_stylesheet_directory_uri(); ?>/https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->
    <!-- <script src="<?php echo get_stylesheet_directory_uri(); ?>/https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.js" crossorigin="anonymous"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/scripts/owl.carousel.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/scripts/home.js"></script> -->

  </body>

<?php

wp_footer(); ?>
