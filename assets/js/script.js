//ハンバーガー
jQuery(document).ready(function ($) {
  // メニュー開閉用の処理
  $(".hamburger").on("click", function (event) {
    event.stopPropagation();
    $("#header").toggleClass("open");
    $(".mask").toggleClass("active");
  });

  // メニュー部分はクリックイベントを止める
  $("#header__menu").on("click", function (event) {
    event.stopPropagation();
  });

  // マスクをクリックしたらメニューを閉じる
  $(".mask").on("click", function () {
    $("#header").removeClass("open");
    $(".mask").removeClass("active");
  });

  // ドキュメント全体のクリックイベントでメニューを閉じる
  $(document).on("click", function () {
    if ($("#header").hasClass("open")) {
      $("#header").removeClass("open");
      $(".mask").removeClass("active");
    }
  });
});

//ヘッダーメニュークリックで閉じる
document.querySelectorAll('.header__link').forEach(link => {
  link.addEventListener('click', function() {
      document.querySelector('.header').classList.remove('open'); 
      document.querySelector('.mask').classList.remove('active'); 
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
          scrollTo: { y: targetElement, offsetY: 0, autokill: true },
        });
      }
    });
  });
});


// swiper
const swiper = new Swiper('.swiper', {
  centeredSlides: true,
  slidesPerView: 1,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  // 1024px以上で1.371428571429
  breakpoints: {
    769: {
      slidesPerView: 1.19523809524,
    },
    1025: {
      slidesPerView: 1.371428571429,
    },
  },
});

//モーダル
document.addEventListener('DOMContentLoaded', function() {
  const modal = document.getElementById('structure__item-3');
  const modalTrigger = document.getElementById('structure__popup');
  const modalClose = document.getElementById('structure__item-close');
  const modalOverlay = document.getElementById('structure__item-overlay');
  if (modalTrigger) {
    modalTrigger.addEventListener('click', function() {
      modal.classList.add('is-open');
      modalOverlay.classList.add('is-open');
    });
  }

  if (modalClose) {
    modalClose.addEventListener('click', function() {
      modal.classList.remove('is-open');
      modalOverlay.classList.remove('is-open');
    });
  }

  if (modalOverlay) {
    modalOverlay.addEventListener('click', function() {
      modal.classList.remove('is-open');
      modalOverlay.classList.remove('is-open');
    });
  }
});

