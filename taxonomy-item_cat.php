<?php get_header(); ?>

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
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo-title-black.png" alt="">
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
    <a href="<?php echo home_url(); ?>/works" class="p-service-tab__nav-item is-active contents01" data-nav="0">記事で読む導入事例</a>
    <a href="<?php echo home_url(); ?>/movie" class="p-service-tab__nav-item contents02" data-nav="1">動画でみる活用事例</a>
    <a href="<?php echo home_url(); ?>/column" class="p-service-tab__nav-item contents03" data-nav="2">ノウハウ・コラム</a>
  </div>
  <!-- 記事で読む導入事例 -->
  <div class="p-service-tab__content" data-content="0">
    <!-- <div class="panel"> -->
    <div class="panel__title" id="post">
      <figure class="panel__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo-post02.png" alt="">
      </figure>
      <h3>記事で読む導入事例</h3>
    </div>
    <!-- カード -->
    <div class="p-post-cards">

      <!-- ループスタート -->
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <div class="p-post-card">
            <figure class="p-post-card__img">
              <?php the_post_thumbnail('full'); ?>
            </figure>

            <div class="p-post-card__body">
              <div class="p-post-card__wrap">
                <div class="p-post-card__meta">
                  <div class="p-post-card__date"><?php echo get_the_date('Y.m.d'); ?>更新</div>
                  <div class="p-post-card__customer"><?php echo CFS()->get('works-client-name'); ?></div>
                </div>
                <ul class="p-post-card__tag">
                  <?php
                  $terms = get_the_terms($post->ID, 'item_cat');
                  if ($terms && !is_wp_error($terms)) : ?>
                    <?php foreach ($terms as $term) : ?>
                      <li class="<?php echo $term->slug; ?>"><a href="<?php echo get_term_link($term->slug, 'item_cat'); ?>"><?php echo $term->name; ?></a></li>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </ul>
              </div>
              <h4 class="p-post-card__title"><?php echo CFS()->get('works-title'); ?></h4>
              <p class="p-post-card__text"><?php echo mb_substr((post_custom("works-content")), 0, 100); ?>....</p>
              <div class="c-btn--news p-post-card__btn">
                <a href="">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/post-btn02.jpg" alt="ボタン画像２" />
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/post-btn01.jpg" alt="ボタン画像２" />
                </a>
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
<!--タブを切り替えて表示するコンテンツ-->
<!-- <div class="panel-group l-inner"> -->
<!-- 動画でみる活用事例 -->
<!-- 
      <div class="panel is-show" id="movie">
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
<!-- <ul class="c-pagenation p-post-card__pagenation">
  <li><span>1</span></li>
  <li><a href="">2</a></li>
  <li><a href="">3</a></li>
  <li><a href="">4</a></li>
  <li><a href="">5</a></li>
</ul> -->
<?php wp_pagenavi(); ?>

<!-- </div> -->

<?php get_footer(); ?>