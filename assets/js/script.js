//ハンバーガー
jQuery(document).ready(function ($) {
  // メニュー開閉用の処理
  $(".hamburger").on("click", function (event) {
    event.stopPropagation();
    $("#header").toggleClass("open");
  });

  // メニュー部分はクリックイベントを止める
  $("#header__menu").on("click", function (event) {
    event.stopPropagation();
  });

  // ドキュメント全体のクリックイベントでメニューを閉じる
  $(document).on("click", function () {
    if ($("#header").hasClass("open")) {
      $("#header").removeClass("open");
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

