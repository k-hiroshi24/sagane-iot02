<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>サガネ係長のIoT</title>
  <meta name="description" content="日進製作所の製造現場で厳格な生産管理を行う現場係長の視点から、費用対効果を生み出すことにこだわって開発されたIoTシステムです。" />
  <meta name="keywords" content="サガネ,サガネ係長,サガネ係長のIoT,日進IoT,IoT" />
  <!-- ogp -->
  <!-- <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <meta name="twitter:card" content="summary" /> -->

  <?php wp_head(); ?>
  <!-- ファビコン -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/common/sagane-logo-blue.png" />
  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
  <!-- gsap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
  <!-- swiper -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script defer src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
</head>

<body>

  <header>
    <div class="l-top-header p-top-header">
      <div class="p-top-header__inner">
        <div class="p-top-header__left">
          <h1 class="p-top-header__logo">
            <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/common/co-logo.png" alt="ロゴ"></a>
          </h1>
          <div class="p-top-header__tel">
            <span>資料請求・お問合せ</span>
            <a href="tel:0772-62-8088">0772-62-8088 </a>
          </div>
        </div>
        <div class="p-top-header__right">
          <nav class="p-top-header__nav">
            <ul class="p-top-header__nav-items">
              <li class="p-top-header__nav-item"><a href="<?php echo home_url(); ?>/concept">コンセプト</a></li>
              <li class="p-top-header__nav-item"><a href="<?php echo home_url(); ?>/#item">商品情報</a></li>
              <li class="p-top-header__nav-item">サービスメニュー <div class="p-header-nav__child">
                  <ul>
                    <!-- <div class="c-header-nav__child-title">
                    <p>Sensible</p>
                  </div> -->
                    <div class="p-header-nav__child-items">
                      <li class="p-header-nav__child-sensible-item01"><a href="<?php echo home_url(); ?>/service#item01">導入支援「無償サービス」</a>
                      </li>
                      <li class="p-header-nav__child-sensible-item02"><a href="<?php echo home_url(); ?>/service#item02">運営支援「サポートサービス」</a>
                      </li>
                    </div>
                  </ul>
                </div>
              </li>
              <li class="p-top-header__nav-item">事例とノウハウ <div class="p-header-nav__child">
                  <ul>
                    <div class="p-header-nav__child-items">
                      <li class="p-header-nav__child-service-item01"><a href="<?php echo home_url(); ?>/works">記事で読む導入事例</a></li>
                      <li class="p-header-nav__child-service-item02"><a href="<?php echo home_url(); ?>/movie">動画でみる活用事例</a></li>
                      <li class="p-header-nav__child-service-item03"><a href="<?php echo home_url(); ?>/column">ノウハウ・コラム</a></li>
                    </div>
                  </ul>
                </div>
              </li>



              <li class="p-top-header__nav-item"><a href="https://www.nissin-mfg.co.jp/company/history/#new_tab " target="_blank">企業情報</a>
              </li>
              <li class="p-top-header__nav-item"><a href="<?php echo home_url(); ?>/document_request">資料請求</a></li>
              <li class="p-top-header__nav-item"><a href="<?php echo home_url(); ?>/category/news">お知らせ</a></li>
              <!-- <li class="p-top-header__nav-item logo-facebook"><a href="">
                <img src="/images/common/logo-facebook.png" alt="">
              </a></li> -->
              <li class="p-top-header__contact-btn"><a href="<?php echo home_url(); ?>/contact">お問合せ</a></li>
            </ul>
          </nav>
        </div>


        <!-- drawer_menu -->
        <!-- ハンバーガーアイコン -->
        <div class="p-header-drawer__icon js-header-drawer__icon">
          <div class="p-heder-drawer_icon-bars">
            <span class="icon__bar1"></span>
            <span class="icon__bar2"></span>
            <span class="icon__bar3"></span>
          </div>
        </div>
        <!-- TEL・メールアイコン -->
        <div class="p-header-drawer__contact-icon">
          <a href="tel:0772-62-8088" class="p-header-drawer__icon-tel">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-tel.png" alt="電話のアイコン">
          </a>
          <a href="<?php echo home_url(); ?>/contact" class="p-header-drawer__icon-mail">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-mail.png" alt="メールのアイコン">
          </a>
        </div>
        <!-- ドロワーメニュー -->
        <nav class="p-header-drawer__content js-header-drawer__content">
          <ul class="p-header-drawer__content_items js-header-drawer__content_items">
            <li class="drawer__content_item"><a href="/">TOP</a></li>
            <li class="drawer__content_item"><a href="<?php echo home_url(); ?>/concept">コンセプト</a></li>
            <li class="drawer__content_item"><a href="<?php echo home_url(); ?>/#item">商品情報</a>
              <ul>
                <li><a href="<?php echo home_url(); ?>/scada">> SCADAパッケージソフト</a></li>
                <li><a href="<?php echo home_url(); ?>/tolesabi">> 品質トレサビシステム</a></li>
                <li><a href="<?php echo home_url(); ?>/automation">> 自動化関連装置</a></li>
              </ul>
            </li>
            <li class="drawer__content_item">サービス <ul>
                <li><a href="<?php echo home_url(); ?>/service#item01">> 導入支援「無償サービス」</a></li>
                <li><a href="<?php echo home_url(); ?>/service#item02">> 運営支援「サポートサービス」 </a></li>
              </ul>
            </li>
            <li class="drawer__content_item">事例とノウハウ <ul>
                <li><a href="<?php echo home_url(); ?>/works">> 記事で読む導入事例</a></li>
                <li><a href="<?php echo home_url(); ?>/movie">> 動画でみる活用事例</a></li>
                <li><a href="<?php echo home_url(); ?>/column">> ノウハウ・コラム</a></li>
              </ul>
            </li>
            <li class="drawer__content_item"><a href="https://www.nissin-mfg.co.jp/company/history/#new_tab" target="_blank">企業情報</a></li>
            <li class="drawer__content_item"><a href="<?php echo home_url(); ?>/category/news">お知らせ</a></li>
            <li class="drawer__content_item"><a href="<?php echo home_url(); ?>/contact">お問合せ</a></li>
            <li class="drawer__content_item"><a href="<?php echo home_url(); ?>/document_request">資料請求</a></li>
            <li class="drawer__content_item"><a href="<?php echo home_url(); ?>/policy">プライバシーポリシー</a></li>
          </ul>
          <div class="p-header-drawer__info">
            <div class="p-header-drawer__tel">
              <p> お問合せ</p>
              <a href="tel:0772-62-8088">TEL.0772-62-8088</a>
            </div>
          </div>
        </nav>

    
  </header>
  <!-- header end-->