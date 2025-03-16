<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WTVNK49X');
  </script>
  <!-- End Google Tag Manager -->

  <!--Google font-->
 <!-- プリコネクト -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- JavaScript あり用 -->
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Aguafina+Script&family=Shippori+Gothic+B2:wght@400;700&display=swap" as="style" onload="this.rel='stylesheet'">

<!-- JavaScript なし用のフォールバック -->
<noscript>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Aguafina+Script&family=Shippori+Gothic+B2:wght@400;700&display=swap">
</noscript>
  <!-- swiper -->
  <!--  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> -->
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WTVNK49X"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header class="header">
    <div class="header__inner"> 
        <h1><span>インドアゴルフ</span>no<br class="sp-only">コンシェルジュ</h1>
        <a href="<?php echo esc_url(home_url('#contact')); ?>" class="header__link link">
         お問い合わせ
        </a>
    </div>
  </header>
