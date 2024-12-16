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

      <!-- "すべて" リンク -->
      <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>"
        class="campaign-tab__item <?php if (!is_tax('campaign_category')) echo 'is-active'; ?>">
        ALL
      </a>

      <!-- カスタムタクソノミーのターム一覧を出力 -->
      <?php
// 手動で並べたいタームスラッグ順
$desired_order = array('license-courses', 'fun-diving', 'experience-diving');

// 手動順でターム情報を取得
foreach ($desired_order as $slug):
  $term = get_term_by('slug', $slug, 'campaign_category');
  if ($term && !is_wp_error($term)):
    $is_active = (is_tax('campaign_category', $term->slug)) ? 'is-active' : '';
?>
      <a href="<?php echo esc_url(get_term_link($term)); ?>"
        class="campaign-tab__item <?php echo esc_attr($is_active); ?>">
        <?php echo esc_html($term->name); ?>
      </a>
      <?php endif; endforeach; ?>
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
            <p class="campaign-card__title"><?php the_field('title_sub') ?></p>
            <p class="campaign-card__title-sub-large"><?php the_title(); ?></p>
          </div>
          <div class="campaign-card__price-campaign">
            <p class="campaign-card__price-text">全部コミコミ(お一人様)</p>
            <div class="campaign-card__price-box">
              <p class="campaign-card__price-old"><?php the_field('original_price') ?></p>
              <p class="campaign-card__campaign-price-new"><?php the_field('discount_price') ?></p>
            </div>
          </div>
          <div class="campaign-card__text-box md-none">
            <p class="campaign-card__text-main">
              <?php the_field('text_main') ?>
            </p>
            <div class="campaign-card__date">
              <?php
              // ACFから日付データを取得
              $start_year = get_field('start_year');
              $start_month = get_field('start_month');
              $start_day = get_field('start_day');

              $end_year = get_field('end_year');
              $end_month = get_field('end_month');
              $end_day = get_field('end_day');

              // データがすべて存在するかを確認
              if ($start_year && $start_month && $start_day && $end_year && $end_month && $end_day): ?>

              <p>
                <?php
                // 年が同じかどうか確認
                if ($start_year === $end_year):
                // 年が同じ場合は開始年のみを表示
                echo esc_html("{$start_year}/{$start_month}/{$start_day} - {$end_month}/{$end_day}");
                else:
                // 年が異なる場合はすべて表示
                echo esc_html("{$start_year}/{$start_month}/{$start_day} - {$end_year}/{$end_month}/{$end_day}");
                endif;?>
              </p>

              <?php else: ?>
              <p>日付範囲が設定されていません。</p>
              <?php endif; ?>

            </div>
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
    <?php wp_pagenavi(); ?>
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