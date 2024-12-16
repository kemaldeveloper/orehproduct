<?php 
	get_header();
	$queried_object = get_queried_object(); // объект
	$term_id = $queried_object->term_id;  // ID
	$term_modify = carbon_get_term_meta($term_id, 'catalog_item_modify');
	$thumb_id = carbon_get_term_meta($term_id, 'category_bg_img');
	$bg_color = carbon_get_term_meta($term_id, 'category_bg_color');
	// $slug = carbon_get_term_meta($term_id, 'catalog_slug');
	$term_thumbnail_url = wp_get_attachment_image_url($thumb_id, 'full');
?>
<?php if ($term_id == 20) {
		get_template_part( 'template-parts/marchpane', 'none' );
	} else { ?>
<main class="category-page">
  <!-- Sections-->
  <section class="section section--<?php echo $term_modify; ?>">
    <div class="section__bg-wrap" style="background-color: <?php echo $bg_color; ?>">
      <div class="section__bg-img-wrap"><img class="section__bg-img lazy" data-src="<?php echo $term_thumbnail_url; ?>"
          alt=""></div>
      <div class="container section__top-container">
        <h1 class="section__title"><?php echo $queried_object->name ?></h1>
        <ul class="breadcrumbs">
          <li class="breadcrumbs__item"><a class="breadcrumbs__link"
              href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a></li>
          <li class="breadcrumbs__item breadcrumbs__item--disabled"><span class="breadcrumbs__seperator"><svg
                class="icon icon--arrow-right">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#arrow-right">
                </use>
              </svg></span><a class="breadcrumbs__link" href="#"><?php echo $queried_object->name ?></a></li>
        </ul>
      </div>
    </div>
    <div class="container section__container">
      <?php if(term_description()): ?>
      <div class="section__desc-wrap">
        <div class="section__desc">
          <p>
            <?php echo term_description($term_id) ?>
          </p>
        </div>
        <?php if(carbon_get_term_meta($term_id, 'catalog_presentation_video_link')): ?>
        <div class="section__btn-oval-wrap">
          <a class="btn-oval section__btn-oval"
            href="<?php echo carbon_get_term_meta($term_id, 'catalog_presentation_video_link'); ?>" data-fancybox><span
              class="btn-oval__icon-wrap"><svg class="icon icon--play">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#play"></use>
              </svg></span><span class="btn-oval__text">Смотреть презентацию</span>
          </a>
        </div>
        <?php endif; ?>
      </div>
      <?php endif; ?>

      <?php if (carbon_get_term_meta($term_id, 'title_top')) { ?>
      <div class="section__product-title-wrap">
        <h2 class="section__product-title"><?php echo carbon_get_term_meta($term_id, 'title_top'); ?></h2>
      </div>
      <?php }?>
      <div class="products">
        <div class="row">
          <?php
								$terms = get_terms(array(
									'taxonomy' => 'nut_category',
									'parent' => $term_id,
									'orderby'    => 'id',
									'hide_empty' => false,
								));
								$termID = '';
								if (isset($terms[0]->term_id)) {
									$termID = $terms[0]->term_id;
								} else {
									$termID = $term_id;
								}
								$args = array(
									'post_type' => 'products',
									'orderby' => 'count',
									'tax_query' => array(
										array(
											'taxonomy' => 'nut_category',
											'field' => 'id',
											'terms' => $termID
										),
									),
								);
								$nut = new WP_Query($args);
							?>
          <?php if ( $nut->have_posts() ) : while ( $nut->have_posts() ) : $nut->the_post(); ?>
          <?php
									$thumbnail_id = get_post_thumbnail_id( get_the_ID() );
									$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
									$popupCheckBox = carbon_get_post_meta($post->ID, 'product_popup_switcher');
									$spicesHoverImg_ID = carbon_get_post_meta($post->ID, 'product_hover_img');
									$spicesHoverImg = wp_get_attachment_image_url($spicesHoverImg_ID, 'full');
									$spicesHoverImgAlt = get_post_meta($spicesHoverImg_ID, '_wp_attachment_image_alt', true);
								?>
          <div class="custom-col custom-col--<?php echo carbon_get_term_meta($term_id, 'catalog_column_count'); ?>">
            <div class="product-item product-item--<?php echo $term_modify; ?>">
              <?php if ($spicesHoverImg_ID) { ?>
              <div class="product-item__wrap">
                <div class="product-item__img-wrap"><img class="product-item__img lazy"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbs/dummy-image-270x340.gif"
                    data-src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>"
                    title="<?php echo $alt; ?>" /></div>
                <div class="product-item__img-wrap product-item__img-wrap--<?php echo $term_modify; ?>"><img
                    class="product-item__img lazy"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbs/dummy-image-270x340.gif"
                    data-src="<?php echo $spicesHoverImg; ?>" alt="<?php echo $spicesHoverImgAlt; ?>"
                    title="<?php echo $spicesHoverImgAlt; ?>" /></div>
              </div>
              <?php } else { ?>
              <div class="product-item__img-wrap"><img class="product-item__img lazy"
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbs/dummy-image-270x340.gif"
                  data-src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>"
                  title="<?php echo $alt; ?>" /></div>
              <?php } ?>
              <a class="trs-btn trs-btn--small product-item__link <?php if($popupCheckBox) { echo 'js-more-title-popup'; } ?>"
                href="<?php if($popupCheckBox) { echo '#request'; } else { echo get_the_permalink(); } ?>"><?php echo get_the_title(); ?></a>
            </div>
          </div>
          <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
    <?php
					$bourbon_banner_img_ID = carbon_get_term_meta($term_id, 'img_bourbon');
					$bourbon_banner_img = wp_get_attachment_image_url($bourbon_banner_img_ID, 'full');
				?>
    <?php if (carbon_get_term_meta($term_id, 'title_bourbon') && $bourbon_banner_img_ID) { ?>
    <div class="bourbon-banner section__bourbon-banner">
      <div class="container">
        <div class="bourbon-banner__row">
          <div class="bourbon-banner__col bourbon-banner__col--left">
            <h3 class="bourbon-banner__title"><?php echo carbon_get_term_meta($term_id, 'title_bourbon'); ?></h3><a
              class="trs-btn trs-btn--small bourbon-banner__btn"
              href="<?php echo get_post_permalink( 381 ); ?>">Подробнее</a>
          </div>
          <div class="bourbon-banner__col bourbon-banner__col--right">
            <div class="bourbon-banner__img-wrap"><img class="bourbon-banner__img lazy"
                data-src="<?php echo $bourbon_banner_img; ?>" alt=""></div>
          </div>
        </div>
      </div>
    </div>
    <?php }?>
    <?php
					// ID
					$flour_banner_img_ID = carbon_get_term_meta($term_id, 'flour_banner_img');
					$flour_banner_mobile_img_ID = carbon_get_term_meta($term_id, 'flour_banner_mobile_img');
					// images url
					$flour_banner_img = wp_get_attachment_image_url($flour_banner_img_ID, 'full');
					$flour_banner_mobile_img = wp_get_attachment_image_url($flour_banner_mobile_img_ID, 'full');
				?>
    <?php if ($flour_banner_img_ID && $flour_banner_mobile_img_ID) { ?>
    <div class="banner banner--flour section__banner"
      style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/categories/paste/banner-bg.jpg') no-repeat center center/cover;">
      <div class="banner__product-img-wrap">
        <img class="banner__product-img lazy" data-src="<?php echo $flour_banner_img; ?>" alt="">
        <img class="banner__product-img banner__product-img--mobile lazy"
          data-src="<?php echo $flour_banner_mobile_img ?>" alt="">
      </div>
    </div>
    <?php } ?>
    <?php
					$paste_banner_img_ID = carbon_get_term_meta($term_id, 'img_banner_paste');
					$paste_banner_title = carbon_get_term_meta($term_id, 'title_banner_paste');
					$paste_banner_desc = carbon_get_term_meta($term_id, 'desc_banner_paste');
					// images url
					$paste_banner_img = wp_get_attachment_image_url($paste_banner_img_ID, 'full');
				?>
    <?php if ($paste_banner_img_ID && $paste_banner_title) { ?>
    <div class="banner banner--paste section__banner"
      style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/categories/paste/banner-bg.jpg') no-repeat center center/cover;">
      <div class="container">
        <div class="banner__wrap">
          <div class="banner__col banner__col--left">
            <div class="banner__icon-wrap"><img class="banner__icon lazy"
                data-src="<?php echo get_template_directory_uri(); ?>/assets/img/categories/paste/banner-icon.svg"
                alt=""></div>
            <div class="banner__content-wrap">
              <h3 class="banner__title"><?php echo $paste_banner_title; ?></h3>
              <div class="banner__desc">
                <p><?php echo $paste_banner_desc; ?></p>
              </div>
            </div>
          </div>
          <div class="banner__col banner__col--right">
            <div class="banner__product-img-wrap"><img class="banner__product-img lazy"
                data-src="<?php echo $paste_banner_img; ?>" alt=""></div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
    <div class="container">
      <?php if (carbon_get_term_meta($term_id, 'title_bottom')) { ?>
      <div class="section__product-title-wrap">
        <h2 class="section__product-title"><?php echo carbon_get_term_meta($term_id, 'title_bottom'); ?></h2>
      </div>
      <?php }?>
      <div class="products">
        <div class="row">
          <?php
								$termID = '';
								if (isset($terms[1]->term_id)) {
									$termID = $terms[1]->term_id;
								} else {
									$termID = false;
								}
								$args = array(
									'post_type' => 'products',
									'orderby' => 'count',
									'tax_query' => array(
										array(
											'taxonomy' => 'nut_category',
											'field' => 'id',
											'terms' => $termID
										),
									),
								);
								$nut = new WP_Query($args);
							?>
          <?php if ( $nut->have_posts() ) : while ( $nut->have_posts() ) : $nut->the_post(); ?>
          <?php
									$thumbnail_id = get_post_thumbnail_id( get_the_ID() );
									$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
									$popupCheckBox = carbon_get_post_meta($post->ID, 'product_popup_switcher');
								?>
          <div class="custom-col custom-col--<?php echo carbon_get_term_meta($term_id, 'catalog_column_count'); ?>">
            <div class="product-item product-item--<?php echo $term_modify; ?>">
              <div class="product-item__img-wrap"><img class="product-item__img lazy"
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbs/dummy-image-270x340.gif"
                  data-src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>"
                  title="<?php echo $alt; ?>" /></div>
              <a class="trs-btn trs-btn--small product-item__link <?php if($popupCheckBox) { echo 'js-more-title-popup'; } ?>"
                href="<?php if($popupCheckBox) { echo '#request'; } else { echo get_the_permalink(); } ?>"><?php echo get_the_title(); ?></a>
            </div>
          </div>
          <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php } ?>
<?php get_footer(); ?>