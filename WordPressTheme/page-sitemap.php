<?php get_header(); ?>
<!--サブビュー-->
<section class="sub-page-mv">
  <div class="sub-page-mv__inner">
    <div class="sub-page-mv__title">
      <h1 class="sub-page-mv__title-main page-section-title">Site MAP</h1>
    </div>
    <picture class="sub-page-mv__picture">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/site-map-page-pc-img.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/site-map-page-sp-img.jpg" alt="珊瑚礁に様々な魚が集まっている様子" />
    </picture>
  </div>
</section>

<!--パンくず-->
<?php get_template_part('parts/breadcrumb') ?>

<!--サイトマップ-->
<section class="site-map-page site-map-page-top">
  <div class="site-map-page__inner inner">
    <div class="site-map__container site-map-menu">
      <div class="site-map-menu__left">
        <ul class="site-map-menu__left-items-upper">
          <li class="site-map-menu__item">
            <a href="#" class="site-map-menu__link-main">
              <p class="site-map-menu__logo-text">キャンペーン</p>
            </a>
          </li>
          <li class="site-map-menu__item-text"><a href="#">ライセンス取得</a></li>
          <li class="site-map-menu__item-text"><a href="#">貸切体験ダイビング</a></li>
          <li class="site-map-menu__item-text"><a href="#">ナイトダイビング</a></li>
          <li class="site-map-menu__item">
            <a href="#" class="site-map-menu__link-sub">
              <p class="site-map-menu__logo-text">私たちについて</p>
            </a>
          </li>
        </ul>
        <ul class="site-map-menu__left-items-bottom">
          <li class="site-map-menu__item">
            <a href="#" class="site-map-menu__link-main">
              <p class="site-map-menu__logo-text">ダイビング情報</p>
            </a>
          </li>
          <li class="site-map-menu__item-text"><a href="information-page.html?id=tab1">ライセンス講習</a></li>
          <li class="site-map-menu__item-text"><a href="information-page.html?id=tab3">体験ダイビング</a></li>
          <li class="site-map-menu__item-text"><a href="information-page.html?id=tab2">ファンダイビング</a></li>
          <li class="site-map-menu__item">
            <a href="blog-page.html" class="site-map-menu__link-sub">
              <p class="site-map-menu__logo-text">ブログ</p>
            </a>
          </li>
        </ul>
      </div>
      <div class="site-map-menu__right">
        <ul class="site-map-menu__right-items-upper">
          <li class="site-map-menu__item">
            <a href="voice-page.html" class="site-map-menu__link-main">
              <p class="site-map-menu__logo-text">お客様の声</p>
            </a>
          </li>
          <li class="site-map-menu__item">
            <a href="price-page.html" class="site-map-menu__link-sub">
              <p class="site-map-menu__logo-text">料金一覧</p>
            </a>
          </li>
          <li class="site-map-menu__item-text-b"><a href="information-page.html?id=tab1">ライセンス講習</a></li>
          <li class="site-map-menu__item-text-b"><a href="information-page.html?id=tab3">体験ダイビング</a></li>
          <li class="site-map-menu__item-text-b"><a href="information-page.html?id=tab2">ファンダイビング</a></li>
        </ul>
        <ul class="site-map-menu__right-items-bottom">
          <li class="site-map-menu__item">
            <a href="faq-page.html" class="site-map-menu__link-main">
              <p class="site-map-menu__logo-text">よくある質問</p>
            </a>
          </li>
          <li class="site-map-menu__item">
            <a href="privacy-page.html" class="site-map-menu__link-sub">
              <p class="site-map-menu__logo-text">プライバシー<br class="md-show" />ポリシー</p>
            </a>
          </li>
          <li class="site-map-menu__item">
            <a href="terms-page.html" class="site-map-menu__link-sub">
              <p class="site-map-menu__logo-text">利用規約</p>
            </a>
          </li>
          <li class="site-map-menu__item">
            <a href="contact-page.html" class="site-map-menu__link-sub">
              <p class="site-map-menu__logo-text">お問い合わせ</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>