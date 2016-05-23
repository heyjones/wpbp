<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <h1><?php echo bloginfo( 'name' ); ?></h1>
  <p><?php echo bloginfo( 'description' ); ?></p>
