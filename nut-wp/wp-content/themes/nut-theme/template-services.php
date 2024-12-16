<?php 
/**
 * Template name: ServicesPage Template
 */
get_header(); ?>
	<main class="services-page">
		<!-- Sections-->
		<section class="section section--small-header section--services-page">
			<div class="section__bg-wrap" style="background-color: #F9F6F0"></div>
			<div class="container">
				<h1 class="section__title"><?php the_title(); ?></h1>
				<ul class="breadcrumbs">
					<li class="breadcrumbs__item"><a class="breadcrumbs__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a></li>
					<li class="breadcrumbs__item breadcrumbs__item--disabled"><span class="breadcrumbs__seperator"><svg class="icon icon--arrow-right"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#arrow-right"></use></svg></span><a class="breadcrumbs__link" href="#"><?php the_title(); ?></a></li>
				</ul>
			</div>
			<div class="services section__services">
				<div class="services-parallax">
					<div class="services-parallax__item services-parallax__item--left-img1"><img class="services-parallax__img lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/services/parallax-left-item1.png" alt=""></div>
					<div class="services-parallax__item services-parallax__item--left-img2"><img class="services-parallax__img lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/services/parallax-left-item2.png" alt=""></div>
					<div class="services-parallax__item services-parallax__item--right-img"><img class="services-parallax__img lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/services/parallax-right-item.png" alt=""></div>
				</div>
				<div class="container">
					<div class="services__lg-desc lg-desc">
						<p><?php the_post(); the_content(); ?></p>
					</div>
					<div class="services__small-title">Полный список услуг:</div>
					<div class="services-info">
						<div class="services-info__row">
							<div class="services-info__col services-info__col--left">
								<div class="services-info__img-wrap"><img class="services-info__img lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/services/item1.png" alt=""><img class="services-info__img services-info__img--mobile lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/services/item-mobile1.png" alt=""></div>
							</div>
							<div class="services-info__col services-info__col--right">
								<div class="services-info__title">Изготовление продукции <br>по индивидуальным рецептам</div>
								<div class="services-benefits">
									<div class="services-benefits__item">
										<div class="services-benefits__icon-wrap"><svg class="icon icon--square-check">
												<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#square-check"></use>
											</svg></div>
										<div class="services-benefits__text">Изготовление кремов, паст и начинок.</div>
									</div>
									<div class="services-benefits__item">
										<div class="services-benefits__icon-wrap"><svg class="icon icon--square-check">
												<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#square-check"></use>
											</svg></div>
										<div class="services-benefits__text">Изготовление, упаковка, маркировка продукции, сертификация.</div>
									</div>
									<div class="services-benefits__item">
										<div class="services-benefits__icon-wrap"><svg class="icon icon--square-check">
												<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#square-check"></use>
											</svg></div>
										<div class="services-benefits__text">Изысканные пасты и начинки по индивидуальным рецептам, <br>разработка рецептуры по вашим заказам с нашими технологами.</div>
									</div>
								</div>
							</div>
						</div>
						<div class="services-info__row services-info__row--reverse">
							<div class="services-info__col services-info__col--left">
								<div class="services-info__img-wrap"><img class="services-info__img lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/services/item2.png" alt=""><img class="services-info__img services-info__img--mobile lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/services/item-mobile2.png" alt=""></div>
							</div>
							<div class="services-info__col services-info__col--right">
								<div class="services-info__title">Переработка фруктов/ягод, <br>создание эксклюзивных миксов <br>по вашим рецептам</div>
								<div class="services-benefits">
									<div class="services-benefits__item">
										<div class="services-benefits__icon-wrap"><svg class="icon icon--square-check">
												<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#square-check"></use>
											</svg></div>
										<div class="services-benefits__text">Изготовление, упаковка, маркировка продукции, заморозка.</div>
									</div>
									<div class="services-benefits__item">
										<div class="services-benefits__icon-wrap"><svg class="icon icon--square-check">
												<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#square-check"></use>
											</svg></div>
										<div class="services-benefits__text">Ягодные и фруктовые пюре.</div>
									</div>
									<div class="services-benefits__item">
										<div class="services-benefits__icon-wrap"><svg class="icon icon--square-check">
												<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#square-check"></use>
											</svg></div>
										<div class="services-benefits__text">Пюре из экзотических фруктов.</div>
									</div>
									<div class="services-benefits__item">
										<div class="services-benefits__icon-wrap"><svg class="icon icon--square-check">
												<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#square-check"></use>
											</svg></div>
										<div class="services-benefits__text">Пюре Микс (сочетание различных фруктов и ягод по вашей рецептуре).</div>
									</div>
								</div>
							</div>
						</div>
						<div class="services-info__row">
							<div class="services-info__col services-info__col--left">
								<div class="services-info__img-wrap"><img class="services-info__img lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/services/item3.png" alt=""><img class="services-info__img services-info__img--mobile lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/services/item-mobile3.png" alt=""></div>
							</div>
							<div class="services-info__col services-info__col--right">
								<div class="services-info__title">Переработка ореховой группы</div>
								<div class="services-benefits">
									<div class="services-benefits__item">
										<div class="services-benefits__icon-wrap"><svg class="icon icon--square-check">
												<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#square-check"></use>
											</svg></div>
										<div class="services-benefits__text">Бланширование орехов (миндаля фундука, фисташки, арахиса и тд.).</div>
									</div>
									<div class="services-benefits__item">
										<div class="services-benefits__icon-wrap"><svg class="icon icon--square-check">
												<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#square-check"></use>
											</svg></div>
										<div class="services-benefits__text">Дробление (измельчение по фракциям: 1-2мм, 2-4мм, 3-5мм, 5-7мм).</div>
									</div>
									<div class="services-benefits__item">
										<div class="services-benefits__icon-wrap"><svg class="icon icon--square-check">
												<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#square-check"></use>
											</svg></div>
										<div class="services-benefits__text">Создание дробленых миксов из смеси орехов</div>
									</div>
									<div class="services-benefits__item">
										<div class="services-benefits__icon-wrap"><svg class="icon icon--square-check">
												<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#square-check"></use>
											</svg></div>
										<div class="services-benefits__text">Измельчение по фракциям и смешивание (1-2мм, 2-4мм, 3-5мм, 5-7мм).</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
<?php get_footer(); ?>