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


<?php get_footer(); ?>