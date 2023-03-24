<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
get_header();
?>

<main class="cc-main">
<section class="cc-entry-header">
        <h1><?php echo $post->post_title; ?></h1>
        <ul>
          <li><a href="<?php echo site_url(); ?>">Home</a></li>
          <li>-</li>
          <li><?php echo $post->post_title; ?></li>
        </ul>
      </section>
      <section class="cc-service-content">
        <div class="container">
          <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
              <div class="cc-service-img">
              <?php 
                     $image = get_field('service_image');                      
                      if( !empty( $image ) ): ?>
                          <img src="<?php echo esc_url($image['url']); ?>"
                           alt="<?php echo esc_attr($image['alt']); ?>
                          " title="<?php echo esc_attr($image['title']); ?>" class="img-fluid"/>
                      <?php endif; ?>            
                <!-- <img src="assets/media/ppc-1.png" alt="logo" width="507" height="602" class="img-fluid"> -->
              </div>

            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
              <div class="cc-service-details">
              <?php echo get_field('content1'); ?>
            </div>
          </div>
          <div class="cc-service-details">
          <?php echo get_field('content_2'); ?>
          </div>
        </div>
      </section>
</main>
<?php
get_footer();




