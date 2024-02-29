</main>
<footer class="footer py-4 sticky" style="top: 100vh">
  <div class="content-wrapper text-base">
    <div class="text-sm text-center">
     <?php echo get_bloginfo("name"); ?> © <?php echo date("Y"); ?>
      <?php echo get_theme_mod("themeconfig_footer_text", ""); ?>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
