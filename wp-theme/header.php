<!doctype html>
<html <?php language_attributes(); ?> class="h-full">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
  </head>
<body <?php body_class("text-xl h-full"); ?> id="body">
<header class="py-4 lg:py-8 bg-slate-200 mb-4">
  <div class="content-wrapper">
    <div class="flex items-center justify-between">
      <a href="/" class="w-44 lg:w-64" aria-label="<?php echo get_bloginfo( 'name' )?>">
        <?php get_template_part('parts/logo'); ?>
      </a>
      <button onclick="document.getElementById('body').classList.toggle('show-nav')" class="lg:hidden text-primary" aria-label="Vis navigasjon">
        <?php get_template_part('icons/burger'); ?>
      </button>
      <nav class="main-nav hidden lg:flex items-center">
        <?php html5blank_nav(); ?>
      </nav>
    </div>
  </div>
  
</header>
<aside class="mobile-overlay fixed left-0 w-full pt-16 bg-slate-800 text-white bottom-0 hidden z-50" style="top: var(--body-offset)">
  <button onclick="document.getElementById('body').classList.toggle('show-nav')" class="a absolute top-3 right-2 p-2" aria-label="Skjul navigasjon">
    <?php get_template_part('icons/x'); ?>
  </button>
  <div class="content-wrapper">
    <nav class="mobile-nav ">
      <?php html5blank_nav(); ?>
    </nav>
  </div>
</aside>
<button onclick="document.getElementById('body').classList.toggle('show-nav')" style="top: var(--body-offset)" class="mobile-overlay  left-0 w-full bottom-0 fixed hidden"></button>
<main>
  
