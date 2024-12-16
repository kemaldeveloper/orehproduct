<section class="category-section category-section--praline fp-section" data-anchor="<?php echo $args->slug; ?>">
  <div class="container category-section__container">
    <div class="category-section__title-wrap">
      <h2 class="category-section__title section-title"><?php echo $args->name; ?></h2>
      <div class="category-section__mobile-img-wrap"><img class="category-section__mobile-img lazy"
          data-src="<?php echo get_template_directory_uri(); ?>/assets/img/index/categories/mobile-images/praline.png"
          alt=""></div><a class="link category-section__link"
        href="<?php echo get_category_link($args->term_id)?>">Смотреть все товары</a>
    </div>
  </div>
  <div class="products-presentation products-presentation--praline">
    <div class="products-presentation__background-shadow"><img class="products-presentation__img"
        data-src="<?php echo get_template_directory_uri(); ?>/assets/img/index/categories/praline/background-shadow.png"
        alt=""></div>
    <div class="products-presentation__img-wrap products-presentation__img-wrap--left"><img
        class="products-presentation__img"
        data-src="<?php echo get_template_directory_uri(); ?>/assets/img/index/categories/praline/left-img.png" alt="">
    </div>
    <div class="products-presentation__img-wrap products-presentation__img-wrap--right"><img
        class="products-presentation__img"
        data-src="<?php echo get_template_directory_uri(); ?>/assets/img/index/categories/praline/right-img.png" alt="">
    </div>
    <div class="products-presentation__items-wrap">
      <div class="products-presentation__item"><img class="products-presentation__img"
          data-src="<?php echo get_template_directory_uri(); ?>/assets/img/index/categories/praline/item1.png" alt="">
      </div>
      <div class="products-presentation__item"><img class="products-presentation__img"
          data-src="<?php echo get_template_directory_uri(); ?>/assets/img/index/categories/praline/item2.png" alt="">
      </div>
      <div class="products-presentation__item"><img class="products-presentation__img"
          data-src="<?php echo get_template_directory_uri(); ?>/assets/img/index/categories/praline/item3.png" alt="">
      </div>
      <div class="products-presentation__item"><img class="products-presentation__img"
          data-src="<?php echo get_template_directory_uri(); ?>/assets/img/index/categories/praline/item4.png" alt="">
      </div>
    </div>
  </div>

  <?php if(carbon_get_term_meta($args->term_id, 'catalog_presentation_video_link')): ?>
  <div class="category-section__btn-oval-wrap">
    <a class="btn-oval category-section__btn-oval"
      href="<?php echo carbon_get_term_meta($args->term_id, 'catalog_presentation_video_link'); ?>" data-fancybox>
      <span class="btn-oval__icon-wrap"><svg class="icon icon--play">
          <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#play"></use>
        </svg>
      </span>
      <span class="btn-oval__text">Смотреть презентацию</span>
    </a>
  </div>
  <?php endif; ?>
</section>