<?php get_header(); ?>

<section class="section-head">
  <div class="section-head__inner l-inner">
    <div class="c-section-head">
      <h1>資料請求</h1>
    </div>
  </div>
</section>
<!-- サブタイトル -->
<div class="c-sub-head">
  <div class="c-sub-head__inner l-inner">
    <div class="c-sub-head__logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo-title-black.png" alt="ロゴ">
    </div>
    <h2 class="c-sub-head__title">資料請求フォーム</h2>
  </div>
</div>
<!-- コンタクトコンテンツ -->
<section class="p-u-contact">
  <div class="p-document-request__inner ">
    <div class="p-contact-page__container">
      <p class="p-document-request__text">スマートファクトリー構築をご検討、導入進行中の企業様にむけて「サガネ係長のSMART FACTORY」のパンフレットおよび下記のフォーム項目「ご興味のあるカテゴリー」のチェックに応じて、各種資料を無償でお送りさせていただきます。</p>
      <div class="p-contact-page__c-form">
        <?php the_content(); ?>
        <!-- <p class="p-contact-page__c-form-text"><span>※</span>は必須項目になります。</p>
        <div class="p-contact-page__c-form-inner">
          <label class="no-columu">
            <span class="title">会社名<span class="required">※</span></span>
            <input class="input-form" type="text" name="company-name" required>
          </label>
          <label>
            <span class="title">部署名</span>
            <input class="input-form" type="text" name="department-name" required>
          </label>
          <label>
            <span class="title">ご担当者様氏名<span class="required">※</span></span>
            <input class="input-form" type="text" name="name" required>
          </label>
          <label>
            <span class="title">メールアドレス<span class="required">※</span></span>
            <input class="input-form" type="email" name="email" required>
          </label>
          <label>
            <span class="title">電話番号<span class="required">※</span></span>
            <input class="input-form" type="tel" name="tel">
          </label> -->
        <!-- 興味のあるカテゴリーにチェック -->
        <!-- <div class="checkbox__cat">
            <p>ご興味のあるカテゴリー<span>〜複数選択可</span></p>
          </div>

          <div class="checkbox__cat-wrap">
            <label for="item01" class="checkbox__item-cat ">
              <input id="item01" type="checkbox" name="checkbox-item" value="item01" class="form__input checked">
              <span class="checkbox__label-cat">スマートファクトリー・DX化全般</span>
            </label>
            <label for="item02" class="checkbox__item-cat ">
              <input id="item02" type="checkbox" name="checkbox-item" value="item01" class="form__input checked">
              <span class="checkbox__label-cat">SCADAパッケージソフト「サガネ係長のIoT」</span>
            </label>
            <label for="item03" class="checkbox__item-cat ">
              <input id="item03" type="checkbox" name="checkbox-item" value="item01" class="form__input checked">
              <span class="checkbox__label-cat">トレサビシステム</span>
            </label>
            <label for="item04" class="checkbox__item-cat ">
              <input id="item04" type="checkbox" name="checkbox-item" value="item01" class="form__input checked">
              <span class="checkbox__label-cat">自動化関連装置</span>
            </label>
          </div>
          <label class="q-textarea">
            <span class="title-q">ご相談・ご要望ご質問等ございましたらご記入下さい。</span>
            <textarea class="q-textarea-box" type="textarea" name="contact"></textarea>
          </label> -->
        <!-- サブミットボタン -->

        <!-- 個人情報同意チェック -->
        <!-- <div class="checkbox__text">
          <p><a href="page-policy.html" class="blue">プライバシーポリシー</a>に同意の上、送信ください。</p>
        </div>
        <label class="checkbox__item ">
          <input type="checkbox" name="checkbox-item" class="form__input checked">
          <span class="checkbox__label">個人情報保護方針に同意する</span>
        </label>
        <div class="submit-btn">
          <label class="submit ">
            <div class="submit-wrap02">
              <input type="submit" name="submit" value="内容を確認する" class="submit__form">
            </div>
            <span class="submit__label"></span>
          </label>
        </div>
      </div>
    </div>
  </section> -->

      </div><?php get_footer(); ?>