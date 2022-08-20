<!DOCTYPE 
>
<html lang="ja">
<head>
  <meta name="robots" content="noindex" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>日進製作所</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <!-- <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <meta name="twitter:card" content="summary" /> -->
  <!-- ファビコン -->
  <link rel="icon" href="#" />
  <!-- css -->
  <link rel="stylesheet" href="./css/style.css" />
  <!-- gsap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script defer src="./js/script.js"></script>
</head>
</body>
<header>
  <div class="l-top-header p-top-header">
    <div class="p-top-header__inner">
      <div class="p-top-header__left">
        <h1 class="p-top-header__logo">
          <a href="/"><img src="images/common/co-logo.png" alt=""></a>
        </h1>
        <div class="p-top-header__tel">
          <span>資料請求・お問い合わせ</span>
          <a href="tel:0772-62-8088">0772-62-8088 </a>
        </div>
      </div>
      <div class="p-top-header__right">
        <nav class="p-top-header__nav">
          <ul class="p-top-header__nav-items">
            <li class="p-top-header__nav-item"><a href="page-concept.html">コンセプト</a></li>
            <li class="p-top-header__nav-item"><a href="index.html#item">商品情報</a>
              <!-- <div class="p-header-nav__child">
                <ul>
                  <div class="p-header-nav__child-title">
                    <p>Service</p>
                  </div>
                  <div class="p-header-nav__child-items">
                    <li class="p-header-nav__child-service-item01"><a href="service-page01.html"></a></li>
                    <li class="p-header-nav__child-service-item02"><a href="service-page02.html"></a></li>
                    <li class="p-header-nav__child-service-item03"><a href="service-page03.html"></a></li>
                  </div>
                </ul>
              </div> -->
            </li>
            <li class="p-top-header__nav-item"><a href="index.html#service">サービスメニュー</a>
              <!-- <div class="p-header-nav__child">
                <ul>
                  <div class="c-header-nav__child-title">
                    <p>Sensible</p>
                  </div>
                  <div class="p-header-nav__child-items">
                    <li class="p-header-nav__child-sensible-item01"><a href="sensible-page.html#sensible"></a>
                    </li>
                    <li class="p-header-nav__child-sensible-item02"><a href="sensible-page.html#sdgs"></a>
                    </li>
                  </div>
                </ul>
              </div> -->
            </li>
            <li class="p-top-header__nav-item"><a href="index.html#know-how">事例とノウハウ</a></li>
            <li class="p-top-header__nav-item"><a href="https://www.nissin-mfg.co.jp/company/history/#new_tab">企業情報</a></li>
            <li class="p-top-header__nav-item"><a href="archive-new.html">お知らせ</a></li>
            <li class="p-top-header__nav-item logo-facebook"><a href="">
                <img src="/images/common/logo-facebook.png" alt="">
              </a></li>
            <li class="p-top-header__contact-btn"><a href="page-contact.html">お問合せ</a></li>
          </ul>
        </nav>
      </div>
      <!-- drawer_menu -->
      <!-- ハンバーガーアイコン -->
      <!-- <div class="p-header-drawer__icon js-header-drawer__icon">
    <div class="p-heder-drawer_icon-bars">
      <span class="icon__bar1"></span>
      <span class="icon__bar2"></span>
      <span class="icon__bar3"></span>
    </div>
  </div> -->
      <!-- ドロワーメニュー -->
      <!-- <nav class="p-header-drawer__content js-header-drawer__content">
    <div class="p-header-drawer__logo-wrap">
      <h1 class="p-top-header__logo">
        <a href="/"><img src="images/common/logo-white.png" alt=""></a>
      </h1>
      <div class="p-top-header__company-name">
        <a href="/">
          <p><span>有限会社</span>瀬戸建設</p>
        </a>
      </div>
    </div>
    <ul class="p-header-drawer__content_items js-header-drawer__content_items">
      <li class="drawer__content_item"><a href="/">Home</a></li>
      <li class="drawer__content_item"><a href="news-archive.html">新着情報</a></li>
      <li class="drawer__content_item"><a href="#">業務内容</a>
        <ul>
          <li><a href="service-page01.html">- 建造物の解体業務</a></li>
          <li><a href="service-page02.html">- 特殊解体業務</a></li>
          <li><a href="service-page03.html">- 残土処理・廃棄物等処理</a></li>
        </ul>
      </li>
      <li class="drawer__content_item"><a href="#">安心の施工体制</a>
        <ul>
          <li><a href="sensible-page.html#sensible">- 安心の施工体制</a></li>
          <li><a href="sensible-page.html#sdgs">- SDGsへの取り組み</a></li>
        </ul>
      </li>
      <li class="drawer__content_item"><a href="works-archive.html">施工事例</a></li>
      <li class="drawer__content_item"><a href="about-page.html">戸田建設について</a></li>
      <li class="drawer__content_item"><a href="recruit-page.html">採用募集</a></li>
      <li class="drawer__content_item"><a href="privacy-policy-page.html">個人情報保護方針</a></li>
    </ul>
    <div class="p-header-drawer__info">
      <p class="p-header-drawer__co-name"><span>有限会社</span>瀬戸建設</p>
      <p class="p-header-drawer__adress">京都府宮津市字中野５８番地の１</p>
      <p class="p-header-drawer__tel">TEL.0722-27-0257</p>
    </div>
  </nav> -->
