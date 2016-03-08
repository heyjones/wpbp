<?php

function wp_enqueue_style(){
  wp_enqueue_style( 'wpbp', get_template_directory() . '/dist/styles/wpbp.css' );
}
add_action( 'wp_enqueue_style', array( $this, wpbp_enqueue_style ) );

function wpbp_enqueue_scripts(){
  wp_deregister_script( 'jquery' );
  wp_enqueue_script( 'wpbp', get_template_directory() . '/dist/scripts/wpbp.js', array( 'jquery' ), NULL, true );
}
add_action( 'wp_enqueue_scripts', array( $this, wpbp_enqueue_scripts ) )
