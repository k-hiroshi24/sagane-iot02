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
  <div class="c-sub-head__inner l-inner">
    <div class="c-sub-head__logo">
      <img src="<?php echo get_template_directory_uri(); ?>//images/common/logo-title-black.png" alt="ロゴ">
    </div>
    <h2 class="c-sub-head__title">新着情報</h2>
  </div>
</div>
<section class="p-u-news l-u-news ">
  <div class="p-u-news__inner">
    <div class="p-post-cards">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <div class="p-post-card__news">
            <figure class="p-post-card__img">

              <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
              <?php else : ?>
                <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" width="100" height="100" alt="サガネ係長のロゴ" /></a>
              <?php endif; ?>

            </figure>
            <div class="p-post-card__body">
              <div class="p-post-card__news-date"><?php echo get_the_date('Y.m.d'); ?></div>
              <h4 class="p-post-card__news-title"><?php the_title(); ?></h4>
              <div class="c-btn--news p-post-card__news-btn">
                <a href="<?php the_permalink(); ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/post-btn02.jpg" alt="ボタン画像２" />
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/post-btn01.jpg" alt="ボタン画像２" />
                </a>
              </div>
            </div>
          </div>

      <?php endwhile;
      endif; ?>
    </div>
    <!-- pagenation -->
    <!-- <ul class="c-pagenation p-post-card__pagenation">
      <li><span>1</span></li>
      <li><a href="">2</a></li>
      <li><a href="">3</a></li>
      <li><a href="">4</a></li>
      <li><a href="">5</a></li>
    </ul> -->
    <?php wp_pagenavi(); ?>


</section>

<?php get_footer(); ?>