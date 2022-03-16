<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('content-wrapper'); ?>>
      <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
        <div class="mb-6">
          <?php the_post_thumbnail('large', array(
            'class' => 'block w-full aspect-video'
          )); ?>
        </div>
      <?php endif; ?>
      <h1 class="page-title mb-4">
        <?php the_title(); ?>
      </h1>
      <div class="markup mb-4">
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; endif; ?>
<?php get_footer(); ?>
