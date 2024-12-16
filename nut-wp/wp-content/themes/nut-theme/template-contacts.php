<?php 
/**
 * Template name: ContactsPage Template
 */
get_header(); ?>

<main class="contacts-page">
  <!-- Sections-->
  <section class="section section--small-header section--contacts-page">
    <div class="section__bg-wrap" style="background-color: #F9F6F0"></div>
    <div class="container">
      <h1 class="section__title"><?php the_title(); ?></h1>
      <ul class="breadcrumbs">
        <li class="breadcrumbs__item"><a class="breadcrumbs__link"
            href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a></li>
        <li class="breadcrumbs__item breadcrumbs__item--disabled"><span class="breadcrumbs__seperator"><svg
              class="icon icon--arrow-right">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#arrow-right"></use>
            </svg></span><a class="breadcrumbs__link" href="#"><?php the_title(); ?></a></li>
      </ul>
    </div>
    <div class="contacts section__contacts">
      <div class="container contacts__container">
        <div class="row contacts__row">
          <div class="contacts__col contacts__col--left">
            <div class="contacts__small-title"><?php echo carbon_get_post_meta(get_the_ID(), 'managers_label') ?></div>
            <?php if( $managers = carbon_get_post_meta( get_the_ID(), 'contact_items' ) ): ?>
            <div class="contacts__feedback-item-list">
              <?php  foreach( $managers as $manager ): ?>
              <div class="contacts__feedback-item">
                <div class="contacts__name md-title"><?php echo $manager['contact_name']; ?></div>
                <?php if($manager['contact_phone']) { ?>
                <?php
                    $phone = $manager['contact_phone'];
                    $phone = str_replace(array('(', ')', ' ', '-'), '', $phone );
                  ?>
                <a class="phone phone--normal phone--black phone--fw-medium contacts__phone"
                  href="tel:<?php echo $phone; ?>"><?php echo $manager['contact_phone']; ?></a>
                <?php } ?>
                <?php if($manager['contact_email']){ ?>
                <a class="email email--fw-medium contacts__email"
                  href="mailto:<?php echo $manager['contact_email']; ?>"><?php echo $manager['contact_email']; ?></a>
                <?php } ?>
              </div>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>
          </div>
          <div class="contacts__col contacts__col--center">
            <?php if (carbon_get_theme_option('address')) { ?>
            <div class="contacts__small-title">Адрес</div>
            <div class="contacts__text contacts__text--address"><?php echo carbon_get_theme_option('address'); ?></div>
            <?php } ?>
          </div>
          <div class="contacts__col contacts__col--right">
            <?php if (carbon_get_theme_option('worktime')) { ?>
            <div class="contacts__small-title">Часы работы</div>
            <div class="contacts__text contacts__text--worktime"><?php echo carbon_get_theme_option('worktime'); ?>
            </div>
            <?php } ?>
          </div>
        </div>
        <div class="contacts__feedback-btn-wrap"><a class="trs-btn trs-btn--small contacts__btn js-popup"
            href="#ask-popup">Оставить заявку</a></div>
      </div>
    </div>
    <div class="map"
      data-cords-latitude="<?php echo carbon_get_post_meta(get_the_ID(), 'contacts_page_map_cords_lat') ?>"
      data-cords-longtitude="<?php echo carbon_get_post_meta(get_the_ID(), 'contacts_page_map_cords_long') ?>">
      <div id="map"></div>
    </div>
  </section>
</main>

<?php get_footer(); ?>