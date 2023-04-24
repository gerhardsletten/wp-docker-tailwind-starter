<?php
/* Template Name: Frontpage */
?>
<?php get_header(); ?>
<?php if (have_posts()):
  while (have_posts()):
    the_post(); ?>
<article class="grid grid-cols-1 gap-8 mb-12">
  <section class="content-wrapper">
    <?php the_content(); ?>
  </section>
  <section class="contents md:flex">
    <div class="md:w-1/2 bg-primary aspect-video flex items-center justify-center text-white">image</div>
    <div class="content-wrapper md:mx-auto md:pl-4 flex-1">
      <div class="bg-gray-200 p-4">Some text</div>
    </div>
  </section>
  <section class="content-wrapper">
    Noe etter
  </section>
</article>
<?php
  endwhile;
endif; ?>
<?php get_footer(); ?>
