<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: フッター
*/
?>

<footer class="footer footer--background-blue">
  <div class="footer__inner">
    <div class="footer__container">
      <div class="footer__left">
        <div class="footer__logo">
          <a href="<?php echo home_url("/"); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo-white.webp" alt="HOME" class="footer__logo-image" width="120" height="134">
          </a>
        </div>
      </div>
      <div class="footer__right">
        <div class="footer__menu">
          <a href="<?php echo home_url("/#nayami"); ?>" class="footer__menu-item">私たちについて&emsp;|</a>
          <a href="<?php echo home_url("/#senmon"); ?>" class="footer__menu-item">こんなお悩みありませんか？&emsp;|</a>
          <a href="<?php echo home_url("/#hissu"); ?>" class="footer__menu-item">対応サービス一覧</a>
          <a href="<?php echo home_url("/#kodawari"); ?>" class="footer__menu-item">選ばれる3つの理由&emsp;|</a>
          <a href="<?php echo home_url("/#plan"); ?>" class="footer__menu-item">料金について&emsp;|</a>
          <a href="<?php echo home_url("/#flow"); ?>" class="footer__menu-item">導入事例&emsp;|</a>
          <a href="<?php echo home_url("/#company"); ?>" class="footer__menu-item">助っ人さんの仕組み</a>
          <a href="<?php echo home_url("/#faq"); ?>" class="footer__menu-item">よくある質問&emsp;|</a>
          <a href="<?php echo home_url("/#company"); ?>" class="footer__menu-item">会社情報&emsp;|</a>
          <a href="https://www.omi-in.co.jp/policy" target="_blank" class="footer__menu-item">プライバシー･ポリシー</a>
        </div>
        <div class="footer__logo-second">
          <p class="footer__logo-second-text">会えるから、情熱が伝わる</p>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pc/omito-logo.webp" class="footer__logo-second-image" width="115" height="31" alt="OMITOのロゴ">
        </div>
      </div>
    </div>
  </div>
  <div class="footer__copyright">
    <div class="footer__inner">
      <div class="footer__row">
        <p class="footer__copyright-text">©2024 OMITO All Rights Reserved.</p>
        <p class="footer__ban-text">テキストおよび画像データの無断転載を禁じます。</p>
      </div>
    </div>
  </div>
  </div><!-- /.footer__inner -->
  <div class="pageTop__btn" id="page-top">
    <a class="pageTop__link" href="<?php echo home_url("/"); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-arrow.png" alt="topへ" width="22" height="21">
    </a>
  </div>
</footer>

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