<?php get_header(); ?>

<section class="section-head">
  <div class="section-head__inner l-inner">
    <div class="c-section-head">
      <h1>お知らせ</h1>
      <p>新着情報</p>
    </div>
  </div>
</section>
<!-- サブタイトル -->
<div class="c-sub-head">
  <div class="c-sub-head__inner">
    <div class="c-sub-head__logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo-title-black.png" alt="">
    </div>
    <h2 class="c-sub-head__title">新着情報</h2>
  </div>
</div>

<!-- 投稿記事 -->
<section class="p-u-news-single">
  <div class="p-u-news-single__inner ">
    <div class="p-news-single__contents">
      <div class="p-news-single__inner ">

        <div class="p-news-single__meta">
          <span class="p-news-single__date"><?php echo get_the_date('Y.m.d'); ?></span>
          <div class="p-news-single__title">
            <p><?php the_title(); ?></p>
          </div>
        </div>
        <figure class="p-news-single__img">
        
        <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                  <?php else : ?>
                    <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" width="100" height="100" alt="デフォルト画像" /></a>
                  <?php endif; ?>
        </figure>
        <div class="p-news-single__text">
          <p><?php the_content(); ?></p>
        </div>
      </div>


      <!--サイドバー -->
      <div class="p-news-single__sidebar">
        <div class="p-news-single__sidebar-inner">
          <div class="p-news-single__sidebar-content">
            <div class="p-news-single__sidebar-title">
              <p>新着記事</p>
            </div>
            <div class="p-news-single__sidebar-link">
              <!-- 新着記事取得 -->
              <?php
              $args = array("posts_per_page" => 3,);
              $postslist = get_posts($args);
              foreach ($postslist as $post) :
                setup_postdata($post); ?>
                <div>
                  <a href="<?php the_permalink(); ?>">
                    <?php echo get_the_date('Y.m.d'); ?>
                    <?php the_title(); ?>
                  </a>
                </div>

              <?php
              endforeach;
              wp_reset_postdata();
              ?>
            </div>
          </div>
          <div class="p-news-single__sidebar-content">
            <div class="p-news-single__sidebar-title">
              <p>アーカイブ</p>
            </div>
            <div class="p-news-single__sidebar-link">
              <ul>
                <!-- 月別アーカイブ取得 -->
              <?php wp_get_archives( 'post_type=post&type=monthly&show_post_count=1' ); ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="c-btn--service p-u-news-single__btn">
      <a href="<?php echo home_url(); ?>/category/news">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/btn-news-single02.jpg" alt="ボタン画像２" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/btn-news-single01.jpg" alt="ボタン画像２" />
      </a>
    </div>
    <!-- <div class="p-news-single__btn">
          <a href="news-archive.html" class="c-btn">一覧ページへ</a>
        </div> -->
  </div>
</section>

<?php get_footer(); ?>