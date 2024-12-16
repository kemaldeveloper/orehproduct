<?php
get_header();
$terms = get_the_terms($post->ID, 'nut_category');
$product_gallery = carbon_get_post_meta($post->ID, 'product_gallery');
$cat_link;
$cat_name;
if ($terms[0]->parent) {
	$cat_link = get_category_link( $terms[0]->parent );
	$cat_name = get_the_category_by_ID( $terms[0]->parent );
} else {
	$cat_link = get_category_link( $terms[0]->term_id );
	$cat_name = $terms[0]->name;
}
?>
	<main class="single-page">
		<!-- Sections-->
		<section class="section section--small-header section--single-page">
			<div class="section__bg-wrap" style="background-color: #F9F6F0"></div>
			<div class="container">
				<h1 class="section__title"><?php echo get_the_title(); ?></h1>
				<ul class="breadcrumbs">
					<li class="breadcrumbs__item"><a class="breadcrumbs__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a></li>
					<li class="breadcrumbs__item"><span class="breadcrumbs__seperator"><svg class="icon icon--arrow-right"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#arrow-right"></use></svg></span><a class="breadcrumbs__link" href="<?php echo $cat_link; ?>"><?php echo $cat_name; ?></a></li>
					<li class="breadcrumbs__item breadcrumbs__item--disabled"><span class="breadcrumbs__seperator"><svg class="icon icon--arrow-right"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#arrow-right"></use></svg></span><a class="breadcrumbs__link" href="#"><?php echo get_the_title(); ?></a></li>
				</ul>
				<div class="single section__content">
					<div class="single__row">
						<div class="single__col single__col--left">
							<div class="single__wrap">
								<?php if ($product_gallery){ ?>
									<div class="single__product-slider-navigation">
										<div class="product-slider-navigation owl-carousel">
											<?php foreach ($product_gallery as $product_gallery_ID): ?>
												<div class="product-slider-navigation__item">
													<div class="product-slider-navigation__img-wrap">
														<img class="product-slider-navigation__img" src="<?php echo wp_get_attachment_image_url($product_gallery_ID, 'single_post_thumb'); ?>" alt="">
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									</div>
								<?php }?>
								<div class="single__product-slider" <?php if(!$product_gallery) { ?>style="margin-left: 0;"<?php } ?>>
									<div class="product-slider owl-carousel">
										<?php if ($product_gallery){ ?>
											<?php foreach ($product_gallery as $product_gallery_ID): ?>
												<div class="product-slider__item">
													<div class="product-slider__img-wrap">
														<img class="product-slider__img" src="<?php echo wp_get_attachment_image_url($product_gallery_ID, 'single_post_thumb'); ?>" alt="">
													</div>
												</div>
											<?php endforeach; ?>
										<?php } else { ?>
											<div class="product-slider__item">
												<div class="product-slider__img-wrap">
													<img class="product-slider__img" src="<?php echo get_the_post_thumbnail_url($post->ID, 'single_post_thumb') ?>" alt="">
												</div>
											</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
						<div class="single__col single__col--right">
							<?php
								$product_informations = [
									'Состав:'													 => carbon_get_post_meta($post->ID, 'product_compositon'),
									'Внешний вид:'										 => carbon_get_post_meta($post->ID, 'product_appearance'),
									'Размер:'													 => carbon_get_post_meta($post->ID, 'product_size'),
									'Цвет:'														 => carbon_get_post_meta($post->ID, 'product_color'),
									'Пищевая, энергетическая ценность' => carbon_get_post_meta($post->ID, 'product_nutritional'),
									'Вид упаковки:'										 => carbon_get_post_meta($post->ID, 'product_type'),
									'Срок годности:'									 => carbon_get_post_meta($post->ID, 'product_life'),
									'Условия хранения:'								 => carbon_get_post_meta($post->ID, 'product_storage'),
								];
							?>
							<div class="info-list single__info-list">
								<?php foreach ($product_informations as $product_information => $value): ?>
									<?php if($value): ?>
										<div class="info-list__row">
											<div class="info-list__title"><?php echo $product_information; ?></div>
											<div class="info-list__value"><?php echo $value; ?></div>
										</div>
									<?php endif; ?>
								<?php endforeach; ?>
							</div>
							<div class="single__btn-wrap"><a class="btn btn--small single__order-btn js-popup" href="#order-popup"><span class="btn__icon-wrap"><svg class="icon icon--papers"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#papers"></use></svg></span><span class="btn__text">Заказать образец</span></a><a class="trs-btn trs-btn--small single__offer-btn js-popup" href="#ask-popup"><span class="trs-btn__icon-wrap"><svg class="icon icon--order"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#order"></use></svg></span><span class="trs-btn__text">Получить предложение</span></a></div>
						</div>
					</div>
					<?php the_post(); if(get_the_content()) : ?>
						<h2 class="single__section-title">Описание товара</h2>
						<div class="single__desc">
							<?php the_content(); ?>
						</div>
					<?php endif; ?>
					<?php
						$args = array(
							'post_type' => 'products',
							'post__not_in'=>array($post->ID),
							'tax_query' => array(
								array(
									'taxonomy' => 'nut_category',
									'field' => 'id',
									'terms' => $terms[0]->term_id
								),
							),
						);
						$nut = new WP_Query($args);
						?>
					<?php if ( $nut->have_posts() ) : ?>
						<h2 class="single__section-title">Товары в категории</h2>
						<div class="category-slider owl-carousel">
							<?php while ( $nut->have_posts() ) : $nut->the_post(); ?>
							<?php
									$thumbnail_id = get_post_thumbnail_id( get_the_ID() );
									$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
							?>
							<div class="product-item category-slider__item">
								<div class="product-item__img-wrap">
									<img class="product-item__img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>" title="<?php echo $alt; ?>">
								</div>
								<a class="trs-btn trs-btn--small product-item__link" href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
							</div>
							<?php endwhile; ?>
						</div>
					<?php endif; wp_reset_postdata();  ?>
				</div>
			</div>
		</section>
	</main>
<?php get_footer(); ?>