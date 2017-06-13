<?php
function brainworks_enqueues() {

  /* Styles */

  wp_register_style('style-css', get_template_directory_uri() . '/style.css', false, null);
  wp_enqueue_style('style-css');

  wp_register_style('lightbox-css', get_template_directory_uri() . '/css/lightbox.min.css', false, null);
  wp_enqueue_style('lightbox-css');

  /* Scripts */
  //wp_register_script('html5shiv', 'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', array(), null, false);
  //wp_register_script('respond', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', array(), null, false);
  wp_register_script('ie8', get_template_directory_uri() . '/js/ie8.min.js', array(), null, false);

  //wp_enqueue_script('html5shiv');
  //wp_enqueue_script('respond');
  wp_enqueue_script('ie8');

  wp_script_add_data('html5shiv', 'conditional', 'lt IE 9');
  wp_script_add_data('respond', 'conditional', 'lt IE 9');

  //wp_register_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array(), null, true);
  wp_register_script('modernizr', get_template_directory_uri() . '/js/libs/modernizr-custom.min.js', array(), null, true);
  wp_enqueue_script('modernizr');

  //wp_deregister_script('jquery');
  //wp_register_script('jquery', get_template_directory_uri() . '/js/libs/jquery.min.js', array(), null, true);
  //wp_enqueue_script('jquery');

  wp_register_script('lightbox-js', get_template_directory_uri() . '/js/libs/lightbox.min.js', array('jquery'), null, true);
  wp_enqueue_script('lightbox-js');

  wp_register_script('brainworks-js', get_template_directory_uri() . '/js/common.js', array('jquery'), null, true);
  wp_enqueue_script('brainworks-js');


  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}

add_action('wp_enqueue_scripts', 'brainworks_enqueues', 100);