<?php

namespace wpbp;

add_action( 'init', __NAMESPACE__ . '\\init' );
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\wp_enqueue_scripts' );

function init(){
  add_theme_support( 'title-tag' );
}

function wp_enqueue_scripts(){
  wp_deregister_script( 'jquery' );
  if( file_exists( get_template_directory() . '/dist/styles/wpbp.css' ) ) wp_enqueue_style( 'wpbp-styles', get_template_directory_uri() . '/dist/styles/wpbp.css', NULL, filemtime( get_template_directory() . '/dist/styles/wpbp.css' ) );
  if( file_exists( get_template_directory() . '/dist/icons/wpbp.css' ) ) wp_enqueue_style( 'wpbp-icons', get_template_directory_uri() . '/dist/icons/wpbp.css', NULL, filemtime( get_template_directory() . '/dist/icons/wpbp.css' ) );
  if( file_exists( get_template_directory() . '/dist/scripts/wpbp.js' ) ) wp_enqueue_script( 'wpbp-scripts', get_template_directory_uri() . '/dist/scripts/wpbp.js', NULL, filemtime( get_template_directory() . '/dist/scripts/wpbp.js' ), true );
}