</header>
<!-- header end-->
<section class="section-head">
  <div class="section-head__inner l-inner">
    <div class="c-section-head">
      <h1>事例とノウハウ</h1>
      <p>導入事例のご紹介 </p>
    </div>
  </div>
</section>
<!-- サブタイトル -->
<div class="c-sub-head">
  <div class="c-sub-head__inner l-inner">
    <div class="c-sub-head__logo">
      <img src="/images/common/logo-title-black.png" alt="">
    </div>
    <h2 class="c-sub-head__title">導入事例・活用事例を通して<br> スマートファクトリー導入のヒントを探る！</h2>
  </div>
</div>
<!--タブ-->
<!-- <ul class="tab-group l-inner">
      <li class="tab is-active case01">記事で読む導入事例</li>
      <li class="tab case02">動画でみる活用事例</li>
      <li class="tab case03">ノウハウ・コラム</li>
    </ul> -->
<div class="p-service-tab p-service-content01" id="js-tab">
  <div class="p-service-tab__nav l-inner">
    <a href="service-page01.html" class="p-service-tab__nav-item is-active contents01" data-nav="0">記事で読む導入事例</a>
    <a href="service-page02.html" class="p-service-tab__nav-item contents02" data-nav="1">動画でみる活用事例</a>
    <a href="service-page03.html" class="p-service-tab__nav-item contents03" data-nav="2">ノウハウ・コラム</a>
  </div>
