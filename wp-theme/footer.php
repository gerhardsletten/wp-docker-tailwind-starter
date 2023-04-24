</main>
<footer class="footer py-4 bg-slate-200 sticky" style="top: 100vh">
  <div class="content-wrapper text-base">
    <div class="mx-auto max-w-xl mb-4">
      <?php if (
        !function_exists("dynamic_sidebar") ||
        !dynamic_sidebar("widget-footer")
      ); ?>
    </div>
    <nav class="flex items-center justify-center gap-4 mb-4">
      <?php foreach (["facebook", "instagram"] as $item): ?>
        <?php $url = get_theme_mod(sprintf("themeconfig_%s", $item)); ?>
        <?php if ($url): ?>
          <a href="<?php echo $url; ?>" class="h-12 w-12 rounded-full bg-primary text-white flex items-center justify-center">
            <?php get_template_part(sprintf("icons/%s", $item)); ?>
          </a>
        <?php endif; ?>
      <?php endforeach; ?>
    </nav>
    <div class="text-sm text-center">
     <?php echo get_bloginfo("name"); ?> © <?php echo date("Y"); ?>
      <?php echo get_theme_mod("themeconfig_footer_text", ""); ?>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
