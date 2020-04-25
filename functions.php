<?php

function register_styles()
{
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('bootstrap-blog-style', get_template_directory_uri() . "/style.css", array('bootstrap-blog-bootstrap'), $version, 'all');
  wp_enqueue_style('bootstrap-blog-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
  wp_enqueue_style('bootstrap-blog-font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'register_styles');

function register_scripts()
{
  wp_enqueue_script('bootstrap-blog-bootstrap', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
  wp_enqueue_script('bootstrap-blog-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
  wp_enqueue_script('bootstrap-blog-bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
  wp_enqueue_script('bootstrap-blog-js', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'register_scripts');

function register_widgets()
{
  register_sidebar(
    array(
      'name' => 'Sidebar',
      'id' => 'sidebar',
      'description' => 'Sidebar Widget Area'
    )
  );

  register_sidebar(
    array(
      'name' => 'Categories',
      'id' => 'category',
      'description' => 'Category Widget Area',
      'before_title' => '<h2>',
      'after_title' => '</h2>',
      'before_widget' => '',
      'after_widget' => ''
    )
  );
}

add_action('widgets_init', 'register_widgets');
