<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <h2><?php the_title(); ?></h2>
  <?php the_content(); ?>
  <a href="<?php the_permalink(); ?>">Permalink</a>

<?php endwhile; endif; ?>

<?php the_posts_pagination(); ?>

<?php get_footer(); ?>
