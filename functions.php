<?php

// header menu
// register_nav_menus(array('primary-menu' => 'header-menu'));

// function my_child_theme_enqueue_scripts() {
//   wp_enqueue_script( 'aos', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', array(), '2.3.4', true );
//   wp_enqueue_style( 'aos-style', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css', array(), '2.3.4' );
//   wp_enqueue_style( 'aos-style-s', 'https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.css', array(), '2.3.4' );
// }
// add_action( 'wp_enqueue_scripts', 'my_child_theme_enqueue_scripts' );



function pomerol_home_enqueue_scripts()
{

  if (is_page('home')) {
    wp_register_style('pom_home_css', get_stylesheet_directory_uri() . '/assets/css/home.min.css', array(), '1');
    wp_enqueue_style('pom_home_css');
    wp_register_style('pom_carousel', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1');
    wp_enqueue_style('pom_carousel');
    wp_enqueue_style( 'my-theme-style', 'https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.css', array(), '1.0.0' );
  }else if (is_page('about-us') ) {

    wp_register_style('pom_css', get_stylesheet_directory_uri() . '/assets/css/home.min.css', array(), '1');
    wp_enqueue_style('pom_ css');
    wp_register_style('about-us-style', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1');
    wp_enqueue_style('about-us-style');    
    wp_register_style('about-inner_min', get_stylesheet_directory_uri() . '/assets/css/about.min.css', array(), '1');
    wp_enqueue_style('about-inner_min');
    wp_enqueue_style( 'theme-style', 'https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.css', array(), '1.0.0' );
    
  }else if (is_page('services') ) {

    wp_register_style('pom_css', get_stylesheet_directory_uri() . '/assets/css/home.min.css', array(), '1');
    wp_enqueue_style('pom_ css');
    wp_register_style('service-style', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1');
    wp_enqueue_style('service-style');    
    wp_register_style('service-inner_min', get_stylesheet_directory_uri() . '/assets/css/service.min.css', array(), '1');
    wp_enqueue_style('service-inner_min');
    wp_enqueue_style( 'theme-style', 'https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.css', array(), '1.0.0' );
    
  }else if (is_page('contact-us') ) {

    wp_register_style('pom_css', get_stylesheet_directory_uri() . '/assets/css/home.min.css', array(), '1');
    wp_enqueue_style('pom_ css');
    wp_register_style('contact-us-style', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1');
    wp_enqueue_style('contact-us-style');    
    wp_register_style('contact-us-inner_min', get_stylesheet_directory_uri() . '/assets/css/contactus.min.css', array(), '1');
    wp_enqueue_style('contact-us-inner_min');
    wp_enqueue_style( 'theme-style', 'https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.css', array(), '1.0.0' );
    
  }else if ((is_single() && 'service' == get_post_type())) {

    wp_register_style('pom_css', get_stylesheet_directory_uri() . '/assets/css/home.min.css', array(), '1');
    wp_enqueue_style('pom_ css');
    wp_register_style('single-service-style', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1');
    wp_enqueue_style('single-service-style');    
    wp_register_style('single-service-inner_min', get_stylesheet_directory_uri() . '/assets/css/service.min.css', array(), '1');
    wp_enqueue_style('single-service-inner_min');
    wp_enqueue_style( 'single-service-style', 'https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.css', array(), '1.0.0' );
    
  } else {
    wp_register_style('home_common', get_stylesheet_directory_uri() . '/assets/css/home.min.css', array(), '1');
    wp_enqueue_style('home_common');
  }
}
add_action('wp_enqueue_scripts', 'pomerol_home_enqueue_scripts');


add_action('wp_enqueue_scripts', 'acud_script');
function acud_script()
{
  // wp_register_script("modernizr", 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', '', '', true);
  // wp_enqueue_script('modernizr');
  wp_register_script("script-bootstrap", 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('script-bootstrap');
  if (is_page('home')) {

    wp_register_script("script-aos", 'https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.js', '', '', true);
    wp_enqueue_script('script-aos');

    wp_register_script("owl", get_stylesheet_directory_uri() . '/assets/scripts/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('owl');

    wp_register_script("home-main", get_stylesheet_directory_uri() . '/assets/scripts/home.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('home-main');

    // wp_register_script('load-more-post-js', get_stylesheet_directory_uri() . '/assets/scripts/load-more-post.js', array('jquery'), '1.0.0', true);
    // wp_localize_script('load-more-post-js', 'customAjax', array('ajaxurl' => admin_url('admin-ajax.php')));
    // wp_enqueue_script('load-more-post-js');
    // wp_register_script("common", get_stylesheet_directory_uri() . '/assets/scripts/common.js', array('jquery'), '1.0.0', true);
    // wp_enqueue_script('common');
  } else if (is_page('about-us')) {
    wp_register_script("script-aos", 'https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.js', '', '', true);
    wp_enqueue_script('script-aos');

    wp_register_script("owl", get_stylesheet_directory_uri() . '/assets/scripts/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('owl');

    wp_register_script("home-main", get_stylesheet_directory_uri() . '/assets/scripts/home.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('home-main');
  }else if (is_page('services')) {
    wp_register_script("script-aos", 'https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.js', '', '', true);
    wp_enqueue_script('script-aos');

    wp_register_script("owl", get_stylesheet_directory_uri() . '/assets/scripts/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('owl');

    wp_register_script("home-main", get_stylesheet_directory_uri() . '/assets/scripts/home.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('home-main');
  }else if (is_page('contact-us')) {
    wp_register_script("script-aos", 'https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.js', '', '', true);
    wp_enqueue_script('script-aos');

    wp_register_script("owl", get_stylesheet_directory_uri() . '/assets/scripts/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('owl');

    wp_register_script("home-main", get_stylesheet_directory_uri() . '/assets/scripts/home.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('home-main');
  }
  else if ((is_single() && 'service' == get_post_type())) {

    wp_register_script("single-service-script-aos", 'https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.js', '', '', true);
    wp_enqueue_script('single-service-script-aos');

    wp_register_script("single-service-owl", get_stylesheet_directory_uri() . '/assets/scripts/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('single-service-owl');

    wp_register_script("home-main", get_stylesheet_directory_uri() . '/assets/scripts/home.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('home-main');
  }else {

  }
}




function unhook_parent_style()
{
  wp_dequeue_style('twenty-twenty-one-style');
  wp_deregister_style('twenty-twenty-one-style');

  wp_dequeue_style('twenty-twenty-one-print-style');
  wp_deregister_style('twenty-twenty-one-print-style');
  wp_dequeue_style('parent-style');
  wp_deregister_style('parent-style');
}
add_action('wp_enqueue_scripts', 'unhook_parent_style', 20);

function project_dequeue_unnecessary_scripts()
{
  wp_dequeue_script('twenty-twenty-one-primary-navigation-script');
  wp_deregister_script('twenty-twenty-one-primary-navigation-script');

  wp_dequeue_script('twenty-twenty-one-responsive-embeds-script');
  wp_deregister_script('twenty-twenty-one-responsive-embeds-script');
}
add_action('wp_print_scripts', 'project_dequeue_unnecessary_scripts');

// add_action('wp_enqueue_scripts', 'adt_home_enqueue_scripts');

//remove srcset
function remove_max_srcset_image_width($max_width)
{
  return false;
}
add_filter('max_srcset_image_width', 'remove_max_srcset_image_width');


function gb_theme_customizer( $wp_customize ) {

   $wp_customize->add_section( 'gb_logo_section' , array(
    'title'       => __( 'Footer Logo', 'gb_logo' ),
    'priority'    => 31,
    'description' => '',
  ) );

  $wp_customize->add_setting( 'gb_logo' );


  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'gb_logo', array(
      'label'    => __( 'Footer Logo', 'gb_logo' ),
      'section'  => 'gb_logo_section',
      'settings' => 'gb_logo',
  ) ) );

  $wp_customize->add_setting(
        'footer_content',
        array(
            'default'           => '',
            'transport'         => 'refresh',
            // 'sanitize_callback' => 'wp_kses_post', // Allow html.
						// 'sanitize_callback' => 'asd',
        )
    );
  $wp_customize->add_control(
        'footer_content',
        array(
            'type' => 'textarea',
						'label' => 'Footer Content',
            'section'  => 'gb_logo_section',
        )
    );



}
add_action('customize_register', 'gb_theme_customizer');
add_filter( 'big_image_size_threshold', '__return_false' );

// function add_additional_class($classes, $item, $args){
//   if(isset($args->add_li_class)){
//       $classes[] = $args->add_li_class;
//   }
//   return $classes;
// }

// add_filter('nav_menu_css_class', 'add_additional_class', 1, 3);


add_filter('nav_menu_css_class' , 'v123_nav_class' , 10 , 2 );
function v123_nav_class ($classes, $item) {
    if (in_array('menu-item-has-children', $classes) ){
        $classes[] = 'cc-header-menu-service';
    }
    return $classes;
}








