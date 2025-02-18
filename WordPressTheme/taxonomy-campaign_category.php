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

      <!-- カスタムタクソノミーのターム一覧を取得してループ -->
      <?php
      $terms = get_terms(array(
        'taxonomy'   => 'campaign_category',
        'hide_empty' => false, // 投稿が0件のタームも表示
      ));

      if (!empty($terms) && !is_wp_error($terms)) :
        foreach ($terms as $term) :
          $is_active = is_tax('campaign_category', $term->slug) ? 'is-active' : '';
          ?>
      <a href="<?php echo esc_url(get_term_link($term)); ?>"
        class="campaign-tab__item <?php echo esc_attr($is_active); ?>">
        <?php echo esc_html($term->name); ?>
      </a>
      <?php
        endforeach;
      endif;
      ?>

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
          <?php if (has_post_thumbnail()) : ?>
          <!-- アイキャッチ画像を表示 -->
          <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>"
            alt="<?php echo esc_attr(get_the_title()); ?>">
          <?php else : ?>
          <!-- アイキャッチ画像がない場合のデフォルト画像 -->
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/no-image.jpg" alt="No Image">
          <?php endif; ?>
        </div>
        <div class="campaign-card__body-large">
          <div class="campaign-card__text">
            <!-- キャンペーンカテゴリーを取得して表示 -->
            <?php
            $categories = get_the_terms(get_the_ID(), 'campaign_category'); // カスタムタクソノミー取得
            if ($categories && !is_wp_error($categories)) :
              $category_name = $categories[0]->name; // 最初のカテゴリーを取得
            else :
              $category_name = '未分類'; // カテゴリーがない場合のデフォルト値
            endif;
            ?>
            <p class="campaign-card__title"><?php echo esc_html($category_name); ?></p>
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
            <a href="<?php echo esc_url(home_url('/')); ?>contact" class="button">Contact&nbsp;us<span
                class="button-arrow2"></span><span class="button-arrow"></span> </a>
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

<?php get_footer(); ?>