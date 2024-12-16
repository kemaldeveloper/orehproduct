<?php 
/**
 * Template name: HomePage Template
 */

$terms = get_terms(array(
	'taxonomy' => 'nut_category',
	'orderby'    => 'none',
  'parent' => 0,
	'hide_empty' => false,
));


function get_current_template($template_key = null){

  if (!$template_key) {
    return false;
  }

  return $blocks[$template_key];
}

get_header(); ?>
<!-- Section-->
<main class="main-page fp-sections">
  <section class="main fp-section" data-anchor="main">
    <div class="main__bg-wrap">
      <div class="main-bg">
        <div class="main-bg__layer-wrap"><img class="main-bg__layer-img"
            data-src="<?php echo get_template_directory_uri(); ?>/assets/img/index/main-bg/main-bg.png" alt=""></div>
        <div class="main-bg__line main-bg__line--top">
          <div class="main-bg__flowers main-bg__flowers--left"><img class="main-bg__flower-img"
              data-src="<?php echo get_template_directory_uri(); ?>/assets/img/index/main-bg/left-flowers.png" alt="">
          </div>
          <div class="main-bg__flowers main-bg__flowers--right"><img class="main-bg__flower-img"
              data-src="<?php echo get_template_directory_uri(); ?>/assets/img/index/main-bg/right-flowers.png" alt="">
          </div>
        </div>
        <div class="main-bg__line main-bg__line--center">
          <div class="main-bg__petal main-bg__petal--left"><img class="main-bg__petal-img"
              data-src="<?php echo get_template_directory_uri(); ?>/assets/img/index/main-bg/left-petal.png" alt="">
          </div>
          <div class="main-bg__petal main-bg__petal--right"><img class="main-bg__petal-img"
              data-src="<?php echo get_template_directory_uri(); ?>/assets/img/index/main-bg/right-petal.png" alt="">
          </div>
        </div>
        <div class="main-bg__line main-bg__line--bottom">
          <div class="main-bg__nuts main-bg__nuts--left"><img class="main-bg__nuts-img"
              data-src="<?php echo get_template_directory_uri(); ?>/assets/img/index/main-bg/left-nuts.png" alt="">
          </div>
          <div class="main-bg__nuts main-bg__nuts--right"><img class="main-bg__nuts-img"
              data-src="<?php echo get_template_directory_uri(); ?>/assets/img/index/main-bg/right-nuts.png" alt="">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="main__wrap"><a class="logo logo--big main__logo"
            href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo__img"
              data-src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo.svg" alt=""></a>
          <h1 class="main__title main-title"><?php the_title(); ?></h1>
          <div class="main__sub-title"><?php the_post(); the_content(); ?></div>
          <div class="main__btn-wrap"><a class="btn main__btn js-popup" href="#feedback"><span
                class="btn__icon-wrap"><svg class="icon icon--phone">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#phone"></use>
                </svg></span><span class="btn__text">Заказать звонок</span></a><a class="trs-btn main__btn js-popup"
              href="#price-list"><span class="trs-btn__icon-wrap"><svg class="icon icon--download">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#download">
                  </use>
                </svg></span><span class="trs-btn__text">Заказать прайс лист</span></a></div><a
            class="scroll-down js-scroll-down-fp" href="#"><img class="scroll-down__img"
              data-src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/scroll-down.png" alt=""></a>
        </div>
      </div>
    </div>
    <div class="container main__mobile-container"></div>
  </section>

  <?php 
    foreach ($terms as $term):
      if(!carbon_get_term_meta($term->term_id, 'category_switch_checkbox')):
        get_template_part( 'template-home-parts/template', carbon_get_term_meta($term->term_id, 'category_modify'), $term );
      endif;
    endforeach;
  ?>
</main>

<?php get_footer(); ?>