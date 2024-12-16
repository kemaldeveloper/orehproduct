<?php 
/**
 * Template name: AboutPage Template
 */
get_header(); ?>

<main class="about-page">
  <!-- Sections-->
  <section class="section section--small-header section--about-page">
    <div class="section__bg-wrap" style="background-color: #F9F6F0"></div>
    <div class="container">
      <h1 class="section__title"><?php the_title(); ?></h1>
      <ul class="breadcrumbs">
        <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="index.html">Главная</a></li>
        <li class="breadcrumbs__item breadcrumbs__item--disabled"><span class="breadcrumbs__seperator"><svg
              class="icon icon--arrow-right">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#arrow-right"></use>
            </svg></span><a class="breadcrumbs__link" href="#"><?php the_title(); ?></a></li>
      </ul>
    </div>
    <div class="about section__about">
      <div class="container about__container">
        <h2 class="about__title">Приветствуем Вас, наш дорогой покупатель!</h2>
        <div class="about__desc lg-desc">
          <p>Компания «Орехпродукт» - лидер в сфере производства ингредиентов  из орехов и полуфабрикатов из них, для
            пищевой промышленности. В своем производстве мы используем самые современные технологические методики и
            отборные сорта лучших ореховых культур благодаря чему качество произведенного сырья «Орехпродукт» не
            уступает лучшим зарубежным аналогам. Кроме того мы постоянно работаем над сохранением всех вкусовых
            характеристик и полезных свойств продукта, а закупки сырья производятся непосредственно в местах
            произрастания и возделывания культур. </p>
        </div>
        <div class="about__banner-wrap"><a class="about__play-btn" href="https://www.youtube.com/watch?v=w3AWq50hYic"
            data-fancybox><span class="about__icon-wrap"><svg class="icon icon--thin-play-icon">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#thin-play-icon">
                </use>
              </svg></span><span class="about__play-btn-text">Смотреть презентацию о компании</span></a>
          <div class="about__banner-img-wrap"><img class="about__banner-img lazy"
              src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbs/dummy-image-800x450.gif"
              data-src="<?php echo get_template_directory_uri(); ?>/assets/img/about/banner-img.png" alt=""></div>
        </div>
        <h3 class="about__lg-title">Компания производит более 100 наименований продукции из отборных орехов, а
          также выпускает готовые продукты питания под частными торговыми марками для розничных сетей. </h3>
        <div class="about__md-desc md-desc">
          <p>Внушительный технологический парк оборудования с уникальными технологическими возможностями, позволяет
            выпускать широкий ассортимент продукции, который Вы можете посмотреть на нашем сайте. Сырье отбирается по
            высоким стандартам и проходит строгий контроль качества, обязательное микробиологическое исследование,
            оформляется вся необходимая документация, подтверждающая качество продукции.</p>
          <p>Помимо наилучшего качества, в приоритете компании «Орехпродукт», стоит взаимовыгодное и долгосрочное
            партнерство, которое позволяет постоянно расширять и укреплять  деловые связи. Это надежный и ответственный
            партнер, который всегда своевременно и в полном объеме выполняет взятые на себя обязательства.</p>
        </div>
        <h4 class="about__md-title md-title">«Орехпродукт» предлагает гибкие схемы реализации продукции компании на
          территории Российской Федерации:</h4>
        <div class="row about__row">
          <div class="about__col about__col--left">
            <div class="advantages-item">
              <div class="advantages-item__ellipse">
                <div class="advantages-item__icon-wrap"><svg class="icon icon--check">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#check"></use>
                  </svg></div>
              </div>
              <div class="advantages-item__text">Сертифицированная продукция из отборного сырья</div>
            </div>
          </div>
          <div class="about__col about__col--center">
            <div class="advantages-item">
              <div class="advantages-item__ellipse">
                <div class="advantages-item__icon-wrap"><svg class="icon icon--check">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#check"></use>
                  </svg></div>
              </div>
              <div class="advantages-item__text">Индивидуальный подход, отсрочка платежа</div>
            </div>
          </div>
          <div class="about__col about__col--right">
            <div class="advantages-item">
              <div class="advantages-item__ellipse">
                <div class="advantages-item__icon-wrap"><svg class="icon icon--check">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#check"></use>
                  </svg></div>
              </div>
              <div class="advantages-item__text">Налаженная логистика по России по и ближнему зарубежью.</div>
            </div>
          </div>
        </div>
        <div class="about-gallery">
          <div class="about-gallery__wrap">
            <div class="about-gallery__content-wrap">
              <div class="about-gallery__title xl-title">Основные принципы производства</div>
              <div class="lg-desc lg-desc--roboto about-gallery__desc">Компания работает под заказ, таким образом, товар
                не складируется на складе, остатки не копятся и как итог - наши клиенты всегда получают свежую
                продукцию, с большим запасом срока  годности, а заказ и доставка осуществляется в течении всего
                нескольких дней.</div>
            </div>
            <div class="about-gallery__images">
              <div class="about-gallery__img-wrap"><img class="about-gallery__img lazy"
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbs/dummy-image-655x484.gif"
                  data-src="<?php echo get_template_directory_uri(); ?>/assets/img/about/gallery/item1.jpg" alt="">
              </div>
              <div class="about-gallery__img-wrap"><img class="about-gallery__img lazy"
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbs/dummy-image-260x356.gif"
                  data-src="<?php echo get_template_directory_uri(); ?>/assets/img/about/gallery/item2.jpg" alt="">
                <div class="about-gallery__small-desc">Применение международных стандартов качества и современных
                  технологий производства</div>
              </div>
              <div class="about-gallery__img-wrap"><img class="about-gallery__img lazy"
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbs/dummy-image-451x300.gif"
                  data-src="<?php echo get_template_directory_uri(); ?>/assets/img/about/gallery/item3.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>