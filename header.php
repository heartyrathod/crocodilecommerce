<?php
/**
 * The header.

 * @package WordPress
 * @subpackage crocodile-commerce
 * @since crocodile-commerce 1.0.0
 */


?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crocodile Commerce</title>
    <meta name="theme-color" content="#282828" />
    <meta name="description" content="Crocodile Commerce">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/logo.svg" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/logo.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="/assets/css/home.min.css"> -->
    <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/owl.carousel.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.css" /> -->
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header>
      <div class="container">
        <div class="cc-header">
          <div class="cc-logo">
          <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $image = wp_get_attachment_image_src($custom_logo_id, 'full');
            ?>
            <a href="<?php echo site_url(); ?>" title="<?php bloginfo('name'); ?>" aria-label="<?php bloginfo('name'); ?>">
            <img src="<?php echo $image[0]; ?>"
             alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>
             " width="<?php echo $image[1]; ?>" height="<?php echo $image[1]; ?>" class="img-fluid">
            </a>
                 <!-- <img src="assets/media/logo.svg" alt="logo" width="100" height="100" class="img-fluid"> -->
          </div>
          <div class="cc-header-details">
          <?php
                echo wp_nav_menu(array(
                  'menu'        => 'header-menu',
                  'menu_id'     => '',
                  'menu_class'  => 'cc-header-menu',
                  // 'add_li_class'  => '	.current-menu-item',
                  'fallback_cb' => false,
                  // 'depth'       => 1,
                ));
               
              //  wp_nav_menu(array(
              //     'theme_location'=>'header-menu',
              //     'menu_class'=>'cc-header-menu', 'container' => 'ul')
              //   );
              ?>
            <!-- <ul class="cc-header-menu">
              <li><a href="index.html" class="active">Home</a></li>
              <li><a href="aboutus.html">About Us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul> -->
            <div class="cc-contact">
              <div class="cc-contact-icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/telephone.svg" alt="Call" title="Call" width="50" height="50" class="img-fluid">
              </div>
              <div class="cc-contact-detail">
                <p>Call Us Anytime</p>
                <a href="#" title="Phone" aria-label="Phone">+<?php echo get_field('phone','11'); ?></a>
              </div>
            </div>
            <button type="button" class="bars cc-trigger ">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/list.svg" alt="list" title="list" width="35" height="35" class="img-fluid">
            </button>
          </div>
        </div>

      </div>




    </header>
   