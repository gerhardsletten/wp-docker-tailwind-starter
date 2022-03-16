<article class="">
  <a href="<?php the_permalink(); ?>">
    <div class="mb-2">
      <?php if ( has_post_thumbnail()) : ?>
        <?php
          the_post_thumbnail('medium', array(
            'class' => 'block w-full aspect-video',
            'loading' => $args['first'] ? 'eager' : 'lazy',
            'sizes' => '(max-width: 767px) 90vw, (max-width: 1024px) 45vw',
        )); ?>
      <?php else: ?>
        <div class="bg-primary aspect-video"></div>
      <?php endif; ?>
    </div>
    <h2 class="custom text-xl font-bold">
      <?php the_title(); ?>
    </h2>
  </a>
</article>
