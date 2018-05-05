<?php

//Set Up
add_theme_support('menu');
add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'caption' ) );
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('post-formats', array('link', 'quote', 'aside', 'gallery'));
add_theme_support('custom-logo');

//Includes
include(get_template_directory() . '/inc/enqueue.php');
include(get_template_directory() . '/inc/fsd_setup.php');
require get_template_directory() . '/inc/template-tags.php';

//Action and Filter Hooks
add_action('wp_enqueue_scripts', 'fsd_enqueue_scripts' );
add_action('after_setup_theme', 'fsd_setup_theme');
add_filter( 'excerpt_more', 'fsd_excerpt_more' );
add_filter('excerpt_length', 'fsd_excerpt_length');
add_action( 'init', 'fsd_custom_slider' );
