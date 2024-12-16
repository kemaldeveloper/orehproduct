<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package nut-theme
 */

get_header();
?>

	<main class="404-page">
		<section class="section section--small-header section--404-page">
			<div class="section__bg-wrap" style="background-color: #F9F6F0"></div>
			<div class="container">
				<div class="section-404">
					<h1 class="section-404__title">404</h1>
					<div class="section-404__small-desc">Страница не найдена.</div><a class="btn section-404__btn" href="<?php echo esc_url( home_url( '/' ) ); ?>">На главную</a>
				</div>
			</div>
		</section>
	</main>

<?php
get_footer();