</div>
<!--タブを切り替えて表示するコンテンツ-->
<div class="panel-group l-inner">
  <!-- 記事で読む導入事例 -->
  <div class="panel is-show" id="post">
    <div class="panel__title">
      <figure class="panel__logo">
        <img src="images/common/logo-post02.png" alt="">
      </figure>
      <h3>記事で読む導入事例</h3>
    </div>
    <!-- カード -->
    <div class="p-post-cards">
      <div class="p-post-card">
        <figure class="p-post-card__img">
          <img src="images/common/post-img.jpg" alt="">
        </figure>
        <div class="p-post-card__body">
          <div class="p-post-card__wrap">
            <div class="p-post-card__meta">
              <div class="p-post-card__date">2021年5月更新</div>
              <div class="p-post-card__customer">金属加工メーカーB社様</div>
            </div>
            <div class="p-post-card__tag">
              <a href=""><span class="tag01">SCADA</span></a>
              <a href=""><span class="tag02">トレサビ</span></a>
              <a href=""><span class="tag03">自動化装置</span></a>
            </div>
          </div>
          <h4 class="p-post-card__title">流量センサを取り付け可視化し、コスト削減に繋げた</h4>
          <p class="p-post-card__text"> エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。 </p>
          <div class="c-btn--news p-post-card__btn">
            <a href="">
              <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
              <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
            </a>
          </div>
        </div>
      </div>
      <div class="p-post-card">
        <figure class="p-post-card__img">
          <img src="images/common/post-img.jpg" alt="">
        </figure>
        <div class="p-post-card__body">
          <div class="p-post-card__wrap">
            <div class="p-post-card__meta">
              <div class="p-post-card__date">2021年5月更新</div>
              <div class="p-post-card__customer">金属加工メーカーB社様</div>
            </div>
            <div class="p-post-card__tag">
              <a href=""><span class="tag01">SCADA</span></a>
              <a href=""><span class="tag02">トレサビ</span></a>
              <a href=""><span class="tag03">自動化装置</span></a>
            </div>
          </div>
          <h4 class="p-post-card__title">流量センサを取り付け可視化し、コスト削減に繋げた</h4>
          <p class="p-post-card__text"> エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。 </p>
          <div class="c-btn--news p-post-card__btn">
            <a href="">
              <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
              <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
            </a>
          </div>
        </div>
      </div>
      <div class="p-post-card">
        <figure class="p-post-card__img">
          <img src="images/common/post-img.jpg" alt="">
        </figure>
        <div class="p-post-card__body">
          <div class="p-post-card__wrap">
            <div class="p-post-card__meta">
              <div class="p-post-card__date">2021年5月更新</div>
              <div class="p-post-card__customer">金属加工メーカーB社様</div>
            </div>
            <div class="p-post-card__tag">
              <a href=""><span class="tag01">SCADA</span></a>
              <a href=""><span class="tag02">トレサビ</span></a>
              <a href=""><span class="tag03">自動化装置</span></a>
            </div>
          </div>
          <h4 class="p-post-card__title">流量センサを取り付け可視化し、コスト削減に繋げた</h4>
          <p class="p-post-card__text"> エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。 </p>
          <div class="c-btn--news p-post-card__btn">
            <a href="">
              <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
              <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
            </a>
          </div>
        </div>
      </div>
      <div class="p-post-card">
        <figure class="p-post-card__img">
          <img src="images/common/post-img.jpg" alt="">
        </figure>
        <div class="p-post-card__body">
          <div class="p-post-card__wrap">
            <div class="p-post-card__meta">
              <div class="p-post-card__date">2021年5月更新</div>
              <div class="p-post-card__customer">金属加工メーカーB社様</div>
            </div>
            <div class="p-post-card__tag">
              <a href=""><span class="tag01">SCADA</span></a>
              <a href=""><span class="tag02">トレサビ</span></a>
              <a href=""><span class="tag03">自動化装置</span></a>
            </div>
          </div>
          <h4 class="p-post-card__title">流量センサを取り付け可視化し、コスト削減に繋げた</h4>
          <p class="p-post-card__text"> エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。 </p>
          <div class="c-btn--news p-post-card__btn">
            <a href="">
              <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
              <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 動画でみる活用事例 -->
  <div class="panel is-show" id="movie">
    <div class="panel__title">
      <figure class="panel__logo">
        <img src="images/common/logo-movie02.png" alt="">
      </figure>
      <h3>動画でみる活用事例</h3>
    </div>
    <!-- カード -->
    <div class="p-post-cards">
      <div class="p-post-card">
        <figure class="p-post-card__img">
          <img src="images/common/post-img.jpg" alt="">
        </figure>
        <div class="p-post-card__body">
          <div class="p-post-card__wrap">
            <div class="p-post-card__meta">
              <div class="p-post-card__date">2021年5月更新</div>
              <div class="p-post-card__customer">金属加工メーカーB社様</div>
            </div>
            <div class="p-post-card__tag">
              <a href=""><span class="tag01">SCADA</span></a>
              <a href=""><span class="tag02">トレサビ</span></a>
              <a href=""><span class="tag03">自動化装置</span></a>
            </div>
          </div>
          <h4 class="p-post-card__title">流量センサを取り付け可視化し、コスト削減に繋げた</h4>
          <p class="p-post-card__text"> エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。 </p>
          <div class="c-btn--news p-post-card__btn">
            <a href="">
              <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
              <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
            </a>
          </div>
        </div>
      </div>
      <div class="p-post-card">
        <figure class="p-post-card__img">
          <img src="images/common/post-img.jpg" alt="">
        </figure>
        <div class="p-post-card__body">
          <div class="p-post-card__wrap">
            <div class="p-post-card__meta">
              <div class="p-post-card__date">2021年5月更新</div>
              <div class="p-post-card__customer">金属加工メーカーB社様</div>
            </div>
            <div class="p-post-card__tag">
              <a href=""><span class="tag01">SCADA</span></a>
              <a href=""><span class="tag02">トレサビ</span></a>
              <a href=""><span class="tag03">自動化装置</span></a>
            </div>
          </div>
          <h4 class="p-post-card__title">流量センサを取り付け可視化し、コスト削減に繋げた</h4>
          <p class="p-post-card__text"> エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。 </p>
          <div class="c-btn--news p-post-card__btn">
            <a href="">
              <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
              <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
            </a>
          </div>
        </div>
      </div>
      <div class="p-post-card">
        <figure class="p-post-card__img">
          <img src="images/common/post-img.jpg" alt="">
        </figure>
        <div class="p-post-card__body">
          <div class="p-post-card__wrap">
            <div class="p-post-card__meta">
              <div class="p-post-card__date">2021年5月更新</div>
              <div class="p-post-card__customer">金属加工メーカーB社様</div>
            </div>
            <div class="p-post-card__tag">
              <a href=""><span class="tag01">SCADA</span></a>
              <a href=""><span class="tag02">トレサビ</span></a>
              <a href=""><span class="tag03">自動化装置</span></a>
            </div>
          </div>
          <h4 class="p-post-card__title">流量センサを取り付け可視化し、コスト削減に繋げた</h4>
          <p class="p-post-card__text"> エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。 </p>
          <div class="c-btn--news p-post-card__btn">
            <a href="">
              <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
              <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
            </a>
          </div>
        </div>
      </div>
      <div class="p-post-card">
        <figure class="p-post-card__img">
          <img src="images/common/post-img.jpg" alt="">
        </figure>
        <div class="p-post-card__body">
          <div class="p-post-card__wrap">
            <div class="p-post-card__meta">
              <div class="p-post-card__date">2021年5月更新</div>
              <div class="p-post-card__customer">金属加工メーカーB社様</div>
            </div>
            <div class="p-post-card__tag">
              <a href=""><span class="tag01">SCADA</span></a>
              <a href=""><span class="tag02">トレサビ</span></a>
              <a href=""><span class="tag03">自動化装置</span></a>
            </div>
          </div>
          <h4 class="p-post-card__title">流量センサを取り付け可視化し、コスト削減に繋げた</h4>
          <p class="p-post-card__text"> エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。 </p>
          <div class="c-btn--news p-post-card__btn">
            <a href="">
              <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
              <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ノウハウ・コラム -->
  <div class="panel" id="column">
    <div class="panel__title">
      <figure class="panel__logo">
        <img src="images/common/logo-column02.png" alt="">
      </figure>
      <h3>ノウハウ・コラム</h3>
    </div>
    <!-- カード -->
    <div class="p-post-cards">
      <div class="p-post-card">
        <figure class="p-post-card__img">
          <img src="images/common/post-img.jpg" alt="">
        </figure>
        <div class="p-post-card__body">
          <div class="p-post-card__wrap">
            <div class="p-post-card__meta">
              <div class="p-post-card__date">2021年5月更新</div>
              <div class="p-post-card__customer">金属加工メーカーB社様</div>
            </div>
            <div class="p-post-card__tag">
              <a href=""><span class="tag01">SCADA</span></a>
              <a href=""><span class="tag02">トレサビ</span></a>
              <a href=""><span class="tag03">自動化装置</span></a>
            </div>
          </div>
          <h4 class="p-post-card__title">流量センサを取り付け可視化し、コスト削減に繋げた</h4>
          <p class="p-post-card__text"> エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。 </p>
          <div class="c-btn--news p-post-card__btn">
            <a href="">
              <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
              <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
            </a>
          </div>
        </div>
      </div>
      <div class="p-post-card">
        <figure class="p-post-card__img">
          <img src="images/common/post-img.jpg" alt="">
        </figure>
        <div class="p-post-card__body">
          <div class="p-post-card__wrap">
            <div class="p-post-card__meta">
              <div class="p-post-card__date">2021年5月更新</div>
              <div class="p-post-card__customer">金属加工メーカーB社様</div>
            </div>
            <div class="p-post-card__tag">
              <a href=""><span class="tag01">SCADA</span></a>
              <a href=""><span class="tag02">トレサビ</span></a>
              <a href=""><span class="tag03">自動化装置</span></a>
            </div>
          </div>
          <h4 class="p-post-card__title">流量センサを取り付け可視化し、コスト削減に繋げた</h4>
          <p class="p-post-card__text"> エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。 </p>
          <div class="c-btn--news p-post-card__btn">
            <a href="">
              <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
              <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
            </a>
          </div>
        </div>
      </div>
      <div class="p-post-card">
        <figure class="p-post-card__img">
          <img src="images/common/post-img.jpg" alt="">
        </figure>
        <div class="p-post-card__body">
          <div class="p-post-card__wrap">
            <div class="p-post-card__meta">
              <div class="p-post-card__date">2021年5月更新</div>
              <div class="p-post-card__customer">金属加工メーカーB社様</div>
            </div>
            <div class="p-post-card__tag">
              <a href=""><span class="tag01">SCADA</span></a>
              <a href=""><span class="tag02">トレサビ</span></a>
              <a href=""><span class="tag03">自動化装置</span></a>
            </div>
          </div>
          <h4 class="p-post-card__title">流量センサを取り付け可視化し、コスト削減に繋げた</h4>
          <p class="p-post-card__text"> エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。 </p>
          <div class="c-btn--news p-post-card__btn">
            <a href="">
              <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
              <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
            </a>
          </div>
        </div>
      </div>
      <div class="p-post-card">
        <figure class="p-post-card__img">
          <img src="images/common/post-img.jpg" alt="">
        </figure>
        <div class="p-post-card__body">
          <div class="p-post-card__wrap">
            <div class="p-post-card__meta">
              <div class="p-post-card__date">2021年5月更新</div>
              <div class="p-post-card__customer">金属加工メーカーB社様</div>
            </div>
            <div class="p-post-card__tag">
              <a href=""><span class="tag01">SCADA</span></a>
              <a href=""><span class="tag02">トレサビ</span></a>
              <a href=""><span class="tag03">自動化装置</span></a>
            </div>
          </div>
          <h4 class="p-post-card__title">流量センサを取り付け可視化し、コスト削減に繋げた</h4>
          <p class="p-post-card__text"> エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。 </p>
          <div class="c-btn--news p-post-card__btn">
            <a href="">
              <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
              <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <ul class="c-pagenation p-post-card__pagenation">
    <li><span>1</span></li>
    <li><a href="">2</a></li>
    <li><a href="">3</a></li>
    <li><a href="">4</a></li>
    <li><a href="">5</a></li>
  </ul>
