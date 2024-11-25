<?php get_header(); ?>
<!--サブビュー-->
<section class="sub-page-mv">
  <div class="sub-page-mv__inner">
    <div class="sub-page-mv__title">
      <h1 class="sub-page-mv__title-main page-section-title">Voice</h1>
    </div>
    <picture class="sub-page-mv__picture">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/voice-page-pc-img.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/voice-page-sp-img.jpg"
        alt="4人のダイバーが潜る前にプロの指導を受けている様子" />
    </picture>
  </div>
</section>
<!--パンくず-->
<?php get_template_part('parts/breadcrumb') ?>

<!--タブ-->
<div class="voice-page-tab voice-page-tab-top">
  <div class="voice-page-tab__inner inner">
    <div class="campaign-page-tab__items campaign-tab">
      <a href="#" class="campaign-tab__item is-color">ALL</a>
      <a href="information-page.html?id=tab1" class="campaign-tab__item">ライセンス講習</a>
      <a href="information-page.html?id=tab3" class="campaign-tab__item">ファンダイビング</a>
      <a href="information-page.html?id=tab2" class="campaign-tab__item">体験ダイビング</a>
    </div>
  </div>
</div>
<!--コンテンツ-->
<section class="voice-page voice-page-top">
  <div class="voice-page__inner inner">
    <div class="voice-page__cards voice-cards">
      <!-- ループ処理開始 -->
      <?php if (have_posts()):
      while (have_posts()):
       the_post(); ?>
      <div class="voice-cards__item-box voice-card">
        <div class="voice-card__item">
          <div class="voice-card__container">
            <div class="voice-card__title-box">
              <div class="voice-card__title-box1">
                <p class="voice-card__title-sub">20代(女性)</p>
                <p class="voice-card__title"><?php the_title(); ?></p>
              </div>
              <div class="voice-card__title-box2">
                <p class="voice-card__title-text">ここにタイトルが入ります。ここにタイトル</p>
              </div>
            </div>
            <div class="voice-card__img colorbox">
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像画像" />
            </div>
          </div>
          <div class="voice-card__text-box">
            <p class="voice-card__text-sub">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。
            </p>
          </div>
        </div>
      </div>
      <!-- ループ終了 -->
      <?php endwhile; endif; ?>
    </div>
    <div class="voice-page__pagination voice-page-pagination-top pagination">
      <div class="pagination__inner inner">
        <?php wp_pagenavi(); ?>
      </div>
    </div>
  </div>
</section>
<!--コンタクト-->
<section class="contact contact-campaign-top">
  <div class="contact__inner inner">
    <div class="contact__container">
      <div class="contact__box contact-box">
        <a href="index.html" class="contact-box__logo-layout">
          <h3 class="contact-box__logo">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/contact-logo.svg" alt="CodeUps" />
          </h3>
        </a>
        <div class="contact-box__information">
          <ul class="contact-box__items">
            <li class="contact-box__items-item contact-item">
              <address class="contact-item__private">
                <p class="contact-item__text">沖縄県那覇市1-1</p>
              </address>
            </li>
            <li class="contact-box__items-item contact-item">
              <a href="TEL:0120-000-0000">
                <p class="contact-item__text">TEL:0120-000-0000</p>
              </a>
            </li>
            <li class="contact-box__items-item contact-item">
              <p class="contact-item__text">営業時間:8:30-19:00</p>
            </li>
            <li class="contact-box__items-item contact-item">
              <p class="contact-item__text">定休日:毎週火曜日</p>
            </li>
          </ul>
          <div class="contact-box__map">
            <iframe class="contact-box__img"
              src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2467.513625872067!2d127.69482336933658!3d26.222972059058005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z6YKj6KaH5biCMS0x!5e0!3m2!1sja!2sjp!4v1708751870509!5m2!1sja!2sjp"
              width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
      <div class="contact__title-layout">
        <div class="contact__title section-title">
          <p class="section-title__sub--large">Contact</p>
          <h2 class="section-title__main">お問い合わせ</h2>
          <p class="contact__title-text">ご予約・お問い合わせはコチラ</p>
          <div class="contact__button-layout">
            <a href="contact-page.html" class="button">Contact&nbsp;us<span class="button-arrow2"></span><span
                class="button-arrow"></span> </a>
          </div>
        </div>
        <div class="contact__top-button js-top-button">
          <a href="">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/contact-top-button.svg" alt="トップボタン" />
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>