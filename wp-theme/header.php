<!doctype html>
<html <?php language_attributes(); ?> class="h-full">
  <head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <title><?php
    wp_title("");
    if (wp_title("", false)) {
      echo " :";
    }
    ?> <?php bloginfo("name"); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo("description"); ?>">
    <?php wp_head(); ?>
  </head>
<body <?php body_class("text-xl h-full"); ?> id="body">
<header class="py-4 lg:py-8 bg-slate-200 mb-4">
  <div class="content-wrapper">
    <div class="flex items-center justify-between">
      <a href="<?php echo home_url( '/' ); ?>" class="w-44 lg:w-64" aria-label="<?php echo get_bloginfo(
        "name"
      ); ?>">
        <?php get_template_part("parts/logo"); ?>
      </a>
      <button onclick="document.querySelector('#mobileMenu').showModal()" class="lg:hidden text-primary p-2" aria-label="Vis navigasjon">
        <?php get_template_part("icons/burger"); ?>
      </button>
      <nav class="main-nav hidden lg:flex items-center gap-4">
        <?php html5blank_nav(); ?>
      </nav>
    </div>
  </div>
</header>
<dialog
  id="mobileMenu"
  class="fixed left-0 top-[var(--body-offset)] w-full md:left-auto md:w-[400px] right-0 md:shadow bg-primary text-white bottom-0 z-50 overflow-y-auto animate-slide-right backdrop:bg-black backdrop:bg-opacity-20 max-h-full max-w-full m-0 p-0 h-full"
>
  <div data-content class="contents">
    <form method="dialog" class="contents">
      <button class="absolute top-4 right-4 p-2 flex items-center justify-center gap-2 text-base" aria-label="Close menu" tabindex="-1">
        <?php get_template_part("icons/x"); ?>
        Close menu
      </button>
    </form>
    <nav class="mobile-nav grid grid-cols-1 gap-px p-4 px-6">
      <?php html5blank_nav(); ?>
    </nav>
  </div>
</dialog>
<script is:inline>
  (function () {
    const dialog = document.querySelector("#mobileMenu");
    if (dialog) {
      dialog.addEventListener("click", () => dialog.close());
      const dialogContent = dialog.querySelector("[data-content]");
      dialogContent.addEventListener("click", (event) =>
        event.stopPropagation()
      );
    }
    // Debug sidebar
    // dialog.showModal()
  })();
</script>
<main>
  
