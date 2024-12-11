<?php get_header(); ?>
<!--サブビュー-->
<section class="sub-page-mv">
  <div class="sub-page-mv__inner">
    <div class="sub-page-mv__title">
      <h1 class="sub-page-mv__title-main page-section-title">FAQ</h1>
    </div>
    <picture class="sub-page-mv__picture">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/faq-page-pc-img.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/faq-page-sp-img.jpg"
        alt="白い砂浜とエメラルドグリーンの海が広がっている様子" />
    </picture>
  </div>
</section>

<!--パンくず-->
<?php get_template_part('parts/breadcrumb') ?>

<!--アコーディオン-->
<div class="faq-page__accordion faq-page-accordion faq-page-accordion-top js-accordion">
  <div class="faq-page-accordion__inner inner">
    <div class="faq-page-accordion__container accordion-container">
      <?php
// FAQの繰り返しフィールドを取得
$faq_list = SCF::get('faq_list');

if (!empty($faq_list)): ?>
      <div class="faq-page__accordion js-accordion">
        <div class="faq-page-accordion__inner inner">
          <div class="faq-page-accordion__container accordion-container">

            <?php foreach ($faq_list as $faq): ?>
            <div class="faq-page-accordion__item accordion-item js-faq-page-accordion-item">
              <h3 class="faq-page-accordion__title js-faq-page-accordion-title">
                <?php echo esc_html($faq['faq_question']); ?>
              </h3>
              <div class="faq-page-accordion__content js-faq-page-accordion-content">
                <p class="faq-page-accordion__text">
                  <?php echo nl2br(esc_html($faq['faq_answer'])); ?>
                </p>
              </div>
            </div>
            <?php endforeach; ?>

          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</div>

<!--コンタクト-->
<section class="contact contact-faq-top">
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