<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


  <!--Google font-->
  <!-- プリコネクト -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 -->
  <!-- JavaScript あり用 -->
  <!-- <link rel="preload" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Aguafina+Script&family=Shippori+Gothic+B2:wght@400;700&display=swap" as="style" onload="this.rel='stylesheet'">
 -->
  <!-- JavaScript なし用のフォールバック -->
  <!-- <noscript>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Aguafina+Script&family=Shippori+Gothic+B2:wght@400;700&display=swap">
</noscript> -->

  <!-- swiper -->
  <!--  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> -->
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <header id="header" class="header">
    <div class="header__inner u-flex">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo logo">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo-blue.webp" alt="ホーム" width="91" height="103" />
      </a>
      <nav id="header__navi" class="header__navbar">
        <div class="header__nav-inner">

          <ul class="header__menu u-flex">
            <li class="header__list">
              <a class="header__link link" href="<?php echo esc_url(home_url('/#about')); ?>">
                私たちについて
              </a>
            </li>
            <li class="header__list">
              <a class="header__link link" href="<?php echo esc_url(home_url('/#worries')); ?>">
                こんなお悩みありませんか？
              </a>
            </li>
            <li class="header__list">
              <a class="header__link link" href="<?php echo esc_url(home_url('/#solution')); ?>">
                対応サービス一覧
              </a>
            </li>
            <li class="header__list">
              <a class="header__link link" href="<?php echo esc_url(home_url('/#reason')); ?>">
                選ばれる3つの理由
              </a>
            </li>
            <li class="header__list">
              <a class="header__link link" href="<?php echo esc_url(home_url('/#price')); ?>">
                料金について
              </a>
            </li>
            <li class="header__list">
              <a class="header__link link" href="<?php echo esc_url(home_url('/#use')); ?>">
                導入事例
              </a>
            </li>
            <li class="header__list">
              <a class="header__link link" href="<?php echo esc_url(home_url('/#structure')); ?>">
                助っ人さんの仕組み
              </a>
            </li>
            <li class="header__list">
              <a class="header__link link" href="<?php echo esc_url(home_url('/#faq')); ?>">
                よくある質問
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="hamburger-inner">
        <div class="logo-images">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/omito-logo-blue.webp" media=" (min-width: 769px)" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sp/omito-logo-blue.webp" alt="ホーム" width="101" height="32" />
          </picture>
        </div>

        <div class="hamburger">
          <div class="hamburger__line">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>

      </div>
    </div><!-- / -->
    <!-- /.header__inner -->
    <div class="mask"></div><!-- /.mask -->
  </header>
 

  <div class="floating">
    <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="floating__inner link">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/mail-icon-white.webp" alt="" width="35" height="35"> 
    <p>お問い合わせ・無料相談</p>
    </a>
  </div>