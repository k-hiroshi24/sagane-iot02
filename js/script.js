"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  // var topBtn = $('.page-top');
  // topBtn.hide();
  // // ボタンの表示設定
  // $(window).scroll(function () {
  //   if ($(this).scrollTop() > 70) {
  //     // 指定px以上のスクロールでボタンを表示
  //     topBtn.fadeIn();
  //   } else {
  //     // 画面が指定pxより上ならボタンを非表示
  //     topBtn.fadeOut();
  //   }
  // });
  // // ボタンをクリックしたらスクロールして上に戻る
  // topBtn.click(function () {
  //   $('body,html').animate({
  //     scrollTop: 0
  //   }, 300, 'swing');
  //   return false;
  // });
  // // ヘッダー
  // $(window).on('scroll', function () {
  //   if ($('.slider1').height() < $(this).scrollTop()) {
  //     $('.header').css('background', 'rgba(17,17,17,1)');
  //   } else {
  //     $('.header').css('background', 'rgba(17,17,17,0.5)');
  //   }
  // });
  // //ドロワーメニュー
  // $('.navbar_toggle').on('click', function () {
  //   $(this).toggleClass('open');
  //   $('.menu').toggleClass('open');
  // });
  // // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)
  // $(document).on('click', 'a[href*="#"]', function () {
  //   let time = 400;
  //   let header = $('header').innerHeight();
  //   let target = $(this.hash);
  //   if (!target.length) return;
  //   let targetY = target.offset().top - header;
  //   $('html,body').animate({ scrollTop: targetY }, time, 'swing');
  //   return false;
  // });
  ////////トップに戻るボタン スクロール検知/////////////
  jQuery(window).on("scroll", function () {
    // トップから100px以上スクロールしたら
    if (600 < jQuery(this).scrollTop()) {
      // is-showクラスをつける
      jQuery(".js-to_top").addClass("is-show");
    } else {
      // 100pxを下回ったらis-showクラスを削除
      jQuery(".js-to_top").removeClass("is-show");
    }
  });
  jQuery(".js-to_top").click(function () {
    $("body,html").animate({
      scrollTop: 0
    }, 500); //0.5秒かけてトップへ移動

    return false;
  }); ////////////////////ドロワーメニュー///////////////////////////

  jQuery('.js-header-drawer__icon').on('click', function (e) {
    e.preventDefault(); // alert('test');

    jQuery('.js-header-drawer__icon').toggleClass('is_active');
    jQuery('.js-header-drawer__content').toggleClass('is_active'); // jQuery('.drawer_bg').toggleClass('is_active');

    return false;
  });
  jQuery(".drawer__content_item a").on("click", function () {
    // alert('test');
    jQuery(".js-header-drawer__content,.js-header-drawer__icon").removeClass('is_active');
  }); ////////////////////タブ///////////////////////////

  jQuery(function ($) {
    $('.tab').click(function () {
      $('.is-active').removeClass('is-active');
      $(this).addClass('is-active');
      $('.is-show').removeClass('is-show'); // クリックしたタブからインデックス番号を取得

      var index = $(this).index(); // クリックしたタブと同じインデックス番号をもつコンテンツを表

      $('.panel').eq(index).addClass('is-show');
    });
  }); /////////////ヘッダーの色を変える//////////
  // jQuery(window).on('scroll', function () {
  //   var sliderHeight = $(".p-mv, .section-head").height();
  //   if (sliderHeight < jQuery(this).scrollTop()) {
  //     jQuery('.p-top-header').addClass('is-change');
  //     jQuery('.p-top-header__tel').addClass('is-change');
  //   } else {
  //     jQuery('.p-top-header').removeClass('is-change');
  //     jQuery('.p-top-header__tel').removeClass('is-change');
  //   }
  // });

  jQuery(window).on('scroll', function () {
    if (200 < jQuery(this).scrollTop()) {
      jQuery('.p-top-header , .p-top-header__tel').addClass('is-change');
    } else {
      jQuery('.p-top-header , .p-top-header__tel').removeClass('is-change');
    }
  }); ///////////modal////////////////

  jQuery('.js-close-btn , .p-modal-item__bg').on('click', function (e) {
    e.preventDefault(); // alert('click!')

    var target = jQuery(this).data('target');
    jQuery(target).hide();
  });
  jQuery('.js-open-btn').on('click', function (e) {
    e.preventDefault(); // alert('click!')

    var target = jQuery(this).data('target');
    jQuery(target).show();
  }); ///////オープニングアニメーション///////////

  var tl = gsap.timeline();
  tl.fromTo('.js-logo', {
    opacity: 0
  }, {
    duration: 2.5,
    opacity: 1,
    ease: "power1.out",
    delay: 1
  }) ////////////////////////////////////
  .fromTo('.js-opening', {
    opacity: 1 // visibility : visible,

  }, {
    opacity: 0,
    // visibility : hidden,  
    duration: 2.5,
    ease: "power1.out"
  }) //////////////////////////////////////
  .fromTo('.js-opening', {
    height: '100vh'
  }, {
    height: '0vh'
  }); /////// 無限ループ///////////////

  var swiper = new Swiper(".swiper", {
    loop: true,
    // ループ有効
    slidesPerView: 5,
    // 一度に表示する枚数
    speed: 6000,
    // ループの時間
    allowTouchMove: false,
    // スワイプ無効
    autoplay: {
      delay: 0 // 途切れなくループ

    },
    // レスポンシブ 320px〜767pxまでは３枚/768px以上は５枚
    breakpoints: {
      768: {
        slidesPerView: 5,
        spaceBetween: 0
      },
      320: {
        slidesPerView: 3,
        spaceBetween: 0
      }
    }
  });
});