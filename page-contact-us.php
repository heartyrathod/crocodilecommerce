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
        <h1>Contact Us</h1>
        <ul>
          <li><a href="<?php echo site_url(); ?>" title="home" aria-label="home">Home</a></li>
          <li>-</li>
          <li>Contact Us</li>
        </ul>
      </section>
      <section class="cc-contactus">
        <div class="container">
          <div class="cc-contactus-details">
            <h2 class="cc-title">Send Us A Message Now</h2>
            <p class="cc-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus debitis autem, eius eum aliquid aut quibusdam incidunt? Excepturi eum consequatur suscipit voluptatibus nam. Sequi maiores perferendis tempore atque consequatur omnis?</p>
            <?php echo do_shortcode('[contact-form-7 id="186" title="Contact form 1"]'); ?>
            <div class="cc-in-touch">
              <h2 class="cc-title">Get In Touch</h2>
              <p class="cc-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus debitis autem, eius eum aliquid aut quibusdam incidunt? Excepturi eum consequatur suscipit voluptatibus nam. Sequi maiores perferendis tempore atque consequatur omnis?</p>
              <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="cc-in-touch-details">
                    <div class="cc-in-touch-img">

                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/location-1.svg" class="img-fluid" width="45" height="45" title="arrow" alt="contact">
                    </div>
                    <p>Brooklyn, NY 10036, 16-2 United States</p>

                  </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="cc-in-touch-details">
                    <div class="cc-in-touch-img">

                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/phone-1.svg" class="img-fluid" width="45" height="45" title="contact" alt="contact">
                    </div>
                    <p><a href="#" title="Phone" aria-label="Phone">+1-800-123-1234</a></p>


                  </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="cc-in-touch-details">
                    <div class="cc-in-touch-img">

                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/email-1.svg" class="img-fluid" width="45" height="45" title="arrow" alt="contact">
                    </div>
                    <p><a href="#" title="Email" aria-label="Email">crocodile@gmail.com</a></p>


                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </section>



    </main>



















<?php
 get_footer();
?>
