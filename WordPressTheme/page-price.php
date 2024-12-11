<?php get_header(); ?>
<!--サブビュー-->
<section class="sub-page-mv">
  <div class="sub-page-mv__inner">
    <div class="sub-page-mv__title">
      <h1 class="sub-page-mv__title-main page-section-title">Price</h1>
    </div>
    <picture class="sub-page-mv__picture">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/price-page-pc-img.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price-page-sp-img.jpg" alt="黄色い魚の群れの中をダイバーが泳いでいる様子" />
    </picture>
  </div>
</section>

<!--パンくず-->
<?php get_template_part('parts/breadcrumb') ?>

<!--プライス-->
<section class="price-page price-page-top">
  <div class="price-page__inner inner">
    <div class="price-page__items price-page-items">
      <div class="price-page-items__item price-page-item">
        <h2 class="price-page-item__head-sp">ライセンス講習</h2>
        <h2 class="price-page-item__head-pc">ライセンス講習</h2>
        <?php
        // 繰り返しフィールドを取得
         $license_courses = SCF::get('license_courses');
        ?>
        <?php if (!empty($license_courses)): ?>
        <table class="price-page-item__box price-page-box">
          <?php foreach ($license_courses as $item): ?>
          <?php
         // 数値変換用に不要な文字を削除
           $clean_price = preg_replace('/[^\d]/', '', $item['course_price-1']); 
          ?>
          <tr>
            <td class="price-page-box__name">
              <?php echo esc_html($item['course_name-1']); ?>
            </td>
            <td class="price-page-box__price">
              ¥<?php echo number_format_i18n((float)$clean_price); ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </table>
        <?php endif; ?>

      </div>
      <div class="price-page-items__item price-page-item">
        <h2 class="price-page-item__head-sp">体験ダイビング</h2>
        <h2 class="price-page-item__head-pc-long">体験ダイビング</h2>
        <?php
// 繰り返しフィールドを取得
$experience_diving = SCF::get('experience_diving');
?>
        <?php if (!empty($experience_diving)): ?>
        <table class="price-page-item__box price-page-box">
          <?php foreach ($experience_diving as $item): ?>
          <?php 
    // 数値変換用に不要な文字を削除
    $clean_price = preg_replace('/[^\d]/', '', $item['course_price-2']); 
    ?>
          <tr>
            <td class="price-page-box__name">
              <?php echo esc_html($item['course_name-2']); ?>
            </td>
            <td class="price-page-box__price">
              ¥<?php echo number_format_i18n((float)$clean_price); ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </table>
        <?php endif; ?>
      </div>
      <div class="price-page-items__item price-page-item">
        <h2 class="price-page-item__head-sp-middle">ファンダイビング</h2>
        <h2 class="price-page-item__head-pc-long">ファンダイビング</h2>
        <?php
// 繰り返しフィールドを取得
$fun_diving = SCF::get('fun_diving');
?>
        <?php if (!empty($fun_diving)): ?>
        <table class="price-page-item__box price-page-box">
          <?php foreach ($fun_diving as $item): ?>
          <?php 
    // 数値変換用に不要な文字を削除
    $clean_price = preg_replace('/[^\d]/', '', $item['course_price-3']); 
    ?>
          <tr>
            <td class="price-page-box__name">
              <?php echo esc_html($item['course_name-3']); ?>
            </td>
            <td class="price-page-box__price">
              ¥<?php echo number_format_i18n((float)$clean_price); ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </table>
        <?php endif; ?>
      </div>
      <div class="price-page-items__item price-page-item">
        <h2 class="price-page-item__head-sp-last">スペシャルダイビング</h2>
        <h2 class="price-page-item__head-pc">スペシャルダイビング</h2>
        <?php
// 繰り返しフィールドを取得
$special_diving = SCF::get('special_diving');
?>
        <?php if (!empty($special_diving)): ?>
        <table class="price-page-item__box price-page-box">
          <?php foreach ($special_diving as $item): ?>
          <?php 
    // 数値変換用に不要な文字を削除
    $clean_price = preg_replace('/[^\d]/', '', $item['course_price-4']); 
    ?>
          <tr>
            <td class="price-page-box__name">
              <?php echo esc_html($item['course_name-4']); ?>
            </td>
            <td class="price-page-box__price">
              ¥<?php echo number_format_i18n((float)$clean_price); ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </table>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<!--コンタクト-->
<section class="contact contact-price-top">
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