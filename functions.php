<?php
//Adds featured images to posts
  add_theme_support('post-thumbnails');

//Add custom menus
function custom_menus(){
  register_nav_menus( array(
    'header-menu' =>  ('Header Menu'),
    'footer-menu' =>  ('Footer Menu')
  ));

}

add_action('init','custom_menus');
//Adds widget areas
function blank_widgets_init(){

  //Header Widget
  register_sidebar( array(
    'name'          =>  ('Hero Image'),
    'id'            =>  'hero-image',
    'description'   =>  'Hero Image on Home Page',
    'before_widget' =>  '<div class="hero-image-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));


  //Hero Image Widget
  register_sidebar( array(
    'name'          =>  ('Hero Image'),
    'id'            =>  'hero-image',
    'description'   =>  'Hero Image on Home Page',
    'before_widget' =>  '<div class="hero-image-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

  //About Us Text Block Widget
  register_sidebar( array(
    'name'          =>  ('About Us Text Block'),
    'id'            =>  'about-us',
    'description'   =>  'Widget area for About Us section',
    'before_widget' =>  '<div class="about-us">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

  //About Us Image Block Widget
  register_sidebar( array(
    'name'          =>  ('About Us Image Block'),
    'id'            =>  'about-us-image',
    'description'   =>  'Widget area for About Us image section',
    'before_widget' =>  '<div class="about-us-image">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

  //Sidebar Widget
  register_sidebar( array(
    'name'          =>  ('Sidebar'),
    'id'            =>  'sidebar',
    'description'   =>  'Sidebar widget area',
    'before_widget' =>  '<div class="widget-sidebar">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

  //Bottom Left Home Widget
  register_sidebar( array(
    'name'          =>  ('Bottom Left Home'),
    'id'            =>  'bottom-left-home',
    'description'   =>  'Widget area in bottom left',
    'before_widget' =>  '<div class="bottom-left">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

  //Bottom Middle Home Widget
  register_sidebar( array(
    'name'          =>  ('Bottom Middle Home'),
    'id'            =>  'bottom-middle-home',
    'description'   =>  'Widget area in bottom middle',
    'before_widget' =>  '<div class="bottom-middle">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

  //Bottom Right Home Widget
  register_sidebar( array(
    'name'          =>  ('Bottom Right Home'),
    'id'            =>  'bottom-right-home',
    'description'   =>  'Widget area in bottom right',
    'before_widget' =>  '<div class="bottom-right">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  //FOOTER
  //Left Footer
  register_sidebar( array(
    'name'          =>  ('Left Footer'),
    'id'            =>  'left-footer',
    'description'   =>  'Left widget area in the footer',
    'before_widget' =>  '<div class="widget-footer widget-left">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

  //Middle Footer
  register_sidebar( array(
    'name'          =>  ('Middle Footer'),
    'id'            =>  'middle-footer',
    'description'   =>  'Middle widget area in the footer',
    'before_widget' =>  '<div class="widget-footer widget-middle">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

  //Right Footer
  register_sidebar( array(
    'name'          =>  ('Right Footer'),
    'id'            =>  'right-footer',
    'description'   =>  'Right widget area in the footer',
    'before_widget' =>  '<div class="widget-footer widget-right">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

}
add_action('widgets_init','blank_widgets_init');


?>
