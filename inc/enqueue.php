<?php

function fsd_enqueue_scripts (){

  wp_register_style('fsd_bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css');
  wp_register_style('fsd_font-awsome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_register_style('fsd_font-google', 'https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700"');
  wp_register_style('fsd_animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css');
  wp_register_style('fsd_style', get_template_directory_uri() . '/style.css');

  wp_enqueue_style('fsd_bootstrap');
  wp_enqueue_style('fsd_font-awsome');
  wp_enqueue_style('fsd_font-google');
  wp_enqueue_style('fsd_style');

  wp_register_script('fsd_popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', array(), false, true);
  wp_register_script('fsd_bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', array(), '', true);
  wp_register_script('fsd_wow', get_template_directory_uri() . '/js/wow.min.js', array(), false, true);
  wp_register_script('fsd_script', get_template_directory_uri() . '/js/script.js', array(), false, true);


  wp_enqueue_script('jquery');
  wp_enqueue_script('fsd_popper');
  wp_enqueue_script('fsd_bootstrap');
  wp_enqueue_script('fsd_script');
}
