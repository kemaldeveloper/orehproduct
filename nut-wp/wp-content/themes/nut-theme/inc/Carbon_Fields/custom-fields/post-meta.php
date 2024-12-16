<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Product Settings')
	->show_on_post_type('products')
	->add_tab('Дополнительная информация о товаре', [
		Field::make('text', 'product_compositon', 'Состав')
			->help_text('Напишите состав продукта'),
		Field::make('text', 'product_appearance', 'Внешний вид')
			->help_text('Опишите внешний вид продукта'),
		Field::make('text', 'product_size', 'Размер')
			->help_text('Напишите размер продукта'),
		Field::make('text', 'product_color', 'Цвет')
			->help_text('Напишите цвет продукта'),
		Field::make('text', 'product_nutritional', 'Пищевая, энергетическая ценность')
			->help_text('Напишите пищевую и энергетическую ценность продукта'),
		Field::make('text', 'product_type', 'Вид упаковки')
			->help_text('Опишите вид упаковки продукта'),
		Field::make('text', 'product_life', 'Срок годности')
			->help_text('Напишите срок годности продукта'),
		Field::make('text', 'product_storage', 'Условия хранения')
			->help_text('Напишите информацию об условии хранени продукта'),
		Field::make('checkbox', 'product_popup_switcher', 'Включить попап')
			->set_default_value(false)
			->help_text('Включите попап если информация продукта отсутствует'),
		])
	->add_tab('Медиафайлы продукта', [
		Field::make( 'media_gallery', 'product_gallery', 'Галерея' )
			->set_type( array('image', 'video') )
		]);

Container::make('post_meta', 'Hover Image')
	->show_on_post_type('products')
	->show_on_taxonomy_term('speczii', 'nut_category')
	->add_fields([
		Field::make('image', 'product_hover_img', 'Картинка для ховера')
			->help_text('Выберете картинку для ховера'),
		]);

Container::make('post_meta', 'Контакты дополнительные поля')
	->show_on_template('template-contacts.php')
  ->add_tab('Контакты', array(
    Field::make('text', 'managers_label', 'Label блока менеджеры')
			->help_text('Напишите label блока менеджеры'),
    Field::make( 'complex', 'contact_items', __( 'Менеджеры' ) )
      ->add_fields( array(
          Field::make( 'text', 'contact_name', __( 'Имя' ) ),
          Field::make( 'text', 'contact_phone', __( 'Телефон' ) ),
          Field::make( 'text', 'contact_email', __( 'Email' ) ),
      ) )
  ))
  ->add_tab('Настройки страницы', array(
    Field::make('text', 'contacts_page_map_cords_lat', 'Широта')
			->help_text('Добавьте широту'),
    Field::make('text', 'contacts_page_map_cords_long', 'Долгота')
			->help_text('Добавьте долготу'),
  ));