<?php

if( !class_exists( 'wpbp' ) ){

  class wpbp{

    public function __construct(){
      add_action( 'wp_enqueue_scripts', array( $this, 'wpbp_enqueue_scripts' ) );
      add_theme_support( 'title-tag' );
    }

    function wpbp_enqueue_scripts(){
      wp_deregister_script( 'jquery' );
      wp_enqueue_style( 'wpbp-styles', get_template_directory_uri() . '/dist/styles/wpbp.css' );
      wp_enqueue_script( 'wpbp-scripts', get_template_directory_uri() . '/dist/scripts/wpbp.js', NULL, NULL, true );
      wp_enqueue_style( 'wpbp-icons', get_template_directory_uri() . '/dist/icons/wpbp.css' );
    }

  }

  $wpbp = new wpbp();

}
