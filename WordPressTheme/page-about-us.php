<?php get_header(); ?>
<!--サブビュー-->
<section class="sub-page-mv">
  <div class="sub-page-mv__inner">
    <div class="sub-page-mv__title">
      <h1 class="sub-page-mv__title-main page-section-title">About us</h1>
    </div>
    <picture class="sub-page-mv__picture">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/aboutus-page-pc-img.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/aboutus-page-sp-img.jpg" alt="シーサーがこちらを見ている様子" />
    </picture>
  </div>
</section>

<!--パンくず-->
<?php get_template_part('parts/breadcrumb') ?>

<!--アバウトアス-->
<section class="about-us-page about-us-page-top">
  <div class="about-us-page__inner inner">
    <div class="about-us-page__img">
      <div class="about-us-page__img-small md-none">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/aboutus-img1.jpg" alt="屋根の上にシーサーの置物がおいてある様子"
          class="about-us-page__img1" />
      </div>
      <div class="about-us-page__img-big">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/aboutus-img3.jpg" alt="2匹の黄色い魚が海中を泳いでいる様子"
          class="about-us-page__img2" />
      </div>
    </div>
    <div class="about-us-page__container">
      <h3 class="about-us-page__head">Dive&nbsp;into<br />the&nbsp;Ocean</h3>
      <div class="about-us-page__container-box">
        <p class="about-us-page__text">
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
        </p>
      </div>
    </div>
  </div>
</section>
<!--ギャラリー-->
<section class="gallery gallery-top">
  <div class="gallery__inner inner">
    <div class="gallery__title section-title">
      <p class="section-title__sub">Gallery</p>
      <h2 class="section-title__main">フォト</h2>
    </div>
    <?php
// SCFから繰り返しフィールドを取得
$gallery_images = SCF::get('gallery_images'); // 繰り返しフィールド名 'gallery_images'
if (!empty($gallery_images)): // 繰り返しフィールドが空でない場合
    echo '<div class="gallery-wrapper">';
    foreach ($gallery_images as $gallery_image): // 繰り返し処理
        // 各サブフィールドの画像URLを取得して出力
        for ($i = 1; $i <= 6; $i++): // gallery-image1 から gallery-image6 までループ
            $field_name = 'gallery-image' . $i; // 動的にフィールド名を生成
            if (!empty($gallery_image[$field_name])): // フィールドが空でないか確認
                $image_url = wp_get_attachment_url($gallery_image[$field_name]); // 画像URLを取得
                if ($image_url):
                    echo '<div class="gallery-item">';
                    echo '<img src="' . esc_url($image_url) . '" alt="ギャラリー画像">';
                    echo '</div>';
                endif;
            endif;
        endfor;
    endforeach;
    echo '</div>';
endif;
?>

  </div>
  <!-- モーダル -->
  <div class="gallery__modal gallery-modal">
    <ul class="gallery-modal__items">
      <li class="gallery-modal__item js-modal js-modal-close" id="gallery-modal-1">
        <div class="gallery-modal__inner">
          <div class="gallery-modal__img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/gallery1.jpg" alt="珊瑚礁の周りをオレンジ色の魚達が泳いでいる様子" />
          </div>
        </div>
      </li>
      <li class="gallery-modal__item js-modal js-modal-close" id="gallery-modal-2">
        <div class="gallery-modal__inner inner">
          <div class="gallery-modal__img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/gallery2.jpg" alt="綺麗な海に船が3隻停泊している様子" />
          </div>
        </div>
      </li>
      <li class="gallery-modal__item js-modal js-modal-close" id="gallery-modal-3">
        <div class="gallery-modal__inner inner">
          <div class="gallery-modal__img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/gallery3.jpg" alt="2匹の熱帯魚が泳いでいる様子" />
          </div>
        </div>
      </li>
      <li class="gallery-modal__item js-modal js-modal-close" id="gallery-modal-4">
        <div class="gallery-modal__inner inner">
          <div class="gallery-modal__img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/gallery4.jpg" alt="1匹の熱帯魚が泳いでいる様子" />
          </div>
        </div>
      </li>
      <li class="gallery-modal__item js-modal js-modal-close" id="gallery-modal-5">
        <div class="gallery-modal__inner inner">
          <div class="gallery-modal__img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/gallery5.jpg" alt="熱帯魚が群れで泳いでいる様子" />
          </div>
        </div>
      </li>
      <li class="gallery-modal__item js-modal js-modal-close" id="gallery-modal-6">
        <div class="gallery-modal__inner inner">
          <div class="gallery-modal__img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/gallery6.jpg" alt="珊瑚礁の周りを黄色い魚が泳いでいる様子" />
          </div>
        </div>
      </li>
    </ul>
  </div>
</section>

<!--コンタクト-->
<section class="contact contact-about-top">
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
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/contact-top-button.svg" alt="トップボタン">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>