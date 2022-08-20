<?php get_header(); ?>

<main>
  <!-- オープニングアニメーション  -->
  <div class="opening-animation js-opening">
    <figure class="js-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/sagane-logo-white.png" alt="ロゴ">
    </figure>
  </div>
  <!-- mv -->
  <section class="l-mv p-mv ">
    <div class="p-mv__inner">
      <div class="p-mv__title-box">
        <img class="p-mv__logo" src="<?php echo get_template_directory_uri(); ?>/images/common/sagane-logo-white.png" alt="ロゴマーク">
        <h2 class="p-mv__title">SCADAを中心とした作業と<br class="pc">情報管理の総合的自動化・省人化</h2>
      </div>
      <!-- 426pxで画像を切り替え -->
      <picture class="p-mv__img">
        <source media="(min-width: 427px)" srcset="<?php echo get_template_directory_uri(); ?>/images/common/mv.jpg">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/mv-img-sp.jpg" alt="メインビュー画像">
        <!-- banner -->
        <a class="p-mv__banner" href="<?php echo home_url(); ?>/service">
          <p class="sub-ttl">サガネ係長のSMART FACTORY</p>
          <p class="ttl">導入支援「無償サポート」</p>
          <p class="text">最初の第一歩！まずはご相談下さい！</p>
          <div class="btn">情報詳細ページ</div>
        </a>
      </picture>
    </div>
    <!-- スクロールダウン -->
    <div class="scroll-down" href="#">Scroll</div>
  </section>
  <!-- mv end -->
  <!-- concept -->
  <section class="l-concept p-concept">
    <div class="p-concept__inner">
      <div class="p-concept__head-box head-box">
        <div class="c-section-head--top">
          <h2>コンセプト</h2>
          <p>特徴とポイント</p>
        </div>
        <div class="c-text-area ">
          <h3>システム・装置・運用の全方面から現場に価値を提供する。</h3>
          <p>IT に偏った取り組みでは、競争力の高いスマートファクトリーは構築はできない !?<br class="pc"> Tier1 部品メーカー、老舗工作機械メーカー、IoT システムベンダーとして 3
            つの顔を持つ日進グループだからこそ 提供できる徹底して現場に寄り添う、本当に価値のある「SMART FACTORY」をご提案いたします。</p>
        </div>
      </div>
      <div class="p-concept__explanation">
        <img class="p-concept__logo" src="<?php echo get_template_directory_uri(); ?>/images/common/sagane-logo-title.png" alt="ロゴ">
        <img class="p-concept__illustrated" src="<?php echo get_template_directory_uri(); ?>/images/common/item-irasuto.png" alt="特徴とポイントの図解">
        <div class="c-text-area--border p-concept__text">
          <h3>SCADAとは？</h3>
          <p>SCADAとは、Supervisory Control And Data
            Acquisitionの略で、上位制御やデータ収集を担う上位サーバのことを指す一般的な言葉です。SCADAと、搬送装置、加工設備、刻印・計測・検査などの自動化関連装置、入力・表示端末などを接続することで、稼働監視、ロット管理、単品トレサビ、品質監視、設備点検、不良集計など、現場の情報管理業務を自動化できます。
            高度なスマートファクトリーでは、搬送、刻印、計測、検査など、自動化関連設備とSCADAとの通信は複雑になります。設備の設計・製造・販売も手掛ける日進だからこそ、SCADAと自動化関連設備とをセットでご導入いただければ、高度な自律性と柔軟性とを併せ持った、異次元のスマートラインを実現いたします。
          </p>
        </div>
      </div>
      <div class="c-btn p-concept__btn">
        <a href="<?php echo home_url(); ?>/concept">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/btn-concept02.png" alt="ボタン画像２" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/btn-concept.jpg" alt="ボタン画像１" />
        </a>
      </div>
    </div>
  </section>
  <!-- concept end -->
  <!-- item -->
  <section class="l-item p-item" id="item">
    <div class="p-item__inner">
      <div class="p-item__head-box head-box">
        <div class="c-section-head--top">
          <h2>商品情報</h2>
          <p>商品・ソリューション</p>
        </div>
        <div class="c-text-area ">
          <h3>「サガネ係長のSMART FACTORY」 商品構成</h3>
          <p>
            SCADAパッケージソフト「サガネ係長のIoT」、「品質トレサビシステム」、「自動化関連装置」の導入サービスを主軸に、私たちが培ってきたスマートファクトリー運用のノウハウもプラスした運用サポートを通じて、世界に誇る⽇本の製造業の競争⼒を、これからも維持・向上することに貢献していきます。
          </p>
        </div>
      </div>
      <!-- 1 -->
      <div class="p-item__btn-wrap">
        <div class="p-item__explanation">
          <div class="c-item-text--top">
            <figure class="large">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/item-logo01.png" alt="ロゴ">
            </figure>
            <h3> <span>SCADAパッケージソフト</span>「サガネ係⻑のIoT&reg;」</h3>
            <p class="mt-small">
              独自に開発したSCADAパッケージソフトで古い設備、特殊な設備、多彩なセンサーをつなぎ、生産ラインの様々なリアルタイムの情報を、ネットワークを通してサーバやクラウドに集約して監視・可視化・制御を行います。
            </p>
            <div class="c-btn c-item-text__more-btn">
              <a href="<?php echo home_url(); ?>/scada">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/item-btn01.png" alt="ボタン" />
              </a>
            </div>
          </div>
          <!-- 稼働監視 -->
          <ul class="p-item__modal grid ">
            <li class="item01">
              <a href="" class="js-open-btn" data-target=".target-modal01">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/item01-2.png" alt="稼働監視">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/item01.png" alt="稼働監視">
              </a>
            </li>
            <!-- モーダルアイテム -->
            <div class="p-modal-item target-modal01">
              <figure class="p-modal-item__content">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/modal-item01.png" alt="稼働監視">
                <a class="p-modal-item__icon js-close-btn" href="" data-target=".target-modal01"><img src="<?php echo get_template_directory_uri(); ?>/images/common/modal-batsu-icon.png" alt=""></a>
              </figure>
            </div>
            <!--モーダル背景 -->
            <div class="p-modal-item__bg  target-modal01" data-target=".target-modal01"></div>
            <!-- end -->
            <li class="item01">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/item05.png" alt="設備総合効率">
              <img src="" alt="">
            </li>
            <!-- 設備点検 -->
            <li class="item01">
              <a href="" class="js-open-btn" data-target=".target-modal02">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/item02-2.png" alt="設備点検">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/item02.png" alt="設備点検">
              </a>
            </li>
            <!-- モーダルアイテム -->
            <div class="p-modal-item target-modal02">
              <figure class="p-modal-item__content">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/modal-item02.png" alt="設備点検">
                <a class="p-modal-item__icon js-close-btn" href="" data-target=".target-modal02"><img src="<?php echo get_template_directory_uri(); ?>/images/common/modal-batsu-icon.png" alt=""></a>
              </figure>
            </div>
            <!--モーダル背景 -->
            <div class="p-modal-item__bg target-modal02" data-target=".target-modal02"></div>
            <!-- end -->
            <!-- 計測データ管理 -->
            <li class="item01">
              <a href="" class="js-open-btn" data-target=".target-modal03">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/item06-2.png" alt="計測データ管理">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/item06.png" alt="計測データ管理">
              </a>
            </li>
            <!-- モーダルアイテム -->
            <div class="p-modal-item target-modal03">
              <figure class="p-modal-item__content">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/modal-item03.png" alt="計測データ管理">
                <a class="p-modal-item__icon js-close-btn" href="" data-target=".target-modal03"><img src="<?php echo get_template_directory_uri(); ?>/images/common/modal-batsu-icon.png" alt=""></a>
              </figure>
            </div>
            <!--モーダル背景 -->
            <div class="p-modal-item__bg target-modal03" data-target=".target-modal03"></div>
            <!-- end -->
            <!-- 不良集計 -->
            <li class="item01">
              <a href="" class="js-open-btn" data-target=".target-modal04">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/item03-3.png" alt="不良集計">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/item03.png" alt="不良集計">
              </a>
            </li>
            <!-- モーダルアイテム -->
            <div class="p-modal-item target-modal04">
              <figure class="p-modal-item__content">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/modal-item04.png" alt="不良集計">
                <a class="p-modal-item__icon js-close-btn" href="" data-target=".target-modal04"><img src="<?php echo get_template_directory_uri(); ?>/images/common/modal-batsu-icon.png" alt=""></a>
              </figure>
            </div>
            <!--モーダル背景 -->
            <div class="p-modal-item__bg target-modal04 " data-target=".target-modal04"></div>
            <!-- end -->
            <li class="item01">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/item07.png" alt="消費エネルギー分析">
              <img src="" alt="">
            </li>
            <li class="item01">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/item04.png" alt="加工条件データ分析">
              <img src="" alt="">
            </li>
          </ul>
        </div>
        <!-- 2 -->
        <div class="p-item__explanation green">
          <div class="c-item-text--top">
            <figure class="small">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/item-logo02.png" alt="ロゴ">
            </figure>
            <h3>品質トレサビシステム</h3>
            <p class="mt-large">今や品質管理の中心にあるトレーサビリティシステム。
              単品やロットの通過記録を残すだけでなく、SCADAパッケージソフトと連携することで情報管理の⾃動化レベルは一気に向上します。</p>
            <div class="c-btn c-item-text__more-btn">
              <a href="<?php echo home_url(); ?>/tolesabi">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/item-btn02.png" alt="ボタン" />
              </a>
            </div>
          </div>
          <ul class="p-item__btns">
            <li class="item02">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/item22.png" alt="単品トレース">
              <img src="" alt="">
            </li>
            <li class="item02">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/itme23.png" alt="ロットトレース">
              <img src="" alt="">
            </li>
            <!-- ゲートチェック -->
            <li class="item02">
              <a href="" class="js-open-btn" data-target=".target-modal05">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/item23-2.png" alt="ゲートチェック">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/item21.png" alt="ゲートチェック">
              </a>
            </li>
            <!-- モーダルアイテム -->
            <div class="p-modal-item target-modal05">
              <figure class="p-modal-item__content">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/modal-item05.png" alt="ゲートチェック">
                <a class="p-modal-item__icon js-close-btn" href="" data-target=".target-modal05"><img src="<?php echo get_template_directory_uri(); ?>/images/common/modal-batsu-icon.png" alt=""></a>
              </figure>
            </div>
            <!--モーダル背景 -->
            <div class="p-modal-item__bg target-modal05" data-target=".target-modal05"></div>
            <!-- end -->
            <li class="item02">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/item24.png" alt="移動票発行">
              <img src="" alt="">
            </li>
          </ul>
        </div>
        <!-- 2 end -->
        <!-- 3 -->
        <div class="p-item__explanation">
          <div class="c-item-text--top">
            <figure class="small">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/item-logo03.png" alt="ロゴ">
            </figure>
            <h3>⾃動化関連装置</h3>
            <p class="mt-large">
              上位システム（SCADA・トレサビ）と自動化関連装置（検査・計測・搬送・刻印）をセットでご提案させていただくことで高度な自律性と柔軟性を持った異次元のスマートな生産ラインを実現致します。 </p>
            <div class="c-btn c-item-text__more-btn--small">
              <a href="<?php echo home_url(); ?>/automation">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/item-btn01.png" alt="ボタン" />
              </a>
            </div>
          </div>
          <ul class="p-item__btns">
            <!-- 刻印装置 -->
            <li class="item03">
              <a href="" class="js-open-btn" data-target=".target-modal06">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/item31-2.png" alt="刻印装置">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/item31.png" alt="刻印装置">
              </a>
            </li>
            <!-- モーダルアイテム -->
            <div class="p-modal-item target-modal06">
              <figure class="p-modal-item__content">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/modal-item06.png" alt="刻印装置">
                <a class="p-modal-item__icon js-close-btn" href="" data-target=".target-modal06"><img src="<?php echo get_template_directory_uri(); ?>/images/common/modal-batsu-icon.png" alt=""></a>
              </figure>
            </div>
            <!--モーダル背景 -->
            <div class="p-modal-item__bg target-modal06" data-target=".target-modal06"></div>
            <!-- end -->
            <!-- 搬送装置 -->
            <li class="item03">
              <a href="" class="js-open-btn" data-target=".target-modal07">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/item32-3.png" alt="搬送装置">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/item32.png" alt="搬送装置">
              </a>
            </li>
            <!-- モーダルアイテム -->
            <div class="p-modal-item target-modal07">
              <figure class="p-modal-item__content">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/modal-item07.png" alt="搬送装置">
                <a class="p-modal-item__icon js-close-btn" href="" data-target=".target-modal07"><img src="<?php echo get_template_directory_uri(); ?>/images/common/modal-batsu-icon.png" alt=""></a>
              </figure>
            </div>
            <!--モーダル背景 -->
            <div class="p-modal-item__bg target-modal07" data-target=".target-modal07"></div>
            <!-- end -->
            <li class="item03">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/item33.png" alt="計測装置">
              <img src="" alt="">
            </li>
            <!-- 検査装置 -->
            <li class="item03">
              <a href="" class="js-open-btn" data-target=".target-modal08">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/item34-2.png" alt="検査装置">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/item34.png" alt="検査装置">
              </a>
            </li>
            <!-- モーダルアイテム -->
            <div class="p-modal-item target-modal08">
              <figure class="p-modal-item__content">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/modal-item08.png" alt="検査装置">
                <a class="p-modal-item__icon js-close-btn" href="" data-target=".target-modal08"><img src="<?php echo get_template_directory_uri(); ?>/images/common/modal-batsu-icon.png" alt=""></a>
              </figure>
            </div>
            <!--モーダル背景 -->
            <div class="p-modal-item__bg target-modal08" data-target=".target-modal08"></div>
          </ul>
          <!-- 3 end -->
        </div>
      </div>
    </div>
  </section>
  <!-- item end -->
  <!-- service -->
  <section class="l-service p-service" id="service">
    <div class="p-service__inner">
      <div class="p-service__head-box head-box">
        <div class="c-section-head--top">
          <h2>サービス</h2>
          <p>サービス&サポートメニュー</p>
        </div>
        <div class="c-text-area ">
          <h3>「サガネ係長のSMART FACTORY」 サービス&サポートメニュー</h3>
          <p>
            急速に進化するIoT・DX化など⽣産技術部⾨のご担当者様がカバーしなければならない技術範囲が広がっています。スマートファクトリー化に向けての導入支援「無償サポート」をはじめ、導入後の運営支援「サポートサービス」を通して、効率化を向上させる様々なアイデアと確かな技術でサポートいたします。
          </p>
        </div>
      </div>
    </div>
    <div class="p-service__support-wrap">
      <div class="p-service__support-item">
        <div class="p-service__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/sagane-logo-green.png" alt="ロゴ">
        </div>
        <h3>導入支援「無償サポート」</h3>
        <span class="sub-ttl">スマートファクトリー導入に向けての無償サービス</span>
        <p>現状の課題と未来のゴールを見据えて、まずは全体像を掴む！ スマートファクトリー構築支援の経験豊富な技術営業担当が各種情報提供はもちろん、お客様の課題整理、構想検討 のご支援を提供致します。
          まずはお気軽にご相談ください。</p>
        <div class="c-btn--service p-service__support-btn">
          <a href="<?php echo home_url(); ?>/service#item01">
            <!-- <img src="images/common/btn-service03.png" alt="ボタン画像１" /> -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/btn-service02.png" alt="ボタン画像２" />
          </a>
        </div>
      </div>
      <div class="p-service__support-item ">
        <div class="p-service__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/sagane-logo-blue.png" alt="ロゴ">
        </div>
        <h3>運営支援「サポートサービス」</h3>
        <span class="sub-ttl">導入後の様々な運営サポートもお任せ下さい。</span>
        <ul class="service-items">
          <li class="service-item">工場内システムインテグレーション</li>
          <li class="service-item">自動化関連設備　専用設計・製造</li>
          <li class="service-item">工場ネットワーク構築支援</li>
          <li class="service-item">エンジニアリングサービス</li>
          <li class="service-item">スマートファクトリー運用支援</li>
        </ul>
        <div class="c-btn--service p-service__support-btn">
          <a href="<?php echo home_url(); ?>/service#item02">
            <!-- <img src="images/common/btn-service02.png" alt="ボタン画像２" /> -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/btn-service03.png" alt="ボタン画像１" />
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- service end-->
  <!-- know-how -->
  <section class="l-know-how p-know-how">
    <div class="p-know-how__inner">
      <div class="p-know-how__head-box head-box" id="know-how">
        <div class="c-section-head--white" id="know-how">
          <h2>事例とノウハウ</h2>
          <p>導入事例のご紹介</p>
        </div>
        <div class="c-text-area--white ">
          <h3>様々な業種、様々なご要望に応える、様々な導入事例をご覧ください！</h3>
          <p>システム・装置など導入実績豊富な事例をご紹介致します。 仕様整合から構築、アフターサポートまで柔軟なサービスをご提供しております。</p>
        </div>
      </div>
      <div class="p-know-how__cards">
        <div class="p-know-how__card c-card">
          <div class="c-card__img ">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/top-card-img01.jpg" alt="記事で読む導入事例">
          </div>
          <div class="p-know-how__card-body c-card__body">
            <h3 class="c-card__title">記事で読む導入事例</h3>
            <p class="c-card__text">過去の導入事例を振り返り、記事にまとめました。随時、更新中！</p>
            <div class="c-btn--know-how action">
              <a href="<?php echo home_url(); ?>/works">
                <!-- <img src="/images/common/btn-news02.png" alt="ボタン画像２" /> -->
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/btn-news01.png" alt="ボタン画像１" />
              </a>
            </div>
          </div>
        </div>
        <div class="p-know-how__card c-card">
          <div class="c-card__img ">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/top-card-img02.jpg" alt="動画でみる活用事例">
          </div>
          <div class="p-know-how__card-body c-card__body">
            <h3 class="c-card__title">動画でみる活用事例</h3>
            <p class="c-card__text">過去の実例をもとに活用事例を動画で配信しております。</p>
            <div class="c-btn--know-how action">
              <a href="<?php echo home_url(); ?>/movie">
                <!-- <img src="/images/common/btn-news02.png" alt="ボタン画像２" /> -->
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/btn-news01.png" alt="ボタン画像１" />
              </a>
            </div>
          </div>
        </div>
        <div class="p-know-how__card c-card">
          <div class="c-card__img ">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/top-card-img03.jpg" alt="動画でみる活用事例">
          </div>
          <div class="p-know-how__card-body c-card__body">
            <h3 class="c-card__title">ノウハウ・コラム</h3>
            <p class="c-card__text">スマートファクトリー導入にむけて、担当者様に有益な情報を随時更新中。</p>
            <div class="c-btn--know-how action">
              <a href="<?php echo home_url(); ?>/column">
                <!-- <img src="/images/common/btn-news02.png" alt="ボタン画像２" /> -->
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/btn-news01.png" alt="ボタン画像１" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- know-how end -->
  <!-- news -->
  <section class="l-news p-news ">
    <div class="p-news__inner">
      <div class="p-news__head-box l-inner">
        <div class="c-section-head--top ">
          <h2>お知らせ</h2>
        </div>
        <div class="p-news__items">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="p-news__item">
                <div class="p-news__date">
                  <span><?php echo get_the_date('Y.m.d'); ?></span>
                </div>
                <div class="p-news__title">
                  <p><?php the_title(); ?></p>
                </div>
                <div class="p-news__more">
                  <p>詳細はコチラ</p>
                </div>
              </a>
          <?php endwhile;
          endif; ?>

        </div>
      </div>
    </div>
    <div class="c-btn p-news__btn">
      <a href="<?php echo home_url(); ?>/category/news">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/btn-news02.png" alt="ボタン画像１" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/btn-news01.jpg" alt="ボタン画像２" />
      </a>
    </div>
  </section>
  <!-- news end-->

  <?php get_footer(); ?>
</main>
</body>

</html>