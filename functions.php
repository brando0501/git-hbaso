<?php

function load_stylesheets()
{

  wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
  wp_enqueue_style('stylesheet');

  wp_register_style('custom', get_template_directory_uri() . '/design/app.css', '', 1, 'all');
  wp_enqueue_style('custom', get_stylesheet_uri(), array(), filemtime(get_template_directory()) );
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function load_javascript()
{

  /*wp_register_script('masonryJS', get_template_directory_uri() . '/src/masonry_min.js', 'jquery', 1, false);
  wp_enqueue_script('masonryJS');*/


/*  wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1, false);
  wp_enqueue_script('custom');*/


  wp_register_script('appJS', get_template_directory_uri() . '/src/app.js', array('jquery') , 1, true);
  wp_enqueue_script('appJS');

  wp_register_script('carouselJS', get_template_directory_uri() . '/src/carousel.js', array('jquery') , 1, true);
  wp_enqueue_script('carouselJS');

/*  wp_register_script('fire', get_template_directory_uri() . '/src/movingFire.js', array('jquery') , 1, true);
  wp_enqueue_script('fire');*/

  //wp_register_script('testJS2', get_template_directory_uri() . '/test.js', array('jquery') , 1, false);
  //wp_enqueue_script('testJS2');




}
add_action('wp_enqueue_scripts', 'load_javascript');



//Add support
add_theme_support('menus');
add_theme_support('post-thumbnails');

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


//Register some menus
register_nav_menus(

  array(
    'desktop-menu' => 'Top Menu',
    'mobile-menu' => __( 'Mobile Menu', 'wdm' )
  )

);

//Add image sizes
add_image_size('post_image', 1100, 550, false);


//Add a widget
register_sidebar(
  array(
    'name'=>'Page Sidebar',
    'id'=>'page-sidebar',
    'class'=>'',
    'before_title'=>'<h4>',
    'after_title'=>'</h4>',
  )
);

register_sidebar(
  array(
    'name'=>'Blog Sidebar',
    'id'=>'blog-sidebar',
    'class'=>'',
    'before_title'=>'<h4>',
    'after_title'=>'</h4>',
  )
);
