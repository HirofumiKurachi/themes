<?php get_header(); ?>
<!--サブビュー-->
<section class="sub-page-mv">
  <div class="sub-page-mv__inner">
    <div class="sub-page-mv__title">
      <h1 class="sub-page-mv__title-main page-section-title">Blog</h1>
    </div>
    <picture class="sub-page-mv__picture">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/blog-page-pc-img.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog-page-sp-img.jpg" alt="大量の魚が泳いでいる様子" />
    </picture>
  </div>
</section>
<!--パンくず-->
<?php get_template_part('parts/breadcrumb') ?>



<!--ブログ-->
<section class="blog-page blog-page-top">
  <div class="blog-page__inner inner">
    <div class="blog-page__container blog-page-container">
      <div class="blog-page-container__left">
        <?php if (have_posts()):
      while (have_posts()):
       the_post(); ?>
        <div class="blog-page-container__cards blog-cards-detail">
          <div class="blog-cards-detail__title">
            <time class="blog-cards-detail__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m/d'); ?></time>
            <h2 class="blog-cards-detail__text"><?php the_title(); ?></h2>
          </div>
          <figure class="blog-cards-detail__item-box">
            <?php if(get_the_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像画像" />
            <?php else: ?>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/noimage.jpg" alt="noimage">
            <?php endif; ?>
          </figure>
          <div class="blog-cards-detail__item-container">
            <p>
              <?php the_content(); ?>
            </p>
            <figure>
              <?php if(get_the_post_thumbnail()): ?>
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像画像" />
              <?php else: ?>
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/noimage.jpg" alt="noimage">
              <?php endif; ?>
            </figure>
            <p>
              <?php the_content(); ?>
            </p>
            <ul>
              <li>リスト１</li>
              <li>リスト２</li>
              <li>リスト３</li>
            </ul>
            <p>
              <?php the_content(); ?>
            </p>
          </div>
        </div>
        <div class="blog-page-detail__pagination blog-page-detail-pagination-top pagination-detail">
          <div class="pagination-detail__inner inner">
            <div class="pagination-detail__nav">
              <?php
          $prev = get_previous_post();
          if ( ! empty( $prev ) ) {
            $prev_url = esc_url( get_permalink( $prev->ID ) );
          }

          $next = get_next_post();
          if ( ! empty( $next ) ) {
            $next_url = esc_url( get_permalink( $next->ID ) );
          }
        ?>
              <?php if ( ! empty( $prev ) ) : ?>
              <a class="pagination-detail__prev" href="<?php echo $prev_url; ?>"></a>
              <?php endif; ?>
              <?php if ( ! empty( $next ) ) : ?>
              <a class="pagination-detail__next" href="<?php echo $next_url; ?>"></a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="blog-page-detail__container-right">
        <div class="blog-page-detail__heading blog-page-detail-heading-top blog-detail-heading">
          <div class="blog-detail-heading__inner blog-heading">
            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; endif; ?>
<!--コンタクト-->
<section class="contact contact-detail-top">
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