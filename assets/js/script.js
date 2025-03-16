//ハンバーガー
jQuery(document).ready(function ($) {
  // メニュー開閉用の処理
  $(".hamburger").on("click", function (event) {
    event.stopPropagation();
    $("#header").toggleClass("open");
    $("body").css("overflow", $("#header").hasClass("open") ? "hidden" : "");
  });

  // メニュー部分はクリックイベントを止める
  $("#header__menu").on("click", function (event) {
    event.stopPropagation();
  });

  // ドキュメント全体のクリックイベントでメニューを閉じる
  $(document).on("click", function () {
    if ($("#header").hasClass("open")) {
      $("#header").removeClass("open");
      $("body").css("overflow", "");
    }
  });
});

//ヘッダーメニュークリックで閉じる
document.querySelectorAll('.header__link').forEach(link => {
  link.addEventListener('click', function() {
      document.querySelector('.header').classList.remove('open'); 
  });
});

// ページトップ

jQuery(document).ready(function () {
  var pagetop = jQuery("#page-top");

  pagetop.click(function () {
    jQuery("html").animate({ scrollTop: 0 }, { duration: 300, queue: false });
    return false;
  });
});


//fadeIn
document.addEventListener("DOMContentLoaded", function () {
  let triggerEffects = document.querySelectorAll(".fadeIn");
  gsap.set(".fadeIn", { y: 40, autoAlpha: 0 });

  triggerEffects.forEach((trigger) => {
    let tl = gsap.timeline({
      scrollTrigger: {
        trigger: trigger,
        start: "top 95%",
       /*  markers: true, */
      },
    });
    tl
    .fromTo(
      trigger,
      { y: 40, autoAlpha: 0 },
      { y: 0, autoAlpha: 1, stagger: 0.2, delay: 0.5 ,duration: 0.2}
    );
  });
});

document.addEventListener("DOMContentLoaded", function () {
  let triggerEffects = document.querySelectorAll(".fadeIn-title");
  gsap.set(".fadeIn-title", { y: 40, autoAlpha: 0 });

  triggerEffects.forEach((trigger) => {
    let tl = gsap.timeline({
      scrollTrigger: {
        trigger: trigger,
        start: "top 80%",
       /*  markers: true, */
      },
    });
    tl
    .fromTo(
      trigger,
      { y: 40, autoAlpha: 0 },
      { y: 0, autoAlpha: 1, stagger: 0.2, delay: 0.5 }
    );
  });
});

//あこーでぃおん

jQuery(document).ready(function () {
  var firstAccordion = jQuery("#firstAccordion");
  firstAccordion.find(".accordion_inner").show().addClass("active");
  firstAccordion.find(".accordion_header").addClass("active");

  var accordionWrapper = jQuery(".accordion_wrapper");

  accordionWrapper.click(function () {
    var accordionInner = jQuery(this).find(".accordion_inner");
    var accordionHeader = jQuery(this).find(".accordion_header");
    var isActive = accordionInner.hasClass("active");
    accordionInner.slideToggle().toggleClass("active");
    accordionHeader.toggleClass("active");
    if (!isActive) {
      jQuery(".accordion_inner")
        .not(accordionInner)
        .slideUp()
        .removeClass("active");
      jQuery(".accordion_header").not(accordionHeader).removeClass("active");
    }
  });
});

//ページ内リンク
document.addEventListener("DOMContentLoaded", function () {
  gsap.registerPlugin(ScrollToPlugin);
  const anchors = document.querySelectorAll(
    ".link"
  );
  anchors.forEach((anchor) => {
    anchor.addEventListener("click", (e) => {
      e.preventDefault();
      // URLからハッシュ部分を抽出
      const targetSelector = anchor.getAttribute("href").split("#")[1];
      const targetElement = document.querySelector("#" + targetSelector);
      if (targetElement) {
        gsap.to(window, {
          duration: 0.5,
          ease: "power2.out",
          scrollTo: { y: targetElement, offsetY: 50, autokill: true },
        });
      }
    });
  });
});

// セレクトボックスの色設定
document.querySelectorAll('select.wpcf7-select').forEach(select => {
  select.addEventListener('change', function() {
      if (this.value === '') {
          this.style.color = '#9E9E9E';
      } else {
          this.style.color = '';
      }
  });

  // 初期表示時の色設定
  if (select.value === '') {
      select.style.color = '#9E9E9E';
  }
});

// スライダー
const swiper = new Swiper('.swiper', {
  // 基本設定
  slidesPerView: 1,  // 一度に表示するスライド数
  spaceBetween: 30,  // スライド間のスペース
  loop: true,
  speed: 1000,
  autoplay: {
    delay: 1000,
    disableOnInteraction: false,
  },

  // ページネーション設定
  pagination: {
      el: '.swiper-pagination',
      clickable: true, // クリック可能にする
  },

  // ナビゲーション矢印設定
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
});

// modal
document.addEventListener("DOMContentLoaded", () => {
  const modalClose = document.querySelectorAll('[data-modal="close"]');
  const modalBg = document.querySelector('[data-modal="bg"]');
  const modalInner = document.querySelector('[data-modal="inner"]');
  const modalOpen = document.getElementById('modal-open');
  
  function closeModal() {
    modalBg.classList.remove("is-active");
    modalInner.classList.remove("is-active");
  }

  modalOpen.addEventListener("click", (e) => {
    e.preventDefault();
    modalBg.classList.add("is-active");
    modalInner.classList.add("is-active");
  });

  modalBg.addEventListener("click", closeModal);
  modalClose.forEach(closeBtn => closeBtn.addEventListener("click", closeModal));

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") closeModal();
  });
});

//fv読み込み
window.onload = function() {
  var fvElement = document.querySelector('.fv');
  var backgroundImage = new Image();
  var imageUrl = '../images/pc/fv.webp';
  var aspectRatio = '1440 / 600'; // 初期のPC用アスペクト比
  
  // スマホサイズの場合は別の画像を使用
  if (window.innerWidth <= 768) {
    imageUrl = '../images/sp/fv.webp';
    aspectRatio = '390 / 600';  // スマホ用アスペクト比
  }
  
  // 画像の先読み
  backgroundImage.onload = function() {
    // 画像が読み込まれた後に背景として設定
    fvElement.style.backgroundImage = 'url(' + imageUrl + ')';
    fvElement.style.aspectRatio = aspectRatio;  // アスペクト比を設定
  };
  
  // 読み込み開始
  backgroundImage.src = imageUrl;
};