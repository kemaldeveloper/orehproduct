<?php 
	$queried_object = get_queried_object(); // объект
	$term_id = $queried_object->term_id;  // ID
?>
<main class="marchpane-page">
	<!-- Sections-->
	<section class="section section--small-header section--marchpane-page">
		<div class="section__bg-wrap" style="background-color: #F9F6F0"></div>
		<div class="container">
			<h1 class="section__title">Марципановая масса</h1>
			<ul class="breadcrumbs">
				<li class="breadcrumbs__item"><a class="breadcrumbs__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a></li>
				<li class="breadcrumbs__item breadcrumbs__item--disabled"><span class="breadcrumbs__seperator"><svg class="icon icon--arrow-right"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/svg-sprite.svg#arrow-right"></use></svg></span><a class="breadcrumbs__link" href="#"><?php echo $queried_object->name ?></a></li>
			</ul>
		</div>
		<div class="marchpane section__marchpane">
			<div class="container">
				<div class="marchpane__banner-wrap">
					<div class="marchpane__img-wrap"><img class="marchpane__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/marchpane/banner-img.png" alt=""></div>
				</div>
				<h3 class="md-title md-title--accent marchpane__md-title">Марципановая начинка (масса) представляет собой универсальный полуфабрикат кремового или желтоватого цвета, с характерно выраженным ароматом и вкусом миндаля.</h3>
				<div class="marchpane__desc lg-desc">
					<p>Марципановая масса, пластичная, мягкая, легко принимающая форму, нежная на вкус и совершенно натуральная, она буквально создана для кулинарных экспериментов и украшения тортов. Воплотите в реальность любую свою марципановую мечту! Добавьте цитрусы, вишню, орешки или ароматный ликёр — получится безумно вкусно.</p>
					<p>Марципановую массу редко употребляют в чистом виде. Чаще всего продукт используют для начинок конфет, круасанов, тортов или приготовления печенья, кексов и во многих других кондитерских целях.</p>
					<p>Марципановую массу получают путем смешивания измельченных в муку миндальных орехов с сахарной пудрой или сахарным, молочным сиропом до образования однородной пластичной массы.</p>
					<p>Марципановая масса обладает полезными свойствами, не содержит глютена, и ГМО, содержит токоферол (витамин Е), помогающий в борьбе со стрессом и выполняющий функцию защиты клеток от повреждения, что приносит значительную пользу здоровью человека.</p>
				</div>
			</div>
		</div>
	</section>
</main>