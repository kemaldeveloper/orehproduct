<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nut-theme
 */

?>
<?php
	$phone = carbon_get_theme_option('phone');
	$phone = str_replace(array('(', ')', ' ', '-'), '', $phone );
?>
<?php if (is_page_template('template-home.php')) { ?>
<!-- Footer-->
<!-- Menu popup-->
<div class="mfp mfp--menu zoom-anim-dialog mfp-hide" id="menu">
  <div class="menu">
    <div class="menu__row menu__row--top">
      <div class="menu__top-col menu__top-col--left"><a class="logo menu__logo"
          href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo__img lazy"
            data-src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo.svg" alt=""></a>
        <div class="menu__mobile-title">Меню</div>
      </div>
      <div class="menu__top-col menu__top-col--right">
        <div class="menu__info-wrap">
          <div class="menu__feedback-wrap">
            <?php if (carbon_get_theme_option('phone')) { ?>
            <a class="phone menu__phone" href="tel:<?php echo $phone; ?>"><span class="phone__icon-wrap"><svg
                  class="icon icon--square-phone">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#square-phone">
                  </use>
                </svg></span><span class="phone__text"><?php echo carbon_get_theme_option('phone'); ?></span></a>
            <?php } ?>
            <?php if (carbon_get_theme_option('email')) { ?>
            <a class="email menu__email"
              href="mailto:<?php echo carbon_get_theme_option('email'); ?>"><?php echo carbon_get_theme_option('email'); ?></a>
          </div>
          <?php } ?>
          <div class="menu__btn-wrap"><a class="trs-btn trs-btn--small menu__btn js-popup" href="#ask-popup-main">Задать
              вопрос</a></div>
        </div>
      </div>
    </div>
    <div class="menu__row menu__row--center">
      <div class="menu__col menu__col--left">
        <nav class="big-nav">
          <?php
							wp_nav_menu( array(
								'theme_location'	=> 'header_main_menu',
								'menu_class'			=> 'big-nav__list',
								'container' 			=> 'ul',
							) );
						?>
        </nav>
      </div>
      <div class="menu__col menu__col--right">
        <nav class="small-nav">
          <?php
							wp_nav_menu( array(
								'theme_location'	=> 'category_menu',
								'menu_class'			=> 'small-nav__list',
								'container' 			=> 'ul',
							) );
						?>
        </nav>
      </div>
      <div class="menu__col menu__col--mobile">
        <?php if (carbon_get_theme_option('address')) { ?>
        <div class="address menu__address">
          <div class="address__icon-wrap"><svg class="icon icon--geo">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#geo"></use>
            </svg></div>
          <div class="address__text"><?php echo carbon_get_theme_option('address'); ?></div>
        </div>
        <?php } ?>
      </div>
    </div>
    <div class="menu__row menu__row--bottom">
      <div class="menu__col menu__col--left">
        <div class="copyright-text">© «ОрехПродукт»</div>
      </div>
      <div class="menu__col menu__col--right">
        <?php if (carbon_get_theme_option('address')) { ?>
        <div class="copyright-text"><?php echo carbon_get_theme_option('address'); ?></div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
<!-- Ask popup Main-->
<div class="mfp mfp--ask-popup zoom-anim-dialog mfp-hide" id="ask-popup-main">
  <div class="request-popup">
    <div class="request-popup__top-row"><a class="logo request-popup__logo" href="index.html"><img
          class="logo__img lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo.svg"
          alt=""></a></div>
    <div class="request-popup__wrap">
      <h2 class="request-popup__title">Задать вопрос</h2>
      <form class="request-popup__form">
        <div class="request-popup__inputs">
          <div class="input-wrap"><input type="text" name="name" data-name="Имя" placeholder="Как к Вам обращаться?"
              required="required" /></div>
          <div class="input-wrap"><input type="email" name="email" data-name="Email" placeholder="Email"
              required="required" /></div>
          <div class="input-wrap"><input type="text" name="phone" data-name="Телефон" placeholder="Телефон"
              required="required" /></div>
          <div class="input-wrap"><textarea name="comments" data-name="Комментарий" cols="30" rows="1"
              placeholder="Комментарий"></textarea></div>
        </div><button class="trs-btn trs-btn--small request-popup__btn" type="submit">Отправить вопрос</button>
        <div class="form-result">
          <div class="mess">
            <div class="mess__title">Спасибо!</div>
            <div class="mess__desc">Мы свяжемся с Вами в ближайшее время.</div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Feedback popup-->
<div class="mfp mfp--request-popup mfp--feedback-popup zoom-anim-dialog mfp-hide" id="feedback">
  <div class="request-popup">
    <h2 class="request-popup__title">Заказать звонок</h2>
    <form class="request-popup__form">
      <div class="request-popup__inputs">
        <div class="input-wrap"><input type="text" name="name" data-name="Имя" placeholder="Как к Вам обращаться?"
            required="required" /></div>
        <div class="input-wrap"><input type="text" name="phone" data-name="Телефон" placeholder="Телефон"
            required="required" /></div>
      </div><button class="btn btn--small btn--large request-popup__btn" type="submit">Заказать звонок</button>
      <div class="form-result">
        <div class="mess">
          <div class="mess__title">Спасибо!</div>
          <div class="mess__desc">Мы свяжемся с Вами в ближайшее время.</div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- Price List popup-->
<div class="mfp mfp--request-popup mfp--price-list zoom-anim-dialog mfp-hide" id="price-list">
  <div class="request-popup">
    <h2 class="request-popup__title">Заказать прайс лист</h2>
    <form class="request-popup__form">
      <div class="request-popup__inputs">
        <div class="input-wrap"><input type="text" name="name" data-name="Имя" placeholder="Как к Вам обращаться?"
            required="required" /></div>
        <div class="input-wrap"><input type="email" name="email" data-name="Email" placeholder="Email"
            required="required" /></div>
        <div class="input-wrap"><input type="text" name="phone" data-name="Телефон" placeholder="Телефон"
            required="required" /></div>
        <div class="input-wrap"><textarea name="comments" data-name="Комментарий" cols="30" rows="1"
            placeholder="Комментарий"></textarea></div>
      </div><button class="trs-btn trs-btn--small request-popup__btn" type="submit">Заказать прайс лист</button>
      <div class="form-result">
        <div class="mess">
          <div class="mess__title">Спасибо!</div>
          <div class="mess__desc">Мы свяжемся с Вами в ближайшее время.</div>
        </div>
      </div>
    </form>
  </div>
</div>
<?php } else { ?>
<footer class="footer">
  <div class="footer__top-line">
    <div class="container">
      <div class="row footer__row">
        <div class="footer__col footer__col--left"><a class="logo logo--medium footer__logo"
            href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo__img lazy"
              data-src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/footer-logo.svg" alt=""></a></div>
        <div class="footer__col footer__col--center">
          <?php if (carbon_get_theme_option('phone')) { ?>
          <div class="footer__small-title">Телефон / факс</div><a
            class="phone phone--white phone--normal phone--big footer__phone"
            href="tel:<?php echo $phone; ?>"><?php echo carbon_get_theme_option('phone'); ?></a>
          <?php } ?>
          <a class="trs-btn trs-btn--green trs-btn--small footer__btn js-popup" href="#ask-popup">Оставить заявку</a>
          <?php if (carbon_get_theme_option('email')) { ?>
          <div class="footer__small-title">E-mail</div><a class="email email--green email--big footer__email"
            href="mailto:<?php echo carbon_get_theme_option('email'); ?>"><?php echo carbon_get_theme_option('email'); ?></a>
          <?php } ?>
        </div>
        <div class="footer__col footer__col--right">
          <?php if (carbon_get_theme_option('address')) { ?>
          <div class="footer__small-title">Адрес</div>
          <div class="footer__address-text"><?php echo carbon_get_theme_option('address'); ?></div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__bottom-line">
    <div class="container">
      <div class="row footer__row">
        <div class="footer__bottom-col footer__bottom-col--left">
          <div class="footer__copyright">© 2020, «Orehprodukt.ru». Все права защищены.</div>
        </div>
        <div class="footer__bottom-col footer__bottom-col--right">
          <ul class="socials footer__socials">
            <?php $social_links_list = carbon_get_theme_option( 'nut_theme_social_list' ); ?>
            <?php foreach ($social_links_list as $social_links_list_item): ?>
            <?php if($social_links_list_item['show_social_link']): ?>
            <li class="socials__item">
              <a class="socials__link" href="<?php echo esc_url( $social_links_list_item['nut_theme_social_url'] ); ?>"
                target="_blank">
                <?php echo wp_get_attachment_image( $social_links_list_item['nut_theme_social_icon'] ); ?>
              </a>
            </li>
            <?php endif; ?>
            <?php  endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Catalog popup-->
<div class="mfp mfp--catalog-popup zoom-anim-dialog mfp-hide" id="catalog">
  <div class="catalog-popup">
    <div class="container">
      <h2 class="catalog-popup__title">Каталог</h2>
      <div class="product-catalog">
        <div class="row product-catalog__row">

          <?php
							$terms = get_terms(array(
								'taxonomy' => 'nut_category',
								'parent' => 0,
								'orderby'    => 'none',
								'hide_empty' => false,
							));
							foreach ($terms as $term) { ?>
          <?php 
									$term_modify = carbon_get_term_meta($term->term_id, 'catalog_item_modify');
									$thumb_id = carbon_get_term_meta($term->term_id, 'thumb');
									$term_thumbnail_url = wp_get_attachment_image_url($thumb_id, 'full');
									$image_alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', TRUE);
								?>
          <div class="product-catalog__col">
            <a class="product-catalog__item product-catalog__item--<?php echo $term_modify; ?>"
              href="<?php echo get_category_link($term->term_id)?>">
              <span class="product-catalog__title"><?php echo $term->name ?></span><span
                class="product-catalog__img-wrap">
                <img class="product-catalog__img lazy" data-src="<?php echo $term_thumbnail_url; ?>"
                  alt=<?php echo $image_alt;?>>
              </span>
            </a>
          </div>
          <?php }
						?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Menu popup-->
<div class="mfp mfp--menu zoom-anim-dialog mfp-hide" id="menu">
  <div class="menu">
    <div class="menu__row menu__row--top">
      <div class="menu__top-col menu__top-col--left"><a class="logo menu__logo"
          href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo__img lazy"
            data-src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo.svg" alt=""></a>
        <div class="menu__mobile-title">Меню</div>
      </div>
      <div class="menu__top-col menu__top-col--right">
        <div class="menu__info-wrap">
          <div class="menu__feedback-wrap">
            <?php if (carbon_get_theme_option('phone')) { ?>
            <a class="phone menu__phone" href="tel:<?php echo $phone; ?>"><span class="phone__icon-wrap"><svg
                  class="icon icon--square-phone">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#square-phone">
                  </use>
                </svg></span><span class="phone__text"><?php echo carbon_get_theme_option('phone'); ?></span></a>
            <?php } ?>
            <?php if (carbon_get_theme_option('email')) { ?>
            <a class="email menu__email"
              href="mailto:<?php echo carbon_get_theme_option('email'); ?>"><?php echo carbon_get_theme_option('email'); ?></a>
          </div>
          <?php } ?>
          <div class="menu__btn-wrap"><a class="trs-btn trs-btn--small menu__btn js-popup" href="#ask-popup-main">Задать
              вопрос</a></div>
        </div>
      </div>
    </div>
    <div class="menu__row menu__row--center">
      <div class="menu__col menu__col--left">
        <nav class="big-nav">
          <?php
							wp_nav_menu( array(
								'theme_location'	=> 'header_main_menu',
								'menu_class'			=> 'big-nav__list',
								'container' 			=> 'ul',
							) );
						?>
        </nav>
      </div>
      <div class="menu__col menu__col--right">
        <nav class="small-nav">
          <?php
							wp_nav_menu( array(
								'theme_location'	=> 'category_menu',
								'menu_class'			=> 'small-nav__list',
								'container' 			=> 'ul',
							) );
						?>
        </nav>
      </div>
      <div class="menu__col menu__col--mobile">
        <?php if (carbon_get_theme_option('address')) { ?>
        <div class="address menu__address">
          <div class="address__icon-wrap"><svg class="icon icon--geo">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#geo"></use>
            </svg></div>
          <div class="address__text"><?php echo carbon_get_theme_option('address'); ?></div>
        </div>
        <?php } ?>
      </div>
    </div>
    <div class="menu__row menu__row--bottom">
      <div class="menu__col menu__col--left">
        <div class="copyright-text">© «ОрехПродукт»</div>
      </div>
      <div class="menu__col menu__col--right">
        <?php if (carbon_get_theme_option('address')) { ?>
        <div class="copyright-text"><?php echo carbon_get_theme_option('address'); ?></div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
<!-- Order popup-->
<div class="mfp mfp--ask-popup zoom-anim-dialog mfp-hide" id="order-popup">
  <div class="request-popup">
    <div class="request-popup__top-row"><a class="logo request-popup__logo" href="index.html"><img
          class="logo__img lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo.svg"
          alt=""></a></div>
    <div class="request-popup__wrap">
      <h2 class="request-popup__title">Заказать образец</h2>
      <form class="request-popup__form">
        <div class="request-popup__inputs">
          <div class="input-wrap"><input type="text" name="name" data-name="Имя" placeholder="Как к Вам обращаться?"
              required="required" /></div>
          <div class="input-wrap"><input type="email" name="email" data-name="Email" placeholder="Email"
              required="required" /></div>
          <div class="input-wrap"><input type="text" name="phone" data-name="Телефон" placeholder="Телефон"
              required="required" /></div>
          <div class="input-wrap"><textarea name="comments" data-name="Комментарий" cols="30" rows="1"
              placeholder="Комментарий"></textarea></div>
        </div><button class="trs-btn trs-btn--small request-popup__btn" type="submit">Заказать образец</button>
        <div class="form-result">
          <div class="mess">
            <div class="mess__title">Спасибо!</div>
            <div class="mess__desc">Мы свяжемся с Вами в ближайшее время.</div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Ask popup-->
<div class="mfp mfp--ask-popup zoom-anim-dialog mfp-hide" id="ask-popup">
  <div class="request-popup">
    <div class="request-popup__top-row"><a class="logo request-popup__logo" href="index.html"><img
          class="logo__img lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo.svg"
          alt=""></a></div>
    <div class="request-popup__wrap">
      <h2 class="request-popup__title">Задать вопрос</h2>
      <form class="request-popup__form">
        <div class="request-popup__inputs">
          <div class="input-wrap"><input type="text" name="name" data-name="Имя" placeholder="Как к Вам обращаться?"
              required="required" /></div>
          <div class="input-wrap"><input type="email" name="email" data-name="Email" placeholder="Email"
              required="required" /></div>
          <div class="input-wrap"><input type="text" name="phone" data-name="Телефон" placeholder="Телефон"
              required="required" /></div>
          <div class="input-wrap"><textarea name="comments" data-name="Комментарий" cols="30" rows="1"
              placeholder="Комментарий"></textarea></div>
        </div><button class="trs-btn trs-btn--small request-popup__btn" type="submit">Получить предложение</button>
        <div class="form-result">
          <div class="mess">
            <div class="mess__title">Спасибо!</div>
            <div class="mess__desc">Мы свяжемся с Вами в ближайшее время.</div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Product popup-->
<!-- <div class="mfp mfp--product zoom-anim-dialog mfp-hide" id="product">
		<div class="product-info">
			<div class="preloader">
				<div class="preloader__circle"></div>
			</div>
			<div class="product-info__row">
				<div class="product-info__col product-info__col--left">
					<div class="product-info__content product-info__content--left">
						<div class="product-info__container product-info__container--left">
							<div class="product-info__sliders-wrap">
								<div class="product-slider owl-carousel product-info__product-slider"></div>
								<div class="product-slider-navigation"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="product-info__col product-info__col--right">
					<div class="product-info__content product-info__content--right">
						<div class="product-info__container product-info__container--right">
							<div class="product-info__img-title product-info__img-title--right">Паста</div>
							<h2 class="product-info__title">Миндальная паста</h2>
							<div class="info-list product-info__info-list"></div>
							<div class="product-info__toggle-desc">
								<div class="product-info__desc"></div>
							</div><a class="link product-info__link" href="#">Показать всё</a>
							<div class="product-info__btn-wrap"><a class="btn btn--small product-info__order-btn js-popup" href="#ask-popup">Заказать образец</a><a class="trs-btn trs-btn--small product-info__offer-btn js-popup" href="#ask-popup">Получить предложение</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
<!-- Request popup-->
<div class="mfp mfp--request-popup zoom-anim-dialog mfp-hide" id="request">
  <div class="request-popup">
    <h2 class="request-popup__title">Насадки, шприцы, мешочки, переходники</h2>
    <form class="request-popup__form">
      <div class="request-popup__inputs">
        <div class="input-wrap"><input type="text" name="name" data-name="Имя" placeholder="Как к Вам обращаться?"
            required="required" /></div>
        <div class="input-wrap"><input type="email" name="email" data-name="Email" placeholder="Email"
            required="required" /></div>
        <div class="input-wrap"><input type="text" name="phone" data-name="Телефон" placeholder="Телефон"
            required="required" /></div>
        <div class="input-wrap"><textarea name="comments" data-name="Комментарий" cols="30" rows="1"
            placeholder="Комментарий"></textarea></div>
      </div><button class="trs-btn trs-btn--small request-popup__btn" type="submit">Получить предложение</button>
      <div class="form-result">
        <div class="mess">
          <div class="mess__title">Спасибо!</div>
          <div class="mess__desc">Мы свяжемся с Вами в ближайшее время.</div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- Success popup-->
<div class="mfp mfp--succes-popup zoom-anim-dialog mfp-hide" id="success">
  <div class="form-result form-result--success">
    <div class="mess">
      <div class="mess__title">Спасибо!</div>
      <div class="mess__desc">Мы свяжемся с Вами в ближайщее время</div>
    </div>
  </div>
</div>
<?php } ?>
<?php wp_footer(); ?>

</body>

</html>