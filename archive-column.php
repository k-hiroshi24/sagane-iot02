<?php get_header(); ?>

<section class="section-head">
  <div class="section-head__inner l-inner">
    <div class="c-section-head">
      <!-- <h1>事例とノウハウ</h1>
      <p>導入事例のご紹介 </p> -->
    </div>
  </div>
</section>
<!-- サブタイトル -->
<div class="c-sub-head">
  <div class="c-sub-head__inner l-inner">
    <div class="c-sub-head__logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo-title-black.png" alt="ロゴ">
    </div>
    <!-- <h2 class="c-sub-head__title">導入事例・活用事例を通して<br> スマートファクトリー導入のヒントを探る！</h2> -->
    <br>
    <h2 class="c-sub-head__title">だだ今準備中です。</h2>
    <p>現在ページの準備を進めております。今しばらくお待ちください</p>

  </div>
</div>
<div class="p-service-tab p-service-content01" id="js-tab">
  <div class="p-service-tab__nav l-inner">
    <!-- <a href="<?php echo home_url(); ?>/works" class="p-service-tab__nav-item  contents01" data-nav="0">記事で読む導入事例</a>
    <a href="<?php echo home_url(); ?>/movie" class="p-service-tab__nav-item contents02" data-nav="1">動画でみる活用事例</a>
    <a href="<?php echo home_url(); ?>/column" class="p-service-tab__nav-item is-active contents03" data-nav="2">ノウハウ・コラム</a> -->
  </div>
  <div class="p-service-tab__content" data-content="0">
    <!-- <div class="panel">復活？ -->
    <div class="panel__title" id="column">
      <figure class="panel__logo">
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo-column02.png" alt="コラムのロゴ"> -->
      </figure>
      <!-- <h3>ノウハウ・コラム</h3> -->
    </div>
    <!-- カード -->
    <div class="p-post-cards">
      <!-- ループスタート -->
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <div class="p-post-card">
            <figure class="p-post-card__img">
              
              <!-- アイキャッチ画像取得 -->
            <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                <!-- なければロゴ画像 -->
              <?php else : ?>
                <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" width="100" height="100" alt="デフォルト画像" /></a>
              <?php endif; ?>

            </figure>
            <div class="p-post-card__body">
              <div class="p-post-card__wrap">
                <div class="p-post-card__meta">
                  <div class="p-post-card__date"><?php echo get_the_date('Y.m.d'); ?>更新</div>
                  <!-- <div class="p-post-card__customer">金属加工メーカーB社様</div> -->
                </div>
                <!-- <div class="p-post-card__tag">
                  <a href=""><span class="tag01">SCADA</span></a>
                  <a href=""><span class="tag02">トレサビ</span></a>
                  <a href=""><span class="tag03">自動化装置</span></a>
                </div> -->
              </div>
              <h4 class="p-post-card__title"><?php echo CFS()->get('column_title'); ?></h4>
              <p class="p-post-card__text"><?php echo mb_substr((post_custom("column_contents")), 0, 50); ?>....</p>
              <!-- <div class="c-btn--news p-post-card__btn">
                <a href="<?php the_permalink(); ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/post-btn02.jpg" alt="ボタン画像２" />
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/post-btn01.jpg" alt="ボタン画像２" />
                </a> -->
              </div>
            </div>
          </div>

      <?php endwhile;
      endif; ?>
      <!-- ループエンド -->
    </div>
    <!-- </div> -->
  </div>
</div>
<!--タブを切り替えて表示するコンテンツ復活？-->
<!-- <div class="panel-group l-inner"> -->
<!-- 動画でみる活用事例 -->
<!-- <div class="panel is-show" id="movie">
        <div class="panel__title">
          <figure class="panel__logo">
            <img src="images/common/logo-movie02.png" alt="">
          </figure>
          <h3>動画でみる活用事例</h3>
        </div> -->
<!-- カード -->
<!-- <div class="p-post-cards">
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
              <p class="p-post-card__text">
                エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。
              </p>
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
              <p class="p-post-card__text">
                エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。
              </p>
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
              <p class="p-post-card__text">
                エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。
              </p>
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
              <p class="p-post-card__text">
                エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。
              </p>
              <div class="c-btn--news p-post-card__btn">
                <a href="">
                  <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
                  <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
                </a>
              </div>
            </div>
          </div>
        </div> -->
<!-- </div> -->
<!-- ノウハウ・コラム -->
<!-- <div class="panel" id="column">
        <div class="panel__title">
          <figure class="panel__logo">
            <img src="images/common/logo-column02.png" alt="">
          </figure>
          <h3>ノウハウ・コラム</h3>
        </div> -->
<!-- カード -->
<!-- <div class="p-post-cards">
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
              <p class="p-post-card__text">
                エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。
              </p>
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
              <p class="p-post-card__text">
                エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。
              </p>
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
              <p class="p-post-card__text">
                エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。
              </p>
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
              <p class="p-post-card__text">
                エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。
              </p>
              <div class="c-btn--news p-post-card__btn">
                <a href="">
                  <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
                  <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
                </a>
              </div>
            </div>
          </div>
        </div> -->
<!-- </div> -->
<!-- ページネーション  -->
<?php wp_pagenavi(); ?>

<!-- <ul class="c-pagenation p-post-card__pagenation">
  <li><span>1</span></li>
  <li><a href="">2</a></li>
  <li><a href="">3</a></li>
  <li><a href="">4</a></li>
  <li><a href="">5</a></li>
</ul> -->
<!-- </div>復活？ -->

<?php get_footer(); ?>