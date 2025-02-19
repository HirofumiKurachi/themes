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
      <!-- "すべて" リンク -->
      <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>"
        class="campaign-tab__item <?php if (!is_tax('voice_category')) echo 'is-active'; ?>">
        ALL
      </a>

      <!-- カスタムタクソノミーのターム一覧を出力 -->
      <?php
// 手動で並べたいタームスラッグ順
$desired_order = array('license-courses', 'fun-diving', 'experience-diving');

// 手動順でターム情報を取得
foreach ($desired_order as $slug):
  $term = get_term_by('slug', $slug, 'voice_category');
  if ($term && !is_wp_error($term)):
    $is_active = (is_tax('voice_category', $term->slug)) ? 'is-active' : '';
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
                <?php
                  // ACFの「ユーザー情報」グループを取得
                  $user_information = get_field('user_information');

                  // データが取得できた場合のみ処理
                  if ($user_information):
                      $era = $user_information['era']; // 年代
                      $sex = $user_information['sex']; // 性別

                      // 出力用の文字列を作成
                      $output = '';
                      if ($era) {
                          $output .= esc_html($era); // 例: "20代"
                      }
                      if ($sex) {
                          // 性別がある場合にのみ (性別) を追加
                          $output .= esc_html("({$sex})");
                      }
                  ?>
                <p class="voice-card__title-sub">
                  <?php echo $output; ?>
                </p>

                <?php else: ?>
                <p class="voice-card__title-sub">ユーザー情報が設定されていません。</p>
                <?php endif; ?>

                <!-- ボイスカテゴリーを取得して表示 -->
                <?php
                 $categories = get_the_terms(get_the_ID(), 'voice_category'); // カスタムタクソノミー取得
                 if ($categories && !is_wp_error($categories)) :
                   $category_name = $categories[0]->name; // 最初のカテゴリーを取得
                 else :
                   $category_name = '未分類'; // カテゴリーがない場合のデフォルト値
                 endif;
                 ?>
                <p class="voice-card__title"><?php echo esc_html($category_name); ?></p>
              </div>
              <div class="voice-card__title-box2">
                <p class="voice-card__title-text"><?php the_field('title-text') ?></p>
              </div>
            </div>
            <div class="voice-card__img colorbox">
              <?php if (has_post_thumbnail()) : ?>
              <!-- アイキャッチ画像を表示 -->
              <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>"
                alt="<?php echo esc_attr(get_the_title()); ?>">
              <?php else : ?>
              <!-- アイキャッチ画像がない場合のデフォルト画像 -->
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/no-image.jpg" alt="No Image">
              <?php endif; ?>
            </div>
          </div>
          <div class="voice-card__text-box">
            <p class="voice-card__text-sub">
              <?php the_field('text_sub') ?>
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

<?php get_footer(); ?>