</div>
<!-- footer -->
<footer class="l-footer">
  <!-- バナー -->
  <div class="p-banner">
    <a href="" class="p-banner__wrap c-img-padding--50">
      <img src="images/common/banner01.jpg" alt="">
      <p>資料請求</p>
    </a>
    <a href="" class="p-banner__wrap c-img-padding--50">
      <img src="images/common/banner02.jpg" alt="">
      <p>企業情報</p>
    </a>
  </div>
  <div class="p-footer">
    <div class="p-footer__content">
      <!-- 左側 -->
      <div class="p-footer__left">
        <div class="p-footer__info">
          <!--  ロゴ -->
          <div class="p-footer__logo">
            <img src="images/common/sagane-logo-white.png" alt="">
          </div>
          <!-- アドレス -->
          <div class="p-footer__adress">
            <p>株式会社 日進製作所（赤坂工場）生産システム営業部</p>
            <p><span>〒627- 0006</span>京都府京丹後市峰山町赤坂85番地</p>
          </div>
          <!-- Google マップ -->
          <div class="p-footer__googlmap">
            <a href="" class="">Google Mapはこちら</a>
          </div>
          <!-- TEL -->
          <div class="p-footer__tel">
            <p><span>お問い合せ</span>TEL.0772-62-8088</p>
          </div>
          <!-- メールアドレス-->
          <div class="p-footer__mail">
            <p><span>［mail］</span>sales-iot@nissin-mfg.co.jp</p>
          </div>
        </div>
      </div>
      <!-- 右側 -->
      <div class="p-footer__right">
        <div class="p-footer__sitemap">
          <div class="p-footer__sitemap-title">
            <p>Site Map</p>
          </div>
          <div class="p-footer__sitemap-wrap">
            <ul class="p-footer__sitemap-left">
              <li><a href="/"><span>ホーム</span></a></li>
              <li><a href=""><span>コンセプト</span>特徴とポイント</a></li>
              <li><a href="#"><span>商品情報</span>商品・ソリューション</a>
                <ul class="p-footer__sitemap-service-contents">
                  <li><a href="">SCADA システム「サガネ係長の IoT」</a></li>
                  <li><a href="">品質トレサビシステム</a></li>
                  <li><a href="">自動化関連装置</a></li>
                </ul>
              </li>
              <li><a href="#"><span>サービス</span>サービス & サポートメニュー</a>
                <ul class="p-footer__sitemap-service-contents">
                  <li><a href="">導入支援無償サポート</a></li>
                  <li><a href="">運営支援サポートサービス</a></li>
                </ul>
              </li>
            </ul>
            <ul class="p-footer__sitemap-right">
              <li><a href=""><span>事例とノウハウ</span>導入事例のご紹介</a>
                <ul class="p-footer__sitemap-service-contents">
                  <li><a href="">記事で読む導入事例</a></li>
                  <li><a href="">動画でみる活用事例</a></li>
                  <li><a href="">ノウハウ・コラム</a></li>
                </ul>
              </li>
              <li><a href=""><span>企業情報</span> </a></li>
              <li><a href=""><span>資料請求</span> </a></li>
              <li><a href=""><span>お問い合わせ</span> </a></li>
              <li><a href=""><span>プライバシーポリシー</span>個人情報保護方針</a></li>
            </ul>
            <a href="" class="facebook">
              <img src="" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- コピーライト -->
    <div class="p-footer__copyright">
      <p><span>copyright</span><span>2022</span><span> NISSIN　MANUFACTURING　CO.,　LTD.</span><span>All　Right　Reserved</span></p>
    </div>
  </div>
  <!-- トップに戻るボタン -->
  <div class="p-footr__to-top-btn js-to_top">
    <img src="images/common/to-top-btn.png" alt="">
  </div>
</footer>
</body>
</html>
</div>
<body>
  </html>