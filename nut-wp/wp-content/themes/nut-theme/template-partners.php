<?php 
/**
 * Template name: PartnersPage Template
 */
get_header(); ?>

	<main class="partners-page">
		<!-- Sections-->
		<section class="section section--small-header section--partners-page">
			<div class="section__bg-wrap" style="background-color: #F9F6F0"></div>
			<div class="container">
				<h1 class="section__title"><?php the_title(); ?></h1>
				<ul class="breadcrumbs">
					<li class="breadcrumbs__item"><a class="breadcrumbs__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a></li>
					<li class="breadcrumbs__item breadcrumbs__item--disabled"><span class="breadcrumbs__seperator"><svg class="icon icon--arrow-right"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#arrow-right"></use></svg></span><a class="breadcrumbs__link" href="#"><?php the_title(); ?></a></li>
				</ul>
			</div>
			<div class="partners section__partners">
				<div class="container">
					<div class="partners__lg-desc lg-desc">
						<p><?php the_post(); the_content(); ?></p>
					</div>
					<div class="partners__wrap">
						<div class="info-item partners__info-item">
							<div class="info-item__row info-item__row--normal">
								<div class="info-item__col info-item__col--img">
									<div class="info-item__img-wrap info-item__img-wrap--long"><img class="info-item__img lazy" src="<?php echo get_template_directory_uri(); ?>/assets/thumbs/dummy-image-550x600.gif" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/item1.jpg" alt=""></div>
								</div>
								<div class="info-item__col info-item__col--content">
									<div class="info-item__content-wrap">
										<div class="info-item__title">Дистрибуция</div>
										<div class="info-item__desc">
											<p>Мы открыты для сотрудничества и предлагаем <br>удобные схемы реализации продукции нашего завода <br>на территории РФ.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="info-item partners__info-item">
							<div class="info-item__row info-item__row--reverse">
								<div class="info-item__col info-item__col--img">
									<div class="info-item__img-wrap info-item__img-wrap--short"><img class="info-item__img lazy" src="<?php echo get_template_directory_uri(); ?>/assets/thumbs/dummy-image-550x356.gif" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/item2.jpg" alt=""></div>
								</div>
								<div class="info-item__col info-item__col--content">
									<div class="info-item__content-wrap">
										<div class="info-item__title">Розничным сетям</div>
										<div class="info-item__desc">
											<p>Наша компания приглашает к сотрудничеству все заинтересованные организации. Политика нашей компании направлена на то, чтобы сделать партнерство с нами максимально комфортным и выгодным для Вас.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="info-item partners__info-item">
							<div class="info-item__row info-item__row--normal">
								<div class="info-item__col info-item__col--img">
									<div class="info-item__img-wrap info-item__img-wrap--short"><img class="info-item__img lazy" src="<?php echo get_template_directory_uri(); ?>/assets/thumbs/dummy-image-550x600.gif" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/item3.jpg" alt=""></div>
								</div>
								<div class="info-item__col info-item__col--content">
									<div class="info-item__content-wrap">
										<div class="info-item__title">Оптовая торговля сырьем</div>
										<div class="info-item__desc">
											<p>В компании действует БОНУСНАЯ СИСТЕМА и СКИДКИ для постоянных клиентов и крупнооптовых <br>покупателей.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="info-item partners__info-item">
							<div class="info-item__row info-item__row--reverse">
								<div class="info-item__col info-item__col--img">
									<div class="info-item__img-wrap info-item__img-wrap--long"><img class="info-item__img lazy" src="<?php echo get_template_directory_uri(); ?>/assets/thumbs/dummy-image-550x356.gif" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/item4.jpg" alt=""></div>
								</div>
								<div class="info-item__col info-item__col--content">
									<div class="info-item__content-wrap">
										<div class="info-item__title">Фасовка, производство СТМ</div>
										<div class="info-item__desc">
											<p>Важным направлением деятельности нашей компании является производство собственных торговых марок. Речь идет о производстве и фасовке под СТМ: муки, лепестков, пралине, паст.</p>
										</div>
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