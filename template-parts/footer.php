<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: フッター
*/
?>
<footer class="footer" id="footer">
  <p><small>&copy;2025 Inboost,inc - All Rights Reserved</small></p>

</footer><!-- /.footer -->
<div class="pageTop__btn" id="page-top">
  <a class="pageTop__link" href="<?php echo home_url("/"); ?>">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-arrow.png" alt="topへ" width="16" height="20">
  </a>
</div>

<script
  src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
  integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer">
</script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="<?php echo esc_url(get_theme_file_uri('/assets/js/script.js')); ?>"></script>

<?php wp_footer(); ?>
</body>

</html>