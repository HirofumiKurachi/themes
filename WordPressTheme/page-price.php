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
      <?php
       // 繰り返しフィールドを取得
       $license_courses = SCF::get('license_courses');
       $valid_courses = []; // 有効なデータを格納する配列

        // データのバリデーション（`course_name-1` と `course_price-1` が両方入力されているかチェック）
        if (!empty($license_courses)) {
            foreach ($license_courses as $item) {
                // `course_name-1` と `course_price-1` の取得（未設定なら空文字にする）
                $course_name = isset($item['course_name-1']) ? trim($item['course_name-1']) : '';
                $course_price = isset($item['course_price-1']) ? trim($item['course_price-1']) : '';

                // `var_dump()` でデータの中身を確認（デバッグ用）
                // echo '<pre>'; var_dump($course_name, $course_price); echo '</pre>';

                // 価格の数値変換（数値以外の文字を削除）
                $clean_price = preg_replace('/[^\d]/', '', $course_price);

                   // `course_name-1` と `course_price-1` の両方が空でない場合のみ追加
                   if (!empty($course_name) && !empty($clean_price)) {
                       $valid_courses[] = [
                           'name' => $course_name,
                           'price' => (float)$clean_price
                       ];
                   }
               }
           }

         // **有効なデータが1つもない場合、「ライセンス講習」全体を非表示**
         if (!empty($valid_courses)) :
         ?>
      <!--WP化に伴い、id追加-->
      <div id="license_courses" class="price-page-items__item price-page-item">
        <h2 class="price-page-item__head-sp">ライセンス講習</h2>
        <h2 class="price-page-item__head-pc">ライセンス講習</h2>

        <table class="price-page-item__box price-page-box">
          <?php foreach ($valid_courses as $course): ?>
          <tr>
            <td class="price-page-box__name">
              <?php echo esc_html($course['name']); ?>
            </td>
            <td class="price-page-box__price">
              ¥<?php echo number_format_i18n($course['price']); ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </table>
      </div>
      <?php endif; ?>

      <?php
        // 繰り返しフィールドを取得
        $experience_diving = SCF::get('experience_diving');
        $valid_experiences = []; // 有効なデータを格納する配列

        // データのバリデーション（`course_name-2` と `course_price-2` が両方入力されているかチェック）
        if (!empty($experience_diving)) {
            foreach ($experience_diving as $item) {
                // `course_name-2` と `course_price-2` を取得（未設定なら空文字にする）
                $course_name = isset($item['course_name-2']) ? trim($item['course_name-2']) : '';
                $course_price = isset($item['course_price-2']) ? trim($item['course_price-2']) : '';

               // 価格の数値変換（数値以外の文字を削除）
               $clean_price = preg_replace('/[^\d]/', '', $course_price);

               // `course_name-2` と `course_price-2` の両方が空でない場合のみ追加
               if (!empty($course_name) && !empty($clean_price)) {
                   $valid_experiences[] = [
                       'name' => $course_name,
                       'price' => (float)$clean_price
                      ];
                  }
              }
          }

      // **有効なデータが1つもない場合、「体験ダイビング」全体を非表示**
      if (!empty($valid_experiences)) :
      ?>
      <div id="experience_diving" class="price-page-items__item price-page-item">
        <h2 class="price-page-item__head-sp">体験ダイビング</h2>
        <h2 class="price-page-item__head-pc-long">体験ダイビング</h2>

        <table class="price-page-item__box price-page-box">
          <?php foreach ($valid_experiences as $experience): ?>
          <tr>
            <td class="price-page-box__name">
              <?php echo esc_html($experience['name']); ?>
            </td>
            <td class="price-page-box__price">
              ¥<?php echo number_format_i18n($experience['price']); ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </table>
      </div>
      <?php endif; ?>

      <?php
       // 繰り返しフィールドを取得
       $fun_diving = SCF::get('fun_diving');
       $valid_fun_diving = []; // 有効なデータを格納する配列

      // データのバリデーション（`course_name-3` と `course_price-3` が両方入力されているかチェック）
      if (!empty($fun_diving)) {
          foreach ($fun_diving as $item) {
              // `course_name-3` と `course_price-3` を取得（未設定なら空文字にする）
              $course_name = isset($item['course_name-3']) ? trim($item['course_name-3']) : '';
              $course_price = isset($item['course_price-3']) ? trim($item['course_price-3']) : '';

              // 価格の数値変換（数値以外の文字を削除）
              $clean_price = preg_replace('/[^\d]/', '', $course_price);

              // `course_name-3` と `course_price-3` の両方が空でない場合のみ追加
              if (!empty($course_name) && !empty($clean_price)) {
                  $valid_fun_diving[] = [
                      'name' => $course_name,
                      'price' => (float)$clean_price
                  ];
              }
          }
      }

       // **有効なデータが1つもない場合、「ファンダイビング」全体を非表示**
       if (!empty($valid_fun_diving)) :
       ?>
      <div id="fun_diving" class="price-page-items__item price-page-item">
        <h2 class="price-page-item__head-sp-middle">ファンダイビング</h2>
        <h2 class="price-page-item__head-pc-long">ファンダイビング</h2>

        <table class="price-page-item__box price-page-box">
          <?php foreach ($valid_fun_diving as $fun): ?>
          <tr>
            <td class="price-page-box__name">
              <?php echo esc_html($fun['name']); ?>
            </td>
            <td class="price-page-box__price">
              ¥<?php echo number_format_i18n($fun['price']); ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </table>
      </div>
      <?php endif; ?>

      <?php
       // 繰り返しフィールドを取得
       $special_diving = SCF::get('special_diving');
       $valid_special_diving = []; // 有効なデータを格納する配列

       // データのバリデーション（`course_name-4` と `course_price-4` が両方入力されているかチェック）
       if (!empty($special_diving)) {
           foreach ($special_diving as $item) {
               // `course_name-4` と `course_price-4` を取得（未設定なら空文字にする）
               $course_name = isset($item['course_name-4']) ? trim($item['course_name-4']) : '';
               $course_price = isset($item['course_price-4']) ? trim($item['course_price-4']) : '';

               // 価格の数値変換（数値以外の文字を削除）
               $clean_price = preg_replace('/[^\d]/', '', $course_price);

               // `course_name-4` と `course_price-4` の両方が空でない場合のみ追加
               if (!empty($course_name) && !empty($clean_price)) {
                   $valid_special_diving[] = [
                       'name' => $course_name,
                       'price' => (float)$clean_price
                   ];
               }
           }
       }

       // **有効なデータが1つもない場合、「スペシャルダイビング」全体を非表示**
       if (!empty($valid_special_diving)) :
       ?>
      <div class="price-page-items__item price-page-item">
        <h2 class="price-page-item__head-sp-last">スペシャルダイビング</h2>
        <h2 class="price-page-item__head-pc">スペシャルダイビング</h2>

        <table class="price-page-item__box price-page-box">
          <?php foreach ($valid_special_diving as $special): ?>
          <tr>
            <td class="price-page-box__name">
              <?php echo esc_html($special['name']); ?>
            </td>
            <td class="price-page-box__price">
              ¥<?php echo number_format_i18n($special['price']); ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </table>
      </div>
      <?php endif; ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>