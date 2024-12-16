<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Theme options')
	->add_tab('Общие настройки', array(
		Field::make('text', 'phone', 'Телефон'),
		Field::make('text', 'email', 'Email'),
		Field::make('text', 'address', 'Адрес'),
		Field::make('text', 'worktime', 'Часы работы'),
		Field::make('header_scripts', 'header_google_analytics', 'Код счетчика Google Analytics')
			->help_text('Вставьте скрипт от Гугла сюда'),
		Field::make('header_scripts', 'header_yandex_metrics', 'Код счетчика Яндекс метрики')
			->help_text('Вставьте скрипт от Яндекса сюда'),
	))
	->add_tab('Социальные сети', array(
    Field::make( 'complex', 'nut_theme_social_list', __('Социальные сети'))
    ->add_fields( array(
      Field::make( 'image', 'nut_theme_social_icon', __('Иконка'))
        ->set_required(),
      Field::make( 'text', 'nut_theme_social_url', __('URL'))
        ->set_required(),
      Field::make( 'checkbox', 'show_social_link', __('Показать'))
        ->set_option_value('yes')
        ->set_default_value(true)
    ) )
	))
?>