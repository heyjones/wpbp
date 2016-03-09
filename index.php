<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php wp_title(); ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <?php wp_head(); ?>
</head>
<body>

  <h1>WPBP</h1>
  <p>A WordPress Boilerplate Theme</p>

  <?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
      <a href="<?php the_permalink(); ?>">Permalink</a>

      <?php
    }
  }
  ?>

  <?php the_posts_pagination(); ?>

  <?php wp_footer(); ?>
</body>
</html>
