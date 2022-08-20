<?php get_header(); ?>

<section class="section-head">
  <div class="section-head__inner l-inner">
    <div class="c-section-head">
      <h1>お問合せ</h1>
    </div>
  </div>
</section>
<!-- サブタイトル -->
<div class="c-sub-head">
  <div class="c-sub-head__inner l-inner">
    <div class="c-sub-head__logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo-title-black.png" alt="ロゴ">
    </div>
    <h2 class="c-sub-head__title">お問合せフォーム</h2>
  </div>
</div>
<!-- コンタクトコンテンツ -->
<section class="p-u-contact">
  <div class="p-contact-page__inner l-inner">
    <div class="p-contact-page__container">
      <div class="p-contact-page__tel">
        <p class="p-contact-page__tel-title">お電話でのお問合せ</p>
        <a href="tel:0772-62-8088">
          <p class="p-contact-page__tel-num tel-num">TEL.0772-62-8088</p>
        </a>
        <p class="p-contact-page__tel-text">お電話でのお問合せは、平日9:00〜17:00で対応させていただきます。</p>
      </div>
      <div class="p-contact-page__mail">
        <p class="p-contact-page__mail-title">メールでのお問合せ</p>
        <p class="p-contact-page__mail-text">下記の入力フォームに必要事項をご記入ください。</p>
      </div>
      <div class="p-contact-page__c-form">
    
        <?php the_content(); ?>

        
        <!-- <div class="p-contact-page__c-form-inner">
          <label>
            <span class="title">会社名<span class="required">※</span></span>
            <input class="input-form" type="text" name="company-name" required>
          </label>
          <label>
            <span class="title">部署名</span>
            <input class="input-form" type="text" name="department-name" required>
          </label>
          <label>
            <span class="title">ご担当者様氏名<span class="required">※</span></span>
            <input class="input-form" type=" text" name="name" required>
          </label>
          <label>
            <span class="title">メールアドレス<span class="required">※</span></span>
            <input class="input-form" type=" email" name="email" required>
          </label>
          <label>
            <span class="title">電話番号<span class="required">※</span></span>
            <input class="input-form" type=" tel" name="tel">
          </label>
          <label>
            <span class="title-textarea">お問合せ内容<span class="required">※</span></span>
            <textarea type="textarea" name="contact" required></textarea>
          </label>
        </div> -->
        <!-- <div class="checkbox__text">
          <p><a href="page-policy.html" class="blue">プライバシーポリシー</a>に同意の上、送信ください。</p>
        </div>
        <label class="checkbox__item ">
          <input type="checkbox" name="checkbox-item" class="form__input checked">
          <span class="checkbox__label">個人情報保護方針に同意する</span>
        </label> -->
        <!-- サブミットボタン -->
        <!-- <div class="submit-btn">
          <label class="submit ">
            <div class="submit-wrap">
              <input type="submit" name="submit" value="内容を確認する" class="submit__form">
            </div>
            <span class="submit__label"></span>
          </label>
        </div> -->
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>