<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: フッター
*/
?>

<footer class="bk-blue">
  <div class="pagetop">
    <a href="#top" aria-label="top"><img src="/rikuel/wp-content/uploads/2024/06/footer-go.png" alt="トップページへGO"></a>
  </div>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-3 text-center">
        <img src="/rikuel/wp-content/uploads/2024/06/footer-rikuel-omito.svg" alt="リクエル OMITO" class="footer-rikuel-omito">
      </div>
      <div class="coi-12 col-md-7 offset-md-2 footer-menu">
        <a href="/rikuel/#nayami">このようなお悩みありませんか？</a> | <a href="/rikuel/#senmon">採用サイト制作専門だからココが違う</a> | <a href="/rikuel/#hissu">採用サイトは必要です</a> | <a href="/rikuel/#kodawari">リクエルのこだわり</a> |
        <a href="/rikuel/#plan">料金プラン</a> | <a href="/rikuel/#flow">完成までの流れ</a> | <a href="/rikuel/#company">運営会社</a> | <a href="https://www.omi-in.co.jp/policy" target="_blank">プライバシー･ポリシー </a>
        <div class="row justify-content-end">
          <div class="col-12" style="padding-top:120px">
            <img src="/rikuel/wp-content/uploads/2024/06/footer-logo-omito.svg" style="width:50%;">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cop text-white">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-5">
          <p class="text-copy">©2024 OMITO All Rights Reserved.</p>
        </div>
        <div class="col-12 col-md-7">
          <p class="text-ban">テキストおよび画像データの無断転載を禁じます。</p>
        </div>
      </div>
    </div>
  </div>
</footer>


<!-- ページトップ -->
<div class="pageTop__btn" id="page-top">
  <a class="pageTop__link" href="<?php echo home_url("/"); ?>">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-arrow.png" alt="topへ" width="22" height="21">
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