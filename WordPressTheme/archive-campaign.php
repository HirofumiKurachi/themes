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
      // `campaign_category` の全タームを取得
      $terms = get_terms(array(
        'taxonomy'   => 'campaign_category', // 取得するタクソノミーの指定
        'hide_empty' => false, // 投稿が0件のタームも含める
      ));

      // 取得したタームをループで出力
      if (!empty($terms) && !is_wp_error($terms)) :
        foreach ($terms as $term) :
          // 現在表示中のカテゴリーなら `is-active` クラスを付与
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
              <?php
               // ACFの「キャンペーン価格」グループを取得
               $campaign_price = get_field('campaign_price');

               // データが取得できた場合のみ処理
               if ($campaign_price):
                   $original_price = $campaign_price['original_price'];
                   $discount_price = $campaign_price['discount_price'];
               ?>

              <p class="campaign-card__price-old">
                <?php echo esc_html(number_format($original_price)); ?>円
              </p>
              <p class="campaign-card__price-new">
                <?php echo esc_html(number_format($discount_price)); ?>円
              </p>
              <?php else: ?>
              <p>価格情報が設定されていません。</p>
              <?php endif; ?>
            </div>
          </div>
          <div class="campaign-card__text-box md-none">
            <p class="campaign-card__text-main">
              <?php the_field('text_main') ?>
            </p>
            <div class="campaign-card__date">
              <?php
              // ACFの「キャンペーン期間」グループを取得
              $campaign_period = get_field('campaign_period');

              // データが取得できたか確認
              if ($campaign_period):
                  $start_date = $campaign_period['start_year-month-day'];
                  $end_date = $campaign_period['end_year-month-day'];
              else:
                  $start_date = null;
                  $end_date = null;
              endif;

              // 日付が取得できた場合のみ処理
              if ($start_date && $end_date):
                  // YYYY/MM/DD 形式の場合はスラッシュで分割
                  list($start_year, $start_month, $start_day) = explode('/', $start_date);
                  list($end_year, $end_month, $end_day) = explode('/', $end_date);

                  // ゼロ埋めを削除（01 → 1 に変換）
                  $start_month = intval($start_month);
                  $start_day = intval($start_day);
                  $end_month = intval($end_month);
                  $end_day = intval($end_day);
              ?>

              <p>
                <?php
                 // 年が同じ場合は開始年を省略
                 if ($start_year === $end_year):
                     echo esc_html("{$start_year}/{$start_month}/{$start_day} - {$end_month}/{$end_day}");
                 else:
                     echo esc_html("{$start_year}/{$start_month}/{$start_day} - {$end_year}/{$end_month}/{$end_day}");
                 endif;
                 ?>
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