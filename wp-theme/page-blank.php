<?php /* Template Name: Forside */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<article class="content-wrapper">
  <?php the_content(); ?>
</article>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
