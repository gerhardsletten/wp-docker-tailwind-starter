<?php get_header(); ?>
<div class="content-wrapper">
  <h1 class="page-title mb-4">
    <?php echo get_the_archive_title(); ?>
  </h1>
  <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
    <?php $first = true; ?>
    <?php if (have_posts()):
      while (have_posts()):
        the_post(); ?>
      <?php
      get_template_part("content", null, ["first" => $first]);
      $first = false;
      ?>
    <?php
      endwhile;
    endif; ?>
  </section>
  <nav class="mb-8 text-center text-base post-nav">
    <?php echo html5wp_pagination(); ?>
  </nav>
</div>
<?php get_footer(); ?>
