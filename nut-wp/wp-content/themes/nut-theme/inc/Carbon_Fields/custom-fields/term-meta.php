<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('term_meta', 'Term Settings')
	->show_on_taxonomy('nut_category')
	->show_on_level(1)
	->add_tab('Настройка категорий', [
    Field::make('checkbox', 'category_switch_checkbox', 'Скрыть категорию')
      ->set_default_value(false)
      ->help_text('Включите галочку если хотите скрыть категорию из меню каталога и из главной страницы'),
    Field::make('text', 'category_modify', 'Модификатор категорий')
			->help_text('<p><b>Не меняйте модификатор</b></p>'),
    Field::make('text', 'catalog_presentation_video_link', 'Ссылка на ютуб или vimeo'),
		])
	->add_tab('Настройки каталог попапа',[
		Field::make('image', 'thumb', 'Картинка в попапе'),
		Field::make('text', 'catalog_item_modify', 'Модификатор')
			->help_text('<p><b>Не меняйте модификатор</b></p>'),
		])
	->add_tab('Настройки страниц категорий',[
		Field::make('image', 'category_bg_img', 'Картинка фона категории'),
		Field::make('color', 'category_bg_color', 'Цвет фона категории'),
		Field::make('select', 'catalog_column_count', 'Количество колонок продуктов')
			->add_options([
				'big' => 'В 3 колонки',
				'small' => 'В 4 колонки'
			])
			->set_default_value('big')
			->help_text('Объязательно указывайте количество колонок'),
		]);

Container::make('term_meta', 'Term Paste Page Settings')
	->where( 'term', '=', array(
		'field'          => 'id',
		'value'        => '14',
		'taxonomy' => 'nut_category',
	 ) )
	->add_tab('Настройка заголовков',[
		Field::make('text', 'title_top', 'Верхний загаловок'),
		Field::make('text', 'title_bottom', 'Нижний заголовок'),
		])
	->add_tab('Баннер бурбон',[
		Field::make('text', 'title_bourbon', 'Заголовок баннера'),
		Field::make('image', 'img_bourbon', 'Картинка баннера'),
		])
	->add_tab('Баннер пасты',[
		Field::make('text', 'title_banner_paste', 'Заголовок баннера'),
		Field::make('textarea', 'desc_banner_paste', 'Заголовок баннера'),
		Field::make('image', 'img_banner_paste', 'Картинка баннера'),
		]);

Container::make('term_meta', 'Term Chopped Nuts Page Settings')
	->where( 'term', '=', array(
		'field'          => 'id',
		'value'        => '18',
		'taxonomy' => 'nut_category',
	 ) )
	->add_fields([
		Field::make('text', 'title_top', 'Верхний загаловок'),
		Field::make('text', 'title_bottom', 'Нижний заголовок'),
		]);

Container::make('term_meta', 'Term Flour Page Settings')
	->where( 'term', '=', array(
		'field'          => 'id',
		'value'        => '12',
		'taxonomy' => 'nut_category',
	 ) )
	->add_fields([
		Field::make('image', 'flour_banner_img', 'Картинка баннера'),
		Field::make('image', 'flour_banner_mobile_img', 'Картинка баннера для мобилки'),
		])
?>