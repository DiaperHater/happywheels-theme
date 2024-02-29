<?php

define('DEBUG', false);

if (!defined('S_VERSION')) {
  define('S_VERSION', DEBUG ? microtime() : '1.0.0');
}

add_theme_support('title-tag');

if (!is_admin()) {

  function happywheels_theme_setup()
  {

    // Styles
    wp_enqueue_style('swiper-styles', get_theme_file_uri('/assets/css/swiper.min.css'), array(), '10.0.5', 'all');
    wp_enqueue_style('happywheels-fonts', get_theme_file_uri('/assets/css/fonts.css'), array(), S_VERSION, 'all');
    wp_enqueue_style('happywheels-styles', get_theme_file_uri('/assets/css/styles.css'), array('happywheels-fonts'), S_VERSION, 'all');

    // Scripts    
    wp_enqueue_script('swiper-script', get_theme_file_uri('/assets/js/swiper-bundle.min.js'), array(), '10.0.5', true);
    wp_enqueue_script('happywheels-script', get_theme_file_uri('/assets/js/main.js'), array('swiper-script'), '1.0.0', true);
  }
  add_action('after_setup_theme', 'happywheels_theme_setup');
}

function happywheels_admin_theme_setup()
{
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'happywheels_admin_theme_setup');


function register_custom_post_types()
{
  register_post_type(
    'testimonial',
    array(
      'labels'      => array(
        'name'          => __('Testimonials', 'happywheels'),
        'singular_name' => __('Testimonial', 'happywheels'),
      ),
      'public'      => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-testimonial',
      'supports' => array('title')
    )
  );
}
add_action('init', 'register_custom_post_types');

// CF7
add_filter('wpcf7_autop_or_not', '__return_false');
