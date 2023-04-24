<?php get_header(); ?>
<?php if (have_posts()):
  while (have_posts()):
    the_post(); ?>
  <article class="content-wrapper">
    <div class="lg:w-9/12 mx-auto">
      <h1 class="page-title mb-4">
        <?php the_title(); ?>
      </h1>
      <div class="markup mb-4">
        <?php the_content(); ?>
      </div>
    </div>
  </article>
<?php
  endwhile;
endif; ?>
<?php get_footer(); ?>
