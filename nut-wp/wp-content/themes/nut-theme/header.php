<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nut-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180"
    href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon-180x180.png">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <?php if (is_page_template('template-home.php')) { ?>
  <!-- Header-->
  <header class="main-header">
    <a class="logo logo--hidden main-header__logo" href="#home">
      <img class="logo__img lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo.svg"
        alt="">
    </a>
    <a class="hamburger hamburger--slider hamburger--small main-header__hamburger js-menu js-popup" href="#menu">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </a>
  </header>
  <?php } else { ?>
  <header class="header">
    <div class="container">
      <div class="row header__row">
        <div class="header__col header__col--left">
          <div class="header__logo-wrap"><a class="logo header__logo"
              href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo__img lazy"
                data-src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo.svg" alt=""></a><a
              class="logo logo--mobile-logo header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span
                class="logo__img-wrap"><img class="logo__img lazy"
                  data-src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/mobile-logo.png"
                  alt=""></span><span class="logo__text">Орехпродукт</span></a><a
              class="btn btn--green header__btn js-popup" href="#catalog"><span class="btn__icon-wrap"><svg
                  class="icon icon--hamburger">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#hamburger">
                  </use>
                </svg></span><span class="btn__text">Каталог</span></a></div>
        </div>
        <div class="header__col header__col--center">
          <nav class="nav">
            <?php
							wp_nav_menu( array(
								'theme_location'	=> 'header_main_menu',
								'menu_class'			=> 'nav__list',
								'container' 			=> 'ul',
							) );
						?>
          </nav>
        </div>
        <div class="header__col header__col--right">
          <?php
							$phone = carbon_get_theme_option('phone');
							$phone = str_replace(array('(', ')', ' ', '-'), '', $phone );
						?>
          <?php if (carbon_get_theme_option('phone')) { ?>
          <a class="phone phone--accent header__phone" href="tel:<?php echo $phone; ?>">
            <span class="phone__icon-wrap">
              <svg class="icon icon--square-phone">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#square-phone">
                </use>
              </svg>
            </span>
            <span class="phone__text"><?php echo carbon_get_theme_option('phone'); ?></span>
          </a>
          <?php } ?>
          <a class="hamburger hamburger--green hamburger--small hamburger--slider header__hamburger js-menu js-popup"
            href="#menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></a>
        </div>
      </div>
    </div>
  </header>
  <?php }  ?>