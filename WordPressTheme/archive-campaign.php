<?php get_header(); ?>
<!--サブビュー-->
<section class="sub-page-mv">
  <div class="sub-page-mv__inner">
    <div class="sub-page-mv__title">
      <h1 class="sub-page-mv__title-main page-section-title">Campaign</h1>
    </div>
    <picture class="sub-page-mv__picture">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/campaign-page-pc-img.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign-page-sp-img.jpg" alt="2匹の黄色い魚が泳いでいる様子" />
    </picture>
  </div>
</section>
<!--パンくず-->
<?php get_template_part('parts/breadcrumb') ?>

<!--タブ-->
<div class="campaign-page-tab campaign-page-tab-top">
  <div class="campaign-page-tab__inner inner">
    <div class="campaign-page-tab__items campaign-tab">
      <a href="#" class="campaign-tab__item is-color">ALL</a>
      <a href="#" class="campaign-tab__item">ライセンス講習</a>
      <a href="#" class="campaign-tab__item">ファンダイビング</a>
      <a href="#" class="campaign-tab__item">体験ダイビング</a>
    </div>
  </div>
</div>
<!--コンテンツ-->
<section class="campaign-page-contents campaign-page-contents-top">
  <div class="campaign-page-contents__inner inner">
    <ul class="campaign-page-contents__items campaign-page-card">
      <!-- ループ処理開始 -->
      <?php if (have_posts()):
      while (have_posts()):
       the_post(); ?>
      <li class="campaign-page-card__item campaign-card">
        <div class="campaign-card__img-large">
          <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像画像" />
        </div>
        <div class="campaign-card__body-large">
          <div class="campaign-card__text">
            <p class="campaign-card__title"><?php the_title(); ?></p>
            <p class="campaign-card__title-sub-large"><?php the_title(); ?></p>
          </div>
          <div class="campaign-card__price-campaign">
            <p class="campaign-card__price-text">全部コミコミ(お一人様)</p>
            <div class="campaign-card__price-box">
              <p class="campaign-card__price-old">¥56,000</p>
              <p class="campaign-card__campaign-price-new">¥46,000</p>
            </div>
          </div>
          <div class="campaign-card__text-box md-none">
            <p class="campaign-card__text-main">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
            <div class="campaign-card__date">2023/6/1-9/30</div>
            <p class="campaign-card__reserve">ご予約・お問い合わせはコチラ</p>
          </div>
          <div class="campaign-card__layout md-none">
            <a href="#" class="button">Contact&nbsp;us<span class="button-arrow2"></span><span
                class="button-arrow"></span> </a>
          </div>
        </div>
      </li>
      <!-- ループ終了 -->
      <?php endwhile; endif; ?>
    </ul>
  </div>
</section>
<div class="pagination pagination-top">
  <div class="pagination__inner inner">
    <div class="pagination__nav">
      <a class="pagination__prev" href="#"></a>
      <span class="pagination__current">1</span>
      <a class="pagination__larger" href="#">2</a>
      <a class="pagination__larger" href="#">3</a>
      <a class="pagination__larger" href="#">4</a>
      <a class="pagination__larger md-none" href="#">5</a>
      <a class="pagination__larger md-none" href="#">6</a>
      <a class="pagination__next" href="#"></a>
    </div>
  </div>
</div>
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